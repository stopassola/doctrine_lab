<?php
require_once "bootstrap.php";

//Cria um novo produto
$produto = new Produto();
$produto->setNome('Caffeine - Atlhetica Pro Serie');

//Salva no banco de dados
$entityManager->persist($produto);
$entityManager->flush();

echo "Criou o produto com o codigo: ".$produto->getId()."<br>";

//Obtem TODOS os produtos
$produtos = $entityManager->getRepository('Produto')->findAll();
echo "<strong>Listando todos os produtos</strong><br>";
foreach($produtos as $prod){
    echo $prod->getNome()."<br>";
	}	

//Agora apaga
$produto = $entityManager->find('Produto', 5);
$entityManager->remove($produto);
$entityManager->flush();
echo "<strong>Produto apagado</strong>";
?>