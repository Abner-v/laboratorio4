<?php

// models/piezas.php

class piezas extends Model {
	
	public function getTodas() {
		$this->db->query("SELECT * FROM empleados");
		return $this->db->fetchAll();
	}


}