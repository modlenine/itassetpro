<?php
class loginfn{
    private $ci;
    function __construct()
    {
        date_default_timezone_set("Asia/Bangkok");
        $this->ci =&get_instance();
    }

    function loginci()
    {
        return $this->ci;
    }
}


function lfn()
{
    $obj = new loginfn();
    return $obj->loginci();
}



function getUser()
{
    lfn()->load->model("login/login_model" , "login");
    return lfn()->login->getuser();
}


function linkImg($img)
{
    if ($img != "") {
        $linkimg = $img;
    } else {
        $linkimg = "defualt.jpg";
    }
    $link = "http://intranet.saleecolour.com/intsys/usermanagement/uploads/$linkimg";
    return $link;
}






?>