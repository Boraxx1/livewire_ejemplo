<div class="space-y-5">
    <div>
        <label for="nombre" class="block text-sm font-medium text-zinc-800 dark:text-zinc-200">Nombre</label>
        <input id="nombre" name="nombre" type="text" maxlength="50" required value="{{ old('nombre', $role->nombre ?? '') }}" class="mt-2 block w-full rounded-lg border-zinc-300 bg-white text-zinc-900 shadow-sm placeholder:text-zinc-400 focus:border-zinc-900 focus:ring-zinc-900 dark:border-zinc-600 dark:bg-zinc-800 dark:text-white dark:focus:border-white dark:focus:ring-white">
        @error('nombre')
            <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="descripcion" class="block text-sm font-medium text-zinc-800 dark:text-zinc-200">Descripción <span class="font-normal text-zinc-500">(opcional)</span></label>
        <textarea id="descripcion" name="descripcion" rows="4" maxlength="255" class="mt-2 block w-full rounded-lg border-zinc-300 bg-white text-zinc-900 shadow-sm placeholder:text-zinc-400 focus:border-zinc-900 focus:ring-zinc-900 dark:border-zinc-600 dark:bg-zinc-800 dark:text-white dark:focus:border-white dark:focus:ring-white">{{ old('descripcion', $role->descripcion ?? '') }}</textarea>
        @error('descripcion')
            <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
        @enderror
    </div>

    <div class="flex items-center justify-end gap-3 border-t border-zinc-200 pt-5 dark:border-zinc-700">
        <a href="{{ route('roles.index') }}" class="rounded-lg px-4 py-2 text-sm font-semibold text-zinc-700 transition hover:bg-zinc-100 dark:text-zinc-300 dark:hover:bg-zinc-800">Cancelar</a>
        <button type="submit" class="rounded-lg bg-zinc-900 px-4 py-2 text-sm font-semibold text-white shadow-sm transition hover:bg-zinc-700 dark:bg-white dark:text-zinc-900 dark:hover:bg-zinc-200">Guardar</button>
    </div>
</div>