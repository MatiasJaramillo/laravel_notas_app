<x-layout>
    <h1>Vista Index</h1>
    <p><a href="{{route('nota.create')}}">Crear nueva nota</a></p>
    <div>
        @foreach ($notas as $nota)
            <p>{{$nota->id}}</p>
            <p>{{Str::words($nota->nota, 50)}}</p>
            <p>{{$nota->created_at}}</p>
            <p>{{$nota->user_id}}</p>
            <h3>Opciones</h3>
            <p><a href="{{route('nota.show', $nota)}}">Ver nota</a></p>
            <p><a href="{{route('nota.edit', $nota)}}">Editar</a></p>
            <form action="{{ route('nota.destroy', $nota) }}" method="post">
                @csrf
                @method('DELETE')
                <button>Eliminar</button>
            </form>
        @endforeach
        {{ $notas->links() }}
    </div>
</x-layout>
