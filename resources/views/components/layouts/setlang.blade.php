<select name="lang" onchange="window.location.href=this.value" id="">
  <option value="" disabled selected> Selecciona un idioma </option>
@foreach(config("languages") as $code => $content)
  <option value="lang/{{$code}}"> {{$content['name']}} {{$content['flag']}} </option>
  @endforeach
</select>

