<!-- Page pour la suppression d'un monstre de la base de données 
La suppression se produit si on clique sur supprimer-->

<?php
	require __DIR__ . '/functions.php';

	
	$nom=isset($_GET['name'])? $_GET['name'] : NULL;
    	deleteMonster($nom);
    	
    
    $monsters = getMonsters3();
    
	
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Monsters League</title>

        <!-- CSS files -->
        <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    </head>
    <body>
    	 <br/>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Monsters League</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>

                    <!--Création d'un nouveau onglet pour l'administrateur de la base de donnée du site, page qui lui permettra d'ajouter, modifier ou supprimer un monstre-->

                    <li class="nav-item active">
                        <a class="nav-link" href="identifiants.php">Admin <span class="sr-only">(current)</span></a>
                    </li>
                </ul>

                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
     

        		<div class="container">
         		   
         			 <h3> Members of the monster league</h3><br/><br/>
           			 <table class="table table-hover">
                		<caption><!--<i class="fas fa-info"></i> --></caption>
                		<thead>
                    		<tr>
                        		<th>Name</th>
                       			<th>Strength</th>
                        		<th>Life</th>
                        		<th>Type</th>
                        		<th></th>
                    		</tr>
                		</thead>
                		<tbody>
                    		<?php 
                    		foreach ($monsters as $monster) { ?>
                        		<tr>
                            		<td><?php echo $monster->getName(); ?></td>
                            		<td><?php echo $monster->getStrength(); ?></td>
                            		<td><?php echo $monster->getLife(); ?></td>
                            		<td><?php echo $monster->getType(); ?></td>
                            	</tr>
                            <?php } ?>
                        </tbody>
                     </table>  
                </div>
        


        <footer>
            <div class="container">
                <p>Copyright © 2019 Monsters League</p>
            </div>
        </footer>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
    </body>
</html>

        

