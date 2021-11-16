<!-- Modal Edit Run Template -->
<div class="modal fade " id="create_template_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">

    <form id="frm_createTemplate" style="width:100%;" autocomplete="off">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Create Template</h4>
                <button type="button" class="close btn_close_template" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-header subhead">
                <button type="button" id="btn_add_template" class="btn btn-success btn-sm mr-2">Save</button>
                <button type="button" id="btn_close_template" class="btn btn-danger btn-sm btn_close_template mr-2" data-dismiss="modal">Close</button>
                <button type="button" id="btn_reset_template" class="btn btn-warning btn-sm btn_reset_template mr-2" data-dismiss="modal">Reset</button>
                <button type="button" class="btn btn-info btn-sm addElement">Add Elements</button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6">
                        <input type="text" name="templatename" id="templatename" placeholder="Template name" class="form-control">
                    </div>
                    <div id="showTemplateType" class="col-lg-6"></div>
                </div><hr>
                <div id="showLayout" class="row form-group">

                </div><hr>

                <!-- <textarea name="templateCode" id="templateCode" cols="30" rows="10" class="form-control mb-5"></textarea> -->

                <div class="row text-center">
                    <div class="addColumn">
                        <i class="fa fa-plus addColumnI addElement" aria-hidden="true">&nbsp;<span>Add Elements</span></i>
                    </div>
                </div>
            </div>

        </div>
    </form>
    </div>
</div>
<!-- Modal Create Template -->





<!-- Modal Edit Run Template -->
<div class="modal fade " id="add_obj_el_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">

        <div class="modal-content">

            <div class="modal-header">
                <h4>Choose Element</h4>
                <button type="button" class="close btn_close_element" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-header subhead">
                <!-- <button type="button" id="btn_add_obj" class="btn btn-success btn-sm mr-2">add</button> -->
                <button type="button" id="btn_close_element" class="btn btn-danger btn-sm btn_close_element" data-dismiss="modal">Close</button>
            </div>
            
            <div class="modal-body">

                <div class="row form-group">
                  
                        <div class="col-lg-3">
                            <div class="da-card select_title" >
                                <div class="da-card-content">
                                    <h5 class="h5 mb-10">Title</h5>
                                    <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="da-card select_input"
                            data_column = "2"
                            >
                                <div class="da-card-content">
                                    <h5 class="h5 mb-10">Input</h5>
                                    <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="col-lg-3">
                            <div class="da-card select_line"
                                data_column = "3"
                            >
                                <div class="da-card-content">
                                    <h5 class="h5 mb-10">Line</h5>
                                    <p class="mb-0">Example: Tag HR</p>
                                </div>
                            </div>
                        </div> -->
                 
                </div>
            </div>

        </div>

    </div>
</div>
<!-- Modal Create Template -->



<!-- Modal Edit Run Template -->
<div class="modal fade " id="add_ele_title" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-md modal-dialog-scrollable">

        <div class="modal-content">

            <div class="modal-header">
                <h4 class="add_title_h">Add Title</h4>
                <button type="button" class="close btn_close_eletitle" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-header subhead">
                <button type="button" id="btn_add_title" class="btn btn-success btn-sm mr-2">Add</button>
                <button type="button" id="btn_close_eletitle" class="btn btn-danger btn-sm btn_close_eletitle" data-dismiss="modal">Close</button>
            </div>
            
            <div class="modal-body">

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

    </div>
</div>
<!-- Modal Create Template -->




<!-- Modal Edit Run Template -->
<div class="modal fade " id="saveEdit_title" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-md modal-dialog-scrollable">

        <div class="modal-content">

            <div class="modal-header">
                <h4 class="add_title_h">Edit Title</h4>
                <button type="button" class="close btn_close_eletitle" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-header subhead">
                <button type="button" id="btn_saveEdit_title" class="btn btn-success btn-sm mr-2">Save Edit</button>
                <button type="button" id="btn_closeEdit_title" class="btn btn-danger btn-sm btn_closeEdit_title" data-dismiss="modal">Close</button>
            </div>
            
            <div class="modal-body">

                <input hidden type="text" name="checkTitleIndex" id="checkTitleIndex">

                <div class="row form-group">
                  
                        <div class="col-lg-12 form-group">
                            <label for="">เลือก ขนาด</label>
                            <select name="title_fontsize_edit" id="title_fontsize_edit" class="form-control">
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
                            <input type="text" name="title_text_edit" id="title_text_edit" class="form-control">
                        </div>

                </div>
            </div>

        </div>

    </div>
