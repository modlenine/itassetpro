<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <title><?= $pagename ?></title>
</head>

<body>
    <div class="main-container">

        <div class="pd-ltr-20">
            <!-- Simple Datatable start -->
            <div class="card-box mb-30">
                <div class="pd-20">
                    <p class="mb-0 mt-2">
                        <button type="button" id="new_device" class="btn btn-success"><i class="dw dw-file-21"></i>&nbsp;New Device</button>
                    </p>
                </div>

                <div class="pd-20">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 form-group">
                            <input type="text" name="dateStart" id="dateStart" class="form-control mr-2" placeholder="Date Start">
                        </div>
                        <div class="col-lg-4 col-md-6 form-group">
                            <input type="text" name="dateEnd" id="dateEnd" class="form-control mr-2" placeholder="Date End">
                        </div>
                        <div class="col-lg-4 col-md-6 form-group">
                            <button id="btnSearchDate" class="btn btn-success mr-2"><i class="dw dw-magnifying-glass isearch"></i>&nbsp;&nbsp;Search</button>
                            <button id="btnClearSearch" class="btn btn-warning"><i class="dw dw-refresh"></i>&nbsp;&nbsp;Clear</button>
                        </div>
                    </div>
                </div>

                <div id="contentDatatable" class="pb-20"></div>
            </div>
            <!-- Simple Datatable End -->
        </div>
    </div>



<!-- Modal Zone -->
<!-- Modal Edit Run Template -->
<div class="modal fade " id="create_device" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">

    <form id="frm_save_device_data" style="width:100%;" autocomplete="off">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Create Device</h4>
                <button type="button" class="close btn_close_create_device" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-header subhead">
                <button type="button" id="btn_save_create_device" class="btn btn-success btn-sm mr-2">Save</button>
                <button type="button" id="btn_close_create_device" class="btn btn-danger btn-sm btn_close_create_device mr-2" data-dismiss="modal">Close</button>
                <button type="button" id="btn_reset_template" class="btn btn-warning btn-sm btn_reset_template mr-2" data-dismiss="modal">Reset</button>
            </div>
            <div class="modal-body">
                <div class="row form-group">
                    <div class="col-md-6 form-group">
                        <label for="">Device Type</label>
                        <input type="text" name="device_type" id="device_type" class="form-control">
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="">Device Template</label>
                        <input type="text" name="device_template" id="device_template" class="form-control">
                        <div id="device_showtemplate_list"></div>
                    </div>
                </div><hr>

                <div class="row form-group" id="device_show_datatemplate"></div>
                
            </div>

        </div>
    </form>
    </div>
</div>
<!-- Modal Create Template -->
   
</body>

</html>

<script>
let getPagename = "<?= $pagename ?>";

