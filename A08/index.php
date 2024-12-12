<?php
include("connect.php");
include("class.php");

$cards = array();
$islandQuery = "SELECT * FROM islandsofpersonality";
$islandResult = executeQuery($islandQuery);
$islandCount = mysqli_num_rows($islandResult);

while ($islandRow = mysqli_fetch_assoc($islandResult)) {
  $c = new island(
    $islandRow['islandOfPersonalityID'],
    $islandRow['name'],
    $islandRow['shortDescription'],
    $islandRow['image']
  );

  array_push($cards, $c);
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Personality Island</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="icon" type="image" href="../imgs/logo.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

  <!-- Header -->
  <header class="w3-center w3-margin-bottom" style="padding: 30px">
    <h1><b>Islands of Personality</b></h1>
    <p><b>These are the islands that have created who I am today.</b></p>
  </header>

  <div class="section-border">
    <img src="imgs/banner.jpg" class="object-fit-fill border rounded" style="padding-bottom: 30px; width: 100%">
  </div>

  <div class="w3-content" style="max-width:1500px">
    <!-- Photo Grid -->
    <div class="w3-row-padding" id="myGrid" style="margin-bottom:128px; padding-top: 30px">
      <?php foreach ($cards as $card) { ?>
        <div class="w3-third w3-container w3-margin-bottom">
          <a href="view.php?id=<?php echo $card->id; ?>">
            <div class="d-flex justify-content-evenly card card-bg overflow-hidden m-3 p-0 rounded-5 img-fluid">
              <img src="imgs/<?php echo $card->image; ?>" class="card-img-top img-card img-fluid" alt="...">
          </a>
          <div class="card-body text-dark">
            <p class="h5 card-title"><b><?php echo $card->name; ?></b></p>
            <p class="card-text"><?php echo $card->shortDescription; ?></p>

          </div>
        </div>
      </div>
    <?php } ?>
  </div>


  </div>

  <!-- Footer -->
  <footer class="w3-container w3-padding-64 w3-light-grey w3-center w3-opacity w3-xlarge" style="margin-top:128px">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <p class="w3-medium">Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank"
        class="w3-hover-text-green">w3.css</a></p>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>