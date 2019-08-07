<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;

class CursoController extends Controller
{

    public function index(){

        $registros = Curso::all();
        return view('Admin.cursos.index',compact('registros'));
    }
    
    public function adicionar(){

        return view('Admin.cursos.adicionar');
    }

    public function salvar(Request $req){
        $dados = $req->all();
        
        Curso::create($dados);

        return redirect()->route('admin.cursos');
        
    }

    public function editar($id){

        $registro = Curso::find($id);
        return view('admin.cursos.editar',compact('registro'));

    }

    public function atualizar(Request $req, $id){
        $dados = $req->all();
        
        Curso::find($id)->update($dados);

        return redirect()->route('admin.cursos');
        
    }

    public function deletar($id){

        Curso::find($id)->delete();
        return redirect()->route('admin.cursos');

    }
}

