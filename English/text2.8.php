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
<title>Text 8</title>
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

<h1 class="name">SEARCH ENGINE AND ITS IMPROVMENT</h1>

<div class="text">
<p>Google is designed to be a scalable search engine. The primary goal is to
provide high quality search results over a rapidly growing World Wide WebGoogle
employs a number of techniques to improve search quality including page rank,
anchor text, and proximity information. Furthermore Google is a complete
architecture for gathering web pages, indexing them, and performing search queries
over them. A large-scale web search engine is a complex system and much remains to
be done. Our immediate goals are to improve search efficiency and to scale to
approximately 100 million web pages. Some simple improvements to efficiency
include query caching, smart disk allocation and subindices. Another area which
requires much research is updates. We must have smart algorithms to decide what old
web pages should be recrawled and what new ones should be crawled. Work toward
this goal has been done in. One promising area of research is using proxy caches to
build search databases, since they are demand driven. We are planning to add simple
features supported by commercial search engines like boolean operators, negation,
and stemming. However, other features are just starting to be explored such as
relevance feedback and clustering (Google currently supports a simple hostname
based clustering). We also plan to support user context (like the user s location), and
result summarization. We are also working to extend the use of link structure and link
text. Simple experiments indicate PageRank can be personalized by increasing the
weight of a user's home page or bookmarks. As for link text, we are experimenting
with using text surrounding links in addition to the link text itself. A Web search
engine is a very rich environment for research ideas. We have far too many to list
here so we do not expect this Future Work section to become much shorter in the
near future. The biggest problem facing users of web search engines today is the
quality of the results they get back. While the results are often amusing and expand
users horizons, they are often frustrating and consume precious time. For example,
the top result for a search for Bill Clinton on one of the most popular commercial
search engines was the Bill Clinton Joke of the Day April 14, 1997. Google is
designed to provide higher quality search so as the Web continues to grow rapidly,
information can be found easily. In order to accomplish this Google makes heavy use
of hypertextual information consisting of link structure and link (anchor) text. Google
also uses proximity and font information. While evaluation of a search engine is
difficult, we have subjectively found that Google returns higher quality search results
than current commercial search engines. The analysis of link structure via PageRank
allows Google to evaluate the quality of web pages. The use of link text as a
description of what the link points to helps the search engine return relevant (and to
some degree high quality) results. Finally, the use of proximity information helps
increase relevance a great deal for many queries. Aside from the quality of search,
Google is designed to scale. It must be efficient in both space and time, and constant
factors are very important when dealing with the entire Web. In implementing
Google, we have seen bottlenecks in CPU, memory access, memory capacity, disk
seeks, disk throughput, disk capacity, and network IO. Google has evolved to
overcome a number of these bottlenecks during various operations. Google's major
data structures make efficient use of available storage space. Furthermore, the
crawling, indexing, and sorting operations are efficient enough to be able to build an
index of a substantial portion of the web – 24 million pages, in less than one week.
We expect to be able to build an index of 100 million pages in less than a month. In
addition to being a high quality search engine, Google is a research tool. The data
Google has collected has already resulted in many other papers submitted to
conferences and many more on the way. Recent research has shown a number of
limitations to queries about the Web that may be answered without having the Web
available locally. This means that Google (or a similar system) is not only a valuable
research tool but a necessary one for a wide range of applications. We hope Google
will be a resource for searchers and researchers all around the world and will spark
the next generation of search engine technology.  and his XeroxPARC colleagues in the 1970s: to make information more accessible to ordinary people. But a look into today's research labs reveals very little that resembles what we think of now as a PC. For one thing, researchers seem eager to abandon the keyboard and monitor that are the PC's trademarks. Instead they are trying to devise PCs with interpretive powers that are more humanlike – PCs that can hear you and see you, can tell when you're in a bad mood and can ask questions when they don't understand something. It is impossible to predict the invention that, like the Altair, crystallize new approaches in a way that captures people's imagination.

</div>
<div class="btns">
<div class="button_prev">
    <button class="blob-btn" onclick="document.location='text2.7.php'">
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
    <button class="blob-btn" onclick="document.location='text2.9.php'">
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