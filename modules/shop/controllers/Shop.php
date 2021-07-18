<?php

class Shop extends Trongate {
    public function index() {
      $data['my_name']  = "Jit"; 
      $data['view_module'] = "welcome";
      $data['view_file'] = "test";
      $this->template('public_skeleton', $data);
    }


    function hello_world() {
        echo "<br> <h3>This is Hello World</h3><br>";
    }
   
}