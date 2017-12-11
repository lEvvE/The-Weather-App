<?php

    include_once 'header.php';

?>

    <div class="container mx-auto">
        <div class="row container locationDashBoard border border-warning">
            <div class="col-md-12 mx-auto">
                
                <form class="mx-auto" action="Backend/signup.db.php" method="post">
                    <h5 class="mx-auto">Register</h5>
                    <div class="form-group row">
                        <div class="col">
                            <input class="form-control" type="text" Placeholder="Given Name" name="u_given">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col">
                            <input class="form-control" type="text" Placeholder="Surname" name="u_sur">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col">
                            <input class="form-control" type="email" Placeholder="E-mail" name="u_email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col">
                            <input class="form-control" type="text" Placeholder="Username" name="u_nick">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col">
                            <input class="form-control" type="password" Placeholder="Password" name="u_pass">
                        </div>
                    </div>
                    <br>
                    <div class="form-group row mx-auto menuCenter">
                        <div class="col mx-auto">
                            <button id="signUp" class="btn-primary logButton btn btn-outline-warning my-2 my-sm-0 mx-auto" name="submit">Sign Up</button>
                        </div>
                    </div>
                </form>
                <br>
            </div>
        </div>
    </div>    
    
    <!--Laddar in sist så att sidorna laddar snabbare-->

<?php

    include_once 'footer.php';

?>