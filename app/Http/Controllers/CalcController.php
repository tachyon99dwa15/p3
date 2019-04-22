<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{
    public function calculate(Request $request)
    {
        return view('calculator')->with([
            'length' => $request->session()->get('length', ),
            'width' => $request->session()->get('width', ),
            'round' => $request->has('round', false),
            'area' => $request->session()->get('area', ),
            'perimeter' => $request->session()->get('perimeter', ),
            'Type_of_Calculation' => $request->session()->get('Type_of_Calculation', )
        ]);
    }

    public function calculateProcess(Request $request)
    {
        $request->validate([
            'length' => 'required|numeric',
            'width' => 'required|numeric',
        ]);

        $length = (float)$request->input('length');
        $width = (float)$request->input('width');

        $Type_of_Calculation = $request->input('Type_of_Calculation');
        $area = $length * $width;
        $perimeter = 2 * $length + 2 * $width;

        if ($request->input('round')) {
            $area = round($area);
            $perimeter = round($perimeter);
        }

        return redirect('calculator')->with([
            'length' => $length,
            'width' => $width,
            'round' => $request->has('round'),
            'area' => $area,
            'perimeter' => $perimeter,
            'Type_of_Calculation' => $Type_of_Calculation
        ]);
    }

}
