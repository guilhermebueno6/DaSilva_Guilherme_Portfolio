<?php



require_once 'dynamicAssignment.php';
$message= getMyAssignment('H1');
if (isset($_GET['filter'])){
    $piece = $_GET['filter'];
    $message = getMyAssignment($piece);
    
}
?>

<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/772b1c5ce3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/main.css">
    <title>Guilherme Bueno's Portfolio</title>
<body>
    
<?php require 'templates/header.php';?>
<main>
<section id="portfolioGallery">
<a href="portfolioPieces.php?filter=H1">Hackathon 1</a>
<a href="portfolioPieces.php?filter=H2">Hackathon 2</a>
<a href="portfolioPieces.php?filter=MM">Music Mixer</a>
<a href="portfolioPieces.php?filter=TM">Typhoon Media</a>
<a href="portfolioPieces.php?filter=BV">Bee Video</a>
<a href="portfolioPieces.php?filter=HIV">HIV Security</a>
<a href="portfolioPieces.php?filter=AVaC">Anti Vaping Campaign</a>
<a href="portfolioPieces.php?filter=AW">Anglers Website</a>
<a href="portfolioPieces.php?filter=MCMS">Movie CMS</a>
<a href="portfolioPieces.php?filter=SCW">SportCheck Website</a>
</section>
<section id="pieces">
<?php echo !empty($message)?$message:'';?>
</section>

    

<?php require 'templates/footer.php';?>
    <script src="js/portfolioP.js"></script>
    <script src="js/main.js"></script>
    <script src="js/carousel.js"></script>
</main>
</body>
</html>