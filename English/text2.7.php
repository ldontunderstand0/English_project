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
<title>Text 7</title>
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

<h1 class="name">NEW CHALLENGES FOR INFORMATION RETRIEVAL</h1>

<div class="text">
<p>The web creates new challenges for information retrieval. The amount of
information on the web is growing rapidly, as well as the number of new users
inexperienced in the art of web research. People are likely to surf the web using its
link graph, often starting with high quality human maintained indices such as Yahoo!
or with search engines. Human maintained lists cover popular topics effectively but
are subjective, expensive to build and maintain, slow to improve, and cannot cover all
esoteric topics. Automated search engines that rely on keyword matching usually
return too many low quality matches. To make matters worse, some advertisers
attempt to gain people's attention by taking measures meant to mislead automated
search engines. We have built a large-scale search engine which addresses many of
the problems of existing systems. It makes especially heavy use of the additional
structure present in hypertext to provide much higher quality search results. We chose
our system name Google, because it is a common spelling of googol, or 10100
 and fits
well with our goal of building very large-scale search engines

<p>Search engine technology has had to scale dramatically to keep up with the
growth of the web. In 1994, one of the first web search engines, the World Wide Web
Worm (WWWW) had an index of 110,000 web pages and web accessible documents.
As of November, 1997, the top search engines claim to index from 2 million to 100
million web documents. At the same time, the number of queries search engines
handle has grown incredibly too. In March and April 1994, the World Wide Web
Worm received an average of about 1,500 queries per day. In November 1997
Altavista claimed it handled roughly 20 million queries per day. The goal of our
system is to address many of the problems, both in quality and scalability, introduced
by scaling search engine technology to such extraordinary numbers. 

<p>Creating a search engine which scales even to today's web presents many
challenges. Fast crawling technology is needed to gather the web documents and keep
them up to date. Storage space must be used efficiently to store indices and,
optionally, the documents themselves. The indexing system must process hundreds of
gigabytes of data effic iently. Queries must be handled quickly, at a rate of hundreds
to thousands per second. 
<p>These tasks are becoming increasingly difficult as the Web grows. However,
hardware performance and cost have improved dramatically to partially offset the
difficulty. There are, however, several notable exceptions to this progress such as
disk seek time and operating system robustness. In designing Google, we have
considered both the rate of growth of the Web and technological changes. Google is
designed to scale well to extremely large data sets. It makes efficient use of storage
space to store the index. Its data structures are optimized for fast and efficient access .
Further, we expect that the cost to index and store text or HTML , will eventually
decline relative to the amount that will be available. This will result in favorable
scaling properties for centralized systems like Google. 
</div>
<div class="btns">
<div class="button_prev">
    <button class="blob-btn" onclick="document.location='text2.6.php'">
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
    <button class="blob-btn" onclick="document.location='text2.8.php'">
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