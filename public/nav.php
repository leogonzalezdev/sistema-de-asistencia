<div class="sidebar close">
    <div class="logo-details">
      <img src="img/logo.png" alt="Accor" width="70" height="70">
      <span class="logo_name">Accor</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="employees.php">
          <i class='bx bx-group'></i>
          <span class="link_name">Empleados</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="employees.php">Empleados</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="attendance_register.php">
            <i class='bx bxs-user-detail'></i>
            <span class="link_name">Asistencia</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Asistencia</a></li>
          <li><a href="attendance_register.php">Tomar Asistencia</a></li>
          <li><a href="attendance_report.php">Ver Asistencia</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-book-alt' ></i>
            <span class="link_name">Posts</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Posts</a></li>
          <li><a href="#">Web Design</a></li>
          <li><a href="#">Login Form</a></li>
          <li><a href="#">Card Design</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-pie-chart-alt-2' ></i>
          <span class="link_name">Analytics</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Analytics</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-line-chart' ></i>
          <span class="link_name">Chart</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Chart</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-plug' ></i>
            <span class="link_name">Plugins</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Plugins</a></li>
          <li><a href="#">UI Face</a></li>
          <li><a href="#">Pigments</a></li>
          <li><a href="#">Box Icons</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-compass' ></i>
          <span class="link_name">Explore</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Explore</a></li>
        </ul>
      </li>
      <li>
        <a href="help.php">
          <i class='bx bxs-help-circle' ></i>
          <span class="link_name">Soporte</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="help.php">Soporte</a></li>
        </ul>
      </li>
      <li>
        <a href="settings.php">
          <i class='bx bx-cog' ></i>
          <span class="link_name">Ajustes</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="settings.php">Ajustes</a></li>
        </ul>
      </li>
      <li>
    <div class="profile-details">
      <div class="profile-content">
        <img src="img/admin-settings-male.png" alt="profileImg">
      </div>
      <div class="name-job">
        <div class="profile_name">
          <?php
            echo $_SESSION['usuario'];
          ?>
        </div>
        <div class="job">Administrador</div>
      </div>
      <a href="../cerrar.php"><i class='bx bx-log-out' ></i></a>
    </div>
  </li>
</ul>
  </div>
  <section class="home-section m-0 p-0">
    <div class="home-content">
      <i class='bx bx-menu' id="menuBurger"></i>
      <span class="text">Bienvenido a Accor </span>
    </div>
  <script src="js/navbar.js"></script>
