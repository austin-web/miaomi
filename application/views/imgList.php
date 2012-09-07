<!-- 图片列表 -->	

<div class="main-list" id="mainList">
	<?php foreach ($imglist as $item):?>
	<div class="item" imgid="<?php echo($item['imgid']);?>">
		<div class="item-inner">
				<i class="item-top"></i>
				<div class="item-main">
					<div class="item-pic">
						<img src="/miaomi/public/uploads/<?php echo($item['imgname']);?>.jpg" class="J-miaoPic" imgid="<?php echo($item['imgid']);?>" uid="<?php echo($item['uid']); ?>" uname="<?php echo($item['uname']);?>" uurl="<?php echo($item['uurl'])?>" uavatar="<?php echo($item['uavatar']);?>" imgtext="<?php echo($item['imgtext']); ?>" imgdate="<?php echo($item['imgdate']);?>" />
					</div>
					<div class="item-info">
						<p class="item-describe-txt"><?php echo($item['imgtext']);?></p>
						<p class="item-info-num"><span class="num-com">12评论</span><span class="num-like"><span class="num-like-detail" imgid="<?php echo($item['imgid']);?>"><?php echo($item['imglike']);?></span>喜欢</span><span class="num-share">2分享</span></p>
					</div>
				</div>
				<i class="item-hr"></i>
				<div class="item-describe">
						<a target="_blank" class="avatar-wrap" href="http://weibo.com/<?php echo($item['uurl']);?>"><img class="avatar" src="<?php echo($item['uavatar']); ?>"/></a>

						<p class="item-upload-info"><?php echo($item['imgdate']);?> 上传</p>
				</div>
			<div class="item-op">
				<a href="javascript:void(0);" class="ui-icon icon-com" title="评论">评论</a>
				<a href="javascript:void(0);" class="ui-icon icon-like"  imgid="<?php echo($item['imgid']);?>" title="喜欢">喜欢</a>
				<a href="javascript:void(0);" class="ui-icon icon-share" title="分享">分享</a>
			</div>
		</div>

		<i class="item-sd"></i>
	</div>
	<?php endforeach;?>
</div>
<div id="page-nav" style="clear: both;padding:20px 0;"><a href="/miaomi/imglist/page/20">加载更多...</a></div>
    
<!-- 图片列表 -->
<div class="loading-tips-bar"><p class="loading-txt none">喵~没有更多了~</p></div>