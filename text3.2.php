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

<h1 class="name">JAVA</h1>

<div class="text">
<p> Java is a high-level language with which to write programs that can execute on a
variety of platforms. So are C, C++, Fortran and Cobol, among many others. So the
concept of a portable execution vehicle is not new. Why, then, has the emergence of
Java been trumpeted so widely in the technical and popular press? 

<h3 class = "head"> Why is Java different from other languages? </h3>
<p>Part of Java's novelty arises from its new approach to portability. In previous
High-level languages, the portable element was the source program. Once the source
program is compiled into executable form for a specific instruction set architecture
(ISA) and bound to a library of hardware-dependent I/O, timing and related operating
system (OS) services, portability is lost. The resultant executable form of the program
runs only on platforms having that specific ISA and OS. Thus, if a program is to run
on several different platforms, it has to be recompiled and relinked for each platform.
And if a program is sent to a remote target for execution, the sender must know in
advance the exact details of the target to be able to send the correct version. 
<p>With Java, source statements can be compiled into machine-independent,
«virtual instructions» that are interpreted at execution time. Ideally, the same virtual
code runs in the same way on any platform for which there is an interpreter and OS
that can provide that interpreter with certain multithreading, file, graphical, and
similar support services. With portability moved to the executable form of the
program, the same code can be sent over the net to be run without prior knowledge of
the hardware characteristics of the target. Executable programs in the Java world are
universal. 
<p>In principle, portability could have been achieved in the С or C++ world by
sending the source program over the net and then having the compilation and linkage
done as a pre-step to execution. However, this approach would require that the target
system have sufficient CPU speed and disk capacity to run the sophisticated
compilers and linkers required. In the future, network platforms may not have the
facilities to run even a simple compiler. 
<h3 class = "head"> Is that all?  </h3>
<p>Java is not just a new concept in portability. The Java language evolved from С
and C++ by locating and eliminating many of the major sources of program error and
instability. For example, С has an element known-as a pointer that is supposed to
contain the address at which a specific type of information is stored. However, the
pointer can be set to literally any address value, and by «casting» a programmer can
trick the compiler into storing any type of information at the arbitrary pointer address.
This is convenient if you write error-free code, and a snake pit if you don't. Java does
not have pointers. 
<p>Equally important, Java has built-in support for multiprogramming. С and its
immediately descendent C++, were designed to express a single thread of computing
activity. 
<p>There was no inherent support for multiple program threads executing
simultaneously (on multiple CPUs), or in parallel (timesharing a single CPU). Any
such facilities had to be supplied by an external multitasking operating system. There
are several good programs of this type readily available, such as MTOS-UX from
Industrial Programming. However, the services provided are all vender-specific.
Neither ANSI nor any of the various committees set up to hammer out a universal set
of OS services ever produced a single, universally-accepted standard. There are in
fact, several proposed standards, so there is no standard. 
<p>Java bypasses the problem by building multithreading and the data
synchronization it requires directly into the source program. You still need an OS to
make this happen, but, the semantic meaning of the OS actions is standardized at the
source level. 

<h3 class = "head"> A standard at last  </h3>
<p>Java has all of the technical requisites to become the standard programming
language for programs to be distributed over the net. And with a well-supported
campaign spearheaded by Sun Microsystems, Java is becoming the de facto working
standard. Will Java supersede С as the language of choice for new programs in
general? With network programming likely to play an increasingly larger part in the
overall programming field, I think so. 

<h3 class = "head"> Java for embedded systems </h3>
<p>Embedded or real-time systems include all those in which timing constrains
imposed by the world outside of the computer play a critical role in the design and
implementation of the system. Common areas for embedded systems are machine and
process control, medical instruments, telephony, and data acquisition. 
<p>A primary source of input for embedded systems are random, short-lived,
external signals. When such signals arrive, the processor must interrupt whatever else
it is doing to capture the data, or it will be lost. Thus, an embedded program is most
often organized as a set of individual, but cooperating threads of execution. Some
threads capture new data, some analyze the new data and integrate it with past inputs,
some generate the outgoing signals and displays that are the products of the system.
Currently, most embedded programs are coded in C, with critical parts possibly in
assembler
<p>Putting the issue of execution efficiency aside, some of the major problems of С
for embedded systems are:
    <ul>
        <li>The permissiveness of С operations, which can lead to undisciplined
