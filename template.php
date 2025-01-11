<!doctype html>
<html>
    <head>
        <title>
            <?= page_title() ?>
        </title>
        <?= theme_assets_head(); ?>
    </head>
    <body>
        <header><h1><?= page_header(); ?></h1></header>
        <main><?= $class_instances['links']->link_tags(); ?></main>
        <footer><h4><?= page_footer(); ?></h4></footer>
        <?= theme_assets_footer() ?>
    </body>
</html>
