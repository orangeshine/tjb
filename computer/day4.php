<div class="jianjie jieshao">
	    	<div class="details">
	    		<div class="travel_day">
	    			<table>
	    				<tbody>
	    					<tr><td class="td1">第四天</td><td class="td2"></td></tr>
	    					<tr>
	    						<td class="td1">行程安排</td>
		    					<td class="td2">
		    					 <?php $day4content = get_post_meta($post->ID, "day4content_value", true);
                    $day4content = apply_filters('the_content', $day4content);
                    $day4content = str_replace(']]>', ']]&gt;', $day4content);
                  echo $day4content; ?>
								</td>
							</tr>
	    					<tr><td class="td1"><i class="iconfont icon-shapewarmspring"></i>用餐</td><td class="td2">
		    				<span>早餐:
                  <?php $food = get_post_meta($post->ID, "_meta_day4food_value", true);
                echo$food; ?>
                </span>
                <span>午餐:
                  <?php $food2 = get_post_meta($post->ID, "_meta_day4food2_value", true);
                echo$food2; ?>
                </span>
                <span>晚餐:
                  <?php $food3 = get_post_meta($post->ID, "_meta_day4food3_value", true);
                echo$food3; ?>
                </span>
	    					</td>
	    					</tr>
	    					<tr><td class="td1"><i class="iconfont icon-shapehotel"></i>住宿</td>
		    					<td class="td2">
		    					<?php $zhusu = get_post_meta($post->ID, "_meta_day4zhusu_value", true);
                  echo$zhusu; ?>
		    					</td>
	    					</tr>
	    					<tr><td class="td1"><i class="iconfont icon-shapebus"></i>交通</td>
		    					<td class="td2">
		    						<?php $jiaotong = get_post_meta($post->ID, "day4_meta_jiaotong_value", true); echo$jiaotong; ?>
		    					</td>
	    					</tr>
	    				</tbody>
	    			</table>
					</div>
			</div>		
	    </div>
