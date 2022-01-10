<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PegawaiRequest;
use App\Service\PegawaiInterfaceService;


class PegawaiController extends Controller
{
    protected $pegawaiService;

    public function __construct(PegawaiInterfaceService $pegawaiService)
    {
        $this->pegawaiService = $pegawaiService;
    }

    public function index()
    {
        $data = $this->pegawaiService->get();
        return response()->json([
            "message" => "success get Pegawai",
            "data" => $data
        ], 200);
    }

    public function store(PegawaiRequest $request)
    {

        $data = $this->pegawaiService->add($request->all());

        return response()->json([
            "message" => "success create pegawai",
            "data" => $data,
        ], 200);
    }
}
