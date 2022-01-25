<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="style/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@100&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="data.php">
  <title>Project 2</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light text-danger bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">FOOD FOR FOODIES</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>

  </nav>

  <!-- adding carosel -->

  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/lunch.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="images/dinner.jfif" class="d-block w-100" alt="no image found">
      </div>
      <div class="carousel-item">
        <img src="images/breakfast.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  </div>

  <!-- about us column -->
  <section class="my-5">
    <!-- my=margin in y axis, i.e. top and down =5px  !-->
    <div>
      <h2 class="text-center">About Us</h2>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
          <img id="rest" src="images/rest.jpg" alt="no pic found">
        </div>
        <div class="col-lg-6 col-md-6 col-12">
          <p class="para my-5 py-3">WE are a proud restaurant hoping to serve you the great cuisines available in your city
            we hope to serve you as Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur quae ullam delectus atque neque culpa cupiditate dolores laudantium, quidem earum non eius natus modi sunt recusandae eaque accusamus quasi esse.
          </p>
          <div class="m-2">
            <a href="about.php" class="btn btn-success m-2 p-2"> About </a>
          </div>
        </div>
      </div>
    </div>

  </section>

  <!-- Our section services -->
  <section>
    <div class="our_services">
      <h2 class="text-center">Our Services</h2>
    </div>
    <div class="container-fluid my-4 ">
      <div class="row" style="height: auto;">
        <div class="col-sm-4">
          <div class="card ">
            <div class="card-body  bg-info">
              <h5 class="card-title" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Hakka Noodles</h5>
              <p>
                <img class="card-img-top" style="height: 350px;" src="images/hakka.jpg" alt="no image found" srcset="">
              </p>
              <p class="card-text">Our speciality is hakka noodles . Brings us joy to serve you this. contact us for more</p>
              <a href="about.php" class="btn btn-primary">Order Now</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
            <div class="card-body bg-info">
              <h5 class="card-title" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Tandoori Chicken</h5>
              <p>
                <img class="card-img-top" style="height: 350px;" src="images/chicken.jpg" alt="no image found" srcset="">
              </p>
              <p class="card-text">Who doesn't love tandoori chicken? Get this at a very cheap price. contact us for more</p>
              <a href="about.php" class="btn btn-primary">Order Now</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
            <div class="card-body bg-info">
              <h5 class="card-title" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Biriyani</h5>
              <p>
                <img class="card-img-top" style="height: 350px;" src="images/chicken.jpg" alt="no image found" srcset="">
              </p>
              <p class="card-text">Never get tired of eating Biriyani? Order Now. Contact us for free delivery</p>
              <a href="about.php" class="btn btn-primary">Order Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>


  <section class="form">
    <div class="m-md-auto m-lg-2 p-lg-2 p-md-auto text-center" style="font-family:  'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;"> Contact Us
    </div>
    <div class="w-50 m-auto">
      <form action="data.php" method="POST">
        <div class="form-group">
          <label>Name</label>
          <input type="text" name="name" id="name" class="form-control" placeholder="name" pattern="^[A-Za-z0-9]+$" required>
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="text" name="email" id="email" placeholder="email" pattern="[a-z0-9]+@[a-z0-9]+\.[a-zA-Z]{2,4}$" class="form-control" required>
        </div>
        <div class="form-group">
          <label>Phone Number</label>
          <input type="text" name="phone" id="phone" placeholder="must begin with 6,7,8,9" class="form-control" pattern="[6-9]{1}[0-9]{9}" required>
        </div>
        <div class="form-group">
          <label>Comments</label>
          <textarea class="form-control" name="comment">
          </textarea>
        </div>
        <a href="data.php"><input type="submit" class="btn btn-primary mt-2" value="submit"></a>
      </form>
    </div>

  </section>
  <!-- <footer>
    <div class="card">
      <div class="card-header bg-secondary text-light">
        Contact Us
      </div>
      <div class="card-body bg-success">
        <h5 class="card-title text-center text-light">Social Handles</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
      </div>
    </div>
  </footer> -->
  <?php include 'footer.php'; ?>
</body>

</html>