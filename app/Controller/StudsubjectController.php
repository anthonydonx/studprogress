<?php

App::Uses('AppController','Controller');

class StudsubjectController extends AppController {


//student select box 
  public function getid(){

$this->autoRender = false;
$this->loadModel("Student");
$stdid = $this->Student->find('all');
$iddata = array(
   'Data' => $stdid,
   'error' => 'okay'

  );
return json_encode($iddata);

  }




//subject select box 
  public function get_subname(){

$this->autoRender = false;
$this->loadModel("Subject");
$subname = $this->Subject->find('all');
$subdata = array(
   'Data' => $subname,
   'error' => 'okay'

  );


return json_encode($subdata);

  }



public function save_studsubjects(){

	$this->autoRender = false;
  $this->loadModel("Students_subject");
	if($this->Students_subject->save($this->request->data)){

		$message = array(
         'text' =>__('Saved'),
         'type' =>'succed'

			);
	}else{
        
       $message = array(
          'text' => __('Error'),
          'type' => 'error'

       	);
	}

    $this->set(array(
     'message' => $message,
     '_serialize' => array('message')
    	));

}


 public function get_studsubject(){

   $this->autoRender = false;
   $this->loadModel("Students_subject");
   $subt =$this->Students_subject->find('all');
   $data =array(
      'Data' => $subt,
      'error' => 'okey'
   	);

return json_encode($data);


 }

 public function getSelectedStudentSubject(){
  $this->autoRender = false;
   $value = $this->request->data('studentID');
    $this->loadModel("Students_subject");
   $subt =$this->Students_subject->findAllByStudentsid( $value);
   $data =array(
      'Data' => $subt,
      'error' => 'okey'
    );

return json_encode($data);

 }

 public function index(){

 	$this->render('/add_students_subjects');
 }




}





?>