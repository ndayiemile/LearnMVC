<?php
class Controller{
    public function model($model){
         require_once '../app/models/'.$model.'.php';
         return new $model();
    }
    public function view($view, $data = []){
        require_once '../app/views/components/header.php';
        require_once '../app/views/pages/'.$view.'.php';
        require_once '../app/views/components/footer.php';
    }
}
?>