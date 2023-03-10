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
  <img class="menu" src="images/menu_<?php echo $_SESSION["theme"]; ?>.png" onclick="document.location='content.php'"></img>
  <img class="icon" src="images/icon_<?php echo $_SESSION["theme"]; ?>.png" onclick="document.location='index.php'"></img>
</div>

<h1 class="name">FAIL-RESISTANT COMPUTER</h1>

<div class="text">
<p>The March issue of Computer ignores some of the leading developments of
industry in the field of fault-tolerance. A company called Tandem manufactures a
«non-stop», parallel processing computer system. The only indirect reference to it in
the March issue is contained in Al Hopkins' article: «With certain exceptions, vendors
do not offer fault-tolerant computers and systems as off-the-shelf items». 
<p>Computer's omission is not unique. I specialized in fault-tolerance and received
a master's degree in computer science from Carnegie-Mellon University, where
several fault-tolerant multiprocessors were built. Yet until I left the university and
entered the job market, I had never heard of Tandem computers. I have now been
programming them for two years; let me give your readers some background
information gleaned from Tandem's manuals and discussions with Tandem
employees. 
<p>The company was started in the early 70's by disgruntled Hewlett-Packard users
who realized how difficult it would be to make their system fault-tolerant. The
founders commissioned marketing studies which determined that there was a demand
for fault-tolerant computing in commercial applications, like banking, securities
transfer, and online data bases. A commercially oriented architecture was designed,
with dual redundancy providing the fault tolerance. Tandem's basic claim is that no
one failure can bring the system down; processors, I/O ports, buses, and power
supplies are at least dual and a single failure should not halt the system. 
<p>For a program to run non-stop, it must execute on two distinct processors. The
program must be designed to checkpoint vital information from the primary processor
to the backup processor at certain points. The checkpointing software is provided by
Tandem, but the user must decide what needs to be checkpointed, and when. 
</div>
<div class="btns">
<div class="button_prev">
    <button class="blob-btn" onclick="document.location='text3.7.php'">
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
    <button class="blob-btn" onclick="document.location='unit4.php'">
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