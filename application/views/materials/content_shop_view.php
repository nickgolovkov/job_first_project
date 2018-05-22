
  <div class="info_box" style="height: auto; overflow: hidden;padding-bottom: 15px;">
<script type="text/javascript" src="http://www.ra-kontur.by/js/highslide-with-gallery.js"></script>
<link rel="stylesheet" type="text/css" href="http://www.ra-kontur.by/css/highslide.css" />       


<script type="text/javascript">
hs.graphicsDir = '<?=base_url();?>css/graphics/';
hs.align = 'center';
hs.transitions = ['expand', 'crossfade'];
hs.outlineType = 'glossy-dark';
hs.wrapperClassName = 'dark';
hs.fadeInOut = true;
hs.dimmingOpacity = 0.75;

// Add the controlbar
if (hs.addSlideshow) hs.addSlideshow({
	//slideshowGroup: 'group1',
	interval: 5000,
	repeat: false,
	useControls: true,
	fixedControls: 'fit',
	overlayOptions: {
		opacity: .6,
		position: 'bottom center',
		hideOnMouseOut: true
	}
});

</script>


        <div class="page_text">
         <div class="clears"></div> 
         
         <?php foreach ($materials as $item):?>
         
         <div class="box-shop">

    <div style="width: 100%;height: 50px;">
        <div class="shop-title"><span><?= $item['title'];?></span></div>
        <div class="shop-price" ><span><?= $item['price'];?></span></div>
    </div>
    <div style="width: 100%;height: 210px;">
        <div class="box-shop-img">
            <a href="http://www.ra-kontur.by/userfiles/shop/<?= $item['baseimg'];?>" class="highslide"  onclick="return hs.expand(this)">
            	       <img  src="http://www.ra-kontur.by/userfiles/shop/<?= $item['baseimg_s'];?>" alt=" <?= $item['title'];?>"
            		title="Кликните для увеличения" width="190" height="190" /></a>
                        <div class="highslide-caption">
                                <?= $item['title'];?>
                                    </div>

        </div>
        <div class="box-shop-text"><?= $item['text'];?></div>
    </div>


</div>   
        <?php endforeach;?>
              
        
                
        <div class="clears"></div>
        </div>
        
</div>

</div>
 <div class="clears"></div>