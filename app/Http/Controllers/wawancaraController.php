<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Candidate;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class wawancaraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $myString = auth()->user()->email;
        // $uid = auth()->user()->id;

        // // $idu = $request->iduser;

        // $corpId = Auth::user()->corp->id;
        // // dd(Auth::user()->corp->id);
        // $kandidat = Candidate::whereHas('apply_jobs', function($q)
        // use ($corpId){
        //     $q->whereHas('jobs', function ($q)
        //     use($corpId){
        //         $q->where('corp_id', $corpId);
        //     });
        // })
        // ->with(['apply_jobs' => function ($q){
        //     $q->with('user.skill', 'user.education')
        //     ->with(['jobs' => function ($q){
        //     }])
        //     ->with(['corp' => function ($q){
        //     }

        //     ]);
        // }])
        // ->get();
        // // dd($kandidat);
        // return view('vacancy.wawancara', compact('kandidat'));
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
    public function edit(Request $request, $id)
    {
        //
        // $kandidat = Candidate::where('user_id', Auth::user()->id)->get();
        $myString = auth()->user()->email;
        $uid = auth()->user()->id;

        // $idu = $request->iduser;

        $corpId = Auth::user()->corp->id;
        // dd(Auth::user()->corp->id);
        $kandidat = Candidate::whereHas('apply_jobs', function($q)
        use ($corpId){
            $q->whereHas('jobs', function ($q)
            use($corpId){
                $q->where('corp_id', $corpId);
            });
        })
        ->with(['apply_jobs' => function ($q){
            $q->with('user.skill', 'user.education')
            ->with(['jobs' => function ($q){
            }])
            ->with(['corp' => function ($q){
            }

            ]);
        }])
        ->where('id', $id)
        ->get();
        // dd($kandidat);
        // var_dump($kandidat);
        // return view('vacancy.wawancara', compact('kandidat'));
        return view('vacancy.wawancara', compact('kandidat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Candidate $kandidat)
    {
        //
        $request->validate([

            'wawancara' => 'required',
            ], [
                    'wawancara.required' => 'Lengkapi Nama Perusahaan Anda',
        ]);



        $kandidat->wawancara = $request->wawancara;
        $kandidat->update();

        try{
            Mail::send('email.email', ['name' => $request->name, 'wawancara' => $request->wawancara, 'nama_corp' => $request->nama_corp], function ($message) use ($request)
            {
                $message->subject($request->judul);
                $message->from('nisafadilah646@gmail.com', 'LowkerJogja.com');
                $message->to($request->email);
            });
            return back()->with('alert-success','Berhasil Kirim Email');
        }
        catch (Exception $e){
            return response (['status' => false,'errors' => $e->getMessage()]);
        }

        
        Alert::success('Berhasil', 'Data telah terubah');
        // return view('vacancy.profilCandidate', compact('kandidat'));
        return redirect('/profilCandidate'.$kandidat->id);
        // return back();
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

    // public function email($id){

    //     $myString = auth()->user()->email;
    //     $uid = auth()->user()->id;

    //     // $idu = $request->iduser;

    //     $corpId = Auth::user()->corp->id;
    //     // dd(Auth::user()->corp->id);
    //     $kandidat = Candidate::whereHas('apply_jobs', function($q)
    //     use ($corpId){
    //         $q->whereHas('jobs', function ($q)
    //         use($corpId){
    //             $q->where('corp_id', $corpId);
    //         });
    //     })
    //     ->with(['apply_jobs' => function ($q){
    //         $q->with('user.skill', 'user.education')
    //         ->with(['jobs' => function ($q){
    //         }])
    //         ->with(['corp' => function ($q){
    //         }

    //         ]);
    //     }])
    //     ->where('id', $id)
    //     ->get();
    //     return view('vacancy.sendWawancara', compact('kandidat'));
    // }

    // public function sendEmail(Request $request){
    //     // $myString = auth()->user()->email;
    //     // $uid = auth()->user()->id;

    //     // // $idu = $request->iduser;

    //     // $corpId = Auth::user()->corp->id;
    //     // $kandidat = Candidate::whereHas('apply_jobs', function($q)
    //     // use ($corpId){
    //     //     $q->whereHas('jobs', function ($q)
    //     //     use($corpId){
    //     //         $q->where('corp_id', $corpId);
    //     //     });
    //     // })
    //     // ->with(['apply_jobs' => function ($q){
    //     //     $q->with('user.skill', 'user.education')
    //     //     ->with(['jobs' => function ($q){
    //     //     }])
    //     //     ->with(['corp' => function ($q){
    //     //     }

    //     //     ]);
    //     // }])
    //     // ->where('id', $id)
    //     // ->get();

    //     try{
    //         Mail::send('email.email', ['name' => $request->name, 'wawancara' => $request->wawancara, 'nama_corp' => $request->nama_corp], function ($message) use ($request)
    //         {
    //             $message->subject($request->judul);
    //             $message->from('nisafadilah646@gmail.com', 'LowkerJogja.com');
    //             $message->to($request->email);
    //         });
    //         return back()->with('alert-success','Berhasil Kirim Email');
    //     }
    //     catch (Exception $e){
    //         return response (['status' => false,'errors' => $e->getMessage()]);
    //     }


    // }
}