$(document).ready(function() {

    // Check page Zone
    if(getPagename == "COMPUTER"){
        // console.log("Computer");
        loadListDataComputer();
    }

    $('#new_device').click(function(){
        $('#create_device').modal('show');
        $('#device_type').val(getPagename).prop('readonly' , true);
    });
    $(document).on('focus' , '#device_template' , function(){
        device_loadtemplate_list(getPagename);
    });
    // $(document).on('blur' , '#device_template' , function(){
    //     $('#device_showtemplate_list').html('');
    // });


    $(document).on('click' , '.device_select_template' , function(){
        const data_templatename = $(this).attr("data_templatename");
        $('#device_template').val(data_templatename);
        device_load_data_template(data_templatename);
        $('#device_showtemplate_list').html('');
    });


    $('#btn_save_create_device').click(function(){
        save_create_device();
    });



});//End Ready Function 


    function loadListDataComputer(){
        $.ajax({
            url: "/intsys/itassetpro/device/load_datatableComputer",
            type:'POST',
            success: function(data) {
                $('#contentDatatable').html(data);
                // console.log('done');
                $('#dataMainList thead th').each(function() {
                var title = $(this).text();
                $(this).html(title + ' <br><input type="text" class="form-control form-control-sm" placeholder="Search ' + title + '" />');
            });

            var table = $('#dataMainList').DataTable({
                "scrollX": true,
                "processing": true,
                "serverSide": true,
                "ajax":"/intsys/itassetpro/device/getListComputerDevice",
                order: [
                    [0, 'desc']
                ],
                columnDefs: [{
                    targets: "_all",
                    orderable: false
                }],
            });
            
            table.columns().every(function() {
                var table = this;
                $('input', this.header()).on('keyup change', function() {
                    if (table.search() !== this.value) {
                        table.search(this.value).draw();
                    }
                });
            });
            }
        });
    }


    function device_loadtemplate_list(devicetype)
    {
        $.ajax({
            url:"/intsys/itassetpro/device/device_loadtemplate_list",
            method:"POST",
            data:{devicetype:devicetype},
            beforeSend:function(){},
            success:function(res){
                // console.log(res);
                $('#device_showtemplate_list').html(res);
            }
        });
    }


    function device_load_data_template(templatename)
    {
        $.ajax({
            url:"/intsys/itassetpro/device/device_load_data_template",
            method:"POST",
            data:{templatename:templatename},
            beforeSend:function(){},
            success:function(res){
                console.log(JSON.parse(res));
                const data = JSON.parse(res);

                // templatedata.push(data);

                let output = '';

                for(let i =0; i < data.length;i++){
                    
                    if(data[i].data_type == "title"){
                    output += `
                    
                    <div class="col-lg-12 titleOut_vtem_`+i+` form-group">

                    <input type="hidden" id="check_ele_type" name="check_ele_type[]" value="`+data[i].data_type+`">
                    <input type="hidden" id="check_ele_linenum" name="check_ele_linenum[]" value="`+data[i].linenum+`">
                    <input type="hidden" id="dv_title" name="dv_title[]" value="`+data[i].title_text+`">
                    <input type="hidden" id="dv_titlesize" name="dv_titlesize[]" value="`+data[i].title_size+`">

                        <`+data[i].title_size+`>`+data[i].title_text+`</`+data[i].title_size+`>
                    </div>`;
                    }


                if(data[i].data_type == "inputData"){

                        output +=`
                            <div class="col-lg-`+data[i].inputcolumnsize+` form-group inputOut_vtem_`+i+`">
                            <input type="hidden" id="dv_inputcolumnsize" name="dv_inputcolumnsize_`+data[i].linenum+`" value="`+data[i].inputcolumnsize+`">

                            <input type="hidden" id="dv_title" name="dv_title[]" value="`+data[i].title_text+`">
                            <input type="hidden" id="dv_titlesize" name="dv_titlesize[]" value="`+data[i].title_size+`">
                            `;

                        if(data[i].inputtype == "text"){
                            output +=`
                                <label>`+data[i].inputname+`</label>
                                <input type="hidden" id="check_ele_type" name="check_ele_type[]" value="`+data[i].data_type+`">
                                <input type="hidden" id="check_elesub_type" name="check_elesub_type_`+data[i].linenum+`" value="`+data[i].inputtype+`">
                                <input type="hidden" id="check_ele_linenum" name="check_ele_linenum[]" value="`+data[i].linenum+`">
                                <input type="hidden" id="label_`+data[i].inputmascode+`" name="labelvalue_`+data[i].linenum+`" value="`+data[i].inputname+`">
                                <input type="text" id="input_`+data[i].inputmascode+`" name="inputvalue_`+data[i].linenum+`" class="form-control">`;
                        }else if(data[i].inputtype == "select"){
                            output +=`
                                <label>`+data[i].inputname+`</label>
                                <input type="hidden" id="check_ele_type" name="check_ele_type[]" value="`+data[i].data_type+`">
                                <input type="hidden" id="check_elesub_type" name="check_elesub_type_`+data[i].linenum+`" value="`+data[i].inputtype+`">
                                <input type="hidden" id="check_ele_linenum" name="check_ele_linenum[]" value="`+data[i].linenum+`">
                                <input type="hidden" id="label_`+data[i].inputmascode+`" name="labelvalue_`+data[i].linenum+`" value="`+data[i].inputname+`">
                                <select id="inputSelect_`+data[i].inputmascode+`" name="select_`+data[i].linenum+`" class="form-control">`;
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
                                <input type="hidden" id="check_ele_type" name="check_ele_type[]" value="`+data[i].data_type+`">
                                <input type="hidden" id="check_elesub_type" name="check_elesub_type_`+data[i].linenum+`" value="`+data[i].inputtype+`">
                                <input type="hidden" id="check_ele_linenum" name="check_ele_linenum[]" value="`+data[i].linenum+`">
                                <input type="hidden" id="label_`+data[i].inputmascode+`" name="labelvalue_`+data[i].linenum+`" value="`+data[i].inputname+`">
                                <div id="divRadio_`+data[i].inputmascode+`" class="form-inline">`;
                                for(let j =0;j<data[i].inputoption.length;j++){
                                    output +=`
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="inputRadio_`+data[i].inputmascode+j+`" name="radio_`+data[i].linenum+`" class="custom-control-input" value="`+data[i].inputoption[j]+`">
                                        <label class="custom-control-label" for="inputRadio_`+data[i].inputmascode+j+`">`+data[i].inputoption[j]+`</label>
                                    </div>`;
                                }
                            output +=`
                            </div>`;
                        }else if(data[i].inputtype == "checkbox"){
                            // loadOptionCheckbox(layout[i].inputData.inputname);
                            output +=`
                                <label>`+data[i].inputname+`</label>
                                <input type="hidden" id="check_ele_type" name="check_ele_type[]" value="`+data[i].data_type+`">
                                <input type="hidden" id="check_elesub_type" name="check_elesub_type_`+data[i].linenum+`" value="`+data[i].inputtype+`">
                                <input type="hidden" id="check_ele_linenum" name="check_ele_linenum[]" value="`+data[i].linenum+`">
                                <input type="hidden" id="label_`+data[i].inputmascode+`" name="labelvalue_`+data[i].linenum+`" value="`+data[i].inputname+`">
                                <div id="divCheckbox_`+data[i].inputmascode+`" class="form-inline">`;
                                for(let j =0;j<data[i].inputoption.length;j++){
                                    output +=`
                                    <div class="custom-control custom-checkbox mb-5">
                                        <input type="checkbox" id="inputCheckbox_`+data[i].inputmascode+j+`" name="checkbox_`+data[i].linenum+`" class="custom-control-input" value="`+data[i].inputoption[j]+`">
                                        <label class="custom-control-label" for="inputCheckbox_`+data[i].inputmascode+j+`">`+data[i].inputoption[j]+`</label>
                                    </div>`;
                                }
                            output +=`
                            </div>`;
                        }else if(data[i].inputtype == "date"){
                            output +=`
                                <label>`+data[i].inputname+`</label>
                                <input type="hidden" id="check_ele_type" name="check_ele_type[]" value="`+data[i].data_type+`">
                                <input type="hidden" id="check_elesub_type" name="check_elesub_type_`+data[i].linenum+`" value="`+data[i].inputtype+`">
                                <input type="hidden" id="check_ele_linenum" name="check_ele_linenum[]" value="`+data[i].linenum+`">
                                <input type="hidden" id="label_`+data[i].inputmascode+`" name="labelvalue_`+data[i].linenum+`" value="`+data[i].inputname+`">
                                <input type="date" id="inputDate_`+data[i].inputmascode+`" name="inputvalue_`+data[i].linenum+`" class="form-control">`;
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
                $('#device_show_datatemplate').html(output);
            }
        });
    }


    function save_create_device()
    {
        $.ajax({
            url:"/intsys/itassetpro/device/save_create_device",
            method:"POST",
            data:$('#frm_save_device_data').serialize(),
            beoreSend:function(){},
            success:function(res){
                console.log(JSON.parse(res));
                if(JSON.parse(res).status == "Insert Success"){
                    location.reload();
                }
            }
        });
    }


</script>

