<?php
	session_start();
    require('../translate/language.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
        <link rel="stylesheet" href="../css/style.css" />
        <title><?php echo TXT_TOURISME;?></title>
    </head>
    <body>
        <?php
            include('layout/header.php');
            include('layout/nav.php');
            include('formulaire_criteres.php');
        ?>
	</body>
</html>
