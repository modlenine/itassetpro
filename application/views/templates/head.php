<!-- Site favicon -->
<!-- <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets'); ?>/vendor/images/favicon.ico"> -->

<!-- Mobile Specific Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<!-- CSS -->
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendors/styles/core.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendors/styles/icon-font.min.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/src/plugins/fancybox/dist/jquery.fancybox.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/src/plugins/datatables/css/dataTables.bootstrap4.min.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/src/plugins/datatables/css/responsive.bootstrap4.min.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendors/styles/style.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendors/styles/custom.css?v='.filemtime('./assets/vendors/styles/custom.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/src/plugins/sweetalert2/sweetalert2.css')?>">



<script src="<?= base_url('assets/vendors/jquery/jquery_3.6.min.js?v='.filemtime('./assets/vendors/jquery/jquery_3.6.min.js')); ?>"></script>
<!-- DropZone -->
<!-- <link rel="stylesheet" type="text/css" href="<?= base_url('assets'); ?>/src/plugins/dropzone/src/dropzone.css"> -->

<!-- icon micon -->
<!-- <link rel="stylesheet" href="<?= base_url('assets'); ?>/asset/micon/css/micon.min.css"> -->


<!-- Date picker -->
<!-- <script src="<?=base_url()?>assets/dist/zebra_datepicker.min.js"></script>
<link rel="stylesheet" href="<?=base_url()?>assets/dist/css/default/zebra_datepicker.min.css" type="text/css" /> -->

<style>
    /* tfoot {
        display: table-header-group;
    } */
    th { 
        font-size: 12px;
        white-space: nowrap; 
    }
    td { 
        font-size: 12px; 
    }
    table.dataTable tbody th, table.dataTable tbody td {
        padding: 8px 2px;
    }
    .dataTables_filter {
        display: none;
    }
    .dataTables_length {
        display: none;
    }
    .left-side-bar {
        background: #00a1ff;
    }

    a.disabled {
        pointer-events: none;
        cursor: default;
    }

</style>

<?=getModal("template/modal/add_deviceobject_modal")?>
<?=getModal("template/modal/create_template_modal")?>