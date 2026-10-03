<!DOCTYPE html>
<html lang="es">
<head><meta charset="UTF-8"><title>Perfil profesional</title></head>
<body>
<h1>Perfil profesional</h1>
<p>Profesión: {{ $perfil->profesion }}</p>
<p>Teléfono: {{ $perfil->telefono }}</p>
<p>Biografía: {{ $perfil->biografia }}</p>
<p><a href="{{ route('perfil.edit', $perfil) }}">Editar perfil</a></p>
<p><a href="{{ route('dashboard') }}">Volver al dashboard</a></p>
</body>
</html>