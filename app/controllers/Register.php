<?php

class Register extends Controller
{
    
    public function __construct($controller,$action){
        parent::__construct($controller,$action);
        $this->loadmodel('Users');
        $this->view->setLayout('default');

    }

    public function loginAction(){
        $validation=new Validate();
        if($_POST){
            //form validation
        $validation->check($_POST,[
            'username' =>  [
                'display' => "username",
                "required" => true
            ] ,
            "password" => [
                'display' => "password",
                "required" => true            
            ]
        ]);


            if ($validation->passed()){
                $user = $this->UsersModel->findByUsername($_POST['username']);
                if($user && password_verify(Input::get('password'),$user->password)){
                    $remember = (isset($_POST['remember_me']) && Input::get('remember_me')) ? true :false;
                    $user->login($remember);
                    Router::redirect('');
                }else{
                    $validation->addError("username or password is incorrect");
                }
         
            }
        }
        $this->view->displayErrors = $validation->displayErrors();
        $this->view->render('Register/login');
        

    }


     public function logoutAction()
    {
        if (currentUser()){
            currentUser()->logout();
            

        }
      Router::redirect('register/login');
    }


}
