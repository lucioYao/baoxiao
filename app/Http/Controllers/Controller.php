<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    //接口response状态值
    protected $apiResult = true;

    //接口client状态(1正常状态)
    protected  $apiStatus = 1;

    //接口提示信息
    protected $apiMessage = '';
    //返回json对象
    protected function initRes($data = ''){
        return array(
            'result' => $this->apiResult,
            'status' => $this->apiStatus,
            'reData' => $data,
            'message' => $this->apiMessage
        );
    }

}
