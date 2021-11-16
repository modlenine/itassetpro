<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title><?php echo $title; ?></title>
</head>
<style>
    .card-box-cus:hover{
        transform: scale(1.05);
        box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
    }
    .card-box-cus{
        transition: .3s transform cubic-bezier(.155,1.105,.295,1.12),.3s box-shadow,.3s -webkit-transform cubic-bezier(.155,1.105,.295,1.12);
        cursor: pointer;
    }
</style>
<body>

    <form name="frm_main" method="post" enctype="multipart/form-data">
        <div class="main-container">
            <div class="xs-pd-20-10 pd-ltr-20">
                <div class="title pb-20">
                    <h2 class="h3 mb-0"><i class="icon-copy dw dw-file-47"></i> Create Template
                        <a herf="#" class="dropdown-toggle no-arrow" data-toggle="modal" data-target="#ModalTemplate" type="button">
                            <span class="icon-copy dw dw-add text-blue"></span>
                        </a>
                    </h2>
                </div>

                <?php echo loadDataTemplateCreate(); ?>


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

       
    </script>


</body>
</html>