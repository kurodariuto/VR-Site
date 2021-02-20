<?php 
$imageGET = $_GET['item'];
$imageMainGET = $_GET['main-item'];
$mainImage = './imageHome/main.jpg';
 ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <script src="https://aframe.io/releases/1.1.0/aframe.min.js"></script>
</head>
<body>
	<a-scene>
		<a-assets>
			<?php if ($imageMainGET == $mainImage): ?>
				<img id="sky" src="<?php echo $imageMainGET;?>">
			 <?php else: ?>
			 	<img id="sky" src="<?php echo $imageGET;?>">
			 <?php endif ?>
		</a-assets>
		<a-sky src="#sky"></a-sky>
	</a-scene>
</body>
</html>