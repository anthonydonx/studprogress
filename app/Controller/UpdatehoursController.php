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



 public function index(){

 	$this->render('/update_hours');
 }




}





?>







