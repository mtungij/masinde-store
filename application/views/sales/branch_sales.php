<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Masinde Store | Branch Seles</title>

  <link rel="stylesheet" id="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">
  <link rel="stylesheet" id="color" href="<?php echo base_url('assets/css/colors.css')?>">

  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;600;700&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">

  <link rel="icon" href="<?php echo base_url('assets/img/favicon.png')?>">
</head>

<body id="body-layout" class="text-body-md relative font-sans font-normal text-gray-700 dark:text-gray-300 bg-surface-500 dark:bg-surfacedark-500 show">

    <?php include APPPATH.'/views/includes/header.php'?>
  <main class="lg:flex">
   <?php include APPPATH.'/views/includes/sidebar.php'?>
    <!-- content -->
    <div class="main-content flex-grow min-h-[100%] py-20 relative px-4 lg:pr-8 lg:pl-3">
      <!-- heading -->
      <div class="flex flex-row justify-between items-center pt-2 pb-6">
        <h2 class="text-title-lg">Branch Sales</h2>
      </div>
      
      <!-- content 1 -->
      <div class="max-md:flex gap-4 md:grid md:grid-cols-3 md:gap-6 mb-6 md:mb-8 max-md:-mx-4 max-md:px-4 overflow-auto [&::-webkit-scrollbar]:hidden [-ms-overflow-style:'none'] [scrollbar-width:'none']">
        <!-- small card -->
        <div class="max-sm:w-72 max-sm:flex-shrink-0 flex flex-col justify-between rounded-xl bg-white dark:bg-gray-900 overflow-hidden">
          <div class="flex flex-col gap-4">
            <!-- title -->
            <div class="pt-4 px-6 flex flex-row gap-2 items-center justify-between">
              <div class="flex flex-row items-center gap-2">
                <span class="material-symbols-outlined !text-lg text-yellow-500">military_tech</span>
                <h3 class="text-title-md text-gray-800 dark:text-gray-200">Today</h3>
              </div>

              <span class="flex flex-row items-center gap-1 text-green-500" aria-label="Vs Yesterday" data-microtip-position="left" role="tooltip">
                <span class="material-symbols-outlined">trending_up</span>
                <span>12%</span>
              </span>
            </div>
            <hr class="border-gray-100 dark:border-gray-700">
            <!-- info -->
            <div class="pb-4 px-6 flex flex-col text-gray-500">
              <span class="text-body-md">Sales: <?= $today_sales["today_sales"] ?></span>
              <span class="text-body-md">Revenue: <?= "Tsh. ".number_format($today_sales["revenue"]) ?></span>
            </div>
          </div>
        </div>
        
        <!-- small card -->
        <div class="max-sm:w-72 max-sm:flex-shrink-0 flex flex-col justify-between rounded-xl bg-white dark:bg-gray-900 overflow-hidden">
          <div class="flex flex-col gap-4">
            <!-- title -->
            <div class="pt-4 px-6 flex flex-row gap-2 items-center justify-between">
              <div class="flex flex-row items-center gap-2">
                <span class="material-symbols-outlined !text-lg text-blue-500">military_tech</span>
                <h3 class="text-title-md text-gray-800 dark:text-gray-200">Month Sales(<?= date('Y') ?>)</h3>
              </div>

              <span class="flex flex-row items-center gap-1 text-green-500" aria-label="Vs Last Week" data-microtip-position="left" role="tooltip">
                <span class="material-symbols-outlined">trending_up</span>
                <span>15%</span>
              </span>
            </div>
            <hr class="border-gray-100 dark:border-gray-700">
            <!-- info -->
            <div class="pb-4 px-6 flex flex-col text-gray-500">
              <span class="text-body-md">Sales: <?= $monthly_sales["monthly_sales"] ?></span>
              <span class="text-body-md">Revenue: <?= "Tsh. ".number_format($monthly_sales["revenue"]) ?></span>
            </div>
          </div>
        </div>

        <!-- small card -->
        <div class="max-sm:w-72 max-sm:flex-shrink-0 flex flex-col justify-between rounded-xl bg-white dark:bg-gray-900 overflow-hidden">
          <div class="flex flex-col gap-4">
            <!-- title -->
            <div class="pt-4 px-6 flex flex-row gap-2 items-center justify-between">
              <div class="flex flex-row items-center gap-2">
                <span class="material-symbols-outlined !text-lg text-green-500">military_tech</span>
                <h3 class="text-title-md text-gray-800 dark:text-gray-200">All Sales</h3>
              </div>

              <span class="flex flex-row items-center gap-1 text-error-500" aria-label="Vs Last Month" data-microtip-position="left" role="tooltip">
                <span class="material-symbols-outlined">trending_down</span>
                <span>6%</span>
              </span>
            </div>
            <hr class="border-gray-100 dark:border-gray-700">
            <!-- info -->
            <div class="pb-4 px-6 flex flex-col text-gray-500">
              <span class="text-body-md">Sales: <?= format_prices($sales_summary['total_sales']) ?></span>
              <span class="text-body-md">Revenue: <?= format_prices($sales_summary['revenue']) ?></span>
            </div>
          </div>
        </div>
      </div>

      <!-- content 2 -->
      <div class="grid grid-cols-1 sm:gap-4 md:gap-6">
        <!-- card -->
        <div class="py-8 px-6 flex flex-col rounded-xl bg-white dark:bg-gray-900">
          <div class="relative overflow-auto scrollbars" style="white-space: nowrap">
            <table class="table-sorter table-bordered-bottom table-hover">
              <thead>
                <tr>
                  <th data-sortable="false">Invoice ID</th>
                  <th>Total Price</th>
                  <th>Amount Paid</th>
                  <th>Payment Method</th>
                  <th>Date</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($sales as $sale):?>
                <tr>
                  <td>
                    <a href="../ecommerce/product-detail.html" class="flex items-center gap-3 hover:text-primary-600 dark:hover:text-primary-200">
                      <h6 class="text-title-sm"><?= "#".$sale->order_number ?></h6>
                    </a>
                  </td>
                  <td><?= number_format($sale->total_price) ?></td>
                  <td><?= number_format($sale->amount_paid) ?></td>
                  <td><?= $sale->sell_by ?></td>
                  <td>
                    <?= date('Y/m/d H:m:i', strtotime($sale->created_at)) ?>
                  </td>
                </tr>
                <?php endforeach ?>
              </tbody>
            </table>
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
              </label>
            </div>
            <div class="relative" aria-label="Layout Compact" data-microtip-position="top" role="tooltip" >
              <label for="layout-compact" class="setLayout cursor-pointer flex flex-row items-center gap-2">
              <input type="radio" class="z-10 hidden opacity-0" name="layouts" id="layout-compact" value="layout-compact">
              </label>
            </div>
            <div class="relative" aria-label="Layout Compact Text" data-microtip-position="top" role="tooltip" >
              <label for="layout-compact-text" class="setLayout cursor-pointer flex flex-row items-center gap-2">
              <input type="radio" class="z-10 hidden opacity-0" name="layouts" id="layout-compact-text" value="layout-compact-text">
              </label>
            </div>
            <div class="relative" aria-label="Layout Classic" data-microtip-position="top" role="tooltip" >
              <label for="layout-classic" class="setLayout cursor-pointer flex flex-row items-center gap-2">
              <input type="radio" class="z-10 hidden opacity-0" name="layouts" id="layout-classic" value="layout-classic">
              </label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Tailmater javascript -->
  <script src="<?php echo base_url('assets/js/tailmater.js')?>"></script>
  <!-- table sorter -->
  <script src="<?php echo base_url('assets/vendors/simple-datatables/dist/umd/simple-datatables.js')?>"></script><!--sort table-->
  <script>
  const myTablesorter = function () {
    const els = document.querySelectorAll(".table-sorter");
    if ( els != null) {
      for( let i = 0; i < els.length; i++)
      {
        const table = new simpleDatatables.DataTable((els[i]));
      }
    };
  }
  myTablesorter();
  </script>
</body>

</html>