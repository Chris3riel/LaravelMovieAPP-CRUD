<?php

namespace App\Livewire;

use App\Models\Pelicula;
use Livewire\Attributes\Validate;
use Livewire\Component;

class EliminaPelicula extends Component
{
    #[Validate(rule:'required',message:'Esto se requiere')]
    public string $titulo="";

    public function eliminarPelicula(){
        $peliculaBuscada = Pelicula::query()->where('titulo',$this->titulo)->first();

        if($peliculaBuscada){
            Pelicula::query()->where('titulo',$this->titulo)->where('titulo',$this->titulo)->delete();
            session()->flash('aviso', 'PELICULA ELIMINADA');

        }else{
            session()->flash('aviso','eliminacion no procede');
        }
    }

    public function render()
    {
        return view('livewire.elimina-pelicula', ["filas"=>Pelicula::all()]);
    }
}
