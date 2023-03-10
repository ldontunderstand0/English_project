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
<title>Text 3</title>
<link rel="shortcut icon" href="/images/minicon.png">
<link rel="stylesheet" href="/styles/text.css">
<link rel="stylesheet" href="/styles/button.css">
<link rel="stylesheet" href="/styles/navigation.css">
<link rel="stylesheet" type="text/css" href="styles/<?php echo $_SESSION["theme"]; ?>.css" id="theme-link">

</head>
<body>

<div class="navigate">
  <img class="menu" src="images/menu_<?php echo $_SESSION["theme"]; ?>.png" onclick="document.location='content.php'"></img>
  <img class="icon" src="images/icon_<?php echo $_SESSION["theme"]; ?>.png" onclick="document.location='index.php'"></img>
</div>

<h1 class="name">UNIX</h1>

<div class="text">
<p>Despite the lack of unification, the number of UNIX systems continues to grow.
As of the mid 1990s, UNIX runs on an estimated five million computers throughout
the world. Versions of UNIX ran on nearly every computer in existence, from small
IBМ PCs to large supercomputers such as Crays. Because it is so easily adapted to
new kinds of computers, UNIX is the operating system of choice for many of today's
high-performance microprocessors. Because a set of versions of the operating
system's source code is readily available to educational institutions, UNIX has also
become the operating system of choice for educational computing at many
universities and colleges. It is also popular in the research community because
computer scientists like the ability to modify the tools they use to suit their own
needs.
<p>UNIX has become popular too, in the business community. In large part this
popularity is because of the increasing numbers of people who have studied
computing using a UNIX system, and who have sought to use UNIX in their business
applications. Users who become familiar with UNIX tend to become very attached to
the openness and flexibility of the system. The client-server model of computing has
also become quite popular in business environments, and UNIX systems support this
paradigm well (and there have not been too many other choices). 

<p>Unix vendors and users are the leaders of the «open systems» movement:
without UNIX the very concept of open systems would probably not exist.

</div>
<div class="btns">
<div class="button_prev">
    <button class="blob-btn" onclick="document.location='text4.2.php'">
        previous text
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

    <div class="button_unit">
    <button class="blob-btn" onclick="document.location='unit4.php'">
        go to unit
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

    <div class="button_next">
    <button class="blob-btn" onclick="document.location='text4.4.php'">
        next text
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