<?php 
if(isset($_POST['submit'])){
    $to = "somecookie.com@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    // $first_name = $_POST['first_name'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    // $subject2 = "Copy of your form submission";
    $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];
    // $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    // $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    // mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "<script>alert('메일이 발송되었습니다." . $name . ", 빠른 시일내에 확인하여 연락드리겠습니다. 감사합니다.');window.location.replace('./index.php');</script>";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>


<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
<title>CURAPROX</title>
<link rel="stylesheet" href="assets/jquery.fullpage.min.css" />
<link rel="stylesheet" type="text/css" href="./css/mystyle.css" />
<script src="assets/jquery.min.js"></script>
<script src="assets/jquery.fullpage.min.js"></script>
<script src="http://beneposto.pl/jqueryrotate/js/jQueryRotateCompressed.js"></script>
<script src="./js/myscript.js"></script>
<style>
    @import url('https://fonts.googleapis.com/css?family=Dosis');
</style>
</head>
<body>

<div class="modal"></div>
<div id="wrap">
	<div class="header">
		<div class="gnb">
			<h1 class="logo"><a href="./index.php"><img src="./img/logo.png" alt="로고"></a></h1>
		</div>
	</div>
	<div id="full">
		<div class="section section1">
            <section id="Visual" class="ready" > 
                <video data-autoplay data-keepplaying loop muted id="js_cover" src="src/source.mp4"></video>
                <div class="inner">
                    <div class="box">
                        <div class="frm">
                            <p>Better health for you</p>
                            <h2>CURAPROX</h2>
                            <a href="#"><span>Click Here</span></a>
                        </div>
                    </div>
                </div>
            </section>
            <img src="./img/scroll.png" alt="scroll" class="mouse">
        </div>
		<div class="section section2"><div class="sec2_bg"><img src="./img/BIW_GB.png" class="biw" alt="biw"></div>
            <div class="more_box">
                <div class="box">
                    <a href="#" class="frm">
                        <span>MORE</span>
                    </a>
                </div>
            </div>
		</div>
		<div class="section section3">
            <img src="./img/rotate.png" alt="rotate" id="rotate"><!--<div class="title"><a href="#"><b>CURAPROX&nbsp;BABY</b></a></div>-->
<!--
		    <div class="more_box">
                <div class="box">
                    <a href="#" class="frm">
                        <span>MORE</span>
                    </a>
                </div>
            </div> 
-->
		</div>
<!--
		<div class="section section4"><a href="#" class="title"><b>INTERDENTAL&nbsp;BRUSHES</b></a>
		    <div class="more_box">
                <div class="box">
                    <a href="#" class="frm">
                        <span>MORE</span>
                    </a>
                </div>
            </div>  
		</div>
