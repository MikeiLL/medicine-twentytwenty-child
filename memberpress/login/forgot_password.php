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

                                                <div class="mp_wrapper">
                                                  <h3><?php _ex('Request a Password Reset', 'ui', 'memberpress'); ?></h3>
                                                  <form name="mepr_forgot_password_form" id="mepr_forgot_password_form" action="" method="post">
                                                    <?php /* nonce not necessary on this form seeing as the user isn't logged in yet */ ?>
                                                    <div class="mp-form-row mepr_forgot_password_input">
                                                      <label for="mepr_user_or_email"><?php _ex('Enter Your Username or Email Address', 'ui', 'memberpress'); ?></label>
                                                      <input type="text" name="mepr_user_or_email" id="mepr_user_or_email" value="<?php echo isset($mepr_user_or_email)?esc_html($mepr_user_or_email):''; ?>" />
                                                    </div>
                                                    <?php MeprHooks::do_action('mepr-forgot-password-form'); ?>
                                                    <div class="mp-spacer">&nbsp;</div>
                                                    <div class="submit">
                                                      <input type="submit" name="wp-submit" id="wp-submit" class="button-primary mepr-share-button" value="<?php _ex('Submit', 'ui', 'memberpress'); ?>" />
                                                      <input type="hidden" name="action" value="forgot_password" />
                                                      <input type="hidden" name="mepr_process_forgot_password_form" value="true" />
                                                    </div>
                                                  </form>
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