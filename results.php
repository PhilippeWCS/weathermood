<br>
<div class="col-xs-offset-3 deezer-widget-player" data-src=<?php echo "https://www.deezer.com/plugins/player?format=classic&autoplay=true&playlist=true&emptyPlayer=false&width=700&height=350&color=007FEB&layout=dark&size=medium&type=tracks&id=" . $track . "&app_id=1"; ?> data-scrolling="no" data-frameborder="0" data-allowTransparency="true" data-width="700" data-height="350">

</div>

<br>

<div class="col-xs-offset-5 col-xs-3 weather">
    <h3><?php echo $ville;?></h3>
    <img src= <?php echo "http://openweathermap.org/img/w/" . $icon . ".png"; ?>>
    <p><?php echo $condition;?></p>
    <p><?php echo $temperature;?></p>
</div>