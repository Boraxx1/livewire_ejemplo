<x-layouts::app :title="__('Ver rol')">
    <div class="mx-auto w-full max-w-2xl">
        <p class="role-kicker">Administración</p>
        <h1 class="mt-1 text-2xl font-semibold text-zinc-900 dark:text-white">Ver rol</h1>
        <p class="mt-2 text-sm text-zinc-600 dark:text-zinc-400">Detalles del rol {{ $role->name }}.</p>
    </div>
    <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-zinc-200 dark:divide-zinc-700">
                        <thead class="bg-zinc-50 dark:bg-zinc-800/70">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wide text-zinc-600 dark:text-zinc-300">Nombre</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wide text-zinc-600 dark:text-zinc-300">Descripción</th>
                                <th scope="col" class="px-6 py-3 text-right text-xs font-semibold uppercase tracking-wide text-zinc-600 dark:text-zinc-300">Creado</th>
                                <th scope="col" class="px-6 py-3 text-right text-xs font-semibold uppercase tracking-wide text-zinc-600 dark:text-zinc-300">Actualizado</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-zinc-200 dark:divide-zinc-700">
                            <tr class="transition hover:bg-zinc-50/80 dark:hover:bg-zinc-800/60">
                                <td class="whitespace-nowrap px-6 py-4 text-sm font-medium text-zinc-900 dark:text-white">{{ $role->nombre }}</td>
                                <td class="px-6 py-4 text-sm text-zinc-600 dark:text-zinc-400">{{ $role->descripcion ?: 'Sin descripción' }}</td>
                                <td class="whitespace-nowrap px-6 py-4 text-right text-sm text-zinc-600 dark:text-zinc-400">{{ $role->created_at->format('d/m/Y H:i') }}</td>
                                <td class="whitespace-nowrap px-6 py-4 text-right text-sm text-zinc-600 dark:text-zinc-400">{{ $role->updated_at->format('d/m/Y H:i') }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
</x-layouts::app>