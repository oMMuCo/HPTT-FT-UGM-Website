<?php echo Phrase::trans(331,0);?> &copy; <?php echo date("Y") > '2016' ? '2016-'.date("Y") : '2016' ;?> <a href="<?php echo Yii::app()->createUrl('site/index');?>" title="<?php echo $model->site_title;?>"> <?php echo $model->site_title;?></a>. <?php echo Phrase::trans(332,0);?>. <span class="powered"><?php echo Phrase::trans(333,0);?> <a href="http://swevel.com" target="_blank" title="Ommu Platform">Swevel</a> + <a href="http://opensource.ommu.co" target="_blank" title="Ommu Platform">Ommu Platform</a></span>