<?php

namespace App\Livewire;

use App\Models\Valoracion;
use Livewire\Attributes\Validate;
use Livewire\Component;

class RegistrarValoracion extends Component
{
    #[Validate(rule:'required', message:'Necesitas ingresar este valor')]
    public string $id_pelicula;
    #[Validate(rule:'required', message:'Necesitas ingresar este valor')]
    public string $puntuacion;
    #[Validate(rule:'required', message:'Necesitas ingresar este valor')]
    public string $fuente_valoracion;

    public function registroValoracion(){
        $datosUtiles = $this->validate();
        $valoracionNueva = new Valoracion();
        $valoracionNueva->id_pelicula=$datosUtiles['id_pelicula'];
        $valoracionNueva->puntuacion=$datosUtiles['puntuacion'];
        $valoracionNueva->fuente_valoracion=$datosUtiles['fuente_valoracion'];
        $valoracionNueva->save();
        $this->reset('id_pelicula','puntuacion','fuente_valoracion');
    }

    public function render()
    {
        return view('livewire.registrar-valoracion', ["val"=>Valoracion::all()]);
    }
}
