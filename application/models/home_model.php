<?php
/**
 * Home Model for interacting with the database.
 * Database is configured through the application/config/database.php file.
 * @author Calvin Williams <calvin.william1012@gmail.com>
 */

class Home_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}
	
	/*==========================================================================
	=            Search function called on submit on the home page.            =
	============================================================================*/
	public function search($data)
	{
		/*----------  If all the wanted data is set   ----------*/
		
		if(isset($data['yearSelect']) &&
			isset($data['makeSelect']) &&
			isset($data['modelSelect']) &&
			isset($data['bodySelect']))
		{

			/*----------  Inner join on associative table using the IN operator to get vehicle ID's to select the correct tires.----------*/
			$query = $this->db->query("SELECT tireName,size,partNum,description,price FROM tires INNER JOIN tirevehicleref ON tires.id=tirevehicleref.tireID WHERE tirevehicleref.vehicleID IN (SELECT id FROM vehicles WHERE year='" . $data['yearSelect'] . "' AND make='" . $data['makeSelect'] . "' AND model='" . $data['modelSelect'] . "' AND body='" . $data['bodySelect'] . "');");
			/*----------  Returning the result to the controller.  ----------*/
			return $query->result();
		}
	}
	
	
	/*=====  End of Section grabbing search results  ======*/
	


	/*=============================================
	= 
	= Data grabbing functions, if database speed is a problem this should be
	= optimized into a single function and only access the database once selecting
	= all values.
	= Function names correspond to what they are grabbing, I did not use query builder as these select
	= statements are fairly simple.
	= 
	= All querys are ordered so when they appear in the view it looks better. This also takes
	= some extra computation time so if speed is a major issue do not order.
	=
	=============================================*/
	
	public function getYears()
	{
		$query = $this->db->query('SELECT DISTINCT year FROM vehicles ORDER BY year');
		return $query->result();
	}

	public function getMakes()
	{
		$query = $this->db->query('SELECT DISTINCT make FROM vehicles ORDER BY make');
		return $query->result();
	}

	public function getModels()
	{
		$query = $this->db->query('SELECT DISTINCT model FROM vehicles ORDER BY model');
		return $query->result();
	}

	public function getBodys()
	{
		$query = $this->db->query('SELECT DISTINCT body FROM vehicles ORDER BY body');
		return $query->result();
	}
	
	/*=====  End of Section grabbing data for select lists  ======*/
	

}
?>