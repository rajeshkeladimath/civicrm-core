<?php
/*
 +--------------------------------------------------------------------+
 | Copyright CiviCRM LLC. All rights reserved.                        |
 |                                                                    |
 | This work is published under the GNU AGPLv3 license with some      |
 | permitted exceptions and without any warranty. For full license    |
 | and copyright information, see https://civicrm.org/licensing       |
 +--------------------------------------------------------------------+
 */

/**
 *
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 */

/**
 * This class provides the functionality to add contact(s) to Individual.
 */
class CRM_Contact_Form_Task_AddToIndividual extends CRM_Contact_Form_Task_AddToParentClass {

  /**
   * Build the form object.
   */
  public function buildQuickForm() {
    $this->set('contactType', 'Individual');
    $this->assign('contactType', 'Individual');
    parent::buildQuickForm();
  }

  /**
   * Process the form after the input has been submitted and validated.
   */
  public function postProcess() {
    parent::postProcess();
  }

}
