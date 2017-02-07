<div class="jianjie jieshao">
	    	<div class="details">
	    		<div class="travel_day">
	    			<table>
	    				<tbody>
	    					<tr><td class="td1">第三天</td><td class="td2"></td></tr>
	    					<tr>
	    						<td class="td1">行程安排</td>
		    					<td class="td2">
		    					 <?php $day3content = get_post_meta($post->ID, "day3content_value", true);
                    $day3content = apply_filters('the_content', $day3content);
                    $day3content = str_replace(']]>', ']]&gt;', $day3content);
                  echo $dy3content; ?>
								</td>
							</tr>
	    					<tr><td class="td1"><i class="iconfont icon-shapewarmspring"></i>用餐</td><td class="td2">
		    				<span>早餐:
                  <?php $food = get_post_meta($post->ID, "_meta_day3food_value", true);
                echo$food; ?>
                </span>
                <span>午餐:
                  <?php $food2 = get_post_meta($post->ID, "_meta_day3food2_value", true);
                echo$food2; ?>
                </span>
                <span>晚餐:
                  <?php $food3 = get_post_meta($post->ID, "_meta_day3food3_value", true);
                echo$food3; ?>
                </span>
	    					</td>
	    					</tr>
	    					<tr><td class="td1"><i class="iconfont icon-shapehotel"></i>住宿</td>
		    					<td class="td2">
		    					<?php $zhusu = get_post_meta($post->ID, "_meta_day3zhusu_value", true);
                  echo$zhusu; ?>
		    					</td>
	    					</tr>
	    					<tr><td class="td1"><i class="iconfont icon-shapebus"></i>交通</td>
		    					<td class="td2">
		    						<?php $jiaotong = get_post_meta($post->ID, "day3_meta_jiaotong_value", true); echo$jiaotong; ?>
		    					</td>
	    					</tr>
	    				</tbody>
	    			</table>
					</div>
			</div>		
	    </div>
