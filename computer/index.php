<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
<?php
	global $page, $paged;
 
	wp_title( '|', true, 'right' );
 
	// 博客名称.
	bloginfo( 'name' );
 
	// 博客描述.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
 
	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );
 
	?>
</title>
    <link rel="icon" href="http://www.juliedu.com/wp-content/uploads/2017/01/logo3.jpg" sizes="32x32">
    <link rel="icon" href="http://www.juliedu.com/wp-content/uploads/2017/01/logo3.jpg" sizes="192x192">
    <link rel="apple-touch-icon-precomposed" href="http://www.juliedu.com/wp-content/uploads/2017/01/logo3.jpg">
    <meta name="msapplication-TileImage" content="http://www.juliedu.com/wp-content/uploads/2017/01/logo3.jpg">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
   
    <script src="http://www.juliedu.com/jquery-2.2.2.min.js"></script>
    <script type="text/javascript" src="http://www.juliedu.com/swiper.jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="http://www.juliedu.com/swiper.css">
  </head>
  <body>
      <div class="top_sec clearfix">
      <a href="http://www.juliedu.com">
        <img class="logo" src="http://www.juliedu.com/img/logo2.png" alt="logo">
        <img class="logo" src="http://www.juliedu.com/img/logo.png" alt="logo">
      </a>
      <div class="search">
        <form id="searchform" name="formsearch" method="get" action="<?php bloginfo('home'); ?>">
        <div class="form">
        <input name="s" id="s" type="text" class="search-keyword" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '搜索团建方案/游戏/主题';}" value="搜索团建方案/游戏/主题" />
        <button type="submit" class="search-submit" ><?php _e("Search"); ?></button>
        </div>
        </form>
      </div>
    </div>
      <div class="header">
        <div class="top_nav">
          <a href="http://www.juliedu.com"><span class="now">首页</span></a>
          <a href="http://www.juliedu.com/32-2/"><span>前哨动态</span></a>
          <a href="http://www.juliedu.com/28-2/"><span>主题团建</span></a>
          <a href="http://www.juliedu.com/36-2/"><span>团建资讯</span></a>
          <a href="http://www.juliedu.com/34-2/"><span>团队福利</span></a>  
          <a href="http://www.juliedu.com/wp-content/themes/computer/baoming.html" target="_blank"><span>我要团建</span></a>
        </div>
      </div>
      <div class="container">
       <div class="swiper-container" id="lunbo">
      <div class="swiper-wrapper">
          <?php query_posts('showposts=-1&cat=18');?>
          <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
            <div class="swiper-slide">
              <a href="<?php the_permalink(); ?>" target="_blank">
               <img src="<?php echo get_content_first_image(get_the_content()); ?>" alt="<?php the_title_attribute(); ?>" />
              </a>
            </div>
          <?php endwhile; ?>
          <?php endif; ?>
      </div>
      <div class="swiper-pagination"></div>
       <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div> 
    </div>
      <div class="filter_container">
        <div class="filters" id="filters">
          <div class="filter_sec">
            <div class="sec_title">天数</div>
            <span>半天</span>
            <span>一天</span>
            <span>两天</span>
            <span>三天及以上</span>
          </div>
          <div class="filter_sec">
            <div class="sec_title">人数</div>
            <span>19人及以下</span>
            <span>20-49人</span>
            <span>50-99人</span>
            <span>100人以上</span>
          </div>
          <div class="filter_sec">
            <div class="sec_title">主题</div>
            <span>创意团建</span>
            <span>定向团建</span>
            <span>培训团建</span>
            <span>运动团建</span>

          </div>
        </div>
        <div class="filters_submit" id="filters_submit">
          <div class="submit_text">
            <span>查找方案</span>
            <span class="submit_en">search now</span>
          </div>
          <i class="iconfont icon-search"></i>
        </div>
      </div>
      <div class="sub_title">
        <span>前哨推荐</span>
      </div>
      <div class="content tj_content index_content">
        <?php query_posts('showposts=30&cat=4');?>
				<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
					<a class="a-post" href="<?php the_permalink(); ?>" target="_blank">
						<div class="post content_component" id="post-<?php the_ID(); ?>">
							<div class="content_img post"><img src="<?php $src = get_post_meta($post->ID, "_meta_lunbotu_value", true);
						  echo$src; ?>"><span><?php $mudidi = get_post_meta($post->ID, "_meta_label1_value", true);
							echo$mudidi; ?> | <?php $tianshu = get_post_meta($post->ID, "_meta_label2_value", true);
							echo$tianshu; ?> | <?php $renshu = get_post_meta($post->ID, "_meta_label3_value", true);
							echo$renshu; ?></span></div>
						  <span class="content_title"><?php the_title(); ?></span>
						  <span class="content_price"><?php $qijia3 = get_post_meta($post->ID, "_meta_qijia3_value", true);
						  echo$qijia3; ?>元/场</span>
						</div>
					</a>
				<?php endwhile; ?>
				<?php endif; ?>
      </div>
    </div>
    <?php include('footer.php'); ?>
    <script>
      $(document).ready(function () {
        var mySwiper = new Swiper ('.swiper-container', {
          direction: 'horizontal',
          loop: true,
          autoplay : 4000,
          autoplayDisableOnInteraction : false,
          pagination: '.swiper-pagination',
          nextButton: '.swiper-button-next',
          prevButton: '.swiper-button-prev',

        })
        var filters_submit = document.getElementById('filters_submit');
        var filters = document.getElementById('filters');
        var filters_item = filters.getElementsByTagName('span');
        var temp_items = [];
        for(var i=0;i<filters_item.length;i++)
        {
          filters_item[i].onclick = function()
          {
            if(this.className == 'item_selected')
            {
              this.setAttribute('class', '');
            }
            else
            {
              this.setAttribute('class', 'item_selected');
              temp_items.push(this.innerHTML);
            } 
          }
        }
        filters_submit.onclick = function()
        {
          var temp_items_string = temp_items.join("+");
          window.location.href = "http://www.juliedu.com/"+"tag/"+temp_items_string;
        }

        $(document).ready(function () {
          $(".top_nav a").filter(function()
          {
            return $(this).children("span").text().indexOf($("title").text())!=-1;
          }).children("span").addClass("now");
        })

      })
  </script>
  </body>
</html>
