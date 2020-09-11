<?php

class Home extends Controller {

    public function __construct($controller, $action) {
        parent::__construct($controller, $action);
      }

    public function indexAction() {
     
        $this->view->render('home/index');

      }

      

      public function addprojectAction()
      {
        $validation = new Validate();

        if($_POST){
       
      $validation->check($_POST,[
          'projectname' =>  [
              'display' => "Project Name",
              "required" => true
          ] ,
          "description" => [
              'display' => "description",
              "required" => true            
          ]
      ]);

      if ($validation->passed()){
        $project = new Projects();
        $project->addproject($_POST);
            Router::redirect('');

 
    
       
      }


    }

  }
}
      

