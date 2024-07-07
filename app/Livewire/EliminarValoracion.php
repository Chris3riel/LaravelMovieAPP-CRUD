<?php

namespace App\Livewire;

use App\Models\Valoracion;
use Livewire\Attributes\Validate;
use Livewire\Component;

class EliminarValoracion extends Component
{
    #[Validate(rule:'required', message:'Necesita ingresar el valor')]
    public string $id_pelicula;

    public function eliminarValoracion(){
        $valoracionBuscada = Valoracion::query()->where('id_pelicula', $this->id_pelicula)->first();

        if($valoracionBuscada){
            Valoracion::query()->where('id_pelicula', $this->id_pelicula)->where('id_pelicula', $this->id_pelicula)->delete();
            session()->flash('aviso','Valoracion eliminada');
        }else{
            session()->flash('aviso','LA ELIMINACION NO PROCEDE');
        }
    }

    public function render()
    {
        return view('livewire.eliminar-valoracion', ['val'=>Valoracion::all()]);
    }
}
