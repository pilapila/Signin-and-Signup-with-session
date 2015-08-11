<?php
namespace Login\LoginBundle\Modals;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of login
 *
 * @author sina
 */
class Login
{
    private $username;
    private $password;
    
    function getUsername()
    {
        return $this->username;
    }

    function getPassword()
    {
        return $this->password;
    }

    function setUsername($username)
    {
        $this->username = $username;
    }

    function setPassword($password)
    {
        $this->password = $password;
    }


}
