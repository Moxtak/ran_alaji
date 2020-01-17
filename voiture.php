<?php
class voiture
{
    //properties
    public $modele;
    public $type;
    public $couleur;
    public $annee;
    public $etat = "off";
    function __construct($c_modele, $c_type, $c_couleur,  $c_annee)
    {
        $this->modele = $c_modele;
        $this->type = $c_type;
        $this->couleur = $c_couleur;
        $this->annee = $c_annee;
    }
    // methods
    function getmodele()
    {
        return $this->modele;
    }
    function setmodele($p_modele)
    {
        $this->modele = $p_modele;
    }
    function gettype()
    {
        return $this->type;
    }
    function settype($p_type)
    {
        $this->type = $p_type;
    }
    function getcouleur()
    {
        return $this->couleur;
    }
    function setcouleur($p_couleur)
    {
        $this->couleur = $p_couleur;
    }
    function getannee()
    {
        return $this->annee;
    }
    function setannee($p_annee)
    {
        $this->annee = $p_annee;
    }
    function getetat()
    {
        return $this->etat;
    }
    function setetat($p_etat)
    {
        $this->etat = $p_etat;
    }
    function tpe()
    {
        return $this->modele . " " . $this->type . " " . $this->couleur . " " . $this->annee . " ";
    }
    //function
    function  on()
    {
        if ($this->etat === "off") {
            echo $this->tpe() . "moteur demarré";
            $this->setetat("on");
        } else {
            echo $this->tpe() . " moteur deja demaré!!!reflechi mec!!!";
        }
    }
    function accelere()
    {
        if ($this->etat == "on") {
            echo $this->tpe() . "acceleration V=50Km/h";
            $this->setetat("50 Km/h");
            return;
        } elseif ($this->etat == "50 Km/h") {
            echo $this->tpe() . "acceleration V=100Km/h";
            $this->setetat("100 Km/h");
            return;
        } elseif ($this->etat == "100 Km/h") {
            echo $this->tpe() . "vitesse max ateinte c'est une 205 mec ralenti";
            return;
        } elseif ($this->etat == "off") {
            echo $this->tpe() . "demarre d'abord mec!!!";
            return;
        }
    }
    function deccelere()
    {
        if ($this->etat == "50 Km/h") {
            echo $this->tpe() . "decceleration V=0Km/h vehicule immobile touche plus a rien";
            $this->setetat("on");
            return;
        } elseif ($this->etat == "100 Km/h") {
            echo $this->tpe() . "decceleration V=50Km/h";
            $this->setetat("50 Km/h");
            return;
        } elseif ($this->etat == "on") {
            echo $this->tpe() . "je t'ai dit : vehicule à l'arret";
            return;
        } elseif ($this->etat == "off") {
            echo $this->tpe() . "moteur à l'arret decceleration impossible t'es sur d'avoir ton permis???";
            return;
        }
    }
    function off()
    {
        if ($this->etat == "on") {
            echo $this->tpe() . "moteur arreté";
            $this->setetat("off");
            return;
        } elseif ($this->etat == "off") {
            echo $this->tpe() . "moteur deja à l'arret prend un velib!!!!!";
            return;
        } elseif ($this->etat == "50 Km/h") {
            echo $this->tpe() . "ralenti avant mec";
            return;
        } elseif ($this->etat == "100 Km/h") {
            echo $this->tpe() . "ralenti avant mec";
            return;
        }
    }
}
$a = new voiture("peugeot", "205", "blouge", "1985");
echo '<br>';
echo $a->tpe();
echo '<br>';
$a->on();
echo '<br>';
$a->on();
echo '<br>';
$a->accelere();
echo '<br>';
$a->accelere();
echo '<br>';
$a->accelere();
echo '<br>';
$a->deccelere();
echo '<br>';
$a->deccelere();
echo '<br>';
$a->deccelere();
echo '<br>';
$a->off();
echo '<br>';
$a->deccelere();
echo '<br>';
$a->off();
echo '<br>';
$a->on();
echo '<br>';
$a->accelere();
echo '<br>';
$a->off();