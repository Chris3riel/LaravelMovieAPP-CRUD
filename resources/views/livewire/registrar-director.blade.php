<div>
    <link rel="stylesheet" href="output.css">
    {{-- Be like water. --}}
    <header class="bg-rose-700 m-2 mb-2 mt-2 p-2 rounded-sm" style="display: grid; grid-template-columns: 10% 80%">
        <h1 class="text-white"><strong>REGISTRO DIRECTORES</strong></h1>
    </header>

    <section style="display: grid; grid-template-columns: 20% 40% 40%; background: url(https://app.leonardo.ai/_next/image?url=%2Fimg%2Flogin-hero-images%2FFemaleAdventurer4.webp&w=3840&q=75)" class="p-2 m-2 mt-2 mb-2">
        <div class="bg-gray-900 m-2 p-2 text-white" style="height: 600px;">
            <h2><strong>NAVBAR</strong></h2>
            <img class="rounded-xl mt-4" src="https://www.hollywoodreporter.com/wp-content/uploads/2022/02/GettyImages-1127334321-H-2022.jpg?w=1296&h=730&crop=1" alt="">
            <img class="rounded-xl mt-4" src="https://imagenes.elpais.com/resizer/MltpJv3XubR8_lxTgjfvbtblWcw=/414x311/cloudfront-eu-central-1.images.arcpublishing.com/prisa/MJUBOT3IJZDQ5OGTMVDDGSDJHU.jpg" alt="">
            <img class="rounded-xl mt-4" src="https://s.yimg.com/ny/api/res/1.2/TIUzAsxY1ALcjdDxWpz94g--/YXBwaWQ9aGlnaGxhbmRlcjt3PTk2MDtoPTY0Mg--/https://s.yimg.com/os/creatr-uploaded-images/2023-07/cd491960-2c80-11ee-bb66-060347e23630" alt="">
        </div>

        <div style="display: grid; grid-template-columns: 20%;" class="m-2 p-4 bg-gray-100 rounded">
            
            <form>

                <h5 class="text-black"><strong>Nombre del director</strong></h5>
                <input type="text" class="rounded border-2 border-black" wire:model="nombre_director"/>
                @error ('nombre_director') {{$message}} @enderror

                <h5 class="text-black"><strong>Apellidos</strong></h5>
                <input type="text" class="rounded border-2 border-black" wire:model="apellidos"/>
                @error ('apellidos') {{$message}} @enderror

                <h5 class="text-black"><strong>Nacionalidad</strong></h5>
                <input type="text" class="rounded border-2 border-black" wire:model="nacionalidad"/>
                @error ('nacionalidad') {{$message}} @enderror

                <h5 class="text-black"><strong>Genero</strong></h5>
                <input type="text" class="rounded border-2 border-black" wire:model="genero"/>
                @error ('genero') {{$message}} @enderror


                <button class="bg-gray-900 m-2 p-2 mt-2 text-white rounded" type="button" wire:click.prevent="ingresarDirector()">
                    GUARDAR
                </button>

            </form>
        </div>

        <section class="bg-white mt-2 p-4 rounded">
                <h1><strong>DATOS EN TABLA</strong></h1>

                @if (!$Dire->isEmpty())
                <table class="table-fixed bg-slate-400 ">
                    <thead class="bg-gray-800 text-white ">
                        <tr class="m-2">
                            <th class="p-6 border-r-2 border-r-white">Nombre del director</th>
                            <th class="m-6">Apellidos</th>
                        </tr>
                    </thead>
                    <tbody class="text-white ">
                        @foreach ($Dire as $fila)
                            <tr class="m-2">
                                <td class="p-4">{{ $fila->nombre_director }}</td>
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
