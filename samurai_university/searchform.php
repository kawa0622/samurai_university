<!-- actionで、検索データを home_url('/')で指定しているトップページに表示する。methodはデータの転送方法を指定しており、getで指定しているため、入力したフォームの内容がURLに結合される -->
<form action="<?php echo home_url('/'); ?>" method="get">
<!-- name属性には常にｓを指定する。WordPressが検索クエリを受け取るための仮想的フィールド名。value属性にはthe_search_query()関数を使用して、検索クエリを表示。これにより、検索ページに移動しても検索ワードが保持される。placeholderは、後で内容が挿入されるまで、一時的にその場所を確保しておく。(後から具体的な言葉を入れる場所をマークしておく) -->
<input name="s" type="text" value="<?php the_search_query(); ?>" placeholder="検索する" />
<!-- type=submitは送信ボタン。formに使用することができる。type=buttonだと、既定の動作がない。 -->
<button type="submit"><span>検索</span></button>
</form>