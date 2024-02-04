<?php

/**
 * Sanitize file uploads by converting to number to allow FB image sharing in arabic
 * @param array $file
 * @return string
 */
function sanitize_file_uploads($file) {
    //$file['name'] = time() . '-' . rand(100,999) . '-' . $file['size'];
    $file['name'] = time() . '_' . rand(100, 999) . '_' . $file['size'] . '_' . $file['name'];
    $file['name'] = sanitize_file_name($file['name']);
    $file['name'] = preg_replace("/[^a-zA-Z0-9\_\.]/", "", $file['name']);
    $file['name'] = strtolower($file['name']);
    return $file;
}
add_filter('wp_handle_upload_prefilter', 'sanitize_file_uploads');
