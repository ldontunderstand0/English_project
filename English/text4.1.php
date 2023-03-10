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
<title>Text 1</title>
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

<h1 class="name">OPERATING SYSTEMS </h1>

<div class="text">
<h3 class = "head"> Is DOS dead? </h3>
<p> When the original IBM PC debuted, there didn't seem to be anything unique or
special about the operating system that shipped with it. DOS was hardly the most
sophisticated or easiest to use OS on the market. When IBM hitched its wagon to
DOS, though, it swiftly rocketed to industry standard status, and broke all records for
marketshare. 

<p>When graphical operating systems like OS/2, Windows, and the Macintosh OS
showed themselves to be far easier to use, pundits predicted the swift demise of DOS,
but its death has been anything but rapid. 

<p>The original Microsoft Windows, although known as an operating system, was
actually just an operating environment built on top of DOS. Since DOS still lived
underneath Windows, DOS programs were still usable from within the Windows
environment
<p>Today, thousands of court reporters still use DOS-based CAT software like
Premier Power and TurboCAT, despite the availability of Windows-based products
that can accomplish the same tasks. Why? Because what they have works, and they
see no reason to upgrade.
<p>Today, however, it's hard to buy a computer that doesn't already have Windows
loaded on it. Although most consumer varieties of Windows still have DOS
underneath, many features of the newer computers simply aren't available from DOSbased programs anymore. People trying to run DOS-based programs on Pentium III
computers find themselves struggling to make PCMCIA cards, fast modems,
software keys («dongles»), USB ports, and even plain old serial ports work with their
software. 
<h3 class = "head"> Can you still use your old CAT? </h3>
<p>Is it worth wrestling with memory management problems and compatibility
issues just to hang on to your old CAT software? Possibly. New CAT software
represents a significant investment. If you're tight on cash and happy with the old
program, here are a few ways to make your life easier:
    <ul>
        <li>Look for used computers rather than new ones. It's possible to pick up
used 486 and Pentium 1 computers for a song these days, and if it's running
nothing but your old CAT software, it should be perfectly adequate for the task.</li>
        <li>Use a different computer for CAT than you use for everything else.
This lets you load an old version of DOS and/or Windows on the machine
instead of struggling to run your DOS software under Windows Me or
Windows 2000. </li>
        <li>Look for an old version of DOS. Microsoft doesn't sell DOS anymore
(at least not to folks like us), but you may be able to find a copy at a garage
sale, a friend's house, or a swap meet. Most DOS-based CAT software was
designed to run under DOS 6.2, so if you're dedicating a computer to CAT,
that's the DOS to load. </li>
    </ul>
    <h3 class = "head"> But is it dead? </h3>
<p>Okay, the title of this article is, «Is DOS Dead?» and all we've done so far is
discuss how you can continue to use it. The bottom line is that DOS is no longer sold
or supported by Microsoft. Even though there are still remnants of DOS deep down
underneath Windows 98 and Windows Me, Microsoft expects to switch everyone
over to the Windows NT kernel, effectively removing the last vestiges of DOS from
their operating system. 
<p>If you continue to use a DOS environment, you're locking yourself out of the
latest tools for court reporters, like SearchMaster and e-Transcript. Sure, you can run
them on a separate computer, but is it really worth the trouble? 
<p>They don't make Ford Model T's or Edsels any more, but that doesn't stop an
active group of people from still driving them. If you choose to stay with your DOSbased system, the Windows police won't knock on your doors (or windows?) in the
middle of the night to arrest you. You may get years of productive use from your
system, and save thousands in upgrade fees.
<p>Is DOS dead? Yes. But let your own situation determine whether you stay with
it anyway. Good luck!
</div>
<div class="btns">
<div class="button_prev">
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
    <button class="blob-btn" onclick="document.location='text4.2.php'">
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