</div>
<!-- Modal Create Template -->



<!-- Modal Edit Run Template -->
<div class="modal fade " id="add_ele_input" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-md modal-dialog-scrollable">

        <div class="modal-content">

            <div class="modal-header">
                <h4 class="add_title_h">Add Input</h4>
                <button type="button" class="close btn_close_column" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-header subhead">
                <input type="text" name="input_search" id="input_search" class="form-control" placeholder="Search">
            </div>
            
            <div class="modal-body">
                <div id="showInput" class="row form-group">

                </div>
            </div>

        </div>

    </div>
</div>
<!-- Modal Create Template -->




<!-- Modal Edit Run Template -->
<div class="modal fade " id="add_input_detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-md modal-dialog-scrollable">

        <div class="modal-content">
            <div class="modal-header">
                <span id="inputNameTitle"></span>
                <button type="button" class="close btn_close_column" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-header subhead">
                <button type="button" id="btn_add_input" class="btn btn-success btn-sm mr-2">Add</button>
                <button type="button" id="btn_close_input" class="btn btn-danger btn-sm btn_close_input" data-dismiss="modal">Close</button>
            </div>
            
            <div class="modal-body">
                <input hidden type="text" name="input_name_detail" id="input_name_detail">
                <input hidden type="text" name="input_type_detail" id="input_type_detail">
                <input hidden type="text" name="input_index" id="input_index">
                <input hidden type="text" name="input_option" id="input_option">
                <input hidden type="text" name="input_temptype" id="input_temptype">
                <input hidden type="text" name="input_mascode" id="input_mascode">
                <div class="row form-group">
                    <div class="col-lg-12">
                        <label for="">Column size</label>
                        <select name="input_col_size" id="input_col_size" class="form-control">
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

    </div>
</div>
<!-- Modal Create Template -->






<!-- Modal Edit Run Template -->
<div class="modal fade " id="edit_input_detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-md modal-dialog-scrollable">

        <div class="modal-content">
            <div class="modal-header">
                <span id="inputNameTitle_edit"></span>
                <button type="button" class="close btn_close_column" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-header subhead">
                <button type="button" id="btn_edit_input" class="btn btn-success btn-sm mr-2">Save Edit</button>
                <button type="button" id="btn_close_edit_input" class="btn btn-danger btn-sm btn_close_edit_input" data-dismiss="modal">Close</button>
            </div>
            
            <div class="modal-body">
                <input hidden type="text" name="input_name_detail_edit" id="input_name_detail_edit">
                <input hidden type="text" name="input_type_detail_edit" id="input_type_detail_edit">
                <input hidden type="text" name="input_index_edit" id="input_index_edit">
                <input hidden type="text" name="input_option_edit" id="input_option_edit">
                <input hidden type="text" name="input_temptype_edit" id="input_temptype_edit">
                <div class="row form-group">
                    <div class="col-lg-12">
                        <label for="">Column size</label>
                        <select name="input_col_size_edit" id="input_col_size_edit" class="form-control">
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

    </div>
</div>
<!-- Modal Create Template -->



