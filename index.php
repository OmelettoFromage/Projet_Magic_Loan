<?php

require_once './vendor/autoload.php';
var_dump(\helpers\UUID::v7());

use Twig\Environment;
use Twig\Extension\DebugExtension;
use Twig\Loader\FilesystemLoader;
?>