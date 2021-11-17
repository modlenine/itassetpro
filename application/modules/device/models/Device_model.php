<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Device_model extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
        
        date_default_timezone_set("Asia/Bangkok");
    }

    public function load_datatableComputer(){
        $output = '<table id="dataMainList" class="data-table table stripe hover" style="width:100%">';

            $output .= '<thead>';

                // $output .= '<tr>';
                //     $output .= '<th><input type="text" name="filterNo" id="filterNo" class="form-control form-control-sm" placeholder="No"></th>';
                //     $output .= '<th><input type="text" name="filterComtype" id="filterComtype" class="form-control form-control-sm"  placeholder="Search By Computer Type"></th>';
                //     $output .= '<th><input type="text" name="filterCombrand" id="filterCombrand" class="form-control form-control-sm" placeholder="Search By Brand"></th>';
                //     $output .= '<th><input type="text" name="filterComSpec" id="filterComSpec" class="form-control form-control-sm" placeholder="Search By Spec"></th>';
                //     $output .= '<th><input type="text" name="filterCreatedate" id="filterCreatedate" class="form-control form-control-sm" placeholder="Search By Date"></th>';                    $output .= '<th>
                //         <select name="filterComstatus" id="filterComstatus" class="form-control form-control-sm">
                //             <option value="">Search By Status</option>
                //         </select>
                //     </th>';
                // $output .= '</tr>';

                $output .= '<tr>';
                    $output .= '<th class="table-plus datatable-nosort">No.</th>';
                    $output .= '<th>Computer Type</th>';
                    $output .= '<th>Brand</th>';
                    $output .= '<th>Spec</th>';
                    $output .= '<th>Date Create</th>';
                    $output .= '<th>Status</th>';
                $output .= '</tr>';

            $output .= '</thead>';

        $output .= '</table>';

        echo $output;
        // echo json_encode($output);
    }

    public function getListComputerDevice()
    {
        $table = 'DeviceComputer';
        $primaryKey = 'ComputerNumber';
        $columns = array(
            array('db' => 'ComputerNumber', 'dt' => 0),
            array('db' => 'ComputerType', 'dt' => 1),
            array('db' => 'ComputerBrand', 'dt' => 2),
            array('db' => 'ComputerSpec', 'dt' => 3),
            array('db' => 'dv_datetime', 'dt' => 4),
            array('db' => 'ComputerStatus', 'dt' => 5)
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


    public function device_loadtemplate_list()
    {
        if($this->input->post("devicetype") != ""){
            $devicetype = $this->input->post("devicetype");
            $sql = $this->db->query("SELECT
                its_template_master.tp_mas_name,
                its_template_master.tp_mas_type
                FROM
                its_template_master
                WHERE tp_mas_type = '$devicetype'
                GROUP BY tp_mas_name
                ORDER BY tp_mas_name ASC");

            $output = '
            <div id="device_showtemplate_scoll" class="list-group">
            ';
            foreach($sql->result() as $rs){
                $output .='
                <li href="javascript:void(0)" class="mt-2 list-group-item list-group-item-action align-items-start list-group-item-info d-flex device_select_template"
                    data_templatename = "'.$rs->tp_mas_name.'"
                >
                    <span class="font-14">'.$rs->tp_mas_name.'</span>
                </li>
                ';
            }
            $output .='
            </div>
            ';

            echo $output;
        }
    }


    public function device_load_data_detail()

    // SELECT
    //     its_device_detail.dv_autoid,
    //     its_device_detail.dv_templatename,
    //     its_device_detail.dv_type,
    //     its_device_detail.dv_ele_type,
    //     its_device_detail.dv_title,
    //     its_device_detail.dv_inputname,
    //     its_device_detail.dv_inputvalue,
    //     its_device_detail.dv_elesub_type,
    //     its_device_detail.dv_inputcolumnsize,
    //     its_device_detail.dv_linenum
    // FROM its_device_detail

    {
        
        if($this->input->post("data_deviceCode")){
            $data_deviceCode = $this->input->post("data_deviceCode");
            $sql = $this->db->query("SELECT
            -- its_template_master.tp_mas_autoid,
            -- its_template_master.tp_mas_name,
            -- its_template_master.tp_mas_type,
            -- its_template_master.tp_mas_arraykey,
            -- its_template_master.tp_mas_title_size,
            -- its_template_master.tp_mas_title_text,
            -- its_template_master.tp_mas_inputname,
            -- its_template_master.tp_mas_inputtype,
            -- its_template_master.tp_mas_inputcolumnsize,
            -- its_template_master.tp_mas_inputtemptype,
            -- its_template_master.tp_mas_inputmascode,
            -- its_template_master.tp_mas_inputoption,
            -- its_template_master.tp_mas_linenum,
            -- its_template_master.tp_mas_userpost,
            -- its_template_master.tp_mas_ecodepost,
            -- its_template_master.tp_mas_datetime
            its_device_detail.dv_autoid,
            its_device_detail.dv_templatename,
            its_device_detail.dv_type,
            its_device_detail.dv_ele_type,
            its_device_detail.dv_title,
            its_device_detail.dv_titlesize,
            its_device_detail.dv_inputname,
            its_device_detail.dv_inputvalue,
            its_device_detail.dv_elesub_type,
            its_device_detail.dv_inputcolumnsize,
            its_device_detail.dv_linenum
            FROM
            its_device_detail
            WHERE dv_code = '$data_deviceCode' ");
            $output ='';
            foreach($sql->result() as $key => $val){
                if($val->dv_ele_type == "title"){
                    $output = array(
                        'data_type' => $val->dv_ele_type,
                        'title_size' => $val->dv_titlesize,
                        'title_text' => $val->dv_title,
                        'autoid' => $val->dv_autoid,
                        'linenum' => $val->dv_linenum
                    );
                }else if($val->dv_ele_type == "inputData"){
                    // if($val->tp_mas_inputoption != ""){
                    //     $inputoption = json_decode($val->tp_mas_inputoption);
                    // }else{
                    //     $inputoption = "";
                    // }
                    $output = array(
                        'data_type' => $val->dv_ele_type,
                        'inputname' => $val->dv_inputname,
                        'templatename' => $val->dv_templatename,
                        'inputvalue' => $val->dv_inputvalue,
                        'inputtype' => $val->dv_elesub_type,
                        'inputcolumnsize' => $val->dv_inputcolumnsize,
                        'inputtemptype' => "COMPUTER",
                        'inputmascode' => "",
                        'inputoption' => "",
                        'autoid' => $val->dv_autoid,
                        'linenum' => $val->dv_linenum
                    );
                }

                $arrayOutput[] = $output;
                
            }

            echo json_encode($arrayOutput);
        }
    }



    public function device_load_data_template()
    {
        
        if($this->input->post("templatename")){
            $templatename = $this->input->post("templatename");
            $sql = $this->db->query("SELECT
            its_template_master.tp_mas_autoid,
            its_template_master.tp_mas_name,
            its_template_master.tp_mas_type,
            its_template_master.tp_mas_arraykey,
            its_template_master.tp_mas_title_size,
            its_template_master.tp_mas_title_text,
            its_template_master.tp_mas_inputname,
            its_template_master.tp_mas_inputtype,
            its_template_master.tp_mas_inputcolumnsize,
            its_template_master.tp_mas_inputtemptype,
            its_template_master.tp_mas_inputmascode,
            its_template_master.tp_mas_inputoption,
            its_template_master.tp_mas_linenum,
            its_template_master.tp_mas_userpost,
            its_template_master.tp_mas_ecodepost,
            its_template_master.tp_mas_datetime
            FROM
            its_template_master
            WHERE tp_mas_name = '$templatename' ORDER BY tp_mas_linenum ASC");
            $output ='';
            foreach($sql->result() as $key => $val){
                if($val->tp_mas_arraykey == "title"){
                    $output = array(
                        'data_type' => $val->tp_mas_arraykey,
                        'title_size' => $val->tp_mas_title_size,
                        'title_text' => $val->tp_mas_title_text,
                        'autoid' => $val->tp_mas_autoid,
                        'linenum' => $val->tp_mas_linenum
                    );
                }else if($val->tp_mas_arraykey == "inputData"){
                    if($val->tp_mas_inputoption != ""){
                        $inputoption = json_decode($val->tp_mas_inputoption);
                    }else{
                        $inputoption = "";
                    }
                    $output = array(
                        'data_type' => $val->tp_mas_arraykey,
                        'inputname' => $val->tp_mas_inputname,
                        'inputtype' => $val->tp_mas_inputtype,
                        'inputcolumnsize' => $val->tp_mas_inputcolumnsize,
                        'inputtemptype' => $val->tp_mas_inputtemptype,
                        'inputmascode' => $val->tp_mas_inputmascode,
                        'inputoption' => $inputoption,
                        'autoid' => $val->tp_mas_autoid,
                        'linenum' => $val->tp_mas_linenum
                    );
                }

                $arrayOutput[] = $output;
                
            }

            echo json_encode($arrayOutput);
        }
    }




    public function save_create_device()
    {
        if($this->input->post("device_template") != ""){
            $deviceCode = geDeviceCode($this->input->post("device_type"));
            $check_ele_type = $this->input->post("check_ele_type");//array
            // $check_elesub_type = $this->input->post("check_elesub_type");//array
            $check_linenum = $this->input->post("check_ele_linenum");//array

            $dv_title = '';
            $dv_titlesize = '';
            $dv_inputname = '';
            $dv_inputvalue = '';
            $dv_inputcolumnsize = '';
            $dv_elesub_type = '';

            foreach($check_linenum as $key => $check_linenums){
                // Check input element type
                if($check_ele_type[$key] == "title"){
                    $dv_title = $this->input->post("dv_title")[$key];
                    $dv_titlesize = $this->input->post("dv_titlesize")[$key];


                    $dv_inputname = '';
                    $dv_inputvalue = '';
                    $dv_inputcolumnsize = '';
                    $dv_elesub_type = '';

                }else if($check_ele_type[$key] == "inputData"){
                    $dv_inputname = $this->input->post("labelvalue_".$check_linenums);
                    $dv_inputcolumnsize = $this->input->post("dv_inputcolumnsize_".$check_linenums);
                    $dv_elesub_type = $this->input->post("check_elesub_type_".$check_linenums);

                    $dv_title = '';
                    $dv_titlesize = '';
                    // $dv_inputvalue = $key;

                    if($this->input->post("check_elesub_type_".$check_linenums) == "radio"){
                        $dv_inputvalue = $this->input->post("radio_".$check_linenums);
                        // $dv_inputvalue = $check_linenums;
                    }else if($this->input->post("check_elesub_type_".$check_linenums) == "checkbox"){
                        $dv_inputvalue = $this->input->post("checkbox_".$check_linenums);
                        $dv_inputvalue = $check_linenums;
                    }else if($this->input->post("check_elesub_type_".$check_linenums) == "text"){
                        $dv_inputvalue = $this->input->post("inputvalue_".$check_linenums);
                    }else if($this->input->post("check_elesub_type_".$check_linenums) == "select"){
                        $dv_inputvalue = $this->input->post("select_".$check_linenums);
                    }
                }

                $arrayDevice = array(
                    "dv_code" => $deviceCode,
                    "dv_ele_type" => $check_ele_type[$key],
                    "dv_elesub_type" => $dv_elesub_type,
                    "dv_title" => $dv_title,
                    "dv_titlesize" => $dv_titlesize,
                    "dv_inputname" => $dv_inputname,
                    "dv_inputvalue" => $dv_inputvalue,
                    "dv_inputcolumnsize" => $dv_inputcolumnsize,
                    "dv_type" => $this->input->post("device_type"),
                    "dv_templatename" => $this->input->post("device_template"),
                    "dv_linenum" => $check_linenums,
                    "dv_userpost" => getUser()->Fname." ".getUser()->Lname,
                    "dv_ecodepost" => getUser()->ecode,
                    "dv_datetime" => date("Y-m-d H:i:s")
                );
                $this->db->insert("its_device_detail" , $arrayDevice);
            }

            $output = array(
                "msg" => "บันทึกข้อมูลสำเร็จ",
                "status" => "Insert Success"
            );
        }else{
            $output = array(
                "msg" => "บันทึกข้อมูลไม่สำเร็จสำเร็จ",
                "status" => "Insert Not Success",
                "devicetype" => $this->input->post("device_type")
            );
        }

        echo json_encode($output);
    }


    

    public function load_data(){

        if($this->input->post("dv_inputname") != ""){
            
            $dv_templatename = $this->input->post("dv_templatename");
            $dv_inputname = $this->input->post("dv_inputname");

            $sql = $this->db->query("SELECT * FROM
            its_template_master
            WHERE tp_mas_name = '$dv_templatename' AND tp_mas_inputname = '$dv_inputname' ORDER BY tp_mas_linenum ASC");

            echo $sql->row()->tp_mas_inputoption;

            // foreach($sql->result() as $key => $val){
            //     if($val->tp_mas_arraykey == "inputData"){
            //         if($val->tp_mas_inputoption != ""){
            //             $inputoption = json_decode($val->tp_mas_inputoption);
            //         }else{
            //             $inputoption = "";
            //         }
            //         $output = array(
            //             'inputoption' => $inputoption
            //         );
            //     }

            //     $arrayOutput[] = $output;
            // }

        }

        // echo json_encode($output);

    }
    
    

}

/* End of file ModelName.php */

?>