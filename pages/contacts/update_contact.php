<header>
    <h3>Update Contact</h3>
</header>

<?php

    $idContacts = mysqli_real_escape_string($conection, $_POST["idContacts"]);
    $nameContact = mysqli_real_escape_string($conection, $_POST["nameContact"]);
    $emailContact = mysqli_real_escape_string($conection, $_POST["emailContact"]);
    $foneContact = mysqli_real_escape_string($conection, $_POST["foneContact"]);
    $addressContact = mysqli_real_escape_string($conection, $_POST["addressContact"]);
    $genderContact = mysqli_real_escape_string($conection, $_POST["genderContact"]);
    $dataNascContact = mysqli_real_escape_string($conection, $_POST["dataNascContact"]);
    
    $sql = "UPDATE table_contacts SET
        nameContact = '{$nameContact}',
        emailContact = '{$emailContact}',
        foneContact = '{$foneContact}',
        addressContact = '{$addressContact}',
        genderContact = '{$genderContact}',
        dataNascContact = '{$dataNascContact}'
        WHERE idContacts = {$idContacts}
        ";

    mysqli_query($conection, $sql) or die("Erro ao executar a consulta!" . mysqli_error($conection));
    echo "O registro foi atualizado com sucesso!";

?>