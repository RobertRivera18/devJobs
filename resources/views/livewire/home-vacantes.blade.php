<div>
    @livewire('filtrar-vacantes')
    <div class="py-12">
        <div class="max-w-7xl mx-auto">
            <h3 class="font-extrabold text-3xl text-gray-800 mb-12 divide-y divide-gray-200">Nuestras Vacantes
                Disponibles</h3>
            <div class="bg-white shadow-sm rounded-lg p-6">
                @forelse($vacantes as $vacante)
                <div class="md:flex md:justify-between md:items-center py-5">
                    <div class="md:flex-1">
                        <a href="{{route('vacantes.show',$vacante->id)}}">{{$vacante->titulo}}</a>
                        <p class="text-base text-gray-600">{{$vacante->empresa}}</p>
                        <p class="text-base text-gray-600">{{$vacante->categoria->categoria}}</p>
                        <p class="text-base text-gray-600 mb-1">{{$vacante->salario->salario}}</p>
                        <p class="font-bold text-xs  text-gray-600">
                            Ultimo dia para postularse:
                            <span class="font-normal">{{$vacante->ultimo_dia->format('d/m/Y')}}
                            </span>
                        </p>

                    </div>
                    <div class="mt-5 md:mt-0">
                        <a class="bg-indigo-500 p-3 text-sm font-bold text-white rounded-lg"
                            href="{{route('vacantes.show',$vacante->id)}}">Ver Vacante</a>
                    </div>
                </div>
                @empty
                <p class="text-center  text-sm text-gray-700">No hay Vacantes aún</p>
                @endforelse
            </div>
        </div>
    </div>
</div>