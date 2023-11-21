<header>
    <h3>Register Contact</h3>
</header>

<div>
    <form action="index.php?menuop=insert_contact" method="post">
        
        <div>
            <label for="nameContact">Nome</label>
            <input type="text" name="nameContact">
        </div>

        <div>
            <label for="emailContact">E-mail</label>
            <input type="email" name="emailContact">
        </div>

        <div>
            <label for="foneContact">Telefone</label>
            <input type="text" name="foneContact">
        </div>

        <div>
            <label for="addressContact">Endereço</label>
            <input type="text" name="addressContact">
        </div>

        <div>
            <label for="genderContact">Sexo</label>
            <input type="text" name="genderContact">
        </div>

        <div>
            <label for="dataNascContact">Data de Nascimento</label>
            <input type="date" name="dataNascContact">
        </div>

        <div>
            <input type="submit" value="Adicionar" name="btnRegisterContact">
        </div>
    </form>
</div>