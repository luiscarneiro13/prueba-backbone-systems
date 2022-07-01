<?php

namespace App\Http\Controllers;

use App\DataEntity;
use App\Http\Resources\DataEntityResource;
use Illuminate\Http\Request;

class DataEntityController extends Controller
{
    public function index($zipCode)
    {
        try {
            $data = DataEntity::where('zip_code', $zipCode)->get();
            return response()->json(new DataEntityResource($data));
        } catch (\Throwable $th) {
            return $th;
            return response()->view('errors.404', [], 404);
        }
    }
}
