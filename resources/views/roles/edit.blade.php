<x-layouts::app :title="__('Editar rol')">
    <div class="mx-auto w-full max-w-2xl">
        <p class="role-kicker">Administración</p>
        <h1 class="mt-1 text-2xl font-semibold text-zinc-900 dark:text-white">Editar rol</h1>
        <p class="mt-2 text-sm text-zinc-600 dark:text-zinc-400">Actualiza la información de {{ $role->name }}.</p>
        <form method="POST" action="{{ route('roles.update', $role) }}" class="mt-6 rounded-xl border border-zinc-200 bg-white p-6 shadow-sm dark:border-zinc-700 dark:bg-zinc-900">
            @csrf
            @method('PUT')
            @include('roles._form', ['role' => $role])
        </form>
    </div>
</x-layouts::app>