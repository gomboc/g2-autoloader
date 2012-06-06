G2 Autoloader
=============

Autoloader for G2 packages.

Contributors
------------

* [Draško Gomboc](https://github.com/gomboc)
* [Ivan Kričković](https://github.com/ivankoni)

Requirements
------------

* PHP 5.2 (or later) but PHP 5.3 (or later) is highly recommended.

Install
-------

G2 Autoloader should be installed using the PEAR Installer ([PHP Extension and Application Repository](http://pear.php.net/)). 

The following two commands (which you may have to run as `root`) are all that is required to install package using the PEAR Installer:

    $ pear channel-discover gomboc.github.com/pear
    $ pear install g2/G2_Autoloader

After the installation you can find the source files inside your local PEAR directory; the path is usually `/usr/share/php/G2`.
	
Uninstall
---------

Remove package (run as `root`):

	$ pear uninstall g2/G2_Autoloader
	
Development
-----------

To run the test suite you have to install [PHPUnit](https://github.com/sebastianbergmann/phpunit).

Run the unit tests with the following command:

	$ phpunit -c tests/phpunit.xml 
	
License
-------

Copyright (c) 2012 Draško Gomboc

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
