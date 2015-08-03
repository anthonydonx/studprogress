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

public function getRelatedTopics(){
//echo ($this->request->params['selectedSubject']);

     $this->autoRender = false; 
     $value = $this->request->data('selectedSubject');
    $top = $this->Topic->findAllBySubjectsname($value);
    $data= array(
        'Data' => $top,
        'error' => 'okay'

      );

    return json_encode($data);

}
public function getSubjectRelatedTopics(){
   $this->autoRender = false; 
     $value = $this->request->data('SubjectID');
    $top = $this->Topic->findAllBySubjectsname($value);
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