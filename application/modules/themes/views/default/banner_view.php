<!-- file added on version 1.4 -->
<?php

$limit = 6;

$CI = get_instance();
$CI->load->model('admin/video_model');

?>

<div class="row no_margin">
 
		<?php
		$video_array = get_table('vp_videos',array('status'=>1),'id','DESC',$limit);
		foreach ($video_array as $post) {  
			$source_title = get_source_title_by_id($post->source_id);
			$source_url = source_video_url($post->source_id,$source_title);            
		?>
			<div class="col-md-4 col-sm-6 col-xs-12 first-img mb-3">
				<div class="itemsContainer page-body-widget-main-img">	
					<a href="<?php echo post_detail_url($post);?>" class="image-link">
						<img class="img-responsive" src="<?php echo $post->media;?>">
						<div class="play"></div>
					</a>
				
					<div class="caption">							
						<span class="label label-danger">
							<time datetime="<?php echo translateable_date($post->publish_time)?>" class="the-date"><?php echo translateable_date($post->publish_time)?></time>
						</span>
					</div>
				</div>
				<div class="first-title">
					<a class="item-heading" href="<?php echo post_detail_url($post);?>"><?php echo $post->title; ?></a>
				</div>							
						
			</div>
		<?php 
		}
		?>

<div class="col-md-12 col-sm-12 col-xs-12">
	<hr class="separator">
</div>
	</div>





