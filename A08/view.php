<?php
include('connect.php');
include('class.php');

$islandID = $_GET['id'] ?? null;
$selectedIsland = null;
$contentArray = [];

if ($islandID) {
    $islandQuery = "SELECT * FROM islandsofpersonality WHERE islandOfPersonalityID = '$islandID'";
    $islandResult = executeQuery($islandQuery);

    if ($islandRow = mysqli_fetch_assoc($islandResult)) {
        $selectedIsland = new island(
            $islandRow['islandOfPersonalityID'],
            $islandRow['name'],
            $islandRow['shortDescription'],
            $islandRow['image']
        );
    }

    $islandContentQuery = "SELECT * FROM islandcontents WHERE islandOfPersonalityID = '$islandID'";
    $islandContentResult = executeQuery($islandContentQuery);

    while ($islandContentRow = mysqli_fetch_assoc($islandContentResult)) {
        $ic = new islandContent(
            $islandContentRow['image'],
            $islandContentRow['islandOfPersonalityID'],
            $islandContentRow['content']
        );

        array_push($contentArray, $ic);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $selectedIsland ? $selectedIsland->name : 'Island Not Found'; ?> - Core Memories</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="viewstyle.css">
    <link rel="Icon" type="image/png" href="img/logo.png">
    <style>

    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand text-dark" href="index.php">Core Memories</a>
        </div>
    </nav>

    <div class="container-fluid my-5">
        <?php if ($selectedIsland) { ?>
            <div class="text-center mb-5">
                <h1 class="text-dark"><b>Welcome to <?php echo $selectedIsland->name; ?></b></h1>
                <p class="text-dark"><b>"<?php echo $selectedIsland->shortDescription; ?>"</b></p>
                <img src="imgs/<?php echo $selectedIsland->image; ?>" class="img-fluid rounded"
                    alt="<?php echo $selectedIsland->name; ?>"> 
            </div>
        <?php } ?>
    </div>

    <div class="container-fluid">
    <div class="row">
        <?php if (!empty($contentArray)) { ?>
            <?php foreach ($contentArray as $contentItem) { ?>
                <div class="col-12 col-md-6">
                    <div class="card my-5 shadow-lg" style="background-color: #2D2F44;">
                        <div class="row g-0">
                            <div class="col-12 col-md-6">
                                <img src="imgs/<?php echo $contentItem->image; ?>" alt="Image for Content"
                                    class="img-fluid rounded shadow">
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="card-body text-light">
                                    <p class="card-text"><?php echo $contentItem->content; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        <?php } else { ?>
            <div class="col-12 text-center">
                <p class="text-muted">No content available at the moment. Please check back later.</p>
            </div>
        <?php } ?>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
</body>

</html>