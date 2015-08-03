<?php


App::uses('AppController', 'Controller');

class StudentreportController extends AppController {

// select student box
  public function reportstudentname(){

$this->autoRender = false;
$this->loadModel("Student");
$stdid = $this->Student->find('all');
$iddata = array(
   'Data' => $stdid,
   'error' => 'ok'

  );
return json_encode($iddata);

  }






// student progress table
public function getStudentreportname(){

     $this->autoRender = false; 
     $value =$this->request->data('selectedStudent');
     $this->loadModel("Students_topic");
     $rep = $this->Students_topic->findAllByStudentsid($value);
    $data= array(
        'Data' => $rep,
        'error' => 'okayy'

    	);

    return json_encode($data);

}

// Student details
public function getstudentdetails(){

$this->autoRender = false;
$valued = $this->request->data('selectstudentdet');
$this->loadModel("Student");
$det = $this->Student->findAllByid($valued);
$deti = array(
       'Data' => $det,
       'error' =>'okay'

	);
return json_encode($deti);

}



public function index(){

	$this->render('/student_report');
}




}

?>