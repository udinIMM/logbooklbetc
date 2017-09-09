<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class PesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=DB::table('users')->join('laboratorium','users.laboratorium_id','=','laboratorium.id')->get();
        return view('peserta.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('peserta.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $this->validation($request);

        if($validator->fails())
        {
            return Redirect::to($request->url().'/create')
                ->withErrors($validator)->withInput();
        }
  
        $mytime = Carbon::now();
  
        $usr = new Users;
        $usr->id = Uuid::generate();
        $usr->judul = $request->judul;
        $usr->isi = $request->lecturer;
  
        if($usr->save())
        {
            return Redirect::to($request->url());
        }
        else
        {
            return Redirect::to($request->url().'/create');
        }
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
    public function edit(users $users)
    {
        $usr = users::findorfail($users);
        return view ('peserta.edit',compact('usr'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, users $users)
    {
        $usr = users::findorfail($users);
        $usr->update($request->all());
        return redirect('/peserta');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(users $users)
    {
        $usr = users::findorfail($users);
        $usr->delete();
        return redirect('/peserta');

    }
}
