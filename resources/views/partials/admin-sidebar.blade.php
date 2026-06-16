<nav class="sidebar">
    <div class="sidebar-header">
        <a href="{{ route('admin.dashboard') }}" class="brand text-decoration-none">
            <div class="brand-content-light d-flex align-items-center gap-2">
                <i class="fa-solid fa-layer-group text-primary fa-lg"></i>
                <span class="brand-text" style="font-family: 'Outfit', sans-serif; font-weight: 700; color: #1e293b; font-size: 1.15rem;">Sınav Center</span>
            </div>

            <div class="brand-content-dark d-flex align-items-center gap-2">
                <i class="fa-solid fa-layer-group text-primary fa-lg"></i>
                <span class="brand-text text-white" style="font-family: 'Outfit', sans-serif; font-weight: 700; font-size: 1.15rem;">Sınav Center</span>
            </div>
        </a>
        <button class="mobile-close-btn" id="mobile-close">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line>
            </svg>
        </button>
    </div>

    <div class="sidebar-menu">
        @php
            use Illuminate\Support\Str;
            
            $user = auth()->user();
            
            $isReportActive = request()->routeIs('admin.reports.*');
            $isCmsActive = request()->routeIs('admin.cms.*');
            $isExtraActive = request()->routeIs('admin.extra.*');
            
            $userRoutes = ['admin.users.*', 'admin.users.notifications.*'];
            $isUserActive = request()->routeIs($userRoutes);

            $isPaymentActive = request()->routeIs('admin.payments.*') || request()->routeIs('admin.coupons.*');
            $currentPaymentStatus = request()->query('status');
            $isPaymentsDropdownOpen = $isPaymentActive || Str::startsWith(request()->url(), url('/admin/payments'));
            
            $isTicketActive = request()->routeIs('admin.tickets.*');
            $currentTicketStatus = request()->query('status');
            
            $allActiveAddons = \App\Models\Addon::where('is_active', true)->get();
            $globalAddons = $allActiveAddons->groupBy('menu_location');
            $examAddons = $globalAddons['exam'] ?? collect([]);
        @endphp

        <div class="menu-group-title">{{ __('menu.main') }}</div>
        
        @include('admin.partials.sidebar.dashboard')

        @include('admin.partials.sidebar.exam', ['examAddons' => $examAddons, 'globalAddons' => $globalAddons])

        @include('admin.partials.sidebar.cms', ['globalAddons' => $globalAddons])

        @include('admin.partials.sidebar.application', ['globalAddons' => $globalAddons])

        @include('admin.partials.sidebar.finance', ['globalAddons' => $globalAddons])

        @include('admin.partials.sidebar.extra', ['globalAddons' => $globalAddons])

        @if(auth()->user()->id !== 1 && !auth()->user()->hasRole('Super Admin'))
        <div class="menu-group-title mt-4">{{ __('menu.navigation') }}</div>
        <a href="{{ route('user.dashboard') }}" class="nav-item">
            <div class="nav-item-content">
                <svg class="icon-rtl-flip" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M19 12H5"></path><path d="M12 19l-7-7 7-7"></path>
                </svg>
                <span>{{ __('menu.back_to_dashboard') }}</span>
            </div>
        </a>
        @endif
    </div>

    <div class="sidebar-footer">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="logout-btn" title="{{ __('menu.sign_out') }}">
                <svg class="icon-rtl-flip" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line>
                </svg>
                <span>{{ __('menu.log_out') }}</span>
            </button>
        </form>
    </div>
</nav>