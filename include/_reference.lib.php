<?php

class Manga
{
    private $id;
    private $nom_manga;
    private $prix;
    private $description;
    private $etat;
    private $annee;
    private $auteur;
    private $dessinateur;
    private $pays;
    private $lien_image;


    public function __construct(
        $Tid,
        $Tnom_manga,
        $Tprix,
        $Tdescription,
        $Tetat,
        $Tannee,
        $Tauteur,
        $Tdessinateur,
        $Tpays,
        $Tlien_image
    )
    {
        $this->setID($Tid);
        $this->setNom_manga($Tnom_manga);
        $this->setPrix($Tprix);
        $this->setDescription($Tdescription);
        $this->setEtat($Tetat);
        $this->setAnnee($Tannee);
        $this->setAuteur($Tauteur);
        $this->setDessinateur($Tdessinateur);
        $this->setPays($Tpays);
        $this->setLien_image($Tlien_image);
    }

	public function getID() {
		return $this->id;
	}

	public function setID($id) {
		$this->id = $id;
	}

	public function getNom_manga() {
		return $this->nom_manga;
	}

	public function setNom_manga($nom_manga) {
		$this->nom_manga = $nom_manga;
	}

	public function getPrix() {
		return $this->prix;
	}

	public function setPrix($prix) {
		$this->prix = $prix;
	}

	public function getDescription() {
		return $this->description;
	}

	public function setDescription($description) {
		$this->description = $description;
	}

	public function getEtat() {
		return $this->etat;
	}

	public function setEtat($etat) {
		$this->etat = $etat;
	}

	public function getAuteur() {
		return $this->auteur;
	}

	public function setAuteur($auteur) {
		$this->auteur = $auteur;
	}

	public function getDessinateur() {
		return $this->dessinateur;
	}

	public function setDessinateur($dessinateur) {
		$this->dessinateur = $dessinateur;
	}

	public function getPays() {
		return $this->pays;
	}

	public function setPays($pays) {
		$this->pays = $pays;
	}

	public function getLien_image() {
		return $this->lien_image;
	}

	public function setLien_image($lien_image) {
		$this->lien_image = $lien_image;
	}

    public function getAnnee() {
		return $this->annee;
	}

	public function setAnnee($annee) {
		$this->annee = $annee;
	}

}

class Commande
{
	private $id_commande;
    private $id_utilisateur;
    private $prixTotal;
    private $estLivre;

	public function __construct(
        $Tid_commande,
        $Tid_utilisateur,
        $TprixTotal,
        $TestLivre
    ){
		$this->setID_commande($Tid_commande);
        $this->setID_utilisateur($Tid_utilisateur);
        $this->setPrixTotal($TprixTotal);
        $this->setEstLivre($TestLivre);
	}

	public function getID_commande() {
		return $this->id_commande;
	}

	public function setID_commande($id_commande) {
		$this->id_commande = $id_commande;
	}

	public function getID_utilisateur() {
		return $this->id_utilisateur;
	}

	public function setID_utilisateur($id_utilisateur) {
		$this->id_utilisateur = $id_utilisateur;
	}

	public function getPrixTotal() {
		return $this->prixTotal;
	}

	public function setPrixTotal($prixTotal) {
		$this->prixTotal = $prixTotal;
	}

	public function getEstLivre() {
		return $this->estLivre;
	}

	public function setEstLivre($estLivre) {
		$this->estLivre = $estLivre;
	}
}

class Panier_commande{
	private $id_commande;
    private $id_manga;
    private $num_volume;
    private $qte;
	private $prix;
	private $nom_manga;

	public function __construct(
        $Tid_commande,
        $Tid_manga,
        $Tnum_volume,
        $Tqte,
		$Tprix,
		$Tnom_manga
    ){
		$this->setID_commande($Tid_commande);
        $this->setID_manga($Tid_manga);
        $this->setNum_volume($Tnum_volume);
        $this->setQTE($Tqte);
		$this->setPrix($Tprix);
		$this->setNom_manga($Tnom_manga);
	}
	public function getID_commande() {
		return $this->id_commande;
	}

	public function setID_commande($id_commande) {
		$this->id_commande = $id_commande;
	}
	public function getID_manga() {
		return $this->id_manga;
	}

	public function setID_manga($id_manga) {
		$this->id_manga = $id_manga;
	}
	public function getNum_volume() {
		return $this->num_volume;
	}

	public function setNum_volume($num_volume) {
		$this->num_volume = $num_volume;
	}
	public function getQTE() {
		return $this->qte;
	}

	public function setQTE($qte) {
		$this->qte = $qte;
	}

	public function getPrix() {
		return $this->prix;
	}

	public function setPrix($prix) {
		$this->prix = $prix;
	}
	public function getNom_manga() {
		return $this->nom_manga;
	}

	public function setNom_manga($nom_manga) {
		$this->nom_manga = $nom_manga;
	}
}

