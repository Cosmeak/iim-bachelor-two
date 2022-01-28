<?php

class User
{
    public int $id;
    public string $email;
    public string $password;
    public string $firstname;
    public string $lastname;
    public bool $is_admin;
    public array $animals;

    public function __construct($email, $password, $firstname, $lastname)
    {
        $this->email = $email;
        $this->password = $password;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @param bool $is_admin
     */
    public function setIsAdmin(bool $is_admin): void
    {
        $this->is_admin = $is_admin;
    }

    public function getDetails(): string
    {
        return $this->lastname.' '.$this->firstname;
    }
}