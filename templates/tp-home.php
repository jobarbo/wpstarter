<?php
/*
Template Name: Accueil
*/

// Load header.php
get_header(); ?>
<section data-html class="wysiwyg-content">
    <!-- Présentation du résumé de la recette -->
    <div class="recipe-content__overview">
        <ul class="recipe-content__overview-list">
            <!-- Temps de preparation -->
            <li class="recipe-content__overview-item">
                <h2 class="recipe-content__overview-title">Préparation</h2>
                <p data-preparation-html class="recipe-content__overview-text">10 min</p>
            </li>
            <!-- Temps de cuisson -->
            <li class="recipe-content__overview-item">
                <h2 class="recipe-content__overview-title">Cuisson</h2>
                <p data-cooking-html class="recipe-content__overview-text">20 min</p>
            </li>
            <!-- Nombre de portions -->
            <li class="recipe-content__overview-item">
                <h2 class="recipe-content__overview-title">Portions</h2>
                <p data-servings-html class="recipe-content__overview-text">4 personnes</p>
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
                    <!-- Quantité de l'ingrédient (va etre mis en emphase) --> <span class="recipe-content__ingredients-item-quantity">1 cuillère </span> <!-- Nom de l'ingrédient -->
                    <p class="recipe-content__ingredients-item-name">à soupe de vinaigre balsamique bio</p>
                </li>
                <li class="recipe-content__ingredients-item">
                    <!-- Quantité de l'ingrédient (va etre mis en emphase) --> <span class="recipe-content__ingredients-item-quantity">1/2 tasse </span> <!-- Nom de l'ingrédient -->
                    <p class="recipe-content__ingredients-item-name">de confiture de figue bio</p>
                </li>
                <li class="recipe-content__ingredients-item">
                    <!-- Quantité de l'ingrédient (va etre mis en emphase) --> <span class="recipe-content__ingredients-item-quantity">1 oignon </span> <!-- Nom de l'ingrédient -->
                    <p class="recipe-content__ingredients-item-name">blanc</p>
                </li>
                <li class="recipe-content__ingredients-item">
                    <!-- Quantité de l'ingrédient (va etre mis en emphase) --> <span class="recipe-content__ingredients-item-quantity">1 cuillère </span> <!-- Nom de l'ingrédient -->
                    <p class="recipe-content__ingredients-item-name">à soupe de miel</p>
                </li>
                <li class="recipe-content__ingredients-item">
                    <!-- Quantité de l'ingrédient (va etre mis en emphase) --> <span class="recipe-content__ingredients-item-quantity">1 cuillère </span> <!-- Nom de l'ingrédient -->
                    <p class="recipe-content__ingredients-item-name">à soupe de moutarde</p>
                </li>
                <li class="recipe-content__ingredients-item">
                    <!-- Quantité de l'ingrédient (va etre mis en emphase) --> <span class="recipe-content__ingredients-item-quantity">4 cuisses </span> <!-- Nom de l'ingrédient -->
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
</section>
<section class="wysiwyf-form">
    <!-- make a form that will take an html file -->
    <form class="wysiwyf" action="tp-home.php" method="post">
        <!-- make a file field that will take an html file -->
        <input type="file" data-html-upload name="htmlFile" placeholder="HTML file">

        <!-- make a form input that will take the preparation time -->
        <input type="text" data-preparation name="preparationTime" placeholder="Preparation time">
        <!-- make a form input that will take the cooking time -->
        <input type="text" data-cooking name="cookingTime" placeholder="Cooking time">
        <!-- make a form input that will take the numbers of servings -->
        <input type="text" data-servings name="servings" placeholder="Servings">


        <!-- make a form input that will take the introduction title -->
        <input type="text" data-introduction-title name="introductionTitle" placeholder="Introduction title">
        <!-- make a form input that will take the introduction paragraph -->
        <input type="text" data-introduction-paragraph name="introductionParagraph" placeholder="Introduction paragraph item">
        <!-- make a input button that will add another paragraph to the introduction paragraph-->
        <input type="button" value="Add another paragraph to the introduction" onclick="addIntroParagraph()">


        <!-- make a form input that will take the ingredients title -->
        <input type="text" data-ingredients-title name="ingredientsTitle" placeholder="Ingredients title">
        <!-- make a fieldset that will group the ingredients quantity and name -->
        <fieldset data-ingredients-fieldset name="ingredients">
            <!-- make a form input that will take the ingredients quantity -->
            <input data-ingredients-qty type="text" name="ingredientsQuantity" placeholder="Ingredients quantity">
            <!-- make a form input that will take the ingredients name -->
            <input data-ingredients-name type="text" name="ingredientsName" placeholder="Ingredients name">
        </fieldset>
        <!-- make a form button that will add another quantity and name to the Ingredients list-->
        <input type="button" value="Add another ingredient" onclick="addIngredient()">


        <!-- make a form input that will take the preparation title -->
        <input type="text" data-preparation-title name="preparationTitle" placeholder="Preparation title">
        <!-- make a form input that will take the preparation item paragraph -->
        <input data-preparation-paragraph type="text" name="preparationParagraph" placeholder="Preparation paragraph item">
        <!-- make a form button that will add another item to the preparation list -->
        <input type="button" value="Add another step" onclick="addPreparationStep()">

        <!-- make a submit button -->
        <input data-submit type="submit" value="Envoyer">
    </form>
