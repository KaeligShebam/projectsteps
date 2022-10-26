<?php

namespace App\Controller\Front;

use App\Entity\Website;
use App\Repository\WebsiteRepository;

use App\Form\Back\Steps\AddWebsiteType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class WebsitesController extends AbstractController
{
    private $entityManager;
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/sites-internet-clients", name="websites")
     */
    public function index(WebsiteRepository $website): Response
    {

        return $this->render('front/websites/index.html.twig', [
            'websites' => $website->findAll()
        ]);
    }

    /**
     * @Route("/sites-internet-clients/ajouter", name="website_add_front")
     */
    public function stepsAdd(Request $request): Response
    {
        $stepsAdd = new Website();
        $form = $this->createForm(AddWebsiteType::class, $stepsAdd);
        $notification = null;
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->persist($stepsAdd);
            $this->entityManager->flush();
            $stepsAdd = new Website();
            $form = $this->createForm(AddWebsiteType::class, $stepsAdd);
        }
        return $this->render('front/websites/add.html.twig', [
            'form_website_add_front' => $form->createView()

        ]);
    }

    /**
     * @Route("/sites-internet-clients/{id}/supprimer", name="websites_detete_front")
     * @param Steps $stepsDelete
     * return RedirectResponse
     */
    public function websitesDeleteAdmin(Website $website_delete): RedirectResponse
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($website_delete);
        $em->flush();

        return $this->redirectToRoute("websites");
    }

}