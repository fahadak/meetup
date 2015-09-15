<?php
/**
* sso Class
* 
*/
Class sso implements name, email, password, authenticate{
    private $_firstName;
    private $_lastName;
    private $_email;
    private $_password;
    

    /**
     * Function __construct 
     * @param array $arrUserData user data
    */
    public function __construct($arrUserData){
        $this->setEmail($arrUserData['email']);
        $this->setPassword($arrUserData['password']);  
        $this->setFirstName($arrUserData['firstName']);
        $this->setLastName($arrUserData['lastName']);              
    }
    
    /**
    * sso::setFirstName()
    * Function to set the firstname
    * @author  fahad <fahad.kilpady@impelsys.com>
    * @version 1.0 first version
    */
    public function setFirstName($firstName){
        $this->_firstName = $firstName;
    }
    
    /**
    * sso::getFirstName()
    * Function to get the firstname
    * @author  fahad <fahad.kilpady@impelsys.com>
    * @version 1.0 first version
    * @return varchar firstname
    */
    public function getFirstName(){
        return $this->_firstName;
    }
    
     /**
    * sso::validateFirstName()
    * Function to validate firstname
    * @author  fahad <fahad.kilpady@impelsys.com>
    * @version 1.0 first version
    * @return array
    */
    public function validateFirstName(){
        // validate
    }
    
    /**
    * sso::setLastName()
    * Function to set the lastname
    * @author  fahad <fahad.kilpady@impelsys.com>
    * @version 1.0 first version
    */
    public function setLastName($lastName){
        $this->_lastName = $lastName;
    }
    
    /**
    * sso::getLastName()
    * Function to get the lastname
    * @author  fahad <fahad.kilpady@impelsys.com>
    * @version 1.0 first version
    * @return varchar lastname
    */
    public function getLastName(){
        return $this->_lastName;
    }
    
    /**
    * sso::validateLastName()
    * Function to validate lastname
    * @author  fahad <fahad.kilpady@impelsys.com>
    * @version 1.0 first version
    * @return array
    */
    public function validateLastName(){
       // validate 
    }
    
    /**
    * sso::setEmail()
    * Function to set the email
    * @author  fahad <fahad.kilpady@impelsys.com>
    * @version 1.0 first version
    */
    public function setEmail($email){
        $this->_email = $email;
    }
    
    /**
    * sso::getEmail()
    * Function to get the email
    * @author  fahad <fahad.kilpady@impelsys.com>
    * @version 1.0 first version
    * @return varchar email
    */
    public function getEmail(){
        return $this->_email;
    }
    
    /**
    * sso::validateEmail()
    * Function to validate email
    * @author  fahad <fahad.kilpady@impelsys.com>
    * @version 1.0 first version
    * @return array
    */
    public function validateEmail(){
        // validate 
    }
    
    /**
    * sso::setPassword()
    * Function to set the password
    * @author  fahad <fahad.kilpady@impelsys.com>
    * @version 1.0 first version
    */
    public function setPassword($password){
        $this->_password = $password;
    }
    
    /**
    * sso::getPassword()
    * Function to get the password
    * @author  fahad <fahad.kilpady@impelsys.com>
    * @version 1.0 first version
    * @return varchar password
    */
    public function getPassword(){
        return $this->_password;
    }
    
    /**
    * sso::validatePassword()
    * Function to validate password
    * @author  fahad <fahad.kilpady@impelsys.com>
    * @version 1.0 first version
    * @return array
    */
    public function validatePassword(){
        // validate 
    }
    
    /**
    * sso::authenticate()
    * Function to autheticate
    * @author  fahad <fahad.kilpady@impelsys.com>
    * @version 1.0 first version
    * @return array
    */
    public function authenticate(){
        // sso auth functionaity
    }    
} // end of class sso