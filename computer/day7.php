<div class="jianjie jieshao"">
	    	<div class="details">
	    		<div class="travel_day">
	    			<table>
	    				<tbody>
	    					<tr><td class="td1">第七天</td><td class="td2"></td></tr>
	    					<tr>
	    						<td class="td1">行程安排</td>
		    					<td class="td2">
		    					 <?php $day7content = get_post_meta($post->ID, "day7content_value", true);
                    $day7content = apply_filters('the_content', $day7content);
                    $day7content = str_replace(']]>', ']]&gt;', $day7content);
                  echo $day7content; ?>
								</td>
							</tr>
	    					<tr><td class="td1"><i class="iconfont icon-shapewarmspring"></i>用餐</td><td class="td2">
		    				<span>早餐:
                  <?php $food = get_post_meta($post->ID, "_meta_day7food_value", true);
                echo$food; ?>
                </span>
                <span>午餐:
                  <?php $food2 = get_post_meta($post->ID, "_meta_day7food2_value", true);
                echo$food2; ?>
                </span>
                <span>晚餐:
                  <?php $food3 = get_post_meta($post->ID, "_meta_day7food3_value", true);
                echo$food3; ?>
                </span>
	    					</td>
	    					</tr>
	    					<tr><td class="td1"><i class="iconfont icon-shapehotel"></i>住宿</td>
		    					<td class="td2">
		    					<?php $zhusu = get_post_meta($post->ID, "_meta_day7zhusu_value", true);
                  echo$zhusu; ?>
		    					</td>
	    					</tr>
	    					<tr><td class="td1"><i class="iconfont icon-shapebus"></i>交通</td>
		    					<td class="td2">
		    						<?php $jiaotong = get_post_meta($post->ID, "day7_meta_jiaotong_value", true); echo$jiaotong; ?>
		    					</td>
	    					</tr>
	    				</tbody>
	    			</table>
					</div>
			</div>		
	    </div>
