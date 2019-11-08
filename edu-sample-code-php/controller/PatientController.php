<?php 
require_once ("controller/DBController.php");
class PatientController
{
    private $db_handle;
    
    function __construct() {
        $this->db_handle = new DBController();
    }

    function getAllPatient() {
        $sql = "SELECT * FROM patients ORDER BY id";
        $result = $this->db_handle->runBaseQuery($sql);
        return $result;
    }  

    function addPatient($name, $age, $phone) {
        $query = "INSERT INTO patients (name,age,phone) VALUES (?, ?, ?)";
        $paramType = "sii";
        $paramValue = array(
            $name,
            $age,
            $phone
        );
        $insertId = $this->db_handle->insert($query, $paramType, $paramValue);
        return $insertId;
    }

    function editPatient($name, $age, $phone, $patient_id) {
        $query = "UPDATE patients SET name = ?, age = ?, phone = ? WHERE id = ?";
        $paramType = "siss";
        $paramValue = array(
            $name,
            $age,
            $phone,
            $patient_id
        );
        $this->db_handle->update($query, $paramType, $paramValue);
    }

    function deletePatient($patient_id) {
        $query = "DELETE FROM patients WHERE id = ?";
        $paramType = "i";
        $paramValue = array(
            $patient_id
        );
        $this->db_handle->update($query, $paramType, $paramValue);
    }

    function getPatientById($patient_id) {
        $query = "SELECT * FROM patients WHERE id = ?";
        $paramType = "i";
        $paramValue = array(
            $patient_id
        );
        $result = $this->db_handle->runQuery($query, $paramType, $paramValue);
        return $result;
    }

}
?>