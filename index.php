<?php
if (isset($_SESSION['status'])) {
  if ($_SESSION['userlvl'] == 'admin') {
    echo "<script>window.location.href='admin.php'</script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AUTO LOAN EXPRESS</title>

  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg fixed-top px-2 rounded-5 bg-white mx-5 border-bottom border-dark">
    <div class="container-fluid">
      <a class="navbar-brand me-auto" href="index.php">
        <img src="images/left.png" alt="Bootstrap" width="100" height="60">
        <img src="images/right.png" alt="Bootstrap" width="250" height="60">
      </a>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item mx-lg-1">
              <a class="nav-link active" href="index.php">Home</a>
            </li>
            <li class="nav-item mx-lg-1">
              <a class="nav-link" href="car_menu.php">Car Menu</a>
            </li>
            <li class="nav-item mx-lg-1">
              <a class="nav-link" href="about.php">About</a>
            </li>
          </ul>
        </div>
      </div>
      <?php
      include('database.php');
      session_start();

      // Check if $_SESSION['status'] is set before accessing it
      if (isset($_SESSION['status'])) {
        if ($_SESSION['status'] == 'valid') {
          include('btns/userbtn.php');
        } else {
          include('btns/loginbtn.php');
        }
      } else {
        // If $_SESSION['status'] is not set, set it to 'invalid'
        $_SESSION['status'] = 'invalid';
        include('btns/loginbtn.php');
      }
      ?>
      <button class="navbar-toggler border-0 pe-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>

  <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          Are you sure you want to log out?
        </div>
        <div class="modal-footer border-0">
          <button type="button" class="btn btn-success" data-bs-dismiss="modal">No</button>
          <a href="logout.php" class="btn btn-danger">Yes</a>
        </div>
      </div>
    </div>
  </div>

  <div class="hero-section">
    <div class="container d-flex flex-column justify-content-center align-items-center fs-1 text-white">
      <h1 class="mt-5 pt-5">Auto Deal Express</h1>
      <p>An online process car loan platform that gives hassle-free and fast approval for clients. Affiliated in all
        dealerships and bank nationwide</p>
      <a class="apply-btn mt-3" href="about.php"><b>About Us!</b></a>
      <div class="container h-25 p-5">
        <?php
        if (isset($_SESSION['status'])) {
          if ($_SESSION['status'] == 'valid') {
            include('btns/alert.php');
          }
        }
        ?>
      </div>
    </div>
  </div>

  <div class="carousel-section mt-5 mb-4">
    <div class="container p-0">
      <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://images.unsplash.com/photo-1551830820-330a71b99659?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100 bg-danger" alt="1" height="521.9">
          </div>
          <div class="carousel-item">
            <img src="images/car-images/everest.jpg" class="d-block w-100 bg-primary" alt="2" height="521.9">
          </div>
          <div class="carousel-item">
            <img src="https://i.pinimg.com/originals/2e/ed/30/2eed307f75e1a8a6a20c7a1add65a057.jpg" class="d-block w-100 bg-success" alt="3" height="521.9">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>

  <div class="container text-center p-0 my-4">
    <h1 class="bg-dark mx-2 py-3 text-white">| STEPS ON HAVING YOUR DREAM CAR |</h1>
  </div>

  <div class="steps-section">
    <div class="container d-flex justify-content-center align-items-center gap-2">
      <div class="step text-center">
        <img src="images/icons/car.png">
        <h3>PICK YOUR CAR</h3>
        <p>First Step Instruction Here</p>
      </div>
      <div class="step text-center">
        <img src="images/icons/car.png">
        <h3>INQUIRE ONLINE</h3>
        <p>Second Step Instruction Here</p>
      </div>
      <div class="step text-center">
        <img src="images/icons/car.png">
        <h3>SUBMIT</h3>
        <p>Third Step Instruction Here</p>
      </div>
      <div class="step text-center">
        <img src="images/icons/car.png">
        <h3>PROCESS</h3>
        <p>Fourth Step Instruction Here</p>
      </div>
      <div class="step text-center">
        <img src="images/icons/car-rental.png">
        <h3>RELEASED</h3>
        <p>Fifth Step Instruction Here</p>
      </div>
    </div>
  </div>

  <div class="container text-center p-0 my-4">
    <h1 class="bg-dark mx-0 py-3 text-white"> | PICK YOUR CAR IN THESE BRANDS |</h1>
  </div>

  <div class="brand-section">
    <div class="container d-flex flex-column justify-content-center align-items-center p-0">
      <div class="header-container d-flex align-items-center w-100 px-3 mt-4 gap-3">
        <button type="button" class="btn btn-dark" disabled>Brand</button>
        <p class="h3 mt-2">Units</p>
      </div>
      <div class="container d-flex justify-content-evenly align-items-center">
        <a href="car_menu.php?brand=ford" class="bg-white shadow-lg rounded-2">
          <div class="car-brand d-flex align-items-center">
            <img src="images/carbrand-logo/ford.png" class="img-fluid object-fit-cover" alt="...">
          </div>
        </a>
        <a href="car_menu.php?brand=geely" class="bg-white shadow-lg rounded-2">
          <div class="car-brand d-flex align-items-center">
            <img src="images/carbrand-logo/geely.png" class="img-fluid object-fit-cover" alt="...">
          </div>
        </a>
        <a href="car_menu.php?brand=honda" class="bg-white shadow-lg rounded-2">
          <div class="car-brand d-flex align-items-center">
            <img src="images/carbrand-logo/honda.png" class="img-fluid object-fit-cover" alt="...">
          </div>
        </a>
        <a href="car_menu.php?brand=mitsubishi" class="bg-white shadow-lg rounded-2">
          <div class="car-brand d-flex align-items-center">
            <img src="images/carbrand-logo/mitsubishi.jpg" class="img-fluid object-fit-cover" alt="...">
          </div>
        </a>
        <a href="car_menu.php?brand=nissan" class="bg-white shadow-lg rounded-2">
          <div class="car-brand d-flex align-items-center">
            <img src="images/carbrand-logo/nissan.jpg" class="img-fluid object-fit-cover" alt="...">
          </div>
        </a>
        <a href="car_menu.php?brand=toyota" class="bg-white shadow-lg rounded-2">
          <div class="car-brand d-flex align-items-center">
            <img src="images/carbrand-logo/toyota.png" class="img-fluid object-fit-cover" alt="...">
          </div>
        </a>
      </div>
    </div>
  </div>

  <div class="popular-section d-flex flex-column gap-0 py-5">
    <div class="newly-section container h-50">
      <h3><b class="border-bottom border-dark">POPULAR CAR</b></h3>
      <div class="container d-flex justify-content-center align-items-center gap-5 p-0">
        <div class="car_image_container h-100 pt-3 shadow rounded-4">
          <div class="container">
            <a href=""><img src="images/car-images/everest.png" class="img-fluid h-100 w-100 rounded-3" alt="..."></a>
          </div>
          <p class="carname mt-3 text-center">Everest</p>
          <p class="carprice text-center">P90,000,000</p>
          <a href="" class="car-link"><i>
              <p class="text-center">View more
            </i></p></a>
        </div>
        <div class="car_image_container h-100 pt-3 shadow rounded-4">
          <div class="container">
            <a href=""><img src="images/car-images/everest.png" class="img-fluid h-100 w-100 rounded-3" alt="..."></a>
          </div>
          <p class="carname mt-3 text-center">Everest</p>
          <p class="carprice text-center">P90,000,000</p>
          <a href="" class="car-link"><i>
              <p class="text-center">View more
            </i></p></a>
        </div>
        <div class="car_image_container h-100 pt-3 shadow rounded-4">
          <div class="container">
            <a href=""><img src="images/car-images/everest.png" class="img-fluid h-100 w-100 rounded-3" alt="..."></a>
          </div>
          <p class="carname mt-3 text-center">Everest</p>
          <p class="carprice text-center">P90,000,000</p>
          <a href="" class="car-link"><i>
              <p class="text-center">View more
            </i></p></a>
        </div>
        <div class="car_image_container h-100 pt-3 shadow rounded-4">
          <div class="container">
            <a href=""><img src="images/car-images/everest.png" class="img-fluid h-100 w-100 rounded-3" alt="..."></a>
          </div>
          <p class="carname mt-3 text-center">Everest</p>
          <p class="carprice text-center">P90,000,000</p>
          <a href="" class="car-link"><i>
              <p class="text-center">View more
            </i></p></a>
        </div>
      </div>
    </div>
    <div class="popcar-section container p-0 h-50">
      <div class="container">
        <h3><b class="border-bottom border-dark">Newly Launch Car</b></h3>
        <div class="car_image_container d-flex py-3 shadow rounded-4">
          <div class="container">
            <a href=""><img src="images/car-images/everest.png" class="img-fluid h-100 w-100 rounded-3" alt="..."></a>
          </div>
          <div class="container p-4 d-flex flex-column justify-content-center">
            <div class="container d-flex px-0 align-items-center">
              <h1 class="carname"><b>Everest</b></h1>
              <a class="login-btn ms-auto" href="login.php">Inquire</a>
            </div>
            <p class="carprice"><b>PRICE:</b> P90,000,000</p>
            <p class="h5"><b>SPECIFICATION</b></p>
            <div class="container p-0">
              <table class="table table-striped">
                <tbody>
                  <tr>
                    <th scope="row">Body Type</th>
                    <td>SUV</td>
                  </tr>
                  <tr>
                    <th scope="row">No. of seats</th>
                    <td>7</td>
                  </tr>
                  <tr>
                    <th scope="row">Fuel Type</th>
                    <td colspan="2">Diesel</td>
                  </tr>
                  <tr>
                    <th scope="row">Transmission</th>
                    <td colspan="2">Automatic</td>
                  </tr>
                  <tr>
                    <th scope="row">Max Output (HP)</th>
                    <td colspan="2">168 HP @ 3,500 rpm - 207 HP @ 3,750 rpm</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container text-center p-0 my-4">
    <h1 class="bg-dark mx-0 py-3 text-white"> | PROOF OF RELEASES 2024 |</h1>
  </div>

  <div class="por">
    <div class="container h-100 p-0 d-flex flex-column gap-1">
      <div class="container h-50 w-100 d-flex justify-content-evenly p-0">
        <div class="head container p-1 h-100 w-25">
          <img src="images/release/1.jpg" alt="" srcset="" class="img-fluid h-100 w-100 rounded-3">
        </div>
        <div class="head container p-1 h-100 w-25">
          <img src="images/release/2.jpg" alt="" srcset="" class="img-fluid h-100 w-100 rounded-3">
        </div>
        <div class="head container p-1 h-100 w-25">
          <img src="images/release/3.jpg" alt="" srcset="" class="img-fluid h-100 w-100 rounded-3">
        </div>
        <div class="head container p-1 h-100 w-25">
          <img src="images/release/4.jpg" alt="" srcset="" class="img-fluid h-100 w-100 rounded-3">
        </div>
      </div>
      <div class="container h-50 w-100 d-flex justify-content-evenly p-0">
        <div class="head container p-1 h-100 w-25">
          <img src="images/release/5.jpg" alt="" srcset="" class="img-fluid h-100 w-100 rounded-3">
        </div>
        <div class="head container p-1 h-100 w-25">
          <img src="images/release/6.jpg" alt="" srcset="" class="img-fluid h-100 w-100 rounded-3">
        </div>
        <div class="head container p-1 h-100 w-25">
          <img src="images/release/7.jpg" alt="" srcset="" class="img-fluid h-100 w-100 rounded-3">
        </div>
        <div class="head container p-1 h-100 w-25">
          <img src="images/release/8.jpg" alt="" srcset="" class="img-fluid h-100 w-100 rounded-3">
        </div>
      </div>
    </div>
  </div>

  <footer class="bg-dark text-white pt-2">
    <div class="container d-flex justify-content-center">
      <div class="about container">
        <h2>ABOUT US</h2>
        <p class="pt-2">
          An online process car loan platform that gives hassle-free and fast approval for clients. Affiliated in all dealerships and bank nationwide
        </p>
      </div>
      <div class="container d-flex">
        <div class="contact container border-start border-white ps-4">
          <h3>Contact</h3>
          <p class="pt-2">Email: contact@example.com.</p>
          <p>Phone: 02.635.9306</p>
        </div>
        <div class="social container border-start border-white ps-4">
          <h3>Social</h3>
          <p class="pt-2"><a href="https://www.facebook.com/AutoloanExpressPH" class="text-white">Facebook</a></p>
          <p>Telegram</p>
        </div>
      </div>
    </div>
    <div class="copyright d-flex justify-content-center border-top border-white mx-5">
      <div class="container d-flex justify-content-center">
        <p class="footer-text">&copy;
          <?php echo date("Y"); ?> JNR
        </p>
      </div>
    </div>
  </footer>

</body>
<script src="js/bootstrap.bundle.min.js"></script>
<script>
  window.embeddedChatbotConfig = {
    chatbotId: "xOACAOZ973440NDRrGPeL",
    domain: "www.chatbase.co"
  }
</script>
<script src="https://www.chatbase.co/embed.min.js" chatbotId="xOACAOZ973440NDRrGPeL" domain="www.chatbase.co" defer>
</script>

</html>