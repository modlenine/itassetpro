<!-- Modal Edit Run Template -->
<div class="modal fade " id="add_dvobj_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-md modal-dialog-scrollable">

    <form id="frm_addObj" style="width:100%;" autocomplete="off">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Specification List</h4>
                <button type="button" class="close btn_close_objnew" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <!-- Check Zone -->
            <input hidden type="text" name="checkSpec_autoid" id="checkSpec_autoid">
            <input hidden type="text" name="checkMasCode" id="checkMasCode">

            <div class="modal-header subhead">
                <button type="button" id="btn_add_obj" class="btn btn-success btn-sm mr-2">Save</button>
                <button type="button" id="btn_close_obj" class="btn btn-danger btn-sm btn_close_objnew" data-dismiss="modal">Close</button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 form-group">
                        <label for="">Spec Name.</label>
                        <input type="text" name="device_obj_name" id="device_obj_name" class="form-control">
                    </div>

                    <div class="col-md-12 form-group">
                        <label for="">Device Type.</label>
                        <div id="show_objtype2"></div>
                    </div>

                    <div class="col-md-12 form-group">
                        <label for="">Element type.</label>
                        <select name="obj_mas_eletype" id="obj_mas_eletype" class="form-control">
                            <option value="">Please select option</option>
                            <option value="text">text</option>
                            <option value="select">select</option>
                            <option value="radio">radio</option>
                            <option value="checkbox">checkbox</option>
                            <option value="date">date</option>
                        </select>
                    </div>

                    <!-- For select -->
                    <div class="col-md-12 form-group" id="add_select_option" style="display:none;">
                        <label for="">Select option</label><i class="fa fa-plus-circle addOptionIcon"></i>
                        <input type="text" name="select_option[]" id="select_option" class="form-control">
                    </div>
                    <!-- For select -->


                    <!-- For radio -->
                    <div class="col-md-12 form-group" id="add_radio_option" style="display:none;">
                        <label for="">Radio option</label><i class="fa fa-plus-circle radioOptionIcon"></i>
                        <input type="text" name="radio_option[]" id="radio_option" class="form-control">
                    </div>
                    <!-- For radio -->


                    <!-- For Checkbox -->
                    <div class="col-md-12 form-group" id="add_checkbox_option" style="display:none;">
                        <label for="">Checkbox option</label><i class="fa fa-plus-circle checkboxOptionIcon"></i>
                        <input type="text" name="checkbox_option[]" id="checkbox_option" class="form-control">
                    </div>
                    <!-- For Checkbox -->
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <label for="">Specification Master List</label>
                        <div id="show_deviceObjMaster"></div>
                    </div>
                </div>
            </div>
        </div>
        </form>

    </div>
</div>
<!-- Modal Create Template -->





<!-- Modal Edit Run Template -->
<div class="modal fade " id="add_objtype_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-md modal-dialog-scrollable">

    <form id="frm_add_objtype" style="width:100%;" autocomplete="off">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Manage Device Type</h4>
                <button type="button" class="close btn_close_objtype" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-header subhead">
                <button type="button" id="btn_add_objtype" class="btn btn-success btn-sm mr-2">Save</button>
                <button type="button" id="btn_close_objtype" class="btn btn-danger btn-sm btn_close_objtype" data-dismiss="modal">Close</button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 form-group">
                        <label for="">Type Name</label>
                        <input type="text" name="objtype_name" id="objtype_name" class="form-control" placeholder="Please write type name">
                    </div>
                </div><hr>

                <div class="row">
                    <div id="show_objtype" class="col-md-12"></div>
                </div>

                <!-- Check value Zone -->
                <input type="hidden" name="checkAutoid" id="checkAutoid">
            </div>
        </div>
        </form>

    </div>
</div>
<!-- Modal Create Template -->




