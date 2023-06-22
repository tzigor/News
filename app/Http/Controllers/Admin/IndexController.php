<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request): View
    {
        // dd($request->getPathInfo());
        if ($request->getPathInfo() == "/admin/getData") {
            return view('admin.getData');
        }
        return view('admin.index');
    }
}
