<?php

App::Uses('AppController','Controller');
class StudtopicController extends AppController {


//student select box 
  public function getids(){

$this->autoRender = false;
$this->loadModel("Student");
$stdids = $this->Student->find('all');
$iddatas = array(
   'Data' => $stdids,
   'error' => 'okay'

  );
return json_encode($iddatas);

  }



//title select box 
  public function get_title(){

$this->autoRender = false;
$this->loadModel("Topic");
$titlename = $this->Topic->find('all');
$subdatas = array(
   'Data' => $titlename,
   'error' => 'okay'

  );


return json_encode($subdatas);

  }



public function save_studtopic(){

	$this->autoRender = false;
  $this->loadModel("Students_topic");
	if($this->Students_topic->save($this->request->data)){

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


 public function get_studtopic(){

   $this->autoRender = false;
   $this->loadModel("Students_topic");
   $gettop =$this->Students_topic->find('all');
   $datas =array(
      'Data' => $gettop,
      'error' => 'okey'
   	);

return json_encode($datas);


 }

 public function index(){

 	$this->render('/add_students_topics');
 }




}





?>