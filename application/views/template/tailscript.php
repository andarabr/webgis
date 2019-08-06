<script>
    function ganti(){
        document.getElementById("mapid").style.display = none;
    }

    var mymap = L.map('mapid').setView([-3.75403889, 102.50472222], 12);
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

    var myStyle9 = {
        fillColor: 'green',
        weight: 2,
        opacity: 0.7,
        color: 'green',  //Outline color
        fillOpacity: 0
    };

    var myStyle10 = {
        fillColor: 'black',
        weight: 1,
        opacity: 0.7,
        color: 'black',  //Outline color
        fillOpacity: 0.05
    };

    L.geoJSON(dasbkl, {
        style: myStyle10
    }).addTo(mymap);

    L.geoJSON(subdas, {
        style: myStyle9
    }).addTo(mymap);

    var pkbTog = L.geoJSON(pkb, {
        style: myStyle5
    }).bindPopup('<h6 align="center">Perkebunan</h6>').addTo(mymap);

    var hutanTog = L.geoJSON(hutan, {
        style: myStyle
    }).bindPopup('<h6 align="center">Hutan</h6>').addTo(mymap);

    var sawahTog = L.geoJSON(sawah, {
        style: myStyle2
    }).bindPopup('<h6 align="center">Sawah</h6>').addTo(mymap);

    var bdaTog = L.geoJSON(bda, {
        style: myStyle4
    }).bindPopup('<h6 align="center">Badan Air</h6>').addTo(mymap);

    var ltbgTog = L.geoJSON(ltbg, {
        style: myStyle6
    }).bindPopup('<h6 align="center">Lahan Terbangun</h6>').addTo(mymap);

    var ltbkTog = L.geoJSON(ltbk, {
        style: myStyle7
    }).bindPopup('<h6 align="center">Lahan Terbuka</h6>').addTo(mymap);

    var awanTog = L.geoJSON(awan, {
        style: myStyle3
    }).bindPopup('<h6 align="center">Awan</h6>').addTo(mymap);

    var i;  
    var sawahData = sawah.features;
    var sawahLuas = 0;
    for (i = 0; i < sawahData.length; i++) { 
        sawahLuas = sawahLuas + parseInt(sawahData[i].properties.Area);
    };

    var pkbData = pkb.features;
    var pkbLuas = 0;
    for (i = 0; i < pkbData.length; i++) { 
        pkbLuas = pkbLuas + parseInt(pkbData[i].properties.Area);
    };

    var ltbgData = ltbg.features;
    var ltbgLuas = 0;
    for (i = 0; i < ltbgData.length; i++) { 
        ltbgLuas = ltbgLuas + parseInt(ltbgData[i].properties.Area);
    };

    var ltbkData = ltbk.features;
    var ltbkLuas = 0;
    for (i = 0; i < ltbkData.length; i++) { 
        ltbkLuas = ltbkLuas + parseInt(ltbkData[i].properties.Area);
    };

    var hutanData = hutan.features;
    var hutanLuas = 0;
    for (i = 0; i < hutanData.length; i++) { 
        hutanLuas = hutanLuas + parseInt(hutanData[i].properties.Area);
    };

    var bdaData = bda.features;
    var bdaLuas = 0;
    for (i = 0; i < bdaData.length; i++) { 
        bdaLuas = bdaLuas + parseInt(bdaData[i].properties.Area);
    };

    var hutanData = hutan.features;
    var hutanLuas = 0;
    for (i = 0; i < hutanData.length; i++) { 
        hutanLuas = hutanLuas + parseInt(hutanData[i].properties.Area);
    };

    var awanData = awan.features;
    var awanLuas = 0;
    for (i = 0; i < awanData.length; i++) { 
        awanLuas = awanLuas + parseInt(awanData[i].properties.Area);
    };

    console.log('luas hutan : ', hutanLuas);
    console.log('luas sawah : ', sawahLuas);
    console.log(hutanLuas + sawahLuas, 'meter persegi');
    console.log(sawah);

    var total = hutanLuas+sawahLuas+ltbgLuas+pkbLuas+ltbkLuas+bdaLuas+awanLuas;

    document.getElementById("hutan").innerHTML = hutanLuas;
    document.getElementById("sawah").innerHTML = sawahLuas;
    document.getElementById("ltbg").innerHTML = ltbgLuas;
    document.getElementById("pkb").innerHTML = pkbLuas;
    document.getElementById("ltbk").innerHTML = ltbkLuas;
    document.getElementById("bda").innerHTML = bdaLuas;
    document.getElementById("awan").innerHTML = awanLuas;
    document.getElementById("total").innerHTML = total;    



</script>

<script>
    $("#hutantb").click(function(event) {
        if(mymap.hasLayer(hutanTog)) {
            $(this).removeClass('');
            mymap.removeLayer(hutanTog);
        } else {
            mymap.addLayer(hutanTog);        
            $(this).addClass('');
        }
    });

    $("#pkbtb").click(function(event) {
        if(mymap.hasLayer(pkbTog)) {
            $(this).removeClass('');
            mymap.removeLayer(pkbTog);
        } else {
            mymap.addLayer(pkbTog);        
            $(this).addClass('');
        }
    });

    $("#sawahtb").click(function(event) {
        if(mymap.hasLayer(sawahTog)) {
            $(this).removeClass('');
            mymap.removeLayer(sawahTog);
        } else {
            mymap.addLayer(sawahTog);        
            $(this).addClass('');
        }
    });

    $("#ltbktb").click(function(event) {
        if(mymap.hasLayer(ltbkTog)) {
            $(this).removeClass('');
            mymap.removeLayer(ltbkTog);
        } else {
            mymap.addLayer(ltbkTog);        
            $(this).addClass('');
        }
    });

    $("#ltbgtb").click(function(event) {
        if(mymap.hasLayer(ltbgTog)) {
            $(this).removeClass('');
            mymap.removeLayer(ltbgTog);
        } else {
            mymap.addLayer(ltbgTog);        
            $(this).addClass('');
        }
    });

    $("#bdatb").click(function(event) {
        if(mymap.hasLayer(bdaTog)) {
            $(this).removeClass('');
            mymap.removeLayer(bdaTog);
        } else {
            mymap.addLayer(bdaTog);        
            $(this).addClass('');
        }
    });

    $("#awantb").click(function(event) {
        if(mymap.hasLayer(awanTog)) {
            $(this).removeClass('');
            mymap.removeLayer(awanTog);
        } else {
            mymap.addLayer(awanTog);        
            $(this).addClass('');
        }
    });
</script>