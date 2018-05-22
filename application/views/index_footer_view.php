<div class="footer">
 <div class="partner_footer">


<section class="partners" style="margin-top: 55px;height: 90px;">
      <script src="<?=base_url();?>js/jquery.carouFredSel-6.2.1-packed.js"></script>
		<div class="list_carousel responsive" >
			<ul id="foo5">
            <?php foreach ($partners as $item):?>
        	
            
            <?php
            
            if($item['link']){
                
                echo '
                <li class="bottom_slide">
                <a target="_blank" href="http://www.'. $item['link'].'">
                <img width="'. $item['width'].'" height="90" src="'. base_url() .'userfiles/banner/'. $item['img'].'" alt="'. $item['alt_text'].'"/>
                </a></li>';
            }
            else{
                
                echo'
                <li class="bottom_slide">
                <img width="'. $item['width'].'" height="90" src="'. base_url() .'userfiles/banner/'. $item['img'].'" alt="'. $item['alt_text'].'"/>
                </li>';
            }
             ;?>
            
            
			 <?php endforeach;?>
            </ul>
			<div class="clearfix"></div>
                <script type="text/javascript">
    				$('#foo5').carouFredSel({
    					width: '100%',
    					scroll: 1
    				});
                </script>
		</div>
        
      </section>
 
 
 </div>
<div class="rekviz_footer"></div>

</div>


</body></html>