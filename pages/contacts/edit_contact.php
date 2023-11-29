<?php

$idContacts = $_GET["idContacts"];
$sql = "SELECT * FROM table_contacts WHERE idContacts = {$idContacts}";
$rs = mysqli_query($conection, $sql) or die("Erro ao executar a consulta!" . mysqli_error($conection));
$data = mysqli_fetch_assoc($rs);

?>


<header>
    <h3><i class="bi bi-person-square"></i> Edit Contact</h3>
</header>

<div>
    <form class="needs-validation" action="index.php?menuop=update_contact" method="post" novalidate>
        
        <div class="row">
            <div class="mb-3 col-3">
                <label  class="form-label" for="idContacts">ID</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-key-fill"></i></span>
                    <input class="form-control" type="text" name="idContacts" value="<?= $data["idContacts"] ?>">
                </div>            
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label" for="nameContact">Nome</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                <input class="form-control" type="text" name="nameContact" value="<?= $data["nameContact"] ?>">
                
            </div>            
        </div>

        <div class="mb-3">
            <label class="form-label" for="emailContact">E-mail</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
                <input class="form-control" type="email" name="emailContact" value="<?= $data["emailContact"] ?>">
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label" for="foneContact">Telefone</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                <input class="form-control" type="text" name="foneContact" value="<?= $data["foneContact"] ?>">
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label" for="addressContact">Endereço</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-geo-alt-fill"></i></span>
                <input class="form-control" type="text" name="addressContact" value="<?= $data["addressContact"] ?>">
            </div>    
        </div>

        <div class="row">
            <div class="mb-3 col-6">
                <label class="form-label" for="genderContact">Sexo</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-gender-ambiguous"></i></span>
                    <select class="form-select form-control" id="genderContact" name="genderContact">
                        <option <?php if ($data["genderContact"] == " ") echo  "selected"?> value="">Selecione o Gênero</option>
                        <option <?php if ($data["genderContact"] == "M") echo  "selected"?> value="">Masculino</option>
                        <option <?php if ($data["genderContact"] == "F") echo  "selected"?> value="">Feminino</option>
                        <option <?php if ($data["genderContact"] == "O") echo  "selected"?> value="">Outros</option>
                    </select>
                </div>
                
            </div>

            <div class="mb-3 col-6"> 
                <label class="form-label" for="dataNascContact">Data de Nascimento</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-calendar-fill"></i></span>
                    <input class="form-control" type="date" name="dataNascContact" value="<?= $data["dataNascContact"] ?>">
                </div>
            </div>
        </div>
            
        

        <div class="mb-3">
            <input class="form-control btn btn-warning" type="submit" value="ATUALIZAR" name="btnUpdateContact">
        </div>
    </form>
</div>