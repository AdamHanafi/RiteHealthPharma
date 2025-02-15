<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Rite Health Pharmacy</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="lib/twentytwenty/twentytwenty.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-dark m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-secondary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar PhP Start -->
    <?php include 'components/navbar.php';?>
    <!-- Navbar End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">Medication Information</h1>
                <a href="" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">Med Info</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Service Start -->
    <div style="text-align: center; width:100%; ">

      <style>


      </style>
<script>
      var mwHtml = '<iframe src="https://caas.rxwiki.com/atozmeds/*/internal/pharm_plus?utm_source=8c33d6bc-e094-4f86-b9f0-b144162fe6a0&amp;utm_medium=m-widget"'+ ' width="350px"></iframe>\n';

document.write(mwHtml);

listenMessage = function(e) {

var allData = e.data;
var anchorExist = allData.indexOf('iframe_caas_anchor_');
var anchorStart = allData.indexOf('anchor_')+7;
if(anchorExist==0) {
 var scrollTopValue = allData.slice(anchorStart);
 var element = document.getElementsByName('mw_internal');
 var pageTopOffset = element[0].offsetTop + parseInt(scrollTopValue);
 window.scrollTo(0, pageTopOffset);
}
switch (allData) {
      case 'iframe_caas_change':
      window.scrollTo(0, 0);
      break;

  }

}

if (window.addEventListener) {
window.addEventListener("message", listenMessage, false);
} else {
window.attachEvent("onmessage", listenMessage);
}

/*! iFrame Resizer (iframeSizer.min.js ) - v3.0.0 - 2015-08-04
*  Desc: Force cross domain iframes to size to content.
*  Requires: iframeResizer.contentWindow.min.js to be loaded into the target frame.
*  Copyright: (c) 2015 David J. Bradshaw - dave@bradshaw.net
*  License: MIT
*/

