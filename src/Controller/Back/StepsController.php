<?php

namespace App\Controller\Back;

use App\Entity\Steps;
use App\Repository\UserRepository;
use App\Repository\StepsRepository;
use App\Form\Back\Steps\AddStepsType;
use App\Form\Back\Steps\ModifyStepsType;
use App\Repository\CustomerRepository;
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
            'steps' => $steps->findAll(),
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
     * @Route("/admin/etapes-projets/modifier/{id}", name="steps_modify_admin")
     */
    public function stepsModify(Request $request, Steps $stepsModify): Response
    {
        $notication = null;
        $form = $this->createForm(ModifyStepsType::class, $stepsModify);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $stepsModify = $form->getData();
            $this->entityManager->persist($stepsModify);
            $this->entityManager->flush();
            $notication = "Étape bien mise à jour";
        }
        return $this->render('back/steps/modify.html.twig', [
            'form_steps_modify_admin' => $form->createView(),
            'notification' => $notication
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
     * @Route("/admin/etapes-projets/brief-client/{id}", name="steps_customerbrief_checkbox_admin")
     */
    public function stepsCustomerbrief(Steps $stepsCustomerbrief)
    {
        $stepsCustomerbrief->setCustomerbrief(($stepsCustomerbrief->getCustomerbrief())? false : true);

        $em = $this->getDoctrine()->getManager();
        $em->persist($stepsCustomerbrief);
        $em->flush();

        return new Response("true");
    }

    /**
     * @Route("/admin/etapes-projets/coming-soon/{id}", name="steps_comingsoon_checkbox_admin")
     */
    public function stepsComingsoon(Steps $stepsComingsoon)
    {
        $stepsComingsoon->setComingsoon(($stepsComingsoon->getComingsoon()) ? false : true);

        $em = $this->getDoctrine()->getManager();
        $em->persist($stepsComingsoon);
        $em->flush();

        return new Response("true");
    }

    /**
     * @Route("/admin/etapes-projets/reception-contenu-client/{id}", name="steps_customercontentreception_checkbox_admin")
     */
    public function stepsCustomerContentReception(Steps $stepsCustomercontentreception)
    {
        $stepsCustomercontentreception->setCustomercontentreception(($stepsCustomercontentreception->getCustomercontentreception()) ? false : true);

        $em = $this->getDoctrine()->getManager();
        $em->persist($stepsCustomercontentreception);
        $em->flush();

        return new Response("true");
    }

    /**
     * @Route("/admin/etapes-projets/reception-des-photos/{id}", name="steps_picturesreception_checkbox_admin")
     */
    public function stepsPictureReception(Steps $stepsPicturesreception)
    {
        $stepsPicturesreception->setPicturesreception(($stepsPicturesreception->getPicturesreception()) ? false : true);

        $em = $this->getDoctrine()->getManager();
        $em->persist($stepsPicturesreception);
        $em->flush();

        return new Response("true");
    }

    /**
     * @Route("/admin/etapes-projets/maquette-en-cours/{id}", name="steps_webdesignprogress_checkbox_admin")
     */
    public function stepsWebdesignProgress(Steps $stepWebdesignProgress)
    {
        $stepWebdesignProgress->setWebdesignprogress(($stepWebdesignProgress->getWebdesignprogress()) ? false : true);

        $em = $this->getDoctrine()->getManager();
        $em->persist($stepWebdesignProgress);
        $em->flush();

        return new Response("true");
    }

    /**
     * @Route("/admin/etapes-projets/maquette-en-attente/{id}", name="steps_webdesignwait_checkbox_admin")
     */
    public function stepsWebdesignWait(Steps $stepWebdesignWait)
    {
        $stepWebdesignWait->setWebdesignwait(($stepWebdesignWait->getWebdesignwait()) ? false : true);

        $em = $this->getDoctrine()->getManager();
        $em->persist($stepWebdesignWait);
        $em->flush();

        return new Response("true");
    }

    /**
     * @Route("/admin/etapes-projets/maquette-validee/{id}", name="steps_webdesignvalidated_checkbox_admin")
     */
    public function stepsWebdesignValidated(Steps $stepWebdesignValidated)
    {
        $stepWebdesignValidated->setWebdesignvalidated(($stepWebdesignValidated->getWebdesignvalidated()) ? false : true);

        $em = $this->getDoctrine()->getManager();
        $em->persist($stepWebdesignValidated);
        $em->flush();

        return new Response("true");
    }

    /**
     * @Route("/admin/etapes-projets/integration/{id}", name="steps_integration_checkbox_admin")
     */
    public function stepsIntegration(Steps $stepWebintegration)
    {
        $stepWebintegration->setWebintegration(($stepWebintegration->getWebintegration()) ? false : true);

        $em = $this->getDoctrine()->getManager();
        $em->persist($stepWebintegration);
        $em->flush();

        return new Response("true");
    }

    /**
     * @Route("/admin/etapes-projets/formation/{id}", name="steps_webtraining_checkbox_admin")
     */
    public function stepsWbeTraining(Steps $stepWebtraining)
    {
        $stepWebtraining->setWebTraining(($stepWebtraining->getWebtraining()) ? false : true);

        $em = $this->getDoctrine()->getManager();
        $em->persist($stepWebtraining);
        $em->flush();

        return new Response("true");
    }

}
