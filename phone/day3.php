<div class="jianjie jieshao">
  <div class="jiehsao_head clearfix">
    <span class="dijitian">第三天</span>
  </div>
    <div class="jieshao_content">
      <?php $day3content = get_post_meta($post->ID, "day3content_value", true);
      $day1content = apply_filters('the_content', $day1content);
      $day1content = str_replace(']]>', ']]&gt;', $day1content);
    echo$da2content; ?>
    </div>
    <div class="food_house">
      <?php if(get_post_meta($post->ID, "_meta_day3food_value",true)){
               				 include('day3czx.php');};?>
    </div>                    
</div>
