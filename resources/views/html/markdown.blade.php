@extends('app')

@section('content')
    <h3 class="text-4xl text-purple-900 py-12 tracking-wide">Convert HTML to Markdown</h3>
    <form action="{{route('html.markdown.get')}}" method='POST'>
        @csrf
        <div class="flex lg:flex-row flex-col">
            <div class="lg:w-1/2">
                <p class="mr-4 pb-4">Put your valid html here</p>
                <div class='flex lg:mr-4 bg-gradient-to-r from-purple-800 to-red-800 text-white font-mono rounded-lg'>
                    <x-textarea name='html' input="{!! $input ?? '' !!}" />
                </div>
            </div>
            <div class="lg:w-1/2">
                <p class="ml-4 pb-4">Here is your markdown</p>
                <div class='flex lg:ml-4 bg-gradient-to-r from-purple-800 to-red-800 text-white font-mono rounded-lg'>
                    <x-textarea name='output' input="{!! $convertedResult ?? '' !!}" />
                </div>
            </div>
        </div>
        <div class="flex py-8">
            <x-submit-button />
        </div>
    </form>

@endsection
