<div class="border-right" id="sidebar-wrapper">
    <div class="sidebar-heading text-center">
      <img
        src="/images/logo/ndawin-store-logo.jpg"
        alt="Logo Dashboard"
        class="my-4 mt-5"
        width="150px"
      />
    </div>
    {{-- <div class="list-group list-group-flush">
      <a
        href="{{ route('dashboard') }}"
        class="list-group-item list-group-item-action {{ (request()->is('dashboard')) ? 'active' : '' }}"
        >Dashboard</a
      >
    </div>
    <div class="list-group list-group-flush">
      <a
        href="{{ route('dashboard-product') }}"
        class="list-group-item list-group-item-action {{ (request()->is('dashboard/products*')) ? 'active' : '' }}"
        >Produk Saya</a
      >
    </div> --}}
    <div class="list-group list-group-flush">
      <a
        href="{{ route('dashboard-transaction') }}"
        class="list-group-item list-group-item-action {{ (request()->is('dashboard/transactions*')) ? 'active' : '' }}"
        >Transaksi</a
      >
    </div>
    {{-- <div class="list-group list-group-flush">
      <a
        href="{{ route('dashboard-settings-store') }}"
        class="list-group-item list-group-item-action {{ (request()->is('dashboard/setting*')) ? 'active' : '' }}"
        >Pengaturan Toko</a
      >
    </div> --}}
    <div class="list-group list-group-flush">
      <a
        href="{{ route('dashboard-settings-account') }}"
        class="list-group-item list-group-item-action {{ (request()->is('dashboard/account*')) ? 'active' : '' }}"
        >Akun Saya</a
      >
    </div>
    <hr>
    <div class="list-group list-group-flush">
      <a href="{{ route('logout') }}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();" 
        class="list-group-item list-group-item-action"
      >
        Keluar
      </a>
      
      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
      </form>
    </div>
</div>