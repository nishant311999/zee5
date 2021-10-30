<?php

$url = $_GET["c"];
if($url !=""){

$data = file_get_contents("https://catalogapi.zee5.com/v1/channel/${url}");
$z5 =json_decode($data, true);
$stream = $z5['stream_url_hls'];
$title = $z5['title'];

$tdata = file_get_contents("https://useraction.zee5.com/token/live.php");
$tok =json_decode($tdata, true);
$vid_token = $tok['video_token'];
$playit = $stream.$vid_token;

//echo $playit;
header("Location: $playit"); //--> For Direct Play

}
else{
  $ex= array("error" => "Something went wrong, Check URL", "created_by" => "YouzonTv" );
  $error =json_encode($ex);

  echo $error;
}

?>
<!DOCTYPE html>

<html lang="en">
<head>
    
  <meta name="theme-color" content="black">
  <title></title>
  <style>*{margin:0;padding:0;outline:none;}*:focus{outline:none;}#jwplayer{position: absolute;width:100% !important;height:100% !important;}</style>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/gh/jwplayer/web-player-demos/demos/custom-css-demo/assets/alaska.css'>
</head>

<style>


.scroll-left {

 height: 50px;	

 overflow: hidden;

 position: relative;

 background: purple;

 color: orange;

 border: 1px solid orange;

}

.scroll-left p {

 position: absolute;

 width: 100%;

 height: 100%;

 margin: 0;

 line-height: 50px;

 text-align: center;

 /* Starting position */

 -moz-transform:translateX(100%);

 -webkit-transform:translateX(100%);	

 transform:translateX(100%);

 /* Apply animation to this element */	

 -moz-animation: scroll-left 15s linear infinite;

 -webkit-animation: scroll-left 15s linear infinite;

 animation: scroll-left 15s linear infinite;

}

/* Move it (define the animation) */

@-moz-keyframes scroll-left {

 0%   { -moz-transform: translateX(100%); }

 100% { -moz-transform: translateX(-100%); }

}

@-webkit-keyframes scroll-left {

 0%   { -webkit-transform: translateX(100%); }

 100% { -webkit-transform: translateX(-100%); }

}

@keyframes scroll-left {

 0%   { 

 -moz-transform: translateX(100%); /* Browser bug fix */

 -webkit-transform: translateX(100%); /* Browser bug fix */

 transform: translateX(100%); 		

 }

 100% { 

 -moz-transform: translateX(-100%); /* Browser bug fix */

 -webkit-transform: translateX(-100%); /* Browser bug fix */

 transform: translateX(-100%); 

 }

}

</style>



<div class="scroll-left"><h1>

<pre>Join Telegram @Jivani_Priyank   Join Telegram @Jivani_Priyank</pre></h1>

</div>
<body>
  <script src="https://content.jwplatform.com/libraries/KB5zFt7A.js"></script>
  <script type="text/javascript">       
    window.onload=function(){
      const playerInstance = jwplayer("jwplayer").setup({
        image: "",
        title: "Jivani_Priyank",
        description: "Powered by Jivani_Priyank",
        skin: {name: "alaska"},
        fullscreen: "true",
        autostart: false,
        controls: true,
        preload: "auto",
        playbackRateControls: [0.25, 0.5, 0.75, 1, 1.25, 1.5, 2],
        abouttext: "About Developer",
        aboutlink: "https://t.me/Jivani_Priyank",
        "file":"https://z5ams.akamaized.net/out/v1/ea6fe7c79c6f494792e1ee846b4a5259/index.m3u8?hdnts=st=1635177674~exp=1635180674~acl=/*~hmac=ea2bef6ad8c6a859f38a08db527dbcc26755bcd3defdbff883464ca6155ce06c",
        tracks: [{ 
          "file": "", 
          "label": "English",
          "kind": "captions"
        }],
              });
      playerInstance.on('ready', function() {
        const playerContainer = playerInstance.getContainer();
        const buttonContainer = playerContainer.querySelector('.jw-button-container');
        const spacer = buttonContainer.querySelector('.jw-spacer');
        const timeSlider = playerContainer.querySelector('.jw-slider-time');
        buttonContainer.replaceChild(timeSlider, spacer);
      });
    }
  </script>       
  <div id="jwplayer"></div>
</body>
</html>
