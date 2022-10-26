<?php

namespace App\Controller\Front;

use App\Entity\Website;
use App\Repository\WebsiteRepository;

use App\Form\Front\AddWebsiteType;
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
        $websiteAdd = new Website();
        $form = $this->createForm(AddWebsiteType::class, $websiteAdd);
        $notification = null;
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->persist($websiteAdd);
            $this->entityManager->flush();
            $websiteAdd = new Website();
            $form = $this->createForm(AddWebsiteType::class, $websiteAdd);
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