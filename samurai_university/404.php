<?php get_header(); ?>
<!-- Home -->

<div class="home">
  <div class="breadcrumbs_container">
    <div class="image_header">
      <div class="header_info">
        <div>404 Not Found</div>
        <div>お探しのページが見つかりませんでした</div>
      </div>
    </div>
  </div>
</div>

<!-- Courses -->
 <div class="courses">
  <div class="footer_row">
    <div class="row">
      <div class="col-lg-12">
        <p class="title">404 Not Found</p>
        <div class="courses_container">
          <div class="courses_row">
            <p>お探しのページが見つかりませんでした。URLをご確認ください。</p>
            <!-- esc_urでURLを無害化（特定の文字や記号を、その言語にとって特別な意味を持たない別の文字列に置き換えること）する。-->
             <!--home_urlでサイトのURLを取得する。ホームURLからの相対パス（Webサイト上のファイルやディレクトリの位置を、現在いる場所を起点に相対的に示す）トップページであれば「/」を指定。同じフォルダ内であればファイル名を指定。一つ上のフォルダのファイルであれば「../」-->
            <a href="<?php echo esc_url(home_url('/')); ?>">トップページへ</a>
          </div>
        </div>
      </div>
    </div>
  </div>
 </div>

 <?php get_footer(); ?>