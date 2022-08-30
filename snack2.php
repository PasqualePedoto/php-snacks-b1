<?php

    // Controlliamo se vengono passati dei parametri, se si
    // allora dichiariamo delle variabili PHP
    if(!empty($_GET)){
        $name = $_GET['name'];
        $mail = $_GET['mail'];
        $age = $_GET['age'];
        
        // @  Metodo che ci ritorna la posizione, se esiste, dello snail
        $snail_pos = strpos($mail,'@');

        // @  Metodo che ci ritorna la posizione, se esiste, del punto
        $point_pos = strpos($mail,'.');

        // @  Funzione che consente di effettuare il type casting
        $ctrl_age = intval($age);

        // @  Variabile di controllo che determina l'accesso
        $ctrl_ok = false;

        // # Controlli innestati
        if($snail_pos !== false && $point_pos !== false) {
            if($ctrl_age !== 0){
                if(mb_strlen($name) > 3){
                    // * Settiamo il controllo
                    $ctrl_ok = true;
                }     
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <!-- Accesso Consentito -->
       <p>
        <?php  if($ctrl_ok) { ?>
            <p>Accesso consentito!</p>
        <?php } ?>
       </p>
       <!-- Accesso negato -->
       <p>
       <?php  if(!$ctrl_ok) { ?>
            <p>Accesso negato!</p>
        <?php } ?>
       </p>
    </body>

</html>