
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
    
    
    
<?php
pr($new);
?>

<?= $this->Form->create()?>
<?= $this->Form->input('idsite')?>
<?= $this->Form->input('name')?>
<?= $this->Form->submit()?>
<?= $this->Form->end()?>






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
