
<?php

require_once __DIR__ .'/includes/data/info.php';

require_once __DIR__ .'/includes/function/function.php';

$password = $_GET['password'] ?? '';

$generate_password = get_password($password, $characters, $num_total_characters);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--  BOOTSTRAP -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/css/bootstrap.min.css'
        integrity='sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg=='
        crossorigin='anonymous' />
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
        <div class="alert alert-info">
            <h6>La tua password generata è: <?= $generate_password ?></h6>
        </div>
        <div class="card">
            <form action="" method="get" class="p-3">
                <div class="d-flex justify-content-between align-items-center">
                    <label for="passowrd_user">Scegli quanti caratteri avrà la tua Passowrd</label>
                    <input class="w-25" type="number" name="password" placeholder="Lunghezza password" id="passowrd_user" min="1" max="10">
                </div>
                <div class="d-flex justify-content-between align-items-center  mt-3">
                    <p>Consenti ripetizione di uno o più caratteri</p>
                    <div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="yes_repetition" id="yes_repetition">
                            <label class="form-check-label" for="yes_repetition"> Si </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="no_repetition" id="no_repetition">
                            <label class="form-check-label" for="no_repetition"> No </label>
                        </div>
                    </div>
                </div>
                <?php if($generate_password) : ?>
                    <button type="submit" class="btn btn-outline-secondary">Annulla</button>
                <?php else : ?>
                    <button type="submit" class="btn btn-outline-secondary">Invia</button>
                <?php endif; ?>
            </form>
        </div>
    </div>
</body>
</html>