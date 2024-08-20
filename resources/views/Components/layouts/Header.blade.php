<header class="bg-black text-white flex flex-row justify-between items-center px-6 py-2 h-[8.5vh]">

    <div class="flex justify-around items-center text-2xl">
      <img src={{asset("Logotipo/Logo.png")}} height="50px" width="50px" alt="Logotipo Helpcore" />
      <span class="font-bold hover:text-gray-300 font-sans">
        HELPCORE
      </span>

    </div>

    <div class="h-[100%] w-[10%] min-w-10 flex items-center justify-around">

      <div class='hidden md:flex items-center justify-around space-x-6'>

          <x-notifications.icons
              icon="icons.chat"
              notificationCount="9"
              color="white"
              scale=20
          />

          <x-notifications.icons
              icon="icons.bell"
              notificationCount="2"
              color="white"
              scale=20
          />
          
      </div>

      <div x-data="{ isDropdownOpen: false }" class="relative">
        <a href="javascript:void(0);">
            <img
                src="{{ asset('Perfil/avatar.jpg') }}"
                height="38px"
                width="38px"
                class="rounded-3xl border-2 border-white cursor-pointer"
                alt="Foto de Perfil"
                @click="isDropdownOpen = !isDropdownOpen"
            />
        </a>
            <div 
                x-show="isDropdownOpen" 
                @click.away="isDropdownOpen = false"
                @mouseleave="isDropdownOpen = false"
                x-transition
                class="absolute right-0 mt-4 w-48 bg-gray-100 text-black rounded-lg shadow-lg"
            >
                <ul>
                    <li class="p-2 hover:bg-gray-200 cursor-pointer">Perfil</li>
                    <li class="p-2 hover:bg-gray-200 cursor-pointer">Configurações</li>
                    <li class="p-2 hover:bg-gray-200 cursor-pointer">Sair</li>
                </ul>
                
            </div>
        </div>
    </div>
      </div>
    </div>
  </header>