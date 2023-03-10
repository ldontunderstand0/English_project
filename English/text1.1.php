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

<h1 class="name">HISTORY</h1>

<div class="text">
<p> In 1952, a major computing company took a decision to get out of the business of making mainframe computers. They believed that there was only a market for four mainframes in the whole world. That company was IBM. The following year they reversed their decision.

<p>In 1980, IBM decided that there was a market for 250,000 PCs, so they set up a special team to develop the first IBM PC. It went on sale in 1981 and set a worldwide standard for IBM-compatibility which, over the next ten years, was only seriously challenged by one other company, Apple Computers. Since then, over seventy million PCs made by IBM and other manufacturers have been sold. Over this period, PCs have become commodity items. Since IBM made the design nonproprietary, anyone can make them.

<p>The history of the multi-billion dollar PC industry has been one of mistakes. Xerox Corporation funded the initial research on personal computers in their Palo Alto laboratory in California. However, the company failed to capitalize on this work, and the ideas that they put together went into the operating system developed for Apple's computers. This was a graphical interface: using a mouse, the user clicks on icons which represent the function to be performed.

<p>The first IBM PC was developed using existing available electrical components. With IBM's badge on the box it became the standard machine for large corporations to purchase. When IBM were looking for an operating system, they went initially to Digital Research, who were market leaders in command-based operating systems (these are operating systems in which the users type in commands to perform afunction). When the collaboration between IBM and Digital Research failed, IBM turned to Bill Gates, then 25 years old, to write their operating system.

<p>Bill Gates founded Microsoft on the basis of the development of MS/DOS, the initial operating system for the IBM PC. Digital Research have continued to develop their operating system, DR/DOS, and it is considered by many people to be a better product than Microsoft's. However, without an endorsement from IBM, it has become a minor player in the market. Novell, the leaders in PC networking, now own Digital Research, sо things may change.

<p>The original IBM PC had a minimum of 16K of memory, but this could be upgraded to 512K if necessary, and ran with a processor speed of 4.77MHz. Ten years later, in 1991, IBM were making PCs with 16Mb of memory, expandable to 64Mb, running with a processor speed of 33MHz. The cost of buying the hardware has come down considerably as the machine's have become commodity items. Large companies are considering running major applications on PCs, something which, ten years ago, no one would have believed possible of a PC. In contrast, many computers in people's homes are just used to play computer games.

<p>The widespread availability of computers has in all probability changed the world for ever. The microchip technology which made the PC possible has put chips not only into computers, but also into washing-machines and cars. Some books may never be published in paper form, but may only be made available as part of public databases. Networks of computers are already being used to make information available on a worldwide scale.</p>
</div>
<div class="btns">
<div class="button_prev">
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
    <button class="blob-btn" onclick="document.location='text1.2.php'">
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