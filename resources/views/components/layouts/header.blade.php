<header class="w-full h-24 bg-blue-100 flex items-center justify-between px-6 shadow">

    {{-- Logo --}}
    <div class="flex items-center gap-3">
        <img src="{{ asset('images/logo.png') }}" alt="logo" class="h-14">
        <h1 class="text-3xl font-bold text-blue-800">
            {{__("Gestión de Instituto")}} 
        </h1>
    </div>

    {{-- Acciones --}}
    <div class="flex items-center gap-3">

        <x-layouts.setlang />

        @guest
            <a href="{{ route('login') }}" class="btn btn-primary">
                Login
            </a>

            <a href="{{ route('register') }}" class="btn btn-primary">
                Register
            </a>
        @endguest

        @auth
            <span class="text-lg font-semibold text-blue-900">
                {{ auth()->user()->name }}
            </span>

            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-secondary">
                    Salir
                </button>
            </form>

            @role('admin')
                <a href="{{ route('alumnos.index') }}" class="btn btn-primary">
                    Administrar
                </a>
            @endrole
        @endauth
    </div>
</header>
