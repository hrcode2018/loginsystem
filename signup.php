<?php
require 'header.php';
?>

<main>
    <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyfields") {
            echo '<div class="d-flex justify-content-center">
                    <div class="alert alert-danger text-center mt-5" role="alert">
                        Please fill in all fields!
                    </div>
                  </div>';
        } elseif ($_GET["error"] == "invalidmailuid") {
            echo '<div class="d-flex justify-content-center">
                    <div class="alert alert-danger text-center mt-5" role="alert">
                        Invalid username and e-mail!
                    </div>
                  </div>';
        } elseif ($_GET["error"] == "invalidmail") {
            echo '<div class="d-flex justify-content-center">
                    <div class="alert alert-danger text-center mt-5" role="alert">
                        Invalid e-mail!
                    </div>
                  </div>';
        } elseif ($_GET["error"] == "invaliduid") {
            echo '<div class="d-flex justify-content-center">
                    <div class="alert alert-danger text-center mt-5" role="alert">
                        Invalid username!
                    </div>
                  </div>';
        } elseif ($_GET["error"] == "passwordcheck") {
            echo '<div class="d-flex justify-content-center">
                    <div class="alert alert-danger text-center mt-5" role="alert">
                        Your password do not match!
                    </div>
                  </div>';
        } elseif ($_GET["error"] == "usertaken") {
            echo '<div class="d-flex justify-content-center">
                    <div class="alert alert-danger text-center mt-5" role="alert">
                        Username is already taken!
                    </div>
                  </div>';
        }
    } elseif ($_GET["signup"] == "success") {
        echo '<div class="d-flex justify-content-center">
                <div class="alert alert-success text-center mt-5" role="alert">
                    Signup successfull!
                </div>
              </div>';
    }
    ?>
    <div class="d-flex justify-content-center mt-5">
        <div class="card">
            <div class="card-header">
                <h5 class="text-center font-weight-bolder">Sign Up</h5>
            </div>
            <div class="card-body">
                <form action="includes/signup.inc.php" method="post">

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Username" name="uid">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="E-mail" name="mail">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" name="pwd">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Repeat Password" name="pwd-repeat">
                    </div>

                    <button class="btn btn-primary float-right" type="submit" name="signup-submit">Signup!</button>

                </form>
            </div>
        </div>
    </div>
</main>

<?php
require 'footer.php';
?>