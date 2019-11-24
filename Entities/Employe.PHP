<?php


class Employe 
{
private $Cin;
private  $Nom;
private  $Prenom;
private $Salaire;




function __construct( $Cin,$Nom,$Prenom,$Salaire)
{

$this->Cin =$Cin;
$this->Nom=$Nom;
$this->Prenom=$Prenom;
$this->Salaire=$Salaire;

}


function getCin()
{return $this->Cin;}
function getNom()
{return $this->Nom;}
function getPrenom()
{return $this->Prenom;}
function getSalaire()
{return $this->Salaire;}
 


function setCin($Cin)
{ $this->Cin=$Cin;}
function setNom($Nom)
{ $this->Nom=$Nom;}
function setPrenom($Prenom)
{$this->Prenom=$Prenom;}
function setSalaire($Salaire)
{$this->Salaire=$Salaire;}

}

?>

 