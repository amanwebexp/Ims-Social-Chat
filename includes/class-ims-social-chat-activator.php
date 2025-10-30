<?php

/**
 * Fired during plugin activation
 *
 * @link       https://github.com/amanwebexp/
 * @since      1.0.0
 *
 * @package    Ims_Social_Chat
 * @subpackage Ims_Social_Chat/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Ims_Social_Chat
 * @subpackage Ims_Social_Chat/includes
 * @author     Aman <aman.webexp@gmail.com>
 */
class Ims_Social_Chat_Activator
{

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate()
	{
		if (get_option('ims-social-default-status') != 1) {
			update_option('ims-social-default-status', 1);
			update_option('ims-whatsapp-setting-field-M', array(
				'whatsapp_start_chat' => "Hello! I am interested in your service",
				'whatsapp_content' => "amanwebexp Live Support",
			));
		}
	}
}
