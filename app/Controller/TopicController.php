<?php

App::uses('AppController', 'Controller');

class TopicController extends AppController {

//select box
public function getSubjects(){

$this->autoRender = false; 
 $this->loadModel("Subject");
 $subjectsNames=$this->Subject->find('all');
$data= array(
        'Data' => $subjectsNames,
        'error' => 'okay'

    	);

    return json_encode($data);


}


public function saveTopic(){

$this->autoRender = false; 
if($this->Topic->save($this->request->data)){
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

public function getTopic(){

     $this->autoRender = false; 
    $top = $this->Topic->find('all');
    $data= array(
        'Data' => $top,
        'error' => 'okay'

    	);

    return json_encode($data);

}

public function index(){

	$this->render('/addtopic');
}




}



?>