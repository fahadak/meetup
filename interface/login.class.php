<?php
/**
* login Class
* 
*/
class login {
    
    /**
     * Function __construct 
     * @param string $auth object name
     * @param array $arrUserData user data
    */
    public function __construct($auth,$arrUserData){
        $this->_auth = new $auth($arrUserData);
    }    
} // end of class login