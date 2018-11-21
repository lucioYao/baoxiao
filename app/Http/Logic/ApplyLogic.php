<?php

namespace App\Http\Logic;

use  App\Http\Model\ApplyModel;

class ApplyLogic extends BaseLogic{

    private $applyModel;

    function __construct(ApplyModel $applyModel)
    {
        $this->applyModel = $applyModel;
    }
    function store($userCode,$type){
        $insertBool = $this->applyModel->store($userCode,$type);
        return $insertBool;
    }
}
