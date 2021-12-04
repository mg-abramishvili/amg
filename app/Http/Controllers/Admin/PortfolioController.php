<?php

namespace App\Http\Controllers\Admin;

use App\Models\Portfolio;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolio = Portfolio::all();
        return view('admin.portfolio.index', compact('portfolio'));
    }

    public function create()
    {
        return view('admin.portfolio.create');
    }
    
    public function edit($id)
    {
        $portfolioItem = Portfolio::find($id);
        return view('admin.portfolio.edit', compact('portfolioItem'));
    }

    public function item($id)
    {
        return $portfolioItem = Portfolio::find($id);
    }
}
