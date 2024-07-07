<?php

namespace App\Livewire;

use App\Models\Actor;
use Livewire\Attributes\Validate;
use Livewire\Component;

class EliminarActor extends Component
{
    #[Validate(rule:'required',message:'Esto se requiere')]
    public string $nombre_actor="";

    public function eliminarActor(){
        $actorBuscado = Actor::query()->where('nombre_actor',$this->nombre_actor)->first();

        if($actorBuscado){
            Actor::query()->where('nombre_actor',$this->nombre_actor)->where('nombre_actor',$this->nombre_actor)->delete();
            session()->flash('aviso', 'ACTOR ELIMINADO');

        }else{
            session()->flash('aviso','eliminacion no procede');
        }
    }
    
    public function render()
    {
        return view('livewire.eliminar-actor', ["act"=>Actor::all()]);
    }
}
