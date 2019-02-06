<?php require_once('DB_Access.php'); ?>
<?php session_start(); ?>
<nav role="navigation">
  <div id="menuToggle">

    <input type="checkbox" />

    <span></span>
    <span></span>
    <span></span>
    
    <ul id="menu">
      <li <?php if($pagina_attuale=='index2.php') echo "class='active2'"; ?> ><a href='index2.php#'>Home</a></li>
          <li <?php if($pagina_attuale=='Servizi.php') echo "class='active2'"; ?>><a href='Servizi.php#'>Servizi</a></li>
          <li <?php if($pagina_attuale=='Emergenze.php') echo "class='active2'"; ?>><a href='Emergenze.php#'>Emergenze</a> </li>
          <li <?php if($pagina_attuale=='galleria.php') echo "class='active2'"; ?>><a href='galleria.php#'>Galleria</a></li>
          <li <?php if($pagina_attuale=='Link.php') echo "class='active2'"; ?>><a href='Link.php#'>Link Utili</a></li>
          <li <?php if($pagina_attuale=='Contattaci.php') echo "class='active2'"; ?>><a href='Contattaci.php#'>Contattaci</a></li>
          <li><a></br></a></li>
		  <?php
                	
                    $access = new DBAccess();
            		$connection = $access->openDBConnection();

                    if(!$connection) die("Errore nella connessione.");
                    if(isset($_SESSION['email'])){	?>
						<li <?php if($pagina_attuale=='AccediReg.php') echo "class='current'"; ?>><a href='AreaPersonale.php#'>Area Personale</a></li>
					<?php
                	}
                    else { ?>
                		<li <?php if($pagina_attuale=='AccediReg.php') echo "class='active2'"; ?>><a href='AccediReg.php#'>Accedi/Registrati</a></li>
                	<?php
                	}
                ?>
          
    </ul>
  </div>
</nav>

<div class='nav'>
 <ul>
          <li <?php if($pagina_attuale=='index2.php') echo "class='current'"; ?> ><a href='index2.php#'>Home</a></li>
          <li <?php if($pagina_attuale=='Servizi.php') echo "class='current'"; ?>><a href='Servizi.php#'>Servizi</a></li>
          <li <?php if($pagina_attuale=='Emergenze.php') echo "class='current'"; ?>><a href='Emergenze.php#'>Emergenze</a> </li>
          <li <?php if($pagina_attuale=='galleria.php') echo "class='current'"; ?>><a href='galleria.php#'>Galleria</a></li>
          <li <?php if($pagina_attuale=='Link.php') echo "class='current'"; ?>><a href='Link.php#'>Link Utili</a></li>
          <li <?php if($pagina_attuale=='Contattaci.php') echo "class='current'"; ?>><a href='Contattaci.php#'>Contattaci</a></li>
		  <?php
                	
                    $access = new DBAccess();
            		$connection = $access->openDBConnection();

                    if(!$connection) die("Errore nella connessione.");
                    if(isset($_SESSION['email'])){	?>
						<li <?php if($pagina_attuale=='AccediReg.php') echo "class='current'"; ?>><a href='AreaPersonale.php#'>Area Personale</a></li>
					<?php
                	}
                    else { ?>
                		<li <?php if($pagina_attuale=='AccediReg.php') echo "class='active2'"; ?>><a href='AccediReg.php#'>Accedi/Registrati</a></li>
                	<?php
                	}
                ?>
          
</ul>
       <div class='search'>
            <input type='text' class='searchTerm' placeholder='Cerca...'>
            <button type='submit' class='searchButton'>
            <i class='fa fa-search'></i></button></div> </div>

  <div id='img'>
        <img src='img/banner.jpg' width='100%'/></div>
