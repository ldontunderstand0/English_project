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
<title>Unit 2</title>
<link rel="stylesheet" href="/styles/unit.css">
<link rel="stylesheet" href="/styles/button.css">
<link rel="stylesheet" href="/styles/navigation.css">
<link rel="stylesheet" type="text/css" href="styles/<?php echo $_SESSION["theme"]; ?>.css" id="theme-link">
<link rel="shortcut icon" href="/images/minicon.png">

</head>
<body>

<div class="navigate">
  <img class="menu" src="images/menu_<?php echo $_SESSION["theme"]; ?>.png" onclick="document.location='content.php'"></img>
  <img class="icon" src="images/icon_<?php echo $_SESSION["theme"]; ?>.png" onclick="document.location='index.php'"></img>
</div>

<h1 class="main_text">Unit 2</h1> 

<div class="container">
<h1 class="header">WHAT IS THE INTERNET</h1>
    <div class="buttons">
    <button class="blob-btn" onclick="document.location='text2.1.php'">
        go
        <span class="blob-btn__inner">
        <span class="blob-btn__blobs">
            <span class="blob-btn__blob"></span>
            <span class="blob-btn__blob"></span>
            <span class="blob-btn__blob"></span>
            <span class="blob-btn__blob"></span>
        </span>
        </span>
    </button>
    <br/>
    </div>
    
</div>

<div class="container">
<h1 class="header">CONNECTING TO THE NETWORK</h1>
    <div class="buttons">
    <button class="blob-btn" onclick="document.location='text2.2.php'">
        go
        <span class="blob-btn__inner">
        <span class="blob-btn__blobs">
            <span class="blob-btn__blob"></span>
            <span class="blob-btn__blob"></span>
            <span class="blob-btn__blob"></span>
            <span class="blob-btn__blob"></span>
        </span>
        </span>
    </button>
    <br/>
    </div>
    
</div>

<div class="container">
<h1 class="header">PUBLIC-ACCESS INTERNET SITES</h1>
    <div class="buttons">
    <button class="blob-btn" onclick="document.location='text2.3.php'">
        go
        <span class="blob-btn__inner">
        <span class="blob-btn__blobs">
            <span class="blob-btn__blob"></span>
            <span class="blob-btn__blob"></span>
            <span class="blob-btn__blob"></span>
            <span class="blob-btn__blob"></span>
        </span>
        </span>
    </button>
    <br/>
    </div>
    
</div>

<div class="container">
<h1 class="header">NETWORK SIMULATION</h1>
    <div class="buttons">
    <button class="blob-btn" onclick="document.location='text2.4.php'">
        go
        <span class="blob-btn__inner">
        <span class="blob-btn__blobs">
            <span class="blob-btn__blob"></span>
            <span class="blob-btn__blob"></span>
            <span class="blob-btn__blob"></span>
            <span class="blob-btn__blob"></span>
        </span>
        </span>
    </button>
    <br/>
    </div>
    
</div>

<div class="container">
<h1 class="header">MODEMS</h1>
    <div class="buttons">
    <button class="blob-btn" onclick="document.location='text2.5.php'">
        go
        <span class="blob-btn__inner">
        <span class="blob-btn__blobs">
            <span class="blob-btn__blob"></span>
            <span class="blob-btn__blob"></span>
            <span class="blob-btn__blob"></span>
            <span class="blob-btn__blob"></span>
        </span>
        </span>
    </button>
    <br/>
    </div>
    
</div>

<div class="container">
<h1 class="header">WHAT IS NETWORKING?</h1>
    <div class="buttons">
    <button class="blob-btn" onclick="document.location='text2.6.php'">
        go
        <span class="blob-btn__inner">
        <span class="blob-btn__blobs">
            <span class="blob-btn__blob"></span>
            <span class="blob-btn__blob"></span>
            <span class="blob-btn__blob"></span>
            <span class="blob-btn__blob"></span>
        </span>
        </span>
    </button>
    <br/>
    </div>
    
</div>

<div class="container">
<h1 class="header"> NEW CHALLENGES FOR INFORMATION RETRIEVAL</h1>
    <div class="buttons">
    <button class="blob-btn" onclick="document.location='text2.7.php'">
        go
        <span class="blob-btn__inner">
        <span class="blob-btn__blobs">
            <span class="blob-btn__blob"></span>
            <span class="blob-btn__blob"></span>
            <span class="blob-btn__blob"></span>
            <span class="blob-btn__blob"></span>
        </span>
        </span>
    </button>
    <br/>
    </div>
    
</div>

<div class="container">
<h1 class="header">SEARCH ENGINE AND ITS IMPROVMENT</h1>
    <div class="buttons">
    <button class="blob-btn" onclick="document.location='text2.8.php'">
        go
        <span class="blob-btn__inner">
        <span class="blob-btn__blobs">
            <span class="blob-btn__blob"></span>
            <span class="blob-btn__blob"></span>
            <span class="blob-btn__blob"></span>
            <span class="blob-btn__blob"></span>
        </span>
        </span>
    </button>
    <br/>
    </div>
    
</div>

<div class="container">
<h1 class="header">KEY PROPERTIES OF THE INTERNET</h1>
    <div class="buttons">
    <button class="blob-btn" onclick="document.location='text2.9.php'">
        go
        <span class="blob-btn__inner">
        <span class="blob-btn__blobs">
            <span class="blob-btn__blob"></span>
            <span class="blob-btn__blob"></span>
            <span class="blob-btn__blob"></span>
            <span class="blob-btn__blob"></span>
        </span>
        </span>
    </button>
    <br/>
    </div>
    
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