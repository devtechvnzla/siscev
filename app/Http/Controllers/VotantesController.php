<?php

namespace App\Http\Controllers;

use App\Models\Votantes;
use App\Models\Personal;
use App\Models\Gerencias;
use App\Models\Votante1p10;
use App\Models\Personal1p10;
use Illuminate\Http\Request;

class VotantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $votantes = Votantes::get();
       return view ('admin.votantes.index', compact('votantes'));
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listado()
    {
       $votantes = Votantes::where('confirmed',1)
       ->get();

       return view ('admin.votantes.listado', compact('votantes'));
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function noejercidos()
    {
       $votantes = Votantes::where('confirmed',0)
       ->get();
       //dd($votantes);

       return view ('admin.votantes.novotos', compact('votantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function resultado()
    {
         return view ('admin.votantes.resultados');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function personal($id)
    {
      if ($id != 23) {
        $personal = Personal::where('status',1)
        ->where('gerencia_id',$id)
        ->get();
        return $personal;
      } else {
        $personal = Personal::where('status',2)
       ->where('gerencia_id',$id)
       ->get();
       return $personal;
      }


    }



   /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function gerencia($id)
    {
       $gerencias = Gerencias::where('ente_id',$id)->get();
       return $gerencias;
    }




    public function votante(Request $request)
    {

           if ($request->ente_id == 1)  {

            $voto = Votantes::where('gerencia_id',$request->estado_id)
           ->where('confirmed',1)
            ->where('ente_id', $request->ente_id)
           ->count();

            $Novoto = Votantes::where('gerencia_id',$request->estado_id)
           ->where('confirmed',0)
            ->where('ente_id', $request->ente_id)
           ->count();

           $gerencia = Gerencias::where('ente_id', $request->ente_id)
           ->find($request->estado_id);
            //dd($gerencia);
           $descripcion = $gerencia->descricion;


           return view('admin.votantes.resultados',compact('voto','Novoto','descripcion'));
           }
           else
           {

             $voto = Votantes::where('gerencia_id',$request->estado_id)
             ->where('ente_id', $request->ente_id)
           ->where('confirmed',1)
           ->count();

            $Novoto = Votantes::where('gerencia_id',$request->estado_id)
            ->where('ente_id', $request->ente_id)
           ->where('confirmed',0)
           ->count();

            $gerencia = Gerencias::where('ente_id', $request->ente_id)
           ->find($request->estado_id);
          //dd($gerencia);
           $descripcion = $gerencia->descricion;


           return view('admin.votantes.resultados',compact('voto','Novoto','descripcion'));
           }
     }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $votante =  Votantes::where('personal_id',$request->personal_id)->first();

        if ($votante->confirmed == $request->confirmed) {
            $notification = array(
                'message' => '¡Lo siento, acción no permitida!',
                'alert-type' => 'error'
            );
                 return redirect()->back()->with($notification);
        } else {
            $votante->gerencia_id = $request->gerencia_id;
            $votante->ente_id = $request->ente_id;
            $votante->personal_id = $request->personal_id;
            $votante->confirmed = $request->confirmed;
            $votante->save();
            $notification = array(
                'message' => '¡Ya ejerció el voto!',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Votantes  $votantes
     * @return \Illuminate\Http\Response
     */
    public function personal_p(Votantes $votantes)
    {
        $votantes = Votante1p10::get();
        //dd($votantes);

        return view ('admin.votantes.personal_p',compact('votantes'));
    }



     public function guardar(Request $request)
    {
        //dd($request);

        $votante = Votante1p10::where('personal_p_id',$request->personal_id)->count();


       if ($votante > 0) {

             $notification = array(
            'message' => '¡Persona ya está registrada vuelve a intentarlo!',
            'alert-type' => 'error'
        );
             return redirect()->back()->with($notification);
        }

        $votante = new Votante1p10();


       //$votante->gerencia_id = $request->gerencia_id;
       $votante->ente_id = $request->ente_id;
       $votante->personal_p_id = $request->personal_id;
       //$votante->funcionario_id = $request->funcionario_id;
       $votante->confirmed = $request->confirmed;
       $votante->user_id = \Auth::user()->id;
       $votante->save();

       $notification = array(
            'message' => '¡Datos ingresados!',
            'alert-type' => 'success'
        );
             return redirect()->back()->with($notification);


    }




    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Votantes  $votantes
     * @return \Illuminate\Http\Response
     */
    public function personal_p_votacion($votantes)
    {
        $votantes = Personal1p10::where('personal_id',$votantes)->get();
        return $votantes;

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Votantes  $votantes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Votantes $votantes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Votantes  $votantes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Votantes $votantes)
    {
        //
    }
}
