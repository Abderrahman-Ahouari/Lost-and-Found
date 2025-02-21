<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Articles</title>
    <!-- Intégration de Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
    <div class="container mx-auto">
        <!-- Titre et Barre de recherche -->
        <div class="flex flex-col md:flex-row justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-center md:text-left">Liste des Articles</h1>
            <input type="text" placeholder="Rechercher un article..." class="mt-4 md:mt-0 p-2 border border-gray-300 rounded-lg w-full md:w-1/3">
        </div>

        <!-- Section des boutons -->
        <div class="flex justify-center md:justify-start gap-4 mb-6">
            <button class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition duration-300">Bouton 1</button>
            <button class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition duration-300">Bouton 2</button>
            <button class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600 transition duration-300">Bouton 3</button>
        </div>

        <!-- Grille de cartes -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <!-- Carte 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://via.placeholder.com/300x200" alt="Article 1" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h2 class="text-xl font-semibold mb-2">Titre de l'article 1</h2>
                    <p class="text-gray-600 mb-4">Description courte de l'article 1. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a href="#" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition duration-300">Voir plus</a>
                </div>
            </div>

            <!-- Carte 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://via.placeholder.com/300x200" alt="Article 2" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h2 class="text-xl font-semibold mb-2">Titre de l'article 2</h2>
                    <p class="text-gray-600 mb-4">Description courte de l'article 2. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a href="#" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition duration-300">Voir plus</a>
                </div>
            </div>

            <!-- Carte 3 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://via.placeholder.com/300x200" alt="Article 3" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h2 class="text-xl font-semibold mb-2">Titre de l'article 3</h2>
                    <p class="text-gray-600 mb-4">Description courte de l'article 3. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a href="#" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition duration-300">Voir plus</a>
                </div>
            </div>

            <!-- Carte 4 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://via.placeholder.com/300x200" alt="Article 4" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h2 class="text-xl font-semibold mb-2">Titre de l'article 4</h2>
                    <p class="text-gray-600 mb-4">Description courte de l'article 4. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a href="#" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition duration-300">Voir plus</a>
                </div>
            </div>

            <!-- Répétez les cartes 5 à 8 si nécessaire -->
        </div>
    </div>
</body>
</html>
