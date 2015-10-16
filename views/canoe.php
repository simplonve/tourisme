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
		<header>
            <?php
                include('layout/header.php');
                include('layout/nav.php');
            ?>
            <h1><?php echo TXT_TITREH1;?></h1>
            <h2><?php echo TXT_TITREH2;?></h2>
        </header>
		<h1>Page canoe en Val'Eyrieux</h1>
 	</body>
 </html>