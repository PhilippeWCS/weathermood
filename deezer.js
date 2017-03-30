/**
 * Created by wilder on 30/03/17.
 */

(function(d, s, id) {
    var js, djs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://e-cdns-files.dzcdn.net/js/widget/loader.js";
    djs.parentNode.insertBefore(js, djs);
}(document, "script", "deezer-widget-loader"));

