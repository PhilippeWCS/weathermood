/**
 * Created by wilder on 30/03/17.
 */

window.onload = setAttr();

function setAttr() {

    var input = document.getElementById("background");
    var body = document.getElementsByTagName("body")[0];
    var weather = document.getElementsByClassName("weather")[0];

    if (input.value != ""){
        if (input.value == "clear sky"){
            body.setAttribute("class", "clear-sky");
            weather.style.color = "";
        }
        else if (input.value == "few clouds"){
            body.setAttribute("class", "few-clouds")
        }
        else if (input.value == "scattered clouds"){
            body.setAttribute("class", "scattered-clouds");
            weather.style.color = "#FFFFFF";
        }
        else if (input.value == "broken"){
            body.setAttribute("class", "broken-clouds");
            weather.style.color = "#FFFFFF";
        }
        else if (input.value == "shower rain"){
            body.setAttribute("class", "shower-rain");
            weather.style.color = "#FFFFFF";
        }
        else if (input.value == "rain"){
            body.setAttribute("class", "rain");
            weather.style.color = "#FFFFFF";
        }
        else if (input.value == "thunderstorm"){
            body.setAttribute("class", "thunderstorm");
            weather.style.color = "#FFFFFF";
        }
        else if (input.value == "snow"){
            body.setAttribute("class", "snow");
        }
        else if (input.value == "mist"){
            body.setAttribute("class", "mist");
        }
    }
    else{
        body.setAttribute("class", "clear-sky");
        weather.style.color = "";
    }
}