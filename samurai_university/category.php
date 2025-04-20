<?php get_header(); ?>

    <!-- Home -->

    <div class="home">
      <div class="breadcrumbs_container">
        <div class="image_header">
          <div class="header_info">
            <?php
            // カテゴリーの情報を取得
            $cat = get_the_category();
            $catslug = $cat[0]->slug; // スラッグを取得
            $catname = $cat[0]->cat_name; // カテゴリー名を取得
            ?>
            <div><?php echo $catslug; ?></div>
            <div><?php echo $catname; ?></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Course -->

    <div class="course">
      <div class="row content-body">
        <!-- Course -->
        <div class="col-lg-8">
          <!-- Course Tabs -->
          <div class="course_tabs_container">
            <div class="tab_panels">
              <!-- Description -->
              <div class="tab_panel">
                <div class="tab_panel_title"><?php echo $catname; ?></div>
                <div class="tab_panel_content">
                  <div class="tab_panel_text">
                    <!-- news loop from here-->
                     <?php if (have_posts()) : ?>
                      <?php while(have_posts()) : the_post(); ?>
                     
                      
                      <br>
                      <div class="news_posts_small">
                      <div class="row">
                        <div class="col-lg-2 col-md-2 col-sx-12">
                          <div class="calendar_news_border">
                            <div class="calendar_news_border_1">
                              <div class="calendar_month">
                                <?php
                                if ( is_category('event') ) ://カテゴリー名を判別
                                  echo post_custom('month'); // カスタムフィールドの値を表示
                                else:
                                  echo get_post_time('F'); // 投稿の月を表示
                                endif;
                                ?>
                              </div>
                              <div class="calendar_day">
                                <span>
                                  <?php
                                  if( is_category('event') ) ://カテゴリー名を判別
                                    echo post_custom('day'); // カスタムフィールドの値を表示
                                  else:
                                    echo get_post_time('d'); // 投稿の日を表示
                                  endif;
                                  ?>
                                </span>
                              </div>
                            </div>
                          </div>
                          <?php
                          if (is_category('event')) :// イベントのカテゴリーの場合
                            ?>
                            <div class="calender_hour"> <?php echo post_custom('time'); ?></div>
                            <?php
                            endif;
                            ?>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sx-12">
                          <div class="news_post_small_title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                          </div>
                          <div class="news_post_meta">
                            <ul>
                              <li>
                               <?php echo wp_trim_words( get_the_content() , 100, '...'); ?>
                              </li>
                            </ul>
                          </div>
                          <div class="read_continue">
                            <button> <a href="<?php the_permalink(); ?>" class="text-white">詳細を見る</a></button>
                          </div>
                        </div>
                      </div>
                      <hr />
                    </div> 
                    <?php endwhile; ?>
                    <?php endif; ?>
                    <!-- news loop until here-->

                    <div class="news-pagination">
                      <?php
                      // 記事一覧ページ用のページネーション　array配列、plain（デフォルト）単なる文字列、list順序なしのTHMLリストとして表示
                      echo paginate_links(array(
                        'total' => $wp_query->max_num_pages,
                        'prev_text' => '&lt;&lt;前へ',
                        'next_text' => '次へ&gt;&gt;',
                      ));
                      ?>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Course Sidebar -->
        <div class="col-lg-4" style="background-color: #2b7b8e33">
          <!-- sidebar-main に切り出す -->
          <div class="sidebar">
            <div class="category">
              <div class="section_title_container category_title">
                <h2>CATEGORY</h2>
                <div class="section_subtitle">カテゴリー</div>
              </div>
              <div class="sidebar_categories">
                <ul>
                  <li><a href="#">News ニュース</a></li>
                  <li><a href="#">Event イベント</a></li>
                  <li><a href="#">CampusLife 侍の学生</a></li>
                </ul>
              </div>
            </div>
            <div class="category">
              <div class="section_title_container category_title">
                <h2>Latest Post</h2>
                <div class="section_subtitle">最新記事</div>
              </div>
              <div class="sidebar_categories">
                <ul>
                  <li><a href="#">AWS ハンズオンセミ…</a></li>
                  <li><a href="#">AWS ハンズオンセミ…</a></li>
                  <li><a href="#">AWS ハンズオンセミ…</a></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- sidebar-main ここまで -->
        </div>
      </div>
    </div>

   <?php get_footer(); ?>