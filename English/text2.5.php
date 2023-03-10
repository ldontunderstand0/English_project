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

<h1 class="name">MODEMS</h1>

<div class="text">
<h3 class = "head"> MODEM ADVANCES </h3> 
<p>Modem technology has advanced tremendously since 1975, when 300bps
modems were considered the maximum practical «standard speed» for modems.
Built-in limits to copper wire circuits and telephone switching equipment made faster
modems practical only for corporate, capital-intensive leased-line networks, or so
many thought. 

<p>Things have changed since then. We've seen the top speed of affordable
modems rise from 300bps to around 19,200bps, a factor of 64. These newer modems
run faster and more reliably, pack more features, use less power in less space, and
cost less. It's the familiar computer pattern of moving toward more power in less
space for less money. 

<p>External modems sit on your desk or underneath your monitor, while internal
ones plug into an expansion slot inside the computer case. There are also acoustic
modems, the oldest modem technology of all. 
<h3 class = "head"> Modem Basics </h3> 
<p>At its simplest, all any modem needs to do is provide a translation service from
computer signal to telephone signal and back. Computers «think» in digital, binary
form, but copper telephone wires carry signals that correspond roughly to the human
voice in loudness, tone, and range. It's little wonder the two need a translator to
communicate
<p>The modem provides this necessary translation. When a computer sends out its
data, the modem turns the computer's ON/OFF electrical signals into a telephone's
varying or modulated audible signal. In other words, the modem modulates the signal
– which accounts for the modulate part of a modem's name. 

<p>The newly modulated signal sounds like a whistle or, at higher speeds, like
«fuzzy» noise to the human ear. It would make no sense whatever to a computer's
logic circuits, but it travels just fine on copper wire. When it arrives at the other end
of the phone connection, another modem must turn it back into a digital, ON/OFF (or
demodulated) signal. Otherwise the receiving computer won't be able to make sense
of it. Hence the rest of the name: modulate/demodulate, or modem
<p>To make this simple idea work, all modems share certain components, like a
transmitter and receiver. On a telephone, the transmitter is the mouthpiece and the
receiver is the earpiece. Why not just use those? The only other component really
needed is something to «talk» and «listen» to the phone while sending and receiving
data... аn electronic translator that can talk over the phone. 
<h3 class = "head"> Acoustic Modems </h3>
<p>Early modems were just about that simple. You placed a normal telephone
receiver into a pair of noise-reducing, cushioned cups. These modems, still in use, are
called acoustic couplers or acoustic modems, because they have no direct electrical
connection. Instead, they send an audible signal directly into a small speaker, which
«speaks» into the telephone mouthpiece. 
<p>Acoustic coupling is not very efficient. In an office environment, the shortcomings quickly become obvious. If someone puts down a coffee cup too hard or
drops a spoon during a transmission, it introduces random blips and bleeps into the
signal. These get translated at the other end into «garbage» or nonsense characters. At
a pay phone, passing traffic can have similar effects. 
<h3 class = "head" > Direct-Connect Modems </h3>
<p>A better solution is to connect the modem directly – electrically, that is, instead
of acoustically into the phone circuit. This eliminates noise, interference, and
speaker-to-speaker signal loss. It also opens the door to various speed and reliability
enhancements. 
<p>Even people familiar with modem technology can have trouble with the monthly
crop of new bells and whistles. Some software authors smooth the way by providing
automatic setup routines for many different modem brands. 
<h3 class = "head"> Connecting Your Modem to a Phone Line </h3>
<p>Telephone lines are wires, and all wires have resistance. Wires allow electrons
to flow from one point to another. The resistance in these wires helps to impede the
electron flow. 
<p>Impedance is an inherent physical property of wire. The amount of impedance
depends on the width of the wire in respect to how much current is flowing, and the
length of the wire. At the end of the wires, at the phone company office, are electrical
circuits and switches–all designed to permit transmission over these phone lines, but
all with limitations on their capabilities. 
<p>You can hook up to a phone line in two ways: acoustically or directly.
Direct-connect modems connect to telephone lines by means of the familiar
RJ11 modular telephone jack. They are less sensitive to noise, and are easy to
connect. Back in the old days, before modular phone jacks, you had to cut and splice
wires if you wanted a direct electrical connection between your modem and the
phone line. This wasn't too popular with the family, as it tended to render the
telephone useless. 
<p>Most modems are direct-connect. They've become so popular that hotels
catering to business travelers provide an extra RJ11 jack in their rooms. Electronics
stores sell special one-line adapter jacks. 
<h3 class = "head"> Connecting Your Modem to a PC </h3>
<p>After successfully connecting your modem to the telephone system, the next
step is to make the connection between the modem and your personal computer.
Free-standing (external) modems are connected by either a DB-25 or DB-9 cable to
the computer's RS-232 serial communications port. Board (internal) modems are connected by plugging a card into one of the computer's expansion slots. 


</div>
<div class="btns">
<div class="button_prev">
    <button class="blob-btn" onclick="document.location='text2.4.php'">
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
    <button class="blob-btn" onclick="document.location='text2.6.php'">
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