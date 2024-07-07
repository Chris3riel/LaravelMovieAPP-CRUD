<div>
    <link rel="stylesheet" href="output.css">
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <header class="bg-cyan-500 m-2 mb-2 mt-2 p-2 rounded" style="display: grid; grid-template-columns: 10% 80%">
        <h1 class="text-white"><strong>Registra Actor</strong></h1>
    </header>

    <section style="display: grid; grid-template-columns: 20% 40% 40%; background: url(https://app.leonardo.ai/_next/image?url=%2Fimg%2Flogin-hero-images%2FFemaleAdventurer4.webp&w=3840&q=75)" class="p-2 m-2 mt-2 mb-2">
        <div class="bg-gray-900 mr-2 p-2 text-white rounded" style="height: 100%;">
            <h2><strong>NAVBAR</strong></h2>
            <img class="rounded-xl mt-4" src="https://i.pinimg.com/originals/c6/d4/a5/c6d4a5bf3ee3e4d2d9187b0dd7ae6273.jpg" alt="">
            <img class="mt-4 rounded-xl" src="https://ichef.bbci.co.uk/ace/ws/640/cpsprodpb/14E92/production/_128405658_gettyimages-531719992.jpg" alt="">
            <img class="rounded-xl mt-4" src="https://media.glamour.mx/photos/660d6af2f047224c8eb6d4fa/master/w_1600,c_limit/435250008_820263093463299_7369535163082372976_n.jpg" alt="">
        </div>

        <div style="display: grid; grid-template-columns: 20%;" class="p-4 bg-gray-100 rounded">
            <form>

                <h5 class="text-black"><strong>Nombre del actor</strong></h5>
                <input type="text" class="rounded border-2 border-black"  wire:model="nombre_actor"/>
                @error ('nombre_actor') {{$message}} @enderror

                <h5 class="text-black"><strong>Apellidos</strong></h5>
                <input type="text" class="rounded border-2 border-black" wire:model="apellidos"/>
                @error ('apellidos') {{$message}} @enderror

                <h5 class="text-black"><strong>Genero</strong></h5>
                <input type="text" class="rounded border-2 border-black" wire:model="genero"/>
                @error ('genero') {{$message}} @enderror

                <h5 class="text-black"><strong>País</strong></h5>
                <input type="text" class="rounded border-2 border-black" wire:model="pais"/>
                @error ('pais') {{$message}} @enderror

                <button class="bg-gray-900 p-2 px-14 mt-2 text-white rounded content-center" type="button" wire:click.prevent="registraActor()">
                    GUARDAR
                </button>

            </form>
        </div>

        <section class="bg-white ml-2 p-4 rounded" style="height: 100%;">
                <h1><strong>DATOS EN TABLA</strong></h1>

                @if (!$Acto->isEmpty())
                <table class="table-fixed bg-slate-400 ">
                    <thead class="bg-gray-800 text-white ">
                        <tr class="m-2">
                            <th class="p-6 border-r-2 border-r-white">Nombre del actor</th>
                            <th class="m-6">Apellidos</th>
                        </tr>
                    </thead>
                    <tbody class="text-white ">
                        @foreach ($Acto as $fila)
                            <tr class="m-2">
                                <td class="p-4">{{ $fila->nombre_actor }}</td>
                                <td class="p-4">{{ $fila->apellidos}}</td>
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
        <h1 class="text-white"><strong>Derechos reservados</strong></h1>
    </footer>
</div>