<!-- Modal Edit Run Template -->
<div class="modal fade " id="add_divider" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">

        <div class="modal-content">
            <div class="modal-header">
                <h4>Add Divider</h4>
                <button type="button" class="close btn_close_divider" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-header subhead">
                <button type="button" id="btn_save_divider" class="btn btn-success btn-sm mr-2">Save</button>
                <button type="button" id="btn_close_divider" class="btn btn-danger btn-sm btn_close_divider" data-dismiss="modal">Close</button>
            </div>
            
            <div class="modal-body">
                
                <div class="row form-group">
                    <div class="col-lg-12">
                        <label for="">Divider Type</label>
                        <select name="input_divider_type" id="input_divider_type" class="form-control">
                            <option value="">Please divider type</option>
                            <option value="dashed">dashed</option>
                            <option value="dotted">dotted</option>
                            <option value="solid">solid</option>
                            <option value="rounded">rounded</option>
                        </select>
                    </div>
                </div>
                <span>dashed</span>
                <hr style="border-top: 2px dashed #bbb;">

                <span>dotted</span>
                <hr style="border-top: 2px dotted #bbb;">

                <span>solid</span>
                <hr style="border-top: 2px solid #bbb;">

                <span>rounded</span>
                <hr style="border-top: 5px solid #bbb;border-radius: 5px;">
            </div>
        </div>

    </div>
</div>
<!-- Modal Create Template -->






