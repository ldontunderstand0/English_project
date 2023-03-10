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
<title>Text 6</title>
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

<h1 class="name">TOP 20 COMPUTER SYSTEMS</h1>

<div class="text">
<h3 class = "head"> MITS Altair 8800 </h3>
<p>There once was a time when you could buy a top-of-the-line computer for $395.
The only catch was that you had to build it yourself. Although the Altair 8800 wasn't
actually the first personal computer (Scelbi Computer Consulting 8008-based Scelbi8H kit probably took that honor in 1973), it grabbed attention. MITS sold 2000 of
them in 1975 – more than any single computer before it.
<p>Based on Inters 8-bit 8080 processor, the Altair 8800 kit inc luded 256 bytes of
memory (upgradable, of course) and a toggle-switch-and-LED front panel. For
amenities such as keyboard, video terminals, and storage devices, you had to go to
one of the companies that sprang up to support the Altair with expansion cards. In
1975, MITS offered 4- and 8-KB Altair versions of BASIC, the first product
developed by Bill Gates' and Paul Allen's new company, Microsoft.
<p>If the personal computer hobbyists movement was simmering, 1975 saw it come
to a boil with the introduction of the Altair 8800. 
<h3 class = "head"> Apple II </h3>
<p>Those of you who think of the IBM PC as the quintessential business computers
may be in for a surprise: The Apple II (together with VisiCalc) was what really made
people to look at personal computers as business tools, not just toys
<p>The Apple II debuted at the first West Coast Computer Fair in San Francisco in
1977. With built-in keyboard, graphics display, eight readily accessible expansion
slots, and BASIC built-into ROM, the Apple II was actually easy to use. Some of its
innovations, like built-in high-resolution color graphics and a high-level language
with graphics commands, are still extraordinary features in desk top machines. 
<h3 class = "head"> Commondore PET </h3>
<p>Also introduced at the first West Coast Computer Fair, Commondore's PET
(Personal Electronic Transactor) started a long line of expensive personal computers
that brought computers to the masses. (The VIC-20 that followed was the first
computer to sell 1 million units, and the Commondore 64 after that was the first to
offer a whopping 64 KB of memory.) The keyboard and small monochrome display
both fit in the same one-piece unit. Like the Apple II, the PET ran on MOS
Technology's 6502. Its $795 price, key to the Pet's popularity supplied only 4 KB of
RAM but included a built-in cassette tape drive for data storage and 8-KB version of
Microsoft BASIC in its 14-KB ROM.
<h3 class = "head"> Radio Shack TRS-80 </h3>
<p>Remember the Trash 80? Sold at local Radio Shack stores in your choice of
color (Mercedes Silver), the TRS-80 was the first ready-to-go computer to use Zilog's
Z80 processor. 
<p>The base unit was essentially a thick keyboard with 4 KB of RAM and 4 KB of
ROM (which included BASIC). An optional expansion box that connected by ribbon
cable allowed for memory expansion. A Pink Pearl eraser was standard equipment to
keep those ribbon cable connections clean
<p>Much of the first software for this system was distributed on audiocassettes
played in from Radio Shack cassette recorders. 
<h3 class = "head"> Osborne 1 Portable </h3>
<p>By the end of the 1970s, garage start-ups were pass. Fortunately there were
other entrepreneurial possibilities. Take Adam Osborne, for example. He sold
Osborne Books to McGraw-Hill and started Osborne Computer. Its first product, the
24-pound Osborne 1 Portable, boasted a low price of $1795. More important,
Osborne established the practice of bundling software. Business was looking good
until Osborne preannounced its next version while sitting on a warehouse full of
Osborne IS. Oops. Reorganization followed soon thereafter. 
<h3 class = "head"> Xerox Star </h3>
<p>This is the system that launched a thousand innovations in 1981. The work of
some of the best people at Xerox PARC (Palo Alto Research Center) went into it.
Several of these – the mouse and a desktop GUI with icons – showed up two years
later in Apple's Lisa and Macintosh computers. The Star wasn't what you would call a
commercial success, however. The main problem seemed to be how much it cost. It
would be nice to believe that someone shifted a decimal point somewhere: The
pricing started at $50,000
<h3 class = "head"> IBM PC </h3>
<p>Irony of ironies that someone at mainframe-centric IBM recognized the business
potential in personal computers. The result was in 1 981 landmark announcement of
the IBM PC. Thanks to an open architecture, IBM's clout, and Lotus 1-2-3
(announced one year later), the PC and its progeny made business micros legitimate
and transformed the personal computer world. The PC used Intel’s 16-bit 8088, and
for $3.000, it came with 64 KB of RAM and a floppy drive. The printer adapter and
monochrome monitor were extras, as was the color graphics adapter. 
<h3 class = "head"> Compaq Portable </h3>
<p>Compaq's Portable almost single-handedly created the PC clone market.
Although that was about all you could do with it single-handedly – it weighed a ton.
Columbia Data Products just preceded Compaq that year with the first true IBM PC
clone but didn't survive. It was Compaq's quickly gained reputation for engineering
and quality, and its essentially 100 percent IBM compatibility (reverse-engineering,
of course), that legitimized the clone market. But was it really designed on a napkin?
<h3 class = "head"> Radio Shack TRS-80 Model 100 </h3>
<p>Years before PC-compatible subnotebook computers, Radio Shack came out
with a book-size portable with a combination of features, battery life, weight, and
price that is still unbeatable. (Of course, the Z80-based Model 100 didn't have to run
Windows.) 
<p>The $800 Model 100 had only an 8-row by 40-column reflective LCD (large at
the time) but supplied ROM-based applications (including text editor,
communications program, and BASIC interpreter), a built-in modem, I/O ports,
nonvolatile RAM, and a great keyboard. Wieghing under 4 pounds, and with a
battery life measured in weeks (on four AA batteries), the Model 100 quickly became
the first popular laptop, especially among journalists. With its battery-backed RAM,
the Model 100 was always in standby mode, ready to take notes, write a report, or go
on-line. NEC’ s PC 8201 was essentially the same Kyocera-manufectured system. 
<h3 class = "head"> Apple Macintosh </h3>
<p>Apple’
s Macintosh and its GUI generated even more excitement than the IBM
PC. Apple's R&D people were inspired by critical ideas from Xerox PARK (and
practiced on Apple's Lisa) but added many of their own ideas to create a polished
product that changed the way people use computers. 
<p>The original Macintosh used Motorola's 16-bit 68000 microprocessor. At
$2,495, the system offered a built-in-high-resolution monochrome display, the Mac
OS, and a single-button mouse. With only 128 KB of RAM, the Mac was
underpowered at first. But Apple included some key applications that made the
Macintosh immediately useful. (It was MacPaint that finally showed people what a
mouse is good for.)
<h3 class = "head"> IBM AT </h3>
<p>George Orwell didn't foresee the AT in 1984. The IBM AT set new standards
for performance and storage capacity. Intel's blazingly fast 286 CPU running at 6
MHz and 16-bit bus structure gave the AT several times the performance of previous
IBM systems. Hard drive capacity doubled from 10 MB to 20 MB, and the cost per
megabyte dropped dramatically. New 16-bit expansion slots meant new (and faster)
expansion cards but maintained downward compatibility with old 8-bit cards. These
hardware changes and new high-density 1.2-MB floppy drives meant a new version
of PC-DOS (the dreaded 3.0). 
<p>The price for an AT with 512 KB of RAM, a serial/parallel adapter, a highdensity floppy drive, and a 20-MB hard drive was well over $5,000 – but much less
than what the pundits expected. 
<h3 class = "head"> Commondore Amiga 1000 </h3>
<p>The Amiga introduced the world to multimedia. Although it cost only $1,200,
the 68000-based Amiga 1 000 did graphics, sound, and video well enough that many
broadcast professionals adopted it for special effects. Its sophisticated multimedia
hardware design was complex for a personal computer, as was its multitasking,
windowing OS. 
<h3 class = "head"> Compaq Deskpro 386 </h3>
<p>While IBM was busy developing (would «wasting time on» be a better phrase?)
proprietary Micro Channel PS/2 system, clone vendors ALR and Compaq wrestled
away control of the x86 architecture and introduced the first 386-based systems, the
Access 386 and Deskpro 386. Both systems maintained backward compatibility with
the 286-based AT. 
<p>Compaq's Deskpro 386 had a further performance innovation in its Flex bus
architecture. Compaq split the x86 external bus into two separate buses: a high-speed
local bus to support memory chips fast enough for the 16-MHz 386, and a slower I/O
bus that supported existing expansion cards. 
<h3 class = "head"> Apple Macintosh II </h3>
<p>When you first looked at the Macintosh II, you may have said, «But it looks just
like a PC. You would have been right. Apple decided it was wiser to give users a case
they could open so they could upgrade it themselves. The monitor in its 68020-
powered machine was a separate unit that typically sat on top of the CPU case.
<h3 class = "head"> Next Nextstation </h3>
<p>UNIX had never been easy to use, and only now 10 years later we are getting
back to that level. Unfortunately, Steve Job never developed the software base it
needed for long-term survival. Nonetheless, it survived as an inspiration for future
workstations.
<p>Priced at less than $ 10,000., the elegant Nextstation came with a 25-Mhz 68030
CPU, 8 MB of RAM, and the first commercial magnetooptical drive (256-MB
capacity). It also had a built-in DSP (digital signal processor). The programming
language was object-oriented C, and the OS was a version of UNIX. 
<h3 class = "head"> NEC UltraLite </h3>
<p>Necks UltraLite is the portable that put subnotebook into the lexicon. Like Radio
Shack's TRS-80 Model 100, the UltraLite was a 4-pounder ahead of its time. Unlike
the Model 100, it was expensive (starting price, $2,999), but it could run MS-DOS.
(The burden of running Windows wasn't yet thrust upon its shoulders.) 
<p> Fans liked the 4.4-pound UltraLite for its trim size and portability, but it really
needed one of today's tiny hard drives. It used battery-backed DRAM (1 MB,
expandable to 2 MB) for storage, with ROM-based Traveling Software's LapLink to
move stored data to a desk top PC. Foreshadowing PCMCIA, the UltraLite had a
socket that accepted credit-card-size ROM cards holding popular applications like
WordPerfect or Lotus 1-2-3, or a battery-backed 256-KB RAM card. 
<h3 class = "head"> Sun SparcStation 1 </h3>
<p>It wasn't the first RISK workstation, nor even the first Sun system to use Sun's
new SPARC chip. But the SparcStation 1 set a new standard for price/performance, at
a starting price of only $8,995 – about what you might spend for a fully configured
Macintosh. Sun sold lots of systems and made the words SparcStation and
workstation synonymous in many peoples minds. 
<p> The SparcStation 1 also introduced S-Bus, Sun's proprietary 32-bit synchronous
bus, which ran at the same 20-MHz speed as the CPU.
<h3 class = "head"> IBM RS/6000 </h3>
<p>Sometimes, when IBM decides to do something, it does it right. The RS/6000
allowed IBM to enter the workstation market. The RS/6000’s RISK processor chip
set (RIOS) racked up speed records and introduced many to term suprscalar. But its
price was more than competitive. IBM pushed third-party software support, and as a
result, many desktop publishing, CAD, and scientific applications ported to the
RS/6000, running under AIX, IBM's UNIX. 
<p> A shrunken version of the multichip RS/6000 architecture serves as the basis for
the single-chip PowerPC, the non-x86-compatible processor with the best chance of
competing with Intel. 
<h3 class = "head"> Apple Power Macintosh </h3>
<p>Not many companies have made the transition from CISC to RISK this well.
The Power Macintosh represents Apple's well-planned and successful leap to bridge
two disparate hardware platforms. Older Macs run Motorola's 680x0 CISK line, the
Power Macs run existing 680x0-based applications yet provide Power PC
performance, a combination that sold over a million systems in a year. 
<h3 class = "head"> IBM ThinkPad 701С </h3>
<p>It is not often anymore that a new computer inspires gee-whiz sentiment, but
IBM's Butterfly subnotebook does, with its marvelous expanding keyboard. The
701C's two-part keyboard solves the last major piece in the puzzle of building of
usable subnotebook: how to provide comfortable touch-typing.(OK, so the floppy
drive is sill external.) With a full-size keyboard and a 10.4-inch screen, the 4.5-pound
701С compares favorably with full-size notebooks. Battery life is good, too.
</div>
<div class="btns">
<div class="button_prev">
    <button class="blob-btn" onclick="document.location='text1.5.php'">
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
    <button class="blob-btn" onclick="document.location='text1.7.php'">
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