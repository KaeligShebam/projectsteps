<?php

namespace App\Controller\Back;

use App\Entity\Steps;
use App\Repository\StepsRepository;
use App\Form\Back\Steps\AddStepsType;
use App\Form\Back\Steps\ModifyStepsType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class StepsController extends AbstractController
{
    private $entityManager;
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    /**
     * @Route("/admin/projets-clients", name="steps_list_admin")
     */
    public function index(StepsRepository $steps): Response
    {
        return $this->render('back/steps/list.html.twig', [
            'steps' => $steps->findBy(array(), array('customer'=>'DESC')),
        ]);
    }
    /**
     * @Route("/admin/projets-clients/ajouter", name="steps_add_admin")
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
     * @Route("/admin/projets-clients/modifier/{id}", name="steps_modify_admin")
     */
    public function stepsModify(Request $request, Steps $stepsModify): Response
    {
        $form = $this->createForm(ModifyStepsType::class, $stepsModify);
        $notication = null;
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $stepsModify = $form->getData();
            $this->entityManager->persist($stepsModify);
            $this->entityManager->flush();
            $notication = "Le projet client a été mise à jour";
            $stepsModify = new Steps();
            $stepsModify = $form->getData($stepsModify);
            $form = $this->createForm(ModifyStepsType::class, $stepsModify);
        }
        return $this->render('back/steps/modify.html.twig', [
            'form_steps_modify_admin' => $form->createView(),
            'notification' => $notication,
            'step' => $stepsModify
        ]);
    }

    /**
     * @Route("/admin/projets-clients/{id}/supprimer", name="steps_detete_admin")
     * @param Steps $stepsDelete
     * return RedirectResponse
     */
    public function stepsDeleteAdmin(Steps $stepsDelete): RedirectResponse
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($stepsDelete);
        $em->flush();

        return $this->redirectToRoute("steps_list_admin");
    }

    /**
     * @Route("/projets-clients/supprimer/{id}", name="steps_detete_front")
     * @param Steps $stepsDelete
     * return RedirectResponse
     */
    public function stepsDeleteFront(Steps $stepsDelete): RedirectResponse
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($stepsDelete);
        $em->flush();

        return $this->redirectToRoute("home");
    }

    /**
     * @Route("/admin/projets-clients/brief-client/{id}", name="steps_customerbrief_checkbox_admin")
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
     * @Route("/admin/projets-clients/coming-soon/{id}", name="steps_comingsoon_checkbox_admin")
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
     * @Route("/admin/projets-clients/reception-contenu-client/{id}", name="steps_customercontentreception_checkbox_admin")
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
     * @Route("/admin/projets-clients/reception-des-photos/{id}", name="steps_picturesreception_checkbox_admin")
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
     * @Route("/admin/projets-clients/maquette-en-cours/{id}", name="steps_webdesignprogress_checkbox_admin")
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
     * @Route("/admin/projets-clients/maquette-envoyee/{id}", name="steps_webdesignsend_checkbox_admin")
     */
    public function stepsWebdesignWait(Steps $stepWebdesignSend)
    {
        $stepWebdesignSend->setWebdesignSend(($stepWebdesignSend->getWebdesignSend()) ? false : true);

        $em = $this->getDoctrine()->getManager();
        $em->persist($stepWebdesignSend);
        $em->flush();

        return new Response("true");
    }

    /**
     * @Route("/admin/projets-clients/maquette-validee/{id}", name="steps_webdesignvalidated_checkbox_admin")
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
     * @Route("/admin/projets-clients/nom-de-domaine/{id}", name="steps_domainname_checkbox_admin")
     */
    public function stepsWDomainName(Steps $stepDomainname)
    {
        $stepDomainname->SetDomainname(($stepDomainname->getDomainname()) ? false : true);

        $em = $this->getDoctrine()->getManager();
        $em->persist($stepDomainname);
        $em->flush();

        return new Response("true");
    }

    /**
     * @Route("/admin/projets-clients/integration/{id}", name="steps_integration_checkbox_admin")
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
     * @Route("/admin/projets-clients/formation/{id}", name="steps_webtraining_checkbox_admin")
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
