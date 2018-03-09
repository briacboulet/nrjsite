<link rel="stylesheet" href="style.css" />

<head>
    <title> Liste des sites </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
   
  <nav class="menu">
      <ul>
            <li class="aligner"><a href="Accueil">Accueil</a></li>
            <li class="aligner"><a href="Listedessites">Liste des sites</a></li>
            <li class="aligner"><a href="detail">Détail d'un site </a></li>
            <li class="aligner"><a href="#Contact">Fondateurs</a></li>
      </ul>
  </nav>
    
    <p> Veuillez trouver ci dessous la liste des sites présent dans notre site et leurs informations relatives </p>
    
    <?php  
        mysql_connect("localhost", "root", "");
        mysql_select_db("ece_nrj");
         
        $reponse = mysql_query("SELECT * FROM sites ");
        ?>
         
        <table>
                <tr>
                    <td>id</td>
                    <td>nom</td>
                    <td>Location_x</td>
                    <td>Location_y</td>
                    <td>stock</td>
                    <td>Type</td>
                
                </tr>
            <?php  
            
            while($donnees = mysql_fetch_array($reponse))
            {
            ?>
                <tr>
                    <th><?php echo $donnees['id'];?></th>
                    <th><?php echo $donnees['name'];?></th>
                    <th><?php echo $donnees['location_x'];?></th>
                    <th><?php echo $donnees['location_y'];?></th>
                    <th><?php echo $donnees['stock'];?></th>
                    <th><?php echo $donnees['type'];?></th>
                </tr> 
         <?php
            } //fin de la boucle, le tableau contient toute la BDD
               
               mysql_close();  
              ?> 
        </table> 
   
</body> 




<style>
p
{
    color: blue;
}

body
{
    background-color: cornsilk;
}

href
{
    color:white;
}

.aligner
{
    display:inline;
}

.menu
{
    align:center;
    justify-content: space-around;
}

</style>
