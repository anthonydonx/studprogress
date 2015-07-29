<?php
App::uses('AppController', 'Controller');
class SubjectController extends AppController {

public function saveSubject(){

 $this->autoRender = false; 
if($this->Subject->save($this->request->data)){
  $message = array(
      'text' => __('Saved'),
      'type' => 'succes'
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

public function getSubject(){

     $this->autoRender = false; 
    $sub = $this->Subject->find('all');
    $data= array(
        'Data' => $sub,
        'error' => 'okay'

    	);

    return json_encode($data);

}

public function index(){

	$this->render('/addsubject');
}




}



?>