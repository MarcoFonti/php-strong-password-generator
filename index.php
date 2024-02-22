
<?php

// TITOLO HEAD
$title = 'Home Page';

// AVVIO SESSIONE
session_start();

// ELIMINO SESSIONE SE L'UTENTE TORNA INDIETRO
if(isset($_GET['new'])){
    session_destroy();
}

// DATI
require_once __DIR__ .'/includes/data/info.php';

require_once __DIR__ .'/includes/function/function.php';

// VERIFICO VALORE 
$password = $_GET['password'] ?? '';

// PASSO ARGOMENTI ALLA FUNZIONE CHE GENERA LA PASSWORD
$generate_password = get_password($password, $characters, $num_total_characters);

// SE L'UTENTE HA INVIATO IL FORM PER GENERARE UNA PASSWORD LO MANDO ALLA PAGINE SUCCESSIVA
if($generate_password){
    $_SESSION['password'] = $generate_password;
    header('Location: ./password_user.php');
};

?>


<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<!-- HEAD -->
<?php include __DIR__ . '/includes/template/head.php' ?>
<body>
    <div class="container mt-5">
        <h1 class="text-center text-danger">GENERA LA TUA PASSWORD</h1>
        <div class="card w-50 m-auto">
            <!-- FORM -->
            <?php require __DIR__ . '/includes/template/form.php' ?>
        </div>
    </div>
</body>
</html>