</section>


<script>
    // make a script that will take the input value of the preparation time and cooking time and will update the value of data-preparation-html with the value of the input
    var preparationTime = document.querySelector('input[data-preparation]');
    var cookingTime = document.querySelector('input[data-cooking]');
    var servings = document.querySelector('input[data-servings]');
    var preparationHtml = document.querySelector('[data-preparation-html]');
    var cookingHtml = document.querySelector('[data-cooking-html]');
    var servingsHtml = document.querySelector('[data-servings-html]');
    preparationTime.addEventListener('input', function() {
        preparationHtml.innerHTML = preparationTime.value;
    });
    cookingTime.addEventListener('input', function() {
        cookingHtml.innerHTML = cookingTime.value;
    });
    servings.addEventListener('input', function() {
        servingsHtml.innerHTML = servings.value;
    });

    //make a script that will add another input to the introduction paragraph
    function addIntroParagraph() {
        var introParagraph = document.getElementsByName("introductionParagraph")[0];
        var newParagraph = document.createElement("input");
        newParagraph.setAttribute("type", "text");
        newParagraph.setAttribute("name", "introductionParagraph");
        newParagraph.setAttribute("placeholder", "Introduction paragraph item");
        introParagraph.parentNode.insertBefore(newParagraph, introParagraph.nextSibling);
    }
    //make a script that will add another input fieldset after the previous one
    function addIngredient() {
        var ingredients = document.getElementsByName("ingredients")[0];
        var newFieldset = document.createElement("fieldset");
        newFieldset.setAttribute("name", "ingredients");
        var newQuantity = document.createElement("input");
        newQuantity.setAttribute("type", "text");
        newQuantity.setAttribute("name", "ingredientsQuantity");
        newQuantity.setAttribute("placeholder", "Ingredients quantity");
        var newName = document.createElement("input");
        newName.setAttribute("type", "text");
        newName.setAttribute("name", "ingredientsName");
        newName.setAttribute("placeholder", "Ingredients name");
        newFieldset.appendChild(newQuantity);
        newFieldset.appendChild(newName);
        ingredients.parentNode.insertBefore(newFieldset, ingredients.nextSibling);
    }
    //make a script that will add another input step to the preparation list
    function addPreparationStep() {
        var preparation = document.getElementsByName("preparationParagraph")[0];
        var newStep = document.createElement("input");
        newStep.setAttribute("type", "text");
        newStep.setAttribute("name", "preparationParagraph");
        newStep.setAttribute("placeholder", "Preparation paragraph item");
        preparation.parentNode.insertBefore(newStep, preparation.nextSibling);
    }
</script>

<?php
// Load footer.php
get_footer(); ?>