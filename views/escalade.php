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
        ?>
        <header>
            <h1><?php echo TXT_TITREH1;?></h1>
            <h2><?php echo TXT_TITREH2;?></h2>
        </header>
		<h1>Page escalade en Val'Eyrieux</h1>
        <div>
             <?php
                include('layout/footer.php');
             ?>
        </div>
 	</body>
 </html>