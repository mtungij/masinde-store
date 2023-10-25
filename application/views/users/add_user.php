<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from goodash.tailwinddashboard.com/ecommerce/add-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Sep 2023 19:18:20 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title  -->
  <title>Add Staff</title>

  <!-- Style Css -->
  <link rel="stylesheet" id="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">
  <link rel="stylesheet" id="color" href="<?php echo base_url('assets/css/colors.css')?>">
  <link rel="stylesheet" id="editors" href="<?php echo base_url('assets/css/vendor/editor.css')?>">
  <link rel="stylesheet" id="dropzonex" href="<?php echo base_url('assets/css/vendor/dropzone.css')?>">

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
      <div class="flex flex-row justify-between items-center pt-2 pb-6">
        <h2 class="text-title-lg">Add New Staff</h2>
      </div>

      <div class="grid grid-cols-1 gap-4 md:gap-6">
        <div class="py-8 px-6 flex flex-col rounded-xl bg-white dark:bg-gray-900">
          <div class="tabs flex flex-col w-full">
            <div class="relative flex flex-row items-center">
              <?php if (validation_errors()):?>
               <div class="flex items-center gap-2 relative bg-red-50 text-red-700 p-4 rounded">
                  <i class="material-symbols-outlined">info</i>
                  <div>
                      <?php echo validation_errors(); ?>
                  </div>
              </div>
              <?php elseif($this->session->flashdata('register_success')): ?>
                  <div class="flex items-center gap-2 relative bg-green-50 text-green-700 p-4 rounded">
                    <i class="material-symbols-outlined">info</i>
                    <p><?= $this->session->flashdata('register_success');
                     ?></p>
                  </div>
              <?php endif?>
            </div>
              
            <div class="flex flex-col">
              <?php echo form_open('Auth/register', ['id' => 'tab-4', 'role' => 'tabpanel', 'class' => 'active [&.active]:block hidden py-4 transition duration-400 ease-in-out'])?>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                 
                     <div class="relative z-0">
                        <input type="text" aria-label="first_name" name="first_name" value="<?= set_value('first_name'); ?>" id="title-product" class="w-full h-12 block leading-5 relative py-2 px-4 rounded bg-neutral-10 dark:bg-neutral-900 border focus:border-2 border-gray-500 overflow-x-auto focus:outline-none focus:border-primary-600 focus:ring-0 dark:text-gray-200 dark:border-gray-400 dark:focus:border-primary-200 peer" placeholder=" " value="">
                        <label for="first_name" class="absolute tracking-[.03125em] text-gray-500 dark:text-gray-400 bg-neutral-10 dark:bg-neutral-900 duration-300 transform px-1 -translate-y-6 scale-75 top-3 z-10 origin-[0] left-4 peer-focus:left-4 peer-focus:text-primary-600 dark:peer-focus:text-primary-200 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 peer-focus:bg-neutral-10 dark:peer-focus:bg-neutral-900 peer-focus:px-1 peer-invalid:text-error-600 dark:peer-invalid:text-error-200">First Name</label>
                      </div>

                      <div class="relative z-0">
                        <input type="text" aria-label="last_name" name="last_name" value="<?= set_value('last_name'); ?>" id="title-product" class="w-full h-12 block leading-5 relative py-2 px-4 rounded bg-neutral-10 dark:bg-neutral-900 border focus:border-2 border-gray-500 overflow-x-auto focus:outline-none focus:border-primary-600 focus:ring-0 dark:text-gray-200 dark:border-gray-400 dark:focus:border-primary-200 peer" placeholder=" " value="">
                        <label for="last_name" class="absolute tracking-[.03125em] text-gray-500 dark:text-gray-400 bg-neutral-10 dark:bg-neutral-900 duration-300 transform px-1 -translate-y-6 scale-75 top-3 z-10 origin-[0] left-4 peer-focus:left-4 peer-focus:text-primary-600 dark:peer-focus:text-primary-200 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 peer-focus:bg-neutral-10 dark:peer-focus:bg-neutral-900 peer-focus:px-1 peer-invalid:text-error-600 dark:peer-invalid:text-error-200">Last Name</label>
                      </div>

                      <div class="relative z-0">
                        <input type="text" aria-label="username" name="username" value="<?= set_value('username'); ?>" id="username" class="w-full h-12 block leading-5 relative py-2 px-4 rounded bg-neutral-10 dark:bg-neutral-900 border focus:border-2 border-gray-500 overflow-x-auto focus:outline-none focus:border-primary-600 focus:ring-0 dark:text-gray-200 dark:border-gray-400 dark:focus:border-primary-200 peer" placeholder=" " value="">
                        <label for="username" class="absolute tracking-[.03125em] text-gray-500 dark:text-gray-400 bg-neutral-10 dark:bg-neutral-900 duration-300 transform px-1 -translate-y-6 scale-75 top-3 z-10 origin-[0] left-4 peer-focus:left-4 peer-focus:text-primary-600 dark:peer-focus:text-primary-200 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 peer-focus:bg-neutral-10 dark:peer-focus:bg-neutral-900 peer-focus:px-1 peer-invalid:text-error-600 dark:peer-invalid:text-error-200">Username</label>
                      </div>
              
                      <div class="relative z-0">
                        <select id="branch_id" name="branch_id" value="<?= set_value('branch_id'); ?>" class="w-full h-12 block leading-5 relative py-2 px-4 rounded bg-neutral-10 dark:bg-neutral-900 border focus:border-2 border-gray-500 overflow-x-auto focus:outline-none focus:border-primary-600 focus:ring-0 dark:text-gray-200 dark:border-gray-400 dark:focus:border-primary-200">
                          <option value="">--Select--</option>
                          <!-- loop through branches -->
                          <?php foreach($branches as $branch):?>
                            <option value="<?= $branch->id?>"><?= $branch->name?></option>
                          <?php endforeach?>
                        </select>
                        <label for="branch_id" class="absolute tracking-[.03125em] text-gray-500 dark:text-gray-400 bg-neutral-10 dark:bg-neutral-900 duration-300 transform px-1 -translate-y-6 scale-75 top-3 z-10 origin-[0] left-4 peer-focus:left-4 peer-focus:text-primary-600 dark:peer-focus:text-primary-200 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 peer-focus:bg-neutral-10 dark:peer-focus:bg-neutral-900 peer-focus:px-1 peer-invalid:text-error-600 dark:peer-invalid:text-error-200">Branch</label>
                      </div>

                      <div class="relative z-0">
                        <select id="position" name="position_id" value="<?= set_value('position_id'); ?>" class="w-full h-12 block leading-5 relative py-2 px-4 rounded bg-neutral-10 dark:bg-neutral-900 border focus:border-2 border-gray-500 overflow-x-auto focus:outline-none focus:border-primary-600 focus:ring-0 dark:text-gray-200 dark:border-gray-400 dark:focus:border-primary-200">
                          <option value="">Select</option>
                          <option value="admin">Admin</option>
                          <option value="seller">Seller</option>
                          <option value="vendor">Vendor</option>
                          <option value="store keeper">Store Keeper</option>
                        </select>
                        <label for="position_id" class="absolute tracking-[.03125em] text-gray-500 dark:text-gray-400 bg-neutral-10 dark:bg-neutral-900 duration-300 transform px-1 -translate-y-6 scale-75 top-3 z-10 origin-[0] left-4 peer-focus:left-4 peer-focus:text-primary-600 dark:peer-focus:text-primary-200 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 peer-focus:bg-neutral-10 dark:peer-focus:bg-neutral-900 peer-focus:px-1 peer-invalid:text-error-600 dark:peer-invalid:text-error-200">Position</label>
                      </div>

                      <div class="relative z-0 w-full">
                        <input type="password" aria-label="password" name="password" id="password" class="w-full h-12 block leading-5 relative py-2 px-4 rounded bg-neutral-10 dark:bg-neutral-900 border focus:border-2 border-gray-500 overflow-x-auto focus:outline-none focus:border-primary-600 focus:ring-0 dark:text-gray-200 dark:border-gray-400 dark:focus:border-primary-200 peer" value="">
                        <label for="password" class="absolute tracking-[.03125em] text-gray-500 dark:text-gray-400 bg-neutral-10 dark:bg-neutral-900 duration-300 transform px-1 -translate-y-6 scale-75 top-3 z-10 origin-[0] left-4 peer-focus:left-4 peer-focus:text-primary-600 dark:peer-focus:text-primary-200 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 peer-focus:bg-neutral-10 dark:peer-focus:bg-neutral-900 peer-focus:px-1 peer-invalid:text-error-600 dark:peer-invalid:text-error-200">Password</label>
                      </div>

                      <div class="relative z-0 w-full">
                        <input type="password" aria-label="confipass" name="confipass" id="confipass" class="w-full h-12 block leading-5 relative py-2 px-4 rounded bg-neutral-10 dark:bg-neutral-900 border focus:border-2 border-gray-500 overflow-x-auto focus:outline-none focus:border-primary-600 focus:ring-0 dark:text-gray-200 dark:border-gray-400 dark:focus:border-primary-200 peer" value="">
                        <label for="confipass" class="absolute tracking-[.03125em] text-gray-500 dark:text-gray-400 bg-neutral-10 dark:bg-neutral-900 duration-300 transform px-1 -translate-y-6 scale-75 top-3 z-10 origin-[0] left-4 peer-focus:left-4 peer-focus:text-primary-600 dark:peer-focus:text-primary-200 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 peer-focus:bg-neutral-10 dark:peer-focus:bg-neutral-900 peer-focus:px-1 peer-invalid:text-error-600 dark:peer-invalid:text-error-200">Confirm Password</label>
                      </div>

                </div>

                <div class="relative pt-4 flex justify-end">
                  <button class="btn relative inline-flex flex-row items-center justify-center gap-x-2 py-2.5 px-6 rounded-[6.25rem] hover:shadow-md text-sm tracking-[.00714em] font-medium bg-primary-600 text-white dark:bg-primary-200 dark:text-primary-800">
                    Register Staff
                    <span class="material-symbols-outlined">arrow_forward</span>
                  </button>
                </div>
              <?php echo form_close()?>

            </div>


             <!-- card -->
        <div class="px-6 py-8 flex flex-col rounded-xl bg-white dark:bg-gray-900">
          <div class="relative overflow-auto scrollbars">
            <!-- customers table -->
            <table class="table-sorter table-bordered-bottom table-hover">
              <thead>
                <tr>
                  <th data-sortable="false">S/NO</th>
                  <th data-sortable="false">Full Name</th>
                  <th data-sortable="false">Username</th>
                  <th data-sortable="false">Branch</th>
                  <th data-sortable="false">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $rowId = 1 ?>
                <?php foreach($users as $user):?>
                <tr class="[&.selected]:!bg-primary-100 dark:[&.selected]:!bg-primary-700">
                  <td class="!px-0">
                    <?= $rowId < 10 ? '0'.$rowId++ : $rowId++ ?>
                  </td>
                  <td>
                    <div class="flex items-center gap-3">
                      <div class="flex flex-col">
                        <h4 class="font-semibold"><?= $user->first_name." ".$user->last_name ?></h4>
                      </div>
                    </div>
                  </td>
                  <td>
                    <?= $user->username ?>
                  </td>
                  <td><?= $user->branch_name ?></td>
                  <td>
                    <a href="<?= site_url('user/profile/'.$user->id)?>" class="hover:text-primary-600 dark:hover:text-primary-200">view</a>
                  </td>
                </tr>
                <?php endforeach?>
              </tbody>
            </table>
          </div>
        </div>



          </div>
        </div>
      </div>
    </div>
  </main>

 <?php include APPPATH.'/views/includes/footer.php'?>