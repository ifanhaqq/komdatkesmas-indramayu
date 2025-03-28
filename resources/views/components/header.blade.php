<nav class="border-b border-slate-300 col-start-1 col-end-3 flex justify-between items-center px-6">
    <div class="flex items-center gap-5">
        {{-- Menu Sidebar --}}
        @include('icons.MenuIcon')
        {{-- Logo Perusahaan --}}
        <div id="logo-image" class="flex items-center gap-3">
            <a href="/dashboard"><img class="w-56" src="{{ asset('images/indramayu-revisited.png') }}"
                    alt="Logo Profil"></a>
        </div>
    </div>
    {{-- <ul id="menu" class="border"></ul> --}}
    {{-- Profile Box --}}
    <div id="profile-box" class="flex items-center gap-3">
        <div id="profile-name">
            <p class="text-sm text-end">John Doe</p>
            <p class="text-sm font-semibold text-green-700 text-end">Phaco Surgeon</p>
        </div>
        <div id="profile-image"
            class="w-12 h-12 rounded-full flex flex-col items-center justify-center overflow-hidden">
            <img class="scale-140" src="{{ asset('images/profile-placeholder.jpg') }}" alt="Profile Picture">
        </div>
        <button class="cursor-pointer relative" type="button">
            @include('icons.DropdownIcon')
            <div id="dropdown-profile-box" class="absolute bg-green-700 right-0 top-10 rounded shadow-xl w-48 border border-green-800">
                <ul class="px-3 py-1 text-white">
                    <li class="py-3 flex gap-3 items-center justify-start">
                        @include('icons.ProfileIcon')
                        <span>Profil</span>
                    </li>
                    <li class="py-3 flex gap-3 items-center justify-start">
                        @include('icons.SettingIcon')
                        <span>Pengaturan</span>
                    </li>
                    <li class="py-3 flex gap-3 items-center justify-start">
                        @include('icons.LogoutIcon')
                        <span>Log out</span>
                    </li>
                </ul>
            </div>
        </button>
    </div>
</nav>
