<x-dropdown>
<div class="btn btn-glass cursor-pointer">
<x-slot name="trigger">
  Selecciona un idioma
</x-slot>
</div>
<x-slot name="content">
  @foreach(config("language") as $code => $data)
  <a href="{{__('set_lang, $code')}}">{{$data["name"]}} {{$data["flag"]}} </a>
    {{$data["name"]}}
    {{$data["flag"]}}
    <br/>
  @endforeach
</x-slot>
</x-dropdown>
