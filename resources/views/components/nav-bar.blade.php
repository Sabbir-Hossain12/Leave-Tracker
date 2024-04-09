<li class="nav-item">
    <a class="nav-link {{request()->is('admin.dashboard') ? 'active':'inactive'}}" aria-current="page"
       href="{{route('admin.dashboard')}}"><i class="fas fa-home"></i>
        <span class="p-1 align-text-bottom"></span>
        Dashboard
    </a>
</li>
<li class="nav-item">
    <a class="nav-link " href="{{route('employees.index')}}"><i class="fas fa-clipboard"></i>
        <span data-feather="file" class="p-1 align-text-bottom"></span>
        Employee List
    </a>
</li>

<li class="nav-item">
    <a class="nav-link " href=""><i class="fas fa-clipboard"></i>
        <span data-feather="file" class="p-1 align-text-bottom"></span>
        Leave requests
    </a>
</li>
