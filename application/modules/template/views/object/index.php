<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <div class="main-container">
        <div class="pd-ltr-20">
            <div class="card-box pd-20 mb-30">
                <div class="row align-items-center form-group">
                    <h4>Manage Templates</h4>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <button class="btn btn-primary" id="add_newType">Device Type</button>
                        <button class="btn btn-primary" id="add_newObj">Specification List</button>
                        <button class="btn btn-primary" id="cre_template">Create Template</button>
                        <button class="btn btn-primary" id="cre_masterdata">Create Master Data</button>
                    </div> 
                </div>
                <hr>
                <div class="row form-group text-center">
                    <div class="col-md-12">
                        <h4>Template List</h4>
                    </div>
                </div>
                <div id="showTemplateList" class="row form-group"></div>
            </div>
        </div>
    </div>
</body>



<!-- Modal Edit Run Template -->
<div class="modal fade " id="viewtemplate_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">

        <div class="modal-content">
            <div class="modal-header">
                <span id="view_temname"></span>
                <button type="button" class="close btn_close_divider" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-header subhead">
                <button type="button" class="btn btn-info btn-sm addElement_vtem">Add Elements</button>
                <button type="button" class="btn btn-info btn-sm elementOrder_vtem ml-3">Elements Orders</button>
                <button id="delete_template" type="button" class="btn btn-danger btn-sm ml-3">Delete Template</button>
            </div>
            
            <div class="modal-body">
                <div id="show_template_view" class="row form-group"></div>
            </div>
        </div>

    </div>
</div>
<!-- Modal Create Template -->




<!-- Modal Edit Run Template -->
<div class="modal fade " id="add_element_vtem_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">

        <div class="modal-content">

            <div class="modal-header">
                <h4>Choose Element</h4>
                <button type="button" class="close btn_close_element_vtem" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-header subhead">
                <!-- <button type="button" id="btn_add_obj" class="btn btn-success btn-sm mr-2">add</button> -->
                <button type="button" id="btn_close_element" class="btn btn-danger btn-sm btn_close_element_vtem" data-dismiss="modal">Close</button>
            </div>
            
            <div class="modal-body">

                <div class="row form-group">
                  
                        <div class="col-lg-3">
                            <div class="da-card select_title_vtem" >
                                <div class="da-card-content">
                                    <h5 class="h5 mb-10">Title</h5>
                                    <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="da-card select_input_vtem"
                            data_column = "2"
                            >
                                <div class="da-card-content">
                                    <h5 class="h5 mb-10">Input</h5>
                                    <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                </div>
                            </div>
                        </div>
                 
                </div>
            </div>

        </div>

    </div>
</div>
<!-- Modal Create Template -->




<!-- Modal Edit Run Template -->
<div class="modal fade " id="add_ele_title_vtem" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-md modal-dialog-scrollable">

    <form id="frm_add_ele_title_vtem" style="width:100%;" autocomplete="off">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="add_title_h">Add Title</h4>
                <button type="button" class="close btn_close_eletitle_vtem" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-header subhead">
                <button type="button" id="btn_add_title_vtem" class="btn btn-success btn-sm mr-2">Add</button>
                <button type="button" id="btn_close_eletitle_vtem" class="btn btn-danger btn-sm btn_close_eletitle_vtem" data-dismiss="modal">Close</button>
            </div>
            
            <div class="modal-body">
                <!-- Check Templatename and Templatetype Zone -->
                <input hidden type="text" name="check_data_template_name" id="check_data_template_name">
                <input hidden type="text" name="check_data_template_type" id="check_data_template_type">
                <!-- Check Templatename and Templatetype Zone -->
                <div class="row form-group">
                  
                        <div class="col-lg-12 form-group">
                            <label for="">เลือก ขนาด</label>
                            <select name="title_fontsize" id="title_fontsize" class="form-control">
                                <option value="h1">h1</option>
                                <option value="h2">h2</option>
                                <option value="h3">h3</option>
                                <option value="h4">h4</option>
                                <option value="h5">h5</option>
                                <option value="h6">h6</option>
                            </select>
                        </div>

                        <div class="col-lg-12 form-group">
                            <label for="">พิมพ์ข้อความที่ต้องการ</label>
                            <input type="text" name="title_text" id="title_text" class="form-control">
                        </div>

                </div>
            </div>

        </div>
    </form>
    </div>
</div>
<!-- Modal Create Template -->




<!-- Modal Edit Run Template -->
<div class="modal fade " id="add_input_detail_vtem" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-md modal-dialog-scrollable">

    <form id="frm_add_input_detail_vtem" style="width:100%;" autocomplete="off">
        <div class="modal-content">
            <div class="modal-header">
                <span id="inputNameTitle_vtem"></span>
                <button type="button" class="close btn_close_column_vtem" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-header subhead">
                <button type="button" id="btn_add_input_vtem" class="btn btn-success btn-sm mr-2">Add</button>
                <button type="button" id="btn_close_input_vtem" class="btn btn-danger btn-sm btn_close_input_vtem" data-dismiss="modal">Close</button>
            </div>
            
            <div class="modal-body">
                <input hidden type="text" name="input_name_detail_vtem" id="input_name_detail_vtem">
                <input hidden type="text" name="input_type_detail_vtem" id="input_type_detail_vtem">
                <input hidden type="text" name="input_index_vtem" id="input_index_vtem">
                <input hidden type="text" name="input_option_vtem" id="input_option_vtem">
                <input hidden type="text" name="input_temptype_vtem" id="input_temptype_vtem">
                <input hidden type="text" name="input_mascode_vtem" id="input_mascode_vtem">
                <input hidden type="text" name="input_templatename_vtem" id="input_templatename_vtem">
                <div class="row form-group">
                    <div class="col-lg-12">
                        <label for="">Column size</label>
                        <select name="input_col_size_vtem" id="input_col_size_vtem" class="form-control">
                            <option value="">Please choose column size.</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="6">6</option>
                            <option value="12">12</option>
                        </select>
                    </div>
                </div>  
            </div>
        </div>
    </form>
    </div>
</div>
<!-- Modal Create Template -->





<!-- Modal Edit Run Template -->
<div class="modal fade " id="add_input_detail_masterdata_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-md modal-dialog-scrollable">

    <form id="frm_add_input_detail_masterdata" style="width:100%;" autocomplete="off">
        <div class="modal-content">
            <div class="modal-header">
                <span id="inputNameTitle_masterdata"></span>
                <button type="button" class="close btn_close_input_masterdata" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-header subhead">
                <button type="button" id="btn_add_input_masterdata" class="btn btn-success btn-sm mr-2">Add</button>
                <button type="button" id="btn_close_input_masterdata" class="btn btn-danger btn-sm btn_close_input_masterdata" data-dismiss="modal">Close</button>
            </div>
            
            <div class="modal-body">
                <input hidden type="text" name="input_name_detail_masterdata" id="input_name_detail_masterdata">
                <input hidden type="text" name="input_type_detail_masterdata" id="input_type_detail_masterdata">
                <input hidden type="text" name="input_index_masterdata" id="input_index_masterdata">
                <input hidden type="text" name="input_option_masterdata" id="input_option_masterdata">
                <input hidden type="text" name="input_temptype_masterdata" id="input_temptype_masterdata">
                <input hidden type="text" name="input_mascode_masterdata" id="input_mascode_masterdata">
                <input hidden type="text" name="input_templatename_masterdata" id="input_templatename_masterdata">
                <div class="row form-group">
                    <div class="col-lg-12">
                        <label for="">Column size</label>
                        <select name="input_col_size_masterdata" id="input_col_size_masterdata" class="form-control">
                            <option value="">Please choose column size.</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="6">6</option>
                            <option value="12">12</option>
                        </select>
                    </div>
                </div>  
            </div>
        </div>
    </form>
    </div>
