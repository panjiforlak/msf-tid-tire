<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TireInventoryController extends Controller {
    /**
    * Display the tire inventory detail page ( static mockup ).
    *
    * @return \Illuminate\View\View
    */

    public function showDetail() {
        // Di sini kita bisa mensimulasikan data jika diperlukan,
        // tapi untuk static mockup, kita bisa hardcode di view.
        return view( 'tire-inventory' );
    }
}