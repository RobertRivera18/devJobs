<div class="bg-white overflow-hidden shadow-sm rounded-lg">


    @forelse($vacantes as $vacante)
    <div class="p-6 bg-white border-b border-gray-200 md:flex md:justify-between md:items-center">
        <div class="space-y-3">
            <a class="text-xl font-bold" href="{{route('vacantes.show',$vacante->id)}}">
                {{$vacante->titulo}}
            </a>
            <p class="text-sm font-bold text-gray-600">{{$vacante->empresa}}</p>
            <p class="text-sm text-gray-500">Último dia: {{$vacante->ultimo_dia->format('d/m/Y')}}</p>
        </div>
        <div class="flex flex-col md:flex-row items-stretch gap-3 mt-5 md:mt-0">
            <a href="" class="bg-slate-800 py-2 px-4 rounded-lg text-white text-xs font-bold text-center">
                Candidatos
            </a>

            <a href="{{route('vacantes.edit',$vacante)}}"
                class="bg-blue-800 py-2 px-4 rounded-lg text-white text-xs font-bold text-center">
                Editar
            </a>
            <button wire:click="$emit('eliminar',{{$vacante->id}})"
                class="bg-red-800 py-2 px-4 rounded-lg text-white text-xs font-bold text-center">
                Eliminar
            </button>
        </div>
    </div>

    @empty
    <p class="text-center p-3 text-sm text-gray-600">No hay vacantes para mostrar</p>
    @endforelse

</div>
<div class="mt-10">
    {{$vacantes->links()}}
</div>
@push('script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    Livewire.on('eliminar',vacanteId =>{
        Swal.fire({
  title: "Eliminar Vacante",
  text: "Una vacante eliminada no se puede recuperar!",
  icon: "warning",
  showCancelButton: true,
  confirmButtonColor: "#3085d6",
  cancelButtonColor: "#d33",
  confirmButtonText: "Yes, Eliminar Vacante!",
  cancelButtonText:"Cancelar"
}).then((result) => {
  if (result.isConfirmed) {
    Livewire.emit('eliminarVacante',vacanteId)
    Swal.fire({
      title: "Vacante Eliminada!",
      text: "La vacante ha sido Eliminada.",
      icon: "success",
      confirmButtonColor: "#3085d6",
    });
  }
});
    })
    
</script>
@endpush