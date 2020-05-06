


                        <div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
                            <!-- Block2 -->
                            <div class="block2">
                                <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                                    <a href="product-detail.php?id=<?php 



							$idenc=SED::encryption($productos['id']);
							echo $idenc;



								?>" class="block2-name dis-block s-text3 p-b-5">
                                        <img src="<?php echo $productos['fotoruta1'] ;?>" alt="IMG-PRODUCT">

                                </div>

                                <div class="block2-txt p-t-20">

                                    <?php
                    			 	echo $productos['nombprod'];
                      				?>
                                    </a>

                                    <span class="block2-price m-text6 p-r-5">
                                        S/.
                                        <?php
	                    			 		echo $productos['Precio'];
	                      				?>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <?php
					
		            ?>
