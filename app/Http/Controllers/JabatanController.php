<?php

namespace App\Http\Controllers;
use App\Jabatan;
use Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Form;
use View;
use Html;
use DB;
use Alert;
use Validator;
use Input;
use Redirect;

class JabatanController extends Controller
{
     
    
    public function index()
    {
        $jabatans=Jabatan::all();
        return view('jabatans.index',compact('jabatans'));
    }

     public function create()
    {
        $jabatans=Jabatan::all();
        return view('jabatans.create',compact('jabatans'));
        $carikode = mysqli_query("select max(id)as Kode_jabatan from jabatans") or die (mysql_error());
  // menjadikannya array
    $tm_cari=mysql_fetch_array($carikode);
    $Kode_jabatan=substr($tm_cari['Kode_jabatan'],1,4);

    $tambah=$Kode_jabatan+1;
    if($tambah<10){
        $id="JB000".$tambah;
    }else{
        $id="JB00".$tambah;
    }
    }

    public function store(Request $request)
    {
        $jabatans=Request::all();
        Jabatan::create($jabatans);
        return redirect('jabatans');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jabatans=Jabatan::find($id);
        return view('jabatans.show',compact('jabatans'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jabatans=Jabatan::find($id);
        return view('jabatans.edit',compact('jabatans'));
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
        $jabatansUpdate=Request::all();
        $jabatans=Jabatan::find($id);
        $jabatans->update($jabatansUpdate);
        return redirect('jabatans');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Jabatan::find($id)->delete();
        return redirect('jabatans');
    }


}
