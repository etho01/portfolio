
<x-app
    title="Nicolas - Développeur Web"
    description="Portfolio de Nicolas, un développeur web frontend spécialisé dans la création de sites et applications web performants et esthétiques."
>
    <!-- HERO SECTION -->
    <section id="home" class="relative min-h-screen flex items-center justify-center text-white bg-gradient-to-r from-indigo-600/80 to-purple-600/80" style="background-image: linear-gradient(to right, rgba(102, 126, 234, 0.8), rgba(118, 75, 162, 0.8)), url('https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=1920'); background-position: center; background-size: cover;">
        <div class="max-w-6xl w-11/12 text-center">
            <h1 class="text-5xl md:text-6xl uppercase tracking-widest font-bold mb-6">SALUT, JE SUIS NICOLAS</h1>
            <div class="mt-6 max-w-4xl mx-auto">
                <p class="text-xl md:text-2xl text-gray-100 leading-relaxed">
                    Un Développeur Web axé sur le développement Frontend, créant et gérant des sites Web et des applications Web qui contribuent au succès du produit global
                </p>
            </div>
            <div class="mt-12">
                <a href="#projects" class="inline-block px-16 py-4 text-lg uppercase tracking-widest font-bold bg-indigo-600 text-white rounded shadow-xl hover:-translate-y-1 transition-transform duration-300">PROJETS</a>
            </div>
        </div>
        
        <!-- Social Links -->
        <div class="hidden md:block absolute left-0 top-1/2 transform -translate-y-1/2 border-2 border-gray-200">
            <a href="https://linkedin.com" target="_blank" class="block w-16 p-3 border-b-2 border-gray-200 hover:bg-white/10 transition-colors duration-300">
                <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'%3E%3Cpath fill='%23fff' d='M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z'/%3E%3C/svg%3E" alt="LinkedIn" class="w-full">
            </a>
            <a href="https://github.com" target="_blank" class="block w-16 p-3 border-b-2 border-gray-200 hover:bg-white/10 transition-colors duration-300">
                <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'%3E%3Cpath fill='%23fff' d='M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z'/%3E%3C/svg%3E" alt="GitHub" class="w-full">
            </a>
            <a href="https://twitter.com" target="_blank" class="block w-16 p-3 hover:bg-white/10 transition-colors duration-300">
                <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'%3E%3Cpath fill='%23fff' d='M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z'/%3E%3C/svg%3E" alt="Twitter" class="w-full">
            </a>
        </div>

        <!-- Mouse Scroll -->
        <div class="absolute bottom-12 left-1/2 transform -translate-x-1/2">
            <div class="w-6 h-10 border-2 border-white rounded-full relative overflow-hidden">
                <div class="w-1 h-1 bg-white rounded-full absolute top-2 left-1/2 transform -translate-x-1/2 animate-bounce"></div>
            </div>
        </div>
    </section>

    <!-- ABOUT SECTION -->
    <section id="about" class="py-24 md:py-32 bg-gray-800">
        <div class="max-w-7xl mx-auto px-8">
            <h2 class="text-center mb-24">
                <span class="block text-3xl md:text-4xl uppercase tracking-widest font-bold mb-8 relative pb-8 text-gray-100">
                    À Propos de Moi
                    <span class="absolute left-1/2 transform -translate-x-1/2 bottom-0 w-12 h-1 bg-indigo-600 rounded"></span>
                </span>
                <span class="block text-lg md:text-xl text-gray-400 font-medium max-w-4xl mx-auto leading-relaxed">
                    Vous trouverez ici plus d'informations sur moi, ce que je fais et mes compétences actuelles principalement en termes de programmation et de technologie
                </span>
            </h2>
            <div class="grid md:grid-cols-2 gap-16 md:gap-20">
                <div class="pr-0 md:pr-8">
                    <h3 class="text-2xl md:text-3xl font-bold mb-6 text-gray-100">Faites connaissance !</h3>
                    <div class="space-y-4 text-lg text-gray-300 max-w-2xl leading-relaxed">
                        <p>
                            Je suis un <strong class="text-gray-100">Développeur Web Frontend</strong> qui construit et gère le Frontend de sites Web et d'applications Web qui contribuent au succès du produit global. Découvrez quelques-uns de mes travaux dans la section Projets.
                        </p>
                        <p>
                            J'aime aussi partager du contenu lié aux choses que j'ai apprises au fil des ans dans le développement Web afin que cela puisse aider d'autres personnes de la communauté Dev. N'hésitez pas à vous connecter ou à me suivre sur mes réseaux sociaux où je publie du contenu utile lié au développement Web et à la programmation.
                        </p>
                        <p>
                            Je suis ouvert aux <strong class="text-gray-100">opportunités d'emploi</strong> où je peux contribuer, apprendre et grandir. Si vous avez une bonne opportunité qui correspond à mes compétences et à mon expérience, n'hésitez pas à me contacter.
                        </p>
                    </div>
                    <a href="#contact" class="inline-block mt-8 px-12 py-4 text-sm uppercase tracking-widest font-bold bg-indigo-600 text-white rounded shadow-lg hover:-translate-y-1 hover:bg-indigo-500 transition-all duration-300">Contact</a>
                </div>
                <div>
                    <h3 class="text-2xl md:text-3xl font-bold mb-6 text-gray-100">Mes Compétences</h3>
                    <div class="flex flex-wrap gap-4">
                        <div class="px-5 py-3 bg-gray-700 rounded text-base font-semibold text-gray-200">HTML</div>
                        <div class="px-5 py-3 bg-gray-700 rounded text-base font-semibold text-gray-200">CSS</div>
                        <div class="px-5 py-3 bg-gray-700 rounded text-base font-semibold text-gray-200">JavaScript</div>
                        <div class="px-5 py-3 bg-gray-700 rounded text-base font-semibold text-gray-200">React</div>
                        <div class="px-5 py-3 bg-gray-700 rounded text-base font-semibold text-gray-200">Vue.js</div>
                        <div class="px-5 py-3 bg-gray-700 rounded text-base font-semibold text-gray-200">PHP</div>
                        <div class="px-5 py-3 bg-gray-700 rounded text-base font-semibold text-gray-200">Laravel</div>
                        <div class="px-5 py-3 bg-gray-700 rounded text-base font-semibold text-gray-200">SASS</div>
                        <div class="px-5 py-3 bg-gray-700 rounded text-base font-semibold text-gray-200">GIT</div>
                        <div class="px-5 py-3 bg-gray-700 rounded text-base font-semibold text-gray-200">Github</div>
                        <div class="px-5 py-3 bg-gray-700 rounded text-base font-semibold text-gray-200">Responsive Design</div>
                        <div class="px-5 py-3 bg-gray-700 rounded text-base font-semibold text-gray-200">SEO</div>
                        <div class="px-5 py-3 bg-gray-700 rounded text-base font-semibold text-gray-200">Terminal</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PROJECTS SECTION -->
    <section id="projects" class="py-24 md:py-32 bg-gray-900">
        <div class="max-w-7xl mx-auto px-8">
            <h2 class="text-center mb-28">
                <span class="block text-3xl md:text-4xl uppercase tracking-widest font-bold mb-8 relative pb-8 text-gray-100">
                    Projets
                    <span class="absolute left-1/2 transform -translate-x-1/2 bottom-0 w-12 h-1 bg-indigo-600 rounded"></span>
                </span>
                <span class="block text-lg md:text-xl text-gray-400 font-medium max-w-4xl mx-auto leading-relaxed">
                    Vous trouverez ici quelques projets personnels et clients que j'ai créés, chaque projet contenant sa propre étude de cas
                </span>
            </h2>

            <div class="space-y-28">
                <!-- Projet 1 -->
                <div class="grid md:grid-cols-[1.5fr_1fr] gap-12 items-center">
                    <div class="overflow-hidden">
                        <img src="https://via.placeholder.com/800x600/667eea/ffffff?text=Projet+Portfolio" alt="Projet Screenshot" class="w-full block object-cover rounded shadow-xl" loading="lazy">
                    </div>
                    <div class="py-4 flex flex-col justify-center items-start">
                        <h3 class="text-2xl md:text-3xl font-bold mb-4 text-gray-100">Portfolio Personnel</h3>
                        <p class="text-lg text-gray-300 max-w-2xl leading-relaxed mb-6">
                            Portfolio Personnel est un projet Open-Source réussi que j'ai créé et qui a été présenté sur certains des plus grands sites technologiques et utilisé par des milliers de développeurs dans le monde entier.
                        </p>
                        <a href="#" class="inline-block px-12 py-4 text-sm uppercase tracking-widest font-bold bg-indigo-600 text-white rounded shadow-lg hover:-translate-y-1 hover:bg-indigo-500 transition-all duration-300">Voir le Projet</a>
                    </div>
                </div>

                <!-- Projet 2 -->
                <div class="grid md:grid-cols-[1.5fr_1fr] gap-12 items-center">
                    <div class="overflow-hidden">
                        <img src="https://via.placeholder.com/800x600/f093fb/ffffff?text=Application+Web" alt="Projet Screenshot" class="w-full block object-cover rounded shadow-xl" loading="lazy">
                    </div>
                    <div class="py-4 flex flex-col justify-center items-start">
                        <h3 class="text-2xl md:text-3xl font-bold mb-4 text-gray-100">Application Web E-commerce</h3>
                        <p class="text-lg text-gray-300 max-w-2xl leading-relaxed mb-6">
                            Une application e-commerce complète avec gestion des produits, panier d'achat et système de paiement sécurisé, développée avec Laravel et Vue.js.
                        </p>
                        <a href="#" class="inline-block px-12 py-4 text-sm uppercase tracking-widest font-bold bg-indigo-600 text-white rounded shadow-lg hover:-translate-y-1 hover:bg-indigo-500 transition-all duration-300">Voir le Projet</a>
                    </div>
                </div>

                <!-- Projet 3 -->
                <div class="grid md:grid-cols-[1.5fr_1fr] gap-12 items-center">
                    <div class="overflow-hidden">
                        <img src="https://via.placeholder.com/800x600/4facfe/ffffff?text=Site+Vitrine" alt="Projet Screenshot" class="w-full block object-cover rounded shadow-xl" loading="lazy">
                    </div>
                    <div class="py-4 flex flex-col justify-center items-start">
                        <h3 class="text-2xl md:text-3xl font-bold mb-4 text-gray-100">Site Vitrine Restaurant</h3>
                        <p class="text-lg text-gray-300 max-w-2xl leading-relaxed mb-6">
                            Un template web que j'ai créé ciblant l'industrie de la restauration que tout le monde peut utiliser pour présenter son entreprise en ligne.
                        </p>
                        <a href="#" class="inline-block px-12 py-4 text-sm uppercase tracking-widest font-bold bg-indigo-600 text-white rounded shadow-lg hover:-translate-y-1 hover:bg-indigo-500 transition-all duration-300">Voir le Projet</a>
                    </div>
                </div>

                <!-- Projet 4 -->
                <div class="grid md:grid-cols-[1.5fr_1fr] gap-12 items-center">
                    <div class="overflow-hidden">
                        <img src="https://via.placeholder.com/800x600/00f2fe/ffffff?text=Dashboard" alt="Projet Screenshot" class="w-full block object-cover rounded shadow-xl" loading="lazy">
                    </div>
                    <div class="py-4 flex flex-col justify-center items-start">
                        <h3 class="text-2xl md:text-3xl font-bold mb-4 text-gray-100">Dashboard Analytique</h3>
                        <p class="text-lg text-gray-300 max-w-2xl leading-relaxed mb-6">
                            Un dashboard interactif pour visualiser des données analytiques en temps réel avec des graphiques et statistiques, construit avec React et D3.js.
                        </p>
                        <a href="#" class="inline-block px-12 py-4 text-sm uppercase tracking-widest font-bold bg-indigo-600 text-white rounded shadow-lg hover:-translate-y-1 hover:bg-indigo-500 transition-all duration-300">Voir le Projet</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT SECTION -->
    <section id="contact" class="py-24 md:py-32 bg-gradient-to-r from-indigo-600/80 to-purple-600/80" style="background-image: linear-gradient(to right, rgba(102, 126, 234, 0.8), rgba(118, 75, 162, 0.8)), url('https://images.unsplash.com/photo-1423666639041-f56000c27a9a?w=1920'); background-size: cover; background-position: center;">
        <div class="max-w-7xl mx-auto px-8">
            <h2 class="text-center mb-24">
                <span class="block text-3xl md:text-4xl uppercase tracking-widest font-bold mb-8 text-white relative pb-8">
                    Contact
                    <span class="absolute left-1/2 transform -translate-x-1/2 bottom-0 w-12 h-1 bg-indigo-600 rounded"></span>
                </span>
                <span class="block text-lg md:text-xl text-gray-100 font-medium max-w-4xl mx-auto leading-relaxed">
                    N'hésitez pas à me contacter en soumettant le formulaire ci-dessous et je vous répondrai dans les plus brefs délais
                </span>
            </h2>
            <div class="bg-gray-800 shadow-2xl rounded p-8 md:p-12 mt-12 max-w-4xl w-11/12 mx-auto border border-gray-700">
                <form id="contactForm" action="#" class="space-y-8">
                    <div>
                        <label class="block text-gray-200 text-sm tracking-wider font-bold mb-2" for="name">Nom</label>
                        <input required placeholder="Entrez votre nom" type="text" class="w-full px-5 py-4 text-gray-200 bg-gray-700 border border-gray-600 rounded text-base tracking-wide font-semibold focus:outline-none focus:border-indigo-500" name="name" id="name">
                    </div>
                    <div>
                        <label class="block text-gray-200 text-sm tracking-wider font-bold mb-2" for="email">Email</label>
                        <input required placeholder="Entrez votre email" type="email" class="w-full px-5 py-4 text-gray-200 bg-gray-700 border border-gray-600 rounded text-base tracking-wide font-semibold focus:outline-none focus:border-indigo-500" name="email" id="email">
                    </div>
                    <div>
                        <label class="block text-gray-200 text-sm tracking-wider font-bold mb-2" for="message">Message</label>
                        <textarea required cols="30" rows="10" class="w-full px-5 py-4 text-gray-200 bg-gray-700 border border-gray-600 rounded text-base tracking-wide font-semibold focus:outline-none focus:border-indigo-500" placeholder="Entrez votre message" name="message" id="message"></textarea>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="px-16 py-4 text-sm uppercase tracking-widest font-bold bg-indigo-600 text-white rounded shadow-lg hover:-translate-y-1 hover:bg-indigo-500 transition-all duration-300">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    </section>



</x-app>