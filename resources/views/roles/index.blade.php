<x-layouts::app :title="__('Roles')">
    <div class="mx-auto w-full max-w-5xl space-y-6">
        <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
            <div>
                <p class="role-kicker">Administración</p>
                <h1 class="mt-1 text-2xl font-semibold text-zinc-900 dark:text-white">Roles</h1>
                <p class="mt-2 text-sm text-zinc-600 dark:text-zinc-400">Organiza los roles disponibles para los usuarios de la plataforma.</p>
            </div>
            <a href="{{ route('roles.create') }}" class="inline-flex items-center justify-center rounded-lg bg-zinc-900 px-4 py-2 text-sm font-semibold text-white shadow-sm transition hover:bg-zinc-700 dark:bg-white dark:text-zinc-900 dark:hover:bg-zinc-200">Nuevo rol</a>
        </div>

        @if (session('success'))
            <div role="status" class="rounded-lg border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm text-emerald-800 dark:border-emerald-900/70 dark:bg-emerald-950/40 dark:text-emerald-300">
                {{ session('success') }}
            </div>
        @endif

        <div class="overflow-hidden rounded-xl border border-zinc-200 bg-white shadow-sm dark:border-zinc-700 dark:bg-zinc-900">
            @if ($roles->isEmpty())
                <div class="px-6 py-14 text-center"> 
                    <p class="text-base font-medium text-zinc-900 dark:text-white">Todavía no hay roles.</p>
                    <p class="mt-2 text-sm text-zinc-600 dark:text-zinc-400">Crea el primero para comenzar a organizar la plataforma.</p>
                </div>
            @else
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-zinc-200 dark:divide-zinc-700">
                        <thead class="bg-zinc-50 dark:bg-zinc-800/70">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wide text-zinc-600 dark:text-zinc-300">Nombre</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wide text-zinc-600 dark:text-zinc-300">Descripción</th>
                                <th scope="col" class="px-6 py-3 text-right text-xs font-semibold uppercase tracking-wide text-zinc-600 dark:text-zinc-300">Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-zinc-200 dark:divide-zinc-700">
                            @foreach ($roles as $role)
                                <tr class="transition hover:bg-zinc-50/80 dark:hover:bg-zinc-800/60">
                                    <td class="whitespace-nowrap px-6 py-4 text-sm font-medium text-zinc-900 dark:text-white">{{ $role->nombre }}</td>
                                    <td class="px-6 py-4 text-sm text-zinc-600 dark:text-zinc-400">{{ $role->descripcion ?: 'Sin descripción' }}</td>
                                    <td class="whitespace-nowrap px-6 py-4 text-right text-sm">
                                        <div class="flex justify-end gap-3">
                                            <a href="{{ route('roles.show', $role) }}" class="font-medium text-zinc-700 hover:text-zinc-950 dark:text-zinc-300 dark:hover:text-white">Ver</a>
                                            <a href="{{ route('roles.edit', $role) }}" class="font-medium text-zinc-700 hover:text-zinc-950 dark:text-zinc-300 dark:hover:text-white">Editar</a>
                                            <form method="POST" action="{{ route('roles.destroy', $role) }}" onsubmit="return confirm('¿Deseas eliminar el rol {{ $role->nombre }}?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="font-medium text-red-600 hover:text-red-800 dark:text-red-400 dark:hover:text-red-300">Eliminar</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>
</x-layouts::app>