<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Logic\ApplyLogic;

class ApplyController extends Controller
{

    private $applyLogic;

    function __construct(ApplyLogic $applyLogic)
    {
        $this->applyLogic = $applyLogic;
    }


    public function store(Request $request){
        $name = $request->input('userCode','id100');
        $type = $request->input('type',1);
        if($this->applyLogic->store($name,$type)){
            return $this->initRes();
        }else{
            $this->apiResult = false;
            $this->apiMessage = '申请失败';
            return $this->initRes();
        }

    }
}
