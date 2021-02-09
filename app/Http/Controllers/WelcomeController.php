<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WelcomeController extends Controller
{
    private $produtos;
    private $totalPage = 10;
    
    public function __construct(Produto $produtos)
    {
        $this->produtos = $produtos;
    }

    public function index()
    {
        $vitrine = $this->produtos->paginate($this->totalPage);
        return view('welcome', compact('vitrine'));
    }
}
