<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function telegram(ContactRequest $request)
    {
        $arr = $request->except('_token');
        $txt = null;
        return view('pages.telegram', compact('arr', 'txt'));
    }
}
