<?php if(!defined('ABSPATH')) {die('You are not allowed to call this page directly.');} ?>

        <div class="elementor-section-wrap memberpress-login-page">
            <div class="elementor-section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element">
                            <div class="elementor-column-wrap elementor-element-popupated">
                                <div class="elementor-widget-wrap login-form-wrap">
                                    <div class="elementor-element elementor-element-427ab80 elementor-widget elementor-widget-shortcode">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-shortcode">

                                                <div class="mp_wrapper mepr_password_reset_requested">
                                                  <h3><?php _ex('Successfully requested password reset', 'ui', 'memberpress'); ?></h3>
                                                  <p><?php _ex('Please click on the confirmation link that was just sent to your email address.', 'ui', 'memberpress'); ?></p>
                                                </div>

                                                
                                            </div> <!-- end elementor shortcode -->
                                        </div> <!-- widget container -->
                                    </div> <!-- end elementor element -->
                                </div> <!-- end elementor widget wrap -->
                            </div>  <!-- end elementor column wrap -->
                        </div>  <!-- end elementor column -->

                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element">
                            <div class="elementor-column-wrap elementor-element-popupated">
                                <?php
                                if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("memberpress_login_additional_column") ) : 

                                endif;
                                ?>
                            </div>  <!-- end elementor column wrap -->
                        </div>  <!-- end elementor column -->
                    </div>  <!-- end elementor row -->
                </div>  <!-- end elementor container -->