<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Manageobj extends MX_Controller {

    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        date_default_timezone_set("Asia/Bangkok");
        $this->load->model("manageobj_model" , "mgrobj");
    }
    

    public function index()
    {
        $data = array(
            "title" => "Manage Object"
        );
        getHead();
        getSidebar();
        getNavbar();
        getContent("object/index", $data);
        getFooter();
    }

    public function saveObjectType()
    {
        $this->mgrobj->saveObjectType();
    }
    public function saveEditObjectType()
    {
        $this->mgrobj->saveEditObjectType();
    }

    public function load_objtype()
    {
        $this->mgrobj->load_objtype();
    }

    public function load_objtype2()
    {
        $this->mgrobj->load_objtype2();
    }

    public function saveNewObj()
    {
        $this->mgrobj->saveNewObj();
    }

    public function saveEditNewObj()
    {
        $this->mgrobj->saveEditNewObj();
    }

    public function load_deviceObjMaster()
    {
        $this->mgrobj->load_deviceObjMaster();
    }

    public function loadTemplateType()
    {
        $this->mgrobj->loadTemplateType();
    }

    public function loadInput()
    {
        $this->mgrobj->loadInput();
    }

    public function loadInput_masterdata()
    {
        $this->mgrobj->loadInput_masterdata();
    }
    

    // public function loadOption()
    // {
    //     $this->mgrobj->loadOption();
    // }

    // public function loadOptionRadio()
    // {
    //     $this->mgrobj->loadOptionRadio();
    // }

    // public function loadOptionCheckbox()
    // {
    //     $this->mgrobj->loadOptionCheckbox();
    // }

    public function deleteDeviceType()
    {
        $this->mgrobj->deleteDeviceType();
    }

    public function deleteSpec()
    {
        $this->mgrobj->deleteSpec();
    }

    public function loadOptionEdit()
    {
        $this->mgrobj->loadOptionEdit();
    }

    public function saveTemplate()
    {
        $this->mgrobj->saveTemplate();
    }

    public function saveMasterData()
    {
        $this->mgrobj->saveMasterData();
    }

    public function test()
    {
        $get_masterdata_input = $this->db->query("SELECT masD_inputmascode FROM its_master_data WHERE masD_type = 'computer' AND masD_ele_type = 'inputData' ");

            $output = "";
            $checkComma = 1;
            foreach($get_masterdata_input->result() as $rss){
                if($checkComma == 1){
                    $output .= '"'.$rss->masD_inputmascode.'"';
                }else{
                    $output .= ',"'.$rss->masD_inputmascode.'"';
                }
                $checkComma++;
            }

            echo $output;

    }

    public function loadTemplateList()
    {
        $this->mgrobj->loadTemplateList();
    }

    public function getdate()
    {
        print_r(getdate());
        echo "<br><br>".getdate()[0];
    }

    public function viewtemplate()
    {
        $this->mgrobj->viewtemplate();
    }

    public function addTitleToDatabase()
    {
        $this->mgrobj->addTitleToDatabase();
    }


    public function saveinput_vtem()
    {
        $this->mgrobj->saveinput_vtem();
    }


    public function delete_title_vtem()
    {
        $this->mgrobj->delete_title_vtem();
    }


    public function saveEdit_title_vtem()
    {
        $this->mgrobj->saveEdit_title_vtem();
    }


    public function deleteInput_vtem()
    {
        $this->mgrobj->deleteInput_vtem();
    }


    public function save_input_edit_vtem()
    {
        $this->mgrobj->save_input_edit_vtem();
    }


    public function delete_template()
    {
        $this->mgrobj->delete_template();
    }


    public function loadElementOrderlist()
    {
        $this->mgrobj->loadElementOrderlist();
    }


    public function updatelinenum_up()
    {
        $this->mgrobj->updatelinenum_up();
    }


    public function updatelinenum_down()
    {
        $this->mgrobj->updatelinenum_down();
    }

    public function masD_loadDeviceType()
    {
        $this->mgrobj->masD_loadDeviceType();
    }


    public function loadMasterData_toTemplate()
    {
        $this->mgrobj->loadMasterData_toTemplate();
    }


}

/* End of file Controllername.php */
?>