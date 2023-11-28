<header>
    <h3>Contacts Page</h3>
</header>

<div>
    <a href="index.php?menuop=register_contact">New Contact</a>
</div>

<div>
    <form action="index.php?menuop=contact" method="post">
        <input type="text" name="search">
        <input type="Submit" value="PESQUISAR">
    </form>
</div>

<div class="my_table">
    <table class="table-dark table-striped table-bordered">
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
            //paginação start
            $amount = 10;
            $page = (isset($_GET["page"]))?(int)$_GET["page"]:1;
            $start = ($amount * $page) - $amount;

            //paginação end

            $search = (isset($_POST["search"]))?$_POST["search"]:"";

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
            FROM table_contacts

            WHERE         
            idContacts = '{$search}' OR
            nameContact LIKE '%{$search}%'
            ORDER BY nameContact ASC
            LIMIT $start, $amount
            ";

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
</div>
<br>


<?php
//continuação paginação
$sqlTotal = "SELECT idContacts FROM table_contacts";
$qrTotal = mysqli_query($conection, $sqlTotal) or die("Erro ao executar a consulta!" . mysqli_error($conection));
$numTotal = mysqli_num_rows($qrTotal);
$totalPage = ceil($numTotal / $amount);
echo "Total de Registro: $numTotal <br>";
echo '<a href="?menuop=contact&page=1">Primeira Página</a> ';

if($page > 6){
    ?>
        <a href="?menuop=contact&page=<?php echo $page-1?>"> << </a>
    <?php
}
for($i = 1; $i <= $totalPage; $i++){    
    if($i >= ($page - 5) && $i <= ($page + 5)){
        if($i == $page){
            echo "$i ";
        }else{
            echo "<a href=\"?menuop=contact&page=$i\"> $i </a> ";
        }
    }
}
if($page < ($totalPage - 5)){
    ?>
        <a href="?menuop=contact&page=<?php echo $page+1?>"> >> </a>
    <?php
}

echo "<a href=\"?menuop=contact&page=$totalPage\">Ultima Página</a> ";
//finalização paginação

?>

