<?php

namespace App\Controller\Front;

use App\Entity\Steps;
use App\Repository\StepsRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FinishedProjectsController extends AbstractController
{
    /**
     * @Route("/projets-finis", name="finishedprojects")
     */
    public function index2(StepsRepository $steps)
    {
        return $this->render('front/finish/index.html.twig', [
            'steps' => $steps->findBy(array(), array('finished' => 'DESC')),
        ]);
    }

    /**
     * @Route("/basculer-vers-projets-en-cours/id={id}", name="toinprogressproject")
     */
    public function ChangeStepsForInProgressProjectsFront(Steps $steps): Response
    {
        $rep = $this->getDoctrine()
            ->getRepository(Steps::class)
            ->setChangeStepsForInProgressProjectsFront($steps->getId());

        return $this->redirectToRoute("finishedprojects");
    }

}
