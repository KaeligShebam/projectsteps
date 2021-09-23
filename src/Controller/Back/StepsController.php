<?php

namespace App\Controller\Back;

use App\Entity\Steps;
use App\Repository\StepsRepository;
use App\Form\Back\Steps\AddStepsType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class StepsController extends AbstractController
{
    private $entityManager;
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    /**
     * @Route("/admin/etapes-projets", name="steps_list_admin")
     */
    public function index(StepsRepository $steps): Response
    {
        return $this->render('back/steps/list.html.twig', [
            'steps' => $steps->findAll()
        ]);
    }
    /**
     * @Route("/admin/etapes-projets/ajouter", name="steps_add_admin")
     */
    public function stepsAdd(Request $request, StepsRepository $stepsAdd): Response
    {
        $stepsAdd = new Steps();
        $form = $this->createForm(AddStepsType::class, $stepsAdd);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->persist($stepsAdd);
            $this->entityManager->flush();
            return $this->redirectToRoute("steps_list_admin");
        }
        return $this->render('back/steps/add.html.twig', [
            'form_steps_add_admin' => $form->createView()
        ]);
    }

    /**
     * @Route("/admin/etapes-projets/{id}/supprimer", name="steps_detete_admin")
     * @param Steps $stepsDelete
     * return RedirectResponse
     */
    public function stepsDelete(Steps $stepsDelete): RedirectResponse
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($stepsDelete);
        $em->flush();

        return $this->redirectToRoute("steps_list_admin");
    }

    /**
     * @Route("/admin/etapes-projets/quote/{id}", name="steps_quote_checkbox_admin")
     */
    public function stepsActivate(Steps $stepsActivate)
    {
        $stepsActivate->setQuote(($stepsActivate->getQuote())?false:true);

        $em = $this->getDoctrine()->getManager();
        $em->persist($stepsActivate);
        $em->flush();

        return new Response("true");
    }

    /**
     * @Route("/admin/etapes-projets/test/{id}", name="test_activate_admin")
     */
    public function stepsTestActivate(Steps $stepsTestActivate)
    {
        $stepsTestActivate->setTest(($stepsTestActivate->getTest()) ? false : true);

        $em = $this->getDoctrine()->getManager();
        $em->persist($stepsTestActivate);
        $em->flush();

        return new Response("true");
    }
}
