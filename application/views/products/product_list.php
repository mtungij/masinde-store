<?php include APPPATH.'/views/includes/header.php'?>

  <main class="lg:flex">
    <!-- sidebar -->
    <?php include APPPATH.'/views/includes/sidebar.php'?>
    <!-- content -->
    <div class="main-content flex-grow min-h-[100%] py-20 relative px-4 lg:pr-8 lg:pl-3">
      <!-- heading -->
      <div class="flex flex-row justify-between items-center pt-2 pb-6">
        <h2 class="text-title-lg">All Products</h2>
        
        <!-- action -->
        <div class="flex flex-row gap-3 items-center">
          <!-- hidden action -->
          <div id="hidden-act" class="opacity-0 [&.show]:opacity-100 transition duration-400 ease-in-out flex flex-row gap-3 items-center">
            <button class="relative !inline-flex !items-center justify-center w-12 h-12 gap-x-2 py-2.5 px-6 rounded-[6.25rem] text-sm tracking-[.00714em] text-center font-medium bg-surface-100 dark:bg-surfacedark-100 hover:bg-surface-300 focus:bg-surface-400 dark:text-primary-200 dark:hover:bg-surfacedark-300 dark:focus:bg-surfacedark-400"><span aria-label="Export CSV" data-microtip-position="top" role="tooltip" class="material-symbols-outlined">download</span></button>

            <button class="relative !inline-flex !items-center justify-center w-12 h-12 gap-x-2 py-2.5 px-6 rounded-[6.25rem] text-sm tracking-[.00714em] text-center font-medium bg-surface-100 dark:bg-surfacedark-100 hover:bg-surface-300 focus:bg-surface-400 dark:text-primary-200 dark:hover:bg-surfacedark-300 dark:focus:bg-surfacedark-400"><span aria-label="Delete" data-microtip-position="top" role="tooltip" class="material-symbols-outlined">delete</span></button>
          </div>

          <!-- add new -->
          <a href="<?= site_url('product/create_index')?>" class="btn relative flex flex-row items-center justify-center gap-x-2 py-2 px-4 rounded-[6.25rem] hover:shadow-md text-sm tracking-[.00714em] font-medium bg-primary-600 text-white dark:bg-primary-200 dark:text-primary-800">
            <span class="material-symbols-outlined">add</span>
            Add New
         </a>
        </div>
      </div>

      <!-- content 1 -->
      <div class="grid grid-cols-1 sm:gap-4 md:gap-6">
        <!-- card -->
        <div class="px-6 py-8 flex flex-col rounded-xl bg-white dark:bg-gray-900">
          <div class="relative overflow-auto scrollbars">
            <!-- customers table -->
            <table class="table-sorter table-bordered-bottom table-hover">
              <thead>
                <tr>
                  <th data-sortable="false">S/N</th>
                  <th data-sortable="false">Product Name</th>
                  <th data-sortable="false">Brand</th>
                  <th data-sortable="true">Packages</th>
                  <th data-sortable="true">Quantity</th>
                  <th data-sortable="true">Buy Price</th>
                  <th data-sortable="true">Sale Price/pkg</th>
                  <th data-sortable="true">Sale Price/itm</th>
                  <th data-sortable="true">Total Whole Sale</th>
                  <th data-sortable="true">Total Retail Sale</th>
                  <th data-sortable="true">Last update</th>
                  <th data-sortable="true">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr class="[&.selected]:!bg-primary-100 dark:[&.selected]:!bg-primary-700">
                  <td class="!px-0">
                    01
                  </td>
                  <td>
                    <div class="flex items-center gap-3">
                      <div class="flex flex-col">
                        <h4 class="font-semibold">Alkado Heneliko</h4>
                        <span class="body-sm text-gray-500">Super User</span>
                      </div>
                    </div>
                  </td>
                  <td>
                    Azam Cora
                  </td>
                  <td>347</td>
                  <td>1200</td>
                  <td>2,000,000/=</td>
                  <td>12,00/=</td>
                  <td>2,000/=</td>
                  <td>2,500,000/=</td>
                  <td>2,800,000/=</td>
                  <td>01/10/2023 04:30</td>
                  <td>
                    <a href="<?= site_url('product/show/1')?>" class="hover:text-primary-600 dark:hover:text-primary-200">view</a>
                  </td>
                </tr>
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </main>
<?php include APPPATH.'/views/includes/footer.php'?>