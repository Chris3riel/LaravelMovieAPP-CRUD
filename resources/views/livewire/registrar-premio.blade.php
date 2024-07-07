<div>
    <link rel="stylesheet" href="output.css">
    {{-- The best athlete wants his opponent at his best. --}}
    <header class="bg-teal-800 m-2 mb-2 mt-2 p-2 rounded-sm" style="display: grid; grid-template-columns: 10% 80%">
        <h1 class="text-white"><strong>PREMIOS</strong></h1>
    </header>

    <section style="display: grid; grid-template-columns: 20% 30% auto; background: url(https://app.leonardo.ai/_next/image?url=%2Fimg%2Flogin-hero-images%2FFemaleAdventurer4.webp&w=3840&q=75)" class="p-2 m-2 mt-2 mb-2 rounded">
        <div class="bg-gray-900 mr-2 rounded p-2 text-white" style="height: 100%;">
            <h2><strong>NAVBAR</strong></h2>
            <img class="rounded-xl mt-4" src="https://files.lafm.com.co/assets/public/styles/img_node_706x392/public/2024-01/premiososcar.jpg.webp?VersionId=0DF8GmGyIVvHqKmtkJc9USUdtXmd.GhV&itok=DP3An01Q" alt="">
            <img class="rounded-xl mt-4" src="https://cdn.forbes.com.mx/2022/03/Oscar-2022-640x360.jpg" alt="">
            <img class="rounded-xl mt-4" src="https://diegetico.com/wp-content/uploads/2022/01/cuales-son-los-premios-mas-importantes-del-cine-4.jpg" alt="">
        </div>

        <div style="display: grid; grid-template-columns: 20%;" class="rounded p-4 bg-gray-100">
            
            <form>

                <h5 class="text-black"><strong>Nombre del premio</strong></h5>
                <input type="text" class="rounded border-2 border-black" wire:model="nombre_premio"/>
                <strong>@error ('nombre_premio') {{$message}} @enderror</strong>

                <h5 class="text-black"><strong>Fecha</strong></h5>
                <input type="text" class="rounded border-2 border-black" wire:model="fecha"/>
                <strong>@error ('fecha') {{$message}} @enderror</strong>

                <h5 class="text-black"><strong>Categoria</strong></h5>
                <input type="text" class="rounded border-2 border-black" wire:model="categoria"/>
                @error ('categoria') {{$message}} @enderror

                <h5 class="text-black"><strong>ID de la pelicula</strong></h5>
                <input type="text" class="rounded border-2 border-black" wire:model="id_pelicula"/>
                @error ('id_pelicula') {{$message}} @enderror

                <h5 class="text-black"><strong>ID del actor</strong></h5>
                <input type="text" class="rounded border-2 border-black" wire:model="id_actor"/>
                @error ('id_actor') {{$message}} @enderror

                <h5 class="text-black"><strong>ID del director</strong></h5>
                <input type="text" class="rounded border-2 border-black" wire:model="id_director"/>
                @error ('id_director') {{$message}} @enderror


                <button class="bg-gray-900 m-2 p-2 mt-2 text-white rounded" type="button" wire:click.prevent="registrarPremios()">
                    GUARDAR
                </button>

            </form>
        </div>

        <section class="bg-white ml-2 p-4 rounded" style=" height: 100%;">
                <h1><strong>DATOS EN TABLA</strong></h1>

                @if (!$Prem->isEmpty())
                <table class="table-fixed bg-slate-400 ">
                    <thead class="bg-gray-800 text-white ">
                        <tr class="m-2">
                            <th class="p-6 border-r-white border-r-2">Nombre del premio</th>
                            <th class="m-6">Fecha</th>
                        </tr>
                    </thead>
                    <tbody class="text-white ">
                        @foreach ($Prem as $fila)
                            <tr class="m-2">
                                <td class="p-4">{{ $fila->nombre_premio }}</td>
                                <td class="p-4">{{ $fila->fecha}}</td>
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
