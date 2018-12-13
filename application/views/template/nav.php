<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="#">
          <?php 
            if($this->session->userdata('session_condition'))
            {
              echo $usuario;
            }
          ?>      
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?php base_url()?>Inicio">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Sobre Nosotros</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="#">Contacto</a>              
            </li>           
            <?php if($this->session->userdata('session_condition')){?>
              <li class="nav-item">
                <a href="<?=base_url()?>profile">mi perfil</a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url()?>login/logout" style="color: #ffc107;">
                cerrar sesion
                </a>
              </li>
            <?php }
            else{?>

              <li class='dropdown'>
                <a class='dropdown-toggle' href='#' data-toggle='dropdown' style="background: none; font-size: 12px; font-weight: 800;color: #ffc107; ">INICIAR SESION ... <strong class='caret'></strong></a>
                <div class='dropdown-menu' style='padding: 10px; padding-bottom: 0px; background: none; width: 400px; margin-left: -200px;'>
                  <form action='<?= base_url();?>login' method='post' accept-charset='UTF-8' role="form">
                    <div class='form-group'>
                      <input class='form-control large' style='text-align: center;' type='text' name='user' placeholder='usuario'/>
                    </div>
                    <div class='form-group'>
                      <input class='form-control large' style='text-align: center;' type='password' name='password' placeholder='contraseña' />
                    </div>
                    <div class='form-group'>
                      <button class='btn' style='width: 380px; background-color: #ffc107;' type='submit'>INGRESAR</button>
                    </div>
                    </form> <br>
                    <span class="">regitrarse</span>
                </div>
              </li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </nav>

