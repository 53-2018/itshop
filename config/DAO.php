<?php
require_once 'config/db.php';

class DAO {
	private $db;

	private $SELECT_PRODUCTS_JOIN="SELECT p.id, p.name, p.price, p.image, t.id_type, t.name_type, b.id_brand, b.name_brand, m.id_manufacturer, m.name_manufacturer
		FROM product_types t JOIN products p ON p.id_type=t.id_type JOIN brands b ON p.id_brand=b.id_brand JOIN manufacturers m ON b.id_manufacturer=m.id_manufacturer"; 
	private $SELECT_BRANDS="SELECT * FROM brands";
	private $SELECT_MANUFACTURES="SELECT * FROM manufacturers";
	private $SELECT_PRODUCT_TYPES="SELECT * FROM product_types";
	private $INSERT_USER_TYPES="INSERT into user_types(name) VALUES(?)";
	private $INSERT_USERS="INSERT into user(name, surname, email, username, password, id_user_types) VALUES(?,?,?,?,?)";
	private $SELECT_USERS="SELECT * FROM users";
	private $GET_PRODUCT_BY_ID = "SELECT * FROM products WHERE id=?";

	private $SELECT_ORDERS="SELECT * FROM orders";
	private $SELECT_ORDERS_DETAILS="SELECT * FROM ordersdetails";
	private $INSERT_ORDER="INSERT into orders(address,order_name,date) VALUES(?,?,?)";
	private $DELETE_ORDER = "DELETE FROM orders WHERE order_id=?";

	public function __construct()
	{
		$this->db = DB::createInstance();
	}

	public function selectProducts()
	{

		$statement = $this->db->prepare($this->SELECT_PRODUCTS_JOIN);
		
		$statement->execute();
		
		$result = $statement->fetchAll();
		return $result;
	}

	public function selectBrands()
	{

		$statement = $this->db->prepare($this->SELECT_BRANDS);
		
		$statement->execute();
		
		$result = $statement->fetchAll();
		return $result;
	}
	public function getProductById($id){
		$statement = $this->db->prepare($this->GET_PRODUCT_BY_ID);
		$statement->bindValue(1, $id);

		$statement->execute();
		
		$result = $statement->fetch();
		return $result;
	}
	
	public function selectManufactures()
	{

		$statement = $this->db->prepare($this->SELECT_MANUFACTURES);
		
		$statement->execute();
		
		$result = $statement->fetchAll();
		return $result;
	}

	public function selectProductTypes()
	{

		$statement = $this->db->prepare($this->SELECT_PRODUCT_TYPES);
		
		$statement->execute();
		
		$result = $statement->fetchAll();
		return $result;
	}

	public function insertUserType($name)
	{
		
		$statement = $this->db->prepare($this->INSERT_USER_TYPES);
		$statement->bindValue(1, $name);
		
		$statement->execute();
		return $this->db->lastInsertID();
	}

	private function insertUser($name,$surname,$email,$username,$password,$id_user_types)
	{
		
		$statement = $this->db->prepare($this->INSERT_USERS);
		$statement->bindValue(1, $name);
		$statement->bindValue(2, $surname);
		$statement->bindValue(3, $email);
		$statement->bindValue(4, $username);
		$statement->bindValue(5, $password);
		$statement->bindValue(6, $id_user_types);
		
		$statement->execute();
	}
	public function selectOrders()
	{
		
		$statement = $this->db->prepare($this->SELECT_ORDERS);
		
		$statement->execute();
		
		$result = $statement->fetchAll();
		//var_dump($result);
		return $result;
	}
	public function insertOrder($address,$order_name,$date)
	{
		
		$statement = $this->db->prepare($this->INSERT_ORDER);
		$statement->bindValue(1, $address);
		$statement->bindValue(2, $order_name);
		$statement->bindValue(3, $date);
	
		
		$statement->execute();
	}
	public function deleteOrder($order_id)
	{
		$statement = $this->db->prepare($this->DELETE_ORDER);
		$statement->bindValue(1, $order_id);
		$statement->execute();
	}


	public function insertUserWithType($name, $surname, $email,$username, $password)
	{
		$id_user_type= $this->insertUserType($name);
		$this->insertUser($name,$surname,$email,$username, $password,$id_user_type);
	}
	public function selectUsers()
	{

		$statement = $this->db->prepare($this->SELECT_USERS);
		
		$statement->execute();
		
		$result = $statement->fetchAll();
		return $result;
	}
	
	public function selectUserByEmailAndPassword($email, $password)
	{
		
		$statement = $this->db->prepare($this->SELECT_USERS);
		$statement->bindValue(1, $email);
		$statement->bindValue(2, $password);
		
		$statement->execute();
		
		$result = $statement->fetch();
		return $result;
	}
}
?>
