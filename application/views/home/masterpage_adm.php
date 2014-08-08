<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
   <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE9">
   <meta http-equiv="Content-Language" content="pt-br">
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <title>SEMEC Avaliação</title>
   <meta name="generator" content="WYSIWYG Web Builder 9 - http://www.wysiwygwebbuilder.com">
    <link href="<?php echo URL; ?>/public/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo URL; ?>/public/css/jquery-ui.css"/>
    <link rel="stylesheet" href="<?php echo URL; ?>/public/css/bootstrap-theme.min.css">
     <link href="<?php echo URL; ?>/public/img/teresina.jpeg" rel="shortcut icon">
      <!-- Start WOWSlider.com HEAD section -->
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>/public/engine1/style.css" />
    <!-- End WOWSlider.com HEAD section -->
    <style type="text/css">
   div#container
   {
      width: 994px;
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
      background-image: url(<?php echo URL; ?>/public/img/masterpage_Layer2_bkgrnd.png);
      background-repeat: repeat-x;
      background-position: left top;
   }
   #Layer1
   {
      background-color: transparent;
      background-image: url(<?php echo URL; ?>/public/img/logo_semec.png);
      background-repeat: no-repeat;
      background-position: center top;
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
       width: 135px;
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
       width: 125px;
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

   #LoginName1
   {
   color: #FFFFFF;
   font-family: Arial;
   font-size: 13px;
   text-align: left;
   }
   </style>
   <!--<script type="text/javascript">
       $(document).ready(function () {
       $('#wb_FormMaster').load('semec_page #ja-slide-articles-115');
       });
   </script>-->
</head>
<body>
   <div id="Layer2" style="position:absolute;text-align:left;left:0px;top:84px;width:100%;min-width:994px;height:82px;z-index:4;" title="">
      <div id="wb_LoginName1" style="position:absolute;left:6px;top:33px;width:320px;height:18px;z-index:0;">
      <span id="LoginName1">Bem vindo(a) <?php
      if (isset($_SESSION['fullname']))
      {
         echo $_SESSION['fullname'];
      }
      else
      {
         echo 'Not logged in';
      }
      ?>!</span></div>
   </div>
   <div id="container">
       <div class="container">
           <div id="wb_FormMaster" style="position:relative;top:170px;z-index:21;">
               <div id="wowslider-container1">
                   <div class="ws_images"><ul>
                           <li><img src="<?php echo URL; ?>/public/data1/images/cadastro1.jpg" alt="cadastro de avaliaçao" title="cadastro de avaliaçao" id="wows1_0"/>Possui botões que são usados para cadastrar, alterar e excluir programa e matéria.
                           </li>
                           <li><img src="<?php echo URL; ?>/public/data1/images/cadastro2.jpg" alt="cadastro de avaliaçao" title="cadastro de avaliaçao" id="wows1_1"/>Ao cadastrar será visualizado na página a opção de alterar ou atualizar e ser redirecionado para a página de cadastro de gabarito da avaliação.</li>
                           <li><img src="<?php echo URL; ?>/public/data1/images/lista1.jpg" alt="Lista de avaliações" title="Lista de avaliações" id="wows1_2"/>É listado todas as avaliações cadastradas. Na coluna "Prova" é realizado operações a respeito da avaliação cadastrada. Na coluna "Aluno/Turmas" as operações a respeito de cada aluno por turma e unidade.</li>
                           <li><img src="<?php echo URL; ?>/public/data1/images/criargabarito.jpg" alt="Criar gabarito" title="Criar gabarito" id="wows1_3"/>A prova é definida por meio destas operações, como: estilo de questão, alternativa, adição e remoção de questão.</li>
                           <li><img src="<?php echo URL; ?>/public/data1/images/filtroaluno.jpg" alt="Filtrar turmas" title="Filtrar turmas" id="wows1_4"/>Para gabaritar provas de aluno é feito um filtro de turma. seguindo a ordem da imagem.</li>
                           <li><img src="<?php echo URL; ?>/public/data1/images/gabaritoaluno.jpg" alt="Gabarito de alunos" title="Gabarito de alunos" id="wows1_5"/>É feito a pesquisa de aluno por meio do código da escola e o indicador de turma.</li>
                       </ul></div>
                   <div class="ws_bullets"><div>
                           <a href="#" title="cadastro de avaliaçao"><img src="<?php echo URL; ?>/public/data1/tooltips/cadastro1.jpg" alt="cadastro de avaliaçao"/>1</a>
                           <a href="#" title="cadastro de avaliaçao"><img src="<?php echo URL; ?>/public/data1/tooltips/cadastro2.jpg" alt="cadastro de avaliaçao"/>2</a>
                           <a href="#" title="Lista de avaliações"><img src="<?php echo URL; ?>/public/data1/tooltips/lista1.jpg" alt="Lista de avaliações"/>3</a>
                           <a href="#" title="Criar gabarito"><img src="<?php echo URL; ?>/public/data1/tooltips/criargabarito.jpg" alt="Criar gabarito"/>4</a>
                           <a href="#" title="Filtrar turmas"><img src="<?php echo URL; ?>/public/data1/tooltips/filtroaluno.jpg" alt="Filtrar turmas"/>5</a>
                           <a href="#" title="Gabarito de alunos"><img src="<?php echo URL; ?>/public/data1/tooltips/gabaritoaluno.jpg" alt="Gabarito de alunos"/>6</a>
                       </div></div>
                   <span class="wsl"><a href="http://wowslider.com">html slideshow</a> by WOWSlider.com v5.4</span>
                   <div class="ws_shadow"></div>
               </div>
               <!-- End WOWSlider.com BODY section -->
           </div>
       </div>
       <div id="Layer1"
            style="position:absolute;overflow:auto;text-align:center;left:0px;top:0px;width:972px;height:68px;z-index:22;"
            title="">
           <div id="Layer1_Container"
                style="width:972px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
               <div id="wb_Logout1" style="position:absolute;left:855px;top:9px;width:45px;height:45px;z-index:15;">
                   <form name="logoutform" method="post" action="<?php echo URL; ?>/masterpage_adm/logout" id="logoutform">
                       <input type="hidden" name="form_name" value="logoutform">
                       <input type="image" name="logout" id="logout" src="<?php echo URL; ?>/public/img/logout.gif"/>
                   </form>
               </div>
               <div id="wb_Logout2" style="position:absolute;left:905px;top:19px;width:45px;height:23px;z-index:16;">
                   <form name="logoutform" method="post" action="<?php echo URL; ?>/masterpage_adm/logout" id="logoutform">
                       <input type="hidden" name="form_name" value="logoutform">
                       <input class="logoutform_button" type="submit" name="logout" value="Sair" id="logout"
                              style="width:45px;height:23px;"/>
                   </form>
               </div>

           </div>
       </div>
       <div id="wb_MasterObjects1" style="position:absolute;left:0px;top:84px;width:665px;height:79px;z-index:23;">
           <div id="wb_CssMenu1"
                style="position:absolute;left:329px;top:3px;width:556px;height:76px;text-align:center;z-index:18;">
               <ul>
                   <li class="firstmain"><a class="active" href="<?php echo URL; ?>/masterpage_adm" target="_self">Inicio&nbsp;</a></li>
                   <li><a href="<?php echo URL; ?>/cadastroavaliacao_adm" target="_self">Cadastrar avaliação</a>
                   </li>
                   <li><a href="<?php echo URL; ?>/listaavaliacao_adm" target="_self">Avaliações</a>
                   </li>

               </ul>
               <br>
           </div>
       </div>
   </div>
   <script type="text/javascript" src="<?php echo URL; ?>/public/js/jquery-2.1.1.min.js"></script>
   <script type="text/javascript" src="<?php echo URL; ?>/public/js/jquery-ui.js"></script>
   <script type="text/javascript" src="<?php echo URL; ?>/public/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="<?php echo URL; ?>/public/engine1/wowslider.js"></script>
   <script type="text/javascript" src="<?php echo URL; ?>/public/engine1/script.js"></script>

</body>
</html>