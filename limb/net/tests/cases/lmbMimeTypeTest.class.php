<?php
/**
 * Limb Web Application Framework
 *
 * @link http://limb-project.com
 *
 * @copyright  Copyright &copy; 2004-2007 BIT
 * @license    LGPL http://www.gnu.org/copyleft/lesser.html
 * @version    $Id: lmbIpTest.class.php 5001 2007-02-08 15:36:45Z pachanga $
 * @package    net
 */
lmb_require('limb/net/src/lmbMimeType.class.php');

class lmbMimeTypeTest extends UnitTestCase
{
  function getExtensionFailed()
  {
    $this->assertNull(lmbMimeType :: getExtension('foo'));
  }

  function testGetExtension()
  {
    $this->assertEqual(lmbMimeType :: getExtension('text/html'), 'html');
    $this->assertEqual(lmbMimeType :: getExtension('text/rtf'), 'rtf');
  }

  function testGetMimeTypeForExtensionFailed()
  {
    $this->assertNull(lmbMimeType :: getMimeType('booo'));
  }

  function testGetMimeTypeForExtension()
  {
    $this->assertEqual(lmbMimeType :: getMimeType('html'), 'text/html');
    $this->assertEqual(lmbMimeType :: getMimeType('rtf'), 'text/rtf');
  }

  function testGetMimeTypeExtensionWithDot()
  {
    $this->assertEqual(lmbMimeType :: getMimeType('.html'), 'text/html');
    $this->assertEqual(lmbMimeType :: getMimeType('.rtf'), 'text/rtf');
  }

  function testGetMimeTypeForFileFailed()
  {
    $this->assertNull(lmbMimeType :: getFileMimeType('booo.fg'));
  }

  function testGetMimeTypeForFile()
  {
    $this->assertEqual(lmbMimeType :: getFileMimeType('test.html'), 'text/html');
    $this->assertEqual(lmbMimeType :: getFileMimeType('test.rtf'), 'text/rtf');
  }
}
?>