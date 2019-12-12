<?php


class desk 
{
private  $cin;
private  $nom;
private  $num;
private $phone;
private $time;








function __construct($cin,$nom,$num,$phone,$time)
{

$this->cin =$cin;
$this->nom =$nom;
$this->num =$num;
$this->phone =$phone;
$this->time =$time;




}



function getCin()
{return $this->cin;}
function getNom()
{return $this->nom;}
function getNum()
{return $this->num;}
function getPhone()
{return $this->phone;}
function getTime()
{return $this->time;}

 


function setCin($cin)
{$this->cin=$cin;}
function setNom($nom)
{ $this->nom=$nom;}
function setNum($num)
{$this->num=$num;}
function setPhone($phone)
{$this->phone=$phone;}
function setTime($time)
{$this->time=$time;}


}

?>
