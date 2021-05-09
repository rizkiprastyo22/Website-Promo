<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <!-- <meta http-equiv="X-UA-Compatible" content="ie=edge" /> -->
    <title><?php echo $pageTitle; ?> | Hemat Warrior</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link href="<?php echo base_url('assets/materialize/css/materialize.css'); ?>" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="<?php echo base_url('assets/css/kcdev.css'); ?>" type="text/css" rel="stylesheet" media="screen,projection"/>
    <!-- <link href="<?php echo base_url('css/templatemo-style.css'); ?>" type="text/css" rel="stylesheet" media="screen,projection"/> -->
  </head>
  <body>
  <header>
      
      <nav class="red lighten-4 navbar-fixed" role="navigation">
          <div class="nav-wrapper container">
              <a id="logo-container" href="<?php echo base_url('dashboard'); ?>" class="brand-logo center">
                <img src="<?php echo base_url('img/logoku.png'); ?>" width="200" 
                height="40">
              </a>
              <a href="#" data-activates="sidenav" class="button-collapse"><i class="material-icons">menu</i></a>
          </div>
      </nav>
      <style>
        body {
          display: flex;
          min-height: 100vh;
          flex-direction: column;
        }
  
        main {
          flex: 1 0 auto;
        }
        .login-box {
          margin-top: 5%;
        }
      </style>
      
    </header>