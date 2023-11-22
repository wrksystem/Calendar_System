<?php

$idContacts = $_GET["idContacts"];
$sql = "SELECT * FROM table_contacts WHERE idContacts = {$idContacts}";
$rs = mysqli_query($conection, $sql) or die("Erro ao executar a consulta!" . mysqli_error($conection));
$data = mysqli_fetch_assoc($rs);

?>


<header>
    <h3>Edit Contact</h3>
</header>

<div>
    <form action="index.php?menuop=update_contact" method="post">
        
        <div>
            <label for="idContacts">ID</label>
            <input type="text" name="idContacts" value="<?= $data["idContacts"] ?>">
        </div>

        <div>
            <label for="nameContact">Nome</label>
            <input type="text" name="nameContact" value="<?= $data["nameContact"] ?>">
        </div>

        <div>
            <label for="emailContact">E-mail</label>
            <input type="email" name="emailContact" value="<?= $data["emailContact"] ?>">
        </div>

        <div>
            <label for="foneContact">Telefone</label>
            <input type="text" name="foneContact" value="<?= $data["foneContact"] ?>">
        </div>

        <div>
            <label for="addressContact">Endereço</label>
            <input type="text" name="addressContact" value="<?= $data["addressContact"] ?>">
        </div>

        <div>
            <label for="genderContact">Sexo</label>
            <input type="text" name="genderContact" value="<?= $data["genderContact"] ?>">
        </div>

        <div>
            <label for="dataNascContact">Data de Nascimento</label>
            <input type="date" name="dataNascContact" value="<?= $data["dataNascContact"] ?>">
        </div>

        <div>
            <input type="submit" value="ATUALIZAR" name="btnUpdateContact">
        </div>
    </form>
</div>