<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Collection MARA</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">



  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/index.css">

</head>

<body style="background-color: #FFFAFA;border: 2px solid white;">
 
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-secondary fixed-top" >
    <div class="container" >
      <a class="navbar-brand" href="#">C_MARA</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="ml15">
              <span class="word" >=></span>
              <span class="word" >Collection</span>
              <span class="word"> MARA</span></div>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
         <!--  <li class="nav-item active" >
            <a class="nav-link" href="#">About</a>
          </li> -->
          <li class="nav-item active">
            <a class="nav-link" href="#produit">Nos Produits</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3" style=" background-color: #FAFAFA; border: 1px solid #abc; border-radius: 20px 20px;">
        <br>
       <marquee DIRECTION="down"> <h1 class="my-4">Mamadou Macky Thiam 78-544-55-67</h1> </marquee>
      
        <div class="list-group"  >
          <a href="#" class="list-group-item" style="background-color: #abc; color: white;">Livres</a>
          <a href="#" class="list-group-item" style="background-color: #abc; color: white;">Romans</a>
          <a href="#" class="list-group-item" style="background-color:#abc; color: white;">Autres</a>
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9" id="produit">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel" >
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox" style=" border-radius: 20px 20px ;border: 2px solid #abc;" >
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="./images/image5.jpg" alt="First slide" style="width: 1500px;height:200px;">
            </div>
            <div class="carousel-item ">
             <img class="d-block img-fluid" src="./images/image3.jpg"  alt="Second slide" style="width: 1500px;height:200px;">
            </div>
            <!-- <div class="carousel-item">
              <img class="d-block img-fluid" src="./images/image5.jpg" alt="Third slide" style="width: 1500px;height:200px;" >
            </div> -->
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="row" >


    <?php  for ($i=0; $i <21 ; $i++) { 
      # code...
     ?>
          <div class="col-lg-4 col-md-6 mb-4" >
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="./images/image4.jpeg"  alt="" style="border: 1px black solid;border-radius: 10px 10px;"></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">MATH TS2</a>
                </h4>
                <h5>10.000 fcfa</h5>
                <p class="card-text">Les mathématiques désignent l'ensemble des disciplines qui procèdent selon la méthode déductive et qui étudient les propriétés des êtres abstraits comme les nombres, les figures géométriques ainsi que les relations qui existent entre eux.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;
                 <span style="float: right; color: red;">+voir Plus</span></small>
              </div>
            </div>
          </div>

        <?php  } ?>




       

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
<section id="contact">
  <br>
   <?php include('./contact/index.php') ?>   
</section>

  <!-- Footer -->
  <footer class="py-3 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy;Deme_Einstein
     <!--  <span style="float: left;">Tel:78-544-55-67    email:gkgkgkkg@gmailm.com</span> --></p>

    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 <!--  <script type="text/javascript" src="./index.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

  <!-- Animation collection mara -->
   <script type="text/javascript">
    anime.timeline({loop: true})
  .add({
    targets: '.ml15 .word',
    scale: [14,1],
    opacity: [0,1],
    easing: "easeOutCirc",
    duration: 900,
    delay: (el, i) => 900 * i
  }).add({
    targets: '.ml15',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 2000
  });
  </script>


 

</body>

</html>
