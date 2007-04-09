<?php
if(!class_exists('lmbTestGroup'))
  return false;

$file = realpath(dirname(__FILE__) . '/../../src/lmbTestGroup.class.php');
if($res = !in_array($file, get_included_files()))
{
  echo "\nRunning tests using another installation of TESTS_RUNNER is restricted!\n";
  echo "No tests will be executed(use ../test_self.php instead).\n\n";
}

return $res;
?>