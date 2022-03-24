//

function AreaClicked() {
        // this function calculates the area of the rectangle
        document.getElementById('area').innerHTML = 'The area is ' + (6 * 2) + 'cm' + '2'.sup(2) + '.'
}

function PerimeterClicked() {
  // this function calculates the perimeter of the rectangle
  document.getElementById('perimeter').innerHTML = 'The perimeter is ' + (6 * 2 + 2 * 2) + 'cm' + '.'
}

function Hide() {
  // this function hides the previous calculations
  document.getElementById('perimeter').innerHTML = 'The perimeter is?'
  document.getElementById('area').innerHTML = 'The area is?'
}