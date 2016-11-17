#Brevíssimo tutorial de Doctrine 2

Preparado especialmente para a apresentação intitulada "Doctrine for Dummies"

![](https://github.com/stopassola/doctrine_lab/blob/master/README_imagens/AnuncioApresentacaoDoctrine.png)

1. `cd /RaizWeb`
2. `git clone https://github.com/stopassola/doctrine_lab.git`
3. `cd doctrine_lab`
4. `php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"`
5. `php composer-setup.php`
6. `php composer.phar require doctrine/orm`
7. importe o BD que está em `estrutura.sql`
8. Ajuste o arquivo `bootstrap.php` com as credenciais do BD:

	```php
	$conexao = array(
	    'driver'   => 'pdo_mysql',
	    'host'     => 'localhost',
	    'dbname'   => 'doctrine_lab',
	    'user'     => 'usuario_bd',
	    'password' => 'senha'
	);
	```

9. Abra o navegador e acesse <http://localhost/doctrine_lab>

Material preparado por **Ari Stopassola Junior** para uma mini-apresentação no MeetUp do PHPRS Subseção Canela/Gramado, ocorrido no dia 26/11/2016 às 14h no Hotel Klein Ville (em Canela):

<https://www.facebook.com/events/363441330713799/>

<http://www.meetup.com/pt-BR/PHP-RS/events/234978772/>

<http://www.phprs.com.br>

<https://phprs.slack.com>
