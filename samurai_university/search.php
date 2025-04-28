<?php get_header(); ?>

    <!-- Home -->

    <div class="home">
      <div class="breadcrumbs_container">
        <div class="image_header">
          <div class="header_info">
            <div><?php the_search_query(); ?>の検索結果</div>
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
                <div class="tab_panel_title">検索結果</div>
                <div class="tab_panel_content">
                  <div class="tab_panel_text">
                    <!-- news loop from here -->
                     <!-- もし投稿があり、かつ検索クエリがある場合 、記事があるか調べてから、次の記事を表示する（1件ずつ記事を取得、表示する-->
                     <?php if (have_posts() && get_search_query()) :
                     while (have_posts()) :
                      the_post(); ?>
                      <div class="news_posts_small">
                      <div class="row">
                        <div class="col-lg-2 col-md-2 col-sx-12">
                          <div class="calendar_news_border">
                            <div class="calendar_news_border_1">
                              <div class="calendar_month">
                                 <!-- eventの投稿にカテゴリーが選択されているか確認し、カスタムフィールドのmonthと値を取得し表示する。それ以外は、投稿された月をフルスペルで表示する。 -->
                                <?php
                                if( has_category('event') ) :
                                echo post_custom('month');
                                else:
                                  echo get_post_time('F');
                                endif;
                                ?>
                              </div>
                                <!-- eventの投稿にカテゴリーが選択されているか確認し、カスタムフィールドのdayと値を取得し表示する。それ以外は、投稿された日を２桁で表示する。 -->
                                 <div class="calendar_day">
                                <span>
                                <?php
                                 if( has_category('event') ) :
                                    echo post_custom('day');
                                  else:
                                    echo get_the_date('d');
                                  endif;
                                  ?>
                              </span>
                              </div>
                            </div>
                          </div>
                          <!-- eventの投稿にカテゴリーが選択されているか確認し、カスタムフィールドitemと値を取得し表示する。timeがない場合は何も表示されない -->
                          <?php
                          if (has_category('event')) :
                          ?>
                          <div class="calendar_hour"><?php echo post_custom('time'); ?></div>
                          <?php endif; ?>
                          </div>
                          <div class="col-lg-10 col-md-10 col-sx-12">
                          <div class="news_post_small_title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                          </div>
                          <div class="news_post_meta">
                            <!-- 投稿された本文を取得し、100文字取り出して表示する。オーバーしたあとは...を表示する -->
                            <ul>
                              <li>
                                <?php echo wp_trim_words( get_the_content() , 100, '...'); ?>
                              </li>
                              </ul>
                          </div>
                          <div class="read_continue">
                            <button><a href="<?php the_permalink(); ?>" class="text-white">詳細を見る</a></button>                           
                          </div>
                        </div>
                       </div>
                       <hr />
                    </div>
                    <?php endwhile; ?>
                    <?php else : ?>
                      <p>検索キーワードに該当する記事がありませんでした。</p>
                      <?php endif; ?>
                      <!-- news loop until here -->
                      </div>
                </div>
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

   <?php get_footer(); ?>