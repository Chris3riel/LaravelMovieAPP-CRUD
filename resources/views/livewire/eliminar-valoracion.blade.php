<div>
    <link rel="stylesheet" href="output.css">
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <header class="bg-slate-600 m-2 mb-2 mt-2 p-2 rounded-sm" style="display: grid; grid-template-columns: 10% 80%">
        <h1 class="text-white"><strong>Eliminar Valoraciones</strong></h1>
    </header>

    <section style="display: grid; grid-template-columns: 20% 40% 40%; background: url(https://app.leonardo.ai/_next/image?url=%2Fimg%2Flogin-hero-images%2FFemaleAdventurer4.webp&w=3840&q=75)" class="p-2 m-2 mt-2 mb-2">
        <div class="bg-gray-900 mr-2 p-2 text-white" style="height: 600px;">
            <h2><strong>NAVBAR</strong></h2>
            <img class="rounded-xl mt-4" src="https://imgv3.fotor.com/images/gallery/ai-generated-picture-of-a-robot-wearing-a-helmet-walks-on-the-streets-of-the-futuristic-city.jpg" alt="">
            
        </div>

        <div style="display: grid; grid-template-columns: 20% 80%; align-content:center;" class=" p-4 bg-gray-100">
            
            <form>

                <h5 class="text-black"><strong>ID de la pelicula</strong></h5>
                <input type="text" class="border-2 border-black rounded" wire:model="id_pelicula"/>
                @error ('id_pelicula') {{$message}} @enderror

                <button class="bg-gray-900 m-2 p-2 mt-2 text-white rounded" type="button" wire:click.prevent="eliminarValoracion()">
                    ELIMINAR
                </button>

            </form>
        </div>

        <section class="bg-white m-auto p-2" style="align-content: center; height: 100%; width: 100%;">
                <h1><strong>DATOS EN TABLA</strong></h1>

                @if (!$val->isEmpty())
                <table class="table-fixed bg-slate-400 ">
                    <thead class="bg-gray-800 text-white ">
                        <tr class="m-2">
                            <th class="p-6 border-r-2 border-r-white">Id de la pelicula</th>
                            <th class="m-6">Puntuacion</th>
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
