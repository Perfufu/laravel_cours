<x-layout>
    
    <a 
    href="{{route('projects')}}" 
    class="italic text-slate-500"><- On revient en arrière</a>

    <ul class="mt-4 list-disc list-inside">

        @foreach ($project['technologies'] as $techno)

            <li>{{ $techno }}</li>
            
        @endforeach




    {{-- <li>{{ $projects[0] }}</li> --}}

    </ul>

</x-layout>