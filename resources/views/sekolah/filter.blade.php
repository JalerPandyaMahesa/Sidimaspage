<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>{{ $filter }} Sekolah</title>

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 15px;
            text-align: left;
        }

        a {
            text-decoration: none;
            color: #0000FF;
        }

        a:hover {
            text-decoration: underline;
            color: #FF0000;
        }
    </style>
</head>

<body>
    <div class="min-h-full">
        <nav class="bg-[#DA1212]" x-data="{ isOpen: false }">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex items-center">
                        <div class="flex items-center space-x-2 px-3 py-2 rounded-md" href="#">
                            <!-- Logo -->
                            {{-- <img class="h-8 w-8" src="{{ asset('img/Logo.png') }}" alt="Your Company"> --}}
                            <img class="h-10 w-15" src="{{ asset('img/SDM.png') }}" alt="">
                            <!-- SIMDINDIK Text -->
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->

                                <a href="{{ route('sekolah.tk') }}"
                                    class="block rounded-md px-3 py-2 text-base font-medium text-white hover:bg-[#041562] hover:text-white">PAUD
                                    & DIKMAS</a>
                                <a href="{{ route('sekolah.sd') }}"
                                    class="block rounded-md px-3 py-2 text-base font-medium text-white hover:bg-[#041562] hover:text-white">SD</a>
                                <a href="{{ route('sekolah.smp') }}"
                                    class="block rounded-md px-3 py-2 text-base font-medium text-white hover:bg-[#041562] hover:text-white">SMP</a>
                                <a href="{{ route('sekolah.index') }}"
                                    class="block rounded-md px-3 py-2 text-base font-medium text-white hover:bg-[#041562] hover:text-white">All</a>
                                <a href="{{ route('sekolah.create') }}"
                                    class="block rounded-md px-3 py-2 text-base font-medium text-white hover:bg-[#041562] hover:text-white">Create
                                    Sekolah</a>
                            </div>
                        </div>
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-4 flex items-center md:ml-6">

                            <!-- Profile dropdown -->
                            <div class="relative ml-3">
                                <div>
                                    <button type="button" @click="isOpen = !isOpen"
                                        class="relative flex max-w-xs items-center rounded-full bg-[#DA1212]" text-sm
                                        focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2
                                        focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false"
                                        aria-haspopup="true">
                                        <span class="absolute -inset-1.5"></span>
                                        <span class="sr-only">Open user menu</span>
                                        <img class="h-8 w-8 rounded-full" src="{{ asset('img/profile2.png') }}"
                                            alt="">
                                    </button>
                                </div>

                                <div x-show="isOpen" x-transition:enter="transition ease-out duration-100 transform"
                                    x-transition:enter-start="opacity-0 scale-95"
                                    x-transition:enter-end="opacity-100 scale-100"
                                    x-transition:leave="transition ease-in duration-75 transform"
                                    x-transition:leave-start="opacity-100 scale-100"
                                    x-transition:leave-end="opacity-0 scale-95"
                                    class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                                    role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                                    tabindex="-1">
                                    <!-- Active: "bg-gray-100", Not Active: "" -->
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                        tabindex="-1" id="user-menu-item-0">Your Profile</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                        tabindex="-1" id="user-menu-item-1">Settings</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                        tabindex="-1" id="user-menu-item-2">Sign out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="-mr-2 flex md:hidden">
                        <!-- Mobile menu button -->
                        <button type="button" @click="isOpen = !isOpen"
                            class="relative inline-flex items-center justify-center rounded-md bg-[#11468F] p-2 text-white hover:bg-[#041562] hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                            aria-controls="mobile-menu" aria-expanded="false">
                            <span class="absolute -inset-0.5"></span>
                            <span class="sr-only">Open main menu</span>
                            <!-- Menu open: "hidden", Menu closed: "block" -->
                            <svg :class="{ 'hidden': isOpen, 'block': !isOpen }" class="block h-6 w-6" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                            <!-- Menu open: "block", Menu closed: "hidden" -->
                            <svg :class="{ 'block': isOpen, 'hidden': !isOpen }" class="hidden h-6 w-6" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Mobile menu, show/hide based on menu state. -->
            <div x-show="isOpen" class="md:hidden" id="mobile-menu">
                <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    <a href="#" class="block rounded-md bg-[#11468F] px-3 py-2 text-base font-medium text-white"
                        aria-current="page">Dashboard</a>
                    <a href="{{ route('sekolah.tk') }}"
                        class="block rounded-md px-3 py-2 text-base font-medium text-white hover:bg-[#041562] hover:text-white">PAUD
                        & DIKMAS</a>
                    <a href="{{ route('sekolah.sd') }}"
                        class="block rounded-md px-3 py-2 text-base font-medium text-white hover:bg-[#041562] hover:text-white">SD</a>
                    <a href="{{ route('sekolah.smp') }}"
                        class="block rounded-md px-3 py-2 text-base font-medium text-white hover:bg-[#041562] hover:text-white">SMP</a>
                    <a href="{{ route('sekolah.index') }}"
                        class="block rounded-md px-3 py-2 text-base font-medium text-white hover:bg-[#041562] hover:text-white">All</a>
                    <a href="{{ route('sekolah.create') }}"
                        class="block rounded-md px-3 py-2 text-base font-medium text-white hover:bg-[#041562] hover:text-white">Create
                        Sekolah</a>
                </div>
                <div class="border-t border-gray-700 pb-3 pt-4">
                    <div class="flex items-center px-5">
                        <div class="flex-shrink-0">
                            <img class="h-10 w-10 rounded-full" src="{{ asset('img/profile2.png') }}"
                                alt="">
                        </div>
                    </div>
                    <div class="mt-3 space-y-1 px-2">
                        <a href="#"
                            class="block rounded-md px-3 py-2 text-base font-medium text-white hover:bg-[#041562] hover:text-white">Your
                            Profile</a>
                        <a href="#"
                            class="block rounded-md px-3 py-2 text-base font-medium text-white hover:bg-[#041562] hover:text-white">Settings</a>
                        <a href="#"
                            class="block rounded-md px-3 py-2 text-base font-medium text-white hover:bg-[#041562] hover:text-white">Sign
                            out</a>
                    </div>
                </div>
            </div>
        </nav>
        <header class="bg-white shadow">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900">Menampilkan {{ $filter }} Sekolah
                </h1>
            </div>
        </header>
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Kabupaten</th>
                            <th>Kecamatan</th>
                            <th>Bentuk Pendidikan</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sekolah as $index => $s)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>
                                    <a href="{{ route('sekolah.show', ['sekolah_id' => $s->sekolah_id]) }}"> {{ $s->nama }}</a></td>
                                <td>{{ $s->kabupaten }}</td>
                                <td>{{ $s->kecamatan }}</td>
                                <td>{{ $s->bentuk_pendidikan }}</td>
                                <td>
                                <a href="{{ route('sekolah.edit', ['sekolah_id' => $s->sekolah_id]) }}"><button>Edit</button></a>
                                    <form action="{{ route('sekolah.destroy', ['sekolah_id' => $s->sekolah_id]) }}"
                                        method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</body>

</html>
