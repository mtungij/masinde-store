<aside id="sidebar" class="sidebar transition-all duration-500 ease-in-out fixed max-lg:z-[60] lg:shrink-0 lg:relative lg:w-72 h-screen max-lg:[&.show_.sidebar-bg]:opacity-60 dark:max-lg:[&.show_.sidebar-bg]:opacity-60 [&.show_.sidebar-bg]:inset-0 [&.show_.sidebar-content]:translate-x-0">
      <!-- backdrop -->
      <div data-close="#sidebar" class="sidebar-bg fixed z-40 opacity-0 -top-full bg-black"></div>

      <!-- menu -->
      <div id="sidebar-content" class="sidebar-content transition-all duration-300 ease-in-out fixed z-40 max-lg:-translate-x-full max-lg:bg-surface-500 dark:max-lg:bg-surfacedark-500 left-0 top-0 bottom-0 h-screen w-72 overflow-auto scrollbars">
        <!-- logo -->
        <a href="#" class="sidebar-logo pt-4 pb-2 pl-6 flex items-center w-full">
          <div class="w-9 h-9 rounded-full border-2 border-primary-600 flex items-center justify-center text-primary-800 font-bold text-lg">
            <span class="flex items-center justify-center w-6 h-6 rounded-full bg-primary-200">G</span>
          </div>
          <div class="flex-col items-center ml-2">
            <h4 class="text-2xl font-medium tracking-wide text-gray-900 dark:text-gray-100 compact-hide">Masinde Store</h4>
            <p class="text-green-500 font-bold">- <?= $branchName ?></p>
          </div>
        </a>

        <!-- Standart drawer -->
        <div class="w-full inline-flex flex-col px-3 pb-3">
          <!-- title & menu -->
          <div class="pt-6 pb-2 px-4 compact-hide">
            <p class="text-title-sm font-medium uppercase text-gray-600 dark:text-gray-400">Home</p>
          </div>
          <ul class="sidebar-menu flex flex-col " style="padding-bottom: 18px;">
            <!-- dashboards -->
            <li class="relative">
              <a href="javascript:void(0)" data-type="collapse" data-target="#dashboard1" class="flex flex-row items-center gap-3 py-3 pl-4 pr-6 mb-1 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-secondary-100 dark:[&.active]:bg-secondary-700 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                <span class="material-symbols-outlined">leaderboard</span>
                <span class="compact-title">Dashboards</span>
              </a>
              <ul id="dashboard1" data-type="collapsed" class="sidebar-submenu [&.active]:block hidden">
                <li>
                  <a href="<?= site_url('welcome/dashboard') ?>" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Admin Dashboard
                  </a>
                </li>
                <li>
                  <a href="../analytics/audience.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Seller Dashboard
                  </a>
                </li>
                <li>
                  <a href="../analytics/traffic.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Store Dashboard
                  </a>
                </li>
              </ul>
            </li>
            <li class="relative">
              <a href="javascript:void(0)" data-type="collapse" data-target="#dashboard4" class="flex flex-row items-center gap-3 py-3 pl-4 pr-6 mb-1 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-secondary-100 dark:[&.active]:bg-secondary-700 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                <span class="material-symbols-outlined">chart_data</span>
                <span class="compact-title">Sales</span>
              </a>
              <ul id="dashboard4" data-type="collapsed" class="sidebar-submenu [&.active]:block hidden">
                <!-- <li><a href="<?= site_url('sales/dashboard') ?>" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Dashboard
                  </a>
                </li>
                <li><a href="<?= site_url('sales') ?>" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    All Sales
                  </a>
                </li> -->
                <li><a href="<?= site_url('sales/mysales_view') ?>" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    My Sales
                  </a>
                </li>
                <li><a href="<?= site_url('sales/branch_sales') ?>" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Branch Sales
                  </a>
                </li>
              </ul>
            </li>
            <li class="relative">
              <a href="<?= site_url('product/product_branches') ?>" class="flex flex-row items-center gap-3 py-3 pl-4 pr-6 mb-1 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-secondary-100 dark:[&.active]:bg-secondary-700 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                <span class="material-symbols-outlined">dataset</span>
                <span class="compact-title">Products Per Branch</span>
              </a>
            </li>

            <li class="relative">
              <a href="<?= site_url('product/sell') ?>" class="flex flex-row items-center gap-3 py-3 pl-4 pr-6 mb-1 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-secondary-100 dark:[&.active]:bg-secondary-700 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                <span class="material-symbols-outlined">shopping_cart_checkout</span>
                <span class="compact-title">Sell Product</span>
              </a>
            </li>
            <li class="relative">
              <a href="<?= site_url('vendors') ?>" class="flex flex-row items-center gap-3 py-3 pl-4 pr-6 mb-1 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-secondary-100 dark:[&.active]:bg-secondary-700 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                <span class="material-symbols-outlined">autorenew</span>
                <span class="compact-title">Vendor Transfers</span>
              </a>
            </li>
            <li class="relative">
              <a href="<?= site_url('store/transfer_product_view') ?>" class="flex flex-row items-center gap-3 py-3 pl-4 pr-6 mb-1 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-secondary-100 dark:[&.active]:bg-secondary-700 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                <span class="material-symbols-outlined">rebase</span>
                <span class="compact-title">Transfer Products</span>
              </a>
            </li>
            <li class="relative">
              <a href="<?= site_url('product/register_view') ?>" class="flex flex-row items-center gap-3 py-3 pl-4 pr-6 mb-1 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-secondary-100 dark:[&.active]:bg-secondary-700 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                <span class="material-symbols-outlined">add_task</span>
                <span class="compact-title">Register Products</span>
              </a>
            </li>
            <li class="relative">
              <a href="<?= site_url('user/create_index') ?>" class="flex flex-row items-center gap-3 py-3 pl-4 pr-6 mb-1 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-secondary-100 dark:[&.active]:bg-secondary-700 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                <span class="material-symbols-outlined">groups</span>
                <span class="compact-title">Staff</span>
              </a>
            </li>
            <li class="relative">
              <a href="<?= site_url('product') ?>" class="flex flex-row items-center gap-3 py-3 pl-4 pr-6 mb-1 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-secondary-100 dark:[&.active]:bg-secondary-700 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                <span class="material-symbols-outlined">view_agenda</span>
                <span class="compact-title"><?= ucfirst(strtolower($branchName . " PRODUCTS")) ?></span>
              </a>
            </li>
            <li class="relative">
              <a href="<?= site_url('product/create_index') ?>" class="flex flex-row items-center gap-3 py-3 pl-4 pr-6 mb-1 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-secondary-100 dark:[&.active]:bg-secondary-700 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                <span class="material-symbols-outlined">add_business</span>
                <span class="compact-title">Add Stock</span>
              </a>
            </li>
            
            <li class="relative">
              <a href="javascript:void(0)" data-type="collapse" data-target="#dashboard_smart" class="flex flex-row items-center gap-3 py-3 pl-4 pr-6 mb-1 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-secondary-100 dark:[&.active]:bg-secondary-700 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                <span class="material-symbols-outlined">house</span>
                <span class="compact-title">Expenses</span>
              </a>
              <ul id="dashboard_smart" data-type="collapsed" class="sidebar-submenu [&.active]:block hidden">
                <li><a href="<?= site_url('expenses/create_index') ?>" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Add Expenses
                  </a>
                </li>
                <!-- <li><a href="<?= site_url('expenses/index') ?>" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    All Expenses
                  </a>
                </li> -->
              </ul>
            </li>


            <li class="relative">
              <a href="javascript:void(0)" data-type="collapse" data-target="#dashboard5" class="flex flex-row items-center gap-3 py-3 pl-4 pr-6 mb-1 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-secondary-100 dark:[&.active]:bg-secondary-700 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                <span class="material-symbols-outlined">fact_check</span>
                <span class="compact-title">Reports</span>
              </a>
              <ul id="dashboard5" data-type="collapsed" class="sidebar-submenu [&.active]:block hidden">
                <li><a href="<?= site_url('reports/expenses') ?>" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Expenses Report
                  </a>
                </li>
                <li><a href="../projects/project-list.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Profit and Loss
                  </a>
                </li>
                <li><a href="<?= site_url('reports/staff_wise') ?>" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Staff Wise Sales
                  </a>
                </li>
                <li><a href="<?= site_url('reports/branch_wise') ?>" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Branch Wise Sales
                  </a>
                </li>
                <li><a href="<?= site_url('reports/credit_sales') ?>" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Credit Sales
                  </a>
                </li>
                <li><a href="<?= site_url('reports/all_products') ?>" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    All Products
                  </a>
                </li>
                <li><a href="<?= site_url('reports/out_of_stock') ?>" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Out Of Stock Products
                  </a>
                </li>
                <li><a href="<?= site_url('reports/empty_products') ?>" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Empty Products
                  </a>
                </li>
              </ul>

            </li>
          </ul>

         
        
          </div>
        </div>
      </div>
    </aside>