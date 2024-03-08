<?php

use App\Autoloader;
use App\Client\Compte as CompteClient;
use App\Banque\{CompteCourant, CompteEpargne};

require_once 'classes/Autoloader.php';
Autoloader::register();

// On va instancier le compte
$compte1 = new CompteCourant('Benoit', 500, 200);
var_dump($compte1); 

//$compteEpargne = new CompteEpargne('Benoit',200, 10); 
//var_dump($compteEpargne);

//$compteEpargne->verserInterets();
//var_dump($compteEpargne);

//$client = new CompteClient;
//var_dump($client);