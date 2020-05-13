// Tutorial by http://youtube.com/CodeExplained
// RG api key : 85726e6724f4693e1671c2c805b23087

// Select elements
const iconElement = document.querySelector(".weather-icon");
const tempElement = document.querySelector(".temperature-value p");
const descElement = document.querySelector(".temperature-description p");
const locationElement = document.querySelector(".location p");

// App data
const weather = {};

weather.temperature = {
    unit : "celsius"
}

// APP consts and vars
const kelvin = 273;

// API KEY
const key = "85726e6724f4693e1671c2c805b23087";

// Latitude and longitude
const latitude = 18.42;
const longitude = -64.62;

// Get weather from API provider
let api = `http://api.openweathermap.org/data/2.5/weather?lat=${latitude}&lon=${longitude}&appid=${key}`;

fetch(api)
    .then(function(response) {
        let data = response.json();
        return data;
    })
    .then(function(data) {
        weather.temperature.value = Math.floor(data.main.temp - kelvin);
        weather.description = data.weather[0].description;
        weather.iconId = data.weather[0].icon;
        weather.city = data.name;
        weather.country = data.sys.country;
    })
    .then(function() {
        displayWeather();
    });

// Display weather to UI
function displayWeather(){
    iconElement.innerHTML = `<img src="../wp-content/themes/bvisupco/images/icons/${weather.iconId}.png"/>`;
    tempElement.innerHTML = `${weather.temperature.value}°<span>C</span>`;
    descElement.innerHTML = weather.description;
    locationElement.innerHTML = `${weather.city}, ${weather.country}`;
}

// C to F conversion
function celsiusToFahrenheit(temperature){
    return (temperature * 9/5) + 32;
}

// When the user slicks on the temperature element 
tempElement.addEventListener("click", function() {
    if(weather.temperature.value === undefined) return;
    
    if(weather.temperature.unit == "celsius") {
        let fahrenheit = celsiusToFahrenheit(weather.temperature.value);
        fahrenheit = Math.floor(fahrenheit);
        
        tempElement.innerHTML = `${fahrenheit}°<span>F</span>`;
        weather.temperature.unit = "fahrenheit";
    } else {
        tempElement.innerHTML = `${weather.temperature.value}°<span>C</span>`;
        weather.temperature.unit = "celsius"
    }
});