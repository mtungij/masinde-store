<?php include APPPATH.'/views/includes/header.php'?>

  <main class="lg:flex">
    <!-- sidebar -->
  <?php include APPPATH.'/views/includes/sidebar.php'?>
    <!-- content -->
    <div class="main-content flex-grow min-h-[100%] py-20 relative px-4 lg:pr-8 lg:pl-3">
      <!-- heading -->
      <div class="flex flex-row justify-between items-center pt-2 pb-6">
        <h2 class="text-title-lg">Ecommerce</h2>
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

            <h2 class="text-headline-md mt-1"><span>$</span>31K</h2>
            <div class="flex justify-between items-center gap-2 z-10">
              <h3 class="text-body-md text-gray-800 dark:text-gray-200">Revenue</h3>
              <span class="col-span-2 text-body-sm text-green-500 text-right">+10%</span>
            </div>
          </div>
          <!-- card -->
          <div class="max-sm:w-60 max-sm:flex-shrink-0 relative py-8 px-6 overflow-hidden flex flex-col gap-2 rounded-xl bg-white dark:bg-gray-900">
            <!-- bg -->
            <div class="absolute right-0 top-0 opacity-50 text-surface-400 dark:text-surfacedark-400 !text-[100px] material-symbols-outlined">shopping_cart</div>

            <h2 class="text-headline-md mt-1">1456</h2>
            <div class="flex justify-between items-center gap-2 z-10">
              <h3 class="text-body-md text-gray-800 dark:text-gray-200">Total Order</h3>
              <span class="col-span-2 text-body-sm text-green-500 text-right">+5%</span>
            </div>
          </div>
          <!-- card -->
         <div class="max-sm:w-60 max-sm:flex-shrink-0 relative py-8 px-6 overflow-hidden flex flex-col gap-2 rounded-xl bg-white dark:bg-gray-900">
            <!-- bg -->
            <div class="absolute right-0 top-0 opacity-50 text-surface-400 dark:text-surfacedark-400 !text-[100px] material-symbols-outlined">person</div>
 
            <h2 class="text-headline-md mt-1">2,5K</h2>
            <div class="flex justify-between items-center gap-2 z-10">
              <h3 class="text-body-md text-gray-800 dark:text-gray-200">Customers</h3>
              <span class="col-span-2 text-body-sm text-green-500 text-right">+21%</span>
            </div>
          </div>
          <!-- card -->
          <div class="max-sm:w-60 max-sm:flex-shrink-0 relative py-8 px-6 overflow-hidden flex flex-col gap-2 rounded-xl bg-white dark:bg-gray-900">
            <!-- bg -->
            <div class="absolute right-0 top-0 opacity-50 text-surface-400 dark:text-surfacedark-400 !text-[100px] material-symbols-outlined">person_pin</div>

            <h2 class="text-headline-md mt-1">314</h2>
            <div class="flex justify-between items-center gap-2 z-10">
              <h3 class="text-body-md text-gray-800 dark:text-gray-200">Users Online</h3>
              <span class="col-span-2 text-body-sm text-red-500 text-right">-34%</span>
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
              <h3 class="text-title-md text-gray-800 dark:text-gray-200">Sales by Location</h3>
            </div>
            <div class="relative">
              <div class="flex flex-col gap-1 py-2">
                <div class="flex items-center justify-between">
                  <div class="flex items-center">
                    <img src="<?php echo base_url('assets/img/flags/US.svg')?>" class="w-6 h-6 mr-2" alt="social">
                    United States
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
                    <img src="<?php echo base_url('assets/img/flags/IN.svg')?>" class="w-6 h-6 mr-2" alt="social">
                    India
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
                    <img src="<?php echo base_url('assets/img/flags/IT.svg')?>" class="w-6 h-6 mr-2" alt="social">
                    Italy
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
                    <img src="<?php echo base_url('assets/img/flags/ID.svg')?>" class="w-6 h-6 mr-2" alt="social">
                    Indonesia
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
                    Japan
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
              <h3 class="text-title-md text-gray-800 dark:text-gray-200">Latest Order</h3>
            </div>
            <div class="relative pb-6 overflow-auto">
              <table class="table-bordered-bottom text-body-sm">
                <thead class="text-gray-800 dark:text-gray-200 border-b border-gray-100 dark:border-gray-800">
                  <tr class="[&_th]:px-6 [&_th]:py-5 title-md bg-surface-100 dark:bg-surfacedark-100">
                    <th>
                      Billing
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
                        Thomas Lindar
                        <span class="text-label-md text-gray-500 mt-1">Roma</span>
                      </div>
                    </td>
                    <td>
                      332<span>$</span>
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
                        Jeremi Nolan
                        <span class="text-label-md text-gray-500 mt-1">London</span>
                      </div>
                    </td>
                    <td>
                      362<span>$</span>
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
                        Carlos Garcia
                        <span class="text-label-md text-gray-500 mt-1">Barcelona</span>
                      </div>
                    </td>
                    <td>
                      142<span>$</span>
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
                        Joe Daniel
                        <span class="text-label-md text-gray-500 mt-1">San Fransisco</span>
                      </div>
                    </td>
                    <td>
                      452<span>$</span>
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
            <h3 class="text-title-md text-gray-800 dark:text-gray-200">Repeat Rate</h3>
            <span class="col-span-2 text-body-sm text-green-500 text-right">+16%</span>
          </div>
          <div class="relative">
            <h4 class="text-headline-sm">26,12<span>%</span></h4>
          </div>

          <hr class="border-surface-500 dark:border-surfacedark-500 my-5">

          <div class="flex flex-row gap-2 items-center justify-between pb-3">
            <h3 class="text-title-md text-gray-800 dark:text-gray-200">Avg. Order Value</h3>
            <span class="col-span-2 text-body-sm text-green-500 text-right">+2%</span>
          </div>
          <div class="relative">
            <h4 class="text-headline-sm">123,6<span>$</span></h4>
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
            <h3 class="text-title-md text-gray-800 dark:text-gray-200">Daily Visitor</h3>
            <span class="col-span-2 text-body-sm text-red-500 text-right">-8%</span>
          </div>
          <div class="relative">
            <h4 class="text-headline-sm">1,129</h4>
          </div>

          <hr class="border-surface-500 dark:border-surfacedark-500 my-5">

          <div class="flex flex-row gap-2 items-center justify-between pb-3">
            <h3 class="text-title-md text-gray-800 dark:text-gray-200">Conversion Rate</h3>
            <span class="col-span-2 text-body-sm text-red-500 text-right">-6%</span>
          </div>
          <div class="relative">
            <h4 class="text-headline-sm">12,4<span>%</span></h4>
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
                          <img src="<?php echo base_url('assets/img/products/product.png')?>" class="w-10 h-10 rounded" alt="product">
                          <div class="flex flex-col">
                            Apple 2020 MacBook Air Laptop M1 Chip
                            <span class="text-label-md text-gray-500 mt-1">Computer</span>
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
                          <img src="<?php echo base_url('assets/img/products/product.png')?>" class="w-10 h-10 rounded" alt="product">
                          <div class="flex flex-col">
                            Leather Desk Pad Protector & Mouse Pad
                            <span class="text-label-md text-gray-500 mt-1">Computer</span>
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
                          <img src="<?php echo base_url('assets/img/products/product.png')?>" class="w-10 h-10 rounded" alt="product">
                          <div class="flex flex-col">
                            Aothia Large Dual Monitor Stand Riser
                            <span class="text-label-md text-gray-500 mt-1">Computer</span>
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
                          <img src="<?php echo base_url('assets/img/products/product.png')?>" class="w-10 h-10 rounded" alt="product">
                          <div class="flex flex-col">
                            Blink Video Doorbell and chime app alerts
                            <span class="text-label-md text-gray-500 mt-1">Smarthome</span>
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
                    <p class="text-body-md">New order has submited <a href="#" class="text-primary-600 dark:text-primary-200">"#INV3432"</a></p>
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
                    <p class="text-body-md">Order has been processed <a href="#" class="text-primary-600 dark:text-primary-200">"#INV3431"</a></p>
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