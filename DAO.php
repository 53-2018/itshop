<?php
require_once 'db.php';

class DAO {
	private $db;

	// za 2. nacin resenja
	
	private $SELECT_PRODUCTS_BY_ID = "SELECT * FROM products";
	private $SELECT_BRANDS="SELECT * FROM brands";
	private $SELECT_MANUFACTURERS="SELECT * FROM manufactures";
	
	
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
	public function selectBrands()
	{
		
		$statement = $this->db->prepare($this->SELECT_BRANDS);
		
		$statement->execute();
		
		$result = $statement->fetchAll();
		//var_dump($result);
		return $result;
	}
	public function selectManufactures()
	{
		
		$statement = $this->db->prepare($this->SELECT_MANUFACTURERS);
		
		$statement->execute();
		
		$result = $statement->fetchAll();
		//var_dump($result);
		return $result;
	}
	
	
}
?>