<header>
    <h3>Contacts Page</h3>
</header>

<div>
    <a href="index.php?menuop=register_contact">New Contact</a>
</div>

<table border="1" >
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Gender</th>
            <th>Data Nasc</th>
            <th>Edit</th>
            <th>Delete</th>            
        </tr>
    </thead>
    <tbody>
    <?php
        $sql = "SELECT 
        idContacts,
        upper(nameContact) AS nameContact,
        lower(emailContact) AS emailContact,
        foneContact,
        upper(addressContact) AS addressContact,
        CASE
            WHEN genderContact = 'M' THEN 'MASCULINO'
            WHEN genderContact = 'F' THEN 'FEMININO'
        ELSE
            'NÃO ESPECIFICADO'
        END AS genderContact,
        DATE_FORMAT(dataNascContact, '%d/%m/%Y') AS dataNascContact
        FROM table_contacts";

        $rs = mysqli_query($conection, $sql) or die("Erro ao executar a consulta!" . mysqli_error($conection));
        
        while($data = mysqli_fetch_assoc($rs) ){            
        
    ?>
        <tr>
            <td><?= $data["idContacts"] ?></td>
            <td><?= $data["nameContact"] ?></td>
            <td><?= $data["emailContact"] ?></td>
            <td><?= $data["foneContact"] ?></td>
            <td><?= $data["addressContact"] ?></td>
            <td><?= $data["genderContact"] ?></td>
            <td><?= $data["dataNascContact"] ?></td>
            <td><a href="index.php?menuop=edit_contact&idContacts=<?= $data["idContacts"] ?>">Edit</a></td>
            <td><a href="index.php?menuop=delete_contact&idContacts=<?= $data["idContacts"] ?>">Delete</a></td>
        </tr>
    <?php
        }
    ?>    
    </tbody>
</table>

