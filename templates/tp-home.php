<?php
/*
Template Name: Accueil
*/

// Load header.php
get_header(); ?>
<section class="recipe">
    <div class="recipe__header recipe-header">
        <div class="recipe-header__background-container">
            <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="Recette de Poulet" class="recipe-header__background-image" />
        </div>
        <div class="recipe-header__container">
            <div class="recipe-header__content-container">
                <div class="recipe-header__title-container">
                    <h1 class="recipe-header__title">Recette de poulet</h1>
                </div>
                <div class="recipe-header__meta-container">
                    <span class="recipe-header__meta-item"> par: <a href="/blogs/nouvelles/recette-de-poulet-test">Jonathan Barbeau</a></span>
                    <span class="recipe-header__meta-item">Publié le: 07/01/22</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Contenu principal de la recette -->
    <div class="recipe__content recipe-content">
        <div class="recipe-content__container">
            <!-- Présentation du résumé de la recette -->
            <div class="recipe-content__overview">
                <ul class="recipe-content__overview-list">
                    <!-- Temps de preparation -->
                    <li class="recipe-content__overview-item">
                        <h2 class="recipe-content__overview-title">Préparation</h2>
                        <p class="recipe-content__overview-text">10 min</p>
                    </li>
                    <!-- Temps de cuisson -->
                    <li class="recipe-content__overview-item">
                        <h2 class="recipe-content__overview-title">Cuisson</h2>
                        <p class="recipe-content__overview-text">20 min</p>
                    </li>
                    <!-- Nombre de portions -->
                    <li class="recipe-content__overview-item">
                        <h2 class="recipe-content__overview-title">Portions</h2>
                        <p class="recipe-content__overview-text">4 personnes</p>
                    </li>
                </ul>
            </div>
            <div class="recipe-content__main">
                <!-- Liste des ingrédients pour la recettes -->
                <div class="recipe-content__introduction">
                    <!-- Titre Section Ingredients -->
                    <h2 class="recipe-content__introduction-title">Introduction</h2>
                    <div class="recipe-content__introduction-text">
                        <!-- Contenu texte pour la préparation de la recette -->
                        <!-- utiliser les <p> pour chaque paragraphe -->
                        <p class="recipe-content__introduction-paragraph">Au charbon ou au gaz, les recettes de l'Entrepôt Italien célèbre l’été et la cuisine à l’extérieur avec nos astuces et nos idées de recettes tout au long de l'année !</p>
                        <p class="recipe-content__introduction-paragraph">Des brochettes savoureuses, aux décadentes côtes de bœufs, en passant par une foule de conseils pratiques et d’inspirations pour réussir vos cuissons sur le gril, il y en a pour tous les goûts!</p>
                        <p class="recipe-content__introduction-paragraph">Aujourd'hui, on vous propose un poulet enrobé à la figue, pour mixer sucré et salé ! 👌</p>
                        <p class="recipe-content__introduction-paragraph">Pas besoin d'être le maître de barbecue, on vous dit tout sans tabou ! 😁</p>
                    </div>
                </div>

                <div class="recipe-content__ingredients">
                    <!-- Titre Section Ingredients -->
                    <h2 class="recipe-content__ingredients-title">Ingrédients</h2>
                    <!-- Liste des ingrédients -->
                    <ul class="recipe-content__ingredients-list">
                        <li class="recipe-content__ingredients-item">
                            <!-- Quantité de l'ingrédient (va etre mis en emphase) -->
                            <span class="recipe-content__ingredients-item-quantity">1 cuillère </span>
                            <!-- Nom de l'ingrédient -->
                            <p class="recipe-content__ingredients-item-name">à soupe de vinaigre balsamique bio</p>
                        </li>
                        <li class="recipe-content__ingredients-item">
                            <!-- Quantité de l'ingrédient (va etre mis en emphase) -->
                            <span class="recipe-content__ingredients-item-quantity">1/2 tasse </span>
                            <!-- Nom de l'ingrédient -->
                            <p class="recipe-content__ingredients-item-name">de confiture de figue bio</p>
                        </li>
                        <li class="recipe-content__ingredients-item">
                            <!-- Quantité de l'ingrédient (va etre mis en emphase) -->
                            <span class="recipe-content__ingredients-item-quantity">1 oignon </span>
                            <!-- Nom de l'ingrédient -->
                            <p class="recipe-content__ingredients-item-name">blanc</p>
                        </li>
                        <li class="recipe-content__ingredients-item">
                            <!-- Quantité de l'ingrédient (va etre mis en emphase) -->
                            <span class="recipe-content__ingredients-item-quantity">1 cuillère </span>
                            <!-- Nom de l'ingrédient -->
                            <p class="recipe-content__ingredients-item-name">à soupe de miel</p>
                        </li>
                        <li class="recipe-content__ingredients-item">
                            <!-- Quantité de l'ingrédient (va etre mis en emphase) -->
                            <span class="recipe-content__ingredients-item-quantity">1 cuillère </span>
                            <!-- Nom de l'ingrédient -->
                            <p class="recipe-content__ingredients-item-name">à soupe de moutarde</p>
                        </li>
                        <li class="recipe-content__ingredients-item">
                            <!-- Quantité de l'ingrédient (va etre mis en emphase) -->
                            <span class="recipe-content__ingredients-item-quantity">4 cuisses </span>
                            <!-- Nom de l'ingrédient -->
                            <p class="recipe-content__ingredients-item-name">de poulets</p>
                        </li>
                    </ul>
                </div>
                <!-- Contenu texte pour la préparation de la recette -->
                <div class="recipe-content__preparation">
                    <h2 class="recipe-content__preparation-title">Préparation</h2>

                    <ul class="recipe-content__preparation-list">
                        <li class="recipe-content__preparation-item">
                            <p>Dans un premier temps, préchauffer le four à 190 degrés et allumer votre barbecue pour les cuisses de poulets.</p>
                        </li>
                        <li class="recipe-content__preparation-item">
                            <p>Dans un bol, mélanger la confiture de figue avec le miel, rajouter la moutarde et le vinaigre balsamique.</p>
                        </li>
                        <li class="recipe-content__preparation-item">
                            <p>Étaler du papier parchemin dans un plat allant au four et étalez les oignons.</p>
                        </li>
                        <li class="recipe-content__preparation-item">
                            <p>Mettez les cuisses de poulet à cuire sur votre barbecue chaud 10 min chaque côté.</p>
                        </li>
                        <li class="recipe-content__preparation-item">
                            <p>Une fois le poulet cuit, verser le mélange de confiture sur le poulet de façon à bien le recouvrir.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
// Load footer.php
get_footer(); ?>