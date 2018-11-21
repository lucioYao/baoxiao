<?php

namespace App\Http\Model;
use Illuminate\Support\Facades\DB;

class ApplyModel extends BaseModel{

    public function store($userCode,$type){
        $insData = array(
            'userCode' =>$userCode,
            'type' =>$type
        );
        return DB::table('apply_flow')->insert($insData);
    }
}
