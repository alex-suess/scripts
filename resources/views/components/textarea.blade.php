@props(['name' => 'textarea', 'input' => ''])
<div class='flex w-full h-full'>
    <textarea class="w-full h-full p-4 bg-black bg-opacity-75 border-2 border-transparent rounded-lg focus:outline-none focus:border-yellow-500" rows=16 name="{{$name}}" id="textarea-{{$name}}">{{ $input }}</textarea>
</div>
