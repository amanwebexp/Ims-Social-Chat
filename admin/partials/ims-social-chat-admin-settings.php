<?php
$startChat         = (isset($get_setting_value['whatsapp_start_chat'])) ? $get_setting_value['whatsapp_start_chat'] : '';
$wpContent         = (isset($get_setting_value['whatsapp_content'])) ? $get_setting_value['whatsapp_content'] : '';
$btnColor         = (isset($get_setting_value['Ims_whatsapp_btn_color'])) ? $get_setting_value['Ims_whatsapp_btn_color'] : '';
$txtbtnColor     = (isset($get_setting_value['Ims_whatsapp_txtbtn_color'])) ? $get_setting_value['Ims_whatsapp_txtbtn_color'] : '';
?>
<div class="ims-app-container" id="tabs">
    <div class="ims-app-title-bar">
        <div class="ims-app-title-content">
            <div class="ims-app-title-menu" id="ims-app-menu1"><i class="fab fa-whatsapp fa-2x" style="color: white;"></i>&nbsp<span><?php _e('Ims Social Chat'); ?></span></div>
            <div class="ims-app-title-menu awm-setting-menu" id="ims-app-menu5"><a target="_blank" href="https://www.paypal.me/amanwebexp">You Liked It ? Donation </a><i class="fab fa-paypal fa-2x"></i></div>
        </div>
    </div>
    <div id="tabs-1">
        <form action="" method="post">
            <!-- start msg field -->
            <div class="ims-whatsapp ims-position-msg">
                <div class="ims-whatsapp-content ims-whatsapp-msg-content position-left">
                    <h1> <?php _e('Message to start Chat', 'Ims_whatsapp_chat_wp'); ?></h1>
                    <h3> <?php _e('Pre-filled message that will automatically appear in the text field of a Chat. Example:', 'Ims_whatsapp_chat_wp'); ?><br><br>
                        &nbsp<mark><?php _e('Hello! I am interested in your service', 'Ims_whatsapp_chat_wp'); ?></mark>&nbsp </h3>
                </div>
                <div class="ims-whatsapp-content ims-whatsapp-msg-field position-right">
                    <input type="text" name="whatsapp_start_chat" value="<?php echo  $startChat; ?>">
                </div>
            </div>

            <!-- Button text field -->
            <div class="ims-whatsapp">
                <div class="ims-whatsapp-content ims-whatsapp-btn-content position-left">
                    <h1> <?php _e('Edit text on Widget', 'Ims_whatsapp_chat_wp'); ?> </h1>
                    <h3> <?php _e('Customize your Ims Social Chat Widget text. Example:', 'Ims_whatsapp_chat_wp'); ?>
                        &nbsp<mark><?php _e('imsWEBX Live Support', 'Ims_whatsapp_chat_wp'); ?></mark>&nbsp </h3>
                </div>
                <div class="ims-whatsapp-content ims-whatsapp-btn-field position-right">
                    <input type="text" name="whatsapp_content" value="<?php echo $wpContent; ?>">
                </div>
            </div>

            <!-- Button background color field -->
            <div class="ims-whatsapp">
                <div class="ims-whatsapp-content ims-whatsapp-bgbtncolor position-left">
                    <h1> <?php _e('Button Background Color', 'Ims_whatsapp_chat_wp'); ?> </h1>
                    <h3> <?php _e('Customize your WhatsApp Chat button', 'Ims_whatsapp_chat_wp'); ?>&nbsp<mark><?php _e('background color.', 'Ims_whatsapp_chat_wp'); ?> </mark>&nbsp</h3>
                </div>
                <div class="ims-whatsapp-content ims-whatsapp-bgbtncolor-field position-right">
                    <input type="color" name="whatsapp_btn_color" value="<?php echo $txtbtnColor; ?>">
                </div>
            </div>

            <!-- Button Text color field -->
            <div class="ims-whatsapp">
                <div class="ims-whatsapp-content ims-whatsapp-txtbtncolor position-left">
                    <h1> <?php _e('Button Text Color', 'Ims_whatsapp_chat_wp'); ?> </h1>
                    <h3> <?php _e('Customize your WhatsApp Chat button', 'Ims_whatsapp_chat_wp'); ?>&nbsp<mark><?php _e('text color', 'Ims_whatsapp_chat_wp'); ?> </mark>&nbsp</h3>
                </div>
                <div class="ims-whatsapp-content ims-whatsapp-txtbtncolor-field position-right">
                    <input type="color" name="whatsapp_txtbtn_color" value="<?php echo $Ims_whatsapp_txtbtn_color; ?>">
                </div>
            </div>
            <!-- Button hidden on destop -->
            <div class="ims-whatsapp">
                <div class="ims-whatsapp-content ims-whatsapp-hide-btn-bar position-left">
                    <h1><?php _e('Hide button', 'Ims_whatsapp_chat_wp'); ?></h1>
                    <h3> <?php _e('Turn on to', 'Ims_whatsapp_chat_wp'); ?>&nbsp<mark><?php _e('hide WhatsApp Chat', 'Ims_whatsapp_chat_wp'); ?> </mark></h3>
                </div>
                <div class="ims-whatsapp-content ims-whatsapp-hide-btn-onoff position-right">
                    <label class="ims-whatsapp-switch">
                        <input type="checkbox" name="wp_hidden_button" value="1" <?php (isset($hiden_btn_check)) ? _e($hiden_btn_check) : ''; ?>>
                        <span class="ims-whatsapp-slider round"></span>
                    </label>
                </div>
            </div>

            <!-- Home page button show -->
            <div class="ims-whatsapp" id="ims-display-home">
                <div class="ims-whatsapp-content ims-whatsapp-home-page position-left">
                    <h1><?php _e('Display Only Home Page', 'Ims_whatsapp_chat_wp'); ?></h1>
                    <h3> <?php _e('Turn on to display', 'Ims_whatsapp_chat_wp'); ?>&nbsp<mark><?php _e('only home page', 'Ims_whatsapp_chat_wp'); ?> </mark>&nbsp<?php _e('from your website.', 'Ims_whatsapp_chat_wp'); ?></h3>
                </div>
                <div class="ims-whatsapp-content ims-whatsapp-home-onoff position-right">
                    <label class="ims-whatsapp-switch">
                        <input type="checkbox" name="wp_display_home" value="1" <?php (isset($display_home)) ? _e($display_home) : ''; ?>>
                        <span class="ims-whatsapp-slider round"></span>
                    </label>
                </div>
            </div>

            <!-- mobile display -->
            <div class="ims-whatsapp" id="ims-mobile-app">
                <div class="ims-whatsapp-content ims-whatsapp-mobile position-left">
                    <h1><?php _e('Mobile Display', 'Ims_whatsapp_chat_wp'); ?></h1>
                    <h3> <?php _e('Turn on to keep visible for', 'Ims_whatsapp_chat_wp'); ?>&nbsp<mark><?php _e('mobile display', 'Ims_whatsapp_chat_wp'); ?> </mark>&nbsp<?php _e('only', 'Ims_whatsapp_chat_wp'); ?></h3>
                </div>
                <div class="ims-whatsapp-content ims-whatsapp-mobile-onoff position-right">
                    <label class="ims-whatsapp-switch">
                        <input type="checkbox" name="wp_mobile_display" value="1" <?php (isset($mobile_display)) ? _e($mobile_display) : ''; ?>>
                        <span class="ims-whatsapp-slider round"></span>
                    </label>
                </div>
            </div>

            <!-- woocommerce indigater -->
            <div class="ims-whatsapp">
                <div class="ims-whatsapp-content ims-whatsapp-woocom position-left">
                    <h1><?php _e('WooCommerce', 'Ims_whatsapp_chat_wp'); ?></h1>
                    <h3> <?php _e('Turn on to your', 'Ims_whatsapp_chat_wp'); ?>&nbsp<mark><?php _e('WooCommerce Product', 'Ims_whatsapp_chat_wp'); ?> </mark>&nbsp<?php _e('chat facility', 'Ims_whatsapp_chat_wp'); ?></h3>
                </div>
                <div class="ims-whatsapp-content ims-whatsapp-woocom-onoff position-right">
                    <label class="ims-whatsapp-switch">
                        <input type="checkbox" name="wp_woocom_button" value="1" <?php (isset($woocom_btn_check)) ? _e($woocom_btn_check) : ''; ?>>
                        <span class="ims-whatsapp-slider round"></span>
                    </label>
                </div>
            </div>

            <div class="ims-whatsappp">
                <div class="ims-whatsapp-chat-save">
                    <input type="submit" name="Ims_chat_setting_save" value="<?php _e('Save', 'Ims_whatsapp_chat_wp'); ?>">
                </div>
            </div>
        </form>
    </div>
</div>