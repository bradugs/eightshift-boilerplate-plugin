<?php
/**
 * File containing the invalid service exception class
 *
 * @since 1.0.0
 * @package WP_Boilerplate_Plugin\Exception
 */

declare( strict_types=1 );

namespace WP_Boilerplate_Plugin\Exception;

/**
 * Class Invalid_Service.
 */
class Invalid_Service extends \InvalidArgumentException implements General_Exception {

  /**
   * Create a new instance of the exception for a service class name that is
   * not recognized.
   *
   * @param string $service Class name of the service that was not recognized.
   *
   * @return static
   */
  public static function from_service( $service ) {
    $message = sprintf(
      'The service "%s" is not recognized and cannot be registered.',
      is_object( $service )
        ? get_class( $service )
        : (string) $service
    );

    return new static( $message );
  }
}
