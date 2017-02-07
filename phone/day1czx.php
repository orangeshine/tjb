<div class="yongcan">
    <i class="iconfont icon-shapewarmspring"></i>用餐：
    <span>早餐:
        <?php $food = get_post_meta($post->ID, "_meta_food_value", true);
    echo$food; ?>
    </span>
    <span>午餐:
        <?php $food2 = get_post_meta($post->ID, "_meta_food2_value", true);
    echo$food2; ?>
    </span>
    <span>晚餐:
        <?php $food3 = get_post_meta($post->ID, "_meta_food3_value", true);
    echo$food3; ?>
    </span>
</div>
<div class="zhusu">
    <span><i class="iconfont icon-shapehotel"></i>住宿：</span>
    <span><?php $zhusu = get_post_meta($post->ID, "_meta_zhusu_value", true);
echo$zhusu; ?></span>
</div>
<div class="jiaotong">
    <span><i class="iconfont icon-shapebus"></i>交通：</span>
    <span><?php $jiaotong = get_post_meta($post->ID, "_meta_jiaotong_value", true);
echo$jiaotong; ?></span>
</div>