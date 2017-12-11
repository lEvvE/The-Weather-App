<?php

    $current = 'location';
    include_once 'loggedInHeader.php';

?>
    
    <div class="container">
        <div class="row">
            <div class="col-6 mx-auto">
                <br>
                <h2 class="mx-auto"><i class="fa fa-map-marker" aria-hidden="true"></i></h2>
                <h2 class="mx-auto" id="location"></h2>
                    <p class="mx-auto"  id="time">...</p>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            
            <section class="row text-center placeholders mx-auto">
                <br>
                <div class="col-6 col-sm-3 placeholder mx-auto">
                    <h5 class="mx-auto"><i class="fa fa-globe" aria-hidden="true"></i><br>Coordinates</h5>
                    <div class="container locationDashBoard border border-warning mx-auto">
                    <p class="mx-auto"><strong>Latitude:</strong></p>
                    <p class="mx-auto"  id="lat">...</p>
                    <p class="mx-auto"><strong><b>Longitude:</b></strong></p>
                    <p class="mx-auto"  id="long">...</p>
                    </div>
                </div>
                <br>
                <div class="col-6 col-sm-3 placeholder mx-auto">
                    <h5 class="mx-auto"><i class="fa fa-thermometer-empty" aria-hidden="true"></i><br>Temperature</h5>
                    <div class="container locationDashBoard border border-warning mx-auto">
                        <p class="mx-auto"><strong>Degrees:</strong></p>
                        <p class="mx-auto" id="temp">...</p>
                        <br>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-primary active mx-auto">
                                <input type="radio" name="cTemp" id="cTemp" autocomplete="off" checked> °C
                            </label>
                            <label class="btn btn-primary mx-auto">
                                <input type="radio" name="fTemp" id="fTemp" autocomplete="off"> °F
                            </label>
                        </div>     
                    </div>
                </div>
                <br>
                <div class="col-6 col-sm-3 placeholder mx-auto">
                    <h5 class="mx-auto"><i class="fa fa-cloud" aria-hidden="true"></i><br>Condition</h5>
                    <div class="container locationDashBoard border border-warning mx-auto">
                    <p class="mx-auto"><strong>State:</strong></p>
                    <p class="mx-auto" id="state">...</p>
                    <p class="mx-auto"><strong>Windspeed:</strong></p>
                    <p class="mx-auto" id="wind">...</p>
                    </div>
                </div>
            </section>
            </div>
        </div>
    </div>
    <br>

<?php

    include_once 'loggedInFooter.php';

?>