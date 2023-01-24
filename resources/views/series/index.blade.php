<x-layout title="Séries">
    <a href="/series/create" class="btn btn-success mb-3">Adicionar</a>
    <ul class="list-group">
        @foreach ($series as $serie) 
            <li class="list-group-item">{{ $serie->name }} </li>
        @endforeach
    </ul>

    <script>
        // Forma de passar uma variavel do PHP para o JS 
        const series = {{ Js::from($series) }}
    </script>
    
</x-layout>