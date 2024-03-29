<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('dashboard') }}" class="brand-link">
        <span class="brand-text font-weight-light" style="padding-right: 1rem">Patient Health Record</span>
    </a>

    <div class="sidebar">
        <div class="form-inline" style="padding: 20px 0px 20px">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fa-solid fa-house-medical"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa-solid fa-user-group"></i>
                        <p>
                            Patients
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('add-patient') }}" class="nav-link {{ request()->routeIs('add-patient') ? 'active' : '' }}">
                                <i class="nav-icon fa-solid fa-user-plus"></i>
                                <p>Add Patient</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('list-patients') }}" class="nav-link {{ request()->routeIs('list-patients') ? 'active' : '' }}">
                                <i class="nav-icon fa-solid fa-users-rectangle"></i>
                                <p>List of Patients</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item" data-popover-target="popover-consultation" data-popover-placement="top">
                    <a href="#" class="nav-link {{ request()->routeIs('consultation') ? 'active' : '' }}" >
                        <i class="nav-icon fa-solid fa-stethoscope"></i>
                        <p style="color: red">Consultation</p>

                        <div data-popover id="popover-consultation" role="tooltip" class="absolute z-10 invisible inline-block w-52 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                          <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
                              <h3 class="font-semibold text-gray-900 dark:text-white">Unavailable</h3>
                          </div>
                          <div class="px-3 py-2">
                              <p>Under maintenance</p>
                          </div>
                          <div data-popper-arrow></div>
                      </div>
                    </a>
                </li>

                <li class="nav-item" data-popover-target="popover-lab" data-popover-placement="top">
                <a href="#" class="nav-link {{ request()->routeIs('laboratory') ? 'active' : '' }}">
                        <i class="nav-icon fa-solid fa-flask"></i>
                        <p style="color: red">Laboratory</p>

                        <div data-popover id="popover-lab" role="tooltip" class="absolute z-10 invisible inline-block w-52 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                          <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
                              <h3 class="font-semibold text-gray-900 dark:text-white">Unavailable</h3>
                          </div>
                          <div class="px-3 py-2">
                              <p>Under maintenance</p>
                          </div>
                          <div data-popper-arrow></div>
                        </div>
                    </a>
                </li>

                <li class="nav-item" data-popover-target="popover-bal" data-popover-placement="top">
                    <a href="#" class="nav-link {{ request()->routeIs('balance') ? 'active' : '' }}">
                        <i class="nav-icon fa-solid fa-peso-sign"></i>
                        <p style="color: red">Balance</p>

                        <div data-popover id="popover-bal" role="tooltip" class="absolute z-10 invisible inline-block w-52 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                          <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
                              <h3 class="font-semibold text-gray-900 dark:text-white">Unavailable</h3>
                          </div>
                          <div class="px-3 py-2">
                              <p>Under maintenance</p>
                          </div>
                          <div data-popper-arrow></div>
                        </div>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fa-solid fa-gear"></i>
                      <p>
                        Settings
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item" data-popover-target="popover-icd" data-popover-placement="top">
                        <a href="#" class="nav-link {{ request()->routeIs('icd-codes') ? 'active' : '' }}">
                          <i class="nav-icon fa-solid fa-plus"></i>
                          <p style="color: red">Add ICD-10 Codes</p>

                          <div data-popover id="popover-icd" role="tooltip" class="absolute z-10 invisible inline-block w-52 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                            <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
                                <h3 class="font-semibold text-gray-900 dark:text-white">Unavailable</h3>
                            </div>
                            <div class="px-3 py-2">
                                <p>Under maintenance</p>
                            </div>
                            <div data-popper-arrow></div>
                          </div>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{ route('manage-systemUser') }}" class="nav-link {{ request()->routeIs('manage-systemUser') ? 'active' : '' }}">
                          <i class="nav-icon fa-solid fa-users-gear"></i>
                          <p>Manage System User</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{ route('permission.index') }}" class="nav-link">
                          <i class="nav-icon fa-solid fa-shield-halved"></i>
                          <p>Manage Permissions</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{ route('role.index') }}" class="nav-link">
                          <i class="nav-icon fa-solid fa-shield-halved"></i>
                          <p>Manage Roles</p>
                        </a>
                      </li>
                      <li class="nav-item" data-popover-target="popover-log" data-popover-placement="top">
                        <a href="#" class="nav-link {{ request()->routeIs('user-activity') ? 'active' : '' }}">
                          <i class="nav-icon fa-solid fa-book"></i>
                          <p style="color: red">User Log Activity</p>

                          <div data-popover id="popover-log" role="tooltip" class="absolute z-10 invisible inline-block w-52 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                            <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
                                <h3 class="font-semibold text-gray-900 dark:text-white">Unavailable</h3>
                            </div>
                            <div class="px-3 py-2">
                                <p>Under maintenance</p>
                            </div>
                            <div data-popper-arrow></div>
                          </div>
                        </a>
                      </li>
                    </ul>
                </li>

            </ul>
        </nav>
    </div>
</aside>
