<?php get_header(); ?>
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>

            <?php
                $introductionBackgroundImage = get_field("introduction_background_image");
                $introductionTitleFirst = get_field("introduction_title_first");
                $introductionTitleSur = get_field("introduction_title_sur");
                $introductionSubtitle = get_field("introduction_subtitle");
                $introductionDescription = get_field("introduction_description");
                $videoBackgroundImage = get_field("video_background_image");
                $videoTitle = get_field("video_title");
                $videoText = get_field("video_text");
                $videoTelevision = get_field("video_television");
                $videoTelevisionCV = get_field("video_television_cv");
                $portfolioBackgroundImageUpper = get_field("portfolio_background_image_upper");
                $portfolioBackgroundImageLower = get_field("portfolio_background_image_lower");
                $portfolioTitleP = get_field("portfolio_title_p");
                $portfolioTitleO = get_field("portfolio_title_o");
                $portfolioTitleR = get_field("portfolio_title_r");
                $portfolioTitleT = get_field("portfolio_title_t");
                $portfolioTitleF = get_field("portfolio_title_f");
                $portfolioTitleL = get_field("portfolio_title_l");
                $portfolioTitleI = get_field("portfolio_title_i");
                $worksMiddleText = get_field("works_middle_text");
                $contactBackgroundImage = get_field("contact_background_image");
                $contactPhoneImage = get_field("contact_phone_image");
                $contactTitleImage = get_field("contact_title");
                $contactText = get_field("contact_text");
                $contactPhoneNumber = get_field("contact_phone_number");
                $contactEmail = get_field("contact_email");
                $contactLinkedIn = get_field("contact_linkedin");
                $contactTitleImageLower = get_field("contact_lower_title");
                $contactTextLower = get_field("contact_lower_text");
                $contactCVDownload = get_field("contact_cv_download");
                $bottomBackgroundImage = get_field("bottom_background_image");
            ?>

            <div class="container">
                <section class="introduction-section" style="background-image: url('<?php echo ($introductionBackgroundImage['url']); ?>');" fetchpriority="high">
                    <div class="introduction-text-area">
                        <h1 class="introduction-title-first"><?php echo $introductionTitleFirst; ?></h1>
                        <h1 class="introduction-title-sur"><?php echo $introductionTitleSur; ?></h1>
                        <h5 class="introduction-subtitle"><?php echo $introductionSubtitle; ?></h5>
                        <p class="introduction-description"><?php echo $introductionDescription; ?></p>
                    </div>
                </section>

                <section class="video-section">
                    <div class="video-container" style="background-image: url('<?php echo ($videoBackgroundImage['url']); ?>');">
                        <img class="video-title" src="<?php echo $videoTitle["url"]; ?>" alt="<?php echo $videoTitle["alt"]; ?>">
                        <p class="video-text"><?php echo $videoText; ?></p>
                        <div class="television-area">
                            <img class="television" src="<?php echo $videoTelevision["url"]; ?>" alt="<?php echo $videoTelevision["alt"]; ?>">
                            <iframe
                                width="363px" height="272px"
                                src="<?php echo $videoTelevisionCV; ?>"
                                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                </section>

                <section class="works-section">
                    <div class="works-background-upper"   
                    data-img-desktop="<?php echo $portfolioBackgroundImageUpper['url']; ?>"
                    data-img-mobile="<?php echo $videoBackgroundImage['url']; ?>">
                        <div class="works-title">
                            <img class="works-title-letter"  src="<?php echo $portfolioTitleP["url"]; ?>" alt="<?php echo $portfolioTitleP["alt"]; ?>">
                            <img class="works-title-letter"  src="<?php echo $portfolioTitleO["url"]; ?>" alt="<?php echo $portfolioTitleO["alt"]; ?>">
                            <img class="works-title-letter"  src="<?php echo $portfolioTitleR["url"]; ?>" alt="<?php echo $portfolioTitleR["alt"]; ?>">
                            <img class="works-title-letter"  src="<?php echo $portfolioTitleT["url"]; ?>" alt="<?php echo $portfolioTitleT["alt"]; ?>">
                            <img class="works-title-letter"  src="<?php echo $portfolioTitleF["url"]; ?>" alt="<?php echo $portfolioTitleF["alt"]; ?>">
                            <img class="works-title-letter"  src="<?php echo $portfolioTitleO["url"]; ?>" alt="<?php echo $portfolioTitleO["alt"]; ?>">
                            <img class="works-title-letter"  src="<?php echo $portfolioTitleL["url"]; ?>" alt="<?php echo $portfolioTitleL["alt"]; ?>">
                            <img class="works-title-letter"  src="<?php echo $portfolioTitleI["url"]; ?>" alt="<?php echo $portfolioTitleI["alt"]; ?>">
                            <img class="works-title-letter"  src="<?php echo $portfolioTitleO["url"]; ?>" alt="<?php echo $portfolioTitleO["alt"]; ?>">
                        </div>

                        <div class="works-left-side">
                            <?php
                            $polaroid1 = get_posts([
                                'name' => 'polaroid-1',
                                'post_type' => 'polaroid',
                                'numberposts' => 1
                            ])[0];

                            $polaroidImage = get_field('polaroid_image', $polaroid1->ID);
                            $polaroidTitle = get_field('polaroid_title', $polaroid1->ID);
                            $polaroidImageExpanded = get_field('polaroid_expanded_image', $polaroid1->ID);
                            $polaroidTitleExpanded = get_field('polaroid_expanded_title', $polaroid1->ID);
                            $polaroidSubtitleExpanded = get_field('polaroid_expanded_subtitle', $polaroid1->ID);
                            $polaroidDescExpanded = get_field('polaroid_expanded_description', $polaroid1->ID);
                            ?>

                            <div class="works-polaroid">
                                <img class="polaroid-image" src="<?php echo ($polaroidImage)["url"]; ?>" alt="<?php echo ($polaroidImage)["alt"]; ?>">
                                <p class="polaroid-title"><?php echo ($polaroidTitle); ?></p>
                                <div class="polaroid-expanded-left">
                                    <img class="polaroid-image-expanded-left" src="<?php echo ($polaroidImageExpanded)["url"]; ?>" alt="<?php echo ($polaroidImage)["alt"]; ?>">
                                    <div class="polaroid-text-area-left">
                                        <p class="polaroid-title-expanded"><?php echo ($polaroidTitleExpanded); ?></p>
                                        <p class="polaroid-subtitle-expanded"><?php echo ($polaroidSubtitleExpanded); ?></p>
                                        <p class="polaroid-desc-expanded"><?php echo ($polaroidDescExpanded); ?></p>
                                    </div>
                                </div>
                            </div>

                            <div class="works-text-area">
                                <p class="works-text"><?php echo ($worksMiddleText); ?></p>
                            </div>

                            <?php
                            $polaroid2 = get_posts([
                                'name' => 'polaroid-2',
                                'post_type' => 'polaroid',
                                'numberposts' => 1
                            ])[0];

                            $polaroidImage = get_field('polaroid_image', $polaroid2->ID);
                            $polaroidTitle = get_field('polaroid_title', $polaroid2->ID);
                            $polaroidImageExpanded = get_field('polaroid_expanded_image', $polaroid2->ID);
                            $polaroidTitleExpanded = get_field('polaroid_expanded_title', $polaroid2->ID);
                            $polaroidSubtitleExpanded = get_field('polaroid_expanded_subtitle', $polaroid2->ID);
                            $polaroidDescExpanded = get_field('polaroid_expanded_description', $polaroid2->ID);
                            ?>

                            <div class="works-polaroid">
                                <img class="polaroid-image" src="<?php echo ($polaroidImage)["url"]; ?>" alt="<?php echo ($polaroidImage)["alt"]; ?>">
                                <p class="polaroid-title"><?php echo ($polaroidTitle); ?></p>
                                <div class="polaroid-expanded-left">
                                    <img class="polaroid-image-expanded-left" src="<?php echo ($polaroidImageExpanded)["url"]; ?>" alt="<?php echo ($polaroidImage)["alt"]; ?>">
                                    <div class="polaroid-text-area-left">
                                        <p class="polaroid-title-expanded"><?php echo ($polaroidTitleExpanded); ?></p>
                                        <p class="polaroid-subtitle-expanded"><?php echo ($polaroidSubtitleExpanded); ?></p>
                                        <p class="polaroid-desc-expanded"><?php echo ($polaroidDescExpanded); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="works-right-side">
                            <?php
                            $args = array(
                                'post_type' => 'polaroid',
                                'posts_per_page' => 3,
                            );

                            $loop = new WP_Query($args);

                            if ($loop->have_posts()) :
                                while ($loop->have_posts()) : $loop->the_post();
                                    $polaroidImage = get_field("polaroid_image");
                                    $polaroidTitle = get_field("polaroid_title");
                                    $polaroidImageExpanded = get_field('polaroid_expanded_image');
                                    $polaroidTitleExpanded = get_field('polaroid_expanded_title');
                                    $polaroidSubtitleExpanded = get_field('polaroid_expanded_subtitle');
                                    $polaroidDescExpanded = get_field('polaroid_expanded_description');
                            ?>
                                    <div class="works-polaroid">
                                        <img class="polaroid-image" src="<?php echo ($polaroidImage)["url"]; ?>" alt="<?php echo ($polaroidImage)["alt"]; ?>">
                                        <p class="polaroid-title"><?php echo ($polaroidTitle); ?></p>
                                        <div class="polaroid-expanded-right">
                                    <img class="polaroid-image-expanded-right" src="<?php echo ($polaroidImageExpanded)["url"]; ?>" alt="<?php echo ($polaroidImage)["alt"]; ?>">
                                    <div class="polaroid-text-area-right">
                                        <p class="polaroid-title-expanded"><?php echo ($polaroidTitleExpanded); ?></p>
                                        <p class="polaroid-subtitle-expanded"><?php echo ($polaroidSubtitleExpanded); ?></p>
                                        <p class="polaroid-desc-expanded"><?php echo ($polaroidDescExpanded); ?></p>
                                    </div>
                                </div>
                                    </div>
                            <?php
                                endwhile;
                            endif;
                            wp_reset_postdata();
                            ?>
                        </div>
                    </div>
                    <div class="works-background-lower" class="works-section" style="background-image: url('<?php echo ($portfolioBackgroundImageLower['url']); ?>');"></div>
                </section>

                <section class="contact-section">
                    <div class="contact-container" style="background-image: url('<?php echo ($contactBackgroundImage['url']); ?>');">
                        <div class="contact-text-area">
                            <img class="contact-title" src="<?php echo $contactTitleImage["url"]; ?>" alt="<?php echo $contactTitleImage["alt"]; ?>">
                            <p class="contact-text"><?php echo ($contactText); ?></p>
                            <div class="contact-text-area-info">
                                <div class="content-text-area-info-left">
                                    <p><i class="fa-solid fa-phone" style="color: #f7ddad;"></i><?php echo ($contactPhoneNumber); ?></p>
                                    <p><i class="fa-solid fa-envelope" style="color: #f7ddad;"></i><?php echo ($contactEmail); ?></p>
                                </div>
                                <a href="<?php echo ($contactLinkedIn); ?>" class="fa-brands fa-linkedin" style="color: #f7ddad;"></a>
                            </div>
                            <div class="contact-text-area-lower">
                                <img class="contact-title-lower" src="<?php echo $contactTitleImageLower["url"]; ?>" alt="<?php echo $contactTitleImageLower["alt"]; ?>">
                                <p class="contact-text-lower"><?php echo ($contactTextLower); ?></p>
                                <button class="cv-button">
                                    <a href="<?php echo $contactCVDownload['url']; ?>">Download CV</a>
                                </button>
                            </div>
                        </div>
                        <div class="contact-phone-area">
                            <img class="contact-phone" src="<?php echo $contactPhoneImage["url"]; ?>" alt="<?php echo $contactPhoneImage["alt"]; ?>">
                        </div>
                    </div>
                </section>

                <section class="bottom">
                    <div class="bottom-image" style="background-image: url('<?php echo ($bottomBackgroundImage['url']); ?>');"></div>
                </section>
            </div>

        <?php endwhile; ?>
    <?php endif; ?>
<?php get_footer(); ?>