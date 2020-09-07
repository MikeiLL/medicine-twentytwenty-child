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
                                                <?php if(is_page($login_page_id) && isset($redirect_to) && !empty($redirect_to) &&
                                                         (!isset($_GET['action']) || $_GET['action'] != 'mepr_unauthorized')): ?>
                                                  <script type="text/javascript">
                                                    window.location.href="<?php echo $redirect_to; ?>";
                                                  </script>
                                                <?php endif; ?>

                                                <div class="mepr-already-logged-in">
                                                  <?php printf(_x('You\'re already logged in. %1$sLogout.%2$s', 'ui', 'memberpress'), '<a href="'. wp_logout_url($redirect_to) . '">', '</a>'); ?>
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