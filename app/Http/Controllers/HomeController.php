<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    private $produtos;
    private $totalPage = 10;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Produto $produtos)
    {
        $this->middleware('auth');
        $this->produtos = $produtos;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $title = "Dashboard";
        $produtos = $this->produtos->paginate($this->totalPage);
        return view('home', compact('produtos', 'title'));
    }
    
}
