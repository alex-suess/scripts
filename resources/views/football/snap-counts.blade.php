@extends('app')

@section('content')
    <h3 class="text-4xl text-purple-900 py-12 tracking-wide">Convert string from pfr to php array</h3>
    <form action="{{route('football.convert-snap-counts')}}" method='POST'>
        @csrf
        {{ $snapCountInput ?? 'asa' }}
        <div class="flex flex-wrap lg:flex-row flex-col">
            <div class="lg:w-1/3">
                <p class="mr-4 pb-4">Snap Counts go here</p>
                <div class='flex lg:mr-4 bg-gradient-to-r from-purple-800 to-red-800 text-white font-mono rounded-lg'>
                    <x-textarea name='rawSnapCounts' input="{!! $snapCountInput ?? '' !!}" />
                </div>
            </div>

            <div class="lg:w-1/3">
                <p class="mr-4 pb-4">Passing stats go here</p>
                <div class='flex lg:mr-4 bg-gradient-to-r from-purple-800 to-red-800 text-white font-mono rounded-lg'>
                    <x-textarea name='rawPassingStats' input="{!! $passingInput ?? '' !!}" />
                </div>
            </div>

            <div class="lg:w-1/3">
                <p class="mr-4 pb-4">Rushing/Receiving stats go here</p>
                <div class='flex lg:mr-4 bg-gradient-to-r from-purple-800 to-red-800 text-white font-mono rounded-lg'>
                    <x-textarea name='rawRushingReceivingStats' input="{!! $rushingReceivingInput ?? '' !!}" />
                </div>
            </div>
        </div>
        <div class="flex justify-end py-8">
            <x-submit-button />
        </div>
    </form>

@endsection
