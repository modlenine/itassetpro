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
                    <h2 class="h3 mb-0"><i class="icon-copy dw dw-file-47"></i> <?php echo $title; ?></h2>
                </div>
                <div class="card-box pb-10">

                    <!-- <div class="h5 pd-20 mb-0">Details</div>
                    <div class="row pd-20">
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label>col-md-4</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div> -->

                    <?php getTemplateform($this->uri->segment(3)); ?>

                </div>
            </div>
        </div>


    </form>

    <script type="text/javascript">

       
    </script>

</body>
</html>