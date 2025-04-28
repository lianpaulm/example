<x-layout>
    <x-slot:heading>
        Listing
    </x-slot>


    <ul class="space-y-3">
        @foreach ($jobs as $job)
           <li>
                <a href="/jobs/{{$job['id']}}" class=" hover:bg-gray-200 transition-all block px-4 py-6 border border-gray-200 rounded-lg">
                   <div class="font-bold text-blue-500">{{$job->employer->name}}</div>
                    <div>
                       <strong>{{$job['title']}}</strong>: Pays {{$job['salary']}} per month.
                   </div>
                </a>
            </li> 
        @endforeach
    </ul>


</x-layout>