<header>
    <h3>Contacts Page</h3>
</header>

<table border="1" >
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Gender</th>
            <th>Data Nasc</th>            
        </tr>
    </thead>
    <tbody>
    <?php
        $sql = "SELECT * FROM table_contacts";
        $rs = mysqli_query($conection, $sql) or die("Erro ao executar a consulta!" . mysqli_error($conection));
        
        while($data = mysqli_fetch_assoc($rs) ){            
        
    ?>
        <tr>
            <td><?= $data["idContacts"] ?></td>
            <td><?= $data["nameContact"] ?></td>
            <td><?= $data["emailContact"] ?></td>
            <td><?= $data["foneContact"] ?></td>
            <td><?= $data["genderContact"] ?></td>
            <td><?= $data["dataNascContact"] ?></td>
        </tr>
    <?php
        }
    ?>    
    </tbody>
</table>

