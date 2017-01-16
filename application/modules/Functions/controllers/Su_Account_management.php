<?php

class Su_Account_management extends MY_Controller{

  function __construct(){
    parent::__construct();
    $this->load->model('Account_management_m');
    $this->load->model('Su_Account_management_m');
    if(!$this->session->userdata('userid')){
          redirect('Web');
      }
  }

  function updateaccount(){
    $data = $this->input->post('data');

    $userdetails = array(
      'username'=>$data['username'],
      'password'=>md5($data['password']),
      'email'=>$data['email']
    );

    $success = $this->Account_management_m->updateaccount($userdetails);

    if($success =='True'){
      echo $success;
    }
    else{
      echo $success;
    }

  }

  function updateprofile(){


      $data = $this->input->post();
      $userdetails = array(
          'firstname'=>$data['nickname'],
          'lastname'=>$data['firstname'],
          'address'=>$data['lastname'],
          'contactnumber'=>$data['contactnumber'],
          'staff_id'=>$data['staff_id']
        );

        echo $this->session->userdata('userid');
        $success = $this->Su_Account_management_m->su_updateProfile($userdetails);

        if($success =='True'){
          redirect('Functions');
        }

  }



}
