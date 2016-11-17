<?php
require_once "vendor/autoload.php";
require_once "src/Produto.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
$config = Setup::createAnnotationMetadataConfiguration(array("./src"));

//Configura a base de dados
$conexao = array(
    'driver'   => 'pdo_mysql',
    'host'     => 'localhost',
    'dbname'   => 'doctrine_lab',
    'user'     => 'usuario_bd',
    'password' => 'senha'
);

//Disponibiliza o EntityManager
$entityManager = EntityManager::create($conexao, $config);