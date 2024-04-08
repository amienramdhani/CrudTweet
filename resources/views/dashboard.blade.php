<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div> --}}
            <div class="card bg-white">
                <div class="card-body">
                    <form action="{{ route('tweet.store') }}" method="POST">
                        @csrf
                        <textarea name="content" class="textarea textarea-bordered w-full" 
                        placeholder="Apa yang anda pikirkan" rows="3"></textarea>
    
                        <input type="submit" value="Tweet" class="btn btn-primary">
                    </form>
                </div>
            </div>
 

        </div>
        
    </div>
</x-app-layout>
