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

<?php include APPPATH.'/views/includes/header.php'?>

  <main class="lg:flex">
    <!-- sidebar -->
  <?php include APPPATH.'/views/includes/sidebar.php'?>
    <!-- content -->
    <div class="main-content flex-grow min-h-[100%] py-20 relative px-4 lg:pr-8 lg:pl-3">
      <!-- heading -->
      <div class="flex flex-row justify-between items-center pt-2 pb-6">
        <h2 class="text-title-lg">Welcome <?= $this->session->userdata('username');?></h2>
        <!-- filter -->
        <div class="btn-segmented inline-flex flex-row items-center">
          <div class="segmented-item [&.active]:bg-secondary-100 dark:[&.active]:bg-secondary-700 h-8 btn-outline relative inline-flex flex-row items-center justify-center gap-x-2 py-2 px-4 text-sm tracking-[.00714em] font-medium border border-gray-500 text-primary-600 dark:border-gray-400 dark:text-primary-200 active">
            <input id="check7" type="radio" name="radios" class="z-10 opacity-0 absolute inset-0" value="1" checked="">
            <label class="flex items-center gap-3" for="check7">
              Daily
            </label>
          </div>
          <div class="segmented-item [&.active]:bg-secondary-100 dark:[&.active]:bg-secondary-700 h-8 btn-outline relative inline-flex flex-row items-center justify-center gap-x-2 py-2 px-4 text-sm tracking-[.00714em] font-medium border border-gray-500 text-primary-600 dark:border-gray-400 dark:text-primary-200">
            <input id="check8" type="radio" name="radios" class="z-10 opacity-0 absolute inset-0" value="2">
            <label class="flex items-center gap-3" for="check8">
              Monthly
            </label>
          </div>
        </div>
      </div>

      <!-- content 1 -->
      <div class="sm:grid sm:grid-cols-2 sm:gap-4 md:gap-6">
        <!-- card -->
        <div class="py-8 px-6 flex flex-col rounded-xl bg-white dark:bg-gray-900 mb-4 md:mb-6">
          <div class="flex flex-row gap-2 items-center justify-between pb-3">
            <h3 class="text-title-md text-gray-800 dark:text-gray-200">Sales vs Profit</h3>
          </div>
          <div class="relative">
           <canvas class="max-w-100" id="BarChart"></canvas>
          </div>
        </div>

        <div class="max-sm:flex gap-4 sm:grid sm:grid-cols-2 md:gap-6 mb-4 md:mb-6 max-sm:-mx-4 max-sm:px-4 overflow-auto [&::-webkit-scrollbar]:hidden [-ms-overflow-style:'none'] [scrollbar-width:'none']">
          <!-- card -->
          <div class="max-sm:w-60 max-sm:flex-shrink-0 relative py-8 px-6 overflow-hidden flex flex-col gap-2 rounded-xl bg-white dark:bg-gray-900">
            <!-- bg -->
            <div class="absolute right-0 top-0 opacity-50 text-surface-400 dark:text-surfacedark-400 !text-[100px] material-symbols-outlined">account_balance_wallet</div>

            <h2 class="text-headline-md mt-1"><span></span>31k</h2>
            <div class="flex justify-between items-center gap-2 z-10">
              <h3 class="text-body-md text-gray-800 dark:text-gray-200">Total products</h3>
              <span class="col-span-2 text-body-sm text-green-500 text-right">+10%</span>
            </div>
          </div>
          <!-- card -->
          <div class="max-sm:w-60 max-sm:flex-shrink-0 relative py-8 px-6 overflow-hidden flex flex-col gap-2 rounded-xl bg-white dark:bg-gray-900">
            <!-- bg -->
            <div class="absolute right-0 top-0 opacity-50 text-surface-400 dark:text-surfacedark-400 !text-[100px] material-symbols-outlined">shopping_cart</div>

            <h2 class="text-headline-md mt-1"><span>Tsh </span> 50M</h2>
            <div class="flex justify-between items-center gap-2 z-10">
              <h3 class="text-body-md text-gray-800 dark:text-gray-200">Total Buy Price</h3>
              <span class="col-span-2 text-body-sm text-green-500 text-right">+10%</span>
            </div>
          </div>
          <!-- card -->
         <div class="max-sm:w-60 max-sm:flex-shrink-0 relative py-8 px-6 overflow-hidden flex flex-col gap-2 rounded-xl bg-white dark:bg-gray-900">
            <!-- bg -->
            <div class="absolute right-0 top-0 opacity-50 text-surface-400 dark:text-surfacedark-400 !text-[100px] material-symbols-outlined">person</div>
 
            <h2 class="text-headline-md mt-1"><span>Tsh </span> 65M </h2>
            <div class="flex justify-between items-center gap-2 z-10">
              <h3 class="text-body-md text-gray-800 dark:text-gray-200">Total Revenue</h3>
              <span class="col-span-2 text-body-sm text-green-500 text-right">+21%</span>
            </div>
          </div>
          <!-- card -->
          <div class="max-sm:w-60 max-sm:flex-shrink-0 relative py-8 px-6 overflow-hidden flex flex-col gap-2 rounded-xl bg-white dark:bg-gray-900">
            <!-- bg -->
            <div class="absolute right-0 top-0 opacity-50 text-surface-400 dark:text-surfacedark-400 !text-[100px] material-symbols-outlined">person_pin</div>

            <h2 class="text-headline-md mt-1">100k</h2>
            <div class="flex justify-between items-center gap-2 z-10">
              <h3 class="text-body-md text-gray-800 dark:text-gray-200">Total Sales</h3>
              <span class="col-span-2 text-body-sm text-red-500 text-right">-9%</span>
            </div>
          </div>
        </div>
      </div>

      <!-- content 2 -->
      <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 md:gap-6 mb-4 md:mb-6">
        <div class="max-sm:order-2">
          <!-- card -->
          <div class="py-8 px-6 flex flex-col rounded-xl bg-white dark:bg-gray-900">
            <div class="flex flex-row gap-2 items-center justify-between pb-3">
              <h3 class="text-title-md text-gray-800 dark:text-gray-200">Sales by Branch/Store</h3>
            </div>
            <div class="relative">
              <div class="flex flex-col gap-1 py-2">
                <div class="flex items-center justify-between">
                  <div class="flex items-center">
                    UYOLE SHOP
                  </div>
                  <span>16,050</span>
                </div>
                <!-- linear progress -->
                <div class="flex bg-surface-500 dark:bg-surfacedark-500 h-1 mt-2">
                  <div class="flex bg-green-600 dark:bg-green-200" role="progressbar" style="width: 69%;" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <div class="flex flex-col gap-1 py-2">
                <div class="flex items-center justify-between">
                  <div class="flex items-center">
                    MBALIZI SHOP
                  </div>
                  <span>3,050</span>
                </div>
                <!-- linear progress -->
                <div class="flex bg-surface-500 dark:bg-surfacedark-500 h-1 mt-2">
                  <div class="flex bg-green-600 dark:bg-green-200" role="progressbar" style="width: 19%;" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <div class="flex flex-col gap-1 py-2">
                <div class="flex items-center justify-between">
                  <div class="flex items-center">
                    HOME SHOP
                  </div>
                  <span>2,150</span>
                </div>
                <!-- linear progress -->
                <div class="flex bg-surface-500 dark:bg-surfacedark-500 h-1 mt-2">
                  <div class="flex bg-green-600 dark:bg-green-200" role="progressbar" style="width: 12%;" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <div class="flex flex-col gap-1 py-2">
                <div class="flex items-center justify-between">
                  <div class="flex items-center">
                    MAIN STORE
                  </div>
                  <span>1,750</span>
                </div>
                <!-- linear progress -->
                <div class="flex bg-surface-500 dark:bg-surfacedark-500 h-1 mt-2">
                  <div class="flex bg-green-600 dark:bg-green-200" role="progressbar" style="width: 9%;" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <div class="flex flex-col gap-1 py-2">
                <div class="flex items-center justify-between">
                  <div class="flex items-center">
                    <img src="<?php echo base_url('assets/img/flags/JP.svg')?>" class="w-6 h-6 mr-2" alt="social">
                    SELF SALES
                  </div>
                  <span>1,250</span>
                </div>
                <!-- linear progress -->
                <div class="flex bg-surface-500 dark:bg-surfacedark-500 h-1 mt-2">
                  <div class="flex bg-green-600 dark:bg-green-200" role="progressbar" style="width: 8%;" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="max-sm:order-1 sm:col-span-2">
          <!-- card -->
          <div class="flex flex-col rounded-xl bg-white dark:bg-gray-900">
            <div class="py-8 px-6 flex flex-row gap-2 items-center justify-between pb-3">
              <h3 class="text-title-md text-gray-800 dark:text-gray-200">Recently Sales</h3>
            </div>
            <div class="relative pb-6 overflow-auto">
              <table class="table-bordered-bottom text-body-sm">
                <thead class="text-gray-800 dark:text-gray-200 border-b border-gray-100 dark:border-gray-800">
                  <tr class="[&_th]:px-6 [&_th]:py-5 title-md bg-surface-100 dark:bg-surfacedark-100">
                    <th>
                      Product Name
                    </th>
                    <th>
                      Amount
                    </th>
                    <th>
                      Status
                    </th>
                    <th>
                      Invoive
                    </th>
                  </tr>
                </thead>
                <tbody class="[&_td]:px-6 [&_td]:py-3 text-body-sm">
                  <tr>
                    <td>
                      <div class="flex flex-col">
                        Azam cora
                        <span class="text-label-md text-gray-500 mt-1">Uyole</span>
                      </div>
                    </td>
                    <td>
                      <span>Tsh</span> 650k
                    </td>
                    <td>
                      <div class="inline-block leading-tight text-center text-label-md py-1 px-3 text-gray-800 dark:text-gray-100 bg-primary-100 dark:bg-primary-900 rounded-full">Process</div>
                    </td>
                    <td>
                      <a href="#" class="hover:text-primary-500">#INV9834</a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="flex flex-col">
                        Pepsi Big
                        <span class="text-label-md text-gray-500 mt-1">Mbalizi</span>
                      </div>
                    </td>
                    <td>
                      <span>Tsh</span> 362k
                    </td>
                    <td>
                      <div class="inline-block leading-tight text-center text-label-md py-1 px-3 text-gray-800 dark:text-gray-100 bg-yellow-100 dark:bg-yellow-900 rounded-full">Shipping</div>
                    </td>
                    <td>
                      <a href="#" class="hover:text-primary-500">#INV9834</a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="flex flex-col">
                        Juice Orange
                        <span class="text-label-md text-gray-500 mt-1">Home shop</span>
                      </div>
                    </td>
                    <td>
                      <span>Tsh</span> 142k
                    </td>
                    <td>
                      <div class="inline-block leading-tight text-center text-label-md py-1 px-3 text-gray-800 dark:text-gray-100 bg-green-100 dark:bg-green-900 rounded-full">Complete</div>
                    </td>
                    <td>
                      <a href="#" class="hover:text-primary-500">#INV9834</a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="flex flex-col">
                        Chocolate Orange
                        <span class="text-label-md text-gray-500 mt-1">Mbalizi</span>
                      </div>
                    </td>
                    <td>
                      <span>Tsh</span> 50k
                    </td>
                    <td>
                      <div class="inline-block leading-tight text-center text-label-md py-1 px-3 text-gray-800 dark:text-gray-100 bg-red-100 dark:bg-red-900 rounded-full">Cancelled</div>
                    </td>
                    <td>
                      <a href="#" class="hover:text-primary-500">#INV9834</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <!-- content 3 -->
      <div class="max-sm:flex gap-4 sm:grid sm:grid-cols-3 md:gap-6 mb-4 md:mb-6 max-sm:-mx-4 max-sm:px-4 overflow-auto [&::-webkit-scrollbar]:hidden [-ms-overflow-style:'none'] [scrollbar-width:'none']">
        <!-- card -->
        <div class="relative overflow-hidden max-sm:w-60 max-sm:flex-shrink-0 py-8 px-6 flex flex-col rounded-xl bg-white dark:bg-gray-900">
          <div class="flex flex-row gap-2 items-center justify-between pb-3">
            <h3 class="text-title-md text-gray-800 dark:text-gray-200">Total customers</h3>
            <span class="col-span-2 text-body-sm text-green-500 text-right">+16%</span>
          </div>
          <div class="relative">
            <h4 class="text-headline-sm">890,167<span></span></h4>
          </div>

          <hr class="border-surface-500 dark:border-surfacedark-500 my-5">

          <div class="flex flex-row gap-2 items-center justify-between pb-3">
            <h3 class="text-title-md text-gray-800 dark:text-gray-200">Avg. Sales </h3>
            <span class="col-span-2 text-body-sm text-green-500 text-right">+34%</span>
          </div>
          <div class="relative">
            <h4 class="text-headline-sm"><span>Tsh</span> 960k</h4>
          </div>
          <!-- bg -->
          <div class="absolute -right-4 -bottom-24">
            <div class="bg-surface-500 dark:bg-surfacedark-500 opacity-50 dark:opacity-50 w-36 h-36 rounded-full shadow-lg shadow-indigo-500/10"></div>
          </div>
          <div class="absolute -right-24 -bottom-12">
            <div class="bg-surface-500 dark:bg-surfacedark-500 opacity-50 dark:opacity-50 w-36 h-36 rounded-full shadow-lg shadow-indigo-500/10"></div>
          </div>
        </div>
        <!-- card -->
        <div class="max-sm:w-60 max-sm:flex-shrink-0 py-8 px-6 flex flex-col rounded-xl bg-white dark:bg-gray-900">
          <div class="flex flex-row gap-2 items-center justify-between pb-3">
            <h3 class="text-title-md text-gray-800 dark:text-gray-200">Traffic Sources</h3>
          </div>
          <div class="relative w-3/4 mx-auto">
            <canvas class="max-w-100" id="SourceChart"></canvas>
          </div>
        </div>
        <!-- card -->
        <div class="relative overflow-hidden max-sm:w-60 max-sm:flex-shrink-0 py-8 px-6 flex flex-col rounded-xl bg-white dark:bg-gray-900">
          <div class="flex flex-row gap-2 items-center justify-between pb-3">
            <h3 class="text-title-md text-gray-800 dark:text-gray-200">Avg. Daily sales</h3>
            <span class="col-span-2 text-body-sm text-red-500 text-right">-8%</span>
          </div>
          <div class="relative">
            <h4 class="text-headline-sm">500k</h4>
          </div>

          <hr class="border-surface-500 dark:border-surfacedark-500 my-5">

          <div class="flex flex-row gap-2 items-center justify-between pb-3">
            <h3 class="text-title-md text-gray-800 dark:text-gray-200">Conversion Rate</h3>
            <span class="col-span-2 text-body-sm text-red-500 text-right">-6%</span>
          </div>
          <div class="relative">
            <h4 class="text-headline-sm">90<span>%</span></h4>
          </div>

          <!-- bg -->
          <div class="absolute -right-4 -bottom-24">
            <div class="bg-surface-500 dark:bg-surfacedark-500 opacity-50 dark:opacity-50 w-36 h-36 rounded-full shadow-lg shadow-indigo-500/10"></div>
          </div>
          <div class="absolute -right-24 -bottom-12">
            <div class="bg-surface-500 dark:bg-surfacedark-500 opacity-50 dark:opacity-50 w-36 h-36 rounded-full shadow-lg shadow-indigo-500/10"></div>
          </div>
        </div>
      </div>

      <!-- content 4 -->
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 md:gap-6 mb-4 md:mb-6">
        <div>
          <!-- card -->
          <div class="flex flex-col rounded-xl bg-white dark:bg-gray-900">
            <div class="pt-5 px-6 flex flex-row gap-2 items-center justify-between pb-3">
              <h3 class="text-title-md text-gray-800 dark:text-gray-200">Bestseller</h3>
            </div>
            <div class="relative pb-6 overflow-hidden">
              <table class="table-bordered-bottom text-body-sm">
                <tbody class="[&_td]:px-6 [&_td]:py-3 text-body-sm">
                  <tr>
                    <td>
                      <span class="text-left">#1</span>
                    </td>
                    <td>
                      <a href="#">
                        <div class="flex flex-row items-center gap-4">
                          <div class="flex flex-col">
                            Azam Cora
                            <span class="text-label-md text-gray-500 mt-1">Drink</span>
                          </div>
                        </div>
                      </a>
                    </td>
                    <td>
                      <span class="text-left">2,226 Sales</span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <span class="text-left">#2</span>
                    </td>
                    <td>
                      <a href="#">
                        <div class="flex flex-row items-center gap-4">
                          <div class="flex flex-col">
                            Pepsi soda
                            <span class="text-label-md text-gray-500 mt-1">Drink</span>
                          </div>
                        </div>
                      </a>
                    </td>
                    <td>
                      <span class="text-left">2,126 Sales</span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <span class="text-left">#3</span>
                    </td>
                    <td>
                      <a href="#">
                        <div class="flex flex-row items-center gap-4">
                          <div class="flex flex-col">
                            Mafuta ya kupikia
                            <span class="text-label-md text-gray-500 mt-1">Cooking</span>
                          </div>
                        </div>
                      </a>
                    </td>
                    <td>
                      <span class="text-left">1,996 Sales</span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <span class="text-left">#4</span>
                    </td>
                    <td>
                      <a href="#">
                        <div class="flex flex-row items-center gap-4">
                          <div class="flex flex-col">
                            Millinda Soda
                            <span class="text-label-md text-gray-500 mt-1">Drink</span>
                          </div>
                        </div>
                      </a>
                    </td>
                    <td>
                      <span class="text-left">1,726 Sales</span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div>
          <!-- card -->
          <div class="py-8 px-6 flex flex-col rounded-xl bg-white dark:bg-gray-900">
            <div class="flex flex-row gap-2 items-center justify-between pb-3">
              <h3 class="text-title-md text-gray-800 dark:text-gray-200">Recent Actifity</h3>
            </div>
            <div class="relative">
              <ul class="h-72 overflow-y-auto scrollbars show mt-2 mb-6">
                <li class="flex">
                  <div class="relative flex-shrink-0 w-12 text-center">
                    <span class="absolute left-1/2 ml-0 top-10 -bottom-4 border-l border-dashed border-gray-200 dark:border-gray-700"></span>
                    <div class="h-12 w-12 flex justify-center items-center rounded-full bg-surface-400 dark:bg-surfacedark-400 mr-auto">
                      <span class="material-symbols-outlined text-primary-600 dark:text-primary-200">shopping_cart</span>
                    </div>
                  </div>

                  <div class="ml-6 pb-8">
                    <div class="flex flex-row justify-between pb-2">
                      <div class="text-label-md text-gray-500">Aug 7, 02.21 am</div>
                    </div>
                    <p class="text-body-md">Lulu added new stock! <a href="#" class="text-primary-600 dark:text-primary-200">"#INV3432"</a></p>
                  </div>
                </li>
                <li class="flex">
                  <div class="relative flex-shrink-0 w-12 text-center">
                    <span class="absolute left-1/2 ml-0 top-10 -bottom-4 border-l border-dashed border-gray-200 dark:border-gray-700"></span>
                    <div class="h-12 w-12 flex justify-center items-center rounded-full bg-surface-400 dark:bg-surfacedark-400 mr-auto">
                      <span class="material-symbols-outlined text-primary-600 dark:text-primary-200">inventory</span>
                    </div>
                  </div>

                  <div class="ml-6 pb-8">
                    <div class="flex flex-row justify-between pb-2">
                      <div class="text-label-md text-gray-500">Aug 6, 02.21 am</div>
                    </div>
                    <p class="text-body-md">Imma logged out! </p>
                  </div>
                </li>
                <li class="flex">
                  <div class="relative flex-shrink-0 w-12 text-center">
                    <span class="absolute left-1/2 ml-0 top-10 -bottom-4 border-l border-dashed border-gray-200 dark:border-gray-700"></span>
                    <div class="h-12 w-12 flex justify-center items-center rounded-full bg-surface-400 dark:bg-surfacedark-400 mr-auto">
                      <span class="material-symbols-outlined text-primary-600 dark:text-primary-200">local_shipping</span>
                    </div>
                  </div>

                  <div class="ml-6 pb-8">
                    <div class="flex flex-row justify-between pb-2">
                      <div class="text-label-md text-gray-500">Aug 6, 20.10 pm</div>
                    </div>
                    <p class="text-body-md">Order has been shipped <a href="#" class="text-primary-600 dark:text-primary-200">"#INV3430"</a></p>
                  </div>
                </li>
                <li class="flex">
                  <div class="relative flex-shrink-0 w-12 text-center">
                    <span class="absolute left-1/2 ml-0 top-10 -bottom-4 border-l border-dashed border-gray-200 dark:border-gray-700"></span>
                    <div class="h-12 w-12 flex justify-center items-center rounded-full bg-surface-400 dark:bg-surfacedark-400 mr-auto">
                      <span class="material-symbols-outlined text-primary-600 dark:text-primary-200">local_shipping</span>
                    </div>
                  </div>

                  <div class="ml-6 pb-8">
                    <div class="flex flex-row justify-between pb-2">
                      <div class="text-label-md text-gray-500">Aug 6, 18.34 pm</div>
                    </div>
                    <p class="text-body-md">Order has been shipped <a href="#" class="text-primary-600 dark:text-primary-200">"#INV3429"</a></p>
                  </div>
                </li>
                <li class="flex">
                  <div class="relative flex-shrink-0 w-12 text-center">
                    <span class="absolute left-1/2 ml-0 top-10 -bottom-4 border-l border-dashed border-gray-200 dark:border-gray-700"></span>
                    <div class="h-12 w-12 flex justify-center items-center rounded-full bg-surface-400 dark:bg-surfacedark-400 mr-auto">
                      <span class="material-symbols-outlined text-primary-600 dark:text-primary-200">local_shipping</span>
                    </div>
                  </div>

                  <div class="ml-6 pb-8">
                    <div class="flex flex-row justify-between pb-2">
                      <div class="text-label-md text-gray-500">Aug 6, 03.21 am</div>
                    </div>
                    <p class="text-body-md">Order has been shipped <a href="#" class="text-primary-600 dark:text-primary-200">"#INV3428"</a></p>
                  </div>
                </li>
                <li class="flex">
                  <div class="relative flex-shrink-0 w-12 text-center">
                    <span class="absolute left-1/2 ml-0 top-10 -bottom-4 border-l border-dashed border-gray-200 dark:border-gray-700"></span>
                    <div class="h-12 w-12 flex justify-center items-center rounded-full bg-surface-400 dark:bg-surfacedark-400 mr-auto">
                      <span class="material-symbols-outlined text-primary-600 dark:text-primary-200">local_shipping</span>
                    </div>
                  </div>

                  <div class="ml-6 pb-8">
                    <div class="flex flex-row justify-between pb-2">
                      <div class="text-label-md text-gray-500">Aug 6, 03.21 am</div>
                    </div>
                    <p class="text-body-md">Order has been shipped <a href="#" class="text-primary-600 dark:text-primary-200">"#INV3428"</a></p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
<?php include APPPATH.'/views/includes/footer.php'?>