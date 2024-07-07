<?php

namespace App\Livewire;

use App\Models\Premio;
use Livewire\Attributes\Validate;
use Livewire\Component;

class EliminarPremio extends Component
{
    #[Validate(rule:'required', message:'Necesitas ingresar este valor')]
    public string $nombre_premio;

    public function eliminarPremio(){
        $premioBuscado = Premio::query()->where('nombre_premio',$this->nombre_premio)->first();

        if($premioBuscado){
            Premio::query()->where('nombre_premio',$this->nombre_premio)->where('nombre_premio',$this->nombre_premio)->delete();
            session()->flash('aviso','Premio eliminado');
        }else{
            session()->flash('aviso','La eliminacion no procede');
        }
    }

    public function render()
    {
        return view('livewire.eliminar-premio',["Prem"=>Premio::all()]);
    }
}
