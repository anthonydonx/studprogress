<?php


App::uses('AppController', 'Controller');

class StudentreportController extends AppController {


public function getStudentreport(){

     $this->autoRender = false; 
    $this->loadModel("Students_topic");
    $sub = $this->Students_topic->find('all');
    $data= array(
        'Data' => $sub,
        'error' => 'okay'

    	);

    return json_encode($data);

}


public function index(){

	$this->render('/student_report');
}




}

?>