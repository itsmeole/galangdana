<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vacation Time!</title>
    <link rel="stylesheet" href="{{ asset('storage') }}/assets/css/style3.css">
</head>
<body>
    <nav>
        Masukan Data Lowongan
    </nav>
    <main>
        <h2>Lowongan berhasil diposting</h2>
        <form> <!-- TODO: Set Action and Method Properties -->
            <div>
                <label for="">Data Lowongan Berhasil Diposting</label>
                <!-- TODO: Create a "lastname" input with type "text" -->
            </div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-responsive-nav-link>
            </form>
            {{-- <a href="/" : active="request()->routeIs('laman.utama')"><button type="Button">Kembali Ke home</button></a> --}}
        </form>
    </main>
</body>
</html>
