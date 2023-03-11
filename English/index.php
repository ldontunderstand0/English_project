<?php
session_start();

if(!isset($_SESSION["theme"]))
{
    $_SESSION["theme"] = "light";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Welcome</title>
<link rel="shortcut icon" href="/images/minicon.png">
<link rel="stylesheet" href="/styles/main.css">
<link rel="stylesheet" type="text/css" href="styles/<?php echo $_SESSION["theme"]; ?>.css" id="theme-link">
<link rel="stylesheet" href="/styles/button.css">
<script type="text/javascript" src="scripts/theme_change.js" defer></script>

</head>
<body>


<!-- <div class="theme-button" id="theme-button" onclick="ChangeTheme()">Change theme</div> -->

<div class="main_container">
<img class="icon" src="images/icon_<?php echo $_SESSION["theme"]; ?>.png"></img>
<h1 class="main_text">History of the first PCs</h1>
</div> 

<div class="buttons">
  <button class="blob-btn" onclick="document.location='content.php'">
    get started
    <span class="blob-btn__inner">
      <span class="blob-btn__blobs">
        <span class="blob-btn__blob"></span>
        <span class="blob-btn__blob"></span>
        <span class="blob-btn__blob"></span>
        <span class="blob-btn__blob"></span>
      </span>
    </span>
  </button>
  </div> 
  <br/>


  <div class="switcher">
  <img class="switch_img1" src="images/night.png"></img>
<label class="checkbox-ios">
  <input type="checkbox" id="theme-button">
	<span class="checkbox-ios-switch"></span>
</label>
<img class="switch_img2" src="images/day4.png"></img>
</div>

<svg xmlns="http://www.w3.org/2000/svg" version="1.1">
  <defs>
    <filter id="goo">
      <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10"></feGaussianBlur>
      <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 21 -7" result="goo"></feColorMatrix>
      <feBlend in2="goo" in="SourceGraphic" result="mix"></feBlend>
    </filter>
  </defs>
</svg>

</body>
</html>