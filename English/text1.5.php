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
<title>Text 5</title>
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

<h1 class="name">THE DEVELOPMENT OF COMPUTERS IN THE USA</h1>

<div class="text">
<p>In the early 1960s, when computers were hulking mainframes that took up entire rooms, engineers were already toying with the then – extravagant notion of building a computer intended for the sole use of one person. By the early 1970s, researches at Xerox's Polo Alto Research Center (XeroxPARC) had realized that the pace of improvement in the technology of semiconductors – the chips of silicon that are the building blocks of present-day electronics – meant that sooner or later the PC would be extravagant no longer. They foresaw that computing power would someday be so cheap that engineers would be able to afford to devote a great deal of it simply to making non-technical people more comfortable with these new information –  handling tools. In their labs, they developed or refined much of what constitutes PCs today, from «mouse» pointing devices to software «windows». Although the work at XeroxPARC was crucial, it was not the spark that took PCs out of the hands of experts and into the popular imagination. That happened inauspiciously in January 1975, when the magazine Popular Electronics put a new kit for hobbyists, called the Altair, on its cover, for the first time, anybody with $400 and a soldering iron could buy and assemble his own computer. The Altair inspired Steve Wosniak and Steve Jobs to build the first Apple computer, and a young college dropout named Bill Gates to write software for it. Meanwhile, the person who deserves the credit for inventing the Altair, an engineer named Ed Roberts, left the industry he had spawned to go to

medical school. Now he is a doctor in small town in central Georgia.

<p>To this day, researchers at Xerox and elsewhere pooh-pooh the Altair as too primitive to have made use of the technology they felt was needed to bring PCs to the masses. In a sense, they are right. The Altair incorporated one of the first single-chip microprocessor – a semiconductor chip, that contained all the basic circuits needed to do calculations – called the Intel 8080. Although the 8080 was advanced for its time, it was far too slow to support the mouse, windows, and elaborate software Xerox had developed. Indeed, it wasn't until 1984, when Apple Computer's Macintosh burst onto the scene, that PCs were powerful enough to fulfill the original vision of researchers. «The kind of computing that people are trying to do today is just what we made at PARC in the early 1970s,» says Alan Kay, a former Xerox researcher who jumped to Apple in the early 1980s.

<p>Researchers today are proceeding in the same spirit that motivated Kay and his XeroxPARC colleagues in the 1970s: to make information more accessible to ordinary people. But a look into today's research labs reveals very little that resembles what we think of now as a PC. For one thing, researchers seem eager to abandon the keyboard and monitor that are the PC's trademarks. Instead they are trying to devise PCs with interpretive powers that are more humanlike – PCs that can hear you and see you, can tell when you're in a bad mood and can ask questions when they don't understand something. It is impossible to predict the invention that, like the Altair, crystallize new approaches in a way that captures people's imagination.

</div>
<div class="btns">
<div class="button_prev">
    <button class="blob-btn" onclick="document.location='text1.4.php'">
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
    <button class="blob-btn" onclick="document.location='text1.6.php'">
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