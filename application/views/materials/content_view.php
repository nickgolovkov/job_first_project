
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
         
         <?php foreach ($portfolio as $item):?>
        <div style="float:left; width: 220px; height: 170px; margin: 15px 0 5px 18px;">
        <h4 style="text-align: center;"><?= $item['title'];?></h4>
       <a href="http://www.ra-kontur.by/userfiles/portfolio/<?= $item['baseimg'];?>" class="highslide"  onclick="return hs.expand(this)">
        	       <img  src="http://www.ra-kontur.by/userfiles/portfolio/<?= $item['baseimg_s'];?>" alt=" <?= $item['title'];?>"
        		title="Кликните для увеличения" height="170" /></a>
                    <div class="highslide-caption">
                            <?= $item['title'];?>
                                </div>
        
        
        </div>
                
        <?php endforeach;?>
              
        
                
        <div class="clears"></div>
        </div>
        
</div>

</div>
 <div class="clears"></div>