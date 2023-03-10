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
<title>Text 4</title>
<link rel="stylesheet" href="/styles/text.css">
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

<h1 class="name">SECURITY AND UNIX</h1>

<div class="text">
<p>Dennis Ritchie wrote about the security of UNIX: «It was not designed from the
start to be secure. It was designed with the necessary characteristics to make security
serviceable.» 

<p>UNIX is a multi-user, multi-tasking operating system. Multi-user means that the
operating system allows many different people to use the same computer at the same
time. Multi-tasking means that each user can run many different programs
simultaneously
<p>One of the natural functions of such operating systems is to prevent different
people (or programs) using the same computer from interfering with each other.
Without such protection, a wayward program (perhaps written by a student in an
introductory computer science course) could affect other programs or other users,
could accidentally delete files, or could even crash (halt) the entire computer system.
To keep such disasters from happening, some form of computer security has always
had a place in the UNIX design philosophy. 

<p>But UNIX security provides more than mere memory protection. UNIX has a
sophisticated security system that controls the ways users access files, modify system
databases, and use system resources. Unfortunately, those mechanisms don't help
much when the systems are misconfigured, are used carelessly, or contain buggy
software. Nearly all of the security holes that have been found in UNIX over the
years have resulted from these kinds of problems rather than from shortcomings in
the intrinsic design of the system. Thus, nearly all UNIX vendors believe that they
can (and perhaps do) provide a reasonably secure UNIX operating system. 
</div>
<div class="btns">
<div class="button_prev">
    <button class="blob-btn" onclick="document.location='text4.3.php'">
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
    <button class="blob-btn" onclick="document.location='text4.5.php'">
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