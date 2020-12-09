@extends('app')

@section('content')
    <h3 class="text-4xl text-purple-900 py-12 tracking-wide">Generate Lorem ipsum Text</h3>
    <div class="mb-12">
        <form action="{{route('texts.lorem.get')}}" method='POST'>
            @csrf
            <p class="pb-4">How many characters?</p>
            <div class="flex">
                <div class="bg-gradient-to-r from-purple-800 to-red-800 rounded-lg w-1/3">
                    <input class="focus:outline-none focus:border-yellow-500 border-2 border-transparent bg-black bg-opacity-75 w-full h-full p-4 rounded-lg text-white text-right" type="number" name="length" value={{ old('length') ?? 1000}}>
                </div>
                <div class="w-2/3 pl-2">
                    <x-submit-button />
                </div>
            </div>
        </form>
    </div>

    <div class="flex lg:flex-row flex-col">
        <div class="w-full">
            <p class="pb-4">Here is your dummy Text</p>
            <div class='flex bg-gradient-to-r from-purple-800 to-red-800 text-white font-mono rounded-lg'>
                <x-textarea name='output' input="{!! $dummyText ?? '' !!}" />
            </div>
        </div>
    </div>

@endsection
