<nav class="flex items-center justify-between flex-wrap bg-gray-800 p-6 ">
  <div class="flex items-center flex-shrink-0 text-white mr-6">
    <span class="fa fa-code fa-2x"></span>
    <span class="font-semibold text-xl tracking-tight ml-2"><a href="{{ route('home') }}">BSM</a></span>
  </div>
  <div class="block lg:hidden">
    <button id="mobile-menu-button" class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-white hover:border-white">
      <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <title>Menu</title>
        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
      </svg>
    </button>
  </div>
  <div id="mobile-menu"  class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
    <div class="text-sm lg:flex-grow">
      <a href="{{ route('home') }}" class="block mt-4 lg:inline-block lg:mt-0 text-gray-300 hover:text-white mr-4">
        <span class="fa fa-home mr-1"></span> Home
      </a>
      <a href="{{ route('My-Network') }}" class="block mt-4 lg:inline-block lg:mt-0 text-gray-300 hover:text-white mr-4">
        <span class="fa fa-network-wired mr-1"></span>Network
      </a>
      <a href="#" class="block mt-4 lg:inline-block lg:mt-0 text-gray-300 hover:text-white mr-4">
        <span class="fa fa-suitcase mr-1"></span>Jobs
      </a>
      <a href="#" class="block mt-4 lg:inline-block lg:mt-0 text-gray-300 hover:text-white mr-4">
        <span class="fa fa-bell mr-1"></span> Notifications
      </a>
      <a href="#" class="block mt-4 lg:inline-block lg:mt-0 text-gray-300 hover:text-white">
        <span class="fa fa-envelope mr-1"></span> Messages
      </a>
    </div>
    <div>
     
      <div class="dropdown dropdown-end ml-72">
        <label tabindex="0" class="btn btn-info btn-circle avatar">
            <div class="w-10 rounded-full">
                <img src="{{ $user[0]->profile_picture }}" />
            </div>
        </label>
        <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
            <li>
                <a class="justify-between" href="{{ route('profile') }}">
                    Profile
                    <span class="badge">New</span>
                </a>
            </li>
            <li><a href="{{ route('profile.edit') }}">Update Profile</a></li>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <li :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                    <a>Logout</a>
                </li>
            </form>
        </ul>
    </div>
     
    </div>
  </div>
</nav>

