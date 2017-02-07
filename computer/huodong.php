<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>

	<meta name="viewport" content="width=640,user-scalable=no, minimal-ui">

	<link rel="stylesheet" href="http://www.juliedu.com/wp-content/themes/computer/article.css">
	<link rel="stylesheet" type="text/css" href="http://www.juliedu.com/css/iconfont.css">

	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />

	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />

	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<script src="http://www.juliedu.com/jquery-2.2.2.min.js"></script>
	<script type="text/javascript" src="http://www.juliedu.com/swiper.jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="http://www.juliedu.com/swiper.css">

</head>
<body>
<div class="post" id="post-<?php the_ID(); ?>">
	<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
	<?php include("nav.php") ?>
<div class="container">
<div class="clearfix">
	<p class="yinyu"><?php $fubiaoti = get_post_meta($post->ID, "_meta_fubiaoti_value", true);
			echo$fubiaoti; ?></p>
	<div class="swiper-container" id="lunbo">
	      <div class="swiper-wrapper">
					<?php if(get_post_meta($post->ID, "_meta_lunbotu_value",true)){
										include('lunbo1.php');};?>
					<?php if(get_post_meta($post->ID, "_meta_lunbotu2_value",true)){
										include('lunbo2.php');};?>
					<?php if(get_post_meta($post->ID, "_meta_lunbotu3_value",true)){
										include('lunbo3.php');};?>
	      </div>
	      <div class="swiper-pagination"></div>
	      <div class="swiper-button-prev"></div>
	      <div class="swiper-button-next"></div>
    </div>
		<div class="jianjie shortdes">
		    <h2 class="biaoti"><?php the_title(); ?></h2>
		    
		    <div class="discription" id="tjlabel">
		    	<span>
			    	<?php $shtd = get_post_meta($post->ID, "_meta_shtd_value", true);
					echo$shtd1; ?>
			    </span>
			    <span>
			    	<?php $shtd1 = get_post_meta($post->ID, "_meta_shtd2_value", true);
					echo$shtd2; ?>
				</span>
				<span>
			    	<?php $shtd2 = get_post_meta($post->ID, "_meta_shtd2_value", true);
					echo$shtd2; ?>
				</span>
			</div>

		    <div class="discription anpai">
				<h4>目的地：</h4>
				<span class="route"><?php $mudidi = get_post_meta($post->ID, "_meta_muididi_value", true); echo$mudidi; ?></span>
			</div>

			<div class="discription">
				<h4>天数：</h4>
				<span class="route"><?php $tianshu = get_post_meta($post->ID, "_meta_tianshu_value", true); echo$tianshu; ?></span>
			</div>

			<div class="discription">
				<h4>交通工具：</h4>
				<span class="route"><?php $jiaitong = get_post_meta($post->ID, "_meta_jiaotong_value", true); echo$jiaitong; ?></span>
			</div>

			<div class="discription">
				<h4>适合人数：</h4>
				<span class="route"><?php $renshu = get_post_meta($post->ID, "_meta_renshu_value", true); echo$renshu; ?></span>
			</div>
		</div>
		<a href="tencent://message/?uin=995572207" target="_blank">
			<div class="submittj">
				<span class="submitbtn">立即预定</span>
			</div>
		</a>
	</div>
	    <div class="jianjie nav">
	    	<ul>
	    		<a href="#tese"><li>活动意义</li></a>
	    		<a href="#jieshao"><li>团建内容</li></a>
	    		<a href="#feiyong"><li>费用说明</li></a>
	    		<a href="#yuding"><li>预约说明</li></a>
	    		<a href="#tixing"><li>团建贴士</li></a>
	    	</ul>
	    </div>
	    <div class="jianjie tese" id="tese"><h3>活动意义</h3>
		    <div class="details">
		    	<?php $ashu_editor = get_post_meta($post->ID, "_meta_eidtor_value", true);
				$ashu_editor = apply_filters('the_content', $ashu_editor);
				$ashu_editor = str_replace(']]>', ']]&gt;', $ashu_editor);
				echo $ashu_editor; ?>
		    </div>
	    </div>
	    <div class="jianjie jieshao"><h3>团建内容</h3>
	    	<div class="details">
	    		<div class="travel_day">
	    			<table>
	    				<tbody>
	    					<tr><td class="td1">第一天</td><td class="td2"></td></tr>
	    					<tr>
	    						<td class="td1">行程安排</td>
		    					<td class="td2">
		    						<?php $day1content = get_post_meta($post->ID, "day1content_value", true);
										$day1content = apply_filters('the_content', $day1content);
						        $day1content = str_replace(']]>', ']]&gt;', $day1content);
									echo$day1content; ?>
								</td>
							</tr>
							<?php if(get_post_meta($post->ID, "_meta_food_value",true)){
               				 include('day1czx.php');};?>
	    				</tbody>
	    			</table>
					</div>
			</div>		
	    </div>
			<?php if(get_post_meta($post->ID, "day2content_value",true)){
                include('day2.php');};?>
      <?php if(get_post_meta($post->ID, "day3content_value",true)){
                include('day3.php');};?>
      <?php if(get_post_meta($post->ID, "day4content_value",true)){
                include('day4.php');};?>
      <?php if(get_post_meta($post->ID, "day5content_value",true)){
                include('day5.php');};?>
      <?php if(get_post_meta($post->ID, "day6content_value",true)){
                include('day6.php');};?>
      <?php if(get_post_meta($post->ID, "day7content_value",true)){
                include('day7.php');};?>
	    <div class="jianjie feiyong" id="feiyong"><h3>费用说明</h3>
		    <div class="details">
		    	<?php $fysm = get_post_meta($post->ID, "_meta_fysm_value", true);
					$fysm = apply_filters('the_content', $fysm);
					$fysm = str_replace(']]>', ']]&gt;', $fysm);
				echo$fysm; ?>
		    </div>
	    </div>
	    <div class="jianjie yuding" id="yuding"><h3>预约说明</h3>
	    <div class="details">
	    	<?php $ydxz = get_post_meta($post->ID, "_meta_ydxz_value", true);
				$ydxz = apply_filters('the_content', $ydxz);
				$ydxz = str_replace(']]>', ']]&gt;', $ydxz);
			echo$ydxz; ?>
	    </div>
	    </div>
	    <div class="jianjie tixing" id="tixing"><h3>团建贴士</h3>
	    <div class="details">
	    	<?php $tbtx = get_post_meta($post->ID, "_meta_tbtx_value", true);
				$tbtx = apply_filters('the_content', $tbtx);
				$tbtx = str_replace(']]>', ']]&gt;', $tbtx);
			echo$tbtx; ?>
	    </div>
	    </div>
	<?php endwhile; ?>
	<?php endif; ?>
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
	  })
  </script>
</body>
</html>
