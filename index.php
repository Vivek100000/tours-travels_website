<!DOCTYPE html>
<html lang="en">

<head>
  <title>Document</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
  <link rel="stylesheet" type="text/css" href=".\css\style.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">
      <img src=".\images\summer_holiday_vacation_tourism_and_travel_icon_225375.png" width="30" height="30" class="d-inline-block align-top" alt=""> Vicky Tours</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link ml-1 mr-1" href="#service">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link ml-1 mr-1" href="#about" >about</a>
        </li>
        <li class="nav-item">
          <a class="nav-link ml-1 mr-1" href="#contact">contact</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
  <div id="demo" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
      <li data-target="#demo" data-slide-to="3"></li>
    </ul>
    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src=".\images\griffith-observatory-g967eb50c6_1920.jpg" alt="Poland" width="1280" height="500">
        <div class="carousel-caption">
          <h3>Los Angeles</h3>
          <p><b>welcome to the "city of Angels"</b></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src=".\images\Sunrises_and_sunsets_Mountains_Scenery_Trees_Grass_558880_4000x1882.jpg" alt="Poland" width="1280" height="500">
        <div class="carousel-caption">
          <h3>Poland</h3>
          <p><b>"Poland is the natural bridge between East and West."</b></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src=".\images\polynesia-gf8904e173_1920.jpg" alt="Maldives" width="1280" height="500">
        <div class="carousel-caption">
          <h5>Maldives</h5>
          <p><b>"The perfect place to fall in love again"</b></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src=".\images\1108495.png" alt="Dubai" width="1280" height="500">
        <div class="carousel-caption">
          <h5>Dubai</h5>
          <p><b>"Dubai: where luxury meets innovation."</b></p>
        </div>
      </div>
    </div>
    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>
  <section class="my-5" id="about">
    <div class="py-5">
      <h2 class="text-center">About Us</h2>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
          <img src=".\images\road-g6009ab151_1920.jpg" class="img-fluid aboutimg">
        </div>
        <div class="col-lg-6 col-md-6 col-12">
          <h2 class="text-left">I am Vivek Negi</h2>
          <br>
          <p>
            My tours and travels company arrange
            <br>
            International trips and vaccations to various exotic
            <br>
            locations of the world along with extra care for
            <br>
            senior citizens our company has been given a 5 star
            <br>
            rating by the ministry of tourism. the travel plans
            <br>
            are quite affordable and have a reasonable price
            <br>
            compared to other options available in the market
          </p>
          <a href="about.php" class="btn btn-success"> know more </a>
        </div>
      </div>
    </div>
  </section>
  <section class="my-5" id="service">
    <div class="py-5">
      <h2 class="text-center">Our Services</h2>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
          <div class="card" style="width: 400px;">
            <img class="card-img-top img1" src=".\images\photo-1549558549-415fe4c37b60.jpeg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Famous Lakes</h5>
              <p class="card-text">one of the famous lakes in alaska</p>
              <button type="button" class="btn btn-primary">See Profile</button>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <div class="card" style="width: 400px;">
            <img class="card-img-top" src=".\images\hollywood-sign-ga6f5e361f_1920.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Los Angeles</h5>
              <p class="card-text">Hollywood Sign</p>
              <button type="button" class="btn btn-primary">See Profile</button>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <div class="card" style="width: 400px;">
            <img class="card-img-top" src=".\images\los-angeles-gc92666cc5_1920.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">los Angeles</h5>
              <p class="card-text">City Night View</p>
              <button type="button" class="btn btn-primary">See Profile</button>
            </div>
          </div>
        </div>
      </div>
  </section>
  <section class="my-5">
    <div class="py-5">
      <h2 class="text-center">Gallary</h2>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
          <img src=".\images\Nigardsbreen.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src=".\images\Reine-Norway-1.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src=".\images\Femundsmarka-Norway.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src=".\images\Flam-Norway.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src=".\images\Stavanger-Norway.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src=".\images\Rondane.jpg" class="img-fluid pb-4">
        </div>
      </div>
    </div>
  </section>
  <section class="my-5" id="contact">
    <div class="py-5">
      <h2 class="text-center">Contact Us</h2>
    </div>
    <div class="w-50 m-auto">
      <form action="userinfo.php" method="post">
        <div class="form-group mb-3">
          <label>Username</label>
          <input type="text" name="user" class="form-control" placeholder="Username">
        </div>
        <div class="form-group mb-3">
          <label>E-mail</label>
          <input type="text" name="email" class="form-control" placeholder="E-mail">
        </div>
        <div class="form-group mb-3">
          <label>Mobile</label>
          <input type="text" name="mobile" class="form-control" placeholder="Phone No.">
        </div>
        <div class="form-group mb-3">
          <label>Comment</label>
          <textarea name="comment" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
      </form>
    </div>
  </section>
  <footer>
    <h3 class = "p-3 mb-0 bg-dark text-white"> @vinegmail.com</h3>
  </footer>
</body>

</html>