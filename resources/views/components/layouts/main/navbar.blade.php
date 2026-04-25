<style>
  #mobile-menu {
    transition: max-height 0.3s ease-in-out, opacity 0.3s ease-in-out;
    max-height: 0;
    opacity: 0;
    overflow: hidden;
  }

  #mobile-menu.open {
    max-height: 400px;

    opacity: 1;
  }
</style>

<nav id="navbar"
  class="fixed top-0 w-full z-50 transition-all duration-300 bg-white/80 backdrop-blur-md border-b border-transparent">
  <div
    class="flex justify-between items-center py-4 lg:max-w-screen-xl md:max-w-screen-lg xl:max-w-screen-2xl px-4 mx-auto w-full">

    <div>
  <a href="/" class="font-medium text-xl tracking-tight text-gray-900">
    Ramz <span class="font-black text-blue-700">Library</span>
  </a>
</div>

	<div class="hidden md:flex items-center gap-8">
		<a href="/" @class([
			'font-medium transition-colors',
			'text-blue-700' => request()->is('/'),
			'text-gray-600 hover:text-blue-700' => !request()->is('/')
		])>Home</a>

		<a href="/books" @class([
			'font-medium transition-colors',
			'text-blue-700' => request()->is('books*'),
			'text-gray-600 hover:text-blue-700' => !request()->is('books*')
		])>Books</a>

		<a href="/reads" @class([
			'font-medium transition-colors',
			'text-blue-700' => request()->is('reads*'),
			'text-gray-600 hover:text-blue-700' => !request()->is('reads*')
		])>Reads</a>

		<a href="/about" @class([
			'font-medium transition-colors',
			'text-blue-700' => request()->is('about*'),
			'text-gray-600 hover:text-blue-700' => !request()->is('about*')
		])>About</a>

		<a href="/#faq" class="text-gray-600 font-medium hover:text-blue-700 transition-colors">FAQ</a>
	</div>

    <div class="hidden md:flex items-center gap-4">
      <a href="/auth/register"
        class="px-5 py-2 border-2 transition-all duration-300 border-blue-700 text-blue-700 rounded-lg hover:border-transparent hover:bg-blue-800 hover:text-white font-semibold">
        Sign up
      </a>
      <a href="/auth/login"
        class="px-5 py-2 border-2 border-transparent transition-all duration-300 rounded-lg bg-blue-700 hover:bg-blue-800 font-semibold text-white shadow-md hover:shadow-lg">
        Login
      </a>
    </div>

    <div class="md:hidden flex items-center">
      <button id="mobile-menu-btn" class="text-gray-600 hover:text-blue-700 focus:outline-none p-2">
        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"
          xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
      </button>
    </div>
  </div>

  <div id="mobile-menu" class="md:hidden bg-white border-b border-gray-100 shadow-lg">
    <div class="flex flex-col px-4 pt-2 pb-6 gap-4">
      <a href="/" class="text-gray-600 font-medium hover:text-blue-700">Home</a>
      <a href="/books" class="text-gray-600 font-medium hover:text-blue-700">Books</a>
      <a href="/reads" class="text-gray-600 font-medium hover:text-blue-700">Reads</a>
      <a href="#about" class="text-gray-600 font-medium hover:text-blue-700">About</a>

      <div class="flex flex-col gap-3 mt-4 pt-4 border-t border-gray-100">
        <a href="/auth/login"
          class="w-full text-center px-5 py-2 rounded-lg bg-blue-700 font-semibold text-white shadow-md">
          Login
        </a>
        <a href="/auth/register"
          class="w-full text-center px-5 py-2 border-2 border-blue-700 text-blue-700 rounded-lg font-semibold">
          Sign up
        </a>
      </div>
    </div>
  </div>
</nav>
<script>

  const btn = document.getElementById('mobile-menu-btn');
  const menu = document.getElementById('mobile-menu');
  const navbar = document.getElementById('navbar');

  btn.addEventListener('click', () => {
    menu.classList.toggle('open');
  });

  window.addEventListener('scroll', () => {
    if (window.scrollY > 10) {

      navbar.classList.add('shadow-sm', 'border-gray-200');
      navbar.classList.remove('border-transparent');
    } else {

      navbar.classList.remove('shadow-sm', 'border-gray-200');
      navbar.classList.add('border-transparent');
    }
  });
</script>
