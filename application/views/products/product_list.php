<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title  -->
  <title>Masinde Store</title>

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
      <!-- loader-->
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

      <!--<div class="relative">
        <!-- <button data-type="dropdown" data-target="#dropdown0" class="btn relative !inline-flex !items-center justify-center w-12 h-12 gap-x-2 p-2.5 rounded-[6.25rem] text-sm tracking-[.00714em] text-center font-medium hover:bg-primary-600/[0.08] focus:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08] dark:focus:bg-primary-200/[0.08]">
          <span  aria-label="Languages" data-microtip-position="bottom" role="tooltip" class="material-symbols-outlined !text-[28px] pointer-events-none">translate</span>
        </button>

        <!-- menus -->
       <!-- <ul id="dropdown0" data-type="dropdownmenu" class="[&.show]:!opacity-100 [&.show]:!visible opacity-0 invisible absolute top-[3.1rem] z-30 transition duration-400 ease-in-out left-auto right-0 transform translate-x-1/3 min-w-[150px] inline-flex flex-col py-2 rounded-xl bg-white dark:bg-gray-900 shadow-md dark:shadow-gray-50/10">
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
      </div> -->

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
        <h2 class="text-title-lg">All Products</h2>
        
        <!-- action -->
        <div class="flex flex-row gap-3 items-center">
          <!-- hidden action -->
          <div id="hidden-act" class="opacity-0 [&.show]:opacity-100 transition duration-400 ease-in-out flex flex-row gap-3 items-center">
            <button class="relative !inline-flex !items-center justify-center w-12 h-12 gap-x-2 py-2.5 px-6 rounded-[6.25rem] text-sm tracking-[.00714em] text-center font-medium bg-surface-100 dark:bg-surfacedark-100 hover:bg-surface-300 focus:bg-surface-400 dark:text-primary-200 dark:hover:bg-surfacedark-300 dark:focus:bg-surfacedark-400"><span aria-label="Export CSV" data-microtip-position="top" role="tooltip" class="material-symbols-outlined">download</span></button>

            <button class="relative !inline-flex !items-center justify-center w-12 h-12 gap-x-2 py-2.5 px-6 rounded-[6.25rem] text-sm tracking-[.00714em] text-center font-medium bg-surface-100 dark:bg-surfacedark-100 hover:bg-surface-300 focus:bg-surface-400 dark:text-primary-200 dark:hover:bg-surfacedark-300 dark:focus:bg-surfacedark-400"><span aria-label="Delete" data-microtip-position="top" role="tooltip" class="material-symbols-outlined">delete</span></button>
          </div>

          <!-- add new -->
          <a href="<?= site_url('product/create_index')?>" class="btn relative flex flex-row items-center justify-center gap-x-2 py-2 px-4 rounded-[6.25rem] hover:shadow-md text-sm tracking-[.00714em] font-medium bg-primary-600 text-white dark:bg-primary-200 dark:text-primary-800">
            <span class="material-symbols-outlined">add</span>
            Add New
         </a>
        </div>
      </div>

      <!-- content 1 -->
      <div class="grid grid-cols-1 sm:gap-4 md:gap-6">
        <!-- card -->
        <div class="px-6 py-8 flex flex-col rounded-xl bg-white dark:bg-gray-900">
          <div class="relative overflow-auto scrollbars">
            <!-- customers table -->
            <table class="table-sorter table-bordered-bottom table-hover">
              <thead>
                <tr>
                  <th data-sortable="false">S/N</th>
                  <th data-sortable="false">Product Name</th>
                  <th data-sortable="false">Brand</th>
                  <th data-sortable="true">Packages</th>
                  <th data-sortable="true">Quantity</th>
                  <th data-sortable="true">Buy Price</th>
                  <th data-sortable="true">Whole Sale Price</th>
                  <th data-sortable="true">Retail Sale Price</th>
                  <th data-sortable="true">Whole Sale Revenue</th>
                  <th data-sortable="true">Retail Sale Revenue</th>
                  <th data-sortable="true">Last update</th>
                  <th data-sortable="false">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $rowId = 1?>
                <?php foreach($products as $product):?>
                <tr class="[&.selected]:!bg-primary-100 dark:[&.selected]:!bg-primary-700">
                  <td class="!px-0">
                    <?= $rowId < 10 ? "0".$rowId++: $rowId ?>
                  </td>
                  <td>
                    <div class="flex items-center gap-3">
                      <div class="flex flex-col">
                        <h4 class="font-semibold"><?= $product->name ?></h4>
                      </div>
                    </div>
                  </td>
                  <td>
                    <?= $product->brand ?>
                  </td>
                  <td><?= $product->pkj_amount?></td>
                  <td><?= $product->quantity ?></td>
                  <td><?= number_format($product->pkgs_buy_price).'/=' ?></td>
                  <td><?= number_format($product->whole_sale_price).'/=' ?></td>
                  <td><?= number_format($product->retail_sale_price) ?></td>
                  <td><?= number_format($product->pkj_amount * $product->whole_sale_price).'/=' ?></td>
                  <td><?= number_format(($product->quantity + ($product->extra_items ?? 0)) * $product->retail_sale_price).'/=' ?></td>
                  <td><?= $product->updated_at ?? '--//--' ?></td>
                  <td>
                    <a href="<?= site_url('product/show/'.$product->id)?>" class="hover:text-primary-600 dark:hover:text-primary-200">view</a>
                  </td>
                </tr>
                <?php endforeach?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </main>
<?php include APPPATH.'/views/includes/footer.php'?>