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


    public function registerAction()
    {
        $validation = new Validate();
        $posted_values = ['fname'=>'' , 'lname'=>'' , 'email'=>'' , 'username'=>'' ,'password'=>'' , 'confirm'=>'','type' =>'' ];
        if($_POST){
            $posted_values = posted_values($_POST);
            $validation->check($_POST ,[
                'fname' => [
                    'display' => 'First Name',
                    'required' => true
                ],
                'lname' => [
                    'display' => 'Last Name',
                    'required' => true
                ],
                'email' => [
                    'display' => 'E-mail',
                    'required' => true,
                    'unique' => 'users',
                    'max' => 255,
                    'valid_email' => true

                ],
                'username' => [
                    'display' => 'User Name',
                    'required' => true,
                    'unique' => 'users',
                    'min' => 5,
                    'max' => 255
                ],
                'password' => [
                    'display' => 'password',
                    'required' => true,
                    'min' => 6


                ],
                'confirm' => [
                    'display' => 'Confirm password',
                    'required' => true,
                    'matches' => 'password'
                ],
            ]);
            if($validation->passed()){
                $newuser = new Users();
                $newuser->registerNewUser($_POST);
                $newuser->login();
                Router::redirect('');

            }
        }


        $this->view->post = $posted_values;
        $this->view->displayErrors = $validation->displayErrors(); 
            $this->view->render('register/register');
    }


}
