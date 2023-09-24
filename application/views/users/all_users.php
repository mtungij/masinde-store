<?php include APPPATH.'/views/includes/header.php'?>

  <main class="lg:flex">
    <!-- sidebar -->
    <?php include APPPATH.'/views/includes/sidebar.php'?>
    <!-- content -->
    <div class="main-content flex-grow min-h-[100%] py-20 relative px-4 lg:pr-8 lg:pl-3">
      <!-- heading -->
      <div class="flex flex-row justify-between items-center pt-2 pb-6">
        <h2 class="text-title-lg">All Staff</h2>
        
        <!-- action -->
        <div class="flex flex-row gap-3 items-center">
          <!-- hidden action -->
          <div id="hidden-act" class="opacity-0 [&.show]:opacity-100 transition duration-400 ease-in-out flex flex-row gap-3 items-center">
            <button class="relative !inline-flex !items-center justify-center w-12 h-12 gap-x-2 py-2.5 px-6 rounded-[6.25rem] text-sm tracking-[.00714em] text-center font-medium bg-surface-100 dark:bg-surfacedark-100 hover:bg-surface-300 focus:bg-surface-400 dark:text-primary-200 dark:hover:bg-surfacedark-300 dark:focus:bg-surfacedark-400"><span aria-label="Export CSV" data-microtip-position="top" role="tooltip" class="material-symbols-outlined">download</span></button>

            <button class="relative !inline-flex !items-center justify-center w-12 h-12 gap-x-2 py-2.5 px-6 rounded-[6.25rem] text-sm tracking-[.00714em] text-center font-medium bg-surface-100 dark:bg-surfacedark-100 hover:bg-surface-300 focus:bg-surface-400 dark:text-primary-200 dark:hover:bg-surfacedark-300 dark:focus:bg-surfacedark-400"><span aria-label="Delete" data-microtip-position="top" role="tooltip" class="material-symbols-outlined">delete</span></button>
          </div>

          <!-- add new -->
          <a href="<?= site_url('user/create_index')?>" class="btn relative flex flex-row items-center justify-center gap-x-2 py-2 px-4 rounded-[6.25rem] hover:shadow-md text-sm tracking-[.00714em] font-medium bg-primary-600 text-white dark:bg-primary-200 dark:text-primary-800">
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
                  <th data-sortable="false">
                    <div class="flex items-center justify-center">
                      <input id="checkall" type="checkbox" name="checked-a" class="w-[18px] h-[18px] accent-primary-600 hover:accent-primary-600 dark:accent-primary-200 rounded-[2px] cursor-pointer">
                    </div>
                  </th>
                   <th data-sortable="false"></th>
                  <th data-sortable="false">Company</th>
                  <th data-sortable="false">Size</th>
                  <th data-sortable="false">Email</th>
                  <th data-sortable="false">Address</th>
                  <th data-sortable="false">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr class="[&.selected]:!bg-primary-100 dark:[&.selected]:!bg-primary-700">
                  <td class="!px-0">
                    <div class="flex items-center justify-center">
                      <input type="checkbox" name="check_a" class="checked-item w-[18px] h-[18px] accent-primary-600 hover:accent-primary-600 dark:accent-primary-200 rounded-[2px] cursor-pointer">
                    </div>
                  </td>
                  <td class="!px-0">
                    <div class="hover:text-orange-500">
                      <input id="check_01" class="hidden peer toggle-star" type="checkbox" name="check_01" checked>
                      <label for="check_01" class="peer-checked:text-orange-500 hover:cursor-pointer  starfill">
                        <span class="material-symbols-outlined">star</span>
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="flex items-center gap-3">
                      <img src="../src/img/brand/brand.png" class="w-8 h-8 rounded" alt="title">
                      <div class="flex flex-col">
                        <h4 class="font-semibold">Acme Inc.</h4>
                        <span class="body-sm text-gray-500">Manufacturing</span>
                      </div>
                    </div>
                  </td>
                  <td>
                    <span class="inline-flex items-center h-6 px-3 text-label-md text-pink-700 dark:text-pink-200 bg-pink-100 dark:bg-opacity-20 rounded-full">Large</span>
                  </td>
                  <td><a href="mailto:acme@example.com" target="_blank">acme@example.com</a></td>
                  <td>Roma</td>
                  <td><a href="#" class="hover:text-primary-600 dark:hover:text-primary-200">edit</a></td>
                </tr>
                <tr class="[&.selected]:!bg-primary-100 dark:[&.selected]:!bg-primary-700">
                  <td class="!px-0">
                    <div class="flex items-center justify-center">
                      <input type="checkbox" name="check_b" class="checked-item w-[18px] h-[18px] accent-primary-600 hover:accent-primary-600 dark:accent-primary-200 rounded-[2px] cursor-pointer">
                    </div>
                  </td>
                  <td class="!px-0">
                    <div class="hover:text-orange-500">
                      <input id="check_02" class="hidden peer toggle-star" type="checkbox" name="check_02" checked>
                      <label for="check_02" class="peer-checked:text-orange-500 hover:cursor-pointer  starfill">
                        <span class="material-symbols-outlined">star</span>
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="flex items-center gap-3">
                      <img src="../src/img/brand/brand.png" class="w-8 h-8 rounded" alt="title">
                      <div class="flex flex-col">
                        <h4 class="font-semibold">Avaa Corp</h4>
                        <span class="body-sm text-gray-500">Technology</span>
                      </div>
                    </div>
                  </td>
                  <td>
                    <span class="inline-flex items-center h-6 px-3 text-label-md text-yellow-700 dark:text-yellow-200 bg-yellow-100 dark:bg-opacity-20 rounded-full">Medium</span>
                  </td>
                  <td><a href="mailto:avaa@example.com" target="_blank">avaa@example.com</a></td>
                  <td>Barcelona</td>
                  <td><a href="#" class="hover:text-primary-600 dark:hover:text-primary-200">edit</a></td>
                </tr>
                <tr class="[&.selected]:!bg-primary-100 dark:[&.selected]:!bg-primary-700">
                  <td class="!px-0">
                    <div class="flex items-center justify-center">
                      <input type="checkbox" name="check_c" class="checked-item w-[18px] h-[18px] accent-primary-600 hover:accent-primary-600 dark:accent-primary-200 rounded-[2px] cursor-pointer">
                    </div>
                  </td>
                  <td class="!px-0">
                    <div class="hover:text-orange-500">
                      <input id="check_03" class="hidden peer toggle-star" type="checkbox" name="check_03" checked>
                      <label for="check_03" class="peer-checked:text-orange-500 hover:cursor-pointer  starfill">
                        <span class="material-symbols-outlined">star</span>
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="flex items-center gap-3">
                      <img src="../src/img/brand/brand.png" class="w-8 h-8 rounded" alt="title">
                      <div class="flex flex-col">
                        <h4 class="font-semibold">Bazara</h4>
                        <span class="body-sm text-gray-500">Healthcare</span>
                      </div>
                    </div>
                  </td>
                  <td>
                    <span class="inline-flex items-center h-6 px-3 text-label-md text-green-700 dark:text-green-200 bg-green-100 dark:bg-opacity-20 rounded-full">Small</span>
                  </td>
                  <td><a href="mailto:bazara@example.com" target="_blank">bazara@example.com</a></td>
                  <td>Madrid</td>
                  <td><a href="#" class="hover:text-primary-600 dark:hover:text-primary-200">edit</a></td>
                </tr>
                <tr class="[&.selected]:!bg-primary-100 dark:[&.selected]:!bg-primary-700">
                  <td class="!px-0">
                    <div class="flex items-center justify-center">
                      <input type="checkbox" name="check_d" class="checked-item w-[18px] h-[18px] accent-primary-600 hover:accent-primary-600 dark:accent-primary-200 rounded-[2px] cursor-pointer">
                    </div>
                  </td>
                  <td class="!px-0">
                    <div class="hover:text-orange-500">
                      <input id="check_04" class="hidden peer toggle-star" type="checkbox" name="check_04" checked>
                      <label for="check_04" class="peer-checked:text-orange-500 hover:cursor-pointer  starfill">
                        <span class="material-symbols-outlined">star</span>
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="flex items-center gap-3">
                      <img src="../src/img/brand/brand.png" class="w-8 h-8 rounded" alt="title">
                      <div class="flex flex-col">
                        <h4 class="font-semibold">Green Inc.</h4>
                        <span class="body-sm text-gray-500">Agriculture</span>
                      </div>
                    </div>
                  </td>
                  <td>
                    <span class="inline-flex items-center h-6 px-3 text-label-md text-pink-700 dark:text-pink-200 bg-pink-100 dark:bg-opacity-20 rounded-full">Large</span>
                  </td>
                  <td><a href="mailto:green@example.com" target="_blank">green@example.com</a></td>
                  <td>Jakarta</td>
                  <td><a href="#" class="hover:text-primary-600 dark:hover:text-primary-200">edit</a></td>
                </tr>
                <tr class="[&.selected]:!bg-primary-100 dark:[&.selected]:!bg-primary-700">
                  <td class="!px-0">
                    <div class="flex items-center justify-center">
                      <input type="checkbox" name="check_e" class="checked-item w-[18px] h-[18px] accent-primary-600 hover:accent-primary-600 dark:accent-primary-200 rounded-[2px] cursor-pointer">
                    </div>
                  </td>
                  <td class="!px-0">
                    <div class="hover:text-orange-500">
                      <input id="check_05" class="hidden peer toggle-star" type="checkbox" name="check_05">
                      <label for="check_05" class="peer-checked:text-orange-500 hover:cursor-pointer  starfill">
                        <span class="material-symbols-outlined">star</span>
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="flex items-center gap-3">
                      <img src="../src/img/brand/brand.png" class="w-8 h-8 rounded" alt="title">
                      <div class="flex flex-col">
                        <h4 class="font-semibold">Zloo Corp</h4>
                        <span class="body-sm text-gray-500">Technology</span>
                      </div>
                    </div>
                  </td>
                  <td>
                    <span class="inline-flex items-center h-6 px-3 text-label-md text-yellow-700 dark:text-yellow-200 bg-yellow-100 dark:bg-opacity-20 rounded-full">Medium</span>
                  </td>
                  <td><a href="mailto:zloo@example.com" target="_blank">zloo@example.com</a></td>
                  <td>Barcelona</td>
                  <td><a href="#" class="hover:text-primary-600 dark:hover:text-primary-200">edit</a></td>
                </tr>
                <tr class="[&.selected]:!bg-primary-100 dark:[&.selected]:!bg-primary-700">
                  <td class="!px-0">
                    <div class="flex items-center justify-center">
                      <input type="checkbox" name="check_f" class="checked-item w-[18px] h-[18px] accent-primary-600 hover:accent-primary-600 dark:accent-primary-200 rounded-[2px] cursor-pointer">
                    </div>
                  </td>
                  <td class="!px-0">
                    <div class="hover:text-orange-500">
                      <input id="check_06" class="hidden peer toggle-star" type="checkbox" name="check_06">
                      <label for="check_06" class="peer-checked:text-orange-500 hover:cursor-pointer  starfill">
                        <span class="material-symbols-outlined">star</span>
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="flex items-center gap-3">
                      <img src="../src/img/brand/brand.png" class="w-8 h-8 rounded" alt="title">
                      <div class="flex flex-col">
                        <h4 class="font-semibold">Keenzo Corp</h4>
                        <span class="body-sm text-gray-500">Technology</span>
                      </div>
                    </div>
                  </td>
                  <td>
                    <span class="inline-flex items-center h-6 px-3 text-label-md text-pink-700 dark:text-pink-200 bg-pink-100 dark:bg-opacity-20 rounded-full">Large</span>
                  </td>
                  <td><a href="mailto:keenzo@example.com" target="_blank">keenzo@example.com</a></td>
                  <td>San Fransisco</td>
                  <td><a href="#" class="hover:text-primary-600 dark:hover:text-primary-200">edit</a></td>
                </tr>
                <tr class="[&.selected]:!bg-primary-100 dark:[&.selected]:!bg-primary-700">
                  <td class="!px-0">
                    <div class="flex items-center justify-center">
                      <input type="checkbox" name="check_g" class="checked-item w-[18px] h-[18px] accent-primary-600 hover:accent-primary-600 dark:accent-primary-200 rounded-[2px] cursor-pointer">
                    </div>
                  </td>
                  <td class="!px-0">
                    <div class="hover:text-orange-500">
                      <input id="check_07" class="hidden peer toggle-star" type="checkbox" name="check_07">
                      <label for="check_07" class="peer-checked:text-orange-500 hover:cursor-pointer  starfill">
                        <span class="material-symbols-outlined">star</span>
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="flex items-center gap-3">
                      <img src="../src/img/brand/brand.png" class="w-8 h-8 rounded" alt="title">
                      <div class="flex flex-col">
                        <h4 class="font-semibold">Berty Inc</h4>
                        <span class="body-sm text-gray-500">Technology</span>
                      </div>
                    </div>
                  </td>
                  <td>
                    <span class="inline-flex items-center h-6 px-3 text-label-md text-yellow-700 dark:text-yellow-200 bg-yellow-100 dark:bg-opacity-20 rounded-full">Medium</span>
                  </td>
                  <td><a href="mailto:berty@example.com" target="_blank">berty@example.com</a></td>
                  <td>San Fransisco</td>
                  <td><a href="#" class="hover:text-primary-600 dark:hover:text-primary-200">edit</a></td>
                </tr>
                <tr class="[&.selected]:!bg-primary-100 dark:[&.selected]:!bg-primary-700">
                  <td class="!px-0">
                    <div class="flex items-center justify-center">
                      <input type="checkbox" name="check_h" class="checked-item w-[18px] h-[18px] accent-primary-600 hover:accent-primary-600 dark:accent-primary-200 rounded-[2px] cursor-pointer">
                    </div>
                  </td>
                  <td class="!px-0">
                    <div class="hover:text-orange-500">
                      <input id="check_08" class="hidden peer toggle-star" type="checkbox" name="check_08">
                      <label for="check_08" class="peer-checked:text-orange-500 hover:cursor-pointer  starfill">
                        <span class="material-symbols-outlined">star</span>
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="flex items-center gap-3">
                      <img src="../src/img/brand/brand.png" class="w-8 h-8 rounded" alt="title">
                      <div class="flex flex-col">
                        <h4 class="font-semibold">Hillx Corp</h4>
                        <span class="body-sm text-gray-500">Technology</span>
                      </div>
                    </div>
                  </td>
                  <td>
                    <span class="inline-flex items-center h-6 px-3 text-label-md text-pink-700 dark:text-pink-200 bg-pink-100 dark:bg-opacity-20 rounded-full">Large</span>
                  </td>
                  <td><a href="mailto:hillx@example.com" target="_blank">hillx@example.com</a></td>
                  <td>Berlin</td>
                  <td><a href="#" class="hover:text-primary-600 dark:hover:text-primary-200">edit</a></td>
                </tr>
                <tr class="[&.selected]:!bg-primary-100 dark:[&.selected]:!bg-primary-700">
                  <td class="!px-0">
                    <div class="flex items-center justify-center">
                      <input type="checkbox" name="check_i" class="checked-item w-[18px] h-[18px] accent-primary-600 hover:accent-primary-600 dark:accent-primary-200 rounded-[2px] cursor-pointer">
                    </div>
                  </td>
                  <td class="!px-0">
                    <div class="hover:text-orange-500">
                      <input id="check_09" class="hidden peer toggle-star" type="checkbox" name="check_09">
                      <label for="check_09" class="peer-checked:text-orange-500 hover:cursor-pointer  starfill">
                        <span class="material-symbols-outlined">star</span>
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="flex items-center gap-3">
                      <img src="../src/img/brand/brand.png" class="w-8 h-8 rounded" alt="title">
                      <div class="flex flex-col">
                        <h4 class="font-semibold">Reds Corp</h4>
                        <span class="body-sm text-gray-500">Technology</span>
                      </div>
                    </div>
                  </td>
                  <td>
                    <span class="inline-flex items-center h-6 px-3 text-label-md text-yellow-700 dark:text-yellow-200 bg-yellow-100 dark:bg-opacity-20 rounded-full">Medium</span>
                  </td>
                  <td><a href="mailto:reds@example.com" target="_blank">reds@example.com</a></td>
                  <td>Dubai</td>
                  <td><a href="#" class="hover:text-primary-600 dark:hover:text-primary-200">edit</a></td>
                </tr>
                <tr class="[&.selected]:!bg-primary-100 dark:[&.selected]:!bg-primary-700">
                  <td class="!px-0">
                    <div class="flex items-center justify-center">
                      <input type="checkbox" name="check_j" class="checked-item w-[18px] h-[18px] accent-primary-600 hover:accent-primary-600 dark:accent-primary-200 rounded-[2px] cursor-pointer">
                    </div>
                  </td>
                  <td class="!px-0">
                    <div class="hover:text-orange-500">
                      <input id="check_10" class="hidden peer toggle-star" type="checkbox" name="check_10">
                      <label for="check_10" class="peer-checked:text-orange-500 hover:cursor-pointer  starfill">
                        <span class="material-symbols-outlined">star</span>
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="flex items-center gap-3">
                      <img src="../src/img/brand/brand.png" class="w-8 h-8 rounded" alt="title">
                      <div class="flex flex-col">
                        <h4 class="font-semibold">Artmoo</h4>
                        <span class="body-sm text-gray-500">Healthcare</span>
                      </div>
                    </div>
                  </td>
                  <td>
                    <span class="inline-flex items-center h-6 px-3 text-label-md text-yellow-700 dark:text-yellow-200 bg-yellow-100 dark:bg-opacity-20 rounded-full">Medium</span>
                  </td>
                  <td><a href="mailto:artmoo@example.com" target="_blank">artmoo@example.com</a></td>
                  <td>Paris</td>
                  <td><a href="#" class="hover:text-primary-600 dark:hover:text-primary-200">edit</a></td>
                </tr>
                <tr class="[&.selected]:!bg-primary-100 dark:[&.selected]:!bg-primary-700">
                  <td class="!px-0">
                    <div class="flex items-center justify-center">
                      <input type="checkbox" name="check_k" class="checked-item w-[18px] h-[18px] accent-primary-600 hover:accent-primary-600 dark:accent-primary-200 rounded-[2px] cursor-pointer">
                    </div>
                  </td>
                  <td class="!px-0">
                    <div class="hover:text-orange-500">
                      <input id="check_11" class="hidden peer toggle-star" type="checkbox" name="check_11">
                      <label for="check_11" class="peer-checked:text-orange-500 hover:cursor-pointer  starfill">
                        <span class="material-symbols-outlined">star</span>
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="flex items-center gap-3">
                      <img src="../src/img/brand/brand.png" class="w-8 h-8 rounded" alt="title">
                      <div class="flex flex-col">
                        <h4 class="font-semibold">Croco Corp</h4>
                        <span class="body-sm text-gray-500">Technology</span>
                      </div>
                    </div>
                  </td>
                  <td>
                    <span class="inline-flex items-center h-6 px-3 text-label-md text-green-700 dark:text-green-200 bg-green-100 dark:bg-opacity-20 rounded-full">Small</span>
                  </td>
                  <td><a href="mailto:croco@example.com" target="_blank">croco@example.com</a></td>
                  <td>New Delhi</td>
                  <td><a href="#" class="hover:text-primary-600 dark:hover:text-primary-200">edit</a></td>
                </tr>
                <tr class="[&.selected]:!bg-primary-100 dark:[&.selected]:!bg-primary-700">
                  <td class="!px-0">
                    <div class="flex items-center justify-center">
                      <input type="checkbox" name="check_l" class="checked-item w-[18px] h-[18px] accent-primary-600 hover:accent-primary-600 dark:accent-primary-200 rounded-[2px] cursor-pointer">
                    </div>
                  </td>
                  <td class="!px-0">
                    <div class="hover:text-orange-500">
                      <input id="check_12" class="hidden peer toggle-star" type="checkbox" name="check_12">
                      <label for="check_12" class="peer-checked:text-orange-500 hover:cursor-pointer  starfill">
                        <span class="material-symbols-outlined">star</span>
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="flex items-center gap-3">
                      <img src="../src/img/brand/brand.png" class="w-8 h-8 rounded" alt="title">
                      <div class="flex flex-col">
                        <h4 class="font-semibold">Bozma Inc</h4>
                        <span class="body-sm text-gray-500">Manufacturing</span>
                      </div>
                    </div>
                  </td>
                  <td>
                    <span class="inline-flex items-center h-6 px-3 text-label-md text-pink-700 dark:text-pink-200 bg-pink-100 dark:bg-opacity-20 rounded-full">Large</span>
                  </td>
                  <td><a href="mailto:bozma@example.com" target="_blank">bozma@example.com</a></td>
                  <td>Oslo</td>
                  <td><a href="#" class="hover:text-primary-600 dark:hover:text-primary-200">edit</a></td>
                </tr>
                <tr class="[&.selected]:!bg-primary-100 dark:[&.selected]:!bg-primary-700">
                  <td class="!px-0">
                    <div class="flex items-center justify-center">
                      <input type="checkbox" name="check_m" class="checked-item w-[18px] h-[18px] accent-primary-600 hover:accent-primary-600 dark:accent-primary-200 rounded-[2px] cursor-pointer">
                    </div>
                  </td>
                  <td class="!px-0">
                    <div class="hover:text-orange-500">
                      <input id="check_13" class="hidden peer toggle-star" type="checkbox" name="check_13">
                      <label for="check_13" class="peer-checked:text-orange-500 hover:cursor-pointer  starfill">
                        <span class="material-symbols-outlined">star</span>
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="flex items-center gap-3">
                      <img src="../src/img/brand/brand.png" class="w-8 h-8 rounded" alt="title">
                      <div class="flex flex-col">
                        <h4 class="font-semibold">Red Hill Inc</h4>
                        <span class="body-sm text-gray-500">Technology</span>
                      </div>
                    </div>
                  </td>
                  <td>
                    <span class="inline-flex items-center h-6 px-3 text-label-md text-yellow-700 dark:text-yellow-200 bg-yellow-100 dark:bg-opacity-20 rounded-full">Medium</span>
                  </td>
                  <td><a href="mailto:redhill@example.com" target="_blank">redhill@example.com</a></td>
                  <td>Jakarta</td>
                  <td><a href="#" class="hover:text-primary-600 dark:hover:text-primary-200">edit</a></td>
                </tr>
                <tr class="[&.selected]:!bg-primary-100 dark:[&.selected]:!bg-primary-700">
                  <td class="!px-0">
                    <div class="flex items-center justify-center">
                      <input type="checkbox" name="check_m" class="checked-item w-[18px] h-[18px] accent-primary-600 hover:accent-primary-600 dark:accent-primary-200 rounded-[2px] cursor-pointer">
                    </div>
                  </td>
                  <td class="!px-0">
                    <div class="hover:text-orange-500">
                      <input id="check_14" class="hidden peer toggle-star" type="checkbox" name="check_14">
                      <label for="check_14" class="peer-checked:text-orange-500 hover:cursor-pointer  starfill">
                        <span class="material-symbols-outlined">star</span>
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="flex items-center gap-3">
                      <img src="../src/img/brand/brand.png" class="w-8 h-8 rounded" alt="title">
                      <div class="flex flex-col">
                        <h4 class="font-semibold">Gooblue Corp</h4>
                        <span class="body-sm text-gray-500">Technology</span>
                      </div>
                    </div>
                  </td>
                  <td>
                    <span class="inline-flex items-center h-6 px-3 text-label-md text-pink-700 dark:text-pink-200 bg-pink-100 dark:bg-opacity-20 rounded-full">Large</span>
                  </td>
                  <td><a href="mailto:Gooblue@example.com" target="_blank">gooblue@example.com</a></td>
                  <td>Berlin</td>
                  <td><a href="#" class="hover:text-primary-600 dark:hover:text-primary-200">edit</a></td>
                </tr>
                <tr class="[&.selected]:!bg-primary-100 dark:[&.selected]:!bg-primary-700">
                  <td class="!px-0">
                    <div class="flex items-center justify-center">
                      <input type="checkbox" name="check_v" class="checked-item w-[18px] h-[18px] accent-primary-600 hover:accent-primary-600 dark:accent-primary-200 rounded-[2px] cursor-pointer">
                    </div>
                  </td>
                  <td class="!px-0">
                    <div class="hover:text-orange-500">
                      <input id="check_16" class="hidden peer toggle-star" type="checkbox" name="check_16">
                      <label for="check_16" class="peer-checked:text-orange-500 hover:cursor-pointer  starfill">
                        <span class="material-symbols-outlined">star</span>
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="flex items-center gap-3">
                      <img src="../src/img/brand/brand.png" class="w-8 h-8 rounded" alt="title">
                      <div class="flex flex-col">
                        <h4 class="font-semibold">Nevad Corp</h4>
                        <span class="body-sm text-gray-500">Technology</span>
                      </div>
                    </div>
                  </td>
                  <td>
                    <span class="inline-flex items-center h-6 px-3 text-label-md text-yellow-700 dark:text-yellow-200 bg-yellow-100 dark:bg-opacity-20 rounded-full">Medium</span>
                  </td>
                  <td><a href="mailto:nevad@example.com" target="_blank">nevad@example.com</a></td>
                  <td>Nevada</td>
                  <td><a href="#" class="hover:text-primary-600 dark:hover:text-primary-200">edit</a></td>
                </tr>
                <tr class="[&.selected]:!bg-primary-100 dark:[&.selected]:!bg-primary-700">
                  <td class="!px-0">
                    <div class="flex items-center justify-center">
                      <input type="checkbox" name="check_x" class="checked-item w-[18px] h-[18px] accent-primary-600 hover:accent-primary-600 dark:accent-primary-200 rounded-[2px] cursor-pointer">
                    </div>
                  </td>
                  <td class="!px-0">
                    <div class="hover:text-orange-500">
                      <input id="check_17" class="hidden peer toggle-star" type="checkbox" name="check_17">
                      <label for="check_17" class="peer-checked:text-orange-500 hover:cursor-pointer  starfill">
                        <span class="material-symbols-outlined">star</span>
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="flex items-center gap-3">
                      <img src="../src/img/brand/brand.png" class="w-8 h-8 rounded" alt="title">
                      <div class="flex flex-col">
                        <h4 class="font-semibold">Dimoza</h4>
                        <span class="body-sm text-gray-500">Healthcare</span>
                      </div>
                    </div>
                  </td>
                  <td>
                    <span class="inline-flex items-center h-6 px-3 text-label-md text-yellow-700 dark:text-yellow-200 bg-yellow-100 dark:bg-opacity-20 rounded-full">Medium</span>
                  </td>
                  <td><a href="mailto:Dimoza@example.com" target="_blank">dimoza@example.com</a></td>
                  <td>Paris</td>
                  <td><a href="#" class="hover:text-primary-600 dark:hover:text-primary-200">edit</a></td>
                </tr>
                <tr class="[&.selected]:!bg-primary-100 dark:[&.selected]:!bg-primary-700">
                  <td class="!px-0">
                    <div class="flex items-center justify-center">
                      <input type="checkbox" name="check_y" class="checked-item w-[18px] h-[18px] accent-primary-600 hover:accent-primary-600 dark:accent-primary-200 rounded-[2px] cursor-pointer">
                    </div>
                  </td>
                  <td class="!px-0">
                    <div class="hover:text-orange-500">
                      <input id="check_18" class="hidden peer toggle-star" type="checkbox" name="check_18">
                      <label for="check_18" class="peer-checked:text-orange-500 hover:cursor-pointer  starfill">
                        <span class="material-symbols-outlined">star</span>
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="flex items-center gap-3">
                      <img src="../src/img/brand/brand.png" class="w-8 h-8 rounded" alt="title">
                      <div class="flex flex-col">
                        <h4 class="font-semibold">Grayla Corp</h4>
                        <span class="body-sm text-gray-500">Technology</span>
                      </div>
                    </div>
                  </td>
                  <td>
                    <span class="inline-flex items-center h-6 px-3 text-label-md text-yellow-700 dark:text-yellow-200 bg-yellow-100 dark:bg-opacity-20 rounded-full">Medium</span>
                  </td>
                  <td><a href="mailto:Grayla@example.com" target="_blank">grayla@example.com</a></td>
                  <td>New Delhi</td>
                  <td><a href="#" class="hover:text-primary-600 dark:hover:text-primary-200">edit</a></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </main>
<?php include APPPATH.'/views/includes/footer.php'?>