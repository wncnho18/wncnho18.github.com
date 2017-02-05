<?xml version="1.0" encoding="UTF-8" ?>
<!DOCTYPE html>
<html expr:dir='data:blog.languageDirection' lang='en-US' xmlns='http://www.w3.org/1999/xhtml' xmlns:b='http://www.google.com/2005/gml/b' xmlns:data='http://www.google.com/2005/gml/data' xmlns:expr='http://www.google.com/2005/gml/expr'>
  <head>
    <meta charset='UTF-8'/>
    <meta content='width=device-width, initial-scale=1' name='viewport'/>
    <b:include data='blog' name='all-head-content'/>
    <link href='http://fonts.googleapis.com/css?family=Dosis:400,500,600,700,300' rel='stylesheet' type='text/css'/>
    <link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'/>
    <link href='//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' rel='stylesheet'/>
    <b:if cond='data:blog.pageType == &quot;index&quot;'>
      <title>
        <data:blog.pageTitle/>
      </title>
      <b:else/>
      <b:if cond='data:blog.pageType != &quot;error_page&quot;'>
        <title>
          <data:blog.pageName/>
          ~ 
          <data:blog.title/>
        </title>
        <b:else/>
        <title>
          404 ~ Page Not Found!
        </title>
      </b:if>
    </b:if>
    <b:skin><![CDATA[
      
/*
-----------------------------------------------
Template Name  : Freak
Author         : NewBloggerThemes.com
Author URL     : http://newbloggerthemes.com/
Theme URL      : http://newbloggerthemes.com/freak-blogger-template/
Created Date   : Saturday, August 1, 2015
License        : GNU General Public License v3
This template is free for both personal and commercial use, But to satisfy the 'attribution' clause of the license, you are required to keep the footer links intact which provides due credit to its authors.
----------------------------------------------- */
body#layout ul{list-style-type:none;list-style:none}
body#layout ul li{list-style-type:none;list-style:none}
body#layout #headerbwrap {height:auto;}
body#layout #content {}
/* Variable definitions
====================
*/
/* Use this with templates/template-twocol.html */
.section, .widget {
margin:0;
padding:0;
}
/*--------------------------------------------------------------
1.0 Reset
--------------------------------------------------------------*/
html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, font, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td {
border: 0;
font-family: inherit;
font-size: 100%;
font-style: inherit;
font-weight: inherit;
margin: 0;
outline: 0;
padding: 0;
vertical-align: baseline;
}
html {
font-size: 62.5%; /* Corrects text resizing oddly in IE6/7 when body font-size is set using em units http://clagnut.com/blog/348/#c790 */
overflow-y: scroll; /* Keeps page centered in all browsers regardless of content height */
-webkit-text-size-adjust: 100%; /* Prevents iOS text size adjust after orientation change, without disabling user zoom */
-ms-text-size-adjust:     100%; /* www.456bereastreet.com/archive/201012/controlling_text_size_in_safari_for_ios_without_disabling_user_zoom/ */
box-sizing: border-box; /* Apply a natural box layout model to the document; see http://www.paulirish.com/2012/box-sizing-border-box-ftw/ */
}
*,
*:before,
*:after { /* Inherit box-sizing to make it easier to change the property for components that leverage other behavior; see http://css-tricks.com/inheriting-box-sizing-probably-slightly-better-best-practice/ */
box-sizing: inherit;
}
body {
background: #fff; /* Fallback for when there is no custom background color defined. */
}
article,
aside,
details,
figcaption,
figure,
footer,
header,
main,
nav,
section {
display: block;
}
ol,
ul {
list-style: none;
}
table { /* tables still need 'cellspacing="0"' in the markup */
border-collapse: separate;
border-spacing: 0;
}
caption,
th,
td {
font-weight: normal;
text-align: left;
}
blockquote:before,
blockquote:after,
q:before,
q:after {
content: "";
}
blockquote,
q {
quotes: "" "";
}
a:focus {
outline: thin dotted;
}
a:hover,
a:active {
outline: 0;
}
a img {
border: 0;
}
/*--------------------------------------------------------------
2.0 Typography
--------------------------------------------------------------*/
body,
button,
input,
select,
textarea {
color: #404040;
font-family: sans-serif;
font-size: 16px;
font-size: 1.6rem;
line-height: 1.5;
}
h1,
h2,
h3,
h4,
h5,
h6 {
clear: both;
}
p {
margin-bottom: 1.5em;
}
b,
strong {
font-weight: bold;
}
dfn,
cite,
em,
i {
font-style: italic;
}
blockquote {
margin: 0 1.5em;
}
address {
margin: 0 0 1.5em;
}
pre {
background: #eee;
font-family: "Courier 10 Pitch", Courier, monospace;
font-size: 15px;
font-size: 1.5rem;
line-height: 1.6;
margin-bottom: 1.6em;
max-width: 100%;
overflow: auto;
padding: 1.6em;
}
code,
kbd,
tt,
var {
font-family: Monaco, Consolas, "Andale Mono", "DejaVu Sans Mono", monospace;
font-size: 15px;
font-size: 1.5rem;
}
abbr,
acronym {
border-bottom: 1px dotted #666;
cursor: help;
}
mark,
ins {
background: #fff9c0;
text-decoration: none;
}
sup,
sub {
font-size: 75%;
height: 0;
line-height: 0;
position: relative;
vertical-align: baseline;
}
sup {
bottom: 1ex;
}
sub {
top: .5ex;
}
small {
font-size: 75%;
}
big {
font-size: 125%;
}
/*--------------------------------------------------------------
3.0 Elements
--------------------------------------------------------------*/
hr {
background-color: #ccc;
border: 0;
height: 1px;
margin-bottom: 1.5em;
}
ul,
ol {
margin: 0 0 1.5em 3em;
}
ul {
list-style: disc;
}
ol {
list-style: decimal;
}
li > ul,
li > ol {
margin-bottom: 0;
margin-left: 1.5em;
}
dt {
font-weight: bold;
}
dd {
margin: 0 1.5em 1.5em;
}
img {
height: auto; /* Make sure images are scaled correctly. */
max-width: 100%; /* Adhere to container width. */
}
figure {
margin: 0;
}
table {
margin: 0 0 1.5em;
width: 100%;
}
th {
font-weight: bold;
}
/*--------------------------------------------------------------
4.0 Forms
--------------------------------------------------------------*/
button,
input,
select,
textarea {
font-size: 100%; /* Corrects font size not being inherited in all browsers */
margin: 0; /* Addresses margins set differently in IE6/7, F3/4, S5, Chrome */
vertical-align: baseline; /* Improves appearance and consistency in all browsers */
}
button,
input[type="button"],
input[type="reset"],
input[type="submit"] {
border: 1px solid;
border-color: #ccc #ccc #bbb;
border-radius: 3px;
background: #e6e6e6;
box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.5), inset 0 15px 17px rgba(255, 255, 255, 0.5), inset 0 -5px 12px rgba(0, 0, 0, 0.05);
color: rgba(0, 0, 0, .8);
cursor: pointer; /* Improves usability and consistency of cursor style between image-type 'input' and others */
-webkit-appearance: button; /* Corrects inability to style clickable 'input' types in iOS */
font-size: 12px;
font-size: 1.2rem;
line-height: 1;
padding: .6em 1em .4em;
text-shadow: 0 1px 0 rgba(255, 255, 255, 0.8);
}
button:hover,
input[type="button"]:hover,
input[type="reset"]:hover,
input[type="submit"]:hover {
border-color: #ccc #bbb #aaa;
box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.8), inset 0 15px 17px rgba(255, 255, 255, 0.8), inset 0 -5px 12px rgba(0, 0, 0, 0.02);
}
button:focus,
input[type="button"]:focus,
input[type="reset"]:focus,
input[type="submit"]:focus,
button:active,
input[type="button"]:active,
input[type="reset"]:active,
input[type="submit"]:active {
border-color: #aaa #bbb #bbb;
box-shadow: inset 0 -1px 0 rgba(255, 255, 255, 0.5), inset 0 2px 5px rgba(0, 0, 0, 0.15);
}
input[type="checkbox"],
input[type="radio"] {
padding: 0; /* Addresses excess padding in IE8/9 */
}
input[type="search"] {
-webkit-appearance: textfield; /* Addresses appearance set to searchfield in S5, Chrome */
box-sizing: content-box;
}
input[type="search"]::-webkit-search-decoration { /* Corrects inner padding displayed oddly in S5, Chrome on OSX */
-webkit-appearance: none;
}
input[type="text"],
input[type="email"],
input[type="url"],
input[type="password"],
input[type="search"],
textarea {
color: #666;
border: 1px solid #ccc;
border-radius: 3px;
}
input[type="text"]:focus,
input[type="email"]:focus,
input[type="url"]:focus,
input[type="password"]:focus,
input[type="search"]:focus,
textarea:focus {
color: #111;
}
input[type="text"],
input[type="email"],
input[type="url"],
input[type="password"],
input[type="search"] {
padding: 3px;
}
textarea {
overflow: auto; /* Removes default vertical scrollbar in IE6/7/8/9 */
padding-left: 3px;
vertical-align: top; /* Improves readability and alignment in all browsers */
width: 100%;
}
/*--------------------------------------------------------------
5.0 Navigation
--------------------------------------------------------------*/
/*--------------------------------------------------------------
5.2 Menus
--------------------------------------------------------------*/
.main-navigation {
clear: both;
display: block;
float: left;
width: 100%;
}
.main-navigation ul {
list-style: none;
margin: 0;
padding-left: 0;
}
.main-navigation li {
float: left;
position: relative;
}
.main-navigation a {
display: block;
text-decoration: none;
}
.main-navigation ul ul {
box-shadow: 0 3px 3px rgba(0, 0, 0, 0.2);
float: left;
position: absolute;
z-index: 99999;
}
.main-navigation ul ul ul {
display: none;
left: -999em;
top: 0;
}
.main-navigation ul ul a {
width: 200px;
}
.main-navigation ul ul li {
}
.main-navigation li:hover > a {
}
.main-navigation ul ul :hover > a {
}
.main-navigation ul ul a:hover {
}
.main-navigation ul li:hover > ul {
left: auto;
}
.main-navigation ul ul li:hover > ul {
left: 100%;
}
.main-navigation .current_page_item > a,
.main-navigation .current-menu-item > a,
.main-navigation .current_page_ancestor > a {
}
/* Small menu */
.menu-toggle {
display: none;
}
@media screen and (max-width: 600px) {
.menu-toggle,
.main-navigation.toggled .nav-menu {
display: block;
}
.main-navigation ul {
display: none;
}
}
/*--------------------------------------------------------------
6.0 Accessibility
--------------------------------------------------------------*/
/* Text meant only for screen readers */
.screen-reader-text {
clip: rect(1px, 1px, 1px, 1px);
position: absolute !important;
height: 1px;
width: 1px;
overflow: hidden;
}
.screen-reader-text:hover,
.screen-reader-text:active,
.screen-reader-text:focus {
background-color: #f1f1f1;
border-radius: 3px;
box-shadow: 0 0 2px 2px rgba(0, 0, 0, 0.6);
clip: auto !important;
color: #21759b;
display: block;
font-size: 14px;
font-size: 1.4rem;
font-weight: bold;
height: auto;
left: 5px;
line-height: normal;
padding: 15px 23px 14px;
text-decoration: none;
top: 5px;
width: auto;
z-index: 100000; /* Above WP toolbar */
}
/*--------------------------------------------------------------
8.0 Clearings
--------------------------------------------------------------*/
.clear:before,
.clear:after,
.entry-content:before,
.entry-content:after,
.site-headernbt:before,
.site-headernbt:after,
.site-contentnbt:before,
.site-contentnbt:after,
.site-footernbt:before,
.site-footernbt:after {
content: "";
display: table;
}
.clear:after,
.entry-content:after,
.site-headernbt:after,
.site-contentnbt:after,
.site-footernbt:after {
clear: both;
}
/*--------------------------------------------------------------
9.0 Widgets
--------------------------------------------------------------*/
.widget-areanbt .widget {
margin: 0 0 1.5em;
}
/* Make sure select elements fit in widgets */
.widget select {
max-width: 100%;
}
/* Search widget */
.widget_searchnbt .search-submitnbt {
display: none;
}
/*--------------------------------------------------------------
10.0 Content
--------------------------------------------------------------*/
/*--------------------------------------------------------------
10.1 Posts and pages
--------------------------------------------------------------*/
.hentry {
margin: 0 0 1.5em;
}
.entry-content {
margin: 1.5em 0 0;
}
/*--------------------------------------------------------------
12.0 Media
--------------------------------------------------------------*/
/* Make sure embeds and iframes fit their containers */
embed,
iframe,
object {
max-width: 100%;
}
/*
* jQuery Nivo Slider v3.2
* http://nivo.dev7studios.com
*
* Copyright 2012, Dev7studios
* Free to use and abuse under the MIT license.
* http://www.opensource.org/licenses/mit-license.php
*/
/* The Nivo Slider styles */
.nivoSlider {
position:relative;
width:100%;
height:auto;
overflow: hidden;
}
.nivoSlider img {
position:absolute;
top:0px;
left:0px;
max-width: none;
}
.nivo-main-image {
display: block !important;
position: relative !important; 
width: 100% !important;
}
/* If an image is wrapped in a link */
.nivoSlider a.nivo-imageLink {
position:absolute;
top:0px;
left:0px;
width:100%;
height:100%;
border:0;
padding:0;
margin:0;
z-index:6;
display:none;
background:white; 
filter:alpha(opacity=0); 
opacity:0;
}
/* The slices and boxes in the Slider */
.nivo-slice {
display:block;
position:absolute;
z-index:5;
height:100%;
top:0;
}
.nivo-box {
display:block;
position:absolute;
z-index:5;
overflow:hidden;
}
.nivo-box img { display:block; }
/* Caption styles */
.nivo-caption {
position:absolute;
left:0px;
bottom:0px;
background:#000;
color:#fff;
width:100%;
z-index:8;
padding: 5px 10px;
opacity: 0.8;
overflow: hidden;
display: none;
-moz-opacity: 0.8;
filter:alpha(opacity=8);
-webkit-box-sizing: border-box; /* Safari/Chrome, other WebKit */
-moz-box-sizing: border-box;    /* Firefox, other Gecko */
box-sizing: border-box;         /* Opera/IE 8+ */
}
.nivo-caption p {
padding:5px;
margin:0;
}
.nivo-caption a {
display:inline !important;
}
.nivo-html-caption {
display:none;
}
/* Direction nav styles (e.g. Next & Prev) */
.nivo-directionNav a {
position:absolute;
top:45%;
z-index:9;
cursor:pointer;
}
.nivo-prevNav {
left:0px;
}
.nivo-nextNav {
right:0px;
}
/* Control nav styles (e.g. 1,2,3...) */
.nivo-controlNav {
text-align:center;
padding: 15px 0;
}
.nivo-controlNav a {
cursor:pointer;
}
.nivo-controlNav a.active {
font-weight:bold;
}
/*
Skin Name: Nivo Slider Default Theme
Skin URI: http://nivo.dev7studios.com
Description: The default skin for the Nivo Slider.
Version: 1.3
Author: Gilbert Pellegrom
Author URI: http://dev7studios.com
Supports Thumbs: true
*/
.theme-default .nivoSlider {
position:relative;
background:#fff url(http://3.bp.blogspot.com/-qrCWE9djC-U/Vbwuk_We3CI/AAAAAAAAOiQ/zKxAcx7jpg4/s1600/loading.gif) no-repeat 50% 50%;
margin-bottom:10px;
-webkit-box-shadow: 0px 1px 5px 0px #4a4a4a;
-moz-box-shadow: 0px 1px 5px 0px #4a4a4a;
box-shadow: 0px 1px 5px 0px #4a4a4a;
}
.theme-default .nivoSlider img {
position:absolute;
top:0px;
left:0px;
display:none;
}
.theme-default .nivoSlider a {
border:0;
display:block;
}
.theme-default .nivo-controlNav {
text-align: center;
padding: 20px 0;
}
.theme-default .nivo-controlNav a {
display:inline-block;
width:22px;
height:22px;
background:url(http://2.bp.blogspot.com/-u-9DAw_NJys/VbwukvHOGrI/AAAAAAAAOiE/1GrCvWhinSU/s1600/bullets.png) no-repeat;
text-indent:-9999px;
border:0;
margin: 0 2px;
}
.theme-default .nivo-controlNav a.active {
background-position:0 -22px;
}
.theme-default .nivo-directionNav a {
display:block;
width:30px;
height:30px;
background:url(http://3.bp.blogspot.com/-IRPix8TAlvQ/VbwukV-BCjI/AAAAAAAAOiA/tUj5uBEozaE/s1600/arrows.png) no-repeat;
text-indent:-9999px;
border:0;
opacity: 0;
-webkit-transition: all 200ms ease-in-out;
-moz-transition: all 200ms ease-in-out;
-o-transition: all 200ms ease-in-out;
transition: all 200ms ease-in-out;
}
.theme-default:hover .nivo-directionNav a { opacity: 1; }
.theme-default a.nivo-nextNav {
background-position:-30px 0;
right:15px;
}
.theme-default a.nivo-prevNav {
left:15px;
}
.theme-default .nivo-caption {
font-family: Helvetica, Arial, sans-serif;
}
.theme-default .nivo-caption a {
color:#fff;
border-bottom:1px dotted #fff;
}
.theme-default .nivo-caption a:hover {
color:#fff;
}
.theme-default .nivo-controlNav.nivo-thumbs-enabled {
width: 100%;
}
.theme-default .nivo-controlNav.nivo-thumbs-enabled a {
width: auto;
height: auto;
background: none;
margin-bottom: 5px;
}
.theme-default .nivo-controlNav.nivo-thumbs-enabled img {
display: block;
width: 120px;
height: auto;
}
/*!
* Bootstrap v3.3.1 (http://getbootstrap.com)
* Copyright 2011-2014 Twitter, Inc.
* Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
*//*! normalize.css v3.0.2 | MIT License | git.io/normalize */html{font-family:sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%}body{margin:0}article,aside,details,figcaption,figure,footer,header,hgroup,main,menu,nav,section,summary{display:block}audio,canvas,progress,video{display:inline-block;vertical-align:baseline}audio:not([controls]){display:none;height:0}[hidden],template{display:none}a{background-color:transparent}a:active,a:hover{outline:0}abbr[title]{border-bottom:1px dotted}b,strong{font-weight:700}dfn{font-style:italic}h1{margin:.67em 0;font-size:2em}mark{color:#000;background:#ff0}small{font-size:80%}sub,sup{position:relative;font-size:75%;line-height:0;vertical-align:baseline}sup{top:-.5em}sub{bottom:-.25em}img{border:0}svg:not(:root){overflow:hidden}figure{margin:1em 40px}hr{height:0;-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box}pre{overflow:auto}code,kbd,pre,samp{font-family:monospace,monospace;font-size:1em}button,input,optgroup,select,textarea{margin:0;font:inherit;color:inherit}button{overflow:visible}button,select{text-transform:none}button,html input[type=button],input[type=reset],input[type=submit]{-webkit-appearance:button;cursor:pointer}button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{padding:0;border:0}input{line-height:normal}input[type=checkbox],input[type=radio]{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;padding:0}input[type=number]::-webkit-inner-spin-button,input[type=number]::-webkit-outer-spin-button{height:auto}input[type=search]{-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;-webkit-appearance:textfield}input[type=search]::-webkit-search-cancel-button,input[type=search]::-webkit-search-decoration{-webkit-appearance:none}fieldset{padding:.35em .625em .75em;margin:0 2px;border:1px solid silver}legend{padding:0;border:0}textarea{overflow:auto}optgroup{font-weight:700}table{border-spacing:0;border-collapse:collapse}td,th{padding:0}/*! Source: https://github.com/h5bp/html5-boilerplate/blob/master/src/css/main.css */@media print{*,:before,:after{color:#000!important;text-shadow:none!important;background:transparent!important;-webkit-box-shadow:none!important;box-shadow:none!important}a,a:visited{text-decoration:underline}a[href]:after{content:" (" attr(href) ")"}abbr[title]:after{content:" (" attr(title) ")"}a[href^="#"]:after,a[href^="javascript:"]:after{content:""}pre,blockquote{border:1px solid #999;page-break-inside:avoid}thead{display:table-header-group}tr,img{page-break-inside:avoid}img{max-width:100%!important}p,h2,h3{orphans:3;widows:3}h2,h3{page-break-after:avoid}select{background:#fff!important}.navbar{display:none}.btn>.caret,.dropup>.btn>.caret{border-top-color:#000!important}.label{border:1px solid #000}.table{border-collapse:collapse!important}.table td,.table th{background-color:#fff!important}.table-bordered th,.table-bordered td{border:1px solid #ddd!important}}@font-face{font-family:'Glyphicons Halflings';src:url(../fonts/glyphicons-halflings-regular.eot);src:url(../fonts/glyphicons-halflings-regular.eot?#iefix) format('embedded-opentype'),url(../fonts/glyphicons-halflings-regular.woff) format('woff'),url(../fonts/glyphicons-halflings-regular.ttf) format('truetype'),url(../fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular) format('svg')}.glyphicon{position:relative;top:1px;display:inline-block;font-family:'Glyphicons Halflings';font-style:normal;font-weight:400;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.glyphicon-asterisk:before{content:"\2a"}.glyphicon-plus:before{content:"\2b"}.glyphicon-euro:before,.glyphicon-eur:before{content:"\20ac"}.glyphicon-minus:before{content:"\2212"}.glyphicon-cloud:before{content:"\2601"}.glyphicon-envelope:before{content:"\2709"}.glyphicon-pencil:before{content:"\270f"}.glyphicon-glass:before{content:"\e001"}.glyphicon-music:before{content:"\e002"}.glyphicon-search:before{content:"\e003"}.glyphicon-heart:before{content:"\e005"}.glyphicon-star:before{content:"\e006"}.glyphicon-star-empty:before{content:"\e007"}.glyphicon-user:before{content:"\e008"}.glyphicon-film:before{content:"\e009"}.glyphicon-th-large:before{content:"\e010"}.glyphicon-th:before{content:"\e011"}.glyphicon-th-list:before{content:"\e012"}.glyphicon-ok:before{content:"\e013"}.glyphicon-remove:before{content:"\e014"}.glyphicon-zoom-in:before{content:"\e015"}.glyphicon-zoom-out:before{content:"\e016"}.glyphicon-off:before{content:"\e017"}.glyphicon-signal:before{content:"\e018"}.glyphicon-cog:before{content:"\e019"}.glyphicon-trash:before{content:"\e020"}.glyphicon-home:before{content:"\e021"}.glyphicon-file:before{content:"\e022"}.glyphicon-time:before{content:"\e023"}.glyphicon-road:before{content:"\e024"}.glyphicon-download-alt:before{content:"\e025"}.glyphicon-download:before{content:"\e026"}.glyphicon-upload:before{content:"\e027"}.glyphicon-inbox:before{content:"\e028"}.glyphicon-play-circle:before{content:"\e029"}.glyphicon-repeat:before{content:"\e030"}.glyphicon-refresh:before{content:"\e031"}.glyphicon-list-alt:before{content:"\e032"}.glyphicon-lock:before{content:"\e033"}.glyphicon-flag:before{content:"\e034"}.glyphicon-headphones:before{content:"\e035"}.glyphicon-volume-off:before{content:"\e036"}.glyphicon-volume-down:before{content:"\e037"}.glyphicon-volume-up:before{content:"\e038"}.glyphicon-qrcode:before{content:"\e039"}.glyphicon-barcode:before{content:"\e040"}.glyphicon-tag:before{content:"\e041"}.glyphicon-tags:before{content:"\e042"}.glyphicon-book:before{content:"\e043"}.glyphicon-bookmark:before{content:"\e044"}.glyphicon-print:before{content:"\e045"}.glyphicon-camera:before{content:"\e046"}.glyphicon-font:before{content:"\e047"}.glyphicon-bold:before{content:"\e048"}.glyphicon-italic:before{content:"\e049"}.glyphicon-text-height:before{content:"\e050"}.glyphicon-text-width:before{content:"\e051"}.glyphicon-align-left:before{content:"\e052"}.glyphicon-align-center:before{content:"\e053"}.glyphicon-align-right:before{content:"\e054"}.glyphicon-align-justify:before{content:"\e055"}.glyphicon-list:before{content:"\e056"}.glyphicon-indent-left:before{content:"\e057"}.glyphicon-indent-right:before{content:"\e058"}.glyphicon-facetime-video:before{content:"\e059"}.glyphicon-picture:before{content:"\e060"}.glyphicon-map-marker:before{content:"\e062"}.glyphicon-adjust:before{content:"\e063"}.glyphicon-tint:before{content:"\e064"}.glyphicon-edit:before{content:"\e065"}.glyphicon-share:before{content:"\e066"}.glyphicon-check:before{content:"\e067"}.glyphicon-move:before{content:"\e068"}.glyphicon-step-backward:before{content:"\e069"}.glyphicon-fast-backward:before{content:"\e070"}.glyphicon-backward:before{content:"\e071"}.glyphicon-play:before{content:"\e072"}.glyphicon-pause:before{content:"\e073"}.glyphicon-stop:before{content:"\e074"}.glyphicon-forward:before{content:"\e075"}.glyphicon-fast-forward:before{content:"\e076"}.glyphicon-step-forward:before{content:"\e077"}.glyphicon-eject:before{content:"\e078"}.glyphicon-chevron-left:before{content:"\e079"}.glyphicon-chevron-right:before{content:"\e080"}.glyphicon-plus-sign:before{content:"\e081"}.glyphicon-minus-sign:before{content:"\e082"}.glyphicon-remove-sign:before{content:"\e083"}.glyphicon-ok-sign:before{content:"\e084"}.glyphicon-question-sign:before{content:"\e085"}.glyphicon-info-sign:before{content:"\e086"}.glyphicon-screenshot:before{content:"\e087"}.glyphicon-remove-circle:before{content:"\e088"}.glyphicon-ok-circle:before{content:"\e089"}.glyphicon-ban-circle:before{content:"\e090"}.glyphicon-arrow-left:before{content:"\e091"}.glyphicon-arrow-right:before{content:"\e092"}.glyphicon-arrow-up:before{content:"\e093"}.glyphicon-arrow-down:before{content:"\e094"}.glyphicon-share-alt:before{content:"\e095"}.glyphicon-resize-full:before{content:"\e096"}.glyphicon-resize-small:before{content:"\e097"}.glyphicon-exclamation-sign:before{content:"\e101"}.glyphicon-gift:before{content:"\e102"}.glyphicon-leaf:before{content:"\e103"}.glyphicon-fire:before{content:"\e104"}.glyphicon-eye-open:before{content:"\e105"}.glyphicon-eye-close:before{content:"\e106"}.glyphicon-warning-sign:before{content:"\e107"}.glyphicon-plane:before{content:"\e108"}.glyphicon-calendar:before{content:"\e109"}.glyphicon-random:before{content:"\e110"}.glyphicon-comment:before{content:"\e111"}.glyphicon-magnet:before{content:"\e112"}.glyphicon-chevron-up:before{content:"\e113"}.glyphicon-chevron-down:before{content:"\e114"}.glyphicon-retweet:before{content:"\e115"}.glyphicon-shopping-cart:before{content:"\e116"}.glyphicon-folder-close:before{content:"\e117"}.glyphicon-folder-open:before{content:"\e118"}.glyphicon-resize-vertical:before{content:"\e119"}.glyphicon-resize-horizontal:before{content:"\e120"}.glyphicon-hdd:before{content:"\e121"}.glyphicon-bullhorn:before{content:"\e122"}.glyphicon-bell:before{content:"\e123"}.glyphicon-certificate:before{content:"\e124"}.glyphicon-thumbs-up:before{content:"\e125"}.glyphicon-thumbs-down:before{content:"\e126"}.glyphicon-hand-right:before{content:"\e127"}.glyphicon-hand-left:before{content:"\e128"}.glyphicon-hand-up:before{content:"\e129"}.glyphicon-hand-down:before{content:"\e130"}.glyphicon-circle-arrow-right:before{content:"\e131"}.glyphicon-circle-arrow-left:before{content:"\e132"}.glyphicon-circle-arrow-up:before{content:"\e133"}.glyphicon-circle-arrow-down:before{content:"\e134"}.glyphicon-globe:before{content:"\e135"}.glyphicon-wrench:before{content:"\e136"}.glyphicon-tasks:before{content:"\e137"}.glyphicon-filter:before{content:"\e138"}.glyphicon-briefcase:before{content:"\e139"}.glyphicon-fullscreen:before{content:"\e140"}.glyphicon-dashboard:before{content:"\e141"}.glyphicon-paperclip:before{content:"\e142"}.glyphicon-heart-empty:before{content:"\e143"}.glyphicon-link:before{content:"\e144"}.glyphicon-phone:before{content:"\e145"}.glyphicon-pushpin:before{content:"\e146"}.glyphicon-usd:before{content:"\e148"}.glyphicon-gbp:before{content:"\e149"}.glyphicon-sort:before{content:"\e150"}.glyphicon-sort-by-alphabet:before{content:"\e151"}.glyphicon-sort-by-alphabet-alt:before{content:"\e152"}.glyphicon-sort-by-order:before{content:"\e153"}.glyphicon-sort-by-order-alt:before{content:"\e154"}.glyphicon-sort-by-attributes:before{content:"\e155"}.glyphicon-sort-by-attributes-alt:before{content:"\e156"}.glyphicon-unchecked:before{content:"\e157"}.glyphicon-expand:before{content:"\e158"}.glyphicon-collapse-down:before{content:"\e159"}.glyphicon-collapse-up:before{content:"\e160"}.glyphicon-log-in:before{content:"\e161"}.glyphicon-flash:before{content:"\e162"}.glyphicon-log-out:before{content:"\e163"}.glyphicon-new-window:before{content:"\e164"}.glyphicon-record:before{content:"\e165"}.glyphicon-save:before{content:"\e166"}.glyphicon-open:before{content:"\e167"}.glyphicon-saved:before{content:"\e168"}.glyphicon-import:before{content:"\e169"}.glyphicon-export:before{content:"\e170"}.glyphicon-send:before{content:"\e171"}.glyphicon-floppy-disk:before{content:"\e172"}.glyphicon-floppy-saved:before{content:"\e173"}.glyphicon-floppy-remove:before{content:"\e174"}.glyphicon-floppy-save:before{content:"\e175"}.glyphicon-floppy-open:before{content:"\e176"}.glyphicon-credit-card:before{content:"\e177"}.glyphicon-transfer:before{content:"\e178"}.glyphicon-cutlery:before{content:"\e179"}.glyphicon-header:before{content:"\e180"}.glyphicon-compressed:before{content:"\e181"}.glyphicon-earphone:before{content:"\e182"}.glyphicon-phone-alt:before{content:"\e183"}.glyphicon-tower:before{content:"\e184"}.glyphicon-stats:before{content:"\e185"}.glyphicon-sd-video:before{content:"\e186"}.glyphicon-hd-video:before{content:"\e187"}.glyphicon-subtitles:before{content:"\e188"}.glyphicon-sound-stereo:before{content:"\e189"}.glyphicon-sound-dolby:before{content:"\e190"}.glyphicon-sound-5-1:before{content:"\e191"}.glyphicon-sound-6-1:before{content:"\e192"}.glyphicon-sound-7-1:before{content:"\e193"}.glyphicon-copyright-mark:before{content:"\e194"}.glyphicon-registration-mark:before{content:"\e195"}.glyphicon-cloud-download:before{content:"\e197"}.glyphicon-cloud-upload:before{content:"\e198"}.glyphicon-tree-conifer:before{content:"\e199"}.glyphicon-tree-deciduous:before{content:"\e200"}*{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}:before,:after{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}html{font-size:10px;-webkit-tap-highlight-color:rgba(0,0,0,0)}body{font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;line-height:1.42857143;color:#333;background-color:#fff}input,button,select,textarea{font-family:inherit;font-size:inherit;line-height:inherit}a{color:#337ab7;text-decoration:none}a:hover,a:focus{color:#23527c;text-decoration:underline}a:focus{outline:thin dotted;outline:5px auto -webkit-focus-ring-color;outline-offset:-2px}figure{margin:0}img{vertical-align:middle}.img-responsive,.thumbnail>img,.thumbnail a>img,.carousel-inner>.item>img,.carousel-inner>.item>a>img{display:block;max-width:100%;height:auto}.img-rounded{border-radius:6px}.img-thumbnail{display:inline-block;max-width:100%;height:auto;padding:4px;line-height:1.42857143;background-color:#fff;border:1px solid #ddd;border-radius:4px;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;transition:all .2s ease-in-out}.img-circle{border-radius:50%}hr{margin-top:20px;margin-bottom:20px;border:0;border-top:1px solid #eee}.sr-only{position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0,0,0,0);border:0}.sr-only-focusable:active,.sr-only-focusable:focus{position:static;width:auto;height:auto;margin:0;overflow:visible;clip:auto}h1,h2,h3,h4,h5,h6,.h1,.h2,.h3,.h4,.h5,.h6{font-family:inherit;font-weight:600;line-height:1.1;color:inherit}h1 small,h2 small,h3 small,h4 small,h5 small,h6 small,.h1 small,.h2 small,.h3 small,.h4 small,.h5 small,.h6 small,h1 .small,h2 .small,h3 .small,h4 .small,h5 .small,h6 .small,.h1 .small,.h2 .small,.h3 .small,.h4 .small,.h5 .small,.h6 .small{font-weight:400;line-height:1;color:#777}h1,.h1,h2,.h2,h3,.h3{margin-top:20px;margin-bottom:10px}h1 small,.h1 small,h2 small,.h2 small,h3 small,.h3 small,h1 .small,.h1 .small,h2 .small,.h2 .small,h3 .small,.h3 .small{font-size:65%}h4,.h4,h5,.h5,h6,.h6{margin-top:10px;margin-bottom:10px}h4 small,.h4 small,h5 small,.h5 small,h6 small,.h6 small,h4 .small,.h4 .small,h5 .small,.h5 .small,h6 .small,.h6 .small{font-size:75%}h1,.h1{font-size:36px}h2,.h2{font-size:30px}h3,.h3{font-size:24px}h4,.h4{font-size:18px}h5,.h5{font-size:14px}h6,.h6{font-size:12px}p{margin:0 0 10px}.lead{margin-bottom:20px;font-size:16px;font-weight:300;line-height:1.4}@media (min-width:768px){.lead{font-size:21px}}small,.small{font-size:85%}mark,.mark{padding:.2em;background-color:#fcf8e3}.text-left{text-align:left}.text-right{text-align:right}.text-center{text-align:center}.text-justify{text-align:justify}.text-nowrap{white-space:nowrap}.text-lowercase{text-transform:lowercase}.text-uppercase{text-transform:uppercase}.text-capitalize{text-transform:capitalize}.text-muted{color:#777}.text-primary{color:#337ab7}a.text-primary:hover{color:#286090}.text-success{color:#3c763d}a.text-success:hover{color:#2b542c}.text-info{color:#31708f}a.text-info:hover{color:#245269}.text-warning{color:#8a6d3b}a.text-warning:hover{color:#66512c}.text-danger{color:#a94442}a.text-danger:hover{color:#843534}.bg-primary{color:#fff;background-color:#337ab7}a.bg-primary:hover{background-color:#286090}.bg-success{background-color:#dff0d8}a.bg-success:hover{background-color:#c1e2b3}.bg-info{background-color:#d9edf7}a.bg-info:hover{background-color:#afd9ee}.bg-warning{background-color:#fcf8e3}a.bg-warning:hover{background-color:#f7ecb5}.bg-danger{background-color:#f2dede}a.bg-danger:hover{background-color:#e4b9b9}.page-header{padding-bottom:9px;margin:40px 0 20px;border-bottom:1px solid #eee}ul,ol{margin-top:0;margin-bottom:10px}ul ul,ol ul,ul ol,ol ol{margin-bottom:0}.list-unstyled{padding-left:0;list-style:none}.list-inline{padding-left:0;margin-left:-5px;list-style:none}.list-inline>li{display:inline-block;padding-right:5px;padding-left:5px}dl{margin-top:0;margin-bottom:20px}dt,dd{line-height:1.42857143}dt{font-weight:700}dd{margin-left:0}@media (min-width:768px){.dl-horizontal dt{float:left;width:160px;overflow:hidden;clear:left;text-align:right;text-overflow:ellipsis;white-space:nowrap}.dl-horizontal dd{margin-left:180px}}abbr[title],abbr[data-original-title]{cursor:help;border-bottom:1px dotted #777}.initialism{font-size:90%;text-transform:uppercase}blockquote{padding:10px 20px;margin:0 0 20px;font-size:17.5px;border-left:5px solid #eee}blockquote p:last-child,blockquote ul:last-child,blockquote ol:last-child{margin-bottom:0}blockquote footer,blockquote small,blockquote .small{display:block;font-size:80%;line-height:1.42857143;color:#777}blockquote footer:before,blockquote small:before,blockquote .small:before{content:'\2014 \00A0'}.blockquote-reverse,blockquote.pull-right{padding-right:15px;padding-left:0;text-align:right;border-right:5px solid #eee;border-left:0}.blockquote-reverse footer:before,blockquote.pull-right footer:before,.blockquote-reverse small:before,blockquote.pull-right small:before,.blockquote-reverse .small:before,blockquote.pull-right .small:before{content:''}.blockquote-reverse footer:after,blockquote.pull-right footer:after,.blockquote-reverse small:after,blockquote.pull-right small:after,.blockquote-reverse .small:after,blockquote.pull-right .small:after{content:'\00A0 \2014'}address{margin-bottom:20px;font-style:normal;line-height:1.42857143}code,kbd,pre,samp{font-family:Menlo,Monaco,Consolas,"Courier New",monospace}code{padding:2px 4px;font-size:90%;color:#c7254e;background-color:#f9f2f4;border-radius:4px}kbd{padding:2px 4px;font-size:90%;color:#fff;background-color:#333;border-radius:3px;-webkit-box-shadow:inset 0 -1px 0 rgba(0,0,0,.25);box-shadow:inset 0 -1px 0 rgba(0,0,0,.25)}kbd kbd{padding:0;font-size:100%;font-weight:700;-webkit-box-shadow:none;box-shadow:none}pre{display:block;padding:9.5px;margin:0 0 10px;font-size:13px;line-height:1.42857143;color:#333;word-break:break-all;word-wrap:break-word;background-color:#f5f5f5;border:1px solid #ccc;border-radius:4px}pre code{padding:0;font-size:inherit;color:inherit;white-space:pre-wrap;background-color:transparent;border-radius:0}.pre-scrollable{max-height:340px;overflow-y:scroll}.containernbt{padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}@media (min-width:768px){.containernbt{width:750px}}@media (min-width:992px){.containernbt{width:970px}}@media (min-width:1200px){.containernbt{width:1170px}}.container-fluid{padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}.row{margin-right:-15px;margin-left:-15px}.col-xs-1,.col-sm-1,.col-md-1,.col-lg-1,.col-xs-2,.col-sm-2,.col-md-2,.col-lg-2,.col-xs-3,.col-sm-3,.col-md-3,.col-lg-3,.col-xs-4,.col-sm-4,.col-md-4,.col-lg-4,.col-xs-5,.col-sm-5,.col-md-5,.col-lg-5,.col-xs-6,.col-sm-6,.col-md-6,.col-lg-6,.col-xs-7,.col-sm-7,.col-md-7,.col-lg-7,.col-xs-8,.col-sm-8,.col-md-8,.col-lg-8,.col-xs-9,.col-sm-9,.col-md-9,.col-lg-9,.col-xs-10,.col-sm-10,.col-md-10,.col-lg-10,.col-xs-11,.col-sm-11,.col-md-11,.col-lg-11,.col-xs-12,.col-sm-12,.col-md-12,.col-lg-12{position:relative;min-height:1px;padding-right:15px;padding-left:15px}.col-xs-1,.col-xs-2,.col-xs-3,.col-xs-4,.col-xs-5,.col-xs-6,.col-xs-7,.col-xs-8,.col-xs-9,.col-xs-10,.col-xs-11,.col-xs-12{float:left}.col-xs-12{width:100%}.col-xs-11{width:91.66666667%}.col-xs-10{width:83.33333333%}.col-xs-9{width:75%}.col-xs-8{width:66.66666667%}.col-xs-7{width:58.33333333%}.col-xs-6{width:50%}.col-xs-5{width:41.66666667%}.col-xs-4{width:33.33333333%}.col-xs-3{width:25%}.col-xs-2{width:16.66666667%}.col-xs-1{width:8.33333333%}.col-xs-pull-12{right:100%}.col-xs-pull-11{right:91.66666667%}.col-xs-pull-10{right:83.33333333%}.col-xs-pull-9{right:75%}.col-xs-pull-8{right:66.66666667%}.col-xs-pull-7{right:58.33333333%}.col-xs-pull-6{right:50%}.col-xs-pull-5{right:41.66666667%}.col-xs-pull-4{right:33.33333333%}.col-xs-pull-3{right:25%}.col-xs-pull-2{right:16.66666667%}.col-xs-pull-1{right:8.33333333%}.col-xs-pull-0{right:auto}.col-xs-push-12{left:100%}.col-xs-push-11{left:91.66666667%}.col-xs-push-10{left:83.33333333%}.col-xs-push-9{left:75%}.col-xs-push-8{left:66.66666667%}.col-xs-push-7{left:58.33333333%}.col-xs-push-6{left:50%}.col-xs-push-5{left:41.66666667%}.col-xs-push-4{left:33.33333333%}.col-xs-push-3{left:25%}.col-xs-push-2{left:16.66666667%}.col-xs-push-1{left:8.33333333%}.col-xs-push-0{left:auto}.col-xs-offset-12{margin-left:100%}.col-xs-offset-11{margin-left:91.66666667%}.col-xs-offset-10{margin-left:83.33333333%}.col-xs-offset-9{margin-left:75%}.col-xs-offset-8{margin-left:66.66666667%}.col-xs-offset-7{margin-left:58.33333333%}.col-xs-offset-6{margin-left:50%}.col-xs-offset-5{margin-left:41.66666667%}.col-xs-offset-4{margin-left:33.33333333%}.col-xs-offset-3{margin-left:25%}.col-xs-offset-2{margin-left:16.66666667%}.col-xs-offset-1{margin-left:8.33333333%}.col-xs-offset-0{margin-left:0}@media (min-width:768px){.col-sm-1,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9,.col-sm-10,.col-sm-11,.col-sm-12{float:left}.col-sm-12{width:100%}.col-sm-11{width:91.66666667%}.col-sm-10{width:83.33333333%}.col-sm-9{width:75%}.col-sm-8{width:66.66666667%}.col-sm-7{width:58.33333333%}.col-sm-6{width:50%}.col-sm-5{width:41.66666667%}.col-sm-4{width:33.33333333%}.col-sm-3{width:25%}.col-sm-2{width:16.66666667%}.col-sm-1{width:8.33333333%}.col-sm-pull-12{right:100%}.col-sm-pull-11{right:91.66666667%}.col-sm-pull-10{right:83.33333333%}.col-sm-pull-9{right:75%}.col-sm-pull-8{right:66.66666667%}.col-sm-pull-7{right:58.33333333%}.col-sm-pull-6{right:50%}.col-sm-pull-5{right:41.66666667%}.col-sm-pull-4{right:33.33333333%}.col-sm-pull-3{right:25%}.col-sm-pull-2{right:16.66666667%}.col-sm-pull-1{right:8.33333333%}.col-sm-pull-0{right:auto}.col-sm-push-12{left:100%}.col-sm-push-11{left:91.66666667%}.col-sm-push-10{left:83.33333333%}.col-sm-push-9{left:75%}.col-sm-push-8{left:66.66666667%}.col-sm-push-7{left:58.33333333%}.col-sm-push-6{left:50%}.col-sm-push-5{left:41.66666667%}.col-sm-push-4{left:33.33333333%}.col-sm-push-3{left:25%}.col-sm-push-2{left:16.66666667%}.col-sm-push-1{left:8.33333333%}.col-sm-push-0{left:auto}.col-sm-offset-12{margin-left:100%}.col-sm-offset-11{margin-left:91.66666667%}.col-sm-offset-10{margin-left:83.33333333%}.col-sm-offset-9{margin-left:75%}.col-sm-offset-8{margin-left:66.66666667%}.col-sm-offset-7{margin-left:58.33333333%}.col-sm-offset-6{margin-left:50%}.col-sm-offset-5{margin-left:41.66666667%}.col-sm-offset-4{margin-left:33.33333333%}.col-sm-offset-3{margin-left:25%}.col-sm-offset-2{margin-left:16.66666667%}.col-sm-offset-1{margin-left:8.33333333%}.col-sm-offset-0{margin-left:0}}@media (min-width:992px){.col-md-1,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9,.col-md-10,.col-md-11,.col-md-12{float:left}.col-md-12{width:100%}.col-md-11{width:91.66666667%}.col-md-10{width:83.33333333%}.col-md-9{width:75%}.col-md-8{width:66.66666667%}.col-md-7{width:58.33333333%}.col-md-6{width:50%}.col-md-5{width:41.66666667%}.col-md-4{width:33.33333333%}.col-md-3{width:25%}.col-md-2{width:16.66666667%}.col-md-1{width:8.33333333%}.col-md-pull-12{right:100%}.col-md-pull-11{right:91.66666667%}.col-md-pull-10{right:83.33333333%}.col-md-pull-9{right:75%}.col-md-pull-8{right:66.66666667%}.col-md-pull-7{right:58.33333333%}.col-md-pull-6{right:50%}.col-md-pull-5{right:41.66666667%}.col-md-pull-4{right:33.33333333%}.col-md-pull-3{right:25%}.col-md-pull-2{right:16.66666667%}.col-md-pull-1{right:8.33333333%}.col-md-pull-0{right:auto}.col-md-push-12{left:100%}.col-md-push-11{left:91.66666667%}.col-md-push-10{left:83.33333333%}.col-md-push-9{left:75%}.col-md-push-8{left:66.66666667%}.col-md-push-7{left:58.33333333%}.col-md-push-6{left:50%}.col-md-push-5{left:41.66666667%}.col-md-push-4{left:33.33333333%}.col-md-push-3{left:25%}.col-md-push-2{left:16.66666667%}.col-md-push-1{left:8.33333333%}.col-md-push-0{left:auto}.col-md-offset-12{margin-left:100%}.col-md-offset-11{margin-left:91.66666667%}.col-md-offset-10{margin-left:83.33333333%}.col-md-offset-9{margin-left:75%}.col-md-offset-8{margin-left:66.66666667%}.col-md-offset-7{margin-left:58.33333333%}.col-md-offset-6{margin-left:50%}.col-md-offset-5{margin-left:41.66666667%}.col-md-offset-4{margin-left:33.33333333%}.col-md-offset-3{margin-left:25%}.col-md-offset-2{margin-left:16.66666667%}.col-md-offset-1{margin-left:8.33333333%}.col-md-offset-0{margin-left:0}}@media (min-width:1200px){.col-lg-1,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9,.col-lg-10,.col-lg-11,.col-lg-12{float:left}.col-lg-12{width:100%}.col-lg-11{width:91.66666667%}.col-lg-10{width:83.33333333%}.col-lg-9{width:75%}.col-lg-8{width:66.66666667%}.col-lg-7{width:58.33333333%}.col-lg-6{width:50%}.col-lg-5{width:41.66666667%}.col-lg-4{width:33.33333333%}.col-lg-3{width:25%}.col-lg-2{width:16.66666667%}.col-lg-1{width:8.33333333%}.col-lg-pull-12{right:100%}.col-lg-pull-11{right:91.66666667%}.col-lg-pull-10{right:83.33333333%}.col-lg-pull-9{right:75%}.col-lg-pull-8{right:66.66666667%}.col-lg-pull-7{right:58.33333333%}.col-lg-pull-6{right:50%}.col-lg-pull-5{right:41.66666667%}.col-lg-pull-4{right:33.33333333%}.col-lg-pull-3{right:25%}.col-lg-pull-2{right:16.66666667%}.col-lg-pull-1{right:8.33333333%}.col-lg-pull-0{right:auto}.col-lg-push-12{left:100%}.col-lg-push-11{left:91.66666667%}.col-lg-push-10{left:83.33333333%}.col-lg-push-9{left:75%}.col-lg-push-8{left:66.66666667%}.col-lg-push-7{left:58.33333333%}.col-lg-push-6{left:50%}.col-lg-push-5{left:41.66666667%}.col-lg-push-4{left:33.33333333%}.col-lg-push-3{left:25%}.col-lg-push-2{left:16.66666667%}.col-lg-push-1{left:8.33333333%}.col-lg-push-0{left:auto}.col-lg-offset-12{margin-left:100%}.col-lg-offset-11{margin-left:91.66666667%}.col-lg-offset-10{margin-left:83.33333333%}.col-lg-offset-9{margin-left:75%}.col-lg-offset-8{margin-left:66.66666667%}.col-lg-offset-7{margin-left:58.33333333%}.col-lg-offset-6{margin-left:50%}.col-lg-offset-5{margin-left:41.66666667%}.col-lg-offset-4{margin-left:33.33333333%}.col-lg-offset-3{margin-left:25%}.col-lg-offset-2{margin-left:16.66666667%}.col-lg-offset-1{margin-left:8.33333333%}.col-lg-offset-0{margin-left:0}}table{background-color:transparent}caption{padding-top:8px;padding-bottom:8px;color:#777;text-align:left}th{text-align:left}.table{width:100%;max-width:100%;margin-bottom:20px}.table>thead>tr>th,.table>tbody>tr>th,.table>tfoot>tr>th,.table>thead>tr>td,.table>tbody>tr>td,.table>tfoot>tr>td{padding:8px;line-height:1.42857143;vertical-align:top;border-top:1px solid #ddd}.table>thead>tr>th{vertical-align:bottom;border-bottom:2px solid #ddd}.table>caption+thead>tr:first-child>th,.table>colgroup+thead>tr:first-child>th,.table>thead:first-child>tr:first-child>th,.table>caption+thead>tr:first-child>td,.table>colgroup+thead>tr:first-child>td,.table>thead:first-child>tr:first-child>td{border-top:0}.table>tbody+tbody{border-top:2px solid #ddd}.table .table{background-color:#fff}.table-condensed>thead>tr>th,.table-condensed>tbody>tr>th,.table-condensed>tfoot>tr>th,.table-condensed>thead>tr>td,.table-condensed>tbody>tr>td,.table-condensed>tfoot>tr>td{padding:5px}.table-bordered{border:1px solid #ddd}.table-bordered>thead>tr>th,.table-bordered>tbody>tr>th,.table-bordered>tfoot>tr>th,.table-bordered>thead>tr>td,.table-bordered>tbody>tr>td,.table-bordered>tfoot>tr>td{border:1px solid #ddd}.table-bordered>thead>tr>th,.table-bordered>thead>tr>td{border-bottom-width:2px}.table-striped>tbody>tr:nth-child(odd){background-color:#f9f9f9}.table-hover>tbody>tr:hover{background-color:#f5f5f5}table col[class*=col-]{position:static;display:table-column;float:none}table td[class*=col-],table th[class*=col-]{position:static;display:table-cell;float:none}.table>thead>tr>td.active,.table>tbody>tr>td.active,.table>tfoot>tr>td.active,.table>thead>tr>th.active,.table>tbody>tr>th.active,.table>tfoot>tr>th.active,.table>thead>tr.active>td,.table>tbody>tr.active>td,.table>tfoot>tr.active>td,.table>thead>tr.active>th,.table>tbody>tr.active>th,.table>tfoot>tr.active>th{background-color:#f5f5f5}.table-hover>tbody>tr>td.active:hover,.table-hover>tbody>tr>th.active:hover,.table-hover>tbody>tr.active:hover>td,.table-hover>tbody>tr:hover>.active,.table-hover>tbody>tr.active:hover>th{background-color:#e8e8e8}.table>thead>tr>td.success,.table>tbody>tr>td.success,.table>tfoot>tr>td.success,.table>thead>tr>th.success,.table>tbody>tr>th.success,.table>tfoot>tr>th.success,.table>thead>tr.success>td,.table>tbody>tr.success>td,.table>tfoot>tr.success>td,.table>thead>tr.success>th,.table>tbody>tr.success>th,.table>tfoot>tr.success>th{background-color:#dff0d8}.table-hover>tbody>tr>td.success:hover,.table-hover>tbody>tr>th.success:hover,.table-hover>tbody>tr.success:hover>td,.table-hover>tbody>tr:hover>.success,.table-hover>tbody>tr.success:hover>th{background-color:#d0e9c6}.table>thead>tr>td.info,.table>tbody>tr>td.info,.table>tfoot>tr>td.info,.table>thead>tr>th.info,.table>tbody>tr>th.info,.table>tfoot>tr>th.info,.table>thead>tr.info>td,.table>tbody>tr.info>td,.table>tfoot>tr.info>td,.table>thead>tr.info>th,.table>tbody>tr.info>th,.table>tfoot>tr.info>th{background-color:#d9edf7}.table-hover>tbody>tr>td.info:hover,.table-hover>tbody>tr>th.info:hover,.table-hover>tbody>tr.info:hover>td,.table-hover>tbody>tr:hover>.info,.table-hover>tbody>tr.info:hover>th{background-color:#c4e3f3}.table>thead>tr>td.warning,.table>tbody>tr>td.warning,.table>tfoot>tr>td.warning,.table>thead>tr>th.warning,.table>tbody>tr>th.warning,.table>tfoot>tr>th.warning,.table>thead>tr.warning>td,.table>tbody>tr.warning>td,.table>tfoot>tr.warning>td,.table>thead>tr.warning>th,.table>tbody>tr.warning>th,.table>tfoot>tr.warning>th{background-color:#fcf8e3}.table-hover>tbody>tr>td.warning:hover,.table-hover>tbody>tr>th.warning:hover,.table-hover>tbody>tr.warning:hover>td,.table-hover>tbody>tr:hover>.warning,.table-hover>tbody>tr.warning:hover>th{background-color:#faf2cc}.table>thead>tr>td.danger,.table>tbody>tr>td.danger,.table>tfoot>tr>td.danger,.table>thead>tr>th.danger,.table>tbody>tr>th.danger,.table>tfoot>tr>th.danger,.table>thead>tr.danger>td,.table>tbody>tr.danger>td,.table>tfoot>tr.danger>td,.table>thead>tr.danger>th,.table>tbody>tr.danger>th,.table>tfoot>tr.danger>th{background-color:#f2dede}.table-hover>tbody>tr>td.danger:hover,.table-hover>tbody>tr>th.danger:hover,.table-hover>tbody>tr.danger:hover>td,.table-hover>tbody>tr:hover>.danger,.table-hover>tbody>tr.danger:hover>th{background-color:#ebcccc}.table-responsive{min-height:.01%;overflow-x:auto}@media screen and (max-width:767px){.table-responsive{width:100%;margin-bottom:15px;overflow-y:hidden;-ms-overflow-style:-ms-autohiding-scrollbar;border:1px solid #ddd}.table-responsive>.table{margin-bottom:0}.table-responsive>.table>thead>tr>th,.table-responsive>.table>tbody>tr>th,.table-responsive>.table>tfoot>tr>th,.table-responsive>.table>thead>tr>td,.table-responsive>.table>tbody>tr>td,.table-responsive>.table>tfoot>tr>td{white-space:nowrap}.table-responsive>.table-bordered{border:0}.table-responsive>.table-bordered>thead>tr>th:first-child,.table-responsive>.table-bordered>tbody>tr>th:first-child,.table-responsive>.table-bordered>tfoot>tr>th:first-child,.table-responsive>.table-bordered>thead>tr>td:first-child,.table-responsive>.table-bordered>tbody>tr>td:first-child,.table-responsive>.table-bordered>tfoot>tr>td:first-child{border-left:0}.table-responsive>.table-bordered>thead>tr>th:last-child,.table-responsive>.table-bordered>tbody>tr>th:last-child,.table-responsive>.table-bordered>tfoot>tr>th:last-child,.table-responsive>.table-bordered>thead>tr>td:last-child,.table-responsive>.table-bordered>tbody>tr>td:last-child,.table-responsive>.table-bordered>tfoot>tr>td:last-child{border-right:0}.table-responsive>.table-bordered>tbody>tr:last-child>th,.table-responsive>.table-bordered>tfoot>tr:last-child>th,.table-responsive>.table-bordered>tbody>tr:last-child>td,.table-responsive>.table-bordered>tfoot>tr:last-child>td{border-bottom:0}}fieldset{min-width:0;padding:0;margin:0;border:0}legend{display:block;width:100%;padding:0;margin-bottom:20px;font-size:21px;line-height:inherit;color:#333;border:0;border-bottom:1px solid #e5e5e5}label{display:inline-block;max-width:100%;margin-bottom:5px;font-weight:700}input[type=search]{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}input[type=radio],input[type=checkbox]{margin:4px 0 0;margin-top:1px \9;line-height:normal}input[type=file]{display:block}input[type=range]{display:block;width:100%}select[multiple],select[size]{height:auto}input[type=file]:focus,input[type=radio]:focus,input[type=checkbox]:focus{outline:thin dotted;outline:5px auto -webkit-focus-ring-color;outline-offset:-2px}output{display:block;padding-top:7px;font-size:14px;line-height:1.42857143;color:#555}.form-control{display:block;width:100%;height:34px;padding:6px 12px;font-size:14px;line-height:1.42857143;color:#555;background-color:#fff;background-image:none;border:1px solid #ccc;border-radius:4px;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);box-shadow:inset 0 1px 1px rgba(0,0,0,.075);-webkit-transition:border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;-o-transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s;transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s}.form-control:focus{border-color:#66afe9;outline:0;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6)}.form-control::-moz-placeholder{color:#999;opacity:1}.form-control:-ms-input-placeholder{color:#999}.form-control::-webkit-input-placeholder{color:#999}.form-control[disabled],.form-control[readonly],fieldset[disabled] .form-control{cursor:not-allowed;background-color:#eee;opacity:1}textarea.form-control{height:auto}input[type=search]{-webkit-appearance:none}@media screen and (-webkit-min-device-pixel-ratio:0){input[type=date],input[type=time],input[type=datetime-local],input[type=month]{line-height:34px}input[type=date].input-sm,input[type=time].input-sm,input[type=datetime-local].input-sm,input[type=month].input-sm{line-height:30px}input[type=date].input-lg,input[type=time].input-lg,input[type=datetime-local].input-lg,input[type=month].input-lg{line-height:46px}}.form-group{margin-bottom:15px}.radio,.checkbox{position:relative;display:block;margin-top:10px;margin-bottom:10px}.radio label,.checkbox label{min-height:20px;padding-left:20px;margin-bottom:0;font-weight:400;cursor:pointer}.radio input[type=radio],.radio-inline input[type=radio],.checkbox input[type=checkbox],.checkbox-inline input[type=checkbox]{position:absolute;margin-top:4px \9;margin-left:-20px}.radio+.radio,.checkbox+.checkbox{margin-top:-5px}.radio-inline,.checkbox-inline{display:inline-block;padding-left:20px;margin-bottom:0;font-weight:400;vertical-align:middle;cursor:pointer}.radio-inline+.radio-inline,.checkbox-inline+.checkbox-inline{margin-top:0;margin-left:10px}input[type=radio][disabled],input[type=checkbox][disabled],input[type=radio].disabled,input[type=checkbox].disabled,fieldset[disabled] input[type=radio],fieldset[disabled] input[type=checkbox]{cursor:not-allowed}.radio-inline.disabled,.checkbox-inline.disabled,fieldset[disabled] .radio-inline,fieldset[disabled] .checkbox-inline{cursor:not-allowed}.radio.disabled label,.checkbox.disabled label,fieldset[disabled] .radio label,fieldset[disabled] .checkbox label{cursor:not-allowed}.form-control-static{padding-top:7px;padding-bottom:7px;margin-bottom:0}.form-control-static.input-lg,.form-control-static.input-sm{padding-right:0;padding-left:0}.input-sm,.form-group-sm .form-control{height:30px;padding:5px 10px;font-size:12px;line-height:1.5;border-radius:3px}select.input-sm,select.form-group-sm .form-control{height:30px;line-height:30px}textarea.input-sm,textarea.form-group-sm .form-control,select[multiple].input-sm,select[multiple].form-group-sm .form-control{height:auto}.input-lg,.form-group-lg .form-control{height:46px;padding:10px 16px;font-size:18px;line-height:1.33;border-radius:6px}select.input-lg,select.form-group-lg .form-control{height:46px;line-height:46px}textarea.input-lg,textarea.form-group-lg .form-control,select[multiple].input-lg,select[multiple].form-group-lg .form-control{height:auto}.has-feedback{position:relative}.has-feedback .form-control{padding-right:42.5px}.form-control-feedback{position:absolute;top:0;right:0;z-index:2;display:block;width:34px;height:34px;line-height:34px;text-align:center;pointer-events:none}.input-lg+.form-control-feedback{width:46px;height:46px;line-height:46px}.input-sm+.form-control-feedback{width:30px;height:30px;line-height:30px}.has-success .help-block,.has-success .control-label,.has-success .radio,.has-success .checkbox,.has-success .radio-inline,.has-success .checkbox-inline,.has-success.radio label,.has-success.checkbox label,.has-success.radio-inline label,.has-success.checkbox-inline label{color:#3c763d}.has-success .form-control{border-color:#3c763d;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);box-shadow:inset 0 1px 1px rgba(0,0,0,.075)}.has-success .form-control:focus{border-color:#2b542c;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #67b168;box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #67b168}.has-success .input-group-addon{color:#3c763d;background-color:#dff0d8;border-color:#3c763d}.has-success .form-control-feedback{color:#3c763d}.has-warning .help-block,.has-warning .control-label,.has-warning .radio,.has-warning .checkbox,.has-warning .radio-inline,.has-warning .checkbox-inline,.has-warning.radio label,.has-warning.checkbox label,.has-warning.radio-inline label,.has-warning.checkbox-inline label{color:#8a6d3b}.has-warning .form-control{border-color:#8a6d3b;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);box-shadow:inset 0 1px 1px rgba(0,0,0,.075)}.has-warning .form-control:focus{border-color:#66512c;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #c0a16b;box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #c0a16b}.has-warning .input-group-addon{color:#8a6d3b;background-color:#fcf8e3;border-color:#8a6d3b}.has-warning .form-control-feedback{color:#8a6d3b}.has-error .help-block,.has-error .control-label,.has-error .radio,.has-error .checkbox,.has-error .radio-inline,.has-error .checkbox-inline,.has-error.radio label,.has-error.checkbox label,.has-error.radio-inline label,.has-error.checkbox-inline label{color:#a94442}.has-error .form-control{border-color:#a94442;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);box-shadow:inset 0 1px 1px rgba(0,0,0,.075)}.has-error .form-control:focus{border-color:#843534;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #ce8483;box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #ce8483}.has-error .input-group-addon{color:#a94442;background-color:#f2dede;border-color:#a94442}.has-error .form-control-feedback{color:#a94442}.has-feedback label~.form-control-feedback{top:25px}.has-feedback label.sr-only~.form-control-feedback{top:0}.help-block{display:block;margin-top:5px;margin-bottom:10px;color:#737373}@media (min-width:768px){.form-inline .form-group{display:inline-block;margin-bottom:0;vertical-align:middle}.form-inline .form-control{display:inline-block;width:auto;vertical-align:middle}.form-inline .form-control-static{display:inline-block}.form-inline .input-group{display:inline-table;vertical-align:middle}.form-inline .input-group .input-group-addon,.form-inline .input-group .input-group-btn,.form-inline .input-group .form-control{width:auto}.form-inline .input-group>.form-control{width:100%}.form-inline .control-label{margin-bottom:0;vertical-align:middle}.form-inline .radio,.form-inline .checkbox{display:inline-block;margin-top:0;margin-bottom:0;vertical-align:middle}.form-inline .radio label,.form-inline .checkbox label{padding-left:0}.form-inline .radio input[type=radio],.form-inline .checkbox input[type=checkbox]{position:relative;margin-left:0}.form-inline .has-feedback .form-control-feedback{top:0}}.form-horizontal .radio,.form-horizontal .checkbox,.form-horizontal .radio-inline,.form-horizontal .checkbox-inline{padding-top:7px;margin-top:0;margin-bottom:0}.form-horizontal .radio,.form-horizontal .checkbox{min-height:27px}.form-horizontal .form-group{margin-right:-15px;margin-left:-15px}@media (min-width:768px){.form-horizontal .control-label{padding-top:7px;margin-bottom:0;text-align:right}}.form-horizontal .has-feedback .form-control-feedback{right:15px}@media (min-width:768px){.form-horizontal .form-group-lg .control-label{padding-top:14.3px}}@media (min-width:768px){.form-horizontal .form-group-sm .control-label{padding-top:6px}}.btn{display:inline-block;padding:6px 12px;margin-bottom:0;font-size:14px;font-weight:400;line-height:1.42857143;text-align:center;white-space:nowrap;vertical-align:middle;-ms-touch-action:manipulation;touch-action:manipulation;cursor:pointer;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background-image:none;border:1px solid transparent;border-radius:4px}.btn:focus,.btn:active:focus,.btn.active:focus,.btn.focus,.btn:active.focus,.btn.active.focus{outline:thin dotted;outline:5px auto -webkit-focus-ring-color;outline-offset:-2px}.btn:hover,.btn:focus,.btn.focus{color:#333;text-decoration:none}.btn:active,.btn.active{background-image:none;outline:0;-webkit-box-shadow:inset 0 3px 5px rgba(0,0,0,.125);box-shadow:inset 0 3px 5px rgba(0,0,0,.125)}.btn.disabled,.btn[disabled],fieldset[disabled] .btn{pointer-events:none;cursor:not-allowed;filter:alpha(opacity=65);-webkit-box-shadow:none;box-shadow:none;opacity:.65}.btn-default{color:#333;background-color:#fff;border-color:#ccc}.btn-default:hover,.btn-default:focus,.btn-default.focus,.btn-default:active,.btn-default.active,.open>.dropdown-toggle.btn-default{color:#333;background-color:#e6e6e6;border-color:#adadad}.btn-default:active,.btn-default.active,.open>.dropdown-toggle.btn-default{background-image:none}.btn-default.disabled,.btn-default[disabled],fieldset[disabled] .btn-default,.btn-default.disabled:hover,.btn-default[disabled]:hover,fieldset[disabled] .btn-default:hover,.btn-default.disabled:focus,.btn-default[disabled]:focus,fieldset[disabled] .btn-default:focus,.btn-default.disabled.focus,.btn-default[disabled].focus,fieldset[disabled] .btn-default.focus,.btn-default.disabled:active,.btn-default[disabled]:active,fieldset[disabled] .btn-default:active,.btn-default.disabled.active,.btn-default[disabled].active,fieldset[disabled] .btn-default.active{background-color:#fff;border-color:#ccc}.btn-default .badge{color:#fff;background-color:#333}.btn-primary{color:#fff;background-color:#337ab7;border-color:#2e6da4}.btn-primary:hover,.btn-primary:focus,.btn-primary.focus,.btn-primary:active,.btn-primary.active,.open>.dropdown-toggle.btn-primary{color:#fff;background-color:#286090;border-color:#204d74}.btn-primary:active,.btn-primary.active,.open>.dropdown-toggle.btn-primary{background-image:none}.btn-primary.disabled,.btn-primary[disabled],fieldset[disabled] .btn-primary,.btn-primary.disabled:hover,.btn-primary[disabled]:hover,fieldset[disabled] .btn-primary:hover,.btn-primary.disabled:focus,.btn-primary[disabled]:focus,fieldset[disabled] .btn-primary:focus,.btn-primary.disabled.focus,.btn-primary[disabled].focus,fieldset[disabled] .btn-primary.focus,.btn-primary.disabled:active,.btn-primary[disabled]:active,fieldset[disabled] .btn-primary:active,.btn-primary.disabled.active,.btn-primary[disabled].active,fieldset[disabled] .btn-primary.active{background-color:#337ab7;border-color:#2e6da4}.btn-primary .badge{color:#337ab7;background-color:#fff}.btn-success{color:#fff;background-color:#5cb85c;border-color:#4cae4c}.btn-success:hover,.btn-success:focus,.btn-success.focus,.btn-success:active,.btn-success.active,.open>.dropdown-toggle.btn-success{color:#fff;background-color:#449d44;border-color:#398439}.btn-success:active,.btn-success.active,.open>.dropdown-toggle.btn-success{background-image:none}.btn-success.disabled,.btn-success[disabled],fieldset[disabled] .btn-success,.btn-success.disabled:hover,.btn-success[disabled]:hover,fieldset[disabled] .btn-success:hover,.btn-success.disabled:focus,.btn-success[disabled]:focus,fieldset[disabled] .btn-success:focus,.btn-success.disabled.focus,.btn-success[disabled].focus,fieldset[disabled] .btn-success.focus,.btn-success.disabled:active,.btn-success[disabled]:active,fieldset[disabled] .btn-success:active,.btn-success.disabled.active,.btn-success[disabled].active,fieldset[disabled] .btn-success.active{background-color:#5cb85c;border-color:#4cae4c}.btn-success .badge{color:#5cb85c;background-color:#fff}.btn-info{color:#fff;background-color:#5bc0de;border-color:#46b8da}.btn-info:hover,.btn-info:focus,.btn-info.focus,.btn-info:active,.btn-info.active,.open>.dropdown-toggle.btn-info{color:#fff;background-color:#31b0d5;border-color:#269abc}.btn-info:active,.btn-info.active,.open>.dropdown-toggle.btn-info{background-image:none}.btn-info.disabled,.btn-info[disabled],fieldset[disabled] .btn-info,.btn-info.disabled:hover,.btn-info[disabled]:hover,fieldset[disabled] .btn-info:hover,.btn-info.disabled:focus,.btn-info[disabled]:focus,fieldset[disabled] .btn-info:focus,.btn-info.disabled.focus,.btn-info[disabled].focus,fieldset[disabled] .btn-info.focus,.btn-info.disabled:active,.btn-info[disabled]:active,fieldset[disabled] .btn-info:active,.btn-info.disabled.active,.btn-info[disabled].active,fieldset[disabled] .btn-info.active{background-color:#5bc0de;border-color:#46b8da}.btn-info .badge{color:#5bc0de;background-color:#fff}.btn-warning{color:#fff;background-color:#f0ad4e;border-color:#eea236}.btn-warning:hover,.btn-warning:focus,.btn-warning.focus,.btn-warning:active,.btn-warning.active,.open>.dropdown-toggle.btn-warning{color:#fff;background-color:#ec971f;border-color:#d58512}.btn-warning:active,.btn-warning.active,.open>.dropdown-toggle.btn-warning{background-image:none}.btn-warning.disabled,.btn-warning[disabled],fieldset[disabled] .btn-warning,.btn-warning.disabled:hover,.btn-warning[disabled]:hover,fieldset[disabled] .btn-warning:hover,.btn-warning.disabled:focus,.btn-warning[disabled]:focus,fieldset[disabled] .btn-warning:focus,.btn-warning.disabled.focus,.btn-warning[disabled].focus,fieldset[disabled] .btn-warning.focus,.btn-warning.disabled:active,.btn-warning[disabled]:active,fieldset[disabled] .btn-warning:active,.btn-warning.disabled.active,.btn-warning[disabled].active,fieldset[disabled] .btn-warning.active{background-color:#f0ad4e;border-color:#eea236}.btn-warning .badge{color:#f0ad4e;background-color:#fff}.btn-danger{color:#fff;background-color:#d9534f;border-color:#d43f3a}.btn-danger:hover,.btn-danger:focus,.btn-danger.focus,.btn-danger:active,.btn-danger.active,.open>.dropdown-toggle.btn-danger{color:#fff;background-color:#c9302c;border-color:#ac2925}.btn-danger:active,.btn-danger.active,.open>.dropdown-toggle.btn-danger{background-image:none}.btn-danger.disabled,.btn-danger[disabled],fieldset[disabled] .btn-danger,.btn-danger.disabled:hover,.btn-danger[disabled]:hover,fieldset[disabled] .btn-danger:hover,.btn-danger.disabled:focus,.btn-danger[disabled]:focus,fieldset[disabled] .btn-danger:focus,.btn-danger.disabled.focus,.btn-danger[disabled].focus,fieldset[disabled] .btn-danger.focus,.btn-danger.disabled:active,.btn-danger[disabled]:active,fieldset[disabled] .btn-danger:active,.btn-danger.disabled.active,.btn-danger[disabled].active,fieldset[disabled] .btn-danger.active{background-color:#d9534f;border-color:#d43f3a}.btn-danger .badge{color:#d9534f;background-color:#fff}.btn-link{font-weight:400;color:#337ab7;border-radius:0}.btn-link,.btn-link:active,.btn-link.active,.btn-link[disabled],fieldset[disabled] .btn-link{background-color:transparent;-webkit-box-shadow:none;box-shadow:none}.btn-link,.btn-link:hover,.btn-link:focus,.btn-link:active{border-color:transparent}.btn-link:hover,.btn-link:focus{color:#23527c;text-decoration:underline;background-color:transparent}.btn-link[disabled]:hover,fieldset[disabled] .btn-link:hover,.btn-link[disabled]:focus,fieldset[disabled] .btn-link:focus{color:#777;text-decoration:none}.btn-lg,.btn-group-lg>.btn{padding:10px 16px;font-size:18px;line-height:1.33;border-radius:6px}.btn-sm,.btn-group-sm>.btn{padding:5px 10px;font-size:12px;line-height:1.5;border-radius:3px}.btn-xs,.btn-group-xs>.btn{padding:1px 5px;font-size:12px;line-height:1.5;border-radius:3px}.btn-block{display:block;width:100%}.btn-block+.btn-block{margin-top:5px}input[type=submit].btn-block,input[type=reset].btn-block,input[type=button].btn-block{width:100%}.fade{opacity:0;-webkit-transition:opacity .15s linear;-o-transition:opacity .15s linear;transition:opacity .15s linear}.fade.in{opacity:1}.collapse{display:none;visibility:hidden}.collapse.in{display:block;visibility:visible}tr.collapse.in{display:table-row}tbody.collapse.in{display:table-row-group}.collapsing{position:relative;height:0;overflow:hidden;-webkit-transition-timing-function:ease;-o-transition-timing-function:ease;transition-timing-function:ease;-webkit-transition-duration:.35s;-o-transition-duration:.35s;transition-duration:.35s;-webkit-transition-property:height,visibility;-o-transition-property:height,visibility;transition-property:height,visibility}.caret{display:inline-block;width:0;height:0;margin-left:2px;vertical-align:middle;border-top:4px solid;border-right:4px solid transparent;border-left:4px solid transparent}.dropdown{position:relative}.dropdown-toggle:focus{outline:0}.dropdown-menu{position:absolute;top:100%;left:0;z-index:1000;display:none;float:left;min-width:160px;padding:5px 0;margin:2px 0 0;font-size:14px;text-align:left;list-style:none;background-color:#fff;-webkit-background-clip:padding-box;background-clip:padding-box;border:1px solid #ccc;border:1px solid rgba(0,0,0,.15);border-radius:4px;-webkit-box-shadow:0 6px 12px rgba(0,0,0,.175);box-shadow:0 6px 12px rgba(0,0,0,.175)}.dropdown-menu.pull-right{right:0;left:auto}.dropdown-menu .divider{height:1px;margin:9px 0;overflow:hidden;background-color:#e5e5e5}.dropdown-menu>li>a{display:block;padding:3px 20px;clear:both;font-weight:400;line-height:1.42857143;color:#333;white-space:nowrap}.dropdown-menu>li>a:hover,.dropdown-menu>li>a:focus{color:#262626;text-decoration:none;background-color:#f5f5f5}.dropdown-menu>.active>a,.dropdown-menu>.active>a:hover,.dropdown-menu>.active>a:focus{color:#fff;text-decoration:none;background-color:#337ab7;outline:0}.dropdown-menu>.disabled>a,.dropdown-menu>.disabled>a:hover,.dropdown-menu>.disabled>a:focus{color:#777}.dropdown-menu>.disabled>a:hover,.dropdown-menu>.disabled>a:focus{text-decoration:none;cursor:not-allowed;background-color:transparent;background-image:none;filter:progid:DXImageTransform.Microsoft.gradient(enabled=false)}.open>.dropdown-menu{display:block}.open>a{outline:0}.dropdown-menu-right{right:0;left:auto}.dropdown-menu-left{right:auto;left:0}.dropdown-header{display:block;padding:3px 20px;font-size:12px;line-height:1.42857143;color:#777;white-space:nowrap}.dropdown-backdrop{position:fixed;top:0;right:0;bottom:0;left:0;z-index:990}.pull-right>.dropdown-menu{right:0;left:auto}.dropup .caret,.navbar-fixed-bottom .dropdown .caret{content:"";border-top:0;border-bottom:4px solid}.dropup .dropdown-menu,.navbar-fixed-bottom .dropdown .dropdown-menu{top:auto;bottom:100%;margin-bottom:1px}@media (min-width:768px){.navbar-right .dropdown-menu{right:0;left:auto}.navbar-right .dropdown-menu-left{right:auto;left:0}}.btn-group,.btn-group-vertical{position:relative;display:inline-block;vertical-align:middle}.btn-group>.btn,.btn-group-vertical>.btn{position:relative;float:left}.btn-group>.btn:hover,.btn-group-vertical>.btn:hover,.btn-group>.btn:focus,.btn-group-vertical>.btn:focus,.btn-group>.btn:active,.btn-group-vertical>.btn:active,.btn-group>.btn.active,.btn-group-vertical>.btn.active{z-index:2}.btn-group .btn+.btn,.btn-group .btn+.btn-group,.btn-group .btn-group+.btn,.btn-group .btn-group+.btn-group{margin-left:-1px}.btn-toolbar{margin-left:-5px}.btn-toolbar .btn-group,.btn-toolbar .input-group{float:left}.btn-toolbar>.btn,.btn-toolbar>.btn-group,.btn-toolbar>.input-group{margin-left:5px}.btn-group>.btn:not(:first-child):not(:last-child):not(.dropdown-toggle){border-radius:0}.btn-group>.btn:first-child{margin-left:0}.btn-group>.btn:first-child:not(:last-child):not(.dropdown-toggle){border-top-right-radius:0;border-bottom-right-radius:0}.btn-group>.btn:last-child:not(:first-child),.btn-group>.dropdown-toggle:not(:first-child){border-top-left-radius:0;border-bottom-left-radius:0}.btn-group>.btn-group{float:left}.btn-group>.btn-group:not(:first-child):not(:last-child)>.btn{border-radius:0}.btn-group>.btn-group:first-child>.btn:last-child,.btn-group>.btn-group:first-child>.dropdown-toggle{border-top-right-radius:0;border-bottom-right-radius:0}.btn-group>.btn-group:last-child>.btn:first-child{border-top-left-radius:0;border-bottom-left-radius:0}.btn-group .dropdown-toggle:active,.btn-group.open .dropdown-toggle{outline:0}.btn-group>.btn+.dropdown-toggle{padding-right:8px;padding-left:8px}.btn-group>.btn-lg+.dropdown-toggle{padding-right:12px;padding-left:12px}.btn-group.open .dropdown-toggle{-webkit-box-shadow:inset 0 3px 5px rgba(0,0,0,.125);box-shadow:inset 0 3px 5px rgba(0,0,0,.125)}.btn-group.open .dropdown-toggle.btn-link{-webkit-box-shadow:none;box-shadow:none}.btn .caret{margin-left:0}.btn-lg .caret{border-width:5px 5px 0;border-bottom-width:0}.dropup .btn-lg .caret{border-width:0 5px 5px}.btn-group-vertical>.btn,.btn-group-vertical>.btn-group,.btn-group-vertical>.btn-group>.btn{display:block;float:none;width:100%;max-width:100%}.btn-group-vertical>.btn-group>.btn{float:none}.btn-group-vertical>.btn+.btn,.btn-group-vertical>.btn+.btn-group,.btn-group-vertical>.btn-group+.btn,.btn-group-vertical>.btn-group+.btn-group{margin-top:-1px;margin-left:0}.btn-group-vertical>.btn:not(:first-child):not(:last-child){border-radius:0}.btn-group-vertical>.btn:first-child:not(:last-child){border-top-right-radius:4px;border-bottom-right-radius:0;border-bottom-left-radius:0}.btn-group-vertical>.btn:last-child:not(:first-child){border-top-left-radius:0;border-top-right-radius:0;border-bottom-left-radius:4px}.btn-group-vertical>.btn-group:not(:first-child):not(:last-child)>.btn{border-radius:0}.btn-group-vertical>.btn-group:first-child:not(:last-child)>.btn:last-child,.btn-group-vertical>.btn-group:first-child:not(:last-child)>.dropdown-toggle{border-bottom-right-radius:0;border-bottom-left-radius:0}.btn-group-vertical>.btn-group:last-child:not(:first-child)>.btn:first-child{border-top-left-radius:0;border-top-right-radius:0}.btn-group-justified{display:table;width:100%;table-layout:fixed;border-collapse:separate}.btn-group-justified>.btn,.btn-group-justified>.btn-group{display:table-cell;float:none;width:1%}.btn-group-justified>.btn-group .btn{width:100%}.btn-group-justified>.btn-group .dropdown-menu{left:auto}[data-toggle=buttons]>.btn input[type=radio],[data-toggle=buttons]>.btn-group>.btn input[type=radio],[data-toggle=buttons]>.btn input[type=checkbox],[data-toggle=buttons]>.btn-group>.btn input[type=checkbox]{position:absolute;clip:rect(0,0,0,0);pointer-events:none}.input-group{position:relative;display:table;border-collapse:separate}.input-group[class*=col-]{float:none;padding-right:0;padding-left:0}.input-group .form-control{position:relative;z-index:2;float:left;width:100%;margin-bottom:0}.input-group-lg>.form-control,.input-group-lg>.input-group-addon,.input-group-lg>.input-group-btn>.btn{height:46px;padding:10px 16px;font-size:18px;line-height:1.33;border-radius:6px}select.input-group-lg>.form-control,select.input-group-lg>.input-group-addon,select.input-group-lg>.input-group-btn>.btn{height:46px;line-height:46px}textarea.input-group-lg>.form-control,textarea.input-group-lg>.input-group-addon,textarea.input-group-lg>.input-group-btn>.btn,select[multiple].input-group-lg>.form-control,select[multiple].input-group-lg>.input-group-addon,select[multiple].input-group-lg>.input-group-btn>.btn{height:auto}.input-group-sm>.form-control,.input-group-sm>.input-group-addon,.input-group-sm>.input-group-btn>.btn{height:30px;padding:5px 10px;font-size:12px;line-height:1.5;border-radius:3px}select.input-group-sm>.form-control,select.input-group-sm>.input-group-addon,select.input-group-sm>.input-group-btn>.btn{height:30px;line-height:30px}textarea.input-group-sm>.form-control,textarea.input-group-sm>.input-group-addon,textarea.input-group-sm>.input-group-btn>.btn,select[multiple].input-group-sm>.form-control,select[multiple].input-group-sm>.input-group-addon,select[multiple].input-group-sm>.input-group-btn>.btn{height:auto}.input-group-addon,.input-group-btn,.input-group .form-control{display:table-cell}.input-group-addon:not(:first-child):not(:last-child),.input-group-btn:not(:first-child):not(:last-child),.input-group .form-control:not(:first-child):not(:last-child){border-radius:0}.input-group-addon,.input-group-btn{width:1%;white-space:nowrap;vertical-align:middle}.input-group-addon{padding:6px 12px;font-size:14px;font-weight:400;line-height:1;color:#555;text-align:center;background-color:#eee;border:1px solid #ccc;border-radius:4px}.input-group-addon.input-sm{padding:5px 10px;font-size:12px;border-radius:3px}.input-group-addon.input-lg{padding:10px 16px;font-size:18px;border-radius:6px}.input-group-addon input[type=radio],.input-group-addon input[type=checkbox]{margin-top:0}.input-group .form-control:first-child,.input-group-addon:first-child,.input-group-btn:first-child>.btn,.input-group-btn:first-child>.btn-group>.btn,.input-group-btn:first-child>.dropdown-toggle,.input-group-btn:last-child>.btn:not(:last-child):not(.dropdown-toggle),.input-group-btn:last-child>.btn-group:not(:last-child)>.btn{border-top-right-radius:0;border-bottom-right-radius:0}.input-group-addon:first-child{border-right:0}.input-group .form-control:last-child,.input-group-addon:last-child,.input-group-btn:last-child>.btn,.input-group-btn:last-child>.btn-group>.btn,.input-group-btn:last-child>.dropdown-toggle,.input-group-btn:first-child>.btn:not(:first-child),.input-group-btn:first-child>.btn-group:not(:first-child)>.btn{border-top-left-radius:0;border-bottom-left-radius:0}.input-group-addon:last-child{border-left:0}.input-group-btn{position:relative;font-size:0;white-space:nowrap}.input-group-btn>.btn{position:relative}.input-group-btn>.btn+.btn{margin-left:-1px}.input-group-btn>.btn:hover,.input-group-btn>.btn:focus,.input-group-btn>.btn:active{z-index:2}.input-group-btn:first-child>.btn,.input-group-btn:first-child>.btn-group{margin-right:-1px}.input-group-btn:last-child>.btn,.input-group-btn:last-child>.btn-group{margin-left:-1px}.nav{padding-left:0;margin-bottom:0;list-style:none}.nav>li{position:relative;display:block}.nav>li>a{position:relative;display:block;padding:10px 15px}.nav>li>a:hover,.nav>li>a:focus{text-decoration:none;background-color:#eee}.nav>li.disabled>a{color:#777}.nav>li.disabled>a:hover,.nav>li.disabled>a:focus{color:#777;text-decoration:none;cursor:not-allowed;background-color:transparent}.nav .open>a,.nav .open>a:hover,.nav .open>a:focus{background-color:#eee;border-color:#337ab7}.nav .nav-divider{height:1px;margin:9px 0;overflow:hidden;background-color:#e5e5e5}.nav>li>a>img{max-width:none}.nav-tabs{border-bottom:1px solid #ddd}.nav-tabs>li{float:left;margin-bottom:-1px}.nav-tabs>li>a{margin-right:2px;line-height:1.42857143;border:1px solid transparent;border-radius:4px 4px 0 0}.nav-tabs>li>a:hover{border-color:#eee #eee #ddd}.nav-tabs>li.active>a,.nav-tabs>li.active>a:hover,.nav-tabs>li.active>a:focus{color:#555;cursor:default;background-color:#fff;border:1px solid #ddd;border-bottom-color:transparent}.nav-tabs.nav-justified{width:100%;border-bottom:0}.nav-tabs.nav-justified>li{float:none}.nav-tabs.nav-justified>li>a{margin-bottom:5px;text-align:center}.nav-tabs.nav-justified>.dropdown .dropdown-menu{top:auto;left:auto}@media (min-width:768px){.nav-tabs.nav-justified>li{display:table-cell;width:1%}.nav-tabs.nav-justified>li>a{margin-bottom:0}}.nav-tabs.nav-justified>li>a{margin-right:0;border-radius:4px}.nav-tabs.nav-justified>.active>a,.nav-tabs.nav-justified>.active>a:hover,.nav-tabs.nav-justified>.active>a:focus{border:1px solid #ddd}@media (min-width:768px){.nav-tabs.nav-justified>li>a{border-bottom:1px solid #ddd;border-radius:4px 4px 0 0}.nav-tabs.nav-justified>.active>a,.nav-tabs.nav-justified>.active>a:hover,.nav-tabs.nav-justified>.active>a:focus{border-bottom-color:#fff}}.nav-pills>li{float:left}.nav-pills>li>a{border-radius:4px}.nav-pills>li+li{margin-left:2px}.nav-pills>li.active>a,.nav-pills>li.active>a:hover,.nav-pills>li.active>a:focus{color:#fff;background-color:#337ab7}.nav-stacked>li{float:none}.nav-stacked>li+li{margin-top:2px;margin-left:0}.nav-justified{width:100%}.nav-justified>li{float:none}.nav-justified>li>a{margin-bottom:5px;text-align:center}.nav-justified>.dropdown .dropdown-menu{top:auto;left:auto}@media (min-width:768px){.nav-justified>li{display:table-cell;width:1%}.nav-justified>li>a{margin-bottom:0}}.nav-tabs-justified{border-bottom:0}.nav-tabs-justified>li>a{margin-right:0;border-radius:4px}.nav-tabs-justified>.active>a,.nav-tabs-justified>.active>a:hover,.nav-tabs-justified>.active>a:focus{border:1px solid #ddd}@media (min-width:768px){.nav-tabs-justified>li>a{border-bottom:1px solid #ddd;border-radius:4px 4px 0 0}.nav-tabs-justified>.active>a,.nav-tabs-justified>.active>a:hover,.nav-tabs-justified>.active>a:focus{border-bottom-color:#fff}}.tab-content>.tab-pane{display:none;visibility:hidden}.tab-content>.active{display:block;visibility:visible}.nav-tabs .dropdown-menu{margin-top:-1px;border-top-left-radius:0;border-top-right-radius:0}.navbar{position:relative;min-height:50px;margin-bottom:20px;border:1px solid transparent}@media (min-width:768px){.navbar{border-radius:4px}}@media (min-width:768px){.navbar-header{float:left}}.navbar-collapse{padding-right:15px;padding-left:15px;overflow-x:visible;-webkit-overflow-scrolling:touch;border-top:1px solid transparent;-webkit-box-shadow:inset 0 1px 0 rgba(255,255,255,.1);box-shadow:inset 0 1px 0 rgba(255,255,255,.1)}.navbar-collapse.in{overflow-y:auto}@media (min-width:768px){.navbar-collapse{width:auto;border-top:0;-webkit-box-shadow:none;box-shadow:none}.navbar-collapse.collapse{display:block!important;height:auto!important;padding-bottom:0;overflow:visible!important;visibility:visible!important}.navbar-collapse.in{overflow-y:visible}.navbar-fixed-top .navbar-collapse,.navbar-static-top .navbar-collapse,.navbar-fixed-bottom .navbar-collapse{padding-right:0;padding-left:0}}.navbar-fixed-top .navbar-collapse,.navbar-fixed-bottom .navbar-collapse{max-height:340px}@media (max-device-width:480px) and (orientation:landscape){.navbar-fixed-top .navbar-collapse,.navbar-fixed-bottom .navbar-collapse{max-height:200px}}.containernbt>.navbar-header,.container-fluid>.navbar-header,.containernbt>.navbar-collapse,.container-fluid>.navbar-collapse{margin-right:-15px;margin-left:-15px}@media (min-width:768px){.containernbt>.navbar-header,.container-fluid>.navbar-header,.containernbt>.navbar-collapse,.container-fluid>.navbar-collapse{margin-right:0;margin-left:0}}.navbar-static-top{z-index:1000;border-width:0 0 1px}@media (min-width:768px){.navbar-static-top{border-radius:0}}.navbar-fixed-top,.navbar-fixed-bottom{position:fixed;right:0;left:0;z-index:1030}@media (min-width:768px){.navbar-fixed-top,.navbar-fixed-bottom{border-radius:0}}.navbar-fixed-top{top:0;border-width:0 0 1px}.navbar-fixed-bottom{bottom:0;margin-bottom:0;border-width:1px 0 0}.navbar-brand{float:left;height:50px;padding:15px 15px;font-size:18px;line-height:20px}.navbar-brand:hover,.navbar-brand:focus{text-decoration:none}.navbar-brand>img{display:block}@media (min-width:768px){.navbar>.containernbt .navbar-brand,.navbar>.container-fluid .navbar-brand{margin-left:-15px}}.navbar-toggle{position:relative;float:right;padding:9px 10px;margin-top:8px;margin-right:15px;margin-bottom:8px;background-color:transparent;background-image:none;border:1px solid transparent;border-radius:4px}.navbar-toggle:focus{outline:0}.navbar-toggle .icon-bar{display:block;width:22px;height:2px;border-radius:1px}.navbar-toggle .icon-bar+.icon-bar{margin-top:4px}@media (min-width:768px){.navbar-toggle{display:none}}.navbar-nav{margin:7.5px -15px}.navbar-nav>li>a{padding-top:10px;padding-bottom:10px;line-height:20px}@media (max-width:767px){.navbar-nav .open .dropdown-menu{position:static;float:none;width:auto;margin-top:0;background-color:transparent;border:0;-webkit-box-shadow:none;box-shadow:none}.navbar-nav .open .dropdown-menu>li>a,.navbar-nav .open .dropdown-menu .dropdown-header{padding:5px 15px 5px 25px}.navbar-nav .open .dropdown-menu>li>a{line-height:20px}.navbar-nav .open .dropdown-menu>li>a:hover,.navbar-nav .open .dropdown-menu>li>a:focus{background-image:none}}@media (min-width:768px){.navbar-nav{float:left;margin:0}.navbar-nav>li{float:left}.navbar-nav>li>a{padding-top:15px;padding-bottom:15px}}.navbar-form{padding:10px 15px;margin-top:8px;margin-right:-15px;margin-bottom:8px;margin-left:-15px;border-top:1px solid transparent;border-bottom:1px solid transparent;-webkit-box-shadow:inset 0 1px 0 rgba(255,255,255,.1),0 1px 0 rgba(255,255,255,.1);box-shadow:inset 0 1px 0 rgba(255,255,255,.1),0 1px 0 rgba(255,255,255,.1)}@media (min-width:768px){.navbar-form .form-group{display:inline-block;margin-bottom:0;vertical-align:middle}.navbar-form .form-control{display:inline-block;width:auto;vertical-align:middle}.navbar-form .form-control-static{display:inline-block}.navbar-form .input-group{display:inline-table;vertical-align:middle}.navbar-form .input-group .input-group-addon,.navbar-form .input-group .input-group-btn,.navbar-form .input-group .form-control{width:auto}.navbar-form .input-group>.form-control{width:100%}.navbar-form .control-label{margin-bottom:0;vertical-align:middle}.navbar-form .radio,.navbar-form .checkbox{display:inline-block;margin-top:0;margin-bottom:0;vertical-align:middle}.navbar-form .radio label,.navbar-form .checkbox label{padding-left:0}.navbar-form .radio input[type=radio],.navbar-form .checkbox input[type=checkbox]{position:relative;margin-left:0}.navbar-form .has-feedback .form-control-feedback{top:0}}@media (max-width:767px){.navbar-form .form-group{margin-bottom:5px}.navbar-form .form-group:last-child{margin-bottom:0}}@media (min-width:768px){.navbar-form{width:auto;padding-top:0;padding-bottom:0;margin-right:0;margin-left:0;border:0;-webkit-box-shadow:none;box-shadow:none}}.navbar-nav>li>.dropdown-menu{margin-top:0;border-top-left-radius:0;border-top-right-radius:0}.navbar-fixed-bottom .navbar-nav>li>.dropdown-menu{border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-right-radius:0;border-bottom-left-radius:0}.navbar-btn{margin-top:8px;margin-bottom:8px}.navbar-btn.btn-sm{margin-top:10px;margin-bottom:10px}.navbar-btn.btn-xs{margin-top:14px;margin-bottom:14px}.navbar-text{margin-top:15px;margin-bottom:15px}@media (min-width:768px){.navbar-text{float:left;margin-right:15px;margin-left:15px}}@media (min-width:768px){.navbar-left{float:left!important}.navbar-right{float:right!important;margin-right:-15px}.navbar-right~.navbar-right{margin-right:0}}.navbar-default{background-color:#f8f8f8;border-color:#e7e7e7}.navbar-default .navbar-brand{color:#777}.navbar-default .navbar-brand:hover,.navbar-default .navbar-brand:focus{color:#5e5e5e;background-color:transparent}.navbar-default .navbar-text{color:#777}.navbar-default .navbar-nav>li>a{color:#777}.navbar-default .navbar-nav>li>a:hover,.navbar-default .navbar-nav>li>a:focus{color:#333;background-color:transparent}.navbar-default .navbar-nav>.active>a,.navbar-default .navbar-nav>.active>a:hover,.navbar-default .navbar-nav>.active>a:focus{color:#555;background-color:#e7e7e7}.navbar-default .navbar-nav>.disabled>a,.navbar-default .navbar-nav>.disabled>a:hover,.navbar-default .navbar-nav>.disabled>a:focus{color:#ccc;background-color:transparent}.navbar-default .navbar-toggle{border-color:#ddd}.navbar-default .navbar-toggle:hover,.navbar-default .navbar-toggle:focus{background-color:#ddd}.navbar-default .navbar-toggle .icon-bar{background-color:#888}.navbar-default .navbar-collapse,.navbar-default .navbar-form{border-color:#e7e7e7}.navbar-default .navbar-nav>.open>a,.navbar-default .navbar-nav>.open>a:hover,.navbar-default .navbar-nav>.open>a:focus{color:#555;background-color:#e7e7e7}@media (max-width:767px){.navbar-default .navbar-nav .open .dropdown-menu>li>a{color:#777}.navbar-default .navbar-nav .open .dropdown-menu>li>a:hover,.navbar-default .navbar-nav .open .dropdown-menu>li>a:focus{color:#333;background-color:transparent}.navbar-default .navbar-nav .open .dropdown-menu>.active>a,.navbar-default .navbar-nav .open .dropdown-menu>.active>a:hover,.navbar-default .navbar-nav .open .dropdown-menu>.active>a:focus{color:#555;background-color:#e7e7e7}.navbar-default .navbar-nav .open .dropdown-menu>.disabled>a,.navbar-default .navbar-nav .open .dropdown-menu>.disabled>a:hover,.navbar-default .navbar-nav .open .dropdown-menu>.disabled>a:focus{color:#ccc;background-color:transparent}}.navbar-default .navbar-link{color:#777}.navbar-default .navbar-link:hover{color:#333}.navbar-default .btn-link{color:#777}.navbar-default .btn-link:hover,.navbar-default .btn-link:focus{color:#333}.navbar-default .btn-link[disabled]:hover,fieldset[disabled] .navbar-default .btn-link:hover,.navbar-default .btn-link[disabled]:focus,fieldset[disabled] .navbar-default .btn-link:focus{color:#ccc}.navbar-inverse{background-color:#222;border-color:#080808}.navbar-inverse .navbar-brand{color:#9d9d9d}.navbar-inverse .navbar-brand:hover,.navbar-inverse .navbar-brand:focus{color:#fff;background-color:transparent}.navbar-inverse .navbar-text{color:#9d9d9d}.navbar-inverse .navbar-nav>li>a{color:#9d9d9d}.navbar-inverse .navbar-nav>li>a:hover,.navbar-inverse .navbar-nav>li>a:focus{color:#fff;background-color:transparent}.navbar-inverse .navbar-nav>.active>a,.navbar-inverse .navbar-nav>.active>a:hover,.navbar-inverse .navbar-nav>.active>a:focus{color:#fff;background-color:#080808}.navbar-inverse .navbar-nav>.disabled>a,.navbar-inverse .navbar-nav>.disabled>a:hover,.navbar-inverse .navbar-nav>.disabled>a:focus{color:#444;background-color:transparent}.navbar-inverse .navbar-toggle{border-color:#333}.navbar-inverse .navbar-toggle:hover,.navbar-inverse .navbar-toggle:focus{background-color:#333}.navbar-inverse .navbar-toggle .icon-bar{background-color:#fff}.navbar-inverse .navbar-collapse,.navbar-inverse .navbar-form{border-color:#101010}.navbar-inverse .navbar-nav>.open>a,.navbar-inverse .navbar-nav>.open>a:hover,.navbar-inverse .navbar-nav>.open>a:focus{color:#fff;background-color:#080808}@media (max-width:767px){.navbar-inverse .navbar-nav .open .dropdown-menu>.dropdown-header{border-color:#080808}.navbar-inverse .navbar-nav .open .dropdown-menu .divider{background-color:#080808}.navbar-inverse .navbar-nav .open .dropdown-menu>li>a{color:#9d9d9d}.navbar-inverse .navbar-nav .open .dropdown-menu>li>a:hover,.navbar-inverse .navbar-nav .open .dropdown-menu>li>a:focus{color:#fff;background-color:transparent}.navbar-inverse .navbar-nav .open .dropdown-menu>.active>a,.navbar-inverse .navbar-nav .open .dropdown-menu>.active>a:hover,.navbar-inverse .navbar-nav .open .dropdown-menu>.active>a:focus{color:#fff;background-color:#080808}.navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a,.navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a:hover,.navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a:focus{color:#444;background-color:transparent}}.navbar-inverse .navbar-link{color:#9d9d9d}.navbar-inverse .navbar-link:hover{color:#fff}.navbar-inverse .btn-link{color:#9d9d9d}.navbar-inverse .btn-link:hover,.navbar-inverse .btn-link:focus{color:#fff}.navbar-inverse .btn-link[disabled]:hover,fieldset[disabled] .navbar-inverse .btn-link:hover,.navbar-inverse .btn-link[disabled]:focus,fieldset[disabled] .navbar-inverse .btn-link:focus{color:#444}.breadcrumb{padding:8px 15px;margin-bottom:20px;list-style:none;background-color:#f5f5f5;border-radius:4px}.breadcrumb>li{display:inline-block}.breadcrumb>li+li:before{padding:0 5px;color:#ccc;content:"/\00a0"}.breadcrumb>.active{color:#777}.pagination{display:inline-block;padding-left:0;margin:20px 0;border-radius:4px}.pagination>li{display:inline}.pagination>li>a,.pagination>li>span{position:relative;float:left;padding:6px 12px;margin-left:-1px;line-height:1.42857143;color:#337ab7;text-decoration:none;background-color:#fff;border:1px solid #ddd}.pagination>li:first-child>a,.pagination>li:first-child>span{margin-left:0;border-top-left-radius:4px;border-bottom-left-radius:4px}.pagination>li:last-child>a,.pagination>li:last-child>span{border-top-right-radius:4px;border-bottom-right-radius:4px}.pagination>li>a:hover,.pagination>li>span:hover,.pagination>li>a:focus,.pagination>li>span:focus{color:#23527c;background-color:#eee;border-color:#ddd}.pagination>.active>a,.pagination>.active>span,.pagination>.active>a:hover,.pagination>.active>span:hover,.pagination>.active>a:focus,.pagination>.active>span:focus{z-index:2;color:#fff;cursor:default;background-color:#337ab7;border-color:#337ab7}.pagination>.disabled>span,.pagination>.disabled>span:hover,.pagination>.disabled>span:focus,.pagination>.disabled>a,.pagination>.disabled>a:hover,.pagination>.disabled>a:focus{color:#777;cursor:not-allowed;background-color:#fff;border-color:#ddd}.pagination-lg>li>a,.pagination-lg>li>span{padding:10px 16px;font-size:18px}.pagination-lg>li:first-child>a,.pagination-lg>li:first-child>span{border-top-left-radius:6px;border-bottom-left-radius:6px}.pagination-lg>li:last-child>a,.pagination-lg>li:last-child>span{border-top-right-radius:6px;border-bottom-right-radius:6px}.pagination-sm>li>a,.pagination-sm>li>span{padding:5px 10px;font-size:12px}.pagination-sm>li:first-child>a,.pagination-sm>li:first-child>span{border-top-left-radius:3px;border-bottom-left-radius:3px}.pagination-sm>li:last-child>a,.pagination-sm>li:last-child>span{border-top-right-radius:3px;border-bottom-right-radius:3px}.pager{padding-left:0;margin:20px 0;text-align:center;list-style:none}.pager li{display:inline}.pager li>a,.pager li>span{display:inline-block;padding:5px 14px;background-color:#fff;border:1px solid #ddd;border-radius:15px}.pager li>a:hover,.pager li>a:focus{text-decoration:none;background-color:#eee}.pager .next>a,.pager .next>span{float:right}.pager .previous>a,.pager .previous>span{float:left}.pager .disabled>a,.pager .disabled>a:hover,.pager .disabled>a:focus,.pager .disabled>span{color:#777;cursor:not-allowed;background-color:#fff}.label{display:inline;padding:.2em .6em .3em;font-size:75%;font-weight:700;line-height:1;color:#fff;text-align:center;white-space:nowrap;vertical-align:baseline;border-radius:.25em}a.label:hover,a.label:focus{color:#fff;text-decoration:none;cursor:pointer}.label:empty{display:none}.btn .label{position:relative;top:-1px}.label-default{background-color:#777}.label-default[href]:hover,.label-default[href]:focus{background-color:#5e5e5e}.label-primary{background-color:#337ab7}.label-primary[href]:hover,.label-primary[href]:focus{background-color:#286090}.label-success{background-color:#5cb85c}.label-success[href]:hover,.label-success[href]:focus{background-color:#449d44}.label-info{background-color:#5bc0de}.label-info[href]:hover,.label-info[href]:focus{background-color:#31b0d5}.label-warning{background-color:#f0ad4e}.label-warning[href]:hover,.label-warning[href]:focus{background-color:#ec971f}.label-danger{background-color:#d9534f}.label-danger[href]:hover,.label-danger[href]:focus{background-color:#c9302c}.badge{display:inline-block;min-width:10px;padding:3px 7px;font-size:12px;font-weight:700;line-height:1;color:#fff;text-align:center;white-space:nowrap;vertical-align:baseline;background-color:#777;border-radius:10px}.badge:empty{display:none}.btn .badge{position:relative;top:-1px}.btn-xs .badge{top:0;padding:1px 5px}a.badge:hover,a.badge:focus{color:#fff;text-decoration:none;cursor:pointer}.list-group-item.active>.badge,.nav-pills>.active>a>.badge{color:#337ab7;background-color:#fff}.list-group-item>.badge{float:right}.list-group-item>.badge+.badge{margin-right:5px}.nav-pills>li>a>.badge{margin-left:3px}.jumbotron{padding:30px 15px;margin-bottom:30px;color:inherit;background-color:#eee}.jumbotron h1,.jumbotron .h1{color:inherit}.jumbotron p{margin-bottom:15px;font-size:21px;font-weight:200}.jumbotron>hr{border-top-color:#d5d5d5}.containernbt .jumbotron,.container-fluid .jumbotron{border-radius:6px}.jumbotron .containernbt{max-width:100%}@media screen and (min-width:768px){.jumbotron{padding:48px 0}.containernbt .jumbotron,.container-fluid .jumbotron{padding-right:60px;padding-left:60px}.jumbotron h1,.jumbotron .h1{font-size:63px}}.thumbnail{display:block;padding:4px;margin-bottom:20px;line-height:1.42857143;background-color:#fff;border:1px solid #ddd;border-radius:4px;-webkit-transition:border .2s ease-in-out;-o-transition:border .2s ease-in-out;transition:border .2s ease-in-out}.thumbnail>img,.thumbnail a>img{margin-right:auto;margin-left:auto}a.thumbnail:hover,a.thumbnail:focus,a.thumbnail.active{border-color:#337ab7}.thumbnail .caption{padding:9px;color:#333}.alert{padding:15px;margin-bottom:20px;border:1px solid transparent;border-radius:4px}.alert h4{margin-top:0;color:inherit}.alert .alert-link{font-weight:700}.alert>p,.alert>ul{margin-bottom:0}.alert>p+p{margin-top:5px}.alert-dismissable,.alert-dismissible{padding-right:35px}.alert-dismissable .close,.alert-dismissible .close{position:relative;top:-2px;right:-21px;color:inherit}.alert-success{color:#3c763d;background-color:#dff0d8;border-color:#d6e9c6}.alert-success hr{border-top-color:#c9e2b3}.alert-success .alert-link{color:#2b542c}.alert-info{color:#31708f;background-color:#d9edf7;border-color:#bce8f1}.alert-info hr{border-top-color:#a6e1ec}.alert-info .alert-link{color:#245269}.alert-warning{color:#8a6d3b;background-color:#fcf8e3;border-color:#faebcc}.alert-warning hr{border-top-color:#f7e1b5}.alert-warning .alert-link{color:#66512c}.alert-danger{color:#a94442;background-color:#f2dede;border-color:#ebccd1}.alert-danger hr{border-top-color:#e4b9c0}.alert-danger .alert-link{color:#843534}@-webkit-keyframes progress-bar-stripes{from{background-position:40px 0}to{background-position:0 0}}@-o-keyframes progress-bar-stripes{from{background-position:40px 0}to{background-position:0 0}}@keyframes progress-bar-stripes{from{background-position:40px 0}to{background-position:0 0}}.progress{height:20px;margin-bottom:20px;overflow:hidden;background-color:#f5f5f5;border-radius:4px;-webkit-box-shadow:inset 0 1px 2px rgba(0,0,0,.1);box-shadow:inset 0 1px 2px rgba(0,0,0,.1)}.progress-bar{float:left;width:0;height:100%;font-size:12px;line-height:20px;color:#fff;text-align:center;background-color:#337ab7;-webkit-box-shadow:inset 0 -1px 0 rgba(0,0,0,.15);box-shadow:inset 0 -1px 0 rgba(0,0,0,.15);-webkit-transition:width .6s ease;-o-transition:width .6s ease;transition:width .6s ease}.progress-striped .progress-bar,.progress-bar-striped{background-image:-webkit-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:-o-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);-webkit-background-size:40px 40px;background-size:40px 40px}.progress.active .progress-bar,.progress-bar.active{-webkit-animation:progress-bar-stripes 2s linear infinite;-o-animation:progress-bar-stripes 2s linear infinite;animation:progress-bar-stripes 2s linear infinite}.progress-bar-success{background-color:#5cb85c}.progress-striped .progress-bar-success{background-image:-webkit-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:-o-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent)}.progress-bar-info{background-color:#5bc0de}.progress-striped .progress-bar-info{background-image:-webkit-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:-o-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent)}.progress-bar-warning{background-color:#f0ad4e}.progress-striped .progress-bar-warning{background-image:-webkit-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:-o-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent)}.progress-bar-danger{background-color:#d9534f}.progress-striped .progress-bar-danger{background-image:-webkit-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:-o-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent)}.media{margin-top:15px}.media:first-child{margin-top:0}.media-right,.media>.pull-right{padding-left:10px}.media-left,.media>.pull-left{padding-right:10px}.media-left,.media-right,.media-body{display:table-cell;vertical-align:top}.media-middle{vertical-align:middle}.media-bottom{vertical-align:bottom}.media-heading{margin-top:0;margin-bottom:5px}.media-list{padding-left:0;list-style:none}.list-group{padding-left:0;margin-bottom:20px}.list-group-item{position:relative;display:block;padding:10px 15px;margin-bottom:-1px;background-color:#fff;border:1px solid #ddd}.list-group-item:first-child{border-top-left-radius:4px;border-top-right-radius:4px}.list-group-item:last-child{margin-bottom:0;border-bottom-right-radius:4px;border-bottom-left-radius:4px}a.list-group-item{color:#555}a.list-group-item .list-group-item-heading{color:#333}a.list-group-item:hover,a.list-group-item:focus{color:#555;text-decoration:none;background-color:#f5f5f5}.list-group-item.disabled,.list-group-item.disabled:hover,.list-group-item.disabled:focus{color:#777;cursor:not-allowed;background-color:#eee}.list-group-item.disabled .list-group-item-heading,.list-group-item.disabled:hover .list-group-item-heading,.list-group-item.disabled:focus .list-group-item-heading{color:inherit}.list-group-item.disabled .list-group-item-text,.list-group-item.disabled:hover .list-group-item-text,.list-group-item.disabled:focus .list-group-item-text{color:#777}.list-group-item.active,.list-group-item.active:hover,.list-group-item.active:focus{z-index:2;color:#fff;background-color:#337ab7;border-color:#337ab7}.list-group-item.active .list-group-item-heading,.list-group-item.active:hover .list-group-item-heading,.list-group-item.active:focus .list-group-item-heading,.list-group-item.active .list-group-item-heading>small,.list-group-item.active:hover .list-group-item-heading>small,.list-group-item.active:focus .list-group-item-heading>small,.list-group-item.active .list-group-item-heading>.small,.list-group-item.active:hover .list-group-item-heading>.small,.list-group-item.active:focus .list-group-item-heading>.small{color:inherit}.list-group-item.active .list-group-item-text,.list-group-item.active:hover .list-group-item-text,.list-group-item.active:focus .list-group-item-text{color:#c7ddef}.list-group-item-success{color:#3c763d;background-color:#dff0d8}a.list-group-item-success{color:#3c763d}a.list-group-item-success .list-group-item-heading{color:inherit}a.list-group-item-success:hover,a.list-group-item-success:focus{color:#3c763d;background-color:#d0e9c6}a.list-group-item-success.active,a.list-group-item-success.active:hover,a.list-group-item-success.active:focus{color:#fff;background-color:#3c763d;border-color:#3c763d}.list-group-item-info{color:#31708f;background-color:#d9edf7}a.list-group-item-info{color:#31708f}a.list-group-item-info .list-group-item-heading{color:inherit}a.list-group-item-info:hover,a.list-group-item-info:focus{color:#31708f;background-color:#c4e3f3}a.list-group-item-info.active,a.list-group-item-info.active:hover,a.list-group-item-info.active:focus{color:#fff;background-color:#31708f;border-color:#31708f}.list-group-item-warning{color:#8a6d3b;background-color:#fcf8e3}a.list-group-item-warning{color:#8a6d3b}a.list-group-item-warning .list-group-item-heading{color:inherit}a.list-group-item-warning:hover,a.list-group-item-warning:focus{color:#8a6d3b;background-color:#faf2cc}a.list-group-item-warning.active,a.list-group-item-warning.active:hover,a.list-group-item-warning.active:focus{color:#fff;background-color:#8a6d3b;border-color:#8a6d3b}.list-group-item-danger{color:#a94442;background-color:#f2dede}a.list-group-item-danger{color:#a94442}a.list-group-item-danger .list-group-item-heading{color:inherit}a.list-group-item-danger:hover,a.list-group-item-danger:focus{color:#a94442;background-color:#ebcccc}a.list-group-item-danger.active,a.list-group-item-danger.active:hover,a.list-group-item-danger.active:focus{color:#fff;background-color:#a94442;border-color:#a94442}.list-group-item-heading{margin-top:0;margin-bottom:5px}.list-group-item-text{margin-bottom:0;line-height:1.3}.panel{margin-bottom:20px;background-color:#fff;border:1px solid transparent;border-radius:4px;-webkit-box-shadow:0 1px 1px rgba(0,0,0,.05);box-shadow:0 1px 1px rgba(0,0,0,.05)}.panel-body{padding:15px}.panel-heading{padding:10px 15px;border-bottom:1px solid transparent;border-top-left-radius:3px;border-top-right-radius:3px}.panel-heading>.dropdown .dropdown-toggle{color:inherit}.panel-title{margin-top:0;margin-bottom:0;font-size:16px;color:inherit}.panel-title>a{color:inherit}.panel-footer{padding:10px 15px;background-color:#f5f5f5;border-top:1px solid #ddd;border-bottom-right-radius:3px;border-bottom-left-radius:3px}.panel>.list-group,.panel>.panel-collapse>.list-group{margin-bottom:0}.panel>.list-group .list-group-item,.panel>.panel-collapse>.list-group .list-group-item{border-width:1px 0;border-radius:0}.panel>.list-group:first-child .list-group-item:first-child,.panel>.panel-collapse>.list-group:first-child .list-group-item:first-child{border-top:0;border-top-left-radius:3px;border-top-right-radius:3px}.panel>.list-group:last-child .list-group-item:last-child,.panel>.panel-collapse>.list-group:last-child .list-group-item:last-child{border-bottom:0;border-bottom-right-radius:3px;border-bottom-left-radius:3px}.panel-heading+.list-group .list-group-item:first-child{border-top-width:0}.list-group+.panel-footer{border-top-width:0}.panel>.table,.panel>.table-responsive>.table,.panel>.panel-collapse>.table{margin-bottom:0}.panel>.table caption,.panel>.table-responsive>.table caption,.panel>.panel-collapse>.table caption{padding-right:15px;padding-left:15px}.panel>.table:first-child,.panel>.table-responsive:first-child>.table:first-child{border-top-left-radius:3px;border-top-right-radius:3px}.panel>.table:first-child>thead:first-child>tr:first-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child,.panel>.table:first-child>tbody:first-child>tr:first-child,.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child{border-top-left-radius:3px;border-top-right-radius:3px}.panel>.table:first-child>thead:first-child>tr:first-child td:first-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child td:first-child,.panel>.table:first-child>tbody:first-child>tr:first-child td:first-child,.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child td:first-child,.panel>.table:first-child>thead:first-child>tr:first-child th:first-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child th:first-child,.panel>.table:first-child>tbody:first-child>tr:first-child th:first-child,.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child th:first-child{border-top-left-radius:3px}.panel>.table:first-child>thead:first-child>tr:first-child td:last-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child td:last-child,.panel>.table:first-child>tbody:first-child>tr:first-child td:last-child,.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child td:last-child,.panel>.table:first-child>thead:first-child>tr:first-child th:last-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child th:last-child,.panel>.table:first-child>tbody:first-child>tr:first-child th:last-child,.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child th:last-child{border-top-right-radius:3px}.panel>.table:last-child,.panel>.table-responsive:last-child>.table:last-child{border-bottom-right-radius:3px;border-bottom-left-radius:3px}.panel>.table:last-child>tbody:last-child>tr:last-child,.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child,.panel>.table:last-child>tfoot:last-child>tr:last-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child{border-bottom-right-radius:3px;border-bottom-left-radius:3px}.panel>.table:last-child>tbody:last-child>tr:last-child td:first-child,.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child td:first-child,.panel>.table:last-child>tfoot:last-child>tr:last-child td:first-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child td:first-child,.panel>.table:last-child>tbody:last-child>tr:last-child th:first-child,.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child th:first-child,.panel>.table:last-child>tfoot:last-child>tr:last-child th:first-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child th:first-child{border-bottom-left-radius:3px}.panel>.table:last-child>tbody:last-child>tr:last-child td:last-child,.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child td:last-child,.panel>.table:last-child>tfoot:last-child>tr:last-child td:last-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child td:last-child,.panel>.table:last-child>tbody:last-child>tr:last-child th:last-child,.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child th:last-child,.panel>.table:last-child>tfoot:last-child>tr:last-child th:last-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child th:last-child{border-bottom-right-radius:3px}.panel>.panel-body+.table,.panel>.panel-body+.table-responsive,.panel>.table+.panel-body,.panel>.table-responsive+.panel-body{border-top:1px solid #ddd}.panel>.table>tbody:first-child>tr:first-child th,.panel>.table>tbody:first-child>tr:first-child td{border-top:0}.panel>.table-bordered,.panel>.table-responsive>.table-bordered{border:0}.panel>.table-bordered>thead>tr>th:first-child,.panel>.table-responsive>.table-bordered>thead>tr>th:first-child,.panel>.table-bordered>tbody>tr>th:first-child,.panel>.table-responsive>.table-bordered>tbody>tr>th:first-child,.panel>.table-bordered>tfoot>tr>th:first-child,.panel>.table-responsive>.table-bordered>tfoot>tr>th:first-child,.panel>.table-bordered>thead>tr>td:first-child,.panel>.table-responsive>.table-bordered>thead>tr>td:first-child,.panel>.table-bordered>tbody>tr>td:first-child,.panel>.table-responsive>.table-bordered>tbody>tr>td:first-child,.panel>.table-bordered>tfoot>tr>td:first-child,.panel>.table-responsive>.table-bordered>tfoot>tr>td:first-child{border-left:0}.panel>.table-bordered>thead>tr>th:last-child,.panel>.table-responsive>.table-bordered>thead>tr>th:last-child,.panel>.table-bordered>tbody>tr>th:last-child,.panel>.table-responsive>.table-bordered>tbody>tr>th:last-child,.panel>.table-bordered>tfoot>tr>th:last-child,.panel>.table-responsive>.table-bordered>tfoot>tr>th:last-child,.panel>.table-bordered>thead>tr>td:last-child,.panel>.table-responsive>.table-bordered>thead>tr>td:last-child,.panel>.table-bordered>tbody>tr>td:last-child,.panel>.table-responsive>.table-bordered>tbody>tr>td:last-child,.panel>.table-bordered>tfoot>tr>td:last-child,.panel>.table-responsive>.table-bordered>tfoot>tr>td:last-child{border-right:0}.panel>.table-bordered>thead>tr:first-child>td,.panel>.table-responsive>.table-bordered>thead>tr:first-child>td,.panel>.table-bordered>tbody>tr:first-child>td,.panel>.table-responsive>.table-bordered>tbody>tr:first-child>td,.panel>.table-bordered>thead>tr:first-child>th,.panel>.table-responsive>.table-bordered>thead>tr:first-child>th,.panel>.table-bordered>tbody>tr:first-child>th,.panel>.table-responsive>.table-bordered>tbody>tr:first-child>th{border-bottom:0}.panel>.table-bordered>tbody>tr:last-child>td,.panel>.table-responsive>.table-bordered>tbody>tr:last-child>td,.panel>.table-bordered>tfoot>tr:last-child>td,.panel>.table-responsive>.table-bordered>tfoot>tr:last-child>td,.panel>.table-bordered>tbody>tr:last-child>th,.panel>.table-responsive>.table-bordered>tbody>tr:last-child>th,.panel>.table-bordered>tfoot>tr:last-child>th,.panel>.table-responsive>.table-bordered>tfoot>tr:last-child>th{border-bottom:0}.panel>.table-responsive{margin-bottom:0;border:0}.panel-group{margin-bottom:20px}.panel-group .panel{margin-bottom:0;border-radius:4px}.panel-group .panel+.panel{margin-top:5px}.panel-group .panel-heading{border-bottom:0}.panel-group .panel-heading+.panel-collapse>.panel-body,.panel-group .panel-heading+.panel-collapse>.list-group{border-top:1px solid #ddd}.panel-group .panel-footer{border-top:0}.panel-group .panel-footer+.panel-collapse .panel-body{border-bottom:1px solid #ddd}.panel-default{border-color:#ddd}.panel-default>.panel-heading{color:#333;background-color:#f5f5f5;border-color:#ddd}.panel-default>.panel-heading+.panel-collapse>.panel-body{border-top-color:#ddd}.panel-default>.panel-heading .badge{color:#f5f5f5;background-color:#333}.panel-default>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#ddd}.panel-primary{border-color:#337ab7}.panel-primary>.panel-heading{color:#fff;background-color:#337ab7;border-color:#337ab7}.panel-primary>.panel-heading+.panel-collapse>.panel-body{border-top-color:#337ab7}.panel-primary>.panel-heading .badge{color:#337ab7;background-color:#fff}.panel-primary>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#337ab7}.panel-success{border-color:#d6e9c6}.panel-success>.panel-heading{color:#3c763d;background-color:#dff0d8;border-color:#d6e9c6}.panel-success>.panel-heading+.panel-collapse>.panel-body{border-top-color:#d6e9c6}.panel-success>.panel-heading .badge{color:#dff0d8;background-color:#3c763d}.panel-success>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#d6e9c6}.panel-info{border-color:#bce8f1}.panel-info>.panel-heading{color:#31708f;background-color:#d9edf7;border-color:#bce8f1}.panel-info>.panel-heading+.panel-collapse>.panel-body{border-top-color:#bce8f1}.panel-info>.panel-heading .badge{color:#d9edf7;background-color:#31708f}.panel-info>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#bce8f1}.panel-warning{border-color:#faebcc}.panel-warning>.panel-heading{color:#8a6d3b;background-color:#fcf8e3;border-color:#faebcc}.panel-warning>.panel-heading+.panel-collapse>.panel-body{border-top-color:#faebcc}.panel-warning>.panel-heading .badge{color:#fcf8e3;background-color:#8a6d3b}.panel-warning>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#faebcc}.panel-danger{border-color:#ebccd1}.panel-danger>.panel-heading{color:#a94442;background-color:#f2dede;border-color:#ebccd1}.panel-danger>.panel-heading+.panel-collapse>.panel-body{border-top-color:#ebccd1}.panel-danger>.panel-heading .badge{color:#f2dede;background-color:#a94442}.panel-danger>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#ebccd1}.embed-responsive{position:relative;display:block;height:0;padding:0;overflow:hidden}.embed-responsive .embed-responsive-item,.embed-responsive iframe,.embed-responsive embed,.embed-responsive object,.embed-responsive video{position:absolute;top:0;bottom:0;left:0;width:100%;height:100%;border:0}.embed-responsive.embed-responsive-16by9{padding-bottom:56.25%}.embed-responsive.embed-responsive-4by3{padding-bottom:75%}.well{min-height:20px;padding:19px;margin-bottom:20px;background-color:#f5f5f5;border:1px solid #e3e3e3;border-radius:4px;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.05);box-shadow:inset 0 1px 1px rgba(0,0,0,.05)}.well blockquote{border-color:#ddd;border-color:rgba(0,0,0,.15)}.well-lg{padding:24px;border-radius:6px}.well-sm{padding:9px;border-radius:3px}.close{float:right;font-size:21px;font-weight:700;line-height:1;color:#000;text-shadow:0 1px 0 #fff;filter:alpha(opacity=20);opacity:.2}.close:hover,.close:focus{color:#000;text-decoration:none;cursor:pointer;filter:alpha(opacity=50);opacity:.5}button.close{-webkit-appearance:none;padding:0;cursor:pointer;background:0 0;border:0}.modal-open{overflow:hidden}.modal{position:fixed;top:0;right:0;bottom:0;left:0;z-index:1040;display:none;overflow:hidden;-webkit-overflow-scrolling:touch;outline:0}.modal.fade .modal-dialog{-webkit-transition:-webkit-transform .3s ease-out;-o-transition:-o-transform .3s ease-out;transition:transform .3s ease-out;-webkit-transform:translate(0,-25%);-ms-transform:translate(0,-25%);-o-transform:translate(0,-25%);transform:translate(0,-25%)}.modal.in .modal-dialog{-webkit-transform:translate(0,0);-ms-transform:translate(0,0);-o-transform:translate(0,0);transform:translate(0,0)}.modal-open .modal{overflow-x:hidden;overflow-y:auto}.modal-dialog{position:relative;width:auto;margin:10px}.modal-content{position:relative;background-color:#fff;-webkit-background-clip:padding-box;background-clip:padding-box;border:1px solid #999;border:1px solid rgba(0,0,0,.2);border-radius:6px;outline:0;-webkit-box-shadow:0 3px 9px rgba(0,0,0,.5);box-shadow:0 3px 9px rgba(0,0,0,.5)}.modal-backdrop{position:absolute;top:0;right:0;left:0;background-color:#000}.modal-backdrop.fade{filter:alpha(opacity=0);opacity:0}.modal-backdrop.in{filter:alpha(opacity=50);opacity:.5}.modal-header{min-height:16.43px;padding:15px;border-bottom:1px solid #e5e5e5}.modal-header .close{margin-top:-2px}.modal-title{margin:0;line-height:1.42857143}.modal-body{position:relative;padding:15px}.modal-footer{padding:15px;text-align:right;border-top:1px solid #e5e5e5}.modal-footer .btn+.btn{margin-bottom:0;margin-left:5px}.modal-footer .btn-group .btn+.btn{margin-left:-1px}.modal-footer .btn-block+.btn-block{margin-left:0}.modal-scrollbar-measure{position:absolute;top:-9999px;width:50px;height:50px;overflow:scroll}@media (min-width:768px){.modal-dialog{width:600px;margin:30px auto}.modal-content{-webkit-box-shadow:0 5px 15px rgba(0,0,0,.5);box-shadow:0 5px 15px rgba(0,0,0,.5)}.modal-sm{width:300px}}@media (min-width:992px){.modal-lg{width:900px}}.tooltip{position:absolute;z-index:1070;display:block;font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-size:12px;font-weight:400;line-height:1.4;visibility:visible;filter:alpha(opacity=0);opacity:0}.tooltip.in{filter:alpha(opacity=90);opacity:.9}.tooltip.top{padding:5px 0;margin-top:-3px}.tooltip.right{padding:0 5px;margin-left:3px}.tooltip.bottom{padding:5px 0;margin-top:3px}.tooltip.left{padding:0 5px;margin-left:-3px}.tooltip-inner{max-width:200px;padding:3px 8px;color:#fff;text-align:center;text-decoration:none;background-color:#000;border-radius:4px}.tooltip-arrow{position:absolute;width:0;height:0;border-color:transparent;border-style:solid}.tooltip.top .tooltip-arrow{bottom:0;left:50%;margin-left:-5px;border-width:5px 5px 0;border-top-color:#000}.tooltip.top-left .tooltip-arrow{right:5px;bottom:0;margin-bottom:-5px;border-width:5px 5px 0;border-top-color:#000}.tooltip.top-right .tooltip-arrow{bottom:0;left:5px;margin-bottom:-5px;border-width:5px 5px 0;border-top-color:#000}.tooltip.right .tooltip-arrow{top:50%;left:0;margin-top:-5px;border-width:5px 5px 5px 0;border-right-color:#000}.tooltip.left .tooltip-arrow{top:50%;right:0;margin-top:-5px;border-width:5px 0 5px 5px;border-left-color:#000}.tooltip.bottom .tooltip-arrow{top:0;left:50%;margin-left:-5px;border-width:0 5px 5px;border-bottom-color:#000}.tooltip.bottom-left .tooltip-arrow{top:0;right:5px;margin-top:-5px;border-width:0 5px 5px;border-bottom-color:#000}.tooltip.bottom-right .tooltip-arrow{top:0;left:5px;margin-top:-5px;border-width:0 5px 5px;border-bottom-color:#000}.popover{position:absolute;top:0;left:0;z-index:1060;display:none;max-width:276px;padding:1px;font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;line-height:1.42857143;text-align:left;white-space:normal;background-color:#fff;-webkit-background-clip:padding-box;background-clip:padding-box;border:1px solid #ccc;border:1px solid rgba(0,0,0,.2);border-radius:6px;-webkit-box-shadow:0 5px 10px rgba(0,0,0,.2);box-shadow:0 5px 10px rgba(0,0,0,.2)}.popover.top{margin-top:-10px}.popover.right{margin-left:10px}.popover.bottom{margin-top:10px}.popover.left{margin-left:-10px}.popover-title{padding:8px 14px;margin:0;font-size:14px;background-color:#f7f7f7;border-bottom:1px solid #ebebeb;border-radius:5px 5px 0 0}.popover-content{padding:9px 14px}.popover>.arrow,.popover>.arrow:after{position:absolute;display:block;width:0;height:0;border-color:transparent;border-style:solid}.popover>.arrow{border-width:11px}.popover>.arrow:after{content:"";border-width:10px}.popover.top>.arrow{bottom:-11px;left:50%;margin-left:-11px;border-top-color:#999;border-top-color:rgba(0,0,0,.25);border-bottom-width:0}.popover.top>.arrow:after{bottom:1px;margin-left:-10px;content:" ";border-top-color:#fff;border-bottom-width:0}.popover.right>.arrow{top:50%;left:-11px;margin-top:-11px;border-right-color:#999;border-right-color:rgba(0,0,0,.25);border-left-width:0}.popover.right>.arrow:after{bottom:-10px;left:1px;content:" ";border-right-color:#fff;border-left-width:0}.popover.bottom>.arrow{top:-11px;left:50%;margin-left:-11px;border-top-width:0;border-bottom-color:#999;border-bottom-color:rgba(0,0,0,.25)}.popover.bottom>.arrow:after{top:1px;margin-left:-10px;content:" ";border-top-width:0;border-bottom-color:#fff}.popover.left>.arrow{top:50%;right:-11px;margin-top:-11px;border-right-width:0;border-left-color:#999;border-left-color:rgba(0,0,0,.25)}.popover.left>.arrow:after{right:1px;bottom:-10px;content:" ";border-right-width:0;border-left-color:#fff}.carousel{position:relative}.carousel-inner{position:relative;width:100%;overflow:hidden}.carousel-inner>.item{position:relative;display:none;-webkit-transition:.6s ease-in-out left;-o-transition:.6s ease-in-out left;transition:.6s ease-in-out left}.carousel-inner>.item>img,.carousel-inner>.item>a>img{line-height:1}@media all and (transform-3d),(-webkit-transform-3d){.carousel-inner>.item{-webkit-transition:-webkit-transform .6s ease-in-out;-o-transition:-o-transform .6s ease-in-out;transition:transform .6s ease-in-out;-webkit-backface-visibility:hidden;backface-visibility:hidden;-webkit-perspective:1000;perspective:1000}.carousel-inner>.item.next,.carousel-inner>.item.active.right{left:0;-webkit-transform:translate3d(100%,0,0);transform:translate3d(100%,0,0)}.carousel-inner>.item.prev,.carousel-inner>.item.active.left{left:0;-webkit-transform:translate3d(-100%,0,0);transform:translate3d(-100%,0,0)}.carousel-inner>.item.next.left,.carousel-inner>.item.prev.right,.carousel-inner>.item.active{left:0;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}}.carousel-inner>.active,.carousel-inner>.next,.carousel-inner>.prev{display:block}.carousel-inner>.active{left:0}.carousel-inner>.next,.carousel-inner>.prev{position:absolute;top:0;width:100%}.carousel-inner>.next{left:100%}.carousel-inner>.prev{left:-100%}.carousel-inner>.next.left,.carousel-inner>.prev.right{left:0}.carousel-inner>.active.left{left:-100%}.carousel-inner>.active.right{left:100%}.carousel-control{position:absolute;top:0;bottom:0;left:0;width:15%;font-size:20px;color:#fff;text-align:center;text-shadow:0 1px 2px rgba(0,0,0,.6);filter:alpha(opacity=50);opacity:.5}.carousel-control.left{background-image:-webkit-linear-gradient(left,rgba(0,0,0,.5) 0,rgba(0,0,0,.0001) 100%);background-image:-o-linear-gradient(left,rgba(0,0,0,.5) 0,rgba(0,0,0,.0001) 100%);background-image:-webkit-gradient(linear,left top,right top,from(rgba(0,0,0,.5)),to(rgba(0,0,0,.0001)));background-image:linear-gradient(to right,rgba(0,0,0,.5) 0,rgba(0,0,0,.0001) 100%);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1);background-repeat:repeat-x}.carousel-control.right{right:0;left:auto;background-image:-webkit-linear-gradient(left,rgba(0,0,0,.0001) 0,rgba(0,0,0,.5) 100%);background-image:-o-linear-gradient(left,rgba(0,0,0,.0001) 0,rgba(0,0,0,.5) 100%);background-image:-webkit-gradient(linear,left top,right top,from(rgba(0,0,0,.0001)),to(rgba(0,0,0,.5)));background-image:linear-gradient(to right,rgba(0,0,0,.0001) 0,rgba(0,0,0,.5) 100%);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#80000000', GradientType=1);background-repeat:repeat-x}.carousel-control:hover,.carousel-control:focus{color:#fff;text-decoration:none;filter:alpha(opacity=90);outline:0;opacity:.9}.carousel-control .icon-prev,.carousel-control .icon-next,.carousel-control .glyphicon-chevron-left,.carousel-control .glyphicon-chevron-right{position:absolute;top:50%;z-index:5;display:inline-block}.carousel-control .icon-prev,.carousel-control .glyphicon-chevron-left{left:50%;margin-left:-10px}.carousel-control .icon-next,.carousel-control .glyphicon-chevron-right{right:50%;margin-right:-10px}.carousel-control .icon-prev,.carousel-control .icon-next{width:20px;height:20px;margin-top:-10px;font-family:serif}.carousel-control .icon-prev:before{content:'\2039'}.carousel-control .icon-next:before{content:'\203a'}.carousel-indicators{position:absolute;bottom:10px;left:50%;z-index:15;width:60%;padding-left:0;margin-left:-30%;text-align:center;list-style:none}.carousel-indicators li{display:inline-block;width:10px;height:10px;margin:1px;text-indent:-999px;cursor:pointer;background-color:#000 \9;background-color:rgba(0,0,0,0);border:1px solid #fff;border-radius:10px}.carousel-indicators .active{width:12px;height:12px;margin:0;background-color:#fff}.carousel-caption{position:absolute;right:15%;bottom:20px;left:15%;z-index:10;padding-top:20px;padding-bottom:20px;color:#fff;text-align:center;text-shadow:0 1px 2px rgba(0,0,0,.6)}.carousel-caption .btn{text-shadow:none}@media screen and (min-width:768px){.carousel-control .glyphicon-chevron-left,.carousel-control .glyphicon-chevron-right,.carousel-control .icon-prev,.carousel-control .icon-next{width:30px;height:30px;margin-top:-15px;font-size:30px}.carousel-control .glyphicon-chevron-left,.carousel-control .icon-prev{margin-left:-15px}.carousel-control .glyphicon-chevron-right,.carousel-control .icon-next{margin-right:-15px}.carousel-caption{right:20%;left:20%;padding-bottom:30px}.carousel-indicators{bottom:20px}}.clearfix:before,.clearfix:after,.dl-horizontal dd:before,.dl-horizontal dd:after,.containernbt:before,.containernbt:after,.container-fluid:before,.container-fluid:after,.row:before,.row:after,.form-horizontal .form-group:before,.form-horizontal .form-group:after,.btn-toolbar:before,.btn-toolbar:after,.btn-group-vertical>.btn-group:before,.btn-group-vertical>.btn-group:after,.nav:before,.nav:after,.navbar:before,.navbar:after,.navbar-header:before,.navbar-header:after,.navbar-collapse:before,.navbar-collapse:after,.pager:before,.pager:after,.panel-body:before,.panel-body:after,.modal-footer:before,.modal-footer:after{display:table;content:" "}.clearfix:after,.dl-horizontal dd:after,.containernbt:after,.container-fluid:after,.row:after,.form-horizontal .form-group:after,.btn-toolbar:after,.btn-group-vertical>.btn-group:after,.nav:after,.navbar:after,.navbar-header:after,.navbar-collapse:after,.pager:after,.panel-body:after,.modal-footer:after{clear:both}.center-block{display:block;margin-right:auto;margin-left:auto}.pull-right{float:right!important}.pull-left{float:left!important}.hide{display:none!important}.show{display:block!important}.invisible{visibility:hidden}.text-hide{font:0/0 a;color:transparent;text-shadow:none;background-color:transparent;border:0}.hidden{display:none!important;visibility:hidden!important}.affix{position:fixed}@-ms-viewport{width:device-width}.visible-xs,.visible-sm,.visible-md,.visible-lg{display:none!important}.visible-xs-block,.visible-xs-inline,.visible-xs-inline-block,.visible-sm-block,.visible-sm-inline,.visible-sm-inline-block,.visible-md-block,.visible-md-inline,.visible-md-inline-block,.visible-lg-block,.visible-lg-inline,.visible-lg-inline-block{display:none!important}@media (max-width:767px){.visible-xs{display:block!important}table.visible-xs{display:table}tr.visible-xs{display:table-row!important}th.visible-xs,td.visible-xs{display:table-cell!important}}@media (max-width:767px){.visible-xs-block{display:block!important}}@media (max-width:767px){.visible-xs-inline{display:inline!important}}@media (max-width:767px){.visible-xs-inline-block{display:inline-block!important}}@media (min-width:768px) and (max-width:991px){.visible-sm{display:block!important}table.visible-sm{display:table}tr.visible-sm{display:table-row!important}th.visible-sm,td.visible-sm{display:table-cell!important}}@media (min-width:768px) and (max-width:991px){.visible-sm-block{display:block!important}}@media (min-width:768px) and (max-width:991px){.visible-sm-inline{display:inline!important}}@media (min-width:768px) and (max-width:991px){.visible-sm-inline-block{display:inline-block!important}}@media (min-width:992px) and (max-width:1199px){.visible-md{display:block!important}table.visible-md{display:table}tr.visible-md{display:table-row!important}th.visible-md,td.visible-md{display:table-cell!important}}@media (min-width:992px) and (max-width:1199px){.visible-md-block{display:block!important}}@media (min-width:992px) and (max-width:1199px){.visible-md-inline{display:inline!important}}@media (min-width:992px) and (max-width:1199px){.visible-md-inline-block{display:inline-block!important}}@media (min-width:1200px){.visible-lg{display:block!important}table.visible-lg{display:table}tr.visible-lg{display:table-row!important}th.visible-lg,td.visible-lg{display:table-cell!important}}@media (min-width:1200px){.visible-lg-block{display:block!important}}@media (min-width:1200px){.visible-lg-inline{display:inline!important}}@media (min-width:1200px){.visible-lg-inline-block{display:inline-block!important}}@media (max-width:767px){.hidden-xs{display:none!important}}@media (min-width:768px) and (max-width:991px){.hidden-sm{display:none!important}}@media (min-width:992px) and (max-width:1199px){.hidden-md{display:none!important}}@media (min-width:1200px){.hidden-lg{display:none!important}}.visible-print{display:none!important}@media print{.visible-print{display:block!important}table.visible-print{display:table}tr.visible-print{display:table-row!important}th.visible-print,td.visible-print{display:table-cell!important}}.visible-print-block{display:none!important}@media print{.visible-print-block{display:block!important}}.visible-print-inline{display:none!important}@media print{.visible-print-inline{display:inline!important}}.visible-print-inline-block{display:none!important}@media print{.visible-print-inline-block{display:inline-block!important}}@media print{.hidden-print{display:none!important}}
/*!
* Hover.css (http://ianlunn.github.io/Hover/)
* Version: 2.0.1
* Author: Ian Lunn @IanLunn
* Author URL: http://ianlunn.co.uk/
* Github: https://github.com/IanLunn/Hover
* Made available under a MIT License:
* http://www.opensource.org/licenses/mit-license.php
* Hover.css Copyright Ian Lunn 2014. Generated with Sass.
*/.hvr-grow{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:transform;transition-property:transform}.hvr-grow:active,.hvr-grow:focus,.hvr-grow:hover{-webkit-transform:scale(1.1);transform:scale(1.1)}.hvr-shrink{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:transform;transition-property:transform}.hvr-shrink:active,.hvr-shrink:focus,.hvr-shrink:hover{-webkit-transform:scale(0.9);transform:scale(0.9)}@-webkit-keyframes hvr-pulse{25%{-webkit-transform:scale(1.1);transform:scale(1.1)}75%{-webkit-transform:scale(0.9);transform:scale(0.9)}}@keyframes hvr-pulse{25%{-webkit-transform:scale(1.1);transform:scale(1.1)}75%{-webkit-transform:scale(0.9);transform:scale(0.9)}}.hvr-pulse{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale}.hvr-pulse:active,.hvr-pulse:focus,.hvr-pulse:hover{-webkit-animation-name:hvr-pulse;animation-name:hvr-pulse;-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-timing-function:linear;animation-timing-function:linear;-webkit-animation-iteration-count:infinite;animation-iteration-count:infinite}@-webkit-keyframes hvr-pulse-grow{to{-webkit-transform:scale(1.1);transform:scale(1.1)}}@keyframes hvr-pulse-grow{to{-webkit-transform:scale(1.1);transform:scale(1.1)}}.hvr-pulse-grow{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale}.hvr-pulse-grow:active,.hvr-pulse-grow:focus,.hvr-pulse-grow:hover{-webkit-animation-name:hvr-pulse-grow;animation-name:hvr-pulse-grow;-webkit-animation-duration:.3s;animation-duration:.3s;-webkit-animation-timing-function:linear;animation-timing-function:linear;-webkit-animation-iteration-count:infinite;animation-iteration-count:infinite;-webkit-animation-direction:alternate;animation-direction:alternate}@-webkit-keyframes hvr-pulse-shrink{to{-webkit-transform:scale(0.9);transform:scale(0.9)}}@keyframes hvr-pulse-shrink{to{-webkit-transform:scale(0.9);transform:scale(0.9)}}.hvr-pulse-shrink{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale}.hvr-pulse-shrink:active,.hvr-pulse-shrink:focus,.hvr-pulse-shrink:hover{-webkit-animation-name:hvr-pulse-shrink;animation-name:hvr-pulse-shrink;-webkit-animation-duration:.3s;animation-duration:.3s;-webkit-animation-timing-function:linear;animation-timing-function:linear;-webkit-animation-iteration-count:infinite;animation-iteration-count:infinite;-webkit-animation-direction:alternate;animation-direction:alternate}@-webkit-keyframes hvr-push{50%{-webkit-transform:scale(0.8);transform:scale(0.8)}100%{-webkit-transform:scale(1);transform:scale(1)}}@keyframes hvr-push{50%{-webkit-transform:scale(0.8);transform:scale(0.8)}100%{-webkit-transform:scale(1);transform:scale(1)}}.hvr-push{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale}.hvr-push:active,.hvr-push:focus,.hvr-push:hover{-webkit-animation-name:hvr-push;animation-name:hvr-push;-webkit-animation-duration:.3s;animation-duration:.3s;-webkit-animation-timing-function:linear;animation-timing-function:linear;-webkit-animation-iteration-count:1;animation-iteration-count:1}@-webkit-keyframes hvr-pop{50%{-webkit-transform:scale(1.2);transform:scale(1.2)}}@keyframes hvr-pop{50%{-webkit-transform:scale(1.2);transform:scale(1.2)}}.hvr-pop{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale}.hvr-pop:active,.hvr-pop:focus,.hvr-pop:hover{-webkit-animation-name:hvr-pop;animation-name:hvr-pop;-webkit-animation-duration:.3s;animation-duration:.3s;-webkit-animation-timing-function:linear;animation-timing-function:linear;-webkit-animation-iteration-count:1;animation-iteration-count:1}.hvr-bounce-in{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;-webkit-transition-duration:.5s;transition-duration:.5s}.hvr-bounce-in:active,.hvr-bounce-in:focus,.hvr-bounce-in:hover{-webkit-transform:scale(1.2);transform:scale(1.2);-webkit-transition-timing-function:cubic-bezier(0.47,2.02,.31,-.36);transition-timing-function:cubic-bezier(0.47,2.02,.31,-.36)}.hvr-bounce-out{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;-webkit-transition-duration:.5s;transition-duration:.5s}.hvr-bounce-out:active,.hvr-bounce-out:focus,.hvr-bounce-out:hover{-webkit-transform:scale(0.8);transform:scale(0.8);-webkit-transition-timing-function:cubic-bezier(0.47,2.02,.31,-.36);transition-timing-function:cubic-bezier(0.47,2.02,.31,-.36)}.hvr-rotate{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:transform;transition-property:transform}.hvr-rotate:active,.hvr-rotate:focus,.hvr-rotate:hover{-webkit-transform:rotate(4deg);transform:rotate(4deg)}.hvr-grow-rotate{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:transform;transition-property:transform}.hvr-grow-rotate:active,.hvr-grow-rotate:focus,.hvr-grow-rotate:hover{-webkit-transform:scale(1.1) rotate(4deg);transform:scale(1.1) rotate(4deg)}.hvr-float{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:transform;transition-property:transform;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-float:active,.hvr-float:focus,.hvr-float:hover{-webkit-transform:translateY(-8px);transform:translateY(-8px)}.hvr-sink{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:transform;transition-property:transform;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-sink:active,.hvr-sink:focus,.hvr-sink:hover{-webkit-transform:translateY(8px);transform:translateY(8px)}@-webkit-keyframes hvr-bob{0%{-webkit-transform:translateY(-8px);transform:translateY(-8px)}50%{-webkit-transform:translateY(-4px);transform:translateY(-4px)}100%{-webkit-transform:translateY(-8px);transform:translateY(-8px)}}@keyframes hvr-bob{0%{-webkit-transform:translateY(-8px);transform:translateY(-8px)}50%{-webkit-transform:translateY(-4px);transform:translateY(-4px)}100%{-webkit-transform:translateY(-8px);transform:translateY(-8px)}}@-webkit-keyframes hvr-bob-float{100%{-webkit-transform:translateY(-8px);transform:translateY(-8px)}}@keyframes hvr-bob-float{100%{-webkit-transform:translateY(-8px);transform:translateY(-8px)}}.hvr-bob{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale}.hvr-bob:active,.hvr-bob:focus,.hvr-bob:hover{-webkit-animation-name:hvr-bob-float,hvr-bob;animation-name:hvr-bob-float,hvr-bob;-webkit-animation-duration:.3s,1.5s;animation-duration:.3s,1.5s;-webkit-animation-delay:0s,.3s;animation-delay:0s,.3s;-webkit-animation-timing-function:ease-out,ease-in-out;animation-timing-function:ease-out,ease-in-out;-webkit-animation-iteration-count:1,infinite;animation-iteration-count:1,infinite;-webkit-animation-fill-mode:forwards;animation-fill-mode:forwards;-webkit-animation-direction:normal,alternate;animation-direction:normal,alternate}@-webkit-keyframes hvr-hang{0%{-webkit-transform:translateY(8px);transform:translateY(8px)}50%{-webkit-transform:translateY(4px);transform:translateY(4px)}100%{-webkit-transform:translateY(8px);transform:translateY(8px)}}@keyframes hvr-hang{0%{-webkit-transform:translateY(8px);transform:translateY(8px)}50%{-webkit-transform:translateY(4px);transform:translateY(4px)}100%{-webkit-transform:translateY(8px);transform:translateY(8px)}}@-webkit-keyframes hvr-hang-sink{100%{-webkit-transform:translateY(8px);transform:translateY(8px)}}@keyframes hvr-hang-sink{100%{-webkit-transform:translateY(8px);transform:translateY(8px)}}.hvr-hang{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale}.hvr-hang:active,.hvr-hang:focus,.hvr-hang:hover{-webkit-animation-name:hvr-hang-sink,hvr-hang;animation-name:hvr-hang-sink,hvr-hang;-webkit-animation-duration:.3s,1.5s;animation-duration:.3s,1.5s;-webkit-animation-delay:0s,.3s;animation-delay:0s,.3s;-webkit-animation-timing-function:ease-out,ease-in-out;animation-timing-function:ease-out,ease-in-out;-webkit-animation-iteration-count:1,infinite;animation-iteration-count:1,infinite;-webkit-animation-fill-mode:forwards;animation-fill-mode:forwards;-webkit-animation-direction:normal,alternate;animation-direction:normal,alternate}.hvr-skew{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:transform;transition-property:transform}.hvr-skew:active,.hvr-skew:focus,.hvr-skew:hover{-webkit-transform:skew(-10deg);transform:skew(-10deg)}.hvr-skew-forward{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:transform;transition-property:transform;-webkit-transform-origin:0 100%;transform-origin:0 100%}.hvr-skew-forward:active,.hvr-skew-forward:focus,.hvr-skew-forward:hover{-webkit-transform:skew(-10deg);transform:skew(-10deg)}.hvr-skew-backward{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:transform;transition-property:transform;-webkit-transform-origin:0 100%;transform-origin:0 100%}.hvr-skew-backward:active,.hvr-skew-backward:focus,.hvr-skew-backward:hover{-webkit-transform:skew(10deg);transform:skew(10deg)}@-webkit-keyframes hvr-wobble-vertical{16.65%{-webkit-transform:translateY(8px);transform:translateY(8px)}33.3%{-webkit-transform:translateY(-6px);transform:translateY(-6px)}49.95%{-webkit-transform:translateY(4px);transform:translateY(4px)}66.6%{-webkit-transform:translateY(-2px);transform:translateY(-2px)}83.25%{-webkit-transform:translateY(1px);transform:translateY(1px)}100%{-webkit-transform:translateY(0);transform:translateY(0)}}@keyframes hvr-wobble-vertical{16.65%{-webkit-transform:translateY(8px);transform:translateY(8px)}33.3%{-webkit-transform:translateY(-6px);transform:translateY(-6px)}49.95%{-webkit-transform:translateY(4px);transform:translateY(4px)}66.6%{-webkit-transform:translateY(-2px);transform:translateY(-2px)}83.25%{-webkit-transform:translateY(1px);transform:translateY(1px)}100%{-webkit-transform:translateY(0);transform:translateY(0)}}.hvr-wobble-vertical{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale}.hvr-wobble-vertical:active,.hvr-wobble-vertical:focus,.hvr-wobble-vertical:hover{-webkit-animation-name:hvr-wobble-vertical;animation-name:hvr-wobble-vertical;-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-timing-function:ease-in-out;animation-timing-function:ease-in-out;-webkit-animation-iteration-count:1;animation-iteration-count:1}@-webkit-keyframes hvr-wobble-horizontal{16.65%{-webkit-transform:translateX(8px);transform:translateX(8px)}33.3%{-webkit-transform:translateX(-6px);transform:translateX(-6px)}49.95%{-webkit-transform:translateX(4px);transform:translateX(4px)}66.6%{-webkit-transform:translateX(-2px);transform:translateX(-2px)}83.25%{-webkit-transform:translateX(1px);transform:translateX(1px)}100%{-webkit-transform:translateX(0);transform:translateX(0)}}@keyframes hvr-wobble-horizontal{16.65%{-webkit-transform:translateX(8px);transform:translateX(8px)}33.3%{-webkit-transform:translateX(-6px);transform:translateX(-6px)}49.95%{-webkit-transform:translateX(4px);transform:translateX(4px)}66.6%{-webkit-transform:translateX(-2px);transform:translateX(-2px)}83.25%{-webkit-transform:translateX(1px);transform:translateX(1px)}100%{-webkit-transform:translateX(0);transform:translateX(0)}}.hvr-wobble-horizontal{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale}.hvr-wobble-horizontal:active,.hvr-wobble-horizontal:focus,.hvr-wobble-horizontal:hover{-webkit-animation-name:hvr-wobble-horizontal;animation-name:hvr-wobble-horizontal;-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-timing-function:ease-in-out;animation-timing-function:ease-in-out;-webkit-animation-iteration-count:1;animation-iteration-count:1}@-webkit-keyframes hvr-wobble-to-bottom-right{16.65%{-webkit-transform:translate(8px,8px);transform:translate(8px,8px)}33.3%{-webkit-transform:translate(-6px,-6px);transform:translate(-6px,-6px)}49.95%{-webkit-transform:translate(4px,4px);transform:translate(4px,4px)}66.6%{-webkit-transform:translate(-2px,-2px);transform:translate(-2px,-2px)}83.25%{-webkit-transform:translate(1px,1px);transform:translate(1px,1px)}100%{-webkit-transform:translate(0,0);transform:translate(0,0)}}@keyframes hvr-wobble-to-bottom-right{16.65%{-webkit-transform:translate(8px,8px);transform:translate(8px,8px)}33.3%{-webkit-transform:translate(-6px,-6px);transform:translate(-6px,-6px)}49.95%{-webkit-transform:translate(4px,4px);transform:translate(4px,4px)}66.6%{-webkit-transform:translate(-2px,-2px);transform:translate(-2px,-2px)}83.25%{-webkit-transform:translate(1px,1px);transform:translate(1px,1px)}100%{-webkit-transform:translate(0,0);transform:translate(0,0)}}.hvr-wobble-to-bottom-right{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale}.hvr-wobble-to-bottom-right:active,.hvr-wobble-to-bottom-right:focus,.hvr-wobble-to-bottom-right:hover{-webkit-animation-name:hvr-wobble-to-bottom-right;animation-name:hvr-wobble-to-bottom-right;-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-timing-function:ease-in-out;animation-timing-function:ease-in-out;-webkit-animation-iteration-count:1;animation-iteration-count:1}@-webkit-keyframes hvr-wobble-to-top-right{16.65%{-webkit-transform:translate(8px,-8px);transform:translate(8px,-8px)}33.3%{-webkit-transform:translate(-6px,6px);transform:translate(-6px,6px)}49.95%{-webkit-transform:translate(4px,-4px);transform:translate(4px,-4px)}66.6%{-webkit-transform:translate(-2px,2px);transform:translate(-2px,2px)}83.25%{-webkit-transform:translate(1px,-1px);transform:translate(1px,-1px)}100%{-webkit-transform:translate(0,0);transform:translate(0,0)}}@keyframes hvr-wobble-to-top-right{16.65%{-webkit-transform:translate(8px,-8px);transform:translate(8px,-8px)}33.3%{-webkit-transform:translate(-6px,6px);transform:translate(-6px,6px)}49.95%{-webkit-transform:translate(4px,-4px);transform:translate(4px,-4px)}66.6%{-webkit-transform:translate(-2px,2px);transform:translate(-2px,2px)}83.25%{-webkit-transform:translate(1px,-1px);transform:translate(1px,-1px)}100%{-webkit-transform:translate(0,0);transform:translate(0,0)}}.hvr-wobble-to-top-right{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale}.hvr-wobble-to-top-right:active,.hvr-wobble-to-top-right:focus,.hvr-wobble-to-top-right:hover{-webkit-animation-name:hvr-wobble-to-top-right;animation-name:hvr-wobble-to-top-right;-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-timing-function:ease-in-out;animation-timing-function:ease-in-out;-webkit-animation-iteration-count:1;animation-iteration-count:1}@-webkit-keyframes hvr-wobble-top{16.65%{-webkit-transform:skew(-12deg);transform:skew(-12deg)}33.3%{-webkit-transform:skew(10deg);transform:skew(10deg)}49.95%{-webkit-transform:skew(-6deg);transform:skew(-6deg)}66.6%{-webkit-transform:skew(4deg);transform:skew(4deg)}83.25%{-webkit-transform:skew(-2deg);transform:skew(-2deg)}100%{-webkit-transform:skew(0);transform:skew(0)}}@keyframes hvr-wobble-top{16.65%{-webkit-transform:skew(-12deg);transform:skew(-12deg)}33.3%{-webkit-transform:skew(10deg);transform:skew(10deg)}49.95%{-webkit-transform:skew(-6deg);transform:skew(-6deg)}66.6%{-webkit-transform:skew(4deg);transform:skew(4deg)}83.25%{-webkit-transform:skew(-2deg);transform:skew(-2deg)}100%{-webkit-transform:skew(0);transform:skew(0)}}.hvr-wobble-top{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;-webkit-transform-origin:0 100%;transform-origin:0 100%}.hvr-wobble-top:active,.hvr-wobble-top:focus,.hvr-wobble-top:hover{-webkit-animation-name:hvr-wobble-top;animation-name:hvr-wobble-top;-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-timing-function:ease-in-out;animation-timing-function:ease-in-out;-webkit-animation-iteration-count:1;animation-iteration-count:1}@-webkit-keyframes hvr-wobble-bottom{16.65%{-webkit-transform:skew(-12deg);transform:skew(-12deg)}33.3%{-webkit-transform:skew(10deg);transform:skew(10deg)}49.95%{-webkit-transform:skew(-6deg);transform:skew(-6deg)}66.6%{-webkit-transform:skew(4deg);transform:skew(4deg)}83.25%{-webkit-transform:skew(-2deg);transform:skew(-2deg)}100%{-webkit-transform:skew(0);transform:skew(0)}}@keyframes hvr-wobble-bottom{16.65%{-webkit-transform:skew(-12deg);transform:skew(-12deg)}33.3%{-webkit-transform:skew(10deg);transform:skew(10deg)}49.95%{-webkit-transform:skew(-6deg);transform:skew(-6deg)}66.6%{-webkit-transform:skew(4deg);transform:skew(4deg)}83.25%{-webkit-transform:skew(-2deg);transform:skew(-2deg)}100%{-webkit-transform:skew(0);transform:skew(0)}}.hvr-wobble-bottom{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;-webkit-transform-origin:100% 0;transform-origin:100% 0}.hvr-wobble-bottom:active,.hvr-wobble-bottom:focus,.hvr-wobble-bottom:hover{-webkit-animation-name:hvr-wobble-bottom;animation-name:hvr-wobble-bottom;-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-timing-function:ease-in-out;animation-timing-function:ease-in-out;-webkit-animation-iteration-count:1;animation-iteration-count:1}@-webkit-keyframes hvr-wobble-skew{16.65%{-webkit-transform:skew(-12deg);transform:skew(-12deg)}33.3%{-webkit-transform:skew(10deg);transform:skew(10deg)}49.95%{-webkit-transform:skew(-6deg);transform:skew(-6deg)}66.6%{-webkit-transform:skew(4deg);transform:skew(4deg)}83.25%{-webkit-transform:skew(-2deg);transform:skew(-2deg)}100%{-webkit-transform:skew(0);transform:skew(0)}}@keyframes hvr-wobble-skew{16.65%{-webkit-transform:skew(-12deg);transform:skew(-12deg)}33.3%{-webkit-transform:skew(10deg);transform:skew(10deg)}49.95%{-webkit-transform:skew(-6deg);transform:skew(-6deg)}66.6%{-webkit-transform:skew(4deg);transform:skew(4deg)}83.25%{-webkit-transform:skew(-2deg);transform:skew(-2deg)}100%{-webkit-transform:skew(0);transform:skew(0)}}.hvr-wobble-skew{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale}.hvr-wobble-skew:active,.hvr-wobble-skew:focus,.hvr-wobble-skew:hover{-webkit-animation-name:hvr-wobble-skew;animation-name:hvr-wobble-skew;-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-timing-function:ease-in-out;animation-timing-function:ease-in-out;-webkit-animation-iteration-count:1;animation-iteration-count:1}@-webkit-keyframes hvr-buzz{50%{-webkit-transform:translateX(3px) rotate(2deg);transform:translateX(3px) rotate(2deg)}100%{-webkit-transform:translateX(-3px) rotate(-2deg);transform:translateX(-3px) rotate(-2deg)}}@keyframes hvr-buzz{50%{-webkit-transform:translateX(3px) rotate(2deg);transform:translateX(3px) rotate(2deg)}100%{-webkit-transform:translateX(-3px) rotate(-2deg);transform:translateX(-3px) rotate(-2deg)}}.hvr-buzz{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale}.hvr-buzz:active,.hvr-buzz:focus,.hvr-buzz:hover{-webkit-animation-name:hvr-buzz;animation-name:hvr-buzz;-webkit-animation-duration:.15s;animation-duration:.15s;-webkit-animation-timing-function:linear;animation-timing-function:linear;-webkit-animation-iteration-count:infinite;animation-iteration-count:infinite}@-webkit-keyframes hvr-buzz-out{10%{-webkit-transform:translateX(3px) rotate(2deg);transform:translateX(3px) rotate(2deg)}20%{-webkit-transform:translateX(-3px) rotate(-2deg);transform:translateX(-3px) rotate(-2deg)}30%{-webkit-transform:translateX(3px) rotate(2deg);transform:translateX(3px) rotate(2deg)}40%{-webkit-transform:translateX(-3px) rotate(-2deg);transform:translateX(-3px) rotate(-2deg)}50%{-webkit-transform:translateX(2px) rotate(1deg);transform:translateX(2px) rotate(1deg)}60%{-webkit-transform:translateX(-2px) rotate(-1deg);transform:translateX(-2px) rotate(-1deg)}70%{-webkit-transform:translateX(2px) rotate(1deg);transform:translateX(2px) rotate(1deg)}80%{-webkit-transform:translateX(-2px) rotate(-1deg);transform:translateX(-2px) rotate(-1deg)}90%{-webkit-transform:translateX(1px) rotate(0);transform:translateX(1px) rotate(0)}100%{-webkit-transform:translateX(-1px) rotate(0);transform:translateX(-1px) rotate(0)}}@keyframes hvr-buzz-out{10%{-webkit-transform:translateX(3px) rotate(2deg);transform:translateX(3px) rotate(2deg)}20%{-webkit-transform:translateX(-3px) rotate(-2deg);transform:translateX(-3px) rotate(-2deg)}30%{-webkit-transform:translateX(3px) rotate(2deg);transform:translateX(3px) rotate(2deg)}40%{-webkit-transform:translateX(-3px) rotate(-2deg);transform:translateX(-3px) rotate(-2deg)}50%{-webkit-transform:translateX(2px) rotate(1deg);transform:translateX(2px) rotate(1deg)}60%{-webkit-transform:translateX(-2px) rotate(-1deg);transform:translateX(-2px) rotate(-1deg)}70%{-webkit-transform:translateX(2px) rotate(1deg);transform:translateX(2px) rotate(1deg)}80%{-webkit-transform:translateX(-2px) rotate(-1deg);transform:translateX(-2px) rotate(-1deg)}90%{-webkit-transform:translateX(1px) rotate(0);transform:translateX(1px) rotate(0)}100%{-webkit-transform:translateX(-1px) rotate(0);transform:translateX(-1px) rotate(0)}}.hvr-buzz-out{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale}.hvr-buzz-out:active,.hvr-buzz-out:focus,.hvr-buzz-out:hover{-webkit-animation-name:hvr-buzz-out;animation-name:hvr-buzz-out;-webkit-animation-duration:.75s;animation-duration:.75s;-webkit-animation-timing-function:linear;animation-timing-function:linear;-webkit-animation-iteration-count:1;animation-iteration-count:1}.hvr-fade{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;overflow:hidden;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:color,background-color;transition-property:color,background-color}.hvr-fade:active,.hvr-fade:focus,.hvr-fade:hover{background-color:#2098d1;color:#fff}@-webkit-keyframes hvr-back-pulse{50%{background-color:rgba(32,152,209,.75)}}@keyframes hvr-back-pulse{50%{background-color:rgba(32,152,209,.75)}}.hvr-back-pulse{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;overflow:hidden;-webkit-transition-duration:.5s;transition-duration:.5s;-webkit-transition-property:color,background-color;transition-property:color,background-color}.hvr-back-pulse:active,.hvr-back-pulse:focus,.hvr-back-pulse:hover{-webkit-animation-name:hvr-back-pulse;animation-name:hvr-back-pulse;-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-delay:.5s;animation-delay:.5s;-webkit-animation-timing-function:linear;animation-timing-function:linear;-webkit-animation-iteration-count:infinite;animation-iteration-count:infinite;background-color:#2098d1;background-color:#2098d1;color:#fff}.hvr-sweep-to-right{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;-webkit-transition-property:color;transition-property:color;-webkit-transition-duration:.3s;transition-duration:.3s}.hvr-sweep-to-right:before{content:"";position:absolute;z-index:-1;top:0;left:0;right:0;bottom:0;background:#2098d1;-webkit-transform:scaleX(0);transform:scaleX(0);-webkit-transform-origin:0 50%;transform-origin:0 50%;-webkit-transition-property:transform;transition-property:transform;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-sweep-to-right:active,.hvr-sweep-to-right:focus,.hvr-sweep-to-right:hover{color:#fff}.hvr-sweep-to-right:active:before,.hvr-sweep-to-right:focus:before,.hvr-sweep-to-right:hover:before{-webkit-transform:scaleX(1);transform:scaleX(1)}.hvr-sweep-to-left{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;-webkit-transition-property:color;transition-property:color;-webkit-transition-duration:.3s;transition-duration:.3s}.hvr-sweep-to-left:before{content:"";position:absolute;z-index:-1;top:0;left:0;right:0;bottom:0;background:#2098d1;-webkit-transform:scaleX(0);transform:scaleX(0);-webkit-transform-origin:100% 50%;transform-origin:100% 50%;-webkit-transition-property:transform;transition-property:transform;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-sweep-to-left:active,.hvr-sweep-to-left:focus,.hvr-sweep-to-left:hover{color:#fff}.hvr-sweep-to-left:active:before,.hvr-sweep-to-left:focus:before,.hvr-sweep-to-left:hover:before{-webkit-transform:scaleX(1);transform:scaleX(1)}.hvr-sweep-to-bottom{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;-webkit-transition-property:color;transition-property:color;-webkit-transition-duration:.3s;transition-duration:.3s}.hvr-sweep-to-bottom:before{content:"";position:absolute;z-index:-1;top:0;left:0;right:0;bottom:0;background:#2098d1;-webkit-transform:scaleY(0);transform:scaleY(0);-webkit-transform-origin:50% 0;transform-origin:50% 0;-webkit-transition-property:transform;transition-property:transform;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-sweep-to-bottom:active,.hvr-sweep-to-bottom:focus,.hvr-sweep-to-bottom:hover{color:#fff}.hvr-sweep-to-bottom:active:before,.hvr-sweep-to-bottom:focus:before,.hvr-sweep-to-bottom:hover:before{-webkit-transform:scaleY(1);transform:scaleY(1)}.hvr-sweep-to-top{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;-webkit-transition-property:color;transition-property:color;-webkit-transition-duration:.3s;transition-duration:.3s}.hvr-sweep-to-top:before{content:"";position:absolute;z-index:-1;top:0;left:0;right:0;bottom:0;background:#2098d1;-webkit-transform:scaleY(0);transform:scaleY(0);-webkit-transform-origin:50% 100%;transform-origin:50% 100%;-webkit-transition-property:transform;transition-property:transform;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-sweep-to-top:active,.hvr-sweep-to-top:focus,.hvr-sweep-to-top:hover{color:#fff}.hvr-sweep-to-top:active:before,.hvr-sweep-to-top:focus:before,.hvr-sweep-to-top:hover:before{-webkit-transform:scaleY(1);transform:scaleY(1)}.hvr-bounce-to-right{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;-webkit-transition-property:color;transition-property:color;-webkit-transition-duration:.5s;transition-duration:.5s}.hvr-bounce-to-right:before{content:"";position:absolute;z-index:-1;top:0;left:0;right:0;bottom:0;background:#2098d1;-webkit-transform:scaleX(0);transform:scaleX(0);-webkit-transform-origin:0 50%;transform-origin:0 50%;-webkit-transition-property:transform;transition-property:transform;-webkit-transition-duration:.5s;transition-duration:.5s;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-bounce-to-right:active,.hvr-bounce-to-right:focus,.hvr-bounce-to-right:hover{color:#fff}.hvr-bounce-to-right:active:before,.hvr-bounce-to-right:focus:before,.hvr-bounce-to-right:hover:before{-webkit-transform:scaleX(1);transform:scaleX(1);-webkit-transition-timing-function:cubic-bezier(0.52,1.64,.37,.66);transition-timing-function:cubic-bezier(0.52,1.64,.37,.66)}.hvr-bounce-to-left{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;-webkit-transition-property:color;transition-property:color;-webkit-transition-duration:.5s;transition-duration:.5s}.hvr-bounce-to-left:before{content:"";position:absolute;z-index:-1;top:0;left:0;right:0;bottom:0;background:#2098d1;-webkit-transform:scaleX(0);transform:scaleX(0);-webkit-transform-origin:100% 50%;transform-origin:100% 50%;-webkit-transition-property:transform;transition-property:transform;-webkit-transition-duration:.5s;transition-duration:.5s;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-bounce-to-left:active,.hvr-bounce-to-left:focus,.hvr-bounce-to-left:hover{color:#fff}.hvr-bounce-to-left:active:before,.hvr-bounce-to-left:focus:before,.hvr-bounce-to-left:hover:before{-webkit-transform:scaleX(1);transform:scaleX(1);-webkit-transition-timing-function:cubic-bezier(0.52,1.64,.37,.66);transition-timing-function:cubic-bezier(0.52,1.64,.37,.66)}.hvr-bounce-to-bottom{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;-webkit-transition-property:color;transition-property:color;-webkit-transition-duration:.5s;transition-duration:.5s}.hvr-bounce-to-bottom:before{content:"";position:absolute;z-index:-1;top:0;left:0;right:0;bottom:0;background:#2098d1;-webkit-transform:scaleY(0);transform:scaleY(0);-webkit-transform-origin:50% 0;transform-origin:50% 0;-webkit-transition-property:transform;transition-property:transform;-webkit-transition-duration:.5s;transition-duration:.5s;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-bounce-to-bottom:active,.hvr-bounce-to-bottom:focus,.hvr-bounce-to-bottom:hover{color:#fff}.hvr-bounce-to-bottom:active:before,.hvr-bounce-to-bottom:focus:before,.hvr-bounce-to-bottom:hover:before{-webkit-transform:scaleY(1);transform:scaleY(1);-webkit-transition-timing-function:cubic-bezier(0.52,1.64,.37,.66);transition-timing-function:cubic-bezier(0.52,1.64,.37,.66)}.hvr-bounce-to-top{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;-webkit-transition-property:color;transition-property:color;-webkit-transition-duration:.5s;transition-duration:.5s}.hvr-bounce-to-top:before{content:"";position:absolute;z-index:-1;top:0;left:0;right:0;bottom:0;background:#2098d1;-webkit-transform:scaleY(0);transform:scaleY(0);-webkit-transform-origin:50% 100%;transform-origin:50% 100%;-webkit-transition-property:transform;transition-property:transform;-webkit-transition-duration:.5s;transition-duration:.5s;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-bounce-to-top:active,.hvr-bounce-to-top:focus,.hvr-bounce-to-top:hover{color:#fff}.hvr-bounce-to-top:active:before,.hvr-bounce-to-top:focus:before,.hvr-bounce-to-top:hover:before{-webkit-transform:scaleY(1);transform:scaleY(1);-webkit-transition-timing-function:cubic-bezier(0.52,1.64,.37,.66);transition-timing-function:cubic-bezier(0.52,1.64,.37,.66)}.hvr-radial-out{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;overflow:hidden;background:#e1e1e1;-webkit-transition-property:color;transition-property:color;-webkit-transition-duration:.3s;transition-duration:.3s}.hvr-radial-out:before{content:"";position:absolute;z-index:-1;top:0;left:0;right:0;bottom:0;background:#2098d1;border-radius:100%;-webkit-transform:scale(0);transform:scale(0);-webkit-transition-property:transform;transition-property:transform;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-radial-out:active,.hvr-radial-out:focus,.hvr-radial-out:hover{color:#fff}.hvr-radial-out:active:before,.hvr-radial-out:focus:before,.hvr-radial-out:hover:before{-webkit-transform:scale(2);transform:scale(2)}.hvr-radial-in{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;overflow:hidden;background:#2098d1;-webkit-transition-property:color;transition-property:color;-webkit-transition-duration:.3s;transition-duration:.3s}.hvr-radial-in:before{content:"";position:absolute;z-index:-1;top:0;left:0;right:0;bottom:0;background:#e1e1e1;border-radius:100%;-webkit-transform:scale(2);transform:scale(2);-webkit-transition-property:transform;transition-property:transform;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-radial-in:active,.hvr-radial-in:focus,.hvr-radial-in:hover{color:#fff}.hvr-radial-in:active:before,.hvr-radial-in:focus:before,.hvr-radial-in:hover:before{-webkit-transform:scale(0);transform:scale(0)}.hvr-rectangle-in{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;background:#2098d1;-webkit-transition-property:color;transition-property:color;-webkit-transition-duration:.3s;transition-duration:.3s}.hvr-rectangle-in:before{content:"";position:absolute;z-index:-1;top:0;left:0;right:0;bottom:0;background:#e1e1e1;-webkit-transform:scale(1);transform:scale(1);-webkit-transition-property:transform;transition-property:transform;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-rectangle-in:active,.hvr-rectangle-in:focus,.hvr-rectangle-in:hover{color:#fff}.hvr-rectangle-in:active:before,.hvr-rectangle-in:focus:before,.hvr-rectangle-in:hover:before{-webkit-transform:scale(0);transform:scale(0)}.hvr-rectangle-out{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;background:#e1e1e1;-webkit-transition-property:color;transition-property:color;-webkit-transition-duration:.3s;transition-duration:.3s}.hvr-rectangle-out:before{content:"";position:absolute;z-index:-1;top:0;left:0;right:0;bottom:0;background:#2098d1;-webkit-transform:scale(0);transform:scale(0);-webkit-transition-property:transform;transition-property:transform;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-rectangle-out:active,.hvr-rectangle-out:focus,.hvr-rectangle-out:hover{color:#fff}.hvr-rectangle-out:active:before,.hvr-rectangle-out:focus:before,.hvr-rectangle-out:hover:before{-webkit-transform:scale(1);transform:scale(1)}.hvr-shutter-in-horizontal{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;background:#2098d1;-webkit-transition-property:color;transition-property:color;-webkit-transition-duration:.3s;transition-duration:.3s}.hvr-shutter-in-horizontal:before{content:"";position:absolute;z-index:-1;top:0;bottom:0;left:0;right:0;background:#e1e1e1;-webkit-transform:scaleX(1);transform:scaleX(1);-webkit-transform-origin:50%;transform-origin:50%;-webkit-transition-property:transform;transition-property:transform;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-shutter-in-horizontal:active,.hvr-shutter-in-horizontal:focus,.hvr-shutter-in-horizontal:hover{color:#fff}.hvr-shutter-in-horizontal:active:before,.hvr-shutter-in-horizontal:focus:before,.hvr-shutter-in-horizontal:hover:before{-webkit-transform:scaleX(0);transform:scaleX(0)}.hvr-shutter-out-horizontal{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;background:#e1e1e1;-webkit-transition-property:color;transition-property:color;-webkit-transition-duration:.3s;transition-duration:.3s}.hvr-shutter-out-horizontal:before{content:"";position:absolute;z-index:-1;top:0;bottom:0;left:0;right:0;background:#2098d1;-webkit-transform:scaleX(0);transform:scaleX(0);-webkit-transform-origin:50%;transform-origin:50%;-webkit-transition-property:transform;transition-property:transform;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-shutter-out-horizontal:active,.hvr-shutter-out-horizontal:focus,.hvr-shutter-out-horizontal:hover{color:#fff}.hvr-shutter-out-horizontal:active:before,.hvr-shutter-out-horizontal:focus:before,.hvr-shutter-out-horizontal:hover:before{-webkit-transform:scaleX(1);transform:scaleX(1)}.hvr-shutter-in-vertical{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;background:#2098d1;-webkit-transition-property:color;transition-property:color;-webkit-transition-duration:.3s;transition-duration:.3s}.hvr-shutter-in-vertical:before{content:"";position:absolute;z-index:-1;top:0;bottom:0;left:0;right:0;background:#e1e1e1;-webkit-transform:scaleY(1);transform:scaleY(1);-webkit-transform-origin:50%;transform-origin:50%;-webkit-transition-property:transform;transition-property:transform;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-shutter-in-vertical:active,.hvr-shutter-in-vertical:focus,.hvr-shutter-in-vertical:hover{color:#fff}.hvr-shutter-in-vertical:active:before,.hvr-shutter-in-vertical:focus:before,.hvr-shutter-in-vertical:hover:before{-webkit-transform:scaleY(0);transform:scaleY(0)}.hvr-shutter-out-vertical{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;background:#e1e1e1;-webkit-transition-property:color;transition-property:color;-webkit-transition-duration:.3s;transition-duration:.3s}.hvr-shutter-out-vertical:before{content:"";position:absolute;z-index:-1;top:0;bottom:0;left:0;right:0;background:#2098d1;-webkit-transform:scaleY(0);transform:scaleY(0);-webkit-transform-origin:50%;transform-origin:50%;-webkit-transition-property:transform;transition-property:transform;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-shutter-out-vertical:active,.hvr-shutter-out-vertical:focus,.hvr-shutter-out-vertical:hover{color:#fff}.hvr-shutter-out-vertical:active:before,.hvr-shutter-out-vertical:focus:before,.hvr-shutter-out-vertical:hover:before{-webkit-transform:scaleY(1);transform:scaleY(1)}.hvr-border-fade{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:box-shadow;transition-property:box-shadow;box-shadow:inset 0 0 0 4px #e1e1e1,0 0 1px rgba(0,0,0,0)}.hvr-border-fade:active,.hvr-border-fade:focus,.hvr-border-fade:hover{box-shadow:inset 0 0 0 4px #2098d1,0 0 1px rgba(0,0,0,0)}.hvr-hollow{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:background;transition-property:background;box-shadow:inset 0 0 0 4px #e1e1e1,0 0 1px rgba(0,0,0,0)}.hvr-hollow:active,.hvr-hollow:focus,.hvr-hollow:hover{background:0 0}.hvr-trim{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative}.hvr-trim:before{content:'';position:absolute;border:#fff solid 4px;top:4px;left:4px;right:4px;bottom:4px;opacity:0;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:opacity;transition-property:opacity}.hvr-trim:active:before,.hvr-trim:focus:before,.hvr-trim:hover:before{opacity:1}@-webkit-keyframes hvr-ripple-out{100%{top:-12px;right:-12px;bottom:-12px;left:-12px;opacity:0}}@keyframes hvr-ripple-out{100%{top:-12px;right:-12px;bottom:-12px;left:-12px;opacity:0}}.hvr-ripple-out{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative}.hvr-ripple-out:before{content:'';position:absolute;border:#e1e1e1 solid 2px;top:0;right:0;bottom:0;left:0;-webkit-animation-duration:1s;animation-duration:1s}.hvr-ripple-out:active:before,.hvr-ripple-out:focus:before,.hvr-ripple-out:hover:before{-webkit-animation-name:hvr-ripple-out;animation-name:hvr-ripple-out}@-webkit-keyframes hvr-ripple-in{100%{top:0;right:0;bottom:0;left:0;opacity:1}}@keyframes hvr-ripple-in{100%{top:0;right:0;bottom:0;left:0;opacity:1}}.hvr-ripple-in{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative}.hvr-ripple-in:before{content:'';position:absolute;border:#e1e1e1 solid 4px;top:-12px;right:-12px;bottom:-12px;left:-12px;opacity:0;-webkit-animation-duration:1s;animation-duration:1s}.hvr-ripple-in:active:before,.hvr-ripple-in:focus:before,.hvr-ripple-in:hover:before{-webkit-animation-name:hvr-ripple-in;animation-name:hvr-ripple-in}.hvr-outline-out{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative}.hvr-outline-out:before{content:'';position:absolute;border:#e1e1e1 solid 4px;top:0;right:0;bottom:0;left:0;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:top,right,bottom,left;transition-property:top,right,bottom,left}.hvr-outline-out:active:before,.hvr-outline-out:focus:before,.hvr-outline-out:hover:before{top:-8px;right:-8px;bottom:-8px;left:-8px}.hvr-outline-in{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative}.hvr-outline-in:before{pointer-events:none;content:'';position:absolute;border:#e1e1e1 solid 4px;top:-16px;right:-16px;bottom:-16px;left:-16px;opacity:0;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:top,right,bottom,left;transition-property:top,right,bottom,left}.hvr-outline-in:active:before,.hvr-outline-in:focus:before,.hvr-outline-in:hover:before{top:-8px;right:-8px;bottom:-8px;left:-8px;opacity:1}.hvr-round-corners{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:border-radius;transition-property:border-radius}.hvr-round-corners:active,.hvr-round-corners:focus,.hvr-round-corners:hover{border-radius:1em}.hvr-underline-from-left{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;overflow:hidden}.hvr-underline-from-left:before{content:"";position:absolute;z-index:-1;left:0;right:100%;bottom:0;background:#2098d1;height:4px;-webkit-transition-property:right;transition-property:right;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-underline-from-left:active:before,.hvr-underline-from-left:focus:before,.hvr-underline-from-left:hover:before{right:0}.hvr-underline-from-center{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;overflow:hidden}.hvr-underline-from-center:before{content:"";position:absolute;z-index:-1;left:50%;right:50%;bottom:0;background:#2098d1;height:4px;-webkit-transition-property:left,right;transition-property:left,right;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-underline-from-center:active:before,.hvr-underline-from-center:focus:before,.hvr-underline-from-center:hover:before{left:0;right:0}.hvr-underline-from-right{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;overflow:hidden}.hvr-underline-from-right:before{content:"";position:absolute;z-index:-1;left:100%;right:0;bottom:0;background:#2098d1;height:4px;-webkit-transition-property:left;transition-property:left;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-underline-from-right:active:before,.hvr-underline-from-right:focus:before,.hvr-underline-from-right:hover:before{left:0}.hvr-overline-from-left{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;overflow:hidden}.hvr-overline-from-left:before{content:"";position:absolute;z-index:-1;left:0;right:100%;top:0;background:#2098d1;height:4px;-webkit-transition-property:right;transition-property:right;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-overline-from-left:active:before,.hvr-overline-from-left:focus:before,.hvr-overline-from-left:hover:before{right:0}.hvr-overline-from-center{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;overflow:hidden}.hvr-overline-from-center:before{content:"";position:absolute;z-index:-1;left:50%;right:50%;top:0;background:#2098d1;height:4px;-webkit-transition-property:left,right;transition-property:left,right;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-overline-from-center:active:before,.hvr-overline-from-center:focus:before,.hvr-overline-from-center:hover:before{left:0;right:0}.hvr-overline-from-right{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;overflow:hidden}.hvr-overline-from-right:before{content:"";position:absolute;z-index:-1;left:100%;right:0;top:0;background:#2098d1;height:4px;-webkit-transition-property:left;transition-property:left;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-overline-from-right:active:before,.hvr-overline-from-right:focus:before,.hvr-overline-from-right:hover:before{left:0}.hvr-reveal{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;overflow:hidden}.hvr-reveal:before{content:"";position:absolute;z-index:-1;left:0;right:0;top:0;bottom:0;border-color:#2098d1;border-style:solid;border-width:0;-webkit-transition-property:border-width;transition-property:border-width;-webkit-transition-duration:.1s;transition-duration:.1s;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-reveal:active:before,.hvr-reveal:focus:before,.hvr-reveal:hover:before{-webkit-transform:translateY(0);transform:translateY(0);border-width:4px}.hvr-underline-reveal{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;overflow:hidden}.hvr-underline-reveal:before{content:"";position:absolute;z-index:-1;left:0;right:0;bottom:0;background:#2098d1;height:4px;-webkit-transform:translateY(4px);transform:translateY(4px);-webkit-transition-property:transform;transition-property:transform;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-underline-reveal:active:before,.hvr-underline-reveal:focus:before,.hvr-underline-reveal:hover:before{-webkit-transform:translateY(0);transform:translateY(0)}.hvr-overline-reveal{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;overflow:hidden}.hvr-overline-reveal:before{content:"";position:absolute;z-index:-1;left:0;right:0;top:0;background:#2098d1;height:4px;-webkit-transform:translateY(-4px);transform:translateY(-4px);-webkit-transition-property:transform;transition-property:transform;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-overline-reveal:active:before,.hvr-overline-reveal:focus:before,.hvr-overline-reveal:hover:before{-webkit-transform:translateY(0);transform:translateY(0)}.hvr-glow{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:box-shadow;transition-property:box-shadow}.hvr-glow:active,.hvr-glow:focus,.hvr-glow:hover{box-shadow:0 0 8px rgba(0,0,0,.6)}.hvr-shadow{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:box-shadow;transition-property:box-shadow}.hvr-shadow:active,.hvr-shadow:focus,.hvr-shadow:hover{box-shadow:0 10px 10px -10px rgba(0,0,0,.5)}.hvr-grow-shadow{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:box-shadow,transform;transition-property:box-shadow,transform}.hvr-grow-shadow:active,.hvr-grow-shadow:focus,.hvr-grow-shadow:hover{box-shadow:0 10px 10px -10px rgba(0,0,0,.5);-webkit-transform:scale(1.1);transform:scale(1.1)}.hvr-box-shadow-outset{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:box-shadow;transition-property:box-shadow}.hvr-box-shadow-outset:active,.hvr-box-shadow-outset:focus,.hvr-box-shadow-outset:hover{box-shadow:2px 2px 2px rgba(0,0,0,.6)}.hvr-box-shadow-inset{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:box-shadow;transition-property:box-shadow;box-shadow:inset 0 0 0 rgba(0,0,0,.6),0 0 1px rgba(0,0,0,0)}.hvr-box-shadow-inset:active,.hvr-box-shadow-inset:focus,.hvr-box-shadow-inset:hover{box-shadow:inset 2px 2px 2px rgba(0,0,0,.6),0 0 1px rgba(0,0,0,0)}.hvr-float-shadow{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:transform;transition-property:transform}.hvr-float-shadow:before{pointer-events:none;position:absolute;z-index:-1;content:'';top:100%;left:5%;height:10px;width:90%;opacity:0;background:-webkit-radial-gradient(center,ellipse,rgba(0,0,0,.35) 0,rgba(0,0,0,0) 80%);background:radial-gradient(ellipse at center,rgba(0,0,0,.35) 0,rgba(0,0,0,0) 80%);-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:transform,opacity;transition-property:transform,opacity}.hvr-float-shadow:active,.hvr-float-shadow:focus,.hvr-float-shadow:hover{-webkit-transform:translateY(-5px);transform:translateY(-5px)}.hvr-float-shadow:active:before,.hvr-float-shadow:focus:before,.hvr-float-shadow:hover:before{opacity:1;-webkit-transform:translateY(5px);transform:translateY(5px)}.hvr-shadow-radial{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative}.hvr-shadow-radial:after,.hvr-shadow-radial:before{pointer-events:none;position:absolute;content:'';left:0;width:100%;box-sizing:border-box;height:5px;opacity:0;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:opacity;transition-property:opacity}.hvr-shadow-radial:before{bottom:100%;background:-webkit-radial-gradient(50% 150%,ellipse,rgba(0,0,0,.6) 0,rgba(0,0,0,0) 80%);background:radial-gradient(ellipse at 50% 150%,rgba(0,0,0,.6) 0,rgba(0,0,0,0) 80%)}.hvr-shadow-radial:after{top:100%;background:-webkit-radial-gradient(50% -50%,ellipse,rgba(0,0,0,.6) 0,rgba(0,0,0,0) 80%);background:radial-gradient(ellipse at 50% -50%,rgba(0,0,0,.6) 0,rgba(0,0,0,0) 80%)}.hvr-shadow-radial:active:after,.hvr-shadow-radial:active:before,.hvr-shadow-radial:focus:after,.hvr-shadow-radial:focus:before,.hvr-shadow-radial:hover:after,.hvr-shadow-radial:hover:before{opacity:1}.hvr-bubble-top{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative}.hvr-bubble-top:before{pointer-events:none;position:absolute;z-index:-1;content:'';border-style:solid;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:transform;transition-property:transform;left:calc(50% - 10px);top:0;border-width:0 10px 10px;border-color:transparent transparent #e1e1e1}.hvr-bubble-top:active:before,.hvr-bubble-top:focus:before,.hvr-bubble-top:hover:before{-webkit-transform:translateY(-10px);transform:translateY(-10px)}.hvr-bubble-right{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative}.hvr-bubble-right:before{pointer-events:none;position:absolute;z-index:-1;content:'';border-style:solid;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:transform;transition-property:transform;top:calc(50% - 10px);right:0;border-width:10px 0 10px 10px;border-color:transparent transparent transparent #e1e1e1}.hvr-bubble-right:active:before,.hvr-bubble-right:focus:before,.hvr-bubble-right:hover:before{-webkit-transform:translateX(10px);transform:translateX(10px)}.hvr-bubble-bottom{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative}.hvr-bubble-bottom:before{pointer-events:none;position:absolute;z-index:-1;content:'';border-style:solid;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:transform;transition-property:transform;left:calc(50% - 10px);bottom:0;border-width:10px 10px 0;border-color:#e1e1e1 transparent transparent}.hvr-bubble-bottom:active:before,.hvr-bubble-bottom:focus:before,.hvr-bubble-bottom:hover:before{-webkit-transform:translateY(10px);transform:translateY(10px)}.hvr-bubble-left{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative}.hvr-bubble-left:before{pointer-events:none;position:absolute;z-index:-1;content:'';border-style:solid;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:transform;transition-property:transform;top:calc(50% - 10px);left:0;border-width:10px 10px 10px 0;border-color:transparent #e1e1e1 transparent transparent}.hvr-bubble-left:active:before,.hvr-bubble-left:focus:before,.hvr-bubble-left:hover:before{-webkit-transform:translateX(-10px);transform:translateX(-10px)}.hvr-bubble-float-top{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:transform;transition-property:transform}.hvr-bubble-float-top:before{position:absolute;z-index:-1;content:'';left:calc(50% - 10px);top:0;border-style:solid;border-width:0 10px 10px;border-color:transparent transparent #e1e1e1;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:transform;transition-property:transform}.hvr-bubble-float-top:active,.hvr-bubble-float-top:focus,.hvr-bubble-float-top:hover{-webkit-transform:translateY(10px);transform:translateY(10px)}.hvr-bubble-float-top:active:before,.hvr-bubble-float-top:focus:before,.hvr-bubble-float-top:hover:before{-webkit-transform:translateY(-10px);transform:translateY(-10px)}.hvr-bubble-float-right{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:transform;transition-property:transform}.hvr-bubble-float-right:before{position:absolute;z-index:-1;top:calc(50% - 10px);right:0;content:'';border-style:solid;border-width:10px 0 10px 10px;border-color:transparent transparent transparent #e1e1e1;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:transform;transition-property:transform}.hvr-bubble-float-right:active,.hvr-bubble-float-right:focus,.hvr-bubble-float-right:hover{-webkit-transform:translateX(-10px);transform:translateX(-10px)}.hvr-bubble-float-right:active:before,.hvr-bubble-float-right:focus:before,.hvr-bubble-float-right:hover:before{-webkit-transform:translateX(10px);transform:translateX(10px)}.hvr-bubble-float-bottom{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:transform;transition-property:transform}.hvr-bubble-float-bottom:before{position:absolute;z-index:-1;content:'';left:calc(50% - 10px);bottom:0;border-style:solid;border-width:10px 10px 0;border-color:#e1e1e1 transparent transparent;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:transform;transition-property:transform}.hvr-bubble-float-bottom:active,.hvr-bubble-float-bottom:focus,.hvr-bubble-float-bottom:hover{-webkit-transform:translateY(-10px);transform:translateY(-10px)}.hvr-bubble-float-bottom:active:before,.hvr-bubble-float-bottom:focus:before,.hvr-bubble-float-bottom:hover:before{-webkit-transform:translateY(10px);transform:translateY(10px)}.hvr-bubble-float-left{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:transform;transition-property:transform}.hvr-bubble-float-left:before{position:absolute;z-index:-1;content:'';top:calc(50% - 10px);left:0;border-style:solid;border-width:10px 10px 10px 0;border-color:transparent #e1e1e1 transparent transparent;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:transform;transition-property:transform}.hvr-bubble-float-left:active,.hvr-bubble-float-left:focus,.hvr-bubble-float-left:hover{-webkit-transform:translateX(10px);transform:translateX(10px)}.hvr-bubble-float-left:active:before,.hvr-bubble-float-left:focus:before,.hvr-bubble-float-left:hover:before{-webkit-transform:translateX(-10px);transform:translateX(-10px)}.hvr-icon-back{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;padding-left:2.2em;-webkit-transition-duration:.1s;transition-duration:.1s}.hvr-icon-back:before{content:"\f137";position:absolute;left:1em;padding:0 1px;font-family:FontAwesome;-webkit-transform:translateZ(0);transform:translateZ(0);-webkit-transition-duration:.1s;transition-duration:.1s;-webkit-transition-property:transform;transition-property:transform;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-icon-back:active:before,.hvr-icon-back:focus:before,.hvr-icon-back:hover:before{-webkit-transform:translateX(-4px);transform:translateX(-4px)}.hvr-icon-forward{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;padding-right:2.2em;-webkit-transition-duration:.1s;transition-duration:.1s}.hvr-icon-forward:before{content:"\f138";position:absolute;right:1em;padding:0 1px;font-family:FontAwesome;-webkit-transform:translateZ(0);transform:translateZ(0);-webkit-transition-duration:.1s;transition-duration:.1s;-webkit-transition-property:transform;transition-property:transform;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-icon-forward:active:before,.hvr-icon-forward:focus:before,.hvr-icon-forward:hover:before{-webkit-transform:translateX(4px);transform:translateX(4px)}@-webkit-keyframes hvr-icon-down{0%,100%,50%{-webkit-transform:translateY(0);transform:translateY(0)}25%,75%{-webkit-transform:translateY(6px);transform:translateY(6px)}}@keyframes hvr-icon-down{0%,100%,50%{-webkit-transform:translateY(0);transform:translateY(0)}25%,75%{-webkit-transform:translateY(6px);transform:translateY(6px)}}.hvr-icon-down{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;padding-right:2.2em}.hvr-icon-down:before{content:"\f01a";position:absolute;right:1em;padding:0 1px;font-family:FontAwesome;-webkit-transform:translateZ(0);transform:translateZ(0)}.hvr-icon-down:active:before,.hvr-icon-down:focus:before,.hvr-icon-down:hover:before{-webkit-animation-name:hvr-icon-down;animation-name:hvr-icon-down;-webkit-animation-duration:.75s;animation-duration:.75s;-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out}@-webkit-keyframes hvr-icon-up{0%,100%,50%{-webkit-transform:translateY(0);transform:translateY(0)}25%,75%{-webkit-transform:translateY(-6px);transform:translateY(-6px)}}@keyframes hvr-icon-up{0%,100%,50%{-webkit-transform:translateY(0);transform:translateY(0)}25%,75%{-webkit-transform:translateY(-6px);transform:translateY(-6px)}}.hvr-icon-up{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;padding-right:2.2em}.hvr-icon-up:before{content:"\f01b";position:absolute;right:1em;padding:0 1px;font-family:FontAwesome;-webkit-transform:translateZ(0);transform:translateZ(0)}.hvr-icon-up:active:before,.hvr-icon-up:focus:before,.hvr-icon-up:hover:before{-webkit-animation-name:hvr-icon-up;animation-name:hvr-icon-up;-webkit-animation-duration:.75s;animation-duration:.75s;-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out}.hvr-icon-spin{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;padding-right:2.2em}.hvr-icon-spin:before{content:"\f021";position:absolute;right:1em;padding:0 1px;font-family:FontAwesome;-webkit-transition-duration:1s;transition-duration:1s;-webkit-transition-property:transform;transition-property:transform;-webkit-transition-timing-function:ease-in-out;transition-timing-function:ease-in-out}.hvr-icon-spin:active:before,.hvr-icon-spin:focus:before,.hvr-icon-spin:hover:before{-webkit-transform:rotate(360deg);transform:rotate(360deg)}@-webkit-keyframes hvr-icon-drop{0%{opacity:0}50%{opacity:0;-webkit-transform:translateY(-100%);transform:translateY(-100%)}100%,51%{opacity:1}}@keyframes hvr-icon-drop{0%{opacity:0}50%{opacity:0;-webkit-transform:translateY(-100%);transform:translateY(-100%)}100%,51%{opacity:1}}.hvr-icon-drop{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;padding-right:2.2em}.hvr-icon-drop:before{content:"\f041";position:absolute;right:1em;opacity:1;padding:0 1px;font-family:FontAwesome;-webkit-transform:translateZ(0);transform:translateZ(0)}.hvr-icon-drop:active:before,.hvr-icon-drop:focus:before,.hvr-icon-drop:hover:before{opacity:0;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-animation-name:hvr-icon-drop;animation-name:hvr-icon-drop;-webkit-animation-duration:.5s;animation-duration:.5s;-webkit-animation-delay:.3s;animation-delay:.3s;-webkit-animation-fill-mode:forwards;animation-fill-mode:forwards;-webkit-animation-timing-function:cubic-bezier(0.52,1.64,.37,.66);animation-timing-function:cubic-bezier(0.52,1.64,.37,.66)}.hvr-icon-fade{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;padding-right:2.2em}.hvr-icon-fade:before{content:"\f00c";position:absolute;right:1em;padding:0 1px;font-family:FontAwesome;-webkit-transform:translateZ(0);transform:translateZ(0);-webkit-transition-duration:.5s;transition-duration:.5s;-webkit-transition-property:color;transition-property:color}.hvr-icon-fade:active:before,.hvr-icon-fade:focus:before,.hvr-icon-fade:hover:before{color:#0F9E5E}@-webkit-keyframes hvr-icon-float-away{0%{opacity:1}100%{opacity:0;-webkit-transform:translateY(-1em);transform:translateY(-1em)}}@keyframes hvr-icon-float-away{0%{opacity:1}100%{opacity:0;-webkit-transform:translateY(-1em);transform:translateY(-1em)}}.hvr-icon-float-away{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;padding-right:2.2em}.hvr-icon-float-away:after,.hvr-icon-float-away:before{content:"\f055";position:absolute;right:1em;padding:0 1px;font-family:FontAwesome}.hvr-icon-float-away:after{opacity:0;-webkit-animation-duration:.5s;animation-duration:.5s;-webkit-animation-fill-mode:forwards;animation-fill-mode:forwards}.hvr-icon-float-away:active:after,.hvr-icon-float-away:focus:after,.hvr-icon-float-away:hover:after{-webkit-animation-name:hvr-icon-float-away;animation-name:hvr-icon-float-away;-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out}@-webkit-keyframes hvr-icon-sink-away{0%{opacity:1}100%{opacity:0;-webkit-transform:translateY(1em);transform:translateY(1em)}}@keyframes hvr-icon-sink-away{0%{opacity:1}100%{opacity:0;-webkit-transform:translateY(1em);transform:translateY(1em)}}.hvr-icon-sink-away{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;padding-right:2.2em}.hvr-icon-sink-away:after,.hvr-icon-sink-away:before{content:"\f056";position:absolute;right:1em;padding:0 1px;font-family:FontAwesome;-webkit-transform:translateZ(0);transform:translateZ(0)}.hvr-icon-sink-away:after{opacity:0;-webkit-animation-duration:.5s;animation-duration:.5s;-webkit-animation-fill-mode:forwards;animation-fill-mode:forwards}.hvr-icon-sink-away:active:after,.hvr-icon-sink-away:focus:after,.hvr-icon-sink-away:hover:after{-webkit-animation-name:hvr-icon-sink-away;animation-name:hvr-icon-sink-away;-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out}.hvr-icon-grow{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;padding-right:2.2em;-webkit-transition-duration:.3s;transition-duration:.3s}.hvr-icon-grow:before{content:"\f118";position:absolute;right:1em;padding:0 1px;font-family:FontAwesome;-webkit-transform:translateZ(0);transform:translateZ(0);-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:transform;transition-property:transform;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-icon-grow:active:before,.hvr-icon-grow:focus:before,.hvr-icon-grow:hover:before{-webkit-transform:scale(1.3) translateZ(0);transform:scale(1.3) translateZ(0)}.hvr-icon-shrink{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;padding-right:2.2em;-webkit-transition-duration:.3s;transition-duration:.3s}.hvr-icon-shrink:before{content:"\f119";position:absolute;right:1em;padding:0 1px;font-family:FontAwesome;-webkit-transform:translateZ(0);transform:translateZ(0);-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:transform;transition-property:transform;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-icon-shrink:active:before,.hvr-icon-shrink:focus:before,.hvr-icon-shrink:hover:before{-webkit-transform:scale(0.8);transform:scale(0.8)}@-webkit-keyframes hvr-icon-pulse{25%{-webkit-transform:scale(1.3);transform:scale(1.3)}75%{-webkit-transform:scale(0.8);transform:scale(0.8)}}@keyframes hvr-icon-pulse{25%{-webkit-transform:scale(1.3);transform:scale(1.3)}75%{-webkit-transform:scale(0.8);transform:scale(0.8)}}.hvr-icon-pulse{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;padding-right:2.2em}.hvr-icon-pulse:before{content:"\f015";position:absolute;right:1em;padding:0 1px;font-family:FontAwesome;-webkit-transform:translateZ(0);transform:translateZ(0);-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-icon-pulse:active:before,.hvr-icon-pulse:focus:before,.hvr-icon-pulse:hover:before{-webkit-animation-name:hvr-icon-pulse;animation-name:hvr-icon-pulse;-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-timing-function:linear;animation-timing-function:linear;-webkit-animation-iteration-count:infinite;animation-iteration-count:infinite}@-webkit-keyframes hvr-icon-pulse-grow{to{-webkit-transform:scale(1.3);transform:scale(1.3)}}@keyframes hvr-icon-pulse-grow{to{-webkit-transform:scale(1.3);transform:scale(1.3)}}.hvr-icon-pulse-grow{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;padding-right:2.2em}.hvr-icon-pulse-grow:before{content:"\f015";position:absolute;right:1em;padding:0 1px;font-family:FontAwesome;-webkit-transform:translateZ(0);transform:translateZ(0);-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-icon-pulse-grow:active:before,.hvr-icon-pulse-grow:focus:before,.hvr-icon-pulse-grow:hover:before{-webkit-animation-name:hvr-icon-pulse-grow;animation-name:hvr-icon-pulse-grow;-webkit-animation-duration:.3s;animation-duration:.3s;-webkit-animation-timing-function:linear;animation-timing-function:linear;-webkit-animation-iteration-count:infinite;animation-iteration-count:infinite;-webkit-animation-direction:alternate;animation-direction:alternate}@-webkit-keyframes hvr-icon-pulse-shrink{to{-webkit-transform:scale(0.8);transform:scale(0.8)}}@keyframes hvr-icon-pulse-shrink{to{-webkit-transform:scale(0.8);transform:scale(0.8)}}.hvr-icon-pulse-shrink{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;padding-right:2.2em}.hvr-icon-pulse-shrink:before{content:"\f015";position:absolute;right:1em;padding:0 1px;font-family:FontAwesome;-webkit-transform:translateZ(0);transform:translateZ(0);-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-icon-pulse-shrink:active:before,.hvr-icon-pulse-shrink:focus:before,.hvr-icon-pulse-shrink:hover:before{-webkit-animation-name:hvr-icon-pulse-shrink;animation-name:hvr-icon-pulse-shrink;-webkit-animation-duration:.3s;animation-duration:.3s;-webkit-animation-timing-function:linear;animation-timing-function:linear;-webkit-animation-iteration-count:infinite;animation-iteration-count:infinite;-webkit-animation-direction:alternate;animation-direction:alternate}@-webkit-keyframes hvr-icon-push{50%{-webkit-transform:scale(0.5);transform:scale(0.5)}}@keyframes hvr-icon-push{50%{-webkit-transform:scale(0.5);transform:scale(0.5)}}.hvr-icon-push{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;padding-right:2.2em;-webkit-transition-duration:.3s;transition-duration:.3s}.hvr-icon-push:before{content:"\f006";position:absolute;right:1em;padding:0 1px;font-family:FontAwesome;-webkit-transform:translateZ(0);transform:translateZ(0);-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:transform;transition-property:transform;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-icon-push:active:before,.hvr-icon-push:focus:before,.hvr-icon-push:hover:before{-webkit-animation-name:hvr-icon-push;animation-name:hvr-icon-push;-webkit-animation-duration:.3s;animation-duration:.3s;-webkit-animation-timing-function:linear;animation-timing-function:linear;-webkit-animation-iteration-count:1;animation-iteration-count:1}@-webkit-keyframes hvr-icon-pop{50%{-webkit-transform:scale(1.5);transform:scale(1.5)}}@keyframes hvr-icon-pop{50%{-webkit-transform:scale(1.5);transform:scale(1.5)}}.hvr-icon-pop{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;padding-right:2.2em;-webkit-transition-duration:.3s;transition-duration:.3s}.hvr-icon-pop:before{content:"\f005";position:absolute;right:1em;padding:0 1px;font-family:FontAwesome;-webkit-transform:translateZ(0);transform:translateZ(0);-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:transform;transition-property:transform;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-icon-pop:active:before,.hvr-icon-pop:focus:before,.hvr-icon-pop:hover:before{-webkit-animation-name:hvr-icon-pop;animation-name:hvr-icon-pop;-webkit-animation-duration:.3s;animation-duration:.3s;-webkit-animation-timing-function:linear;animation-timing-function:linear;-webkit-animation-iteration-count:1;animation-iteration-count:1}.hvr-icon-bounce{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;padding-right:2.2em;-webkit-transition-duration:.3s;transition-duration:.3s}.hvr-icon-bounce:before{content:"\f087";position:absolute;right:1em;padding:0 1px;font-family:FontAwesome;-webkit-transform:translateZ(0);transform:translateZ(0);-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:transform;transition-property:transform;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-icon-bounce:active:before,.hvr-icon-bounce:focus:before,.hvr-icon-bounce:hover:before{-webkit-transform:scale(1.5);transform:scale(1.5);-webkit-transition-timing-function:cubic-bezier(0.47,2.02,.31,-.36);transition-timing-function:cubic-bezier(0.47,2.02,.31,-.36)}.hvr-icon-rotate{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;padding-right:2.2em;-webkit-transition-duration:.3s;transition-duration:.3s}.hvr-icon-rotate:before{content:"\f0c6";position:absolute;right:1em;padding:0 1px;font-family:FontAwesome;-webkit-transform:translateZ(0);transform:translateZ(0);-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:transform;transition-property:transform;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-icon-rotate:active:before,.hvr-icon-rotate:focus:before,.hvr-icon-rotate:hover:before{-webkit-transform:rotate(20deg);transform:rotate(20deg)}.hvr-icon-grow-rotate{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;padding-right:2.2em;-webkit-transition-duration:.3s;transition-duration:.3s}.hvr-icon-grow-rotate:before{content:"\f095";position:absolute;right:1em;padding:0 1px;font-family:FontAwesome;-webkit-transform:translateZ(0);transform:translateZ(0);-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:transform;transition-property:transform;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-icon-grow-rotate:active:before,.hvr-icon-grow-rotate:focus:before,.hvr-icon-grow-rotate:hover:before{-webkit-transform:scale(1.5) rotate(12deg);transform:scale(1.5) rotate(12deg)}.hvr-icon-float{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;padding-right:2.2em;-webkit-transition-duration:.3s;transition-duration:.3s}.hvr-icon-float:before{content:"\f01b";position:absolute;right:1em;padding:0 1px;font-family:FontAwesome;-webkit-transform:translateZ(0);transform:translateZ(0);-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:transform;transition-property:transform;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-icon-float:active:before,.hvr-icon-float:focus:before,.hvr-icon-float:hover:before{-webkit-transform:translateY(-4px);transform:translateY(-4px)}.hvr-icon-sink{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;padding-right:2.2em;-webkit-transition-duration:.3s;transition-duration:.3s}.hvr-icon-sink:before{content:"\f01a";position:absolute;right:1em;padding:0 1px;font-family:FontAwesome;-webkit-transform:translateZ(0);transform:translateZ(0);-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:transform;transition-property:transform;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-icon-sink:active:before,.hvr-icon-sink:focus:before,.hvr-icon-sink:hover:before{-webkit-transform:translateY(4px);transform:translateY(4px)}@-webkit-keyframes hvr-icon-bob{0%{-webkit-transform:translateY(-6px);transform:translateY(-6px)}50%{-webkit-transform:translateY(-2px);transform:translateY(-2px)}100%{-webkit-transform:translateY(-6px);transform:translateY(-6px)}}@keyframes hvr-icon-bob{0%{-webkit-transform:translateY(-6px);transform:translateY(-6px)}50%{-webkit-transform:translateY(-2px);transform:translateY(-2px)}100%{-webkit-transform:translateY(-6px);transform:translateY(-6px)}}@-webkit-keyframes hvr-icon-bob-float{100%{-webkit-transform:translateY(-6px);transform:translateY(-6px)}}@keyframes hvr-icon-bob-float{100%{-webkit-transform:translateY(-6px);transform:translateY(-6px)}}.hvr-icon-bob{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;padding-right:2.2em;-webkit-transition-duration:.3s;transition-duration:.3s}.hvr-icon-bob:before{content:"\f077";position:absolute;right:1em;padding:0 1px;font-family:FontAwesome;-webkit-transform:translateZ(0);transform:translateZ(0)}.hvr-icon-bob:active:before,.hvr-icon-bob:focus:before,.hvr-icon-bob:hover:before{-webkit-animation-name:hvr-icon-bob-float,hvr-icon-bob;animation-name:hvr-icon-bob-float,hvr-icon-bob;-webkit-animation-duration:.3s,1.5s;animation-duration:.3s,1.5s;-webkit-animation-delay:0s,.3s;animation-delay:0s,.3s;-webkit-animation-timing-function:ease-out,ease-in-out;animation-timing-function:ease-out,ease-in-out;-webkit-animation-iteration-count:1,infinite;animation-iteration-count:1,infinite;-webkit-animation-fill-mode:forwards;animation-fill-mode:forwards;-webkit-animation-direction:normal,alternate;animation-direction:normal,alternate}@-webkit-keyframes hvr-icon-hang{0%{-webkit-transform:translateY(6px);transform:translateY(6px)}50%{-webkit-transform:translateY(2px);transform:translateY(2px)}100%{-webkit-transform:translateY(6px);transform:translateY(6px)}}@keyframes hvr-icon-hang{0%{-webkit-transform:translateY(6px);transform:translateY(6px)}50%{-webkit-transform:translateY(2px);transform:translateY(2px)}100%{-webkit-transform:translateY(6px);transform:translateY(6px)}}@-webkit-keyframes hvr-icon-hang-sink{100%{-webkit-transform:translateY(6px);transform:translateY(6px)}}@keyframes hvr-icon-hang-sink{100%{-webkit-transform:translateY(6px);transform:translateY(6px)}}.hvr-icon-hang{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;padding-right:2.2em;-webkit-transition-duration:.3s;transition-duration:.3s}.hvr-icon-hang:before{content:"\f078";position:absolute;right:1em;padding:0 1px;font-family:FontAwesome;-webkit-transform:translateZ(0);transform:translateZ(0)}.hvr-icon-hang:active:before,.hvr-icon-hang:focus:before,.hvr-icon-hang:hover:before{-webkit-animation-name:hvr-icon-hang-sink,hvr-icon-hang;animation-name:hvr-icon-hang-sink,hvr-icon-hang;-webkit-animation-duration:.3s,1.5s;animation-duration:.3s,1.5s;-webkit-animation-delay:0s,.3s;animation-delay:0s,.3s;-webkit-animation-timing-function:ease-out,ease-in-out;animation-timing-function:ease-out,ease-in-out;-webkit-animation-iteration-count:1,infinite;animation-iteration-count:1,infinite;-webkit-animation-fill-mode:forwards;animation-fill-mode:forwards;-webkit-animation-direction:normal,alternate;animation-direction:normal,alternate}@-webkit-keyframes hvr-icon-wobble-horizontal{16.65%{-webkit-transform:translateX(6px);transform:translateX(6px)}33.3%{-webkit-transform:translateX(-5px);transform:translateX(-5px)}49.95%{-webkit-transform:translateX(4px);transform:translateX(4px)}66.6%{-webkit-transform:translateX(-2px);transform:translateX(-2px)}83.25%{-webkit-transform:translateX(1px);transform:translateX(1px)}100%{-webkit-transform:translateX(0);transform:translateX(0)}}@keyframes hvr-icon-wobble-horizontal{16.65%{-webkit-transform:translateX(6px);transform:translateX(6px)}33.3%{-webkit-transform:translateX(-5px);transform:translateX(-5px)}49.95%{-webkit-transform:translateX(4px);transform:translateX(4px)}66.6%{-webkit-transform:translateX(-2px);transform:translateX(-2px)}83.25%{-webkit-transform:translateX(1px);transform:translateX(1px)}100%{-webkit-transform:translateX(0);transform:translateX(0)}}.hvr-icon-wobble-horizontal{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;padding-right:2.2em;-webkit-transition-duration:.3s;transition-duration:.3s}.hvr-icon-wobble-horizontal:before{content:"\f061";position:absolute;right:1em;padding:0 1px;font-family:FontAwesome;-webkit-transform:translateZ(0);transform:translateZ(0)}.hvr-icon-wobble-horizontal:active:before,.hvr-icon-wobble-horizontal:focus:before,.hvr-icon-wobble-horizontal:hover:before{-webkit-animation-name:hvr-icon-wobble-horizontal;animation-name:hvr-icon-wobble-horizontal;-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-timing-function:ease-in-out;animation-timing-function:ease-in-out;-webkit-animation-iteration-count:1;animation-iteration-count:1}@-webkit-keyframes hvr-icon-wobble-vertical{16.65%{-webkit-transform:translateY(6px);transform:translateY(6px)}33.3%{-webkit-transform:translateY(-5px);transform:translateY(-5px)}49.95%{-webkit-transform:translateY(4px);transform:translateY(4px)}66.6%{-webkit-transform:translateY(-2px);transform:translateY(-2px)}83.25%{-webkit-transform:translateY(1px);transform:translateY(1px)}100%{-webkit-transform:translateY(0);transform:translateY(0)}}@keyframes hvr-icon-wobble-vertical{16.65%{-webkit-transform:translateY(6px);transform:translateY(6px)}33.3%{-webkit-transform:translateY(-5px);transform:translateY(-5px)}49.95%{-webkit-transform:translateY(4px);transform:translateY(4px)}66.6%{-webkit-transform:translateY(-2px);transform:translateY(-2px)}83.25%{-webkit-transform:translateY(1px);transform:translateY(1px)}100%{-webkit-transform:translateY(0);transform:translateY(0)}}.hvr-icon-wobble-vertical{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;padding-right:2.2em;-webkit-transition-duration:.3s;transition-duration:.3s}.hvr-icon-wobble-vertical:before{content:"\f062";position:absolute;right:1em;padding:0 1px;font-family:FontAwesome;-webkit-transform:translateZ(0);transform:translateZ(0)}.hvr-icon-wobble-vertical:active:before,.hvr-icon-wobble-vertical:focus:before,.hvr-icon-wobble-vertical:hover:before{-webkit-animation-name:hvr-icon-wobble-vertical;animation-name:hvr-icon-wobble-vertical;-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-timing-function:ease-in-out;animation-timing-function:ease-in-out;-webkit-animation-iteration-count:1;animation-iteration-count:1}@-webkit-keyframes hvr-icon-buzz{50%{-webkit-transform:translateX(3px) rotate(2deg);transform:translateX(3px) rotate(2deg)}100%{-webkit-transform:translateX(-3px) rotate(-2deg);transform:translateX(-3px) rotate(-2deg)}}@keyframes hvr-icon-buzz{50%{-webkit-transform:translateX(3px) rotate(2deg);transform:translateX(3px) rotate(2deg)}100%{-webkit-transform:translateX(-3px) rotate(-2deg);transform:translateX(-3px) rotate(-2deg)}}.hvr-icon-buzz{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;padding-right:2.2em;-webkit-transition-duration:.3s;transition-duration:.3s}.hvr-icon-buzz:before{content:"\f017";position:absolute;right:1em;padding:0 1px;font-family:FontAwesome;-webkit-transform:translateZ(0);transform:translateZ(0)}.hvr-icon-buzz:active:before,.hvr-icon-buzz:focus:before,.hvr-icon-buzz:hover:before{-webkit-animation-name:hvr-icon-buzz;animation-name:hvr-icon-buzz;-webkit-animation-duration:.15s;animation-duration:.15s;-webkit-animation-timing-function:linear;animation-timing-function:linear;-webkit-animation-iteration-count:infinite;animation-iteration-count:infinite}@-webkit-keyframes hvr-icon-buzz-out{10%{-webkit-transform:translateX(3px) rotate(2deg);transform:translateX(3px) rotate(2deg)}20%{-webkit-transform:translateX(-3px) rotate(-2deg);transform:translateX(-3px) rotate(-2deg)}30%{-webkit-transform:translateX(3px) rotate(2deg);transform:translateX(3px) rotate(2deg)}40%{-webkit-transform:translateX(-3px) rotate(-2deg);transform:translateX(-3px) rotate(-2deg)}50%{-webkit-transform:translateX(2px) rotate(1deg);transform:translateX(2px) rotate(1deg)}60%{-webkit-transform:translateX(-2px) rotate(-1deg);transform:translateX(-2px) rotate(-1deg)}70%{-webkit-transform:translateX(2px) rotate(1deg);transform:translateX(2px) rotate(1deg)}80%{-webkit-transform:translateX(-2px) rotate(-1deg);transform:translateX(-2px) rotate(-1deg)}90%{-webkit-transform:translateX(1px) rotate(0);transform:translateX(1px) rotate(0)}100%{-webkit-transform:translateX(-1px) rotate(0);transform:translateX(-1px) rotate(0)}}@keyframes hvr-icon-buzz-out{10%{-webkit-transform:translateX(3px) rotate(2deg);transform:translateX(3px) rotate(2deg)}20%{-webkit-transform:translateX(-3px) rotate(-2deg);transform:translateX(-3px) rotate(-2deg)}30%{-webkit-transform:translateX(3px) rotate(2deg);transform:translateX(3px) rotate(2deg)}40%{-webkit-transform:translateX(-3px) rotate(-2deg);transform:translateX(-3px) rotate(-2deg)}50%{-webkit-transform:translateX(2px) rotate(1deg);transform:translateX(2px) rotate(1deg)}60%{-webkit-transform:translateX(-2px) rotate(-1deg);transform:translateX(-2px) rotate(-1deg)}70%{-webkit-transform:translateX(2px) rotate(1deg);transform:translateX(2px) rotate(1deg)}80%{-webkit-transform:translateX(-2px) rotate(-1deg);transform:translateX(-2px) rotate(-1deg)}90%{-webkit-transform:translateX(1px) rotate(0);transform:translateX(1px) rotate(0)}100%{-webkit-transform:translateX(-1px) rotate(0);transform:translateX(-1px) rotate(0)}}.hvr-icon-buzz-out{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;padding-right:2.2em;-webkit-transition-duration:.3s;transition-duration:.3s}.hvr-icon-buzz-out:before{content:"\f023";position:absolute;right:1em;padding:0 1px;font-family:FontAwesome;-webkit-transform:translateZ(0);transform:translateZ(0)}.hvr-icon-buzz-out:active:before,.hvr-icon-buzz-out:focus:before,.hvr-icon-buzz-out:hover:before{-webkit-animation-name:hvr-icon-buzz-out;animation-name:hvr-icon-buzz-out;-webkit-animation-duration:.75s;animation-duration:.75s;-webkit-animation-timing-function:linear;animation-timing-function:linear;-webkit-animation-iteration-count:1;animation-iteration-count:1}.hvr-curl-top-left{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative}.hvr-curl-top-left:before{pointer-events:none;position:absolute;content:'';height:0;width:0;top:0;left:0;background:#fff;background:linear-gradient(135deg,#fff 45%,#aaa 50%,#ccc 56%,#fff 80%);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0, startColorstr='#ffffff', endColorstr='#000000');z-index:1000;box-shadow:1px 1px 1px rgba(0,0,0,.4);-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:width,height;transition-property:width,height}.hvr-curl-top-left:active:before,.hvr-curl-top-left:focus:before,.hvr-curl-top-left:hover:before{width:25px;height:25px}.hvr-curl-top-right{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative}.hvr-curl-top-right:before{pointer-events:none;position:absolute;content:'';height:0;width:0;top:0;right:0;background:#fff;background:linear-gradient(225deg,#fff 45%,#aaa 50%,#ccc 56%,#fff 80%);box-shadow:-1px 1px 1px rgba(0,0,0,.4);-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:width,height;transition-property:width,height}.hvr-curl-top-right:active:before,.hvr-curl-top-right:focus:before,.hvr-curl-top-right:hover:before{width:25px;height:25px}.hvr-curl-bottom-right{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative}.hvr-curl-bottom-right:before{pointer-events:none;position:absolute;content:'';height:0;width:0;bottom:0;right:0;background:#fff;background:linear-gradient(315deg,#fff 45%,#aaa 50%,#ccc 56%,#fff 80%);box-shadow:-1px -1px 1px rgba(0,0,0,.4);-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:width,height;transition-property:width,height}.hvr-curl-bottom-right:active:before,.hvr-curl-bottom-right:focus:before,.hvr-curl-bottom-right:hover:before{width:25px;height:25px}.hvr-curl-bottom-left{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative}.hvr-curl-bottom-left:before{pointer-events:none;position:absolute;content:'';height:0;width:0;bottom:0;left:0;background:#fff;background:linear-gradient(45deg,#fff 45%,#aaa 50%,#ccc 56%,#fff 80%);box-shadow:1px -1px 1px rgba(0,0,0,.4);-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:width,height;transition-property:width,height}.hvr-curl-bottom-left:active:before,.hvr-curl-bottom-left:focus:before,.hvr-curl-bottom-left:hover:before{width:25px;height:25px}
/*
Mobile Menu Core Style
*/
.slicknav_btn { position: relative; display: block; vertical-align: middle; float: right; padding: 0.438em 0.625em 0.438em 0.625em; line-height: 1.125em; cursor: pointer; }
.slicknav_menu  .slicknav_menutxt { display: block; line-height: 1.188em; float: left; }
.slicknav_menu .slicknav_icon { float: left; margin: 0.188em 0 0 0.438em; }
.slicknav_menu .slicknav_no-text { margin: 0 }
.slicknav_menu .slicknav_icon-bar { display: block; width: 1.125em; height: 0.125em; -webkit-border-radius: 1px; -moz-border-radius: 1px; border-radius: 1px; -webkit-box-shadow: 0 1px 0 rgba(0, 0, 0, 0.25); -moz-box-shadow: 0 1px 0 rgba(0, 0, 0, 0.25); box-shadow: 0 1px 0 rgba(0, 0, 0, 0.25); }
.slicknav_btn .slicknav_icon-bar + .slicknav_icon-bar { margin-top: 0.188em }
.slicknav_nav { clear: both }
.slicknav_nav ul,
.slicknav_nav li { display: block }
.slicknav_nav .slicknav_arrow { font-size: 0.8em; margin: 0 0 0 0.4em; }
.slicknav_nav .slicknav_item { cursor: pointer; }
.slicknav_nav .slicknav_row { display: block; }
.slicknav_nav a { display: block }
.slicknav_nav .slicknav_item a,
.slicknav_nav .slicknav_parent-link a { display: inline }
.slicknav_menu:before,
.slicknav_menu:after { content: " "; display: table; }
.slicknav_menu:after { clear: both }
/* IE6/7 support */
.slicknav_menu { *zoom: 1 }
/* 
User Default Style
Change the following styles to modify the appearance of the menu.
*/
.slicknav_menu {
font-size:16px;
}
/* Button */
.slicknav_btn {
margin: 5px 5px 6px;
text-decoration:none;
text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75);
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
border-radius: 4px;  
background-color: #222222;
}
/* Button Text */
.slicknav_menu  .slicknav_menutxt {
color: #FFF;
font-weight: bold;
text-shadow: 0 1px 3px #000;
}
/* Button Lines */
.slicknav_menu .slicknav_icon-bar {
background-color: #f5f5f5;
}
.slicknav_menu {
background:#4c4c4c;
padding:5px;
}
.slicknav_nav {
color:#fff;
margin:0;
padding:0;
font-size:0.875em;
}
.slicknav_nav, .slicknav_nav ul {
list-style: none;
overflow:hidden;
}
.slicknav_nav ul {
padding:0;
margin:0 0 0 20px;
}
.slicknav_nav .slicknav_row {
padding:5px 10px;
margin:2px 5px;
}
.slicknav_nav a{
padding:5px 10px;
margin:2px 5px;
text-decoration:none;
color:#fff;
}
.slicknav_nav .slicknav_item a,
.slicknav_nav .slicknav_parent-link a {
padding:0;
margin:0;
}
.slicknav_nav .slicknav_row:hover {
-webkit-border-radius: 6px;
-moz-border-radius: 6px;
border-radius: 6px;
background:#ccc;
color:#fff;
}
.slicknav_nav a:hover{
-webkit-border-radius: 6px;
-moz-border-radius: 6px;
border-radius: 6px;
background:#ccc;
color:#222;
}
.slicknav_nav .slicknav_txtnode {
margin-left:15px;   
}
.flex-images { overflow: hidden; }
.flex-images .item { float: left; margin: 4px; border: 1px solid #eee; box-sizing: content-box; overflow: hidden; position: relative;  }
.flex-images .item img { width: auto; height: 100%; }
.body-font {
font-family: "Roboto Slab", sans-serif;
}
.title-fontnbt {
font-family: 'Dosis', sans-serif;
}
/* Globals */
body {
font-family: 'Oxygen', sans-serif;
background: #ffffff;
word-wrap: break-word;
line-height: 1.8;
}
.mega-containernbt {
background: white;
/*max-width: 1100px;*/
margin: auto;
margin-top: 20px;
overflow: auto;
}
.container {
max-width: 1100px;
}
a {
color: #f07261;
cursor: pointer;
}
a:hover {
text-decoration: none;
color: #f07261;
}
.container {
margin: auto;
}
/* ---------- Header ------------- */
#top-barnbt {
background: rgba(221, 221, 221, 0.7);
position: absolute;
bottom: -6px;
left: 0;
right: 0;
border-bottom: solid 6px #dddddd;
}
#mastheadnbt {
text-align: center;
position: relative;
background-attachment: fixed;
margin-bottom: 0px;
}
@media screen and (max-width: 767px) {
#mastheadnbt {
background-attachment: scroll;
}
}
#mastheadnbt .layernbt {
width: 100%;
min-height: 600px;
}
#mastheadnbt #text-title-descnbt {
clear: none;
float: none;
vertical-align: middle;
}
@media screen and (max-width: 768px) {
#mastheadnbt #text-title-descnbt {
float: none;
}
}
#mastheadnbt h1.site-titlenbt {
font-size: 76px;
font-weight: 500;
margin-top: 0px;
font-family: 'Dosis', sans-serif;
}
#mastheadnbt h1.site-titlenbt a {
color: white;
}
#mastheadnbt h2.site-descriptionnbt {
font-weight: 300;
font-size: 15px;
margin-top: 10px;
}
#mastheadnbt .social-iconsnbt {
text-align: center;
margin-bottom: 40px;
}
#mastheadnbt .social-iconsnbt a {
background: none;
color: #5e5e5e;
transition: ease 0.4s;
-webkit-transition: ease 0.4s;
-moz-transition: ease 0.4s;
-ms-transition: ease 0.4s;
-o-transition: ease 0.4s;
border-width: 1px;
font-size: 22px;
}
#mastheadnbt .social-iconsnbt a img {
width: 38px;
transition: 0.8s all ease;
-webkit-transition: 0.8s all ease;
-moz-transition: 0.8s all ease;
-ms-transition: 0.8s all ease;
-o-transition: 0.8s all ease;
}
#mastheadnbt .social-iconsnbt a i {
font-size: 18px;
}
#mastheadnbt .social-iconsnbt a:before {
border-radius: 0%;
border-width: 1px;
background: #ffffff;
}
@media screen and (max-width: 600px) {
#mastheadnbt .social-iconsnbt a {
float: none;
}
}
#mastheadnbt .social-iconsnbt a:hover img {
transform: rotate(360deg) scale(1.15);
-webkit-transform: rotate(360deg) scale(1.15);
-moz-transform: rotate(360deg) scale(1.15);
-ms-transform: rotate(360deg) scale(1.15);
-o-transform: rotate(360deg) scale(1.15);
}
#mastheadnbt .top-searchnbt {
padding-bottom: 70px;
}
#mastheadnbt .top-searchnbt input[type=submit] {
display: none;
}
#mastheadnbt .top-searchnbt input[type=search] {
background: rgba(0, 0, 0, 0.3);
border: solid 4px rgba(0, 0, 0, 0.35);
padding: 5px 15px;
outline: none;
color: white;
font-weight: lighter;
}
.site-brandingnbt {
padding-top: 20vh;
overflow: hidden;
padding-bottom: 10px;
}
@media screen and (max-width: 768px) {
.site-brandingnbt {
text-align: center;
}
}
#site-logo {
display: inline-block;
float: none;
}
@media screen and (max-width: 768px) {
#site-logo {
float: none;
}
}
#mastheadnbt.header-medium h1.site-titlenbt {
font-size: 66px;
}
#mastheadnbt.header-medium .site-brandingnbt {
padding-top: 90px;
}
#mastheadnbt.header-medium .layernbt {
min-height: 350px;
}
#mastheadnbt.header-medium .top-searchnbt {
padding-bottom: 120px;
}
@media screen and (max-width: 767px) {
#mastheadnbt.header-medium .layernbt {
padding-bottom: 50px;
}
}
#mastheadnbt.header-medium.search-disabled .social-iconsnbt {
margin-bottom: 140px;
}
#mastheadnbt.header-medium.search-disabled .site-brandingnbt {
padding-top: 80px;
}
#mastheadnbt.header-small h1.site-titlenbt {
font-size: 66px;
}
#mastheadnbt.header-small .site-brandingnbt {
padding-top: 10px;
}
#mastheadnbt.header-small .layernbt {
min-height: 250px;
}
#mastheadnbt.header-small .top-searchnbt {
padding-bottom: 70px;
}
#mastheadnbt.header-small .social-iconsnbt {
margin-bottom: 20px;
}
@media screen and (max-width: 767px) {
#mastheadnbt.header-small .layernbt {
padding-bottom: 100px;
}
}
#mastheadnbt.header-largenbt.search-disabled .layernbt {
min-height: 600px;
}
#jumbosearchnbt {
position: fixed;
top: 0;
left: 0;
width: 100%;
height: 100%;
background: rgba(0, 0, 0, 0.84);
z-index: 9999;
text-align: center;
display: none;
}
#jumbosearchnbt .formnbt {
margin-top: 20%;
}
#jumbosearchnbt .formnbt label {
width: 80%;
text-align: center;
}
#jumbosearchnbt .formnbt input[type=search] {
background: none;
outline: none;
padding: 20px;
font-size: 28px;
border: none;
border-bottom: solid 1px #ddd;
border-radius: 0;
color: white;
width: 80%;
text-align: center;
clear: both;
}
#jumbosearchnbt .formnbt input[type=submit] {
display: none;
text-transform: uppercase;
}
#jumbosearchnbt .closeiconnbt {
position: absolute;
right: 30px;
top: 40px;
color: #eee;
font-size: 27px;
padding: 15px;
cursor: pointer;
}
/* -------- Nav Menu ---------- */
#site-navigation {
float: right;
clear: none;
margin-top: 55px;
margin-bottom: 45px;
}
#site-navigation ul {
float: right;
/* for the Currently active page */
}
#site-navigation ul li a {
padding: 10px;
color: #000;
background: rgba(221, 221, 221, 0.6);
font-weight: normal;
margin-left: 1px;
margin-right: 1px;
margin-bottom: 2px;
transition: 0.2s all ease;
-webkit-transition: 0.2s all ease;
-moz-transition: 0.2s all ease;
-ms-transition: 0.2s all ease;
-o-transition: 0.2s all ease;
}
#site-navigation ul li:hover a {
background: rgba(255, 255, 255, 0.6);
}
#site-navigation ul li ul li .menu-desc {
display: none;
}
#site-navigation ul li ul.sub-menu,
#site-navigation ul li ul.children {
background: rgba(255, 255, 255, 0.6);
top: 40px;
left: 1px;
display: block;
transition: 0.4s all ease;
-webkit-transition: 0.4s all ease;
-moz-transition: 0.4s all ease;
-ms-transition: 0.4s all ease;
-o-transition: 0.4s all ease;
perspective: 1000;
-webkit-perspective: 1000;
transform-origin: top;
-webkit-transform-origin: top;
transform: perspective(350px) rotateX(-90deg);
-webkit-transform: perspective(350px) rotateX(-90deg);
-moz-transform: perspective(350px) rotateX(-90deg);
}
#site-navigation ul li ul.sub-menu li ul,
#site-navigation ul li ul.children li ul {
transform-origin: left;
-webkit-transform-origin: left;
transition: 0.4s all ease;
-webkit-transition: 0.4s all ease;
-moz-transition: 0.4s all ease;
-ms-transition: 0.4s all ease;
-o-transition: 0.4s all ease;
left: 100%;
top: 0;
opacity: 0;
-webkit-transform: rotateY(65deg) !important;
transform: rotateY(65deg) !important;
-moz-transform: rotateY(65deg) !important;
}
#site-navigation ul li ul.sub-menu li ul li ul,
#site-navigation ul li ul.children li ul li ul {
display: none !important;
}
#site-navigation ul li ul.sub-menu li:hover,
#site-navigation ul li ul.children li:hover {
transition: 0.2s all ease;
-webkit-transition: 0.2s all ease;
-moz-transition: 0.2s all ease;
-ms-transition: 0.2s all ease;
-o-transition: 0.2s all ease;
/* -webkit-transition: 0.2s all ease !important; */
}
#site-navigation ul li ul.sub-menu li:hover ul,
#site-navigation ul li ul.children li:hover ul {
opacity: 1;
transform: rotateY(5deg) !important;
-webkit-transform: rotateY(5deg) !important;
-moz-transform: rotateY(5deg) !important;
}
#site-navigation ul li ul.sub-menu a,
#site-navigation ul li ul.children a {
padding: 8px 15px;
font-weight: normal;
font-size: 14px;
background: none;
transition: 0.4s background ease, 0.6s padding ease;
}
#site-navigation ul li ul.sub-menu a:hover,
#site-navigation ul li ul.children a:hover {
background: rgba(255, 255, 255, 0.6);
padding-left: 19px;
}
#site-navigation ul li:hover {
transition: 0.4s all ease;
-webkit-transition: 0.4s all ease;
-moz-transition: 0.4s all ease;
-ms-transition: 0.4s all ease;
-o-transition: 0.4s all ease;
-webkit-transition: 0.4s all ease !important;
}
#site-navigation ul li:hover ul.sub-menu,
#site-navigation ul li:hover ul.children {
display: block;
transform: rotateX(0deg);
-webkit-transform: rotateX(0deg);
}
#site-navigation ul .current_page_item > a,
#site-navigation ul .current-menu-item > a,
#site-navigation ul .current_page_ancestor > a {
color: black;
}
#site-navigation .fa {
padding: 0 5px 0 0;
}
#site-navigation .menu-desc {
font-size: 12px;
font-weight: 300;
color: #999;
display: inline-block;
margin-top: -5px;
font-style: italic;
text-transform: lowercase;
}
#site-navigation .current_page_item > a,
#site-navigation .current-menu-item > a,
#site-navigation .current_page_ancestor > a {
color: #f07261;
}
.slicknav_menu {
display: none;
}
@media screen and (max-width: 600px) {
.slicknav_menu {
display: block;
}
#site-navigation ul.menunbt {
display: none;
}
.slicknav_nav .menu-desc {
display: none !important;
}
.slicknav_nav a {
color: #777777;
}
.slicknav_nav a .fa {
margin-right: 5px;
}
.slicknav_nav .slicknav_arrow {
display: none;
}
.slicknav_menu {
background: #eee;
}
.slicknav_btn {
background: #ddd;
border: solid 1px #ccc;
}
.slicknav_menutxt {
color: #777777 !important;
text-shadow: none !important;
}
.slicknav_icon-bar {
background-color: #777777 !important;
}
}
/* TOP MENU */
#top-menunbt,
#static-barnbt #static-menunbt {
float: none;
position: relative;
}
@media screen and (max-width: 600px) {
#top-menunbt,
#static-barnbt #static-menunbt {
float: none;
text-align: center;
padding: 15px;
}
}
#top-menunbt ul,
#static-barnbt #static-menunbt ul {
list-style: none;
margin-bottom: 0;
margin-left: 0px;
text-align: center;
position: relative;
transition: 0.4s all ease;
-webkit-transition: 0.4s all ease;
-moz-transition: 0.4s all ease;
-ms-transition: 0.4s all ease;
-o-transition: 0.4s all ease;
}
#top-menunbt ul ul,
#static-barnbt #static-menunbt ul ul {
display: none;
position: absolute;
top: 100%;
left: 100%;
z-index: 10999;
text-align: left;
}
#top-menunbt ul li,
#static-barnbt #static-menunbt ul li {
display: inline;
margin-left: -3px;
position: relative;
}
#top-menunbt ul li span,
#static-barnbt #static-menunbt ul li span {
padding: 16px 5px;
}
#top-menunbt ul li:hover,
#static-barnbt #static-menunbt ul li:hover {
/* DROPDOWN */
}
#top-menunbt ul li:hover > ul,
#static-barnbt #static-menunbt ul li:hover > ul {
display: block;
width: 200px;
background: #dddddd;
left: 0;
top: 36px;
padding: 10px 20px;
}
#top-menunbt ul li:hover > ul li,
#static-barnbt #static-menunbt ul li:hover > ul li {
display: block;
}
#top-menunbt ul li:hover > ul li a,
#static-barnbt #static-menunbt ul li:hover > ul li a {
padding: 2px;
font-size: 14px;
font-weight: normal;
color: #848484;
}
#top-menunbt ul li:hover > ul li:hover ul,
#static-barnbt #static-menunbt ul li:hover > ul li:hover ul {
top: 0;
left: 100%;
}
#top-menunbt ul li a,
#static-barnbt #static-menunbt ul li a {
padding: 15px 10px;
display: inline-block;
color: #5e5e5e;
font-size: 16px;
font-weight: 600;
font-family: 'Dosis', sans-serif;
}
#top-menunbt ul li a .hvr-shutter-in-vertical,
#static-barnbt #static-menunbt ul li a .hvr-shutter-in-vertical {
background: none;
}
#top-menunbt ul li a:hover,
#static-barnbt #static-menunbt ul li a:hover {
text-decoration: underline;
color: #5e5e5e;
}
#static-barnbt {
background: rgba(247, 247, 247, 0.9);
border-bottom: solid 3px rgba(221, 221, 221, 0.8);
display: none;
position: fixed;
top: 0px;
z-index: 1000;
width: 100%;
}
@media screen and (max-width: 768px) {
#static-barnbt {
display: none !important;
}
}
#static-barnbt #static-logonbt {
float: left;
margin-right: 10px;
}
#static-barnbt #static-logonbt h1 {
margin: 0;
padding: 5px 10px;
}
#static-barnbt #static-logonbt h1 a {
color: #444444;
text-shadow: #777 1px 0px 1px;
}
#static-barnbt #static-logonbt img {
max-height: 50px;
}
#static-barnbt #static-menunbt {
float: left;
}
#static-barnbt #static-menunbt ul li a {
padding: 14px 10px;
}
#static-barnbt #static-menunbt ul li:hover > ul {
background: rgba(221, 221, 221, 0.98);
top: 35px;
}
#static-barnbt #searchiconnbt {
float: right;
padding: 5px 12px;
padding-top: 7px;
font-size: 24px;
color: #777777;
}
/* top slider */
#slider-bg {
background-size: cover;
}
.slider-wrapper {
margin-top: 60px;
margin-bottom: -40px;
}
.slider-wrapper .nivoSlider {
box-shadow: none;
background: none;
border: solid 8px rgba(247, 247, 247, 0.9);
outline: solid 1px #eaeaea;
}
.slider-wrapper .nivo-controlNav {
position: relative;
bottom: 55px;
margin-bottom: -20px;
z-index: 9;
}
.slider-wrapper .nivo-controlNav a {
background-image: none;
width: 22px;
height: 6px;
margin: 0 5px;
background: #aaa;
}
.slider-wrapper .nivo-controlNav a:hover {
background: rgba(240, 114, 97, 0.5);
}
.slider-wrapper .nivo-controlNav .active {
background: #f07261;
}
.slider-wrapper .nivo-caption {
bottom: 60px;
left: 65px;
right: auto;
font-family: inherit;
background: none;
padding: 0;
transition: 0.4s all ease;
-webkit-transition: 0.4s all ease;
-moz-transition: 0.4s all ease;
-ms-transition: 0.4s all ease;
-o-transition: 0.4s all ease;
transform-origin: left bottom;
}
.slider-wrapper .nivo-caption:hover {
transform: scale(1.1);
-webkit-transform: scale(1.1);
-moz-transform: scale(1.1);
-ms-transform: scale(1.1);
-o-transform: scale(1.1);
left: 65px;
bottom: 60px;
}
@media screen and (max-width: 660px) {
.slider-wrapper .nivo-caption {
transform: scale(0.6);
-webkit-transform: scale(0.6);
-moz-transform: scale(0.6);
-ms-transform: scale(0.6);
-o-transform: scale(0.6);
transform-origin: left bottom;
left: 55px;
bottom: 30px;
}
.slider-wrapper .nivo-caption:hover {
transform: scale(0.65);
-webkit-transform: scale(0.65);
-moz-transform: scale(0.65);
-ms-transform: scale(0.65);
-o-transform: scale(0.65);
left: 55px;
bottom: 30px;
}
}
.slider-wrapper .nivo-caption a {
text-decoration: none;
border-bottom: none;
color: white;
}
.slider-wrapper .nivo-caption .slide-title {
display: inline-block;
font-size: 32px;
font-weight: normal;
text-shadow: 0px 1px 1px black;
transition: 0.4s all ease;
-webkit-transition: 0.4s all ease;
-moz-transition: 0.4s all ease;
-ms-transition: 0.4s all ease;
-o-transition: 0.4s all ease;
}
.slider-wrapper .nivo-caption .slide-desc span {
/* border-left: solid 4px black; */
display: inline-block;
font-size: 18px;
font-weight: lighter
padding: 4px;
color: white;
text-shadow: 0px 1px 0px #000;
}
/* Flex Images */
#flex-bg {
background-size: cover;
}
.flex-images {
border: none;
padding: 15px;
margin-bottom: 30px;
margin-top: 20px;
}
@media screen and (max-width: 768px) {
.flex-images {
margin-top: -10px;
margin-bottom: 10px;
}
}
.flex-images .section-title:after {
width: 5%;
}
.flex-images .item {
margin: 6px;
border: none;
position: relative;
border: solid 5px #eee;
}
.flex-images .item .viewtext {
position: absolute;
top: 35%;
left: 40%;
font-size: 14px;
z-index: 9999;
display: none;
background: none;
}
.flex-images .item img {
transition: 0.4s all ease;
-webkit-transition: 0.4s all ease;
-moz-transition: 0.4s all ease;
-ms-transition: 0.4s all ease;
-o-transition: 0.4s all ease;
transform: scale(1.03);
-webkit-filter: brightness(0.8);
filter: brightness(0.8);
}
.flex-images .item:after {
content: "";
position: absolute;
display: block;
width: 100%;
height: 0px;
bottom: 0px;
background: rgba(240, 114, 97, 0.8);
transition: 0.4s all ease;
-webkit-transition: 0.4s all ease;
-moz-transition: 0.4s all ease;
-ms-transition: 0.4s all ease;
-o-transition: 0.4s all ease;
}
.flex-images .item:hover:after {
height: 5px;
}
.flex-images .item:hover img {
filter: brightness(0.5);
-webkit-filter: brightness(0.5);
}
.flex-images .item:hover .flex-caption {
padding-left: 20px;
}
.flex-images .item:hover .viewtext {
display: block;
color: #eee;
text-shadow: 0 0 2px #000;
background: rgba(0, 0, 0, 0.7);
padding: 10px;
font-size: 15px;
font-style: normal;
font-weight: bold;
transition: 0.4s all ease-in;
-webkit-transition: 0.4s all ease-in;
-moz-transition: 0.4s all ease-in;
-ms-transition: 0.4s all ease-in;
-o-transition: 0.4s all ease-in;
}
.flex-images .item:hover .viewtext:after {
content: "";
position: absolute;
display: block;
width: 0%;
height: 4px;
bottom: 0px;
left: 0px;
background: rgba(240, 114, 97, 0.8);
transition: 0.2s all ease;
-webkit-transition: 0.2s all ease;
-moz-transition: 0.2s all ease;
-ms-transition: 0.2s all ease;
-o-transition: 0.2s all ease;
}
.flex-images .item:hover .viewtext:before {
content: "";
position: absolute;
display: block;
width: 0%;
height: 4px;
top: 0px;
right: 0px;
background: rgba(240, 114, 97, 0.8);
transition: 0.2s all ease;
-webkit-transition: 0.2s all ease;
-moz-transition: 0.2s all ease;
-ms-transition: 0.2s all ease;
-o-transition: 0.2s all ease;
}
.flex-images .item:hover .viewtext:hover:before,
.flex-images .item:hover .viewtext:hover:after {
width: 100%;
}
.flex-images .flex-caption {
/* background: linear-gradient(to bottom, rgba(0,0,0,0) 0%,rgba(0,0,0,0.80) 100%); */
position: absolute;
bottom: 0px;
display: block;
pointer-events: none;
transition: 0.4s all ease;
-webkit-transition: 0.4s all ease;
-moz-transition: 0.4s all ease;
-ms-transition: 0.4s all ease;
-o-transition: 0.4s all ease;
width: 100%;
color: #ddd;
font-weight: normal;
text-shadow: 1px 1px 0 #222;
font-size: 14px;
padding: 50px 10px 15px 15px;
}
/* section titles */
.section-title {
font-weight: lighter;
color: #777;
font-size: 18px;
margin-bottom: 20px;
}
@media screen and (max-width: 991px) {
.section-title {
margin-top: 20px;
}
}
.section-title:after {
content: "";
display: block;
width: 12%;
height: 2px;
margin-top: 5px;
background: #f07261;
}
/* Second Featured Area */
.featured-2 {
margin: 20px 0;
position: relative;
}
.featured-2 .popular-articles {
overflow: auto;
overflow-x: hidden;
}
.featured-2 .popular-articles .imgcontainer {
padding: 6px;
position: relative;
}
.featured-2 .popular-articles .popimage {
position: relative;
transition: 0.4s all ease;
-webkit-transition: 0.4s all ease;
-moz-transition: 0.4s all ease;
-ms-transition: 0.4s all ease;
-o-transition: 0.4s all ease;
}
.featured-2 .popular-articles .popimage img {
display: block;
transition: 0.4s all ease;
-webkit-transition: 0.4s all ease;
-moz-transition: 0.4s all ease;
-ms-transition: 0.4s all ease;
-o-transition: 0.4s all ease;
}
@media screen and (max-width: 991px) {
.featured-2 .popular-articles .popimage img {
width: 100%;
}
}
.featured-2 .popular-articles .popimage:hover img {
transform: translateX(0px);
-webkit-transform: translateX(0px);
-moz-transform: translateX(0px);
-ms-transform: translateX(0px);
-o-transform: translateX(0px);
opacity: 1;
}
.featured-2 .popular-articles .popimage:hover .titledesc {
display: block;
transform: translateX(0px);
-webkit-transform: translateX(0px);
-moz-transform: translateX(0px);
-ms-transform: translateX(0px);
-o-transform: translateX(0px);
/* left: 0; */
opacity: 1;
}
.featured-2 .popular-articles .titledesc {
display: block;
position: absolute;
background: rgba(0, 0, 0, 0.6);
transition: 0.8s all ease;
-webkit-transition: 0.8s all ease;
-moz-transition: 0.8s all ease;
-ms-transition: 0.8s all ease;
-o-transition: 0.8s all ease;
transform: translateX(-50px);
-webkit-transform: translateX(-50px);
-moz-transform: translateX(-50px);
-ms-transform: translateX(-50px);
-o-transform: translateX(-50px);
top: 0px;
left: 0px;
width: 100%;
height: 100%;
opacity: 0;
}
.featured-2 .popular-articles .titledesc h2 {
font-size: 16px;
text-align: center;
color: white;
font-weight: bold;
}
.featured-2 .popular-articles .titledesc a {
color: #eee;
background: #f07261;
text-align: center;
display: block;
width: 40%;
padding: 5px;
margin: auto;
margin-top: 25px;
}
.featured-2 .popular-articles .imgcontainer:nth-child(odd) .titledesc {
transform: translateX(50px);
-webkit-transform: translateX(50px);
-moz-transform: translateX(50px);
-ms-transform: translateX(50px);
-o-transform: translateX(50px);
}
.featured-2 .popular-articles .imgcontainer:nth-child(odd) .popimage:hover img {
transform: translateX(0px);
-webkit-transform: translateX(0px);
-moz-transform: translateX(0px);
-ms-transform: translateX(0px);
-o-transform: translateX(0px);
}
.featured-2 .popular-articles .imgcontainer:nth-child(odd) .popimage:hover .titledesc {
transform: translateX(0px);
-webkit-transform: translateX(0px);
-moz-transform: translateX(0px);
-ms-transform: translateX(0px);
-o-transform: translateX(0px);
}
/* sb slider */
.latest-hap {
position: relative;
}
.sb-slider .sb-description {
pointer-events: none;
z-index: 88;
background: rgba(0, 0, 0, 0.4);
border-left-color: #f07261;
padding: 10px;
}
.sb-slider .sb-description h3 {
margin: 0;
}
.nav-arrows {
position: absolute;
top: 50%;
}
.nav-arrows a {
background-color: rgba(0, 0, 0, 0.5);
transition: 0.2s all ease;
-webkit-transition: 0.2s all ease;
-moz-transition: 0.2s all ease;
-ms-transition: 0.2s all ease;
-o-transition: 0.2s all ease;
box-shadow: 0px 0px 1px #f07261;
}
.nav-arrows a:hover {
background-color: rgba(240, 114, 97, 0.5);
}
.nav-arrows a:first-child {
right: -535px;
}
@media screen and (max-width: 1199px) {
.nav-arrows a:first-child {
right: -435px;
}
}
@media screen and (max-width: 991px) {
.nav-arrows a:first-child {
right: -675px;
}
}
@media screen and (max-width: 768px) {
.nav-arrows a:first-child {
display: none;
}
}
.nav-arrows a:nth-child(2) {
right: -47px;
}
@media screen and (min-width: 768px) and (max-width: 991px) {
.nav-arrows a:nth-child(2) {
right: -57px;
}
}
@media screen and (max-width: 768px) {
.nav-arrows a:nth-child(2) {
display: none;
}
}
#contentnbt {
margin-top: 30px;
}
.grid-row {
margin: 0;
}
/* Grid */
.gridnbt {
margin: 10px 0;
padding-left: 0;
padding-bottom: 17px;
border-bottom: solid 1px #eee;
}
@media screen and (max-width: 768px) {
.gridnbt {
border-bottom: none;
}
}
.gridnbt:nth-last-child(2) {
border: none;
}
.gridnbt .readmorelnbt {
display: block;
clear: both;
}
.gridnbt .hvr-underline-from-center:before {
height: 1px;
background: #f07261;
}
.grid_2_column {
padding: 0;
border-bottom: none;
}
@media screen and (max-width: 768px) {
.grid_2_column {
padding-right: 0px;
}
}
@media screen and (min-width: 768px) {
.grid_2_column:nth-child(even) {
padding-left: 10px;
}
.grid_2_column:nth-child(odd) {
padding-right: 10px;
clear: left;
}
}
.grid_3_column {
padding: 0 10px;
}
@media screen and (min-width: 768px) {
.grid_3_column:nth-child(odd) {
padding-right: 10px;
clear: none;
}
.grid_3_column:nth-child(3n+1) {
clear: left;
}
}
@media screen and (max-width: 991px) {
.freak {
padding-right: 0px;
}
}
#secondarynbt {
/*
aside:nth-child(odd) {
background: #fafafa;
border: solid 1px #eee;
}
*/
/* Some Styling for Default WordPress Widgets */
/* Pulse Grow */
}
#secondarynbt .widget {
padding: 10px;
font-size: 13px;
}
#secondarynbt .widget h2, #secondarynbt .widget h3 {
font-weight: 500;
color: #777;
font-size: 18px;
margin-bottom: 20px;
margin-top: 0px;
background: #FFF;
padding: 15px;
margin-left: -10px;
margin-right: -10px;
margin-top: -10px;
border: solid 1px #f7f7f7;
border-bottom: solid 3px #f07261;
font-family: 'Dosis', sans-serif;
}
#secondarynbt .widget {
background: #f7f7f7;
padding: 0;
padding: 10px;
}
#secondarynbt .widget a {
color: #888;
font-weight: normal;
transition: 0.4s all ease;
-webkit-transition: 0.4s all ease;
-moz-transition: 0.4s all ease;
-ms-transition: 0.4s all ease;
-o-transition: 0.4s all ease;
}
#secondarynbt .widget a:hover {
color: #f07261;
}
#secondarynbt .widget ul {
margin-left: 0px;
}
#secondarynbt .widget ul li {
list-style: none;
border-bottom: solid 1px #eee;
padding: 10px 6px;
box-shadow: 0 1px 0 #fff;
}
#secondarynbt .widget ul li:last-child {
border-bottom: none;
box-shadow: none;
}
#secondarynbt .widget_searchnbt {
margin-bottom: 20px;
}
#secondarynbt .widget_searchnbt label {
width: 100%;
}
#secondarynbt .widget_searchnbt input[type=search] {
background: white;
border: solid 2px #dddddd;
border-radius: 0px;
padding: 15px;
padding-top: 12px;
font-size: 16px;
padding-bottom: 10px;
outline: none;
width: 100%;
}
#secondarynbt .search-submitnbt {
display: none;
}
#secondarynbt .widget ul li:before {
content: "\f054";
font-family: "FontAwesome";
color: #b7b7b7;
font-size: 10px;
color: #f07261;
margin-right: 5px;
}
#secondarynbt .widget ul li {
transition: 0.4s all ease;
-webkit-transition: 0.4s all ease;
-moz-transition: 0.4s all ease;
-ms-transition: 0.4s all ease;
-o-transition: 0.4s all ease;
}
#secondarynbt .widget ul li:hover {
transform: translateX(2px);
-webkit-transform: translateX(2px);
-moz-transform: translateX(2px);
-ms-transform: translateX(2px);
-o-transform: translateX(2px);
}
#secondarynbt .label-size a {
background: #f07261;
font-size: 14px !important;
text-transform: uppercase;
font-weight: lighter;
color: #ffffff;
padding: 7px 5px;
margin-bottom: 5px;
display: inline-block;
}
.label-count {
display: none;
}
@-webkit-keyframes hvr-pulse-grow {
to {
-webkit-transform: scale(1.05);
transform: scale(1.05);
}
}
@keyframes hvr-pulse-grow {
to {
-webkit-transform: scale(0.95);
transform: scale(0.95);
}
}
#secondarynbt .label-size a {
display: inline-block;
vertical-align: middle;
-webkit-transform: translateZ(0);
transform: translateZ(0);
box-shadow: 0 0 1px rgba(0, 0, 0, 0);
-webkit-backface-visibility: hidden;
backface-visibility: hidden;
-moz-osx-font-smoothing: grayscale;
}
#secondarynbt .label-size a:hover,
#secondarynbt .label-size a:focus,
#secondarynbt .label-size a:active {
-webkit-animation-name: hvr-pulse-grow;
animation-name: hvr-pulse-grow;
-webkit-animation-duration: 0.3s;
animation-duration: 0.3s;
-webkit-animation-timing-function: linear;
animation-timing-function: linear;
-webkit-animation-iteration-count: infinite;
animation-iteration-count: infinite;
-webkit-animation-direction: alternate;
animation-direction: alternate;
}
/* Footer Sidebar */
#footer-sidebarnbt {
background: #f7f7f7;
border-top: solid 3px #dddddd;
}
#footer-sidebarnbt .footer-column {
/* Pulse Grow */
}
#footer-sidebarnbt .footer-column .widget h2, #footer-sidebarnbt .footer-column .widget h3 {
font-weight: 500;
font-size: 20px;
color: #f07261;
font-family: 'Dosis', sans-serif;
}
#footer-sidebarnbt .footer-column .widget {
color: #5e5e5e;
font-size: 13px;
}
#footer-sidebarnbt .footer-column .widget a {
color: #777777;
font-weight: normal;
transition: 0.4s all ease;
-webkit-transition: 0.4s all ease;
-moz-transition: 0.4s all ease;
-ms-transition: 0.4s all ease;
-o-transition: 0.4s all ease;
}
#footer-sidebarnbt .footer-column .widget a:hover {
color: #f07261;
}
#footer-sidebarnbt .footer-column .widget ul {
margin-left: 0px;
}
#footer-sidebarnbt .footer-column .widget ul li {
list-style: none;
padding: 8px;
border-bottom: solid 1px #e5e5e5;
box-shadow: #fff 0 1px 0 0;
}
#footer-sidebarnbt .footer-column .widget ul li:last-child {
border-bottom: none;
box-shadow: none;
}
#footer-sidebarnbt .footer-column .widget ul li ul {
margin-left: 5px;
}
#footer-sidebarnbt .footer-column .widget ul li li {
margin-left: 2px;
border-bottom: none;
padding: 2px;
}
#footer-sidebarnbt .footer-column .label-size a {
background: #f07261;
font-size: 14px !important;
text-transform: uppercase;
font-weight: lighter;
color: white;
padding: 7px 5px;
margin-bottom: 5px;
display: inline-block;
}
@-webkit-keyframes hvr-pulse-grow {
to {
-webkit-transform: scale(1.05);
transform: scale(1.05);
}
}
@keyframes hvr-pulse-grow {
to {
-webkit-transform: scale(0.95);
transform: scale(0.95);
}
}
#footer-sidebarnbt .footer-column .label-size a {
display: inline-block;
vertical-align: middle;
-webkit-transform: translateZ(0);
transform: translateZ(0);
box-shadow: 0 0 1px rgba(0, 0, 0, 0);
-webkit-backface-visibility: hidden;
backface-visibility: hidden;
-moz-osx-font-smoothing: grayscale;
}
#footer-sidebarnbt .footer-column .label-size a:hover,
#footer-sidebarnbt .footer-column .label-size a:focus,
#footer-sidebarnbt .footer-column .label-size a:active {
-webkit-animation-name: hvr-pulse-grow;
animation-name: hvr-pulse-grow;
-webkit-animation-duration: 0.3s;
animation-duration: 0.3s;
-webkit-animation-timing-function: linear;
animation-timing-function: linear;
-webkit-animation-iteration-count: infinite;
animation-iteration-count: infinite;
-webkit-animation-direction: alternate;
animation-direction: alternate;
}
#footer-sidebarnbt .footer-column .widget ul li:before {
content: "\f054";
font-family: "FontAwesome";
color: #f07261;
font-size: 10px;
margin-right: 5px;
}
#colophonnbt {
background: #363636;
padding: 15px 10px 15px 10px;
border-top: solid 3px #f07261;
color: #919191;
font-size: 13px;
text-align: center;
}
#colophonnbt a {
color: #777777;
text-decoration: underline;
}
/* Single Posts Area */
.freak-single-entry-header {
color: #eee;
position: relative;
overflow: hidden;
margin-top: -45px;
margin-bottom: 40px;
z-index: 99;
background: #444;
}
.freak-single-entry-header .entry-header-bg {
position: absolute;
left: 0;
z-index: -1;
display: block;
width: 100%;
height: 100%;
background-attachment: fixed;
background-position-y: center;
background-size: cover;
-webkit-filter: blur(10px) brightness(0.7);
filter: blur(10px) brightness(0.7);
transform: scale(1.1);
-webkit-transform: scale(1.1);
-moz-transform: scale(1.1);
-ms-transform: scale(1.1);
-o-transform: scale(1.1);
}
.freak-single-entry-header .layernbt {
padding: 50px 15px 100px 15px;
background: rgba(0, 0, 0, 0.1);
width: 100%;
height: 100%;
}
.freak-single-entry-header h1 {
margin: 0;
font-size: 48px;
font-weight: 300;
text-shadow: 1px 1px 1px black;
}
.freak-single-entry-header .entry-meta {
font-size: small;
font-weight: lighter;
}
.freak-single-entry-header .entry-meta a {
color: white;
font-style: italic;
}
.mega-containernbt.contentnbt {
position: relative;
top: -100px;
z-index: 999;
}
.mega-containernbt.contentnbt .contentnbt {
padding-top: 35px;
border-top: solid 3px #f07261;
}
/* SLIDEOUT MENU */
.slideout-menu {
position: fixed;
left: 0;
top: 0;
bottom: 0;
right: 0;
z-index: 0;
width: 256px;
overflow-y: auto;
-webkit-overflow-scrolling: touch;
display: none;
}
.slideout-open,
.slideout-open body,
.slideout-open .slideout-panel {
overflow: hidden;
}
.slideout-open .slideout-menu {
display: block;
}
.mobile-toggle-button {
position: fixed !important;
top: 5px !important;
padding: 5px 10px;
border-radius: 1px;
color: #f07261;
background: rgba(0, 0, 0, 0.6);
z-index: 1099;
box-shadow: none;
border: none;
text-shadow: none;
font-size: 20px;
outline: none;
}
@media screen and (min-width: 768px) {
.mobile-toggle-button {
display: none;
}
}
.mobile-toggle-button:hover {
box-shadow: none;
}
.mobile-toggle-button {
left: 5px;
}
#mobile-static-menunbt {
background: white;
border-right: solid 3px #f07261;
padding: 15px;
box-shadow: inset -5px 0 5px #dddddd;
}
@media screen and (min-width: 768px) {
#mobile-static-menunbt {
display: none;
}
}
#mobile-static-menunbt ul {
list-style: none;
margin-left: 0px;
}
#mobile-static-menunbt ul li a {
padding: 10px;
border-bottom: solid 1px #eee;
font-weight: bold;
display: block;
color: #f07261;
font-size: 16px;
}
#mobile-static-menunbt ul li a:hover {
background: #eee;
}
#mobile-static-menunbt ul li ul {
margin-left: 15px;
color: #ddd;
}
#mobile-static-menunbt ul li ul li a {
padding: 5px;
border-bottom: none;
font-size: 14px;
font-weight: normal;
}
h2.date-header {
margin: 10px 0px;
display: none;
}
.main .widget {
margin: 0 0 5px;
padding: 0 0 2px;
}
.main .Blog {
border-bottom-width: 0;
}
#header .description {
}
/* Comments----------------------------------------------- */
#comments {
padding:10px;
margin-bottom:20px;
}
#comments h4 {
font-size:22px;
margin-bottom:10px;
}
#comments ol {
margin-left:0;
}
.deleted-comment {
font-style: italic;
color: gray;
}
#blog-pager-newer-link {
float: left;
}
#blog-pager-older-link {
float: right;
}
#blog-pager {
text-align: center;
padding:5px;
margin:10px 0;
}
.feed-links {
clear: both;
}
.comment-form {
}
#navbar-iframe {
height: 0;
visibility: hidden;
display: none;
}
.author-profile {
background: #f6f6f6;
border: 1px solid #eee;
margin: 10px 0 10px 0;
padding: 8px;
overflow: hidden;
}
.author-profile img {
border: 1px solid #ddd;
float: left;
margin-right: 10px;
}
.post-iconspbt {
margin: 5px 0 0 0;
padding: 0px;
}
.post-locationpbt {
margin: 5px 0;
padding: 0px;
}
.related-postbwrap {
margin: 15px auto 10px;
padding: 5px;
}
.related-postbwrap h4 {
font-weight: bold;
margin: 5px 10px 10px;
}
.related-post-style-2,.related-post-style-2 li {
list-style: none;
margin: 0;
padding: 0;
}
.related-post-style-2 li {
border-top: 1px solid #eee;
overflow: hidden;
padding: 10px 0px;
}
.related-post-style-2 li:first-child {
border-top: none;
}
.related-post-style-2 .related-post-item-thumbnail {
width: 80px;
height: 80px;
max-width: none;
max-height: none;
background-color: transparent;
border: none;
float: left;
margin: 2px 10px 0 0;
padding: 0;
}
.related-post-style-2 .related-post-item-title {
font-weight: bold;
font-size: 100%;
}
.related-post-style-2 .related-post-item-summary {
display: block;
}
.related-post-style-3,.related-post-style-3 li {
margin: 0;
padding: 0;
list-style: none;
word-wrap: break-word;
overflow: hidden;
}
.related-post-style-3 .related-post-item {
display: block;
float: left;
width: 120px;
height: auto;
padding: 10px;
border-left: 0px solid #eee;
margin-bottom: -989px;
padding-bottom: 999px;
}
.related-post-style-3 .related-post-item:first-child {
border-left: none;
}
.related-post-style-3 .related-post-item-thumbnail {
display: block;
margin: 0 0 10px;
width: 120px;
height: auto;
max-width: 100%;
max-height: none;
background-color: transparent;
border: none;
padding: 0;
}
.related-post-style-3 .related-post-item-title {
font-weight: normal;
text-decoration: none;
}
.nbt-share-buttons {
margin: 15px 0px 15px;
line-height: 2;
overflow: hidden;
}
.nbt-share-buttons ul {
margin: 0;
padding: 0;
list-style: none;
}
.nbt-share-buttons ul li {
float: left;
width: 28.4%;
margin-right: 2%;
margin-bottom: 0;
margin-left: 0;
margin-top: 0;
}
.nbt-share-buttons ul li:last-child {
margin-right: 0;
}
.nbt-share-buttons ul li a i {
font-size: 15px;
margin-right: 8px;
}
.nbt-share-buttons ul li a {
font-size: 12px;
font-weight: bold;
display: block;
background: #222;
color: #fff;
padding: 5px 0;
text-transform: uppercase;
text-decoration: none;
text-align: center;
border: 1px solid rgba(0,0,0,0.2);
}
.nbt-share-buttons ul li a:hover {
-webkit-opacity: .9;
-moz-opacity: .9;
opacity: .9;
text-decoration: none;
}
.nbt-share-buttons ul li.nbt-twitterbtn a {
background: #38ace0;
}
.nbt-share-buttons ul li.nbt-facebookbtn a {
background: #236293;
}
.nbt-share-buttons ul li.nbt-googlebtn a {
background: #dd4b39;
}
@media only screen and (max-width: 480px) {
.nbt-share-buttons ul li {
float: none!important;
width: 100%;
display: block;
margin: 0 0 8px!important;
width: 100%;
};
}
.pbtsharethisbutt {
overflow: hidden;
padding: 20px 0 5px;
margin: 0;
}
.pbtsharethisbutt ul {
list-style: none;
list-style-type: none;
margin: 0;
padding: 0;
}
.pbtsharethisbutt ul li {
float: left;
margin: 0;
padding: 0;
}
.pbtsharethisbutt ul li a {
padding: 0 10px;
display: inline-block;
}
.pbtsharethisbutt ul li a:hover {
}
.separator a[style="margin-left: 1em; margin-right: 1em;"] {margin-left: auto!important;margin-right: auto!important;}
.separator a[style="clear: left; float: left; margin-bottom: 1em; margin-right: 1em;"] {clear: none !important; float: none !important; margin-bottom: 0em !important; margin-right: 0em !important;}
.separator a[style="clear: left; float: left; margin-bottom: 1em; margin-right: 1em;"] img {float: left !important; margin: 0px 10px 10px 0px;}
.separator a[style="clear: right; float: right; margin-bottom: 1em; margin-left: 1em;"] {clear: none !important; float: none !important; margin-bottom: 0em !important; margin-left: 0em !important;}
.separator a[style="clear: right; float: right; margin-bottom: 1em; margin-left: 1em;"] img {float: right !important; margin: 0px 0px 10px 10px;}
.PopularPosts .widget-content ul li {
padding:6px 0px;
}
.reaction-buttons table{
border:none;
margin-bottom:5px;
}
.reaction-buttons table, .reaction-buttons td{
border:none !important;
}
.pbtthumbimg {
float:left;
margin:0px 10px 5px 0px;
padding:4px;
border:0px solid #eee;
background:none;
width:200px;
height:auto;
}
#mastheadnbt #site-logo img { transform-origin: left; }
#mastheadnbt h2.site-descriptionnbt { color: #c4c4c4; }
#mastheadnbt {
background-image: url(http://4.bp.blogspot.com/-kFu1MYFxPMU/Vbwug36v7GI/AAAAAAAAOg4/GrIew1sKnbU/s000/city.jpg);
background-size: cover;
background-position-x: center;
background-repeat: no-repeat;
}
.entry-title {
font-family: 'Dosis', sans-serif;
margin: 0 0 10px 0;
}
.PopularPosts .widget-content ul li:before {
content: '' !important;
margin-right: 0 !important;
}
.site-mainnbt {
padding-bottom: 25px;
}
.CSS_LIGHTBOX {
z-index: 1000 !important;
}

    ]]></b:skin>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js' type='text/javascript'/>
    <script type='text/javascript'>
      //<![CDATA[
      /*! jQuery Migrate v1.2.1 | (c) 2005, 2013 jQuery Foundation, Inc. and other contributors | jquery.org/license */
      jQuery.migrateMute===void 0&&(jQuery.migrateMute=!0),function(e,t,n){function r(n){var r=t.console;i[n]||(i[n]=!0,e.migrateWarnings.push(n),r&&r.warn&&!e.migrateMute&&(r.warn("JQMIGRATE: "+n),e.migrateTrace&&r.trace&&r.trace()))}function a(t,a,i,o){if(Object.defineProperty)try{return Object.defineProperty(t,a,{configurable:!0,enumerable:!0,get:function(){return r(o),i},set:function(e){r(o),i=e}}),n}catch(s){}e._definePropertyBroken=!0,t[a]=i}var i={};e.migrateWarnings=[],!e.migrateMute&&t.console&&t.console.log&&t.console.log("JQMIGRATE: Logging is active"),e.migrateTrace===n&&(e.migrateTrace=!0),e.migrateReset=function(){i={},e.migrateWarnings.length=0},"BackCompat"===document.compatMode&&r("jQuery is not compatible with Quirks Mode");var o=e("<input/>",{size:1}).attr("size")&&e.attrFn,s=e.attr,u=e.attrHooks.value&&e.attrHooks.value.get||function(){return null},c=e.attrHooks.value&&e.attrHooks.value.set||function(){return n},l=/^(?:input|button)$/i,d=/^[238]$/,p=/^(?:autofocus|autoplay|async|checked|controls|defer|disabled|hidden|loop|multiple|open|readonly|required|scoped|selected)$/i,f=/^(?:checked|selected)$/i;a(e,"attrFn",o||{},"jQuery.attrFn is deprecated"),e.attr=function(t,a,i,u){var c=a.toLowerCase(),g=t&&t.nodeType;return u&&(4>s.length&&r("jQuery.fn.attr( props, pass ) is deprecated"),t&&!d.test(g)&&(o?a in o:e.isFunction(e.fn[a])))?e(t)[a](i):("type"===a&&i!==n&&l.test(t.nodeName)&&t.parentNode&&r("Can't change the 'type' of an input or button in IE 6/7/8"),!e.attrHooks[c]&&p.test(c)&&(e.attrHooks[c]={get:function(t,r){var a,i=e.prop(t,r);return i===!0||"boolean"!=typeof i&&(a=t.getAttributeNode(r))&&a.nodeValue!==!1?r.toLowerCase():n},set:function(t,n,r){var a;return n===!1?e.removeAttr(t,r):(a=e.propFix[r]||r,a in t&&(t[a]=!0),t.setAttribute(r,r.toLowerCase())),r}},f.test(c)&&r("jQuery.fn.attr('"+c+"') may use property instead of attribute")),s.call(e,t,a,i))},e.attrHooks.value={get:function(e,t){var n=(e.nodeName||"").toLowerCase();return"button"===n?u.apply(this,arguments):("input"!==n&&"option"!==n&&r("jQuery.fn.attr('value') no longer gets properties"),t in e?e.value:null)},set:function(e,t){var a=(e.nodeName||"").toLowerCase();return"button"===a?c.apply(this,arguments):("input"!==a&&"option"!==a&&r("jQuery.fn.attr('value', val) no longer sets properties"),e.value=t,n)}};var g,h,v=e.fn.init,m=e.parseJSON,y=/^([^<]*)(<[\w\W]+>)([^>]*)$/;e.fn.init=function(t,n,a){var i;return t&&"string"==typeof t&&!e.isPlainObject(n)&&(i=y.exec(e.trim(t)))&&i[0]&&("<"!==t.charAt(0)&&r("$(html) HTML strings must start with '<' character"),i[3]&&r("$(html) HTML text after last tag is ignored"),"#"===i[0].charAt(0)&&(r("HTML string cannot start with a '#' character"),e.error("JQMIGRATE: Invalid selector string (XSS)")),n&&n.context&&(n=n.context),e.parseHTML)?v.call(this,e.parseHTML(i[2],n,!0),n,a):v.apply(this,arguments)},e.fn.init.prototype=e.fn,e.parseJSON=function(e){return e||null===e?m.apply(this,arguments):(r("jQuery.parseJSON requires a valid JSON string"),null)},e.uaMatch=function(e){e=e.toLowerCase();var t=/(chrome)[ \/]([\w.]+)/.exec(e)||/(webkit)[ \/]([\w.]+)/.exec(e)||/(opera)(?:.*version|)[ \/]([\w.]+)/.exec(e)||/(msie) ([\w.]+)/.exec(e)||0>e.indexOf("compatible")&&/(mozilla)(?:.*? rv:([\w.]+)|)/.exec(e)||[];return{browser:t[1]||"",version:t[2]||"0"}},e.browser||(g=e.uaMatch(navigator.userAgent),h={},g.browser&&(h[g.browser]=!0,h.version=g.version),h.chrome?h.webkit=!0:h.webkit&&(h.safari=!0),e.browser=h),a(e,"browser",e.browser,"jQuery.browser is deprecated"),e.sub=function(){function t(e,n){return new t.fn.init(e,n)}e.extend(!0,t,this),t.superclass=this,t.fn=t.prototype=this(),t.fn.constructor=t,t.sub=this.sub,t.fn.init=function(r,a){return a&&a instanceof e&&!(a instanceof t)&&(a=t(a)),e.fn.init.call(this,r,a,n)},t.fn.init.prototype=t.fn;var n=t(document);return r("jQuery.sub() is deprecated"),t},e.ajaxSetup({converters:{"text json":e.parseJSON}});var b=e.fn.data;e.fn.data=function(t){var a,i,o=this[0];return!o||"events"!==t||1!==arguments.length||(a=e.data(o,t),i=e._data(o,t),a!==n&&a!==i||i===n)?b.apply(this,arguments):(r("Use of jQuery.fn.data('events') is deprecated"),i)};var j=/\/(java|ecma)script/i,w=e.fn.andSelf||e.fn.addBack;e.fn.andSelf=function(){return r("jQuery.fn.andSelf() replaced by jQuery.fn.addBack()"),w.apply(this,arguments)},e.clean||(e.clean=function(t,a,i,o){a=a||document,a=!a.nodeType&&a[0]||a,a=a.ownerDocument||a,r("jQuery.clean() is deprecated");var s,u,c,l,d=[];if(e.merge(d,e.buildFragment(t,a).childNodes),i)for(c=function(e){return!e.type||j.test(e.type)?o?o.push(e.parentNode?e.parentNode.removeChild(e):e):i.appendChild(e):n},s=0;null!=(u=d[s]);s++)e.nodeName(u,"script")&&c(u)||(i.appendChild(u),u.getElementsByTagName!==n&&(l=e.grep(e.merge([],u.getElementsByTagName("script")),c),d.splice.apply(d,[s+1,0].concat(l)),s+=l.length));return d});var Q=e.event.add,x=e.event.remove,k=e.event.trigger,N=e.fn.toggle,T=e.fn.live,M=e.fn.die,S="ajaxStart|ajaxStop|ajaxSend|ajaxComplete|ajaxError|ajaxSuccess",C=RegExp("\\b(?:"+S+")\\b"),H=/(?:^|\s)hover(\.\S+|)\b/,A=function(t){return"string"!=typeof t||e.event.special.hover?t:(H.test(t)&&r("'hover' pseudo-event is deprecated, use 'mouseenter mouseleave'"),t&&t.replace(H,"mouseenter$1 mouseleave$1"))};e.event.props&&"attrChange"!==e.event.props[0]&&e.event.props.unshift("attrChange","attrName","relatedNode","srcElement"),e.event.dispatch&&a(e.event,"handle",e.event.dispatch,"jQuery.event.handle is undocumented and deprecated"),e.event.add=function(e,t,n,a,i){e!==document&&C.test(t)&&r("AJAX events should be attached to document: "+t),Q.call(this,e,A(t||""),n,a,i)},e.event.remove=function(e,t,n,r,a){x.call(this,e,A(t)||"",n,r,a)},e.fn.error=function(){var e=Array.prototype.slice.call(arguments,0);return r("jQuery.fn.error() is deprecated"),e.splice(0,0,"error"),arguments.length?this.bind.apply(this,e):(this.triggerHandler.apply(this,e),this)},e.fn.toggle=function(t,n){if(!e.isFunction(t)||!e.isFunction(n))return N.apply(this,arguments);r("jQuery.fn.toggle(handler, handler...) is deprecated");var a=arguments,i=t.guid||e.guid++,o=0,s=function(n){var r=(e._data(this,"lastToggle"+t.guid)||0)%o;return e._data(this,"lastToggle"+t.guid,r+1),n.preventDefault(),a[r].apply(this,arguments)||!1};for(s.guid=i;a.length>o;)a[o++].guid=i;return this.click(s)},e.fn.live=function(t,n,a){return r("jQuery.fn.live() is deprecated"),T?T.apply(this,arguments):(e(this.context).on(t,this.selector,n,a),this)},e.fn.die=function(t,n){return r("jQuery.fn.die() is deprecated"),M?M.apply(this,arguments):(e(this.context).off(t,this.selector||"**",n),this)},e.event.trigger=function(e,t,n,a){return n||C.test(e)||r("Global events are undocumented and deprecated"),k.call(this,e,t,n||document,a)},e.each(S.split("|"),function(t,n){e.event.special[n]={setup:function(){var t=this;return t!==document&&(e.event.add(document,n+"."+e.guid,function(){e.event.trigger(n,null,t,!0)}),e._data(this,n,e.guid++)),!1},teardown:function(){return this!==document&&e.event.remove(document,n+"."+e._data(this,n)),!1}}})}(jQuery,window);
      //]]>
    </script>
    <script type='text/javascript'>
      //<![CDATA[
      /* This Document Contains the content of All The JS files, which were supposed to be loaded separately. This is done to minimize the no. of http requests, and speed up the site. All these files have also been provieded separately in the assets folder */
      /*!
 * Bootstrap v3.3.1 (http://getbootstrap.com)
 * Copyright 2011-2014 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */
      if("undefined"==typeof jQuery)throw new Error("Bootstrap's JavaScript requires jQuery");+function(a){var b=a.fn.jquery.split(" ")[0].split(".");if(b[0]<2&&b[1]<9||1==b[0]&&9==b[1]&&b[2]<1)throw new Error("Bootstrap's JavaScript requires jQuery version 1.9.1 or higher")}(jQuery),+function(a){"use strict";function b(){var a=document.createElement("bootstrap"),b={WebkitTransition:"webkitTransitionEnd",MozTransition:"transitionend",OTransition:"oTransitionEnd otransitionend",transition:"transitionend"};for(var c in b)if(void 0!==a.style[c])return{end:b[c]};return!1}a.fn.emulateTransitionEnd=function(b){var c=!1,d=this;a(this).one("bsTransitionEnd",function(){c=!0});var e=function(){c||a(d).trigger(a.support.transition.end)};return setTimeout(e,b),this},a(function(){a.support.transition=b(),a.support.transition&&(a.event.special.bsTransitionEnd={bindType:a.support.transition.end,delegateType:a.support.transition.end,handle:function(b){return a(b.target).is(this)?b.handleObj.handler.apply(this,arguments):void 0}})})}(jQuery),+function(a){"use strict";function b(b){return this.each(function(){var c=a(this),e=c.data("bs.alert");e||c.data("bs.alert",e=new d(this)),"string"==typeof b&&e[b].call(c)})}var c='[data-dismiss="alert"]',d=function(b){a(b).on("click",c,this.close)};d.VERSION="3.3.1",d.TRANSITION_DURATION=150,d.prototype.close=function(b){function c(){g.detach().trigger("closed.bs.alert").remove()}var e=a(this),f=e.attr("data-target");f||(f=e.attr("href"),f=f&&f.replace(/.*(?=#[^\s]*$)/,""));var g=a(f);b&&b.preventDefault(),g.length||(g=e.closest(".alert")),g.trigger(b=a.Event("close.bs.alert")),b.isDefaultPrevented()||(g.removeClass("in"),a.support.transition&&g.hasClass("fade")?g.one("bsTransitionEnd",c).emulateTransitionEnd(d.TRANSITION_DURATION):c())};var e=a.fn.alert;a.fn.alert=b,a.fn.alert.Constructor=d,a.fn.alert.noConflict=function(){return a.fn.alert=e,this},a(document).on("click.bs.alert.data-api",c,d.prototype.close)}(jQuery),+function(a){"use strict";function b(b){return this.each(function(){var d=a(this),e=d.data("bs.button"),f="object"==typeof b&&b;e||d.data("bs.button",e=new c(this,f)),"toggle"==b?e.toggle():b&&e.setState(b)})}var c=function(b,d){this.$element=a(b),this.options=a.extend({},c.DEFAULTS,d),this.isLoading=!1};c.VERSION="3.3.1",c.DEFAULTS={loadingText:"loading..."},c.prototype.setState=function(b){var c="disabled",d=this.$element,e=d.is("input")?"val":"html",f=d.data();b+="Text",null==f.resetText&&d.data("resetText",d[e]()),setTimeout(a.proxy(function(){d[e](null==f[b]?this.options[b]:f[b]),"loadingText"==b?(this.isLoading=!0,d.addClass(c).attr(c,c)):this.isLoading&&(this.isLoading=!1,d.removeClass(c).removeAttr(c))},this),0)},c.prototype.toggle=function(){var a=!0,b=this.$element.closest('[data-toggle="buttons"]');if(b.length){var c=this.$element.find("input");"radio"==c.prop("type")&&(c.prop("checked")&&this.$element.hasClass("active")?a=!1:b.find(".active").removeClass("active")),a&&c.prop("checked",!this.$element.hasClass("active")).trigger("change")}else this.$element.attr("aria-pressed",!this.$element.hasClass("active"));a&&this.$element.toggleClass("active")};var d=a.fn.button;a.fn.button=b,a.fn.button.Constructor=c,a.fn.button.noConflict=function(){return a.fn.button=d,this},a(document).on("click.bs.button.data-api",'[data-toggle^="button"]',function(c){var d=a(c.target);d.hasClass("btn")||(d=d.closest(".btn")),b.call(d,"toggle"),c.preventDefault()}).on("focus.bs.button.data-api blur.bs.button.data-api",'[data-toggle^="button"]',function(b){a(b.target).closest(".btn").toggleClass("focus",/^focus(in)?$/.test(b.type))})}(jQuery),+function(a){"use strict";function b(b){return this.each(function(){var d=a(this),e=d.data("bs.carousel"),f=a.extend({},c.DEFAULTS,d.data(),"object"==typeof b&&b),g="string"==typeof b?b:f.slide;e||d.data("bs.carousel",e=new c(this,f)),"number"==typeof b?e.to(b):g?e[g]():f.interval&&e.pause().cycle()})}var c=function(b,c){this.$element=a(b),this.$indicators=this.$element.find(".carousel-indicators"),this.options=c,this.paused=this.sliding=this.interval=this.$active=this.$items=null,this.options.keyboard&&this.$element.on("keydown.bs.carousel",a.proxy(this.keydown,this)),"hover"==this.options.pause&&!("ontouchstart"in document.documentElement)&&this.$element.on("mouseenter.bs.carousel",a.proxy(this.pause,this)).on("mouseleave.bs.carousel",a.proxy(this.cycle,this))};c.VERSION="3.3.1",c.TRANSITION_DURATION=600,c.DEFAULTS={interval:5e3,pause:"hover",wrap:!0,keyboard:!0},c.prototype.keydown=function(a){if(!/input|textarea/i.test(a.target.tagName)){switch(a.which){case 37:this.prev();break;case 39:this.next();break;default:return}a.preventDefault()}},c.prototype.cycle=function(b){return b||(this.paused=!1),this.interval&&clearInterval(this.interval),this.options.interval&&!this.paused&&(this.interval=setInterval(a.proxy(this.next,this),this.options.interval)),this},c.prototype.getItemIndex=function(a){return this.$items=a.parent().children(".item"),this.$items.index(a||this.$active)},c.prototype.getItemForDirection=function(a,b){var c="prev"==a?-1:1,d=this.getItemIndex(b),e=(d+c)%this.$items.length;return this.$items.eq(e)},c.prototype.to=function(a){var b=this,c=this.getItemIndex(this.$active=this.$element.find(".item.active"));return a>this.$items.length-1||0>a?void 0:this.sliding?this.$element.one("slid.bs.carousel",function(){b.to(a)}):c==a?this.pause().cycle():this.slide(a>c?"next":"prev",this.$items.eq(a))},c.prototype.pause=function(b){return b||(this.paused=!0),this.$element.find(".next, .prev").length&&a.support.transition&&(this.$element.trigger(a.support.transition.end),this.cycle(!0)),this.interval=clearInterval(this.interval),this},c.prototype.next=function(){return this.sliding?void 0:this.slide("next")},c.prototype.prev=function(){return this.sliding?void 0:this.slide("prev")},c.prototype.slide=function(b,d){var e=this.$element.find(".item.active"),f=d||this.getItemForDirection(b,e),g=this.interval,h="next"==b?"left":"right",i="next"==b?"first":"last",j=this;if(!f.length){if(!this.options.wrap)return;f=this.$element.find(".item")[i]()}if(f.hasClass("active"))return this.sliding=!1;var k=f[0],l=a.Event("slide.bs.carousel",{relatedTarget:k,direction:h});if(this.$element.trigger(l),!l.isDefaultPrevented()){if(this.sliding=!0,g&&this.pause(),this.$indicators.length){this.$indicators.find(".active").removeClass("active");var m=a(this.$indicators.children()[this.getItemIndex(f)]);m&&m.addClass("active")}var n=a.Event("slid.bs.carousel",{relatedTarget:k,direction:h});return a.support.transition&&this.$element.hasClass("slide")?(f.addClass(b),f[0].offsetWidth,e.addClass(h),f.addClass(h),e.one("bsTransitionEnd",function(){f.removeClass([b,h].join(" ")).addClass("active"),e.removeClass(["active",h].join(" ")),j.sliding=!1,setTimeout(function(){j.$element.trigger(n)},0)}).emulateTransitionEnd(c.TRANSITION_DURATION)):(e.removeClass("active"),f.addClass("active"),this.sliding=!1,this.$element.trigger(n)),g&&this.cycle(),this}};var d=a.fn.carousel;a.fn.carousel=b,a.fn.carousel.Constructor=c,a.fn.carousel.noConflict=function(){return a.fn.carousel=d,this};var e=function(c){var d,e=a(this),f=a(e.attr("data-target")||(d=e.attr("href"))&&d.replace(/.*(?=#[^\s]+$)/,""));if(f.hasClass("carousel")){var g=a.extend({},f.data(),e.data()),h=e.attr("data-slide-to");h&&(g.interval=!1),b.call(f,g),h&&f.data("bs.carousel").to(h),c.preventDefault()}};a(document).on("click.bs.carousel.data-api","[data-slide]",e).on("click.bs.carousel.data-api","[data-slide-to]",e),a(window).on("load",function(){a('[data-ride="carousel"]').each(function(){var c=a(this);b.call(c,c.data())})})}(jQuery),+function(a){"use strict";function b(b){var c,d=b.attr("data-target")||(c=b.attr("href"))&&c.replace(/.*(?=#[^\s]+$)/,"");return a(d)}function c(b){return this.each(function(){var c=a(this),e=c.data("bs.collapse"),f=a.extend({},d.DEFAULTS,c.data(),"object"==typeof b&&b);!e&&f.toggle&&"show"==b&&(f.toggle=!1),e||c.data("bs.collapse",e=new d(this,f)),"string"==typeof b&&e[b]()})}var d=function(b,c){this.$element=a(b),this.options=a.extend({},d.DEFAULTS,c),this.$trigger=a(this.options.trigger).filter('[href="#'+b.id+'"], [data-target="#'+b.id+'"]'),this.transitioning=null,this.options.parent?this.$parent=this.getParent():this.addAriaAndCollapsedClass(this.$element,this.$trigger),this.options.toggle&&this.toggle()};d.VERSION="3.3.1",d.TRANSITION_DURATION=350,d.DEFAULTS={toggle:!0,trigger:'[data-toggle="collapse"]'},d.prototype.dimension=function(){var a=this.$element.hasClass("width");return a?"width":"height"},d.prototype.show=function(){if(!this.transitioning&&!this.$element.hasClass("in")){var b,e=this.$parent&&this.$parent.find("> .panel").children(".in, .collapsing");if(!(e&&e.length&&(b=e.data("bs.collapse"),b&&b.transitioning))){var f=a.Event("show.bs.collapse");if(this.$element.trigger(f),!f.isDefaultPrevented()){e&&e.length&&(c.call(e,"hide"),b||e.data("bs.collapse",null));var g=this.dimension();this.$element.removeClass("collapse").addClass("collapsing")[g](0).attr("aria-expanded",!0),this.$trigger.removeClass("collapsed").attr("aria-expanded",!0),this.transitioning=1;var h=function(){this.$element.removeClass("collapsing").addClass("collapse in")[g](""),this.transitioning=0,this.$element.trigger("shown.bs.collapse")};if(!a.support.transition)return h.call(this);var i=a.camelCase(["scroll",g].join("-"));this.$element.one("bsTransitionEnd",a.proxy(h,this)).emulateTransitionEnd(d.TRANSITION_DURATION)[g](this.$element[0][i])}}}},d.prototype.hide=function(){if(!this.transitioning&&this.$element.hasClass("in")){var b=a.Event("hide.bs.collapse");if(this.$element.trigger(b),!b.isDefaultPrevented()){var c=this.dimension();this.$element[c](this.$element[c]())[0].offsetHeight,this.$element.addClass("collapsing").removeClass("collapse in").attr("aria-expanded",!1),this.$trigger.addClass("collapsed").attr("aria-expanded",!1),this.transitioning=1;var e=function(){this.transitioning=0,this.$element.removeClass("collapsing").addClass("collapse").trigger("hidden.bs.collapse")};return a.support.transition?void this.$element[c](0).one("bsTransitionEnd",a.proxy(e,this)).emulateTransitionEnd(d.TRANSITION_DURATION):e.call(this)}}},d.prototype.toggle=function(){this[this.$element.hasClass("in")?"hide":"show"]()},d.prototype.getParent=function(){return a(this.options.parent).find('[data-toggle="collapse"][data-parent="'+this.options.parent+'"]').each(a.proxy(function(c,d){var e=a(d);this.addAriaAndCollapsedClass(b(e),e)},this)).end()},d.prototype.addAriaAndCollapsedClass=function(a,b){var c=a.hasClass("in");a.attr("aria-expanded",c),b.toggleClass("collapsed",!c).attr("aria-expanded",c)};var e=a.fn.collapse;a.fn.collapse=c,a.fn.collapse.Constructor=d,a.fn.collapse.noConflict=function(){return a.fn.collapse=e,this},a(document).on("click.bs.collapse.data-api",'[data-toggle="collapse"]',function(d){var e=a(this);e.attr("data-target")||d.preventDefault();var f=b(e),g=f.data("bs.collapse"),h=g?"toggle":a.extend({},e.data(),{trigger:this});c.call(f,h)})}(jQuery),+function(a){"use strict";function b(b){b&&3===b.which||(a(e).remove(),a(f).each(function(){var d=a(this),e=c(d),f={relatedTarget:this};e.hasClass("open")&&(e.trigger(b=a.Event("hide.bs.dropdown",f)),b.isDefaultPrevented()||(d.attr("aria-expanded","false"),e.removeClass("open").trigger("hidden.bs.dropdown",f)))}))}function c(b){var c=b.attr("data-target");c||(c=b.attr("href"),c=c&&/#[A-Za-z]/.test(c)&&c.replace(/.*(?=#[^\s]*$)/,""));var d=c&&a(c);return d&&d.length?d:b.parent()}function d(b){return this.each(function(){var c=a(this),d=c.data("bs.dropdown");d||c.data("bs.dropdown",d=new g(this)),"string"==typeof b&&d[b].call(c)})}var e=".dropdown-backdrop",f='[data-toggle="dropdown"]',g=function(b){a(b).on("click.bs.dropdown",this.toggle)};g.VERSION="3.3.1",g.prototype.toggle=function(d){var e=a(this);if(!e.is(".disabled, :disabled")){var f=c(e),g=f.hasClass("open");if(b(),!g){"ontouchstart"in document.documentElement&&!f.closest(".navbar-nav").length&&a('<div class="dropdown-backdrop"/>').insertAfter(a(this)).on("click",b);var h={relatedTarget:this};if(f.trigger(d=a.Event("show.bs.dropdown",h)),d.isDefaultPrevented())return;e.trigger("focus").attr("aria-expanded","true"),f.toggleClass("open").trigger("shown.bs.dropdown",h)}return!1}},g.prototype.keydown=function(b){if(/(38|40|27|32)/.test(b.which)&&!/input|textarea/i.test(b.target.tagName)){var d=a(this);if(b.preventDefault(),b.stopPropagation(),!d.is(".disabled, :disabled")){var e=c(d),g=e.hasClass("open");if(!g&&27!=b.which||g&&27==b.which)return 27==b.which&&e.find(f).trigger("focus"),d.trigger("click");var h=" li:not(.divider):visible a",i=e.find('[role="menu"]'+h+', [role="listbox"]'+h);if(i.length){var j=i.index(b.target);38==b.which&&j>0&&j--,40==b.which&&j<i.length-1&&j++,~j||(j=0),i.eq(j).trigger("focus")}}}};var h=a.fn.dropdown;a.fn.dropdown=d,a.fn.dropdown.Constructor=g,a.fn.dropdown.noConflict=function(){return a.fn.dropdown=h,this},a(document).on("click.bs.dropdown.data-api",b).on("click.bs.dropdown.data-api",".dropdown form",function(a){a.stopPropagation()}).on("click.bs.dropdown.data-api",f,g.prototype.toggle).on("keydown.bs.dropdown.data-api",f,g.prototype.keydown).on("keydown.bs.dropdown.data-api",'[role="menu"]',g.prototype.keydown).on("keydown.bs.dropdown.data-api",'[role="listbox"]',g.prototype.keydown)}(jQuery),+function(a){"use strict";function b(b,d){return this.each(function(){var e=a(this),f=e.data("bs.modal"),g=a.extend({},c.DEFAULTS,e.data(),"object"==typeof b&&b);f||e.data("bs.modal",f=new c(this,g)),"string"==typeof b?f[b](d):g.show&&f.show(d)})}var c=function(b,c){this.options=c,this.$body=a(document.body),this.$element=a(b),this.$backdrop=this.isShown=null,this.scrollbarWidth=0,this.options.remote&&this.$element.find(".modal-content").load(this.options.remote,a.proxy(function(){this.$element.trigger("loaded.bs.modal")},this))};c.VERSION="3.3.1",c.TRANSITION_DURATION=300,c.BACKDROP_TRANSITION_DURATION=150,c.DEFAULTS={backdrop:!0,keyboard:!0,show:!0},c.prototype.toggle=function(a){return this.isShown?this.hide():this.show(a)},c.prototype.show=function(b){var d=this,e=a.Event("show.bs.modal",{relatedTarget:b});this.$element.trigger(e),this.isShown||e.isDefaultPrevented()||(this.isShown=!0,this.checkScrollbar(),this.setScrollbar(),this.$body.addClass("modal-open"),this.escape(),this.resize(),this.$element.on("click.dismiss.bs.modal",'[data-dismiss="modal"]',a.proxy(this.hide,this)),this.backdrop(function(){var e=a.support.transition&&d.$element.hasClass("fade");d.$element.parent().length||d.$element.appendTo(d.$body),d.$element.show().scrollTop(0),d.options.backdrop&&d.adjustBackdrop(),d.adjustDialog(),e&&d.$element[0].offsetWidth,d.$element.addClass("in").attr("aria-hidden",!1),d.enforceFocus();var f=a.Event("shown.bs.modal",{relatedTarget:b});e?d.$element.find(".modal-dialog").one("bsTransitionEnd",function(){d.$element.trigger("focus").trigger(f)}).emulateTransitionEnd(c.TRANSITION_DURATION):d.$element.trigger("focus").trigger(f)}))},c.prototype.hide=function(b){b&&b.preventDefault(),b=a.Event("hide.bs.modal"),this.$element.trigger(b),this.isShown&&!b.isDefaultPrevented()&&(this.isShown=!1,this.escape(),this.resize(),a(document).off("focusin.bs.modal"),this.$element.removeClass("in").attr("aria-hidden",!0).off("click.dismiss.bs.modal"),a.support.transition&&this.$element.hasClass("fade")?this.$element.one("bsTransitionEnd",a.proxy(this.hideModal,this)).emulateTransitionEnd(c.TRANSITION_DURATION):this.hideModal())},c.prototype.enforceFocus=function(){a(document).off("focusin.bs.modal").on("focusin.bs.modal",a.proxy(function(a){this.$element[0]===a.target||this.$element.has(a.target).length||this.$element.trigger("focus")},this))},c.prototype.escape=function(){this.isShown&&this.options.keyboard?this.$element.on("keydown.dismiss.bs.modal",a.proxy(function(a){27==a.which&&this.hide()},this)):this.isShown||this.$element.off("keydown.dismiss.bs.modal")},c.prototype.resize=function(){this.isShown?a(window).on("resize.bs.modal",a.proxy(this.handleUpdate,this)):a(window).off("resize.bs.modal")},c.prototype.hideModal=function(){var a=this;this.$element.hide(),this.backdrop(function(){a.$body.removeClass("modal-open"),a.resetAdjustments(),a.resetScrollbar(),a.$element.trigger("hidden.bs.modal")})},c.prototype.removeBackdrop=function(){this.$backdrop&&this.$backdrop.remove(),this.$backdrop=null},c.prototype.backdrop=function(b){var d=this,e=this.$element.hasClass("fade")?"fade":"";if(this.isShown&&this.options.backdrop){var f=a.support.transition&&e;if(this.$backdrop=a('<div class="modal-backdrop '+e+'" />').prependTo(this.$element).on("click.dismiss.bs.modal",a.proxy(function(a){a.target===a.currentTarget&&("static"==this.options.backdrop?this.$element[0].focus.call(this.$element[0]):this.hide.call(this))},this)),f&&this.$backdrop[0].offsetWidth,this.$backdrop.addClass("in"),!b)return;f?this.$backdrop.one("bsTransitionEnd",b).emulateTransitionEnd(c.BACKDROP_TRANSITION_DURATION):b()}else if(!this.isShown&&this.$backdrop){this.$backdrop.removeClass("in");var g=function(){d.removeBackdrop(),b&&b()};a.support.transition&&this.$element.hasClass("fade")?this.$backdrop.one("bsTransitionEnd",g).emulateTransitionEnd(c.BACKDROP_TRANSITION_DURATION):g()}else b&&b()},c.prototype.handleUpdate=function(){this.options.backdrop&&this.adjustBackdrop(),this.adjustDialog()},c.prototype.adjustBackdrop=function(){this.$backdrop.css("height",0).css("height",this.$element[0].scrollHeight)},c.prototype.adjustDialog=function(){var a=this.$element[0].scrollHeight>document.documentElement.clientHeight;this.$element.css({paddingLeft:!this.bodyIsOverflowing&&a?this.scrollbarWidth:"",paddingRight:this.bodyIsOverflowing&&!a?this.scrollbarWidth:""})},c.prototype.resetAdjustments=function(){this.$element.css({paddingLeft:"",paddingRight:""})},c.prototype.checkScrollbar=function(){this.bodyIsOverflowing=document.body.scrollHeight>document.documentElement.clientHeight,this.scrollbarWidth=this.measureScrollbar()},c.prototype.setScrollbar=function(){var a=parseInt(this.$body.css("padding-right")||0,10);this.bodyIsOverflowing&&this.$body.css("padding-right",a+this.scrollbarWidth)},c.prototype.resetScrollbar=function(){this.$body.css("padding-right","")},c.prototype.measureScrollbar=function(){var a=document.createElement("div");a.className="modal-scrollbar-measure",this.$body.append(a);var b=a.offsetWidth-a.clientWidth;return this.$body[0].removeChild(a),b};var d=a.fn.modal;a.fn.modal=b,a.fn.modal.Constructor=c,a.fn.modal.noConflict=function(){return a.fn.modal=d,this},a(document).on("click.bs.modal.data-api",'[data-toggle="modal"]',function(c){var d=a(this),e=d.attr("href"),f=a(d.attr("data-target")||e&&e.replace(/.*(?=#[^\s]+$)/,"")),g=f.data("bs.modal")?"toggle":a.extend({remote:!/#/.test(e)&&e},f.data(),d.data());d.is("a")&&c.preventDefault(),f.one("show.bs.modal",function(a){a.isDefaultPrevented()||f.one("hidden.bs.modal",function(){d.is(":visible")&&d.trigger("focus")})}),b.call(f,g,this)})}(jQuery),+function(a){"use strict";function b(b){return this.each(function(){var d=a(this),e=d.data("bs.tooltip"),f="object"==typeof b&&b,g=f&&f.selector;(e||"destroy"!=b)&&(g?(e||d.data("bs.tooltip",e={}),e[g]||(e[g]=new c(this,f))):e||d.data("bs.tooltip",e=new c(this,f)),"string"==typeof b&&e[b]())})}var c=function(a,b){this.type=this.options=this.enabled=this.timeout=this.hoverState=this.$element=null,this.init("tooltip",a,b)};c.VERSION="3.3.1",c.TRANSITION_DURATION=150,c.DEFAULTS={animation:!0,placement:"top",selector:!1,template:'<div class="tooltip" role="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>',trigger:"hover focus",title:"",delay:0,html:!1,container:!1,viewport:{selector:"body",padding:0}},c.prototype.init=function(b,c,d){this.enabled=!0,this.type=b,this.$element=a(c),this.options=this.getOptions(d),this.$viewport=this.options.viewport&&a(this.options.viewport.selector||this.options.viewport);for(var e=this.options.trigger.split(" "),f=e.length;f--;){var g=e[f];if("click"==g)this.$element.on("click."+this.type,this.options.selector,a.proxy(this.toggle,this));else if("manual"!=g){var h="hover"==g?"mouseenter":"focusin",i="hover"==g?"mouseleave":"focusout";this.$element.on(h+"."+this.type,this.options.selector,a.proxy(this.enter,this)),this.$element.on(i+"."+this.type,this.options.selector,a.proxy(this.leave,this))}}this.options.selector?this._options=a.extend({},this.options,{trigger:"manual",selector:""}):this.fixTitle()},c.prototype.getDefaults=function(){return c.DEFAULTS},c.prototype.getOptions=function(b){return b=a.extend({},this.getDefaults(),this.$element.data(),b),b.delay&&"number"==typeof b.delay&&(b.delay={show:b.delay,hide:b.delay}),b},c.prototype.getDelegateOptions=function(){var b={},c=this.getDefaults();return this._options&&a.each(this._options,function(a,d){c[a]!=d&&(b[a]=d)}),b},c.prototype.enter=function(b){var c=b instanceof this.constructor?b:a(b.currentTarget).data("bs."+this.type);return c&&c.$tip&&c.$tip.is(":visible")?void(c.hoverState="in"):(c||(c=new this.constructor(b.currentTarget,this.getDelegateOptions()),a(b.currentTarget).data("bs."+this.type,c)),clearTimeout(c.timeout),c.hoverState="in",c.options.delay&&c.options.delay.show?void(c.timeout=setTimeout(function(){"in"==c.hoverState&&c.show()},c.options.delay.show)):c.show())},c.prototype.leave=function(b){var c=b instanceof this.constructor?b:a(b.currentTarget).data("bs."+this.type);return c||(c=new this.constructor(b.currentTarget,this.getDelegateOptions()),a(b.currentTarget).data("bs."+this.type,c)),clearTimeout(c.timeout),c.hoverState="out",c.options.delay&&c.options.delay.hide?void(c.timeout=setTimeout(function(){"out"==c.hoverState&&c.hide()},c.options.delay.hide)):c.hide()},c.prototype.show=function(){var b=a.Event("show.bs."+this.type);if(this.hasContent()&&this.enabled){this.$element.trigger(b);var d=a.contains(this.$element[0].ownerDocument.documentElement,this.$element[0]);if(b.isDefaultPrevented()||!d)return;var e=this,f=this.tip(),g=this.getUID(this.type);this.setContent(),f.attr("id",g),this.$element.attr("aria-describedby",g),this.options.animation&&f.addClass("fade");var h="function"==typeof this.options.placement?this.options.placement.call(this,f[0],this.$element[0]):this.options.placement,i=/\s?auto?\s?/i,j=i.test(h);j&&(h=h.replace(i,"")||"top"),f.detach().css({top:0,left:0,display:"block"}).addClass(h).data("bs."+this.type,this),this.options.container?f.appendTo(this.options.container):f.insertAfter(this.$element);var k=this.getPosition(),l=f[0].offsetWidth,m=f[0].offsetHeight;if(j){var n=h,o=this.options.container?a(this.options.container):this.$element.parent(),p=this.getPosition(o);h="bottom"==h&&k.bottom+m>p.bottom?"top":"top"==h&&k.top-m<p.top?"bottom":"right"==h&&k.right+l>p.width?"left":"left"==h&&k.left-l<p.left?"right":h,f.removeClass(n).addClass(h)}var q=this.getCalculatedOffset(h,k,l,m);this.applyPlacement(q,h);var r=function(){var a=e.hoverState;e.$element.trigger("shown.bs."+e.type),e.hoverState=null,"out"==a&&e.leave(e)};a.support.transition&&this.$tip.hasClass("fade")?f.one("bsTransitionEnd",r).emulateTransitionEnd(c.TRANSITION_DURATION):r()}},c.prototype.applyPlacement=function(b,c){var d=this.tip(),e=d[0].offsetWidth,f=d[0].offsetHeight,g=parseInt(d.css("margin-top"),10),h=parseInt(d.css("margin-left"),10);isNaN(g)&&(g=0),isNaN(h)&&(h=0),b.top=b.top+g,b.left=b.left+h,a.offset.setOffset(d[0],a.extend({using:function(a){d.css({top:Math.round(a.top),left:Math.round(a.left)})}},b),0),d.addClass("in");var i=d[0].offsetWidth,j=d[0].offsetHeight;"top"==c&&j!=f&&(b.top=b.top+f-j);var k=this.getViewportAdjustedDelta(c,b,i,j);k.left?b.left+=k.left:b.top+=k.top;var l=/top|bottom/.test(c),m=l?2*k.left-e+i:2*k.top-f+j,n=l?"offsetWidth":"offsetHeight";d.offset(b),this.replaceArrow(m,d[0][n],l)},c.prototype.replaceArrow=function(a,b,c){this.arrow().css(c?"left":"top",50*(1-a/b)+"%").css(c?"top":"left","")},c.prototype.setContent=function(){var a=this.tip(),b=this.getTitle();a.find(".tooltip-inner")[this.options.html?"html":"text"](b),a.removeClass("fade in top bottom left right")},c.prototype.hide=function(b){function d(){"in"!=e.hoverState&&f.detach(),e.$element.removeAttr("aria-describedby").trigger("hidden.bs."+e.type),b&&b()}var e=this,f=this.tip(),g=a.Event("hide.bs."+this.type);return this.$element.trigger(g),g.isDefaultPrevented()?void 0:(f.removeClass("in"),a.support.transition&&this.$tip.hasClass("fade")?f.one("bsTransitionEnd",d).emulateTransitionEnd(c.TRANSITION_DURATION):d(),this.hoverState=null,this)},c.prototype.fixTitle=function(){var a=this.$element;(a.attr("title")||"string"!=typeof a.attr("data-original-title"))&&a.attr("data-original-title",a.attr("title")||"").attr("title","")},c.prototype.hasContent=function(){return this.getTitle()},c.prototype.getPosition=function(b){b=b||this.$element;var c=b[0],d="BODY"==c.tagName,e=c.getBoundingClientRect();null==e.width&&(e=a.extend({},e,{width:e.right-e.left,height:e.bottom-e.top}));var f=d?{top:0,left:0}:b.offset(),g={scroll:d?document.documentElement.scrollTop||document.body.scrollTop:b.scrollTop()},h=d?{width:a(window).width(),height:a(window).height()}:null;return a.extend({},e,g,h,f)},c.prototype.getCalculatedOffset=function(a,b,c,d){return"bottom"==a?{top:b.top+b.height,left:b.left+b.width/2-c/2}:"top"==a?{top:b.top-d,left:b.left+b.width/2-c/2}:"left"==a?{top:b.top+b.height/2-d/2,left:b.left-c}:{top:b.top+b.height/2-d/2,left:b.left+b.width}},c.prototype.getViewportAdjustedDelta=function(a,b,c,d){var e={top:0,left:0};if(!this.$viewport)return e;var f=this.options.viewport&&this.options.viewport.padding||0,g=this.getPosition(this.$viewport);if(/right|left/.test(a)){var h=b.top-f-g.scroll,i=b.top+f-g.scroll+d;h<g.top?e.top=g.top-h:i>g.top+g.height&&(e.top=g.top+g.height-i)}else{var j=b.left-f,k=b.left+f+c;j<g.left?e.left=g.left-j:k>g.width&&(e.left=g.left+g.width-k)}return e},c.prototype.getTitle=function(){var a,b=this.$element,c=this.options;return a=b.attr("data-original-title")||("function"==typeof c.title?c.title.call(b[0]):c.title)},c.prototype.getUID=function(a){do a+=~~(1e6*Math.random());while(document.getElementById(a));return a},c.prototype.tip=function(){return this.$tip=this.$tip||a(this.options.template)},c.prototype.arrow=function(){return this.$arrow=this.$arrow||this.tip().find(".tooltip-arrow")},c.prototype.enable=function(){this.enabled=!0},c.prototype.disable=function(){this.enabled=!1},c.prototype.toggleEnabled=function(){this.enabled=!this.enabled},c.prototype.toggle=function(b){var c=this;b&&(c=a(b.currentTarget).data("bs."+this.type),c||(c=new this.constructor(b.currentTarget,this.getDelegateOptions()),a(b.currentTarget).data("bs."+this.type,c))),c.tip().hasClass("in")?c.leave(c):c.enter(c)},c.prototype.destroy=function(){var a=this;clearTimeout(this.timeout),this.hide(function(){a.$element.off("."+a.type).removeData("bs."+a.type)})};var d=a.fn.tooltip;a.fn.tooltip=b,a.fn.tooltip.Constructor=c,a.fn.tooltip.noConflict=function(){return a.fn.tooltip=d,this}}(jQuery),+function(a){"use strict";function b(b){return this.each(function(){var d=a(this),e=d.data("bs.popover"),f="object"==typeof b&&b,g=f&&f.selector;(e||"destroy"!=b)&&(g?(e||d.data("bs.popover",e={}),e[g]||(e[g]=new c(this,f))):e||d.data("bs.popover",e=new c(this,f)),"string"==typeof b&&e[b]())})}var c=function(a,b){this.init("popover",a,b)};if(!a.fn.tooltip)throw new Error("Popover requires tooltip.js");c.VERSION="3.3.1",c.DEFAULTS=a.extend({},a.fn.tooltip.Constructor.DEFAULTS,{placement:"right",trigger:"click",content:"",template:'<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>'}),c.prototype=a.extend({},a.fn.tooltip.Constructor.prototype),c.prototype.constructor=c,c.prototype.getDefaults=function(){return c.DEFAULTS},c.prototype.setContent=function(){var a=this.tip(),b=this.getTitle(),c=this.getContent();a.find(".popover-title")[this.options.html?"html":"text"](b),a.find(".popover-content").children().detach().end()[this.options.html?"string"==typeof c?"html":"append":"text"](c),a.removeClass("fade top bottom left right in"),a.find(".popover-title").html()||a.find(".popover-title").hide()},c.prototype.hasContent=function(){return this.getTitle()||this.getContent()},c.prototype.getContent=function(){var a=this.$element,b=this.options;return a.attr("data-content")||("function"==typeof b.content?b.content.call(a[0]):b.content)},c.prototype.arrow=function(){return this.$arrow=this.$arrow||this.tip().find(".arrow")},c.prototype.tip=function(){return this.$tip||(this.$tip=a(this.options.template)),this.$tip};var d=a.fn.popover;a.fn.popover=b,a.fn.popover.Constructor=c,a.fn.popover.noConflict=function(){return a.fn.popover=d,this}}(jQuery),+function(a){"use strict";function b(c,d){var e=a.proxy(this.process,this);this.$body=a("body"),this.$scrollElement=a(a(c).is("body")?window:c),this.options=a.extend({},b.DEFAULTS,d),this.selector=(this.options.target||"")+" .nav li > a",this.offsets=[],this.targets=[],this.activeTarget=null,this.scrollHeight=0,this.$scrollElement.on("scroll.bs.scrollspy",e),this.refresh(),this.process()}function c(c){return this.each(function(){var d=a(this),e=d.data("bs.scrollspy"),f="object"==typeof c&&c;e||d.data("bs.scrollspy",e=new b(this,f)),"string"==typeof c&&e[c]()})}b.VERSION="3.3.1",b.DEFAULTS={offset:10},b.prototype.getScrollHeight=function(){return this.$scrollElement[0].scrollHeight||Math.max(this.$body[0].scrollHeight,document.documentElement.scrollHeight)},b.prototype.refresh=function(){var b="offset",c=0;a.isWindow(this.$scrollElement[0])||(b="position",c=this.$scrollElement.scrollTop()),this.offsets=[],this.targets=[],this.scrollHeight=this.getScrollHeight();var d=this;this.$body.find(this.selector).map(function(){var d=a(this),e=d.data("target")||d.attr("href"),f=/^#./.test(e)&&a(e);return f&&f.length&&f.is(":visible")&&[[f[b]().top+c,e]]||null}).sort(function(a,b){return a[0]-b[0]}).each(function(){d.offsets.push(this[0]),d.targets.push(this[1])})},b.prototype.process=function(){var a,b=this.$scrollElement.scrollTop()+this.options.offset,c=this.getScrollHeight(),d=this.options.offset+c-this.$scrollElement.height(),e=this.offsets,f=this.targets,g=this.activeTarget;if(this.scrollHeight!=c&&this.refresh(),b>=d)return g!=(a=f[f.length-1])&&this.activate(a);if(g&&b<e[0])return this.activeTarget=null,this.clear();for(a=e.length;a--;)g!=f[a]&&b>=e[a]&&(!e[a+1]||b<=e[a+1])&&this.activate(f[a])},b.prototype.activate=function(b){this.activeTarget=b,this.clear();var c=this.selector+'[data-target="'+b+'"],'+this.selector+'[href="'+b+'"]',d=a(c).parents("li").addClass("active");d.parent(".dropdown-menu").length&&(d=d.closest("li.dropdown").addClass("active")),d.trigger("activate.bs.scrollspy")},b.prototype.clear=function(){a(this.selector).parentsUntil(this.options.target,".active").removeClass("active")};var d=a.fn.scrollspy;a.fn.scrollspy=c,a.fn.scrollspy.Constructor=b,a.fn.scrollspy.noConflict=function(){return a.fn.scrollspy=d,this},a(window).on("load.bs.scrollspy.data-api",function(){a('[data-spy="scroll"]').each(function(){var b=a(this);c.call(b,b.data())})})}(jQuery),+function(a){"use strict";function b(b){return this.each(function(){var d=a(this),e=d.data("bs.tab");e||d.data("bs.tab",e=new c(this)),"string"==typeof b&&e[b]()})}var c=function(b){this.element=a(b)};c.VERSION="3.3.1",c.TRANSITION_DURATION=150,c.prototype.show=function(){var b=this.element,c=b.closest("ul:not(.dropdown-menu)"),d=b.data("target");if(d||(d=b.attr("href"),d=d&&d.replace(/.*(?=#[^\s]*$)/,"")),!b.parent("li").hasClass("active")){var e=c.find(".active:last a"),f=a.Event("hide.bs.tab",{relatedTarget:b[0]}),g=a.Event("show.bs.tab",{relatedTarget:e[0]});if(e.trigger(f),b.trigger(g),!g.isDefaultPrevented()&&!f.isDefaultPrevented()){var h=a(d);this.activate(b.closest("li"),c),this.activate(h,h.parent(),function(){e.trigger({type:"hidden.bs.tab",relatedTarget:b[0]}),b.trigger({type:"shown.bs.tab",relatedTarget:e[0]})
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           })}}},c.prototype.activate=function(b,d,e){function f(){g.removeClass("active").find("> .dropdown-menu > .active").removeClass("active").end().find('[data-toggle="tab"]').attr("aria-expanded",!1),b.addClass("active").find('[data-toggle="tab"]').attr("aria-expanded",!0),h?(b[0].offsetWidth,b.addClass("in")):b.removeClass("fade"),b.parent(".dropdown-menu")&&b.closest("li.dropdown").addClass("active").end().find('[data-toggle="tab"]').attr("aria-expanded",!0),e&&e()}var g=d.find("> .active"),h=e&&a.support.transition&&(g.length&&g.hasClass("fade")||!!d.find("> .fade").length);g.length&&h?g.one("bsTransitionEnd",f).emulateTransitionEnd(c.TRANSITION_DURATION):f(),g.removeClass("in")};var d=a.fn.tab;a.fn.tab=b,a.fn.tab.Constructor=c,a.fn.tab.noConflict=function(){return a.fn.tab=d,this};var e=function(c){c.preventDefault(),b.call(a(this),"show")};a(document).on("click.bs.tab.data-api",'[data-toggle="tab"]',e).on("click.bs.tab.data-api",'[data-toggle="pill"]',e)}(jQuery),+function(a){"use strict";function b(b){return this.each(function(){var d=a(this),e=d.data("bs.affix"),f="object"==typeof b&&b;e||d.data("bs.affix",e=new c(this,f)),"string"==typeof b&&e[b]()})}var c=function(b,d){this.options=a.extend({},c.DEFAULTS,d),this.$target=a(this.options.target).on("scroll.bs.affix.data-api",a.proxy(this.checkPosition,this)).on("click.bs.affix.data-api",a.proxy(this.checkPositionWithEventLoop,this)),this.$element=a(b),this.affixed=this.unpin=this.pinnedOffset=null,this.checkPosition()};c.VERSION="3.3.1",c.RESET="affix affix-top affix-bottom",c.DEFAULTS={offset:0,target:window},c.prototype.getState=function(a,b,c,d){var e=this.$target.scrollTop(),f=this.$element.offset(),g=this.$target.height();if(null!=c&&"top"==this.affixed)return c>e?"top":!1;if("bottom"==this.affixed)return null!=c?e+this.unpin<=f.top?!1:"bottom":a-d>=e+g?!1:"bottom";var h=null==this.affixed,i=h?e:f.top,j=h?g:b;return null!=c&&c>=i?"top":null!=d&&i+j>=a-d?"bottom":!1},c.prototype.getPinnedOffset=function(){if(this.pinnedOffset)return this.pinnedOffset;this.$element.removeClass(c.RESET).addClass("affix");var a=this.$target.scrollTop(),b=this.$element.offset();return this.pinnedOffset=b.top-a},c.prototype.checkPositionWithEventLoop=function(){setTimeout(a.proxy(this.checkPosition,this),1)},c.prototype.checkPosition=function(){if(this.$element.is(":visible")){var b=this.$element.height(),d=this.options.offset,e=d.top,f=d.bottom,g=a("body").height();"object"!=typeof d&&(f=e=d),"function"==typeof e&&(e=d.top(this.$element)),"function"==typeof f&&(f=d.bottom(this.$element));var h=this.getState(g,b,e,f);if(this.affixed!=h){null!=this.unpin&&this.$element.css("top","");var i="affix"+(h?"-"+h:""),j=a.Event(i+".bs.affix");if(this.$element.trigger(j),j.isDefaultPrevented())return;this.affixed=h,this.unpin="bottom"==h?this.getPinnedOffset():null,this.$element.removeClass(c.RESET).addClass(i).trigger(i.replace("affix","affixed")+".bs.affix")}"bottom"==h&&this.$element.offset({top:g-b-f})}};var d=a.fn.affix;a.fn.affix=b,a.fn.affix.Constructor=c,a.fn.affix.noConflict=function(){return a.fn.affix=d,this},a(window).on("load",function(){a('[data-spy="affix"]').each(function(){var c=a(this),d=c.data();d.offset=d.offset||{},null!=d.offsetBottom&&(d.offset.bottom=d.offsetBottom),null!=d.offsetTop&&(d.offset.top=d.offsetTop),b.call(c,d)})})}(jQuery);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               /* Modernizr 2.6.2 (Custom Build) | MIT & BSD
 * Build: http://modernizr.com/download/#-csstransforms-csstransforms3d-csstransitions-shiv-cssclasses-prefixed-teststyles-testprop-testallprops-prefixes-domprefixes-load
 */
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               ;window.Modernizr=function(a,b,c){function z(a){j.cssText=a}function A(a,b){return z(m.join(a+";")+(b||""))}function B(a,b){return typeof a===b}function C(a,b){return!!~(""+a).indexOf(b)}function D(a,b){for(var d in a){var e=a[d];if(!C(e,"-")&&j[e]!==c)return b=="pfx"?e:!0}return!1}function E(a,b,d){for(var e in a){var f=b[a[e]];if(f!==c)return d===!1?a[e]:B(f,"function")?f.bind(d||b):f}return!1}function F(a,b,c){var d=a.charAt(0).toUpperCase()+a.slice(1),e=(a+" "+o.join(d+" ")+d).split(" ");return B(b,"string")||B(b,"undefined")?D(e,b):(e=(a+" "+p.join(d+" ")+d).split(" "),E(e,b,c))}var d="2.6.2",e={},f=!0,g=b.documentElement,h="modernizr",i=b.createElement(h),j=i.style,k,l={}.toString,m=" -webkit- -moz- -o- -ms- ".split(" "),n="Webkit Moz O ms",o=n.split(" "),p=n.toLowerCase().split(" "),q={},r={},s={},t=[],u=t.slice,v,w=function(a,c,d,e){var f,i,j,k,l=b.createElement("div"),m=b.body,n=m||b.createElement("body");if(parseInt(d,10))while(d--)j=b.createElement("div"),j.id=e?e[d]:h+(d+1),l.appendChild(j);return f=["&#173;",'<style id="s',h,'">',a,"</style>"].join(""),l.id=h,(m?l:n).innerHTML+=f,n.appendChild(l),m||(n.style.background="",n.style.overflow="hidden",k=g.style.overflow,g.style.overflow="hidden",g.appendChild(n)),i=c(l,a),m?l.parentNode.removeChild(l):(n.parentNode.removeChild(n),g.style.overflow=k),!!i},x={}.hasOwnProperty,y;!B(x,"undefined")&&!B(x.call,"undefined")?y=function(a,b){return x.call(a,b)}:y=function(a,b){return b in a&&B(a.constructor.prototype[b],"undefined")},Function.prototype.bind||(Function.prototype.bind=function(b){var c=this;if(typeof c!="function")throw new TypeError;var d=u.call(arguments,1),e=function(){if(this instanceof e){var a=function(){};a.prototype=c.prototype;var f=new a,g=c.apply(f,d.concat(u.call(arguments)));return Object(g)===g?g:f}return c.apply(b,d.concat(u.call(arguments)))};return e}),q.csstransforms=function(){return!!F("transform")},q.csstransforms3d=function(){var a=!!F("perspective");return a&&"webkitPerspective"in g.style&&w("@media (transform-3d),(-webkit-transform-3d){#modernizr{left:9px;position:absolute;height:3px;}}",function(b,c){a=b.offsetLeft===9&&b.offsetHeight===3}),a},q.csstransitions=function(){return F("transition")};for(var G in q)y(q,G)&&(v=G.toLowerCase(),e[v]=q[G](),t.push((e[v]?"":"no-")+v));return e.addTest=function(a,b){if(typeof a=="object")for(var d in a)y(a,d)&&e.addTest(d,a[d]);else{a=a.toLowerCase();if(e[a]!==c)return e;b=typeof b=="function"?b():b,typeof f!="undefined"&&f&&(g.className+=" "+(b?"":"no-")+a),e[a]=b}return e},z(""),i=k=null,function(a,b){function k(a,b){var c=a.createElement("p"),d=a.getElementsByTagName("head")[0]||a.documentElement;return c.innerHTML="x<style>"+b+"</style>",d.insertBefore(c.lastChild,d.firstChild)}function l(){var a=r.elements;return typeof a=="string"?a.split(" "):a}function m(a){var b=i[a[g]];return b||(b={},h++,a[g]=h,i[h]=b),b}function n(a,c,f){c||(c=b);if(j)return c.createElement(a);f||(f=m(c));var g;return f.cache[a]?g=f.cache[a].cloneNode():e.test(a)?g=(f.cache[a]=f.createElem(a)).cloneNode():g=f.createElem(a),g.canHaveChildren&&!d.test(a)?f.frag.appendChild(g):g}function o(a,c){a||(a=b);if(j)return a.createDocumentFragment();c=c||m(a);var d=c.frag.cloneNode(),e=0,f=l(),g=f.length;for(;e<g;e++)d.createElement(f[e]);return d}function p(a,b){b.cache||(b.cache={},b.createElem=a.createElement,b.createFrag=a.createDocumentFragment,b.frag=b.createFrag()),a.createElement=function(c){return r.shivMethods?n(c,a,b):b.createElem(c)},a.createDocumentFragment=Function("h,f","return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&("+l().join().replace(/\w+/g,function(a){return b.createElem(a),b.frag.createElement(a),'c("'+a+'")'})+");return n}")(r,b.frag)}function q(a){a||(a=b);var c=m(a);return r.shivCSS&&!f&&!c.hasCSS&&(c.hasCSS=!!k(a,"article,aside,figcaption,figure,footer,header,hgroup,nav,section{display:block}mark{background:#FF0;color:#000}")),j||p(a,c),a}var c=a.html5||{},d=/^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i,e=/^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i,f,g="_html5shiv",h=0,i={},j;(function(){try{var a=b.createElement("a");a.innerHTML="<xyz></xyz>",f="hidden"in a,j=a.childNodes.length==1||function(){b.createElement("a");var a=b.createDocumentFragment();return typeof a.cloneNode=="undefined"||typeof a.createDocumentFragment=="undefined"||typeof a.createElement=="undefined"}()}catch(c){f=!0,j=!0}})();var r={elements:c.elements||"abbr article aside audio bdi canvas data datalist details figcaption figure footer header hgroup mark meter nav output progress section summary time video",shivCSS:c.shivCSS!==!1,supportsUnknownElements:j,shivMethods:c.shivMethods!==!1,type:"default",shivDocument:q,createElement:n,createDocumentFragment:o};a.html5=r,q(b)}(this,b),e._version=d,e._prefixes=m,e._domPrefixes=p,e._cssomPrefixes=o,e.testProp=function(a){return D([a])},e.testAllProps=F,e.testStyles=w,e.prefixed=function(a,b,c){return b?F(a,b,c):F(a,"pfx")},g.className=g.className.replace(/(^|\s)no-js(\s|$)/,"$1$2")+(f?" js "+t.join(" "):""),e}(this,this.document),function(a,b,c){function d(a){return"[object Function]"==o.call(a)}function e(a){return"string"==typeof a}function f(){}function g(a){return!a||"loaded"==a||"complete"==a||"uninitialized"==a}function h(){var a=p.shift();q=1,a?a.t?m(function(){("c"==a.t?B.injectCss:B.injectJs)(a.s,0,a.a,a.x,a.e,1)},0):(a(),h()):q=0}function i(a,c,d,e,f,i,j){function k(b){if(!o&&g(l.readyState)&&(u.r=o=1,!q&&h(),l.onload=l.onreadystatechange=null,b)){"img"!=a&&m(function(){t.removeChild(l)},50);for(var d in y[c])y[c].hasOwnProperty(d)&&y[c][d].onload()}}var j=j||B.errorTimeout,l=b.createElement(a),o=0,r=0,u={t:d,s:c,e:f,a:i,x:j};1===y[c]&&(r=1,y[c]=[]),"object"==a?l.data=c:(l.src=c,l.type=a),l.width=l.height="0",l.onerror=l.onload=l.onreadystatechange=function(){k.call(this,r)},p.splice(e,0,u),"img"!=a&&(r||2===y[c]?(t.insertBefore(l,s?null:n),m(k,j)):y[c].push(l))}function j(a,b,c,d,f){return q=0,b=b||"j",e(a)?i("c"==b?v:u,a,b,this.i++,c,d,f):(p.splice(this.i++,0,a),1==p.length&&h()),this}function k(){var a=B;return a.loader={load:j,i:0},a}var l=b.documentElement,m=a.setTimeout,n=b.getElementsByTagName("script")[0],o={}.toString,p=[],q=0,r="MozAppearance"in l.style,s=r&&!!b.createRange().compareNode,t=s?l:n.parentNode,l=a.opera&&"[object Opera]"==o.call(a.opera),l=!!b.attachEvent&&!l,u=r?"object":l?"script":"img",v=l?"script":u,w=Array.isArray||function(a){return"[object Array]"==o.call(a)},x=[],y={},z={timeout:function(a,b){return b.length&&(a.timeout=b[0]),a}},A,B;B=function(a){function b(a){var a=a.split("!"),b=x.length,c=a.pop(),d=a.length,c={url:c,origUrl:c,prefixes:a},e,f,g;for(f=0;f<d;f++)g=a[f].split("="),(e=z[g.shift()])&&(c=e(c,g));for(f=0;f<b;f++)c=x[f](c);return c}function g(a,e,f,g,h){var i=b(a),j=i.autoCallback;i.url.split(".").pop().split("?").shift(),i.bypass||(e&&(e=d(e)?e:e[a]||e[g]||e[a.split("/").pop().split("?")[0]]),i.instead?i.instead(a,e,f,g,h):(y[i.url]?i.noexec=!0:y[i.url]=1,f.load(i.url,i.forceCSS||!i.forceJS&&"css"==i.url.split(".").pop().split("?").shift()?"c":c,i.noexec,i.attrs,i.timeout),(d(e)||d(j))&&f.load(function(){k(),e&&e(i.origUrl,h,g),j&&j(i.origUrl,h,g),y[i.url]=2})))}function h(a,b){function c(a,c){if(a){if(e(a))c||(j=function(){var a=[].slice.call(arguments);k.apply(this,a),l()}),g(a,j,b,0,h);else if(Object(a)===a)for(n in m=function(){var b=0,c;for(c in a)a.hasOwnProperty(c)&&b++;return b}(),a)a.hasOwnProperty(n)&&(!c&&!--m&&(d(j)?j=function(){var a=[].slice.call(arguments);k.apply(this,a),l()}:j[n]=function(a){return function(){var b=[].slice.call(arguments);a&&a.apply(this,b),l()}}(k[n])),g(a[n],j,b,n,h))}else!c&&l()}var h=!!a.test,i=a.load||a.both,j=a.callback||f,k=j,l=a.complete||f,m,n;c(h?a.yep:a.nope,!!i),i&&c(i)}var i,j,l=this.yepnope.loader;if(e(a))g(a,0,l,0);else if(w(a))for(i=0;i<a.length;i++)j=a[i],e(j)?g(j,0,l,0):w(j)?B(j):Object(j)===j&&h(j,l);else Object(a)===a&&h(a,l)},B.addPrefix=function(a,b){z[a]=b},B.addFilter=function(a){x.push(a)},B.errorTimeout=1e4,null==b.readyState&&b.addEventListener&&(b.readyState="loading",b.addEventListener("DOMContentLoaded",A=function(){b.removeEventListener("DOMContentLoaded",A,0),b.readyState="complete"},0)),a.yepnope=k(),a.yepnope.executeStack=h,a.yepnope.injectJs=function(a,c,d,e,i,j){var k=b.createElement("script"),l,o,e=e||B.errorTimeout;k.src=a;for(o in d)k.setAttribute(o,d[o]);c=j?h:c||f,k.onreadystatechange=k.onload=function(){!l&&g(k.readyState)&&(l=1,c(),k.onload=k.onreadystatechange=null)},m(function(){l||(l=1,c(1))},e),i?k.onload():n.parentNode.insertBefore(k,n)},a.yepnope.injectCss=function(a,c,d,e,g,i){var e=b.createElement("link"),j,c=i?h:c||f;e.href=a,e.rel="stylesheet",e.type="text/css";for(j in d)e.setAttribute(j,d[j]);g||(n.parentNode.insertBefore(e,n),m(c,0))}}(this,document),Modernizr.load=function(){yepnope.apply(window,[].slice.call(arguments,0))};
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               /*!
    SlickNav Responsive Mobile Menu v1.0.1
    (c) 2014 Josh Cope
    licensed under MIT
*/
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               ;(function(e,t,n){function o(t,n){this.element=t;this.settings=e.extend({},r,n);this._defaults=r;this._name=i;this.init()}var r={label:"MENU",duplicate:true,duration:200,easingOpen:"swing",easingClose:"swing",closedSymbol:"&#9658;",openedSymbol:"&#9660;",prependTo:"body",parentTag:"a",closeOnClick:false,allowParentLinks:false,nestedParentLinks:true,showChildren:false,init:function(){},open:function(){},close:function(){}},i="slicknav",s="slicknav";o.prototype.init=function(){var n=this,r=e(this.element),i=this.settings,o,u;if(i.duplicate){n.mobileNav=r.clone();n.mobileNav.removeAttr("id");n.mobileNav.find("*").each(function(t,n){e(n).removeAttr("id")})}else{n.mobileNav=r}o=s+"_icon";if(i.label===""){o+=" "+s+"_no-text"}if(i.parentTag=="a"){i.parentTag='a href="#"'}n.mobileNav.attr("class",s+"_nav");u=e('<div class="'+s+'_menu"></div>');n.btn=e(["<"+i.parentTag+' aria-haspopup="true" tabindex="0" class="'+s+"_btn "+s+'_collapsed">','<span class="'+s+'_menutxt">'+i.label+"</span>",'<span class="'+o+'">','<span class="'+s+'_icon-bar"></span>','<span class="'+s+'_icon-bar"></span>','<span class="'+s+'_icon-bar"></span>',"</span>","</"+i.parentTag+">"].join(""));e(u).append(n.btn);e(i.prependTo).prepend(u);u.append(n.mobileNav);var a=n.mobileNav.find("li");e(a).each(function(){var t=e(this),r={};r.children=t.children("ul").attr("role","menu");t.data("menu",r);if(r.children.length>0){var o=t.contents(),u=false;nodes=[];e(o).each(function(){if(!e(this).is("ul")){nodes.push(this)}else{return false}if(e(this).is("a")){u=true}});var a=e("<"+i.parentTag+' role="menuitem" aria-haspopup="true" tabindex="-1" class="'+s+'_item"/>');if(!i.allowParentLinks||i.nestedParentLinks||!u){var f=e(nodes).wrapAll(a).parent();f.addClass(s+"_row")}else e(nodes).wrapAll('<span class="'+s+"_parent-link "+s+'_row"/>').parent();t.addClass(s+"_collapsed");t.addClass(s+"_parent");var l=e('<span class="'+s+'_arrow">'+i.closedSymbol+"</span>");if(i.allowParentLinks&&!i.nestedParentLinks&&u)l=l.wrap(a).parent();e(nodes).last().after(l)}else if(t.children().length===0){t.addClass(s+"_txtnode")}t.children("a").attr("role","menuitem").click(function(t){if(i.closeOnClick&&!e(t.target).parent().closest("li").hasClass(s+"_parent")){e(n.btn).click()}});if(i.closeOnClick&&i.allowParentLinks){t.children("a").children("a").click(function(t){e(n.btn).click()});t.find("."+s+"_parent-link a:not(."+s+"_item)").click(function(t){e(n.btn).click()})}});e(a).each(function(){var t=e(this).data("menu");if(!i.showChildren){n._visibilityToggle(t.children,null,false,null,true)}});n._visibilityToggle(n.mobileNav,null,false,"init",true);n.mobileNav.attr("role","menu");e(t).mousedown(function(){n._outlines(false)});e(t).keyup(function(){n._outlines(true)});e(n.btn).click(function(e){e.preventDefault();n._menuToggle()});n.mobileNav.on("click","."+s+"_item",function(t){t.preventDefault();n._itemClick(e(this))});e(n.btn).keydown(function(e){var t=e||event;if(t.keyCode==13){e.preventDefault();n._menuToggle()}});n.mobileNav.on("keydown","."+s+"_item",function(t){var r=t||event;if(r.keyCode==13){t.preventDefault();n._itemClick(e(t.target))}});if(i.allowParentLinks&&i.nestedParentLinks){e("."+s+"_item a").click(function(e){e.stopImmediatePropagation()})}};o.prototype._menuToggle=function(e){var t=this;var n=t.btn;var r=t.mobileNav;if(n.hasClass(s+"_collapsed")){n.removeClass(s+"_collapsed");n.addClass(s+"_open")}else{n.removeClass(s+"_open");n.addClass(s+"_collapsed")}n.addClass(s+"_animating");t._visibilityToggle(r,n.parent(),true,n)};o.prototype._itemClick=function(e){var t=this;var n=t.settings;var r=e.data("menu");if(!r){r={};r.arrow=e.children("."+s+"_arrow");r.ul=e.next("ul");r.parent=e.parent();if(r.parent.hasClass(s+"_parent-link")){r.parent=e.parent().parent();r.ul=e.parent().next("ul")}e.data("menu",r)}if(r.parent.hasClass(s+"_collapsed")){r.arrow.html(n.openedSymbol);r.parent.removeClass(s+"_collapsed");r.parent.addClass(s+"_open");r.parent.addClass(s+"_animating");t._visibilityToggle(r.ul,r.parent,true,e)}else{r.arrow.html(n.closedSymbol);r.parent.addClass(s+"_collapsed");r.parent.removeClass(s+"_open");r.parent.addClass(s+"_animating");t._visibilityToggle(r.ul,r.parent,true,e)}};o.prototype._visibilityToggle=function(t,n,r,i,o){var u=this;var a=u.settings;var f=u._getActionItems(t);var l=0;if(r){l=a.duration}if(t.hasClass(s+"_hidden")){t.removeClass(s+"_hidden");t.slideDown(l,a.easingOpen,function(){e(i).removeClass(s+"_animating");e(n).removeClass(s+"_animating");if(!o){a.open(i)}});t.attr("aria-hidden","false");f.attr("tabindex","0");u._setVisAttr(t,false)}else{t.addClass(s+"_hidden");t.slideUp(l,this.settings.easingClose,function(){t.attr("aria-hidden","true");f.attr("tabindex","-1");u._setVisAttr(t,true);t.hide();e(i).removeClass(s+"_animating");e(n).removeClass(s+"_animating");if(!o){a.close(i)}else if(i=="init"){a.init()}})}};o.prototype._setVisAttr=function(t,n){var r=this;var i=t.children("li").children("ul").not("."+s+"_hidden");if(!n){i.each(function(){var t=e(this);t.attr("aria-hidden","false");var i=r._getActionItems(t);i.attr("tabindex","0");r._setVisAttr(t,n)})}else{i.each(function(){var t=e(this);t.attr("aria-hidden","true");var i=r._getActionItems(t);i.attr("tabindex","-1");r._setVisAttr(t,n)})}};o.prototype._getActionItems=function(e){var t=e.data("menu");if(!t){t={};var n=e.children("li");var r=n.find("a");t.links=r.add(n.find("."+s+"_item"));e.data("menu",t)}return t.links};o.prototype._outlines=function(t){if(!t){e("."+s+"_item, ."+s+"_btn").css("outline","none")}else{e("."+s+"_item, ."+s+"_btn").css("outline","")}};o.prototype.toggle=function(){var e=this;e._menuToggle()};o.prototype.open=function(){var e=this;if(e.btn.hasClass(s+"_collapsed")){e._menuToggle()}};o.prototype.close=function(){var e=this;if(e.btn.hasClass(s+"_open")){e._menuToggle()}};e.fn[i]=function(t){var n=arguments;if(t===undefined||typeof t==="object"){return this.each(function(){if(!e.data(this,"plugin_"+i)){e.data(this,"plugin_"+i,new o(this,t))}})}else if(typeof t==="string"&&t[0]!=="_"&&t!=="init"){var r;this.each(function(){var s=e.data(this,"plugin_"+i);if(s instanceof o&&typeof s[t]==="function"){r=s[t].apply(s,Array.prototype.slice.call(n,1))}});return r!==undefined?r:this}}})(jQuery,document,window)
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               /*
 * https://github.com/mattkersley/Responsive-Menu
 */
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               ;(function(a){var b=0;a.fn.mobileMenu=function(c){function e(a){return a.is("ul, ol")}function f(){return a(window).width()<d.switchWidth}function g(c){if(c.attr("id")){return a("#mobileMenu_"+c.attr("id")).length>0}else{b++;c.attr("id","mm"+b);return a("#mobileMenu_mm"+b).length>0}}function h(a){if(a.val()!==null){document.location.href=a.val()}}function j(b){b.css("display","none");a("#mobileMenu_"+b.attr("id")).show()}function k(b){b.css("display","");a("#mobileMenu_"+b.attr("id")).hide()}function l(b){if(e(b)){var c='<div class="td_mobile_menu_wrap"><select id="mobileMenu_'+b.attr("id")+'" class="mobileMenu">';c+='<option value="">'+d.topOptionText+"</option>";b.find("li").each(function(){var b="";var e=a(this).parents("ul, ol").length;for(i=1;i<e;i++){b+=d.indentString}var f=a(this).find("a:first-child").attr("href");var g=b+a(this).clone().children("ul, ol").remove().end().text();c+='<option value="'+f+'">'+g+"</option>"});c+="</select></div>";b.parent().append(c);a("#mobileMenu_"+b.attr("id")).change(function(){h(a(this))});j(b)}else{alert("mobileMenu Master Ware only work with UL or OL elements!")}}function m(a){if(f()&&!g(a)){l(a)}else if(f()&&g(a)){j(a)}else if(!f()&&g(a)){k(a)}}var d={switchWidth:768,topOptionText:"Select a page",indentString:"-"};return this.each(function(){if(c){a.extend(d,c)}var b=a(this);a(window).resize(function(){m(b)});m(b)})}})(jQuery);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               jQuery(document).ready( function() { 
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               jQuery('#top-menunbt ul.menunbt').mobileMenu({
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               switchWidth: 600
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               });
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           jQuery('#top-menunbt div.menunbt ul').mobileMenu({
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           switchWidth: 600
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               });	
      });
      /*
 * jQuery Nivo Slider v3.2
 * http://nivo.dev7studios.com
 *
 * Copyright 2012, Dev7studios
 * Free to use and abuse under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 */
      (function(e){var t=function(t,n){var r=e.extend({},e.fn.nivoSlider.defaults,n);var i={currentSlide:0,currentImage:"",totalSlides:0,running:false,paused:false,stop:false,controlNavEl:false};var s=e(t);s.data("nivo:vars",i).addClass("nivoSlider");var o=s.children();o.each(function(){var t=e(this);var n="";if(!t.is("img")){if(t.is("a")){t.addClass("nivo-imageLink");n=t}t=t.find("img:first")}var r=r===0?t.attr("width"):t.width(),s=s===0?t.attr("height"):t.height();if(n!==""){n.css("display","none")}t.css("display","none");i.totalSlides++});if(r.randomStart){r.startSlide=Math.floor(Math.random()*i.totalSlides)}if(r.startSlide>0){if(r.startSlide>=i.totalSlides){r.startSlide=i.totalSlides-1}i.currentSlide=r.startSlide}if(e(o[i.currentSlide]).is("img")){i.currentImage=e(o[i.currentSlide])}else{i.currentImage=e(o[i.currentSlide]).find("img:first")}if(e(o[i.currentSlide]).is("a")){e(o[i.currentSlide]).css("display","block")}var u=e("<img/>").addClass("nivo-main-image");u.attr("src",i.currentImage.attr("src")).show();s.append(u);e(window).resize(function(){s.children("img").width(s.width());u.attr("src",i.currentImage.attr("src"));u.stop().height("auto");e(".nivo-slice").remove();e(".nivo-box").remove()});s.append(e('<div class="nivo-caption"></div>'));var a=function(t){var n=e(".nivo-caption",s);if(i.currentImage.attr("title")!=""&&i.currentImage.attr("title")!=undefined){var r=i.currentImage.attr("title");if(r.substr(0,1)=="#")r=e(r).html();if(n.css("display")=="block"){setTimeout(function(){n.html(r)},t.animSpeed)}else{n.html(r);n.stop().fadeIn(t.animSpeed)}}else{n.stop().fadeOut(t.animSpeed)}};a(r);var f=0;if(!r.manualAdvance&&o.length>1){f=setInterval(function(){d(s,o,r,false)},r.pauseTime)}if(r.directionNav){s.append('<div class="nivo-directionNav"><a class="nivo-prevNav">'+r.prevText+'</a><a class="nivo-nextNav">'+r.nextText+"</a></div>");e(s).on("click","a.nivo-prevNav",function(){if(i.running){return false}clearInterval(f);f="";i.currentSlide-=2;d(s,o,r,"prev")});e(s).on("click","a.nivo-nextNav",function(){if(i.running){return false}clearInterval(f);f="";d(s,o,r,"next")})}if(r.controlNav){i.controlNavEl=e('<div class="nivo-controlNav"></div>');s.after(i.controlNavEl);for(var l=0;l<o.length;l++){if(r.controlNavThumbs){i.controlNavEl.addClass("nivo-thumbs-enabled");var c=o.eq(l);if(!c.is("img")){c=c.find("img:first")}if(c.attr("data-thumb"))i.controlNavEl.append('<a class="nivo-control" rel="'+l+'"><img src="'+c.attr("data-thumb")+'" alt="" /></a>')}else{i.controlNavEl.append('<a class="nivo-control" rel="'+l+'">'+(l+1)+"</a>")}}e("a:eq("+i.currentSlide+")",i.controlNavEl).addClass("active");e("a",i.controlNavEl).bind("click",function(){if(i.running)return false;if(e(this).hasClass("active"))return false;clearInterval(f);f="";u.attr("src",i.currentImage.attr("src"));i.currentSlide=e(this).attr("rel")-1;d(s,o,r,"control")})}if(r.pauseOnHover){s.hover(function(){i.paused=true;clearInterval(f);f=""},function(){i.paused=false;if(f===""&&!r.manualAdvance){f=setInterval(function(){d(s,o,r,false)},r.pauseTime)}})}s.bind("nivo:animFinished",function(){u.attr("src",i.currentImage.attr("src"));i.running=false;e(o).each(function(){if(e(this).is("a")){e(this).css("display","none")}});if(e(o[i.currentSlide]).is("a")){e(o[i.currentSlide]).css("display","block")}if(f===""&&!i.paused&&!r.manualAdvance){f=setInterval(function(){d(s,o,r,false)},r.pauseTime)}r.afterChange.call(this)});var h=function(t,n,r){if(e(r.currentImage).parent().is("a"))e(r.currentImage).parent().css("display","block");e('img[src="'+r.currentImage.attr("src")+'"]',t).not(".nivo-main-image,.nivo-control img").width(t.width()).css("visibility","hidden").show();var i=e('img[src="'+r.currentImage.attr("src")+'"]',t).not(".nivo-main-image,.nivo-control img").parent().is("a")?e('img[src="'+r.currentImage.attr("src")+'"]',t).not(".nivo-main-image,.nivo-control img").parent().height():e('img[src="'+r.currentImage.attr("src")+'"]',t).not(".nivo-main-image,.nivo-control img").height();for(var s=0;s<n.slices;s++){var o=Math.round(t.width()/n.slices);if(s===n.slices-1){t.append(e('<div class="nivo-slice" name="'+s+'"><img src="'+r.currentImage.attr("src")+'" style="position:absolute; width:'+t.width()+"px; height:auto; display:block !important; top:0; left:-"+(o+s*o-o)+'px;" /></div>').css({left:o*s+"px",width:t.width()-o*s+"px",height:i+"px",opacity:"0",overflow:"hidden"}))}else{t.append(e('<div class="nivo-slice" name="'+s+'"><img src="'+r.currentImage.attr("src")+'" style="position:absolute; width:'+t.width()+"px; height:auto; display:block !important; top:0; left:-"+(o+s*o-o)+'px;" /></div>').css({left:o*s+"px",width:o+"px",height:i+"px",opacity:"0",overflow:"hidden"}))}}e(".nivo-slice",t).height(i);u.stop().animate({height:e(r.currentImage).height()},n.animSpeed)};var p=function(t,n,r){if(e(r.currentImage).parent().is("a"))e(r.currentImage).parent().css("display","block");e('img[src="'+r.currentImage.attr("src")+'"]',t).not(".nivo-main-image,.nivo-control img").width(t.width()).css("visibility","hidden").show();var i=Math.round(t.width()/n.boxCols),s=Math.round(e('img[src="'+r.currentImage.attr("src")+'"]',t).not(".nivo-main-image,.nivo-control img").height()/n.boxRows);for(var o=0;o<n.boxRows;o++){for(var a=0;a<n.boxCols;a++){if(a===n.boxCols-1){t.append(e('<div class="nivo-box" name="'+a+'" rel="'+o+'"><img src="'+r.currentImage.attr("src")+'" style="position:absolute; width:'+t.width()+"px; height:auto; display:block; top:-"+s*o+"px; left:-"+i*a+'px;" /></div>').css({opacity:0,left:i*a+"px",top:s*o+"px",width:t.width()-i*a+"px"}));e('.nivo-box[name="'+a+'"]',t).height(e('.nivo-box[name="'+a+'"] img',t).height()+"px")}else{t.append(e('<div class="nivo-box" name="'+a+'" rel="'+o+'"><img src="'+r.currentImage.attr("src")+'" style="position:absolute; width:'+t.width()+"px; height:auto; display:block; top:-"+s*o+"px; left:-"+i*a+'px;" /></div>').css({opacity:0,left:i*a+"px",top:s*o+"px",width:i+"px"}));e('.nivo-box[name="'+a+'"]',t).height(e('.nivo-box[name="'+a+'"] img',t).height()+"px")}}}u.stop().animate({height:e(r.currentImage).height()},n.animSpeed)};var d=function(t,n,r,i){var s=t.data("nivo:vars");if(s&&s.currentSlide===s.totalSlides-1){r.lastSlide.call(this)}if((!s||s.stop)&&!i){return false}r.beforeChange.call(this);if(!i){u.attr("src",s.currentImage.attr("src"))}else{if(i==="prev"){u.attr("src",s.currentImage.attr("src"))}if(i==="next"){u.attr("src",s.currentImage.attr("src"))}}s.currentSlide++;if(s.currentSlide===s.totalSlides){s.currentSlide=0;r.slideshowEnd.call(this)}if(s.currentSlide<0){s.currentSlide=s.totalSlides-1}if(e(n[s.currentSlide]).is("img")){s.currentImage=e(n[s.currentSlide])}else{s.currentImage=e(n[s.currentSlide]).find("img:first")}if(r.controlNav){e("a",s.controlNavEl).removeClass("active");e("a:eq("+s.currentSlide+")",s.controlNavEl).addClass("active")}a(r);e(".nivo-slice",t).remove();e(".nivo-box",t).remove();var o=r.effect,f="";if(r.effect==="random"){f=new Array("sliceDownRight","sliceDownLeft","sliceUpRight","sliceUpLeft","sliceUpDown","sliceUpDownLeft","fold","fade","boxRandom","boxRain","boxRainReverse","boxRainGrow","boxRainGrowReverse");o=f[Math.floor(Math.random()*(f.length+1))];if(o===undefined){o="fade"}}if(r.effect.indexOf(",")!==-1){f=r.effect.split(",");o=f[Math.floor(Math.random()*f.length)];if(o===undefined){o="fade"}}if(s.currentImage.attr("data-transition")){o=s.currentImage.attr("data-transition")}s.running=true;var l=0,c=0,d="",m="",g="",y="";if(o==="sliceDown"||o==="sliceDownRight"||o==="sliceDownLeft"){h(t,r,s);l=0;c=0;d=e(".nivo-slice",t);if(o==="sliceDownLeft"){d=e(".nivo-slice",t)._reverse()}d.each(function(){var n=e(this);n.css({top:"0px"});if(c===r.slices-1){setTimeout(function(){n.animate({opacity:"1.0"},r.animSpeed,"",function(){t.trigger("nivo:animFinished")})},100+l)}else{setTimeout(function(){n.animate({opacity:"1.0"},r.animSpeed)},100+l)}l+=50;c++})}else if(o==="sliceUp"||o==="sliceUpRight"||o==="sliceUpLeft"){h(t,r,s);l=0;c=0;d=e(".nivo-slice",t);if(o==="sliceUpLeft"){d=e(".nivo-slice",t)._reverse()}d.each(function(){var n=e(this);n.css({bottom:"0px"});if(c===r.slices-1){setTimeout(function(){n.animate({opacity:"1.0"},r.animSpeed,"",function(){t.trigger("nivo:animFinished")})},100+l)}else{setTimeout(function(){n.animate({opacity:"1.0"},r.animSpeed)},100+l)}l+=50;c++})}else if(o==="sliceUpDown"||o==="sliceUpDownRight"||o==="sliceUpDownLeft"){h(t,r,s);l=0;c=0;var b=0;d=e(".nivo-slice",t);if(o==="sliceUpDownLeft"){d=e(".nivo-slice",t)._reverse()}d.each(function(){var n=e(this);if(c===0){n.css("top","0px");c++}else{n.css("bottom","0px");c=0}if(b===r.slices-1){setTimeout(function(){n.animate({opacity:"1.0"},r.animSpeed,"",function(){t.trigger("nivo:animFinished")})},100+l)}else{setTimeout(function(){n.animate({opacity:"1.0"},r.animSpeed)},100+l)}l+=50;b++})}else if(o==="fold"){h(t,r,s);l=0;c=0;e(".nivo-slice",t).each(function(){var n=e(this);var i=n.width();n.css({top:"0px",width:"0px"});if(c===r.slices-1){setTimeout(function(){n.animate({width:i,opacity:"1.0"},r.animSpeed,"",function(){t.trigger("nivo:animFinished")})},100+l)}else{setTimeout(function(){n.animate({width:i,opacity:"1.0"},r.animSpeed)},100+l)}l+=50;c++})}else if(o==="fade"){h(t,r,s);m=e(".nivo-slice:first",t);m.css({width:t.width()+"px"});m.animate({opacity:"1.0"},r.animSpeed*2,"",function(){t.trigger("nivo:animFinished")})}else if(o==="slideInRight"){h(t,r,s);m=e(".nivo-slice:first",t);m.css({width:"0px",opacity:"1"});m.animate({width:t.width()+"px"},r.animSpeed*2,"",function(){t.trigger("nivo:animFinished")})}else if(o==="slideInLeft"){h(t,r,s);m=e(".nivo-slice:first",t);m.css({width:"0px",opacity:"1",left:"",right:"0px"});m.animate({width:t.width()+"px"},r.animSpeed*2,"",function(){m.css({left:"0px",right:""});t.trigger("nivo:animFinished")})}else if(o==="boxRandom"){p(t,r,s);g=r.boxCols*r.boxRows;c=0;l=0;y=v(e(".nivo-box",t));y.each(function(){var n=e(this);if(c===g-1){setTimeout(function(){n.animate({opacity:"1"},r.animSpeed,"",function(){t.trigger("nivo:animFinished")})},100+l)}else{setTimeout(function(){n.animate({opacity:"1"},r.animSpeed)},100+l)}l+=20;c++})}else if(o==="boxRain"||o==="boxRainReverse"||o==="boxRainGrow"||o==="boxRainGrowReverse"){p(t,r,s);g=r.boxCols*r.boxRows;c=0;l=0;var w=0;var E=0;var S=[];S[w]=[];y=e(".nivo-box",t);if(o==="boxRainReverse"||o==="boxRainGrowReverse"){y=e(".nivo-box",t)._reverse()}y.each(function(){S[w][E]=e(this);E++;if(E===r.boxCols){w++;E=0;S[w]=[]}});for(var x=0;x<r.boxCols*2;x++){var T=x;for(var N=0;N<r.boxRows;N++){if(T>=0&&T<r.boxCols){(function(n,i,s,u,a){var f=e(S[n][i]);var l=f.width();var c=f.height();if(o==="boxRainGrow"||o==="boxRainGrowReverse"){f.width(0).height(0)}if(u===a-1){setTimeout(function(){f.animate({opacity:"1",width:l,height:c},r.animSpeed/1.3,"",function(){t.trigger("nivo:animFinished")})},100+s)}else{setTimeout(function(){f.animate({opacity:"1",width:l,height:c},r.animSpeed/1.3)},100+s)}})(N,T,l,c,g);c++}T--}l+=100}}};var v=function(e){for(var t,n,r=e.length;r;t=parseInt(Math.random()*r,10),n=e[--r],e[r]=e[t],e[t]=n);return e};var m=function(e){if(this.console&&typeof console.log!=="undefined"){console.log(e)}};this.stop=function(){if(!e(t).data("nivo:vars").stop){e(t).data("nivo:vars").stop=true;m("Stop Slider")}};this.start=function(){if(e(t).data("nivo:vars").stop){e(t).data("nivo:vars").stop=false;m("Start Slider")}};r.afterLoad.call(this);return this};e.fn.nivoSlider=function(n){return this.each(function(r,i){var s=e(this);if(s.data("nivoslider")){return s.data("nivoslider")}var o=new t(this,n);s.data("nivoslider",o)})};e.fn.nivoSlider.defaults={effect:"random",slices:15,boxCols:8,boxRows:4,animSpeed:500,pauseTime:3e3,startSlide:0,directionNav:true,controlNav:true,controlNavThumbs:false,pauseOnHover:true,manualAdvance:false,prevText:"Prev",nextText:"Next",randomStart:false,beforeChange:function(){},afterChange:function(){},slideshowEnd:function(){},lastSlide:function(){},afterLoad:function(){}};e.fn._reverse=[].reverse})(jQuery)
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               /*! Stellar.js v0.6.2 | Copyright 2014, Mark Dalgleish | http://markdalgleish.com/projects/stellar.js | http://markdalgleish.mit-license.org */
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               !function(a,b,c,d){function e(b,c){this.element=b,this.options=a.extend({},g,c),this._defaults=g,this._name=f,this.init()}var f="stellar",g={scrollProperty:"scroll",positionProperty:"position",horizontalScrolling:!0,verticalScrolling:!0,horizontalOffset:0,verticalOffset:0,responsive:!1,parallaxBackgrounds:!0,parallaxElements:!0,hideDistantElements:!0,hideElement:function(a){a.hide()},showElement:function(a){a.show()}},h={scroll:{getLeft:function(a){return a.scrollLeft()},setLeft:function(a,b){a.scrollLeft(b)},getTop:function(a){return a.scrollTop()},setTop:function(a,b){a.scrollTop(b)}},position:{getLeft:function(a){return-1*parseInt(a.css("left"),10)},getTop:function(a){return-1*parseInt(a.css("top"),10)}},margin:{getLeft:function(a){return-1*parseInt(a.css("margin-left"),10)},getTop:function(a){return-1*parseInt(a.css("margin-top"),10)}},transform:{getLeft:function(a){var b=getComputedStyle(a[0])[k];return"none"!==b?-1*parseInt(b.match(/(-?[0-9]+)/g)[4],10):0},getTop:function(a){var b=getComputedStyle(a[0])[k];return"none"!==b?-1*parseInt(b.match(/(-?[0-9]+)/g)[5],10):0}}},i={position:{setLeft:function(a,b){a.css("left",b)},setTop:function(a,b){a.css("top",b)}},transform:{setPosition:function(a,b,c,d,e){a[0].style[k]="translate3d("+(b-c)+"px, "+(d-e)+"px, 0)"}}},j=function(){var b,c=/^(Moz|Webkit|Khtml|O|ms|Icab)(?=[A-Z])/,d=a("script")[0].style,e="";for(b in d)if(c.test(b)){e=b.match(c)[0];break}return"WebkitOpacity"in d&&(e="Webkit"),"KhtmlOpacity"in d&&(e="Khtml"),function(a){return e+(e.length>0?a.charAt(0).toUpperCase()+a.slice(1):a)}}(),k=j("transform"),l=a("<div />",{style:"background:#fff"}).css("background-position-x")!==d,m=l?function(a,b,c){a.css({"background-position-x":b,"background-position-y":c})}:function(a,b,c){a.css("background-position",b+" "+c)},n=l?function(a){return[a.css("background-position-x"),a.css("background-position-y")]}:function(a){return a.css("background-position").split(" ")},o=b.requestAnimationFrame||b.webkitRequestAnimationFrame||b.mozRequestAnimationFrame||b.oRequestAnimationFrame||b.msRequestAnimationFrame||function(a){setTimeout(a,1e3/60)};e.prototype={init:function(){this.options.name=f+"_"+Math.floor(1e9*Math.random()),this._defineElements(),this._defineGetters(),this._defineSetters(),this._handleWindowLoadAndResize(),this._detectViewport(),this.refresh({firstLoad:!0}),"scroll"===this.options.scrollProperty?this._handleScrollEvent():this._startAnimationLoop()},_defineElements:function(){this.element===c.body&&(this.element=b),this.$scrollElement=a(this.element),this.$element=this.element===b?a("body"):this.$scrollElement,this.$viewportElement=this.options.viewportElement!==d?a(this.options.viewportElement):this.$scrollElement[0]===b||"scroll"===this.options.scrollProperty?this.$scrollElement:this.$scrollElement.parent()},_defineGetters:function(){var a=this,b=h[a.options.scrollProperty];this._getScrollLeft=function(){return b.getLeft(a.$scrollElement)},this._getScrollTop=function(){return b.getTop(a.$scrollElement)}},_defineSetters:function(){var b=this,c=h[b.options.scrollProperty],d=i[b.options.positionProperty],e=c.setLeft,f=c.setTop;this._setScrollLeft="function"==typeof e?function(a){e(b.$scrollElement,a)}:a.noop,this._setScrollTop="function"==typeof f?function(a){f(b.$scrollElement,a)}:a.noop,this._setPosition=d.setPosition||function(a,c,e,f,g){b.options.horizontalScrolling&&d.setLeft(a,c,e),b.options.verticalScrolling&&d.setTop(a,f,g)}},_handleWindowLoadAndResize:function(){var c=this,d=a(b);c.options.responsive&&d.bind("load."+this.name,function(){c.refresh()}),d.bind("resize."+this.name,function(){c._detectViewport(),c.options.responsive&&c.refresh()})},refresh:function(c){var d=this,e=d._getScrollLeft(),f=d._getScrollTop();c&&c.firstLoad||this._reset(),this._setScrollLeft(0),this._setScrollTop(0),this._setOffsets(),this._findParticles(),this._findBackgrounds(),c&&c.firstLoad&&/WebKit/.test(navigator.userAgent)&&a(b).load(function(){var a=d._getScrollLeft(),b=d._getScrollTop();d._setScrollLeft(a+1),d._setScrollTop(b+1),d._setScrollLeft(a),d._setScrollTop(b)}),this._setScrollLeft(e),this._setScrollTop(f)},_detectViewport:function(){var a=this.$viewportElement.offset(),b=null!==a&&a!==d;this.viewportWidth=this.$viewportElement.width(),this.viewportHeight=this.$viewportElement.height(),this.viewportOffsetTop=b?a.top:0,this.viewportOffsetLeft=b?a.left:0},_findParticles:function(){{var b=this;this._getScrollLeft(),this._getScrollTop()}if(this.particles!==d)for(var c=this.particles.length-1;c>=0;c--)this.particles[c].$element.data("stellar-elementIsActive",d);this.particles=[],this.options.parallaxElements&&this.$element.find("[data-stellar-ratio]").each(function(){var c,e,f,g,h,i,j,k,l,m=a(this),n=0,o=0,p=0,q=0;if(m.data("stellar-elementIsActive")){if(m.data("stellar-elementIsActive")!==this)return}else m.data("stellar-elementIsActive",this);b.options.showElement(m),m.data("stellar-startingLeft")?(m.css("left",m.data("stellar-startingLeft")),m.css("top",m.data("stellar-startingTop"))):(m.data("stellar-startingLeft",m.css("left")),m.data("stellar-startingTop",m.css("top"))),f=m.position().left,g=m.position().top,h="auto"===m.css("margin-left")?0:parseInt(m.css("margin-left"),10),i="auto"===m.css("margin-top")?0:parseInt(m.css("margin-top"),10),k=m.offset().left-h,l=m.offset().top-i,m.parents().each(function(){var b=a(this);return b.data("stellar-offset-parent")===!0?(n=p,o=q,j=b,!1):(p+=b.position().left,void(q+=b.position().top))}),c=m.data("stellar-horizontal-offset")!==d?m.data("stellar-horizontal-offset"):j!==d&&j.data("stellar-horizontal-offset")!==d?j.data("stellar-horizontal-offset"):b.horizontalOffset,e=m.data("stellar-vertical-offset")!==d?m.data("stellar-vertical-offset"):j!==d&&j.data("stellar-vertical-offset")!==d?j.data("stellar-vertical-offset"):b.verticalOffset,b.particles.push({$element:m,$offsetParent:j,isFixed:"fixed"===m.css("position"),horizontalOffset:c,verticalOffset:e,startingPositionLeft:f,startingPositionTop:g,startingOffsetLeft:k,startingOffsetTop:l,parentOffsetLeft:n,parentOffsetTop:o,stellarRatio:m.data("stellar-ratio")!==d?m.data("stellar-ratio"):1,width:m.outerWidth(!0),height:m.outerHeight(!0),isHidden:!1})})},_findBackgrounds:function(){var b,c=this,e=this._getScrollLeft(),f=this._getScrollTop();this.backgrounds=[],this.options.parallaxBackgrounds&&(b=this.$element.find("[data-stellar-background-ratio]"),this.$element.data("stellar-background-ratio")&&(b=b.add(this.$element)),b.each(function(){var b,g,h,i,j,k,l,o=a(this),p=n(o),q=0,r=0,s=0,t=0;if(o.data("stellar-backgroundIsActive")){if(o.data("stellar-backgroundIsActive")!==this)return}else o.data("stellar-backgroundIsActive",this);o.data("stellar-backgroundStartingLeft")?m(o,o.data("stellar-backgroundStartingLeft"),o.data("stellar-backgroundStartingTop")):(o.data("stellar-backgroundStartingLeft",p[0]),o.data("stellar-backgroundStartingTop",p[1])),h="auto"===o.css("margin-left")?0:parseInt(o.css("margin-left"),10),i="auto"===o.css("margin-top")?0:parseInt(o.css("margin-top"),10),j=o.offset().left-h-e,k=o.offset().top-i-f,o.parents().each(function(){var b=a(this);return b.data("stellar-offset-parent")===!0?(q=s,r=t,l=b,!1):(s+=b.position().left,void(t+=b.position().top))}),b=o.data("stellar-horizontal-offset")!==d?o.data("stellar-horizontal-offset"):l!==d&&l.data("stellar-horizontal-offset")!==d?l.data("stellar-horizontal-offset"):c.horizontalOffset,g=o.data("stellar-vertical-offset")!==d?o.data("stellar-vertical-offset"):l!==d&&l.data("stellar-vertical-offset")!==d?l.data("stellar-vertical-offset"):c.verticalOffset,c.backgrounds.push({$element:o,$offsetParent:l,isFixed:"fixed"===o.css("background-attachment"),horizontalOffset:b,verticalOffset:g,startingValueLeft:p[0],startingValueTop:p[1],startingBackgroundPositionLeft:isNaN(parseInt(p[0],10))?0:parseInt(p[0],10),startingBackgroundPositionTop:isNaN(parseInt(p[1],10))?0:parseInt(p[1],10),startingPositionLeft:o.position().left,startingPositionTop:o.position().top,startingOffsetLeft:j,startingOffsetTop:k,parentOffsetLeft:q,parentOffsetTop:r,stellarRatio:o.data("stellar-background-ratio")===d?1:o.data("stellar-background-ratio")})}))},_reset:function(){var a,b,c,d,e;for(e=this.particles.length-1;e>=0;e--)a=this.particles[e],b=a.$element.data("stellar-startingLeft"),c=a.$element.data("stellar-startingTop"),this._setPosition(a.$element,b,b,c,c),this.options.showElement(a.$element),a.$element.data("stellar-startingLeft",null).data("stellar-elementIsActive",null).data("stellar-backgroundIsActive",null);for(e=this.backgrounds.length-1;e>=0;e--)d=this.backgrounds[e],d.$element.data("stellar-backgroundStartingLeft",null).data("stellar-backgroundStartingTop",null),m(d.$element,d.startingValueLeft,d.startingValueTop)},destroy:function(){this._reset(),this.$scrollElement.unbind("resize."+this.name).unbind("scroll."+this.name),this._animationLoop=a.noop,a(b).unbind("load."+this.name).unbind("resize."+this.name)},_setOffsets:function(){var c=this,d=a(b);d.unbind("resize.horizontal-"+this.name).unbind("resize.vertical-"+this.name),"function"==typeof this.options.horizontalOffset?(this.horizontalOffset=this.options.horizontalOffset(),d.bind("resize.horizontal-"+this.name,function(){c.horizontalOffset=c.options.horizontalOffset()})):this.horizontalOffset=this.options.horizontalOffset,"function"==typeof this.options.verticalOffset?(this.verticalOffset=this.options.verticalOffset(),d.bind("resize.vertical-"+this.name,function(){c.verticalOffset=c.options.verticalOffset()})):this.verticalOffset=this.options.verticalOffset},_repositionElements:function(){var a,b,c,d,e,f,g,h,i,j,k=this._getScrollLeft(),l=this._getScrollTop(),n=!0,o=!0;if(this.currentScrollLeft!==k||this.currentScrollTop!==l||this.currentWidth!==this.viewportWidth||this.currentHeight!==this.viewportHeight){for(this.currentScrollLeft=k,this.currentScrollTop=l,this.currentWidth=this.viewportWidth,this.currentHeight=this.viewportHeight,j=this.particles.length-1;j>=0;j--)a=this.particles[j],b=a.isFixed?1:0,this.options.horizontalScrolling?(f=(k+a.horizontalOffset+this.viewportOffsetLeft+a.startingPositionLeft-a.startingOffsetLeft+a.parentOffsetLeft)*-(a.stellarRatio+b-1)+a.startingPositionLeft,h=f-a.startingPositionLeft+a.startingOffsetLeft):(f=a.startingPositionLeft,h=a.startingOffsetLeft),this.options.verticalScrolling?(g=(l+a.verticalOffset+this.viewportOffsetTop+a.startingPositionTop-a.startingOffsetTop+a.parentOffsetTop)*-(a.stellarRatio+b-1)+a.startingPositionTop,i=g-a.startingPositionTop+a.startingOffsetTop):(g=a.startingPositionTop,i=a.startingOffsetTop),this.options.hideDistantElements&&(o=!this.options.horizontalScrolling||h+a.width>(a.isFixed?0:k)&&h<(a.isFixed?0:k)+this.viewportWidth+this.viewportOffsetLeft,n=!this.options.verticalScrolling||i+a.height>(a.isFixed?0:l)&&i<(a.isFixed?0:l)+this.viewportHeight+this.viewportOffsetTop),o&&n?(a.isHidden&&(this.options.showElement(a.$element),a.isHidden=!1),this._setPosition(a.$element,f,a.startingPositionLeft,g,a.startingPositionTop)):a.isHidden||(this.options.hideElement(a.$element),a.isHidden=!0);for(j=this.backgrounds.length-1;j>=0;j--)c=this.backgrounds[j],b=c.isFixed?0:1,d=this.options.horizontalScrolling?(k+c.horizontalOffset-this.viewportOffsetLeft-c.startingOffsetLeft+c.parentOffsetLeft-c.startingBackgroundPositionLeft)*(b-c.stellarRatio)+"px":c.startingValueLeft,e=this.options.verticalScrolling?(l+c.verticalOffset-this.viewportOffsetTop-c.startingOffsetTop+c.parentOffsetTop-c.startingBackgroundPositionTop)*(b-c.stellarRatio)+"px":c.startingValueTop,m(c.$element,d,e)}},_handleScrollEvent:function(){var a=this,b=!1,c=function(){a._repositionElements(),b=!1},d=function(){b||(o(c),b=!0)};this.$scrollElement.bind("scroll."+this.name,d),d()},_startAnimationLoop:function(){var a=this;this._animationLoop=function(){o(a._animationLoop),a._repositionElements()},this._animationLoop()}},a.fn[f]=function(b){var c=arguments;return b===d||"object"==typeof b?this.each(function(){a.data(this,"plugin_"+f)||a.data(this,"plugin_"+f,new e(this,b))}):"string"==typeof b&&"_"!==b[0]&&"init"!==b?this.each(function(){var d=a.data(this,"plugin_"+f);d instanceof e&&"function"==typeof d[b]&&d[b].apply(d,Array.prototype.slice.call(c,1)),"destroy"===b&&a.data(this,"plugin_"+f,null)}):void 0},a[f]=function(){var c=a(b);return c.stellar.apply(c,Array.prototype.slice.call(arguments,0))},a[f].scrollProperty=h,a[f].positionProperty=i,b.Stellar=e}(jQuery,this,document);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  /**
 * Copyright 2012, Digital Fusion
 * Licensed under the MIT license.
 * https://github.com/customd/jquery-visible/
 *
 * @author Sam Sehnert
*/
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  ;(function(e){e.fn.visible=function(t,n,r){var i=e(this).eq(0),s=i.get(0),o=e(window),u=o.scrollTop(),a=u+o.height(),f=o.scrollLeft(),l=f+o.width(),c=i.offset().top,h=c+i.height(),p=i.offset().left,d=p+i.width(),v=t===true?h:c,m=t===true?c:h,g=t===true?d:p,y=t===true?p:d,b=n===true?s.offsetWidth*s.offsetHeight:true,r=r?r:"both";if(r==="both")return!!b&&m<=a&&v>=u&&y<=l&&g>=f;else if(r==="vertical")return!!b&&m<=a&&v>=u;else if(r==="horizontal")return!!b&&y<=l&&g>=f}})(jQuery);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  // jQuery flexImages v1.0.1
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  // https://github.com/Pixabay/jQuery-flexImages
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  !function(t){function e(t,a,n,r){function o(t){n.maxRows&&w>n.maxRows||n.truncate&&t?d[c][0].hide():(d[c][5]&&(d[c][4].attr("src",d[c][5]),d[c][5]=""),d[c][0].css({width:s,height:x}).show())}var c,s,f=1,w=1,g=t.width(),d=[],u=0,x=n.rowHeight;for(i=0;i<a.length;i++)if(d.push(a[i]),u+=a[i][3]+n.margin,u>=g){for(f=g/u,x=Math.ceil(n.rowHeight*f),exact_w=0,s,c=0;c<d.length;c++)s=Math.ceil(d[c][3]*f),exact_w+=s+n.margin,exact_w>g&&(s-=exact_w-g+1),o();d=[],u=0,w++}for(c=0;c<d.length;c++)s=Math.floor(d[c][3]*f),h=Math.floor(n.rowHeight*f),o(!0);r||g==t.width()||e(t,a,n,!0)}t.fn.flexImages=function(i){var a=t.extend({container:".item",object:"img",rowHeight:180,maxRows:0,truncate:!1},i);return this.each(function(){var i=t(this),n=t(a.container,i),h=[],r=n.eq(0),o=(new Date).getTime();a.margin=r.outerWidth(!0)-r.innerWidth(),n.each(function(){var e=parseInt(t(this).data("w")),i=parseInt(t(this).data("h")),n=e*(a.rowHeight/i),r=t(this).find(a.object);h.push([t(this),e,i,n,r,r.data("src")])}),e(i,h,a),t(window).off("resize.flexImages"+i.data("flex-t")),t(window).on("resize.flexImages"+o,function(){e(i,h,a)}),i.data("flex-t",o)})}}(jQuery);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               //Slideout.js
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               //https://github.com/Mango/slideout
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               //MIT License
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               !function(e){if("object"==typeof exports&&"undefined"!=typeof module)module.exports=e();else if("function"==typeof define&&define.amd)define([],e);else{var t;"undefined"!=typeof window?t=window:"undefined"!=typeof global?t=global:"undefined"!=typeof self&&(t=self),t.Slideout=e()}}(function(){var e,t,n;return function i(e,t,n){function o(r,a){if(!t[r]){if(!e[r]){var u=typeof require=="function"&&require;if(!a&&u)return u(r,!0);if(s)return s(r,!0);var f=new Error("Cannot find module '"+r+"'");throw f.code="MODULE_NOT_FOUND",f}var l=t[r]={exports:{}};e[r][0].call(l.exports,function(t){var n=e[r][1][t];return o(n?n:t)},l,l.exports,i,e,t,n)}return t[r].exports}var s=typeof require=="function"&&require;for(var r=0;r<n.length;r++)o(n[r]);return o}({1:[function(e,t,n){"use strict";var i=e("decouple");var o;var s=false;var r=window.document;var a=r.documentElement;var u=window.navigator.msPointerEnabled;var f={start:u?"MSPointerDown":"touchstart",move:u?"MSPointerMove":"touchmove",end:u?"MSPointerUp":"touchend"};var l=function d(){var e=/^(Webkit|Khtml|Moz|ms|O)(?=[A-Z])/;var t=r.getElementsByTagName("script")[0].style;for(var n in t){if(e.test(n)){return"-"+n.match(e)[0].toLowerCase()+"-"}}if("WebkitOpacity"in t){return"-webkit-"}if("KhtmlOpacity"in t){return"-khtml-"}return""}();function p(e){e=e||{};this._startOffsetX=0;this._currentOffsetX=0;this._opening=false;this._moved=false;this._opened=false;this._preventOpen=false;this._touch=e.touch==undefined?true:e.touch&&true;this.panel=e.panel;this.menu=e.menu;this.panel.className+=" slideout-panel";this.menu.className+=" slideout-menu";this._fx=e.fx||"ease";this._duration=parseInt(e.duration,10)||300;this._tolerance=parseInt(e.tolerance,10)||70;this._padding=parseInt(e.padding,10)||256;if(this._touch){this._initTouchEvents()}}p.prototype.open=function(){var e=this;if(a.className.search("slideout-open")===-1){a.className+=" slideout-open"}this._setTransition();this._translateXTo(this._padding);this._opened=true;setTimeout(function(){e.panel.style.transition=e.panel.style["-webkit-transition"]=""},this._duration+50);return this};p.prototype.close=function(){var e=this;if(!this.isOpen()&&!this._opening){return this}this._setTransition();this._translateXTo(0);this._opened=false;setTimeout(function(){a.className=a.className.replace(/ slideout-open/,"");e.panel.style.transition=e.panel.style["-webkit-transition"]=""},this._duration+50);return this};p.prototype.toggle=function(){return this.isOpen()?this.close():this.open()};p.prototype.isOpen=function(){return this._opened};p.prototype._translateXTo=function(e){this._currentOffsetX=e;this.panel.style[l+"transform"]=this.panel.style.transform="translate3d("+e+"px, 0, 0)"};p.prototype._setTransition=function(){this.panel.style[l+"transition"]=this.panel.style.transition=l+"transform "+this._duration+"ms "+this._fx};p.prototype._initTouchEvents=function(){var e=this;i(r,"scroll",function(){if(!e._moved){clearTimeout(o);s=true;o=setTimeout(function(){s=false},250)}});r.addEventListener(f.move,function(t){if(e._moved){t.preventDefault()}});this.panel.addEventListener(f.start,function(t){if(typeof t.touches==="undefined"){return}e._moved=false;e._opening=false;e._startOffsetX=t.touches[0].pageX;e._preventOpen=!e.isOpen()&&e.menu.clientWidth!==0});this.panel.addEventListener("touchcancel",function(){e._moved=false;e._opening=false});this.panel.addEventListener(f.end,function(){if(e._moved){e._opening&&Math.abs(e._currentOffsetX)>e._tolerance?e.open():e.close()}e._moved=false});this.panel.addEventListener(f.move,function(t){if(s||e._preventOpen||typeof t.touches==="undefined"){return}var n=t.touches[0].clientX-e._startOffsetX;var i=e._currentOffsetX=n;if(Math.abs(i)>e._padding){return}if(Math.abs(n)>20){e._opening=true;if(e._opened&&n>0||!e._opened&&n<0){return}if(!e._moved&&a.className.search("slideout-open")===-1){a.className+=" slideout-open"}if(n<=0){i=n+e._padding;e._opening=false}e.panel.style[l+"transform"]=e.panel.style.transform="translate3d("+i+"px, 0, 0)";e._moved=true}})};t.exports=p},{decouple:2}],2:[function(e,t,n){"use strict";var i=function(){return window.requestAnimationFrame||window.webkitRequestAnimationFrame||function(e){window.setTimeout(e,1e3/60)}}();function o(e,t,n){var o,s=false;function r(e){o=e;a()}function a(){if(!s){i(u);s=true}}function u(){n.call(e,o);s=false}e.addEventListener(t,r,false)}t.exports=o},{}]},{},[1])(1)});
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               //]]>
    </script>
    <script type='text/javascript'>
      //<![CDATA[
      function showrecentcomments(json){for(var i=0;i<a_rc;i++){var b_rc=json.feed.entry[i];var c_rc;if(i==json.feed.entry.length)break;for(var k=0;k<b_rc.link.length;k++){if(b_rc.link[k].rel=='alternate'){c_rc=b_rc.link[k].href;break;}}c_rc=c_rc.replace("#","#comment-");var d_rc=c_rc.split("#");d_rc=d_rc[0];var e_rc=d_rc.split("/");e_rc=e_rc[5];e_rc=e_rc.split(".html");e_rc=e_rc[0];var f_rc=e_rc.replace(/-/g," ");f_rc=f_rc.link(d_rc);var g_rc=b_rc.published.$t;var h_rc=g_rc.substring(0,4);var i_rc=g_rc.substring(5,7);var j_rc=g_rc.substring(8,10);var k_rc=new Array();k_rc[1]="Jan";k_rc[2]="Feb";k_rc[3]="Mar";k_rc[4]="Apr";k_rc[5]="May";k_rc[6]="Jun";k_rc[7]="Jul";k_rc[8]="Aug";k_rc[9]="Sep";k_rc[10]="Oct";k_rc[11]="Nov";k_rc[12]="Dec";if("content" in b_rc){var l_rc=b_rc.content.$t;}else if("summary" in b_rc){var l_rc=b_rc.summary.$t;}else var l_rc="";var re=/<\S[^>]*>/g;l_rc=l_rc.replace(re,"");if(m_rc==true)document.write('On '+k_rc[parseInt(i_rc,10)]+' '+j_rc+' ');document.write('<a href="'+c_rc+'">'+b_rc.author[0].name.$t+'</a> commented');if(n_rc==true)document.write(' on '+f_rc);document.write(': ');if(l_rc.length<o_rc){document.write('<i>&#8220;');document.write(l_rc);document.write('&#8221;</i><br/><br/>');}else{document.write('<i>&#8220;');l_rc=l_rc.substring(0,o_rc);var p_rc=l_rc.lastIndexOf(" ");l_rc=l_rc.substring(0,p_rc);document.write(l_rc+'&hellip;&#8221;</i>');document.write('<br/><br/>');}}}
      function rp(json){document.write('<ul>');for(var i=0;i<numposts;i++){document.write('<li>');var entry=json.feed.entry[i];var posttitle=entry.title.$t;var posturl;if(i==json.feed.entry.length)break;for(var k=0;k<entry.link.length;k++){if(entry.link[k].rel=='alternate'){posturl=entry.link[k].href;break}}posttitle=posttitle.link(posturl);var readmorelink="(more)";readmorelink=readmorelink.link(posturl);var postdate=entry.published.$t;var cdyear=postdate.substring(0,4);var cdmonth=postdate.substring(5,7);var cdday=postdate.substring(8,10);var monthnames=new Array();monthnames[1]="Jan";monthnames[2]="Feb";monthnames[3]="Mar";monthnames[4]="Apr";monthnames[5]="May";monthnames[6]="Jun";monthnames[7]="Jul";monthnames[8]="Aug";monthnames[9]="Sep";monthnames[10]="Oct";monthnames[11]="Nov";monthnames[12]="Dec";if("content"in entry){var postcontent=entry.content.$t}else if("summary"in entry){var postcontent=entry.summary.$t}else var postcontent="";var re=/<\S[^>]*>/g;postcontent=postcontent.replace(re,"");document.write(posttitle);if(showpostdate==true)document.write(' - '+monthnames[parseInt(cdmonth,10)]+' '+cdday);if(showpostsummary==true){if(postcontent.length<numchars){document.write(postcontent)}else{postcontent=postcontent.substring(0,numchars);var quoteEnd=postcontent.lastIndexOf(" ");postcontent=postcontent.substring(0,quoteEnd);document.write(postcontent+'...'+readmorelink)}}document.write('</li>')}document.write('</ul>')}
      //]]>
    </script>
    <script type='text/javascript'>
      summary_noimg = 400;
      summary_img = 350;
      img_thumb_height = 150;
      img_thumb_width = 200; 
    </script>
    <script type='text/javascript'>
      //<![CDATA[
      function removeHtmlTag(strx,chop){ 
        if(strx.indexOf("<")!=-1)
        {
          var s = strx.split("<"); 
          for(var i=0;i<s.length;i++){ 
            if(s[i].indexOf(">")!=-1){ 
              s[i] = s[i].substring(s[i].indexOf(">")+1,s[i].length); 
            } 
          } 
          strx =  s.join(""); 
        }
        chop = (chop < strx.length-1) ? chop : strx.length-2; 
        while(strx.charAt(chop-1)!=' ' && strx.indexOf(' ',chop)!=-1) chop++; 
        strx = strx.substring(0,chop-1); 
        return strx+'...'; 
      }
      function createSummaryAndThumb(pID){
        var div = document.getElementById(pID);
        var imgtag = "";
        var img = div.getElementsByTagName("img");
        var summ = summary_noimg;
        if(img.length>=1) {	
          imgtag = '<img src="'+img[0].src+'" class="pbtthumbimg"/>';
          summ = summary_img;
        }
        var summary = imgtag + '<div>' + removeHtmlTag(div.innerHTML,summ) + '</div>';
        div.innerHTML = summary;
      }
      //]]>
    </script>
  </head>
  <body>
    <!-- mobile menu start -->
    <nav id='mobile-static-menunbt'>
      <div class='menunbt'>
        <ul>
          <li>
            <a expr:href='data:blog.homepageUrl'>
              Home
            </a>
          </li>
          <li>
            <a href='#'>
              Productos
            </a>
          </li>
          <li>
            <a href='#'>
              Productos

            </a>
          </li>
          <li>
            <a href='#'>
              Biográfica
            </a>
          </li>
          <li>
            <a href='http://willduran.blogspot.com/p/galeria_9.html'>
              Galeria
            </a>
            <ul class='sub-menu'>
              <li>
                <a href='#'>
                  Fotos y Videos
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
    <!-- mobile menu end -->
    <button class='mobile-toggle-button'>
      <i class='fa fa-bars'/>
    </button>
    <div class='sitenbt' id='pagenbt'>
      <a class='skip-link screen-reader-text' href='#contentnbt'>
        Skip to content
      </a>
      <div id='jumbosearchnbt'>
        <span class='fa fa-remove closeiconnbt'/>
        <div class='formnbt'>
          <form action='/search' class='search-formnbt' method='get' role='search'>
            <label>
              <span class='screen-reader-text'>
                Search for:
              </span>
              <input class='search-fieldnbt' name='q' placeholder='Search' title='Search for:' type='search' value=''/>
            </label>
            <input class='search-submitnbt' type='submit' value='Search'/>
          </form>
        </div>
      </div>
      <div id='static-barnbt'>
        <div id='static-logonbt'>
          <h1 class='site-titlenbt title-fontnbt'>
            <a expr:href='data:blog.homepageUrl' rel='home'>
              <data:blog.title/>
            </a>
          </h1>
        </div>
        <!-- top fixed menu bar start -->
        <div id='static-menunbt'>
          <div class='menunbt'>
            <ul>
              <li>
                <a expr:href='data:blog.homepageUrl'>
                  Home
                </a>
              </li>
              <li>
                <a href='#'>
                  Productos
                </a>
              </li>
              <li>
                <a href='http://willduran.blogspot.com/p/quienes-somos.html'>
                  Quienes Somos
                </a>
              </li>
              <li>
                <a href='http://willduran.blogspot.com/p/servi.html'>
                  Servicios Prestados
                </a>
              </li>
              <li>
                <a href='http://willduran.blogspot.com/p/galeria_9.html'>
                  Galeria
                </a>
              </li>
            </ul>
          </div>
        </div>
        <!-- top fixed menu bar end -->
        <a id='searchiconnbt'>
          <i class='fa fa-search'/>
        </a>
      </div>
      <header class='site-headernbt header-largenbt' data-stellar-background-ratio='0.2' id='mastheadnbt' role='banner'>
        <div class='layernbt'>
          <div class='containernbt'>
            <div class='site-brandingnbt col-md-12'>
              <div id='text-title-descnbt'>
                <b:section class='siteheadersec' id='siteheadersec' maxwidgets='1' showaddelement='no'>
                  <b:widget id='Header1' locked='true' title='Blog Will (cabecera)' type='Header' version='1' visible='true'>
                    <b:includable id='main'>
                      <b:if cond='data:useImage'>
                        <b:if cond='data:imagePlacement == &quot;REPLACE&quot;'>
                          <!--Show just the image, no text-->
                          <div id='header-inner'>
                            <a expr:href='data:blog.homepageUrl' style='display: block'>
                              <img expr:alt='data:title' expr:height='data:height' expr:id='data:widget.instanceId + &quot;_headerimg&quot;' expr:src='data:sourceUrl' expr:width='data:width' style='display: block;padding-left:0px;padding-top:0px;'/>
                            </a>
                          </div>
                          <b:else/>
                          <!--
Show image as background to text. You can't really calculate the width
reliably in JS because margins are not taken into account by any of
clientWidth, offsetWidth or scrollWidth, so we don't force a minimum
width if the user is using shrink to fit.
This results in a margin-width's worth of pixels being cropped. If the
user is not using shrink to fit then we expand the header.
-->
                          <div expr:style='&quot;background-image: url(\&quot;&quot; + data:sourceUrl + &quot;\&quot;); &quot;                      + &quot;background-position: &quot;                      + data:backgroundPositionStyleStr + &quot;; &quot;                      + data:widthStyleStr                      + &quot;min-height: &quot; + data:height + &quot;px;&quot;                      + &quot;_height: &quot; + data:height + &quot;px;&quot;                      + &quot;background-repeat: no-repeat; &quot;' id='header-inner'>
                            <div class='titlewrapper' style='background: transparent'>
                              <h1 class='site-titlenbt' style='background: transparent; border-width: 0px'>
                                <b:include name='title'/>
                              </h1>
                            </div>
                            <b:include name='description'/>
                          </div>
                        </b:if>
                        <b:else/>
                        <!--No header image -->
                        <div id='header-inner'>
                          <div class='titlewrapper'>
                            <h1 class='site-titlenbt'>
                              <b:include name='title'/>
                            </h1>
                          </div>
                          <b:include name='description'/>
                        </div>
                      </b:if>
                    </b:includable>
                    <b:includable id='description'>
                      <h2 class='site-descriptionnbt'>
                        <data:description/>
                      </h2>
                    </b:includable>
                    <b:includable id='title'>
                      <a expr:href='data:blog.homepageUrl'>
                        <data:title/>
                      </a>
                    </b:includable>
                  </b:widget>
                </b:section>
              </div>
            </div>
            <div class='social-iconsnbt col-md-12'>
              <a href='https://www.facebook.com/MasterWareTechnology/' rel='nofollow' target='_blank'>
                <img src='http://4.bp.blogspot.com/-FpVu-MmNPSs/Vbwug5-986I/AAAAAAAAOgw/LvnaC50pN5o/s1600/facebook.png'/>
              </a>
              <a href='https://twitter.com/MasterWareTechn' rel='nofollow' target='_blank'>
                <img src='http://4.bp.blogspot.com/-26Au5x6AbqA/VbwujQZMR6I/AAAAAAAAOho/TOQwQVZxSV8/s1600/twitter.png'/>
              </a>
              <a href='https://plus.google.com/u/0/+WilkerDuran/posts' rel='nofollow' target='_blank'>
                <img src='http://2.bp.blogspot.com/-_-yAj6BJ7qc/VbwuhHkBw3I/AAAAAAAAOg0/UVPZFcg7aM8/s1600/google-plus.png'/>
              </a>
              <a href='https://www.youtube.com/channel/UCR3X1O2IrSIdRYkkOJIkunQ' rel='nofollow' target='_blank'>
                <img src='http://2.bp.blogspot.com/-QVstH1cwMlQ/VbwukJjyaaI/AAAAAAAAOh8/TZyRQcDPW34/s1600/youtube.png'/>
              </a>
              <a href='https://instagram.com/will013/' rel='nofollow' target='_blank'>
                <img src='http://4.bp.blogspot.com/-alUq9yV_CMc/Vbwuhnt9s9I/AAAAAAAAOhA/Kd6joK_gQ7I/s1600/instagram.png'/>
              </a>
			 <a href='http://profesional.mercadolibre.com.ve/MLV-459608261-instalacion-de-camaras-de-seguridad-_JM' rel='nofollow' target='_blank'>
                <img src='http://3.bp.blogspot.com/-kk5zWSlos8A/VLs3Z5GR-eI/AAAAAAAANQU/rjetszEeG94/s1600/icono-papel-ML-png1.png'/>
              </a>
 			<a href='http://willduran.blogspot.com/p/descargas.html' rel='nofollow' target='_blank'>
                <img src='https://lh4.ggpht.com/b3xcDImNhXLh4ui_3ass5KoXE5-FeCmGQMA_w7dG1wQrZz3YLNFc1qeQI3GhvK8MXHI=w300'/>
              </a>
            </div>
            <div class='top-searchnbt col-md-12'>
              <form action='/search' class='search-formnbt' method='get' role='Search'>
                <label>
                  <span class='screen-reader-text'>
                    Buscar:
                  </span>
                  <input class='search-fieldnbt' name='q' placeholder='Search' title='Search for:' type='search' value=''/>
                </label>
                <input class='search-submitnbt' type='submit' value='Search'/>
              </form>
            </div>
          </div>
          <!--container-->
          <div id='top-barnbt'>
            <div class='containernbt'>
              <!-- main menu start -->
              <nav id='top-menunbt'>
                <div class='menunbt'>
                  <ul>
                    <li>
                      <a expr:href='data:blog.homepageUrl'>
                        Home
                      </a>
                    </li>
                    <li>
                      <a href='#'>
                        Productos
                      </a>
                    </li>
                    <li>
                     <a href='http://willduran.blogspot.com/p/quienes-somos.html'>
                        Quienes Somos
                      </a>
                    </li>
                    <li>
                      <a href='http://willduran.blogspot.com/p/servi.html'>
                        Servicios Prestados
                      </a>
                    </li>
                    <li>
                      <a href='http://willduran.blogspot.com/p/galeria_9.html'>
                        Galeria
                      </a>
                    </li>
                  </ul>
                </div>
              </nav>
              <!-- main menu end -->
            </div>
          </div>
        </div>
      </header>
      <!-- #masthead -->
      <div class='mega-containernbt'>
        <div class='site-contentnbt containernbt' id='contentnbt'>
          <div class='content-areasnbt col-md-8' id='primarynbt'>
            <div class='site-mainnbt' id='mainnbt' role='main'>
              <b:section class='mainblogsec' id='mainblogsec' showaddelement='no'>
                <b:widget id='Blog1' locked='true' title='Entradas del blog' type='Blog' version='1' visible='true'>
                  <b:includable id='main' var='top'>
                    <b:if cond='data:mobile == &quot;false&quot;'>
                      <!-- posts -->
                      <div class='blog-posts hfeed'>
                        <b:include data='top' name='status-message'/>
                        <data:defaultAdStart/>
                        <b:loop values='data:posts' var='post'>
                          <b:if cond='data:post.isDateStart'>
                            <b:if cond='data:post.isFirstPost == &quot;false&quot;'>
                              &lt;/div&gt;&lt;/div&gt;
                            </b:if>
                          </b:if>
                          <b:if cond='data:post.isDateStart'>
                            &lt;div class=&quot;date-outer&quot;&gt;
                          </b:if>
                          <b:if cond='data:post.dateHeader'>
                            <h2 class='date-header'>
                              <span>
                                <data:post.dateHeader/>
                              </span>
                            </h2>
                          </b:if>
                          <b:if cond='data:post.isDateStart'>
                            &lt;div class=&quot;date-posts&quot;&gt;
                          </b:if>
                          <div class='post-outer'>
                            <b:include data='post' name='post'/>
                            <b:if cond='data:blog.pageType == &quot;static_page&quot;'>
                              <b:include data='post' name='comment_picker'/>
                            </b:if>
                            <b:if cond='data:blog.pageType == &quot;item&quot;'>
                              <b:include data='post' name='comment_picker'/>
                            </b:if>
                          </div>
                          <b:if cond='data:post.includeAd'>
                            <b:if cond='data:post.isFirstPost'>
                              <data:defaultAdEnd/>
                              <b:else/>
                              <data:adEnd/>
                            </b:if>
                            <div class='inline-ad'>
                              <data:adCode/>
                            </div>
                            <data:adStart/>
                          </b:if>
                        </b:loop>
                        <b:if cond='data:numPosts != 0'>
                          &lt;/div&gt;&lt;/div&gt;
                        </b:if>
                        <data:adEnd/>
                      </div>
                      <div style='clear: both;'/>
                      <b:if cond='data:blog.pageType != &quot;item&quot;'>
                        <!-- navigation -->
                        <b:include name='nextprev'/>
                      </b:if>
                      <!-- feed links -->
                      <b:if cond='data:top.showStars'>
                        <script src='//www.google.com/jsapi' type='text/javascript'/>
                        <script type='text/javascript'>
                          google.load(&quot;annotations&quot;, &quot;1&quot;, {&quot;locale&quot;: &quot;<data:top.languageCode/>&quot;});
                          function initialize() {
                            google.annotations.setApplicationId(<data:top.blogspotReviews/>);
                            google.annotations.createAll();
                            google.annotations.fetch();
                          }
                          google.setOnLoadCallback(initialize);
                        </script>
                      </b:if>
                      <b:else/>
                      <b:include name='mobile-main'/>
                    </b:if>
                    <b:if cond='data:top.showDummy'>
                      <data:top.dummyBootstrap/>
                    </b:if>
                  </b:includable>
                  <b:includable id='backlinkDeleteIcon' var='backlink'>
                    <span expr:class='&quot;item-control &quot; + data:backlink.adminClass'>
                      <a expr:href='data:backlink.deleteUrl' expr:title='data:top.deleteBacklinkMsg'>
                        <img src='//www.blogger.com/img/icon_delete13.gif'/>
                      </a>
                    </span>
                  </b:includable>
                  <b:includable id='backlinks' var='post'>
                    <a name='links'/>
                    <h4>
                      <data:post.backlinksLabel/>
                    </h4>
                    <b:if cond='data:post.numBacklinks != 0'>
                      <dl class='comments-block' id='comments-block'>
                        <b:loop values='data:post.backlinks' var='backlink'>
                          <div class='collapsed-backlink backlink-control'>
                            <dt class='comment-title'>
                              <span class='backlink-toggle-zippy'>
                                &#160;
                              </span>
                              <a expr:href='data:backlink.url' rel='nofollow'>
                                <data:backlink.title/>
                              </a>
                              <b:include data='backlink' name='backlinkDeleteIcon'/>
                            </dt>
                            <dd class='comment-body collapseable'>
                              <data:backlink.snippet/>
                            </dd>
                            <dd class='comment-footer collapseable'>
                              <span class='comment-author'>
                                <data:post.authorLabel/>
                                <data:backlink.author/>
                              </span>
                              <span class='comment-timestamp'>
                                <data:post.timestampLabel/>
                                <data:backlink.timestamp/>
                              </span>
                            </dd>
                          </div>
                        </b:loop>
                      </dl>
                    </b:if>
                    <p class='comment-footer'>
                      <a class='comment-link' expr:href='data:post.createLinkUrl' expr:id='data:widget.instanceId + &quot;_backlinks-create-link&quot;' target='_blank'>
                        <data:post.createLinkLabel/>
                      </a>
                    </p>
                  </b:includable>
                  <b:includable id='comment-form' var='post'>
                    <div class='comment-form'>
                      <a name='comment-form'/>
                      <b:if cond='data:mobile'>
                        <h4 id='comment-post-message'>
                          <a expr:id='data:widget.instanceId + &quot;_comment-editor-toggle-link&quot;' href='javascript:void(0)'>
                            <data:postCommentMsg/>
                          </a>
                        </h4>
                        <p>
                          <data:blogCommentMessage/>
                        </p>
                        <data:blogTeamBlogMessage/>
                        <a expr:href='data:post.commentFormIframeSrc' id='comment-editor-src'/>
                        <iframe allowtransparency='true' class='blogger-iframe-colorize blogger-comment-from-post' frameborder='0' height='410' id='comment-editor' name='comment-editor' src='' style='display: none' width='100%'/>
                        <b:else/>
                        <h4 id='comment-post-message'>
                          <data:postCommentMsg/>
                        </h4>
                        <p>
                          <data:blogCommentMessage/>
                        </p>
                        <data:blogTeamBlogMessage/>
                        <a expr:href='data:post.commentFormIframeSrc' id='comment-editor-src'/>
                        <iframe allowtransparency='true' class='blogger-iframe-colorize blogger-comment-from-post' frameborder='0' height='410' id='comment-editor' name='comment-editor' src='' width='100%'/>
                      </b:if>
                      <data:post.friendConnectJs/>
                      <data:post.cmtfpIframe/>
                      <script type='text/javascript'>
                        BLOG_CMT_createIframe(&#39;<data:post.appRpcRelayPath/>&#39;, &#39;<data:post.communityId/>&#39;);
                      </script>
                    </div>
                  </b:includable>
                  <b:includable id='commentDeleteIcon' var='comment'>
                    <span expr:class='&quot;item-control &quot; + data:comment.adminClass'>
                      <b:if cond='data:showCmtPopup'>
                        <div class='goog-toggle-button'>
                          <div class='goog-inline-block comment-action-icon'/>
                        </div>
                        <b:else/>
                        <a class='comment-delete' expr:href='data:comment.deleteUrl' expr:title='data:top.deleteCommentMsg'>
                          <img src='//www.blogger.com/img/icon_delete13.gif'/>
                        </a>
                      </b:if>
                    </span>
                  </b:includable>
                  <b:includable id='comment_count_picker' var='post'>
                    <b:if cond='data:post.commentSource == 1'>
                      <span class='cmt_count_iframe_holder' expr:data-count='data:post.numComments' expr:data-onclick='data:post.addCommentOnclick' expr:data-post-url='data:post.url' expr:data-url='data:post.canonicalUrl'>
                      </span>
                      <b:else/>
                      <a class='comment-link' expr:href='data:post.addCommentUrl' expr:onclick='data:post.addCommentOnclick'>
                        <data:post.commentLabelFull/>
                        :
                      </a>
                    </b:if>
                  </b:includable>
                  <b:includable id='comment_picker' var='post'>
                    <b:if cond='data:post.commentSource == 1'>
                      <b:include data='post' name='iframe_comments'/>
                      <b:else/>
                      <b:if cond='data:post.showThreadedComments'>
                        <b:include data='post' name='threaded_comments'/>
                        <b:else/>
                        <b:include data='post' name='comments'/>
                      </b:if>
                    </b:if>
                  </b:includable>
                  <b:includable id='comments' var='post'>
                    <div class='comments' id='comments'>
                      <a name='comments'/>
                      <b:if cond='data:post.allowComments'>
                        <h4>
                          <b:if cond='data:post.numComments == 1'>
                            1 
                            <data:commentLabel/>
                            :
                            <b:else/>
                            <data:post.numComments/>
                            <data:commentLabelPlural/>
                            :
                          </b:if>
                        </h4>
                        <b:if cond='data:post.commentPagingRequired'>
                          <span class='paging-control-container'>
                            <a expr:class='data:post.oldLinkClass' expr:href='data:post.oldestLinkUrl'>
                              <data:post.oldestLinkText/>
                            </a>
                            &#160;
                            <a expr:class='data:post.oldLinkClass' expr:href='data:post.olderLinkUrl'>
                              <data:post.olderLinkText/>
                            </a>
                            &#160;
                            <data:post.commentRangeText/>
                            &#160;
                            <a expr:class='data:post.newLinkClass' expr:href='data:post.newerLinkUrl'>
                              <data:post.newerLinkText/>
                            </a>
                            &#160;
                            <a expr:class='data:post.newLinkClass' expr:href='data:post.newestLinkUrl'>
                              <data:post.newestLinkText/>
                            </a>
                          </span>
                        </b:if>
                        <div expr:id='data:widget.instanceId + &quot;_comments-block-wrapper&quot;'>
                          <dl expr:class='data:post.avatarIndentClass' id='comments-block'>
                            <b:loop values='data:post.comments' var='comment'>
                              <dt expr:class='&quot;comment-author &quot; + data:comment.authorClass' expr:id='data:comment.anchorName'>
                                <b:if cond='data:comment.favicon'>
                                  <img expr:src='data:comment.favicon' height='16px' style='margin-bottom:-2px;' width='16px'/>
                                </b:if>
                                <a expr:name='data:comment.anchorName'/>
                                <b:if cond='data:blog.enabledCommentProfileImages'>
                                  <data:comment.authorAvatarImage/>
                                </b:if>
                                <b:if cond='data:comment.authorUrl'>
                                  <a expr:href='data:comment.authorUrl' rel='nofollow'>
                                    <data:comment.author/>
                                  </a>
                                  <b:else/>
                                  <data:comment.author/>
                                </b:if>
                                <data:commentPostedByMsg/>
                              </dt>
                              <dd class='comment-body' expr:id='data:widget.instanceId + data:comment.cmtBodyIdPostfix'>
                                <b:if cond='data:comment.isDeleted'>
                                  <span class='deleted-comment'>
                                    <data:comment.body/>
                                  </span>
                                  <b:else/>
                                  <p>
                                    <data:comment.body/>
                                  </p>
                                </b:if>
                              </dd>
                              <dd class='comment-footer'>
                                <span class='comment-timestamp'>
                                  <a expr:href='data:comment.url' title='comment permalink'>
                                    <data:comment.timestamp/>
                                  </a>
                                  <b:include data='comment' name='commentDeleteIcon'/>
                                </span>
                              </dd>
                            </b:loop>
                          </dl>
                        </div>
                        <b:if cond='data:post.commentPagingRequired'>
                          <span class='paging-control-container'>
                            <a expr:class='data:post.oldLinkClass' expr:href='data:post.oldestLinkUrl'>
                              <data:post.oldestLinkText/>
                            </a>
                            <a expr:class='data:post.oldLinkClass' expr:href='data:post.olderLinkUrl'>
                              <data:post.olderLinkText/>
                            </a>
                            &#160;
                            <data:post.commentRangeText/>
                            &#160;
                            <a expr:class='data:post.newLinkClass' expr:href='data:post.newerLinkUrl'>
                              <data:post.newerLinkText/>
                            </a>
                            <a expr:class='data:post.newLinkClass' expr:href='data:post.newestLinkUrl'>
                              <data:post.newestLinkText/>
                            </a>
                          </span>
                        </b:if>
                        <p class='comment-footer'>
                          <b:if cond='data:post.embedCommentForm'>
                            <b:if cond='data:post.allowNewComments'>
                              <b:include data='post' name='comment-form'/>
                              <b:else/>
                              <data:post.noNewCommentsText/>
                            </b:if>
                            <b:else/>
                            <b:if cond='data:post.allowComments'>
                              <a expr:href='data:post.addCommentUrl' expr:onclick='data:post.addCommentOnclick'>
                                <data:postCommentMsg/>
                              </a>
                            </b:if>
                          </b:if>
                        </p>
                      </b:if>
                      <b:if cond='data:showCmtPopup'>
                        <div id='comment-popup'>
                          <iframe allowtransparency='true' frameborder='0' id='comment-actions' name='comment-actions' scrolling='no'>
                          </iframe>
                        </div>
                      </b:if>
                      <div id='backlinks-container'>
                        <div expr:id='data:widget.instanceId + &quot;_backlinks-container&quot;'>
                          <b:if cond='data:post.showBacklinks'>
                            <b:include data='post' name='backlinks'/>
                          </b:if>
                        </div>
                      </div>
                    </div>
                  </b:includable>
                  <b:includable id='feedLinks'>
                    <b:if cond='data:blog.pageType != &quot;item&quot;'>
                      <!-- Blog feed links -->
                      <b:if cond='data:feedLinks'>
                        <div class='blog-feeds'>
                          <b:include data='feedLinks' name='feedLinksBody'/>
                        </div>
                      </b:if>
                      <b:else/>
                      <!--Post feed links -->
                      <div class='post-feeds'>
                        <b:loop values='data:posts' var='post'>
                          <b:if cond='data:post.allowComments'>
                            <b:if cond='data:post.feedLinks'>
                              <b:include data='post.feedLinks' name='feedLinksBody'/>
                            </b:if>
                          </b:if>
                        </b:loop>
                      </div>
                    </b:if>
                  </b:includable>
                  <b:includable id='feedLinksBody' var='links'>
                    <div class='feed-links'>
                      <data:feedLinksMsg/>
                      <b:loop values='data:links' var='f'>
                        <a class='feed-link' expr:href='data:f.url' expr:type='data:f.mimeType' target='_blank'>
                          <data:f.name/>
                          (
                          <data:f.feedType/>
                          )
                        </a>
                      </b:loop>
                    </div>
                  </b:includable>
                  <b:includable id='iframe_comments' var='post'>
                    <b:if cond='data:post.allowComments'>
                      <script expr:src='data:post.commentSrc' type='text/javascript'/>
                      <div class='cmt_iframe_holder'/>
                      <b:if cond='data:post.embedCommentForm == &quot;false&quot;'>
                        <a expr:href='data:post.addCommentUrl' expr:onclick='data:post.addCommentOnclick'>
                          <data:postCommentMsg/>
                        </a>
                      </b:if>
                    </b:if>
                  </b:includable>
                  <b:includable id='mobile-index-post' var='post'>
                    <div class='mobile-date-outer date-outer'>
                      <b:if cond='data:post.dateHeader'>
                        <div class='date-header'>
                          <span>
                            <data:post.dateHeader/>
                          </span>
                        </div>
                      </b:if>
                      <div class='mobile-post-outer'>
                        <a expr:href='data:post.url'>
                          <h3 class='mobile-index-title entry-title'>
                            <data:post.title/>
                          </h3>
                          <div class='mobile-index-arrow'>
                            &amp;rsaquo;
                          </div>
                          <div class='mobile-index-contents'>
                            <b:if cond='data:post.thumbnailUrl'>
                              <div class='mobile-index-thumbnail'>
                                <div class='Image'>
                                  <img expr:src='data:post.thumbnailUrl'/>
                                </div>
                              </div>
                            </b:if>
                            <div class='post-body'>
                              <b:if cond='data:post.snippet'>
                                <data:post.snippet/>
                              </b:if>
                            </div>
                          </div>
                          <div style='clear: both;'/>
                        </a>
                        <div class='mobile-index-comment'>
                          <b:if cond='data:blog.pageType != &quot;static_page&quot;'>
                            <b:if cond='data:post.allowComments'>
                              <b:if cond='data:post.numComments != 0'>
                                <a class='comment-link' expr:href='data:post.addCommentUrl' expr:onclick='data:post.addCommentOnclick'>
                                  <b:if cond='data:post.numComments == 1'>
                                    1 
                                    <data:top.commentLabel/>
                                    <b:else/>
                                    <data:post.numComments/>
                                    <data:top.commentLabelPlural/>
                                  </b:if>
                                </a>
                              </b:if>
                            </b:if>
                          </b:if>
                        </div>
                      </div>
                    </div>
                  </b:includable>
                  <b:includable id='mobile-main' var='top'>
                    <!-- posts -->
                    <div class='blog-posts hfeed'>
                      <b:include data='top' name='status-message'/>
                      <b:if cond='data:blog.pageType == &quot;index&quot;'>
                        <b:loop values='data:posts' var='post'>
                          <b:include data='post' name='mobile-index-post'/>
                        </b:loop>
                        <b:else/>
                        <b:loop values='data:posts' var='post'>
                          <b:include data='post' name='mobile-post'/>
                        </b:loop>
                      </b:if>
                    </div>
                    <b:include name='mobile-nextprev'/>
                  </b:includable>
                  <b:includable id='mobile-nextprev'>
                    <div class='blog-pager' id='blog-pager'>
                      <b:if cond='data:newerPageUrl'>
                        <div class='mobile-link-button' id='blog-pager-newer-link'>
                          <a class='blog-pager-newer-link' expr:href='data:newerPageUrl' expr:id='data:widget.instanceId + &quot;_blog-pager-newer-link&quot;' expr:title='data:newerPageTitle'>
                            &amp;lsaquo;
                          </a>
                        </div>
                      </b:if>
                      <b:if cond='data:olderPageUrl'>
                        <div class='mobile-link-button' id='blog-pager-older-link'>
                          <a class='blog-pager-older-link' expr:href='data:olderPageUrl' expr:id='data:widget.instanceId + &quot;_blog-pager-older-link&quot;' expr:title='data:olderPageTitle'>
                            &amp;rsaquo;
                          </a>
                        </div>
                      </b:if>
                      <div class='mobile-link-button' id='blog-pager-home-link'>
                        <a class='home-link' expr:href='data:blog.homepageUrl'>
                          <data:homeMsg/>
                        </a>
                      </div>
                      <div class='mobile-desktop-link'>
                        <a class='home-link' expr:href='data:desktopLinkUrl'>
                          <data:desktopLinkMsg/>
                        </a>
                      </div>
                    </div>
                    <div class='clear'/>
                  </b:includable>
                  <b:includable id='mobile-post' var='post'>
                    <div class='date-outer'>
                      <b:if cond='data:post.dateHeader'>
                        <h2 class='date-header'>
                          <span>
                            <data:post.dateHeader/>
                          </span>
                        </h2>
                      </b:if>
                      <div class='date-posts'>
                        <div class='post-outer'>
                          <div class='post hentry uncustomized-post-template'>
                            <a expr:name='data:post.id'/>
                            <b:if cond='data:post.title'>
                              <h3 class='post-title entry-title'>
                                <b:if cond='data:post.link'>
                                  <a expr:href='data:post.link'>
                                    <data:post.title/>
                                  </a>
                                  <b:else/>
                                  <b:if cond='data:post.url'>
                                    <b:if cond='data:blog.url != data:post.url'>
                                      <a expr:href='data:post.url'>
                                        <data:post.title/>
                                      </a>
                                      <b:else/>
                                      <data:post.title/>
                                    </b:if>
                                    <b:else/>
                                    <data:post.title/>
                                  </b:if>
                                </b:if>
                              </h3>
                            </b:if>
                            <div class='post-header'>
                              <div class='post-header-line-1'/>
                            </div>
                            <div class='post-body entry-content' expr:id='&quot;post-body-&quot; + data:post.id'>
                              <data:post.body/>
                              <div style='clear: both;'/>
                              <!-- clear for photos floats -->
                            </div>
                            <div class='post-footer'>
                              <div class='post-footer-line post-footer-line-1'>
                                <span class='post-author vcard'>
                                  <b:if cond='data:top.showAuthor'>
                                    <b:if cond='data:post.authorProfileUrl'>
                                      <span class='fn'>
                                        <a expr:href='data:post.authorProfileUrl' rel='author' title='author profile'>
                                          <data:post.author/>
                                        </a>
                                      </span>
                                      <b:else/>
                                      <span class='fn'>
                                        <data:post.author/>
                                      </span>
                                    </b:if>
                                  </b:if>
                                </span>
                                <span class='post-timestamp'>
                                  <b:if cond='data:top.showTimestamp'>
                                    <data:top.timestampLabel/>
                                    <b:if cond='data:post.url'>
                                      <a class='timestamp-link' expr:href='data:post.url' rel='bookmark' title='permanent link'>
                                        <abbr class='published' expr:title='data:post.timestampISO8601'>
                                          <data:post.timestamp/>
                                        </abbr>
                                      </a>
                                    </b:if>
                                  </b:if>
                                </span>
                                <span class='post-comment-link'>
                                  <b:if cond='data:blog.pageType != &quot;item&quot;'>
                                    <b:if cond='data:blog.pageType != &quot;static_page&quot;'>
                                      <b:if cond='data:post.allowComments'>
                                        <a class='comment-link' expr:href='data:post.addCommentUrl' expr:onclick='data:post.addCommentOnclick'>
                                          <b:if cond='data:post.numComments == 1'>
                                            1 
                                            <data:top.commentLabel/>
                                            <b:else/>
                                            <data:post.numComments/>
                                            <data:top.commentLabelPlural/>
                                          </b:if>
                                        </a>
                                      </b:if>
                                    </b:if>
                                  </b:if>
                                </span>
                              </div>
                              <div class='post-footer-line post-footer-line-2'>
                                <b:if cond='data:top.showMobileShare'>
                                  <div class='mobile-link-button goog-inline-block' id='mobile-share-button'>
                                    <a href='javascript:void(0);'>
                                      <data:shareMsg/>
                                    </a>
                                  </div>
                                </b:if>
                                <b:if cond='data:top.showDummy'>
                                  <div class='goog-inline-block dummy-container'>
                                    <data:post.dummyTag/>
                                  </div>
                                </b:if>
                              </div>
                            </div>
                          </div>
                          <b:if cond='data:blog.pageType == &quot;static_page&quot;'>
                            <b:include data='post' name='comment_picker'/>
                          </b:if>
                          <b:if cond='data:blog.pageType == &quot;item&quot;'>
                            <b:include data='post' name='comment_picker'/>
                          </b:if>
                        </div>
                      </div>
                    </div>
                  </b:includable>
                  <b:includable id='nextprev'>
                    <div class='blog-pager' id='blog-pager'>
                      <b:if cond='data:newerPageUrl'>
                        <span id='blog-pager-newer-link'>
                          <a class='blog-pager-newer-link' expr:href='data:newerPageUrl' expr:id='data:widget.instanceId + &quot;_blog-pager-newer-link&quot;' expr:title='data:newerPageTitle'>
                            <data:newerPageTitle/>
                          </a>
                        </span>
                      </b:if>
                      <b:if cond='data:olderPageUrl'>
                        <span id='blog-pager-older-link'>
                          <a class='blog-pager-older-link' expr:href='data:olderPageUrl' expr:id='data:widget.instanceId + &quot;_blog-pager-older-link&quot;' expr:title='data:olderPageTitle'>
                            <data:olderPageTitle/>
                          </a>
                        </span>
                      </b:if>
                      <a class='home-link' expr:href='data:blog.homepageUrl'>
                        <data:homeMsg/>
                      </a>
                      <b:if cond='data:mobileLinkUrl'>
                        <div class='blog-mobile-link'>
                          <a expr:href='data:mobileLinkUrl'>
                            <data:mobileLinkMsg/>
                          </a>
                        </div>
                      </b:if>
                    </div>
                    <div class='clear'/>
                  </b:includable>
                  <b:includable id='post' var='post'>
                    <article class='col-md-12 col-sm-12 gridnbt freak post hentry' itemprop='blogPost' itemscope='itemscope' itemtype='http://schema.org/BlogPosting'>
                      <b:if cond='data:post.firstImageUrl'>
                        <meta expr:content='data:post.firstImageUrl' itemprop='image'/>
                      </b:if>
                      <a expr:name='data:post.id'/>
                      <header class='entry-header'>
                        <h2 class='post-title entry-title' itemprop='name'>
                          <b:if cond='data:post.link'>
                            <a expr:href='data:post.link'>
                              <data:post.title/>
                            </a>
                            <b:else/>
                            <b:if cond='data:post.url'>
                              <a expr:href='data:post.url'>
                                <data:post.title/>
                              </a>
                              <b:else/>
                              <data:post.title/>
                            </b:if>
                          </b:if>
                        </h2>
                        <b:if cond='data:blog.pageType != &quot;static_page&quot;'>
                          <div class='entry-metanbt'>
                            <b:if cond='data:top.showAuthor'>
                              <span class='post-author vcard'>
                                Posteado Por: 
                                <b:if cond='data:post.authorProfileUrl'>
                                  <span class='fn' itemprop='author' itemscope='itemscope' itemtype='http://schema.org/Person'>
                                    <meta expr:content='data:post.authorProfileUrl' itemprop='url'/>
                                    <a class='g-profile' expr:href='data:post.authorProfileUrl' rel='author' title='author profile'>
                                      <span itemprop='name'>
                                        <data:post.author/>
                                      </span>
                                    </a>
                                  </span>
                                  <b:else/>
                                  <span class='fn' itemprop='author' itemscope='itemscope' itemtype='http://schema.org/Person'>
                                    <span itemprop='name'>
                                      <data:post.author/>
                                    </span>
                                  </span>
                                </b:if>
                              </span>
                              &amp;nbsp;
                            </b:if>
                            <b:if cond='data:top.showTimestamp'>
                              on 
                              <b:if cond='data:post.url'>
                                <meta expr:content='data:post.canonicalUrl' itemprop='url'/>
                                <a class='timestamp-link' expr:href='data:post.url' rel='bookmark' title='permanent link'>
                                  <span class='published updated' expr:title='data:post.timestampISO8601' itemprop='datePublished'>
                                    <data:post.timestamp/>
                                  </span>
                                </a>
                              </b:if>
                              &amp;nbsp;
                            </b:if>
                            <b:if cond='data:post.labels'>
                              | 
                              <b:loop values='data:post.labels' var='label'>
                                <a expr:href='data:label.url' rel='tag'>
                                  <data:label.name/>
                                </a>
                                <b:if cond='data:label.isLast != &quot;true&quot;'>
                                  , 
                                </b:if>
                              </b:loop>
                              &amp;nbsp;
                            </b:if>
                            <b:if cond='data:post.allowComments'>
                              | 
                              <a expr:href='data:post.addCommentUrl' expr:onclick='data:post.addCommentOnclick'>
                                <b:if cond='data:post.numComments == 0'>
                                  No Comentar
                                </b:if>
                                <b:if cond='data:post.numComments == 1'>
                                  1 comment
                                </b:if>
                                <b:if cond='data:post.numComments &gt;= 2'>
                                  <data:post.numComments/>
                                  comments
                                </b:if>
                              </a>
                              &amp;nbsp;
                            </b:if>
                            <b:include data='post' name='postQuickEdit'/>
                          </div>
                        </b:if>
                      </header>
                      <div class='post-header-line-1'/>
                      <div class='post-body entry-content' expr:id='&quot;post-body-&quot; + data:post.id' itemprop='articleBody'>
                        <b:if cond='data:blog.pageType != &quot;static_page&quot;'>
                          <b:if cond='data:blog.pageType != &quot;item&quot;'>
                            <div expr:id='&quot;summary&quot; + data:post.id'>
                              <data:post.body/>
                            </div>
                            <script type='text/javascript'>
                              createSummaryAndThumb(&quot;summary<data:post.id/>&quot;);</script>
                          </b:if>
                        </b:if>
                        <b:if cond='data:blog.pageType == &quot;item&quot;'>
                          <data:post.body/>
                        </b:if>
                        <b:if cond='data:blog.pageType == &quot;static_page&quot;'>
                          <data:post.body/>
                        </b:if>
                        <b:if cond='data:blog.pageType != &quot;static_page&quot;'>
                          <b:if cond='data:blog.pageType != &quot;item&quot;'>
                            <div style='float:right;margin-top:2px;'>
                              <a class='readmorenbt' expr:href='data:post.url'>
                                Ver Mas
                              </a>
                            </div>
                          </b:if>
                        </b:if>
                        <div style='clear: both;'/>
                        <!-- clear for photos floats -->
                        <b:if cond='data:blog.pageType != &quot;static_page&quot;'>
                          <b:if cond='data:blog.pageType != &quot;item&quot;'>
                            <div class='pbtsharethisbutt'>
                              <ul class='pbt-social-icons'>
                                <li class='Share-this-arti'>
                                  Compartir este Blog:&amp;nbsp;&amp;nbsp;
                                </li>
                                <li class='pbtfacebook'>
                                  <a expr:href='&quot;http://www.facebook.com/share.php?v=4&amp;src=bm&amp;u=&quot; + data:post.url + &quot;&amp;t=&quot; + data:post.title' onclick='window.open(this.href,&quot;sharer&quot;,&quot;toolbar=0,status=0,width=626,height=436&quot;); return false;' rel='nofollow' target='_blank' title='Share this on Facebook'>
                                    <i class='fa fa-facebook-square'/>
                                    &amp;nbsp;Facebook
                                  </a>
                                </li>
                                <li class='pbttwitter'>
                                  <a expr:href='&quot;http://twitter.com/home?status=&quot; + data:post.title + &quot; -- &quot; + data:post.url' rel='nofollow' target='_blank' title='Tweet This!'>
                                    <i class='fa fa-twitter-square'/>
                                    &amp;nbsp;Twitter
                                  </a>
                                </li>
                                <li class='pbtgoogle'>
                                  <a expr:href='&quot;https://plus.google.com/share?url=&quot; + data:post.url' onclick='javascript:window.open(this.href,   &quot;&quot;, &quot;menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600&quot;);return false;' rel='nofollow' target='_blank' title='Share this on Google+'>
                                    <i class='fa fa-google-plus-square'/>
                                    &amp;nbsp;Google+
                                  </a>
                                </li>
                                <li class='pbtstumbleupon'>
                                  <a expr:href='&quot;http://www.stumbleupon.com/submit?url=&quot; + data:post.url + &quot;&amp;title=&quot; + data:post.title' rel='nofollow' target='_blank' title='Stumble upon something good? Share it on StumbleUpon'>
                                    <i class='fa fa-stumbleupon-circle'/>
                                    &amp;nbsp;Stumble
                                  </a>
                                </li>
                                <li class='pbtdigg'>
                                  <a expr:href='&quot;http://digg.com/submit?phase=2&amp;url=&quot; + data:post.url + &quot;&amp;title=&quot; + data:post.title' rel='nofollow' target='_blank' title='Digg this!'>
                                    <i class='fa fa-digg'/>
                                    &amp;nbsp;Digg
                                  </a>
                                </li>
                              </ul>
                            </div>
                            <div style='clear: both;'/>
                          </b:if>
                        </b:if>
                        <b:if cond='data:blog.pageType == &quot;item&quot;'>
                          <div class='nbt-share-buttons'>
                            <ul>
                              <li class='nbt-twitterbtn'>
                                <a expr:href='&quot;http://twitter.com/home?status=&quot; + data:post.title + &quot; -- &quot; + data:post.url' rel='nofollow' target='_blank' title='Tweet This!'>
                                  <i class='fa fa-twitter'/>
                                  Tweet
                                </a>
                              </li>
                              <li class='nbt-facebookbtn'>
                                <a expr:href='&quot;http://www.facebook.com/share.php?v=4&amp;src=bm&amp;u=&quot; + data:post.url + &quot;&amp;t=&quot; + data:post.title' onclick='window.open(this.href,&quot;sharer&quot;,&quot;toolbar=0,status=0,width=626,height=436&quot;); return false;' rel='nofollow' target='_blank' title='Share this on Facebook'>
                                  <i class='fa fa-facebook'/>
                                  Like It
                                </a>
                              </li>
                              <li class='nbt-googlebtn'>
                                <a expr:href='&quot;https://plus.google.com/share?url=&quot; + data:post.url' onclick='javascript:window.open(this.href,   &quot;&quot;, &quot;menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600&quot;);return false;' rel='nofollow' target='_blank' title='Share this on Google+'>
                                  <i class='fa fa-google-plus'/>
                                  Google +
                                </a>
                              </li>
                            </ul>
                          </div>
                          <div style='clear: both;'/>
                        </b:if>
                      </div>
                      <b:if cond='data:blog.pageType == &quot;item&quot;'>
                        <div class='post-iconspbt'>
                          <span class='post-icons' style='padding-right:10px;'>
                            <!-- email post links -->
                            <b:if cond='data:post.emailPostUrl'>
                              <span class='item-action'>
                                <a expr:href='data:post.emailPostUrl' expr:title='data:top.emailPostMsg'>
                                  <img alt='' class='icon-action' height='13' src='http://img1.blogblog.com/img/icon18_email.gif' width='18'/>
                                </a>
                              </span>
                            </b:if>
                          </span>
                          <!-- share buttons -->
                          <div class='post-share-buttons goog-inline-block'>
                            <b:if cond='data:post.sharePostUrl'>
                              <b:include data='post' name='shareButtons'/>
                            </b:if>
                          </div>
                          <div style='clear: both;'/>
                        </div>
                      </b:if>
                      <b:if cond='data:blog.pageType == &quot;item&quot;'>
                        <div class='post-location post-locationpbt'>
                          <b:if cond='data:top.showLocation'>
                            <b:if cond='data:post.location'>
                              <data:postLocationLabel/>
                              <a expr:href='data:post.location.mapsUrl' target='_blank'>
                                <data:post.location.name/>
                              </a>
                            </b:if>
                          </b:if>
                        </div>
                      </b:if>
                      <b:if cond='data:blog.pageType == &quot;item&quot;'>
                        <b:if cond='data:post.authorAboutMe'>
                          <div class='author-profile' itemprop='author' itemscope='itemscope' itemtype='http://schema.org/Person'>
                            <b:if cond='data:post.authorPhoto.url'>
                              <img expr:src='data:post.authorPhoto.url' itemprop='image' width='50px'/>
                              <b:else/>
                              <img itemprop='image' src='http://1.bp.blogspot.com/-JNIOn2bYVAY/U-LrAZ5hx5I/AAAAAAAAMwU/qyca43soga8/s1600/no-avatar-50.png' width='50px'/>
                            </b:if>
                            <div>
                              <a class='g-profile' expr:href='data:post.authorProfileUrl' itemprop='url' rel='author' title='author profile'>
                                <span itemprop='name'>
                                  <data:post.author/>
                                </span>
                              </a>
                            </div>
                            <span itemprop='description'>
                              <data:post.authorAboutMe/>
                            </span>
                          </div>
                        </b:if>
                      </b:if>
                      <b:if cond='data:blog.pageType == &quot;item&quot;'>
                        <div class='related-postbwrap' id='bpostrelated-post'/>
                        <div style='clear: both;'/>
                        <script type='text/javascript'>
                          var labelArray = [<b:if cond='data:post.labels'><b:loop values='data:post.labels' var='label'>
                                            &quot;<data:label.name/>&quot;<b:if cond='data:label.isLast != &quot;true&quot;'>,</b:if>
                        </b:loop></b:if>];
                                            var relatedPostConfig = {
                                            homePage: &quot;<data:blog.homepageUrl/>&quot;,
                                            widgetTitle: &quot;&lt;h4&gt;Related Posts:&lt;/h4&gt;&quot;,
                                            numbrelatedPosts: 5,
                                            summaryLength: 150,
                                            titleLength: &quot;auto&quot;,
                                            thumbnailSize: 120,
                                            noImage: &quot;http://1.bp.blogspot.com/-sDo7ywcQb_E/VFGuLOiOzkI/AAAAAAAAMgk/HmDRWCIma4c/s1600/no-img-100.png&quot;,
                                            containerId: &quot;bpostrelated-post&quot;,
                                            newTabLink: false,
                                            moreText: &quot;Read More&quot;,
                                            widgetStyle: 3,
                                            callBack: function() {}
                                            };
                        </script>
                        <script type='text/javascript'>
                          //<![CDATA[
                          /*! Related Post Widget for Blogger by Taufik Nurrohman => http://gplus.to/tovic */
                          var randomRelatedIndex,showRelatedPost;(function(n,m,k){var d={widgetTitle:"<h4>Artikel Terkait:</h4>",widgetStyle:1,homePage:"http://www.dte.web.id",numbrelatedPosts:7,summaryLength:370,titleLength:"auto",thumbnailSize:72,noImage:"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAIAAACQd1PeAAAAA3NCSVQICAjb4U/gAAAADElEQVQImWOor68HAAL+AX7vOF2TAAAAAElFTkSuQmCC",containerId:"related-post",newTabLink:false,moreText:"Baca Selengkapnya",callBack:function(){}};for(var f in relatedPostConfig){d[f]=(relatedPostConfig[f]=="undefined")?d[f]:relatedPostConfig[f]}var j=function(a){var b=m.createElement("script");b.type="text/javascript";b.src=a;k.appendChild(b)},o=function(b,a){return Math.floor(Math.random()*(a-b+1))+b},l=function(a){var p=a.length,c,b;if(p===0){return false}while(--p){c=Math.floor(Math.random()*(p+1));b=a[p];a[p]=a[c];a[c]=b}return a},e=(typeof labelArray=="object"&&labelArray.length>0)?"/-/"+l(labelArray)[0]:"",h=function(b){var c=b.feed.openSearch$totalResults.$t-d.numbrelatedPosts,a=o(1,(c>0?c:1));j(d.homePage.replace(/\/$/,"")+"/feeds/posts/summary"+e+"?alt=json-in-script&orderby=updated&start-index="+a+"&max-results="+d.numbrelatedPosts+"&callback=showRelatedPost")},g=function(z){var s=document.getElementById(d.containerId),x=l(z.feed.entry),A=d.widgetStyle,c=d.widgetTitle+'<ul class="related-post-style-'+A+'">',b=d.newTabLink?' target="_blank"':"",y='<span style="display:block;clear:both;"></span>',v,t,w,r,u;if(!s){return}for(var q=0;q<d.numbrelatedPosts;q++){if(q==x.length){break}t=x[q].title.$t;w=(d.titleLength!=="auto"&&d.titleLength<t.length)?t.substring(0,d.titleLength)+"&hellip;":t;r=("media$thumbnail" in x[q]&&d.thumbnailSize!==false)?x[q].media$thumbnail.url.replace(/\/s[0-9]+(\-c)?/,"/s"+d.thumbnailSize+"-c"):d.noImage;u=("summary" in x[q]&&d.summaryLength>0)?x[q].summary.$t.replace(/<br ?\/?>/g," ").replace(/<.*?>/g,"").replace(/[<>]/g,"").substring(0,d.summaryLength)+"&hellip;":"";for(var p=0,a=x[q].link.length;p<a;p++){v=(x[q].link[p].rel=="alternate")?x[q].link[p].href:"#"}if(A==2){c+='<li><img alt="" class="related-post-item-thumbnail" src="'+r+'" width="'+d.thumbnailSize+'" height="'+d.thumbnailSize+'"><a class="related-post-item-title" title="'+t+'" href="'+v+'"'+b+">"+w+'</a><span class="related-post-item-summary"><span class="related-post-item-summary-text">'+u+'</span> <a href="'+v+'" class="related-post-item-more"'+b+">"+d.moreText+"</a></span>"+y+"</li>"}else{if(A==3||A==4){c+='<li class="related-post-item" tabindex="0"><a class="related-post-item-title" href="'+v+'"'+b+'><img alt="" class="related-post-item-thumbnail" src="'+r+'" width="'+d.thumbnailSize+'" height="'+d.thumbnailSize+'"></a><div class="related-post-item-tooltip"><a class="related-post-item-title" title="'+t+'" href="'+v+'"'+b+">"+w+"</a></div>"+y+"</li>"}else{if(A==5){c+='<li class="related-post-item" tabindex="0"><a class="related-post-item-wrapper" href="'+v+'" title="'+t+'"'+b+'><img alt="" class="related-post-item-thumbnail" src="'+r+'" width="'+d.thumbnailSize+'" height="'+d.thumbnailSize+'"><span class="related-post-item-tooltip">'+w+"</span></a>"+y+"</li>"}else{if(A==6){c+='<li><a class="related-post-item-title" title="'+t+'" href="'+v+'"'+b+">"+w+'</a><div class="related-post-item-tooltip"><img alt="" class="related-post-item-thumbnail" src="'+r+'" width="'+d.thumbnailSize+'" height="'+d.thumbnailSize+'"><span class="related-post-item-summary"><span class="related-post-item-summary-text">'+u+"</span></span>"+y+"</div></li>"}else{c+='<li><a title="'+t+'" href="'+v+'"'+b+">"+w+"</a></li>"}}}}}s.innerHTML=c+="</ul>"+y;d.callBack()};randomRelatedIndex=h;showRelatedPost=g;j(d.homePage.replace(/\/$/,"")+"/feeds/posts/summary"+e+"?alt=json-in-script&orderby=updated&max-results=0&callback=randomRelatedIndex")})(window,document,document.getElementsByTagName("head")[0]);
                          //]]>
                        </script>
                      </b:if>
                    </article>
                    <div style='clear: both;'/>
                    <b:if cond='data:blog.pageType == &quot;item&quot;'>
                      <!-- navigation -->
                      <b:include name='nextprev'/>
                    </b:if>
                  </b:includable>
                  <b:includable id='postQuickEdit' var='post'>
                    <b:if cond='data:post.editUrl'>
                      <span expr:class='&quot;item-control &quot; + data:post.adminClass'>
                        <a expr:href='data:post.editUrl' expr:title='data:top.editPostMsg'>
                          <img alt='' class='icon-action' height='18' src='http://img2.blogblog.com/img/icon18_edit_allbkg.gif' width='18'/>
                        </a>
                      </span>
                    </b:if>
                  </b:includable>
                  <b:includable id='shareButtons' var='post'>
                    <b:if cond='data:top.showEmailButton'>
                      <a class='goog-inline-block share-button sb-email' expr:href='data:post.sharePostUrl + &quot;&amp;target=email&quot;' expr:title='data:top.emailThisMsg' target='_blank'>
                        <span class='share-button-link-text'>
                          <data:top.emailThisMsg/>
                        </span>
                      </a>
                    </b:if>
                    <b:if cond='data:top.showBlogThisButton'>
                      <a class='goog-inline-block share-button sb-blog' expr:href='data:post.sharePostUrl + &quot;&amp;target=blog&quot;' expr:onclick='&quot;window.open(this.href, \&quot;_blank\&quot;, \&quot;height=270,width=475\&quot;); return false;&quot;' expr:title='data:top.blogThisMsg' target='_blank'>
                        <span class='share-button-link-text'>
                          <data:top.blogThisMsg/>
                        </span>
                      </a>
                    </b:if>
                    <b:if cond='data:top.showTwitterButton'>
                      <a class='goog-inline-block share-button sb-twitter' expr:href='data:post.sharePostUrl + &quot;&amp;target=twitter&quot;' expr:title='data:top.shareToTwitterMsg' target='_blank'>
                        <span class='share-button-link-text'>
                          <data:top.shareToTwitterMsg/>
                        </span>
                      </a>
                    </b:if>
                    <b:if cond='data:top.showFacebookButton'>
                      <a class='goog-inline-block share-button sb-facebook' expr:href='data:post.sharePostUrl + &quot;&amp;target=facebook&quot;' expr:onclick='&quot;window.open(this.href, \&quot;_blank\&quot;, \&quot;height=430,width=640\&quot;); return false;&quot;' expr:title='data:top.shareToFacebookMsg' target='_blank'>
                        <span class='share-button-link-text'>
                          <data:top.shareToFacebookMsg/>
                        </span>
                      </a>
                    </b:if>
                    <b:if cond='data:top.showOrkutButton'>
                      <a class='goog-inline-block share-button sb-orkut' expr:href='data:post.sharePostUrl + &quot;&amp;target=orkut&quot;' expr:title='data:top.shareToOrkutMsg' target='_blank'>
                        <span class='share-button-link-text'>
                          <data:top.shareToOrkutMsg/>
                        </span>
                      </a>
                    </b:if>
                    <b:if cond='data:top.showDummy'>
                      <div class='goog-inline-block dummy-container'>
                        <data:post.dummyTag/>
                      </div>
                    </b:if>
                  </b:includable>
                  <b:includable id='status-message'>
                    <b:if cond='data:navMessage'>
                      <div class='status-msg-wrap'>
                        <div class='status-msg-body'>
                          <data:navMessage/>
                        </div>
                        <div class='status-msg-border'>
                          <div class='status-msg-bg'>
                            <div class='status-msg-hidden'>
                              <data:navMessage/>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div style='clear: both;'/>
                    </b:if>
                  </b:includable>
                  <b:includable id='threaded-comment-form' var='post'>
                    <div class='comment-form'>
                      <a name='comment-form'/>
                      <b:if cond='data:mobile'>
                        <p>
                          <data:blogCommentMessage/>
                        </p>
                        <data:blogTeamBlogMessage/>
                        <a expr:href='data:post.commentFormIframeSrc' id='comment-editor-src'/>
                        <iframe allowtransparency='true' class='blogger-iframe-colorize blogger-comment-from-post' frameborder='0' height='410' id='comment-editor' name='comment-editor' src='' style='display: none' width='100%'/>
                        <b:else/>
                        <p>
                          <data:blogCommentMessage/>
                        </p>
                        <data:blogTeamBlogMessage/>
                        <a expr:href='data:post.commentFormIframeSrc' id='comment-editor-src'/>
                        <iframe allowtransparency='true' class='blogger-iframe-colorize blogger-comment-from-post' frameborder='0' height='410' id='comment-editor' name='comment-editor' src='' width='100%'/>
                      </b:if>
                      <data:post.friendConnectJs/>
                      <data:post.cmtfpIframe/>
                      <script type='text/javascript'>
                        BLOG_CMT_createIframe(&#39;<data:post.appRpcRelayPath/>&#39;, &#39;<data:post.communityId/>&#39;);
                      </script>
                    </div>
                  </b:includable>
                  <b:includable id='threaded_comment_js' var='post'>
                    <script async='async' expr:src='data:post.commentSrc' type='text/javascript'/>
                    <script type='text/javascript'>
                      (function() {
                        var items = <data:post.commentJso/>;
                        var msgs = <data:post.commentMsgs/>;
                        var config = <data:post.commentConfig/>;
                        // <![CDATA[
                        var cursor = null;
                        if (items && items.length > 0) {
                          cursor = parseInt(items[items.length - 1].timestamp) + 1;
                        }
                        var bodyFromEntry = function(entry) {
                          if (entry.gd$extendedProperty) {
                            for (var k in entry.gd$extendedProperty) {
                              if (entry.gd$extendedProperty[k].name == 'blogger.contentRemoved') {
                                return '<span class="deleted-comment">' + entry.content.$t + '</span>';
                              }
                            }
                          }
                          return entry.content.$t;
                        }
                        var parse = function(data) {
                          cursor = null;
                          var comments = [];
                          if (data && data.feed && data.feed.entry) {
                            for (var i = 0, entry; entry = data.feed.entry[i]; i++) {
                              var comment = {};
                              // comment ID, parsed out of the original id format
                              var id = /blog-(\d+).post-(\d+)/.exec(entry.id.$t);
                              comment.id = id ? id[2] : null;
                              comment.body = bodyFromEntry(entry);
                              comment.timestamp = Date.parse(entry.published.$t) + '';
                              if (entry.author && entry.author.constructor === Array) {
                                var auth = entry.author[0];
                                if (auth) {
                                  comment.author = {
                                    name: (auth.name ? auth.name.$t : undefined),
                                    profileUrl: (auth.uri ? auth.uri.$t : undefined),
                                    avatarUrl: (auth.gd$image ? auth.gd$image.src : undefined)
                                  };
                                }
                              }
                              if (entry.link) {
                                if (entry.link[2]) {
                                  comment.link = comment.permalink = entry.link[2].href;
                                }
                                if (entry.link[3]) {
                                  var pid = /.*comments\/default\/(\d+)\?.*/.exec(entry.link[3].href);
                                  if (pid && pid[1]) {
                                    comment.parentId = pid[1];
                                  }
                                }
                              }
                              comment.deleteclass = 'item-control blog-admin';
                              if (entry.gd$extendedProperty) {
                                for (var k in entry.gd$extendedProperty) {
                                  if (entry.gd$extendedProperty[k].name == 'blogger.itemClass') {
                                    comment.deleteclass += ' ' + entry.gd$extendedProperty[k].value;
                                  }
                                }
                              }
                              comments.push(comment);
                            }
                          }
                          return comments;
                        };
                        var paginator = function(callback) {
                          if (hasMore()) {
                            var url = config.feed + '?alt=json&v=2&orderby=published&reverse=false&max-results=50';
                            if (cursor) {
                              url += '&published-min=' + new Date(cursor).toISOString();
                            }
                            window.bloggercomments = function(data) {
                              var parsed = parse(data);
                              cursor = parsed.length < 50 ? null
                              : parseInt(parsed[parsed.length - 1].timestamp) + 1
                              callback(parsed);
                              window.bloggercomments = null;
                            }
                            url += '&callback=bloggercomments';
                            var script = document.createElement('script');
                            script.type = 'text/javascript';
                            script.src = url;
                            document.getElementsByTagName('head')[0].appendChild(script);
                          }
                        };
                        var hasMore = function() {
                          return !!cursor;
                        };
                        var getMeta = function(key, comment) {
                          if ('iswriter' == key) {
                            var matches = !!comment.author
                            && comment.author.name == config.authorName
                            && comment.author.profileUrl == config.authorUrl;
                            return matches ? 'true' : '';
                          } else if ('deletelink' == key) {
                            return config.baseUri + '/delete-comment.g?blogID='
                            + config.blogId + '&postID=' + comment.id;
                          } else if ('deleteclass' == key) {
                            return comment.deleteclass;
                          }
                          return '';
                        };
                        var replybox = null;
                        var replyUrlParts = null;
                        var replyParent = undefined;
                        var onReply = function(commentId, domId) {
                          if (replybox == null) {
                            // lazily cache replybox, and adjust to suit this style:
                            replybox = document.getElementById('comment-editor');
                            if (replybox != null) {
                              replybox.height = '250px';
                              replybox.style.display = 'block';
                              replyUrlParts = replybox.src.split('#');
                            }
                          }
                          if (replybox && (commentId !== replyParent)) {
                            document.getElementById(domId).insertBefore(replybox, null);
                            replybox.src = replyUrlParts[0]
                            + (commentId ? '&parentID=' + commentId : '')
                            + '#' + replyUrlParts[1];
                            replyParent = commentId;
                          }
                        };
                        var hash = (window.location.hash || '#').substring(1);
                        var startThread, targetComment;
                        if (/^comment-form_/.test(hash)) {
                          startThread = hash.substring('comment-form_'.length);
                        } else if (/^c[0-9]+$/.test(hash)) {
                          targetComment = hash.substring(1);
                        }
                        // Configure commenting API:
                        var configJso = {
                          'maxDepth': config.maxThreadDepth
                        };
                        var provider = {
                          'id': config.postId,
                          'data': items,
                          'loadNext': paginator,
                          'hasMore': hasMore,
                          'getMeta': getMeta,
                          'onReply': onReply,
                          'rendered': true,
                          'initComment': targetComment,
                          'initReplyThread': startThread,
                          'config': configJso,
                          'messages': msgs
                        };
                        var render = function() {
                          if (window.goog && window.goog.comments) {
                            var holder = document.getElementById('comment-holder');
                            window.goog.comments.render(holder, provider);
                          }
                        };
                        // render now, or queue to render when library loads:
                        if (window.goog && window.goog.comments) {
                          render();
                        } else {
                          window.goog = window.goog || {};
                          window.goog.comments = window.goog.comments || {};
                          window.goog.comments.loadQueue = window.goog.comments.loadQueue || [];
                          window.goog.comments.loadQueue.push(render);
                        }
                      })();
                      // ]]>
                    </script>
                  </b:includable>
                  <b:includable id='threaded_comments' var='post'>
                    <div class='comments' id='comments'>
                      <a name='comments'/>
                      <h4>
                        <data:post.commentLabelFull/>
                        :
                      </h4>
                      <div class='comments-content'>
                        <b:if cond='data:post.embedCommentForm'>
                          <b:include data='post' name='threaded_comment_js'/>
                        </b:if>
                        <div id='comment-holder'>
                          <data:post.commentHtml/>
                        </div>
                      </div>
                      <p class='comment-footer'>
                        <b:if cond='data:post.allowNewComments'>
                          <b:include data='post' name='threaded-comment-form'/>
                          <b:else/>
                          <data:post.noNewCommentsText/>
                        </b:if>
                      </p>
                      <b:if cond='data:showCmtPopup'>
                        <div id='comment-popup'>
                          <iframe allowtransparency='true' frameborder='0' id='comment-actions' name='comment-actions' scrolling='no'>
                          </iframe>
                        </div>
                      </b:if>
                      <div id='backlinks-container'>
                        <div expr:id='data:widget.instanceId + &quot;_backlinks-container&quot;'>
                          <b:if cond='data:post.showBacklinks'>
                            <b:include data='post' name='backlinks'/>
                          </b:if>
                        </div>
                      </div>
                    </div>
                  </b:includable>
                </b:widget>
              </b:section>
            </div>
            <!-- #main -->
          </div>
          <!-- #primary -->
          <div class='widget-areanbt col-md-4' id='secondarynbt' role='complementary'>
            <div class='widget widget_searchnbt'>
              <form action='/search' class='search-formnbt' method='get' role='search'>
                <label>
                  <span class='screen-reader-text'>
                    Search for:
                  </span>
                  <input class='search-fieldnbt' name='q' placeholder='Search' title='Search for:' type='search' value=''/>
                </label>
                <input class='search-submitnbt' type='submit' value='Search'/>
              </form>
            </div>
            <b:section class='sidebarrightsec' id='sidebarrightsec' preferred='yes'>
              <b:widget id='HTML1' locked='false' title='' type='HTML' version='1' visible='true'>
                <b:includable id='main'>
                  <!-- only display title if it's non-empty -->
                  <b:if cond='data:title != &quot;&quot;'>
                    <h2 class='title'>
                      <data:title/>
                    </h2>
                  </b:if>
                  <div class='widget-content'>
                    <data:content/>
                  </div>
                  <b:include name='quickedit'/>
                </b:includable>
              </b:widget>
              <b:widget id='PageList1' locked='false' title='Paginas' type='PageList' version='1' visible='true'>
                <b:includable id='main'>
                  <b:if cond='data:title != &quot;&quot;'>
                    <h2>
                      <data:title/>
                    </h2>
                  </b:if>
                  <div class='widget-content'>
                    <b:if cond='data:mobile'>
                      <select expr:id='data:widget.instanceId + &quot;_select&quot;'>
                        <b:loop values='data:links' var='link'>
                          <b:if cond='data:link.isCurrentPage'>
                            <option expr:value='data:link.href' selected='selected'>
                              <data:link.title/>
                            </option>
                            <b:else/>
                            <option expr:value='data:link.href'>
                              <data:link.title/>
                            </option>
                          </b:if>
                        </b:loop>
                      </select>
                      <span class='pagelist-arrow'>
                        &amp;#9660;
                      </span>
                      <b:else/>
                      <ul>
                        <b:loop values='data:links' var='link'>
                          <b:if cond='data:link.isCurrentPage'>
                            <li class='selected'>
                              <a expr:href='data:link.href'>
                                <data:link.title/>
                              </a>
                            </li>
                            <b:else/>
                            <li>
                              <a expr:href='data:link.href'>
                                <data:link.title/>
                              </a>
                            </li>
                          </b:if>
                        </b:loop>
                      </ul>
                    </b:if>
                    <b:include name='quickedit'/>
                  </div>
                </b:includable>
              </b:widget>
              <b:widget id='PlusOne1' locked='false' title='+1 Button' type='PlusOne' version='1' visible='true'>
                <b:includable id='main'>
                  <div class='widget-content'>
                    <g:plusone expr:annotation='data:annotation' expr:href='data:blog.canonicalHomepageUrl' expr:size='data:size' source='blogger:blog:plusone' width='250'/>
                    <script type='text/javascript'>
                      window.___gcfg = {&quot;lang&quot;: &quot;<data:language/>&quot;};
                      (function() {
                        var po = document.createElement(&#39;script&#39;); po.type = &#39;text/javascript&#39;;
                                                        po.async = true; po.src = &#39;https://apis.google.com/js/plusone.js&#39;;
                                                        var s = document.getElementsByTagName(&#39;script&#39;)[0];
                                                        s.parentNode.insertBefore(po, s);
                      })();
                    </script>
                  </div>
                </b:includable>
              </b:widget>
              <b:widget id='Attribution1' locked='false' title='' type='Attribution' visible='true'>
                <b:includable id='main'>
    <div class='widget-content' style='text-align: center;'>
      <b:if cond='data:attribution != &quot;&quot;'>
       <data:attribution/>
      </b:if>
    </div>

    <b:include name='quickedit'/>
  </b:includable>
              </b:widget>
              <b:widget id='Navbar1' locked='true' title='Barra de navegación' type='Navbar' version='1' visible='true'>
                <b:includable id='main'>&lt;script type=&quot;text/javascript&quot;&gt;
    function setAttributeOnload(object, attribute, val) {
      if(window.addEventListener) {
        window.addEventListener(&#39;load&#39;,
          function(){ object[attribute] = val; }, false);
      } else {
        window.attachEvent(&#39;onload&#39;, function(){ object[attribute] = val; });
      }
    }
  &lt;/script&gt;
&lt;div id=&quot;navbar-iframe-container&quot;&gt;&lt;/div&gt;
&lt;script type=&quot;text/javascript&quot; src=&quot;https://apis.google.com/js/plusone.js&quot;&gt;&lt;/script&gt;
&lt;script type=&quot;text/javascript&quot;&gt;
      gapi.load(&quot;gapi.iframes:gapi.iframes.style.bubble&quot;, function() {
        if (gapi.iframes &amp;&amp; gapi.iframes.getContext) {
          gapi.iframes.getContext().openChild({
              url: &#39;https://www.blogger.com/navbar.g?targetBlogID\x3d5485572333719558832\x26blogName\x3dBlog+Will\x26publishMode\x3dPUBLISH_MODE_BLOGSPOT\x26navbarType\x3dBLACK\x26layoutType\x3dLAYOUTS\x26searchRoot\x3dhttps://willduran.blogspot.com/search\x26blogLocale\x3des\x26v\x3d2\x26homepageUrl\x3dhttps://willduran.blogspot.com/\x26vt\x3d4962913307199519827&#39;,
              where: document.getElementById(&quot;navbar-iframe-container&quot;),
              id: &quot;navbar-iframe&quot;
          });
        }
      });
    &lt;/script&gt;&lt;script type=&quot;text/javascript&quot;&gt;
(function() {
var script = document.createElement(&#39;script&#39;);
script.type = &#39;text/javascript&#39;;
script.src = &#39;//pagead2.googlesyndication.com/pagead/js/google_top_exp.js&#39;;
var head = document.getElementsByTagName(&#39;head&#39;)[0];
if (head) {
head.appendChild(script);
}})();
&lt;/script&gt;
</b:includable>
              </b:widget>
            </b:section>
          </div>
          <!-- #secondary -->
        </div>
        <!-- #content -->
      </div>
      <!--.mega-container-->
      <div class='widget-areanbt' id='footer-sidebarnbt'>
        <div class='containernbt'>
          <div class='footer-column col-md-3 col-sm-6'>
            <b:section class='footercolsec' id='footercolsec1' showaddelement='yes'/>
          </div>
          <div class='footer-column col-md-3 col-sm-6'>
            <b:section class='footercolsec' id='footercolsec2' showaddelement='yes'/>
          </div>
          <div class='footer-column col-md-3 col-sm-6'>
            <b:section class='footercolsec' id='footercolsec3' showaddelement='yes'>
              <b:widget id='ContactForm1' locked='false' title='Contácteme' type='ContactForm' version='1' visible='true'>
                <b:includable id='main'>
                  <b:if cond='data:title != &quot;&quot;'>
                    <h2 class='title'>
                      <data:title/>
                    </h2>
                  </b:if>
                  <div class='contact-form-widget'>
                    <div class='form'>
                      <form name='contact-form'>
                        <p/>
                        <data:contactFormNameMsg/>
                        <br/>
                        <input class='contact-form-name' expr:id='data:widget.instanceId + &quot;_contact-form-name&quot;' name='name' size='30' type='text' value=''/>
                        <p/>
                        <data:contactFormEmailMsg/>
                        <span style='font-weight: bolder;'>
                          *
                        </span>
                        <br/>
                        <input class='contact-form-email' expr:id='data:widget.instanceId + &quot;_contact-form-email&quot;' name='email' size='30' type='text' value=''/>
                        <p/>
                        <data:contactFormMessageMsg/>
                        <span style='font-weight: bolder;'>
                          *
                        </span>
                        <br/>
                        <textarea class='contact-form-email-message' cols='25' expr:id='data:widget.instanceId + &quot;_contact-form-email-message&quot;' name='email-message' rows='5'/>
                        <p/>
                        <input class='contact-form-button contact-form-button-submit' expr:id='data:widget.instanceId + &quot;_contact-form-submit&quot;' expr:value='data:contactFormSendMsg' type='button'/>
                        <p/>
                        <div style='text-align: center; max-width: 222px; width: 100%'>
                          <p class='contact-form-error-message' expr:id='data:widget.instanceId + &quot;_contact-form-error-message&quot;'/>
                          <p class='contact-form-success-message' expr:id='data:widget.instanceId + &quot;_contact-form-success-message&quot;'/>
                        </div>
                      </form>
                    </div>
                  </div>
                  <b:include name='quickedit'/>
                </b:includable>
              </b:widget>
            </b:section>
          </div>
          <div class='footer-column col-md-3 col-sm-6'>
            <b:section class='footercolsec' id='footercolsec4' showaddelement='yes'/>
          </div>
        </div>
      </div>
      <footer class='site-footernbt' id='colophonnbt' role='contentinfo'>
        <div class='site-infonbt containernbt'>
          <!-- Do not edit or remove credits without our permission: newbloggerthemes.com -->
          Copyright &#169; 
          <script type='text/javascript'>
            var creditsyear = new Date();document.write(creditsyear.getFullYear());</script>
          <a expr:href='data:blog.homepageUrl'>
            <data:blog.title/>
          </a>
          | Gracias a 
          <a href='http://www.blogger.com/'>
            Blogger
          </a>
          <br/>
          Design by 
          <a href='http://rohitink.com/' target='_blank'>
            Rohit Tripathi
          </a>
          | Blogger Theme by 
          <a href='http://newbloggerthemes.com/' target='_blank' title='NewBloggerThemes.com'>
            NewBloggerThemes.com
          </a>
        </div>
        <!-- .site-info -->
      </footer>
      <!-- #colophon -->
    </div>
    <!-- #page -->
    <script type='text/javascript'>
      //<![CDATA[
      /**
 * navigation.js
 *
 * Handles toggling the navigation menu for small screens.
 */
      ( function() {
        var container, button, menu;
        container = document.getElementById( 'site-navigation' );
        if ( ! container ) {
          return;
        }
        button = container.getElementsByTagName( 'button' )[0];
        if ( 'undefined' === typeof button ) {
          return;
        }
        menu = container.getElementsByTagName( 'ul' )[0];
        // Hide menu toggle button if menu is empty and return early.
        if ( 'undefined' === typeof menu ) {
          button.style.display = 'none';
          return;
        }
        menu.setAttribute( 'aria-expanded', 'false' );
        if ( -1 === menu.className.indexOf( 'nav-menu' ) ) {
          menu.className += ' nav-menu';
        }
        button.onclick = function() {
          if ( -1 !== container.className.indexOf( 'toggled' ) ) {
            container.className = container.className.replace( ' toggled', '' );
            button.setAttribute( 'aria-expanded', 'false' );
            menu.setAttribute( 'aria-expanded', 'false' );
          } else {
            container.className += ' toggled';
            button.setAttribute( 'aria-expanded', 'true' );
            menu.setAttribute( 'aria-expanded', 'true' );
          }
        };
      } )();
      //]]>
    </script>
    <script type='text/javascript'>
      //<![CDATA[
      ( function() {
        var is_webkit = navigator.userAgent.toLowerCase().indexOf( 'webkit' ) > -1,
            is_opera  = navigator.userAgent.toLowerCase().indexOf( 'opera' )  > -1,
            is_ie     = navigator.userAgent.toLowerCase().indexOf( 'msie' )   > -1;
        if ( ( is_webkit || is_opera || is_ie ) && document.getElementById && window.addEventListener ) {
          window.addEventListener( 'hashchange', function() {
            var element = document.getElementById( location.hash.substring( 1 ) );
            if ( element ) {
              if ( ! /^(?:a|select|input|button|textarea)$/i.test( element.tagName ) )
                element.tabIndex = -1;
              element.focus();
            }
          }, false );
        }
      })();
      //]]>
    </script>
    <script type='text/javascript'>
      //<![CDATA[
      jQuery(document).ready( function() {
        jQuery('#searchiconnbt').click(function() {
          jQuery('#jumbosearchnbt').fadeIn();
          jQuery('#jumbosearchnbt input').focus();
        });
        jQuery('#jumbosearchnbt .closeiconnbt').click(function() {
          jQuery('#jumbosearchnbt').fadeOut();
        });
        jQuery('body').keydown(function(e){
          if(e.keyCode == 27){
            jQuery('#jumbosearchnbt').fadeOut();
          }
        });
        jQuery('#site-navigation ul.menunbt').slicknav({
          label: 'Menu',
          duration: 1000,
          prependTo:'#slickmenu'
        });	 
        jQuery(document).scroll(function() {
          if (jQuery(window).width() > 768 ) {
            if ( jQuery('#top-barnbt').visible() == false ) {
              jQuery('#static-barnbt').fadeIn('slow');
            }
            else {
              jQuery('#static-barnbt').fadeOut('fast');
            }
          }	
        });	
        jQuery('.flex-images').flexImages({rowHeight: 200, object: '.item', truncate: true});
      });
      jQuery(function () {
        jQuery.stellar({
          horizontalScrolling: false,
          verticalOffset: 0
        });
      });
      jQuery(window).load(function() {
        jQuery('#nivoSlider').nivoSlider({
          prevText: "<i class='fa fa-chevron-circle-left'></i>",
          nextText: "<i class='fa fa-chevron-circle-right'></i>",
          pauseTime: 5000,
          beforeChange: function() {
            jQuery('.slider-wrapper .nivo-caption').animate({
              opacity: 0,
              marginLeft: -10,
            },500,'linear');
          },
          afterChange: function() {
            jQuery('.slider-wrapper .nivo-caption').animate({
              opacity: 1,
              marginLeft: 0,
            },500,'linear');
          },
          animSpeed: 700,
        });
      });  
      var slideout = new Slideout({
        'panel': document.getElementById('pagenbt'),
        'menu': document.getElementById('mobile-static-menunbt'),
        'padding': 256,
        'tolerance': 70
      });     
      jQuery('.mobile-toggle-button').toggle(function(){
        slideout.open();
        jQuery('.mobile-toggle-button').animate({left: 211},300, 'swing');
        jQuery('.mobile-toggle-button i').removeClass('fa-bars').addClass('fa-close');
      },
                                             function() {
                                               slideout.close();
                                               jQuery('.mobile-toggle-button').animate({left: 5},300, 'swing');
                                               jQuery('.mobile-toggle-button i').removeClass('fa-close').addClass('fa-bars');
                                             });
      // Toggle button
      /*
document.querySelector('.mobile-toggle-button').addEventListener('click', function() {
	slideout.toggle();
}); 
*/
      //]]>
    </script>
  </body>
</html>
