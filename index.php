<?php $totalColours = 5 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Camel Up</title>
</head>
<body>
<button onclick="display()">Roll</button>
<div id="placeholder"></div>
<script>
  const cloneArray = function (arr) {
    return arr.slice(0);
  };
  const randNumber = function (max) {
    return Math.floor(Math.random() * Math.floor(max));
  };
  const display = function () {
    const elem = document.createElement('h1');
    const placeHolder = document.querySelector('#placeholder');
    if (colours.length === 0) {
      document.body.removeChild(placeHolder);
      document.body.appendChild('div');
    }
    const randColourNum = randNumber(colours.length);
    elem.innerHTML = randNumber(3) + 1;
    elem.style.backgroundColor = colours[randColourNum];
    placeHolder.append(elem);
    colours.splice(randColourNum, 1);
  };
  const benchColours = ['mediumseagreen', 'darkorange', 'white', 'dodgerblue', 'gold'];
  let colours = cloneArray(benchColours);
</script>
</body>
</html>