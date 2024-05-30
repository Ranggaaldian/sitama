<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Support\Facades\DB;
use Psy\Util\Json;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        return view('home');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul_ta' => 'required'
        ]);

        $insert = new Home();
        $insert->mhs_nim = "3.34.22.0.24";
        $insert->ta_judul = $request->judul_ta;
        $insert->created_by = "13";
        $insert->created_at = now();
        $insert->verfied_by = "13";
        $insert->save();
        return redirect('/manage-dashboardmhs');
    }
}
