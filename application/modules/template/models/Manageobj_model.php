<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Manageobj_model extends CI_Model {

    
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set("Asia/Bangkok");
    }


    public function saveObjectType()
    {
        if($this->input->post("objtype_name") != ""){

            // Check Data Duplicate
            $objtype_name = $this->input->post("objtype_name");
            $checkDup = $this->db->query("SELECT objtype_name FROM its_obj_type WHERE objtype_name = '$objtype_name' ");

            if($checkDup->num_rows() == 0){

                $arInsert = array(
                    "objtype_name" => strtoupper($objtype_name),
                    "objtype_userpost" => getUser()->Fname." ".getUser()->Lname,
                    "objtype_ecodepost" => getUser()->ecode,
                    "objtype_datetime" => date("Y-m-d H:i:s")
                );
                $this->db->insert("its_obj_type" , $arInsert);
                $output = array(
                    "msg" => "เพิ่มข้อมูลสำเร็จ",
                    "status" => "Insert Success"
                );

            }else{
                $output = array(
                    "msg" => "ตรวจพบข้อมูลซ้ำ",
                    "status" => "Insert Failed"
                );
            }

            echo json_encode($output);
            
        }
    }

    public function saveEditObjectType()
    {
        if($this->input->post("objtype_name") != ""){
            $checkAutoid = $this->input->post("checkAutoid");

            // Check Data Duplicate
            $objtype_name = $this->input->post("objtype_name");
            $checkDup = $this->db->query("SELECT objtype_name FROM its_obj_type WHERE objtype_name = '$objtype_name' ");

            if($checkDup->num_rows() == 0){

                $arInsert = array(
                    "objtype_name" => strtoupper($objtype_name),
                    "objtype_userpost" => getUser()->Fname." ".getUser()->Lname,
                    "objtype_ecodepost" => getUser()->ecode,
                    "objtype_datetime" => date("Y-m-d H:i:s")
                );
                $this->db->where("objtype_autoid" , $checkAutoid);
                $this->db->update("its_obj_type" , $arInsert);
                $output = array(
                    "msg" => "อัพเดตข้อมูลสำเร็จ",
                    "status" => "Update Success"
                );

            }else{
                $output = array(
                    "msg" => "ตรวจพบข้อมูลซ้ำ",
                    "status" => "Insert Failed"
                );
            }

            echo json_encode($output);
            
        }
    }



    ////////////////////////////
    //Zone ของประเภทอุปกรณ์
    ///////////////////////////
    public function load_objtype()
    {
        $sql = $this->db->query("SELECT objtype_name , objtype_autoid FROM its_obj_type ORDER BY objtype_name ASC");

        $output = '
        <div class="list-group">
        ';

        if($sql->num_rows() == 0){
            $output .='
            <a href="javascript:void(0)" class="mb-2 list-group-item list-group-item-action flex-column align-items-start list-group-item-info">
                <p class="mb-1 font-14">
                    == ไม่พบข้อมูล ==
                </p>
            </a>
            ';
        }else{
            foreach($sql->result() as $rs){
                $output .='
                <li href="javascript:void(0)" class="mb-2 list-group-item list-group-item-action align-items-start list-group-item-info d-flex justify-content-between">
                    <span class="font-14">'.$rs->objtype_name.'</span>
                    <span>
                        <i class="fa fa-trash del_fi_trash mr-3" 
                            data_objtypename="'.$rs->objtype_name.'"
                            data_objtypeautoid="'.$rs->objtype_autoid.'"
                        ></i>

                        <i class="fa fa-pencil-square-o edit_pencil"
                            data_objtypename="'.$rs->objtype_name.'"
                            data_objtypeautoid="'.$rs->objtype_autoid.'"
                        ></i>
                    </span>
                </li>
                ';
            }
        }

        $output .='
        </div>
        ';

        echo $output;
    }
    ////////////////////////////
    //Zone ของประเภทอุปกรณ์
    ///////////////////////////





    public function load_objtype2()
    {
        $sql = $this->db->query("SELECT objtype_name FROM its_obj_type ORDER BY objtype_name ASC");

        $output = '<select name="device_obj_type" id="device_obj_type" class="form-control">';
        if($sql->num_rows() == 0){
            $output .='<option>Not Found Data</option>';
        }else{
            $output .='<option value="">Please select option</option>';
            foreach($sql->result() as $rs){
                $output .='<option value="'.$rs->objtype_name.'">'.$rs->objtype_name.'</option>';
            }
        }
        $output .='</select>';
        echo $output;
    }



    public function saveNewObj()
    {
        if($this->input->post("device_obj_name") != ""){
            $objmascode = getMasobj();
            $objmastername = $this->input->post("device_obj_name");
            $objmastertype = $this->input->post("device_obj_type");
            $objeletype = $this->input->post("obj_mas_eletype");

            // Check Duplicate
            $chckDuplicate = $this->db->query("SELECT obj_mas_name , obj_mas_type FROM its_obj_master WHERE obj_mas_name = '$objmastername' AND obj_mas_type = '$objmastertype' ");

            if($chckDuplicate->num_rows() == 0){
                $arInsertObject = array(
                    "obj_mas_code" => $objmascode,
                    "obj_mas_name" => $objmastername,
                    "obj_mas_type" => $objmastertype,
                    "obj_mas_eletype" => $objeletype,
                    "obj_mas_userpost" => getUser()->Fname." ".getUser()->Lname,
                    "obj_mas_ecodepost" => getUser()->ecode,
                    "obj_mas_datetime" => date("Y-m-d H:i:s")
                );

                $this->db->insert("its_obj_master" ,  $arInsertObject);


                if($objeletype == "select"){
                    $selectOption = $this->input->post("select_option");
                    if($selectOption != ""){
                        foreach($selectOption as $selectOptions){
                            $arSelect = array(
                                "obj_mas_code" => $objmascode,
                                "obj_option_name" => $selectOptions,
                                "obj_mas_name" => $objmastername
                            );

                            $this->db->insert("its_obj_option" , $arSelect);
                        }
                    }else{
                        $output = array(
                            "msg" => "กรุณากรอก Option ด้วยค่ะ",
                            "status" => "Select Option Not Found"
                        );
                    }
                }else if($objeletype == "radio"){
                    $radioOption = $this->input->post("radio_option");
                    if($radioOption != ""){
                        foreach($radioOption as $radioOptions){
                            $arRadio = array(
                                "obj_mas_code" => $objmascode,
                                "obj_option_name" => $radioOptions,
                                "obj_mas_name" => $objmastername
                            );

                            $this->db->insert("its_obj_option" , $arRadio);
                        }
                    }else{
                        $output = array(
                            "msg" => "กรุณากรอก Option ด้วยค่ะ",
                            "status" => "Select Option Not Found"
                        );
                    }
                }else if($objeletype == "checkbox"){
                    $checkboxOption = $this->input->post("checkbox_option");
                    if($checkboxOption != ""){
                        foreach($checkboxOption as $checkboxOptions){
                            $arCheckbox = array(
                                "obj_mas_code" => $objmascode,
                                "obj_option_name" => $checkboxOptions,
                                "obj_mas_name" => $objmastername
                            );

                            $this->db->insert("its_obj_option" , $arCheckbox);
                        }
                    }else{
                        $output = array(
                            "msg" => "กรุณากรอก Option ด้วยค่ะ",
                            "status" => "Select Option Not Found"
                        );
                    }
                }
                $output = array(
                    "msg" => "บันทึกข้อมูลสำเร็จ",
                    "status" => "Insert Data Success"
                );
            }else{
                $output = array(
                    "msg" => "ตรวจพบข้อมูลซ้ำในระบบ",
                    "status" => "Found Duplicate Data"
                );
            }
            echo json_encode($output);
        }
    }




    public function saveEditNewObj()
    {
        if($this->input->post("device_obj_name") != ""){
            $objmascode = $this->input->post("checkMasCode");
            $objmastername = $this->input->post("device_obj_name");
            $objmastertype = $this->input->post("device_obj_type");
            $objeletype = $this->input->post("obj_mas_eletype");
            $objmasid = $this->input->post("checkSpec_autoid");

            // Check Duplicate
            $chckDuplicate = $this->db->query("SELECT obj_mas_name , obj_mas_type FROM its_obj_master WHERE obj_mas_name = '$objmastername' AND obj_mas_type = '$objmastertype' ");

         
                $arInsertObject = array(
                    "obj_mas_name" => $objmastername,
                    "obj_mas_type" => $objmastertype,
                    "obj_mas_eletype" => $objeletype,
                    "obj_mas_userpost" => getUser()->Fname." ".getUser()->Lname,
                    "obj_mas_ecodepost" => getUser()->ecode,
                    "obj_mas_datetime" => date("Y-m-d H:i:s")
                );

                $this->db->where("obj_mas_id" , $objmasid);
                $this->db->update("its_obj_master" ,  $arInsertObject);


                if($objeletype == "select"){
                    $selectOption = $this->input->post("select_option");
                    if($selectOption != ""){
                        $this->db->where("obj_mas_code" , $objmascode);
                        $this->db->delete("its_obj_option");
                        foreach($selectOption as $selectOptions){
                            $arSelect = array(
                                "obj_mas_code" => $objmascode,
                                "obj_option_name" => $selectOptions,
                                "obj_mas_name" => $objmastername
                            );
                            $this->db->insert("its_obj_option" , $arSelect);
                        }
                    }else{
                        $output = array(
                            "msg" => "กรุณากรอก Option ด้วยค่ะ",
                            "status" => "Select Option Not Found"
                        );
                    }
                }else if($objeletype == "radio"){
                    $radioOption = $this->input->post("radio_option");
                    if($radioOption != ""){
                        $this->db->where("obj_mas_code" , $objmascode);
                        $this->db->delete("its_obj_option");
                        foreach($radioOption as $radioOptions){
                            $arRadio = array(
                                "obj_mas_code" => $objmascode,
                                "obj_option_name" => $radioOptions,
                                "obj_mas_name" => $objmastername
                            );

                            $this->db->insert("its_obj_option" , $arRadio);
                        }
                    }else{
                        $output = array(
                            "msg" => "กรุณากรอก Option ด้วยค่ะ",
                            "status" => "Select Option Not Found"
                        );
                    }
                }else if($objeletype == "checkbox"){
                    $checkboxOption = $this->input->post("checkbox_option");
                    if($checkboxOption != ""){
                        $this->db->where("obj_mas_code" , $objmascode);
                        $this->db->delete("its_obj_option");
                        foreach($checkboxOption as $checkboxOptions){
                            $arCheckbox = array(
                                "obj_mas_code" => $objmascode,
                                "obj_option_name" => $checkboxOptions,
                                "obj_mas_name" => $objmastername
                            );

                            $this->db->insert("its_obj_option" , $arCheckbox);
                        }
                    }else{
                        $output = array(
                            "msg" => "กรุณากรอก Option ด้วยค่ะ",
                            "status" => "Select Option Not Found"
                        );
                    }
                }
                $output = array(
                    "msg" => "บันทึกข้อมูลสำเร็จ",
                    "status" => "Update Data Success"
                );
            
            echo json_encode($output);
        }
    }




    public function load_deviceObjMaster()
    {
        $sql = $this->db->query("SELECT obj_mas_name , obj_mas_id , obj_mas_type , obj_mas_eletype , obj_mas_code FROM its_obj_master ORDER BY obj_mas_id DESC");

        $output = '
        <div class="list-group deviceObjMaster_scroll">
        ';

        if($sql->num_rows() == 0){
            $output .='
            <a href="javascript:void(0)" class="mb-2 list-group-item list-group-item-action flex-column align-items-start list-group-item-info">
                <p class="mb-1 font-14">
                    == ไม่พบข้อมูล ==
                </p>
            </a>
            ';
        }else{
            foreach($sql->result() as $rs){
                $output .='
                <li href="javascript:void(0)" class="mb-2 list-group-item list-group-item-action align-items-start list-group-item-info d-flex justify-content-between">
                    <span class="font-14"><b>'.$rs->obj_mas_name.'</b>&nbsp;:&nbsp;'.$rs->obj_mas_eletype.'</span>
                    <span>
                        <i class="fa fa-trash del_spec_trash mr-3"
                            data_objmascode="'.$rs->obj_mas_code.'"
                            data_objmasname="'.$rs->obj_mas_name.'"
                            data_objmasautoid="'.$rs->obj_mas_id.'"
                        ></i>
                        <i class="fa fa-pencil-square-o edit_spec"
                            data_objmascode="'.$rs->obj_mas_code.'"
                            data_objmasname="'.$rs->obj_mas_name.'"
                            data_objmasautoid="'.$rs->obj_mas_id.'"
                            data_objmastype="'.$rs->obj_mas_type.'"
                            data_objmaseletype="'.$rs->obj_mas_eletype.'"
                        ></i>
                    </span>
                </li>
                ';
            }
        }

        $output .='
        </div>
        ';

        echo $output;
    }



    public function loadTemplateType()
    {
        $sql = $this->db->query("SELECT objtype_name FROM its_obj_type ORDER BY objtype_name ASC");
        $output = '<select id="tem_chooseTemType" name="tem_chooseTemType" class="form-control">';
        $output .='<option value="">Please Choose Template Type</option>';
        foreach($sql->result() as $rs){
            $output .='
                <option value="'.$rs->objtype_name.'">'.$rs->objtype_name.'</option>
            ';
        }
        $output .='</select>';

        echo $output;
    }


    public function loadInput()
    {
        if($this->input->post("templateType")){
            $templateType = $this->input->post("templateType");
            $sql = $this->db->query("SELECT obj_mas_name , obj_mas_type , obj_mas_eletype , obj_mas_code FROM its_obj_master WHERE obj_mas_type = '$templateType' ORDER BY obj_mas_name ASC");

            if($sql->num_rows() != 0){
                foreach($sql->result() as $rs){
                    if($rs->obj_mas_eletype != "text"){
                        $arrayOutput = array(
                            "obj_mas_code" => $rs->obj_mas_code,
                            "obj_mas_name" => $rs->obj_mas_name,
                            "obj_mas_type" => $rs->obj_mas_type,
                            "obj_mas_eletype" => $rs->obj_mas_eletype,
                            "obj_mas_option" => getOptionInput($rs->obj_mas_code)
                        );
                    }else{
                        $arrayOutput = array(
                            "obj_mas_code" => $rs->obj_mas_code,
                            "obj_mas_name" => $rs->obj_mas_name,
                            "obj_mas_type" => $rs->obj_mas_type,
                            "obj_mas_eletype" => $rs->obj_mas_eletype
                        );
                    }
                    
                    $output[]=$arrayOutput;
                }
            }else{
                $output = array(
                    "msg" => "Not found data",
                    "status" => "Not found data"
                );
            }

            echo json_encode($output);

        }
        
        
    }



    public function deleteDeviceType()
    {
        if($this->input->post("data_objtypeautoid") != ""){
            $data_objtypeautoid = $this->input->post("data_objtypeautoid");
            $this->db->where("objtype_autoid" , $data_objtypeautoid);
            $this->db->delete("its_obj_type");

            $output = array(
                "msg" => "ลบข้อมูลประเภทอุปกรณ์สำเร็จ",
                "status" => "Delete Success"
            );

            echo json_encode($output);
        }
    }



    public function deleteSpec()
    {
        if($this->input->post("data_objmasautoid") != ""){
            $data_objmasautoid = $this->input->post("data_objmasautoid");
            $data_objmascode = $this->input->post("data_objmascode");
            $this->db->where("obj_mas_id" , $data_objmasautoid);
            $this->db->delete("its_obj_master");


            $this->db->where("obj_mas_code" , $data_objmascode);
            $this->db->delete("its_obj_option");

            $output = array(
                "msg" => "ลบข้อมูลประเภท Specification สำเร็จ",
                "status" => "Delete Success"
            );

            echo json_encode($output);
        }
    }


    public function loadOptionEdit()
    {
        if($this->input->post("data_objmascode") != ""){
            $data_objmascode = $this->input->post("data_objmascode");
            $sql = $this->db->query("SELECT obj_mas_name , obj_option_name FROM its_obj_option WHERE obj_mas_code = '$data_objmascode' ORDER BY obj_option_name ASC ");

            if($sql->num_rows() != 0){
                foreach($sql->result() as $rs){
                    $output[] = $rs->obj_option_name;
                }

                echo json_encode($output);
            }
        }
    }



    public function viewtemplate()
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
                        'autoid' => $val->tp_mas_autoid
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
                        'autoid' => $val->tp_mas_autoid
                    );
                }

                $arrayOutput[] = $output;
                
            }

            echo json_encode($arrayOutput);
        }
    }




    public function saveTemplate()
    {
        if($this->input->post("tp_mas_name") != ""){
            $templatecode = $this->input->post("templatecode");
           for($i=0;$i<count($templatecode);$i++){

               if(isset($templatecode[$i]['title'])){

                    // echo $templatecode[$i]['title']['title_size']." ".$templatecode[$i]['title']['title_text'];
                    $arrayTitle = array(
                        "tp_mas_name" => $this->input->post("tp_mas_name"),
                        "tp_mas_type" => $this->input->post("tp_mas_type"),
                        "tp_mas_arraykey" => "title",
                        "tp_mas_title_size" => $templatecode[$i]['title']['title_size'],
                        "tp_mas_title_text" => $templatecode[$i]['title']['title_text'],
                        "tp_mas_linenum" => $templatecode[$i]['linenum'],
                        "tp_mas_userpost" => getUser()->Fname." ".getUser()->Lname,
                        "tp_mas_ecodepost" => getUser()->ecode,
                        "tp_mas_datetime" => date("Y-m-d H:i:s")
                    );
                    $this->db->insert("its_template_master" , $arrayTitle);

               }else if(isset($templatecode[$i]['inputData'])){

                    // echo $templatecode[$i]['inputData']['inputname']." ".$templatecode[$i]['inputData']['inputtype']." ".$templatecode[$i]['inputData']['inputcolumnsize']." ".$templatecode[$i]['inputData']['inputtemptype']." ".$templatecode[$i]['inputData']['inputmascode'];

                    $output_option = '';
                    if(isset($templatecode[$i]['inputData']['inputoption'])){
                        $option = $templatecode[$i]['inputData']['inputoption'];
                        $output_option = json_encode($option); 
                    }

                    $arrayInput = array(
                        "tp_mas_name" => $this->input->post("tp_mas_name"),
                        "tp_mas_type" => $this->input->post("tp_mas_type"),

                        "tp_mas_arraykey" => "inputData",
                        "tp_mas_inputname" => $templatecode[$i]['inputData']['inputname'],
                        "tp_mas_inputtype" => $templatecode[$i]['inputData']['inputtype'],
                        "tp_mas_inputcolumnsize" => $templatecode[$i]['inputData']['inputcolumnsize'],
                        "tp_mas_inputtemptype" => $templatecode[$i]['inputData']['inputtemptype'],
                        "tp_mas_inputmascode" => $templatecode[$i]['inputData']['inputmascode'],
                        "tp_mas_inputoption" => $output_option,
                        "tp_mas_linenum" => $templatecode[$i]['linenum'],

                        "tp_mas_userpost" => getUser()->Fname." ".getUser()->Lname,
                        "tp_mas_ecodepost" => getUser()->ecode,
                        "tp_mas_datetime" => date("Y-m-d H:i:s")
                    );
                    $this->db->insert("its_template_master" , $arrayInput);

            }
    
           }
           $output_res = array(
               "msg" => "บันทึกข้อมูลเรียบร้อยแล้ว",
               "status" => "Insert Success"
           );

           echo json_encode($output_res);
        }
    }




    public function loadTemplateList()
    {
        if($this->input->post("action") == "load template"){
            $sql = $this->db->query("SELECT
            its_template_master.tp_mas_autoid,
            its_template_master.tp_mas_name,
            its_template_master.tp_mas_type
            FROM
            its_template_master
            GROUP BY tp_mas_name
            ORDER BY tp_mas_autoid DESC");

            $output = '';
            foreach($sql->result() as $rs){
                $output .='
                <div class="col-sm-12 col-md-3 mb-30 templateBox">
                    <div class="card card-box text-center templateBoxCard"
                        data_templatename="'.$rs->tp_mas_name.'"
                        data_templatetype="'.$rs->tp_mas_type.'"
                    >
                        <div class="card-body">
                            <h5 class="card-title">'.$rs->tp_mas_name.'</h5>
                            <p class="card-text">Type : '.$rs->tp_mas_type.'</p>
                        </div>
                    </div>
                </div>
                ';
            }
            echo $output;
        }
    }




    public function addTitleToDatabase()
    {
        if($this->input->post("check_data_template_name") != ""){
            $templatename = $this->input->post("check_data_template_name");
            $checkLinenum = $this->db->query("SELECT tp_mas_linenum FROM its_template_master WHERE tp_mas_name = '$templatename' ORDER BY tp_mas_linenum DESC ");

            if($checkLinenum->num_rows() != 0){
                $datalinenum = $checkLinenum->row()->tp_mas_linenum;
                $datalinenum++;
            }


            $arInsert = array(
                "tp_mas_name" => $this->input->post("check_data_template_name"),
                "tp_mas_type" => $this->input->post("check_data_template_type"),
                "tp_mas_arraykey" => "title",
                "tp_mas_title_size" => $this->input->post("title_fontsize"),
                "tp_mas_title_text" => $this->input->post("title_text"),
                "tp_mas_linenum" => $datalinenum,

                "tp_mas_userpost" => getUser()->Fname." ".getUser()->Lname,
                "tp_mas_ecodepost" => getUser()->ecode,
                "tp_mas_datetime" => date("Y-m-d H:i:s")
            );
            $this->db->insert("its_template_master" , $arInsert);

            $output = array(
                "msg" => "บันทึกข้อมูลเรียบร้อยแล้ว",
                "status" => "Insert Success",
                "templatename" => $this->input->post("check_data_template_name")
            );
        }else{
            $output = array(
                "msg" => "บันทึกข้อมูลไม่สำเร็จ",
                "status" => "Insert Not Success"
            );
        }
        

        echo json_encode($output);
    }




    public function saveinput_vtem()
    {
        if($this->input->post("input_templatename_vtem") != ""){
            $templatename = $this->input->post("input_templatename_vtem");
            $checkLinenum = $this->db->query("SELECT tp_mas_linenum FROM its_template_master WHERE tp_mas_name = '$templatename' ORDER BY tp_mas_linenum DESC ");

            if($checkLinenum->num_rows() != 0){
                $datalinenum = $checkLinenum->row()->tp_mas_linenum;
                $datalinenum++;
            }

            $inputoption = '';
            if($this->input->post("input_option_vtem") != ""){
                $inputoption = explode(",",$this->input->post("input_option_vtem"));
            }else{
                $inputoption = '';
            }

            $arInsertInput = array(
                "tp_mas_name" => $this->input->post("input_templatename_vtem"),
                "tp_mas_type" => $this->input->post("input_temptype_vtem"),
                "tp_mas_arraykey" => "inputData",
                "tp_mas_inputname" => $this->input->post("input_name_detail_vtem"),
                "tp_mas_inputtype" => $this->input->post("input_type_detail_vtem"),
                "tp_mas_inputcolumnsize" => $this->input->post("input_col_size_vtem"),
                "tp_mas_inputtemptype" => $this->input->post("input_temptype_vtem"),
                "tp_mas_inputmascode" => $this->input->post("input_mascode_vtem"),
                "tp_mas_inputoption" => json_encode($inputoption),
                "tp_mas_linenum" => $datalinenum,
                "tp_mas_userpost" => getUser()->Fname." ".getUser()->Lname,
                "tp_mas_ecodepost" => getUser()->ecode,
                "tp_mas_datetime" => date("Y-m-d H:i:s")
            );
            $this->db->insert("its_template_master" , $arInsertInput);


            $output = array(
                "msg" => "บันทึกข้อมูลเรียบร้อยแล้ว",
                "status" => "Insert Success",
                "templatename" => $this->input->post("input_templatename_vtem")
            );
        }else{
            $output = array(
                "msg" => "บันทึกข้อมูลไม่สำเร็จ",
                "status" => "Insert Not Success"
            );
        }
        
        echo json_encode($output);
    }



    public function delete_title_vtem()
    {
        if($this->input->post("autoid") != ""){
            $autoid = $this->input->post("autoid");
            $this->db->where("tp_mas_autoid",$autoid);
            $this->db->delete("its_template_master");

            $output = array(
                "msg" => "ลบ Title เรียบร้อยแล้ว",
                "status" => "Delete Success"
            );

            echo json_encode($output);
        }
    }


    public function saveEdit_title_vtem()
    {
        if($this->input->post("check_title_autoid") != ""){
            $arSaveEdit = array(
                "tp_mas_title_size" => $this->input->post("title_fontsize_edit_vtem"),
                "tp_mas_title_text" => $this->input->post("title_text_edit_vtem")
            );
            $this->db->where("tp_mas_autoid" , $this->input->post("check_title_autoid"));
            $this->db->update("its_template_master" , $arSaveEdit);

            $output = array(
                "msg" => "อัพเดตข้อมูลสำเร็จ",
                "status" => "Update Success"
            );

        }else{
            $output = array(
                "msg" => "อัพเดตข้อมูลไม่สำเร็จ",
                "status" => "Update Not Success"
            );
        }
        echo json_encode($output);
    }



    public function deleteInput_vtem()
    {
        if($this->input->post("autoid") != ""){
            $this->db->where("tp_mas_autoid" , $this->input->post("autoid"));
            $this->db->delete("its_template_master");

            $output = array(
                "msg" => "ลบ Input สำเร็จ",
                "status" => "Delete Input Success"
            );
        }else{
            $output = array(
                "msg" => "ลบ Input ไม่สำเร็จ",
                "status" => "Delete Input Not Success"
            );
        }
        echo json_encode($output);
    }


    public function save_input_edit_vtem()
    {
        if($this->input->post("check_input_autoid") != ""){
            $arInputUpdate = array(
                "tp_mas_inputcolumnsize" => $this->input->post("input_col_size_edit_vtem")
            );
            $this->db->where("tp_mas_autoid" , $this->input->post("check_input_autoid"));
            $this->db->update("its_template_master" , $arInputUpdate);

            $output = array(
                "msg" => "อัพเดตการแก้ไข Input สำเร็จ",
                "status" => "Update Edit Input Success"
            );
        }else{
            $output = array(
                "msg" => "อัพเดตการแก้ไข Input ไม่สำเร็จ",
                "status" => "Update Edit Input Not Success"
            );
        }
        echo json_encode($output);
    }



    public function delete_template()
    {
        if($this->input->post("templatename") != ""){
            $this->db->where("tp_mas_name" , $this->input->post("templatename"));
            $this->db->delete("its_template_master");

            $output = array(
                "msg" => "ลบ Template สำเร็จ",
                "status" => "Delete Template Success"
            );
        }else{
            $output = array(
                "msg" => "ลบ Template ไม่สำเร็จ",
                "status" => "Delete Template Not Success"
            );
        }

        echo json_encode($output);
    }



    public function loadElementOrderlist()
    {
        if($this->input->post("templatename")){
            $templatename = $this->input->post("templatename");
            $sql = $this->db->query("SELECT
            its_template_master.tp_mas_autoid,
            its_template_master.tp_mas_name,
            its_template_master.tp_mas_linenum,
            its_template_master.tp_mas_inputname,
            its_template_master.tp_mas_title_text,
            its_template_master.tp_mas_arraykey
            FROM
            its_template_master
            WHERE tp_mas_name = '$templatename' ORDER BY tp_mas_linenum ASC");


            // Check linenum Up
            $checkLinenumUP = $this->db->query("SELECT tp_mas_linenum FROM its_template_master WHERE tp_mas_name = '$templatename' ORDER BY tp_mas_linenum ASC LIMIT 1");
            // Check linenum Down
            $checkLinenumDOWN = $this->db->query("SELECT tp_mas_linenum FROM its_template_master WHERE tp_mas_name = '$templatename' ORDER BY tp_mas_linenum DESC LIMIT 1");

            if($checkLinenumUP->num_rows() != 0){
                $linenumUp = $checkLinenumUP->row()->tp_mas_linenum;
            }
            if($checkLinenumDOWN->num_rows() != 0){
                $linenumDows = $checkLinenumDOWN->row()->tp_mas_linenum;
            }


            $output ='';
            foreach($sql->result() as $key => $val){
                if($val->tp_mas_arraykey == "title"){
                    $output = array(
                        'title_text' => $val->tp_mas_title_text,
                        'autoid' => $val->tp_mas_autoid,
                        'linenum' => $val->tp_mas_linenum,
                        'datatype' => $val->tp_mas_arraykey,
                        'linenum_up' => $linenumUp,
                        'linenum_down' => $linenumDows
                    );
                }else if($val->tp_mas_arraykey == "inputData"){

                    $output = array(
                        'inputname' => $val->tp_mas_inputname,
                        'autoid' => $val->tp_mas_autoid,
                        'linenum' => $val->tp_mas_linenum,
                        'datatype' => $val->tp_mas_arraykey,
                        'linenum_up' => $linenumUp,
                        'linenum_down' => $linenumDows
                    );
                }

                $arrayOutput[] = $output;
                
            }

            echo json_encode($arrayOutput);
        }
    }


    public function updatelinenum_up()
    {
        if($this->input->post("data_linenum") != ""){
            $data_linenum = $this->input->post("data_linenum");
            $templatename = $this->input->post("data_template_name");

            // Query all linenum
            $queryAllLinenum = $this->db->query("SELECT
            its_template_master.tp_mas_autoid,
            its_template_master.tp_mas_name,
            its_template_master.tp_mas_linenum,
            its_template_master.tp_mas_inputname,
            its_template_master.tp_mas_title_text,
            its_template_master.tp_mas_arraykey
            FROM
            its_template_master
            WHERE tp_mas_name = '$templatename' ORDER BY tp_mas_linenum ASC");

            // Fetch data to array
            foreach($queryAllLinenum->result() as $rs){
                $linenumArray[] = $rs->tp_mas_linenum;
            }

            // Search position linenum in linenum array
            //return array position
            $linenumPosition = array_search($data_linenum , $linenumArray);

            // make up linenum
            $up = $linenumPosition-1;

            // Use Function for move linenum
            $moveUp = moveElementInArray($linenumArray, $linenumPosition, $up);
            $i =0;
            foreach($queryAllLinenum->result() as $rs){
                $arUp = array(
                    "tp_mas_linenum" => $moveUp[$i],
                );
                $this->db->where("tp_mas_autoid" , $rs->tp_mas_autoid);
                $this->db->update("its_template_master" , $arUp);
                $i++;
            }

            $output = array(
                "msg" => "เลื่อนตำแหน่งขึ้นเรียบร้อยแล้ว",
                "status" => "Move Linenum Success",
                "now" => $linenumPosition,
                "to" => $up ,
                "linenumArray" => $moveUp
            );
            
        }else{
            $output = array(
                "msg" => "เลื่อนตำแหน่งไม่สำเร็จ",
                "status" => "Move Linenum Not Success"
            );
        }

        echo json_encode($output);
    }





    public function updatelinenum_down()
    {
        if($this->input->post("data_linenum") != ""){
            $data_linenum = $this->input->post("data_linenum");
            $templatename = $this->input->post("data_template_name");

            // Query all linenum
            $queryAllLinenum = $this->db->query("SELECT
            its_template_master.tp_mas_autoid,
            its_template_master.tp_mas_name,
            its_template_master.tp_mas_linenum,
            its_template_master.tp_mas_inputname,
            its_template_master.tp_mas_title_text,
            its_template_master.tp_mas_arraykey
            FROM
            its_template_master
            WHERE tp_mas_name = '$templatename' ORDER BY tp_mas_linenum ASC");

            // Fetch data to array
            foreach($queryAllLinenum->result() as $rs){
                $linenumArray[] = $rs->tp_mas_linenum;
            }

            // Search position linenum in linenum array
            //return array position
            $linenumPosition = array_search($data_linenum , $linenumArray);

            // make up linenum
            $up = $linenumPosition+1;

            // Use Function for move linenum
            $moveDown = moveElementInArray($linenumArray, $linenumPosition, $up);
            $i =0;
            foreach($queryAllLinenum->result() as $rs){
                $arDown = array(
                    "tp_mas_linenum" => $moveDown[$i],
                );
                $this->db->where("tp_mas_autoid" , $rs->tp_mas_autoid);
                $this->db->update("its_template_master" , $arDown);
                $i++;
            }

            $output = array(
                "msg" => "เลื่อนตำแหน่งลงเรียบร้อยแล้ว",
                "status" => "Move Linenum Success",
                "now" => $linenumPosition,
                "to" => $up ,
                "linenumArray" => $moveDown
            );
            
        }else{
            $output = array(
                "msg" => "เลื่อนตำแหน่งไม่สำเร็จ",
                "status" => "Move Linenum Not Success"
            );
        }

        echo json_encode($output);
    }
    

    

}/* End of file ModelName.php */
/* End of file ModelName.php */
?>
