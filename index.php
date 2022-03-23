<!DOCTYPE html>
<html>
  <head>
    <title>Area and Perimeter Rectangle in PHP - Maria Goemans</title>
    <!-- Link to CSS stylesheet -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
    <link rel="manifest" href="./favicon/site.webmanifest">
  </head>
  <body>
    <script>
      function AreaClicked() {
        // this function calculates the area of the rectangle
        document.getElementById('area').innerHTML = 'The area is ' + (6 * 2) + 'cm' + '2'.sup(2) + '.'
      }
      function PerimeterClicked() {
        // this function calculates the perimeter of the rectangle
        document.getElementById('perimeter').innerHTML = 'The perimeter is ' + (6 * 2 + 2 * 2) + 'cm' + '.'
      }
    </script>
    <?php echo '<h1>Calculating the Area and Perimeter of a Rectangle in PHP </h1>'; ?>
    <!-- Green background for text -->
    <div class="green">
      <?php echo '<p>Use this website to calculate the area and perimeter of a rectangle!</p>'; ?>
      <?php echo '<p>The length of the rectangle is 6cm and the width of the rectangle is 2cm.</p>'; ?>
    </div>
    <!-- Another background - this one pink -->
    <div class="pink">
      <div id="area">The area is?</div>
      <div id="perimeter">The perimeter is?</div>
      <br>
      <button onclick="AreaClicked()"> Calculate area</button>
      <button onclick="PerimeterClicked()">Calculate perimeter</button>
    </div>
  </body>
</html>