 <!-- sidebar-main に切り出す -->
 <div class="sidebar">
            <div class="category">
              <div class="section_title_container category_title">
                <h2>CATEGORY</h2>
                <div class="section_subtitle">カテゴリー</div>
              </div>
              <div class="sidebar_categories">
                <ul>
                 <?php
                 $args = array(
                  'hide_empty' => 1, // 投稿記事があるカテゴリーのみ表示する  
                  'title_li' => '', // リストの外側に表示するタイトルと表示形式（''はタイトルを表示しない)
                 );
                 wp_list_categories( $args ); // カテゴリーをリスト表示する関数
                 ?>
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
                  <?php
                  $args = array(
                    'posts_per_page' => 3 // 表示する記事数
                  );
                  $posts = get_posts( $args ); // 投稿記事を取得する関数
                  foreach ( $posts as $post ) :  // 投稿記事をループ処理する
                    setup_postdata( $post ); // 投稿記事のデータをセットする関数
                  ?>
                  <li>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                   </li>
                   <?php
                    endforeach; // ループ処理を終了する
                    wp_reset_postdata(  ); // 今回作成したクエリをリセットする
                  ?>
                </ul>
              </div>
            </div>
          </div>
          <!-- sidebar-main ここまで -->