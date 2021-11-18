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
        <input  type="text" name="check_option" id="check_option">
        <div class="pd-ltr-20">
            <div class="card-box pd-20 mb-30">
                <div class="row align-items-center form-group">
                    <h4>Detail Device</h4>
                </div>
                <hr>
                <div class="row form-group">
                    <div class="col-md-10">
                        <!-- <h5>Template List</h5> -->
                        <div class="row form-group" id="device_show_datatemplate"></div>
                    </div>
                    <div class="col-md-2">
                        <h6>History</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<script>
    $(document).ready(function() {
        // const data_deviceCode = 'Computer'
        const data_deviceCode = 'COM0001'
        device_load_data_template(data_deviceCode);
        // load_data('Computer','Brand');
    });

    function device_load_data_template(data_deviceCode)
    {
        $.ajax({
            url:"/intsys/itassetpro/device/device_load_data_detail",
            method:"POST",
            data:{data_deviceCode:data_deviceCode},
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
                            <input type="text" id="input_`+data[i].inputmascode+`" name="inputvalue_`+data[i].linenum+`" value="`+data[i].inputvalue+`" class="form-control">`;
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

                            // load_data(data[i].templatename,data[i].inputname);
                            
                            // load_data('Computer','Brand');

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
                }
                $('#device_show_datatemplate').html(output);
            }
        });
    }


    function load_data(dv_templatename,dv_inputname)
    {
        $.ajax({
            url:"/intsys/itassetpro/device/load_data",
            method:"POST",
            data:{dv_templatename:dv_templatename,dv_inputname:dv_inputname},
            beforeSend:function(){},
            success:function(res){
                console.log(JSON.parse(res));
            }
        });
    }
</script>