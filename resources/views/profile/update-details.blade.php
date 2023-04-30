@extends('template')

<!-- Navbar Start -->
<div class="navbar bg-gradient-to-r from-purple-700 to-slate-600 ">
    <div class="flex-1">
        <a class="btn btn-ghost normal-case text-xl text-white" href="{{ route('home') }}">BSM</a>
    </div>
    <div class="dropdown dropdown-end">
        <label tabindex="0" class="btn btn-ghost btn-circle avatar">
            <div class="w-10 rounded-full">
                <img src="https://avatars.githubusercontent.com/u/71976987?v=4" />
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
<!-- Navbar end -->

<!-- Contest Start -->
@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-5">
    <div class="shadow-2xl rounded-md bg-white dark:bg-gray-900 px-6 py-8 sm:py-10 lg:py-12">
        <!-- cover image and profile photo -->
        <form  action="{{ route('profile.image-upload') }}" method="post" enctype="multipart/form-data">
            @csrf
            <!-- <input type="file" name="cover_images" id="CoverInput" style="display:none" accept="image/*">
            <input type="file" name="profile_images" id="ProfileInput" style="display:none" accept="image/*"> -->
            <input type="file" name="cover_picture[]" class="block w-full text-sm text-slate-500
                file:mr-4 file:py-2 file:px-4
                file:rounded-full file:border-0
                file:text-sm file:font-semibold
                file:bg-violet-50 file:text-violet-700
                hover:file:bg-violet-100
                " />
            <!-- Cover image section -->
            <div class="flex">
                <div class="shrink-0">
                    <img class="h-16 w-16 object-cover rounded-full" src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1361&q=80" alt="Current profile photo" />
                </div>
                <label class="block">
                    <span class="sr-only">Choose profile photo</span>
                
                </label>
            </div>

            <button type="submit" class="mt-10 btn btn-success">Save</button>
        </form>

        <!-- name and occupation -->
        <div class="bg-gray-100 dark:bg-gray-900 lg:flex mt-4">
            <!-- Left column -->
            <div class="w-2/2 lg:w-1/2 p-8">
                <h1 class="text-2xl font-extrabold  dark:text-white text-gray-400 tracking-tight mb-2 mt-2">{{$user->name}}</h1>
                <h2 class="text-xs font-bold dark:text-white text-gray-400 tracking-tight mb-4">{{$user->headlines}}</h2>
                <p class="text-xs dark:text-white text-gray-500 mb-4">{{$user->address}}</p>
            </div>
            <!-- Right column -->
            <div class="w-2/2 lg:w-1/2 p-8">
                <form action="{{ route('profile.work_update_details') }}" method="post">
                    @csrf
                    <h2 class="text-lg font-bold dark:text-white text-gray-500 tracking-tight mb-4">Work at:</h2>
                    <p class="text-lg dark:text-white text-gray-400 mb-4"><input type="text" name="work" placeholder="Company Name" class="input mb-2 input-bordered input-primary w-full max-w-xs" /></p>
                    <p class="text-gray-800 dark:text-white"><input type="text" name="position" placeholder="Position" class="input input-bordered input-sm w-full max-w-xs" /></p>
                    <div class="flex w-60 mt-6">
                        <input type="date" name="start" placeholder="Start" class="mr-2 input input-bordered input-sm w-1/2 max-w-sm" />
                        <input type="date" name="end" placeholder="End" class="input input-bordered input-sm w-1/2 max-w-sm" />
                    </div>
                    <button type="submit" class="btn btn-success mt-4">Save</button>
                </form>
                <form action="{{ route('profile.education_update_details') }}" method="post">
                    @csrf
                    <h2 class="text-lg font-bold mt-2 dark:text-white text-gray-500 tracking-tight mb-4">Studies at:</h2>
                    <p class="text-lg dark:text-white text-gray-400 mb-4"><input type="text" name="institution" placeholder="Institution Name" class="input mb-2 input-bordered input-primary w-full max-w-xs" /></p>
                    <p class="text-gray-800 dark:text-white"><input type="text" name="subject" placeholder="Group/Subject" class="input input-bordered input-sm w-full max-w-xs" /></p>
                    <div class="flex w-60 mt-6">
                        <input type="date" name="start" placeholder="Start" class="mr-2 input input-bordered input-sm w-1/2 max-w-sm" />
                        <input type="date" name="end" placeholder="End" class="input input-bordered input-sm w-1/2 max-w-sm" />
                    </div>
                    <button type="submit" class="btn btn-success mt-4">Save</button>
                </form>
            </div>
        </div>
        <button class="btn btn-info"><a href="{{ route('profile.update-details') }}">Edit Details</a></button>
    </div>
