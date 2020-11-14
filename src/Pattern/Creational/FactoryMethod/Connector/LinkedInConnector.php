<?php
declare(strict_types=1);


namespace App\Pattern\Creational\FactoryMethod\Connector;


class LinkedInConnector implements SocialNetworkConnector
{

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $password;

    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function logIn(): void
    {
        echo "LinkedIn: Send HTTP API request to log in user {$this->email} password {$this->password}<br>";
    }

    public function logOut(): void
    {
        echo "LinkedIn: Send HTTP API request to log out user {$this->email}<br>";
    }

    public function createPost($content): void
    {
        echo "LinkedIn: Send HTTP API requests to create a post in Facebook timeline. Content: {$content}<br>";
    }
}