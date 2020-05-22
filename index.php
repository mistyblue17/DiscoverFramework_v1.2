
<!DOCTYPE HTML>
<!--
    Identity by HTML5 UP
    html5up.net | @n33co
    Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<!-- HTML page language set as US English for accessibility applications and search engines -->
<html lang="en-US">

<head>
    <title>DiscoverWater</title>
    <meta charset="utf-8" />
    <meta name="description" content="An Interactive Visualization of Water Resources in Western Kansas" />
    <meta name="keywords" content="Interactive, Spatial-temporal, Visualization, Water Resources, Multivariate, Knowledge Discovery, High Plains Aquifer" />
    <meta name="author" content="Misty Porter" />
    <meta name="publisher" content="University of Kansas" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/vnd.microsoft.icon" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-46265465-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-46265465-2');
      gtag('config', 'UA-46265465-3');
    </script>

    <!-- retrieve CSS files for formatting -->
    <!--<link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css"-->
    <!--   integrity="sha512-07I2e+7D8p6he1SIM+1twR5TIrhUQn9+I6yjqD53JQjFiMf8EtC93ty0/5vJTZGF8aAocvHYNEDJajGdNx1IsQ=="-->
    <!--   crossorigin=""/>-->
    <!-- CSS formatting for page layout -->
    <style>
    body {
      margin: 10;
      padding: 10px 10px;
      font-family: 'Helvetica Neue', Helvetica, Arial, Sans-serif;
    }
    #map {
      float: left;
      left: 10;
    }
    h1 {
      font-size: 20px;
      line-height: 25px;
    }
    h2 {
      font-size: 14px;
      line-height: 17px;
      margin-bottom: 5px;
    }
    a {
      text-decoration: none;
      color: #2dc4b2;
    }
    #console {
      position: absolute;
      width: 285px;
      padding: 10px 10px;
      background-color: white;
    }
    #syncChart {
      position: absolute;
      width: 75%;
      right: 0;
      padding: 15px;
    }
    #analysis {
      bottom: 0;
      width: 35%;
      height: 37%;
      padding: 5px;
    }
    .chartElement {
      float: right;
      right: 0;
      width: 75%;
      padding: 15px;
    }
    .tab {
        position:absolute;left:150px; 
    }
    </style>

    <!-- CSS for legend -->
    <style>
    .session {
        margin-bottom: 10px;
    }
    .row {
        height: 12px;
        width: 100%;
    }
    .session .legend-scale ul {
        margin: 0;
        padding: 0;
        float: left;
        list-style: none;
        }
    .session .legend-scale ul li {
        display: block;
        float: left;
        width: 45px;
        margin-top: 3px;
        margin-bottom: 6px;
        text-align: center;
        font-size: 10px;
        list-style: none;
        }
    .session ul.legend-labels li span {
        display: block;
        float: left;
        height: 15px;
        width: 45px;
        }
    </style>
    
    <style>
    .stats {
        margin-bottom: 5px;
    }
    .row {
        height: 12px;
        width: 100%;
    }
    .stats ul.labels li {
        display: inline;
        height: 15px;
        width: 25%;
        padding: 10px;
        border: "black";
        }
    </style>
</head>

<body class="is-loading">
  <header>
    <h1 style="text-align:center;">DiscoverWater</h1>
    <h2 style="text-align:center;">An Interactive Visualization of Water Resources in Western Kansas</h2>
    <!-- <h5 style="text-align:center">Created by Misty Porter - The University of Kansas, Department of Geology</h5> -->
    <ul>
      <li>Use the time slider to change the year. The colors will change to refelct the percentile of flow measured at the gage station on that date.</li>
      <li>Hover your mouse over the charts to activate them and explore the related data.</li>
      <li>Click on the gage station to expand interactive charts in a new window.</li>    
  </header>

<!-- Sets up containers for map and legend ('console') with sliderbar -->
<?php include_once(__DIR__ . '/includes/map.html'); ?>

<!-- Sets up containers for each chart and one container that combines all charts for synchronization -->
<?php include_once(__DIR__ . '/includes/highchart.html'); ?>

<!-- Sets up containers for key hydrologic moments and trend analysis  -->
  <div id='analysis'>
    <h3>KEY HYDROLOGICAL MOMENTS:</h3>
    <ul>
      <li><strong>1954:</strong> Before extensive pumping, major droughts cause declines in groundwater and streamflow, with flows as low as <strong>7.0 ft<sup>3</sup>/s</strong>.</li>
      <li><strong>1974-1979:</strong> Modest dry period produces extremely low streamflows at <strong>0.2 ft<sup>3</sup>/s</strong>. The consequences of center pivot irrigation on streamflow are revealed.</li>
      <li><strong>Sept - Nov 1983:</strong> Second highest recorded pumping   corresponds with second lowest groundwater level while streamflow remains normal at <strong>83.3 ft<sup>3</sup>/s</strong>.</li>
      <li><strong>1992-2001:</strong> Long mostly wet period allows streamflow and groundwater to recover to .</li>
      <li><strong>2003-2006:</strong> Pumping during a moderate drought leads to smaller steamflows of <strong>1.4 ft<sup>3</sup>/s</strong> than occurred in the more severe 1950’s drought.</li>
      <li><strong>2010-2014:</strong> Pumping during severe drought leads to lowest recorded streamflow of <strong>0.01 ft<sup>3</sup>/s</strong>.</li>
    </ul>
    
    <!-- begin wwww.htmlcommentbox.com -->
     <div id="HCB_comment_box"><a href="http://www.htmlcommentbox.com">Comment Form</a> is loading comments...</div>
     <link rel="stylesheet" type="text/css" href="https://www.htmlcommentbox.com/static/skins/bootstrap/twitter-bootstrap.css?v=0" />
     <script type="text/javascript" id="hcb"> /*<!--*/ if(!window.hcb_user){hcb_user={};} (function(){var s=document.createElement("script"), l=hcb_user.PAGE || (""+window.location).replace(/'/g,"%27"), h="https://www.htmlcommentbox.com";s.setAttribute("type","text/javascript");s.setAttribute("src", h+"/jread?page="+encodeURIComponent(l).replace("+","%2B")+"&opts=16862&num=10&ts=1574382852360");if (typeof s!="undefined") document.getElementsByTagName("head")[0].appendChild(s);})(); /*-->*/ </script>
    <!-- end www.htmlcommentbox.com -->
  </div>

</body>
</html>
