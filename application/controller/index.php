<?php
ob_start();
/**
 * Class Home
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Index extends Controller 
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/home/index (which is the default page btw)
     */
    public function index()
    {
      $matricula = isset($_COOKIE['matricula']) ? $_COOKIE['matricula'] : '';
      $password = isset($_COOKIE['password']) ? $_COOKIE['password'] : '';

        // load views. within the views we can echo out $songs and $amount_of_songs easily
        //require 'application/views/_templates/header.php';
      require 'application/views/home/index.php';

        //require 'application/views/_templates/footer.php';
      
   }

   public function entrar()
   {
      if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['form_name'] == 'loginform')
      {
        $success_page = URL.'/masterpage';
        $error_page = URL.'/login_erro';
        $crypt_pass = md5($_POST['password']);
        $found = false;
        $fullname = '';
        $session_timeout = 600;
        $index_model = $this->loadModel('IndexModel');
        $login = $index_model->getLogin(mysql_real_escape_string($_POST['matricula']));
           if ($crypt_pass == $login['password'] && $login['active'] != 0)
          {
            $found = true;
            $fullname = $login['fullname'];
          }
       
      $index_model->close(); 
      if($found == false)
      {
         header('Location:'.$error_page);
         exit;
      }
      else
      {
         if (session_id() == "")
         {
           session_start();
         }
        $_SESSION['matricula'] = $_POST['matricula'];
        $_SESSION['fullname'] = $fullname;
        $_SESSION['expires_by'] = time() + $session_timeout;
        $_SESSION['expires_timeout'] = $session_timeout;
        $rememberme = isset($_POST['rememberme']) ? true : false;
        if ($rememberme)
        {
           setcookie('matricula', $_POST['matricula'], time() + 3600*24*30);
           setcookie('password', $_POST['password'], time() + 3600*24*30);
        }
        header('Location:'.$success_page);
        exit;
     }
  }
  
}
}
?>

