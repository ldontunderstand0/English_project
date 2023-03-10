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

<h1 class="name">CONNECTING TO THE NETWORK</h1>

<div class="text">
<p>Connecting to the Net depends on where you are. If you're a college student or
work at a company with its own Net connections, chances are you can gain access
simply by asking your organization's computing center or data-processing department
– they will then give you instructions on how to connect your already networked
computer to the Internet

<p>Otherwise, you'll need four things: a computer, telecommunications software, a
modem and a phone line to connect to the modem. 


<p>The phone line can be your existing voice line – just remember that if you have
any extensions, you (and everybody else in the house or office) won't be able to use
them for voice calls while connected to the Net. 
<p>A modem is a sort of translator between computers and the phone system. It's
needed because computers and the phone system process and transmit data, or
information, in two different, and incompatible ways. Computers «talk» digitally; that
is, they store and process information as a series of discrete numbers. The phone
network relies on analog signals, which on an oscilloscope would look like a series of
waves. When your computer is ready to transmit data to another computer over a
phone line, your modem converts the computer numbers into these waves (which
sound like a lot of screeching) – it «modulates» them. In turn, when information
waves come into your modem, it converts them into numbers your computer can
process, by «demodulating» them. 

<p>Increasingly, computers come with modems already installed. If yours didn't,
you'll have to decide what speed modem to get. Modem speeds are judged in «baud
rate» or bits per second. One baud means the modem can transfer roughly one bit per
second; the greater the baud rate, the more quickly a modem can send and receive
information. A letter or character is made up of eight bits. 

<p>You can now buy a 2,400-baud modem for well under $70 – and most now
come with the ability to handle fax messages as well. For $200 and up, you can buy a
modem that can transfer data at 9,600 baud (and often even faster, when using special
compression techniques). If you think you might be using the Net to transfer large
numbers of files, a faster modem is always worth the price. It will dramatically
reduce the amount of time your modem or computer is tied up transferring files and,
if you are paying for Net access by the hour, save you quite a bit in online charges. 
<p>Like the computer to which it attaches, a modem is useless without software to
tell it how to work. Most modems today come with easy-to-install software. Try the
program out. If you find it difficult to use or understand, consider a trip to the local
software store to find a better program. You can spend several hundred dollars on a
communications program, but unless you have very specialized needs, this will be a
waste of money, as there are a host of excellent programs available for around $100
or sometimes even less. Among the basic features you want to look for are a choice
of different «protocols» (more on them in a bit) for transferring files to and from the
Net and the ability to write «script» or «command» files that let you automate such
steps as logging into a host system. 
<p>When you buy a modem and the software, ask the dealer how to install and use
them. Try out the software if you can. If the dealer can't help you, find another dealer.
You'll not only save yourself a lot of frustration, you'll also have practiced the second
Net Commandment: «Ask. People Know». 
<p>To fully take advantage of the Net, you must spend a few minutes going over the
manuals or documentation that comes with your software. There are a few things you
should pay special attention to: uploading and downloading; screen capturing
(sometimes called «screen dumping»); logging; how to change protocols; and
terminal emulation. It is also essential to know how to convert a file created with our
word processing program into «ASCII» or «text» format, which will let you share
your thoughts with others across the Net
<p>Uploading is the process of sending a file from your computer to a system on the
Net. Downloading is retrieving a file from somewhere on the Net to your computer.
In general, things in cyberspace go «up» to the Net and «down» to you. 
<p>Chances are your software will come with a choice of several «protocols» to use
for these transfers. These protocols are systems designed to ensure that line noise or
static does not cause errors that could ruin whatever information you are trying to
transfer. Essentially, when using a protocol, you are transferring a file in a series of
pieces. After each piece is sent or received, your computer and the Net system
compare it. If the two pieces don't match exactly, they transfer it again, until they
agree that the information they both have is identical. If, after several tries, the
information just doesn't make it across, you'll either get an error message or your
screen will freeze. In that case, try it again. If, after five tries, you are still stymied,
something is wrong with a) the file; b) the telephone line; c) the system you're
connected to; or d) you own computer
<p>From time to time, you will likely see messages on the Net that you want to save
for later viewing – a recipe, a particularly witty remark, something you want to write
your Congressman about, whatever. This is where screen capturing and logging come
in. 
<p>When you tell your communications software to capture a screen, it opens a file
in your computer (usually in the same directory or folder used by the software) and
«dumps» an image of whatever happens to be on your screen at the time. 

<p>Logging works a bit differently. When you issue a logging command, you tell
the software to open a file (again, usually in the same directory or folder as used by
the software) and then give it a name. Then, until you turn off the logging command,
everything that scrolls on your screen is copied into that file, sort of like recording on
25
video tape. This is useful for capturing long documents that scroll for several pages –
using screen capture, you would have to repeat the same command for each new
screen. 
<p>Terminal emulation is a way for your computer to mimic, or emulate, the way
other computers put information on the screen and accept commands from a
keyboard. In general, most systems on the Net use a system called VT100.
Fortunately, almost all communications programs now on the market support this
system as well – make sure yours does. 
<p>You'll also have to know about protocols. There are several different ways for
computers to transmit characters. Fortunately, there are only two protocols that you're
likely to run across: 8-1-N (which stands for «8 bits, 1 stop bit, no parity» – yikes!)
and 7-1-E (7 bits, 1 stop bit, even parity)
<p>In general, Unix-based systems use 7-1-E, while MS-DOS-based systems use 8-
1-N. What if you don't know what kind of system you're connecting to? Try one of
the settings. If you get what looks like gobbledygook when you connect, you may
need the other setting. If so, you can either change the setting while connected, and
then hit enter, or hang up and try again with the other setting. It's also possible your
modem and the modem at the other end can't agree on the right baud rate. If changing
the protocols doesn't work, try using another baud rate (but no faster than the one
listed for your modem). Again, remember, you can't break anything.! If something
looks wrong, it probably is wrong. Change your settings and try again. Nothing is
learned without trial, error and effort. Those are the basics. Now onto the Net! 


</div>
<div class="btns">
<div class="button_prev">
    <button class="blob-btn" onclick="document.location='text2.1.php'">
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
    <button class="blob-btn" onclick="document.location='text2.3.php'">
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