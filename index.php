<?php
require 'header.php';
?>

<main>
    <?php
    if (isset($_SESSION["userId"])) {
        echo '<div class="d-flex justify-content-center">
        <div class="alert alert-success text-center mt-5" role="alert">
            You are logged in!
        </div>
    </div>';
    } else {
        echo '<div class="d-flex justify-content-center">
        <div class="alert alert-success text-center mt-5" role="alert">
            You are logged out!
        </div>
    </div>';
    }
    ?>
</main>

<?php
require 'footer.php';
?>