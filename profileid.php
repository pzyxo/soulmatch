<?php
if (!isset($_COOKIE['email'])){
  header('Location: cek.php');
} else {
  include('data.php');
?>


<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/logo.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/scroll-out/dist/scroll-out.min.js"></script>
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
              <a class="nav-link" href="index.php">Home</a>
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
    <!-- start of profile -->
    <div class="container-fluid" style="color: white; width: 90%; position:sticky; padding-top: 2%; left: 1%;right: 1%;">
    <div class="row">
      <div class="col">
        <a onclick="goBack()" class="btn btn-danger">Back</a>
        <script>
            function goBack() {
                window.history.back();
            }
        </script>
      </div>
    </div>
    <br>
    <?php 
    if(!isset($_GET['id'])){
      echo "<h1>Pengguna Tidak Ditemukan</h1>";
      echo "<h3>Kembali ke pencarian</h3>";
      echo "<a href='match.php' class='btn btn-danger'>Find Match</a>";
    } else {
      include('dataprofile.php');
    ?>
    
      <div class="row justify-item-center">
        <div class="col-lg-3 col-md-12 col-sm-12">
          <center>
          <div id='fromleft'>
            <img src="<?php echo $imgp; ?>" style="width: 70%; border-radius: 100%;border:2px solid white">
          </div>
          </center>
          
        </div>
        <div class="col-lg-9 col-md-12 col-sm-12">
          <div class="row">
            <div class="col" id='fromright'>
              <?php
                echo "<h1 style='text-decoration:none'>{$namadepanp} {$namablkgp}</h1>";
              ?>
            </div>
          </div>
          <div class="row">
            <div class="col" id='fromright'>
              <?php
                echo "<p>{$deskripsip}</p>";
              ?>
            </div>
          </div>
          
        </div>
      </div>
      <center>
        <div class="dropdown-divider" style="border-top: 2px solid white;" id='expand'></div>
      </center>
      
      <form name="update">
      <center>
        <table border="0" class="table table-danger mt-3" style='width:fit-content' id='fromright'>
          <tr>
            <td style='width:40%'>Full Name</td>
            <td style='width:70%'>
                <input type="text" class="form-control" name="namadpn" value="<?php echo "{$namadepanp} {$namablkgp}";?>"disabled style='background-color:white;max-width:100%'>
            </td>
          </tr>
          <tr>
            <td>Place and Date of Birth</td>
            <td>
            <div class="row" >
              <div class="col">
                <input type="text" class="form-control" name="tempatlhr" value="<?php echo "{$tempatp}, {$tanggalp}";?>" disabled style='background-color:white;max-width:fit-content'>
              </div>
            </div>
            </td>
          </tr>
          <tr>
            <td>Address</td>
            <td><textarea type='text' class='form-control' rows='2' name="alamat" disabled style='resize:none;background-color:white;text-align:left;max-width:100%'><?php echo $alamatp;?></textarea></td>
          </tr>
          <tr>
            <td>Religion</td>
            <td>
            <input class="form-control" value="<?php echo $religionp;?>" disabled style='background-color:white;text-align:center;max-width:fit-content'>
            </td>
          </tr>
          <tr>
            <td>Gender</td>
            <td>
              <input class="form-control" value="<?php echo $genderp;?>" disabled style='background-color:white;text-align:center;max-width:fit-content'>
            </td>
          </tr>
          </tr>
            <td>Interesting With</td>
            <td>
            <div class="row">
              <div class="col col-lg-2 col-md-3 col-sm-3">
                <input class="form-control" name="min-age" value="<?php echo $minp;?>" disabled style='background-color:white;text-align:center'>
              </div>
              <div class='col-1'>
              <center><h3> - </h3></center>
              </div>
              <div class="col col-lg-2 col-md-3 col-sm-3">
                <input class="form-control" name="max-age" value="<?php echo $maxp;?>"disabled style='background-color:white;text-align:center'>
              </div>
            </div>
            </td>
          </tr>
          <tr>
            <td>Job</td>
            <td><input type="text" class="form-control" name="pekerjaan" value="<?php echo $pekerjaanp;?>" disabled style='background-color:white;max-width:100%'></td>
          </tr>
          <tr>
            <td>Hobby</td>
            <td><input type="text" class="form-control" name="hobi" value="<?php echo $hobip;?>" disabled style='background-color:white;max-width:100%'></td>
          </tr>
          <tr>
            <td>Nation</td>
            <td><input type="text" class="form-control" name="nation" value="<?php echo $nationp;?>" disabled style='background-color:white;max-width:100%' ></td>
          </tr>
          <tr>
            <td>Social Media</td>
            <td>
            <?php if($igp != "-"){ ?> 
            <p><a href="http://instagram.com/<?php echo $igp ?>/"><img src='img/ig.png' style='width:40px' class='button1-pro'></a>
            <?php echo $igp; } ?></p>
            <?php if($twp != "-"){ ?> 
            <p><a href="http://twiiter.com/<?php echo $twp ?>/"><img src='img/twt.png' style='width:40px' class='button1-pro'></a>
            <?php echo $twp; }?></p>
            </td>
          </tr>
        </table>
        </center>
      </form>
    </div> 
    <!-- end of profile -->
    

  </body>
  <script>
    ScrollOut({
      scrollingElement: ".scrollable-pane"
    });
  </script>
</html>

<?php
    }
}
?>