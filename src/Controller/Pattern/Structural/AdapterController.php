<?php
declare(strict_types=1);

namespace App\Controller\Pattern\Structural;

use App\Pattern\Structural\Adapter\EmailNotification;
use App\Pattern\Structural\Adapter\Notification;
use App\Pattern\Structural\Adapter\SlackApi;
use App\Pattern\Structural\Adapter\SlackNotification;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdapterController extends AbstractController
{
    /**
     * @var array
     */
    private $result;

    /**
     * @Route("/structural/adapter", name="adapterPattern")
     * @return Response
     */
    public function index()
    {
        $emailNotification = new EmailNotification("admin@github.com");
        $this->sendMessage($emailNotification);

        $slackApi = new SlackApi("Admin", "XXXXX");
        $slackNotification = new SlackNotification($slackApi, "123");
        $this->sendMessage($slackNotification);

        return $this->render(
            'pattern/single.html.twig',
            [
                'result' =>$this->result
            ]
        );
    }

    /**
     * @param Notification $notification
     */
    private function sendMessage(Notification $notification)
    {
        $notification = $notification->send("Title notification", "Message Notification");
        $this->saveMessage($notification);
    }

    /**
     * @param string $text
     */
    private function saveMessage(string $text)
    {
        $this->result[] = $text;
    }
}