<script>
    var getoption = [];
    $(document).ready(function(){
        ///////////////////////////////
        ////Add Object type to database
        load_objtype2();
        $('#btn_add_objtype').click(function(){

            // check Object type input
            if($('#objtype_name').val() != ""){
                //Run Script savedata to data base
                $('#objtype_name').removeClass('inputNull').addClass('inputSuccess');
                // Check Action ว่าเป็นการบันทึกรายการใหม่ หรือว่า เป็นการแก้ไขรายการเดิม
                if($('#btn_add_objtype').text() == "Save"){
                    saveObjectType();
                }else if($('#btn_add_objtype').text() == "Save Edit"){
                    saveEditObjectType();
                }
            }else{
                $('#objtype_name').addClass('inputNull');
                swal({
                        type: 'error',
                        title: 'Please fill in the correct information',
                        showConfirmButton: false,
                        timer: 1500
                    });
            }
        });

        $('#btn_add_obj').click(function(){
            // Check Input null
            let checkInput = 1;

            if($('#device_obj_name').val() == ""){
                $('#device_obj_name').addClass('inputNull');
                checkInput = checkInput *0;
            }else{
                $('#device_obj_name').removeClass('inputNull').addClass('inputSuccess');
                checkInput = checkInput *1;
            }

            if($('#device_obj_type').val() == ""){
                $('#device_obj_type').addClass('inputNull');
                checkInput = checkInput *0;
            }else{
                $('#device_obj_type').removeClass('inputNull').addClass('inputSuccess');
                checkInput = checkInput *1;
            }

            if($('#obj_mas_eletype').val() == ""){
                $('#obj_mas_eletype').addClass('inputNull');
                checkInput = checkInput *0;
            }else{
                $('#obj_mas_eletype').removeClass('inputNull').addClass('inputSuccess');
                checkInput = checkInput *1;
            }


            if(checkInput == 1){
                if($('#btn_add_obj').text() == "Save"){
                    saveNewObj();
                }else{
                    saveEditNewObj();
                }
                
            }else{
                swal({
                        type: 'error',
                        text: 'Please complete the information',
                    });
            }

            console.log(checkInput);
            
        });



        $(document).on('click' , '.btn_close_objtype' , function(){//กดปิด objtype modal
            $('#objtype_name').removeClass('inputNull').removeClass('inputSuccess').val('');
            $('#btn_add_objtype').text('Save').removeClass('btn-warning').addClass('btn-success');
        });



        $(document).on('click','.btn_close_objnew' , function(){
            $('#btn_add_obj').text('Save').removeClass('btn-warning').addClass('btn-success');
            $('#device_obj_name , #device_obj_type , #obj_mas_eletype').val('');
            $('#add_select_option , #add_radio_option , #add_checkbox_option').css('display','none');
        });




    //Select option Zone
        let opid = 1;
        $(document).on('click' , '.addOptionIcon' , function(){
            $('#add_select_option')
            .append(`
            <div id="more_input_`+opid+`" class="more_input">
                <input type="text" name="select_option[]" id="select_option_`+opid+`" class="form-control mt-1 more_input">
                <i class="fa fa-trash del_select_optionI mr-3"
                    data_id = "`+opid+`"
                ></i>
            </div>`);
            opid++;
        });
        $(document).on('click' , '.del_select_optionI' , function(){
            const data_id = $(this).attr("data_id");
            $('#more_input_'+data_id).remove();
        });
    //Select option Zone




    // Radio Option Zone
        let opid2 = 1;
        $(document).on('click' , '.radioOptionIcon' , function(){
            $('#add_radio_option')
            .append(`
            <div id="more_radio_input_`+opid2+`" class="more_input">
                <input type="text" name="radio_option[]" id="radio_option_`+opid2+`" class="form-control mt-1 more_input">
                <i class="fa fa-trash del_radio_optionI mr-3"
                    data_id = "`+opid2+`"
                ></i>
            </div>`);
            opid2++;
        });
        $(document).on('click' , '.del_radio_optionI' , function(){
            const data_id = $(this).attr("data_id");
            $('#more_radio_input_'+data_id).remove();
        });
    // Radio Option Zone





    // Radio Option Zone
    let opid3 = 1;
        $(document).on('click' , '.checkboxOptionIcon' , function(){
            $('#add_checkbox_option')
            .append(`
            <div id="more_checkbox_input_`+opid3+`" class="more_input">
                <input type="text" name="checkbox_option[]" id="checkbox_option_`+opid3+`" class="form-control mt-1 more_input">
                <i class="fa fa-trash del_checkbox_optionI mr-3"
                    data_id = "`+opid3+`"
                ></i>
            </div>`);
            opid3++;
        });
        $(document).on('click' , '.del_checkbox_optionI' , function(){
            const data_id = $(this).attr("data_id");
            $('#more_checkbox_input_'+data_id).remove();
        });
    // Radio Option Zone



    $('#obj_mas_eletype').change(function(){
        $('#add_radio_option , #add_select_option , #add_checkbox_option').css('display' , 'none');
        $('.more_input').remove();
        if($(this).val() == "select"){
            $('#add_select_option').css('display' , '');
        }else if($(this).val() == "radio"){
            $('#add_radio_option').css('display' , '');
        }else if($(this).val() == "checkbox"){
            $('#add_checkbox_option').css('display' , '');
        }
    });


    ///////////////////////////////
    //Zone ของประเภทอุปกรณ์

    $(document).on('click' , '.del_fi_trash' , function(){
        const data_objtypename = $(this).attr("data_objtypename");
        const data_objtypeautoid = $(this).attr("data_objtypeautoid");

        swal({
                title: 'Do you want to delete this item?',
                text: "Type :"+data_objtypename,
                type: 'warning',
                showCancelButton: true,
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                confirmButtonText: 'Confirm Delete'
            }).then((result)=> {
                if(result.value == true){
                    deleteDeviceType(data_objtypeautoid);
                }
            })
    });

    $(document).on('click','.edit_pencil',function(){
        const data_objtypename = $(this).attr("data_objtypename");
        const data_objtypeautoid = $(this).attr("data_objtypeautoid");

        $('#objtype_name').val(data_objtypename);
        $('#checkAutoid').val(data_objtypeautoid);
        $('#btn_add_objtype').text('Save Edit').removeClass('btn-success').addClass('btn-warning');
    });

    //Zone ของประเภทอุปกรณ์
    ////////////////////////////////



    ////////////////////////////////////
    // Zone ของ Specification List

    $(document).on('click' , '.del_spec_trash' , function(){
        const data_objmascode = $(this).attr("data_objmascode");
        const data_objmasname = $(this).attr("data_objmasname");
        const data_objmasautoid = $(this).attr("data_objmasautoid");
        
        swal({
                title: 'Do you want to delete this item?',
                text: "Name :"+data_objmasname,
                type: 'warning',
                showCancelButton: true,
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                confirmButtonText: 'Confirm Delete'
            }).then((result)=> {
                if(result.value == true){
                    //Code for Delete
                    deleteSpec(data_objmasautoid , data_objmascode);
                }
            })
    });

    $(document).on('click' , '.edit_spec' , function(){
        const data_objmascode = $(this).attr("data_objmascode");
        const data_objmasname = $(this).attr("data_objmasname");
        const data_objmasautoid = $(this).attr("data_objmasautoid");
        const data_objmastype = $(this).attr("data_objmastype");
        const data_objmaseletype = $(this).attr("data_objmaseletype");

        $('#device_obj_name').val(data_objmasname);
        $('#device_obj_type').val(data_objmastype);
        $('#obj_mas_eletype').val(data_objmaseletype);
        $('#checkSpec_autoid').val(data_objmasautoid);
        $('#checkMasCode').val(data_objmascode);


        $('#btn_add_obj').text('Save Edit').removeClass('btn-success').addClass('btn-warning');

        if(data_objmaseletype != "text"){
            loadOptionEdit(data_objmascode , data_objmaseletype);
        }

    });

    // Zone ของ Specification List
    ////////////////////////////////////






});//End Function




