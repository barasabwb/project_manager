<style>
    .modal {
  z-index: 1072;
  @apply hidden fixed top-0 left-0 w-full h-full outline-none
}

.modal.show {
  @apply block
}

.modal-backdrop {
  z-index: 1040;
  width: 100vw;
  height: 100vh;
  @apply fixed bg-black top-0 left-0
}

.modal-backdrop.fade {
  @apply opacity-0
}

.modal-backdrop.show {
  @apply opacity-50
}

.modal.fade .modal-dialog {
  transition: -webkit-transform .3s ease-out;
  transition: transform .3s ease-out;
  transition: transform .3s ease-out,-webkit-transform .3s ease-out;
  -webkit-transform: translate(0,-50px);
  transform: translate(0,-50px);
}

.modal.show .modal-dialog {
  -webkit-transform: none;
  transform: none;
}
</style>

<section class="navigation_bar_section sticky top-0 z-50">
<div class="navbar bg-base-100">
  <div class="navbar-start">

    <a class="block md:hidden hover:scale-105 transition duration-100 ease-in-out cursor-pointer text-xl">Manager</a>

    <!-- <div class="dropdown">
      <label tabindex="0" class="btn btn-ghost btn-circle">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" /></svg>
      </label>
      <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
        <li><a>Homepage</a></li>
        <li><a>Portfolio</a></li>
        <li><a>About</a></li>
      </ul>
    </div> -->
  </div>
  <div class="navbar-center">
    <a class="hidden md:block  hover:scale-105 transition duration-100 ease-in-out cursor-pointer text-xl">Manager</a>
  </div>
  <div class="navbar-end space-x-4">


    <label for="my-modal-5"  class="btn btn-ghost btn-sm text-xs">Sign In</label>
    <button class="btn btn-success btn-sm text-xs text-white">Sign Up</button>

    <!-- <button class="btn btn-ghost btn-circle">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
    </button>
    <button class="btn btn-ghost btn-circle">
      <div class="indicator">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" /></svg>
        <span class="badge badge-xs badge-primary indicator-item"></span>
      </div>
    </button> -->
  </div>
</div>
</section>
