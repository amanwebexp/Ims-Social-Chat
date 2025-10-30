<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://github.com/amanwebexp/
 * @since      1.0.0
 *
 * @package    Ims_Social_Chat
 * @subpackage Ims_Social_Chat/admin/partials
 */
global $post;

$post_id = $post->ID;
$data = get_post_meta($post_id, '_Ims_wtp_member_acc_', true);

$wDays = (isset($data['Ims_member_weekdays'])) ? $data['Ims_member_weekdays'] : '';

if (!empty($data['Ims_member_all_days']) == 1) : $always_online = 'checked="checked"';
endif; ?>

<div class="ims-wtm-content">
    <div class="ims-wtm-container">
        <div class="ims-wtm-row ims-wtm-no-label">
            <label for="Ims_member_number">Agent WhatApp No.</label>
        </div>
        <div class="ims-wtm-row ims-wtm-column ims-wtm-no-field">
            <input type="text" name="member_number" id="Ims_member_number" value="<?php (isset($data['Ims_member_number'])) ? _e($data['Ims_member_number']) : ''; ?>">
        </div>
    </div>
    <div class="ims-wtm-container">
        <div class="ims-wtm-row ims-wtm-position-label">
            <label for="Ims_member_position">Agent Position</label>
        </div>
        <div class="ims-wtm-row ims-wtm-column ims-wtm-position-field">
            <input type="text" name="member_position" id="Ims_member_position" value="<?php (isset($data['Ims_member_position'])) ? _e($data['Ims_member_position']) : ''; ?>">
        </div>
    </div>
    <div class="ims-wtm-container">
        <div class="ims-wtm-row ims-wtm-position-label">
            <label for="Ims_member_position">Agent Message</label>
        </div>
        <div class="ims-wtm-row ims-wtm-column ims-wtm-position-field">
            <input type="text" name="member_message" id="Ims_member_position" value="<?php (isset($data['Ims_member_message'])) ? _e($data['Ims_member_message']) : ''; ?>">
        </div>
    </div>
    <div class="ims-wtm-container">
        <div class="ims-wtm-row ims-wtm-btntext-label">
            <label for="Ims_member_btntext">Button Text</label>
        </div>
        <div class="ims-wtm-row ims-wtm-column ims-wtm-btntext-field">
            <input type="text" name="member_btntext" id="Ims_member_btntext" value="<?php (isset($data['Ims_member_btntext'])) ? _e($data['Ims_member_btntext']) : ''; ?>">
        </div>
    </div>

    <div class="ims-wtm-container">
        <div class="ims-wtm-row ims-wtm-online-label">
            <label for="Ims_member_all_days">Agent Always Online</label>
        </div>
        <div class="ims-wtm-row ims-wtm-column ims-wtm-online-field">
            <label class="switch">
                <input type="checkbox" name="member_all_days" id="Ims_member_all_days" value="1" <?php (isset($always_online)) ? _e($always_online) : ''; ?>>
                <span class="slider"></span>
            </label>
            </label>
        </div>
    </div>
    <div class="ims-wtm-container  ims-wtm-container-custom">
        <div class="ims-wtm-row ims-wtm-custon-label">
            <label>Custom Availability</label>
        </div>
        <div class="ims-wtm-row ims-wtm-column ims-wtm-custon-field">
            <ul>
                <?php
                $daysArr = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

                foreach ($daysArr as $key => $sDay) {

                    $wDch = (isset($wDays[$sDay]['ischecked'])) ? 'checked' : '';
                    $sTime = (isset($wDays[$sDay]['start_time'])) ? $wDays[$sDay]['start_time'] : '';
                    $eTime = (isset($wDays[$sDay]['end_time'])) ? $wDays[$sDay]['end_time'] : '';

                ?>
                    <li>
                        <!-- sunday time  -->
                        <div class="ims-all-days-column">
                            <div class="ims-day-fields ims-day-checkbox">
                                <input type="checkbox" id="Ims_<?php echo $sDay; ?>" name="day[<?php echo $sDay; ?>][ischecked]" value="1" <?php _e($wDch); ?>>
                            </div>
                            <div class="ims-day-fields ims-day-label ims-sun-label">
                                <label for="Ims_<?php echo $sDay; ?>" class="ims-label "><?php echo $sDay; ?></label>
                            </div>
                            <div class="ims-day-fields ims-day-start-time">
                                <select name="day[<?php echo $sDay; ?>][start_time]" class="slct ims-selct-sun-start">
                                    <option value="">Start Time</option>
                                    <?php for ($i = 0; $i <= 23; $i++) {
                                        $t = $i . ":00";
                                    ?>
                                        <option value="<?php echo $t; ?>" <?php if (!empty($sTime) && $sTime == $t) echo 'selected'; ?>>
                                            <?php echo $t; ?></option>
                                    <?php     } ?>
                                </select>
                            </div>
                            <div class="ims-day-fields ims-day-end-time">
                                <select name="day[<?php echo $sDay; ?>][end_time]" class="slct ims-slct-sun-end">
                                    <option value="">End Time</option>
                                    <?php for ($i = 0; $i <= 23; $i++) {
                                        $t = $i . ':00'; ?>
                                        <option value="<?php echo $t; ?>" <?php if (!empty($eTime) && $eTime == $t) echo 'selected'; ?>>
                                            <?php echo $t; ?></option>
                                    <?php     } ?>
                                </select>
                            </div>
                        </div>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>