Bonjour <?php echo $nom;?>
<?php pr($toto);?>  

<table>
    <?php 
    foreach($toto as $u)
         {echo"<tr>";
            echo"<td>".$u->login."</td>";   
            echo"<td>".$u->passwd."</td>";
         echo"</tr>";}
         ?>
    <?php $this->assign("title", "Bidule");?>
    <?= $this->html->link("click me",["controller"=>"Trucs", "action"=>"machin"]); ?>
    <?php 
        echo $this->form->create();
        echo $this->form->input("login");
        echo $this->form->input("password");
        echo $this->form->submit();
        echo $this->form->end();
    ?>
     
    
    
</table>

