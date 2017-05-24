<?php
/**
 *
 * Home Model for interacting with the database.
 * Database is configured through the application/config/database.php file.
 */

class Home_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}
	
	public function getYears()
	{
		$query = $this->db->query('SELECT DISTINCT year FROM vehicles');
		return $query->result();
	}

	public function getMakes()
	{
		$query = $this->db->query('SELECT DISTINCT make FROM vehicles');
		return $query->result();
	}

	public function getModels()
	{
		$query = $this->db->query('SELECT DISTINCT model FROM vehicles');
		return $query->result();
	}

	public function getBodys()
	{
		$query = $this->db->query('SELECT DISTINCT body FROM vehicles');
		return $query->result();
	}

	public function getOthers()
	{
		$query = $this->db->query('SELECT DISTINCT other FROM vehicles');
		return $query->result();
	}
}
?>