</div>
<!-- About section -->
<form action="{{ route('profile.about-details') }}" method="post">
    @csrf
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-5">
        <div class="shadow-2xl rounded-md bg-white dark:bg-gray-900 px-6 py-8 sm:py-10 lg:py-12">
            <h2 class="text-3xl font-bold mb-4 dark:text-white">About Me</h2>
            <p class="dark:text-gray-400 text-lg leading-relaxed mb-6"><textarea name="about" placeholder="{{ $getAboutData }}" class="textarea textarea-bordered textarea-lg w-full max-w-xs"> </textarea></p>
            <button type="submit" class="btn btn-success">Save</button>
        </div>
    </div>
</form>

<!-- Skill Section -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-5 ">
    <div class="shadow-xl rounded-md bg-gray-100 dark:bg-gray-900 px-6 py-8 sm:py-10 lg:py-12">
        <h2 class="text-3xl font-bold mb-4">Skills</h2>
        <div class="grid grid-cols-4 gap-6">
            <div class="bg-gray-200 rounded-full h-6">
                <div class="bg-blue-600 rounded-full h-6 w-1/2 text-center text-white">
                    <p>C/C++</p>
                </div>
            </div>
            <div class="bg-gray-200 rounded-full h-6">
                <div class="bg-green-600 rounded-full h-6 w-3/4 text-center text-white">
                    <p>JavaScript</p>
                </div>
            </div>
            <div class="bg-gray-200 rounded-full h-6">
                <div class="bg-purple-600 rounded-full h-6 w-1/4 text-center text-white">
                    <p>React</p>
                </div>
            </div>
            <div class="bg-gray-200 rounded-full h-6">
                <div class="bg-red-600 rounded-full h-6 w-2/3 text-center text-white">
                    <p>Laravel</p>
                </div>
            </div>
            <div class="bg-gray-200 rounded-full h-6">
                <div class="bg-yellow-600 rounded-full h-6 w-1/3 text-center text-white">
                    <p>MySQL</p>
                </div>
            </div>
            <div class="bg-gray-200 rounded-full h-6">
                <div class="bg-pink-600 rounded-full h-6 w-1/2 text-center text-white">
                    <p>NoSQL</p>
                </div>
            </div>
            <div class="bg-gray-200 rounded-full h-6">
                <div class="bg-teal-600 rounded-full h-6 w-3/4 text-center text-white">
                    <p>PHP</p>
                </div>
            </div>
            <div class="bg-gray-200 rounded-full h-6">
                <div class="bg-indigo-600 rounded-full h-6 w-3/5 text-center text-white">
                    <p>Python</p>
                </div>
            </div>
        </div>
        <button class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">See More</button>
    </div>
</div>

<!-- Education section -->
<form action="{{ route('profile.post-update-details') }}" method="post">
    @csrf
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-5 ">
        <div class="shadow-xl rounded-md bg-gray-100 dark:bg-gray-900 px-6 py-8 sm:py-10 lg:py-12">
            <h2 class="text-3xl font-bold mb-4 text-black dark:text-white">Education</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 flex-shrink-0 mr-4">
                        <span class="text-3xl"><i class="fas fa-graduation-cap"></i></span>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-black dark:text-white"><input type="text" name="institution" placeholder="Institution Name" class="input mb-2 input-bordered input-primary w-full max-w-xs" /></h3>
                        <p class="text-gray-800 dark:text-white"><input type="text" name="subject" placeholder="Group/Subject" class="input input-bordered input-sm w-full max-w-xs" /></p>
                        <p class="text-gray-500 dark:text-white"><input type="text" name="start" placeholder="Starting Year" class="input mt-2 input-bordered input-sm w-full max-w-xs" /></p>
                        <p class="text-gray-500 dark:text-white"><input type="text" name="end" placeholder="Ending Year" class="input mt-2 input-bordered input-sm w-full max-w-xs" /></p>

                    </div>
                </div>



            </div>
            <button type="submit" class="btn btn-success">Save</button>
        </div>
        <a href="#" class="text-blue-500 hover:underline block mt-6">See More</a>
    </div>
</form>

</div>
@endsection
<!-- Content End -->