--TEST--
Check for dom_varimport presence
--SKIPIF--
<?php require_once('skipif.inc'); ?>
--EXTENSIONS--
dom
--FILE--
<?php
echo "dom_varimport extension is available";
?>
--EXPECT--
dom_varimport extension is available
