<?php

include("Shape.php");
include("Rectangle.php");
include("circle.php");
include("triangle.php");
include("point.php");
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
  <svg width="400" height="400">
    <?php $render->getResults(); ?>
  </svg>
</body>
</html>
