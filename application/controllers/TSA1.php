<?php
    class TSA1 extends CI_Controller{
        function index(){
        echo $this->config->site_url();
        echo "<br \>";
        echo $this->config->base_url();
        echo "<br \>";
        echo $this->config->system_url();
        echo "<br \>";
        }

        function marioflagpole($a = 5){
            $data['a'] = $a;
            $this->load->view('marioflagpole',$data);
        }

        function boxedframe($a = 8, $b = 7){
            $data['a'] = $a;
            $data['b'] = $b;
            $this->load->view('boxedframe',$data);
        }

        function honeycomb($a = 2, $b = 2){
            $data['a'] = $a;
            $data['b'] = $b;
            $this->load->view('honeycomb',$data);
        }
    }
?>