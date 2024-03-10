<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AUTO LOAN EXPRESS</title>

  <link rel="stylesheet" href="css/about.css">
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
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item mx-lg-1">
              <a class="nav-link" href="car_menu.php">Car Menu</a>
            </li>
            <li class="nav-item mx-lg-1">
              <a class="nav-link active" href="about.php">About</a>
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
      <button class="navbar-toggler border-0 pe-0" type="button" data-bs-toggle="offcanvas"
        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
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
    <div class="container">
      <div class="container py-4 bg-white rounded-4 d-flex flex-column align-items-center shadow">
        <div class="h1 my-4"><b>ABOUT US</b></div>
        <p class="text-center px-5">Auto Loan Express PH is a trusted and customer-focused financial institution dedicated to providing accessible, convenient, and reliable auto financing solutions to individuals and businesses in the Philippines. With a commitment to helping our clients realize their dreams of owning a vehicle, we have been a pillar of support in the local automotive industry for years. Our primary objective is to facilitate the swift release of every unit, ensuring that our clients can enjoy their new vehicles in a shorter period of time. We extend our services to all potential clients, making the application process open and accessible to everyone. As a direct bank and dealership, we have the capacity to cater to clients nationwide, offering a seamless and efficient experience in securing auto loans and making the car acquisition process as smooth as possible.</p>
      </div>
    </div>
  </div>

  <div class="misvis container text-center p-0">
    <h1 class="bg-dark mx-2 py-3 text-white">| MISSION - VISION |</h1>
  </div>

  <div class="mission-vision mt-4">
    <div class="container p-5 bg-white rounded-4 d-flex flex-column align-items-center">
      <div class="h1 mb-4"><b>MISSION</b></div>
      <p class="text-center px-5">Our mission is to simplify the auto financing process and make it accessible to all Filipinos. We aim to empower individuals with the means to purchase their desired vehicles while fostering growth in the automotive sector.</p>
    </div>
  </div>

  <div class="mission-vision mt-4">
    <div class="container p-5 bg-white rounded-4 d-flex flex-column align-items-center">
      <div class="h1 mb-4"><b>VISION</b></div>
      <p class="text-center px-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur rerum sunt
        est quo quidem! Totam optio voluptas minus, vitae fuga officia nemo. Assumenda repellendus aliquam, a
        magnam praesentium consequuntur culpa.</p>
    </div>
  </div>

  <div class="container text-center p-0">
    <h1 class="bg-dark mx-0 py-3 text-white"> | AFILLIATED BANKS |</h1>
  </div>

  <div class="affiliated-section container p-0 mb-5 pt-3">
    <div class="bank container d-flex">
      <div class="container p-0 h-100 w-50 d-flex align-items-center shadow-lg rounded-4">
        <img src="images/banks/secbank.png" class="h-100 w-50">
        <p class="border-start border-dark border-3 h-50 w-50 ps-2 text-start d-flex align-items-center">Lorem ipsum
          dolor sit amet consectetur adipisicing
          elit. Odit fugit perspiciatis doloribus fugiat ipsum non tempora reiciendis repellendus nihil quaerat porro
          magni doloremque dolorum culpa debitis beatae tenetur, quibusdam reprehenderit!</p>
      </div>
      <div class="container h-100 w-50">
      </div>
    </div>
    <div class="bank container d-flex ">
      <div class="container h-100 w-50">
        <img src="" alt="">
      </div>
      <div class="container h-100 p-0 w-50 d-flex align-items-center shadow-lg rounded-4">
        <p class="border-end border-dark border-3 h-50 w-50 pe-2 text-end d-flex align-items-center">Lorem ipsum dolor
          sit amet consectetur adipisicing
          elit. Odit fugit perspiciatis doloribus fugiat ipsum non tempora reiciendis repellendus nihil quaerat porro
          magni doloremque dolorum culpa debitis beatae tenetur, quibusdam reprehenderit!</p>
        <img src="images/banks/bdo.png" class="h-100 w-50 px-4">
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

</html>