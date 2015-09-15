<?php
/**
* oAuth Class
* 
*/
Class oAuth implements email, password, authenticate {
    
    private $_email;
    private $_password;
    
    /**
     * Function __construct 
     * @param array $arrUserData user data
    */
    public function __construct($arrUserData){
        $this->setEmail($arrUserData['email']);
        $this->setPassword($arrUserData['password']);        
    }
    
    
    /**
    * oAuth::setEmail()
    * Function to set the email
    * @author  fahad <fahad.kilpady@impelsys.com>
    * @version 1.0 first version
    */
    public function setEmail($email){
        $this->_email = $email;
    }
    
    /**
    * oAuth::getEmail()
    * Function to get the email
    * @author  fahad <fahad.kilpady@impelsys.com>
    * @version 1.0 first version
    * @return varchar email
    */
    public function getEmail(){
        return $this->_email;
    }
    
    /**
    * oAuth::validateEmail()
    * Function to validate email
    * @author  fahad <fahad.kilpady@impelsys.com>
    * @version 1.0 first version
    * @return array
    */
    public function validateEmail(){
        // validate
    }
    
    /**
    * oAuth::setPassword()
    * Function to set the password
    * @author  fahad <fahad.kilpady@impelsys.com>
    * @version 1.0 first version
    */
    public function setPassword($password){
        $this->_password = $password;
    }
    
    /**
    * oAuth::getPassword()
    * Function to get the password
    * @author  fahad <fahad.kilpady@impelsys.com>
    * @version 1.0 first version
    * @return varchar password
    */
    public function getPassword(){
        return $this->_password;
    }
    
    /**
    * oAuth::validatePassword()
    * Function to validate password
    * @author  fahad <fahad.kilpady@impelsys.com>
    * @version 1.0 first version
    * @return array
    */
    public function validatePassword(){
        // validate
    }
    
    /**
    * oAuth::authenticate()
    * Function to autheticate
    * @author  fahad <fahad.kilpady@impelsys.com>
    * @version 1.0 first version
    * @return array
    */
    public function authenticate(){
        // oAuth functionaity
    }    
} // end of class oAuth