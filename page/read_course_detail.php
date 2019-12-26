<?php
    include_once '../CrudController.php';
    $crudcontroller = new CrudController();

    if(isset($_POST["id"])) {
        $result = $crudcontroller->readCourse($_POST["id"]);
        $resultDates = $crudcontroller->readCourseDates($_POST["id"]);
        if(!empty($result)) {
            $responseArray["title"] = $result[0]["title"];
            $responseArray["description"] = $result[0]["description"];
            if(!empty($resultDates)) {
                foreach ($resultDates as $date) {
                    $dates[] = $date; 
                }
            }
            $responseArray["dates"] = $dates;
        }
        echo json_encode($responseArray);
    }
?>