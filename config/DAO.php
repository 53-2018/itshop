<?php
require_once 'db.php';

class DAO {
	private $db;

	// za 2. nacin resenja
	
	private $SELECT_PRODUCTS_BY_ID = "SELECT * FROM products";
	private $SELECT_BRANDS="SELECT * FROM brands";
	private $SELECT_MANUFACTURERS="SELECT * FROM manufactures";
	private $SELECT_ORDERS="SELECT * FROM orders";
	private $SELECT_ORDERS_DETAILS="SELECT * FROM ordersdetails";
	private $INSERT_ORDER = "INSERT INTO orders (type, adress, date) VALUES (?,?,?)";
	private $DELETE_ORDER = "DELETE  FROM orders WHERE order_id = ?";

	
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
	public function selectOrders()
	{
		
		$statement = $this->db->prepare($this->SELECT_ORDERS);
		
		$statement->execute();
		
		$result = $statement->fetchAll();
		//var_dump($result);
		return $result;
	}
	public function selectOrdersDetails()
	{
		
		$statement = $this->db->prepare($this->SELECT_ORDERS_DETAILS);
		
		$statement->execute();
		
		$result = $statement->fetchAll();
		//var_dump($result);
		return $result;
	}
	public function insertOrder($type, $adress, $date)
	{
		
		$statement = $this->db->prepare($this->INSERT_ORDER);
		$statement->bindValue(1, $type);
		$statement->bindValue(2, $adress);
		$statement->bindValue(3, $date);
	
		
		$statement->execute();
	}
	public function deleteOrder($order_id)
	{
		$statement = $this->db->prepare($this->DELETE_ORDER);
		$statement->bindValue(1, $order_id);
		
		$statement->execute();
	}
	
	
}
?>