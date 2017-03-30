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
    <link href="https://fonts.googleapis.com/css?family=Rationale" rel="stylesheet">



</head>

<body class="container-fluid">

<h1 class="title text-center">WEATHERMOOD</h1>

<div class="row">
    <div class="col-xs-offset-2 col-xs-8">
        <form action="form.php" method="POST">
            <div class="form-group">
                <input type="text" name="searchcity" class="form-control input-lg" id="formGroupExampleInput" placeholder="Enter your city">
            </div>
            <div class="button">
                <button type="submit" class="btn btn-lg btn-block btn-warning">Search <span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
            </div>
        </form>
    </div>
</div>

<?php
if (isset($track)){
    require_once "results.php";
    echo "<input id='background' type='hidden' value=".$condition.">";
}
?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="deezer.js"></script>
<script src="background.js"></script>
</body>
</html>