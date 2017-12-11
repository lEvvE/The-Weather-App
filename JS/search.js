$(document).ready(function(){
    
    // Variabel för att spara OWM-API
    var api;    

    //Variabel för sökning av stad
    var inCity;

    // Variabler för koordinater
    var inLat;
    var inLon;

    // Variabler för olika temperaturskalor
    var inKTemp;
    var inCTemp;
    var inFTemp;

    // Variabler för väderförhållanden
    var inState;
    var inWind;

        //Då användaren klickar på search
        $("#submitCity").click(function(){
            
            //Validerar det som matats in i sökfält och placerar i variabel
            inCity = $("#inCity").val();
            
            //API-nyckel för att kunna söka och hämta data
            api = "http://api.openweathermap.org/data/2.5/weather?q=" + inCity + "&appid=d57304cbe70c0bdbd337cdef15dad358";
            
            //Om fält ej är tomt körs sats
            if(inCity != ""){
                
                //Hämtar data med JSON
                $.getJSON(api, function(data){
                     
                    //Sparar OWMs namn, skriver ut och skriver över tidigare innehåll
                    inCity = data.name;
                    $("#inLocation").html(inCity); 
                    
                    // Sparar de hämtade koordinaterna i variabler
                    inLat = data.coord.lat;
                    inLon = data.coord.lon;
                      
                    //Skriver ut ovanstående variabler
                    $("#inLat").html(inLat.toFixed(1) + " °φ");
                    $("#inLon").html(inLon.toFixed(1) + " °λ");
                    
                    //Sparar in och konverterar temperaturskalor med formattering
                    inKTemp = data.main.temp;
                    inCTemp = (inKTemp - 273).toFixed(1);
                    inFTemp = ((inKTemp)*(9/5)-459.67).toFixed(1);
                    
                    //Skriver ut celsius
                    $("#inTemp").html(inCTemp + " <strong>°C</strong>");
    
                    //Vid val av celsius
                    $("#inCTemp").change(function() {
                        
                        //Skriv ut celsius
                        $("#inTemp").html(inCTemp + " <strong>°C</strong>");
        
                    });
                    
                    //Vid val av fahrenheit
                    $("#inFTemp").change(function() {
                            
                        //Skriv ut fahrenheit
                        $("#inTemp").html(inFTemp + " <strong>°F</strong>");
         
                    });
                    
                    //Sparar väderlekens beskrivning och vindhastigheten i variabler
                    inState = data.weather[0].description;
                    inWind = data.wind.speed;
                    
                    //Skriver ut ovanstående variabler
                    $("#inState").html(inState); 
                    $("#inWind").html(inWind + "m/s");
        
                });
  
            }
            
            else {
                $("#error").html("Field cannot be empty");
            }
        });
});