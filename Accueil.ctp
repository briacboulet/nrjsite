<link rel="stylesheet" href="style.css" />


<head>
    <title> Accueil </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
    
<body>
     <nav class="menu">
  <ul>
    <li class="aligner"><a href="Accueil">Accueil</a></li>
    <li class="aligner"><a href="Listedessites">Liste des sites</a></li>
    <li class="aligner"><a href="detail">Détail d'un site </a></li>
    <li class="aligner"><a href="#Contact">Fondateurs</a></li>
  </ul>
</nav>
    <h1> Bienvenu sur notre site de répertoriement des differents sites energétiques </h1>
  <?php
            echo $this->Form->control('id');
        ?>

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