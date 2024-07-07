<?php

namespace App\Livewire;

use App\Models\Actor;
use Livewire\Attributes\Validate;
use Livewire\Component;

class RegistrarActor extends Component
{
    #[Validate(rule:'required', message:'Necesitas ingresar este valor')]
    public string $nombre_actor;
    #[Validate(rule:'required', message:'Necesitas ingresar este valor')]
    public string $apellidos;
    #[Validate(rule:'required', message:'Necesitas ingresar este valor')]
    public string $genero;
    #[Validate(rule:'required', message:'Necesitas ingresar este valor')]
    public string $pais;

    public function registraActor(){
        $datosUtiles = $this->validate();
        $actorNuevo = new Actor();
        $actorNuevo->nombre_actor=$datosUtiles["nombre_actor"];
        $actorNuevo->apellidos=$datosUtiles["apellidos"];
        $actorNuevo->genero=$datosUtiles["genero"];
        $actorNuevo->pais=$datosUtiles["pais"];
        
        $actorNuevo->save();
        $this->reset('nombre_actor','apellidos','genero','pais');
        
    }


    public function render()
    {
        return view('livewire.registrar-actor',['Acto'=>Actor::all()]);
    }
}
