@extends('app')

@section('content')
    <h3 class="text-4xl text-purple-900 py-12 tracking-wide">Add escaping slashes</h3>
    <form action="{{route('texts.slashes.remove')}}" method='POST'>
        @csrf
        <div class="flex lg:flex-row flex-col">
            <div class="lg:w-1/2">
                <p class="mr-4 pb-4">Put your regular html here</p>
                <div class='flex lg:mr-4 bg-gradient-to-r from-purple-800 to-red-800 text-white font-mono rounded-lg'>
                    <x-textarea name='html' input="{!! $input ?? '' !!}" />
                </div>
            </div>
            <div class="lg:w-1/2">
                <p class="ml-4 pb-4">Here is your output</p>
                <div class='flex lg:ml-4 bg-gradient-to-r from-purple-800 to-red-800 text-white font-mono rounded-lg'>
                    <x-textarea name='output' input="{!! $addedResult ?? '' !!}" />
                </div>
            </div>
        </div>
        <div class="flex justify-end py-8">
            <x-submit-button />
        </div>
    </form>

@endsection
