<?php

namespace Data;

use Exception;

class User implements UserInterface
{

    /**
     * @var string
     */
private $username;

    /**
     * @var string
     */
private $password;

    /**
     * @var string
     */
private $firstName;

    /**
     * @var string
     */
private $lastName;

    /**
     * @param string $username
     * @param string $password
     * @param string $firstName
     * @param string $lastName
     * @throws Exception
     */
public function __construct(string $username, string $password, string $firstName,
                            string $lastName)
{
    $this->setUsername($username);
    $this->setFirstName($firstName);
    $this->setPassword($password);
    $this->firstName = $firstName;
    $this->lastName = $lastName;
}

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     * @throws Exception
     */
    private  function setUsername(string $username)
    {
        if(strlen($username) < 3){
            throw new Exception("Your username must be at least 3 characters long!");

        }
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @throws Exception when the password is less than 6 characters
     * @throws Exception when the password does not contain at least 1 number
     */
    private function setPassword(string $password)
    {
        if(strlen($password) < 6) {
            throw new Exception("Your password must be at least 6 characters long!");
        }
        else if (!preg_match("/[0-9]+/", $password)) {
            throw new Exception("Your Password Must Contain At Least 1 Number!");
        }
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     * @throws Exception
     */
    private  function setFirstName(string $firstName)
    {
        if(null == $firstName){
            throw new Exception("First Name is a required field!");

        }
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    private  function setLastName(string $lastName)
    {
        $this->lastName = $lastName;
    }


    public function __toString(): string
    {
        return "Username: {$this->getUsername()}, Full Name: {$this->getFirstName()} {$this->getLastName()} ";
    }

}







