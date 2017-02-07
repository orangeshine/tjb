<div class="jianjie jieshao">
  <div class="jiehsao_head clearfix">
    <span class="dijitian">第二天</span>
  </div>
    <div class="jieshao_content">
      <?php $day2content = get_post_meta($post->ID, "day2content_value", true);
      $day1content = apply_filters('the_content', $day1content);
      $day1content = str_replace(']]>', ']]&gt;', $day1content);
    echo$da2content; ?>
    </div>
    <div class="food_house">
    <?php if(get_post_meta($post->ID, "_meta_day2food_value",true)){
               				 include('day2czx.php');};?>
    </div>              
</div>
