<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title><?php echo $title; ?></title>
</head>
<body></body>

    <form name="frm_main" method="post" enctype="multipart/form-data">
        <div class="main-container">
            <div class="xs-pd-20-10 pd-ltr-20">
                <div class="title pb-20">
                    <h2 class="h3 mb-0"><i class="micon icon-copy dw dw-notepad-2"></i> Template Setup
                        <a herf="#" class="dropdown-toggle no-arrow" data-toggle="modal" data-target="#ModalTemplate" type="button">
                            <span class="icon-copy dw dw-add text-blue"></span>
                        </a>
                    </h2>
                </div>
                <div class="card-box pb-10">
                    <!-- <div class="h5 pd-20 mb-0">Truck queue list</div> -->
                </div>
            </div>
        </div>

        <div class="modal fade bs-example-modal-lg" id="ModalTemplate" tabindex="-1" role="dialog" aria-labelledby="ModalTemplateLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myLargeModalLabel"><i class="icon-copy dw dw-add-file1 text-blue"></i> เพิ่มหัวข้อเทมเพลต</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body" id="">

                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label text-blue"><b>Name</b></label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control form-control-sm" type="text" name="temp_name" id="temp_name" placeholder="Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label text-blue"><b>Description</b></label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control form-control-sm" type="text" name="temp_description" id="temp_description" placeholder="Description">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label text-blue"><b>Input type</b></label>
                            
                            <div class="col-md-6 col-sm-12">
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="RadioText" name="temp_inputtype" class="custom-control-input" onclick="EnableDisableTextBox()">
                                    <label class="custom-control-label" for="RadioText">Text</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="RadioNum" name="temp_inputtype" class="custom-control-input" onclick="EnableDisableTextBox()">
                                    <label class="custom-control-label" for="RadioNum">Number</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="RadioSelect" name="temp_inputtype" class="custom-control-input" onclick="EnableDisableTextBox()">
                                    <label class="custom-control-label" for="RadioSelect">Selete</label>
                                </div>
                            </div>
                            
                        </div>

                        <div class="form-group row field_wrapper" id="optionShow" style="display:none;">
                            <label class="col-sm-12 col-md-2 col-form-label text-blue"><b>Option </b></label>
                            <div class="col-sm-8 col-md-8">
                                <input type="text" class="form-control form-control-sm" name="field_option[]" id="field_option" value="" placeholder="Option" disabled/>
                            </div>
                            <div class="col-sm-2 col-md-2">
                                <button type="button" class="btn btn-light btn-sm add_button" title="Add field option" id="btn_addfield" disabled>+</button>
                                <!-- <a href="javascript:void(0);" class="add_button" title="Add field" class="disabled"><span class="icon-copy dw dw-add text-blue"></span></a> -->
                            </div>
                        </div>
                        <div class="form-group row" id="deviceShow" style="display:none;">
                            <label class="col-sm-12 col-md-2 col-form-label text-blue"><b>Device</b></label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control form-control-sm" type="text" name="temp_device" id="temp_device" placeholder="Device" disabled>
                                <small class="form-text text-muted">
                                    Exsample Computer , UPS , Printer Other
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success btn-sm" OnClick="saveTemplate()">Save</button>
                        <button type="button" class="btn btn-outline-secondary btn-sm" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <script type="text/javascript">

        function EnableDisableTextBox(){
            let chkYes              = document.getElementById("RadioSelect");
            let textbox_device      = document.getElementById("temp_device");
            let textbox_option      = document.getElementById("field_option");
            let btn_option          = document.getElementById("btn_addfield");
            textbox_device.disabled = chkYes.checked ? false : true;
            textbox_option.disabled = chkYes.checked ? false : true;
            btn_option.disabled     = chkYes.checked ? false : true;

            if (textbox_device.disabled) {
                document.getElementById('optionShow').style.display = 'none';
                document.getElementById('deviceShow').style.display = 'none';
            }else{
                document.getElementById('optionShow').style.display = '';
                document.getElementById('deviceShow').style.display = '';
            }
        }

        function saveTemplate(){
            frm_main.action='<?php echo base_url();?>template/saveTemplate/'                    
            frm_main.submit();
        }

        $(document).ready(function(){
            let maxField = 10; 
            let addButton = $('.add_button'); 
            let wrapper = $('.field_wrapper');
            let fieldHTML = '<div id="box-option" class="col-sm-12 col-md-2"></div><div id="box-input" class="col-sm-8 col-md-8"><input type="text" class="form-control form-control-sm" name="field_option[]" value="" placeholder="Option"/></div><div id="box-remove" class="col-sm-2 col-md-2"> <button type="button" class="btn btn-outline-danger btn-sm remove_button" title="Remove field option" > x </button></div>'; //New input field html 
            let x = 1;
            
            $(addButton).click(function(){
                if(x < maxField){ 
                    x++;
                    $(wrapper).append(fieldHTML); //Add field html
                }
            });
            
            $(wrapper).on('click', '.remove_button', function(e){
                e.preventDefault();
                document.getElementById("box-option").remove();
                document.getElementById("box-input").remove();
                document.getElementById("box-remove").remove();
                // $(this).parent('div').remove(); //Remove field html
                x--; //Decrement field counter
            });
        });
    </script>


</body>
</html>