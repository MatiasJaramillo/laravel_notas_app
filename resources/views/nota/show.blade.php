<x-layout>
    <h1>Vista show</h1>
    <h2>Fecha de publicación: {{$nota->created_at}}</h2>
    <p><a href="{{ route('nota.edit', $nota) }}">Editar</a></p>
    <form action="{{ route('nota.destroy', $nota) }}" method="post">
        @csrf
        @method('DELETE')
        <button>Eliminar</button>
    </form>
    <hr>
    <p>{{$nota->nota}}</p>
    <p><a href="{{ route('nota.index') }}">Volver al listado</a></p>
</x-layout>
