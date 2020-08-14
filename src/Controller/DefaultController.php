<?php


namespace App\Controller;


use App\Entity\PlanningPokerParticipants;
use App\Entity\PlanningPokerSession;
use App\Services\PlanningPokerService;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use DateTime;
use DateInterval;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends AbstractController
{
    /** @var PlanningPokerService */
    private $planningPokerService;

    /** @var EntityManager */
    private $entityManager;

    public function __construct(
        PlanningPokerService $planningPokerService,
        EntityManagerInterface $entityManager
    ) {
        $this->entityManager = $entityManager;
        $this->planningPokerService = $planningPokerService;
    }

    public function index()
    {
        $planningPoker = $this->planningPokerService->planningPoker();
        return $this->render('home.html.twig', ['planningPokerNumbers' => $planningPoker]);
    }

    public function createPlanningPokerSession(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $planningPokerSession = new PlanningPokerSession();
        $planningPokerSession->setCreatedDate(new DateTime());
        $planningPokerSession->setExpireDate((new DateTime())->add(new DateInterval('P1D')));
        $entityManager->persist($planningPokerSession);
        $entityManager->flush();
        $this->addParticipant($request, $planningPokerSession->getId());
        return $this->redirectToRoute('index');

    }

    private function addParticipant(Request $request, $id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $planningPokerParticipant = new PlanningPokerParticipants();
        $planningPokerParticipant->setName($request->get('name'));
        $planningPokerParticipant->setSessionId($id);
        $entityManager->persist($planningPokerParticipant);
        $entityManager->flush();
    }

    private function getPlanningPokerRepository()
    {
        return $this->getDoctrine()->getRepository(PlanningPokerSession::class);
    }
}