<?php

namespace App\Http\Controllers;

use App\Models\Surve;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data5 = Surve::where('q2','5')
                        ->count();
        $data4 = Surve::where('q2','4')
                        ->count();
        $data3 = Surve::where('q2','3')
                        ->count();
        $data2 = Surve::where('q2','2')
                        ->count();
        $data1 = Surve::where('q2','1')
                        ->count();
        // dd($data1,$data2,$data3,$data4,$data5);
        return view('home.index',compact('data1','data2','data3','data4','data5'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'saran' => 'required',
            'q1' => 'required',
            'q2' => 'required',
            'q3' => 'required',
            'q4' => 'required',
            'q5' => 'required',
        ]);

        $surve = new Surve();
        $surve->name = $request->name;
        $surve->saran = $request->saran;
        $surve->q1 = $request->q1;
        $surve->q2 = $request->q2;
        $surve->q3 = $request->q3;
        $surve->q4 = $request->q4;
        $surve->q5 = $request->q5;
        $surve->save();

        return redirect()->back();
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
