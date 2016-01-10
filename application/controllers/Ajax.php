<?php
class Ajax extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
    }
   public function testAJAX(){
        return "Message :";
    }
}