<?php
declare(strict_types=1);


namespace App\Pattern\Creational\FactoryMethod\Poster;


use App\Pattern\Creational\FactoryMethod\Connector\LinkedInConnector;
use App\Pattern\Creational\FactoryMethod\Connector\SocialNetworkConnector;

class LinkedInPoster extends SocialNetworkPoster
{
    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $password;

    /**
     * @param string $email
     * @param string $password
     */
    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    /**
     * @return SocialNetworkConnector
     */
    public function getSocialNetwork(): SocialNetworkConnector
    {
        return new LinkedInConnector($this->email, $this->password);
    }
}