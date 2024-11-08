<aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
    id="sidenav-main">
    <div class="sidenav-header">
{{--        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"--}}
{{--           aria-hidden="true" id="iconSidenav"></i>--}}
        <a class="navbar-brand m-0 d-flex text-wrap align-items-center" href=" {{ route('dashboard') }} ">
            <img src="{{ asset('assets/img/logo-ct.png') }}" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-2 font-weight-bold text-white">{{__('Financial Management')}}</span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
        <ul class="navbar-nav">

{{--            <li class="nav-item">--}}
{{--                <a class="nav-link text-white {{ Route::currentRouteName() == 'dashboard' ? ' active bg-gradient-primary' : '' }} "--}}
{{--                   href="{{ route('dashboard') }}">--}}
{{--                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">--}}
{{--                        <i class="material-icons opacity-10">dashboard</i>--}}
{{--                    </div>--}}
{{--                    <span class="nav-link-text ms-1">Dashboard</span>--}}
{{--                </a>--}}
{{--            </li>--}}

            {{--            <li class="nav-item mt-3">--}}
            {{--                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">{{__('Real-time')}}</h6>--}}
            {{--            </li>--}}
            <li class="nav-item">
                <a class="nav-link text-white {{ Route::currentRouteName() == 'expense-income' ? ' active bg-gradient-primary' : '' }} "
                   href="{{ route('expense-income') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">edit</i>
                    </div>
                    <span class="nav-link-text ms-1">{{__('Income and Expense')}}</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white {{ Route::currentRouteName() == 'modify-balance' ? ' active bg-gradient-primary' : '' }} "
                   href="{{ route('modify-balance') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">account_balance_wallet</i>
                    </div>
                    <span class="nav-link-text ms-1">{{__('Modify balance')}}</span>
                </a>
            </li>

            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">{{__('Reports')}}</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Route::currentRouteName() == 'index-expense-income' ? ' active bg-gradient-primary' : '' }} "
                   href="{{ route('index-expense-income') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">reorder</i>
                    </div>
                    <span class="nav-link-text ms-1">{{__('Index')}}</span>
                </a>
            </li>


        </ul>
    </div>
</aside>