/////////Function zone///////////////////
function saveObjectType()
{
    $.ajax({
        url:"/intsys/itassetpro/template/manageobj/saveObjectType",
        method:"POST",
        data:$('#frm_add_objtype').serialize(),
        beforeSend:function(){},
        success:function(res){
            console.log(JSON.parse(res));
            if(JSON.parse(res).status == "Insert Success"){
                $('#objtype_name').removeClass('inputSuccess').val('');
                load_objtype();
            }else{
                $('#objtype_name').addClass('inputNull').val('');
                swal({
                        type: 'error',
                        title: JSON.parse(res).msg,
                        showConfirmButton: false,
                        timer: 1500
                    });
            }
        }
    });
}

function saveEditObjectType()
{
    $.ajax({
        url:"/intsys/itassetpro/template/manageobj/saveEditObjectType",
        method:"POST",
        data:$('#frm_add_objtype').serialize(),
        beforeSend:function(){},
        success:function(res){
            console.log(JSON.parse(res));
            if(JSON.parse(res).status == "Update Success"){
                swal(
                    {
                        type: 'success',
                        title: 'อัพเดตข้อมูลสำเร็จ',
                        showConfirmButton: false,
                        timer: 1500
                    }
                );
                $('#objtype_name').removeClass('inputSuccess').val('');
                load_objtype();
                $('#btn_add_objtype').text('Save').removeClass('btn-warning').addClass('btn-success');
            }else{
                $('#objtype_name').addClass('inputNull').val('');
                swal({
                        type: 'error',
                        title: JSON.parse(res).msg,
                        showConfirmButton: false,
                        timer: 1500
                    });
            }
        }
    });
}







