----------------------

                                                             <link href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
                                                            <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
                                                            <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
                                                            <!-- Javascript -->
                                                            <!---
															<script>
																$(function() {
																	$( "#slider-3" ).slider({
																	range:true,
																	min: 0,
																	max: 500,
																	values: [ 35, 200 ],
																	slide: function( event, ui ) {
																		$( "#price" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
																	}
																});
																$( "#price" ).val( "$" + $( "#slider-3" ).slider( "values", 0 ) +
																	" - $" + $( "#slider-3" ).slider( "values", 1 ) );
																});
															</script>

															-->

															 <script>
																$(function() {
																	$( "#slider-2" ).slider({
																	value: 5,
																	animate:"slow",
																	 slide: function( event, ui ) {
																		$( "#price" ).val( ui.value );
																	},	
																	orientation: "horizontal"
																	});
																	
																});
															</script>
                                                        
                                                      
                                                            <!-- HTML --> 
                                                            <p>
																<label for="price">Price range:</label>
																<input type="text" disabled id="price" style="border:0; color:#b9cd6d; font-weight:bold;">%
															</p>
															<div id="slider-2"></div>
                                                        
                                                        ----------------------