<?php


class event 
{
private $id;
private  $cin;
private  $nom;
private $type;
private $date;
private $prix;
private $statut;
private $phone;







function __construct($id,$cin,$nom,$type,$date,$prix,$statut,$phone)
{

$this->id =$id;
$this->cin =$cin;
$this->nom=$nom;
$this->type=$type;
$this->date =$date;
$this->prix =$prix;
$this->statut=$statut;
$this->phone=$phone;



}


function getId()
{return $this->id;}
function getCin()
{return $this->cin;}
function getNom()
{return $this->Nom;}
function getType()
{return $this->type;}
function getDate()
{return $this->date;}
function getPrix()
{return $this->prix;}
function getStatut()
{return $this->statut;}
function getPhone()
{return $this->phone;}
 


function setId($id)
{ $this->id=$id;}
function setCin($cin)
{$this->cin=$cin;}
function setNom($nom)
{ $this->nom=$nom;}
function setType($type)
{$this->type=$type;}
function setDate($date)
{$this->date=$date;}
function setPrix($prix)
{$this->prix=$prix;}
function setStatut($statut)
{$this->statut=$statut;}
function setPhone($phone)
{$this->phone=$phone;}

}
//base de données:fresco table:events
?>

 