function load_objtype()
{
    $.ajax({
        url:"/intsys/itassetpro/template/manageobj/load_objtype",
        method:"POST",
        data:{},
        beforeSend:function(){},
        success:function(res){
            // console.log(res);
            $('#show_objtype').html(res);
        }
    });
}

function load_objtype2()
{
    $.ajax({
        url:"/intsys/itassetpro/template/manageobj/load_objtype2",
        method:"POST",
        data:{},
        beforeSend:function(){},
        success:function(res){
            // console.log(res);
            $('#show_objtype2').html(res);
        }
    });
}




function saveNewObj()
{
    $.ajax({
        url:"/intsys/itassetpro/template/manageobj/saveNewObj",
        method:"POST",
        data:$('#frm_addObj').serialize(),
        beforeSend:function(){},
        success:function(res){
            console.log(JSON.parse(res));
            if(JSON.parse(res).status == "Insert Data Success"){
                load_deviceObjMaster();
                swal(
                    {
                        title: 'Insert Success',
                        type: 'success',
                        timer: 1000
                    }
                )

                $('#device_obj_name').removeClass('inputSuccess').val('');
                $('#device_obj_type').removeClass('inputSuccess').val('');
                $('#obj_mas_eletype').removeClass('inputSuccess').val('');

                // จัดการส่วนของ Option
                $('#add_radio_option , #add_select_option , #add_checkbox_option').css('display' , 'none');
                $('#radio_option , #select_option , #checkbox_option').val('');
                $('.more_input').remove();
            }

            if(JSON.parse(res).status == "Found Duplicate Data"){
                swal(
                    {
                        title: 'Found Duplicate Data',
                        type: 'error',
                        timer: 1000
                    }
                )
                $('#device_obj_name').removeClass('inputSuccess').addClass('inputNull').val('');
                $('#device_obj_type').removeClass('inputSuccess').addClass('inputNull').val('');
                $('#obj_mas_eletype').removeClass('inputSuccess').addClass('inputNull').val('');
            }


        }
    });
}





function saveEditNewObj()
{
    $.ajax({
        url:"/intsys/itassetpro/template/manageobj/saveEditNewObj",
        method:"POST",
        data:$('#frm_addObj').serialize(),
        beforeSend:function(){},
        success:function(res){
            console.log(JSON.parse(res));
            if(JSON.parse(res).status == "Update Data Success"){
                load_deviceObjMaster();
                swal(
                    {
                        title: 'Update Success',
                        type: 'success',
                        timer: 1000
                    }
                )

                $('#device_obj_name').removeClass('inputSuccess').val('');
                $('#device_obj_type').removeClass('inputSuccess').val('');
                $('#obj_mas_eletype').removeClass('inputSuccess').val('');

                // จัดการส่วนของ Option
                $('#add_radio_option , #add_select_option , #add_checkbox_option').css('display' , 'none');
                $('#radio_option , #select_option , #checkbox_option').val('');
                $('.more_input').remove();

                $('#btn_add_obj').removeClass('btn-warning').addClass('btn-success').text('Save');
            }

            if(JSON.parse(res).status == "Found Duplicate Data"){
                swal(
                    {
                        title: 'Found Duplicate Data',
                        type: 'error',
                        timer: 1000
                    }
                )
                $('#device_obj_name').removeClass('inputSuccess').addClass('inputNull').val('');
                $('#device_obj_type').removeClass('inputSuccess').addClass('inputNull').val('');
                $('#obj_mas_eletype').removeClass('inputSuccess').addClass('inputNull').val('');
            }


        }
    });
}







