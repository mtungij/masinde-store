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
        <!-- Range time -->
      <?php echo form_open('reports/expenses_filter', ['class' => 'mb-6'])?>
        <label for="startDate" class="text-title-md inline-block mb-2">Start and End date</label>
        <div id="rangetime" class="flex flex-col sm:flex-row justify-between">
          <input  class=" w-full h-12 block leading-5 relative py-2 px-4 rounded bg-neutral-10 dark:bg-neutral-900 border focus:border-2 border-gray-500 overflow-x-auto focus:outline-none focus:border-primary-600 focus:ring-0 dark:text-gray-200 dark:border-gray-400 dark:focus:border-primary-200" type="date" name="from">
          <span class="sm:px-4 text-center">to</span>
          <input  class=" w-full h-12 block leading-5 relative py-2 px-4 rounded bg-neutral-10 dark:bg-neutral-900 border focus:border-2 border-gray-500 overflow-x-auto focus:outline-none focus:border-primary-600 focus:ring-0 dark:text-gray-200 dark:border-gray-400 dark:focus:border-primary-200" type="date" name="to">
          <button class="relative ml-2 !inline-flex !items-center justify-center w-12 h-12 gap-x-2 py-2.5 px-6 rounded-[6.25rem] text-sm tracking-[.00714em] text-center font-medium bg-surface-100 dark:bg-surfacedark-100 hover:bg-surface-300 focus:bg-surface-400 dark:text-primary-200 dark:hover:bg-surfacedark-300 dark:focus:bg-surfacedark-400"><span aria-label="Filter" data-microtip-position="top" role="tooltip" class="material-symbols-outlined">filter_alt</span></button>
        </div>
      <?php echo form_close()?>
        
        <!-- action -->
        <div class="flex flex-row gap-3 items-center">
          <!-- hidden action -->
          <div id="hidden-act" class="opacity-0 [&.show]:opacity-100 transition duration-400 ease-in-out flex flex-row gap-3 items-center">
            <button class="relative !inline-flex !items-center justify-center w-12 h-12 gap-x-2 py-2.5 px-6 rounded-[6.25rem] text-sm tracking-[.00714em] text-center font-medium bg-surface-100 dark:bg-surfacedark-100 hover:bg-surface-300 focus:bg-surface-400 dark:text-primary-200 dark:hover:bg-surfacedark-300 dark:focus:bg-surfacedark-400"><span aria-label="Export CSV" data-microtip-position="top" role="tooltip" class="material-symbols-outlined">download</span></button>

            <button class="relative !inline-flex !items-center justify-center w-12 h-12 gap-x-2 py-2.5 px-6 rounded-[6.25rem] text-sm tracking-[.00714em] text-center font-medium bg-surface-100 dark:bg-surfacedark-100 hover:bg-surface-300 focus:bg-surface-400 dark:text-primary-200 dark:hover:bg-surfacedark-300 dark:focus:bg-surfacedark-400"><span aria-label="Delete" data-microtip-position="top" role="tooltip" class="material-symbols-outlined">delete</span></button>
          </div>

          <!-- add new -->
          <a href="<?= site_url('reports/print_staff_wise')?>" class="btn relative flex flex-row items-center justify-center gap-x-2 py-2 px-4 rounded hover:shadow-md text-sm tracking-[.00714em] font-medium bg-primary-600 text-white dark:bg-primary-200 dark:text-primary-800">
            <span class="material-symbols-outlined">Print</span>
            Print
         </a>
        </div>
      </div>

      <!-- content 1 -->
      <div class="grid grid-cols-1 sm:gap-4 md:gap-6">
        <!-- card -->
        <div class="px-6 py-8 flex flex-col rounded-xl bg-white dark:bg-gray-900">
          <!-- header -->
          <div class="text-center">
            <h1 class="text-display-sm text-gray-700 dark:text-gray-300">MASINDE STORE</h1>
            <h3 class="text-title-lg text-gray-700 dark:text-gray-300">EXPENSES REPORT</h3>
            <?php if($from != null && $from != null):?>
            <p class="text-title-sm text-gray-700 dark:text-gray-300"><?= "From: " . date('d/m/Y', strtotime($from)) . " To: " . date('d/m/Y', strtotime($to))?></p>
            <?php else: ?>
            <p><?= "Date: " . date('d/m/Y')?></p>
            <?php endif?>
          </div>
           <br>
          <div class="relative overflow-auto scrollbars" style="white-space: nowrap">
            <table class="table-sorter table-sorter table-bordered-bottom table-hover border-collapse border border-slate-400">
              <thead>
                <tr>
                  <th class="border border-slate-300 p-3">S/N</th>
                  <th class="border border-slate-300 p-3">Description</th>
                  <th class="border border-slate-300 p-3">Amount</th>
                  <th class="border border-slate-300 p-3">Staff</th>
                  <th class="border border-slate-300 p-3">Branch</th>
                  <th class="border border-slate-300 p-3">Date</th>
                </tr>
              </thead>
              <tbody>
                <?php $rowId = 1 ?>
                <?php foreach($datas as $data): ?>
                <tr>
                  <td class="border border-slate-300 p-3"><?= $rowId < 10 ? "0".$rowId++ : $rowId++ ?></td>
                    <td class="border border-slate-300 p-3"><?= $data->description ?></td>
                    <td class="border border-slate-300 p-3"><?= number_format($data->amount) ?></td>
                    <td class="border border-slate-300 p-3"><?= $data->staff ?></td>
                    <td class="border border-slate-300 p-3"><?= $data->branch?></td>
                    <td class="border border-slate-300 p-3"><?= date('d/m/Y', strtotime($data->created_at)) ?></td>
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