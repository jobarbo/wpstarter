<?php
/*
Template Name: Accueil
*/

// Load header.php
get_header(); ?>

<section data-html class="wysiwyg-content">
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Recipe",
            "author": "Jonathan Barbeau",
            "cookTime": "PT10M",
            "prepTime": "PT20M",
            "totalTime": "PT30M",
            "datePublished": "2009-05-08",
            "image": "bananabread.jpg",
            "name": "Recette de poulet",
            "recipeIngredient": [
                "3 or 4 ripe bananas, smashed",
                "1 egg",
                "3/4 cup of sugar"
            ],
            "step": [{
                "@type": "HowToSection",
                "name": "Etapes de preparations",
                "position": "1",
                "itemListElement": [{
                        "@type": "HowToStep",
                        "position": "1",
                        "text": "Ajouter les epices"
                    },
                    {
                        "@type": "HowToStep",
                        "position": "2",
                        "text": "Ajouter la viande"
                    }
                ]
            }],
            "recipeInstructions": "Preheat the oven to 350 degrees. Mix in the ingredients in a bowl. Add the flour last. Pour the mixture into a loaf pan and bake for one hour."
        }
    </script>
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
            <ul data-ingredients-container class="recipe-content__ingredients-list">
                <li data-ingredients-item-html class="recipe-content__ingredients-item">
                    <!-- Quantité de l'ingrédient (va etre mis en emphase) --> <span data-ingredients-qty-html class="recipe-content__ingredients-item-quantity">1 cuillère </span> <!-- Nom de l'ingrédient -->
                    <p data-ingredients-name-html class="recipe-content__ingredients-item-name">à soupe de vinaigre balsamique bio</p>
                </li>
            </ul>
        </div>
        <!-- Contenu texte pour la préparation de la recette -->
        <div class="recipe-content__preparation">
            <h2 data-preparation-title-html class="recipe-content__preparation-title">Préparation</h2>
            <ul data-preparation-container class="recipe-content__preparation-list">
                <li data-preparation-step-html data-preparation-container class="recipe-content__preparation-item">
                    <p data-preparation-paragraph-html class="recipe-content__preparation-text"></p>
                </li>
            </ul>
        </div>
    </div>
</section>
<section class="wysiwyf-form">
    <!-- make a form that will take an html file -->
    <form class="wysiwyf" action="tp-home.php" method="post">


        <!-- make a form input that will take the preparation time -->
        <input type="text" data-preparation name="preparationTime" placeholder="Le temps de preparation">
        <!-- make a form input that will take the cooking time -->
        <input type="text" data-cooking name="cookingTime" placeholder="Le temps de cuisson">
        <!-- make a form input that will take the numbers of servings -->
        <input type="text" data-servings name="servings" placeholder="Le nombre de portions">


        <!-- make a form input that will take the introduction title -->
        <input type="text" data-introduction-title name="introductionTitle" placeholder="Le titre de la section Introduction">
        <!-- make a form input that will take the introduction paragraph -->
        <input type="text" data-introduction-paragraph="0" name="introductionParagraph" placeholder="Modifier le paragraphe">
        <!-- make a input button that will add another paragraph to the introduction paragraph-->
        <input type="button" value="Add another paragraph to the introduction" data-add-introduction-paragraph onclick="addIntroParagraph()">


        <!-- make a form input that will take the ingredients title -->
        <input type="text" data-ingredients-title name="ingredientsTitle" placeholder="Le titre de la section ingrédients">
        <!-- make a fieldset that will group the ingredients quantity and name -->
        <fieldset data-ingredients-fieldset="0" name="ingredients">
            <!-- make a form input that will take the ingredients quantity -->
            <input data-ingredients-qty="0" type="text" name="ingredientsQuantity" placeholder="La quantité d'ingredients">
            <!-- make a form input that will take the ingredients name -->
            <input data-ingredients-name="0" type="text" name="ingredientsName" placeholder="Le nom et la description">
        </fieldset>
        <!-- make a form button that will add another quantity and name to the Ingredients list-->
        <input type="button" data-add-ingredients value="Add another ingredient" onclick="addIngredient()">


        <!-- make a form input that will take the preparation title -->
        <input type="text" data-preparation-title name="preparationTitle" placeholder="Modifier le titre de la section preparation">
        <!-- make a form input that will take the preparation item paragraph -->
        <input type="text" data-preparation-step='0' name="preparationStep-0" placeholder="Etape de preparation">
        <!-- make a form button that will add another item to the preparation list -->
        <input data-add-preparation-paragraph type="button" value="Add another step" onclick="addPreparationStep()">

        <!-- make a submit button -->
        <input data-submit type="submit" value="Envoyer">
    </form>
</section>


