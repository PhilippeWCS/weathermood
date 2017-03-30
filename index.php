<?php
    require_once('form.php');
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

        <link href="https://fonts.googleapis.com/css?family=Rationale" rel="stylesheet">



    </head>

    <body class="container-fluid">
        <h1 class="title text-center">WEATHERMOOD</h1>
        <div class="city-bar">
            <div class="row no-gutters">
                <div class="col-xs-offset-4 col-xs-4 col-xs-offset-4">
                    <form action="form.php" method="POST">
                        <div class="form-group">
                            <label for="formGroupExampleInput"><h2>CITY</h2></label>
                            <input type="text" name="searchcity" class="form-control" id="formGroupExampleInput" placeholder="City ...">
                        </div>
                        <div class="button">
                            <button type="submit" class="btn btn-primary">SEARCH &raquo;</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <?php
            if (isset($track)){
                var_dump($track);
                require_once "results.php";
            }
        ?>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="deezer.js"></script>
    </body>
</html>