<body>
  <header>
      <div #id="top-box" class="cm-top-box">
      </div>
      <nav class="navbar navbar-expand-lg navbar-light bg-nav">
        <a class="navbar-brand1" href="<?php echo base_url('inicio'); ?>">
          <!--<img src="assets/img/principal/logo1.png" width="120" height="80" alt="">-->
          <img src="<?php echo base_url('assets/img/principal/logo1.png'); ?>" width="120" height="80">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

<!--------------------------------------MENU PARA ADMINISTRADOR----------------------------------->
          <?php if( ($this->session->userdata('logged_in')) and ($perfil_id == '1') ) { ?> 
            <ul class="navg navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('muestra_consultas'); ?>">
                  <!--<img src="assets/img/menu/consultas.svg" width="20" height="16"> CONSULTAS-->
                  <i class="fas fa-envelope-open-text"></i>  CONSULTAS
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('muestra_ventas'); ?>">
                  <i class="fas fa-cash-register"></i>  VENTAS
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('productos_todos');?>">
                  <i class="fab fa-shopify"></i>  PRODUCTOS
                </a>  
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('usuarios_todos');?>">
                  <i class="fas fa-users"></i>  USUARIOS
                </a>  
              </li>
            </ul>
            <ul class="nav navbar-nav ml-auto">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role  ="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-user-cog"></i> Hola, <?= $nombre ?>
                </a>
                <div class="dropdown-menu fondoDeMenu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="<?php echo base_url('muestra_datos');?>">
                    <i class="far fa-edit"></i> Mis Datos
                  </a>
                  <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo base_url('logout');?>">
                      <i class="fas fa-sign-out-alt"></i>Cerrar Sesion
                    </a>
                  </div>
              </li>
            </ul>
<!--------------------------------------MENU PARA CLIENTE----------------------------------------->
            <?php } else if( ($this->session->userdata('logged_in')) and ($perfil_id == '2')) { ?> 
              <ul class="navg navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url('inicio'); ?>" >
                    <i class="fas fa-apple-alt"></i>  INICIO</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="<?php echo base_url('productos'); ?>">
                    <i class="fab fa-shopify"></i>  PRODUCTOS</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="<?php echo base_url('planes'); ?>">
                    <i class="fas fa-book"></i>  PLANES</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url('acerca'); ?>">
                    <i class="fas fa-info-circle"></i>  ACERCA DE</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url('consulta'); ?>">
                    <i class="fas fa-envelope-open-text"></i>  CONSULTAS</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url('terminos'); ?>">
                    <i class="fas fa-scroll"></i>  TERMINOS</a>
                </li>
              </ul>
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url('carro');?>">
                    <img src="assets/img/principal/carro.png" height="25" width="25" alt="carrito">
                    <!--<i class="material-icons">shopping_cart</i>-->
                  </a>
                </li>
                <li class="nav-item dropdown ">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user"></i> Hola, <?= $nombre ?>
                  </a>
                  <div class="dropdown-menu fondoDeMenu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="<?php echo base_url('muestra_compras');?>">
                        <i class="fas fa-shopping-bag"></i> Mis Compras
                      </a>
                      <a class="dropdown-item text-dark" href="<?php echo base_url('muestra_datos');?>">
                        <i class="far fa-edit"></i> Mis Datos
                      </a>
                    <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="<?php echo base_url('logout');?>">
                        <i class="fas fa-sign-out-alt"></i> Salir
                      </a>
                  </div>
                </li>
              </ul>
            <?php } else { ?> 
<!--------------------------------------MENU PARA VISITANTE-------------------------------------->
            <ul class="navg navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('inicio'); ?>" >
                  <i class="fas fa-apple-alt"></i>  INICIO</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="<?php echo base_url('productos'); ?>">
                  <i class="fab fa-shopify"></i>  PRODUCTOS</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="<?php echo base_url('planes'); ?>">
                  <i class="fas fa-book"></i>  PLANES</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('acerca'); ?>">
                  <i class="fas fa-info-circle"></i>  ACERCA DE</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('consulta'); ?>">
                  <i class="fas fa-envelope-open-text"></i>  CONSULTAS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('terminos'); ?>">
                  <i class="fas fa-scroll"></i>  TERMINOS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('regis'); ?>">
                  <i class="fas fa-address-card"></i>  REGISTRO</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('login'); ?>">
                  <i class="fas fa-user"></i>  INICIAR SESION</a>
              </li>
            </ul>
          <?php } ?>
        </div>
      </nav>
      <div id="bottom-box" class="cm-bottom-box">
      </div>
  </header>  