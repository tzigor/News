<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class GetDataController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function getData(Request $request): View
    {
        return view('getData.getData');
    }

    public function store(Request $request)
    {
        dd($request->query());
        return response()->json();
    }
}
