<?php
declare(strict_types=1);


namespace App\Pattern\Creational\FactoryMethod\Connector;


interface SocialNetworkConnector
{
    public function logIn(): void;

    public function logOut(): void;

    public function createPost($content): void;
}