<?php

App::uses('AppController', 'Controller');


class StudentController extends AppController{


    public function saveStudent(){   // controller

          $this->autoRender = false; 
        if ($this->Student->save($this->request->data)) {     //table
            $message = array(
                'text' => __('Saved'),
                'type' => 'success'
            );
        } else {
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
    public function getStudent() {   //controller
         $this->autoRender = false; 
        $stud = $this->Student->find('all');    //table
       $data= array(
            'Data' => $stud,
           'error' => 'Okay',
        );
       
         return json_encode($data);
    }


public function index() {
    $this->render('/addstudent');

    }



}



?>