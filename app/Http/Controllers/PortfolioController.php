<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Portfolio;
 
class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portfolio = Portfolio::orderBy('created_at', 'DESC')->get();
        return view('portfolios.index', compact('portfolio'));
    }

    public function showPorto()
    {
        $portfolio = Portfolio::all();
        return view('user.index', compact('portfolio'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('portfolios.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Portfolio::create($request->all());
 
        return redirect()->route('portfolios')->with('success', 'Product added successfully');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $portfolio = Portfolio::findOrFail($id);
  
        return view('portfolios.show', compact('portfolio'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $portfolio = Portfolio::findOrFail($id);
  
        return view('portfolios.edit', compact('portfolio'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $portfolio = Portfolio::findOrFail($id);
  
        $portfolio->update($request->all());
  
        return redirect()->route('portfolios')->with('success', 'portfolios updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $portfolio = Portfolio::findOrFail($id);
  
        $portfolio->delete();
  
        return redirect()->route('portfolios')->with('success', 'product deleted successfully');
    }
}