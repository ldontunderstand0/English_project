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
<title></title>
<link rel="stylesheet" href="/styles/text.css">
<link rel="stylesheet" href="/styles/button.css">
<link rel="stylesheet" href="/styles/navigation.css">
<link rel="stylesheet" type="text/css" href="styles/<?php echo $_SESSION["theme"]; ?>.css" id="theme-link">
<link rel="shortcut icon" href="/images/minicon.png">

</head>
<body>

<div class="navigate">
  <img class="menu" src="images/menu.png" onclick="document.location='content.php'"></img>
  <img class="icon" src="images/icon.png" onclick="document.location='index.php'"></img>
</div>

<h1 class="name">INTEL PROCESSORS, THE HISTORY</h1>

<div class="text">
<p>Intel was one of the pioneering Microprocessor manufacturers when it created
the 4004 processor in 1971. This was followed by the 8080 processor in the late 70's,
which was developed into the 8086 and 8088 processors in 1979. It was only when,
in 1981 IBM selected the 8086 processor for its new Personal Computer, the IBM
PC, did the Intel processor design gain its opportunity to be used widely. 

<p>The Intel 8086/8088 range of processors were based upon Complex Instruction
Set Computing (CISC) which allows the number of bytes per instruction to vary
according to the instruction being processed. This is unlike Reduced Instruction Set
Computing (RISC) which has fixed length instructions (typically set at 32 bits each).
The architecture pioneered by Intel has become known as «x86» due to the early
naming system where processors were called 8086, 80186 (not used in PC's), 80286,
80386, and 80486. 

<p>In 1982 Intel introduced the 80286 (or 286) processor. This featured significant
enhancements over the 8086/8088 line, mainly by introducing protected mode and
the ability to address up to 16 megabytes of memory. 

</div>
<div class="btns">
<div class="button_prev">
    <button class="blob-btn" onclick="document.location='text1.6.php'">
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
    <button class="blob-btn" onclick="document.location='unit1.php'">
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
    <button class="blob-btn" onclick="document.location='unit2.php'">
        next unit
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