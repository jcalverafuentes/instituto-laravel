@auth
<div class="mb-5">
    <label class="block font-semibold text-gray-700 mb-1">Nombre</label>
    <input type="text" name="nombre"
           class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400"
           value="{{ old('nombre', $alumno->nombre ?? '') }}">
    <p class="text-red-500 text-sm">{{ $errors->first('nombre') }}</p>
</div>

<div class="mb-5">
    <label class="block font-semibold text-gray-700 mb-1">Apellido</label>
    <input type="text" name="apellido"
           class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400"
           value="{{ old('apellido', $alumno->apellido ?? '') }}">
    <p class="text-red-500 text-sm">{{ $errors->first('apellido') }}</p>
</div>

<div class="mb-5">
    <label class="block font-semibold text-gray-700 mb-1">Fecha de nacimiento</label>
    <input type="date" name="fecha_nacimiento"
           class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400"
           value="{{ old('fecha_nacimiento', $alumno->fecha_nacimiento ?? '') }}">
    <p class="text-red-500 text-sm">{{ $errors->first('fecha_nacimiento') }}</p>
</div>

<div class="mb-6">
    <label class="block font-semibold text-gray-700 mb-1">Email</label>
    <input type="email" name="email"
           class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400"
           value="{{ old('email', $alumno->email ?? '') }}">
    <p class="text-red-500 text-sm">{{ $errors->first('email') }}</p>
</div>
@endauth
