<?php
require_once "bootstrap.php";

// We need to provide entityManager to the command line interface
// The CLI interface allows us to submit interact with the database
// for example to update or create the schema
return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);