

<?php 

if($_SESSION['role'] == 'admin'){?>



<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="#">Mini Project</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/mini-project/admin/dashboard.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/mini-project/admin/users/index.php">Users</a>
        </li>
            <li class="nav-item">
          <a class="nav-link" href="/mini-project/admin/departments/index.php">Departments</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Settings
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#"><?= $_SESSION['name'] ?></a></li>
            <li><a class="dropdown-item" href="#"><?= $_SESSION['username'] ?></a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="./../public/logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<?php } else { ?>



<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="#">Mini Project</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="dashboard.php">Home</a>
        </li>
       

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Settings
          </a>

          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#"><?= $_SESSION['name'] ?></a></li>
            <li><a class="dropdown-item" href="#"><?= $_SESSION['username'] ?></a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="./../public/logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<?php }