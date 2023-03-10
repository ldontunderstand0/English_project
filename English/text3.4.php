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

<h1 class="name">CANVAS OF INVENTION</h1>

<div class="text">
<p>It may sound odd to describe computers as providing grand scope for creative
activities: Aren’t they monotonous, dull, unintelligent, and extremely limited? Yes,
they are. However, they have redeeming virtues that make them ideal as the canvas of
invention: they are extraordinarily fast and spectacularly reliable. These
characteristics allow the creator of a program to weave intricate chains of thought and
have a fantastic number of steps carried out without fail. 
<p>The most impressive attribute of modern computers, of course, is their speed; as
we have already seen, this is measured in MIPS (millions of instructions per second). 

<p>Of course, raw speed is not very valuable if we can't rely on the results we get.
ENIAC, one of the first electronic computers, had a failure every few hours, on the
average; since the problems it was solving took about that long to run, the likelihood
that the results were correct wasn't very high. Particularly critical calculations were
often ran several times, and if the users got the same answer twice, they figured it
was probably correct. By contrast, modern computers are almost incomprehensibly
reliable. With almost any other machine, a failure rate of one in every million
operations would be considered phenomenally low, but a computer with such a
failure rate would make thousands of errors per second. 
<p>On the other hand, if computers are so reliable, why are they blamed for so
much that goes wrong with modern life? Who among us has not been the victim of an
erroneous credit report, or a bill sent to the wrong address, or been put on hold for a
long time because «the computer is down»? The answer is fairly simple: It's almost
certainly not the computer. More precisely, it's very unlikely that the CPU was at
fault; it may be the software, other equipment such as telephone lines, tape or disk
drives, or any of the myriad «peripheral devices» that the computer uses to store and
retrieve information and interact with the outside world. Usually, it's the software;
when customer service representatives tell you that they can't do something obviously
reasonable, you can count on its being the software. 
</div>
<div class="btns">
<div class="button_prev">
    <button class="blob-btn" onclick="document.location='text3.3.php'">
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
    <button class="blob-btn" onclick="document.location='text3.5.php'">
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