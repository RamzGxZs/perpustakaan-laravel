<x-layouts.main.app title="Ramz Libray | about me">

	<section id="about"
  class="w-full py-16 lg:py-24 bg-gray-50 rounded-[2.5rem] my-16 border border-gray-100">
  <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-16 max-w-6xl mx-auto">

    <div class="w-full lg:w-5/12 flex justify-center">
      <div class="relative w-64 h-64 md:w-80 md:h-80 group">
        <div
          class="absolute inset-0 bg-blue-600 rounded-full blur-3xl opacity-20 group-hover:opacity-30 transition-opacity duration-500">
        </div>

        <div class="absolute inset-4 bg-white border-4 border-white rounded-full z-10 overflow-hidden shadow-xl">
          <img src="https://ui-avatars.com/api/?name=Ramz&background=eff6ff&color=2563eb&size=512"
            alt="Ramz Profile Picture"
            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" loading="lazy">
        </div>

        <div
          class="absolute bottom-4 right-4 z-20 bg-white px-4 py-2 rounded-full shadow-lg border border-gray-100 flex items-center gap-2">
          <span class="relative flex h-3 w-3">
            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
            <span class="relative inline-flex rounded-full h-3 w-3 bg-green-500"></span>
          </span>
          <span class="text-sm font-bold text-gray-700">Open to Work</span>
        </div>
      </div>
    </div>

    <div class="w-full lg:w-7/12 space-y-6 text-center lg:text-left">
      <div class="inline-block px-4 py-1.5 bg-blue-100 text-blue-700 font-bold rounded-full text-sm tracking-wide">
        👨‍💻 Developer & Bookworm
      </div>

      <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 leading-tight">
        Hi, I'm <span class="text-blue-600">Ramz</span>. <br> The mind behind the library.
      </h2>

      <p class="text-gray-500 text-lg leading-relaxed">
        I built Ramz Library out of a simple frustration: finding well-structured reading materials online was too
        scattered. As a Full-Stack Developer, I wanted to create a platform that feels less like a messy database and
        more like a quiet, comfortable reading room.
      </p>

      <p class="text-gray-500 text-lg leading-relaxed">
        When I'm not writing code or debugging complex systems, you can usually find me reading sci-fi novels or
        exploring new web technologies. I believe knowledge should be accessible, beautifully presented, and free.
      </p>

      <div class="flex flex-wrap items-center justify-center lg:justify-start gap-4 pt-4">
        <a href="mailto:hello@ramz.com"
          class="flex items-center gap-2 px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition-all shadow-md hover:shadow-lg hover:-translate-y-1">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
          </svg>
          Contact Me
        </a>
        <a href="https://github.com" target="_blank"
          class="flex items-center gap-2 px-6 py-3 border-2 border-gray-200 text-gray-700 font-semibold rounded-lg hover:border-gray-900 hover:text-gray-900 transition-all bg-white hover:-translate-y-1">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
            <path
              d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
          </svg>
          GitHub
        </a>
      </div>
    </div>

  </div>
</section>
</x-layouts.main.app>
