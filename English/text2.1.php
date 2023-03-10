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
<title>Text 1</title>
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

<h1 class="name">WHAT IS THE INTERNET</h1>

<div class="text">
<p>USING the Internet, David, a teacher in the United States, acquired course
materials. A Canadian father accessed it to stay in contact with his daughter in
France. Loma, a housewife, used it to examine scientific research on the early
beginnings of the universe. A farmer turned to it to find information about new
planting methods that make use of satellites. Corporations are drawn to it because of
its power to advertise their products and services to millions of potential customers.
People around the globe read the latest national and international news by means of
its vast reporting and information services.  

<p>What is this computer phenomenon called the Internet, or the Net? Do you
personally have need of it? Before you decide to get «on» the Internet, you may want
to know something about it In spite of all the hype, there are reasons to exercise
caution, especially if there are children in the home. 
<h3 class = "head"> What Is It? </h3>

<p>Imagine a room filled with many spiders, each spinning its own web. The webs
are so interconnected that the spiders can travel freely within this maze. You now
have a simplified view of the Internet–a global collection of many different types of
computers and computer networks that are linked together. Just as a telephone
enables you to talk to someone on the other side of the earth who also has a phone,
the Internet enables a person to sit at his computer and exchange information with
other computers and computer users anyplace in the world.  
<p>Some refer to the Internet as the information superhighway. Just as a road allows
travel through different areas of a country, so the Internet allows information to flow
through many different interconnected computer networks. As messages travel, each
network that is reached contains information that assists in connecting to the adjacent
network. The final destination may be in a different city or country. 
<p>Each network can «speak» with its neighbor network by means of a common set
of rules created by the Internet designers Worldwide, how many networks are
connected? Some estimates say over 30,000 According to recent surveys, these
networks connect over 10,000,000 computers and some 30,000,000 users throughout
the world. It is estimated that the number of connected computers is doubling each
year
<p>What can people locate on the Internet? It offers a rapidly growing collection of
information, with topics ranging from medicine to science and technology. It features
exhaustive material on the arts as well as research material for students and coverage
of recreation, entertainment, sports, shopping, and employment opportunities. The
Internet provides access to almanacs, dictionaries, encyclopedias, and maps
<p>There are, however, some disturbing aspects to consider. Can everything on the
Internet be regarded as wholesome? What services and resources does the Internet
offer? What precautions are in order? The following articles will discuss these
questions.
<h3 class = "head"> Services and Resources of the Internet </h3> 
<p>A COMMON resource provided by the Internet is a worldwide system for
sending and receiving electronic mail, known as E-mail. In fact, E-mail represents a
large portion of all Internet traffic and is for many the only Internet resource they use.
How does it work? To answer that question, let's review the ordinary mail system
first. 
<p>Imagine that you live in Canada and wish to send a letter to your daughter living
in Paris. After properly addressing the envelope, you mail it, starting the letter's
journey. At a postal facility, the letter is routed to the next location, perhaps a
regional or national distribution center, and then to a local post office near your
daughter. 
<p>A similar process occurs with E-mail. After your letter is composed on your
computer, you must specify an E-mail address that identifies your daughter. Once
you send this electronic letter, it travels from your computer, often through a device
called a modem, which connects your computer to the Internet via the telephone
network. Off it goes, bound for various computers that act like local and national
postal routing facilities. They have enough information to get the letter to a
destination computer, where your daughter can retrieve it. 
<p>Unlike the regular mail, E-mail often reaches its destination, even on other
continents, in minutes or less unless some part of the network is heavily congested or
temporarily out of order. When your daughter inspects her electronic mailbox, she
will discover your E-mail. The speed of E-mail and the ease with which it can be sent
even to multiple recipients all over the world make it a popular form of
communication. 
<h3 class = "head"> Newsgroups </h3> 
<p>Another popular service is called Usenet. Usenet offers access to newsgroups for
group discussions on specific topics. Some newsgroups focus on buying or selling
various consumer items. There are thousands of newsgroups, and once a user has
gained access to Usenet, there is no cost to subscribe to them. 
<p>Let’s imagine that someone has joined a newsgroup involved in stamp
collecting. As new messages about this hobby are sent by others subscribing to this
group, the messages become available to this newcomer. This person reviews not
only what someone has sent to the newsgroup but also what others have written in
response. If, for example, someone requests information about a particular stamp
series, shortly afterward there may be many responses from around the world,
offering information that would be immediately available to all who subscribe to this
newsgroup. 
<p>A variation of this idea is the Bulletin Board System (BBS). BBSs are similar to
Usenet, except that all files are located on a single computer, usually maintained by
one person or group. The content of news-groups reflects the varied interests,
viewpoints, and moral values of those who use them, so discretion is needed
<h3 class = "head"> File Sharing and Topic Searching </h3> 
<p>One of the original Internet goals was global information sharing. The teacher
mentioned in the previous article located another educator on the Internet who was
willing to share already developed course materials. Within minutes the files were
transferred, despite a 2,000-mile distance. 
<p>What help is available when one does not know where a subject may be located
within the Internet? Just as we locate a phone number by using a telephone directory,
a user may find locations of interest on the Internet by first gaining access to what are
known as search sites. The user supplies a word or a phrase, the site then replies with
a list of Internet locations where information can be found. Generally, the search is
free and takes only a few seconds. 
<p>The farmer mentioned earlier had heard of a new technique called precision
farming, which uses computers and satellite maps. By entering that phrase at a search
site, he found the names of farmers who were using it as well as detailed information
about the method. 
<h3 class = "head"> The World Wide Web </h3> 
<p>The part of the Internet called World Wide Web (or Web) allows authors to use
an old-fashioned idea that of footnotes in a new way. When an author of a magazine
article or a book inserts a footnote symbol, we scan the bottom of the page and are
possibly directed to another page or book. Authors of Internet computer documents
can do essentially the same thing using a technique that will underline or highlight a
word, a phrase, or an image in their document. 
<p>The highlighted word or image is a clue to the reader that an associated Internet
resource, often another document, exists. This Internet document can be fetched and
displayed immediately for the reader. The document may even be on a different
computer and located in another country. David Peal, author of Access the Internet,
notes that this technique «links you to actual documents, not just references to them»
<p>The Web also supports the storage and retrieval, or playing, of photographs,
graphics, animations, videos, and sounds. Loma, the housewife mentioned at the
outset of the previous artic le, obtained and played a short color movie of the current
theories regarding the universe. She heard the narration through her computer's audio
system. 
<h3 class = "head"> Surfing the Net </h3> 
<p>By using a Web browser, a person can easily and quickly view information and
colorful graphics that may be stored on computers in many different countries. Using
a Web browser can be similar in some ways to actual travel, only easier. One can
visit the Web exhibits of the Dead Sea Scrolls or the Holocaust Memorial Museum.
This ability to move nimbly back and forth from one Internet Web site to another is
commonly called surfing the Net.
<p>Businesses and other organizations have become interested in the Web as a
means to advertise their products or services as well as to offer other kinds of
information. They create a Web page, a sort of electronic storefront window. Once an
organization's Web page address is known, potential customers can use a browser to
go «shopping», or information browsing. As in any marketplace, however, not all
products, services, or information provided on the Internet are wholesome. 
<p>Researchers are trying to make the Internet secure enough for confidential and
safeguarded transactions. Another worldwide Internet-dubbed by some Internet II – is
being developed because of the increased traffic that this commercial activity has
generated. 
<h3 class = "head"> What Is «Chat»? </h3> 
<p>Another common service of the Internet is the Internet Relay Chat, or Chat. Chat
allows a group of people, using aliases, to send messages to one another immediately.
While used by a variety of age groups, it is especially popular among young people.
Once connected, the user is brought into contact with a large number of other users
from all around the world. 
<p>So-called chat rooms, or chat channels, are created that feature a particular
theme, such as science fiction, movies, sports, or romance. All the messages typed
within a chat room appear almost simultaneously on the computer screens of all
participants for that chat room. 
<p>A chat room is much like a party of people mingling and talking at the same
general time, except that all are typing short messages instead. Chat rooms are
usually active 24 hours a day. Of course, Christians realize that the Bible principles
about association, such as the one found at 1 Corinthians 15:33, apply to participation
in chat groups just as they apply to all aspects of life. 

