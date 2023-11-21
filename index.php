<?php
include("db/conection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
</body>
</html>