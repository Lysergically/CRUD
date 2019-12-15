<?php


class User extends Person
{
    private $username;
    private $password;
    private $email;

    public function __construct($first, $last, $username, $password, $email)
    {
        parent::__construct($first, $last);
        $this->username = $username;
        $this->password = $password;
        $this->email    = $email;
    }
    public function getUsername()
    {
        return $this->username;
    }
    public function setUsername($username): void
    {
        $this->username = $username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password): void
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

}