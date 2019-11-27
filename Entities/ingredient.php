<?php
class ingredient
{
	private $iding;
	private $nom;
	private $quantite;

		public function __construct($iding,$nom,$quantite)
		{
			$this->iding=$iding;
			$this->nom=$nom;
			$this->quantite=$quantite;
		}

		public function get_iding()
		{
			return $this->iding;
		}

		public function set_iding($iding)
		{
			$this->iding = $iding;
		}

		public function get_nom()
		{
			return $this->nom;
		}

		public function set_nom($nom)
		{
			$this->nom = $nom;
		}

		public function get_quantite()
		{
			return $this->quantite;
		}

		public function set_quantite($quantite)
		{
			$this->quantite = $quantite;
		}
}	
?>