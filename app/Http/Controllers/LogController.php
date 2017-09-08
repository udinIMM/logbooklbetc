<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

Use Uuid;
use App\Log_lbe;
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

      $log = new Log_lbe;
      $log->id_log = Uuid::generate();
      $log->judul_log = $request->judul;
      $log->isi_log = $request->lecturer;
      $log->status_log = "Unverified";
      $log->tanggal_log = $mytime->toDateTimeString();

      if($log->save())
      {
          return Redirect::to($request->url())
      }
      else
      {
          return Redirect::to($request->url().'/create')
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