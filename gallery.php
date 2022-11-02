<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Sadhana Skills</title>
  <link rel="stylesheet" href="css/gallery-grid.css">
  <?php include 'phputil/links.php' ?>

</head>

<body>
  <?php include 'phputil/navbar.php' ?>
  <br><br>
  <br><br>


  <div class="container gallery-container" style="margin-top: 10px;">
    <br>
    <h1 style="margin-top: 10px;">Sadhana Gallery</h1>

    <p class="page-description text-center">Recent Events conducted in Our Society</p>


    <div class="tz-gallery">

      <div class="row">
        <div class="col-sm-6 col-md-4">
          <a class="lightbox" href="images/gallery/gal8.jpg">
            <img src="images/gallery/gal8.jpg" alt="Park">
          </a>
        </div>
        <div class="col-sm-6 col-md-4">
          <a class="lightbox" href="images/gallery/gal7.jpg">
            <img src="images/gallery/gal7.jpg" alt="Bridge">
          </a>
        </div>
        <div class="col-sm-12 col-md-4">
          <a class="lightbox" href="images/gallery/gal6.jpg">
            <img src="images/gallery/gal6.jpg" alt="Tunnel">
          </a>
        </div>
        <div class="col-sm-6 col-md-4">
          <a class="lightbox" href="images/gallery/gal5.jpg">
            <img src="images/gallery/gal5.jpg" alt="Coast">
          </a>
        </div>
        <div class="col-sm-6 col-md-4">
          <a class="lightbox" href="images/gallery/gal4.jpg">
            <img src="images/gallery/gal4.jpg" alt="Rails">
          </a>
        </div>
        <div class="col-sm-6 col-md-4">
          <a class="lightbox" href="images/gallery/gal3.jpg">
            <img src="images/gallery/gal3.jpg" alt="Traffic">
          </a>
        </div>
        <div class="col-sm-6 col-md-4">
          <a class="lightbox" href="images/gallery/gal2.jpg">
            <img src="images/gallery/gal2.jpg" alt="Rocks">
          </a>
        </div>
        <div class="col-sm-6 col-md-4">
          <a class="lightbox" href="images/gallery/gal1.jpg">
            <img src="images/gallery/gal1.jpg" alt="Benches">
          </a>
        </div>
        <div class="col-sm-6 col-md-4">
          <a class="lightbox" href="images/sky.jpg">
            <img src="images/sky.jpg" alt="Sky">
          </a>
        </div>
      </div>

    </div>

  </div>

  <br><br>
  <?php include 'phputil/footer.php' ?>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
  <script>
    baguetteBox.run('.tz-gallery');
  </script>

</body>

</html>