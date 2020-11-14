<?php
declare(strict_types=1);

namespace App\Controller\Pattern\Creational;

use App\Pattern\Creational\FactoryMethod\Poster\FacebookPoster;
use App\Pattern\Creational\FactoryMethod\Poster\LinkedInPoster;
use App\Pattern\Creational\FactoryMethod\Poster\SocialNetworkPoster;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FactoryMethodController extends AbstractController
{
    /**
     * @var array
     */
    private $array = [];

    /**
     * @Route("/creational/factoryMethod", name="factoryMethodPattern")
     * @return Response
     */
    public function index()
    {
        $this->addPost(new FacebookPoster("admin", "password"));
        $this->addPost(new LinkedInPoster("admin2", "password2"));

        return $this->render(
            'pattern/single.html.twig',
            [
                'result' => $this->array
            ]
        );
    }

    private function addPost(SocialNetworkPoster $socialNetworkPoster)
    {
        $socialNetworkPoster->post("Lorem Ipsum.");
        $socialNetworkPoster->post("Hello World!");
    }
}