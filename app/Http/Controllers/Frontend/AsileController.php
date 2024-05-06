<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Asile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAsileRequest;

class AsileController extends Controller
{
    public function getAsile(Request $request)
    {
        return view('asiles.get-asile');
    }
    public function storeAsileDemand(StoreAsileRequest $request)
    {
        Asile::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'phone' => $request->phone,
            'email' => $request->email,
            'from' => $request->from,
            'to' => $request->to,
        ]);
        return to_route('thankyou');
    }
}
