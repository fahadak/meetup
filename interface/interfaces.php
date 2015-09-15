<?php

/**
* name interface 
* Implement the interface for firstname and lastname
*/
Interface name{
    public function setFirstName();    
    public function getFirstName();
    public function validateFirstName();
    public function setLastName();
    public function getLastName();
    public function validateLastName();
    
}

/**
* email Interface 
* Implement the interface for email
*/
Interface email{
    public function setEmail();
    public function getEmail();
    public function validateEmail();
}

/**
* password Interface 
* Implement the interface for password
*/
Interface password{
    public function setPassword();
    public function getPassword();
    public function validatePassword();
}


/**
* autheticate Interface 
* Implement the interface for authetication
*/
Interface authenticate{
    public function authenticate();
}