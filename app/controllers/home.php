<?php
class Home extends Controller{
   public function index($name = '',$otherName = ''){
      $user = $this->model('User');
      $user->name = $name;
      $this->view('index',['name'=> $user->name]);
   } 
}
?>