<script>
    let jsonLdScript = document.querySelector('script[type="application/ld+json"]');
    console.log(jsonLdScript);

    // PREPARATION CUISSON ET PORTIONS
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

    // INTRODUCTION
    // make a script that will take the input value of the introduction title and introduction paragraph. Then it will update the value of data-introduction-html with the value of the input
    var introductionTitle = document.querySelector('input[data-introduction-title]');
    var introTitleHtml = document.querySelector('[data-intro-title-html]');
    introductionTitle.addEventListener('input', function() {
        introTitleHtml.innerHTML = introductionTitle.value;
    });

    // LISTE DE PARAGRAPHE DANS L'INTRODUCTION
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
                introParagraphHtmlArr[index].innerHTML = introductionParagraphInput.value;
            });
        });
    }

    // LISTE DES INGREDIENTS
    // make a script that will take the input value of the ingredients title and ingredients quantity and name. Then it will update the value of data-ingredients-html with the value of the input
    var ingredientsTitle = document.querySelector('input[data-ingredients-title]');
    var ingredientsTitleHtml = document.querySelector('[data-ingredients-title-html]');
    ingredientsTitle.addEventListener('input', function() {
        ingredientsTitleHtml.innerHTML = ingredientsTitle.value;
    });

    var ingredientsFieldsetInputArr = document.querySelectorAll('fieldset[data-ingredients-fieldset]');
    var ingredientsQuantityInputArr = document.querySelectorAll('input[data-ingredients-qty]');
    var ingredientsNameInputArr = document.querySelectorAll('input[data-ingredients-name]');
    var ingredientsQuantityHtmlArr = document.querySelectorAll('[data-ingredients-qty-html]');
    var ingredientsNameHtmlArr = document.querySelectorAll('[data-ingredients-name-html]');

    updateIngredients(ingredientsFieldsetInputArr, ingredientsQuantityInputArr, ingredientsNameInputArr, ingredientsQuantityHtmlArr, ingredientsNameHtmlArr);

    var addIngredientButton = document.querySelector('[data-add-ingredients]');
    addIngredientButton.addEventListener('click', function() {
        ingredientsFieldsetInputArr = document.querySelectorAll('fieldset[data-ingredients-fieldset]');
        ingredientsQuantityInputArr = document.querySelectorAll('input[data-ingredients-qty]');
        ingredientsNameInputArr = document.querySelectorAll('input[data-ingredients-name]');
        ingredientsQuantityHtmlArr = document.querySelectorAll('[data-ingredients-qty-html]');
        ingredientsNameHtmlArr = document.querySelectorAll('[data-ingredients-name-html]');
        updateIngredients(ingredientsFieldsetInputArr, ingredientsQuantityInputArr, ingredientsNameInputArr, ingredientsQuantityHtmlArr, ingredientsNameHtmlArr);
    });

    function updateIngredients(ingredientsFieldsetInputArr, ingredientsQuantityInputArr, ingredientsNameInputArr, ingredientsQuantityHtmlArr, ingredientsNameHtmlArr) {
        ingredientsQuantityHtmlArr = document.querySelectorAll('[data-ingredients-qty-html]');
        ingredientsNameHtmlArr = document.querySelectorAll('[data-ingredients-name-html]');
        ingredientsQuantityInputArr.forEach(function(ingredientsQuantityInput, index) {
            ingredientsQuantityInput.addEventListener('input', function() {
                ingredientsQuantityHtmlArr[index].innerHTML = ingredientsQuantityInputArr[index].value;
                ingredientsNameHtmlArr[index].innerHTML = ingredientsNameInputArr[index].value;
            });
        });
        ingredientsNameInputArr.forEach(function(ingredientsNameInput, index) {
            ingredientsNameInput.addEventListener('input', function() {
                ingredientsQuantityHtmlArr[index].innerHTML = ingredientsQuantityInputArr[index].value;
                ingredientsNameHtmlArr[index].innerHTML = ingredientsNameInputArr[index].value;
            });
        });

    }

    // TITRE DE LA SECTION PREPARATION
    // make a script that will take the input value of the preparation title and preparation paragraph. Then it will update the value of data-preparation-html with the value of the input
    var preparationTitle = document.querySelector('input[data-preparation-title]');
    var preparationTitleHtml = document.querySelector('[data-preparation-title-html]');
    preparationTitle.addEventListener('input', function() {
        preparationTitleHtml.innerHTML = preparationTitle.value;
    });

    // LISTE DE PARAGRAPHE DANS LA SECTION PREPARATION
    var preparationParagraphInputArr = document.querySelectorAll('[data-preparation-step]');
    var preparationParagraphHtmlArr = document.querySelectorAll('[data-preparation-step-html]');
    console.log(preparationParagraphInputArr);
    var addPreparationParagraphButton = document.querySelector('[data-add-preparation-paragraph]');
    updatePreparationParagraph(preparationParagraphInputArr, preparationParagraphHtmlArr);
    addPreparationParagraphButton.addEventListener('click', function() {
        preparationParagraphInputArr = document.querySelectorAll('input[ddata-preparation-step]');
        updatePreparationParagraph(preparationParagraphInputArr, preparationParagraphHtmlArr);
    });

    function updatePreparationParagraph(preparationParagraphInputArr, preparationParagraphHtmlArr) {
        preparationParagraphHtmlArr = document.querySelectorAll('[data-preparation-step-html]');
        preparationParagraphInputArr = document.querySelectorAll('[data-preparation-step]');
        console.log(preparationParagraphHtmlArr);
        preparationParagraphInputArr.forEach(function(preparationParagraphInput, index) {
            preparationParagraphInput.addEventListener('input', function() {
                console.log(preparationParagraphHtmlArr)
                preparationParagraphHtmlArr[index].innerHTML = preparationParagraphInput.value;
            });
        });
    }



    let introParagraphNum = 0;
    //make a script that will add another input to the introduction paragraph
    function addIntroParagraph() {

        var introParagraph = document.querySelectorAll("[data-introduction-paragraph]")[introParagraphNum];
        console.log(introParagraph);
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
    let ingredientNum = 0;
    let quantityNum = 0;
    let nameNum = 0;
    //make a script that will add another input fieldset after the previous one
    function addIngredient() {
        var ingredients = document.querySelectorAll("[data-ingredients-fieldset]")[ingredientNum];
        var newFieldset = document.createElement("fieldset");
        ingredientNum += 1;
        newFieldset.setAttribute("name", `ingredients-${ingredientNum}`);
        newFieldset.setAttribute("data-ingredients-fieldset", `${ingredientNum}`);
        var newQuantity = document.createElement("input");
        quantityNum += 1;
        newQuantity.setAttribute("type", "text");
        newQuantity.setAttribute("name", `ingredientsQuantity-${quantityNum}`);
        newQuantity.setAttribute("placeholder", "La quantité d'ingredients");
        newQuantity.setAttribute("data-ingredients-qty", `${quantityNum}`);
        var newName = document.createElement("input");
        nameNum += 1;
        newName.setAttribute("type", "text");
        newName.setAttribute("name", ` ingredientsName-${nameNum}`);
        newName.setAttribute("placeholder", "Le nom et la description");
        newName.setAttribute("data-ingredients-name", `${nameNum}`);
        newFieldset.appendChild(newQuantity);
        newFieldset.appendChild(newName);
        ingredients.parentNode.insertBefore(newFieldset, ingredients.nextSibling);

        //make a script that will add another <p data-ingredients-qty> to the div data-ingredients-container and update the value of data-ingredients-qty-html with the value of the input
        var ingredientsContainer = document.querySelector('[data-ingredients-container]');
        var newListItemHtml = document.createElement("li");
        newListItemHtml.setAttribute("class", "recipe-content__ingredients-item");
        newListItemHtml.setAttribute("data-ingredients-item-html", "");
        ingredientsContainer.appendChild(newListItemHtml);
        var newQuantityHtml = document.createElement("span");
        newQuantityHtml.setAttribute("class", "recipe-content__ingredients-item-quantity");
        newQuantityHtml.setAttribute("data-ingredients-qty-html", "");
        newListItemHtml.appendChild(newQuantityHtml);
        var newNameHtml = document.createElement("p");
        newNameHtml.setAttribute("class", "recipe-content__ingredients-item-name");
        newNameHtml.setAttribute("data-ingredients-name-html", "");
        newListItemHtml.appendChild(newNameHtml);
    }

    let stepNum = 0;
    //make a script that will add another input step to the preparation list
    function addPreparationStep() {
        var preparationStepInput = document.querySelectorAll("[data-preparation-step]")[stepNum];
        console.log(preparationStepInput);
        var newStepInput = document.createElement("input");
        stepNum += 1;
        newStepInput.setAttribute("type", "text");
        newStepInput.setAttribute("data-preparation-step", `${stepNum}`);
        newStepInput.setAttribute("name", `preparationStep-${stepNum}`);
        newStepInput.setAttribute("placeholder", "Etape de preparation");
        preparationStepInput.parentNode.insertBefore(newStepInput, preparationStepInput.nextSibling);

        //make a script that will add another <p data-preparation-step> to the div data-preparation-container and update the value of data-preparation-step-html with the value of the input
        var preparationParagraphContainer = document.querySelector('[data-preparation-container]');
        var newListItemHtml = document.createElement("li");
        newListItemHtml.setAttribute("class", "recipe-content__preparation-item");
        newListItemHtml.setAttribute("data-preparation-step-html", "");
        preparationParagraphContainer.appendChild(newListItemHtml);
        var newStepHtml = document.createElement("p");
        newStepHtml.setAttribute("class", "recipe-content__preparation-text");
        newStepHtml.setAttribute("data-preparation-text-html", "");
        newListItemHtml.appendChild(newStepHtml);

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