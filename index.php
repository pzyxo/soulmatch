<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/logo.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <title>Soul Match - Find Your Mate Here</title>
    <style>
          #fromtop {
          position: relative;
          animation: fromtop 1s;
          }
          @keyframes fromtop {
          from {
            top: -200%;
          }
          to {
            top:0%;
          }
        }

        .kolom-desk {
          text-align: center;
          width:50%;
        }

        #fromleft {
            position: relative;
            display:block;
            animation: fromleft 1.5s;
        }
        @keyframes fromleft {
            from {
                left:-100%;
            }
            to {
                left:0;
            }
        }
        
        #fromright {
            position: relative;
            animation: fromright 1.5s;
        }
        @keyframes fromright {
            from {
                right:-100%;
            }
            to {
                right:0;
            }
        }

        #frombottom {
            position: relative;
            display:block;
            animation: frombottom 1.5s;
        }
        @keyframes frombottom {
            from {
                bottom:-100%;
            }
            to {
                bottom:0;
            }
        }
        
        #expand {
            position: relative;
            width:100%;
            animation: expand 1.5s;
        }
        @keyframes expand {
            from {
              width:0;
            }
            to {
              width:100%;
            }
        }
      </style>
  </head>
  <body style="background-color: #f8a5c2;overflow-x: hidden;">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #f78fb3">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
          <img src="img/SOULMATCH.png" alt="" width="180px"> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="match.php">Match</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="messages.php">Messages</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="activity.php">Activity</a>
            </li>
            
          </ul>
          <style>
            .dropdown-item.active {
              background-color:#f78fb3;
            }

            .dropdown-item.red:hover {
              background-color:red;
              color:white;
            }
          </style>
          <?php
          if(!isset($_COOKIE['email'])){
            
            ?>
            
            <a href="login.php" class="btn btn-danger d-flex">Sign In</a>
            
            <?php
          } else {
            include('data.php');
            ?>
            <div class="btn-group">
              <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false" style="border-radius:30px;text-decoration:none">
              <img src="<?php echo $img; ?>" style="border-radius:100%;width:25px;text-decoration:none">
                
              </button>
              <ul class="dropdown-menu dropdown-menu-lg-end" style="border-radius:15px"> 
                <li><h5 class="dropdown-item disabled" style="color:black">
                <img src="<?php echo $img; ?>" style="border-radius:100%;width:50px;text-decoration:none">
                <?php
                echo "<strong style='text-decoration:none'>{$_COOKIE['username']}</strong>";
                ?>
                </h5>
                </li>
                <li><a class="dropdown-item" type="button" href="profile.php">Profile</a></li>
                <li><a class="dropdown-item" type="button" href="settings.php">Setting</a></li>
                <center>
                <div class="dropdown-divider" style="border-top: 2px solid black; width: 90%;"></div>
                </center>
                <li><a class="dropdown-item red" type="button" href="logout.php">Sign Out</a></li>
              </ul>
            </div>
            
            <?php
          }
          ?>
        </div>
      </div>
    </nav>
    <!-- end of navbar -->
    <!-- content -->
    <div class="container-fluid" style="color: white;">
      <style>
        b {
          color:#ff4757;
        }
        .button1-pro {
          transition: ease 0.1s;
        }
        .button1-pro:hover {
          transform: scale(1.1);
          border-radius: 5px;
          z-index: 5;
        }
      </style>
      <div class="container" style="text-align: center; font-size: 3em;">
        <p class="card-text" id='fromright'>Find Your <b>Soul</b> and <b>Match</b> it!</p>
      </div>
      <center>
        <div class="dropdown-divider" id='fromleft' style="border-top: 2px solid white; width: 90%;"></div>
      </center>
      <div class="row">
        <div class="col-lg-8 col-md-12 col-sm-12">
          <div class="card" id='fromleft' style="background-color: transparent;text-align: center;font-size: 3em;border: none;">
            <img src="img/background.png" class="card-img-top" width="100%" >
            </div>
        </div>
        <div class="col-lg-4 col-sm-12 col-md-12" style="padding-top: 5%;padding-right: 5%;">
          
          <center>
          <div class="row row-cols-lg-2 row-cols-md-2 row-cols-sm-1" id='fromright' style="margin: 5%;">
            <div class="col">
              <img src="img/user1.jpg" style="border-radius:100%;border: 2px solid black;" width="150px">
              <p>Lorem</p>
            </div>
            <div class="col">
              <img src="img/user2.jpeg" style="border-radius: 100%;border: 2px solid black;" width="150px">
              <p>Ipsum</p>
            </div>
            <div class="col">
              <img src="img/user3.jpeg" style="border-radius: 100%;border: 2px solid black;" width="150px">
              <p>Dolor</p>
            </div>
            <div class="col">
              <a href="match.php">
              <img src="img/love.png" style="border-radius: 100%;" width="150px" class='button1-pro'>
              </a>
              <p>Find More</p>
            </div>
          </div>
          </center>
        </div>
      </div>
    </div>
    <center>
      <div class="dropdown-divider" id='expand' style="border-top: 2px solid white; width: 90%;"></div>
    </center>

    <span>
      <div class="container-fluid" style="color: white;">
        <div class="card" style="padding-top: 5%;background-color: transparent;text-align: center;font-size: 2em;border: none;">
        <h1 id='fromleft'>Members Who Found Their Love</h1>
        <div class="row row-cols-lg-4 row-cols-md-2 row-cols-sm-1" id="galery" style="margin:5%">
          <div class="col" id='fromleft'>
              <img src="img/couple1.jpg" width="250px">
              <p><br></p>
          </div>
          <div class="col" id='fromright'>
              <img src="img/couple2.jpg" width="250px">
              <p><br></p>
          </div>
          <div class="col" id='fromleft'>
              <img src="img/couple3.jpg" width="250px">
              <p><br></p>
          </div>
          <div class="col" id='fromright'>
              <img src="img/couple4.jpg" width="250px">
              <p><br></p>
          </div>    
        </div>  
        
      </div>
    </div>
    </span>
    <center>
      <div class="dropdown-divider" id='expand' style="border-top: 2px solid white; width: 90%;"></div>
    </center>
    <!-- footer -->
      <footer class="page-footer">
        <center>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 col-md-8 col-sm-12">
                <br>
                <h6 class="text-uppercase font-weight-bold">Additional Information</h6>
                <p>Soul Match is an online dating web where people will choose whoever they want to date with. This web is made for you that have no much time to offline dating and too shy to ask for a date. User's privacy is protected, and there is no bot here. Also, users can save their time for meeting or dating right people..</p>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-12">
                <br>
                <h6 class="text-uppercase font-weight-bold">Find any problems? Contact us</h6>
                <p><a href="https://instagram.com/pzyxooo" target="__blank">
                  <img src="img/ig.png" width="50px"></a>
                  <a href="https://www.facebook.com/fayusri.royfanto" target="__blank">
                    <img src="img/fb.png" width="50px"></a>
                  <a href="https://twitter.com/fatma_armi" target="__blank">
                    <img src="img/twt.png" width="50px"></a>
                  <a href=" https://wa.me/62895363665664" target="__blank">
                    <img src="img/wa.png" width="50px"></a></p>
              </div>
            </div>
          </div>
        <div class="footer-copyright text-center bg-light">© 2021 Copyright: pz-team</div>
        </center>
      </footer>
      <!-- end of footer -->
    
  </body>
</html>