<div>
    <link rel="stylesheet" href="output.css">
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <header class="bg-cyan-500 m-2 mb-2 mt-2 p-2 rounded-sm" style="display: grid; grid-template-columns: 10% 80%">
        <h1 class="text-white"><strong>BORRAR ACTOR</strong></h1>
    </header>

    <section style="display: grid; grid-template-columns: 20% 40% 40%; background: url(https://app.leonardo.ai/_next/image?url=%2Fimg%2Flogin-hero-images%2FFemaleAdventurer4.webp&w=3840&q=75)" class="p-2 m-2 mt-2 mb-2">
        <div class="bg-gray-900 m-2 p-2 text-white rounded" style="height: 600px;">
            <h2><strong>NAVBAR</strong></h2>
            <img class="rounded-xl mt-4" src="https://media.gettyimages.com/id/111192487/photo/london-united-kingdom-henry-cavill-attends-the-premiere-of-sucker-punch-at-vue-west-end-on.jpg?s=612x612&w=0&k=20&c=FBZ37sHqABMsaunpkcxuv-eSq0XlkDnL__aV3zD3eBM=" alt="">
            <img class="rounded-xl mt-4" src="https://www.hollywoodreporter.com/wp-content/uploads/2024/04/Ana-de-Armas-Louis-Vuitton-Photocall-GettyImages-1713364063-H-2024.jpg?w=1296&h=730&crop=1" alt="">
        </div>

        <div style="display: grid; grid-template-columns: 20% 80%;" class="m-2 p-4 bg-gray-100">
            
            <form>

                <h5 class="text-black"><strong>Nombre del actor</strong></h5>
                <input type="text" class="rounded border-2 border-black" wire:model="nombre_actor"/>
                @error ('nombre_actor') {{$message}} @enderror

                <button class="bg-gray-900 m-2 p-2 mt-2 text-white rounded" type="button" wire:click.prevent="eliminarActor()">
                    GUARDAR
                </button>

            </form>

            <strong>
            {{ session('aviso')}}
            @error ('titulo') {{$message}} @enderror
            </strong>

            
        </div>

        <section class="bg-white mt-2  p-2" style="height: 100%; width: 100%;">
                <h1><strong>DATOS EN TABLA</strong></h1>

                @if (!$act->isEmpty())
                <table class="table-fixed bg-slate-400 ">
                    <thead class="bg-gray-800 text-white ">
                        <tr class="m-2">
                            <th class="p-6 border-r-2 border-r-white">Nombre del actor</th>
                            <th class="m-6">Apellidos</th>
                        </tr>
                    </thead>
                    <tbody class="text-white ">
                        @foreach ($act as $fila)
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
        <h1 class="text-white"><strong>FOOTER</strong></h1>
    </footer>
</div>
