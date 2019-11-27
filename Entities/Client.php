<?php


class Client
{
   private  $Nom;
   private  $Prenom;
   private  $Cin;
   private  $Email;
   private  $Gender;
   private  $Date_Naissance;
   private  $Role;



   function __construct($Nom ,$Prenom,  $Cin, $Email, $Gender, $Date_Naissance, $Role)
   { 
    $this->Nom=$Nom;
    $this->Prenom=$Prenom;
    $this->Cin=$Cin;
    $this->Email=$Email;
    $this->Gender=$Gender;
    $this->Role=$Role;
    $this->Date_Naissance=$Date_Naissance;
}


function getCin()
{return $this->Cin;}
function getNom()
{return $this->Nom;}
function getPrenom()
{return $this->Prenom;}
function getGender()
{return $this->Gender;}
function getDate_Naisance()
{return $this->Date_Naissance;}
function getEmail()
{return $this->Email;}
function getRole()
{return $this->Role;}






function setCin($Cin)
{return $this->Cin=$Cin;}
function setNom($Nom)
{return $this->Nom=$Nom;}
function setPrenom($Prenom)
{return $this->Prenom=$Prenom;}
function setGender($Gender)
{return $this->Gender=$Gender;}
function setDate_Naisance($Date_Naissance)
{return $this->Date_Naissance=$Date_Naissance;}
function setEmail($Email)
{return $this->Email=$Email;}
function setRole($Role)
{return $this->Role=$Role;}














}











?>