<?php



//echo $pwd;

//Controllo della password: 
//Contenga almeno 8 caratteri;
//Contenga almeno una lettera maiuscola;
//Contenga almeno un numero;
//Contenga almeno un carattere speciale;


//Contenga almeno 8 caratteri;

function checkLenght($password){
    if(strlen($password) >= 8){
        return true;
    }
    return false;
}

//Contenga almeno una lettera maiuscola;

function checkUpper($password){
    for ($i=0; $i < strlen($password); $i++) { 
        if(ctype_upper($password[$i])){
            return true;
        }
    }
    return false;
}

//Contenga almeno un numero;

function checkNumber($password){
    for ($i=0; $i < strlen($password); $i++) { 
        if(is_numeric($password[$i])){
            return true;
        }
    }
    return false;
}


//Contenga almeno un carattere speciale;

function checkSpecial($password){
    $special_chars= ['!', '@', '#', '$'];

    for ($i=0; $i < strlen($password); $i++) { 
        if(in_array($password[$i], $special_chars)){
            return true;
        }
    }
    return false;
}


function checkPassword($stringaInserita){

    $check = true; 

    $checkLenght = checkLenght($stringaInserita);
    $checkUpper = checkUpper($stringaInserita);
    $checkNumber = checkNumber($stringaInserita);
    $checkSpecial = checkSpecial($stringaInserita);

    if(!$checkLenght){
        echo "Password non corretta: la password deve contenere almeno 8 caratteri \n";
        $check = false;
    }

    if(!$checkUpper){
        echo "Password non corretta: la password deve contenere almeno un carattere maiuscolo \n";
        $check = false;
    }

    if (!$checkNumber){
        echo "Password non corretta: la password deve contenere almeno un numero \n";
        $check = false;
    }

    if (!$checkSpecial){
        echo "Password non corretta: la password deve contenere almeno un carattere speciale \n";
        $check = false;
    }

    return $check;

}


$passwordInserita = false;

do {
    $pwd = readline('inserisci una password: ');
    $passwordInserita = checkPassword($pwd);

} while (!$passwordInserita);


if($passwordInserita){
    echo "Password corretta";
}



?>