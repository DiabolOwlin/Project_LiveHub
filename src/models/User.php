<?php

class User {
    private $username;
    private $password;
    private $email;
    private $name;
    private $surname;


    public function __construct(
        string $username,
        string $password,
        string $email,
        string $name,
        string $surname

    ) {
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->name = $name;
        $this->surname = $surname;
    }


    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getSurname(): string
    {
        return $this->surname;
    }

    public function setSurname(string $surname): void
    {
        $this->surname = $surname;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

}