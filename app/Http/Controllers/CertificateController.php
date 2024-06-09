<?php

namespace App\Http\Controllers;

use App\Models\Boxposition;
use FontLib\Table\Type\post;
use Illuminate\Http\Request;
use PDF;
use function Symfony\Component\String\b;

class CertificateController extends Controller
{
    public function certificateshow()
    {

        return view('template.certificate');
    }


    public function certificateusershow()
    {

        $position =Boxposition::query()->where('id', 1 )->get();
        return view('certificatuser',compact('position'));
    }

    public function certificteposition(Request $request)
    {
        $getdata = [
            'name_position' => $request->get('name_position'),
            'title_position' => $request->get('title_position'),
            'date_position' => $request->get('date_position')
        ];


        Boxposition::query()->where('id', 1)->create($getdata);

        return back();
    }

    public function PDF(){
        $getdata = Boxposition::query()->get();
        $pdf = PDF::loadView('template.certificate', $getdata);
        return $pdf->stream('document.pdf');


    }


}

