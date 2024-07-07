<?php

namespace App\Livewire;

use App\Models\Premio;
use Livewire\Attributes\Validate;
use Livewire\Component;

class RegistrarPremio extends Component
{
    #[Validate(rule:'required', message:'Necesitas ingresar este valor')]
    public string $nombre_premio;
    #[Validate(rule:'required', message:'Necesitas ingresar este valor')]
    #[Validate(rule:'date', message:'Ingrese una fecha')]
    public string $fecha;
    #[Validate(rule:'required', message:'Necesitas ingresar este valor')]
    public string $categoria;
    #[Validate(rule:'required', message:'Necesitas ingresar este valor')]
    public string $id_pelicula;
    #[Validate(rule:'required', message:'Necesitas ingresar este valor')]
    public string $id_actor;
    #[Validate(rule:'required', message:'Necesitas ingresar este valor')]
    public string $id_director;

    public function registrarPremios(){
        $datosUtiles = $this->validate();
        $premioNuevo = new Premio();
        $premioNuevo->nombre_premio=$datosUtiles["nombre_premio"];
        $premioNuevo->fecha=$datosUtiles["fecha"];
        $premioNuevo->categoria=$datosUtiles["categoria"];
        $premioNuevo->id_pelicula=$datosUtiles["id_pelicula"];
        $premioNuevo->id_actor=$datosUtiles["id_actor"];
        $premioNuevo->id_director=$datosUtiles["id_director"];
        $premioNuevo->save();
        $this->reset('nombre_premio','fecha','categoria','id_pelicula','id_actor','id_director');
    }

    public function render()
    {
        return view('livewire.registrar-premio', ["Prem"=>Premio::all()]);
    }
}
