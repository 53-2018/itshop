<?php
require_once 'db.php';

class DAO {
	private $db;

	// za 2. nacin resenja
	
	private $SELECT_PRODUCTS_BY_ID = "SELECT * FROM products";
	
	
	public function __construct()
	{
		$this->db = DB::createInstance();
	}

	public function selectProducts()
	{
		
		$statement = $this->db->prepare($this->SELECT_PRODUCTS_BY_ID);
		
		$statement->execute();
		
		$result = $statement->fetchAll();
		//var_dump($result);
		return $result;
	}

	
	// public function insertAutomobil($marka, $cena, $godiste, $danKupovine)
	// {
		
	// 	$statement = $this->db->prepare($this->INSERT_AUTOMOBILI);
	// 	$statement->bindValue(1, $marka);
	// 	$statement->bindValue(2, $cena);
	// 	$statement->bindValue(3, $godiste);
	// 	$statement->bindValue(4, $danKupovine);
		
	// 	$statement->execute();
	// }

	// public function updateAutomobil($marka, $cena, $godiste, $danKupovine, $id)
	// {
		
	// 	$statement = $this->db->prepare($this->UPDATE_AUTOMOBILI);
	// 	$statement->bindValue(1, $marka);
	// 	$statement->bindValue(2, $cena);
	// 	$statement->bindValue(3, $godiste);
	// 	$statement->bindValue(4, $danKupovine);
	// 	$statement->bindValue(5, $id);
		
	// 	$statement->execute();
	// }

	// public function deleteAutomobilById($id)
	// {
	// 	$statement = $this->db->prepare($this->DELETE_AUTOMOBIL);
	// 	$statement->bindValue(1, $id);
		
	// 	$statement->execute();
	// }

	// public function selectAautomobiliByDanKupovine($danKupovine)
	// {
	// 	$statement = $this->db->prepare($this->SELECT_AUTOMOBIL_BY_DANKUPOVINE);
	// 	$statement->bindValue(1, $danKupovine);
		
	// 	$statement->execute();
		
	// 	$result = $statement->fetchAll();
	// 	return $result;
	// }

	// public function selectAautomobiliByGodiste($godiste)
	// {
	// 	$statement = $this->db->prepare($this->SELECT_AUTOMOBIL_BY_GODISTE);
	// 	$statement->bindValue(1, $godiste);
		
	// 	$statement->execute();
		
	// 	$result = $statement->fetchAll();
	// 	return $result;
	// }

	// public function selectAutomobilByID($id)
	// {
	// 	$statement = $this->db->prepare($this->SELECT_AUTOMOBIL_BY_ID);
	// 	$statement->bindValue(1, $id);
		
	// 	$statement->execute();
		
	// 	$result = $statement->fetch();
	// 	return $result;
	// }
}
?>