coding practices and ultimately to unstable execution. </li>
        <li>The absence of universal standards for multithreading, shared data
protection, and intra-thread communication and coordination, which can
make the program hard to transfer to alternate platforms. But, these are
just the problems that Java solves. Since many programmers will have to
learn Java because of its importance to the net, it will be natural for Java
to supplant С in the embedded world. </li>
<p>The use of Java may be different, however. We anticipate that Java programs
for embedded applications will differ from net applets in at least five major ways.
Embedded applications will be: 
        <li>compiled into the native ISA for the target hardware</li>
        <li>capable of running in the absence of a hard or floppy disk, and a network
connection.</li>
        <li>supported by highly tailored, thus relatively small run-time packages.</li>
        <li>able to execute on multiple processors, if needed for capacity expansion</li>
        <li>contain significant amounts of legacy С code, at least during the transition
from С to Java. 
</li>
    </ul>
<h3 class = "head"> Mixed systems: multiple languages, multiple CPUs </h3>
<p>While we expect Java to supersede С as the primary programming language for
embedded systems in the near future, there is still an enormous number of lines of С
code in operation. Companies will have to work with that code for many years as the
transition to Java runs its course. Many systems will have to be a mixture of legacy С
code and Java enhancements. 
<p>It is not trivial to integrate an overall application with some components written
in Java and others in С or assembler. Part of the problem arises from security issues:
How can Java guarantee the security of the system if execution disappears into
«unknown» regions of code? Furthermore, the danger is compounded if the non-Java
code were to make OS support service calls, especially calls that alter the
application's threading and data-protection aspects. Java expects to be the sole master
of such matters. 

<p>Thus we see that mixed language systems may have to exist, but this is not
going to be easy. Similarly, there may be problems with multiple CPUs. 
<p>Current CPUs are fast, and get faster with each new generation.Yet, there are
some embedded applications for which a single CPU still does not have enough
power to keep up with a worst-case burst of external input. Such systems require
multiple CPUs working together to complete the required processing. Even if the
system can handle current work loads, the next version may not. 

<h3 class = "head"> Do we have a problem?  </h3>
<p>When you combine the desire to write in Java, with the need to execute on
unique, system-specific hardware, possibly with mixed source languages and multiple
CPUs, you introduce a major obstacle. You are not likely to get an off-the-shelf Java
OS from Sun Microsystems. 
<p>Many companies that have previously offered their own proprietary real-time
OS are now developing a Java OS, or are seriously considering such an offering. My
own company, Industrial Programming, is currently using its experience with
embedded multithreading/multiprocessor operating systems to create a new system
that will handle applications written in both Java and С. And as the case with its
traditional product, MTOS-UX, the OS is transparent to the number of tightlycoupled CPUs that are executing the application code. If one CPU is not enough, you
can add more without altering the application.</p>
<h3 class = "head"> About the author  </h3>
<p>David Ripps has been in the computer field for over thirty years. He is currently
Vice President of Industrial Programming, Inc. (Jericho, NY). His functions there
include the technical supervision of the MTOS-UX product line. Among the technical
areas in which David has worked are: realtime operating systems, realtime
applications and computer simulation of physical processes. He is the author or coauthor of three books and numerous technical articles. David's formal education is in
Chemical Engineer, with а В ChE from Cornell and M ChE plus PhD from NYU.
David lives in New York City with his wife, Sylvia, and their children, Elana and
Samara. 
</div>
<div class="btns">
<div class="button_prev">
    <button class="blob-btn" onclick="document.location='text3.1.php'">
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
    <button class="blob-btn" onclick="document.location='text3.3.php'">
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