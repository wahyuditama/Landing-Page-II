<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.cdnfonts.com/css/metropolis-2" rel="stylesheet">
    <link rel="stylesheet" href="layout/style.css">     
  </head>
  <body>
    <!-- <navbar> -->
    <?php include 'layout/navbar.php' ?>
    <!-- hero-section -->
     <section id="dashboard" class="container-fluid">
        <?php include 'section/section-1.php' ?>
     </section>
     <!-- SME-section -->
      <!-- SME-Section- -->
    <section id="sme" class="container pt-5 mt-5">
       <?php include 'section/section-2.php' ?>
    </section>
    <!-- section-corporate -->
    <section id="corporate" class=" partners py-4">
     <?php include 'section/section-3.php' ?>
    </section>
    <!-- About Us -->
     <section id="about" class="container-fluid ">
     <?php include 'section/section-4.php' ?>
     </section>

     <!-- our service -->
     <section id="service" class="service py-4">
     <?php include 'section/section-5.php' ?>
     </section>

     <!-- result -->
      <section id="result" class="container pt-4 mt-5">
       <?php include 'section/section-6.php' ?>
      </section>
      <!-- Letter -->
      <section id="letter" class="section letter">
        <?php include 'section/section-7.php' ?>
      </section>

      <!-- footer -->
       <div class="container-fluid">
        <?php include 'layout/footer.php' ?>
       </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>