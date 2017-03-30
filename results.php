<div class="row">
    <div class="col-xs-offset-2 col-xs-8 weather text-center">
        <h3>Weather in <?php echo $ville . ", " . $pays; ?></h3>
        <img class="center-block img-responsive" src= <?php echo "http://openweathermap.org/img/w/" . $icon . ".png"; ?>>
        <p><?php echo $condition;?></p>
        <p><?php echo $temperature;?></p>
    </div>
</div>

<br>

<div class="row">
    <div class="col-xs-offset-2 col-xs-8 deezer-widget-player" data-src=<?php echo "https://www.deezer.com/plugins/player?format=classic&autoplay=true&playlist=true&emptyPlayer=false&width=700&height=350&color=007FEB&layout=dark&size=medium&type=tracks&id=" . $track . "&app_id=1"; ?> data-scrolling="no" data-frameborder="0" data-allowTransparency="true" data-width="100%" data-height="350">
    </div>
</div>