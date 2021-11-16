<?php

    defined('BASEPATH') or exit('No direct script access allowed');
    date_default_timezone_set("Asia/Bangkok");
    header('Content-type: text/html; charset=utf-8');
      
    class Template_model extends CI_Model {

    public function __construct() 
    {
        parent::__construct();
        $this->output->set_header('Content-Type: text/html; charset=utf-8');

    }

    public function saveTemplate()
    {
        
        
        // foreach($getPost_Option as $i => $getPost_Options){
        //     echo $getPost_Options."<br>";
        // }

        // $ArrayTemplatemain = array(
        //     "tm_name"           => $this->input->post("temp_name"),
        //     "tm_description"    => $this->input->post("temp_description"),
        //     "tm_type"           => $this->input->post("temp_inputtype")
        // );
        // $this->db->insert("template_main",$ArrayTemplatemain);

        $queryTempId = $this->db->query("SELECT tm_id FROM template_main ORDER BY tm_id DESC LIMIT 1");
        $fetchTempId = $queryTempId->row_array();
 
        $getPost_Option = $this->input->post("field_option");
        foreach($getPost_Option as $i => $getPost_Options){
            $ArrayTemplateOption = array(
                "tm_id"         => $fetchTempId['tm_id'],
                "to_option"     => $getPost_Options,
                "to_device"     => $this->input->post("temp_device"),
            );
            $this->db->insert("template_option",$ArrayTemplateOption);
        }

    }

    public function getTemplatemain()
    {
        $table = 'template_main';
        $primaryKey = 'tm_id';
        $columns = array(
            array('db' => 'tm_name', 'dt' => 0),
            array('db' => 'tm_description', 'dt' => 1),
            array('db' => 'tm_type', 'dt' => 2),
            array('db' => 'tm_description' , 'dt' => 3,
                'formatter' => function($d,$row){
       
                    return '<button type="button" class="btn btn-primary">Primary</button>';
                }
            )
        );

        $sql_details = array(
            'user' => "ant",
            'pass' => "Ant1234",
            'db'   => "itassetpro",
            'host' => "192.190.2.52"
        );

        require('server-side/scripts/ssp.class.php');

        echo json_encode(
            SSP::simple($_GET, $sql_details, $table, $primaryKey, $columns)
        );
    }

}