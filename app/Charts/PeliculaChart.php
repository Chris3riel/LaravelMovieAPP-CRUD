<?php

namespace App\Charts;

use App\Models\Pelicula;
use marineusde\LarapexCharts\Charts\BarChart AS OriginalBarChart;

class PeliculaChart
{
    public function build(): OriginalBarChart
    {   
        $consulta=Pelicula::all(['titulo','valoracion']);

        $titulos=$consulta->map(fn($fila) => $fila->titulo)->toArray();
        $valoracion=$consulta->map(fn($fila)=>$fila->valoracion)->toArray();

        return (new OriginalBarChart)
            ->setTitle('RATING DE PELICULAS')
            ->setSubtitle('Las mejores peliculas de 2024')
            ->addData('Valoracion', $valoracion)
            ->setXAxis($titulos);
    }
}
