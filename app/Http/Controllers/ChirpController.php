<?php
namespace App\Http\Controllers;
use Illuminate\View\View;
class ChirpController extends Controller
{
    /**
     * Display a listing of the resource. [tl! add:-1,7]
     */
    public function index(): View
    {
        return view('chirps', [
            //
        ]);
    }
}
