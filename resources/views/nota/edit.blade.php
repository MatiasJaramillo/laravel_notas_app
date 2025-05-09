<x-layout>
    <h1>Vista edit</h1>
    <h2>Editar nota</h2>
        <form action="{{ route('nota.update', $nota) }}" method="post">
            @csrf
            @method('PUT')
            <textarea name="nota" id="" cols="50" rows="5">{{$nota->nota}}</textarea>
            <br>
            <p><a href="{{ route('nota.index') }}">Cancelar</a></p>
            <button>Actualizar</button>
        </form>
</x-layout>
