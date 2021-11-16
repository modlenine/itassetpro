<?php
class getfn
{
    private $ci;
    function __construct()
    {
        $this->ci = &get_instance();
        date_default_timezone_set("Asia/Bangkok");
    }

    function gci()
    {
        return $this->ci;
    }
}

function gfn()
{
    $obj = new getfn();
    return $obj->gci();
}


function getHead()
{
    gfn()->load->view("templates/head");
    
}

function getSidebar()
{
    gfn()->load->view("templates/sidebar");
    
}

function loadDataSubmenu()
{
    $sql = gfn()->db->query("SELECT * FROM its_template_master tc GROUP BY tc.tp_mas_name");
    return $sql;
}

function getNavbar()
{
    gfn()->load->view("templates/navbar");
    
}

function getTemplateform($tempId)
{
    $sql = loadDatatemplate($tempId);
    $output = '<div class="h5 pd-20 mb-0">Details</div>
    <div class="row pd-20">';
        foreach ($sql->result() as $fetch){

            if($fetch->tc_section=='Details'){

                if($fetch->tm_type=='text'){
                    $output .= '
                    <div class="col-md-4 col-sm-4">
                        <div class="form-group">
                            <label>'.$fetch->tm_name.'</label>
                            <input type="'.$fetch->tm_type.'" id="'.$fetch->tm_name.'" name="'.$fetch->tm_name.'" class="form-control">
                        </div>
                    </div>';
                }else if($fetch->tm_type=='select'){
                    $output .= '
                    <div class="col-md-4 col-sm-4">
                        <div class="form-group">
                            <label>'.$fetch->tm_name.'</label>
                            <select class="form-control" id="'.$fetch->tm_name.'" name="'.$fetch->tm_name.'">
                                <option value=""></option>
                                '.loadDataSelectOption($fetch->tm_id,$fetch->tc_sidebar_submenu).'
                            </select>
                        </div>
                    </div>';
                }

            }

        }
    $output .='</div>';

    echo $output;
}

function loadDataSelectOption($tm_id,$to_device)
{
    $sql = gfn()->db->query("SELECT * FROM its_item_option tpo WHERE tpo.tm_id = '$tm_id' AND tpo.to_device LIKE '%$to_device%' ORDER BY tpo.to_option ASC");
    $output = '';
    foreach ($sql->result() as $fetch) {
        $output .= '<option value="'. $fetch->to_option .'">'.$fetch->to_option.'</option>';
    }
    return $output;
}



// function loadDataTemplateMain()
// {
//     $sql = gfn()->db->query("SELECT * FROM its_item_option tpo WHERE tpo.tm_id = '$tm_id' AND tpo.to_device LIKE '%$to_device%' ORDER BY tpo.to_option ASC");
//     $output = '';
//     foreach ($sql->result() as $fetch) {
//         $output .= '<option value="'. $fetch->to_option .'">'.$fetch->to_option.'</option>';
//     }
//     return $output;
// }


function loadDataTemplateCreate(){
    $sql = gfn()->db->query("SELECT * FROM its_item_master GROUP BY tp_mas_name");
    $output = '';
    foreach ($sql->result() as $fetch) {
        $output .= '<div class="row pb-20">
            <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
                <div class="card-box card-box-cus height-100-p widget-style3">
                    <div class="d-flex flex-wrap">
                        <div class="widget-data">
                            <div class="weight-700 font-18 text-dark">Template '.$fetch->tc_sidebar_submenu.'</div>
                            <a href="#" class="stretched-link"></a>
                        </div>
                        <div class="widget-icon">
                            <div class="icon" data-color="#00eccf"><i class="'.$fetch->tc_sidebar_icon.'"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>';
    }
    return $output;
}

function loadDatatemplate($tempId)
{
    $sql = gfn()->db->query("SELECT * FROM its_item_master tc INNER JOIN its_item_option tm ON tc.item_mas_id = tm.item_option_id WHERE tc.tp_mas_name = '$tempId'");
    return $sql;
}

