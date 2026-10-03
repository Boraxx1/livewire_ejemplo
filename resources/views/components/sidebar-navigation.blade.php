@props(['user'])

<flux:sidebar.nav aria-label="Navegación Principal">
    <flux:sidebar.group heading="Mi espacio" class="grid">
        <flux:sidebar.item icon="home" :href="route('dashboard')"
            :current="request()->routeIs('dashboard')"
            :aria-current="request()->routeIs('dashboard') ? 'page' : null"
            wire:navigate>
        </flux:sidebar.item>
        <flux:sidebar.item icon="user" :href="route('profile.show')"
            :current="request()->routeIs('profile.show')"
            :aria-current="request()->routeIs('profile.show') ? 'page' : null"
            wire:navigate>
        </flux:sidebar.item>

        @if ($user->isAdmin())
            <flux:sidebar.item icon="users" :href="route('admin.users.index')"
                :current="request()->routeIs('admin.users.*')"
                :aria-current="request()->routeIs('admin.users.*') ? 'page' : null"
                wire:navigate>
            </flux:sidebar.item>
        @endif

        
    </flux:sidebar.group>
</flux:sidebar.nav>