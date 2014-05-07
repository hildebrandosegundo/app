<?php
class Login_erro extends Controller
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/home/index (which is the default page btw)
     */
    // public function index($nome='',$idade='')
    public function index()
    {
       
        require 'application/views/home/login_erro.php';
        
    }
}
?>