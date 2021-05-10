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

        .placeholder {
          width: 100%;
          min-height: 460px;
          background-color: #556E5B;
        }

        .parallax-window {
          min-height: 460px;
          background: transparent;
          position: relative;
        }

        .tm-header {
          position: absolute;
          bottom: 0;
          left: 0;
          width: 100%;
          color: white;
          z-index: 1000;
        }

        .tm-header-inner {
          padding: 40px 50px;
        }

        .tm-site-logo {
          display: inline-block;
          margin-right: 5px;
        }

        .tm-site-text-box {
          display: inline-block;
        }

        .tm-site-description {
          font-size: 1.1rem;
          font-weight: 400;
        }

        .tm-section-title {
          font-size: 2rem;
          font-weight: 400;
          margin-bottom: 30px;
        }

        .tm-section,
        .tm-container-inner,
        .tm-container-inner-2 {
          margin-left: auto;
          margin-right: auto;
        }

        .tm-description-box {
          margin-left: auto;
          margin-right: auto;
        }

        .text-center {
          text-align: center;
        }

        .tm-paging-links {
          text-align: center;
          margin-bottom: 40px;
        }

        /* .tm-paging-item {
          list-style: none;
          display: inline-block;
          border: 1px solid #EE6E73;
          margin: 7px;
        }

        .tm-paging-link {
          padding: 10px 30px;
          display: flex;
          align-items: center;
          justify-content: center;
          text-decoration: none;
          color: #EE6E73;
          background-color: transparent;
        } */

        .tm-gallery {
          margin-bottom: 80px;
        }

        /* .tm-gallery-page {
          max-width: 280px;
          margin-left: auto;
          margin-right: auto;
          display: -ms-flexbox;
          display: flex;
          -ms-flex-wrap: wrap;
          flex-wrap: wrap;
        } */

        .tm-gallery-item {
          max-width: 280px;
        }

        .img-fluid {
          max-width: 100%;
          height: auto;
        }

        .tm-gallery-img {
          /* margin-bottom: 20px; */
        }

        .tm-gallery-title {
          font-size: 1.3rem;
          font-weight: 400;
          color: #1A6692;
          margin-bottom: 15px;
        }

        .tm-gallery-description {
          margin-bottom: 20px;
          font-size: 1.2rem;
        }

        .tm-gallery-price {
          font-size: 1.2rem;
          color: #EE6E73;
          margin-bottom: 60px;
        }

        del{
          color: black;
          font-size: 1rem;
        }

        /* #col-lg-3,
        #col-lg-4,
        #col-lg-6,
        #col-md-4,
        #col-md-6,
        #col-sm-6, 
        #col-12 {
          position: relative;
          width: 100%;
          padding-right: 15px;
          padding-left: 15px;
        }

        #col-12 {
          -ms-flex: 0 0 100%;
          flex: 0 0 100%;
          max-width: 100%;
        }

        @media (min-width: 576px) {
          #col-sm-6 {
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%;
          }
        }

        @media (min-width: 768px) {
          #col-md-4 {
            -ms-flex: 0 0 33.333333%;
            flex: 0 0 33.333333%;
            max-width: 33.333333%;
          }
          
          #col-md-6 {
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%;
          }
        }

        @media (min-width: 992px) {
          #col-lg-3 {
            -ms-flex: 0 0 25%;
            flex: 0 0 25%;
            max-width: 25%;
          }
          
          #col-lg-4 {
            -ms-flex: 0 0 33.333333%;
            flex: 0 0 33.333333%;
            max-width: 33.333333%;
          }
          
          #col-lg-6 {
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%;
          }
        } */
      </style>
      
    </header>