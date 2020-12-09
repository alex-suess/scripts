@props(['name' => 'textarea', 'input' => ''])
<div class='h-full w-full flex'>
    <textarea class="focus:outline-none focus:border-yellow-500 border-2 border-transparent bg-black bg-opacity-75 w-full h-full p-4 rounded-lg" rows=16 name="{{$name}}" id="textarea-{{$name}}">{{$input ?? ''}}</textarea>
</div>
