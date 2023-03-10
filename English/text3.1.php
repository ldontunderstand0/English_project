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

<h1 class="name">PROGRAMMING LANGUAGES</h1>

<div class="text">
<p>The precursors of object-oriented programming can be traced back to the late
1960's: Classes, inheritance and virtual member functions were integral features of
Simula67. a programming language that was mainly used for writing event-driven
simulations. When Smalltalk first appeared back in 1972 it offered a pure objectoriented programming environment. In fact Smalltalk defined object-oriented
programming. This style of programming was so innovative and revolutionary at the
time that it took more than a decade for it to become a standard in the software
industry. Undoubtedly, the emergence of C++ in the early 80s provided the most
considerable contribution to this revolution.
<h3 class = "head"> The Origins of C++ </h3>
<p>In 1979. a young engineer at Bell (now AT&T) Labs, Bjarne Stroustrup, started
to experiment with extensions to С to make it a better tool for implementing largescale projects. In those days, an average project consisted of tens of thousands of
lines of code (LOC). 

<p>NOTE: Today. Microsoft's Windows 2000 (formerly NT 5.0) consists of more
than 30 million lines of code. 

<p>When projects leaped over the 100,000 LOC count, the shortcomings of С
became noticeably unacceptable. Efficient teamwork is based, among other things, on
the capability to decouple development phases of individual teams from one another
– something that was difficult to achieve in C. 
<h3 class = "head"> С with Classes </h3>
<p>By adding classes to C, the resultant language – «C with classes» – could offer
better support for encapsulation and information hiding. A class provides a distinct
separation between its internal implementation (the part that is more likely to change)
and its external interface. A class object has a determinate state right from its
construction, and it bundles together the data and operations that manipulate it. 
<h3 class = "head"> Enter C++ </h3>
<p>In 1983, several modifications and extensions had already been made to С with
classes. In that year, the name «C++» was coined. Ever since then, the + + suffix has
become a synonym for object-orientation. (Bjarne Stroustrup could have made a
fortune only by registering ++ as a trademark). It was also in that year that C++ was
first used outside AT&T Labs. The number of users was doubling every few months
– and so was the number of compilers and extensions to the language. 
<h3 class = "head"> C++ as Opposed to Other Object-Oriented Languages </h3>
<p>C++ differs from other object-oriented languages in many ways. For instance,
C++ is not a root-based language, nor does it operate on a runtime virtual machine.
These differences significantly broaden the domains in which C++ can be used.
<h3 class = "head"> Backward Compatibility with Legacy Systems </h3>
<p>The fact that legacy С code can be combined seamlessly with new C++ code is a
major advantage. Migration from С to C++ does not force you to throw away good,
functional С code. Many commercial frameworks, and even some components of the
Standard Library itself, are built upon legacy С code that is wrapped in an objectoriented interface. 
<h3 class = "head"> Object-Orientation and Other Useful Paradigms </h3>
<p>In addition to object-oriented programming, C++ supports other useful
programming styles, including procedural programming, object-based programming,
and generic programming – making it a multi-paradigm, general-purpose
programming language. 
<h3 class = "head"> Procedural Programming </h3>
<p>Procedural programming is not very popular these days. However, there are
some good reasons for C++ to support this style of programming, even today. 
<h3 class = "head"> Gradual Migration of С Programmers To C++ </h3>
<p>С programmers who make their first steps in C++ are not forced to throw all
their expertise away. Many primitives and fundamental concepts of C++ were
inherited from C, including built-in operators and fundamental types, pointers, the
notion of dynamic memory allocation, header files, preprocessor, and so on. As a
transient phase, С programmers can still remain productive when the shift to C++ is
made.
<h3 class = "head"> Bilingual Environments </h3>
<p>C++ and С code can work together. Under certain conditions, this combination
is synergetic and robust
<h3 class = "head"> Object-Oriented Programming </h3>
<p>This is the most widely used style of programming in C++. There is no universal
consensus as to what OO really is; the definitions vary among schools, languages,
and users. There is, however, a consensus about a common denominator – a
combination of encapsulation, information hiding, polymorphism, dynamic binding,
and inheritance. Some maintain that advanced object-oriented consists of generic
programming support and multiple inheritance. 
<p>C++ today is very different from what it was in 1983, when it was first named
«C++». Many features have been added to the language since then; older features
have been modified, and a few features have been deprecated or removed entirely
from the language. Some of the extensions have radically changed programming
styles and concepts. For example, downcasting a base to a derived object was
considered a bad and unsafe programming practice before the standardization of
Runtime Type Information. Today, downcasts are safe, and sometimes even
unavoidable. The list of extensions includes const member functions, exception
handling, templates, new cast operators, namespaces, the Standard Template Library,
bool type, and many more. These have made C++ the powerful and robust
multipurpose programming language that it is today. The evolution of C++ has been a
continuous and progressive process, rather than a series of brusque revolutions.
Programmers who learned C++ only three or five years ago and haven't caught up
with the extensions often discover that the language slips through their fingers:
Existing pieces of code do not compile any more, others compile with a plethora of
compiler warnings, and the source code listings in object-oriented magazines seem
substantially different from the way they looked not so long ago. «Namespaces?
Never heard of these before,» and «What was wrong with C-style cast? Why
shouldn't I use it anymore?» are some of the frequently asked questions in various
C++ forums and conferences. 
</div>
<div class="btns">
<div class="button_prev">
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
    <button class="blob-btn" onclick="document.location='text3.2.php'">
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