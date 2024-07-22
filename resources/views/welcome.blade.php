<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>
  @vite('resources/css/app.css')
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2.44.0/tabler-icons.min.css">

</head>

<body>

  <header>
    <div class="">
      <div class="bg-blue-900 min-h-12 text-white font-semibold">
        {{-- headertip --}}
        <div class="grid grid-cols-3 gap-4">
          <div class=" flex gap-4 items-center justify-center py-4">
            <a href="#">Contact Us</a>
            <a href="#">Download</a>
          </div>
          <div class=" flex items-center gap-3 justify-center py-3">
            <i class="ti ti-home-2 mt-1"></i><a href="#">Nepalgunj Fultekra # 6, Nepal</a>

          </div>
          <div class=" flex gap-3 items-center justify-center py-3">
            <span> <i class="ti ti-phone-filled h-6 "></i></span>
            <a href="#">+977 081-567896</a>
            <button class="border rounded-lg px-2 py-1">
              <a href="#">Enquiry Form</a>
            </button>
          </div>
        </div>
      </div>

      <header class='flex border-b bg-white font-sans min-h-[70px] tracking-wide relative z-50 sticky'>
        <div class='flex flex-wrap items-center justify-between px-10 py-3 gap-4 w-full'>
          <a href="javascript:void(0)"><img src="https://readymadeui.com/readymadeui.svg" alt="logo" class='w-36' />
          </a>

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
                  class='hover:text-blue-600 text-[15px] font-bold text-blue-600 block'>Home</a></li>
              <li class='group max-lg:border-b max-lg:py-3 relative'>
                <a href='javascript:void(0)'
                  class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold lg:hover:fill-[#007bff] block'>About
                  Us<svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" class="ml-1 inline-block"
                    viewBox="0 0 24 24">
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
                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" class="ml-1 inline-block"
                    viewBox="0 0 24 24">
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
                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" class="ml-1 inline-block"
                    viewBox="0 0 24 24">
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
      </header>
    </div>
  </header>

  <section>
      <div class="relative overflow-hidden h-screen "> <!-- Set height to full screen -->
        <video src="{{ asset('assets/frontend/video.mp4') }}" autoplay loop muted class="w-full h-5/6 object-cover">
        </video>
      </div>
  </section>

</body>

</html>
