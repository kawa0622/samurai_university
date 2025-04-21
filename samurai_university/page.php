<?php get_header(); ?>

    <!-- Home -->

    <div class="home">
      <div class="breadcrumbs_container">
        <div class="image_header">
          <div class="header_info">
            <!-- titleを出力します -->
           <div><?php the_title(); ?></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Course -->
     <?php if (have_posts()): //ループを実装。投稿があるかチェックする ?>
      <?php while (have_post()) : the_post(); ?> <!-- 投稿がある場合、ループを開始する。the_postで投稿を取得する -->
      
    <div class="course">
      <div class="row content-body">
        <!-- Course -->
        <div class="col-lg-8">
          <!-- Course Tabs -->
          <div class="course_tabs_container">
            <div class="tab_panels">
              <!-- Description -->
              <div class="tab_panel">
                <div class="tab_panel_title"><?php the_title(); ?></div>
                <?php the_content(); ?><!-- 投稿の内容を表示する -->
               
              </div>
            </div>
          </div>
        </div>

        <!-- Course Sidebar -->
        <div class="col-lg-4" style="background-color: #2b7b8e33">
         <?php get_sidebar(); ?>
        </div>
      </div>
    </div>
    <?php endwhile; //ループの終了 ?>
    <?php endif; ?>

    <?php get_footer(); ?>