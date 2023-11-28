<?php
include("db/conection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Calendar System 1.0</title>
</head>
<body>
    <header>
        <h1>Calendar System 1.0</h1>
        <nav>
            <a href="index.php?menuop=home">Home</a> |
            <a href="index.php?menuop=contact">Contact</a> |
            <a href="index.php?menuop=tasks">Tasks</a> |
            <a href="index.php?menuop=events">Events</a> 
        </nav>
    </header>
    <main>
    <hr>
    <?php
        $menuop = (isset($_GET["menuop"]))?$_GET["menuop"]:"home";

        switch($menuop){
            case 'home':
                include("pages/home/home.php");
                break;
            case 'contact':
                include("pages/contacts/contacts.php");
                break;
            case 'register_contact':
                include("pages/contacts/register_contact.php");
                break;
            case 'insert_contact':
                include("pages/contacts/insert_contact.php");
                break;
            case 'edit_contact':
                include("pages/contacts/edit_contact.php");
                break;
            case 'update_contact':
                include("pages/contacts/update_contact.php");
                break;
            case 'delete_contact':
                include("pages/contacts/delete_contact.php");
                break;    
            case 'tasks':
                include("pages/tasks/tasks.php");
                break;
            case 'events':
                include("pages/events/events.php");
                break;
            default:
                include("pages/home/home.php");
                break;
        }
    ?>    
    </main>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
</body>
</html>