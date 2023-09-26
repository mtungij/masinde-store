<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title  -->
  <title>Product Detail</title>

  <!-- Style Css -->
  <link rel="stylesheet" id="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">
  <link rel="stylesheet" id="color" href="<?php echo base_url('assets/css/colors.css')?>">

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
            <a class="relative" href="../user/notification.html">
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
            <a class="relative" href="../user/notification.html">
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
            <a href="../user/notification.html" class="hover:underline">Show all Notifications</a>
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
            <a href="../user/profile.html" class="flex flex-row items-center gap-3 py-2.5 px-6 hover-icon hover:bg-surface-200 dark:hover:bg-surfacedark-200">
            <span class="material-symbols-outlined">person</span>
              Profile
            </a>
          </li>
          <li class="relative">
            <a href="../user/edit-profile.html" class="flex flex-row items-center gap-3 py-2.5 px-6 hover-icon hover:bg-surface-200 dark:hover:bg-surfacedark-200">
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
        <h2 class="text-title-lg">-- <?= $product->name ?></h2>

        <div class="flex flex-row gap-3 items-center pr-4">
          <button data-type="dialogs" data-target="#dialog_detail" class="btn relative inline-flex flex-row items-center justify-center gap-x-1 py-2.5 px-6 rounded-[6.25rem] hover:shadow-md text-sm tracking-[.00714em] font-medium bg-primary-600 text-white dark:bg-primary-200 dark:text-primary-800">
            Update
          </button>
        </div>
      </div>

      <!-- content 1 -->
      <div class="grid grid-cols-1 gap-4 md:gap-6">
        <div class="flex-shrink max-w-full px-4 w-full">
          <div class="px-6 py-8 flex flex-col gap-8 rounded-xl bg-white dark:bg-gray-900 mb-6">
              
            <!-- ALERTS -->
            <div class="flex items-center gap-2 relative bg-red-50 text-red-700 p-4 rounded">
                <i class="material-symbols-outlined">info</i>
                <p>This product is out of stock, consider adding the new products!</p>
            </div>
          </div>

          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 md:gap-6">
            <div class="px-6 py-8 flex flex-col rounded-xl bg-white dark:bg-gray-900">
              <!-- title -->
                <div class="flex flex-row justify-between items-center mb-3">
                    <h3 class="text-title-md text-gray-800 dark:text-gray-200">Sales</h3>
                </div>
                <div class="relative flex items-center justify-between">
                    <h4 class="text-display-sm text-gray-800 dark:text-gray-200">1,000</h4>
                    <span class="text-label-lg flex items-center gap-1 px-2 py-1 rounded-full text-green-800 dark:text-green-100 bg-green-100 dark:bg-green-800">
                    <span class="material-symbols-outlined !text-sm">arrow_upward</span>15%
                    </span>
                </div>
            </div>

            <div class="px-6 py-8 flex flex-col rounded-xl bg-white dark:bg-gray-900">
              <h4 class="text-title-md text-gray-700 dark:text-gray-200 mb-2">Product Info</h4>
              <div class="text-gray-500">
                <p class="mb-1"><span class="font-semibold text-gray-700 dark:text-gray-200">Name: </span><?= $product->name ?> </p>
                <p class="mb-1"><span class="font-semibold text-gray-700 dark:text-gray-200">Brand:</span> <?= $product->brand ? $product->brand: '--//--' ?></p>
              </div>
            </div>

            <div class="px-6 py-8 flex flex-col rounded-xl bg-white dark:bg-gray-900">
              <h4 class="text-title-md text-gray-700 dark:text-gray-200 mb-2">Product amounts</h4>
              <div class="text-gray-500">
                <p class="mb-1"><span class="font-semibold text-gray-700 dark:text-gray-200">Containers:</span> <?= $product->pkj_amount ?></p>
                <p class="mb-1"><span class="font-semibold text-gray-700 dark:text-gray-200">Retail Amount:</span> <?= $product->quantity + $product->extra_items ?? 0 ?></p>
              </div>
            </div>

            <div class="px-6 py-8 flex flex-col rounded-xl bg-white dark:bg-gray-900">
              <h4 class="text-title-md text-gray-700 dark:text-gray-200 mb-2">Pricing</h4>
              <div class="text-gray-500">
                <p class="mb-1"><span class="font-semibold text-gray-700 dark:text-gray-200">Total Buy Price:</span> <?= $product->pkgs_buy_price ?></p>
                <p class="mb-1"><span class="font-semibold text-gray-700 dark:text-gray-200">Whole sale Price: </span> <?= number_format($product->whole_sale_price).'/=' ?></p>
                <p class="mb-1"><span class="font-semibold text-gray-700 dark:text-gray-200">Retail Sale Price: </span> <?= number_format($product->retail_sale_price).'/=' ?></p>
                <p class="mb-1"><span class="font-semibold text-gray-700 dark:text-gray-200">Total Retail Sale:</span> <?= number_format($product->retail_sale_price * ($product->quantity + $product->extra_items ?? 0 )).'/=' ?></p>
                <p class="mb-1"><span class="font-semibold text-gray-700 dark:text-gray-200">Total Whole Sale: </span> <?= number_format($product->whole_sale_price * $product->pkj_amount).'/=' ?></p>
              </div>
            </div>

            <div class="px-6 py-8 flex flex-col rounded-xl bg-white dark:bg-gray-900">
              <h4 class="text-title-md text-gray-700 dark:text-gray-200 mb-2">Alerts</h4>
              <div class="text-gray-500">
                <p class="mb-1">
                    <span class="font-semibold text-gray-700 dark:text-gray-200">Stock Limit:</span>
                    <span><?= $product->stock_limit ?></span>
                    <?php if($product->stock_limit >= $product->pkj_amount):?>
                    <span class="inline-block leading-tight text-center text-label-md py-1 px-3 text-red-800 dark:text-red-800 bg-red-100 dark:bg-red-100 rounded-full">out of stock</span>
                    <?php  else: ?>
                    <span class="inline-block leading-tight text-center text-label-md py-1 px-3 text-green-800 dark:text-green-800 bg-green-100 dark:bg-green-100 rounded-full">InStock</span>
                    <?php endif?>
                </p>

                <p class="mb-1">
                    <span class="font-semibold text-gray-700 dark:text-gray-200">Expire Date:</span>
                    <span><?php echo date('Y/m/d', $product->expire_date) ?></span>
                    <?php if(strtotime($product->expire_date) <= strtotime(date('Y-m-d'))): ?>
                        <div class="inline-block leading-tight text-center text-label-md py-1 px-3 text-white dark:text-gray-100 bg-red-400 dark:bg-red-900 rounded-full">Expired</div>
                      <?php else:?>
                        <div class="inline-block leading-tight text-center text-label-md py-1 px-3 text-gray-800 dark:text-gray-100 bg-green-100 dark:bg-green-900 rounded-full">Alive</div>
                    <?php endif ?>
                </p>
                
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
      <p><script>document.write(new Date().getFullYear())</script> Masinde-store - All right reserved</p>
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

  <!-- default dialogs -->
  <div id="dialog_detail" class="[&.show_.backDialog]:opacity-60 [&.show]:opacity-100 [&.show]:h-full [&.show]:inset-0 [&.show_.backDialog]:inset-0 duration-[400ms] ease-[cubic-bezier(0, 0, 1)] opacity-0 w-full h-0 z-50 overflow-auto fixed left-0 top-0 flex items-center justify-center">
    <div data-close="#dialog_detail" class="backDialog z-40 overflow-auto fixed bg-black"></div>
    <!-- dialogs -->
    <div class="z-50 flex flex-col w-11/12 sm:w-[480px] h-auto bg-surface-100 dark:bg-surfacedark-100 rounded-[28px] overflow-hidden">
      <div class="flex flex-col gap-4 justify-start">
        <div class="flex justify-between items-center px-6 py-4 bg-surface-400 dark:bg-surfacedark-400">
          <h3 class="text-title-lg text-gray-900 dark:text-gray-100">Pepsi Big</h3>

          <!-- close -->
          <div data-close="#dialog_detail" class="material-symbols-outlined cursor-pointer">close</div>
        </div>

        <?php echo form_open('product/update/id', ['class' => 'flex flex-col gap-2 px-6 py-4 overflow-y-auto']) ?>
          <!-- timeline -->
          <div class="relative grid gap-3">
            <div class="relative z-0">
                <input type="number" aria-label="pkgs_amount" name="pkgs_amount" id="pkgs_amount" class="w-full h-12 block leading-5 relative py-2 px-4 rounded bg-neutral-10 dark:bg-neutral-900 border focus:border-2 border-gray-500 overflow-x-auto focus:outline-none focus:border-primary-600 focus:ring-0 dark:text-gray-200 dark:border-gray-400 dark:focus:border-primary-200 peer" placeholder=" " value="78">
                <label for="pkgs_amount" class="absolute tracking-[.03125em] text-gray-500 dark:text-gray-400 bg-neutral-10 dark:bg-neutral-900 duration-300 transform px-1 -translate-y-6 scale-75 top-3 z-10 origin-[0] left-4 peer-focus:left-4 peer-focus:text-primary-600 dark:peer-focus:text-primary-200 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 peer-focus:bg-neutral-10 dark:peer-focus:bg-neutral-900 peer-focus:px-1 peer-invalid:text-error-600 dark:peer-invalid:text-error-200" required>Packages amount</label>
            </div>
            <div class="relative z-0">
                <input type="number" aria-label="quantity" name="quantity" id="quantity" class="w-full h-12 block leading-5 relative py-2 px-4 rounded bg-neutral-10 dark:bg-neutral-900 border focus:border-2 border-gray-500 overflow-x-auto focus:outline-none focus:border-primary-600 focus:ring-0 dark:number-gray-200 dark:border-gray-400 dark:focus:border-primary-200 peer" placeholder=" " value="100">
                <label for="quantity" class="absolute tracking-[.03125em] text-gray-500 dark:text-gray-400 bg-neutral-10 dark:bg-neutral-900 duration-300 transform px-1 -translate-y-6 scale-75 top-3 z-10 origin-[0] left-4 peer-focus:left-4 peer-focus:text-primary-600 dark:peer-focus:text-primary-200 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 peer-focus:bg-neutral-10 dark:peer-focus:bg-neutral-900 peer-focus:px-1 peer-invalid:text-error-600 dark:peer-invalid:text-error-200">Items Quantity/pkg</label>
            </div>
            <div class="relative z-0">
                <input type="number" aria-label="extra_items" name="extra_items" id="extra_items" class="w-full h-12 block leading-5 relative py-2 px-4 rounded bg-neutral-10 dark:bg-neutral-900 border focus:border-2 border-gray-500 overflow-x-auto focus:outline-none focus:border-primary-600 focus:ring-0 dark:text-gray-200 dark:border-gray-400 dark:focus:border-primary-200 peer" placeholder=" " value="18">
                <label for="extra_items" class="absolute tracking-[.03125em] text-gray-500 dark:text-gray-400 bg-neutral-10 dark:bg-neutral-900 duration-300 transform px-1 -translate-y-6 scale-75 top-3 z-10 origin-[0] left-4 peer-focus:left-4 peer-focus:text-primary-600 dark:peer-focus:text-primary-200 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 peer-focus:bg-neutral-10 dark:peer-focus:bg-neutral-900 peer-focus:px-1 peer-invalid:text-error-600 dark:peer-invalid:text-error-200">Extra Items</label>
            </div>
            <div class="pt-1 px-4 text-xs tracking-[0.4px] hidden">Supporting text</div>
          </div>

        </div>
        <div class="py-4 px-6 flex flex-row items-center bg-surface-400 dark:bg-surfacedark-400">
          <button type="submit" class="btn relative inline-flex flex-row items-center justify-center gap-x-1 py-2.5 px-6 rounded-[6.25rem] hover:shadow-md text-sm tracking-[.00714em] font-medium bg-primary-600 text-white dark:bg-primary-200 dark:text-primary-800">
            Save Changes
          </button>
        </div>
      <?php echo form_open() ?>
    </div>
  </div>

  <!-- Tailmater javascript -->
  <script src="<?php echo base_url('assets/js/tailmater.js')?>"></script>
</body>

</html>