<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title  -->
  <title>Masinde Store| Sales</title>

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
  <!-- header -->
<?php  include APPPATH.'/views/includes/header.php'?>
  <main class="lg:flex">
    <!-- sidebar -->
    <?php include APPPATH.'/views/includes/sidebar.php'?>
    <!-- content -->
    <div class="main-content flex-grow min-h-[100%] py-20 relative px-4 lg:pr-8 lg:pl-3">
      <!-- heading -->
      <div class="flex flex-row justify-between items-center pt-2 pb-6">
        <h2 class="text-title-lg">Sales</h2>
      </div>

      <!-- content 1 -->
      <div class="max-sm:flex gap-4 sm:grid sm:grid-cols-4 md:gap-6 mb-4 md:mb-6 max-sm:-mx-4 max-sm:px-4 overflow-auto [&::-webkit-scrollbar]:hidden [-ms-overflow-style:'none'] [scrollbar-width:'none']">
        <!-- small card -->
        <div class="p-6 max-sm:w-60 max-sm:flex-shrink-0 flex flex-col justify-between rounded-xl bg-white dark:bg-gray-900 overflow-hidden">
          <!-- title -->
          <div class="flex flex-row justify-between items-center mb-3">
            <h3 class="text-title-md text-gray-800 dark:text-gray-200">Sales</h3>
          </div>
          <div class="relative flex items-center justify-between">
            <h4 class="text-display-sm text-gray-800 dark:text-gray-200">12.5K</h4>
            <span class="text-label-lg flex items-center gap-1 px-2 py-1 rounded-full text-green-800 dark:text-green-100 bg-green-100 dark:bg-green-800">
              <span class="material-symbols-outlined !text-sm">arrow_upward</span>15%
            </span>
          </div>
        </div>
        <!-- small card -->
        <div class="p-6 max-sm:w-60 max-sm:flex-shrink-0 flex flex-col justify-between rounded-xl bg-white dark:bg-gray-900 overflow-hidden">
          <!-- title -->
          <div class="flex flex-row justify-between items-center mb-3">
            <h3 class="text-title-md text-gray-800 dark:text-gray-200">Target</h3>
          </div>
          <div class="relative flex items-center justify-between">
            <h4 class="text-display-sm text-gray-800 dark:text-gray-200">11K</h4>
            <span class="text-label-lg flex items-center gap-1 px-2 py-1 rounded-full text-error-800 dark:text-error-100 bg-error-100 dark:bg-error-800">
              <span class="material-symbols-outlined !text-sm">arrow_downward</span>4%
            </span>
          </div>
        </div>
        <!-- small card -->
        <div class="p-6 max-sm:w-60 max-sm:flex-shrink-0 flex flex-col justify-between rounded-xl bg-white dark:bg-gray-900 overflow-hidden">
          <!-- title -->
          <div class="flex flex-row justify-between items-center mb-3">
            <h3 class="text-title-md text-gray-800 dark:text-gray-200">Archievement</h3>
          </div>
          <div class="relative flex items-center justify-between">
            <h4 class="text-display-sm text-gray-800 dark:text-gray-200">115%</h4>
            <span class="text-label-lg flex items-center gap-1 px-2 py-1 rounded-full text-green-800 dark:text-green-100 bg-green-100 dark:bg-green-800">
              <span class="material-symbols-outlined !text-sm">arrow_upward</span>12%
            </span>
          </div>
        </div>
        <!-- small card -->
        <div class="p-6 max-sm:w-60 max-sm:flex-shrink-0 flex flex-col justify-between rounded-xl bg-white dark:bg-gray-900 overflow-hidden">
          <!-- title -->
          <div class="flex flex-row justify-between items-center mb-3">
            <h3 class="text-title-md text-gray-800 dark:text-gray-200">Profit</h3>
          </div>
          <div class="relative flex items-center justify-between">
            <h4 class="text-display-sm text-gray-800 dark:text-gray-200">3.5K</h4>
            <span class="text-label-lg flex items-center gap-1 px-2 py-1 rounded-full text-green-800 dark:text-green-100 bg-green-100 dark:bg-green-800">
              <span class="material-symbols-outlined !text-sm">arrow_upward</span>12%
            </span>
          </div>
        </div>
      </div>

      <!-- content 2 -->
      <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 md:gap-6 mb-4 md:mb-6">
        <div class="sm:col-span-2">
          <!-- card -->
          <div class="py-8 px-6 flex flex-col rounded-xl bg-white dark:bg-gray-900">
            <div class="flex flex-row gap-2 items-center justify-between pb-3">
              <h3 class="text-title-md text-gray-800 dark:text-gray-200">Sales vs Target</h3>
            </div>
            <div class="relative">
              <canvas class="max-w-100" id="SalesTargetLine"></canvas>
            </div>
          </div>
        </div>
        <div>
          <!-- card -->
          <div class="flex flex-col rounded-xl bg-white dark:bg-gray-900">
            <div class="flex flex-row gap-2 items-center justify-between pt-8 px-6 pb-3">
              <h3 class="text-title-md text-gray-800 dark:text-gray-200">Top Performance</h3>
            </div>
            <div class="relative pb-6">
              <ul>
                <li>
                  <a href="#" class="flex items-center gap-2 py-3 px-6 hover:bg-surface-100 dark:hover:bg-surfacedark-100">
                    <div class="w-8 h-8 flex justify-center items-center">#1</div>
                    <div class="flex items-center gap-2">
                      <img src="<?php echo base_url('assets/img/avatar.png')?>" class="w-8 h-8 rounded-full overflow-hidden bg-surface-200 dark:bg-surfacedark-200" alt="avatar">
                      <div class="flex flex-col">
                        <h4 class="text-title-sm font-medium">John Smith</h4>
                        <span class="text-label-md text-gray-500">Sales</span>
                      </div>
                    </div>
                    <div class="text-title-sm font-medium ml-auto">8.75k</div>
                  </a>
                </li>
                <li>
                  <a href="#" class="flex items-center gap-2 py-3 px-6 hover:bg-surface-100 dark:hover:bg-surfacedark-100">
                    <div class="w-8 h-8 flex justify-center items-center">#2</div>
                    <div class="flex items-center gap-2">
                      <img src="<?php echo base_url('assets/img/avatar.png')?>" class="w-8 h-8 rounded-full overflow-hidden bg-surface-200 dark:bg-surfacedark-200" alt="avatar">
                      <div class="flex flex-col">
                        <h4 class="text-title-sm font-medium">Michael Lee</h4>
                        <span class="text-label-md text-gray-500">Sales</span>
                      </div>
                    </div>
                    <div class="text-title-sm font-medium ml-auto">6.15k</div>
                  </a>
                </li>
                <li>
                  <a href="#" class="flex items-center gap-2 py-3 px-6 hover:bg-surface-100 dark:hover:bg-surfacedark-100">
                    <div class="w-8 h-8 flex justify-center items-center">#3</div>
                    <div class="flex items-center gap-2">
                      <img src="<?php echo base_url('assets/img/avatar.png')?>" class="w-8 h-8 rounded-full overflow-hidden bg-surface-200 dark:bg-surfacedark-200" alt="avatar">
                      <div class="flex flex-col">
                        <h4 class="text-title-sm font-medium">Emily Kim</h4>
                        <span class="text-label-md text-gray-500">Sales</span>
                      </div>
                    </div>
                    <div class="text-title-sm font-medium ml-auto">5.45k</div>
                  </a>
                </li>
                <li>
                  <a href="#" class="flex items-center gap-2 py-3 px-6 hover:bg-surface-100 dark:hover:bg-surfacedark-100">
                    <div class="w-8 h-8 flex justify-center items-center">#4</div>
                    <div class="flex items-center gap-2">
                      <img src="<?php echo base_url('assets/img/avatar.png')?>" class="w-8 h-8 rounded-full overflow-hidden bg-surface-200 dark:bg-surfacedark-200" alt="avatar">
                      <div class="flex flex-col">
                        <h4 class="text-title-sm font-medium">David Chen</h4>
                        <span class="text-label-md text-gray-500">Sales</span>
                      </div>
                    </div>
                    <div class="text-title-sm font-medium ml-auto">4.25k</div>
                  </a>
                </li>
                <li>
                  <a href="#" class="flex items-center gap-2 py-3 px-6 hover:bg-surface-100 dark:hover:bg-surfacedark-100">
                    <div class="w-8 h-8 flex justify-center items-center">#5</div>
                    <div class="flex items-center gap-2">
                      <img src="<?php echo base_url('assets/img/avatar.png')?>" class="w-8 h-8 rounded-full overflow-hidden bg-surface-200 dark:bg-surfacedark-200" alt="avatar">
                      <div class="flex flex-col">
                        <h4 class="text-title-sm font-medium">Jesicca Lim</h4>
                        <span class="text-label-md text-gray-500">Sales</span>
                      </div>
                    </div>
                    <div class="text-title-sm font-medium ml-auto">3.75k</div>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      
      <!-- content 3 -->
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 md:gap-6 mb-4 md:mb-6">
        <div>
          <!-- card -->
          <div class="py-8 px-6 flex flex-col rounded-xl bg-white dark:bg-gray-900">
            <div class="flex flex-row gap-2 items-center justify-between pb-3">
              <h3 class="text-title-md text-gray-800 dark:text-gray-200">Sales by Channel</h3>
            </div>
            <div class="relative grid grid-cols-2 gap-4">
              <div class="relative">
                <canvas class="max-w-100" id="ChannelChart"></canvas>
              </div>
              <div>
                <table class="text-label-lg w-full text-left mt-4">
                  <tbody>
                    <tr>
                      <th class="py-1 font-medium">
                        Chrome
                      </th>
                      <td class="text-right">
                        <span class="inline-block w-3 h-3 mr-1 rounded-full bg-yellow-500"></span>61%
                      </td>
                    </tr>
                    <tr>
                      <th class="py-1 font-medium">
                        Mozilla
                      </th>
                      <td class="text-right">
                        <span class="inline-block w-3 h-3 mr-1 rounded-full bg-pink-500"></span>29%
                      </td>
                    </tr>
                    <tr>
                      <th class="py-1 font-medium">
                        Safari
                      </th>
                      <td class="text-right">
                        <span class="inline-block w-3 h-3 mr-1 rounded-full bg-sky-400"></span>7.5%
                      </td>
                    </tr>
                    <tr>
                      <th class="py-1 font-medium">
                        Others
                      </th>
                      <td class="text-right">
                        <span class="inline-block w-3 h-3 mr-1 rounded-full bg-green-500"></span>2.5%
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div>
          <!-- card -->
          <div class="py-8 px-6 flex flex-col rounded-xl bg-white dark:bg-gray-900">
            <div class="flex flex-row gap-2 items-center justify-between pb-3">
              <h3 class="text-title-md text-gray-800 dark:text-gray-200">Sales Growth</h3>
            </div>
            <div class="relative">
              <canvas class="max-w-100" id="Growth"></canvas>
            </div>
          </div>
        </div>
      </div>

      <!-- content 4 -->
      <div class="max-sm:flex gap-4 sm:grid sm:grid-cols-2 md:gap-6 mb-4 md:mb-6 max-sm:-mx-4 max-sm:px-4 overflow-auto [&::-webkit-scrollbar]:hidden [-ms-overflow-style:'none'] [scrollbar-width:'none']">
        <!-- card -->
        <div class="max-sm:w-80 max-sm:flex-shrink-0 flex flex-col rounded-xl bg-white dark:bg-gray-900">
          <div class="flex flex-row gap-2 items-center justify-between pt-8 px-6 pb-3">
            <h3 class="text-title-md text-gray-800 dark:text-gray-200">Sales by Products</h3>
          </div>
          <div class="relative flex flex-col pb-6">
            <a href="#" class="flex items-center justify-between py-3 px-6 hover:bg-surface-100 dark:hover:bg-surfacedark-100">
              <div class="flex items-center gap-3">
                <img class="h-8 w-8" src="<?php echo base_url('assets/img/products/product.png')?>" alt="product images">
                <div class="flex flex-col">
                  <div class="leading-5">
                    Nike Women's Race Running Shoe
                  </div>
                  <div class="text-xs leading-5 text-gray-500">
                    Women shoes
                  </div>
                </div>
              </div>
              <span>154 Sold</span>
            </a>
            <a href="#" class="flex items-center justify-between py-3 px-6 hover:bg-surface-100 dark:hover:bg-surfacedark-100">
              <div class="flex items-center gap-3">
                <img class="h-8 w-8" src="<?php echo base_url('assets/img/products/product.png')?>" alt="product images">
                <div class="flex flex-col">
                  <div class="leading-5">
                    Apple 2020 MacBook Air Laptop M1 Chip
                  </div>
                  <div class="text-xs leading-5 text-gray-500">
                    Computer
                  </div>
                </div>
              </div>
              <span>114 Sold</span>
            </a>
            <a href="#" class="flex items-center justify-between py-3 px-6 hover:bg-surface-100 dark:hover:bg-surfacedark-100">
              <div class="flex items-center gap-3">
                <img class="h-8 w-8" src="<?php echo base_url('assets/img/products/product.png')?>" alt="product images">
                <div class="flex flex-col">
                  <div class="leading-5">
                    Leather Desk Pad Protector & Mouse Pad
                  </div>
                  <div class="text-xs leading-5 text-gray-500">
                    Computer accessories
                  </div>
                </div>
              </div>
              <span>94 Sold</span>
            </a>
            <a href="#" class="flex items-center justify-between py-3 px-6 hover:bg-surface-100 dark:hover:bg-surfacedark-100">
              <div class="flex items-center gap-3">
                <img class="h-8 w-8" src="<?php echo base_url('assets/img/products/product.png')?>" alt="product images">
                <div class="flex flex-col">
                  <div class="leading-5">
                    Aothia Large Dual Monitor Stand Riser
                  </div>
                  <div class="text-xs leading-5 text-gray-500">
                    Computer
                  </div>
                </div>
              </div>
              <span>65 Sold</span>
            </a>
            <a href="#" class="flex items-center justify-between py-3 px-6 hover:bg-surface-100 dark:hover:bg-surfacedark-100">
              <div class="flex items-center gap-3">
                <img class="h-8 w-8" src="<?php echo base_url('assets/img/products/product.png')?>" alt="product images">
                <div class="flex flex-col">
                  <div class="leading-5">
                    Blink Video Doorbell and chime app alerts
                  </div>
                  <div class="text-xs leading-5 text-gray-500">
                    Smarthome
                  </div>
                </div>
              </div>
              <span>34 Sold</span>
            </a>
          </div>
        </div>

        <!-- card -->
        <div class="py-8 px-6 max-sm:w-80 max-sm:flex-shrink-0 flex flex-col rounded-xl bg-white dark:bg-gray-900">
          <div class="flex flex-row gap-2 items-center justify-between pb-3">
            <h3 class="text-title-md text-gray-800 dark:text-gray-200">Sales by Category</h3>
          </div>
          <div class="relative">
            <canvas class="max-w-100" id="ProductChartTwo"></canvas>
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
  
  <!-- Charts js -->
  <script src="<?php echo base_url('assets/vendors/chart.js/dist/chart.umd.js')?>"></script>
  <!-- Chart config -->
  <script src="<?php echo base_url('assets/js/charts/sales.js')?>"></script>
  
  <!-- Tailmater javascript -->
  <script src="<?php echo base_url('assets/js/tailmater.js')?>"></script>
</body>

</html>