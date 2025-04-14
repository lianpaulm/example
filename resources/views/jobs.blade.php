<x-layout>
    <x-slot:heading>
        Job listing
    </x-slot>


    <ul>
        @foreach ($jobs as $job)
           <li>
                <a href="/jobs/{{$job['id']}}" class="text-blue-500 hover:underline"><strong>{{$job['title']}}</strong>: Pays {{$job['salary']}} per month.</a>
            </li> 
        @endforeach
    </ul>


</x-layout>