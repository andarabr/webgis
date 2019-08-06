<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css"
    integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
    crossorigin=""/>
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"
    integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="
    crossorigin=""></script>
    <script src="<?php echo base_url();?>assets/klasifikasi/sawah.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/klasifikasi/hutan.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/klasifikasi/swk.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/klasifikasi/bda.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/klasifikasi/pkb.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/klasifikasi/ltbk.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/klasifikasi/ltbg.js" type="text/javascript"></script>
    <style>
        #mapid { 
            height: 90vh;
            width : 80%;
        }

        #map2017 {
            height: 90vh;
            width : 80%;
        }
    </style>
</head>

<body>
    <div><h3>test sanak</h3></div>
     <!-- --><div id="mapid"></div>  
     <button onclick="ganti()">aasa</button> 
</body>

<script>
    function ganti(){
        document.getElementById("mapid").style.display = none;
    }

    var mymap = L.map('mapid').setView([-3.75403889, 102.50472222], 13);
    L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox.light',
    accessToken: 'pk.eyJ1IjoiYW5kYXJhYnJleSIsImEiOiJjanB1cWZ0eTEwY3MxNDhxaWl6eXVsanhkIn0.WyVvTSjGunN8Cdw9HGr53g'
    }).addTo(mymap);

   var myStyle = {
        fillColor: 'green',
        weight: 0,
        opacity: 1,
        color: 'green',  //Outline color
        fillOpacity: 0.7
    };

    var myStyle2 = {
        fillColor: 'orange',
        weight: 0,
        opacity: 1,
        color: 'orange',  //Outline color
        fillOpacity: 0.5
    };

    var myStyle3 = {
        fillColor: 'white',
        weight: 0,
        opacity: 1,
        color: 'white',  //Outline color
        fillOpacity: 0.9
    };

    var myStyle4 = {
        fillColor: 'blue',
        weight: 0,
        opacity: 1,
        color: 'blue',  //Outline color
        fillOpacity: 0.6
    };

    var myStyle5 = {
        fillColor: 'GreenYellow',
        weight: 0,
        opacity: 1,
        color: 'yellow',  //Outline color
        fillOpacity: 0.5
    };

    var myStyle6 = {
        fillColor: 'red',
        weight: 0,
        opacity: 1,
        color: 'red',  //Outline color
        fillOpacity: 0.7
    };

    var myStyle7 = {
        fillColor: 'Fuchsia',
        weight: 0,
        opacity: 1,
        color: 'fuchsia',  //Outline color
        fillOpacity: 0.5
    };

    L.geoJSON(pkb, {
        style: myStyle5
    }).addTo(mymap);

    L.geoJSON(hutan, {
        style: myStyle
    }).addTo(mymap);

    L.geoJSON(sawah, {
        style: myStyle2
    }).addTo(mymap);

    L.geoJSON(swk, {
        style: myStyle3
    }).addTo(mymap);

    L.geoJSON(bda, {
        style: myStyle4
    }).addTo(mymap);

    L.geoJSON(ltbg, {
        style: myStyle6
    }).addTo(mymap);

    L.geoJSON(ltbk, {
        style: myStyle7
    }).addTo(mymap);

    var i;  
    var sawahData = sawah.features;
    var sawahLuas = 0;
    for (i = 0; i < sawahData.length; i++) { 
        sawahLuas = sawahLuas + parseInt(sawahData[i].properties.Area);
    };

    var hutanData = hutan.features;
    var hutanLuas = 0;
    for (i = 0; i < hutanData.length; i++) { 
        hutanLuas = hutanLuas + parseInt(hutanData[i].properties.Area);
    };

    console.log('luas hutan : ', hutanLuas);
    console.log('luas sawah : ', sawahLuas);
    console.log(hutanLuas + sawahLuas, 'meter persegi');
    console.log('sawah')

</script>
</html>