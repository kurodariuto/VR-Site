<?php 
require_once('dataImage.php');
?>

<!DOCTYPE html>
<html>
  <head>
     <meta charset="UTF-8">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
     <link rel="stylesheet" href="./scss/stylesheet.css">
     <link rel="stylesheet" href="css.php">
    <script src="https://aframe.io/releases/1.1.0/aframe.min.js"></script>
    <script src="https://rawcdn.githack.com/MozillaReality/immersive-custom-elements/v0.1.0/build/immersive-custom-elements.js"></script>
  </head>
  <body>
    <div class="wapper">
      <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
              <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="https://github.com/" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    GitHub
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <div class="container">
        <div class="main">
          <div class="d-flex justify-content-center">
            <h1>WebでVRを体験!!</h1>
          </div>
          <div class="d-flex justify-content-center">
            <video-360 src="./mov/vr.mov" width="631" height="390" loop></video-360>
            <!-- <img-360 src="./imageHome/main.jpg" class="mainImage"></img-360> -->
            <h3>
              <a href="vr.php?main-item=<?php echo './imageHome/main.jpg';?>">VRを体験</a>
            </h3>
          </div>
        </div>
        <div class="sub-main">
          <div class="d-flex justify-content-center">
            <?php 
            $i = 1;
            $imageTag = new HtmlTag('imageItem');
            $imageTag->getImage();
            $imageClass = $imageTag->getClass(); 
            ?>
             <?php foreach ($imageItems as $imageItem):?>
               <div class='<?php echo $imageClass.$i ?>'>
                <img src='<?php echo $imageItem;?>'>
                <h3>
                  <a href="vr.php?item=<?php echo $imageItem;?>">VRを体験</a>
                </h3>
              </div>
              <?php $i+=1 ?>
            <?php endforeach ?>
          </div>
        </div>
        <div class="d-flex justify-content-center">
          <video src="./mov/vr1.mov" autobuffer autoloop loop controls poster="./imageHome/vr1.jpg"  width="960" height="390"></video>
        </div>
        <footer>
          <div class="card bg-dark text-white">
            <h5 class="card-title">Author</h5>
            <p class="card-text">Rikuto Kuroda</p>
            <p class="card-text">Country of origin is Japan</p>
          </div>
        </footer>
      </div>
    </div>
  </body>
</html>
