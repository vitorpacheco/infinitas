<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    	<?php echo $this->Html->charset(); ?>
    	<title>
    		<?php
    		    echo __( 'Infinitas Admin :: ', true ), $title_for_layout;
        	?>
    	</title>
        <?php
            echo $this->Html->meta( 'icon' );
            echo $this->Html->css( 'admin' );
    		echo $scripts_for_layout;
    		//echo $javascript->link( 'fckeditor' );
    		echo $javascript->link( 'ckeditor/ckeditor' );
        ?>
    </head>
    <body>
        <div id="wrap">
        	<div id="header">
                <?php
                	echo $this->Infinitas->loadModules('top', true);
                	echo $this->Session->flash();
				?>
        	</div>
        	<div id="content">
				<div class="<?php echo isset($this->params['plugin'])?$this->params['plugin']:''; ?>">
					<div class="<?php echo isset($this->params['controller'])?$this->params['controller']:''; ?>">
						<div class="<?php echo isset($this->params['action'])?$this->params['action']:''; ?>">
							<?php echo $content_for_layout; ?>
						</div>
					</div>
				</div>
			</div>
        	<div id="footer">
				<?php echo $this->Infinitas->loadModules('bottom', true); ?>
            </div>
        </div>
        <?php echo $this->element( 'admin/bottom' ); ?>
    </body>
</html>