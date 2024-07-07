
<div>
<link rel="stylesheet" href="output.css">
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <header class="bg-amber-500 m-2 mb-2 mt-2 p-2 rounded" style="display: grid; grid-template-columns: auto">
        <h1 class="text-white"><strong>ELIMINAR PELICULAS...</strong></h1>
    </header>

    <section style="display: grid; grid-template-columns: 20% 40% 40%; background: url(https://app.leonardo.ai/_next/image?url=%2Fimg%2Flogin-hero-images%2FFemaleAdventurer4.webp&w=3840&q=75)" class="p-1 m-2 mt-2 mb-2" >
        
        <div class="bg-gray-900 m-2 p-2 items-center text-white rounded" style="height: 600px;">
            <h2><strong>NAVBAR</strong></h2>
            <img class="rounded-xl mt-4" src="https://fiverr-res.cloudinary.com/t_gig_cards_web,q_auto,f_auto/gigs/366655344/original/f95bed9bd6e8331f6ba3279ea56884d000c167a7.jpg" alt="">
            <img class="rounded-xl mt-4" src="https://fiverr-res.cloudinary.com/t_gig_cards_web,q_auto,f_auto/gigs/337449905/original/bc77e6de76cac9cb89d12997ad0f92a9e347e5e7.jpg" alt="">
            <img class="rounded-xl mt-4" src="https://fiverr-res.cloudinary.com/t_gig_cards_web,q_auto,f_auto/gigs/364983537/original/46b544201d6d65819fbdb2b30095fb924990ddc6.jpg" alt="">
        </div>

        <div style="display: grid; grid-template-columns: auto; align-content: center; height: 600px; width:100%;" class="m-auto p-2 bg-white">
            
            <form>
                <h5 class="text-black"><strong>Titulo</strong></h5>
                <input type="text" class="border-2 border-slate-400 rounded m-2 p-1 mt-2" wire:model="titulo"/>
                @error ('titulo') {{$message}} @enderror

                <button  wire:click.prevent="eliminarPelicula" class="bg-gray-900 m-2 p-2 mt-2 text-white rounded" type="button">
                    ELIMINAR PELICULA
                </button>
            </form>

            <strong>
            {{ session('aviso')}}
            @error ('titulo') {{$message}} @enderror
            </strong>

        </div>

        <section class="bg-white m-auto p-2" style="align-content: center; height: 600px; width: 100%;">
                <h1><strong>DATOS EN TABLA</strong></h1>

                @if (!$filas->isEmpty())
                <table class="table-fixed bg-slate-400 ">
                    <thead class="bg-gray-800 text-white ">
                        <tr class="m-2">
                            <th class="p-6">Nombre de la pelicula</th>
                            <th class="m-6">Titulo</th>
                        </tr>
                    </thead>
                    <tbody class="text-white ">
                        @foreach ($filas as $fila)
                            <tr class="m-2">
                                <td class="p-4">{{ $fila->id }}</td>
                                <td class="p-4">{{ $fila->titulo}}</td>
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
