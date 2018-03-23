<?php
include("Shape.php");
include("Rectangle.php");
include("Circle.php");
include("Triangle.php");
include("Square.php");
include("Point.php");
include("SvgRenderer.php");
include("Program.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">

	<link rel="stylesheet" href="../assets/normalize.css" />
	<link rel="stylesheet" href="../assets/style.css" />
	<title>POO Geometrie</title>
</head>
<body>
	<h1>J'apprends à dessiner en m'amusant ...</h1>
  <svg width="1600" height="1400">
    <?php $render->getResults(); ?>
  </svg>
</body>
</html>
