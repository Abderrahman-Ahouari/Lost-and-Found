<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un Article</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen p-6">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-lg">
        <h1 class="text-2xl font-bold text-center mb-6">Créer un Article</h1>

        <form>
            <!-- Titre -->
            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-medium mb-2">Titre</label>
                <input type="text" id="title" name="title" class="w-full p-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-300" placeholder="Entrez le titre..." required>
            </div>

            <!-- Description -->
            <div class="mb-4">
                <label for="description" class="block text-gray-700 font-medium mb-2">Description</label>
                <textarea id="description" name="description" class="w-full p-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-300" rows="4" placeholder="Entrez la description..." required></textarea>
            </div>

            <!-- Sélection de la catégorie -->
            <div class="mb-6">
                <label for="category" class="block text-gray-700 font-medium mb-2">Catégorie</label>
                <select id="category" name="category" class="w-full p-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-300">
                    <option value="sport">Sport</option>
                    <option value="sante">Santé</option>
                    <option value="voyage">Voyage</option>
                </select>
            </div>

            <!-- Bouton de soumission -->
            <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded-lg hover:bg-blue-600 transition duration-300">
                Enregistrer l'article
            </button>
        </form>
    </div>
</body>
</html>
