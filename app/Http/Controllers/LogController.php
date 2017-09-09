<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

Use Uuid;
use App\Log;
use Carbon\Carbon;
use DB;

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
        $log=DB::table('log')->join('users','log.users_id','=','users.id')->get();
        return view('log.index',compact('log'));
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

      $logs = new Log;
      $logs->id = Uuid::generate();
      $logs->judul = $request->judul;
      $logs->isi = $request->lecturer;
      $logs->status = "Unverified";
      $logs->tanggal = $mytime->toDateTimeString();

      if($logs->save())
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
        $logs = log::findorfail($log);
        return view ('log.edit',compact('logs'));
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
    public function destroy(log $log)
    {
        $logs = log::findorfail($log);
        $logs->delete();
        return redirect('/log');
    }
}
