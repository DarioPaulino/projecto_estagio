<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Aluno;
use Illuminate\Http\Request;
use App\Models\Curso;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;


class InscricaoController extends Controller
{
    //
    public function index()
    {

       $cursos = Curso::all(); 
       return view('site.inscricao.index',['cursos'=>$cursos]);
    }


    public function store(Request $request){
       #dd($request->all()); 
     $validator = Validator::make($request->all(), [
         'nome' => 'required|max:255',
         'numero_bi' => 'required|min:5|max:5',
         'telefone' => 'required|max:14' ,
         'localizacao' => 'required',
         'curso' => 'required'
        ]
        ,
        [
        //Retorno das Mensagens
        'nome.required' => 'Campo obrigatorio' ,
        'numero_bi.required' => 'Campo obrigatorio',
        'numero_bi.min' => 'Deve conter 13 caractere ' ,
        'curso.required' => 'Escolha o curso' , 
        'telefone.required' => 'Campo obrigatorio',
        'telefone.max' => 'Telefone deve conter 14' ,
        'localizacao.required' => 'Campo obrigatorio' ,    
        ]
      );

     if ($validator->fails()) {
         return redirect()
                     ->back()
                     ->withErrors($validator)
                     ->withInput();
     }
       
       Aluno::create($request->all());
       
       return redirect()->back()->with('success','Concluido');
       
       

    }
}
