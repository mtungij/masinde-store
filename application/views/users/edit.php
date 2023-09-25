<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title  -->
  <title>Staff Profile</title>

  <!-- Style Css -->
  <link rel="stylesheet" id="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">
  <link rel="stylesheet" id="colors" href="<?php echo base_url('assets/css/colors.css')?>">
  <link rel="stylesheet" id="dropzines" href="<?php echo base_url('assets/css/vendor/dropzone.css')?>">

  <!-- Google font -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;600;700&amp;display=swap" rel="stylesheet">
  <!-- Icons  -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">

  <!-- Favicon  -->
  <link rel="icon" href="<?php echo base_url('assets/img/favicon.png')?>">
</head>

<body id="body-layout" class="text-body-md relative font-sans font-normal text-gray-700 dark:text-gray-300 bg-surface-500 dark:bg-surfacedark-500 show">
  <!-- preloader -->
  <div class="preloader fixed inset-0 z-50 bg-surface-500 dark:bg-surfacedark-500">
    <div class="w-full h-screen flex justify-center items-center">
      <!-- loader -->
      <svg class="circular-loader relative w-[100px] h-[100px]">
        <circle class="path stroke-primary-600 dark:stroke-primary-200" cx="50" cy="50" r="20" fill="none" stroke-width="5" stroke-miterlimit="10"></circle>
      </svg>
    </div>
  </div>

  <header data-type="navtop" class="nav-top [&.show]:translate-y-0 top-0 fixed h-16 px-4 lg:px-8 lg:pl-3 left-0 lg:left-72 right-0 flex flex-row items-center justify-between gap-3 z-50 transition-all duration-300 ease-in-out bg-surface-500 dark:bg-surfacedark-500">
    <!-- trigger sidebar -->
    <button data-type="dialogs" data-target="#sidebar" class="relative inline-flex lg:hidden items-center justify-center w-12 h-12 gap-x-2 py-2.5 px-6 rounded-[6.25rem] tracking-[.00714em] text-center font-medium hover:bg-primary-600/[0.08] focus:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08] dark:focus:bg-primary-200/[0.08]">
      <span class="material-symbols-outlined !text-[28px]">menu</span>
    </button>

    <!-- trigger compact layout -->
    <button data-type="toggle" data-target="#body-layout" class="compact-btn group relative hidden  !items-center justify-center w-12 h-12 gap-x-2 py-2.5 px-6 rounded-[6.25rem] tracking-[.00714em] text-center font-medium hover:bg-primary-600/[0.08] focus:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08] dark:focus:bg-primary-200/[0.08]">
      <span class="material-symbols-outlined !text-[28px] menu-close">menu_open</span>
      <span class="material-symbols-outlined !text-[28px] menu-open">menu</span>
    </button>

    <!-- search form -->
    <div class="relative w-full hidden md:block">
      <!-- desktop search -->
      <div class="relative w-full">
        <button class="absolute left-1 top-1 hidden sm:inline-flex !items-center justify-center w-10 h-10 gap-x-2 p-2.5 rounded-[6.25rem] text-sm tracking-[.00714em] text-center font-medium hover:bg-primary-600/[0.08] focus:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08] dark:focus:bg-primary-200/[0.08]">
          <span class="material-symbols-outlined !text-2xl">search</span>
        </button>
        <input type="search" placeholder="Search..." class="max-sm:absolute max-sm:inset-x-0 block w-40 sm:w-80 md:w-full pl-14 h-12 rounded-full bg-white dark:bg-gray-900 py-2 px-4 ring-0 focus:outline-none focus:shadow">
      </div>
    </div>

    <!-- navbar right -->
    <div class="flex flex-row items-center gap-3 ml-auto md:ml-12">
      <!-- mobile search trigger -->
      <button data-type="dialogs" data-target="#dialog_search" class="btn relative inline-flex md:hidden !items-center justify-center w-12 h-12 gap-x-2 p-2.5 rounded-[6.25rem] text-sm tracking-[.00714em] text-center font-medium hover:bg-primary-600/[0.08] focus:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08] dark:focus:bg-primary-200/[0.08]">
        <span class="material-symbols-outlined !text-[28px]">search</span>
      </button>

      <div class="relative">
        <button data-type="dropdown" data-target="#dropdown0" class="btn relative !inline-flex !items-center justify-center w-12 h-12 gap-x-2 p-2.5 rounded-[6.25rem] text-sm tracking-[.00714em] text-center font-medium hover:bg-primary-600/[0.08] focus:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08] dark:focus:bg-primary-200/[0.08]">
          <span  aria-label="Languages" data-microtip-position="bottom" role="tooltip" class="material-symbols-outlined !text-[28px] pointer-events-none">translate</span>
        </button>

        <!-- menus -->
        <ul id="dropdown0" data-type="dropdownmenu" class="[&.show]:!opacity-100 [&.show]:!visible opacity-0 invisible absolute top-[3.1rem] z-30 transition duration-400 ease-in-out left-auto right-0 transform translate-x-1/3 min-w-[150px] inline-flex flex-col py-2 rounded-xl bg-white dark:bg-gray-900 shadow-md dark:shadow-gray-50/10">
          <li class="relative">
            <a href="#" class="flex flex-row items-center gap-3 py-2.5 px-6 hover-icon hover:bg-surface-200 dark:hover:bg-surfacedark-200">
              <img src="<?php echo base_url('assets/img/flags/US.svg')?>" class="h-4" alt="English">
              English
            </a>
          </li>
          <li class="relative">
            <a href="#" class="w-full flex flex-row items-center gap-3 py-2.5 px-6 hover-icon hover:bg-surface-200 dark:hover:bg-surfacedark-200">
              <img src="<?php echo base_url('assets/img/flags/IT.svg')?>" class="h-4" alt="Italy">
              Italy
            </a>
          </li>
          <li class="relative">
            <a href="#" class="flex flex-row items-center gap-3 py-2.5 px-6 hover-icon hover:bg-surface-200 dark:hover:bg-surfacedark-200">
              <img src="<?php echo base_url('assets/img/flags/ES.svg')?>" class="h-4" alt="Spain">
              Spain
            </a>
          </li>
          <li class="relative">
            <a href="#" class="flex flex-row items-center gap-3 py-2.5 px-6 hover-icon hover:bg-surface-200 dark:hover:bg-surfacedark-200">
              <img src="<?php echo base_url('assets/img/flags/SA.svg')?>" class="h-4" alt="Arabic">
              Arabic
            </a>
          </li>
        </ul>
      </div>

      <div class="relative hidden sm:inline-block">
        <button data-type="dropdown" data-target="#dropdown-apps" class="btn relative !inline-flex !items-center justify-center w-12 h-12 gap-x-2 p-2.5 rounded-[6.25rem] text-sm tracking-[.00714em] text-center font-medium hover:bg-primary-600/[0.08] focus:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08] dark:focus:bg-primary-200/[0.08]">
          <span aria-label="Apps" data-microtip-position="bottom" role="tooltip" class="material-symbols-outlined !text-[28px] pointer-events-none">apps</span>
        </button>

        <!-- menus -->
        <div id="dropdown-apps" data-type="dropdownmenu" class="[&.show]:!opacity-100 [&.show]:!visible opacity-0 invisible absolute top-[3.1rem] z-30 transition duration-400 ease-in-out left-auto right-0 transform md:translate-x-[120px] min-w-[300px] inline-flex flex-col rounded-xl overflow-hidden bg-white dark:bg-gray-900 shadow-md dark:shadow-gray-50/10 max-sm:fixed max-sm:mt-3 max-sm:left-4 max-sm:right-4 p-6">
          <div class="grid grid-cols-2 sm:grid-cols-3 gap-2">
            <a href="#" class="py-2 px-3 hover:bg-surface-200 dark:hover:bg-surfacedark-200 rounded-xl flex flex-col items-center gap-1">
              <span class="material-symbols-outlined !text-4xl text-red-600 dark:text-red-200">email</span>
              <p class="text-title-sm text-center">Email</p>
            </a>
            <a href="#" class="py-2 px-3 hover:bg-surface-200 dark:hover:bg-surfacedark-200 rounded-xl flex flex-col items-center gap-1">
              <span class="material-symbols-outlined !text-4xl text-yellow-600 dark:text-yellow-200">event</span>
              <p class="text-title-sm text-center">Calendar</p>
            </a>
            <a href="#" class="py-2 px-3 hover:bg-surface-200 dark:hover:bg-surfacedark-200 rounded-xl flex flex-col items-center gap-1">
              <span class="material-symbols-outlined !text-4xl text-green-600 dark:text-green-200">chat</span>
              <p class="text-title-sm text-center">Chat</p>
            </a>
            <a href="#" class="py-2 px-3 hover:bg-surface-200 dark:hover:bg-surfacedark-200 rounded-xl flex flex-col items-center gap-1">
              <span class="material-symbols-outlined !text-4xl text-purple-600 dark:text-purple-200">pie_chart</span>
              <p class="text-title-sm text-center">Chart</p>
            </a>
            <a href="#" class="py-2 px-3 hover:bg-surface-200 dark:hover:bg-surfacedark-200 rounded-xl flex flex-col items-center gap-1">
              <span class="material-symbols-outlined !text-4xl text-pink-600 dark:text-pink-200">widgets</span>
              <p class="text-title-sm text-center">Widgets</p>
            </a>
            <a href="#" class="py-2 px-3 hover:bg-surface-200 dark:hover:bg-surfacedark-200 rounded-xl flex flex-col items-center gap-1">
              <span class="material-symbols-outlined !text-4xl text-blue-600 dark:text-blue-200">rocket</span>
              <p class="text-title-sm text-center">Landing</p>
            </a>
          </div>
        </div>
      </div>

      <div class="relative hidden sm:inline-block">
        <!-- trigger bottom sheets -->
        <button data-type="dialogs" data-target="#sheets_b" class="btn relative !inline-flex !items-center justify-center w-12 h-12 gap-x-2 p-2.5 rounded-[6.25rem] text-sm tracking-[.00714em] text-center font-medium hover:bg-primary-600/[0.08] focus:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08] dark:focus:bg-primary-200/[0.08]">
          <span aria-label="Settings" data-microtip-position="bottom" role="tooltip" class="material-symbols-outlined !text-[28px] pointer-events-none">settings</span>
        </button>
      </div>

      <div class="relative">
        <button data-type="dropdown" data-target="#dropdown2" class="btn relative !inline-flex !items-center justify-center w-12 h-12 gap-x-2 p-2.5 rounded-[6.25rem] text-sm tracking-[.00714em] text-center font-medium hover:bg-primary-600/[0.08] focus:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08] dark:focus:bg-primary-200/[0.08]">
          <span aria-label="Notification" data-microtip-position="bottom" role="tooltip" class="material-symbols-outlined !text-[28px] pointer-events-none ">notifications</span>
          <span class="pointer-events-none absolute top-2 right-2 w-4 h-4 flex items-center justify-center rounded-full text-[11px] leading-none tracking-[.045em] font-medium bg-error-600 dark:bg-error-200 text-white dark:text-error-800">1</span>
        </button>

        <!-- menus -->
        <div id="dropdown2" data-type="dropdownmenu" class="[&.show]:!opacity-100 [&.show]:!visible opacity-0 invisible absolute top-[3.1rem] z-30 transition duration-400 ease-in-out -right-12 sm:right-0 min-w-[300px] inline-flex flex-col py-2 rounded-xl overflow-hidden bg-white dark:bg-gray-900 shadow-md dark:shadow-gray-50/10 max-sm:fixed max-sm:mt-3 max-sm:left-4 max-sm:right-4">
          <div class="px-6 pt-1.5 pb-3 font-normal border-b border-gray-100 dark:border-gray-800">
            <div class="relative">
              <div class="text-title-sm">Notifications</div>
              <div class="absolute top-0 right-0">
                <button class="inline-block mr-0">
                  <span class="material-symbols-outlined pointer-events-none" aria-label="Clear all" data-microtip-position="bottom" role="tooltip">delete</span>
                </button>
              </div>
            </div>
          </div>

          <div class="max-h-60 overflow-y-auto scrollbars">
            <!-- item -->
            <a class="relative" href="notification.html">
              <div class="unread flex flex-wrap flex-row items-center border-b border-gray-100 dark:border-gray-800 [&.unread]:bg-surface-400 dark:[&.unread]:bg-surfacedark-400 hover:bg-surface-200 dark:hover:bg-surfacedark-200 py-2">
                <div class="flex-shrink max-w-full px-2 w-1/4 text-center">
                  <div class="flex justify-center items-center mx-auto w-8 h-8 rounded-full bg-primary-600 dark:bg-primary-200 text-neutral-10 dark:text-neutral-900">
                    <span class="material-symbols-outlined">diversity_3</span>
                  </div>
                </div>
                <div class="flex-shrink max-w-full px-2 w-3/4">
                  <div class="text-body-md">Time for a meeting with Mr.Roger</div>
                  <div class="text-gray-500 text-body-md mt-1">5 Minutes Ago</div>
                </div>
              </div>
            </a>

            <!-- item -->
            <a class="relative" href="notification.html">
              <div class="flex flex-wrap flex-row items-center border-b border-gray-100 dark:border-gray-800 [&.unread]:bg-surface-400 dark:[&.unread]:bg-surfacedark-400 hover:bg-surface-200 dark:hover:bg-surfacedark-200 py-2">
                <div class="flex-shrink max-w-full px-2 w-1/4 text-center">
                  <div class="flex justify-center items-center mx-auto w-8 h-8 rounded-full bg-primary-600 dark:bg-primary-200 text-neutral-10 dark:text-neutral-900">
                    <span class="material-symbols-outlined">person</span>
                  </div>
                </div>
                <div class="flex-shrink max-w-full px-2 w-3/4">
                  <div class="text-body-md">Congratulations you get a new prospect!</div>
                  <div class="text-gray-500 text-body-md mt-1">1h ago</div>
                </div>
              </div>
            </a>
          </div>

          <div class="px-6 pt-3 pb-1.5 text-center text-body-md font-normal">
            <a href="notification.html" class="hover:underline">Show all Notifications</a>
          </div>
        </div>
      </div>

      <div class="relative">
        <button data-type="dropdown" data-target="#dropdown1" class="btn w-12 h-12 gap-x-2 py-2.5 flex items-center gap-2 justify-center rounded-full text-sm tracking-[0.15px]">
          <img src="<?php echo base_url('assets/img/avatar.png')?>" alt="ari budin" class="w-10 h-10 flex-none rounded-full bg-primary-600 dark:bg-primary-200">
        </button>

        <!-- menus -->
        <ul id="dropdown1" data-type="dropdownmenu" class="[&.show]:!opacity-100 [&.show]:!visible opacity-0 invisible absolute top-[3.1rem] z-30 transition duration-400 ease-in-out left-auto right-0 min-w-[200px] inline-flex flex-col py-2 rounded-xl bg-white dark:bg-gray-900 shadow-md dark:shadow-gray-50/10 max-sm:fixed max-sm:mt-3 max-sm:left-4 max-sm:right-4">
          <li class="relative">
            <a href="profile.html" class="flex flex-row items-center gap-3 py-2.5 px-6 hover-icon hover:bg-surface-200 dark:hover:bg-surfacedark-200">
            <span class="material-symbols-outlined">person</span>
              Profile
            </a>
          </li>
          <li class="relative">
            <a href="edit-profile.html" class="flex flex-row items-center gap-3 py-2.5 px-6 hover-icon hover:bg-surface-200 dark:hover:bg-surfacedark-200">
            <span class="material-symbols-outlined">settings</span>
              Settings
            </a>
          </li>
          <li class="relative">
            <a href="../docs/support.html" class="flex flex-row items-center gap-3 py-2.5 px-6 hover-icon hover:bg-surface-200 dark:hover:bg-surfacedark-200">
            <span class="material-symbols-outlined">help_center</span>
              Help
            </a>
          </li>
          <li class="relative border-t border-gray-100 dark:border-gray-800">
            <a href="../auth/logout.html" class="flex flex-row items-center gap-3 py-2.5 px-6 hover-icon hover:bg-surface-200 dark:hover:bg-surfacedark-200">
            <span class="material-symbols-outlined">power_settings_new</span>
              Logout
            </a>
          </li>
        </ul>
      </div>
    </div>
  </header>

  <main class="lg:flex">
    <!-- sidebar -->
    <?php include APPPATH.'/views/includes/sidebar.php'?>

    <!-- content -->
    <div class="main-content flex-grow min-h-[100%] py-20 relative px-4 lg:pr-8 lg:pl-3">
      <!-- heading -->
      <div class="flex flex-row justify-between items-center pt-2 pb-6">
        <h2 class="text-title-lg">Edit Profile</h2>
      </div>

      <!-- content 1 -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-6 mb-4 md:mb-6">
        <div class="col-span-1 flex flex-col gap-6">
          <div class="bg-white dark:bg-gray-900 rounded-xl shadow-lg shadow-gray-100/10 dark:shadow-gray-700/10 overflow-hidden">
            <!-- cover -->
            <div class="overflow-hidden">
              <div class="group h-36 overflow-hidden relative">
                <img src="<?php echo base_url('assets/img/cover/cover2.jpg')?>" alt="cover image" class="w-full">
              </div>

              <div class="flex justify-center -mt-10 relative">
                <img src="<?php echo base_url('assets/img/avatar.png')?>" alt="avatar" class="rounded-full w-24 h-24 bg-primary-600 text-white dark:bg-primary-200 dark:text-neutral-900 border-solid border-white border-2 -mt-3">
              </div>
              <div class="text-center px-4 pb-6 pt-2">
                <h3 class="text-title-lg text-gray-900 dark:text-gray-100 mb-1">@ari_budin</h3>
                <p class="text-body-md text-gray-600 dark:text-gray-400">Super User</p>
              </div>
            </div>
            <!-- information -->
            <div class="text-body-md flex flex-col gap-1 px-6 pb-6">
              <p><strong>Full Name :</strong><span class="ml-2">Ari Budin</span></p>
              <p><strong>Username :</strong><span class="ml-2">@aria-budin</span></p>
              <p><strong>Email :</strong><span class="ml-2">yourmail@gmail.com</span></p>
              <p><strong>Branch :</strong><span class="ml-2"> MBALIZI BRANCH</span></p>
            </div>
          </div>
        </div>

        <div class="md:col-span-2 flex flex-col gap-6">
          <!-- card -->
          <div class="p-6 bg-white dark:bg-gray-900 rounded-xl shadow-lg shadow-cyan-100/10 dark:shadow-cyan-700/10 h-full">
            <div class="relative">
              <!-- tabs -->
              <div class="tabs flex flex-col w-full">
                <!-- tabs header -->
                <div class="relative flex flex-row items-center">
                  <button data-type="tabs" data-target="#tab-4" class="active w-1/3 sm:w-[120px] h-16 px-4 flex flex-col justify-end items-center gap-1 relative py-2 hover:bg-surface-100 dark:hover:bg-surfacedark-100">
                    <span class="material-symbols-outlined">edit</span>
                    <span class="text-sm tracking-[.00714em]">General</span>
                  </button>
                  
                  <button data-type="tabs" data-target="#tab-6" class="w-1/3 sm:w-[120px] h-16 px-4 flex flex-col justify-end items-center gap-1 relative py-2 hover:bg-surface-100 dark:hover:bg-surfacedark-100">
                    <span class="material-symbols-outlined">lock</span>
                    <span class="text-sm tracking-[.00714em]">Security</span>
                  </button>
                  <!-- indicator -->
                  <div data-type="indicator" class="absolute left-0 bottom-0 transition-all duration-200 ease-in-out bg-primary-600 dark:bg-primary-200 w-1/3 sm:w-[120px] h-0.5 rounded-t-full"></div>
                </div>
                <hr class="border-gray-200 dark:border-gray-700">
                <!-- tabs content -->
                <?php echo form_open('user/update', ['class' => 'flex flex-col'])?>
                  <div id="tab-4" role="tabpanel" class="active [&.active]:block hidden py-4 transition duration-400 ease-in-out">
                    <div class="flex flex-col gap-6">
                      <!-- name -->
                      <div class="flex flex-row items-center gap-4">
                        <!-- first name -->
                        <div class="relative z-0 w-full">
                          <input type="text" aria-label="first_name" name="first_name" id="first_name" class="w-full h-12 block leading-5 relative py-2 px-4 rounded bg-neutral-10 dark:bg-neutral-900 border focus:border-2 border-gray-500 overflow-x-auto focus:outline-none focus:border-primary-600 focus:ring-0 dark:text-gray-200 dark:border-gray-400 dark:focus:border-primary-200 peer" placeholder=" " value="">

                          <label for="first_name" class="absolute tracking-[.03125em] text-gray-500 dark:text-gray-400 bg-neutral-10 dark:bg-neutral-900 duration-300 transform px-1 -translate-y-6 scale-75 top-3 z-10 origin-[0] left-4 peer-focus:left-4 peer-focus:text-primary-600 dark:peer-focus:text-primary-200 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 peer-focus:bg-neutral-10 dark:peer-focus:bg-neutral-900 peer-focus:px-1 peer-invalid:text-error-600 dark:peer-invalid:text-error-200">First name</label>
                        </div>
                        <!-- last name -->
                        <div class="relative z-0 w-full">
                          <input type="text" aria-label="last_name" name="last_name" id="last_name" class="w-full h-12 block leading-5 relative py-2 px-4 rounded bg-neutral-10 dark:bg-neutral-900 border focus:border-2 border-gray-500 overflow-x-auto focus:outline-none focus:border-primary-600 focus:ring-0 dark:text-gray-200 dark:border-gray-400 dark:focus:border-primary-200 peer" placeholder=" " value="">

                          <label for="last_name" class="absolute tracking-[.03125em] text-gray-500 dark:text-gray-400 bg-neutral-10 dark:bg-neutral-900 duration-300 transform px-1 -translate-y-6 scale-75 top-3 z-10 origin-[0] left-4 peer-focus:left-4 peer-focus:text-primary-600 dark:peer-focus:text-primary-200 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 peer-focus:bg-neutral-10 dark:peer-focus:bg-neutral-900 peer-focus:px-1 peer-invalid:text-error-600 dark:peer-invalid:text-error-200">Last name</label>
                        </div>
                      </div>
                      

                      <!-- image -->
                      <!-- <div class="flex flex-col sm:flex-row items-center gap-4">
                        <div id="imageUpload2" class="dropzone single-dropzone border border-gray-500 w-full rounded">
                          <div class="dz-message" data-dz-message>
                            <div class="pre-upload flex flex-col justify-center">
                              <div class="py-3"><span>Upload Avatar</span></div>
                            </div>
                            <div class="pre-upload text-center">
                              <button class="py-1.5 px-3 inline-block text-center rounded leading-normal text-gray-800 bg-gray-100 border border-gray-100 hover:text-gray-900 hover:bg-gray-200 hover:ring-0 hover:border-gray-200 focus:bg-gray-200 focus:border-gray-200 focus:outline-none focus:ring-0 mr-2 dark:bg-gray-300">Browse file</button>
                            </div>
                          </div>
                        </div>
                           Upload cover
                        <div id="imageUpload" class="dropzone single-dropzone border border-gray-500 w-full rounded">
                          <div class="dz-message" data-dz-message>
                            <div class="pre-upload flex flex-col justify-center">
                              <div class="py-3"><span>Upload Cover</span></div>
                            </div>
                            <div class="pre-upload text-center">
                              <button class="py-1.5 px-3 inline-block text-center rounded leading-normal text-gray-800 bg-gray-100 border border-gray-100 hover:text-gray-900 hover:bg-gray-200 hover:ring-0 hover:border-gray-200 focus:bg-gray-200 focus:border-gray-200 focus:outline-none focus:ring-0 mr-2 dark:bg-gray-300">Browse file</button>
                            </div>
                          </div>
                        </div>
                      </div> -->
                      
                      <div class="flex flex-row items-center gap-4">
                        <!-- select outline -->
                        <div class="relative z-0 w-full">
                          <select id="branch_id" class="w-full h-12 block leading-5 relative py-2 px-4 rounded bg-neutral-10 dark:bg-neutral-900 border focus:border-2 border-gray-500 overflow-x-auto focus:outline-none focus:border-primary-600 focus:ring-0 dark:text-gray-200 dark:border-gray-400 dark:focus:border-primary-200">
                            <option value="id">UYOLE BRANCH</option>
                            <option value="bid">MBALIZI BRANCH</option>
                          </select>
                        </div>

                        <!-- input email -->
                        <div class="relative z-0 w-full">
                          <input type="text" aria-label="email" name="email" id="email" class="w-full h-12 block leading-5 relative py-2 px-4 rounded bg-neutral-10 dark:bg-neutral-900 border focus:border-2 border-gray-500 overflow-x-auto focus:outline-none focus:border-primary-600 focus:ring-0 dark:text-gray-200 dark:border-gray-400 dark:focus:border-primary-200 peer" value="alkado@gmail.com">

                          <label for="email" class="absolute tracking-[.03125em] text-gray-500 dark:text-gray-400 bg-neutral-10 dark:bg-neutral-900 duration-300 transform px-1 -translate-y-6 scale-75 top-3 z-10 origin-[0] left-4 peer-focus:left-4 peer-focus:text-primary-600 dark:peer-focus:text-primary-200 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 peer-focus:bg-neutral-10 dark:peer-focus:bg-neutral-900 peer-focus:px-1 peer-invalid:text-error-600 dark:peer-invalid:text-error-200">Email</label>
                        </div>
                      </div>

                       <div class="relative z-0 w-full">
                        <label class="flex items-center gap-3">
                          <input type="checkbox" name="store_id" class="w-[18px] h-[18px] flex-none accent-primary-600 hover:accent-primary-600 dark:accent-primary-200 dark:hover:accent-primary-200 rounded-[2px]">
                          <span>Is a store member</span>
                        </label>
                      </div>

                      <div class="relative z-0 w-full">
                        <label class="flex items-center gap-3">
                          <input type="checkbox" name="is_supper" class="w-[18px] h-[18px] flex-none accent-primary-600 hover:accent-primary-600 dark:accent-primary-200 dark:hover:accent-primary-200 rounded-[2px]">
                          <span>Is a super user?</span>
                        </label>
                      </div>


                      <div class="relative z-0 w-full">
                        <label class="flex items-center gap-3">
                          <input type="checkbox" name="is_staff" class="w-[18px] h-[18px] flex-none accent-primary-600 hover:accent-primary-600 dark:accent-primary-200 dark:hover:accent-primary-200 rounded-[2px]">
                          <span>Can login to this system</span>
                        </label>
                      </div>

                    </div>
                  </div>


                  <div id="tab-6" role="tabpanel" class="[&.active]:block hidden py-4 transition duration-400 ease-in-out">
                    <div class="flex flex-col gap-6">
                      <!-- input password -->
                      <div class="relative z-0">
                        <input type="password" aria-label="password" name="password" id="password" class="w-full h-12 block leading-5 relative py-2 px-4 rounded bg-neutral-10 dark:bg-neutral-900 border focus:border-2 border-gray-500 overflow-x-auto focus:outline-none focus:border-primary-600 focus:ring-0 dark:text-gray-200 dark:border-gray-400 dark:focus:border-primary-200 peer" placeholder=" " value="">

                        <label for="password" class="absolute tracking-[.03125em] text-gray-500 dark:text-gray-400 bg-neutral-10 dark:bg-neutral-900 duration-300 transform px-1 -translate-y-6 scale-75 top-3 z-10 origin-[0] left-4 peer-focus:left-4 peer-focus:text-primary-600 dark:peer-focus:text-primary-200 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 peer-focus:bg-neutral-10 dark:peer-focus:bg-neutral-900 peer-focus:px-1 peer-invalid:text-error-600 dark:peer-invalid:text-error-200">New Password</label>
                      </div>
                      <!-- input password -->
                      <div class="relative z-0">
                        <input type="password" aria-label="confipass" name="confipass" id="confipass" class="w-full h-12 block leading-5 relative py-2 px-4 rounded bg-neutral-10 dark:bg-neutral-900 border focus:border-2 border-gray-500 overflow-x-auto focus:outline-none focus:border-primary-600 focus:ring-0 dark:text-gray-200 dark:border-gray-400 dark:focus:border-primary-200 peer" placeholder=" " value="">

                        <label for="confipass" class="absolute tracking-[.03125em] text-gray-500 dark:text-gray-400 bg-neutral-10 dark:bg-neutral-900 duration-300 transform px-1 -translate-y-6 scale-75 top-3 z-10 origin-[0] left-4 peer-focus:left-4 peer-focus:text-primary-600 dark:peer-focus:text-primary-200 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 peer-focus:bg-neutral-10 dark:peer-focus:bg-neutral-900 peer-focus:px-1 peer-invalid:text-error-600 dark:peer-invalid:text-error-200">Repeat Password</label>
                      </div>
                      <div class="relative">
                        <p class="text-gray-500 mb-2 font-bold">Username: <span class="text-primary-600 dark:text-primary-200">@ari_budin</span></p>
                        <p class="text-xs text-pink-500 mb-2"><b>Warning:</b> Username should be unique.</p>
                      </div>
                      <!-- input username -->
                      <div class="relative z-0">
                        <input type="text" aria-label="username" name="username" id="username" class="w-full h-12 block leading-5 relative py-2 px-4 rounded bg-neutral-10 dark:bg-neutral-900 border focus:border-2 border-gray-500 overflow-x-auto focus:outline-none focus:border-primary-600 focus:ring-0 dark:text-gray-200 dark:border-gray-400 dark:focus:border-primary-200 peer" placeholder=" " value="@ari_budin">

                        <label for="username" class="absolute tracking-[.03125em] text-gray-500 dark:text-gray-400 bg-neutral-10 dark:bg-neutral-900 duration-300 transform px-1 -translate-y-6 scale-75 top-3 z-10 origin-[0] left-4 peer-focus:left-4 peer-focus:text-primary-600 dark:peer-focus:text-primary-200 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 peer-focus:bg-neutral-10 dark:peer-focus:bg-neutral-900 peer-focus:px-1 peer-invalid:text-error-600 dark:peer-invalid:text-error-200">Username</label>
                      </div>
                      
                    </div>
                  </div>
                  <div class="relative flex justify-end pt-4">
                    <button type="submit" class="btn relative inline-flex flex-row items-center justify-center gap-x-2 py-2.5 px-6 rounded-[6.25rem] hover:shadow-md text-sm tracking-[.00714em] font-medium bg-primary-600 text-white dark:bg-primary-200 dark:text-primary-800">
                      <span class="material-symbols-outlined">save</span>
                      Save changes
                    </button>
                  </div>
                <?php echo form_close()?>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <footer class="footer absolute px-4 lg:px-8 lg:pl-3 left-0 lg:left-72 bottom-0 right-0">
    <div class="text-center py-6">
      <!-- Copyright text -->
      <p><script>document.write(new Date().getFullYear())</script> Goodash - All right reserved</p>
    </div>
  </footer>

  <!-- Mobile search -->
  <div id="dialog_search" class="[&.show]:opacity-100 [&.show]:h-full [&.show]:inset-0 [&.show_.dialog]:!block opacity-0 w-full h-0 z-[70] overflow-auto fixed left-0 top-0 flex items-center justify-center">
    <!-- dialogs -->
    <div class="dialog hidden fixed inset-0 z-50 flex-col gap-2 bg-neutral-10 dark:bg-neutral-900">
      <!-- header -->
      <div class="min-h-[56px] flex flex-row items-center justify-between gap-4 pl-4 pr-2 pt-4 pb-2">
        <h3 class="flex flex-grow text-title-md">Search</h3>

        <button data-close="#dialog_search" class="relative flex flex-row items-center justify-center gap-x-2 p-2 rounded-[6.25rem] text-sm tracking-[.00714em] font-medium text-primary-600 dark:bg-surfacedark-100 hover:bg-surface-200 focus:bg-surface-400 dark:text-primary-200 dark:hover:bg-surfacedark-200 dark:focus:bg-surfacedark-400">
          <span class="material-symbols-outlined">close</span>
        </button>
      </div>
      <hr class="w-full border-surface-100 dark:border-surfacedark-100">
      <div class="relative p-4">
        <div class="relative">
          <button class="absolute left-1 top-1 inline-flex !items-center justify-center w-10 h-10 gap-x-2 p-2.5 rounded-[6.25rem] text-sm tracking-[.00714em] text-center font-medium hover:bg-primary-600/[0.08] focus:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08] dark:focus:bg-primary-200/[0.08]">
            <span class="material-symbols-outlined !text-2xl">search</span>
          </button>
          <input type="search" placeholder="Search..." class="block w-full px-14 h-12 rounded-full bg-surface-200 dark:bg-surfacedark-200 focus:bg-white dark:focus:bg-gray-900 py-2 ring-0 focus:outline-none focus:shadow">
          <button class="absolute right-1 top-1 inline-flex !items-center justify-center w-10 h-10 gap-x-2 p-2.5 rounded-[6.25rem] text-sm tracking-[.00714em] text-center font-medium hover:bg-primary-600/[0.08] focus:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08] dark:focus:bg-primary-200/[0.08]">
            <span class="material-symbols-outlined !text-2xl">keyboard_voice</span>
          </button>
        </div>
      </div>
      <!-- body -->
      <div class="relative px-4 h-screen overflow-y-scroll scrollbars">
        <!-- search history -->
        <div class="relative flex flex-col w-full px-2 pb-40">
          <button class="flex flex-row items-center gap-4 py-3">
            <span class="material-symbols-outlined w-6">history</span>
            <span class="text-body-md">Joe Thomas</span>
            <span class="material-symbols-outlined w-6 ml-auto transform rotate-45">arrow_back</span>
          </button>
          <button class="flex flex-row items-center gap-4 py-3">
            <span class="material-symbols-outlined w-6">history</span>
            <span class="text-body-md">Software</span>
            <span class="material-symbols-outlined w-6 ml-auto transform rotate-45">arrow_back</span>
          </button>
          <button class="flex flex-row items-center gap-4 py-3">
            <span class="material-symbols-outlined w-6">history</span>
            <span class="text-body-md">Material 3</span>
            <span class="material-symbols-outlined w-6 ml-auto transform rotate-45">arrow_back</span>
          </button>
          <button class="flex flex-row items-center gap-4 py-3">
            <span class="material-symbols-outlined w-6">history</span>
            <span class="text-body-md">Tailwind css</span>
            <span class="material-symbols-outlined w-6 ml-auto transform rotate-45">arrow_back</span>
          </button>
          <button class="flex flex-row items-center gap-4 py-3">
            <span class="material-symbols-outlined w-6">history</span>
            <span class="text-body-md">Joe Thomas</span>
            <span class="material-symbols-outlined w-6 ml-auto transform rotate-45">arrow_back</span>
          </button>
          <button class="flex flex-row items-center gap-4 py-3">
            <span class="material-symbols-outlined w-6">history</span>
            <span class="text-body-md">Software</span>
            <span class="material-symbols-outlined w-6 ml-auto transform rotate-45">arrow_back</span>
          </button>
          <button class="flex flex-row items-center gap-4 py-3">
            <span class="material-symbols-outlined w-6">history</span>
            <span class="text-body-md">Material 3</span>
            <span class="material-symbols-outlined w-6 ml-auto transform rotate-45">arrow_back</span>
          </button>
          <button class="flex flex-row items-center gap-4 py-3">
            <span class="material-symbols-outlined w-6">history</span>
            <span class="text-body-md">Tailwind css</span>
            <span class="material-symbols-outlined w-6 ml-auto transform rotate-45">arrow_back</span>
          </button>
          <button class="flex flex-row items-center gap-4 py-3">
            <span class="material-symbols-outlined w-6">history</span>
            <span class="text-body-md">Joe Thomas</span>
            <span class="material-symbols-outlined w-6 ml-auto transform rotate-45">arrow_back</span>
          </button>
          <button class="flex flex-row items-center gap-4 py-3">
            <span class="material-symbols-outlined w-6">history</span>
            <span class="text-body-md">Software</span>
            <span class="material-symbols-outlined w-6 ml-auto transform rotate-45">arrow_back</span>
          </button>
          <button class="flex flex-row items-center gap-4 py-3">
            <span class="material-symbols-outlined w-6">history</span>
            <span class="text-body-md">Material 3</span>
            <span class="material-symbols-outlined w-6 ml-auto transform rotate-45">arrow_back</span>
          </button>
          <button class="flex flex-row items-center gap-4 py-3">
            <span class="material-symbols-outlined w-6">history</span>
            <span class="text-body-md">Tailwind css</span>
            <span class="material-symbols-outlined w-6 ml-auto transform rotate-45">arrow_back</span>
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- bottom sheets dialogs -->
  <div id="sheets_b" class="[&.show_.bg-sheets]:opacity-60 [&.show_.bg-sheets]:inset-0 [&.show_.content-sheets]:translate-y-0">
    <!-- background sheets dialogs -->
    <div data-close="#sheets_b" class="bg-sheets fixed z-[60] opacity-0 -top-full bg-black"></div>

    <!-- bottom sheets dialogs content -->
    <div class="content-sheets fixed left-0 right-0 bottom-0 z-[70] transition-transform translate-y-full duration-[400ms] flex flex-col items-center w-full md:w-5/6 lg:w-1/2 gap-3 sm:mx-auto rounded-t-[28px] min-h-[40%] max-h-[70%] bg-surface-100 dark:bg-surfacedark-100 shadow-xl">
      <div class="flex justify-center p-4 w-full h-9">
        <div class="w-8 h-1 opacity-40 bg-gray-500 rounded-full"></div>
      </div>

      <!-- content -->
      <div class="w-full relative flex flex-col gap-4 px-4 sm:px-6">
        <h2 class="text-title-md text-center">Theme Settings</h2>
        <hr class="border-gray-100 dark:border-gray-800">
        <!-- light dark options -->
        <div class="flex flex-row items-center gap-4">
          <h3 class="text-title-sm">Light & Dark</h3>
          <div class="flex flex-row items-center gap-4">
            <button data-type="theme" id="lightdark" class="btn-outline relative flex flex-row items-center justify-center w-10 h-10 gap-x-2 py-2 px-4 rounded-full text-sm tracking-[.00714em] font-medium border border-gray-200 dark:border-gray-700">
              <span class="material-symbols-outlined !text-base dark-hidden" aria-label="Light Mode" data-microtip-position="top" role="tooltip">light_mode</span>
              <span class="material-symbols-outlined !text-base dark-block" aria-label="Dark Mode" data-microtip-position="top" role="tooltip">dark_mode</span>
            </button>
          </div>
        </div>
        <!-- theme colors -->
        <div class="flex flex-row items-center gap-4">
          <h3 class="text-title-sm">Theme Colors</h3>
          <!-- menus -->
          <div class="setSkin flex flex-wrap items-center gap-6">
            <div class="relative">
              <label for="red-theme" class="setSkin cursor-pointer flex flex-row items-center gap-2 py-2">
              <input type="radio" class="z-10 hidden opacity-0" name="themes" id="red-theme" value="red-theme">
              <span aria-label="Red" data-microtip-position="top" role="tooltip" class="w-4 h-4 sm:w-8 sm:h-8 rounded-full bg-error-600"></span>
              </label>
            </div>
            <div class="relative">
              <label for="green-theme" class="setSkin cursor-pointer flex flex-row items-center gap-2 py-2">
              <input type="radio" class="z-10 hidden opacity-0" name="themes" id="green-theme" value="green-theme">
              <span aria-label="Green" data-microtip-position="top" role="tooltip" class="w-4 h-4 sm:w-8 sm:h-8 rounded-full bg-green-600"></span>
              </label>
            </div>
            <div class="relative">
              <label for="yellow-theme" class="setSkin cursor-pointer flex flex-row items-center gap-2 py-2">
              <input type="radio" class="z-10 hidden opacity-0" name="themes" id="yellow-theme" value="yellow-theme">
              <span aria-label="Yellow" data-microtip-position="top" role="tooltip" class="w-4 h-4 sm:w-8 sm:h-8 rounded-full bg-yellow-600"></span>
              </label>
            </div>
            <div class="relative">
              <label for="purple-theme" class="setSkin cursor-pointer flex flex-row items-center gap-2 py-2">
              <input type="radio" class="z-10 hidden opacity-0" name="themes" id="purple-theme" value="purple-theme">
              <span aria-label="Purple" data-microtip-position="top" role="tooltip" class="w-4 h-4 sm:w-8 sm:h-8 rounded-full bg-purple-600"></span>
              </label>
            </div>
            <div class="relative">
              <label for="blue-theme" class="setSkin cursor-pointer flex flex-row items-center gap-2 py-2">
              <input type="radio" class="z-10 hidden opacity-0" name="themes" id="blue-theme" value="blue-theme">
              <span aria-label="Blue" data-microtip-position="top" role="tooltip" class="w-4 h-4 sm:w-8 sm:h-8 rounded-full bg-blue-600"></span>
              </label>
            </div>
          </div>
        </div>
        <!-- theme layout -->
        <div class="flex flex-row items-center gap-4 mb-12">
          <h3 class="text-title-sm">Layouts</h3>
          <!-- menus -->
          <div class="setLayout flex flex-wrap items-center gap-3 sm:gap-6">
            <div class="relative" aria-label="Layout Default" data-microtip-position="top" role="tooltip" >
              <label for="layout-default" class="setLayout cursor-pointer flex flex-row items-center gap-2">
              <input type="radio" class="z-10 hidden opacity-0" name="layouts" id="layout-default" value="layout-default">
              <img class="w-12 sm:w-24 rounded h-auto border border-gray-200 dark:border-gray-700 mb-1" src="<?php echo base_url('assets/img/layouts/default.jpg')?>" alt="layouts">
              </label>
            </div>
            <div class="relative" aria-label="Layout Compact" data-microtip-position="top" role="tooltip" >
              <label for="layout-compact" class="setLayout cursor-pointer flex flex-row items-center gap-2">
              <input type="radio" class="z-10 hidden opacity-0" name="layouts" id="layout-compact" value="layout-compact">
              <img class="w-12 sm:w-24 rounded h-auto border border-gray-200 dark:border-gray-700 mb-1" src="<?php echo base_url('assets/img/layouts/compact.jpg')?>" alt="layouts">
              </label>
            </div>
            <div class="relative" aria-label="Layout Compact Text" data-microtip-position="top" role="tooltip" >
              <label for="layout-compact-text" class="setLayout cursor-pointer flex flex-row items-center gap-2">
              <input type="radio" class="z-10 hidden opacity-0" name="layouts" id="layout-compact-text" value="layout-compact-text">
              <img class="w-12 sm:w-24 rounded h-auto border border-gray-200 dark:border-gray-700 mb-1" src="<?php echo base_url('assets/img/layouts/compact-text.jpg')?>" alt="layouts">
              </label>
            </div>
            <div class="relative" aria-label="Layout Classic" data-microtip-position="top" role="tooltip" >
              <label for="layout-classic" class="setLayout cursor-pointer flex flex-row items-center gap-2">
              <input type="radio" class="z-10 hidden opacity-0" name="layouts" id="layout-classic" value="layout-classic">
              <img class="w-12 sm:w-24 rounded h-auto border border-gray-200 dark:border-gray-700 mb-1" src="<?php echo base_url('assets/img/layouts/classic.jpg')?>" alt="layouts">
              </label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Tailmater javascript -->
  <script src="<?php echo base_url('assets/js/tailmater.js')?>"></script>
  <script src="<?php echo base_url('assets/vendors/dropzone/dist/dropzone-min.js')?>"></script><!-- uploader images -->
  <script src="<?php echo base_url('assets/js/vendor.js')?>"></script>
</body>

</html>