<x-layouts::app :title="__('Nuevo rol')">
    <div class="mx-auto w-full max-w-2xl">
        <p class="role-kicker">Administración</p>
        <h1 class="mt-1 text-2xl font-semibold text-zinc-900 dark:text-white">Nuevo rol</h1>
        <p class="mt-2 text-sm text-zinc-600 dark:text-zinc-400">Completa la información para crear un rol.</p>
        <form method="POST" action="{{ route('roles.store') }}" class="mt-6 rounded-xl border border-zinc-200 bg-white p-6 shadow-sm dark:border-zinc-700 dark:bg-zinc-900">
            @csrf
            @include('roles._form')
        </form>
    </div>
</x-layouts::app>