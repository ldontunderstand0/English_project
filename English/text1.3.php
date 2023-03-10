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
<title>Text 3</title>
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

<h1 class="name">FROM UNIVAC TO PC</h1>

<div class="text">
<p>It is hard to believe now that people used to refer to a computer as a «Umvac,» but this is the name by which it probably first came to public attention. UNIVAC was the name that Presper Eckert and John Mauchly gave to their Universal Automatic Computer, on which they began work in 1946, fresh from their work on ENIAC. In 1949, Remington Rand acquired the company, and the first UNIVAC became operational at the Census Bureau in 1951.

<p>However, it was in the next year, a presidential election year, that the public really came to know the term UNIVAC. During vote counting the night of the 1952 election, UNIVAC surprised CBS network executives by predicting–after analyzing only 5% of the vote counted–that Eisenhower would defeat Stevenson for President . Of course, since then, computers have been used extensively by television networks to predict election outcomes.

<p>UNIVAC was also the first computer used for data processing and record keeping by a business organization–it was installed by General Electric in Louisville, Kentucky, in 1954. Also in that year, IBM's 650 mainframe computer was first installed, an upgrade of the company's punched-card machines. Because businesspeople were already used to punched-card data processing, the IBM 650 was readily accepted by the business community, thus giving IBM a substantial foot in the door to the computer market, an advantage it still enjoys today.

<p>We have described the movement of computers from vacuum tubes (1951) to transistors (1959) to integrated circuits (1965). By 1960, a number of companies had entered the computer market, among them Control Data Corporation (CDC), National Cash Register (NCR), and General Electric.

<p>In 1964, after reportedly spending a spectacular $5 billion, IBM announced an entire new line of computers called the System/360, so-called because they covered «360 degrees» of a circle. That is, the System/360 came in several models and sizes, with about 40 different kinds of input and output and secondary storage devices, all compatible so that customers could put together systems tailor-made to their needs and budgets. Despite the tremendous disruption for users, the System/360 was a resounding success and repaid IBM's investment many times over.

<p>But in the 1960s and 1970s, competitors to IBM saw holes they could fill. Large mainframe computers began to be supplemented by minicomputers, such as those made by Digital Equipment Corporation (DEC), Data General Corporation, and Hewlett-Packard. Cray, formed by Seymour Cray, began developing the supercomputer. A former IBM employee named Gene Amdahl marketed his Amdahl 470V/6, which was one and one-half times faster than a comparable IBM computer,

yet cost less and occupied only a third the space.

<p>Besides General Electric, RCA also tried to penetrate the mainframe computer market, but later withdrew. Of the original mainframe makers, the survivors today are IBM, NCR, UniSys (Sperry-Univac and Burroughs reconstituted), and Honeywell– and IBM has the majority of the mainframe market.

<p>In the 1970s, the volatile computer industry was thrown into an uproar when the microprocessor was invented, pointing the way to the relatively inexpensive microcomputer. Led by the famous Apple II, invented by Steve Jobs and Steve Wozniak at Apple Computer, then by other products from Tandy-Radio Shack, Commodore, Atari, and Texas Instruments, the microcomputer market has been the

battleground of over 150 different computer manufacturers–among them those two industrial giants, IBM and AT&T.

<p>IBM introduced its IBM PC (for Personal Computer) in the summer of 1981, and immediately zoomed to the top in microcomputer sales–not surprising, considering IBM's long-term presence in the computer industry and its strength as a marketing-oriented organization. The IBM PC led to several enormous industries, among them IBM-compatible hardware and «clones», popular software such as that produced by Lotus and Software Publishing, and telecommunications entities such as local area networks and on-line-retrieval bulletin boards.

<p>American Telephone & Telegraph, on the other hand, which used to be thought of as «Ma Bell» or «the Phone Company,» was forced by the U.S. government to divest itself of 22 local Bell operating companies (regrouped into seven regional holding companies) and to allow competition from other long-distance telephone services, such as MCI and GTE's Sprint, and Allnet Communications. In return, the government permitted AT&T to enter the computer market. The question in many observers' minds, however, was whether AT&T could relinquish the habits of a monopoly and become an aggressive marketing force in a highly competitive business. The announcement of AT&T's personal computer, the PC6300 (produced by the Italian office equipment maker Olivetti) in June 1984 was the company's opening gun. The strategy has been to approach office automation from the company's historic base in communications, so that AT&T products can be linked together for both computing and communicating.

<p>In 1987, in an attempt to cut into sales of «IBM-compatible» microcomputers– computers made by companies other than IBM (such as Compaq) that nevertheless run IBM-type software and equipment–International Business Machines announced its line of Personal System/2 computers, most of which significantly improved on speed and memory capacity.

<p>According to Business Week (April 17, 1987), the top 15 office equipment and computer manufacturers, ranked in terms of their market value for the year 1986, were the following: IBM, Digital Equipment, Hewlett-Packard, Xerox, NCR, UniSys, Tandy, Apple Computer, Cray Research, Automatic Data Processing, Pitney-Bowes, Tandem Computers, Honeywell, Wang Laboratories, and Amdahl.</p>
</div>
<div class="btns">
<div class="button_prev">
    <button class="blob-btn" onclick="document.location='text1.2.php'">
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
    <button class="blob-btn" onclick="document.location='text1.4.php'">
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