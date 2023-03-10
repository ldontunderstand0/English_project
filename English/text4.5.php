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

<h1 class="name">UNIX'S LITTLE BROTHER</h1>

<div class="text">
<p>Bell Labs’ s Plan 9, named after a cult sci-fi film, resembles UNIX in many
ways. Like UNIX, Plan 9 was designed as a time sharing operating system primarily
for software developers. Like UNIX, it is a file-based operating system intended to be
portable between hardware environments. Plan 9 even shares some of UNIX’s
original developers. Along with Bell Labs research scientists Rob Pike, Dave
Presotto, Howard Trickey, UNIX originator Ken Thompson is credited as a primary
designer of Plan 9. Thompson created Plan 9’s fileserver and initial complier. UNIX
cocreator Dennis Ritchie also helped on the project.
But Plan 9 differs from UNIX–and trends occurring in the UNIX world to day–
in some important ways. For example Plan 9 rejects the currently popular idea of an
extended systems architecture made up of many powerful, self-contained
workstations that coexist and communicate on a network. Instead, Plan 9 creates a
networked architecture made up of three key components each designed for a
particular function and dependent on the others.
<h3 class = "head"> Gnot A Workstation </h3>
<p>The Plan 9 architecture consists of what its creators call a «CPU server», a
fileserver and a terminal. The CPU server, implemented as a multiprocessor system
takes on all computation tasks. It has no local storage and instead relies on associated
remote fileservers for storage. The CPU server communicates via a 20-megabyte per
second direct memory access (DM) link with fileservers that are equipped with lots of
solid - state, magnetic and optical memory. 
<p> The servers use a nonstandard, efficient protocol to communicate over standard
phone lines with a dedicated Plan 9 terminal called a Gnot. Plan 9 researchers say
they are fully aware that calling the Gnot a terminal rather than a workstation implies
a return to an older, more centralized style of computing. That, they say, is exactly
the idea. 
<p>Although the current prototype Gnot is plenty powerful–it's based on a 25-
megahertz 68020 processor and has a 1,024 x 1,024 pixel display–the Plan 9
terminal, like terminals of old, is designed as an anonymous node on the network, not
a full-fledged workstation. 
<p>«If you have a network of workstations, each workstation has some files of its
own, and somebody has to worry about [managing] that,» says Peter Weinberger,
Bell Labs computing principles research department head. «Here [with Plan 9] there's
just a fileserver. I have files, but the workstation doesn't have any files.» This strategy
makes a Plan 9 network much easier to manage than one made up of full-function
workstations, says Weinberger. It also makes security easier to handle.
<p> Complementing Plan 9's hardware architecture is a unique method for naming
files and creating name spaces. When a user sits down at a Plan 9 terminal, he or she
selects from a set of available services, and Plan 9 automatically creates a name space
by joining the user's private name space with the service's name spaces.
Researchers say the Plan 9 architecture will not only be easier to use and
ad:minister but also better able to keep up with swiftly evolving computer technology
advances. By expressly isolating the terminal, researchers say, Plan 9 can take
advantage of the most rapid improvements in chip speed and display technologies
without having to replace whole workstations or large amounts of storage. <p>
<p>Plan 9 researchers insist they aren't trying to replace UNIX. «It's not as if anyone expects UNIX to go away. This [Plan 9] is just complementary, supplementary,»
says Weinberger. In fact, although UNIX and Plan 9 are not compatible, Plan 9 can
interoperate and share files with UNIX. A large percentage of the 60 Plan 9 users
inside Bell Labs currently use the operating system primarily to access UNIX
applications and files. 

<p>Nor do researchers expect Plan 9 to become available outside Bell Labs anytime soon. Although lately Bell Labs's management has been publicly discussing the
research effort, Weinberger says complete documentation on the operating system
became available within Bell Labs only recently.
<p>Longer term, however, Weinberger says, many of Plan 9's concepts could find
their way into commercial UNIX. «In the long run, when somebody sits down at [a
terminal or workstation] you won't be sure whether you're in a Plan 9 environment or
a UNIX environment,» says Weinberger. 

</div>
<div class="btns">
<div class="button_prev">
    <button class="blob-btn" onclick="document.location='text4.4.php'">
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
    <button class="blob-btn" onclick="document.location='text4.6.php'">
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