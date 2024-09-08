## Important information

This repository is a fork of this repository: https://github.com/pear/Image_Barcode
I have add the support for PHP 8.2 and make some changes in the code. 

## Image_Barcode - a PHP package to render barcodes as picture
------------------------------------------------

With PEAR::Image_Barcode class you can create a barcode representation of a
given string.

This class uses GD function because this the generated graphic can be any of
GD supported supported image types.


= Installation =
----------------

You can install Image_Barcode issuing the following command (as root):

    # pear install Image_Barcode

If you don't have the 'pear' command, please consult PEAR::The PHP Extension and
Application Repository homepage at http://pear.php.net


= Getting Started =
-------------------

Just load the class in your script:

    require_once('Image/Barcode.php');

Call the Image_Barcode::draw() as the follow:

    Image_Barcode::draw('1234', 'int25', 'png');

Where:

= '1234' : string you want to draw as barcode;
= 'int25': barcode type (check the avaible types at 'Barcode' subdir);
= 'png'  : generated graphic type.

## Reporting Bugs and contribution 
------------------

You can use github issues: https://github.com/loonaire/Image_Barcode/issues

## Things to do:

- Remove package.xml
- Move examples from docs to root and delete Readme.txt and docs directory


## Thanks to

- A begin of update for php 5.0+ by wernerwa on: https://github.com/wernerwa/Image_Barcode

- The php community

## Original thanks:

### Credits 
-----------

Core class
    written by Marcelo Subtil Marcal <msmarcal@php.net>

Interleaved 2 of 5 barcode module type
    written by Marcelo Subtil Marcal <msmarcal@php.net>

EAN13 barcode module type
    written by Didier FOURNOUT <didier.fournout@nyc.fr>

Code39 barcode module type
    written by Ryan Briones <ryanbriones@webxdesign.org>

UPC-A and Code128 barcode modules
    written by Jeffrey K. Brown <jkb@darkfantastic.net>

PostNet barcode module type
    written by Josef "Jeff" Sipek <jeffpc@optonline.net>


### Thanks to 
-------------

Mark A.R. <mark@mark.org.il>


### Author 
----------

Written by Marcelo Subtil Marcal <msmarcal@php.net>