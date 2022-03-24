<!DOCTYPE html>
<html>
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Calculating area and perimeter in php">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Maria G">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link to CSS stylesheet -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
    <link rel="manifest" href="./favicon/site.webmanifest">
    <title>Area and Perimeter Rectangle in PHP - Maria Goemans</title>
  </head>
  <body>
    <!-- Link to Javascript file -->
    <script src="./js/script.js"></script>
    <?php echo '<h1>Calculating the Area and Perimeter of a Rectangle in PHP </h1>'; ?>
    <!-- Green background for text -->
    <div class="green">
      <?php echo '<p>Use this website to calculate the area and perimeter of a rectangle!</p>'; ?>
      <?php echo '<p>The length of the rectangle is 6cm and the width of the rectangle is 2cm.</p>'; ?>
    </div>
    <!-- Another background - this one pink -->
    <div class="pink">
      <?php echo '<h3>Calculating the Area and Perimeter of a Rectangle using Javascript</h3>' ?>
      <div id="area">The area is?</div>
      <div id="perimeter">The perimeter is?</div>
      <br>
      <button onclick="AreaClicked()"> Calculate area</button>
      <button onclick="PerimeterClicked()">Calculate perimeter</button>
      <button onclick="Hide()">Reset</button>
      <?php echo '<h3>Calculating the Area and Perimeter of a Rectangle using PHP</h3>' ?>
      <!-- Calculations and variables in PHP -->
      <?php 
  			$length = 4;  
  		 	$width = 3; 
  			echo "<p>Length = $length cm<br>Width = $width cm</p>"; 
      ?>
      <?php 
		   echo "<p>The area of a rectangle with dimensions $length cm x $width cm = " . ($length * $width) . "cm<sup>2</sup>.</p>";  
		  ?>
    </div>
  </body>
</html>