!function(a){"use strict";function b(b,c,d){"addEventListener"in a?b.addEventListener(c,d,!1):"attachEvent"in a&&b.attachEvent("on"+c,d)}function c(){var b,c=["moz","webkit","o","ms"];for(b=0;b<c.length&&!A;b+=1)A=a[c[b]+"RequestAnimationFrame"];A||f(" RequestAnimationFrame not supported")}function d(){var b="Host page";return a.top!==a.self&&(b=a.parentIFrame?a.parentIFrame.getId():"Nested host page"),b}function e(a){return x+"["+d()+"]"+a}function f(b){u&&"object"==typeof a.console&&console.log(e(b))}function g(b){"object"==typeof a.console&&console.warn(e(b))}function h(b){function c(){function a(){l(I),j()}h("Height"),h("Width"),m(a,I,"resetPage")}function d(a){var b=a.id;f(" Removing iFrame: "+b),a.parentNode.removeChild(a),C[b].closedCallback(b),delete C[b],f(" --")}function e(){var a=H.substr(y).split(":");return{iframe:C[a[0]].iframe,id:a[0],height:a[1],width:a[2],type:a[3]}}function h(a){var b=Number(C[J]["max"+a]),c=Number(C[J]["min"+a]),d=a.toLowerCase(),e=Number(I[d]);if(c>b)throw new Error("Value for min"+a+" can not be greater than max"+a);f(" Checking "+d+" is in range "+c+"-"+b),c>e&&(e=c,f(" Set "+d+" to min value")),e>b&&(e=b,f(" Set "+d+" to max value")),I[d]=""+e}function o(){function a(){function a(){f(" Checking connection is from allowed list of origins: "+d);var a;for(a=0;a<d.length;a++)if(d[a]===c)return!0;return!1}function b(){var a=C[J].remoteHost;return f(" Checking connection is from: "+a),c===a}return d.constructor===Array?a():b()}var c=b.origin,d=C[J].checkOrigin;if(d&&""+c!="null"&&!a())throw new Error("Unexpected message received from: "+c+" for "+I.iframe.id+". Message was: "+b.data+". This error can be disabled by setting the checkOrigin: false option or by providing of array of trusted domains.");return!0}function p(){return x===(""+H).substr(0,y)&&H.substr(y).split(":")[0]in C}function q(){var a=I.type in{"true":1,"false":1,undefined:1};return a&&f(" Ignoring init message from meta parent page"),a}function r(a){return H.substr(H.indexOf(":")+w+a)}function s(a){f(" MessageCallback passed: {iframe: "+I.iframe.id+", message: "+a+"}"),C[J].messageCallback({iframe:I.iframe,message:JSON.parse(a)}),f(" --")}function t(){return null===I.iframe?(g(" IFrame ("+I.id+") not found"),!1):!0}function v(a){var b=a.getBoundingClientRect();return i(),{x:parseInt(b.left,10)+parseInt(z.x,10),y:parseInt(b.top,10)+parseInt(z.y,10)}}function A(b){function c(){z=h,B(),f(" --")}function d(){return{x:Number(I.width)+e.x,y:Number(I.height)+e.y}}var e=b?v(I.iframe):{x:0,y:0},h=d();f(" Reposition requested from iFrame (offset x:"+e.x+" y:"+e.y+")"),a.top!==a.self?a.parentIFrame?a.parentIFrame["scrollTo"+(b?"Offset":"")](h.x,h.y):g(" Unable to scroll to requested position, window.parentIFrame not found"):c()}function B(){!1!==C[J].scrollCallback(z)&&j()}function D(b){function c(a){var b=v(a);f(" Moving to in page link (#"+d+") at x: "+b.x+" y: "+b.y),z={x:b.x,y:b.y},B(),f(" --")}var d=b.split("#")[1]||"",e=decodeURIComponent(d),g=document.getElementById(e)||document.getElementsByName(e)[0];a.top!==a.self?a.parentIFrame?a.parentIFrame.moveToAnchor(d):f(" In page link #"+d+" not found and window.parentIFrame not found"):g?c(g):f(" In page link #"+d+" not found")}function E(){switch(C[J].firstRun&&G(),I.type){case"close":d(I.iframe);break;case"message":s(r(6));break;case"scrollTo":A(!1);break;case"scrollToOffset":A(!0);break;case"inPageLink":D(r(9));break;case"reset":k(I);break;case"init":c(),C[J].initCallback(I.iframe),C[J].resizedCallback(I);break;default:c(),C[J].resizedCallback(I)}}function F(a){var b=!0;return C[a]||(b=!1,g(I.type+" No settings for "+a+". Message was: "+H)),b}function G(){C[J].firstRun=!1,Function.prototype.bind&&(C[J].iframe.iFrameResizer={close:d.bind(null,C[J].iframe),resize:n.bind(null,"Window resize","resize",C[J].iframe),moveToAnchor:function(a){n("Move to anchor","inPageLink:"+a,C[J].iframe,J)},sendMessage:function(a){a=JSON.stringify(a),n("Send Message","message:"+a,C[J].iframe,J)}})}var H=b.data,I={},J=null;p()?(I=e(),J=I.id,!q()&&F(J)&&(u=C[J].log,f(" Received: "+H),t()&&o()&&E())):f(" Ignored: "+H)}function i(){null===z&&(z={x:void 0!==a.pageXOffset?a.pageXOffset:document.documentElement.scrollLeft,y:void 0!==a.pageYOffset?a.pageYOffset:document.documentElement.scrollTop},f(" Get page position: "+z.x+","+z.y))}function j(){null!==z&&(a.scrollTo(z.x,z.y),f(" Set page position: "+z.x+","+z.y),z=null)}function k(a){function b(){l(a),n("reset","reset",a.iframe,a.id)}f(" Size reset requested by "+("init"===a.type?"host page":"iFrame")),i(),m(b,a,"init")}function l(a){function b(b){a.iframe.style[b]=a[b]+"px",f(" IFrame ("+c+") "+b+" set to "+a[b]+"px")}var c=a.iframe.id;C[c].sizeHeight&&b("height"),C[c].sizeWidth&&b("width")}function m(a,b,c){c!==b.type&&A?(f(" Requesting animation frame"),A(a)):a()}function n(a,b,c,d){c&&c.contentWindow?(f("["+a+"] Sending msg to iframe ("+b+")"),c.contentWindow.postMessage(x+b,C[d||c.id].targetOrigin)):(g("["+a+"] IFrame not found"),C[d]&&delete C[d])}function o(a,c){function d(){function b(b){1/0!==C[v][b]&&0!==C[v][b]&&(a.style[b]=C[v][b]+"px",f(" Set "+b+" = "+C[v][b]+"px"))}b("maxHeight"),b("minHeight"),b("maxWidth"),b("minWidth")}function e(b){return""===b&&(a.id=b="iFrameResizer"+t++,u=(c||{}).log,f(" Added missing iframe ID: "+b+" ("+a.src+")")),b}function h(){f(" IFrame scrolling "+(C[v].scrolling?"enabled":"disabled")+" for "+v),a.style.overflow=!1===C[v].scrolling?"hidden":"auto",a.scrolling=!1===C[v].scrolling?"no":"yes"}function i(){("number"==typeof C[v].bodyMargin||"0"===C[v].bodyMargin)&&(C[v].bodyMarginV1=C[v].bodyMargin,C[v].bodyMargin=""+C[v].bodyMargin+"px")}function j(){return v+":"+C[v].bodyMarginV1+":"+C[v].sizeWidth+":"+C[v].log+":"+C[v].interval+":"+C[v].enablePublicMethods+":"+C[v].autoResize+":"+C[v].bodyMargin+":"+C[v].heightCalculationMethod+":"+C[v].bodyBackground+":"+C[v].bodyPadding+":"+C[v].tolerance+":"+C[v].inPageLinks+":"+C[v].resizeFrom+":"+C[v].widthCalculationMethod}function l(){var b=C[v].firstRun,c=C[v].heightCalculationMethod in B;!b&&c&&k({iframe:a,height:0,width:0,type:"init"})}function m(c){function d(){n("iFrame.onload",c,a),l()}b(a,"load",d),n("init",c,a)}function o(a){if("object"!=typeof a)throw new TypeError("Options is not an object.")}function p(a){for(var b in E)E.hasOwnProperty(b)&&(C[v][b]=a.hasOwnProperty(b)?a[b]:E[b])}function q(a){return"file://"===a?"*":a}function r(b){b=b||{},C[v]={firstRun:!0,iframe:a,remoteHost:a.src.split("/").slice(0,3).join("/")},o(b),p(b),C[v].targetOrigin=!0===C[v].checkOrigin?q(C[v].remoteHost):"*",u=C[v].log}function s(){return v in C}var v=e(a.id);s()?g(" Ignored iFrame, already setup."):(r(c),h(),d(),i(),m(j()))}function p(a,b){null===D&&(D=setTimeout(function(){D=null,a()},b))}function q(){function c(a){p(function(){e("Window "+a,"resize")},66)}function d(){"hidden"!==document.visibilityState&&e("Tab Visable","resize")}function e(a,b){function c(a){return"parent"===C[a].resizeFrom&&C[a].autoResize&&!C[a].firstRun}for(var d in C)c(d)&&n(a,b,document.getElementById(d),d)}b(a,"message",h),b(a,"resize",function(){c("resize")}),b(document,"visibilitychange",d),b(document,"-webkit-visibilitychange",d),b(a,"focusin",function(){c("focus")})}function r(){function a(a,b){if(!b.tagName)throw new TypeError("Object is not a valid DOM element");if("IFRAME"!==b.tagName.toUpperCase())throw new TypeError("Expected <IFRAME> tag, found <"+b.tagName+">.");o(b,a)}return c(),q(),function(b,c){switch(typeof c){case"undefined":case"string":Array.prototype.forEach.call(document.querySelectorAll(c||"iframe"),a.bind(void 0,b));break;case"object":a(b,c);break;default:throw new TypeError("Unexpected data type ("+typeof c+").")}}}function s(a){a.fn.iFrameResize=function(a){return this.filter("iframe").each(function(b,c){o(c,a)}).end()}}var t=0,u=!1,v="message",w=v.length,x="[iFrameSizer]",y=x.length,z=null,A=a.requestAnimationFrame,B={max:1,scroll:1,bodyScroll:1,documentElementScroll:1},C={},D=null,E={autoResize:!0,bodyBackground:null,bodyMargin:null,bodyMarginV1:8,bodyPadding:null,checkOrigin:!0,inPageLinks:!1,enablePublicMethods:!0,heightCalculationMethod:"bodyOffset",interval:32,log:!1,maxHeight:1/0,maxWidth:1/0,minHeight:0,minWidth:0,resizeFrom:"parent",scrolling:!1,sizeHeight:!0,sizeWidth:!1,tolerance:0,widthCalculationMethod:"scroll",closedCallback:function(){},initCallback:function(){},messageCallback:function(){g("MessageCallback function not defined")},resizedCallback:function(){},scrollCallback:function(){return!0}};a.jQuery&&s(jQuery),"function"==typeof define&&define.amd?define([],r):"object"==typeof module&&"object"==typeof module.exports?module.exports=r():a.iFrameResize=a.iFrameResize||r()}(window||{});



