<?php $pagina_attuale='AccediReg.php'; ?>
<!DOCTYPE  html>			
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it" >

    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <meta name="description" content=" Ambulatorio veterinario di Archimedeo Torre per la cura di animali d'affezione, quali cani e gatti" />
      <meta name="keywords" content="ambulatorio, veterinario, Archimedeo, Torre, animali, cani, gatti, pets, dogs, cats, vet" />
      <meta name="language" content="italian it"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/style2.css">
        <link rel="stylesheet" type="text/css" href="print.css" media="print">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <title>Ambulatorio Veterinario Archimedeo Torre</title>
    </head>

		<script>
        	function check() {
    			if (document.getElementById('password').value == document.getElementById('controlPassword').value){
					document.getElementById('pswMessage').innerHTML = '';
					document.getElementById('submit').disabled = false;
				}
    			else {
    				document.getElementById('pswMessage').innerHTML = 'Attenzione! Le password devono coincidere';
        			document.getElementById('submit').disabled = true;
    			}
			}
        </script>
	
<body>



<?php include_once"header.php"?>

<!--menu di navigazione-->
<?php include_once"navbar.php"?>

<?php
              $access = new DBAccess();
              $connection = $access->openDBConnection();
              
              if(!$connection) die("Errore nella connessione");
              
              else{
              	
              	
            	$messaggioErrore = "";
		        if (isset($_REQUEST['email'])){
                  	if($_REQUEST['password'] != $_REQUEST['controlPassword']){
                    	$messaggioErrore .= "ATTENZIONE! Le due password devono coincidere.";
                    }
		            else{
						$result = $access->insertUser($_REQUEST['email'],$_REQUEST['name'],$_REQUEST['surname'],$_REQUEST['telefono'],$_REQUEST['password']);
                		if($result){
                			$email = stripslashes($_REQUEST['email']);
                			$email = mysqli_real_escape_string($access->connessione,$email);
                  			header("Location: RegistrazioneEffettuata.php");
                		}	
					}
              	}
	          	?>

<div id="page" class="container">
<!--breadcrumb-->

<ul class="breadcrumb">
  <li>Ti trovi in: </li>
  <li><a href="index2.php"><span xml:lang="en" lang="en">Home</span></a></li>
  <li><a href="AccediReg.php">Accedi/Registrati</a></li>
  <li class="bc_here">Registrati</li>
</ul>

<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

<script type="text/javascript" src="js/script.js"></script>

<!--un po' di separazione-->
<br/>
<br/>

<!-- contenuto -->

<div id="content">

  <div class="LoginBox">
            	<h1>Registrazione</h1>

	          	<h2 class="messaggio"> <?php echo $messaggioErrore; ?> </h2>
              
              <div class="BoxLogin">
	          	<div class="loginAndRegistrationForm">
	            	<form name="registration" action="<?php echo $_SERVER [ 'PHP_SELF']; ?>" method="post">
                    <p><label for="name">Nome: </label> </p> <fieldset><input id="name" type="text" name="name" placeholder="Nome" required /></fieldset>
                    	
                    <p><label for="surname">Cognome: </label> </p> <fieldset><input id="surname" type="text" name="surname" placeholder="Cognome" required /></fieldset>
          	    		
                    <p><span xml:lang="en" lang="en"><label for="telefono">Telefono: </label></span> </p> <fieldset><input id="telefono" type="text" name="telefono" placeholder="Telefono" required /></fieldset>
          	    		
                    <p><span xml:lang="en" lang="en"><label for="email">Indirizzo e-mail: </label></span> </p> <fieldset><input id="email" type="email" name="email" placeholder="Email" required /></fieldset>
	           	    	
                    <p><span xml:lang="en" lang="en"><label for="password">Password: </label></span> </p> <fieldset><input type="password" name="password" id="password" onkeyup="check();" placeholder="Password" required /></fieldset>
                    
                    <p><label for="controlPassword">Reinserisci la <span xml:lang="en" lang="en">password: </span></label> </p> <fieldset><input id="controlPassword" type="password" name="controlPassword" onkeyup="check();" placeholder="Password" required /></fieldset>
                    	<h2 class="message" id="pswMessage"></h2>
                    	
		            	<p><button type="submit" name="submit" id="submit" disabled>Registrati</button></p>
	            	</form>
	          	</div>
            </div>
            
	          <?php
            	} ?>
        	</div>

</div>
<?php include_once"footer.php"?>

</body>
</html>