<?php
class Db1 extends CI_Controller{        
        function index(){
                $this->load->database();
                $query=$this->db->query("select name,pwd,email from users");
                foreach ($query->result() as $row) {//���ض�������
                        echo $row->name;
                        echo $row->pwd;
                        echo $row->email."<br>";
                }
                echo "Total Result==".$query->num_rows();
        }
}