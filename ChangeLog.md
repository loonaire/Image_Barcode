

2024-09-07 20:39 Loonaire <loonairefr@gmail.com>
	* Update compatibility to PHP 8.2
	* Remove php_compat call for str_split function (native in PHP 5.0+)
	* Remove calls to PEAR Error
	* Change function declaration style
	* Move ChangeLog from docs to root repository and add .md extention for ChangeLog and README file

2005-05-24 18:15 Marcelo Subtil Marcal <msmarcal@php.net>

	* Barcode/upca.php:
	Added UPC-A barcode type. Thanks to Jeffrey K. Brown <jkb@darkfantastic.net>

2005-04-11 17:10 Marcelo Subtil Marcal <msmarcal@php.net>

	* Barcode/Code39.php:
	Changed str_split function to get definition from PHP_Compat PEAR
	Package. Closes Bug #1986 (str_split function problem in code39)

2003-12-18 10:05  Marcelo Subtil Marcal <msmarcal@php.net>
	* Barcode.php, Readme.txt, Barcode/int25.php :
	Changed my email address

	* test-image-barcode.php, Barcode/Code39.php:
	Added Code39 barcode type. Thanks do Ryan Briones <ryanbriones@webxdesign.org>

2003-01-21 09:46  Marcelo Subtil Marcal <msmarcal@php.net>

	* Readme.txt, package.xml, Barcode/ean13.php, Barcode/int25.php:
	Added EAN13 barcode type. Thanks to Didier FOURNOUT <didier.fournout@nyc.fr>
	Added a patch to ensure that only numbers
	are given to int25 class. Thanks to Mark A.R. <mark@mark.org.il>

2002-11-28 17:28  Marcelo Subtil Marcal <msmarcal@php.net>

	* Barcode.php, Makefile, Readme.txt, barcode_img.php, package.xml,
	test-image-barcode.php, Barcode/int25.php: Initial revision
