<?php
session_start();
if (isset($_SESSION['error']) && isset($_SESSION['error_code'])) {

	$error = $_SESSION['error'];
    $error_code = $_SESSION['error_code'];
    if (isset($_SESSION['error_link'])) {
        $error_link = $_SESSION['error_link'];
        unset($_SESSION['error_link']);
    }
	unset($_SESSION['error']);
    unset($_SESSION['error_code']);





}
else{
	header('Location: index.php');
}

$pagina_attuale = 'error.php';

?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="description"
          content=" Ambulatorio veterinario di Archimedeo Torre per la cura di animali d'affezione, quali cani e gatti"/>
    <meta name="keywords"
          content="ambulatorio, veterinario, Archimedeo, Torre, animali, cani, gatti, pets, dogs, cats, vet"/>
    <meta name="language" content="italian it"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <link rel="stylesheet" type="text/css" href="css/print.css" media="print">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <title>Ambulatorio Veterinario Archimedeo Torre</title>
</head>

<body>

<?php include_once "header.php" ?>

<!--menu di navigazione-->
<?php include_once "navbar.php" ?>

<div id="page" class="container">
    <!--breadcrumb-->

    <ul class="breadcrumb">
        <li>Ti trovi in:</li>
        <li><a href="index.php"><span xml:lang="en" lang="en">Home</span></a></li>
        <li><a href="AreaPersonale.php">Area Personale</a></li>
        <li><a href="galleriaGestione.php">Gestione Galleria</a></li>
        <li class="bc_here">Modifica</li>
    </ul>

    <br/>
    <br/>
    <div class="noprint" id="content">
        <div id="title1"><h2>Errore</h2></div>

        <h3 id="errorcode"><?php echo $error_code; ?></h3>
        <p id="errormsg"><?php echo $error; ?></p>
        <?php if (isset($error_link)) { ?> <p id="errorlink"> <a href="<?php echo $error_link; ?>">clicca qui</a> per
            tornare indietro</p><?php } ?>
        <a id="tornahome" href="index.php">Torna alla <span xml:lang="en" lang="en">Home</span></a>
    </div> <!--chiusura tag page-->

    <?php include_once "footer.php" ?>
</div>
</body>
</html>



