<?php

include('searchWeather.php');
include('deezer.php');

?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE = edge">
    <meta name="viewport" content="width = device-width, initial-scale = 1, maximum-scale=1, user-scalable=no">
    <link href="appweather.css" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Rationale" rel="stylesheet">



</head>

<body>
    <div class="container-fluid">
        <div class="city-bar">
            <div class="row no-gutters">
                <div class="col-xs-offset-4 col-xs-4 col-xs-offset-4">
                    <form action="form.php" method="POST">
                        <div class="form-group">
                            <label for="formGroupExampleInput"><h1>CITY</h1></label>
                            <input type="text" class="form-control" id="formGroupExampleInput" name="searchcity" placeholder="City ...">
                        </div>
                        <div class="button">
                            <a><button type="button" class="btn btn-primary">SEARCH &raquo;</button></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="music-player">
            <iframe scrolling="no" frameborder="0" allowTransparency="true" src="https://www.deezer.com/plugins/player?format=classic&autoplay=false&playlist=true&width=700&height=350&color=007FEB&layout=dark&size=medium&type=playlist&id=30595446&app_id=1"
                width="700" height="350"></iframe>
        </div>
    </div>



</body>

</html>