var isOldIE = (navigator.userAgent.indexOf("MSIE") !== -1);

iFrameResize({

  checkOrigin: false,
  heightCalculationMethod: isOldIE ? "max" : "lowestElement"

});
</script>
        </div>
    <!-- Service End -->


    <!-- Newsletter Start -->
    <div class="container-fluid position-relative pt-5 wow fadeInUp" data-wow-delay="0.1s" style="z-index: 1;">
        <div class="container">
            <div class="bg-primary p-5">
                <form class="mx-auto" style="max-width: 600px;">
                    <div class="input-group">
                        <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                        <button class="btn btn-dark px-4">Sign Up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Newsletter End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light py-5 wow fadeInUp" data-wow-delay="0.3s" style="margin-top: -75px;">
        <div class="container pt-5">
            <div class="row g-5 pt-4">
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Quick Links</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a>
                        <a class="text-light" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Popular Links</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a>
                        <a class="text-light" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Get In Touch</h3>
                    <p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i>Michigan Ave, Detroit, MI</p>
                    <p class="mb-2"><i class="bi bi-envelope-open text-primary me-2"></i>ritehealthpharm@gmail.com</p>
                    <p class="mb-0"><i class="bi bi-telephone text-primary me-2"></i>313-209-6066</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Follow Us</h3>
                    <div class="d-flex">
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="https://www.google.com/maps/place/Rite+Health+Pharmacy/@42.3309646,-83.1091425,15z/data=!4m5!3m4!1s0x0:0xb3bdb5e7da96d844!8m2!3d42.3309646!4d-83.1091425?shorturl=1"><i class="fab fa-google fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="https://www.facebook.com/people/Rite-Health-Pharmacy/100069971883857/"><i class="fab fa-facebook-f fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded" href="https://www.yelp.com/biz/rite-health-pharmacy-detroit"><i class="fab fa-yelp fw-normal"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="lib/twentytwenty/jquery.event.move.js"></script>
    <script src="lib/twentytwenty/jquery.twentytwenty.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
