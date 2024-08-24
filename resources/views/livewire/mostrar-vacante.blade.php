<div class="p-10">
    <div class="mb-5">
        <h3 class="font-bold text-2xl text-gray-800 my-3">
            {{$vacante->titulo}}
        </h3>
        <div class="md:grid md:grid-cols-2 bg-gray-50">
            <p class="font-bold text-sm my-1 text-gray-800">Empresa:
                <span class="normal-case font-normal">{{$vacante->empresa}}</span>
            </p>
            <p class="font-bold text-sm my-1 text-gray-800">Ultimo dia para postularse:
                <span class="normal-case font-normal">{{$vacante->ultimo_dia->toFormattedDateString()}}</span>
            </p>
            <p class="font-bold text-sm my-1 text-gray-800">Categoria:
                <span class="normal-case font-normal">{{$vacante->categoria->categoria}}</span>
            </p>
            <p class="font-bold text-sm my-1 text-gray-800">Salario:
                <span class="normal-case font-normal">{{$vacante->salario->salario}}</span>
            </p>

        </div>
    </div>
    <div class="md:grid md:grid-cols-6 gap-4">
        <div class="md:col-span-2">
            <img class="rounded-md" src="{{asset('storage/vacantes/'.$vacante->imagen)}}"
                alt="{{'Imagen Vacante'.$vacante->titulo}}">
        </div>
        <div class="md:col-span-4">
            <h2 class="font-bold">Descripción del Puesto</h2>
            <p>{{$vacante->descripcion}}</p>
        </div>
    </div>

    @guest
    <div class="mt-5 bg-gray-50 text-center border border-dashed p-5">
        <p>
            ¿Deseas postular a este vacante? <a class="font-bold text-indigo-600" href="{{route('register')}}">Crea una
                cuenta y aplica a esta y otras vacantes</a>
        </p>
    </div>
    @endguest

</div>