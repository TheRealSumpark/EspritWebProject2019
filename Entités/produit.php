<?php
class produit
{
	private $idpdt;
	private $nom;
	private $prix;
	private $idcat;
	private $categorie;
	private $image;

		public function __construct($idpdt,$nom,$prix,$idcat,$categorie,$image)
		{
			$this->idpdt=$idpdt;
			$this->nom=$nom;
			$this->prix=$prix;
			$this->idcat=$idcat;
			$this->categorie=$categorie;
			$this->image=$image;
		}

		public function get_idpdt()
		{
			return $this->idpdt;
		}

		public function set_idpdt($idpdt)
		{
			$this->idpdt = $idpdt;
		}

		public function get_nom()
		{
			return $this->nom;
		}

		public function set_nom($nom)
		{
			$this->nom = $nom;
		}

		public function get_prix()
		{
			return $this->prix;
		}

		public function set_prix($prix)
		{
			$this->prix = $prix;
		}

		public function get_idcat()
		{
			return $this->idcat;
		}

		public function set_idcat($idcat)
		{
			$this->idcat = $idcat;
		}

		public function get_categorie()
		{
			return $this->categorie;
		}

		public function set_categorie($categorie)
		{
			$this->categorie = $categorie;
		}

		public function get_image()
		{
			return $this->image; 
		}

		public function set_image($image)
		{
			$this->image = $image;
		}
}	
?>
