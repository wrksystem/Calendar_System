<header>
    <h3>Insert Contact</h3>
</header>

<?php

    $nameContact = mysqli_real_escape_string($conection, $_POST["nameContact"]);
    $emailContact = mysqli_real_escape_string($conection, $_POST["emailContact"]);
    $foneContact = mysqli_real_escape_string($conection, $_POST["foneContact"]);
    $addressContact = mysqli_real_escape_string($conection, $_POST["addressContact"]);
    $genderContact = mysqli_real_escape_string($conection, $_POST["genderContact"]);
    $dataNascContact = mysqli_real_escape_string($conection, $_POST["dataNascContact"]);
    
    $sql = "INSERT INTO table_contacts(
        nameContact, 
        emailContact, 
        foneContact,
        addressContact, 
        genderContact, 
        dataNascContact
    ) VALUES (
        '{$nameContact}',
        '{$emailContact}',
        '{$foneContact}',
        '{$addressContact}',
        '{$genderContact}',
        '{$dataNascContact}'
    )";

    mysqli_query($conection, $sql) or die("Erro ao executar a consulta!" . mysqli_error($conection));
    echo "O registro foi inserido com sucesso!";

?>