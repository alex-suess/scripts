@extends('app')

@section('content')
    <h3 class="py-12 text-4xl tracking-wide text-purple-900">Add escaping slashes</h3>
    <form action="{{route('texts.slashes.add')}}" method='POST'>
        @csrf
        <div class="flex flex-col lg:flex-row">
            <div class="lg:w-1/2">
                <p class="pb-4 mr-4">Put your regular html here</p>
                <div class='flex font-mono text-white rounded-lg lg:mr-4 bg-gradient-to-r from-purple-800 to-red-800'>
                    <x-textarea name='html' input="{!! $input ?? '' !!}" />
                </div>
            </div>
            <div class="lg:w-1/2">
                <p class="pb-4 ml-4">Here is your output</p>
                <div class='flex font-mono text-white rounded-lg lg:ml-4 bg-gradient-to-r from-purple-800 to-red-800'>
                    <x-textarea name='output' input="{!! $addedResult ?? '' !!}" />
                </div>
            </div>
        </div>
        <div class="flex justify-end py-8">
            <x-submit-button />
        </div>
    </form>

@endsection
