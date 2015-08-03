<?php


App::uses('AppController', 'Controller');

class StudentreportController extends AppController {

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

public function getstudennameid(){
   $this->autoRender = false; 
     $value = $this->request->data('id');
    $top = $this->Students_topic->findAllByStudentsid($value);
    $data= array(
        'Data' => $top,
        'error' => 'okayyy'

      );

    return json_encode($data);
}



public function index(){

	$this->render('/student_report');
}




}

?>