<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/home/index.css" />
    <link rel="stylesheet" href="./_footer.php" />
    <link rel="stylesheet" href="./_header.php" />
    <link rel="stylesheet" href="../css/menu/footer.css" />
    <link rel="stylesheet" href="../css/menu/header.css" />
  </head>

  <body>
    <header>
      <?php include '_header.php' ?>
    </header>

    <div class="back"></div>

    <h1>Uw Villa</h1>
    <p>
      Welkom bij onze exclusieve collectie van luxe villa's. <br />
      Bij ons vindt u de meest stijlvolle en comfortabele woningen <br />
      die voldoen aan de hoogste standaarden van verfijning wij bieden <br />
      een ongeëvenaarde selectie van villa's die voldoen aan al uw wensen <br />
      Verken nu ons assortiment en vindt de villa van uw dromen.
    </p>
    <div class="grid-container">
  <div class="grid-item"><img class="img" onclick="window.location.href='info.php?id=1'"  class="een" src="../img/1.jpg"></div>
  <div class="grid-item"><img class="img" onclick="window.location.href='info.php?id=2'"  class="een" src="../img/2.jpg"></div>
  <div class="grid-item"><img class="img" onclick="window.location.href='info.php?id=3'"  class="een" src="../img/3.jpg"></div>  
  <div class="grid-item"><img  class="img" class="een" src="../img/4.jpg"></div>  
  <div class="grid-item"><img  class="img" class="een" src="../img/5.jpeg"></div>  
  <div class="grid-item"><img  class="img" class="een" src="../img/6.jpeg"></div>  

</div>
    </div >

    <div class="container">
  <!-- Your page content -->
  <footer class="footer">
    <?php include '_footer.php' ?>
  </footer>
</div>

  </div>
  </body>
</html>
