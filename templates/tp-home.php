<?php
/*
Template Name: Home
*/

// Load header.php
get_header(); ?>

<section id="home-about">
    <div class="container">
        <div class="history">
            <h1 class="history__title">Wordpress Starter Pack 2.7</h1>
        </div>
        <div class="client">
            <ul class="client__list">
                <li class="client__item">
                    <p> - [ES6] for JavaScript (transpiling with [Babel] and linting with [ESLint])</p>
                </li>
                <li class="client__item">
                    <p> - [SASS] preprocessor for CSS with [SASS Guidelines]</p>
                </li>
                <li class="client__item">
                    <p> - [Gulp 4](https://gulpjs.com/)</p>
                </li>
                <li class="client__item">
                    <p> - [Webpack 5](https://webpack.js.org/) to manage, compile and optimize the theme's asset</p>
                </li>
                <li class="client__item"></li>
            </ul>
        </div>
    </div>
</section>

<?php get_template_part('modules/md-module'); ?>

<?php
// Load footer.php
get_footer(); ?>