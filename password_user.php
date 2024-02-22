<?php

// TITOLO HEAD
$title = 'Password User';

// AVVIO SESSIONE
session_start();

// SE NON CE NESSUNA PASSWORD TORNO ALLA PAGINA PRDENTE 
if(!isset($_SESSION['password'])){
    header('Location: ./index.php');
};

?>

<!DOCTYPE html>
<html lang="en">
<!-- HEAD -->
<?php include __DIR__ . '/includes/template/head.php' ?>
<body>
    <div class="container">
        <div class="alert alert-success mt-4" role="alert">
            <h1>Password generata casualmente: <i><?= $_SESSION['password'] ?></i></h1>
            <a href="./index.php?new=true" > <- Crea una nuova password</a>
        </div>
    </div>
</body>
</html>