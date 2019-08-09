<?php

namespace App\Http\Controllers\Api;
use App\Pedido;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PedidoController extends Controller
{
    //
    private $Pedido;

    public function __construct(Pedido $Pedido){
        $this->Pedido = $Pedido;  
    }

    public function index(){
        $data = ['data'=> $this->Pedido->all()];
        return  response()->json($data);
        //return $this->Pedido::all();
    }

    public function show($id){
        //return $id;
        $Pedido = $this->Pedido->find($id);
        if(!$Pedido){
            return response()->json(['msg'=> 'Pedido não encontrado.'],404);
        }
        $data = ['data'=> $Pedido];
        return  response()->json($data);
    }

    public function store(Request $request){
        //dd($request->all());
        try{            
            $PedidosData = $request->all();
            $this->Pedido->create($PedidosData);
            return  response()->json(['msg'=> 'Pedido cadastrado com sucesso.'],201);
        } catch(Exception $e){
                           
            return response()->json(['msg'=> 'Houve um erro ao tentar cadastrar.'],101);
            
        }
    }
    public function update(Request $request,$id){
        //dd($request->all());
        try{            
            $PedidosData = $request->all();
            $Pedido = $this->Pedido->find($id);
            $Pedido->update($PedidosData);
            return  response()->json(['msg'=> 'Pedido atualizado com sucesso.'],200);
        } catch(Exception $e){
                           
            return response()->json(['msg'=> 'Houve um erro ao tentar editar.'],1011);
            
        }
    }

    public function delete(Pedido $id){
        try{
            $id->delete();
            return  response()->json(['msg'=> 'Deletado com sucesso.'],200);
        }catch(Exception $e){
                           
            return response()->json(['msg'=> 'Houve um erro ao remover.'],1012);
            
        }
        
    }
}
