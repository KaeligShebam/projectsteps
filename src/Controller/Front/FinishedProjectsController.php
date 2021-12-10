<?php

namespace App\Controller\Front;

use App\Repository\StepsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

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

}
