<?php


App::uses('AppController', 'Controller');

class StudentreportController extends AppController {

  public function reportstudentname(){

$this->autoRender = false;
$this->loadModel("Student");
$stdid = $this->Student->find('all');
$iddata = array(
   'Data' => $stdid,
   'error' => 'okay'

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
        'error' => 'okay'

    	);

    return json_encode($data);

}

public function getstudennameid(){
   $this->autoRender = false; 
     $value = $this->request->data('id');
    $top = $this->Students_topic->findAllByStudentsid($value);
    $data= array(
        'Data' => $top,
        'error' => 'okay'

      );

    return json_encode($data);
}



public function index(){

	$this->render('/student_report');
}




}

?>