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
<title>Text 2</title>
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

<h1 class="name">WINDOWS 98</h1>

<div class="text">
<h3 class = "head"> 98'S GENERAL FEATURES </h3>
<p>Windows 98 maintains support for 16 - bit programs just as in Windows 95 but
is orientated away from the FAT16 file system and towards the new FAT32 system
More about this later

<p>If you choose the classic look the appearance of the desktop is very similar to
Windows 95. 

<p>One of a big gripes in Windows 95 was that the minimise, maximise and close
buttons were so close together that accidental operation was possible, but this remains
the same. Why on earth these have not been altered, considering the widespread
criticism is anyone's guess. 
<p>Those of you who were expecting an advance in reliability in multi-tasking will
also have to console yourselves. Has this aspect been improved on in Windows 98? I
could detect nothing in the literature or in operation to suggest this.

<h3 class = "head"> Better reliability? </h3>
<p>Claims for better reliability in Windows 98 do not centre on improved multitasking but on testing and automatic error-fixing the hard disk system files and
configuration. Here there has been a significant improvement with Registry Checker
and System File Checker. Windows 98 can check itself on loading with Registry
Checker and correct itself from a set of backup files that it holds. 

<p>System File Checker as the name implies, checks Windows system files for
corruption and can restore them from the CD or from a backup set. 
<p>The most likely cause of trouble is badly-written third-party programs
interfering with the system files. This used to be a problem with Windows 95.
However, with both registry and system file checkers, if the system is so corrupt it
won’t load

</div>
<div class="btns">
<div class="button_prev">
    <button class="blob-btn" onclick="document.location='text4.1.php'">
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
    <button class="blob-btn" onclick="document.location='text4.3.php'">
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