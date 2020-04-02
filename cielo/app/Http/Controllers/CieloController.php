<?php

namespace App\Http\Controllers;

use App\Services\CieloService;
use Illuminate\Http\Request;

/**
 * Class CieloController
 * @package App\Http\Controllers
 */
class CieloController extends Controller
{
    /**
     * @param Request $request
     * @return array|string
     */
    public function createPayment(Request $request){
        $pagarmeService = new CieloService();
        return $pagarmeService->createPayment($request);
    }

}
