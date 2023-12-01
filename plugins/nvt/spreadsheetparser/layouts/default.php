<?php Block::put('body') ?>
    <html lang="en">
    <head>
        <title>Test</title>
        {% styles %}
        {% framework extras turbo %}
        {% scripts %}
    </head>
    <body class="app">
    {% page %}
    </body>
<?php Block::endPut() ?>

<?php Block::put('body') ?>
    <?= $this->makeLayout('default') ?>
<?php Block::endPut() ?>
