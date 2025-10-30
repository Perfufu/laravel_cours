<x-layout>
    <h1>Bienvenue sur la page "Project"</h1>

    <ul class="mt-4 list-disc list-inside">

        @foreach ($project as $index)

            <li>{{ $index }}</li>
            
        @endforeach




    {{-- <li>{{ $projects[0] }}</li> --}}

    </ul>

</x-layout>