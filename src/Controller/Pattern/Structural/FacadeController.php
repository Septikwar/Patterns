<?php
declare(strict_types=1);

namespace App\Controller\Pattern\Structural;

use App\Pattern\Structural\Adapter\EmailNotification;
use App\Pattern\Structural\Adapter\Notification;
use App\Pattern\Structural\Adapter\SlackApi;
use App\Pattern\Structural\Adapter\SlackNotification;
use App\Pattern\Structural\Facade\YoutubeDownloader;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FacadeController extends AbstractController
{
    /**
     * @Route("/structural/facade", name="facadePattern")
     * @return Response
     */
    public function index()
    {
        $video = new YoutubeDownloader("api");
        $link = $video->downloadVideo("https://youtube.com/video", "Youtube title");

        return $this->render(
            'pattern/single.html.twig',
            [
                'result' => [$link]
            ]
        );
    }
}