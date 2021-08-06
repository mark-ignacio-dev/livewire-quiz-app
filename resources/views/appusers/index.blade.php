<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('AppUser Home') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl m-4 mx-auto sm:px-6 lg:px-8">
        <div class="bg-white rounded-lg shadow-lg p-5 md:p-20 mx-2">
            <div class="text-center">
                <h2 class="text-2xl tracking-tight leading-10 font-extrabold text-gray-900 md:text-3xl sm:leading-none">
                    AppUser<span class="text-indigo-600 ml-2">Home</span>
                </h2>
                <p class="text-md mt-10"> Welcome <span class="font-extrabold text-blue-600 mr-2"> {{Auth::user()->name.'!'}} </span> As a registered user, you can access all resources on our website. Thankyou!</p>
            </div>
            <div class="md:grid grid-cols-3 mt-10 justify-center gap-5">
                <div class="m-3  min-w-full mx-auto">
                    <p class="bg-white tracking-wide text-gray-800 font-bold rounded border-2 border-blue-500 hover:border-blue-500 hover:bg-blue-500 hover:text-white shadow-md py-2 px-6 items-center">
                        <span class="mx-auto font-extrabold text-blue-800 pr-2">{{$sections->count()}}</span><span> Sections</span>
                    </p>
                </div>
                <div class="m-3  min-w-full mx-auto">
                    <p class="bg-white tracking-wide text-gray-800 font-bold rounded border-2 border-blue-500 hover:border-blue-500 hover:bg-blue-500 hover:text-white shadow-md py-2 px-6 items-center">
                        <span class="mx-auto font-extrabold text-blue-800 pr-2">{{$questionsCount}}</span><span> Total Questions</span>
                    </p>
                </div>
                <div class="m-3  min-w-full mx-auto justify-center">
                    <p class="bg-white tracking-wide text-gray-800 font-bold rounded border-2 border-blue-500 hover:border-blue-500 hover:bg-blue-500 hover:text-white shadow-md py-2 px-6 items-center">
                        <span class="mx-auto font-extrabold text-blue-800 pr-2">{{$activeUsers}}</span><span> Registered Users</span>
                    </p>
                </div>
            </div>
            <div class="my-7">
                <form action="{{route('startQuiz')}}" method="post">
                    @csrf
                    <div class="md:flex mx-auto gap-2 justify-center text-center">
                        <select name="section" class="block w-full mt-1 rounded-md bg-gray-100 border-2 border-gray-500 focus:bg-white focus:ring-0">
                            @foreach($sections as $section)
                            @if($section->questions_count>0)
                            <option value="{{$section->id}}">{{$section->name}}</option>
                            @endif
                            @endforeach
                        </select>
                        <select name="quizSize" class="block w-full mt-1 rounded-md bg-gray-100 border-2 border-gray-500 focus:bg-white focus:ring-0">
                            @for ($i = 1; $i <= 50; $i++) <option value="{{ $i }}">{{ $i }}</option> @endfor
                        </select>
                        <x-jet-button type="submit" class="block w-full rounded-md text-justify py-4 mt-4">
                            {{ __('Start Quiz') }}
                        </x-jet-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>