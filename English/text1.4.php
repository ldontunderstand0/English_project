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

<h1 class="name">HOWARD H. AIKEN AND THE COMPUTER</h1>

<div class="text">
<p>Howard Aiken's contributions to the development of the computer – notably the Harvard Mark II (IBM ASSC) machine, and its successor the Mark II – are often excluded from the mainstream history of computers on two technicalities. The first is that Mark I and Mark II were electro-mechanical rather than electronic; the second one is that Aiken was never convinced that computer programs should be treated as data what have come to be known as the von Neumann concept, or the stored program.

<p>It is not proposed to discuss here the origins and significance of the stored program. Nor I wish to deal with the related problem of whether the machines before the stored program were or were not «computers». This subject is complicated by the confusion in actual names given to machines. For example, the ENIAC, which did not incorporate a stored program, was officially named a computer: Electronic Numeral Integrator And Computer. But the first stored-program machine to be put into regular operation was Maurice Wiles' EDSAC: Electronic Delay Storage

Automatic Calculator. It seems to be rather senseless to deny many truly significant innovations (by H.H. Aiken and by Eckert and Mauchly), which played an important role in the history of computers, on the arbitrary ground that they did not incorporate the stored-program concept.

<p>Aiken was a visionary, a man ahead of his times. Grace Hopper and others remember his prediction in the late 1940s, even before the vacuum tube had been wholly replaced by the transistor, that the time would come when a machine even more powerful than the giant machines of those days could be fitted into a space as small as a shoe box.

<p>Some weeks before his death Aiken had made another prediction. He pointed out that hardware considerations alone did not give a true picture of computer costs. As hardware has become cheaper, software has been apt to get more expensive. And then he gave us his final prediction: «The time will come», he said, «when manufacturers will give away hardware in order to sell software». Time alone will tell whether or not this was his final look ahead into the future.

<p> The March issue of Computer ignores some of the leading developments of
industry in the field of fault-tolerance. A company called Tandem manufactures a
«non-stop», parallel processing computer system. The only indirect reference to it in
the March issue is contained in Al Hopkins' article: «With certain exceptions, vendors
do not offer fault-tolerant computers and systems as off-the-shelf items»
</div>
<div class="btns">
<div class="button_prev">
    <button class="blob-btn" onclick="document.location='text1.3.php'">
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
    <button class="blob-btn" onclick="document.location='text1.5.php'">
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