<?php
require_once ("controller/PatientController.php");
require_once ("controller/DBController.php");

$action = "";
if (! empty($_GET["action"])) {
    $action = $_GET["action"];
}

switch ($action) { 
    
    case "add-patient":
        if (isset($_POST['add'])) {
            $name = $_POST['name'];
            $age = $_POST['age'];
            $phone = $_POST['phone'];
            $patient = new PatientController();
            $insertId = $patient->addPatient($name, $age, $phone);
            if (empty($insertId)) {
                $response = array(
                    "message" => "Problem in Adding New Record",
                    "type" => "error"
                );
            } else {
                header("Location: index.php");
            }
        }
        require_once "view/patients/add-patient.php";
        break;

    case "edit-patient":
        $patient_id = $_GET["id"];
        $patient = new PatientController();
        if (isset($_POST['add'])) {
            $name = $_POST['name'];
            $age = $_POST['age'];
            $phone = $_POST['phone'];
            $patient->editPatient($name, $age, $phone, $patient_id);
            header("Location: index.php");
        }
        
        $result = $patient->getPatientById($patient_id);
        require_once "view/patients/edit-patient.php";
        break;
    
    case "delete-patient":
        $patient_id = $_GET["id"];
        $patient = new PatientController();
        $patient->deletePatient($patient_id);
        $result = $patient->getAllPatient();
        require_once "view/patients/patient.php";
        break;

    default:
        $patient = new PatientController();
        $result = $patient->getAllPatient();
        require_once "view/patients/patient.php";
        break;
}
?>