<!DOCTYPE html>
<html lang="es">
<head><meta charset="UTF-8"><title>Crear perfil</title></head>
<body>
<h1>Crear perfil profesional</h1>
@if ($errors->any())
    <ul role="alert">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
<form method="POST" action="{{ route('perfil.store') }}">
    @csrf
    <p><label for="telefono">Teléfono</label>
    <input id="telefono" type="text" name="telefono" maxlength="30" value="{{ old('telefono') }}"></p>
    <p><label for="profesion">Profesión</label>
    <input id="profesion" type="text" name="profesion" maxlength="255" required value="{{ old('profesion') }}"></p>
    <p><label for="biografia">Biografía</label>
    <textarea id="biografia" name="biografia">{{ old('biografia') }}</textarea></p>
    <button type="submit">Guardar perfil</button>
</form>
<p><a href="{{ route('dashboard') }}">Volver al dashboard</a></p>
</body>
</html>