<?php
session_start();
 if(!isset($_SESSION['login']))
 {
   header("location:index.php");
 }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <!-- CSS only -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
     <style type="text/css">
      .topic{
        text-align: center;
        padding: 20px;
      }
      .bt-1{
        padding-left:3px ;
      }

     </style>
</head>
<body>

 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">iCoder</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact us</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Courses
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Python</a></li>
            <li><a class="dropdown-item" href="#">java</a></li>
            <li><a class="dropdown-item" href="#">javascript</a></li>
            <li><a class="dropdown-item" href="#">c++</a></li>
            <li><a class="dropdown-item" href="#">c</a></li>

           
          </ul>
      
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success me-2" type="submit">Search</button>
        <button type="button" class="btn btn-outline-success me-2" data-bs-toggle="modal" data-bs-target="#login">login</button>
        <button type="button" class="btn btn-outline-success me-2" data-bs-toggle="modal" data-bs-target="#signup">signup</button>
        <?php
        include "login.php";
        include "signup.php";
        ?>
      </form>
    </div>
  </div>
</nav>



</body>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</html>