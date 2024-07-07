
<div>
<link rel="stylesheet" href="output.css">
    <script src=""></script>

    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <header class="bg-amber-500 m-2 mb-2 mt-2 p-2 rounded-sm" style="display: grid; grid-template-columns: auto auto auto auto auto auto">
        <h1 class="text-white"><strong>REGISTRO DE PELICULAS</strong></h1>
        <a class="text-white font-bold m-auto" href="http://127.0.0.1:8000/registroActor">Registro Actor</a>
        <a class="text-white font-bold m-auto" href="http://127.0.0.1:8000/registroDirector">Registro Director</a>
        <a class="text-white font-bold m-auto" href="http://127.0.0.1:8000/registroPremio">Registro Premio</a>
        <a class="text-white font-bold m-auto" href="http://127.0.0.1:8000/registroValoracion">Registro Valoracion</a>
        <details class="grid grid-cols-1">
            <summary class="text-white font-bold rounded-sm border-solid border-white">Paginas de eliminar</summary>
            <a href="http://127.0.0.1:8000/eliminarPelicula" class="text-white font-bold m-auto">Eliminar Peliculas</a>
            <a href="http://127.0.0.1:8000/eliminarActor" class="text-white font-bold m-auto">Eliminar Actor</a>
            <a href="http://127.0.0.1:8000/eliminarDirector" class="text-white font-bold m-auto">Eliminar Director</a>
            <a href="http://127.0.0.1:8000/eliminarPremio" class="text-white font-bold m-auto">Eliminar Premio</a>
        </details>
    </header>
 
    <section style="display: grid; grid-template-columns: 20% auto auto; background: url(https://app.leonardo.ai/_next/image?url=%2Fimg%2Flogin-hero-images%2FFemaleAdventurer4.webp&w=3840&q=75)" class="p-2 m-2 mt-2 mb-2">
        <div class="bg-gray-900 mr-2 rounded p-2 text-white" style="height: 100%;">
            <h2><strong>NAVBAR</strong></h2>

            <img class="rounded-xl mt-1" src="https://imgv3.fotor.com/images/gallery/ai-generated-image-of-a-beautiful-cyberpunk-girl-wearing-VR-glasses-on-the-street.jpg" alt="">
            <img class="rounded-xl mt-2" src="https://fiverr-res.cloudinary.com/t_gig_cards_web,q_auto,f_auto/gigs/366655344/original/f95bed9bd6e8331f6ba3279ea56884d000c167a7.jpg" alt="">
            <img class="rounded-xl mt-2" src="https://fiverr-res.cloudinary.com/t_gig_cards_web,q_auto,f_auto/gigs/364983537/original/46b544201d6d65819fbdb2b30095fb924990ddc6.jpg" alt="">
            <img class="rounded-xl mt-2" src="https://leonardo-cdn.b-cdn.net/wp-content/uploads/2023/07/Default_galaxy_stars_energy_diamond_cloud_pink_god_2_6cd9f188-96e6-4722-abd8-b8cf0fcb9fff_1.jpeg" alt="">
        </div>

        <div style="display: grid; grid-template-columns: 20%;" class=" p-4 bg-white rounded">
        
            <form wire:submit.prevent="almacenarPelicula">

                <h5 class="text-black"><strong>Titulo</strong></h5>
                <input type="text" class="rounded border-2 border-black" wire:model="titulo"/>
                @error ('titulo') {{$message}} @enderror

                <h5 class="text-black"><strong>Fecha</strong></h5>
                <input type="text" class="rounded border-2 border-black" wire:model="fecha_lanzamiento"/>
                @error ('fecha_lanzamiento') {{$message}} @enderror


                <h5 class="text-black"><strong>Duración</strong></h5>
                <input type="text" class="rounded border-2 border-black" wire:model="duracion"/>
                @error ('duracion') {{$message}} @enderror

                <h5 class="text-black"><strong>Clasificación</strong></h5>
                <input type="text" class="rounded border-2 border-black" wire:model="clasificacion"/>
                @error ('clasificacion') {{$message}} @enderror

                <h5 class="text-black"><strong>Sinopsis</strong></h5>
                <input type="text" class="rounded border-2 border-black" wire:model="sinopsis"/>
                @error ('sinopsis') {{$message}} @enderror

                <h5 class="text-black"><strong>Presupuesto</strong></h5>
                <input type="text" class="rounded border-2 border-black" wire:model="presupuesto"/>
                @error ('presupuesto') {{$message}} @enderror

                <h5 class="text-black"><strong>Estudio de grabación</strong></h5>
                <input type="text" class="rounded border-2 border-black" wire:model="estudio"/>
                @error ('estudio') {{$message}} @enderror

                <h5 class="text-black"><strong>Nombre del director</strong></h5>
                <input type="text" class="rounded border-2 border-black" wire:model="nombre_director"/>
                @error ('nombre_director') {{$message}} @enderror

                <h5 class="text-black"><strong>Valoracion</strong></h5>
                <input type="text" class="rounded border-2 border-black" wire:model="valoracion"/>
                @error ('valoracion') {{$message}} @enderror

                <button class="bg-gray-900 m-2 p-2 mt-2 text-white rounded" wire:click.prevent="almacenarPelicula()">
                    GUARDAR
                </button>
            </form>
        </div>

        <section class="bg-white ml-2 mb-2 p-2 rounded" style="display: grid; grid-template-columns:auto;">
                <h1><strong>DATOS EN TABLA</strong></h1>

                @if (!$Peli->isEmpty())
                <table class="table-fixed bg-slate-400 ">
                    <thead class="bg-gray-800 text-white ">
                        <tr class="m-2">
                            <th class="p-6 border-r-2 border-r-white">Nombre de la pelicula</th>
                            <th class="m-6">Fecha de lanzamiento</th>
                        </tr>
                    </thead>
                    <tbody class="text-white ">
                        @foreach ($Peli as $fila)
                            <tr class="m-2">
                                <td class="p-4">{{ $fila->titulo }}</td>
                                <td class="p-4">{{ $fila->fecha_lanzamiento}}</td>
                            </tr> 
                        @endforeach
                    </tbody>
                </table>

        @else
            <h2>Sin datos!</h2>
        @endif


            <section class="mt-2">
                {!!$chart->container()!!}
                <script src="{{$chart->cdn()}}"></script>
                {{$chart->script()}}
            </section>
        

            </section>

            


            

    </section>

    <footer class="bg-red-600 m-2 mt-2 p-2 rounded">
        <h3 class="text-white font-bold">Derechos reservados, 2024</h3>
        <p class="text-white">Lic. Alejandro Procopio Santana</p>
        <p class="text-white">Lic. Chris Uriel Dominguez Pineda</p>
    </footer>
</div>
