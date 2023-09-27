<?php
// AVVIO LA SESSIONE
session_start();

if (!empty($_SESSION['password'])) {
    header('Location: ./index.php');

}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include __DIR__ . '/head.php';
    ?>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-6 p-5 mx-auto">
                <div class="card">
                    <div class="card-header text-center">
                        <h1>
                            PASSWORD
                        </h1>
                    </div>
                    <div class="card-text p-3">
                        <?php if (isset($_SESSION['password'])) {
                            echo "La password è : " . $_SESSION['password'];

                        } ?>
                        <!-- <button type="submit" class=" mt-3 btn btn-primary">TO BACK</button> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>