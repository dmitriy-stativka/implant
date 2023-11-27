<div class="news-wrap">
    <div class="small-category-title">
        NEWSROOM
    </div>
    <h2 style="margin-left: -3px;">Recent News</h2>
    <div class="news-in">
        <div class="news-list">
            <?php
            $url = $_SERVER['REQUEST_URI'];
            $uri_parts = explode('?', $_SERVER['REQUEST_URI'], 2);
            $query_str = parse_url($url, PHP_URL_QUERY);
            parse_str($query_str, $query_params);
            $paged = get_query_var('paged') ? get_query_var('paged') : 1;
            $args2 = array(
                'paged' => $paged,
                'post_type' => 'news',
                'post_status' => 'publish',
                'posts_per_page' => $GLOBALS['post_news_per_page'],
                'tax_query' => array(
                    'relation' => 'AND',
                )
            );
            if ($query_params) {
                if ($query_params['News_category']) {
                    array_push($args2['tax_query'], array(
                        'taxonomy' => 'news_category',
                        'field' => 'id',
                        'terms' => array($query_params['News_category']),
                        'operator' => "AND"
                    ));
                    ?>
                    <?php
                }
                if ($query_params['Client_type']) {
                    array_push($args2['tax_query'], array(
                        'taxonomy' => 'client_type',
                        'field' => 'id',
                        'terms' => array($query_params['Client_type']),
                        'operator' => "AND"
                    ));
                    ?>
                    <?php
                }
                ?>
                <script>
                    if (typeof window.history.pushState == 'function') {
                        window.history.pushState({}, "Hide", '<?php echo $uri_parts[0] ?>');
                    }
                </script>
                <?php
            }
            $query = new WP_Query($args2);
            if ($query->have_posts()) {
                ?>
                <?php
                while ($query->have_posts()) {
                    $query->the_post();
                    get_template_part('/template_parts/post/news');
                }
                ?>
                <?php
            } else {
                echo "<h2 class='no-result'>No results<h2/>";
            }
            ?>
        </div>
        <?php
        if ($query->max_num_pages > 1) {
            ?>
            <div class="but-wrap">
                <a class="carrow cta load_more_news" href="#"> <b class="text">SEE
                        MORE</b><span></span></a>
            </div>
            <?php
        }
        ?>
        <script>
            var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
            var true_posts = '<?php echo serialize($query->query_vars); ?>';
            var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
            var max_pages = '<?php echo $query->max_num_pages; ?>';
        </script>
        <?php
     
        wp_reset_query();
        wp_reset_postdata();
        ?>
    </div>
</div>