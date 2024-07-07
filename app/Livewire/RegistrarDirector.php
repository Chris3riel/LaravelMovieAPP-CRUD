<?php

namespace App\Livewire;

use App\Models\Director;
use Livewire\Attributes\Validate;
use Livewire\Component;

class RegistrarDirector extends Component
{
    #[Validate(rule:'required', message:'Necesitas ingresar este valor')]
    public string $nombre_director;
    #[Validate(rule:'required', message:'Necesitas ingresar este valor')]
    public string $apellidos;
    #[Validate(rule:'required', message:'Necesitas ingresar este valor')]
    public string $nacionalidad;
    #[Validate(rule:'required', message:'Necesitas ingresar este valor')]
    public string $genero;

    public function ingresarDirector(){
        $datosUtiles = $this->validate();
        $directorNuevo = new Director();
        $directorNuevo->nombre_director=$datosUtiles["nombre_director"];
        $directorNuevo->apellidos=$datosUtiles["apellidos"];
        $directorNuevo->nacionalidad=$datosUtiles["nacionalidad"];
        $directorNuevo->genero=$datosUtiles["genero"];
        
        $directorNuevo->save();
        $this->reset('nombre_director','apellidos','nacionalidad','genero');
        
    }

    public function render()
    {
        return view('livewire.registrar-director', ['Dire'=>Director::all()]);
    }
}