</div>
<!-- Modal Create Template -->





<!-- Modal Edit Run Template -->
<div class="modal fade " id="add_ele_input_vtem" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-md modal-dialog-scrollable">

        <div class="modal-content">

            <div class="modal-header">
                <h4 class="add_title_h">Add Input</h4>
                <button type="button" class="close btn_close_column_vtem" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-header subhead">
                <input type="text" name="input_search_vtem" id="input_search_vtem" class="form-control" placeholder="Search">
            </div>
            
            <div class="modal-body">
                <div id="showInput_vtem" class="row form-group"></div>
            </div>

        </div>

    </div>
</div>
<!-- Modal Create Template -->






<!-- Modal Edit Run Template -->
<div class="modal fade " id="saveEdit_title_vtem" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-md modal-dialog-scrollable">

    <form id="frm_saveEdit_title_vtem" style="width:100%;" autocomplete="off">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="add_title_h">Edit Title</h4>
                <button type="button" class="close btn_closeEdit_title_vtem" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-header subhead">
                <button type="button" id="btn_saveEdit_title_vtem" class="btn btn-success btn-sm mr-2">Save Edit</button>
                <button type="button" id="btn_closeEdit_title_vtem" class="btn btn-danger btn-sm btn_closeEdit_title_vtem" data-dismiss="modal">Close</button>
            </div>
            
            <div class="modal-body">

                <input type="text" name="check_title_autoid" id="check_title_autoid">

                <div class="row form-group">
                  
                        <div class="col-lg-12 form-group">
                            <label for="">เลือก ขนาด</label>
                            <select name="title_fontsize_edit_vtem" id="title_fontsize_edit_vtem" class="form-control">
                                <option value="h1">h1</option>
                                <option value="h2">h2</option>
                                <option value="h3">h3</option>
                                <option value="h4">h4</option>
                                <option value="h5">h5</option>
                                <option value="h6">h6</option>
                            </select>
                        </div>

                        <div class="col-lg-12 form-group">
                            <label for="">พิมพ์ข้อความที่ต้องการ</label>
                            <input type="text" name="title_text_edit_vtem" id="title_text_edit_vtem" class="form-control">
                        </div>

                </div>
            </div>

        </div>
    </form>

    </div>
</div>
<!-- Modal Create Template -->






<!-- Modal Edit Run Template -->
<div class="modal fade " id="edit_input_detail_vtem" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-md modal-dialog-scrollable">

    <form id="frm_edit_input_detail_vtem" style="width:100%" autocomplete="off">
        <div class="modal-content">
            <div class="modal-header">
                <span id="inputNameTitle_edit_vtem"></span>
                <button type="button" class="close btn_close_edit_input_vtem" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-header subhead">
                <button type="button" id="btn_edit_input_vtem" class="btn btn-success btn-sm mr-2">Save Edit</button>
                <button type="button" id="btn_close_edit_input_vtem" class="btn btn-danger btn-sm btn_close_edit_input_vtem" data-dismiss="modal">Close</button>
            </div>
            
            <div class="modal-body">
                <!-- Check Zone -->
                <input hidden type="text" name="check_input_autoid" id="check_input_autoid">
                <div class="row form-group">
                    <div class="col-lg-12">
                        <label for="">Column size</label>
                        <select name="input_col_size_edit_vtem" id="input_col_size_edit_vtem" class="form-control">
                            <option value="">กรุณาเลือกขนาดคอลัมน์</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="6">6</option>
                            <option value="12">12</option>
                        </select>
                    </div>
                </div>  
            </div>
        </div>
    </form>
    </div>
</div>
<!-- Modal Create Template -->




<!-- Modal Edit Run Template -->
<div class="modal fade " id="element_order_vtem" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-md modal-dialog-scrollable">


        <div class="modal-content">
            <div class="modal-header">
                <h4 class="add_title_h">Element Orders</h4>
                <button type="button" class="close btn_closeElementOrder_vtem" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-header subhead">
                <button type="button" id="btn_closeElementOrder_vtem" class="btn btn-danger btn-sm btn_closeElementOrder_vtem" data-dismiss="modal">Close</button>
            </div>
            
            <div class="modal-body">

                <div id="show_element_order" class="row form-group"></div>

            </div>

        </div>
 

    </div>
</div>
<!-- Modal Create Template -->





<!-- Modal Edit Run Template -->
<div class="modal fade " id="masterData_vtem" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">


        <div class="modal-content">
            <div class="modal-header">
                <h4 class="add_title_h">Create Master Data By Type</h4>
                <button type="button" class="close btn_closemasterData_vtem" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-header subhead">
                <button type="button" id="btn_saveMasterData" class="btn btn-success btn-sm">Save</button>
                <button type="button" id="btn_addMasterData" class="btn btn-primary btn-sm ml-2">Add Master Data</button>
                <button type="button" id="btn_closeElementOrder_vtem" class="btn btn-danger btn-sm btn_closemasterData_vtem ml-2" data-dismiss="modal">Close</button>
            </div>
            
            <div class="modal-body">

                <div class="row form-group">
                    <div class="col-lg-12">
                        <label for="">Device Type</label>
                        <div id="show_masD_deviceType"></div>
                    </div>
                </div><hr>

                <div id="show_masterData_element" class="row form-group"></div>

            </div>

        </div>
 

    </div>
</div>
<!-- Modal Create Template -->





<!-- Modal Edit Run Template -->
<div class="modal fade " id="add_ele_masterdata_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">

        <div class="modal-content">

            <div class="modal-header">
                <h4>Choose Element</h4>
                <button type="button" class="close btn_close_element_masterdata" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-header subhead">
                <!-- <button type="button" id="btn_add_obj" class="btn btn-success btn-sm mr-2">add</button> -->
                <button type="button" id="btn_close_element_masterdata" class="btn btn-danger btn-sm btn_close_element_masterdata" data-dismiss="modal">Close</button>
            </div>
            
            <div class="modal-body">

                <div class="row form-group">

                        <div class="col-lg-3">
                            <div class="da-card select_input_masterdata"
                            data_column = "2"
                            >
                                <div class="da-card-content">
                                    <h5 class="h5 mb-10">Input</h5>
                                    <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                </div>
                            </div>
                        </div>
                 
                </div>
            </div>

        </div>

    </div>
</div>
<!-- Modal Create Template -->





