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

<h1 class="name">WHAT IS NETWORKING?</h1>

<div class="text">
<p> In the simplest sense, networking means connecting computers so that they can
share files, printers, applications, and other computer-related resources. The
advantages of networking computers together are pretty obvious: 
<ul>
    <li>Users can save their important files and documents on a file server,
which is more secure than storing them on their workstations because a
file server can be backed up in a single operation.</li>
    <li>Users can share a network printer, which costs much less than having a
locally attached printer for each user's computer</li>
    <li>Users can share groupware applications running on application servers,
which enables users to share documents, send messages, and collaborate
directly</li>
    <li>The job of administering and securing a company's computer resources
is simplified since they are concentrated on a few centralized servers</li>
</ul>    
<p>This definition of networking focuses on the basic goals of networking
computers: increased manageability, security, efficiency, and cost-effectiveness over
non-networked systems. We could also focus on the different types of networks:
<ul>
    <li>Local area networks (LANs), which can range from a few desktop
workstations in a small office/home office (SOHO) to several thousand
workstations and dozens of servers deployed throughout dozens of
buildings on a university campus or in an industrial park. 
</li>
    <li>Wide area networks (WANs), which might be a company's head office
linked to a few branch offices or an enterprise spanning several
continents with hundreds of offices and subsidiaries. </li>
    <li>The Internet, the world's largest network and the «network of networks».
We could also focus on the networking architectures in which these types of
networks can be implemented: </li>
    <li> Peer-to-peer networking, which might be implemented in a workgroup
consisting of computers running Microsoft Windows 98 or Windows
2000 Professional. </li>
    <li>Server-based networking, which might be based on the domain model of
Microsoft Windows NT, the domain trees and forests of Active
Directory in Windows 2000, or another architecture such as Novell
Directory Services (NDS) for Novell NetWare. 
</li>
    <li>Terminal-based networking, which might be the traditional host-based
mainframe environment; the UNIX X Windows environment; the
terminal services of Windows NT 4, Server Enterprise Edition;
Windows 2000 Advanced Server; or Citrix MetaFrame. </li>
<p>Or we could look at the networking technologies used to implement each
    <li>LAN technologies such as Ethernet, ARCNET, Token Ring, Banyan
Vines, Fast Ethernet, Gigabit Ethernet, and Fiber Distributed Data
Interface (FDDI). </li>
<li>WAN technologies such as Integrated Services Digital Network (ISDN),
Tl leased lines, X.25, frame relay, Synchronous Optical Network
(SONET), Digital Subscriber Line (DSL), and Asynchronous Transfer
Mode (ATM). 
</li>
<li>Wireless communication technologies, including cellular systems such
as Global System for Mobile Communications (GSM), Code Division
Multiple Access (CDMA), Personal Communications Services (PCS),
and infrared systems based on the standards developed by the Infrared
Data Association (IrDA). </li>
<p>We could also consider the hardware devices that are used to implement these
technologies:
<li>LAN devices such as repeaters, concentrators, bridges, hubs, switches,
routers, and Multistation Access Units (MAUs).</li>
<li>WAN devices such as modems, ISDN terminal adapters, Channel
Service Units (CSUs), Data Service Units (DSUs), packet
assembler/disassemblers (PADs), frame relay access devices (FRADs),
multiplexers (MUXes), and inverse multiplexers (IMUXes). </li>
<li>Equipment for organizing, protecting, and troubleshooting LAN and
WAN hardware, such as racks, cabinets, surge protectors, line
conditioners, uninterruptible power supplies (UPS's), KVM switches,
and cable testers </li>
<li> Cabling technologies such as coaxial cabling, twinax cabling, twistedpair cabling, fiber-optic cabling, and associated equipment such as
connectors, patch panels, wall plates, and splitters. 
</li>
<li>Unguided media technologies such as infrared communication, wireless
cellular networking, and satellite networking, and their associated
hardware. 
</li>
<li>Data storage technologies such as RAID, network-attached storage
(NAS), and storage area networks (SANs), and the technologies used to
connect them, such as Small Computer System Interface (SCSI) and
Fibre Channel.</li>
<li>Technologies for securely interfacing private corporate networks with
unsecured public ones, such as firewalls, proxy servers, and packetfiltering routers. </li>
<li>Technologies for increasing availability and reliability of access to
network resources, such as clustering, caching, load balancing, and faulttolerant technologies. </li>
<li>Network management technologies such as the Simple Network
Management Protocol (SNMP) and Remote Network Monitoring
(RMON)</li>
</ul>
</div>
<div class="btns">
<div class="button_prev">
    <button class="blob-btn" onclick="document.location='text2.5.php'">
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
    <button class="blob-btn" onclick="document.location='text2.7.php'">
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