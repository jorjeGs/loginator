<?php 

if(isset($_GET['modulo1'])) {
    echo $_GET['modulo1'];
    $pageTitle = $_GET['modulo1'];
}
else {
    $pageTitle = 'Index Home';
}


?>


<h1>This is <?php echo $pageTitle ?></h1>