<!-- Modal Edit Run Template -->
<div class="modal fade " id="add_ele_input_masterdata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-md modal-dialog-scrollable">

        <div class="modal-content">

            <div class="modal-header">
                <h4 class="add_title_h">Add Input</h4>
                <button type="button" class="close btn_close_inputmasterdata" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-header subhead">
                <input type="text" name="input_search_masterdata" id="input_search_masterdata" class="form-control" placeholder="Search">
            </div>
            
            <div class="modal-body">
                <div id="showInput_masterdata" class="row form-group"></div>
            </div>

        </div>

    </div>
</div>
<!-- Modal Create Template -->





<script>
    let inputType_vtem = [];
    let templatedata = [];
    let data_template_name = '';
    let data_template_type = '';
    let masterdata_layout = [];
    let masterdata_linenum =0;
    let masterdata_layoutGet = [];

    $(document).ready(function(){
        $('#add_newObj').click(function(){
            load_deviceObjMaster();
            $('#add_dvobj_modal').modal('show',{
                backdrop: false,
            });
        });


        //เพิ่ม Object type
        $('#add_newType').click(function(){
            $('#add_objtype_modal').modal('show');
            load_objtype();
        });

        $('#cre_template').click(function(){
            $('#create_template_modal').modal('show');
        });

        loadTemplateList(action="load template");

        $(document).on('click','.templateBoxCard',function(){
            const templatename = $(this).attr("data_templatename");
            const templatetype = $(this).attr("data_templatetype");

            data_template_name = templatename;
            data_template_type = templatetype;

            loadInput_vtem(templatetype);
            $('#viewtemplate_modal').modal('show');

            viewtemplate(templatename);
            $('#view_temname').html('<b>Template Name:</b> '+templatename+'&nbsp;&nbsp;&nbsp;<b>Template Type :</b> '+templatetype);
            
        });


        $(document).on('click','.addElement_vtem',function(){
            $('#add_element_vtem_modal').modal('show');
            $('#viewtemplate_modal').modal('hide');
        });

        $(document).on('click' , '.btn_close_element_vtem' , function(){
            $('#add_element_vtem_modal').modal('hide');
            $('#viewtemplate_modal').modal('show');
        });

        $(document).on('click','.select_title_vtem',function(){
            $('#add_ele_title_vtem').modal('show');
            $('#add_element_vtem_modal').modal('hide');

            $('#check_data_template_name').val(data_template_name);
            $('#check_data_template_type').val(data_template_type);
            
        });

        $('#btn_add_title_vtem').click(function (){
            addTitleToDatabase();
        });

        $(document).on('click','.btn_close_eletitle_vtem',function(){
            $('#add_ele_title_vtem').modal('hide');
            $('#add_element_vtem_modal').modal('show');
        });



        $(document).on('click','.select_input_vtem',function(){
            $('#add_ele_input_vtem').modal('show');
            $('#add_element_vtem_modal').modal('hide');
            // const templateType = $('#tem_chooseTemType').val();
            // loadInput(templateType);
            for(let i =0;i<templatedata[0].length;i++){
                inputType_vtem = inputType_vtem.filter(function(item){
                    return item.obj_mas_code !== templatedata[0][i].inputmascode
                });
            }

            console.log(inputType_vtem);

            let output ='';
            for(let i =0;i<inputType_vtem.length;i++){
                if(inputType_vtem[i].obj_mas_eletype != "text"){
                    output +=`
                    <div class="col-sm-6 col-lg-6 form-group divInput_vtem">
                        <div class="da-card select_input_number_vtem" 
                            data_inputname="`+inputType_vtem[i].obj_mas_name+`"
                            data_inputeletype="`+inputType_vtem[i].obj_mas_eletype+`"
                            data_index="`+i+`"
                            data_temptype="`+inputType_vtem[i].obj_mas_type+`"
                            data_option="`+inputType_vtem[i].obj_mas_option+`"
                            data_mascode="`+inputType_vtem[i].obj_mas_code+`"
                            >
                            <div class="da-card-content">
                                <h5 class="h5 mb-10">`+inputType_vtem[i].obj_mas_name+`</h5>
                                <p class="mb-0">`+inputType_vtem[i].obj_mas_eletype+`</p>
                            </div>
                        </div>
                    </div>
                    `;
                }else{
                    output +=`
                    <div class="col-sm-6 col-lg-6 form-group divInput_vtem">
                        <div class="da-card select_input_number_vtem" 
                            data_inputname="`+inputType_vtem[i].obj_mas_name+`"
                            data_inputeletype="`+inputType_vtem[i].obj_mas_eletype+`"
                            data_index="`+i+`"
                            data_temptype="`+inputType_vtem[i].obj_mas_type+`"
                            data_mascode="`+inputType_vtem[i].obj_mas_code+`"
                            >
                            <div class="da-card-content">
                                <h5 class="h5 mb-10">`+inputType_vtem[i].obj_mas_name+`</h5>
                                <p class="mb-0">`+inputType_vtem[i].obj_mas_eletype+`</p>
                            </div>
                        </div>
                    </div>
                    `;
                }
                
            }

            $('#showInput_vtem').html(output);
        });


        $(document).on('click' , '.select_input_number_vtem' , function(){
            const data_inputname = $(this).attr("data_inputname");
            const data_inputeletype = $(this).attr("data_inputeletype");
            const data_index = $(this).attr("data_index");
            const data_option = $(this).attr("data_option");
            const data_temptype = $(this).attr("data_temptype");
            const data_mascode = $(this).attr("data_mascode");

            $('#add_input_detail_vtem').modal('show');
            $('#add_ele_input_vtem').modal('hide');

            $('#input_type_detail_vtem').val(data_inputeletype);
            $('#input_name_detail_vtem').val(data_inputname);
            $('#input_index_vtem').val(data_index);
            $('#input_option_vtem').val(data_option);
            $('#input_temptype_vtem').val(data_temptype);
            $('#input_mascode_vtem').val(data_mascode);
            $('#input_templatename_vtem').val(data_template_name);

            // Title
            $('#inputNameTitle_vtem').html('<b>Add input :</b> '+data_inputname+' <b>Type : </b>'+data_inputeletype);

        });
        $('#btn_add_input_vtem').click(function(){
            // Check input null
            if($('#input_col_size_vtem').val() == ""){
                $('#input_col_size_vtem').addClass('inputNull');
            }else{
                $('#input_col_size_vtem').removeClass('inputNull').addClass('inputSuccess');
                saveinput_vtem();
            }
        });





        $(document).on('click' , '.select_input_number_masterdata' , function(){
            const data_inputname = $(this).attr("data_inputname");
            const data_inputeletype = $(this).attr("data_inputeletype");
            const data_index = $(this).attr("data_index");
            const data_option = $(this).attr("data_option");
            const data_temptype = $(this).attr("data_temptype");
            const data_mascode = $(this).attr("data_mascode");

            $('#add_input_detail_masterdata_modal').modal('show');
            $('#add_ele_input_masterdata').modal('hide');

            $('#input_type_detail_masterdata').val(data_inputeletype);
            $('#input_name_detail_masterdata').val(data_inputname);
            $('#input_index_masterdata').val(data_index);
            $('#input_option_masterdata').val(data_option);
            $('#input_temptype_masterdata').val(data_temptype);
            $('#input_mascode_masterdata').val(data_mascode);
            $('#input_templatename_masterdata').val(data_template_name);

            // Title
            $('#inputNameTitle_masterdata').html('<b>Add input :</b> '+data_inputname+' <b>Type : </b>'+data_inputeletype);

        });

        $('#btn_add_input_masterdata').click(function(){
            const inputname = $('#input_name_detail_masterdata').val();
            const inputtype = $('#input_type_detail_masterdata').val();
            const inputcolumnsize = $('#input_col_size_masterdata').val();
            const inputindex = $('#input_index_masterdata').val();
            const inputtemptype = $('#input_temptype_masterdata').val();
            const inputmascode = $('#input_mascode_masterdata').val();
            let optionArray = $('#input_option_masterdata').val();
            masterdata_linenum++;
            let dataInput;

            if(inputtype != "text"){
                dataInput = {
                "inputData":{
                    "inputname":inputname,
                    "inputtype":inputtype,
                    "inputcolumnsize":inputcolumnsize,
                    "inputoption":optionArray.split(","),
                    "inputtemptype":inputtemptype,
                    "inputmascode":inputmascode
                    },
                "linenum":masterdata_linenum
                }
            }else{
                dataInput = {
                "inputData":{
                    "inputname":inputname,
                    "inputtype":inputtype,
                    "inputcolumnsize":inputcolumnsize,
                    "inputtemptype":inputtemptype,
                    "inputmascode":inputmascode
                    },
                "linenum":masterdata_linenum
                }
            }

            
            masterdata_layout.push(dataInput);

            $('#add_input_detail_masterdata_modal').modal('hide');
            $('#masterData_vtem').modal('show');

            inputType_vtem.splice(inputindex,1);

            // console.log(inputType_vtem);

            loadLayout_masterData(masterdata_layout);
            console.log(masterdata_layout);
        });



        $('#btn_saveMasterData').click(function(){
            const masD_deviceType = $('#masD_deviceType').val();
            saveMasterData(masD_deviceType , masterdata_layout);
        });




        $(document).on('click','.titleIcon_vtem',function(){
            const data_autoid = $(this).attr("data_autoid");
            swal({
                title: 'Do you want to delete this item?',
                type: 'warning',
                showCancelButton: true,
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                confirmButtonText: 'Confirm Delete'
            }).then((result)=> {
                if(result.value == true){
                    delete_title_vtem(data_autoid);
                }
            });
            
        });


        $(document).on('click' , '.titleIconEdit_vtem' , function(){
            const data_autoid = $(this).attr("data_autoid")
            const data_title_text = $(this).attr("data_title_text");
            const data_title_size = $(this).attr("data_title_size");

            $('#saveEdit_title_vtem').modal('show');
            $('#viewtemplate_modal').modal('hide');

            $('#check_title_autoid').val(data_autoid);
            $('#title_fontsize_edit_vtem').val(data_title_size);
            $('#title_text_edit_vtem').val(data_title_text);
        });
        $('#btn_saveEdit_title_vtem').click(function(){
            $('#title_fontsize_edit_vtem').removeClass('inputNull');
            $('#title_text_edit_vtem').removeClass('inputNull');
            if($('#title_fontsize_edit_vtem').val() != "" && $('#title_text_edit_vtem').val() != ""){
                saveEdit_title_vtem();
            }else{
                if($('#title_fontsize_edit_vtem').val() == ""){
                    $('#title_fontsize_edit_vtem').addClass('inputNull');
                }
                if($('#title_text_edit_vtem').val() == ""){
                    $('#title_text_edit_vtem').addClass('inputNull');
                }
            } 
        });
        $(document).on('click' , '.btn_closeEdit_title_vtem' , function(){
            $('#saveEdit_title_vtem').modal('hide');
            $('#viewtemplate_modal').modal('show');
        });
        $(document).on('click' , '.btn_close_column_vtem' , function(){
            $('#add_ele_input_vtem').modal('hide');
            $('#add_element_vtem_modal').modal('show');
        });


        $(document).on('click' , '.inputIcon_vtem' , function(){
            const data_autoid = $(this).attr("data_autoid");
            
            swal({
                title: 'Do you want to delete this item?',
                type: 'warning',
                showCancelButton: true,
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                confirmButtonText: 'Confirm Delete'
            }).then((result)=> {
                if(result.value == true){
                    deleteInput_vtem(data_autoid);
                }
            });
        });
        $(document).on('click' , '.inputIconEdit_vtem' , function(){
            const data_autoid = $(this).attr("data_autoid");
            // const data_inputtype = $(this).attr("data_inputtype");
            const data_inputname = $(this).attr("data_inputname");
            // const data_inputtemptype = $(this).attr("data_inputtemptype");
            // const data_inputoption = $(this).attr("data_inputoption");
            const data_inputcolsize = $(this).attr("data_inputcolsize");

            $('#edit_input_detail_vtem').modal('show');
            $('#viewtemplate_modal').modal('hide');
            $('#inputNameTitle_edit_vtem').html('<b>Name : </b>'+data_inputname);
            $('#check_input_autoid').val(data_autoid);
            $('#input_col_size_edit_vtem').val(data_inputcolsize);
        });
        $(document).on('click' , '.btn_close_edit_input_vtem' , function(){
            $('#edit_input_detail_vtem').modal('hide');
            $('#viewtemplate_modal').modal('show');
        });
        $('#btn_edit_input_vtem').click(function(){
            $('#input_col_size_edit_vtem').removeClass('inputNull');
            if($('#input_col_size_edit_vtem').val() != ""){
                save_input_edit_vtem();
            }else{
                $('#input_col_size_edit_vtem').addClass('inputNull');
            }
        });


        $('#delete_template').click(function(){
            swal({
                title: 'Do you want to delete this Template?',
                type: 'warning',
                showCancelButton: true,
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                confirmButtonText: 'Confirm Delete'
            }).then((result)=> {
                if(result.value == true){
                    delete_template(data_template_name);
                }
            });
        });



        $('#input_search_vtem').keyup(function(){
            const value = $(this).val().toLowerCase();
            $('.divInput_vtem').filter(function(){
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });


        $('#input_search_masterdata').keyup(function(){
            const value = $(this).val().toLowerCase();
            $('.divInput_masterdata').filter(function(){
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });


        $(document).on('click' , '.elementOrder_vtem' , function(){
            $('#element_order_vtem').modal('show');
            $('#viewtemplate_modal').modal('hide');

            loadElementOrderlist(data_template_name);
        });
        $(document).on('click' , '.btn_closeElementOrder_vtem' , function(){
            $('#element_order_vtem').modal('hide');
            $('#viewtemplate_modal').modal('show');

            viewtemplate(data_template_name);
        });


        $(document).on('click','.iconup',function(){
            const data_id = $(this).attr("data_id");
            const data_linenum = $(this).attr("data_linenum");

            updatelinenum_up(data_linenum , data_template_name);
        });


        $(document).on('click','.icondown',function(){
            const data_id = $(this).attr("data_id");
            const data_linenum = $(this).attr("data_linenum");

            updatelinenum_down(data_linenum , data_template_name);
        });


        $('#cre_masterdata').click(function(){
            masD_loadDeviceType();
            $('#masterData_vtem').modal('show');
        });


        $(document).on('change','#masD_deviceType', function(){
            masterdata_layoutGet = [];
            if($(this).val() != ""){
                $('#masD_deviceType').removeClass('inputNull').addClass('inputSuccess');
                const templatetype = $('#masD_deviceType').val();
                loadInput_vtem(templatetype);
                loadMasterData_toCreateMasterDataPage(templatetype);
            }else{
                $('#masD_deviceType').addClass('inputNull');
            }
            
        });




        $('#btn_addMasterData').click(function(){
            // Check Device Type
            $('#masD_deviceType').removeClass('inputNull');
            if($('#masD_deviceType').val() != ""){
                // Open Modal add Master data
                $('#add_ele_masterdata_modal').modal('show');
                $('#masterData_vtem').modal('hide');
            }else{
                $('#masD_deviceType').addClass('inputNull');
            }
        });

        $(document).on('click' , '.btn_closemasterData_vtem' , function(){
            masterdata_layout = [];
            $('#masterData_vtem').modal('hide');
        })


        $(document).on('click','.btn_close_element_masterdata',function(){
            $('#masterData_vtem').modal('show');
        });



        $(document).on('click','.select_input_masterdata',function(){
            $('#add_ele_input_masterdata').modal('show');
            $('#add_ele_masterdata_modal').modal('hide');
            

            // for(let i =0;i<templatedata[0].length;i++){
            //     inputType_vtem = inputType_vtem.filter(function(item){
            //         return item.obj_mas_code !== templatedata[0][i].inputmascode
            //     });
            // }

            

            console.log(inputType_vtem);
            console.log(masterdata_layout);

            let output ='';
            for(let i =0;i<inputType_vtem.length;i++){
                if(inputType_vtem[i].obj_mas_eletype != "text"){
                    output +=`
                    <div class="col-sm-6 col-lg-6 form-group divInput_masterdata">
                        <div class="da-card select_input_number_masterdata" 
                            data_inputname="`+inputType_vtem[i].obj_mas_name+`"
                            data_inputeletype="`+inputType_vtem[i].obj_mas_eletype+`"
                            data_index="`+i+`"
                            data_temptype="`+inputType_vtem[i].obj_mas_type+`"
                            data_option="`+inputType_vtem[i].obj_mas_option+`"
                            data_mascode="`+inputType_vtem[i].obj_mas_code+`"
                            >
                            <div class="da-card-content">
                                <h5 class="h5 mb-10">`+inputType_vtem[i].obj_mas_name+`</h5>
                                <p class="mb-0">`+inputType_vtem[i].obj_mas_eletype+`</p>
                            </div>
                        </div>
                    </div>
                    `;
                }else{
                    output +=`
                    <div class="col-sm-6 col-lg-6 form-group divInput_masterdata">
                        <div class="da-card select_input_number_masterdata" 
                            data_inputname="`+inputType_vtem[i].obj_mas_name+`"
                            data_inputeletype="`+inputType_vtem[i].obj_mas_eletype+`"
                            data_index="`+i+`"
                            data_temptype="`+inputType_vtem[i].obj_mas_type+`"
                            data_mascode="`+inputType_vtem[i].obj_mas_code+`"
                            >
                            <div class="da-card-content">
                                <h5 class="h5 mb-10">`+inputType_vtem[i].obj_mas_name+`</h5>
                                <p class="mb-0">`+inputType_vtem[i].obj_mas_eletype+`</p>
                            </div>
                        </div>
                    </div>
                    `;
                }
                
            }

            $('#showInput_masterdata').html(output);
        });



        $(document).on('click','.btn_close_inputmasterdata',function(){
            $('#add_ele_masterdata_modal').modal('show');
        });



        $(document).on('click','.btn_close_input_masterdata',function(){
            $('#add_input_detail_masterdata_modal').modal('hide');
            $('#add_ele_input_masterdata').modal('show');
        });



        $(document).on('click','.inputIconDel_mas',function(){
            const data_id = $(this).attr("data_id");
            swal({
                title: 'Do you want to delete this item?',
                type: 'warning',
                showCancelButton: true,
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                confirmButtonText: 'Confirm Delete'
            }).then((result)=> {
                if(result.value == true){
                    masterdata_layout.splice(data_id,1);
                    loadLayout_masterData(masterdata_layout);
                }
            });

        });


        $(document).on('click','.inputIconEdit_mas',function(){

        });




    });//End Ready Function
    /////////////////////////////////////////////
    /////////////////////////////////////////////
    /////////////////////////////////////////////




    //Function Zone
    function loadTemplateList(action)
    {
        $.ajax({
            url:"/intsys/itassetpro/template/manageobj/loadTemplateList",
            method:"POST",
            data:{action:action},
            beforeSend:function(){},
            success:function(res){
                $('#showTemplateList').html(res);
            }
        });
    }


    function loadInput_vtem(templateType)
    {
        $.ajax({
            url:"/intsys/itassetpro/template/manageobj/loadInput_masterdata",
            method:"POST",
            data:{templateType:templateType},
            beforeSend:function(){},
            success:function(res){
                console.log(JSON.parse(res));
                
                if(JSON.parse(res).length != 0){
                    inputType_vtem = JSON.parse(res);
                }
            }
        });
    }



    function addTitleToDatabase()
    {
        $.ajax({
            url:"/intsys/itassetpro/template/manageobj/addTitleToDatabase",
            method:"POST",
            data:$('#frm_add_ele_title_vtem').serialize(),
            beforeSend:function(){},
            success:function(res){
                console.log(JSON.parse(res));
                if(JSON.parse(res).status == "Insert Success"){
                    const templatename = JSON.parse(res).templatename;
                    swal(
                        {
                            title: 'Insert Success',
                            showConfirmButton: false,
                            type: 'success',
                            timer: 1000
                        }
                    )
                    $('#add_ele_title_vtem').modal('hide');
                    $('#viewtemplate_modal').modal('show');
                    viewtemplate(templatename);
                }
            }
        });
    }


    function saveinput_vtem()
    {
        $.ajax({
            url:"/intsys/itassetpro/template/manageobj/saveinput_vtem",
            method:"POST",
            data:$('#frm_add_input_detail_vtem').serialize(),
            beforeSend:function(){},
            success:function(res){
                console.log(JSON.parse(res));
                templatedata = [];
                if(JSON.parse(res).status == "Insert Success"){
                    const templatename = JSON.parse(res).templatename;
                    swal(
                        {
                            title: 'Insert Success',
                            showConfirmButton: false,
                            type: 'success',
                            timer: 1000
                        }
                    )
                    viewtemplate(templatename);
                    $('#add_input_detail_vtem').modal('hide');
                    $('#viewtemplate_modal').modal('show');
                    
                }
            }
        });
    }



    function viewtemplate(templatename)
    {
        $.ajax({
            url:"/intsys/itassetpro/template/manageobj/viewtemplate",
            method:"POST",
            data:{templatename:templatename},
            beforeSend:function(){},
            success:function(res){
                // console.log(JSON.parse(res));
                const data = JSON.parse(res);

                templatedata.push(data);

                let output = '';

                for(let i =0; i < data.length;i++){
                    
                    if(data[i].data_type == "title"){
                    output += `
                    <div class="col-lg-12 titleOut_vtem titleOut_vtem_`+i+` form-group">
                        <div class="areaIcon_vtem_`+i+`" style="display:none;">
                            <i class="fa fa-trash titleIcon_vtem" aria-hidden="true" data_autoid="`+data[i].autoid+`"></i>
                            <i class="fa fa-edit titleIconEdit_vtem" aria-hidden="true" 
                                data_autoid="`+data[i].autoid+`"
                                data_title_text="`+data[i].title_text+`"
                                data_title_size="`+data[i].title_size+`"
                            ></i>
                        </div>
                        <`+data[i].title_size+`>`+data[i].title_text+`</`+data[i].title_size+`>
                    </div>`;
                    }


                if(data[i].data_type == "inputData"){

                        output +=`
                            <div class="col-lg-`+data[i].inputcolumnsize+` form-group inputOut_vtem inputOut_vtem_`+i+`">
                                <div class="areaIconInput_vtem_`+i+`" style="display:none;">
                                    <i class="fa fa-trash inputIcon_vtem" aria-hidden="true" 
                                        data_autoid="`+data[i].autoid+`"
                                        data_inputtype="`+data[i].inputtype+`"
                                        data_inputname="`+data[i].inputname+`"
                                        data_inputtemptype="`+data[i].inputtemptype+`"
                                        data_inputoption="`+data[i].inputoption+`"
                                    ></i>
                                    <i class="fa fa-edit inputIconEdit_vtem" aria-hidden="true" 
                                        data_autoid="`+data[i].autoid+`"
                                        data_inputtype="`+data[i].inputtype+`"
                                        data_inputname="`+data[i].inputname+`"
                                        data_inputtemptype="`+data[i].inputtemptype+`"
                                        data_inputoption="`+data[i].inputoption+`"
                                        data_inputcolsize="`+data[i].inputcolumnsize+`"
                                    ></i>
                                </div>`;

                        if(data[i].inputtype == "text"){
                            output +=`
                                <label>`+data[i].inputname+`</label>
                                <input type="hidden" id="label_`+data[i].inputmascode+`" name="labelvalue[]" value="`+data[i].inputname+`">
                                <input type="text" id="input_`+data[i].inputmascode+`" name="inputvalue[]" class="form-control">`;
                        }else if(data[i].inputtype == "select"){
                            output +=`
                                <label>`+data[i].inputname+`</label>
                                <input type="hidden" id="label_`+data[i].inputmascode+`" name="labelvalue[]" value="`+data[i].inputname+`">
                                <select id="inputSelect_`+data[i].inputmascode+`" name="inputvalue[]" class="form-control">`;
                                for(let j =0;j<data[i].inputoption.length;j++){
                                    output +=`
                                    <option value="`+data[i].inputoption[j]+`">`+data[i].inputoption[j]+`</option>`;
                                }
                            output +=`
                                </select>`;
                        }else if(data[i].inputtype == "radio"){
                            // loadOptionRadio(layout[i].inputData.inputname);
                            output +=`
                                <label>`+data[i].inputname+`</label>
                                <input type="hidden" id="label_`+data[i].inputmascode+`" name="labelvalue[]" value="`+data[i].inputname+`">
                                <div id="divRadio_`+data[i].inputmascode+`" class="form-inline">`;
                                for(let j =0;j<data[i].inputoption.length;j++){
                                    output +=`
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="inputRadio_`+data[i].inputmascode+j+`" name="`+data[i].inputmascode+`" class="custom-control-input" value="`+data[i].inputoption[j]+`">
                                        <label class="custom-control-label" for="inputRadio_`+data[i].inputmascode+j+`">`+data[i].inputoption[j]+`</label>
                                    </div>`;
                                }
                            output +=`
                            </div>`;
                        }else if(data[i].inputtype == "checkbox"){
                            // loadOptionCheckbox(layout[i].inputData.inputname);
                            output +=`
                                <label>`+data[i].inputname+`</label>
                                <input type="hidden" id="label_`+data[i].inputmascode+`" name="labelvalue[]" value="`+data[i].inputname+`">
                                <div id="divCheckbox_`+data[i].inputmascode+`" class="form-inline">`;
                                for(let j =0;j<data[i].inputoption.length;j++){
                                    output +=`
                                    <div class="custom-control custom-checkbox mb-5">
                                        <input type="checkbox" id="inputCheckbox_`+data[i].inputmascode+j+`" name="`+data[i].inputmascode+`" class="custom-control-input" value="`+data[i].inputoption[j]+`">
                                        <label class="custom-control-label" for="inputCheckbox_`+data[i].inputmascode+j+`">`+data[i].inputoption[j]+`</label>
                                    </div>`;
                                }
                            output +=`
                            </div>`;
                        }else if(data[i].inputtype == "date"){
                            output +=`
                                <label>`+data[i].inputname+`</label>
                                <input type="hidden" id="label_`+data[i].inputmascode+`" name="labelvalue[]" value="`+data[i].inputname+`">
                                <input type="date" id="inputDate_`+data[i].inputmascode+`" name="inputvalue[]" class="form-control">`;
                        }
                            output +=`
                            </div>`;

                            


                    }

                    $(document).on('mouseover' , '.titleOut_vtem_'+i ,function(){
                        $('.areaIcon_vtem_'+i).css('display' , '');
                    });
                    $(document).on('mouseout' , '.titleOut_vtem_'+i ,function(){
                        $('.areaIcon_vtem_'+i).css('display' , 'none');
                    });

                    $(document).on('mouseover' , '.inputOut_vtem_'+i ,function(){
                        $('.areaIconInput_vtem_'+i).css('display' , '');
                    });
                    $(document).on('mouseout' , '.inputOut_vtem_'+i ,function(){
                        $('.areaIconInput_vtem_'+i).css('display' , 'none');
                    });
                }
                console.log(templatedata[0]);
                $('#show_template_view').html(output);
            }
        });
    }


    function delete_title_vtem(autoid)
    {
        $.ajax({
            url:"/intsys/itassetpro/template/manageobj/delete_title_vtem",
            method:"POST",
            data:{autoid:autoid},
            beforeSend:function(){},
            success:function(res){
                console.log(JSON.parse(res));
                if(JSON.parse(res).status == "Delete Success"){
                    swal(
                        {
                            title: 'Delete Success',
                            showConfirmButton: false,
                            type: 'success',
                            timer: 1000
                        }
                    )
                    viewtemplate(data_template_name);
                }
            }
        });
    }


    function saveEdit_title_vtem()
    {
        $.ajax({
            url:"/intsys/itassetpro/template/manageobj/saveEdit_title_vtem",
            method:"POST",
            data:$('#frm_saveEdit_title_vtem').serialize(),
            beforeSend:function(){},
            success:function(res){
                console.log(JSON.parse(res));
                if(JSON.parse(res).status == "Update Success"){
                    swal(
                        {
                            title: 'Delete Success',
                            showConfirmButton: false,
                            type: 'success',
                            timer: 1000
                        }
                    )
                    viewtemplate(data_template_name);
                    $('#saveEdit_title_vtem').modal('hide');
                    $('#viewtemplate_modal').modal('show');
                }
            }
        });
    }


    function deleteInput_vtem(autoid)
    {
        $.ajax({
            url:"/intsys/itassetpro/template/manageobj/deleteInput_vtem",
            method:"POST",
            data:{autoid:autoid},
            beforeSend:function(){},
            success:function(res){
                console.log(JSON.parse(res));
                if(JSON.parse(res).status == "Delete Input Success"){
                    swal(
                        {
                            title: 'Delete Success',
                            showConfirmButton: false,
                            type: 'success',
                            timer: 1000
                        }
                    )
                    viewtemplate(data_template_name);
                }
            }
        });
    }


    function save_input_edit_vtem()
    {
        $.ajax({
            url:"/intsys/itassetpro/template/manageobj/save_input_edit_vtem",
            method:"POST",
            data:$('#frm_edit_input_detail_vtem').serialize(),
            beforeSend:function(){},
            success:function(res){
                console.log(JSON.parse(res));
                if(JSON.parse(res).status == "Update Edit Input Success"){
                    swal(
                        {
                            title: 'Update Success',
                            showConfirmButton: false,
                            type: 'success',
                            timer: 1000
                        }
                    )
                    viewtemplate(data_template_name);
                    $('#edit_input_detail_vtem').modal('hide');
                    $('#viewtemplate_modal').modal('show');
                }
            }
        });
    }


    function delete_template(templatename)
    {
        $.ajax({
            url:"/intsys/itassetpro/template/manageobj/delete_template",
            method:"POST",
            data:{templatename:templatename},
            beforeSend:function(){},
            success:function(res){
                console.log(JSON.parse(res));
                if(JSON.parse(res).status == "Delete Template Success"){
                    swal(
                        {
                            title: 'Delete Success',
                            showConfirmButton: false,
                            type: 'success',
                            timer: 1000
                        }
                    )
                    location.reload();
                }
            }  
        });
    }

    function loadElementOrderlist(templatename)
    {
        $.ajax({
            url:"/intsys/itassetpro/template/manageobj/loadElementOrderlist",
            method:"POST",
            data:{templatename:templatename},
            beforeSend:function(){},
            success:function(res){
                console.log(JSON.parse(res));
                let output = '<div class="col-lg-12 arrowMain"><div id="element_order_scroll" class="list-group">';
                let templatedata = JSON.parse(res);
                let elementname = '';

                for(let i =0;i<templatedata.length;i++){
                    if(templatedata[i].title_text){
                        elementname = templatedata[i].title_text;
                    }else{
                        elementname = templatedata[i].inputname;
                    }

                    let style_up = '';
                    let style_down = '';
                    if(templatedata[i].linenum == templatedata[i].linenum_up){
                        style_up = 'style="display:none;" ';
                    }else{
                        style_up = '';
                    }
                    if(templatedata[i].linenum == templatedata[i].linenum_down){
                        style_down = 'style="display:none;" ';
                    }else{
                        style_down = '';
                    }

                    
                    output +=`
                        <li href="javascript:void(0)" class="mt-2 list-group-item list-group-item-action align-items-start list-group-item-info">
                            <span class="font-14">`+elementname+`</span><br>
                            <span class="font-14"><b>`+templatedata[i].datatype+`</b></span>
                            
                                <i class="fa fa-sort-up iconup" aria-hidden="true" `+style_up+`
                                    data_id="`+templatedata[i].autoid+`"
                                    data_linenum="`+templatedata[i].linenum+`"
                                ></i>
                                <i class="fa fa-sort-down icondown" aria-hidden="true" `+style_down+`
                                    data_id="`+templatedata[i].autoid+`"
                                    data_linenum="`+templatedata[i].linenum+`"
                                ></i>
                            
                        </li>
                    `;

                    
                }
                output +='</div></div>';

                $('#show_element_order').html(output);

            }
        });
    }


    function updatelinenum_up(data_linenum , data_template_name)
    {
        $.ajax({
            url:"/intsys/itassetpro/template/manageobj/updatelinenum_up",
            method:"POST",
            data:{
                data_linenum:data_linenum,
                data_template_name:data_template_name
            },
            beforeSend:function(){},
            success:function(res){
                console.log(JSON.parse(res));
                loadElementOrderlist(data_template_name);
            }
        });
    }

    function updatelinenum_down(data_linenum , data_template_name)
    {
        $.ajax({
            url:"/intsys/itassetpro/template/manageobj/updatelinenum_down",
            method:"POST",
            data:{
                data_linenum:data_linenum,
                data_template_name:data_template_name
            },
            beforeSend:function(){},
            success:function(res){
                console.log(JSON.parse(res));
                loadElementOrderlist(data_template_name);
            }
        });
    }

    function masD_loadDeviceType()
    {
        $.ajax({
            url:"/intsys/itassetpro/template/manageobj/masD_loadDeviceType",
            method:"POST",
            data:{},
            beforeSend:function(){},
            success:function(res){
                // console.log(res);
                $('#show_masD_deviceType').html(res);
            }
        });
    }



    function loadLayout_masterData(layout)
    {
        // console.log(layout);
        let output = "";
        if(layout != ""){

            for(let i=0;i<layout.length;i++){

                if(layout[i].title){
                    output += `
                    <div class="col-lg-12 titleOut titleOut_`+i+` form-group">
                    <div class="areaIcon_`+i+`" style="display:none;">
                        <i class="fa fa-trash titleIcon" aria-hidden="true" 
                            data_id="`+i+`"
                            data_linenum = "`+layout[i].linenum+`"
                        ></i>
                        <i class="fa fa-edit titleIconEdit" style="display:none" aria-hidden="true" 
                            data_titleid="`+layout[i].autoid+`"
                            data_title_text="`+layout[i].title.title_text+`"
                            data_title_size="`+layout[i].title.title_size+`"
                            data_linenum = "`+layout[i].linenum+`"
                        ></i>
                    </div>
                    <`+layout[i].title.title_size+`>`+layout[i].title.title_text+`</`+layout[i].title.title_size+`>
                    </div>`;
                }


                if(layout[i].inputData){

                        output +=`
                            <div class="col-lg-`+layout[i].inputData.inputcolumnsize+` form-group inputOut inputOut_`+i+`">
                                <div class="areaIconInput_`+i+`" style="display:none;">
                                    <i class="fa fa-trash inputIconDel_mas" aria-hidden="true" 
                                        data_id="`+i+`"
                                        data_inputtype=`+layout[i].inputData.inputtype+`
                                        data_inputname=`+layout[i].inputData.inputname+`
                                        data_inputtemptype="`+layout[i].inputData.inputtemptype+`"
                                        data_inputoption="`+layout[i].inputData.inputoption+`"
                                        data_linenum = "`+layout[i].linenum+`"
                                    ></i>
                                    <i class="fa fa-edit inputIconEdit_mas" style="display:none" aria-hidden="true" 
                                        data_id="`+i+`"
                                        data_inputtype=`+layout[i].inputData.inputtype+`
                                        data_inputname=`+layout[i].inputData.inputname+`
                                        data_inputtemptype="`+layout[i].inputData.inputtemptype+`"
                                        data_inputoption="`+layout[i].inputData.inputoption+`"
                                        data_inputcolsize="`+layout[i].inputData.inputcolumnsize+`"
                                        data_linenum = "`+layout[i].linenum+`"
                                    ></i>
                                </div>`;

                        if(layout[i].inputData.inputtype == "text"){
                            output +=`
                                <label>`+layout[i].inputData.inputname+`</label>
                                <input type="hidden" id="label_`+layout[i].inputData.inputmascode+`" name="labelvalue[]" value="`+layout[i].inputData.inputname+`">
                                <input type="text" id="input_`+layout[i].inputData.inputmascode+`" name="inputvalue[]" class="form-control">`;
                        }else if(layout[i].inputData.inputtype == "select"){
                            output +=`
                                <label>`+layout[i].inputData.inputname+`</label>
                                <input type="hidden" id="label_`+layout[i].inputData.inputmascode+`" name="labelvalue[]" value="`+layout[i].inputData.inputname+`">
                                <select id="inputSelect_`+layout[i].inputData.inputmascode+`" name="inputvalue[]" class="form-control">`;
                                for(let j =0;j<layout[i].inputData.inputoption.length;j++){
                                    output +=`
                                    <option value="`+layout[i].inputData.inputoption[j]+`">`+layout[i].inputData.inputoption[j]+`</option>`;
                                }
                            output +=`
                                </select>`;
                        }else if(layout[i].inputData.inputtype == "radio"){
                            // loadOptionRadio(layout[i].inputData.inputname);
                            output +=`
                                <label>`+layout[i].inputData.inputname+`</label>
                                <input type="hidden" id="label_`+layout[i].inputData.inputmascode+`" name="labelvalue[]" value="`+layout[i].inputData.inputname+`">
                                <div id="divRadio_`+layout[i].inputData.inputmascode+`" class="form-inline">`;
                                for(let j =0;j<layout[i].inputData.inputoption.length;j++){
                                    output +=`
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="inputRadio_`+layout[i].inputData.inputmascode+j+`" name="`+layout[i].inputData.inputmascode+`" class="custom-control-input" value="`+layout[i].inputData.inputoption[j]+`">
                                        <label class="custom-control-label" for="inputRadio_`+layout[i].inputData.inputmascode+j+`">`+layout[i].inputData.inputoption[j]+`</label>
                                    </div>`;
                                }
                            output +=`
                            </div>`;
                        }else if(layout[i].inputData.inputtype == "checkbox"){
                            // loadOptionCheckbox(layout[i].inputData.inputname);
                            output +=`
                                <label>`+layout[i].inputData.inputname+`</label>
                                <input type="hidden" id="label_`+layout[i].inputData.inputmascode+`" name="labelvalue[]" value="`+layout[i].inputData.inputname+`">
                                <div id="divCheckbox_`+layout[i].inputData.inputmascode+`" class="form-inline">`;
                                for(let j =0;j<layout[i].inputData.inputoption.length;j++){
                                    output +=`
                                    <div class="custom-control custom-checkbox mb-5">
                                        <input type="checkbox" id="inputCheckbox_`+layout[i].inputData.inputmascode+j+`" name="`+layout[i].inputData.inputmascode+`" class="custom-control-input" value="`+layout[i].inputData.inputoption[j]+`">
                                        <label class="custom-control-label" for="inputCheckbox_`+layout[i].inputData.inputmascode+j+`">`+layout[i].inputData.inputoption[j]+`</label>
                                    </div>`;
                                }
                            output +=`
                            </div>`;
                        }else if(layout[i].inputData.inputtype == "date"){
                            output +=`
                                <label>`+layout[i].inputData.inputname+`</label>
                                <input type="hidden" id="label_`+layout[i].inputData.inputmascode+`" name="labelvalue[]" value="`+layout[i].inputData.inputname+`">
                                <input type="date" id="inputDate_`+layout[i].inputData.inputmascode+`" name="inputvalue[]" class="form-control">`;
                        }
                            output +=`
                            </div>`;
                }

                $(document).on('mouseover' , '.titleOut_'+i ,function(){
                    $('.areaIcon_'+i).css('display' , '');
                });
                $(document).on('mouseout' , '.titleOut_'+i ,function(){
                    $('.areaIcon_'+i).css('display' , 'none');
                });

                $(document).on('mouseover' , '.inputOut_'+i ,function(){
                    $('.areaIconInput_'+i).css('display' , '');
                });
                $(document).on('mouseout' , '.inputOut_'+i ,function(){
                    $('.areaIconInput_'+i).css('display' , 'none');
                });


            }
            $('#show_masterData_element').html(output);
        }else{
            $('#show_masterData_element').html(output);
        }

        // $('#templateCode').val(layout);

    }




    function saveMasterData(masD_deviceType , masterdata_layout)
    {
        $.ajax({
            url:"/intsys/itassetpro/template/manageobj/saveMasterData",
            method:"POST",
            data:{
                masD_deviceType:masD_deviceType,
                masterdata_layout:masterdata_layout
            },
            beforeSend:function(){},
            success:function(res){
                console.log(JSON.parse(res));
                if(JSON.parse(res).status == "Insert Success"){
                    swal(
                        {
                            type: 'success',
                            title: 'บันทึกข้อมูลสำเร็จ',
                            showConfirmButton: false,
                            timer: 1500
                        }
                    );
                    location.reload();
                }
            }
        });
    }



    function loadMasterData_toCreateMasterDataPage(templateType)
    {
        $.ajax({
            url:"/intsys/itassetpro/template/manageobj/loadMasterData_toTemplate",
            method:"POST",
            data:{
                templateType:templateType
            },
            beforeSend:function(){},
            success:function(res){
                console.log(JSON.parse(res));

                const data = JSON.parse(res);
                masterdata_layout = [];
                if(data != ""){
                    for(let i=0;i<data.length;i++){
                        if(data[i].data_type == "title"){
                            let title = {
                                'title_size':data[i].title_size,
                                'title_text':data[i].title_text
                            }

                            let dataTitle ={
                                "title":title,
                                "linenum":data[i].linenum,
                                "group":data[i].ele_group,
                                "autoid":data[i].autoid
                            }
                            masterdata_layout.push(dataTitle);
                        }else{
                           
                            let dataInput = {
                            "inputData":{
                                "inputname":data[i].inputname,
                                "inputtype":data[i].inputtype,
                                "inputcolumnsize":data[i].columnsize,
                                "inputoption":data[i].inputoption,
                                "inputtemptype":data[i].ele_type,
                                "inputmascode":data[i].inputmascode
                                },
                            "linenum":data[i].linenum,
                            "group":data[i].ele_group,
                            "autoid":data[i].autoid
                            }
                            masterdata_layout.push(dataInput);
                        }
                    }
                    loadLayout_masterData(masterdata_layout);

                    console.log(masterdata_layout);
                }else{
                   
                    masterdata_linenum++;
                    let title = {
                                'title_size':'h3',
                                'title_text':'Master Data'
                            }

                    let dataTitle ={
                        "title":title,
                        "linenum":masterdata_linenum,
                        "group":'masterdata'
                    }
                    masterdata_layout.push(dataTitle);

                    loadLayout_masterData(masterdata_layout);
                }

                
            }
        });
    }



</script>

</html>