<?php 


$em = $this->getDoctrine()->getManager(); // ...or getEntityManager() prior to Symfony 2.1
$connection = $em->getConnection();
$statement = $connection->prepare("SELECT * FROM carte WHERE id = :id");
$statement->bindValue('id', 1);
$statement->execute();

$results = $statement->fetchAll();

echo "bkfjfbgj";	