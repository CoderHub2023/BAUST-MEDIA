<!-- <div class="navbar bg-gradient-to-r  from-green-600 to-red-600">
  <div class="navbar-start">
    <div class="dropdown">
      <label tabindex="0" class="btn btn-ghost lg:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
      </label>
      <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
        <li class="text-white"><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ url('/') }}">Notification</a></li>
        <li tabindex="0">
          <a class="justify-between">
            Parent
            <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z"/></svg>
          </a>
          <ul class="p-2">
            <li><a>Submenu 1</a></li>
            <li><a>Submenu 2</a></li>
          </ul>
        </li>
        <li><a>Item 3</a></li>
      </ul>
    </div>
    <a class="btn btn-ghost normal-case text-xl text-white" href="{{ url('/') }}">BSM</a>
  </div>
  <div class="navbar-center hidden lg:flex">
    <ul class="menu menu-horizontal px-1 text-white">
      <li class="text-white"><a href="{{ url('/') }}">Home</a></li>
      <li class="text-white"><a href="{{ url('/') }}">Notification</a></li>
      <li tabindex="0">
        <a>
          Parent
          <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z"/></svg>
        </a>
        <ul class="p-2">
          <li class="text-white"><a>Submenu 1</a></li>
          <li><a>Submenu 2</a></li>
        </ul>
      </li>
      <li><a>Item 3</a></li>
    </ul>
  </div>
  <div class="navbar-end">
  @if (Route::has('login'))
  @auth
    <a class="btn btn-primary" href="{{ route('profile') }}">Profile</a>
    @else
    <a class="btn btn-success" href="{{ route('login') }}">Login</a>
    @if (Route::has('register'))
    <a class="btn btn-info" href="{{ url('/register') }}">Register</a>
    @endif
    @endauth
    @endif
  </div>
</div> -->

<nav class="flex items-center justify-between flex-wrap bg-gray-800 p-6">
  <div class="flex items-center flex-shrink-0 text-white mr-6">
    <span class="fa fa-code fa-2x"></span>
    <span class="font-semibold text-xl tracking-tight ml-2"><a href="{{ route('home') }}">BSM</a></span>
  </div>
  <div class="block lg:hidden">
    <button class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-white hover:border-white">
      <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <title>Menu</title>
        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
      </svg>
    </button>
  </div>
  <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
    <div class="text-sm lg:flex-grow">
      <a href="{{ route('home') }}" class="block mt-4 lg:inline-block lg:mt-0 text-gray-300 hover:text-white mr-4">
        <span class="fa fa-home mr-1"></span> Home
      </a>
      <a href="{{ route('My-Network') }}" class="block mt-4 lg:inline-block lg:mt-0 text-gray-300 hover:text-white mr-4">
        <span class="fa fa-network-wired mr-1"></span>My Network
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
      @if (Route::has('login'))
      @auth
      <a class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-gray-500 hover:bg-white mt-4 lg:mt-0" href="{{ route('profile') }}">Profile</a>
      @else
      <a class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-gray-500 hover:bg-white mt-4 lg:mt-0" href="{{ route('login') }}">Login</a>
      @if (Route::has('register'))
      <a class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-gray-500 hover:bg-white mt-4 lg:mt-0" href="{{ url('/register') }}">Register</a>
      @endif
      @endauth
      @endif
    </div>
  </div>
</nav>