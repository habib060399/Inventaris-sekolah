<?php

namespace App\Http\Controllers;


use Illuminate\Routing\Controller as BaseController;

class ControllerIndex extends BaseController
{
    public function index()
    {
        $hidden = request()->session()->get('hidden');
        // dd($komen);
        // dd($komen2);
        $level = request()->session()->get('level');
        if ($level === 1 || $level === 2) {

            $data = array(
                'hidden' => $hidden,
            );

            return view('index', $data);
        } else {
            return redirect('/logout');
        }
    }
}
