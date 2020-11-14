<?php
declare(strict_types=1);


namespace App\Pattern\Creational\FactoryMethod\Poster;


use App\Pattern\Creational\FactoryMethod\Connector\FacebookConnector;
use App\Pattern\Creational\FactoryMethod\Connector\SocialNetworkConnector;

class FacebookPoster extends SocialNetworkPoster
{
    /**
     * @var string
     */
    private $login;

    /**
     * @var string
     */
    private $password;

    /**
     * @param string $login
     * @param string $password
     */
    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    /**
     * @return SocialNetworkConnector
     */
    public function getSocialNetwork(): SocialNetworkConnector
    {
        return new FacebookConnector($this->login, $this->password);
    }
}