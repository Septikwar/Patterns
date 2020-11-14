<?php
declare(strict_types=1);


namespace App\Pattern\Creational\FactoryMethod\Connector;


class FacebookConnector implements SocialNetworkConnector
{

    /**
     * @var string
     */
    private $login;

    /**
     * @var string
     */
    private $password;

    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function logIn(): void
    {
        echo "Facebook: Send HTTP API request to log in user {$this->login} password {$this->password}<br>";
    }

    public function logOut(): void
    {
        echo "Facebook: Send HTTP API request to log out user {$this->login}<br>";
    }

    public function createPost($content): void
    {
        echo "Facebook: Send HTTP API requests to create a post in Facebook timeline. Content: {$content}<br>";
    }
}