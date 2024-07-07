<?php

namespace App\Livewire;

use App\Charts\PeliculaChart;
use App\Models\Pelicula;
use Livewire\Attributes\Validate;
use Livewire\Component;

class RegistrarPelicula extends Component
{
    #[Validate(rule:'required', message:'Necesitas ingresar este valor')]
        public string $titulo;
        #[Validate(rule:'required', message:'Necesitas ingresar este valor')]
        #[Validate(rule:'date', message:'Ingrese una fecha correctamente')]
        public string $fecha_lanzamiento;
        #[Validate(rule:'required', message:'Necesitas ingresar este valor')]
        public string $duracion;
        #[Validate(rule:'required', message:'Necesitas ingresar este valor')]
        public string $clasificacion;
        #[Validate(rule:'required', message:'Necesitas ingresar este valor')]
        public string $sinopsis;
        #[Validate(rule:'required', message:'Necesitas ingresar este valor')]
        public string $presupuesto;
        #[Validate(rule:'required', message:'Necesitas ingresar este valor')]
        public string $estudio;
        #[Validate(rule:'required', message:'Necesitas ingresar este valor')]
        public string $nombre_director;
        #[Validate(rule:'required', message:'Necesita ingresar este valor')]
        public string $valoracion;

    public function almacenarPelicula(){
        $datosUtiles = $this->validate();
        $peliculaNueva = new Pelicula();
        $peliculaNueva->titulo=$datosUtiles["titulo"];
        $peliculaNueva->fecha_lanzamiento=$datosUtiles["fecha_lanzamiento"];
        $peliculaNueva->duracion=$datosUtiles["duracion"];
        $peliculaNueva->clasificacion=$datosUtiles["clasificacion"];
        $peliculaNueva->sinopsis=$datosUtiles["sinopsis"];
        $peliculaNueva->presupuesto=$datosUtiles["presupuesto"];
        $peliculaNueva->estudio=$datosUtiles["estudio"];
        $peliculaNueva->nombre_director=$datosUtiles["nombre_director"];
        $peliculaNueva->valoracion=$datosUtiles["valoracion"];
        $peliculaNueva->save();
        $this->reset('titulo','fecha_lanzamiento','duracion','clasificacion','sinopsis','presupuesto','estudio','nombre_director','valoracion');
        
    }

    public function render()
    {
        $chartNuevo = new PeliculaChart();
        return view('livewire.registrar-pelicula', ['Peli'=>Pelicula::all()], ['chart'=>$chartNuevo->build()]);
       

    }
}