<h3 class = "head"> Who Pays for the Internet? </h3> 
<p>You may be wondering “Who pays the charges for the large distances one can
travel on the Internet?” The expense is shared by all users, corporate and individual.
However, the end user is not necessarily presented with a long-distance telephone
bill, even if he has visited many international sites. Most users have an account with a
local commercial Internet service provider, who in many cases bills the user a fixed
monthly fee. Providers generally supply a local number to avoid extra phone costs. A
typical monthly access fee is approximately $20 (US).
<p>As you can see, the potential of the Internet is enormous. But should you get on
this information superhighway? 

<h3 class = "head"> Do you Really Need the Internet? </h3> 
<p>SHOULD you use the Internet? Of course, this is a personal matter, one that you
should weigh carefully. What factors might influence your decision? 

<h3 class = "head"> Need–Have You Calculated the Expense?</h3> 
<p>Much of the recent growth of the Internet is due to strong marketing efforts of
the business world. Clearly, their motive is to create a sense of need. Once this
perceived need is cultivated, some organizations then require a membership or annual
subscription fee for the information or service that you initially accessed without cost.
This fee is in addition to your monthly Internet access costs. Some on-line
newspapers are a common example of this practice. 
<p>Have you calculated the expense of equipment and software versus your actual
need? Are there public libraries or schools with access to the Internet? Using these
resources at first may help you to assess your need without making a large initial
investment in a personal computer and related equipment. It may be that appropriate
public. Internet resources can be used, аs needed, until it is clear how often such
resources are actually required. Remember, the Internet existed for more than two
decades before the general public even became aware of it, let alone felt a need for it!


</div>
<div class="btns">
<div class="button_prev">
    <button class="blob-btn" onclick="document.location='unit2.php'">
    to unit 2
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
    <button class="blob-btn" onclick="document.location='text2.2.php'">
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