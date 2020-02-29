<div class="container">
        <div class="blog-section">
            <?php foreach(get_posts_by_category('СМИ') as $per_post):?>
            <a class="blog-item" href="<?php echo $per_post->guid;?>">
                <div class="blog-img"><img src="<?php echo get_field('smi_ava', $per_post->ID)?>" alt="">
                </div>
                <div class="blog-info"><b><?php echo $per_post->post_title;?></b>
                    <p><?php echo $per_post->post_content;?></p><span class="detail-blog"> Подробнее</span>
                </div>
            </a>
            <?php endforeach;?>
        </div>
      </div>
