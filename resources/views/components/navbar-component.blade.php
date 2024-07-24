<nav id="mainNavbar">
    <div class='flex flex-wrap items-center justify-between px-1 py-3 gap-4 w-full'>
        <div class='flex items-center gap-4 px-10'>
            <a href="javascript:void(0)">
                <img src="{{ asset('assets/frontend/logo1.png') }}" alt="logo" class='w-20 h-20' />
            </a>
            <div class="h-20 border-l border-gray-300"></div> <!-- Vertical line -->
            <div class="flex flex-col">
                <span class="text-4xl font-bold tracking-widest">SVS</span>
                <span class="text-xl text-gray-600">Nepalgunj,Banke</span>
            </div>
        </div>

        <div id="collapseMenu"
            class='max-lg:hidden lg:!block max-lg:before:fixed max-lg:before:bg-black max-lg:before:opacity-50 max-lg:before:inset-0 max-lg:before:z-50'>
            <button id="toggleClose" class='lg:hidden fixed top-2 right-4 z-[100] rounded-full bg-white p-3'>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 fill-black" viewBox="0 0 320.591 320.591">
                    <path
                        d="M30.391 318.583a30.37 30.37 0 0 1-21.56-7.288c-11.774-11.844-11.774-30.973 0-42.817L266.643 10.665c12.246-11.459 31.462-10.822 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875L51.647 311.295a30.366 30.366 0 0 1-21.256 7.288z"
                        data-original="#000000"></path>
                    <path
                        d="M287.9 318.583a30.37 30.37 0 0 1-21.257-8.806L8.83 51.963C-2.078 39.225-.595 20.055 12.143 9.146c11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.922-.456.487-.927.958-1.414 1.414a30.368 30.368 0 0 1-23.078 7.288z"
                        data-original="#000000"></path>
                </svg>
            </button>

            <ul
                class='lg:flex lg:gap-x-10 max-lg:space-y-3 max-lg:fixed max-lg:bg-white max-lg:w-1/2 max-lg:min-w-[300px] max-lg:top-0 max-lg:left-0 max-lg:p-6 max-lg:h-full max-lg:shadow-md max-lg:overflow-auto z-50'>
                <li class='mb-6 hidden max-lg:block'>
                    <a href="javascript:void(0)"><img src="https://readymadeui.com/readymadeui.svg" alt="logo"
                            class='w-36' />
                    </a>
                </li>
                <li class='max-lg:border-b max-lg:py-3'><a href='javascript:void(0)'
                        class='hover:text-blue-600 text-[15px] font-bold block'>Home</a></li>
                <li class='group max-lg:border-b max-lg:py-3 relative'>
                    <a href='javascript:void(0)'
                        class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold lg:hover:fill-[#007bff] block'>About
                        Us<svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                            class="ml-1 inline-block" viewBox="0 0 24 24">
                            <path
                                d="M12 16a1 1 0 0 1-.71-.29l-6-6a1 1 0 0 1 1.42-1.42l5.29 5.3 5.29-5.29a1 1 0 0 1 1.41 1.41l-6 6a1 1 0 0 1-.7.29z"
                                data-name="16" data-original="#000000" />
                        </svg>
                    </a>
                    <ul
                        class='absolute shadow-lg bg-white space-y-3 lg:top-5 max-lg:top-8 -left-6 min-w-[250px] z-50 max-h-0 overflow-hidden group-hover:opacity-100 group-hover:max-h-[700px] px-6 group-hover:pb-4 group-hover:pt-6 transition-all duration-500'>
                        <li class='border-b py-2 '><a href='javascript:void(0)'
                                class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>About</a>
                        </li>
                        <li class='border-b py-2 '><a href='javascript:void(0)'
                                class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Contact</a>
                        </li>
                        <li class='border-b py-2 '><a href='javascript:void(0)'
                                class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Login</a>
                        </li>
                        <li class='border-b py-2 '><a href='javascript:void(0)'
                                class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Sign
                                up</a></li>
                        <li class='border-b py-2 '><a href='javascript:void(0)'
                                class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Blog</a>
                        </li>
                    </ul>
                </li>
                <li class='group max-lg:border-b max-lg:py-3 relative'>
                    <a href='javascript:void(0)'
                        class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold lg:hover:fill-[#007bff] block'>Academics<svg
                            xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                            class="ml-1 inline-block" viewBox="0 0 24 24">
                            <path
                                d="M12 16a1 1 0 0 1-.71-.29l-6-6a1 1 0 0 1 1.42-1.42l5.29 5.3 5.29-5.29a1 1 0 0 1 1.41 1.41l-6 6a1 1 0 0 1-.7.29z"
                                data-name="16" data-original="#000000" />
                        </svg>
                    </a>
                    <ul
                        class='absolute shadow-lg bg-white space-y-3 lg:top-5 max-lg:top-8 -left-6 min-w-[250px] z-50 max-h-0 overflow-hidden group-hover:opacity-100 group-hover:max-h-[700px] px-6 group-hover:pb-4 group-hover:pt-6 transition-all duration-500'>
                        <li class='border-b py-2 '><a href='javascript:void(0)'
                                class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Foods</a>
                        </li>
                        <li class='border-b py-2 '>
                            <a href='javascript:void(0)'
                                class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Sale</a>
                        </li>
                        <li class='border-b py-2 '><a href='javascript:void(0)'
                                class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Marketing</a>
                        </li>
                        <li class='border-b py-2 '><a href='javascript:void(0)'
                                class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Investment</a>
                        </li>
                    </ul>
                </li>
                <li class='group max-lg:border-b max-lg:py-3 relative'>
                    <a href='javascript:void(0)'
                        class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold lg:hover:fill-[#007bff] block'>Admission<svg
                            xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                            class="ml-1 inline-block" viewBox="0 0 24 24">
                            <path
                                d="M12 16a1 1 0 0 1-.71-.29l-6-6a1 1 0 0 1 1.42-1.42l5.29 5.3 5.29-5.29a1 1 0 0 1 1.41 1.41l-6 6a1 1 0 0 1-.7.29z"
                                data-name="16" data-original="#000000" />
                        </svg>
                    </a>
                    <ul
                        class='absolute shadow-lg bg-white space-y-3 lg:top-5 max-lg:top-8 -left-6 min-w-[250px] z-50 max-h-0 overflow-hidden group-hover:opacity-100 group-hover:max-h-[700px] px-6 group-hover:pb-4 group-hover:pt-6 transition-all duration-500'>
                        <li class='border-b py-2 '><a href='javascript:void(0)'
                                class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Foods</a>
                        </li>
                        <li class='border-b py-2 '>
                            <a href='javascript:void(0)'
                                class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Sale</a>
                        </li>
                        <li class='border-b py-2 '><a href='javascript:void(0)'
                                class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Marketing</a>
                        </li>
                        <li class='border-b py-2 '><a href='javascript:void(0)'
                                class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Investment</a>
                        </li>
                    </ul>
                </li>
                <li class='max-lg:border-b max-lg:py-3'><a href='javascript:void(0)'
                        class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Activities</a>
                </li>
                <li class='max-lg:border-b max-lg:py-3'><a href='javascript:void(0)'
                        class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>About</a>
                </li>
                <li class='max-lg:border-b max-lg:py-3'><a href='javascript:void(0)'
                        class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Contact</a>
                </li>
            </ul>
        </div>

        <div class='flex items-center space-x-8 max-lg:ml-auto'>
            <div class='group max-lg:border-b max-lg:py-3 relative mr-40'>
                <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24"
                    class="hover:fill-[#007bff]">
                    <circle cx="10" cy="7" r="6" data-original="#000000" />
                    <path
                        d="M14 15H6a5 5 0 0 0-5 5 3 3 0 0 0 3 3h12a3 3 0 0 0 3-3 5 5 0 0 0-5-5zm8-4h-2.59l.3-.29a1 1 0 0 0-1.42-1.42l-2 2a1 1 0 0 0 0 1.42l2 2a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42l-.3-.29H22a1 1 0 0 0 0-2z"
                        data-original="#000000" />
                </svg>
                <ul
                    class='absolute shadow-lg bg-white space-y-3 lg:top-5 max-lg:top-8 -left-6 min-w-[250px] z-50 max-h-0 overflow-hidden group-hover:opacity-100 group-hover:max-h-[700px] px-6 group-hover:pb-4 group-hover:pt-6 transition-all duration-500'>
                    <li class='border-b py-2 '><a href='javascript:void(0)'
                            class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>About</a>
                    </li>

                </ul>
            </div>

        </div>
    </div>
</nav>
<div class="fixed top-0 left-0 right-0 z-50 hidden bg-blue-900 bg-opacity-90" id="stickyNavbar">
    <div class='flex flex-wrap items-center justify-between px-10 py-2 gap-4 w-full'>
        <div class='flex items-center gap-4 px-10'>
            <a href="javascript:void(0)">
                <img src="{{ asset('assets/frontend/logo1.png') }}" alt="logo" class='w-20 h-20' />
            </a>
            <div class="h-20 border-l border-gray-300"></div> <!-- Vertical line -->
            <div class="flex flex-col text-white">
                <span class="text-4xl font-bold tracking-widest">SVS</span>
                <span class="text-xl ">Nepalgunj,Banke</span>
            </div>
        </div>

        <div id="collapseMenu"
            class='max-lg:hidden lg:!block max-lg:before:fixed max-lg:before:bg-black max-lg:before:opacity-50 max-lg:before:inset-0 max-lg:before:z-50'>
            <button id="toggleClose" class='lg:hidden fixed top-2 right-4 z-[100] rounded-full bg-white p-3'>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 fill-white" viewBox="0 0 320.591 320.591">
                    <path
                        d="M30.391 318.583a30.37 30.37 0 0 1-21.56-7.288c-11.774-11.844-11.774-30.973 0-42.817L266.643 10.665c12.246-11.459 31.462-10.822 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875L51.647 311.295a30.366 30.366 0 0 1-21.256 7.288z"
                        data-original="#000000"></path>
                    <path
                        d="M287.9 318.583a30.37 30.37 0 0 1-21.257-8.806L8.83 51.963C-2.078 39.225-.595 20.055 12.143 9.146c11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.922-.456.487-.927.958-1.414 1.414a30.368 30.368 0 0 1-23.078 7.288z"
                        data-original="#000000"></path>
                </svg>
            </button>

            <ul
                class='lg:flex lg:gap-x-10 max-lg:space-y-3 text-white max-lg:fixed max-lg:bg-white max-lg:w-1/2 max-lg:min-w-[300px] max-lg:top-0 max-lg:left-0 max-lg:p-6 max-lg:h-full max-lg:shadow-md max-lg:overflow-auto z-50'>
                <li class='mb-6 hidden max-lg:block'>
                    <a href="javascript:void(0)"><img src="https://readymadeui.com/readymadeui.svg"
                            alt="logo" class='w-36' />
                    </a>
                </li>
                <li class='max-lg:border-b max-lg:py-3'><a href='javascript:void(0)'
                        class='hover:text-blue-600 text-[15px] font-bold block'>Home</a></li>
                <li class='group max-lg:border-b max-lg:py-3 relative'>
                    <a href='javascript:void(0)'
                        class='hover:text-[#007bff]  text-[15px] font-bold lg:hover:fill-[#007bff] block'>About
                        Us<svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                            class="ml-1 inline-block" fill="white" viewBox="0 0 24 24">
                            <path
                                d="M12 16a1 1 0 0 1-.71-.29l-6-6a1 1 0 0 1 1.42-1.42l5.29 5.3 5.29-5.29a1 1 0 0 1 1.41 1.41l-6 6a1 1 0 0 1-.7.29z"
                                data-name="16" data-original="#000000" />
                        </svg>
                    </a>
                    <ul
                        class='absolute shadow-lg text-black bg-white space-y-3 lg:top-5 max-lg:top-8 -left-6 min-w-[250px] z-50 max-h-0 overflow-hidden group-hover:opacity-100 group-hover:max-h-[700px] px-6 group-hover:pb-4 group-hover:pt-6 transition-all duration-500'>
                        <li class='border-b py-2 '><a href='javascript:void(0)'
                                class='hover:text-[#007bff] text-[15px] font-bold block'>About</a>
                        </li>
                        <li class='border-b py-2 '><a href='javascript:void(0)'
                                class='hover:text-[#007bff] text-[15px] font-bold block'>Contact</a>
                        </li>
                        <li class='border-b py-2 '><a href='javascript:void(0)'
                                class='hover:text-[#007bff] text-[15px] font-bold block'>Login</a>
                        </li>
                        <li class='border-b py-2 '><a href='javascript:void(0)'
                                class='hover:text-[#007bff] text-[15px] font-bold block'>Sign
                                up</a></li>
                        <li class='border-b py-2 '><a href='javascript:void(0)'
                                class='hover:text-[#007bff] text-[15px] font-bold block'>Blog</a>
                        </li>
                    </ul>
                </li>
                <li class='group max-lg:border-b max-lg:py-3 relative'>
                    <a href='javascript:void(0)'
                        class='hover:text-[#007bff] text-[15px] font-bold lg:hover:fill-[#007bff] block'>Academics<svg
                            xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                            class="ml-1 inline-block" fill="white" viewBox="0 0 24 24">
                            <path
                                d="M12 16a1 1 0 0 1-.71-.29l-6-6a1 1 0 0 1 1.42-1.42l5.29 5.3 5.29-5.29a1 1 0 0 1 1.41 1.41l-6 6a1 1 0 0 1-.7.29z"
                                data-name="16" data-original="#000000" />
                        </svg>
                    </a>
                    <ul
                        class='absolute shadow-lg text-black bg-white space-y-3 lg:top-5 max-lg:top-8 -left-6 min-w-[250px] z-50 max-h-0 overflow-hidden group-hover:opacity-100 group-hover:max-h-[700px] px-6 group-hover:pb-4 group-hover:pt-6 transition-all duration-500'>
                        <li class='border-b py-2 '><a href='javascript:void(0)'
                                class='hover:text-[#007bff] text-[15px] font-bold block'>Foods</a>
                        </li>
                        <li class='border-b py-2 '>
                            <a href='javascript:void(0)'
                                class='hover:text-[#007bff] text-[15px] font-bold block'>Sale</a>
                        </li>
                        <li class='border-b py-2 '><a href='javascript:void(0)'
                                class='hover:text-[#007bff] text-[15px] font-bold block'>Marketing</a>
                        </li>
                        <li class='border-b py-2 '><a href='javascript:void(0)'
                                class='hover:text-[#007bff] text-[15px] font-bold block'>Investment</a>
                        </li>
                    </ul>
                </li>
                <li class='group max-lg:border-b max-lg:py-3 relative'>
                    <a href='javascript:void(0)'
                        class='hover:text-[#007bff] text-[15px] font-bold lg:hover:fill-[#007bff] block'>Admission<svg
                            xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                            class="ml-1 inline-block" fill="white" viewBox="0 0 24 24">
                            <path
                                d="M12 16a1 1 0 0 1-.71-.29l-6-6a1 1 0 0 1 1.42-1.42l5.29 5.3 5.29-5.29a1 1 0 0 1 1.41 1.41l-6 6a1 1 0 0 1-.7.29z"
                                data-name="16" data-original="#000000" />
                        </svg>
                    </a>
                    <ul
                        class='absolute shadow-lg text-black bg-white space-y-3 lg:top-5 max-lg:top-8 -left-6 min-w-[250px] z-50 max-h-0 overflow-hidden group-hover:opacity-100 group-hover:max-h-[700px] px-6 group-hover:pb-4 group-hover:pt-6 transition-all duration-500'>
                        <li class='border-b py-2 '><a href='javascript:void(0)'
                                class='hover:text-[#007bff] text-[15px] font-bold block'>Foods</a>
                        </li>
                        <li class='border-b py-2 '>
                            <a href='javascript:void(0)'
                                class='hover:text-[#007bff] text-[15px] font-bold block'>Sale</a>
                        </li>
                        <li class='border-b py-2 '><a href='javascript:void(0)'
                                class='hover:text-[#007bff] text-[15px] font-bold block'>Marketing</a>
                        </li>
                        <li class='border-b py-2 '><a href='javascript:void(0)'
                                class='hover:text-[#007bff] text-[15px] font-bold block'>Investment</a>
                        </li>
                    </ul>
                </li>
                <li class='max-lg:border-b max-lg:py-3'><a href='javascript:void(0)'
                        class='hover:text-[#007bff] text-[15px] font-bold block'>Activities</a>
                </li>
                <li class='max-lg:border-b max-lg:py-3'><a href='javascript:void(0)'
                        class='hover:text-[#007bff] text-[15px] font-bold block'>About</a>
                </li>
                <li class='max-lg:border-b max-lg:py-3'><a href='javascript:void(0)'
                        class='hover:text-[#007bff] text-[15px] font-bold block'>Contact</a>
                </li>
            </ul>
        </div>

        <div class='flex items-center space-x-8 max-lg:ml-auto'>
            <div class='group max-lg:border-b max-lg:py-3 relative mr-40'>
                <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24"
                    class="hover:fill-[#007bff] fill-white">
                    <circle cx="10" cy="7" r="6" data-original="#000000" />
                    <path
                        d="M14 15H6a5 5 0 0 0-5 5 3 3 0 0 0 3 3h12a3 3 0 0 0 3-3 5 5 0 0 0-5-5zm8-4h-2.59l.3-.29a1 1 0 0 0-1.42-1.42l-2 2a1 1 0 0 0 0 1.42l2 2a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42l-.3-.29H22a1 1 0 0 0 0-2z"
                        data-original="#000000" />
                </svg>
                <ul
                    class='absolute shadow-lg space-y-3 lg:top-5 max-lg:top-8 -left-6 min-w-[250px] z-50 max-h-0 overflow-hidden group-hover:opacity-100 group-hover:max-h-[700px] px-6 group-hover:pb-4 group-hover:pt-6 transition-all duration-500'>
                    <li class='border-b py-2 '><a href='javascript:void(0)'
                            class='hover:text-[#007bff] text-[15px] font-bold block'>About</a>
                    </li>

                </ul>
            </div>

        </div>
    </div>
</div>
<script>
    const mainNavbar = document.getElementById('mainNavbar');
    const stickyNavbar = document.getElementById('stickyNavbar');
    const headerHeight = document.querySelector('header').offsetHeight + mainNavbar.offsetHeight;

    window.addEventListener('scroll', () => {
        if (window.scrollY > headerHeight) {
            stickyNavbar.classList.remove('hidden');
        } else {
            stickyNavbar.classList.add('hidden');
        }
    });
</script>
