<?php

namespace App\Livewire;

use App\Models\Director;
use Livewire\Attributes\Validate;
use Livewire\Component;

class EliminarDirector extends Component
{
    #[Validate(rule:'required', message:'Esto se requiere')]
    public string $nombre_director="";

    public function eliminarDirector(){
        $directorBuscado = Director::query()->where('nombre_director',$this->nombre_director)->first();

        if($directorBuscado){
            Director::query()->where('nombre_director',$this->nombre_director)->where('nombre_director',$this->nombre_director)->delete();
            session()->flash('aviso', 'DIRECTOR ELIMINADO');
        }else{
            session()->flash('aviso','elimacion no procede');
        }
    }

    public function render()
    {
        return view('livewire.eliminar-director', ["Directo"=>Director::all()]);
    }
}
