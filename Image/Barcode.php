<?php
/* vim: set expandtab tabstop=4 softtabstop=4 shiftwidth=4: */

/**
 * Image_Barcode class
 *
 * Package to render barcodes
 *
 * PHP versions 4
 *
 * LICENSE: This source file is subject to version 3.0 of the PHP license
 * that is available through the world-wide-web at the following URI:
 * http://www.php.net/license/3_0.txt.  If you did not receive a copy of
 * the PHP License and are unable to obtain it through the web, please
 * send a note to license@php.net so we can mail you a copy immediately.
 *
 * @category   Image
 * @package    Image_Barcode
 * @author     Marcelo Subtil Marcal <msmarcal@php.net>
 * @copyright  2005 The PHP Group
 * @license    http://www.php.net/license/3_0.txt  PHP License 3.0
 * @version    CVS: $Id$
 * @link       http://pear.php.net/package/Image_Barcode
 */

/**
 * Image_Barcode class
 *
 * Package which provides a method to create barcode using GD library.
 *
 * @category   Image
 * @package    Image_Barcode
 * @author     Marcelo Subtil Marcal <msmarcal@php.net>
 * @copyright  2005 The PHP Group
 * @license    http://www.php.net/license/3_0.txt  PHP License 3.0
 * @version    Release: @package_version@
 * @link       http://pear.php.net/package/Image_Barcode
 */
class Image_Barcode {
    /**
     * Draws a image barcode
     *
     * @param  string $text     A text that should be in the image barcode
     * @param  string $type     The barcode type. Supported types:
     *                          Code39 - Code 3 of 9
     *                          int25  - 2 Interleaved 5
     *                          ean13  - EAN 13
     *                          upca   - UPC-A
     * @param  string $imgtype  The image type that will be generated
     * @param  boolean $bSendToBrowser  if the image shall be outputted to the
     *                                  browser, or be returned.
     *
     * @return image            The corresponding gd image object;
     *                           PEAR_Error on failure
     *
     * @access public
     *
     * @author Marcelo Subtil Marcal <msmarcal@php.net>
     * @since  Image_Barcode 0.3
     */
    public function draw($text, $type = 'int25', $imgtype = 'png', $bSendToBrowser = true, $height=60, $barwidth = 1) {
        //Make sure no bad files are included
        if (!preg_match('/^[a-zA-Z0-9_-]+$/', $type)) {
            return throw new Exception('Invalid barcode type ' . $type);
        }
        if (!include_once('Image/Barcode/' . $type . '.php')) {
            return throw new Exception($type . ' barcode is not supported');
        }

        $classname = 'Image_Barcode_' . $type;

        if (!in_array('draw',get_class_methods($classname))) {
            return throw new Exception("Unable to find draw method in '$classname' class");
        }

        @$obj = new $classname();
    
	if (isset($obj->_barcodeheight)) $obj->_barcodeheight = $height;
	if (isset($obj->_barwidth)) $obj->_barwidth = $barwidth;

        $img = $obj->draw($text, $imgtype);

        if (!$img) {
            return $img;
        }

        if ($bSendToBrowser) {
            // Send image to browser
            switch ($imgtype) {
                case 'gif':
                    header('Content-type: image/gif');
                    imagegif($img);
                    imagedestroy($img);
                    break;

                case 'jpg':
                    header('Content-type: image/jpg');
                    imagejpeg($img);
                    imagedestroy($img);
                    break;

                default:
                    header('Content-type: image/png');
                    imagepng($img);
                    imagedestroy($img);
                    break;
            }
        } else {
            return $img;
        }
    }
}

