<?php

namespace App\Http\Controllers;

use DB;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $messages =  DB::table('messages')->get(); //trae todos los registros de la tabla
        return view('messages.index', compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('messages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) //guarda los mensajes en la base de datos.
    {
        DB::table('messages')->insert([
              "nombre" => $request->input('nombre'),
              "email" => $request->input('email'),
              "mensaje" => $request->input('Mensaje'),
              "created_at" => Carbon::now(),

        ]);
        return redirect()->route('messages.index');
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

        $message = DB::table('messages')->where('id' , $id)->first();
        return view('messages.show', compact('message'));

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

         $message = DB::table('messages')->where('id' , $id)->first();

        return view('messages.edit', compact('message'));
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
        DB::table('messages')->where('id', $id)->update([
                "nombre" => $request->input('nombre'),
              "email" => $request->input('email'),
              "mensaje" => $request->input('Mensaje'),
             
              "updated_at"=> Carbon::now(),


                    ]);
        return redirect()->route('messages.index');
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
        DB::table('messages')->where('id', $id)->delete();
        return redirect()->route('messages.index');
    }
}
