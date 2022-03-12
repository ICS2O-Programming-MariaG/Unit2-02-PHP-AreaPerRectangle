<!DOCTYPE html>
<html>
  <head>
    <title>Area and Perimeter Rectangle in PHP</title>
    <!-- Link to CSS stylesheet -->
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <?php
    function AreaClicked() {
      echo "Hello, World";
    }
    ?>
    <?php echo '<h1>Calculating the Area and Perimeter of a Rectangle in PHP </h1>'; ?>
    <!-- Background for text -->
    <div class="pink">
      <?php echo '<p>Use this website to calculate the area and perimeter of a rectangle!</p>'; ?>
      <?php echo '<p>The length of the rectangle is 7cm and the width of the rectangle is 4cm.</p>'; ?>
    </div>
    <!-- Another background - this one yellow -->
    <div class="yellow">
      <div id="area">The area is?</div>
      <div id="perimeter">The perimeter is?</div>
      <br>
      <button onclick=AreaClicked()>Calculate area</button>
      <button onclick="PerimeterClicked()">Calculate perimeter</button>
    </div>
  </body>
</html>