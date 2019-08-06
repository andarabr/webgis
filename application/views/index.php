<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css"
    integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
    crossorigin=""/>
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"
    integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="
    crossorigin=""></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <?php $this->load->view($headscript); ?>
    <style>

        #mapid { 
            height: 100vh;
            width : 90%;
        }

        .foo {
            float: left;
            width: 20px;
            height: 20px;
            margin: 5px;
            border: 1px solid rgba(0, 0, 0, .2);
            }
        
        .bar {
            float: left;
            width: 20px;
            height: 20px;
            margin: 5px;
            border: 2px solid #515151;
            background : #E2E2E2;
        }

        .hutan {
            background: #47A147;
        }

        .pkb {
            background: #CEF78F;
        }

        .sawah {
            background: #F7CA77;
        }

        .ltbg {
            background: #FA4747;
        }

        .ltbk {
            background: #F777F7;
        }

        .bda {
            background: #5F5FF8;
        }

        .awan {
            background: #FDFDFD;
        }

        .graphcontainer {
            display : noane;
            
        }
        .toggle {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  width: 62px;
  height: 32px;
  display: inline-block;
  position: relative;
  border-radius: 0px;
  overflow: hidden;
  outline: none;
  border: none;
  cursor: pointer;
  background-color: #707070;
  transition: background-color ease 0.3s;
}

.toggle:before {
  content: "on off";
  display: block;
  position: absolute;
  z-index: 2;
  width: 28px;
  height: 28px;
  background: #fff;
  left: 2px;
  top: 2px;
  border-radius: 0%;
  font: 10px/28px Helvetica;
  text-transform: uppercase;
  font-weight: bold;
  text-indent: -22px;
  word-spacing: 37px;
  color: #fff;
  text-shadow: -1px -1px rgba(0,0,0,0.15);
  white-space: nowrap;
  box-shadow: 0 1px 2px rgba(0,0,0,0.2);
  transition: all cubic-bezier(0.3, 1.5, 0.7, 1) 0.3s;
}

.toggle:checked {
  background-color: #4CD964;
}

.toggle:checked:before {
  left: 32px;
}
        
    </style>
</head>
<body>
<?php $this->load->view($navbar); ?>


<div class="row" style="margin:0px 5px 0px 0px">
    <?php $this->load->view($content); ?>     
</div>


</body>
<?php $this->load->view($tailscript); ?>
</html>