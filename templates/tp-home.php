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
            <h2 data-intro-title-html class="recipe-content__introduction-title">Introduction</h2>
            <div data-intro-paragraph-container class="recipe-content__introduction-text">
                <!-- Contenu texte pour la préparation de la recette -->
                <!-- utiliser les <p> pour chaque paragraphe -->
                <p data-intro-paragraph-html class="recipe-content__introduction-paragraph"></p>
            </div>
        </div>
        <div class="recipe-content__ingredients">
            <!-- Titre Section Ingredients -->
            <h2 data-ingredients-title-html class="recipe-content__ingredients-title">Ingrédients</h2>
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


        <!-- make a form input that will take the preparation time -->
        <input type="text" data-preparation name="preparationTime" placeholder="Preparation time">
        <!-- make a form input that will take the cooking time -->
        <input type="text" data-cooking name="cookingTime" placeholder="Cooking time">
        <!-- make a form input that will take the numbers of servings -->
        <input type="text" data-servings name="servings" placeholder="Servings">


        <!-- make a form input that will take the introduction title -->
        <input type="text" data-introduction-title name="introductionTitle" placeholder="Introduction title">
        <!-- make a form input that will take the introduction paragraph -->
        <input type="text" data-introduction-paragraph="0" name="introductionParagraph" placeholder="Introduction paragraph item">
        <!-- make a input button that will add another paragraph to the introduction paragraph-->
        <input type="button" value="Add another paragraph to the introduction" data-add-introduction-paragraph onclick="addIntroParagraph()">


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
    // make a script that will take the input value of the preparation time, cooking time and total servings. Then it will update the value of data-preparation-html with the value of the input
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

    // make a script that will take the input value of the introduction title and introduction paragraph. Then it will update the value of data-introduction-html with the value of the input
    var introductionTitle = document.querySelector('input[data-introduction-title]');
    var introTitleHtml = document.querySelector('[data-intro-title-html]');
    introductionTitle.addEventListener('input', function() {
        introTitleHtml.innerHTML = introductionTitle.value;
    });



    var introductionParagraphInputArr = document.querySelectorAll('[data-introduction-paragraph]');
    var introParagraphHtmlArr = document.querySelectorAll('[data-intro-paragraph-html]');
    var addParagraphButton = document.querySelector('[data-add-introduction-paragraph]');
    updateIntroParagraph(introductionParagraphInputArr, introParagraphHtmlArr);
    addParagraphButton.addEventListener('click', function() {
        introductionParagraphInputArr = document.querySelectorAll('input[data-introduction-paragraph]');
        updateIntroParagraph(introductionParagraphInputArr, introParagraphHtmlArr);
    });

    // add an event listener that will be triggered when the DOM inside the introductionParagraphContainer is modified


    function updateIntroParagraph(introductionParagraphInputArr, introParagraphHtmlArr) {
        introParagraphHtmlArr = document.querySelectorAll('[data-intro-paragraph-html]');
        introductionParagraphInputArr.forEach(function(introductionParagraphInput, index) {
            introductionParagraphInput.addEventListener('input', function() {
                console.log(introductionParagraphInput)
                introParagraphHtmlArr[index].innerHTML = introductionParagraphInput.value;
            });
        });
    }

    // make a script that will take the input value of the ingredients title and ingredients quantity and name. Then it will update the value of data-ingredients-html with the value of the input
    var ingredientsTitle = document.querySelector('input[data-ingredients-title]');
    var ingredientsTitleHtml = document.querySelector('[data-ingredients-title-html]');
    ingredientsTitle.addEventListener('input', function() {
        ingredientsTitleHtml.innerHTML = ingredientsTitle.value;
    });


    let introParagraphNum = 0;
    //make a script that will add another input to the introduction paragraph
    function addIntroParagraph() {
        var introParagraph = document.querySelectorAll("[data-introduction-paragraph]")[introParagraphNum];
        var newParagraph = document.createElement("input");
        introParagraphNum += 1;
        newParagraph.setAttribute("type", "text");
        newParagraph.setAttribute("name", `introductionParagraph-${introParagraphNum}`);
        newParagraph.setAttribute("placeholder", "Introduction paragraph item");
        newParagraph.setAttribute("data-introduction-paragraph", `${introParagraphNum}`);
        introParagraph.parentNode.insertBefore(newParagraph, introParagraph.nextSibling);

        //make a script that will add another <p data-introduction-paragraph> to the div data-intro-paragraph-container and update the value of data-intro-paragraph-html with the value of the input
        var introParagraphContainer = document.querySelector('[data-intro-paragraph-container]');
        var newParagraphHtml = document.createElement("p");
        newParagraphHtml.setAttribute("class", "recipe-content__introduction-paragraph");
        newParagraphHtml.setAttribute("data-intro-paragraph-html", "");
        introParagraphContainer.appendChild(newParagraphHtml);

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
    // make a script that will take the html content of data-html to a new text file and will open the text file in the browser
    var submit = document.querySelector('[data-submit]');
    submit.addEventListener('click', function() {
        //prevent the default action of the submit button
        event.preventDefault();
        var html = document.querySelector('[data-html]').innerHTML;
        var blob = new Blob([html], {
            type: "text/plain;charset=utf-8"
        });
        saveAs(blob, "recipe.html");
    });

    function saveAs(blob, fileName) {
        var url = URL.createObjectURL(blob);
        var link = document.createElement('a');
        link.href = url;
        link.download = fileName;
        link.click();
        setTimeout(function() {
            URL.revokeObjectURL(url);
        }, 100);
    }
</script>

<?php
// Load footer.php
get_footer(); ?>