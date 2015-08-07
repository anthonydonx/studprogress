<?php

App::Uses('AppController','Controller');
class UpdatehoursController extends AppController {



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
/*//get  value from Student_topics
public function getspendhoursvalue(){

$this->autoRender = false;
$value = $this->request->data('selectedtopics');
$this->loadModel("Students_topic");
$topi = $this->Students_topic->findAllByTopicstitle($value);
$data = array(
      'Data' => $topi,
      'error' => 'okey'

  );

return json_encode($data);

}


*/



 public function index(){

 	$this->render('/update_hours');
 }




}





?>







