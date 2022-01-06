
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Device extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set("Asia/Bangkok");
        $this->load->model("device_model" , "device");
    }


	public function index()
	{
        // $data = array(
        //     "pagename" => $pagename
        // );
		// getHead();
        // getContent("device/devicepage" , $data);
        // getFooter();
        echo 'test 22';
	}

    public function page($pagename)
    {
        $data = array(
            "pagename"=>$pagename
        );
        getHead();
        getSidebar();
        getNavbar();
        getContent("devicepage",$data);
        getFooter();
    }

    /// 09-11-2564 ///

    public function detail($devicecode)
    {
        $data = array(
            "devicecode"=>$devicecode
        );
        getHead();
        getSidebar();
        getNavbar();
        getContent("devicedetail",$data);
        getFooter();
    }

    public function load_datatableComputer()
    {
        $this->device->load_datatableComputer();
    }

    public function getListComputerDevice()
    {
        $this->device->getListComputerDevice();
    }

    /// 09-11-2564 ///


    public function loadTemplateFormDb()
    {
        $this->device->loadTemplateFormDb();
    }


    public function device_loadtemplate_list()
    {
        $this->device->device_loadtemplate_list();
    }

    public function device_load_data_template()
    {
        $this->device->device_load_data_template();
    }

    public function device_load_data_detail()
    {
        $this->device->device_load_data_detail();
    }


    public function save_create_device()
    {
        $this->device->save_create_device();
    }


    public function testarray()
    {
        $nownum = 2;//เลขปัจจุบัน
        $array = [1,2,3,4,5,6,7,8,9];//เลขทั้งหมดในรูปแบบ array
        $result = array_search($nownum , $array); //หาตำแหน่งเลขปัจจุบันใชุด array ว่าอยู่ที่ตำแหน่งที่เท่าไร
        $targetIndex = $result -1; //ต้องการลดตำแหน่งของเลขปัจจุบัน 1 ตำแหน่ง

        // $movearray = moveElementInArray($array, $result, $targetIndex);
        echo "เลขทั้งหมด : ";
        print_r($array);

        echo "<br>";

        echo "ตำแหน่งปัจจุบันของ 2 คือ ( result ): ";
        print_r($result);

        echo "<br>";

        echo "ตำแหน่งของ 2 เมื่อลดลง1คือ ( targetIndex ): ";
        print_r($targetIndex);

        echo "<br>";
        // print_r($movearray);

        $tmp = array_splice($array, $result, 1);//$array = ชุดตัวเลขทั้งหมด , $result = ตำแหน่ง array ของ 2 คือ [1] , length 1
        // $tmp คือการไปหยิบเอา เลข 2 มาแค่ตำแหน่งเดียวจะได้ array = [0]=>2

        array_splice($array, $targetIndex, 0 , $tmp);//$array = ชุดตัวเลข , $targetIndex = ตำแหน่งใหม่ของเลข 2 ที่ลดลง 1 ตำแหน่งเดิมคือ 1 ลดลงคือ 0
        $output = $array;
        echo "ผลลัพท์จากการ Splice (tmp): ";
        print_r($tmp);
        echo "<br>";
        echo "ผลลัพท์หลังจากย้าย Array แล้ว ";
        print_r($output);
    }

    public function load_data()
    {
        $this->device->load_data();
    }

    


}


?>