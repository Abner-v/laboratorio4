<?php
class empleados extends Model{
    public function getEmpleado(){
        $this->db->query("SELECT * FROM empleados");
        return $this->db->fetchAll();
    }
}
