<?php
if (session_id() == "")
{
   session_start();
}
if (!isset($_SESSION['username']))
{
   header('Location: ./index.php');
   exit;
}
if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['form_name'] == 'logoutform')
{
   if (session_id() == "")
   {
      session_start();
   }
   unset($_SESSION['username']);
   unset($_SESSION['fullname']);
   header('Location: ./index.php');
   exit;
}
if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['form_name'] == 'logoutform')
{
   if (session_id() == "")
   {
      session_start();
   }
   unset($_SESSION['username']);
   unset($_SESSION['fullname']);
   header('Location: ./index.php');
   exit;
}
if (session_id() == "")
{
   session_start();
}
if (!isset($_SESSION['username']))
{
   header('Location: ./index.php');
   exit;
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE9">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>teste</title>
<meta name="generator" content="WYSIWYG Web Builder 9 - http://www.wysiwygwebbuilder.com">
<style type="text/css">
div#container
{
   width: 970px;
   position: relative;
   margin: 0 auto 0 auto;
   text-align: left;
}
body
{
   background-color: #FFFFFF;
   color: #000000;
   font-family: Arial;
   font-size: 13px;
   margin: 0;
   text-align: center;
}
</style>
<style type="text/css">
@-webkit-keyframes transform-3d-flip
{
   0% { -webkit-transform: perspective(400px) rotateX(0deg);  }
   40% { -webkit-transform: perspective(400px) rotateX(0deg) rotateY(170deg) translate3d(0px,0px,150px);  }
   50% { -webkit-transform: perspective(400px) rotateX(0deg) rotateY(190deg) scale3d(1.01,1.01,1.01) translate3d(0px,0px,150px);  }
   80% { -webkit-transform: perspective(400px) rotateX(0deg) rotateY(360deg) scale3d(0.95,0.95,0.95);  }
   100% { -webkit-transform: perspective(400px) rotateX(0deg);  }
}
@-moz-keyframes transform-3d-flip
{
   0% { -moz-transform: perspective(400px) rotateX(0deg);  }
   40% { -moz-transform: perspective(400px) rotateX(0deg) rotateY(170deg) translate3d(0px,0px,150px);  }
   50% { -moz-transform: perspective(400px) rotateX(0deg) rotateY(190deg) scale3d(1.01,1.01,1.01) translate3d(0px,0px,150px);  }
   80% { -moz-transform: perspective(400px) rotateX(0deg) rotateY(360deg) scale3d(0.95,0.95,0.95);  }
   100% { -moz-transform: perspective(400px) rotateX(0deg);  }
}
@-o-keyframes transform-3d-flip
{
   0% { -o-transform: perspective(400px) rotateX(0deg);  }
   40% { -o-transform: perspective(400px) rotateX(0deg) rotateY(170deg) translate3d(0px,0px,150px);  }
   50% { -o-transform: perspective(400px) rotateX(0deg) rotateY(190deg) scale3d(1.01,1.01,1.01) translate3d(0px,0px,150px);  }
   80% { -o-transform: perspective(400px) rotateX(0deg) rotateY(360deg) scale3d(0.95,0.95,0.95);  }
   100% { -o-transform: perspective(400px) rotateX(0deg);  }
}
@-ms-keyframes transform-3d-flip
{
   0% { -ms-transform: perspective(400px) rotateX(0deg);  }
   40% { -ms-transform: perspective(400px) rotateX(0deg) rotateY(170deg) translate3d(0px,0px,150px);  }
   50% { -ms-transform: perspective(400px) rotateX(0deg) rotateY(190deg) scale3d(1.01,1.01,1.01) translate3d(0px,0px,150px);  }
   80% { -ms-transform: perspective(400px) rotateX(0deg) rotateY(360deg) scale3d(0.95,0.95,0.95);  }
   100% { -ms-transform: perspective(400px) rotateX(0deg);  }
}
@keyframes transform-3d-flip
{
   0% { transform: perspective(400px) rotateX(0deg);  }
   40% { transform: perspective(400px) rotateX(0deg) rotateY(170deg) translate3d(0px,0px,150px);  }
   50% { transform: perspective(400px) rotateX(0deg) rotateY(190deg) scale3d(1.01,1.01,1.01) translate3d(0px,0px,150px);  }
   80% { transform: perspective(400px) rotateX(0deg) rotateY(360deg) scale3d(0.95,0.95,0.95);  }
   100% { transform: perspective(400px) rotateX(0deg);  }
}
a
{
   color: #0000FF;
   text-decoration: underline;
}
a:visited
{
   color: #800080;
}
a:active
{
   color: #FF0000;
}
a:hover
{
   color: #0000FF;
   text-decoration: underline;
}
</style>
<style type="text/css">
#Layer2
{
   background-color: transparent;
   background-image: url(images/corpo_pagina_Layer2_bkgrnd.png);
   background-repeat: repeat-x;
   background-position: left top;
   -moz-box-shadow: 0px 0px 2px #000000;
   -webkit-box-shadow: 0px 0px 2px #000000;
   box-shadow: 0px 0px 2px #000000;
}
#Layer1
{
   background-color: transparent;
   background-image: url(images/logo_semec.png);
   background-repeat: no-repeat;
   background-position: center top;
   -webkit-animation: transform-3d-flip 500ms linear 3ms 1 normal forwards;
   -moz-animation: transform-3d-flip 500ms linear 3ms 1 normal forwards;
   -ms-animation: transform-3d-flip 500ms linear 3ms 1 normal forwards;
   animation: transform-3d-flip 500ms linear 3ms 1 normal forwards;
}
#Layer1:focus
{
   visibility: ;
   -webkit-transition: visibility 500ms linear 0ms;
   -moz-transition: visibility 500ms linear 0ms;
   -ms-transition: visibility 500ms linear 0ms;
   transition: visibility 500ms linear 0ms;
}
#wb_CssMenu1
{
   border: 0px #C0C0C0 solid;
   background-color: transparent;
}
#wb_CssMenu1 ul
{
   list-style-type: none;
   margin: 0;
   padding: 0;
   position: relative;
   display: inline-block;
}
#wb_CssMenu1 li
{
   float: left;
   margin: 0;
   padding: 0px 4px 0px 0px;
   width: 80px;
}
#wb_CssMenu1 a
{
   display: block;
   float: left;
   color: #FFFFFF;
   border: 0px #C0C0C0 groove;
   -moz-border-radius: 10px;
   -webkit-border-radius: 10px;
   border-radius: 10px;
   background-color: #000000;
   background: -moz-linear-gradient(top,#292929 0%,#1B1B1B 50%,#020202 50%,#202020 100%);
   background: -webkit-linear-gradient(top,#292929 0%,#1B1B1B 50%,#020202 50%,#202020 100%);
   background: -o-linear-gradient(top,#292929 0%,#1B1B1B 50%,#020202 50%,#202020 100%);
   background: -ms-linear-gradient(top,#292929 0%,#1B1B1B 50%,#020202 50%,#202020 100%);
   background: linear-gradient(top,#292929 0%,#1B1B1B 50%,#020202 50%,#202020 100%);
   font-family: Arial;
   font-size: 13px;
   font-weight: normal;
   font-style: normal;
   text-decoration: none;
   width: 70px;
   height: 76px;
   padding: 0px 5px 0px 5px;
   vertical-align: middle;
   line-height: 76px;
   text-align: center;
}
#wb_CssMenu1 li:hover a, #wb_CssMenu1 a:hover, #wb_CssMenu1 .active
{
   color: #FFFFFF;
   background-color: #4169E1;
   background: -moz-linear-gradient(top,#273FEC 0%,#304DE8 50%,#3F66E1 50%,#2C48EA 100%);
   background: -webkit-linear-gradient(top,#273FEC 0%,#304DE8 50%,#3F66E1 50%,#2C48EA 100%);
   background: -o-linear-gradient(top,#273FEC 0%,#304DE8 50%,#3F66E1 50%,#2C48EA 100%);
   background: -ms-linear-gradient(top,#273FEC 0%,#304DE8 50%,#3F66E1 50%,#2C48EA 100%);
   background: linear-gradient(top,#273FEC 0%,#304DE8 50%,#3F66E1 50%,#2C48EA 100%);
   border: 0px #C0C0C0 groove;
}
#wb_CssMenu1 li.firstmain
{
   padding-left: 0px;
}
#wb_CssMenu1 li.lastmain
{
   padding-right: 0px;
}
#wb_CssMenu1 br
{
   clear: both;
   font-size: 1px;
   height: 0;
   line-height: 0;
}
#wb_Form1
{
   background-color: #FAFAFA;
   border: 0px #000000 solid;
}
#wb_Text1 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
   text-align: left;
}
#wb_Text1 div
{
   text-align: left;
}
#Combobox1
{
   border: 1px #A9A9A9 solid;
   background-color: #FFFFFF;
   color: #000000;
   font-family: Arial;
   font-size: 13px;
}
#wb_Text2 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
   text-align: left;
}
#wb_Text2 div
{
   text-align: left;
}
#Editbox1
{
   border: 1px #A9A9A9 solid;
   background-color: #FFFFFF;
   color :#000000;
   font-family: Arial;
   font-size: 13px;
   text-align: left;
   vertical-align: middle;
}
#wb_Text3 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
   text-align: left;
}
#wb_Text3 div
{
   text-align: left;
}
#Editbox2
{
   border: 1px #A9A9A9 solid;
   background-color: #FFFFFF;
   color :#000000;
   font-family: Arial;
   font-size: 13px;
   text-align: left;
   vertical-align: middle;
}
#wb_Text4 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
   text-align: left;
}
#wb_Text4 div
{
   text-align: left;
}
#Editbox3
{
   border: 1px #A9A9A9 solid;
   background-color: #FFFFFF;
   color :#000000;
   font-family: Arial;
   font-size: 13px;
   text-align: left;
   vertical-align: middle;
}
#wb_Text5 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
   text-align: left;
}
#wb_Text5 div
{
   text-align: left;
}
#Combobox2
{
   border: 1px #A9A9A9 solid;
   background-color: #FFFFFF;
   color: #000000;
   font-family: Arial;
   font-size: 13px;
}
#wb_Text6 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
   text-align: left;
}
#wb_Text6 div
{
   text-align: left;
}
#Combobox3
{
   border: 1px #A9A9A9 solid;
   background-color: #FFFFFF;
   color: #000000;
   font-family: Arial;
   font-size: 13px;
}
#Button1
{
   border: 1px #A9A9A9 solid;
   background-color: #F0F0F0;
   color: #000000;
   font-family: Arial;
   font-size: 13px;
}
.logoutform_button
{
   background-color: #EEEEEE;
   border-color: #878787;
   border-width: 1px;
   border-style: solid;
   color: #000000;
   font-family: Arial;
   font-size: 19px;
}
</style>
</head>
<body>
<div id="container">
<div id="Layer2" style="position:absolute;overflow:auto;text-align:center;left:0px;top:70px;width:972px;height:79px;z-index:17;" title="">
<div id="Layer2_Container" style="width:972px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
<div id="wb_CssMenu1" style="position:absolute;left:317px;top:0px;width:336px;height:76px;text-align:center;z-index:0;">
<ul>
<li class="firstmain"><a href="#" target="_self">Button&nbsp;1</a>
</li>
<li><a href="#" target="_self">Button&nbsp;2</a>
</li>
<li><a href="#" target="_self">Button&nbsp;3</a>
</li>
<li><a href="#" target="_self">Button&nbsp;4</a>
</li>
</ul>
<br>
</div>
</div>
</div>
<div id="Layer1" style="position:absolute;overflow:auto;text-align:center;left:0px;top:0px;width:972px;height:68px;z-index:18;" title="">
<div id="Layer1_Container" style="width:972px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
<div id="wb_Logout1" style="position:absolute;left:855px;top:9px;width:45px;height:45px;z-index:1;">
<form name="logoutform" method="post" action="<?php echo basename(__FILE__); ?>" id="logoutform">
<input type="hidden" name="form_name" value="logoutform">
<input type="image" name="logout" id="logout" src="images/logout.gif" />
</form>
</div>
<div id="wb_Logout2" style="position:absolute;left:905px;top:19px;width:45px;height:23px;z-index:2;">
<form name="logoutform" method="post" action="<?php echo basename(__FILE__); ?>" id="logoutform">
<input type="hidden" name="form_name" value="logoutform">
<input class="logoutform_button" type="submit" name="logout"value="Sair" id="logout" style="width:45px;height:23px;" />
</form>
</div>

</div>
</div>
<div id="wb_Form1" style="position:absolute;left:270px;top:187px;width:430px;height:240px;z-index:19;">
<form name="contact" method="post" action="mailto:yourname@address.com" id="Form1">
<input type="hidden" name="formid" value="form1">
<div id="wb_Text1" style="position:absolute;left:10px;top:15px;width:190px;height:16px;z-index:4;text-align:left;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Prefix:</span></div>
<select name="prefix" size="1" id="Combobox1" style="position:absolute;left:210px;top:15px;width:200px;height:25px;z-index:5;">
<option selected value="Mr.">Mr.</option>
<option value="Mrs.">Mrs.</option>
<option value="Miss">Miss</option>
<option value="Ms.">Ms.</option>
<option value="Dr.">Dr.</option>
</select>
<div id="wb_Text2" style="position:absolute;left:10px;top:45px;width:190px;height:16px;z-index:6;text-align:left;">
<span style="color:#000000;font-family:Arial;font-size:13px;">First Name:</span></div>
<input type="text" id="Editbox1" style="position:absolute;left:210px;top:45px;width:198px;height:23px;line-height:23px;z-index:7;" name="firstname" value="">
<div id="wb_Text3" style="position:absolute;left:10px;top:75px;width:190px;height:16px;z-index:8;text-align:left;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Last Name:</span></div>
<input type="text" id="Editbox2" style="position:absolute;left:210px;top:75px;width:198px;height:23px;line-height:23px;z-index:9;" name="lastname" value="">
<div id="wb_Text4" style="position:absolute;left:10px;top:105px;width:190px;height:16px;z-index:10;text-align:left;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Email:</span></div>
<input type="text" id="Editbox3" style="position:absolute;left:210px;top:105px;width:198px;height:23px;line-height:23px;z-index:11;" name="email" value="">
<div id="wb_Text5" style="position:absolute;left:10px;top:135px;width:190px;height:16px;z-index:12;text-align:left;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Will you be attending the event?</span></div>
<select name="attend" size="1" id="Combobox2" style="position:absolute;left:210px;top:135px;width:200px;height:25px;z-index:13;">
<option selected value="Yes">Yes</option>
<option value="No">No</option>
</select>
<div id="wb_Text6" style="position:absolute;left:10px;top:165px;width:190px;height:16px;z-index:14;text-align:left;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Number of Guests:</span></div>
<select name="guestcount" size="1" id="Combobox3" style="position:absolute;left:210px;top:165px;width:200px;height:25px;z-index:15;">
<option selected value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select>
<input type="submit" id="Button1" name="" value="Send" style="position:absolute;left:210px;top:195px;width:96px;height:25px;z-index:16;">
</form>
</div>

</div>
</body>
</html>