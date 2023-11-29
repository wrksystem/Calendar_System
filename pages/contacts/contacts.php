<header>
    <h3><i class="bi bi-person-square"></i> Contacts Page</h3>
</header>

<div>
    <a class="btn btn-success btn-sn mb-2" href="index.php?menuop=register_contact"><i class="bi bi-person-plus-fill"></i> NEW CONTACT</a>
</div>

<div>
    <form action="index.php?menuop=contact" method="post">
        <div class="input-group">
            <input class="form-control" type="text" name="search">
            <button class="btn btn-primary btn-sn" type="submit"><i class="bi bi-search"></i>PESQUISAR</button>
        </div>
    </form>
</div>

<div class="my_table">
    <table class="table-dark table-striped table-bordered table-sn">
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
                <td class="text-nowrap"><?= $data["nameContact"] ?></td>
                <td class="text-nowrap"><?= $data["emailContact"] ?></td>
                <td class="text-nowrap"><?= $data["foneContact"] ?></td>
                <td class="text-nowrap"><?= $data["addressContact"] ?></td>
                <td><?= $data["genderContact"] ?></td>
                <td><?= $data["dataNascContact"] ?></td>
                <td class="text-center">
                    <a class="btn btn-warning btn-sn" href="index.php?menuop=edit_contact&idContacts=<?= $data["idContacts"] ?>"><i class="bi bi-pencil-square"></i></a>
                </td>
                <td class="text-center">
                    <a class="btn btn-danger btn-sn" href="index.php?menuop=delete_contact&idContacts=<?= $data["idContacts"] ?>"><i class="bi bi-trash"></i></a>
                </td>
            </tr>
        <?php
            }
        ?>    
        </tbody>
    </table>
</div>

<ul class="pagination justify-content-center">
<?php
//continuação paginação
    $sqlTotal = "SELECT idContacts FROM table_contacts";
    $qrTotal = mysqli_query($conection, $sqlTotal) or die("Erro ao executar a consulta!" . mysqli_error($conection));
    $numTotal = mysqli_num_rows($qrTotal);
    $totalPage = ceil($numTotal / $amount);
    
    echo "<li class='page-item'><span class='page-link'>Total Registros:" . $numTotal . "</span></li>";
    echo '<li class="page-item"><a class="page-link" href="?menuop=contact&page=1">Primeira Página</a></li> ';

    if($page > 6){
        ?>
            <li class="page-item"><a class="page-link" href="?menuop=contact&page=<?php echo $page-1?>"> <<< </a></li>
        <?php
    }
    for($i = 1; $i <= $totalPage; $i++){    
        if($i >= ($page - 5) && $i <= ($page + 5)){
            if($i == $page){
                echo "<li class='page-item active'><span class='page-link'>$i</span></li>";
            }else{
                echo "<li class='page-item'><a class='page-link' href=\"?menuop=contact&page=$i\"> $i </a></li>";
            }
        }
    }
    if($page < ($totalPage - 5)){
        ?>
            <li class="page-item"><a class="page-link" href="?menuop=contact&page=<?php echo $page+1?>"> >>> </a></li>
        <?php
    }

    echo "<li class='page-item'><a class='page-link' href=\"?menuop=contact&page=$totalPage\">Ultima Página</a></li>";
    //finalização paginação

?>
</ul>

