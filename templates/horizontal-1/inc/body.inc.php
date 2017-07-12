<body>
	<div class="container-fluid">
        <?php if (HEADER): ?>
       			<div class="row row-eq-height header-row no-gutter">
       				<div class="col-xs-8">
	                    <div class="col-xs-12">
	                        <div><h1>WELCOME TO<br>THE BUILDING</h1></div>
                        	<h3>THE NAV<?php print_r($params);?></h3>
	                    </div>
	                    <div class="col-xs-12">
	                        <h1>PAGE TITLE</h1>
	                    </div>
       				</div>
       				<div class="col-xs-4">
	                    <div class="col-xs-12">
	                        <div><h1>WELCOME TO<br><?php echo PROJECTID; ?></h1></div>
                        	<h3>THE NAV</h3>
	                    </div>
	                    <div class="col-xs-12">
	                        <h1>DIRECTORY</h1>
	                    </div>	                           					
       				</div>
       			</div>
        <?php endif; ?>
        <?php if (INFOBLOCK): ?>
                <div class="row">
        			<div class="col-xs-12">
		                <div class="row row-eq-height primary-row">
		                	<div class="col-xs-4">
				                <div class="row">
				                	<div id="infoblock" class="no-gutter">
										<!--<div class="col-xs-12">
					                        <div><h1>HERE IS THE DATE<br>TIME<br>AND WEATHER</h1></div>
					                    </div> -->
					                    <div class="col-xs-12">
					                        <div>
					                        	<ul class="list-group main-nav">
					                        		<li class="button full-width-button"><a href="<?php echo $dispatcher->router->generate('app_home', array('appid' => $params['appid'])); ?>">HOME</a></li>
					                        		<li class="button full-width-button"><a href="<?php echo $dispatcher->router->generate('company_listings', array('appid' => $params['appid'])); ?>">CITY SERVICES</li>
					                        		<li class="button full-width-button"><a href="<?php echo constant("APP_URIPATH"); ?>/listings/individuals/">INDIVIDUALS</a></li>
					                        		<li class="button full-width-button"><a href="<?php echo $dispatcher->router->generate('app_traffic', array('appid' => $params['appid'])); ?>">TRAFFIC MAP</a></li>
				                        		</ul>
			                        		</div>
					                    </div>
				                    </div>
				                </div>                        
		                    </div>		                               
		                	<div class="col-xs-8 presentation">
					            <?php if (PRIMARY_SLIDESHOW): ?>
					        		<div class="row no-gutter layer">
					        			<div class="col-xs-12">
					        				<div id="front-slideshow" class="slideshow-container" style="text-align: center;">
						        				<div class="layer" style="height: 100%;"><img src="<?php echo constant("PROJECT_URIPATH"); ?>/userfiles/images/front.jpg" style="width:100%;height: 100%; "></div>
						        				<div class="layer"><h1>LAYER 0: BACKGROUND/SLIDESHOW (NO-GUTTER)</h1></div>
					        				</div>
					        			</div>
					        		</div>
					            <?php endif; ?>	
					            <?php if (PRIMARY_LISTINGS): ?>
					        		<div class="row layer">
					        			<div class="col-xs-12">
						        			<div class="row data-layer">
						        				<div class="col-xs-2">
						        					<div class="row row-eq-height">
						        						<div class="col-xs-12">
									        				<div class="row bottom-row">
									        					<div class="col-xs-12">
										        					<h1>LAYER 1<br>LEFT COLUMN</h1>					        						
									        					</div>
									        				</div>
						        						</div>
						        					</div>
						        				</div>
						        				<div class="col-xs-8">
						        					<div class="row no-gutter">
						        						<div class="row">
							        						<div class="col-xs-12">
							        							<div id="listdata">
							        								<h1 style="text-align: center;height:10%;margin:0">LAYER 1 CENTER COLUMN: DATA/CONTENT</h1>
							        								<?=$content?>
							        							</div>
							        						</div>
						        						</div>
						        						<div class="row">
							        						<div class="col-xs-12">
												                <div class="data-nav"><h1 style="text-align: center;">LAYER 1 CENTER COLUMN:<br>SECONDARY NAV</h1></div>
							        						</div>
										                </div>
						        					</div>
						        				</div>
						        				<div class="col-xs-2">
						        					<div class="row row-eq-height">
						        						<div class="col-xs-12">
									        				<div class="row bottom-row">
									        					<div class="col-xs-12" style="text-align: right;">
										        					<h1>LAYER 1<br>RIGHT COLUMN</h1>
									        					</div>
									        				</div>
						        						</div>
						        					</div>
						        				</div>
						        			</div>
					        			</div>
					        		</div>
					        		<div class="row layer bottom-row overlay">
					        			<div class="col-xs-12">				        			
							                <div id="announcements"><h1>LAYER 2: OVERLAYS</h1><h2>ANNOUNCEMENT</h2></div>
					        			</div>
					        		</div>				        		
					            <?php endif; ?>					            	                		
		                	</div>
	        			</div>
        			</div>
                </div>
        <?php endif; ?>            
        <?php if (FOOTER): ?>
		<div class="row footer-row no-gutter">
       				<div class="col-xs-12">
	                    <div class="col-xs-12 headlines">
	                        <div><h1>HEADLINES</h1></div>
                    </div>
		</div>		
        <?php endif; ?>
	</div>
	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="<?php echo constant("PROJECT_URIPATH"); ?>/framework/bootstrap/js/bootstrap.min.js"></script>
	<?=$footer_scripts?>
	<?php if ($footer_inline_scripts != '') {
		include $footer_inline_scripts;
	} ?>
</body>

</html>
