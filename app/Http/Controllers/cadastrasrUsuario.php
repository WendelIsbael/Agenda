<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CadastrarUsuarioModel;//Importar a classe que eu quero utilizar

class cadastrarUsuario extends Controller
{

    public function index(){
        $dados = cadastrarUsuarioModel::all();

        return view('paginas.cadastrar')->With('dados',$dados);
    } //Fim do metodo index


    public function store(Request $request){
        $nomeUsuario = $request->input('nome');//Coletando os dados do formulario
        $telefoneUsuario =$request->input('telefone');

        $model = new cadastrarUsuarioModel();
        $model-> nome = $nomeUsuario;
        $model-> telefone = $telefoneUsuario;
        $model->save();//armazenar os dados no DB

        return redirect('/cadastrar');
    }//fim do metodo store
}//Fim da classe