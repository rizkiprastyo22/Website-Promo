<!DOCTYPE html>
<html lang="en">
    
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Login</title>
    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="<?php echo base_url('assets/materialize/css/materialize.min.css'); ?>" type="text/css" rel="stylesheet" media="screen,projection"/>
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
        margin-top: 7%;
      }
      .tab {overflow-x: hidden;}
      .example::-webkit-scrollbar {
        display: none;
      }
    </style>
  </head>

  <body>
  <header>
      
      <nav class="red lighten-4 navbar-fixed" role="navigation">
          <div class="nav-wrapper container">
              <a id="logo-container" href="<?php echo base_url('auth/login'); ?>" class="brand-logo center">
                <img src="<?php echo base_url('img/logoku.png'); ?>" width="200" 
                height="50" alt="Hemat Warrior">
              </a>
          </div>
      </nav>
      
    </header>
        
    <main style="background-image: url('<?php echo base_url('img/bg1.png') ?>');">
      <div class="container login-box">
        <div class="card z-depth-5">
          <div class="card-content">
              <div class="row">
                <div class="col s12">
                  <ul class="tabs tabs-fixed-width">
                    <li class="tab col s3"><a href="#basic-tab">Login</a></li>
                    <li class="tab col s3"><a href="#password-tab">Sign Up</a></li>
                  </ul>
                </div>
                <div id="basic-tab" class="col s12">
                  <form class="col s12" id="login-form" method="post" action="<?php echo base_url('auth/login'); ?>">
                    <div class="row">
                      <?php if(validation_errors()): ?>
                      <div class="col s12">
                        <div class="card-panel red">
                          <span class="white-text"><?php echo validation_errors('<p>', '</p>'); ?></span>
                        </div>
                      </div>
                      <?php endif; ?>
                      <div class="input-field col m12">
                        <input id="username" type="text" class="validate" name="username">
                        <label for="username">Email</label>
                      </div>
                      <div class="input-field col m12">
                        <input id="password" type="password" class="validate" name="password">
                        <label for="password" data-error="Password yang anda masukkan salah">Password</label>
                      </div>
                      <div class="input-field col m12 left-align">
                            Belum punya akun? <a href="<?php echo base_url('auth/signup'); ?>">Daftar Sekarang!</a>
                        </div>
                      <div class="input-field col m12 right-align">
                        <button class="btn waves-effect waves-light btn-primary btn-pill red lighten-2" type="submit" name="submit" value="login">
                          Login
                        </button>
                      </div>
                    </div>
                  </form>
                </div>

                <div id="password-tab" class="col s12">
                  <form class="col s12" id="login-form" method="post" action="<?php echo base_url('auth/signup'); ?>" href="#password-tab">
                    <div class="row">
                    <?php if(validation_errors()): ?>
                      <div class="col s12">
                        <div class="card-panel red">
                          <span class="white-text"><?php echo validation_errors('<p>', '</p>'); ?></span>
                        </div>
                      </div>
                    <?php endif; ?>
                    <?php if($message = $this->session->flashdata('message')): ?>
                      <div class="col s12">
                        <div class="card-panel <?php echo ($message['status']) ? 'green' : 'red'; ?>">
                          <span class="white-text"><?php echo $message['message']; ?></span>
                        </div>
                      </div>
                    <?php endif; ?>
                      <div class="input-field col m12">
                        <input id="nama" type="text" class="validate" name="nama">
                        <label for="nama">Nama Lengkap</label>
                      </div>
                      <div class="input-field col m12">
                        <input id="username" type="text" class="validate" name="username">
                        <label for="username">Email</label>
                      </div>
                      <div class="input-field col m12">
                        <input id="password" type="password" class="validate" name="password">
                        <label for="password" data-error="Password yang anda masukkan salah">Password</label>
                      </div>
                      <div class="input-field col m12 left-align">
                            Sudah punya akun? Silakan <a href="<?php echo base_url('auth/login'); ?>">login</a>
                        </div>
                      <div class="input-field col m12 right-align">
                        <button class="btn waves-effect waves-light btn-primary btn-pill red lighten-2" type="submit" name="submit" value="login">
                          Sign Up
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <footer class="page-footer blue-grey lighten-1">
        <div class="footer-copyright blue-grey lighten-1">
            <div class="nav-wrapper container center">
              <p>Follow Us! 
            
                | Instagram: <a rel="nofollow" href="https://templatemo.com">@hematwarrior</a></p>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="<?php echo base_url('assets/materialize/js/materialize.js'); ?>"></script>
  </body>
</html>