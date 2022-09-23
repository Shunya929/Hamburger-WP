<form class="form__header" id="searchform" method="get" action="<?php echo home_url('/'); ?>">
  <i class="fa-solid fa-magnifying-glass"></i>
  <label for="" class="label1">
    <input type="text" name="s" id = "s" class="c-input__header" value="<?php the_search_query(); ?>" placeholder="入力してください">
  </label>
  <label for="" class="label2">
    <button type="submit"  value="検索" class="c-btn__header">検索</button>
  </label>
 </form>