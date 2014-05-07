<?php
ob_start();
class Masterpage extends Controller 
{
  
   public function index()
   {
      if (session_id() == "")
      {
         session_start();
      }
      if (!isset($_SESSION['matricula']))
      {
         header('Location: '.URL.'/index');
         exit;
      }
      require 'application/views/home/masterpage.php';

   }

   public function logout()
   {
       $index_page = URL.'/index';
      if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['form_name'] == 'logoutform')
      {

         if (session_id() == "")
         {
            session_start();
         }
         unset($_SESSION['matricula']);
         unset($_SESSION['fullname']);
         header('Location: '.$index_page); 
         exit;
      }
      if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['form_name'] == 'logoutform')
      {
         if (session_id() == "")
         {
            session_start();
         }
         unset($_SESSION['matricula']);
         unset($_SESSION['fullname']);
         header('Location: '.$index_page);
         exit;
      }
      if (session_id() == "")
      {
         session_start();
      }
      if (!isset($_SESSION['matricula']))
      {
         header('Location: '.$index_page);
         exit;
      }
   }
}
?>
