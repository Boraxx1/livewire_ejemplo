@props(['user'])

<flux:sidebar.nav aria-label="Navegación Principal">
    <flux:sidebar.group heading="Mi espacio" class="grid">
        <flux:sidebar.item icon="home" :href="route('dashboard')"
            :current="request()->routeIs('dashboard')"
            :aria-current="request()->routeIs('dashboard') ? 'page' : null"
            wire:navigate>
            {{ __('Dashboard') }}
        </flux:sidebar.item>
        <flux:sidebar.item icon="user" :href="route('profile.edit')"
            :current="request()->routeIs('profile.edit')"
            :aria-current="request()->routeIs('profile.edit') ? 'page' : null"
            wire:navigate>
            {{ __('Perfil') }}
        </flux:sidebar.item>

        @if ($user->isAdmin())
            <flux:sidebar.item icon="users" :href="route('roles.index')"
                :current="request()->routeIs('roles.*')"
                :aria-current="request()->routeIs('roles.*') ? 'page' : null"
                wire:navigate>
                {{ __('Roles') }}
            </flux:sidebar.item>
        @endif

        
    </flux:sidebar.group>
</flux:sidebar.nav>