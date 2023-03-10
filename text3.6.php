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

<h1 class="name">DIAGRAMS</h1>

<div class="text">
<p>The Sequence Diagram is one of the most interesting and useful diagrams in the
Unified Modeling Language (UML). It helps you document and understand the
dynamic aspects of your software system–specifically the sequence of messages that
are sent and received between objects. Sequence diagrams can help you comprehend
and solve difficult issues in the process-intensive portions of your applications. 
<h3 class = "head"> Fast Facts </h3>
<p>The Sequence Diagram is one of the five UML diagrams that help you model
the dynamic aspects of your software. Sequence diagrams and their cousin,
collaboration diagrams, show the dynamic interaction between objects in the system.
A sequence diagram's focus is the time ordering of messages between objects
(usually business objects). 
<p>This article covers one of the most interesting diagrams in the UML–the
sequence diagram. They are most often used in the construction phase of software
projects and are especially useful when analyzing the process-intensive portions of
your application. Sequence diagrams are closely related to collaboration diagrams.
While the collaboration diagram's main focus is to show how objects are associated
with each other, sequence diagrams show the time ordering of messages between
objects. 

<h3 class = "head"> Why use Sequence Diagrams? </h3>
<p>Unless you are using business objects in your applications, you won't have much
need for sequence diagrams. This is because if you're not using business objects,
most of your application logic resides inside methods of user interface objects or in
functions and procedures–and there really isn't much messaging that occurs between
objects. However, once you decide to elevate your programming by using business
objects in your applications, sequence diagrams help you answer two very important
questions:
<ol>
    <li>Which objects should be assigned a particular responsibility? 
</li>
    <li>In what order should messages pass between objects?</ol>
</li>
<p>These questions are very difficult to answer correctly when you simply try to
envision object messaging in your head. In contrast, when you document your
thought process in a sequence diagram, suddenly the answers to these questions
become crystal clear. At a higher level, it also helps you comprehend the overall flow
of a particular process. In addition, sequence diagrams help you easily identify
unnecessary messages between objects and factor them out. You may also discover
that objects you originally thought should be involved in a particular process
shouldn't be involved at all!  
</div>
<div class="btns">
<div class="button_prev">
    <button class="blob-btn" onclick="document.location='text3.5.php'">
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
    <button class="blob-btn" onclick="document.location='text3.7.php'">
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