<?php get_header(); ?>

    <h2 class="pageTitle">最新情報<span>NEWS</span></h2>

    <main class="main">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-9">
            <?php if(is_month()) : ?>
              <h2 class="main_title"><?php the_time('Y年m月'); ?></h2>
            <?php else : ?>
              <h2 class="main_title"><?php wp_title(''); ?></h2> 
            <?php endif ?>
            <div class="row">
            <?php if (have_posts()) : ?>
              <?php while (have_posts()) : the_post(); ?>
                <div class="col-md-4">
                  <article class="news">
                    <div class="news_pic">
                      <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail(); ?>
                      </a>
                    </div>
                    <div class="news_meta">
                      <?php the_category(); ?>
                      <time class="news_time" datetime="<?php the_time('Y-m-d'); ?>"
                        ><?php the_time('Y年m月d日'); ?></time>
                    </div>
                    <h2 class="news_title">
                      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>
                    <div class="news_desc">
                      <?php the_excerpt(); ?>
                      <p><a href="<?php the_permalink(); ?>">[続きを読む]</a></p>
                    </div>
                  </article>
                </div>
              <?php endwhile; ?>
            <?php endif; ?>

        </div>
      </div>

          <div class="col-12 col-md-3">
            <?php get_sidebar(); ?>
          </div>
        </div>
      </div>
    </main>

<?php get_footer(); ?>