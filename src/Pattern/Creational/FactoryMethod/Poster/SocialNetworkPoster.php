<?php
declare(strict_types=1);

namespace App\Pattern\Creational\FactoryMethod\Poster;


use App\Pattern\Creational\FactoryMethod\Connector\SocialNetworkConnector;

abstract class SocialNetworkPoster
{
    abstract public function getSocialNetwork(): SocialNetworkConnector;

    public function post($content): void
    {
        $network = $this->getSocialNetwork();

        $network->login();
        $network->createPost($content);
        $network->logout();
    }
}