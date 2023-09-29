<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from goodash.tailwinddashboard.com/ecommerce/shopping-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Sep 2023 19:18:21 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title  -->
  <title>Sell product</title>

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

  <?php  include APPPATH.'/views/includes/header.php'?>

  <main class="lg:flex">
    <!-- sidebar -->
    <?php include APPPATH.'/views/includes/sidebar.php'?>

    <!-- content -->
    <div class="main-content flex-grow min-h-[100%] py-20 relative px-4 lg:pr-8 lg:pl-3">
      <!-- heading -->
      <div class="flex flex-row justify-between items-center pt-2 pb-6">
        <h2 class="text-title-lg">Shopping Cart</h2>
      </div>
      
      <!-- content 1 -->
      <div class="grid grid-cols-1 gap-4 md:gap-6">
        <!-- card -->
        <div class="sm:px-6 py-8 flex flex-col rounded-xl bg-white dark:bg-gray-900">
          <div class="w-full mb-6 overflow-x-auto">

          <div class="relative overflow-auto scrollbars">
          <table class=" table-bordered-bottom table-hover w-full text-left text-gray-600 dark:text-gray-400">
              <thead class="bg-gray-100 dark:bg-gray-900 dark:bg-opacity-40">
                <tr>
                  <th class="p-4 font-normal">Products</th>
                  <th class="p-4 font-normal">Sold as</th>
                  <th class="p-4 font-normal">Price</th>
                  <th class="p-4 font-normal">Quantity</th>
                  <th class="p-4 font-normal">Total Price</th>
                  <th class="p-4 font-normal"></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($cartItems as $cartItem):?>
                <tr class="border-b border-gray-100 dark:border-gray-700">
                  <td class="px-2 py-1 font-normal">
                    <a href="#productId">
                      <div class="flex flex-wrap flex-row items-center">
                        <div class="leading-5 dark:text-gray-300 flex-1 mb-1">  
                          <?= $cartItem->name ?>
                        </div>
                      </div>
                    </a>
                  </td>
                  <td class="py-1 px-2 font-normal "><?= $cartItem->sold_by ?></td>
                  <td class="py-1 px-2 font-normal ">
                    <?php if($cartItem->sold_by == "retail"):?>
                      <?= $cartItem->retail_sale_price ?>
                    <?php else:?>
                      <?= $cartItem->whole_sale_price ?>
                    <?php endif?>
                  </td>
                  <td class="py-1 px-2 font-normal text-center">
                    <div class="flex flex-row" style="max-width: 200px;">
                      <div class="relative z-0">
                        <input type="text" aria-label="qtyinput1" name="qtyinput1" id="qtyinput1" class="w-14 h-10 block leading-5 relative py-2 px-4 rounded bg-neutral-10 dark:bg-neutral-900 border focus:border-2 border-gray-500 overflow-x-auto focus:outline-none focus:border-primary-600 focus:ring-0 dark:text-gray-200 dark:border-gray-400 dark:focus:border-primary-200 peer" value="<?= $cartItem->cart_items_quantity ?>">
                      </div>
                    </div>
                  </td>
                  <td class="py-1 px-2 font-normal text-center">
                    Comming...
                  </td>
                </tr>
                <?php endforeach?>
            </tbody>
            </table>
           </div>


            <div class="flex flex-wrap flex-row">
              <div class="flex-shrink max-w-full px-4 w-full sm:w-1/2">
                <div class="my-6" id="coupon">
                  <div class="relative flex flex-row gap-4 items-center w-full mb-6">
                    <input type="text" aria-label="inputtext" name="inputtext" id="inputtext" class="grow h-12 block leading-5 relative py-2 px-4 rounded bg-neutral-10 dark:bg-neutral-900 border focus:border-2 border-gray-500 overflow-x-auto focus:outline-none focus:border-primary-600 focus:ring-0 dark:text-gray-200 dark:border-gray-400 dark:focus:border-primary-200 peer" placeholder="Discount code" value="">
                    <button class="btn-tonal relative inline-flex flex-row items-center justify-center gap-x-2 py-2.5 px-6 rounded-[6.25rem] text-sm tracking-[.00714em] font-medium hover:shadow bg-secondary-100 text-primary-900 dark:bg-secondary-700 dark:text-secondary-100">
                      Apply
                    </button>
                  </div>
                </div>
              </div>

              <div class="flex-shrink max-w-full px-4 w-full sm:w-1/2 table-custom mb-6">
                <table class="table-auto w-full text-left text-gray-600 dark:text-gray-400">
                  <tbody>
                    <tr class="border-b border-gray-100 dark:border-gray-700">
                      <td class="p-4 font-normal text-right"><b>Sub-Total</b></td>
                      <td class="p-4 font-normal text-right totals">670,000/=</td>
                    </tr>
                    <tr class="border-b border-gray-100 dark:border-gray-700">
                      <td class="p-4 font-normal text-right"><b>Discount</b></td>
                      <td class="p-4 font-normal text-right totals">-2,000/=</td>
                    </tr>
                    <tr class="border-b border-gray-100 dark:border-gray-700">
                      <td class="p-4 font-normal text-right"><b>Total</b></td>
                      <td class="p-4 font-normal text-right totals">668,000</td>
                    </tr>
                  </tbody>
                </table>
              </div>

            </div>

            <div class="flex-shrink max-w-full px-4 w-full">
                <div class="relative pt-4 flex flex-col sm:flex-row gap-4 items-center justify-between">
                  <a href="#" class="max-sm:hidden btn-tonal relative flex max-sm:w-full sm:inline-flex flex-row items-center justify-center gap-x-2 py-2.5 px-6 rounded-[6.25rem] text-sm tracking-[.00714em] font-medium hover:shadow bg-secondary-100 text-primary-900 dark:bg-secondary-700 dark:text-secondary-100">
                   <!-- blanck -->
                  </a>

                  <a href="#addorder" class="btn relative flex max-sm:w-full sm:inline-flex flex-row items-center justify-center gap-x-2 py-2.5 px-6 rounded-[6.25rem] hover:shadow-md text-sm tracking-[.00714em] font-medium bg-primary-600 text-white dark:bg-primary-200 dark:text-primary-800">
                    Sell Now
                    <span class="material-symbols-outlined">arrow_forward</span>
                  </a>
                </div>
              </div>

            <br />
            <br />

           <div class="relative overflow-auto scrollbars">
            <table class="table-sorter table-bordered-bottom table-hover w-full text-left text-gray-600 dark:text-gray-400">
              <thead class="bg-gray-100 dark:bg-gray-900 dark:bg-opacity-40">
                <tr>
                  <th class="p-4 font-normal">Products</th>
                  <th class="p-4 font-normal">Brand</th>
                  <th class="p-4 font-normal">Whole Price</th>
                  <th class="p-4 font-normal">Retail Price</th>
                  <th class="p-4 font-normal">Stock</th>
                  <th class="p-4 font-normal">Sell as</th>
                  <th class="p-4 font-normal"></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($products as $product):?>
                <tr class="border-b border-gray-100 dark:border-gray-700">
                  <td class="p-4 font-normal">
                    <a href="#">
                      <div class="flex flex-wrap flex-row items-center">
                        <div class="leading-5 dark:text-gray-300 flex-1 mb-1">  
                          <?= $product->name ?>
                        </div>
                      </div>
                    </a>
                  </td>
                  <td class="p-4 font-normal text-center "><?= $product->brand ? $product->brand: '--//--' ?></td>
                  <td class="p-4 font-normal grid grid-cols-2 gap-2 ">
                    <span><?= $product->whole_sale_price . '/=' ?></span>
                  </td>
                  <td class="p-4 font-normal ">
                    <span><?= $product->retail_sale_price . '/=' ?></span>
                  </td>
                  <td class="p-4 font-normal grid grid-cols-2 gap-2 ">
                    <?php if($product->quantity > $product->stock_limit):?>
                    <span class="bg-green-100 text-green-800 text-xs font-medium px-3 py-1 rounded dark:bg-gray-700 dark:text-green-400 border border-green-400"><?= $product->quantity ?></span>
                    <?php else:?>
                    <span class="bg-red-100 text-red-800 text-xs font-medium px-3 py-1 rounded dark:bg-gray-700 dark:text-red-400 border border-red-400"><?= $product->quantity ?></span>
                    <?php endif?>
                  </td>
                  <td class="p-4 font-normal text-center">
                    <?php echo form_open('cart/create')?>
                    <input type="hidden" name="user_id" value="<?= $userId ?>">
                    <input type="hidden" name="sell_type" value="retail">
                    <input type="hidden" name="product_id" value="<?= $product->id ?>">
                    <button type="submit"  class="btn relative inline-flex flex-row items-center justify-center gap-x-2 py-2.5 px-6 rounded-[6.25rem] hover:shadow-md text-sm tracking-[.00714em] font-medium bg-primary-600 text-white dark:bg-primary-200 dark:text-primary-800">
                       Retail
                    </button>
                    <?php echo form_close()?>
                  </td>
                  <td class="p-4 font-normal text-center">
                    <?php echo form_open('cart/create')?>
                      <input type="hidden" name="user_id" value="<?= $userId ?>">
                      <input type="hidden" name="sell_type" value="whole">
                      <input type="hidden" name="product_id" value="<?= $product->id ?>">
                      <button  class="btn relative inline-flex flex-row items-center justify-center gap-x-2 py-2.5 px-6 rounded-[6.25rem] hover:shadow-md text-sm tracking-[.00714em] font-medium bg-primary-600 text-white dark:bg-primary-200 dark:text-primary-800">
                        Whole
                    </button>
                      <?php echo form_close()?>
                  </td>
                </tr>
                <?php endforeach ?>
            </tbody>
            </table>
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
  
  <script src="<?php echo base_url('assets/js/tailmater.js')?>"></script>


  <script src="<?php echo base_url('assets/vendors/simple-datatables/dist/umd/simple-datatables.js')?>"></script><!--sort table-->
  <script>
  const myTablesorter = function () {
    const els = document.querySelectorAll(".table-sorter");
    if ( els != null) {
      for( let i = 0; i < els.length; i++)
      {
        const dataTable = new simpleDatatables.DataTable((els[i]));
      }
    };
  }
  myTablesorter();
  </script>
</body>

</html>