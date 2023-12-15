<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loginator - Home</title>
</head>
<body>
    <h1>Loginator</h1>
    <p>Home Page</p>
    <button>logout</button>
    <div class="container">
        <?php 
            switch ($_GET['modulo1']) {
                case 'tasks':
                    $pageTitle = 'Tasks';
                    break;
                case 'projects':
                    $pageTitle = 'Projects';
                    break;
                case 'users':
                    $pageTitle = 'Users';
                    break;
                default:
                    $pageTitle = 'Index Home';
                    break;
            }
        ?>
        <?php echo '<h1>this is '. $pageTitle . ' content</h1>' ?>
    </div>
</body>
</html>