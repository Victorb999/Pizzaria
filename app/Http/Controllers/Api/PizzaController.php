<?php

namespace App\Http\Controllers\Api;
use App\Pizza;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PizzaController extends Controller
{
    //
    private $Pizza;

    public function __construct(Pizza $Pizza){
        $this->Pizza = $Pizza;  
    }

    public function index(){
        $data = ['data'=> $this->Pizza->all()];
        return  response()->json($data);
        //return $this->Pizza::all();
    }

    public function show($id){
        //return $id;
        $Pizza = $this->Pizza->find($id);
        if(!$Pizza){
            return response()->json(['msg'=> 'pizza não encontrada.'],404);
        }
        $data = ['data'=> $Pizza];
        return  response()->json($data);
    }

    public function store(Request $request){
        //dd($request->all());
        try{            
            $PizzasData = $request->all();
            $this->Pizza->create($PizzasData);
            return  response()->json(['msg'=> 'Pizza cadastrada com sucesso.'],201);
        } catch(\Exception $e){
                           
            return response()->json(['msg'=> 'Houve um erro ao tentar cadastrar.'],101);
            
        }
    }
    public function update(Request $request,$id){
        //dd($request->all());
        try{            
            $PizzasData = $request->all();
            $Pizza = $this->Pizza->find($id);
            $Pizza->update($PizzasData);
            return  response()->json(['msg'=> 'Pizza atualizada com sucesso.'],200);
        } catch(\Exception $e){
                           
            return response()->json(['msg'=> 'Houve um erro ao tentar editar.'],1011);
            
        }
    }

    public function delete(Pizza $id){
        try{
            $id->delete();
            return  response()->json(['msg'=> 'Deletado com sucesso.'],200);
        }catch(\Exception $e){
                           
            return response()->json(['msg'=> 'Houve um erro ao remover.'],1012);
            
        }
        
    }
}
