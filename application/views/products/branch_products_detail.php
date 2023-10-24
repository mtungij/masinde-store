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

   <link rel="stylesheet" id="prisms" href="<?php echo base_url('assets/css/prism.css')?>">
  <link rel="stylesheet" id="flatpickrs" href="<?php echo base_url('assets/css/vendor/flatpickr.css')?>">

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
        
        <!-- action -->
        <!-- <div class="flex flex-row gap-3 items-center">
          hidden action
          <div id="hidden-act" class="opacity-0 [&.show]:opacity-100 transition duration-400 ease-in-out flex flex-row gap-3 items-center">
            <button class="relative !inline-flex !items-center justify-center w-12 h-12 gap-x-2 py-2.5 px-6 rounded-[6.25rem] text-sm tracking-[.00714em] text-center font-medium bg-surface-100 dark:bg-surfacedark-100 hover:bg-surface-300 focus:bg-surface-400 dark:text-primary-200 dark:hover:bg-surfacedark-300 dark:focus:bg-surfacedark-400"><span aria-label="Export CSV" data-microtip-position="top" role="tooltip" class="material-symbols-outlined">download</span></button>

            <button class="relative !inline-flex !items-center justify-center w-12 h-12 gap-x-2 py-2.5 px-6 rounded-[6.25rem] text-sm tracking-[.00714em] text-center font-medium bg-surface-100 dark:bg-surfacedark-100 hover:bg-surface-300 focus:bg-surface-400 dark:text-primary-200 dark:hover:bg-surfacedark-300 dark:focus:bg-surfacedark-400"><span aria-label="Delete" data-microtip-position="top" role="tooltip" class="material-symbols-outlined">delete</span></button>
          </div>

          add new
          <a href="<?= site_url('reports/print_staff_wise')?>" class="btn relative flex flex-row items-center justify-center gap-x-2 py-2 px-4 rounded hover:shadow-md text-sm tracking-[.00714em] font-medium bg-primary-600 text-white dark:bg-primary-200 dark:text-primary-800">
            <span class="material-symbols-outlined">Print</span>
            Print
         </a>
        </div> -->
      </div>

      <!-- content 1 -->
      <div class="grid grid-cols-1 sm:gap-4 md:gap-6">
        <!-- card -->
        <div class="px-6 py-8 flex flex-col rounded-xl bg-white dark:bg-gray-900">
          <!-- header -->
          <div class="text-center">
            <h1 class="text-display-sm text-gray-700 dark:text-gray-300">MASINDE STORE</h1>
            <h3 class="text-title-lg text-gray-700 dark:text-gray-300"><?= $branch ?> PRODUCTS</h3>
          </div>
           <br>
          <div class="relative overflow-auto scrollbars" style="white-space: nowrap">
          <p class="my-3 text-title-sm text-primary-500">
            <a href="<?= site_url('product/product_branches')?>">View products of ther branches</a>
          </p>
          <?php if($this->session->flashdata('product_branch_updated')):?>
             <div class="flex items-center gap-2 relative bg-green-50 text-green-700 p-4 rounded my-3">
                <i class="material-symbols-outlined">info</i>
                <p><?= $this->session->flashdata('product_branch_updated') ?></p>
            </div>
            <?php endif?>
            <table class="table-sorter table-sorter table-bordered-bottom table-hover border-collapse border border-slate-400">
              <thead>
                <tr>
                  <th class="border border-slate-300 p-3">S/NO</th>
                  <th class="border border-slate-300 p-3">Product Name</th>
                  <th class="border border-slate-300 p-3">Brand</th>
                  <th class="border border-slate-300 p-3">Quantity</th>
                  <th class="border border-slate-300 p-3">Stock Limit</th>
                  <th class="border border-slate-300 p-3">Buying Price</th>
                  <th class="border border-slate-300 p-3">Retail Sale Price</th>
                  <th class="border border-slate-300 p-3">Whole Sale Price</th>
                  <th class="border border-slate-300 p-3" colspan="2">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $rowId = 1 ?>
                <?php foreach($products as $data): ?>
                <tr>
                  <td class="border border-slate-300 p-3"><?= $rowId < 10 ? "0".$rowId++ : $rowId++ ?></td>
                    <td class="border border-slate-300 p-3"><?= $data->product_name ?></td>
                    <td class="border border-slate-300 p-3"><?= $data->brand ?></td>
                    <td class="border border-slate-300 p-3"><?= format_prices($data->inventory) ?></td>
                    <td class="border border-slate-300 p-3"><?= $data->stock_limit ?></td>
                    <td class="border border-slate-300 p-3"><?= number_format($data->buy_price) . "/=" ?></td>
                    <td class="border border-slate-300 p-3"><?= number_format($data->retail_sale_price) . "/=" ?></td>
                    <td class="border border-slate-300 p-3"><?= number_format($data->whole_sale_price) . "/=" ?></td>
                    <td class="border border-slate-300 p-3">
                        <button data-type="dialogs" data-target="#dialog_edit<?= $data->id ?>" class="fabs relative inline-flex flex-row items-center justify-center w-10 h-10 gap-x-2 p-2 rounded-xl overflow-hidden shadow-lg text-sm tracking-[.00714em] font-medium bg-primary-100 dark:bg-primary-700 dark:text-primary-100">
                        <span class="material-symbols-outlined !text-lg">edit</span>
                        </button>

                                                <!-- default dialogs -->
                        <div id="dialog_edit<?= $data->id ?>" class="[&.show_.backDialog]:opacity-60 [&.show]:opacity-100 [&.show]:h-full [&.show_.backDialog]:block [&.show_.backDialog]:inset-0 [&.show]:inset-0 duration-[400ms] ease-[cubic-bezier(0, 0, 0, 1)] opacity-0 w-full h-0 z-50 overflow-auto fixed left-0 top-0 flex items-center justify-center">
                            <div data-close="#dialog_edit<?= $data->id ?>" class="backDialog hidden z-40 overflow-auto fixed bg-black"></div>
                            <!-- dialogs -->
                               <?php echo form_open("product/edit_product_branch", ['class'=>'z-50 flex flex-col w-11/12 sm:w-[480px] h-auto bg-surface-300 dark:bg-surfacedark-300 rounded-[28px]']);?>
                                <div class="flex flex-col gap-4 justify-start px-8 pt-8 pb-0">
                                <h3 class="text-title-lg text-gray-900 dark:text-gray-100">Update <?= $data->product_name ?></h3>
                                    <div class="grid grid-cols-2 gap-4">
                                    <input type="hidden" name="product_branch_id" value="<?= $data->id ?>">
                                    <input type="hidden" name="branch_id" value="<?= $branch_id2 ?>">
                                    <input type="hidden" name="product_id" value="<?= $data->product_id ?>">
                                       <div class="relative flex flex-col">
                                            <div class="relative z-0">
                                                <input type="number" aria-label="quantity" name="quantity" id="quantity" class="w-full h-12 block leading-5 relative py-2 px-4 rounded bg-neutral-10 dark:bg-neutral-900 border focus:border-2 border-gray-500 overflow-x-auto focus:outline-none focus:border-primary-600 focus:ring-0 dark:text-gray-200 dark:border-gray-400 dark:focus:border-primary-200 peer" placeholder=" " value="<?= $data->inventory ?>">
                                                <label for="quantity" class="absolute tracking-[.03125em] text-gray-500 dark:text-gray-400 bg-neutral-10 dark:bg-neutral-900 duration-300 transform px-1 -translate-y-6 scale-75 top-3 z-10 origin-[0] left-4 peer-focus:left-4 peer-focus:text-primary-600 dark:peer-focus:text-primary-200 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 peer-focus:bg-neutral-10 dark:peer-focus:bg-neutral-900 peer-focus:px-1 peer-invalid:text-error-600 dark:peer-invalid:text-error-200">Quantity</label>
                                            </div>
                                        </div>
                                       <div class="relative flex flex-col">
                                            <div class="relative z-0">
                                                <input type="number" aria-label="buy_price" name="buy_price" id="buy_price" class="w-full h-12 block leading-5 relative py-2 px-4 rounded bg-neutral-10 dark:bg-neutral-900 border focus:border-2 border-gray-500 overflow-x-auto focus:outline-none focus:border-primary-600 focus:ring-0 dark:text-gray-200 dark:border-gray-400 dark:focus:border-primary-200 peer" placeholder=" " value="<?= $data->buy_price ?>">
                                                <label for="buy_price" class="absolute tracking-[.03125em] text-gray-500 dark:text-gray-400 bg-neutral-10 dark:bg-neutral-900 duration-300 transform px-1 -translate-y-6 scale-75 top-3 z-10 origin-[0] left-4 peer-focus:left-4 peer-focus:text-primary-600 dark:peer-focus:text-primary-200 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 peer-focus:bg-neutral-10 dark:peer-focus:bg-neutral-900 peer-focus:px-1 peer-invalid:text-error-600 dark:peer-invalid:text-error-200">Buying Price</label>
                                            </div>
                                        </div>
                                       <div class="relative flex flex-col">
                                            <div class="relative z-0">
                                                <input type="number" aria-label="whole_sale_price" name="whole_sale_price" id="whole_sale_price" class="w-full h-12 block leading-5 relative py-2 px-4 rounded bg-neutral-10 dark:bg-neutral-900 border focus:border-2 border-gray-500 overflow-x-auto focus:outline-none focus:border-primary-600 focus:ring-0 dark:text-gray-200 dark:border-gray-400 dark:focus:border-primary-200 peer" placeholder=" " value="<?= $data->whole_sale_price ?>">

                                                <label for="whole_sale_price" class="absolute tracking-[.03125em] text-gray-500 dark:text-gray-400 bg-neutral-10 dark:bg-neutral-900 duration-300 transform px-1 -translate-y-6 scale-75 top-3 z-10 origin-[0] left-4 peer-focus:left-4 peer-focus:text-primary-600 dark:peer-focus:text-primary-200 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 peer-focus:bg-neutral-10 dark:peer-focus:bg-neutral-900 peer-focus:px-1 peer-invalid:text-error-600 dark:peer-invalid:text-error-200">Whole Sale Price</label>
                                            </div>
                                        </div>
                                       <div class="relative flex flex-col">
                                            <div class="relative z-0">
                                                <input type="number" aria-label="retail_sale_price" name="retail_sale_price" id="retail_sale_price" class="w-full h-12 block leading-5 relative py-2 px-4 rounded bg-neutral-10 dark:bg-neutral-900 border focus:border-2 border-gray-500 overflow-x-auto focus:outline-none focus:border-primary-600 focus:ring-0 dark:text-gray-200 dark:border-gray-400 dark:focus:border-primary-200 peer" placeholder=" " value="<?= $data->retail_sale_price ?>">

                                                <label for="retail_sale_price" class="absolute tracking-[.03125em] text-gray-500 dark:text-gray-400 bg-neutral-10 dark:bg-neutral-900 duration-300 transform px-1 -translate-y-6 scale-75 top-3 z-10 origin-[0] left-4 peer-focus:left-4 peer-focus:text-primary-600 dark:peer-focus:text-primary-200 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 peer-focus:bg-neutral-10 dark:peer-focus:bg-neutral-900 peer-focus:px-1 peer-invalid:text-error-600 dark:peer-invalid:text-error-200">Retail Sale Price</label>
                                            </div>
                                        </div>
                                       <div class="relative flex flex-col">
                                            <div class="relative z-0">
                                                <input type="number" aria-label="stock_limit" name="stock_limit" id="stock_limit" class="w-full h-12 block leading-5 relative py-2 px-4 rounded bg-neutral-10 dark:bg-neutral-900 border focus:border-2 border-gray-500 overflow-x-auto focus:outline-none focus:border-primary-600 focus:ring-0 dark:text-gray-200 dark:border-gray-400 dark:focus:border-primary-200 peer" placeholder=" " value="<?= $data->stock_limit ?>">

                                                <label for="stock_limit" class="absolute tracking-[.03125em] text-gray-500 dark:text-gray-400 bg-neutral-10 dark:bg-neutral-900 duration-300 transform px-1 -translate-y-6 scale-75 top-3 z-10 origin-[0] left-4 peer-focus:left-4 peer-focus:text-primary-600 dark:peer-focus:text-primary-200 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 peer-focus:bg-neutral-10 dark:peer-focus:bg-neutral-900 peer-focus:px-1 peer-invalid:text-error-600 dark:peer-invalid:text-error-200">Stock Limit</label>
                                            </div>
                                        </div>
                                      </div>

                                    </div>
                                    <div class="flex flex-row justify-end gap-2 px-8 py-8">
                                        <button type="button" data-close="#dialog_edit<?= $data->id ?>" class="closeDialog relative flex flex-row items-center justify-center gap-x-2 py-2.5 px-6 rounded-[6.25rem] text-sm tracking-[.00714em] font-medium text-primary-600 hover:bg-surface-200 focus:bg-surface-400 dark:text-primary-200 dark:hover:bg-surfacedark-200 dark:focus:bg-surfacedark-400">
                                            Cancel
                                        </button>
                                        
                                        <button type="submit" class="btn relative flex flex-row items-center justify-center gap-x-2 py-2.5 px-6 rounded-[6.25rem] hover:shadow-md text-sm tracking-[.00714em] font-medium bg-primary-600 text-white dark:bg-primary-200 dark:text-primary-800">
                                            Save
                                        </button>
                                    </div>
                            <?php echo form_close() ?>
                         </div>
                    </td>
                    <td class="border border-slate-300 p-3">
                        <button class="fabs relative inline-flex flex-row items-center justify-center w-10 h-10 gap-x-2 p-2 rounded-xl overflow-hidden shadow-lg text-sm tracking-[.00714em] font-medium bg-red-100 dark:bg-red-700 dark:text-red-100">
                           <span class="material-symbols-outlined !text-lg">delete</span>
                        </button>
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
 
<?php include APPPATH.'/views/includes/footer.php'?>  