<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function telegram(Request $request)
    {
        $arr = $request->except('_token');
        $txt = null;
        return view('pages.telegram', compact('arr', 'txt'));
    }
}
