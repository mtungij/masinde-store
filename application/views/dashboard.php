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

            <h2 class="text-headline-md mt-1"><span></span><?= format_prices($total_products->total_products_count) ?></h2>
            <div class="flex justify-between items-center gap-2 z-10">
              <h3 class="text-body-md text-gray-800 dark:text-gray-200">Total products</h3>
              <span class="col-span-2 text-body-sm text-green-500 text-right">+10%</span>
            </div>
          </div>
         
          <!-- card -->
         <div class="max-sm:w-60 max-sm:flex-shrink-0 relative py-8 px-6 overflow-hidden flex flex-col gap-2 rounded-xl bg-white dark:bg-gray-900">
            <!-- bg -->
            <div class="absolute right-0 top-0 opacity-50 text-surface-400 dark:text-surfacedark-400 !text-[100px] material-symbols-outlined">person</div>
 
            <h2 class="text-headline-md mt-1"><span>Tsh </span> <?= format_prices($total_revenue->total_revenue) ?> </h2>
            <div class="flex justify-between items-center gap-2 z-10">
              <h3 class="text-body-md text-gray-800 dark:text-gray-200">Total Revenue</h3>
            </div>
          </div>
          <!-- card -->
          <div class="max-sm:w-60 max-sm:flex-shrink-0 relative py-8 px-6 overflow-hidden flex flex-col gap-2 rounded-xl bg-white dark:bg-gray-900">
            <!-- bg -->
            <div class="absolute right-0 top-0 opacity-50 text-surface-400 dark:text-surfacedark-400 !text-[100px] material-symbols-outlined">person_pin</div>

            <h2 class="text-headline-md mt-1"><?= format_prices($total_sales->total_sales) ?></h2>
            <div class="flex justify-between items-center gap-2 z-10">
              <h3 class="text-body-md text-gray-800 dark:text-gray-200">Total Sales</h3>
            </div>
          </div>

           <!-- card -->
          <div class="max-sm:w-60 max-sm:flex-shrink-0 relative py-8 px-6 overflow-hidden flex flex-col gap-2 rounded-xl bg-white dark:bg-gray-900">
            <!-- bg -->
            <div class="absolute right-0 top-0 opacity-50 text-surface-400 dark:text-surfacedark-400 !text-[100px] material-symbols-outlined">shopping_cart</div>

            <h2 class="text-headline-md mt-1"><span></span> <?= format_prices($total_sales_per_day->total_sales_per_day) ?></h2>
            <div class="flex justify-between items-center gap-2 z-10">
              <h3 class="text-body-md text-gray-800 dark:text-gray-200">Today's Sales</h3>
            </div>
          </div>

        </div>
      </div>

      <!-- content 2 -->
      <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 md:gap-6 mb-4 md:mb-6">
        <div class="max-sm:order-2 grid gap-6">
          <!-- card -->
          <div class="py-8 px-6 flex flex-col rounded-xl bg-white dark:bg-gray-900">
            <div class="flex flex-row gap-2 items-center justify-between pb-3">
              <h3 class="text-title-md text-gray-800 dark:text-gray-200" style="font-weight:bold">#2 Stock Per Branch/Store</h3>
            </div>
            <?php foreach($products_branches as $branch): ?>
            <div class="relative">
              <div class="flex flex-col gap-1 py-2">
                <div class="flex items-center justify-between">
                  <div class="flex items-center">
                    <?= $branch->name ?>
                  </div>
                  <span><?= format_prices($branch->total_products_amount) ?></span>
                </div>
                <?php 
                  $percentage = round(($branch->total_products_amount / $total_products->total_products_count) * 100);
                ?>
                <!-- linear progress -->
                <div class="flex bg-surface-500 dark:bg-surfacedark-500 h-1 mt-2">
                  <div class="flex bg-green-600 dark:bg-green-200" role="progressbar" style="width: <?= $percentage ?>%;" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
            <?php endforeach ?>
          </div>


          <!-- card -->
          <div class="py-8 px-6 flex flex-col rounded-xl bg-white dark:bg-gray-900">
            <div class="flex flex-row gap-2 items-center justify-between pb-3">
              <h3 class="text-title-md text-gray-800 dark:text-gray-200" style="font-weight:bold">#3 Sales Per Branch/Store</h3>
            </div>
            <?php foreach($sales_branches as $branch): ?>
            <div class="relative">
              <div class="flex flex-col gap-1 py-2">
                <div class="flex items-center justify-between">
                  <div class="flex items-center">
                    <?= $branch->name ?>
                  </div>
                  <div class="flex gap-4">
                    <div class="grid">
                       <span><?= format_prices($branch->total_sales) ?></span>
                       <span class="text-sm" style="color: #94a3b8;">Sales</span>
                    </div>
                    <div class="grid">
                      <span><?= format_prices($branch->total_revenue) ?></span>
                      <span class="text-sm" style="color: #94a3b8;">Revenue</span>
                    </div>
                  </div>
                </div>
                <?php 
                  $percentage = round(($branch->total_sales / $total_sales->total_sales) * 100);
                ?>
                <!-- linear progress -->
                <div class="flex bg-surface-500 dark:bg-surfacedark-500 h-1 mt-2">
                  <div class="flex bg-green-600 dark:bg-green-200" role="progressbar" style="width: <?= $percentage ?>%;" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
            <?php endforeach ?>
          </div>

          
        </div>

        <div class="max-sm:order-1 sm:col-span-2">
          <!-- card -->
          <div class="flex flex-col rounded-xl bg-white dark:bg-gray-900">
            <div class="py-8 px-6 flex flex-row gap-2 items-center justify-between pb-3">
              <h3 class="text-title-md text-gray-800 dark:text-gray-200 text-bold" style="font-weight:bold">#1 Top 10 Selling products</h3>
            </div>
            <div class="relative pb-6 overflow-auto">
              <table class="table-bordered-bottom text-body-sm">
                <thead class="text-gray-800 dark:text-gray-200 border-b border-gray-100 dark:border-gray-800">
                  <tr class="[&_th]:px-6 [&_th]:py-5 title-md bg-surface-100 dark:bg-surfacedark-100">
                    <th>
                      S/N
                    </th>
                    <th>
                      Product Name
                    </th>
                    <th>
                      Branch
                    </th>
                    <th>
                      Sales
                    </th>
       
                  </tr>
                </thead>
                <tbody class="[&_td]:px-6 [&_td]:py-3 text-body-sm">
                  <?php $rowId = 1?>
                  <?php foreach($top10_products as $product):?>
                  <tr>
                    <td><?= $rowId < 10 ? "0".$rowId++ : $rowId ?></td>
                    <td>
                      <div class="flex flex-col">
                        <?= $product->product_name ?>
                      </div>
                    </td>
                    <td>
                      <?= $product->branch_name ?>
                    </td>
                    <!-- <td>
                      <div class="inline-block leading-tight text-center text-label-md py-1 px-3 text-gray-800 dark:text-gray-100 bg-primary-100 dark:bg-primary-900 rounded-full">Process</div>
                    </td> -->
                    <td>
                      <a href="#" class="hover:text-primary-500">
                        <?= format_prices($product->total_quantity) ?>
                      </a>
                    </td>
                  </tr>
                  <?php endforeach ?>
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
            <h3 class="text-title-md text-gray-800 dark:text-gray-200">Total Profit</h3>
             <span class="col-span-2 text-body-sm text-green-500 text-right">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0M12 12.75h.008v.008H12v-.008z" />
              </svg>
            </span>
          </div>
          <div class="relative">
            <h4 class="text-headline-sm"><?= number_format($total_profit->total_profit) ?><span></span></h4>
          </div>

          <hr class="border-surface-500 dark:border-surfacedark-500 my-5">

          <div class="flex flex-row gap-2 items-center justify-between pb-3">
            <h3 class="text-title-md text-gray-800 dark:text-gray-200">Today's Profit </h3>
            <span class="col-span-2 text-body-sm text-green-500 text-right">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0M12 12.75h.008v.008H12v-.008z" />
              </svg>
            </span>
          </div>
          <div class="relative">
            <h4 class="text-headline-sm"><span>Tsh</span> <?= number_format($profit_per_day->total_profit_per_day) ?></h4>
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
        <!-- <div class="max-sm:w-60 max-sm:flex-shrink-0 py-8 px-6 flex flex-col rounded-xl bg-white dark:bg-gray-900">
          <div class="flex flex-row gap-2 items-center justify-between pb-3">
            <h3 class="text-title-md text-gray-800 dark:text-gray-200">Traffic Sources</h3>
          </div>
          <div class="relative w-3/4 mx-auto">
            <canvas class="max-w-100" id="SourceChart"></canvas>
          </div>
        </div> -->
        <!-- card -->
        <div class="relative overflow-hidden max-sm:w-60 max-sm:flex-shrink-0 py-8 px-6 flex flex-col rounded-xl bg-white dark:bg-gray-900">
          <div class="flex flex-row gap-2 items-center justify-between pb-3">
            <h3 class="text-title-md text-gray-800 dark:text-gray-200">Avg. Sales Revenue</h3>
            <span class="col-span-2 text-body-sm text-red-500 text-right">
               <span class="col-span-2 text-body-sm text-green-500 text-right">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0M12 12.75h.008v.008H12v-.008z" />
              </svg>
            </span>
            </span>
          </div>
          <div class="relative">
            <h4 class="text-headline-sm"><?= format_prices($avarage_sales->avarage_sales_per_day) . " Tsh" ?></h4>
          </div>

          <hr class="border-surface-500 dark:border-surfacedark-500 my-5">

          <div class="flex flex-row gap-2 items-center justify-between pb-3">
            <h3 class="text-title-md text-gray-800 dark:text-gray-200">Today's Revenue</h3>
            <span class="col-span-2 text-body-sm text-red-500 text-right">
               <span class="col-span-2 text-body-sm text-green-500 text-right">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0M12 12.75h.008v.008H12v-.008z" />
              </svg>
            </span>
            </span>
          </div>
          <div class="relative">
            <h4 class="text-headline-sm"><?= format_prices($total_revenue_per_day->total_revenue_per_day) ?><span> Tsh</span></h4>
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
              <h3 class="text-title-md text-gray-800 dark:text-gray-200">Out Of Stock Products</h3>
            </div>
            <div class="relative pb-6 overflow-hidden">
              <table class="table-bordered-bottom text-body-sm">
                <tbody class="[&_td]:px-6 [&_td]:py-3 text-body-sm">
                  <?php $rowId = 1?>
                  <?php foreach($branch_out_of_stock as $branch_out):?>
                  <tr>
                    <td>
                      <span class="text-left"><?= $rowId < 10 ? "0".$rowId++ : $rowId ?></span>
                    </td>
                    <td>
                      <a href="#">
                        <div class="flex flex-row items-center gap-4">
                          <div class="flex flex-col">
                            <?= $branch_out->product_name ?>
                          </div>
                        </div>
                      </a>
                    </td>
                    <td> <?= $branch_out->branch_name ?> </td>
                    <td>
                      <span class="text-left"><?= $branch_out->total_out_of_stock ?></span>
                    </td>
                  </tr>
                  <?php endforeach ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div>
          <!-- card -->
          <div class="py-8 px-6 flex flex-col rounded-xl bg-white dark:bg-gray-900">
            <div class="flex flex-row gap-2 items-center justify-between pb-3">
              <h3 class="text-title-md text-gray-800 dark:text-gray-200">Expired Products</h3>
            </div>
            
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
<?php include APPPATH.'/views/includes/footer.php'?>