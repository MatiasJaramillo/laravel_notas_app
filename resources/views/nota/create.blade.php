<x-layout>
    <h1>Vista Create</h1>
    <h2>Crear una nueva nota</h2>
        <form action="{{ route('nota.store') }}" method="post">
            @csrf
            <textarea name="nota" id="" cols="50" rows="5" placeholder="Ingresa el contenido de la nota"></textarea>
            <br>
            <p><a href="{{ route('nota.index') }}">Cancelar</a></p>
            <button>Enviar</button>
        </form>
</x-layout>
