
<nav class="nav navbar-light bg-light flex-column">
	<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
		<li class="nav-item{{ request()->is('admin') ? ' active' : ''}}">
			<a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard</a>
		</li>
		
		<li class="nav-item{{ request()->is('admin/supplier') ? ' active' : ''}}">
			<a class="nav-link" href="{{ route('admin.supplier') }}">Supplier</a>
		</li>

		<li class="nav-item{{ request()->is('admin/category') ? ' active' : ''}}">
			<a class="nav-link" href="{{ route('admin.category') }}">Kategori</a>
		</li>

		<li class="nav-item{{ request()->is('admin/product') ? ' active' : ''}}">
			<a class="nav-link" href="{{ route('admin.product') }}">Produk</a>
		</li>

		<li class="nav-item{{ request()->is('admin/po') ? ' active' : ''}}">
			<a class="nav-link" href="#">Push Order</a>
		</li>

		<li class="nav-item">
			<a class="nav-link @yield('#staffs')" href="#">Staffs</a>
		</li>
	</ul>  
</nav>

