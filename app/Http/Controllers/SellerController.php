<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    /**
     * Display a listing of the sellers.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sellers = Seller::all();

        return view('index', compact('sellers'));
    }

    /**
     * Show the step One form for creating a new seller.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStepOne(Request $request)
    {
        $seller = $request->session()->get('seller');

        return view('create-step-one', compact('seller'));
    }

    /**
     * Post request to store step One info in session
     *
     * @return \Illuminate\Http\Response
     */
    public function postCreateStepOne(Request $request)
    {

        //dd($request);
        $validatedData = $request->validate([
            'first_name' => 'required|unique:sellers',
            'last_name' => 'required',
            'category_content' => 'nullable',
            'portfolio' => 'nullable',
            'portfolio_content' => 'nullable',
            'online_store' => 'required',
            'stores_desc' => 'nullable'
        ]);

        //dd($validatedData);
        if(empty($request->session()->get('seller'))){
            $seller = new Seller();
            $seller->fill($validatedData);
            $request->session()->put('seller', $seller);
        }else{
            $seller = $request->session()->get('seller');
            $seller->fill($validatedData);
            $request->session()->put('seller', $seller);
        }

        return redirect()->route('sellers.create.step.two');
    }


    /**
     * Show the step 2 Form for creating a new seller.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStepTwo(Request $request)
    {
        $seller = $request->session()->get('seller');

        return view('create-step-two',compact('seller'));
    }
  
    /**
     * Post step 2 new seller.
     *
     * @return \Illuminate\Http\Response
     */
    public function postCreateStepTwo(Request $request)
    {
        $validatedData = $request->validate([
            'quality_level' => '',
            'experience_level' => '',
            'business_level' => ''
        ]);
  
        $seller = $request->session()->get('seller');
        $seller->fill($validatedData);
        $request->session()->put('seller', $seller);

        //store in Sellers Table
        $seller->save();    

        $request->session()->forget('seller');
  
  
        return redirect()->route('sellers.create.step.three');
    }




    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStepThree(Request $request)
    {
        $seller = $request->session()->get('seller');
        //dd($seller);
  
        return view('create-step-three',compact('seller'));
    }
  
    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function postCreateStepThree(Request $request)
    {   
        
        $seller = $request->session()->get('seller');
        dd($seller);
        $seller->save();
  
        $request->session()->forget('seller');
  
        return redirect()->route('sellers.index');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
