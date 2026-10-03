<!DOCTYPE html>
<html lang="es">
<head><meta charset="UTF-8"><title>Editar perfil</title></head>
<body>
<h1>Editar perfil profesional</h1>
@if ($errors->any())
    <ul role="alert">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
<form method="POST" action="{{ route('perfil.update', $perfil) }}">
    @csrf
    @method('PUT')
    <p><label for="telefono">Teléfono</label>
    <input id="telefono" type="text" name="telefono" maxlength="30" value="{{ old('telefono', $perfil->telefono) }}"></p>
    <p><label for="profesion">Profesión</label>
    <input id="profesion" type="text" name="profesion" maxlength="255" required value="{{ old('profesion', $perfil->profesion) }}"></p>
    <p><label for="biografia">Biografía</label>
    <textarea id="biografia" name="biografia">{{ old('biografia', $perfil->biografia) }}</textarea></p>
    <button type="submit">Actualizar perfil</button>
</form>
<p><a href="{{ route('perfil.show', $perfil) }}">Cancelar</a></p>
</body>
</html>