<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo("template_directory");?>/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title><?php bloginfo('name');?> | <?php bloginfo('description');?> </title>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')
    -->
  </head>
  <body class="sidebar-mini fixed">
    <div class="wrapper">
      <!-- Navbar-->
      <header class="main-header hidden-print"><a class="logo" href="#">Библии.рус</a>
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button--><a class="sidebar-toggle" href="#" data-toggle="offcanvas"></a>
          <!-- Navbar Right Menu-->
          <div class="navbar-custom-menu">
            <ul class="top-nav">
              <!-- Help Menu-->
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-question-circle fa-lg"></i></a></li>
              <!--Notification Menu-->
              <li class="dropdown notification-menu"><a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell-o fa-lg"></i></a></li>
              <!-- User Menu-->
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user fa-lg"></i></a></li>

            </ul>
          </div>
        </nav>
      </header>
      <!-- Side-Nav-->
      <aside class="main-sidebar hidden-print">
        <section class="sidebar">
          <div class="user-panel">
            <div class="pull-left image"><img class="img-circle" src="<?php bloginfo("template_directory");?>/images/logomini.png" alt="User Image"></div>
            <div class="pull-left info">
              <p style="font-family: Comfortaa;">Все о Библии</p>
              <p class="designation" style="font-family: Cuprum;">Версии, переводы, архивы</p>
            </div>
          </div>
          <!--Sidebar Menu-->
        <ul class="sidebar-menu">
              <li><a href="/"><i class="fa fa-dashboard"></i><span>Главная</span></a></li>
              <li><a href="/bibliya"><i class="fa fa-file-text"></i><span> Библия</span></a></li>
			        <li><a href="/tolkovaniya-biblii"><i class="fa fa-edit"></i><span> Толкования Библии</span></a></li>
			        <li><a href="/propovedi"><i class="fa fa-pie-chart"></i><span> Проповеди</span></a></li>
			        <li><a href="/slovari"><i class="fa fa-th-list"></i><span> Словари</span></a></li>
			        <li><a href="/karty"><i class="fa fa-circle-o"></i><span> Карты</span></a></li>
			        <li><a href="/mediateka"><i class="fa fa-share"></i><span> Медиатека</span></a></li>
              <li class="treeview"><a href="#"><i class="fa fa-file-text"></i><span>Об этом проекте</span><i class="fa fa-angle-right"></i></a>
                  <ul class="treeview-menu">
                      <li><a href="/istoriya-proekta"><i class="fa fa-circle-o"></i> История проекта</a></li>
				              <li><a href="/avtory"><i class="fa fa-circle-o"></i> Авторы и благотворители</a></li>
				              <li><a href="/realnaya-istoriya"><i class="fa fa-circle-o"></i> Настоящая история проекта</a></li>
				              <li><a href="/pozhertvovaniya"><i class="fa fa-circle-o"></i> Пожертвования</a></li>
                  </ul>
              </li>
          </ul>
        </section>
      </aside>

	  <!---------------Top-II menu------------------------------>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1 style="font-family: Marmelad;"><i class="fa fa-dashboard"></i> Все версии Библии</h1>
            <p style="font-family: Marmelad;">Библия, Евангелие, Экзегеты, Словари</p>
          </div>
          <!--div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>Главная</li>
            </ul>
          </div-->
         <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
        </div>
<!--===================================================================->
<!------><div class="row"><!------------------>
<!-------------------------------------------->
<!--===================================================================->
