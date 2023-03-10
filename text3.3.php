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

<h1 class="name">THE MAIN COMPONENTS OF THE COMPUTER</h1>

<div class="text">
<p>The main components of the computer of most significance to programmers are
disk, RAM, and the CPU; the first two of these store programs and data that are used
by the CPU.
<p>Computers represent pieces of information (or data) as binary digits, universally
referred to as …. Each bit can have the value 0 or 1. The binary system is used
instead of the more familiar decimal system because it is much easier to make
devices that can store and retrieve 1 of 2 values, than 1 of 10. Bits are grouped into
sets of eight, called ….
<p>The disk uses magnetic recording heads to store and retrieve groups of a few
hundred to a few thousand bytes on rapidly spinning platters in a few milliseconds.
The contents of the disk are not lost when the power is turned off, so it is suitable for
more or less permanent storage of programs and …
<p>,which is an acronym for Random Access Memory, is used to hold programs
and data while they're in use. It is made of millions of microscopic transistors on a
piece of silicon called a... . Each bit is stored using a few of these transistors. RAM
does not retain its contents when power is removed, so it is not good for permanent…
However, any byte in a RAM chip can be accessed in about 10 nanoseconds, which is
about a million times as fast as accessing a disk. Each byte in a RAM chip can be
independently stored and retrieved without affecting other bytes, by providing the
unique memory address belonging to the byte you want. 
<p>The CPU (also called the …) is the active component in the computer. It is also
made of millions of microscopic transistors on a chip. The CPU executes programs
consisting of instructions stored in RAM, using data also stored in RAM. However,
the CPU is so fast that even the typical RAM … … of 10 nanoseconds is a
bottleneck; therefore, computer manufacturers have added both … … and… … which
are faster types of memory used to reduce the amount of time that the CPU has to
wait. The internal cache resides on the same chip as the CPU and can be accessed
without delay. … sits between the CPU and the regular RAM; it's faster than the
latter, but not as fast as the internal cache. Finally, a very small part of the on-chip
memory is organized as …which can be accessed within the normal cycle time of the
CPU, thus allowing the fastest possible processing. 

</div>
<div class="btns">
<div class="button_prev">
    <button class="blob-btn" onclick="document.location='text3.2.php'">
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
    <button class="blob-btn" onclick="document.location='unit3.php'">
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
    <button class="blob-btn" onclick="document.location='text3.4.php'">
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