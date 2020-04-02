<?php

namespace App\Services;

use App\Services\Filters\CieloFilter;
use Illuminate\Http\Request;

/**
 * Class CieloService
 * @package App\Services
 */
class CieloService
{

    /**
     * @param Request $request
     * @return array|string
     */
    public function createPayment(Request $request){
        $data = (new CieloFilter())->dataFilterJson($request->post('data'));
        return $data;
    }

}
