<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title  -->
  <title>Add Product</title>

  <!-- Style Css -->
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <link rel="stylesheet" id="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">
  <link rel="stylesheet" id="color" href="<?php echo base_url('assets/css/colors.css')?>">
  <link rel="stylesheet" id="editors" href="<?php echo base_url('assets/css/vendor/editor.css')?>">
  <link rel="stylesheet" id="dropzonex" href="<?php echo base_url('assets/css/vendor/dropzone.css')?>">

  <!-- jquery cdn -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

  <script>
      $(document).ready(function() {
          $('.select2').select2();
      });
  </script>

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
        <h2 class="text-title-lg">Add Stock to <span style="text-primary-600"><?= $branchName ?></span></h2>
      </div>

      <!-- content 1 -->
      <div class="grid grid-cols-1 gap-4 md:gap-6">
        <div class="py-8 px-6 flex flex-col rounded-xl bg-white dark:bg-gray-900">
          <!-- tabs -->
          <h1 class="text-headline-sm my-3"> SELECT BRANCH TO SEE IT'S PRODUCTS</h1>
           <div class="w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
            <?php foreach($branches as $branch): ?>
                <a href="<?= site_url('product/branch_products/'. $branch->id)?>" aria-current="true" class="block w-full px-4 py-2 text-primary-600 bg-blue-700 border-b border-gray-200 rounded-t-lg cursor-pointer dark:bg-gray-800 dark:border-gray-600">
                    <?= $branch->name ?>
                </a>
            <?php endforeach?>
            </div>
        </div>
    </div>
  </main>

  <?php  include APPPATH.'/views/includes/footer.php'?>