-->
		<div class="section section5"><a href="#" class="title"><b>TOOTHPASTE</b></a>
		    <div class="more_box">
                <div class="box">
                    <a href="#" class="frm">
                        <span>MORE</span>
                    </a>
                </div>
            </div>   
		</div>
		<div class="section section6">
			<div class="contact">
                <div class="contact_cnt">
                    <h1>Contact</h1>
                    <form method="post">
                        Name:<input type="text" name="name" placeholder="Your Name">
                        Email:<input type="text" name="email" placeholder="Your Email adress">
                        Subject:<input type="text" name="subject" placeholder="Subjet">
                        Message:<br /><textarea name="message" placeholder="Your Message" rows="10" cols="60"></textarea>
                        <input type="submit" name="submit" value="SEND">
                    </form>
                </div>
			</div>
		</div>
		
	</div>
    <div id="lightbox">
        <div class="wrapper">
            <a href="#" class="btn">
                <span class="close">
                    <span class="close_btn"></span>
                    <span class="close_btn"></span>
                </span>
            </a>
            <div id="content">
                <div class="text-wrap clearfix">
                    <div class="Text">
                        <img src="./img/curaden.jpg" alt="bristles"><div class="bristles">큐라덴 칫솔모</div>
                        <img src="./img/general.jpg" alt="bristles"><div class="bristles">일반 칫솔모</div>
                    </div>
                    <div class="Text ">
                        <div class="text-cnt">
                            <h2>CURAPROX ToothBrushes</h2>
                            <ul>
                                <li>CURA:CURARE:TO CURE:<span>치료하다</span></li>
                                <li>PROX:PROXIMAL:<span>치아사이의 맞닿은 면</span></li>
                                <li>0.1mm의 초극세사인 Curen®으로 제작되었으며 고유의 탄성을 항상 유지하기 때문에 일반 칫솔보다 훨씬 부드러우면서도 섬세하고 정밀한 칫솔질을 가능하게 합니다.</li>
                                <li>일반 칫솔모가 500가닥인 것에 비해 큐라덴은 5000여개의 부드러우면서도 튼튼한 모로 구성되어있어, 잇몸과 치아에 상처를 주지 않고 플라그를 완벽하게 제거하기에 효과적입니다.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<div id="tab-wrap">
        <a href="#" class="tab_btn"><div class="close">
            <span class="close_btn"></span>
            <span class="close_btn"></span>
        </div></a>
        <ul class="tabs">
            <li class="on"><a href="#">TOOTH&nbsp;BRUSHES</a></li>
            <li><a href="#" class="ovl">HYDROSONIC<br>TOOTHBRUSH</a></li>
            <li><a href="#">CURAPROX&nbsp;BABY</a></li>
            <li><a href="#" class="ovl">INTERDENTAL<br>BRUSHES</a></li>
            <li><a href="#">TOOTHPASTE</a></li>
        </ul>
        <div class="tab-contents">
            <div class="tab-content on">
              <ul class="clearfix">
                <li><img src="./img/72018_CS5460.jpg" alt="cs5460"><!--cs5460--></li>
                <li><img src="./img/72059_CSsmart.jpg" alt="cssmart"><!--cssmart--></li>
                <li><img src="./img/87752_CS3960.jpg" alt="cs3960"><!--cs3960--></li>
                <li><img src="./img/87770_CS1560.jpg" alt="cs1560"><!--cs1560--></li>
              </ul>
            </div>
            <div class="tab-content">
            	<ul>
            		<li><img src="./img/37792_Hydrosonic-CHS-100-USB.jpg" alt="Hydrosonic"><!--Hydrosonic--></li>
            		<li><img src="./img/72071_BIW-hydrosonic-2.jpg" alt="BIWhydrosonic"><!--BIWhydrosonic--></li>
            	</ul>
            </div>
            <div class="tab-content">
            	<ul>
            		<li><img src="img/94428_soother_2.jpg" alt="soother"></li>
            		<li><img src="img/00788_soother-holder_2.jpg" alt="soother-holder"></li>
            		<li><img src="img/00820_teething-ring_1.jpg" alt="teething-ring"></li>
            		<li><img src="img/00846_CPX-Baby-toothbrush_1.jpg" alt="CPX-Baby-toothbrush"></li>
            	</ul>
            </div>
            <div class="tab-content">
            	<ul>
            		<li><img src="./img/41175_CPS-prime.jpg" alt="CPS-prime"></li>
            		<li><img src="./img/41830_perio.jpg" alt="perio"></li>
            		<li><img src="./img/42133_soft-implant.jpg" alt="soft-implant"></li>
            		<li><img src="./img/42743_regular.jpg" alt="regular"></li>
            	</ul>
            </div>
            <div class="tab-content">
            	<ul>
            		<li><img src="./img/88098_Enzycal-1450.jpg" alt="1450"></li>
            		<li><img src="./img/88111_Enzycal-950.jpg" alt="950"></li>
            		<li><img src="./img/88162_BIW-toothpaste.jpg" alt="BIW-toothpaste"></li>
            		<li><img src="./img/88186_WIB-toothpaste.jpg" alt="WIB-toothpaste"></li>
            	</ul>
            </div>
        </div>
    </div>
</div>
<nav id="nav">
	<a href="#" class="active"><span class="space"></span><span class="text">CURAPROX</span></a>
	<a href="#"><span class="space"></span><span class="text">HYDROSONIC&nbsp;TOOTHBRUSH</span></a>
	<a href="#"><span class="space"></span><span class="text">TOOTH&nbsp;BRUSHES</span></a>
<!--	<a href="#"><span class="space"></span><span class="text">INTERDENTAL&nbsp;BRUSHES</span></a>-->
	<a href="#"><span class="space"></span><span class="text">TOOTHPASTE</span></a>
	<a href="#"><span class="space"></span><span class="text">CONTACT&nbsp;US</span></a>
</nav>

</body>
</html>


