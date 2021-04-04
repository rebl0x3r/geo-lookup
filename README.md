<p align="center">
  🌍 GEO LOCATON LOOKUP 🌍<br><br>
  <img alt="GitHub repo size" src="https://img.shields.io/github/repo-size/rebl0x3r/geo-lookup">
  <img alt="Tool version" src="https://img.shields.io/badge/version-0.1-brightgreen">
  <img alt="Errors" src="https://img.shields.io/badge/errors fixed-0-red">
  <img alt="GitHub issues" src="https://img.shields.io/github/issues/rebl0x3r/domain2ip">
  <img alt="Open Source" src="https://badges.frapsoft.com/os/v1/open-source.png?v=103">
  <a href="https://t.me/mrblackx"><img alt="Ask Me" src="https://img.shields.io/badge/Ask%20me-anything-1abc9c.svg"></a>
  <a href="https://t.me/viperzcrewchat/"><img src="https://raw.githubusercontent.com/Patrolavia/telegram-badge/master/chat.svg" alt="Support chat"></a>
</p>

<h1 align="center">PHP GEO LOOKUP</h1>

<hr>

<h2 align="center">Table Of Contents</h2>

* [General Information](#general-info)
* [Installation](#installation)
* [Disclaimer](#disclaimer)
* [Credits](#credits)
* [Social Media](#social-media)
* [Bug Report](#bug-report)

<hr>

<h2 align="center">General Information</h2>
  
  This tool does a geo location lookup from client's request.
  You can embed this script into your website to get more information about a client's geolocation
  
  
<hr>

<h2 align="center">Installation</h2>

  HackTheBox requires <a href="https://www.python.org/">Python </a> v3 to run.
  
  <h3>Linux</h3>
  
  ```
  $ wget https://raw.githubusercontent.com/rebl0x3r/geo-lookup/main/geo.php
  
  ```
    
  You can use ```include``` to include this script, example:
  
  ```
  <?php
  $data = include('geo.php');
  print($data."\n");
  print($data['country']."\n");
  ?>
  ```
  You can replace ```country``` with other names to get the information.
  Following are available:
  
  * country (Ex: ```DE```)
  * state (Ex: ```BY```)
  * stateName (Ex: ```Bavaria```)
  * zipcode (Ex: ```43893```)
  * timezone (Ex: ```Europe/Berlin```)
  * latitude (Ex: ```32.23895```)
  * longitude (Ex: ```21.29832```)
  * city (Ex: ```Munich```)
  * continent (Ex: ```EU```)
  
  To get all of these you can either use an ```foreach```-loop:
  ```
  <?php
  $data = include('geo.php');
  foreach($data as $value){print($value."\n");}
  # Code Here
  ?>
  ```
  
  Or manually :
  ```
  <?php
  $data = include('geo.php');
  print($data['continent']."\n");
  print($data['timezone']."\n");
  ?>
  ```
  
<h2 align="center">Disclaimer</h2>

  Use this tool for educational purposes only .🕵️‍♂️
  If you do any illegal attacks, i am not responsible for your tasks.
  Use this tool correctly, and do not re-upload it on your github repository without permissions.
  
<hr>
  
<h2 align="center">Credits</h2>
  
  Channels On Telegram With Nice Stuff
  
  | Channel | Link |
  | ------ | ------ |
  | LeakerHounds | [https://t.me/LeakerHounds](https://t.me/LeakerHounds) | 
  | ViperZCrew | [https://t.me/ViperZCrew](https://t.me/ViperZCrew) |
  | DeepWaterLeaks | [https://t.me/deepwaterleaks2](https://t.me/deepwaterleaks2) |
   
  

<hr>
            
<h2 align="center">Social Media</h2>
 <img align="left" alt="telegram.org" width="22px" src="https://images.vexels.com/media/users/3/137414/isolated/preview/3f7486417ddd88060a1818d44b6f3728-telegram-icon-logo-by-vexels.png" /> Telegram:<br />
 
* [@mrblackx](https://t.me/mrblackx)
* [@On1c0n3](https://t.me/On1c0n3)


<img align="left" alt="github.com" width="22px" src="https://image.flaticon.com/icons/svg/25/25231.svg" /> Github:<br />
 
* Rebl0x3r - [https://github.com/rebl0x3r](https://github.com/rebl0x3r)
* 0n1cOn3 - [https://github.com/0n1cOn3](https://github.com/0n1cOn3)

<hr>

<h2 align="center">Bug Report</h2>

  If you found any bug or issue, please go [here](https://github.com/rebl0x3r/geo-lookup/issues)
  
  You can also request an update.
  
<hr>



[Site Up](#general-info)
