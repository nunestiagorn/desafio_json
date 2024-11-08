<?php

namespace App\Http\Controllers;

use App\Http\Requests\DealRequest;
use App\Services\RDStationService;

class DealController extends Controller
{
    protected $rdStationService;

    public function __construct(RDStationService $rdStationService)
    {
        $this->rdStationService = $rdStationService;
    }
    
    public function createDeal(DealRequest $request)
    {
        $result = $this->rdStationService->sendDealToRDStation($request->all());

        return response()->json($result);
    }
}
