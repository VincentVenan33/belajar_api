<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmployesRequest;
use App\Models\Employes;
use Illuminate\Http\Request;
use App\Http\Services\EmployesService;

class EmployesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(EmployesService $employesService)
    {
        $employes = $employesService->getAllEmployes();

        return response()->json($employes, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmployesRequest $request, EmployesService $employesService)
    {
        $employes = $employesService->storeEmploye($request->all());

        return response()->json($employes, 201);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employes  $employes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employes $employes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employes  $employes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employes $employes)
    {
        //
    }
}