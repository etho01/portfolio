    <!-- HEADER -->
    <header class="fixed w-full z-50 bg-gray-800 shadow-2xl border-b border-gray-700">
        <div class="flex items-center justify-between px-8 py-4">
            <div class="flex items-center cursor-pointer text-gray-100 hover:text-indigo-400 transition-colors duration-300">
                <div class="w-12 h-12 rounded-full overflow-hidden mr-4 bg-indigo-600">
                    <img src="https://i.postimg.cc/TwY74D31/profile-pic-8.png" alt="Nicolas Logo" class="w-full h-full object-cover">
                </div>
                <span class="text-lg uppercase font-bold tracking-wider">Nicolas</span>
            </div>
            <nav class="hidden md:block">
                <ul class="flex space-x-1">
                    <li><a href="#home" class="px-6 py-4 inline-block text-sm text-gray-200 uppercase tracking-wider font-bold hover:text-indigo-400 transition-colors duration-300">Accueil</a></li>
                    <li><a href="#about" class="px-6 py-4 inline-block text-sm text-gray-200 uppercase tracking-wider font-bold hover:text-indigo-400 transition-colors duration-300">À Propos</a></li>
                    <li><a href="#projects" class="px-6 py-4 inline-block text-sm text-gray-200 uppercase tracking-wider font-bold hover:text-indigo-400 transition-colors duration-300">Projets</a></li>
                    <li><a href="#contact" class="px-6 py-4 inline-block text-sm text-gray-200 uppercase tracking-wider font-bold hover:text-indigo-400 transition-colors duration-300">Contact</a></li>
                </ul>
            </nav>
            <button id="menuBtn" class="md:hidden w-8 h-8 cursor-pointer">
                <svg id="menuIcon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="w-full h-full">
                    <path fill="#ddd" d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/>
                </svg>
                <svg id="closeIcon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="w-full h-full hidden">
                    <path fill="#ddd" d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/>
                </svg>
            </button>
        </div>
        <div id="mobileMenu" class="hidden bg-gray-800 shadow-md border-t border-gray-700">
            <ul class="py-2">
                <li class="border-t border-b border-gray-700"><a href="#home" class="block px-8 py-4 text-sm text-gray-200 text-right uppercase tracking-widest font-bold hover:text-indigo-400 transition-colors duration-300">Accueil</a></li>
                <li class="border-b border-gray-700"><a href="#about" class="block px-8 py-4 text-sm text-gray-200 text-right uppercase tracking-widest font-bold hover:text-indigo-400 transition-colors duration-300">À Propos</a></li>
                <li class="border-b border-gray-700"><a href="#projects" class="block px-8 py-4 text-sm text-gray-200 text-right uppercase tracking-widest font-bold hover:text-indigo-400 transition-colors duration-300">Projets</a></li>
                <li class="border-b border-gray-700"><a href="#contact" class="block px-8 py-4 text-sm text-gray-200 text-right uppercase tracking-widest font-bold hover:text-indigo-400 transition-colors duration-300">Contact</a></li>
            </ul>
        </div>
    </header>