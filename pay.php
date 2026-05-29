<?php

session_start();

include("db.php");

$nom = $_SESSION['nom'];

$service = $_POST['service'];

$montant = $_POST['montant'];

$sql = "INSERT INTO paiement(

nom_client,
service,
montant

)

VALUES(

'$nom',
'$service',
'$montant'

)";

mysqli_query($conn,$sql);

echo "Paiement effectué ✅";

?>