<script>
    var inputType = [];
    $(document).ready(function(){

    let layout = [];
    let linenum = 0;
    loadLayout(layout);
    loadTemplateType();

        $(document).on('click' , '.addElement' ,function(){
            // Check Template name And Template Type
            $('#templatename , #tem_chooseTemType').removeClass('inputNull');
            if($('#templatename').val() != "" && $('#tem_chooseTemType').val() != ""){
                $('#add_obj_el_modal').modal('show');
                $('#create_template_modal').modal('hide');
                $('#templatename').prop('readonly' , true);
                // $('#tem_chooseTemType').prop('readonly',true);
                $('#tem_chooseTemType').attr("style", "pointer-events: none;").addClass('selectbg');
            }else{
                swal(
                    {
                        // position: 'top-end',
                        type: 'error',
                        title: 'Please fill in the Template name and Template Type.',
                        showConfirmButton: false,
                        timer: 1500
                    }
                )

                $('#templatename , #tem_chooseTemType').addClass('inputNull');

            }
            
        });

        $(document).on('click','.btn_reset_template',function(){
            location.reload();
        });


        $(document).on('click' , '.select_column' , function(){
            $('#add_ele_column').modal('show');
            $('#add_obj_el_modal').modal('hide');
        });
        $(document).on('click' , '.btn_close_column' , function(){
            $('#add_ele_column').modal('hide');
            $('#add_obj_el_modal').modal('show');
        });


        $(document).on('click' , '.btn_close_element' , function(){
            $('#add_obj_el_modal').modal('hide');
            $('#create_template_modal').modal('show');
            loadLayout(layout);
        });

        

        $(document).on('click' , '.select_title' , function(){
            $('#add_ele_title').modal('show');
            $('#add_obj_el_modal').modal('hide');

            $('#title_fontsize').removeClass('inputNull');
            $('#title_text').removeClass('inputNull');
        });
        $(document).on('click' ,'.btn_close_eletitle' , function(){
            $('#add_obj_el_modal').modal('show');
        });


        $(document).on('click' , '.select_line' , function(){
            $('#add_divider').modal('show');
            $('#add_obj_el_modal').modal('hide');
        });
        $('#btn_save_divider').click(function(){
            const input_divider_type = $('#input_divider_type').val();
            let divider={
                'dividertype':input_divider_type
            }
            let outdivider={
                'datadivider':divider
            }
            layout.push(outdivider);
            $('#create_template_modal').modal('show');
            $('#add_divider').modal('hide');
            loadLayout(layout);
            
        });


        $(document).on('click' , '.select_column_number' , function(){
            const data_column = $(this).attr("data_column");
            $(this).addClass('columnActive');
            let dataColumn = {
                "column":data_column
            }
            layout.push(dataColumn);
            $('#add_ele_column').modal('hide');
            $('#create_template_modal').modal('show');
            loadLayout(layout);
        });



        $('#btn_add_title').click(function(){
            // Check Input null 
            let title = "";
            let titleSize = "";
            let titleText = "";
            if($('#title_fontsize').val() != "" && $('#title_text').val() != ""){
                titleSize = $('#title_fontsize').val();
                titleText = $('#title_text').val();
                title = {
                    "title_size":titleSize,
                    "title_text":titleText,
                }
                linenum++;
            }else{
                $('#title_fontsize').addClass('inputNull');
                $('#title_text').addClass('inputNull');
            }

            let dataTitle = {
                "title":title,
                "linenum":linenum
            };
            // loadLayout(layout);
            layout.push(dataTitle);
            loadLayout(layout);
            $('#add_ele_title').modal('hide');
            $('#create_template_modal').modal('show');
            $('#title_fontsize').val('');
            $('#title_text').val('');
            
        });

        $(document).on('mouseover' , '.titleOut' ,function(){
            $('.areaIcon').css('display' , '');
        });
        $(document).on('mouseout' , '.titleOut' ,function(){
            $('.areaIcon').css('display' , 'none');
        });

        $(document).on('mouseover' , '.inputOut' ,function(){
            $('.areaIconInput').css('display' , '');
        });
        $(document).on('mouseout' , '.inputOut' ,function(){
            $('.areaIconInput').css('display' , 'none');
        });

        $(document).on('click' , '.titleIcon' , function(){
            const data_id = $(this).attr("data_id");
            layout.splice(data_id , 1);
            loadLayout(layout);
        });





    //////////////////////////////////////////////
    // Zone Delete Input
        $(document).on('click' , '.inputIcon' , function(){
            const data_id = $(this).attr("data_id");

            const data_inputtype = $(this).attr("data_inputtype");
            const data_inputname = $(this).attr("data_inputname");
            const data_inputtemptype = $(this).attr("data_inputtemptype");
            const data_inputoption = $(this).attr("data_inputoption");

            layout.splice(data_id , 1);
            loadLayout(layout);

            let dataInputType = {
                "obj_mas_name":data_inputname,
                "obj_mas_type":data_inputtemptype,
                "obj_mas_eletype":data_inputtype,
                "obj_mas_option":data_inputoption.split(",")
            }
            inputType.push(dataInputType);
        });
    // Zone Delete Input
    //////////////////////////////////////////////



    /////////////////////////////////////////////
    // /////Zone Edit Input
    $(document).on('click' , '.inputIconEdit', function(){
            const data_id = $(this).attr("data_id");
            const data_inputtype= $(this).attr("data_inputtype");
            const data_inputname= $(this).attr("data_inputname");
            const data_inputtemptype= $(this).attr("data_inputtemptype");
            const data_inputoption= $(this).attr("data_inputoption");
            const data_inputcolsize = $(this).attr("data_inputcolsize");



            $('#edit_input_detail').modal('show');
            $('#create_template_modal').modal('hide');

            $('#input_type_detail_edit').val(data_inputtype);
            $('#input_name_detail_edit').val(data_inputname);
            $('#input_index_edit').val(data_id);
            $('#input_option_edit').val(data_inputoption);
            $('#input_temptype_edit').val(data_inputtemptype);
            $('#input_col_size_edit').val(data_inputcolsize);

            // Title
            $('#inputNameTitle_edit').html('<b>Add input :</b> '+data_inputname+' <b>Type : </b>'+data_inputtype);

    });

    $('#btn_edit_input').click(function(){
            const data_id = $('#input_index_edit').val();
            const data_inputtype= $('#input_type_detail_edit').val();
            const data_inputname= $('#input_name_detail_edit').val();
            const data_inputtemptype= $('#input_temptype_edit').val();
            const data_inputoption= $('#input_option_edit').val();
            const data_inputcolsize = $('#input_col_size_edit').val();

            layout.splice(data_id,1,
            {inputData:
                {
                    inputname:data_inputname,
                    inputtype:data_inputtype,
                    inputcolumnsize:data_inputcolsize,
                    inputtemptype:data_inputtemptype,
                    inputoption:data_inputoption.split(",")
                }
            });

            $('#edit_input_detail').modal('hide');
            $('#create_template_modal').modal('show');
            loadLayout(layout);
    });

    $(document).on('click' , '.btn_close_edit_input', function(){
            $('#edit_input_detail').modal('hide');
            $('#create_template_modal').modal('show');
    });

    // /////Zone Edit Input
    /////////////////////////////////////////////







    //////////////////////////////////////////
    ////////// Zone Edit Title
        $(document).on('click' , '.titleIconEdit' , function(){
            $('#saveEdit_title').modal('show');
            $('#create_template_modal').modal('hide');

            const data_titleid = $(this).attr("data_titleid");
            const data_title_text =$(this).attr("data_title_text");
            const data_title_size =$(this).attr("data_title_size");

            $('#title_text_edit').val(data_title_text);
            $('#checkTitleIndex').val(data_titleid);
            $('#title_fontsize_edit').val(data_title_size);

        });
        $('#btn_saveEdit_title').click(function(){
            const data_titleid = $('#checkTitleIndex').val();
            const data_title_text = $('#title_text_edit').val();
            const data_title_size = $('#title_fontsize_edit').val();
            layout.splice(data_titleid , 1 ,{title:{title_size:data_title_size , title_text:data_title_text}});

            $('#saveEdit_title').modal('hide');
            $('#create_template_modal').modal('show');
            loadLayout(layout);
        });
    ////////// Zone Edit Title
    //////////////////////////////////////////



        $(document).on('change' , '#tem_chooseTemType' , function(){
            const templateType = $('#tem_chooseTemType').val();
            loadInput(templateType);
            
        });


        $(document).on('click','.select_input',function(){
            $('#add_ele_input').modal('show');
            $('#add_obj_el_modal').modal('hide');
            // const templateType = $('#tem_chooseTemType').val();
            // loadInput(templateType);
            console.log(inputType);
            let output ='';
            for(let i =0;i<inputType.length;i++){
                if(inputType[i].obj_mas_eletype != "text"){
                    output +=`
                    <div class="col-sm-6 col-lg-6 form-group divInput">
                        <div class="da-card select_input_number" 
                            data_inputname="`+inputType[i].obj_mas_name+`"
                            data_inputeletype="`+inputType[i].obj_mas_eletype+`"
                            data_index="`+i+`"
                            data_temptype="`+inputType[i].obj_mas_type+`"
                            data_option="`+inputType[i].obj_mas_option+`"
                            data_mascode="`+inputType[i].obj_mas_code+`"
                            >
                            <div class="da-card-content">
                                <h5 class="h5 mb-10">`+inputType[i].obj_mas_name+`</h5>
                                <p class="mb-0">`+inputType[i].obj_mas_eletype+`</p>
                            </div>
                        </div>
                    </div>
                    `;
                }else{
                    output +=`
                    <div class="col-sm-6 col-lg-6 form-group divInput">
                        <div class="da-card select_input_number" 
                            data_inputname="`+inputType[i].obj_mas_name+`"
                            data_inputeletype="`+inputType[i].obj_mas_eletype+`"
                            data_index="`+i+`"
                            data_temptype="`+inputType[i].obj_mas_type+`"
                            data_mascode="`+inputType[i].obj_mas_code+`"
                            >
                            <div class="da-card-content">
                                <h5 class="h5 mb-10">`+inputType[i].obj_mas_name+`</h5>
                                <p class="mb-0">`+inputType[i].obj_mas_eletype+`</p>
                            </div>
                        </div>
                    </div>
                    `;
                }
                
            }

            $('#showInput').html(output);
        });


        $(document).on('click' , '.select_input_number' , function(){
            const data_inputname = $(this).attr("data_inputname");
            const data_inputeletype = $(this).attr("data_inputeletype");
            const data_index = $(this).attr("data_index");
            const data_option = $(this).attr("data_option");
            const data_temptype = $(this).attr("data_temptype");
            const data_mascode = $(this).attr("data_mascode");

            $('#add_input_detail').modal('show');
            $('#add_ele_input').modal('hide');

            $('#input_type_detail').val(data_inputeletype);
            $('#input_name_detail').val(data_inputname);
            $('#input_index').val(data_index);
            $('#input_option').val(data_option);
            $('#input_temptype').val(data_temptype);
            $('#input_mascode').val(data_mascode);

            // Title
            $('#inputNameTitle').html('<b>Add input :</b> '+data_inputname+' <b>Type : </b>'+data_inputeletype);


        });
        $('#btn_add_input').click(function(){
            const inputname = $('#input_name_detail').val();
            const inputtype = $('#input_type_detail').val();
            const inputcolumnsize = $('#input_col_size').val();
            const inputindex = $('#input_index').val();
            const inputtemptype = $('#input_temptype').val();
            const inputmascode = $('#input_mascode').val();
            let optionArray = $('#input_option').val();
            linenum++;
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
                "linenum":linenum
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
                "linenum":linenum
                }
            }

            
            layout.push(dataInput);
            $('#add_input_detail').modal('hide');
            $('#create_template_modal').modal('show');

            inputType.splice(inputindex,1);

            console.log(inputType);

            loadLayout(layout);
        });




        $('#btn_add_template').click(function(){
            // console.log(layout);

            const tp_mas_name = $('#templatename').val();
            const tp_mas_type = $('#tem_chooseTemType').val();
            const templatecode = layout;

            $.ajax({
                url:"/intsys/itassetpro/template/manageobj/saveTemplate",
                method:"POST",
                data:{
                    tp_mas_name:tp_mas_name,
                    tp_mas_type:tp_mas_type,
                    templatecode:templatecode
                },
                beforeSend:function(){},
                success:function(res){
                    // console.log(JSON.parse(res));
                    if(JSON.parse(res).status == "Insert Success"){
                        location.reload();
                    }
                }
            });
        });

        // $('#input_search').keyup(function(){  
        //     search_table($(this).val());  
        // });

        $('#input_search').keyup(function(){
            const value = $(this).val().toLowerCase();
            $('.divInput').filter(function(){
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });



    });//End rady function









    function loadLayout(layout)
    {
        console.log(layout);
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
                        <i class="fa fa-edit titleIconEdit" aria-hidden="true" 
                            data_titleid="`+i+`"
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
                                    <i class="fa fa-trash inputIcon" aria-hidden="true" 
                                        data_id="`+i+`"
                                        data_inputtype=`+layout[i].inputData.inputtype+`
                                        data_inputname=`+layout[i].inputData.inputname+`
                                        data_inputtemptype="`+layout[i].inputData.inputtemptype+`"
                                        data_inputoption="`+layout[i].inputData.inputoption+`"
                                        data_linenum = "`+layout[i].linenum+`"
                                    ></i>
                                    <i class="fa fa-edit inputIconEdit" aria-hidden="true" 
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
            $('#showLayout').html(output);
        }else{
            $('#showLayout').html(output);
        }

        // $('#templateCode').val(layout);

    }



    function loadTemplateType()
    {
        $.ajax({
            url:"/intsys/itassetpro/template/manageobj/loadTemplateType",
            method:"POST",
            data:{},
            beforeSend:function(){},
            success:function(res){
                $('#showTemplateType').html(res);
            }
        });
    }

    function loadInput(templateType)
    {
        $.ajax({
            url:"/intsys/itassetpro/template/manageobj/loadInput",
            method:"POST",
            data:{templateType:templateType},
            beforeSend:function(){},
            success:function(res){
                console.log(JSON.parse(res));
                
                if(JSON.parse(res).length != 0){
                    inputType = JSON.parse(res);
                }
            }
        });
    }

    // function search_table(value){  
    //     $('#showInput .da-card-content').each(function(){  
    //             var found = 'false';  
    //             $(this).each(function(){  
    //                 if($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)  
    //                 {  
    //                     found = 'true';  
    //                 }  
    //             });  
    //             if(found == 'true')  
    //             {  
    //                 $(this).show();  
    //             }  
    //             else  
    //             {  
    //                 $(this).hide();  
    //             }  
    //     });  
    // }

</script>