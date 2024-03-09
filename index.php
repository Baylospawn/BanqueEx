<?php

use App\Autoloader;
use App\Client\Compte as CompteClient;
use App\Banque\{CompteCourant, CompteEpargne};

require_once 'classes/Autoloader.php';
Autoloader::register();

// On va instancier le compte

$client = new CompteClient('Bernard', 'Alter', 'Lille');
$compte1 = new CompteCourant($client,500, 200);
$compteEpargne = new CompteEpargne($client,200,5);
var_dump($compteEpargne);
var_dump($client);

//$compteEpargne = new CompteEpargne('Benoit',200, 10); 
//var_dump($compteEpargne);

//$compteEpargne->verserInterets();
//var_dump($compteEpargne);

//$client = new CompteClient;
//var_dump($client);