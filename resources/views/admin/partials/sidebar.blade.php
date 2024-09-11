<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="#">{{ config('app.name') }}</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="#">BA</a>
    </div>
    <ul class="sidebar-menu">
        <li {{ is_nav_active('products') }}>
            <a class="nav-link" href="{{ route('admin.products.index') }}">
                <i class="fas fa-users"></i> <span>Produk</span>
            </a>
        </li>
    </ul>
</aside>
