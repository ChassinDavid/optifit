<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

#use App\Kernel;

#require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

#return function (array $context) {
#   return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
#};

require('../src/ressources/header.php');
require('../src/ressources/footer.php');
?>

</body>
</html>

