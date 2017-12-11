$(document).ready(function(){
    
    // Variabel för att spara OWM-API
    var api;
    
    // Variabler för koordinater
    var lat;
    var long;
    var city;
    
    // Variabler för olika temperaturskalor
    var kTemp;
    var cTemp;
    var fTemp;
    
    // Variabler för väderförhållanden
    var state;
    var wind;
    
    // Variabler för dagens datum och tid
    var time = $.now();
    var date = new Date(time);
    var td = date.toLocaleString(date);
    
    // Placerar datumet
    $("#time").html(td);
    
    // Fokuserar inmatningsfält
    $("input[type=text]:first").focus();
    
        // Kollar om vi kan nyttja positionering
        if(navigator.geolocation){
            
           //Hämtar nuvarande position
            navigator.geolocation.getCurrentPosition(function(position){
                
                //Placerar lat & lon i variabler från användares position
                lat = position.coords.latitude;
                long = position.coords.longitude;
                
                //API-nyckel används för att kunna hämta data
                api = "http://api.openweathermap.org/data/2.5/weather?lat=" + lat + "&lon=" + long + "&appid=269e65bd7549873adfcb9240cf07b2f7";
                
                    //Hämtar data med JSON
                    $.getJSON(api, function(data){
                        
                        //Sparar namn från OWM i variabel
                        city = data.name;
                        $("#location").html(city); 
                        
                        //Skriver ut lat & lon med formattering
                        $("#lat").html(lat.toFixed(1) + " °φ");
                        $("#long").html(long.toFixed(1) + " °λ");
                        
                        //Sparar in och konverterar temperaturskalor med formattering
                        kTemp = data.main.temp;
                        cTemp = (kTemp - 273).toFixed(1);
                        fTemp = ((kTemp)*(9/5)-459.67).toFixed(1);

                        //Skriver ut variabel för celsius
                        $("#temp").html(cTemp + " <strong>°C</strong>");
                        
                        //Vid val av celsius
                        $("#cTemp").change(function() {
                            
                            //Skriver ut celsius
                            $("#temp").html(cTemp + " <strong>°C</strong>");
        
                        });
        
                        //Vid val av fahrenheit
                        $("#fTemp").change(function() {
                            
                            //Skriver ut fahrenheit
                            $("#temp").html(fTemp + " <strong>°F</strong>");
         
                        });
                        
                        //Sparar väderlekens beskrivning och vindhastigheten i variabler
                        state = data.weather[0].description;
                        wind = data.wind.speed;
                        
                        //Skriver ut ovanstående variabler
                        $("#state").html(state); 
                        $("#wind").html(wind + "m/s");
        
                    });   
            });
        }
    
        else{
            
            alert("The weather app is not able to locate your position. Please make sure you allow this in the browsers settings.");
            
        }
    
});    