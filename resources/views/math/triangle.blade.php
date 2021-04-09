@extends('app')

@section('content')
    <h3 class="text-4xl text-purple-900 py-12 tracking-wide">Calculate missing variables in a right angled triangle</h3>
    <form action="{{route('math.triangle.get')}}" method='POST'>
        @csrf
        <div class="flex">
            <div class="w-1/3">
                <div class="flex items-center py-2">
                    <div class="rounded-l-lg bg-purple-300 h-full flex ">
                        <p class="p-4 w-16 text-center">a</p>
                    </div>
                    <div class="bg-gradient-to-r from-purple-800 to-red-800 rounded-r-lg flex-1">
                        <input
                            class="focus:outline-none focus:border-yellow-500 border-2 border-transparent bg-black bg-opacity-75 w-full h-full p-4 rounded-r-lg text-white text-right"
                            type="number"
                            name="length-a"
                            value="{{ $lengthA ?? '' }}">
                    </div>
                </div>
                <div class="flex items-center py-2">
                    <div class="rounded-l-lg bg-purple-300 h-full flex ">
                        <p class="p-4 w-16 text-center">b</p>
                    </div>
                    <div class="bg-gradient-to-r from-purple-800 to-red-800 rounded-r-lg flex-1">
                        <input
                            class="focus:outline-none focus:border-yellow-500 border-2 border-transparent bg-black bg-opacity-75 w-full h-full p-4 rounded-r-lg text-white text-right"
                            type="number"
                            name="length-b"
                            value="{{ $lengthB ?? '' }}">
                    </div>
                </div>
                <div class="flex items-center py-2">
                    <div class="rounded-l-lg bg-purple-300 h-full flex ">
                        <p class="p-4 w-16 text-center">c</p>
                    </div>
                    <div class="bg-gradient-to-r from-purple-800 to-red-800 rounded-r-lg flex-1">
                        <input
                            class="focus:outline-none focus:border-yellow-500 border-2 border-transparent bg-black bg-opacity-75 w-full h-full p-4 rounded-r-lg text-white text-right"
                            type="number"
                            name="length-c"
                            value="{{ $lengthC ?? '' }}">
                    </div>
                </div>
                <div class="flex items-center py-2">
                    <div class="rounded-l-lg bg-purple-300 h-full flex ">
                        <p class="p-4 w-16 text-center">&alpha;</p>
                    </div>
                    <div class="bg-gradient-to-r from-purple-800 to-red-800 rounded-r-lg flex-1">
                        <input
                            class="focus:outline-none focus:border-yellow-500 border-2 border-transparent bg-black bg-opacity-75 w-full h-full p-4 rounded-r-lg text-white text-right"
                            type="number"
                            name="alpha"
                            value="{{ $alpha ?? '' }}">
                    </div>
                </div>
                <div class="flex items-center py-2">
                    <div class="rounded-l-lg bg-purple-300 h-full flex ">
                        <p class="p-4 w-16 text-center">&beta;</p>
                    </div>
                    <div class="bg-gradient-to-r from-purple-800 to-red-800 rounded-r-lg flex-1">
                        <input
                            class="focus:outline-none focus:border-yellow-500 border-2 border-transparent bg-black bg-opacity-75 w-full h-full p-4 rounded-r-lg text-white text-right"
                            type="number"
                            name="beta"
                            value="{{ $beta ?? '' }}">
                    </div>
                </div>
            </div>
            <div class="w-2/3 pl-12">
                <img src="{{asset('pythagoras.jpg')}}" alt="" class="w-full">
            </div>
        </div>
        <div class="flex py-8">
            <x-submit-button />
        </div>
    </form>

@endsection
