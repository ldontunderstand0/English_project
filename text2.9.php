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

<h1 class="name">KEY PROPERTIES OF THE INTERNET</h1>

<div class="text">
<p>The Internet has several key properties that make it exceedingly hard to
characterize, and thus to simulate. First, its great success has come in large part
because the main function of the Internet Protocol (IP) architecture is to unify diverse
networking technologies and administrative domains. IP allows vastly different
networks administered by vastly different policies to seamlessly interoperate.
However, the fact that IP masks these differences from a user's perspective does not
make them go away IP buys uniform connectivity in the face of diversity, but not
uniform behavior. Indeed, the greater IP's success at unifying diverse networks, the
harder the problem of understanding how a large IP network behaves. 

<p>A second key property is that the Internet is big It included an estimated 998
million computers at the end of 2000. Its size brings with it two difficulties. The first
is that the range of heterogeneity mentioned above is very large if only a small
fraction of the computers behave in an atypical fashion, the Internet still might
include thousands of such computers, often too many to dismiss as negligible. 
<p>Size also brings with it the crucial problem of scaling many networking
protocols and mechanisms work fine for small networks of tens or hundreds of
computers, or even perhaps «large» networks of tens of thousands of computers, yet
become impractical when the network is again three orders of magnitude larger
(today's Internet), much less five orders of magnitude (the coming decade's Internet).
Large scale means that rare events will routinely occur in some part of the network,
and, furthermore, that reliance on human intervention to maintain critical network
properties such as stability becomes a recipe for disaster
<p> A third key property is that the Internet changes in drastic ways over time. For
example, we mentioned above that in Dec. 2000, the network included 100 million
computers But in Jan.1997, four years earlier, it comprised only 16 million
computers, reflecting growth of about 60% year. This growth then begs the question:
how big will it be in two more years? 5 years? 
</div>
<div class="btns">
<div class="button_prev">
    <button class="blob-btn" onclick="document.location='text2.8.php'">
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
    <button class="blob-btn" onclick="document.location='unit2.php'">
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
    <button class="blob-btn" onclick="document.location='unit3.php'">
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