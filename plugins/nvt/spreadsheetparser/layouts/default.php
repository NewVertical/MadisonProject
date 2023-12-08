<?php Block::put('body') ?>
    <html lang="en">
    <head>
        <title>{{ this.page.meta_title }} - {{ this.theme.app_name }}</title>
        {% styles %}
        {% framework extras turbo %}
        <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.0/dist/chart.umd.js"></script>
        {% scripts %}
    </head>
    <body>
        {% page %}
    </body>
<?php Block::endPut() ?>

<?php Block::put('body') ?>
    <?= $this->makeLayout('default') ?>
<?php Block::endPut() ?>
