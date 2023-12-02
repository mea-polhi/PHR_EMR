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

                <li class="nav-item">
                    <a href="{{ route('consultation') }}" class="nav-link {{ request()->routeIs('consultation') ? 'active' : '' }}">
                        <i class="nav-icon fa-solid fa-stethoscope"></i>
                        <p>Consultation</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('laboratory') }}" class="nav-link {{ request()->routeIs('laboratory') ? 'active' : '' }}">
                        <i class="nav-icon fa-solid fa-flask"></i>
                        <p>Laboratory</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('balance') }}" class="nav-link {{ request()->routeIs('balance') ? 'active' : '' }}">
                        <i class="nav-icon fa-solid fa-peso-sign"></i>
                        <p>Balance</p>
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
                      <li class="nav-item">
                        <a href="{{ route('icd-codes') }}" class="nav-link {{ request()->routeIs('icd-codes') ? 'active' : '' }}">
                          <i class="nav-icon fa-solid fa-plus"></i>
                          <p>Add ICD-10 Codes</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{ route('manage-systemUser') }}" class="nav-link {{ request()->routeIs('manage-systemUser') ? 'active' : '' }}">
                          <i class="nav-icon fa-solid fa-users-gear"></i>
                          <p>Manage System User</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{ route('user-activity') }}" class="nav-link {{ request()->routeIs('user-activity') ? 'active' : '' }}">
                          <i class="nav-icon fa-solid fa-book"></i>
                          <p>User Log Activity</p>
                        </a>
                      </li>
                    </ul>
                </li>

            </ul>
        </nav>
    </div>
</aside>
