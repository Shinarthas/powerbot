<?php

/**
 * Plugin Name: Contact Form 7 - Capsule CRM - Integration
 * Plugin URI: https://wisersteps.com/plugin/contact-form-7-capsule-crm-integration/
 * Description: Contact Form 7 - Capsule CRM Integration allows you to connect your Contact Form 7 to Capsule CRM, Add/Update Person/Organization, Opportunity and Cases and connect them to each other.
 * Version: 1.0.2
 * Author: WiserSteps
 * Author URI: https://www.wisersteps.com
 * Developer: Omar Kasem
 * Developer URI: https://www.wisersteps.com
 * Text Domain: contact-form-7-capsule-crm
 * Domain Path: /languages
 */
// If this file is called directly, abort.
if ( !defined( 'WPINC' ) ) {
    die;
}
// Require Contact form 7
add_action( 'admin_init', 'cfcc_require_cf7' );
function cfcc_require_cf7()
{
    
    if ( !in_array( 'contact-form-7/wp-contact-form-7.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
        add_action( 'admin_notices', function () {
            echo  '<div class="error"><p>Sorry, This Addon Requires Contact form 7 to be installed and activated.</p></div>' ;
        } );
        deactivate_plugins( plugin_basename( __FILE__ ) );
        if ( isset( $_GET['activate'] ) ) {
            unset( $_GET['activate'] );
        }
    }

}


if ( !function_exists( 'cf7cc_fs' ) ) {
    if ( !in_array( 'contact-form-7/wp-contact-form-7.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
        return;
    }
    // Create a helper function for easy SDK access.
    function cf7cc_fs()
    {
        global  $cf7cc_fs ;
        
        if ( !isset( $cf7cc_fs ) ) {
            // Include Freemius SDK.
            require_once dirname( __FILE__ ) . '/freemius/start.php';
            $cf7cc_fs = fs_dynamic_init( array(
                'id'             => '6762',
                'slug'           => 'contact-form-7-capsule-crm',
                'type'           => 'plugin',
                'public_key'     => 'pk_0d4c544f397aea3b7a43ba488668f',
                'is_premium'     => false,
                'premium_suffix' => 'Pro',
                'has_addons'     => false,
                'navigation'     => 'tabs',
                'anonymous_mode' => false,
                'has_paid_plans' => true,
                'menu'           => array(
                'slug'           => 'cfcc-capsule-crm-integration',
                'override_exact' => true,
                'first-path'     => 'admin.php?page=cfcc-capsule-crm-integration',
                'contact'        => false,
                'support'        => false,
                'parent'         => array(
                'slug' => 'wpcf7',
            ),
            ),
                'is_live'        => true,
            ) );
        }
        
        return $cf7cc_fs;
    }
    
    // Init Freemius.
    cf7cc_fs();
    cf7cc_fs()->skip_connection();
    // Signal that SDK was initiated.
    do_action( 'cf7cc_fs_loaded' );
    function cf7cc_fs_settings_url()
    {
        return admin_url( 'admin.php?page=wpcf7-integration&service=capsule-crm&action=setup' );
    }
    
    cf7cc_fs()->add_filter( 'connect_url', 'cf7cc_fs_settings_url' );
    cf7cc_fs()->add_filter( 'after_skip_url', 'cf7cc_fs_settings_url' );
    cf7cc_fs()->add_filter( 'after_connect_url', 'cf7cc_fs_settings_url' );
    cf7cc_fs()->add_filter( 'after_pending_connect_url', 'cf7cc_fs_settings_url' );
}

// Define Name & Version
define( 'CFCC_CAPSULE_CRM_DOMAIN', 'contact-form-7-capsule-crm' );
define( 'CFCC_CAPSULE_CRM_VERSION', '1.0.2' );
define( 'CFCC_CAPSULE_CRM_LOG_FILE', __DIR__ . '/logs/cfcc_capsule_crm.log' );
define( 'CFCC_CAPSULE_CRM_PATH_DIR', __DIR__ );
// Require Main Files
require plugin_dir_path( __FILE__ ) . 'app/class-app.php';
require plugin_dir_path( __FILE__ ) . 'app/class-helper.php';
new CFCC_CAPSULE_CRM\App( CFCC_CAPSULE_CRM_DOMAIN, CFCC_CAPSULE_CRM_VERSION );