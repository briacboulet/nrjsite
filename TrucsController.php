<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\sites;

class TrucsController extends AppController {

    public function index() {
        
    }

    public function machin() {
        $this->set("nom", "Boulet");
        $this->loadModel("Users"); // invocation Magique 
        $a=$this->Users->find();
        $this->set("toto", $a->toArray(1));
    }
    
    public function test() {
        $this->loadModel("Users");
        $new = $this->Users->newEntity();
        
        if ($this->request->is("post"))
        {
            $new->login = $this->request->data["login"];
            $new->passwd =$this->request->data["passwd"];
            $this->Users->save($new);
        }
        
        $this->set("new", $new);
        
    }
    
    public function testform($idsite)
    {
        $this->loadModel('Sites');
        $new=$this->Sites->newEntity();
        //$idsite=$this->Sites->get($idsite); // recupere la valeur de la bdd 1
       // $=$this->Sites->get($idsite);
        if($this->request->is(['post','put']))
        {
            pr($this->request->data);
            $new=$this->Sites->newEntity();
            $new->name=$this->request->data['name'];
            $new->type=$this->request->data['type'];
            
            //... la suite des champs
            $this->Sites->save($new);
        } // BOUCLE POUR INSERER OU CHANGER CHAMPS DANS LA BDD
        $this->set('new',$new);
        
    }
    
    public function Accueil()
    {
       // $site = sites::get("site");
       // $query = $site->find();
    }
    
    public function Listedessites()
    {
        $this->loadModel("sites");
        $new = $this->sites->NewEntity();
        $a = $this->sites->find();
        $this->set("toto", $a);
        $this->loadModel("records");
        $new = $this->records->newEntity();
        $a = $this->records->find();
        $this->set("toto",$a);
    }
    
    public function detail()
    {
        
        $this->loadModel('Sites');
        $idsite=$this->sites->get($idsite);
      //  $name=$this->sites->get($name);
        
        
       
        /*mysql_connect("localhost", "root", "");
        mysql_select_db("ece_nrj");
        $this->loadModel('sites');
        $new=$this->sites->get($idsite); // recupere la valeur de la bdd 1
        $new=$this->sites->get($name);*/
    }
}
