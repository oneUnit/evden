<?php
ini_set('display_errors', '1');
error_reporting(E_ALL ^E_NOTICE);
header( 'Content-Type: text/html; charset=utf-8' );
include_once('conf.php');
if(isset($_POST['register_email']) && $_POST['email'] != null){
    $reg = new reg_temp();
    $reg->register_temp($_POST['email']);
    unset($_POST['register_email']);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Al-Ver </title>
    <meta name="Hasan" content="subscription-page">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
 
    <link rel="stylesheet" href="css/style.css" media="all">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic|Raleway:400,200,300,500,700,600,800,900' rel='stylesheet' type='text/css'>


    <script src="js/jquery-1.11.1.min.js"></script>
     <script src="js/device.min.js"></script> <!--OPTIONAL JQUERY PLUGIN-->
    <script src="js/jquery.mb.YTPlayer.js"></script>
    <script src="js/custom.js"></script>
    
    
 <meta name="robots" content="noindex,follow" />
</head>

<body>
    
    <section class="big-background">
        <a id="bgndVideo" class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=MZKorkImGvY',containment:'body',autoPlay:true, mute:true, startAt:0, opacity:1}"></a>
        
        <div class="pattern"></div> 
            <div class="big-background-container">
                   
                    <h1 class="big-background-title">EVDƏN</h1>
                    <div class="divider"></div>
                    <h1 id="colorize">TEZLİKLƏ</h1>
                    
                    
                        
                        <div class="subscribe_box" id="subscribe">
                        <form action="" method="post">
                        <span id="input_name"> Qoşulmaq üçün Emailınızı daxil edin </span> <br>
				<input type="text" placeholder="email" name="email" ><br>
                    
		                </div>
                        
                    <input type="submit" value="QOŞUL" class="big-background-btn" name="register_email" >
                    </form>
                    
                    
            </div>                                                    
            
                <a href="#about">
                    <img src="http://www.cclspecialty.com/_images/iconsLogosUniversal/downArrow.png" id="arrow_down">      
                </a>
                
    </section>
    


   
    <div class="wrapper">

    <section class="about-section" id="about">
     
                <div class="about-section-container">
                    <h2 class="about-section-title">"EVDƏN" NƏDİR? </h2>
                    <p>Evə nə lazımdı? <br/>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br/>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <a href="#subscribe" target="_blank" class="about-section-btn">Bizə qoşul</a>
                </div>

    </section>
            

     <section class="small-background-section">
     <div class="pattern"></div>
                    <div class="small-background-container">
                        <h2 class="small-background-title"><span> Bizi Sosial şəbəkələrdə tapın</span></h2>
                         <ul class="socials">
                        <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook-square fa-3x"></i></a></li>
                        <li><a href="https://twitter.com" target="_blank"><i class="fa fa-twitter-square fa-3x"></i></a></li>
                        <li><a href="https://plus.google.com" target="_blank"><i class="fa fa-google-plus-square fa-3x"></i></a></li>
                        <li><a href="https://instagram.com" target="_blank"><i class="fa fa-instagram fa-3x"></i></a></li>

                        </ul>
                    </div>
    </section>


</div>
    
</body>
</html>