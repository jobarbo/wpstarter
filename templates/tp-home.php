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
            "name": "Recette de poulet",
            "recipeIngredient": [
                ""
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
        <div class="wysiwyf-form__rich-snippet">
            <h2> Contenu pour les rich snippets </h2>
            <!-- make a form input that will take the name of the recipe -->
            <div class="wysiwyf-input wysiwyf-input--rich">
                <label for="recipe-name-rich">Nom de la recette</label>
                <input data-recipe-name-rich type="text" name="nameJSON" id="recipe-name-rich" placeholder="Nom de la recette">
            </div>

            <!-- make a form input that will take the name of the author -->
            <div class="wysiwyf-input wysiwyf-input--rich">
                <label for="author-name-rich">Nom de l'auteur</label>
                <input data-author-rich class="wysiwyf-input-text" type="text" id="author-name-rich" name="authorJSON" placeholder="Nom de l'auteur">
            </div>


            <!-- make a form input that will take the Cooking Time for the Rich snippet jsonLD.cookTime -->
            <div class="wysiwyf-input wysiwyf-input--rich">
                <label for="cooking-time-rich">Temps de cuisson en minutes (chiffre seulement)</label>
                <input data-cooktime-rich class="wysiwyf-input-text" type="text" id="cooking-time-rich" name="cookJSON" placeholder="Temps de cuisson en minutes">
            </div>


            <!-- make a form input that will take the Prep Time for the Rich snippet jsonLD.prepTime -->
            <div class="wysiwyf-input wysiwyf-input--rich">
                <label for="prep-time-rich">Temps de préparation en minutes (chiffre seulement)</label>
                <input data-preptime-rich class="wysiwyf-input-text" type="text" id="prep-time-rich" name="prepJSON" placeholder="Temps de préparation en minutes">
            </div>

            <!-- make a form input that will take the total Time for the Rich snippet jsonLD.totalTime -->
            <div class="wysiwyf-input wysiwyf-input--rich">
                <label for="total-time-rich">Temps total de la recette en minutes (chiffre seulement)</label>
                <input data-totaltime-rich class="wysiwyf-input-text" type="text" id="total-time-rich" name="totalJSON" placeholder="Temps total en minutes">
            </div>

            <!-- make a form input that will take the date of publication for the Rich snippet jsonLD.datePublished -->
            <div class="wysiwyf-input wysiwyf-input--rich">
                <label for="date-published-rich">Date de publication (format YYYY-MM-DD)</label>
                <input data-datepublished-rich class="wysiwyf-input-text" type="text" id="date-published-rich" name="dateJSON" placeholder="Date de publication">
            </div>

            <!-- make a form input that will take the ingredients for the Rich snippet jsonLD.recipeIngredient -->
            <div class="wysiwyf-input wysiwyf-input--rich">
                <label for="ingredients-rich">Ingrédients (séparés par une virgule)</label>
                <input data-ingredient-rich='0' class="wysiwyf-input-text" type="text" name="ingredientsJSON" id="ingredients-rich" placeholder="Ingrédients">
                <input data-add-ingredient-rich class="wysiwyf-input-button" type="button" value="Ajouter un ingrédient" onclick="addIngredientRich()">

            </div>


            <!-- make a form input that will take the instructions for the Rich snippet jsonLD.recipeInstructions -->
            <div class="wysiwyf-input wysiwyf-input--rich">
                <label for="instructions-rich">Instructions (séparés par une virgule)</label>
                <input data-instructions-rich class="wysiwyf-input-text" type="text" name="instructionsJSON" id="instructions-rich" placeholder="Instructions">
            </div>

            <!-- make a form input that will take the steps for the Rich snippet jsonLD.step  -->
            <div class="wysiwyf-input wysiwyf-input--rich">
                <label for="steps-rich">Etapes (séparés par une virgule)</label>
                <input data-step-rich=0 class="wysiwyf-input-text" type="text" id="steps-rich" name="stepsJSON" placeholder="Etapes (Pour les RICH SNIPPETS) ">
                <!-- make a input button that will add another steps to jsonLD.step[0].itemListElement[] -->
                <input data-add-step-rich class="wysiwyf-input-button" type="button" value="Ajouter une étape" onclick="addStepRich()">
            </div>


        </div>

        <div class="wysiwyf-form__content">
            <h2>Contenu de la recette</h2>

            <!-- make a form input that will take the preparation time -->
            <div class="wysiwyf-input wysiwyf-input--content">
                <label for="preparation-time">Temps de préparation </label>
                <input data-preparation class="wysiwyf-input-text" type="text" id="preparation-time" name="preparationTime" placeholder="Temps de préparation en minutes">
            </div>

            <!-- make a form input that will take the cooking time -->
            <div class="wysiwyf-input wysiwyf-input--content">
                <label for="cooking-time">Temps de cuisson </label>
                <input data-cooking class="wysiwyf-input-text" type="text" id="cooking-time" name="cookingTime" placeholder="Temps de cuisson en minutes">
            </div>

            <!-- make a form input that will take the numbers of servings -->
            <div class="wysiwyf-input wysiwyf-input--content">
                <label for="servings">Nombre de portions </label>
                <input data-servings class="wysiwyf-input-text" type="text" id="servings" name="servings" placeholder="Nombre de portions">
            </div>


            <!-- make a form input that will take the introduction title -->
            <div class="wysiwyf-input wysiwyf-input--content">
                <label for="introduction-title">Titre de la section introduction </label>
                <input data-introduction-title class="wysiwyf-input-text" type="text" id="introduction-title" name="introductionTitle" placeholder="Titre de l'introduction">
            </div>
            <!-- make a form input that will take the introduction paragraph -->
            <div class="wysiwyf-input wysiwyf-input--content">
                <label for="introduction-paragraph">Paragraphe de la section introduction </label>
                <input data-introduction-paragraph="0" class="wysiwyf-input-text" id="introduction-paragraph" name="introductionParagraph" placeholder="Paragraphe de l'introduction"></input>
                <!-- make a input button that will add another paragraph to the introduction paragraph-->
                <input class="wysiwyf-input-button" type="button" value="Add another paragraph to the introduction" data-add-introduction-paragraph onclick="addIntroParagraph()">
            </div>


            <!-- make a form input that will take the ingredients title -->
            <div class="wysiwyf-input wysiwyf-input--content">
                <label for="ingredients-title">Titre de la section ingrédients </label>
                <input data-ingredients-title class="wysiwyf-input-text" type="text" id="ingredients-title" name="ingredientsTitle" placeholder="Titre de la section ingrédients">
            </div>
            <!-- make a fieldset that will group the ingredients quantity and name -->
            <div class="wysiwyf-fieldset wysiwyf-fieldset--content">
                <fieldset class="wysiwyf-fieldset" data-ingredients-fieldset="0" name="ingredients">
                    <label>Ajouter Ingrédients</label>
                    <!-- make a form input that will take the ingredients quantity -->
                    <div class="wysiwyf-input wysiwyf-input--content">
                        <input class="wysiwyf-input-text" data-ingredients-qty="0" type="text" name="ingredientsQuantity" placeholder="La quantité d'ingredients">
                        <!-- make a form input that will take the ingredients name -->
                        <input class="wysiwyf-input-text" data-ingredients-name="0" type="text" name="ingredientsName" placeholder="Le nom et la description">
                    </div>
                </fieldset>
                <!-- make a form button that will add another quantity and name to the Ingredients list-->
                <input class="wysiwyf-input-button" type="button" data-add-ingredients value="Add another ingredient" onclick="addIngredient()">
            </div>



            <!-- make a form input that will take the preparation title -->
            <div class="wysiwyf-input wysiwyf-input--content">
                <label for="preparation-title">Titre de la section préparation </label>
                <input data-preparation-title class="wysiwyf-input-text" type="text" id="preparation-title" name="preparationTitle" placeholder="Titre de la section préparation">
            </div>
            <!-- make a form input that will take the preparation item paragraph -->
            <div class="wysiwyf-input wysiwyf-input--content">
                <label for="preparation-paragraph">Paragraphe de la section préparation </label>
                <input data-preparation-step='0' class="wysiwyf-input-text" id="preparation-paragraph" name="preparationStep-0" placeholder="Paragraphe de la section préparation"></input>
                <!-- make a input button that will add another paragraph to the preparation paragraph-->
                <input class="wysiwyf-input-button" type="button" value="Ajouter une nouvelle etape de preparation" data-add-preparation-paragraph onclick="addPreparationStep()">
            </div>

            <!-- make a submit button -->
            <input class="wysiwyf-input-submit" data-submit type="submit" value="Telecharger le code">
        </div>

    </form>
</section>


<script>
    let jsonLdScript = document.querySelector('script[type="application/ld+json"]');
    let jsonLd = JSON.parse(jsonLdScript.innerHTML);
    console.log(jsonLd);

    //Nom de la recette
    // make a script that will take the name of the recipe. Then it will update the value of the author name in the jsonLd object
    let recipeNameRichInput = document.querySelector('input[data-recipe-name-rich]');
    recipeNameRichInput.addEventListener('input', function() {
        jsonLd.name = recipeNameRichInput.value;
        jsonLdScript.innerHTML = JSON.stringify(jsonLd);
    });


    //Nom de l'autheur
    // make a script that will take the input value of the author name. Then it will update the value of the author name in the jsonLd object.
    let authorRichInput = document.querySelector('input[data-author-rich]');
    authorRichInput.addEventListener('input', function() {
        jsonLd.author = authorRichInput.value;
        jsonLdScript.innerHTML = JSON.stringify(jsonLd);
    });

    //make a script that will take the input value of the cooking time. Then it will update the value of the cooking time in the jsonLd object.
    let cookingTimeRichInput = document.querySelector('input[data-cooktime-rich]');
    cookingTimeRichInput.addEventListener('input', function() {
        jsonLd.cookTime = `PT${cookingTimeRichInput.value}M`;
        jsonLdScript.innerHTML = JSON.stringify(jsonLd);

    });

    //make a script that will take the input value of the preparation time. Then it will update the value of the preparation time in the jsonLd object.
    let preparationTimeRichInput = document.querySelector('input[data-preptime-rich]');
    preparationTimeRichInput.addEventListener('input', function() {
        jsonLd.prepTime = `PT${preparationTimeRichInput.value}M`;
        jsonLdScript.innerHTML = JSON.stringify(jsonLd);

    });

    //make a script that will take the input value of the total time. Then it will update the value of the total time in the jsonLd object.
    let totalTimeRichInput = document.querySelector('input[data-totaltime-rich]');
    totalTimeRichInput.addEventListener('input', function() {
        jsonLd.totalTime = `PT${totalTimeRichInput.value}M`;
        jsonLdScript.innerHTML = JSON.stringify(jsonLd);
    });

    //make a script that will take the input value of the date of publication. Then it will update the value of the date in the jsonLd object.
    let dateRichInput = document.querySelector('input[data-datepublished-rich]');
    dateRichInput.addEventListener('input', function() {
        jsonLd.datePublished = dateRichInput.value;
        jsonLdScript.innerHTML = JSON.stringify(jsonLd);
    });

    //LISTE DES INGREDIENTS

    // Make a button that will add another ingredient to the jsonLd object and another input field to the form.
    updateIngredientsRich();
    let addIngredientRichButton = document.querySelector('input[data-add-ingredient-rich]');
    addIngredientRichButton.addEventListener('click', function() {
        updateIngredientsRich();
    })


    //make a script that will take the input value of the ingredients quantity. Then it will update the value of the ingredients quantity in the jsonLd object.
    function updateIngredientsRich() {
        let ingredientsRichInputArr = document.querySelectorAll('input[data-ingredient-rich]');
        ingredientsRichInputArr.forEach(function(ingredientsRichInput) {
            ingredientsRichInput.addEventListener('input', function() {
                jsonLd.recipeIngredient[ingredientsRichInput.dataset.ingredientRich] = ingredientsRichInput.value;
                jsonLdScript.innerHTML = JSON.stringify(jsonLd);

            });
        });
    }

    //make a script that will take the input value of the instructions. Then it will update the value of the recipeInstructions in the jsonLd object.
    let instructionsRichInput = document.querySelector('input[data-instructions-rich]');
    instructionsRichInput.addEventListener('input', function() {
        jsonLd.recipeInstructions = instructionsRichInput.value;
        jsonLdScript.innerHTML = JSON.stringify(jsonLd);
        console.log(jsonLdScript.innerHTML);
    });

    //make a script that will take the input value of the step. Then it will update the value of the step array in the jsonLd object.
    updateStepsRich();
    let addStepRichButton = document.querySelector('input[data-add-step-rich]');
    addStepRichButton.addEventListener('click', function() {
        updateStepsRich();
    });

    function updateStepsRich() {
        let stepsRichInputArr = document.querySelectorAll('input[data-step-rich]');
        let steps = jsonLd.step[0].itemListElement;
        stepsRichInputArr.forEach(function(stepsRichInput) {
            stepsRichInput.addEventListener('input', function() {
                let index = parseInt(stepsRichInput.dataset.stepRich);
                jsonLd.step[0].itemListElement[index] = {
                    '@type': 'HowToStep',
                    'position': index + 1,
                    'text': stepsRichInput.value
                };
                jsonLdScript.innerHTML = JSON.stringify(jsonLd);
            });
        });
    }


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

    // make a script that will be triggered on submit of the form. Then it will update the value of the jsonLd object with the value of the input

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
    var addPreparationParagraphButton = document.querySelector('[data-add-preparation-paragraph]');
    updatePreparationParagraph(preparationParagraphInputArr, preparationParagraphHtmlArr);
    addPreparationParagraphButton.addEventListener('click', function() {
        preparationParagraphInputArr = document.querySelectorAll('input[ddata-preparation-step]');
        updatePreparationParagraph(preparationParagraphInputArr, preparationParagraphHtmlArr);
    });

    function updatePreparationParagraph(preparationParagraphInputArr, preparationParagraphHtmlArr) {
        preparationParagraphHtmlArr = document.querySelectorAll('[data-preparation-step-html]');
        preparationParagraphInputArr = document.querySelectorAll('[data-preparation-step]');
        preparationParagraphInputArr.forEach(function(preparationParagraphInput, index) {
            preparationParagraphInput.addEventListener('input', function() {

                preparationParagraphHtmlArr[index].innerHTML = preparationParagraphInput.value;
            });
        });
    }


    let ingredientNumRich = 0;
    // make a script that will add another input field for the ingredients(RICH SNIPPET)
    function addIngredientRich() {
        var ingredientRich = document.querySelectorAll('[data-ingredient-rich]')[ingredientNumRich];
        var newIngredientRich = document.createElement('input');
        ingredientNumRich += 1;
        newIngredientRich.setAttribute('data-ingredient-rich', `${ingredientNumRich}`);
        newIngredientRich.setAttribute('type', 'text');
        newIngredientRich.setAttribute('placeholder', 'Ingredients (Pour les RICH SNIPPETS)');
        newIngredientRich.setAttribute('name', `ingredientsJSON-${ingredientNumRich} `);
        ingredientRich.parentNode.insertBefore(newIngredientRich, ingredientRich.nextSibling);
    }

    let stepNumRich = 0;
    // make a script that will add another input field for the step(RICH SNIPPET)
    function addStepRich() {
        var stepRich = document.querySelectorAll('[data-step-rich]')[stepNumRich];
        var newStepRich = document.createElement('input');
        stepNumRich += 1;
        newStepRich.setAttribute('data-step-rich', `${stepNumRich}`);
        newStepRich.setAttribute('type', 'text');
        newStepRich.setAttribute('placeholder', 'Etapes (Pour les RICH SNIPPETS)');
        newStepRich.setAttribute('name', `stepsJSON-${stepNumRich} `);
        stepRich.parentNode.insertBefore(newStepRich, stepRich.nextSibling);
    }

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
        saveAs(blob, "recipe.txt");
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