<header>
    <h3>Delete Contact</h3>
</header>
<?php

$idContacts = mysqli_real_escape_string($conection, $_GET["idContacts"]);
$sql = "DELETE FROM table_contacts WHERE idContacts = {$idContacts}";

mysqli_query($conection, $sql) or die("Erro ao excluir o registro!" . mysqli_error($conection));
echo "Registro excluído com sucesso!";

?>