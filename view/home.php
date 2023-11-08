        <!-- Slider -->
            <div class="bannercontainer">
                    <div class="banner">
                    <img alt='' src="images/slides/first-slide.jpg">
                    </div>
                </div>

        <!--end slider -->
        
        
        <!-- Main content -->
        <section class="container">
            <div class="movie-best">
                 <div class="col-sm-10 col-sm-offset-1 movie-best__rating">Top Yêu Thích</div>
                 <div class="col-sm-12 change--col">
                     

                     <?php
                        foreach ($phimtop as $phim) {
                            extract($phim);
                            $img=$img_path.$img;
                            echo '<div class="movie-beta__item ">
                                    <img alt="" src="'.$img.'"> 
                                    <span class="best-rate">'.$sao.'</span>
                                </div>';
                        }
                     ?>

                 </div>
                <div class="col-sm-10 col-sm-offset-1 movie-best__check">check all movies now playing</div>
            </div>

            
            
            <div class="clearfix"></div>

            <h2 id='target' class="page-heading heading--outcontainer">Xem Phim</h2>

            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-8 col-md-9">
                        <!-- Movie variant with time -->
                        <?php
                            foreach ($phimnew as $phim) {
                                extract($phim);
                                $link="index.php?act=sanphamct&id".$id;
                                $hinh=$img_path.$img;
                                echo '<div class="movie movie--test movie--test--dark movie--test--left">
                                <div class="movie__images">
                                    <a href="'.$link.'" class="movie-beta__link">
                                        <img alt="" src="'.$hinh.'">
                                    </a>
                                </div>

                                <div class="movie__info">
                                    <a href="" class="movie__title">'.$tenphim.'</a>

                                    <p class="movie__time">'.$giochieu.'</p>

                                    <p class="movie__option"><a href="#">'.$theloai.'</p>
                                    
                                    
                                </div>
                            </div>';
                            }
                        ?>
                            
                         <!-- Movie variant with time -->


                        </div>

                    
    
                        </div>
                    </aside>
                </div>
            </div>
            </div>
                
        </section>
        
