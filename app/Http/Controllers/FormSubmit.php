<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;
use Auth;
use App\Pinjam;
use App\Peralatan;

class FormSubmit extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=Auth::user();
        $id=$user->id;
        
        $pinjam=DB::table('pinjam')
            ->join('users','pinjam.user_id','=','users.id')
            ->join('peralatan','peralatan.id','=','pinjam.peralatan_id')
            ->where('user_id',$id)
            ->groupby('pinjam.pinjam_id')
            ->distinct('pinjam.pinjam_id')
            ->orderBy ('pinjam.pinjam_id')

            ->get();
            //dd($pinjam);
           //flash('welcome');
        return view ('permohonan.permohonanform',compact('pinjam'));


    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user=Auth::user();
        // $id=$user->id;
        
        $pinjam=DB::table('pinjam')
            ->join('users','pinjam.user_id','=','users.id')
            ->join('peralatan','peralatan.id','=','pinjam.peralatan_id')
            ->groupby('peralatan.peralatanjenis')
            ->distinct('peralatan.peralatanjenis')
            ->orderBy ('peralatan.peralatanjenis')

            ->get();
            // dd($pinjam);
            
        return view ('permohonan.mohonbaru',compact('pinjam'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $peralatan_id = $request -> peralatan_id;
        $quantiti = $request -> quantiti;
        $pinjamsebab = $request -> pinjamsebab;
        $tarikhmula = $request -> tarikhmula;
        $tarikhakhir =$request -> tarikhakhir;

        $pinjam = new Pinjam;
        $pinjam -> user_id = Auth::user() -> id;

        $pinjam -> peralatan_id = $peralatan_id;
        $pinjam -> quantiti = $quantiti;
        $pinjam -> pinjamsebab = $pinjamsebab;
        $pinjam -> tarikhmula = $tarikhmula;
        $pinjam -> tarikhakhir = $tarikhakhir;
        $pinjam -> pinjamstatus ="diproses";

        $time=time();
        $rujukan= date("ymdHis",$time);
        $pinjam -> pinjam_id ="BPTM".$rujukan;
        
        $pinjam -> save();

       
        // $pinjam1=Pinjam::find($pinjam->id);
   
        // $pinjam1 -> save();
        // dd($pinjam1);


        return redirect('permohonan'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pinjam=DB::table('pinjam')
                     ->join('peralatan','pinjam.peralatan_id','=','peralatan.id')
                     ->where('pinjam.pinjam_id','like',$id)
                        
                     ->get();



                   
        // $peralatan2=Peralatan::find($peralatan -> peralatan_id);
        // $peralatan =Peralatan::find(Pinjam::find($id)-> peralatan_id);
        
        // $pinjam=DB::table('pinjam')
        //     ->join('peralatan.id','=','pinjam.peralatan_id')
        //     ->where('pinjam.pinjam_id',$id)
        //     ->get();


        //dd($pinjam);


        return view('permohonan.senaraipinjam',compact('pinjam'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pinjam = Pinjam::find($id);
        $peralatan = Peralatan::All();
   //dd($pinjam); 
        return view('permohonan.permohonanedit',compact('pinjam','peralatan')); 

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
        // $staff = Auth::user();
         dd($id);
        $pinjam = Pinjam::find($id);

        $pinjam-> update($request->all());
        // dd($pinjam);
        return redirect('/permohonan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //dd($id);

        $pinjam = DB::table('pinjam')->where('pinjam_id',$id)->delete();
        //dd($pinjam);
       

        flash() -> overlay('Post Deleted successfully !!','danger');
        return redirect('permohonan');

    }
}
