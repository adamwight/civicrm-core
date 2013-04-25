<?php

require_once 'CiviTest/CiviUnitTestCase.php';
class CRM_Core_DAOTest extends CiviUnitTestCase {
  function testGetReferences() {
    // choose CRM_Core_DAO_Email as an arbitrary example
    $emailRefs = CRM_Core_DAO_Email::getReferences();
    $emailRefsByColumn = CRM_Utils_Array::index(array('column'), $emailRefs);
    $this->assertEquals('civicrm_contact', $emailRefsByColumn['contact_id']['foreignTable']);
    $this->assertEquals('id', $emailRefsByColumn['contact_id']['foreignColumn']);
  }

  function testGetReferencesToTable() {
    $r = CRM_Core_DAO::getReferencesToTable("civicrm_contact");
    // FIXME: this reports "array_values() expects parameter 1 to be array, null given"
    print_r($r);
    $this->fail('TODO: Write some assertions about the result');
  }
}
}
