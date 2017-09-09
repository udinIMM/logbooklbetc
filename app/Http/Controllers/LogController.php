<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

Use Uuid;
use App\Log;
use Carbon\Carbon;

class LogController extends Controller
{
    private function validation($request)
    {
         $messagesError = [
            'judul.required' => 'Judul tidak boleh kosong',
            'isi.required' => 'Isi tidak boleh kosong',
            ];

        $validator = Validator::make($request->all(), [
                'judul' => 'required',
                'isi' => 'required',
            ], $messagesError);

        return $validator;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('log.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('log.create');
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

      $log = new Log;
      $log->id = Uuid::generate();
      $log->judul = $request->judul;
      $log->isi = $request->lecturer;
      $log->status = "Unverified";
      $log->tanggal = $mytime->toDateTimeString();

      if($log->save())
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
    public function edit(log $log)
    {
        $logbook = logs::findorfail($logs);
        return view ('log.edit',compact('logbook'));

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