function getFooter()
{
    gfn()->load->view("templates/footer");
}

function getContent($content, $data)
{
    gfn()->parser->parse($content, $data);
}

function getModal($modal_name)
{
    gfn()->load->view($modal_name);
}

function getOptionInput($obj_mas_code)
{
    $outputoption=[];
    $sql = gfn()->db->query("SELECT obj_option_name FROM its_obj_option WHERE obj_mas_code = '$obj_mas_code' ORDER BY obj_option_id ASC");
    foreach($sql->result() as $rs){
       $outputoption[]=$rs->obj_option_name;
    }
    return $outputoption;
}

function getMasobj()
{
    // check formno ซ้ำในระบบ
    $checkRowdata = gfn()->db->query("SELECT
    obj_mas_code FROM its_obj_master ORDER BY obj_mas_id DESC LIMIT 1 
    ");
    $result = $checkRowdata->num_rows();

    $formno = "";
    if ($result == 0) {
        $formno = 1;
    } else {

        $getFormno = $checkRowdata->row()->obj_mas_code;
        $getFormno++;

        $formno = $getFormno;
    }

    return $formno;
}


function getDeviceId()
{
    // check formno ซ้ำในระบบ
    $checkRowdata = gfn()->db->query("SELECT
    dv_code FROM its_device_detail ORDER BY dv_autoid DESC LIMIT 1 
    ");
    $result = $checkRowdata->num_rows();

    $formno = "";
    if ($result == 0) {
        $formno = 1;
    } else {

        $getFormno = $checkRowdata->row()->dv_code;
        $getFormno++;

        $formno = $getFormno;
    }

    return $formno;
}



function loadmenu()
{
    $sql = gfn()->db->query("SELECT
        * 
    FROM
        its_obj_type  
    ORDER BY
        objtype_name ASC");
    // Check data
    $output = '
    <li class="dropdown">
        <a href="javascript:;" class="dropdown-toggle">						
            <span class="micon icon-copy dw fi-list"></span><span class="mtext">Device</span>
        </a>
        <ul class="submenu">
    ';
    if($sql->num_rows() != 0){
        foreach($sql->result() as $rs){
            $output .='
				<li><a href="'.base_url('device/page/').$rs->objtype_name.'" class="">'.$rs->objtype_name.'</a></li>
            ';
        } 
    }
    $output .='
        </ul>
    </li>
    ';
    echo $output;
}



function moveElementInArray($array, $toMove, $targetIndex) 
{
    if (is_int($toMove)) {
        $tmp = array_splice($array, $toMove, 1);
        array_splice($array, $targetIndex, 0, $tmp);
        $output = $array;
    }
    elseif (is_string($toMove)) {
        $indexToMove = array_search($toMove, array_keys($array));
        $itemToMove = $array[$toMove];
        array_splice($array, $indexToMove, 1);
        $i = 0;
        $output = Array();
        foreach($array as $key => $item) {
            if ($i == $targetIndex) {
                $output[$toMove] = $itemToMove;
            }
            $output[$key] = $item;
            $i++;
        }
    }
    return $output;
}


function geDeviceCode($device_type)
{
    $sql = gfn()->db->query("SELECT dv_code FROM its_device_detail WHERE dv_type = '$device_type' ORDER BY dv_autoid DESC ");
    $cutDeviceType = substr($device_type, 0, 3);
    if($sql->num_rows() == 0){
        $deviceCode = $cutDeviceType."0001";
    }else{
        $getDeviceCode = $sql->row()->dv_code;
        $cutNo = substr($getDeviceCode, 3, 4);
        $cutNo++;

        if ($cutNo < 10) {
            $cutNo = "000" . $cutNo;
        } else if ($cutNo < 100) {
            $cutNo = "00" . $cutNo;
        }else if($cutNo < 1000){
            $cutNo = "0" . $cutNo;
        }

        $deviceCode = $cutDeviceType.$cutNo;
    }
    return $deviceCode;
}


