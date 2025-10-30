<x-layout>
    
    <a 
    href="{{route('projects')}}" 
    class="italic text-slate-500"><- On revient en arrière</a>



    <ul class="mt-4 list-disc list-inside">

        @foreach ($project as $index)

            <li>{{ $index }}</li>
            
        @endforeach

    </ul>

</x-layout>