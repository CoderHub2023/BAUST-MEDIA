            <nav aria-label="nav bar" tabindex="0" class="focus:outline-none w-full bg-gray-800 hidden xl:block shadow">
                <div class="container px-6 h-16 flex justify-between items-center lg:items-stretch mx-auto">
                    <div class="flex items-center"> 
                        <div tabindex="0" class="focus:outline-none mr-10 flex items-center">
                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/black-left-aligned-with-icons-svg1.svg" alt="north" />
                            <h3 class="text-base text-white font-bold tracking-normal leading-tight ml-3 hidden lg:block">BSM</h3>
                        </div>
                        <div class="hidden xl:flex items-center h-full">
                            <a href="{{ route('admin.welcome') }}" class=" h-full flex items-center text-sm hover:text-indigo-700 focus:text-indigo-700 text-white focus:outline-none tracking-normal transition duration-150 ease-in-out">
                                <span class="mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg"  width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" />
                                        <rect x="4" y="4" width="6" height="6" rx="1" />
                                        <rect x="14" y="4" width="6" height="6" rx="1" />
                                        <rect x="4" y="14" width="6" height="6" rx="1" />
                                        <rect x="14" y="14" width="6" height="6" rx="1" />
                                    </svg>
                                </span>
                                Home
                            </a>
                            <a href="{{ route('accepted_user') }}" class="focus:text-indigo-700 focus:outline-none h-full flex items-center text-sm hover:text-indigo-700 text-white mx-10 tracking-normal transition duration-150 ease-in-out">
                                <span class="mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg"  width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" />
                                        <path d="M4 7h3a1 1 0 0 0 1 -1v-1a2 2 0 0 1 4 0v1a1 1 0 0 0 1 1h3a1 1 0 0 1 1 1v3a1 1 0 0 0 1 1h1a2 2 0 0 1 0 4h-1a1 1 0 0 0 -1 1v3a1 1 0 0 1 -1 1h-3a1 1 0 0 1 -1 -1v-1a2 2 0 0 0 -4 0v1a1 1 0 0 1 -1 1h-3a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h1a2 2 0 0 0 0 -4h-1a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1" />
                                    </svg>
                                </span>
                                Accepted
                            </a>
                            <a href="{{ route('rejected_user') }}" class="focus:text-indigo-700 focus:outline-none h-full flex items-center text-sm hover:text-indigo-700 text-white mr-10 tracking-normal transition duration-150 ease-in-out">
                                <span class="mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg"  width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" />
                                        <polyline points="8 16 10 10 16 8 14 14 8 16" />
                                        <circle cx="12" cy="12" r="9" />
                                    </svg>
                                </span>
                                Rejected
                            </a>
                            <a href="{{ route('admin.user_request') }}" class="focus:text-indigo-700 focus:outline-none h-full flex items-center text-sm hover:text-indigo-700 text-white tracking-normal transition duration-150 ease-in-out">
                                <span class="mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg"  width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" />
                                        <polyline points="7 8 3 12 7 16" />
                                        <polyline points="17 8 21 12 17 16" />
                                        <line x1="14" y1="4" x2="10" y2="20" />
                                    </svg>
                                </span>
                                User Request
                            </a>
                        </div>
                    </div>
                    <div class="h-full hidden xl:flex items-center justify-end">
                        <div class="h-full flex">
                            <div class="px-6 h-full flex items-center justify-center border-l border-gray-700 text-gray-400 flex items-center">
                                <input type="text" class="bg-transparent focus:outline-none text-xs w-0 transition duration-150 ease-in-out" placeholder="Type something..." />
                                <img class="focus:outline-none focus:text-indigo-700 icon icon-tabler icon-tabler-search cursor-pointer" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/black-left-aligned-with-icons-svg6.svg" alt="search" />
                            </div>
                            <div class="w-20 h-full flex items-center justify-center border-l border-r border-gray-700 text-gray-400">
                                <img class="focus:outline-none focus:text-indigo-700 icon icon-tabler icon-tabler-messages cursor-pointer" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/black-left-aligned-with-icons-svg7.svg" alt="chat" />
                            </div>
                            <div class="w-20 h-full flex items-center justify-center border-r border-gray-700 cursor-pointer text-gray-400">
                                <img class="focus:outline-none focus:text-indigo-700 icon icon-tabler icon-tabler-bell" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/black-left-aligned-with-icons-svg8.svg" alt="bell" />
                            </div>
                            <button tabindex="0" class="text-white focus:text-indigo-700 focus:outline-none flex items-center pl-8 relative cursor-pointer" onclick="dropdownHandler(this)">
                                <ul class="p-2 w-40 border-r bg-white absolute rounded left-0 shadow mt-16 top-0 hidden">
                                    <li class="cursor-pointer text-gray-600 text-sm leading-3 tracking-normal py-2 hover:text-indigo-700 focus:text-indigo-700 focus:outline-none">
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg"  width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" />
                                                <circle cx="12" cy="7" r="4" />
                                                <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                            </svg>
                                            <a href="{{ route('profile') }}"><span tabindex="0" class="focus:outline-none focus:text-indigo-700 ml-2">My Profile</span></a>
                                        </div>
                                    </li>
                                    <li class="cursor-pointer text-gray-600 text-sm leading-3 tracking-normal mt-2 py-2 hover:text-indigo-700 focus:text-indigo-700 focus:outline-none flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg"  width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" />
                                            <circle cx="12" cy="12" r="9" />
                                            <line x1="12" y1="17" x2="12" y2="17.01" />
                                            <path d="M12 13.5a1.5 1.5 0 0 1 1 -1.5a2.6 2.6 0 1 0 -3 -4" />
                                        </svg>
                                        <span tabindex="0" class="focus:outline-none focus:text-indigo-700 ml-2">Help Center</span>
                                    </li>
                                    <li class="cursor-pointer text-gray-600 text-sm leading-3 tracking-normal mt-2 py-2 hover:text-indigo-700 flex items-center focus:text-indigo-700 focus:outline-none">
                                       <svg xmlns="http://www.w3.org/2000/svg"  width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" />
                                            <path d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                            <circle cx="12" cy="12" r="3" />
                                        </svg>
                                        <span tabindex="0" class="focus:outline-none focus:text-indigo-700 ml-2">Account Settings</span>
                                    </li>
                                </ul>
                                <img class="rounded h-10 w-10 object-cover" src="https://w7.pngwing.com/pngs/306/70/png-transparent-computer-icons-management-admin-silhouette-black-and-white-neck-thumbnail.png" alt="logo" />
                                <p class=" text-sm ml-2">Profile</p>
                            </button>
                        </div>
                    </div>
                    <div class="flex items-center xl:hidden">
                        <ul class="p-2 border-r bg-white absolute rounded top-0 left-0 right-0 shadow mt-16 md:mt-16 hidden">
                            <li class="flex md:hidden cursor-pointer text-gray-600 text-sm leading-3 tracking-normal mt-2 py-2 hover:text-indigo-700 focus:text-indigo-700 focus:outline-none">
                                <div class="flex items-center">
                                   <svg xmlns="http://www.w3.org/2000/svg"  width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" />
                                        <rect x="4" y="4" width="6" height="6" rx="1" />
                                        <rect x="14" y="4" width="6" height="6" rx="1" />
                                        <rect x="4" y="14" width="6" height="6" rx="1" />
                                        <rect x="14" y="14" width="6" height="6" rx="1" />
                                    </svg>
                                    <span class="ml-2 font-bold">Dashboard</span>
                                </div>
                            </li>
                            <li class="flex md:hidden flex-col cursor-pointer text-gray-600 text-sm leading-3 tracking-normal py-2 hover:text-indigo-700 focus:text-indigo-700 focus:outline-none flex justify-center" onclick="dropdownHandler(this)">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg"  width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" />
                                        <path d="M4 7h3a1 1 0 0 0 1 -1v-1a2 2 0 0 1 4 0v1a1 1 0 0 0 1 1h3a1 1 0 0 1 1 1v3a1 1 0 0 0 1 1h1a2 2 0 0 1 0 4h-1a1 1 0 0 0 -1 1v3a1 1 0 0 1 -1 1h-3a1 1 0 0 1 -1 -1v-1a2 2 0 0 0 -4 0v1a1 1 0 0 1 -1 1h-3a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h1a2 2 0 0 0 0 -4h-1a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1" />
                                    </svg>
                                    <span class="ml-2 font-bold"><a href="{{ route('accepted_user') }}"></a></span>
                                </div>
                                <ul class="ml-6 mt-1 hidden">
                                    <li class="cursor-pointer text-gray-600 text-xs leading-3 tracking-normal py-2 hover:bg-indigo-700 hover:text-white px-3 font-normal">Landing Pages</li>
                                    <li class="cursor-pointer text-gray-600 text-xs leading-3 tracking-normal py-2 hover:bg-indigo-700 hover:text-white px-3 font-normal">Templates</li>
                                    <li class="cursor-pointer text-gray-600 text-xs leading-3 tracking-normal pt-2 hover:bg-indigo-700 hover:text-white px-3 font-normal">Components</li>
                                </ul>
                            </li>
                            <li class="md:hidden cursor-pointer text-gray-600 text-sm leading-3 tracking-normal py-2 hover:text-indigo-700 flex items-center focus:text-indigo-700 focus:outline-none">
                                <svg xmlns="http://www.w3.org/2000/svg"  width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" />
                                        <polyline points="8 16 10 10 16 8 14 14 8 16" />
                                        <circle cx="12" cy="12" r="9" />
                                    </svg>
                                <span class="ml-2 font-bold">Performance</span>
                            </li>
                            <li class="border-b border-gray-300 flex md:hidden flex-col cursor-pointer text-gray-600 text-sm leading-3 tracking-normal pt-2 pb-4 hover:text-indigo-700 focus:text-indigo-700 focus:outline-none flex justify-center" onclick="dropdownHandler(this)">
                                <div class="flex items-center">
                                   <svg xmlns="http://www.w3.org/2000/svg"  width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" />
                                        <polyline points="7 8 3 12 7 16" />
                                        <polyline points="17 8 21 12 17 16" />
                                        <line x1="14" y1="4" x2="10" y2="20" />
                                    </svg>
                                    <span class="ml-2 font-bold"><a href="{{ route('admin.user_request') }}">User Request</a></span>
                                </div>
                                <ul class="ml-6 mt-1 hidden">
                                    <li class="cursor-pointer text-gray-600 text-xs leading-3 tracking-normal py-2 hover:bg-indigo-700 hover:text-white px-3 font-normal">Landing Pages</li>
                                    <li class="cursor-pointer text-gray-600 text-xs leading-3 tracking-normal py-2 hover:bg-indigo-700 hover:text-white px-3 font-normal">Templates</li>
                                    <li class="cursor-pointer text-gray-600 text-xs leading-3 tracking-normal pt-2 hover:bg-indigo-700 hover:text-white px-3 font-normal">Components</li>
                                </ul>
                            </li>
                            <li class="cursor-pointer text-gray-600 text-sm leading-3 tracking-normal mt-2 py-2 hover:text-indigo-700 flex items-center focus:text-indigo-700 focus:outline-none">
                                <div class="flex items-center">
                                    <div class="w-12 cursor-pointer flex text-sm border-2 border-transparent rounded focus:outline-none focus:border-white transition duration-150 ease-in-out">
                                        <img class="rounded h-10 w-10 object-cover" src="https://tuk-cdn.s3.amazonaws.com/assets/components/horizontal_navigation/hn_1.png" alt="logo" />
                                    </div>
                                    <p class="text-sm ml-2 cursor-pointer">Jane Doe</p>
                                    <div class="sm:ml-2 text-white relative">
                                        <img class="icon icon-tabler icon-tabler-chevron-down cursor-pointer" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/black-left-aligned-with-icons-svg12.svg" alt="jane" />
                                    </div>
                                </div>
                            </li>
                            <li class="cursor-pointer text-gray-600 text-sm leading-3 tracking-normal py-2 hover:text-indigo-700 focus:text-indigo-700 focus:outline-none">
                                <div class="flex items-center">
                                    <img class="icon icon-tabler icon-tabler-user" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/black-left-aligned-with-icons-svg13.svg" alt="profile" />
                                    <span class="ml-2">Profile</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            