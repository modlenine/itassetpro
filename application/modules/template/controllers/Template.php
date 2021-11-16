
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set("Asia/Bangkok");
        $this->load->model('Template_model');
    }


	public function index()
	{
        $data = array(
            "title" => "Template"
        );
        getHead();
        getSidebar();
        getNavbar();
        getContent("index", $data);
        getFooter();
	}

    public function main()
    {
        $data = array(
            "title" => "Template Main"
        );
        getHead();
        getSidebar();
        getNavbar();
        getContent("main", $data);
        getFooter();
    }

    public function saveTemplate()
    {
        $this->Template_model->saveTemplate();
    }

    public function lists()
    {
        $data = array(
            "title" => "Template List"
        );
        getHead();
        getSidebar();
        getNavbar();
        getContent("lists", $data);
        getFooter();
    }



    public function create()
    {
        $data = array(
            "title" => "Create template"
        );
        getHead();
        getSidebar();
        getNavbar();
        getContent("create", $data);
        getFooter();
    }

    public function add_device($tempId)
    {
        $data = array(
            "title" => "Add a new device"
        );

        getHead();
        getSidebar();
        getNavbar();
        getContent("add_device", $data);
        getFooter();
    }

    

    public function getTemplatemain()
    {
        $this->Template_model->getTemplatemain();
    }




}