function load_deviceObjMaster()
{
    $.ajax({
        url:"/intsys/itassetpro/template/manageobj/load_deviceObjMaster",
        method:"POST",
        data:{},
        beforeSend:function(){},
        success:function(res){
            // console.log(res);
            $('#show_deviceObjMaster').html(res);
        }
    });
}


function deleteDeviceType(data_objtypeautoid)
{
    $.ajax({
        url:"/intsys/itassetpro/template/manageobj/deleteDeviceType",
        method:"POST",
        data:{data_objtypeautoid:data_objtypeautoid},
        beforeSend:function(){},
        success:function(res){
            console.log(JSON.parse(res));
            if(JSON.parse(res).status == "Delete Success"){
                load_objtype();
            }
        }
    });
}

function deleteSpec(data_objmasautoid , data_objmascode)
{
    $.ajax({
        url:"/intsys/itassetpro/template/manageobj/deleteSpec",
        method:"POST",
        data:{
            data_objmasautoid:data_objmasautoid,
            data_objmascode:data_objmascode
        },
        beforeSend:function(){},
        success:function(res){
            console.log(JSON.parse(res));
            if(JSON.parse(res).status == "Delete Success"){
                load_deviceObjMaster();
            }
        }
    });
}

function loadOptionEdit(data_objmascode , data_objmaseletype)
{
    $.ajax({
        url:"/intsys/itassetpro/template/manageobj/loadOptionEdit",
        method:"POST",
        data:{data_objmascode:data_objmascode},
        beforeSend:function(){},
        success:function(res){
            console.log(JSON.parse(res));
            if(data_objmaseletype == "select"){
                $('.more_input').remove();
                $('#add_select_option').css('display' , '');
                $('#select_option').remove();
                let opid = 1;
                for(let i =0;i<JSON.parse(res).length;i++){
                    $('#add_select_option')
                        .append(`
                        <div id="more_input_`+opid+`" class="more_input">
                            <input type="text" name="select_option[]" id="select_option_`+opid+`" class="form-control mt-1 more_input" value="`+JSON.parse(res)[i]+`">
                            <i class="fa fa-trash del_select_optionI mr-3"
                                data_id = "`+opid+`"
                            ></i>
                        </div>`);
                        opid++;
                }
            }else{
                $('#add_select_option').css('display' , 'none');
                // $('.more_input').remove();
            }


            if(data_objmaseletype == "radio"){
                $('.more_input').remove();
                $('#add_radio_option').css('display' , '');
                $('#radio_option').remove();
                let opid2 = 1;
                for(let i =0;i<JSON.parse(res).length;i++){
                    $('#add_radio_option')
                        .append(`
                        <div id="more_radio_input_`+opid2+`" class="more_input">
                            <input type="text" name="radio_option[]" id="radio_option_`+opid2+`" class="form-control mt-1 more_input" value="`+JSON.parse(res)[i]+`">
                            <i class="fa fa-trash del_radio_optionI mr-3"
                                data_id = "`+opid2+`"
                            ></i>
                        </div>`);
                        opid2++;
                }
            }else{
                $('#add_radio_option').css('display' , 'none');
                // $('.more_input').remove();
            }



            if(data_objmaseletype == "checkbox"){
                $('.more_input').remove();
                $('#add_checkbox_option').css('display' , '');
                $('#checkbox_option').remove();
                let opid3 = 1;
                for(let i =0;i<JSON.parse(res).length;i++){
                    $('#add_checkbox_option')
                        .append(`
                        <div id="more_checkbox_input_`+opid3+`" class="more_input">
                            <input type="text" name="checkbox_option[]" id="checkbox_option_`+opid3+`" class="form-control mt-1 more_input" value="`+JSON.parse(res)[i]+`">
                            <i class="fa fa-trash del_checkbox_optionI mr-3"
                                data_id = "`+opid3+`"
                            ></i>
                        </div>`);
                        opid3++;
                }
            }else{
                $('#add_checkbox_option').css('display' , 'none');
                // $('.more_input').remove();
            }


        }
    });
}
</script>