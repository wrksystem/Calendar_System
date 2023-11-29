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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./assets/css/default-style.css">
    <title>Calendar System 1.0</title>
</head>
<body>
    <header class="bg-dark">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
                <a class="navbar-brand" href="#">
                    <img src="assets/img/logo_agendador.png" alt="Calendar_System" width="120">
                </a>                
                <div class="collapse navbar-collapse" id="contentNavbarSuport">
                    <ul class="navbar-nav mr-auto" >
                        <li class="nav-item active"><a class="nav-link" href="index.php?menuop=home">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php?menuop=contact">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php?menuop=tasks">Tasks</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php?menuop=events">Events</a></li>
                    </ul>
                </div>
                
            </nav>
        </div>
    </header>
    <main>

    <div class="container">
    
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
    </div>    
    </main>
    <footer class="container-fluid fixed-bottom bg-dark">
        <div class="text-center">Calendar System V 1.0</div>
    </footer>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="./js/validation.js"></script>
</body>
</html>