<?php
get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php
        global $wp;
        $current_url = home_url(add_query_arg(array(), $wp->request));

        // URLのパス部分を取得
        $path = parse_url($current_url, PHP_URL_PATH);
        $path_parts = explode('/', trim($path, '/'));
        $layout_identifier = end($path_parts);

        // テンプレートパーツのパスを動的に生成
        $template_part = 'template-parts/practice-note/layout-' . $layout_identifier;

        // テンプレートパーツが存在するか確認し、存在すれば読み込む
        if (locate_template($template_part . '.php') != '') {
            get_template_part($template_part);
        } else {
            // デフォルトのテンプレートパーツを読み込む
            get_template_part('template-parts/practice-note/layout-default');
        }
        ?>
    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
?>
