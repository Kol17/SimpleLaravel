<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreComputerRequest;
use App\Http\Requests\UpdateComputerRequest;
use App\Models\Computer;
use Illuminate\Http\Request;

class ComputerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $computers = Computer::all();
        return view('computer.index',compact('computers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('computer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreComputerRequest $request)
    {
        $computer = new Computer();
        $computer->name = $request->name;
        $computer->price = $request->price;
        $computer->desc = $request->desc;
        $computer->save();
        return redirect()->route('computer.index');
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
        $computer = Computer::find($id);
        return view('computer.edit',compact('computer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateComputerRequest $request, $id)
    {
        // $request->validate([
        //     'name'=>"required|unique:computers,name,$id",
        //     'price'=>"required",
        //     'desc'=>"required"
        // ]);
        $computer = Computer::find($id);
        $computer->name = $request->name;
        $computer->price = $request->price;
        $computer->desc = $request->desc;

        $computer->update();
        return redirect()->route('computer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $computer = Computer::find($id);
        if($computer){
            $computer->delete();
        }
        return redirect()->route('computer.index');
    }
}
