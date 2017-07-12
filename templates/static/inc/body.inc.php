<body>
	<div class="container-fluid">
        <?php if (HEADER): ?>
        <?php endif; ?>
        <?php if (INFOBLOCK): ?>
                <div class="row">
        			<div class="col-xs-12">
		                <div class="row row-eq-height primary-row">                
		                	<div class="col-xs-12 presentation">
					            <?php if (PRIMARY_SLIDESHOW): ?>
					        		<div class="row no-gutter layer">
					        			<div class="col-xs-12">
					        				<div id="front-slideshow" class="slideshow-container" style="text-align: center;">
						        				<div class="layer" style="height: 100%;"><img src="<?php echo constant("APP_URIPATH"); ?>/images/dog-1600.jpg" style="width:100%;height: 100%; "></div>
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
							        								<h1 style="text-align: center;height:10%;margin:0">LAYER 1 CENTER COLUMN:<br>DATA/CONTENT</h1>
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
					            <?php endif; ?>					            	                		
		                	</div>
	        			</div>
        			</div>
                </div>
        <?php endif; ?>     
        <?php if (FOOTER): ?>       
        <div class="footer row">
        				<div class="col-xs-2">
        				</div>
					        			<div class="col-xs-8">				        			
							                <div id="announcements"><h1>LAYER 2: OVERLAYS</h1><h2>ANNOUNCEMENT</h2></div>
					        			</div>
        				<div class="col-xs-2">
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
