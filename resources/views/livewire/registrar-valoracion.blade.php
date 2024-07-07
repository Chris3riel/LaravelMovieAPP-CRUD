<div>
    <link rel="stylesheet" href="output.css">
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <header class="bg-slate-600 m-2 mb-2 mt-2 p-2 rounded-sm" style="display: grid; grid-template-columns: 10% 80%">
        <h1 class="text-white"><strong>REGISTRO VALORACIONES</strong></h1>
    </header>   

    <section style="display: grid; grid-template-columns: 20% 40% 40%; background: url(https://app.leonardo.ai/_next/image?url=%2Fimg%2Flogin-hero-images%2FFemaleAdventurer4.webp&w=3840&q=75)" class="p-2 m-2 mt-2 mb-2">
        <div class="bg-gray-900 mr-2 p-2 text-white" style="height: 100%;">
            <h2><strong>NAVBAR</strong></h2>
            <img class="rounded mt-4" src="https://imgv3.fotor.com/images/gallery/ai-generated-picture-of-a-robot-wearing-a-helmet-walks-on-the-streets-of-the-futuristic-city.jpg" alt="">
            
            
        </div>

        <div style="display: grid; grid-template-columns: 20% 80%;" class=" p-4 bg-gray-100">
            
            <form>

                <h5 class="text-black"><strong>Id de la pelicula</strong></h5>
                <input type="text" class="rounded border-2 border-black" wire:model="id_pelicula"/>
                @error ('id_pelicula') {{$message}} @enderror

                <h5 class="text-black"><strong>Puntuacion</strong></h5>
                <input type="text" class="rounded border-2 border-black" wire:model="puntuacion"/>
                @error ('puntuacion') {{$message}} @enderror

                <h5 class="text-black"><strong>Fuente de valoracion</strong></h5>
                <input type="text" class="rounded border-2 border-black" wire:model="fuente_valoracion"/>
                @error ('fuente_valoracion') {{$message}} @enderror

                <button class="bg-gray-900 m-2 p-2 mt-2 text-white rounded" type="button" wire:click.prevent="registroValoracion()">
                    GUARDAR
                </button>

            </form>
        </div>

        <section class="bg-white m-auto p-2" style=" height: 600px; width: 100%;">
                <h1><strong>DATOS EN TABLA</strong></h1>

                @if (!$val->isEmpty())
                <table class="table-fixed bg-slate-400 ">
                    <thead class="bg-gray-800 text-white ">
                        <tr class="m-2">
                            <th class="p-6 border-r-2 border-r-white">Nombre de la pelicula</th>
                            <th class="m-6">Titulo</th>
                        </tr>
                    </thead>
                    <tbody class="text-white ">
                        @foreach ($val as $fila)
                            <tr class="m-2">
                                <td class="p-4">{{ $fila->id_pelicula }}</td>
                                <td class="p-4">{{ $fila->puntuacion}}</td>
                            </tr> 
                        @endforeach
                    </tbody>
                </table>

        @else
            <h2>Sin datos!</h2>
        @endif

            </section>

    </section>

    <footer class="bg-red-600 m-2 mt-2 p-2">
        <h1 class="text-white"><strong>FOOTER</strong></h1>
    </footer>
</div>
