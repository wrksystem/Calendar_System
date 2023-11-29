<header>
    <h3><i class="bi bi-person-square"></i> Register Contact</h3>
</header>

<div>
    <form action="index.php?menuop=insert_contact" method="post">
        
        <div  class="mb-3">
            <label class="form-label" class="form-label" for="nameContact">Nome</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                <input class="form-control" type="text" name="nameContact">
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label" for="emailContact">E-mail</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
                <input class="form-control" type="email" name="emailContact">
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label" for="foneContact">Telefone</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                <input class="form-control" type="text" name="foneContact">
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label" for="addressContact">Endereço</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-geo-alt-fill"></i></span>
                <input class="form-control" type="text" name="addressContact">
            </div>
        </div>

        <div class="row">
            <div class="mb-3 col-6">
                <label class="form-label" for="genderContact">Sexo</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-gender-ambiguous"></i></span>
                    <select class="form-select form-control" name="genderContact" id="genderContact">
                        <option selected>Selecione o Gênero</option>
                        <option value="M">Masculino</option>
                        <option value="F">Feminino</option>
                        <option value="O">Outros</option>                
                    </select>
                </div>
            </div>

            <div class="mb-3 col-6">
                <label class="form-label" for="dataNascContact">Data de Nascimento</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-calendar-fill"></i></span>
                    <input class="form-control" type="date" name="dataNascContact">
                </div>
            </div>
        </div>       

        <div class="mb-3">
            <input class="btn btn-success form-control" type="submit" value="Adicionar" name="btnRegisterContact">
        </div>
    </form>
</div>