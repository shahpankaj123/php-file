<?php


$con=mysqli_connect("localhost","root","","icoder");
$error1=0;
$error2=0;
$error3=0;

if ($_SERVER['REQUEST_METHOD']=='POST') {
  $us=$_POST['username'];
  $ps=$_POST['Password'];
  $cps=$_POST['cpassword'];

  $sqi="SELECT * FROM `data` WHERE username='$us'";
  $result=mysqli_query($con,$sqi);
  $num=mysqli_num_rows($result);
  if($num==1)
  {
    $error1=1;
  }
  else{

  if($ps==$cps)
  {
    $sql="INSERT INTO `data` (`username`, `password`, `Time`) VALUES ('$us', '$ps', current_timestamp())";
    $result=mysqli_query($con,$sql);
     $error2=1;
  }
  else{
     $error3=1;
  }
 }
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
      .nav1{
        overflow: auto;
      }
      .nav1{
        overflow: auto;
      }
      

     </style>
</head>
<body>

 <nav class="navbar navbar-expand-lg navbar-dark bg-dark nav1">
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
<?php
if ($error1==1) {
  echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
  <strong>Error!</strong> username already exists.
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  </div>";
}
if ($error2==1) {
  echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
  <strong>successfully</strong> your account created.
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  </div>";
}
if ($error3==1) {
  echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
  <strong>Error!</strong> password donot match.
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  </div>";
}
?>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false" class="nav2">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="pic\140.jpg" class="d-block w-100" alt="..." height="400px" width="1600px">
    </div>
    <div class="carousel-item">
      <img src="pic\140.jpg" class="d-block w-100" alt="..." height="400px" width="1600px">
      
    </div>
    <div class="carousel-item">
      <img src="pic\140.jpg" class="d-block w-100" alt="..." height="400px" width="1600px">
     
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  <div class="topic"><h1>Our Services</h1></div>
  <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <img src="pic\140.jpg" height="280px">

            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="https://www.youtube.com/watch?v=sCOw5y1RQpY&t=14801s" target="_blank"><button type="button" class="btn btn-sm btn-outline-secondary"><b>Watch</b></button></a>
                  
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="pic\fs.jpg" height="280px">
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary"><b>Watch</b></button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="https://cdn.pixabay.com/photo/2016/11/30/20/44/computer-1873831_960_720.png" height="280px">
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary"><b>Watch</b></button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="fs.jpg" height="280px">
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary"><b>Watch</b></button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="fs.jpg" height="280px">
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary"><b>Watch</b></button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="fs.jpg" height="280px">
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary"><b>Watch</b></button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>

       


</body>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</html>
