<?php

namespace Modules\NavigatePanel\Http\Controllers\Ext;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Lej\Http\Controllers\Controller;

class NavigatePanelController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $resultData = [];
        return $this->resultData($resultData);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        return $this->resultSuccess('Created', ['other' => 'data']);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $resultData = [];
        return $this->resultData($resultData);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        return $this->resultSuccess('Updated', ['update' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        return $this->resultSuccess('Updated', ['update' => $id]); // or $this->resultError('errMsg', ['field' => 'errMsg'])
    }
}
