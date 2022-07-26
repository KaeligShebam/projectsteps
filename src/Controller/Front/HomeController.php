<?php

namespace App\Controller\Front;


use App\Entity\Steps;
use App\Repository\StepsRepository;
use Symfony\Component\Mime\Address;
use App\Repository\CustomerRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class HomeController extends AbstractController
{
    private $entityManager;
    public function __construct(EntityManagerInterface $entityManager, MailerInterface $mailer, CustomerRepository $customerRepository)
    {
        $this->entityManager = $entityManager;
        $this->mailer = $mailer;
        $this->customerRepository = $customerRepository;
    }

    private $mailer;
    /**
     * @var CustomerRepository
     */

    /**
     * @Route("/", name="home")
     */
    public function index(StepsRepository $steps, AuthenticationUtils $authenticationUtils): Response
    {

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('front/home/index.html.twig', [
            'steps' => $steps->findBy(array(), array('customer' => 'DESC')),
            'last_username' => $lastUsername,
            'error' => $error
        ]);
    }


    /**
     * @Route("/reorder", name="home_reorder_row")
     */
    public function reorderTaskP1Row(Request $request, StepsRepository $stepsRow)
    {
        $cpt = 0;
        switch ($request->request->get("context")) {
            case '1':
                foreach (json_decode($request->request->get("table"), true /* est-ce que je veux un tableau assoc oui (par défaut false) */) as $row) {
                    $task = $stepsRow->find($row['id']); //on récupère la task
                    $task->setPosition($cpt); //on definit la position
                    $cpt++; //on ajoute une rangée
                }
                break;
        }

        $this->entityManager->flush();
        return new JsonResponse([
            'data' => gettype($request->request->get("context"))
        ]);
    }

    /**
     * @Route("/basculer-vers-projets-finis/id={id}", name="tofinishedprojects")
     */
    public function ChangeStepsForFinishProjectsFront(Steps $steps): Response
    {
        $rep = $this->getDoctrine()
            ->getRepository(Steps::class)
            ->setChangeStepsForFinishProjectsFront($steps->getId());

        return $this->redirectToRoute("home");
    }

    /**
     * @Route("/projet/mail/id={id}", name="mailfinish")
     */
    public function sendMail(Steps $step): Response
    {
        $message = (new  TemplatedEmail())
            ->to('julien@camdsi.fr')
            ->from(new Address('support@shebam.fr', 'Support WEB Shebam'))
            ->cc('support@shebam.fr')
            ->subject('Site Internet Fini')
            ->htmlTemplate('front/mail/mail-project.html.twig')
            ->context([
                'step' => $step
            ]);
        $this->mailer->send($message);

        return $this->redirectToRoute("home");
    }

    /**
     * @Route("/deconnexion", name="app_logout")
     */
    public function logout()
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}