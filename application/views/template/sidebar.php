<aside>
  <ul id="sidenav" class="side-nav fixed">
    <li>
      <div class="userView">
        <div class="background">
          <img src="<?php echo base_url('img/bg1.png'); ?>">
        </div>
        <a href="#!user"><img class="circle" src="<?php echo base_url('assets/images/noavatar.png'); ?>"></a>
        <a href="#!name"><span class="black-text name"><?php echo ucwords(strtolower($this->session->userdata('nama'))); ?></span></a>
        <a href="#!username"><span class="black-text username"><?php echo (strtolower($this->session->userdata('username'))); ?></span></a>
      </div>
    </li>
    <li>
      <a class="waves-effect" href="<?php echo base_url('dashboard'); ?>"><i class="material-icons">home</i>Home</a>
    </li>

    <!-- <li>
      <a class="waves-effect" href="<?php echo base_url('events'); ?>"><i class="material-icons">event</i>Events</a>
    </li> -->
    
    <li>
      <div class="divider"></div>
    </li>

    <?php if($this->session->userdata('level') === 'mitra'): ?>
      <!-- <li>
        <a class="subheader">Mitra</a>
      </li> -->
      
      <li>
        <a class="waves-effect" href="<?php echo base_url('promo'); ?>"><i class="material-icons">people</i>Promo</a>
      </li>
      
      <li>
        <div class="divider"></div>
      </li>
    <?php endif; ?>

    <?php if($this->session->userdata('level') === 'administrator'): ?>
      <!-- <li>
        <a class="subheader">Admin</a>
      </li> -->
      
      <li>
        <a class="waves-effect" href="<?php echo base_url('users'); ?>"><i class="material-icons">people</i>Mitra</a>
      </li>
      
      <li>
        <div class="divider"></div>
      </li><br>
    <?php endif; ?>

    <?php if($this->session->userdata('level') !== 'administrator'): ?>
      <li>
        <a class="waves-effect" href="<?php echo base_url('profile'); ?>"><i class="material-icons">person</i>Profil</a>
      </li>

      <li>
          <div class="divider"></div>
        </li>
    <?php endif; ?>

    <li>
      <a class="waves-effect"  href="<?php echo base_url('auth/logout'); ?>"><i class="material-icons">exit_to_app</i>Logout</a>
    </li>
    
  </ul>
</aside>