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
 * @copyright CiviCRM LLC (c) 2004-2020
 */

/**
 * Settings metadata file
 */
return [
  'contact_view_options' => [
    'group_name' => 'CiviCRM Preferences',
    'group' => 'core',
    'name' => 'contact_view_options',
    'type' => 'String',
    'html_type' => 'checkboxes',
    'pseudoconstant' => [
      'optionGroupName' => 'contact_view_options',
    ],
    'default' => '123456789101113',
    'add' => '4.1',
    'title' => ts('Viewing Contacts'),
    'is_domain' => '1',
    'is_contact' => 0,
    'description' => ts("Select the tabs that should be displayed when viewing a contact record. EXAMPLE: If your organization does not keep track of 'Relationships', then un-check this option to simplify the screen display. Tabs for Contributions, Pledges, Memberships, Events, Grants and Cases are also hidden if the corresponding component is not enabled. Go to Administer > System Settings > Enable Components to modify the components which are available for your site."),
    'help_text' => NULL,
    'serialize' => CRM_Core_DAO::SERIALIZE_SEPARATOR_BOOKEND,
  ],
  'contact_edit_options' => [
    'group_name' => 'CiviCRM Preferences',
    'group' => 'core',
    'name' => 'contact_edit_options',
    'type' => 'String',
    'html_type' => 'checkboxes',
    'pseudoconstant' => [
      'optionGroupName' => 'contact_edit_options',
    ],
    'default' => '123456789111214151617',
    'add' => '4.1',
    'title' => ts('Editing Contacts'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => ts('Select the sections that should be included when adding or editing a contact record. EXAMPLE: If your organization does not record Gender and Birth Date for individuals, then simplify the form by un-checking this option. Drag interface allows you to change the order of the panes displayed on contact add/edit screen.'),
    'help_text' => NULL,
    'serialize' => CRM_Core_DAO::SERIALIZE_SEPARATOR_BOOKEND,
  ],
  'advanced_search_options' => [
    'group_name' => 'CiviCRM Preferences',
    'group' => 'core',
    'name' => 'advanced_search_options',
    'type' => 'String',
    'html_type' => 'checkboxes',
    'pseudoconstant' => [
      'optionGroupName' => 'advanced_search_options',
    ],
    'default' => '123456789101112131516171819',
    'add' => '4.1',
    'title' => ts('Contact Search'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => ts('Select the sections that should be included in the Basic and Advanced Search forms. EXAMPLE: If you don\'t track Relationships - then you do not need this section included in the advanced search form. Simplify the form by un-checking this option.'),
    'serialize' => CRM_Core_DAO::SERIALIZE_SEPARATOR_BOOKEND,
  ],
  'user_dashboard_options' => [
    'group_name' => 'CiviCRM Preferences',
    'group' => 'core',
    'name' => 'user_dashboard_options',
    'type' => 'String',
    'html_type' => 'checkboxes',
    'pseudoconstant' => [
      'optionGroupName' => 'user_dashboard_options',
    ],
    'default' => '1234578',
    'add' => '4.1',
    'title' => ts('Contact Dashboard'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => ts('Select the sections that should be included in the Contact Dashboard. EXAMPLE: If you don\'t want constituents to view their own contribution history, un-check that option.'),
    'help_text' => NULL,
    'serialize' => CRM_Core_DAO::SERIALIZE_SEPARATOR_BOOKEND,
  ],
  'address_options' => [
    'group_name' => 'CiviCRM Preferences',
    'group' => 'core',
    'name' => 'address_options',
    'type' => 'String',
    'html_type' => 'checkboxes',
    'pseudoconstant' => [
      'optionGroupName' => 'address_options',
    ],
    'default' => '123456891011',
    'add' => '4.1',
    'title' => ts('Address Fields'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => NULL,
    'help_text' => NULL,
    'serialize' => CRM_Core_DAO::SERIALIZE_SEPARATOR_BOOKEND,
  ],
  'address_format' => [
    'group_name' => 'CiviCRM Preferences',
    'group' => 'core',
    'name' => 'address_format',
    'type' => 'String',
    'html_type' => 'textarea',
    'default' => "{contact.address_name}\n{contact.street_address}\n{contact.supplemental_address_1}\n{contact.supplemental_address_2}\n{contact.supplemental_address_3}\n{contact.city}{, }{contact.state_province}{ }{contact.postal_code}\n{contact.country}",
    'add' => '4.1',
    'title' => ts('Address Display Format'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => NULL,
    'help_text' => NULL,
  ],
  'mailing_format' => [
    'group_name' => 'CiviCRM Preferences',
    'group' => 'core',
    'name' => 'mailing_format',
    'type' => 'String',
    'html_type' => 'textarea',
    'default' => "{contact.addressee}\n{contact.street_address}\n{contact.supplemental_address_1}\n{contact.supplemental_address_2}\n{contact.supplemental_address_3}\n{contact.city}{, }{contact.state_province}{ }{contact.postal_code}\n{contact.country}",
    'add' => '4.1',
    'title' => ts('Mailing Label Format'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => NULL,
    'help_text' => NULL,
  ],
  'display_name_format' => [
    'group_name' => 'CiviCRM Preferences',
    'group' => 'core',
    'name' => 'display_name_format',
    'type' => 'String',
    'html_type' => 'textarea',
    'default' => '{contact.individual_prefix}{ }{contact.first_name}{ }{contact.last_name}{ }{contact.individual_suffix}',
    'add' => '4.1',
    'title' => ts('Individual Display Name Format'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => ts('Display name format for individual contact display names.'),
  ],
  'sort_name_format' => [
    'group_name' => 'CiviCRM Preferences',
    'group' => 'core',
    'name' => 'sort_name_format',
    'type' => 'String',
    'html_type' => 'textarea',
    'default' => '{contact.last_name}{, }{contact.first_name}',
    'add' => '4.1',
    'title' => ts('Individual Sort Name Format'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => ts('Sort name format for individual contact display names.'),
  ],
  'remote_profile_submissions' => [
    'group_name' => 'CiviCRM Preferences',
    'group' => 'core',
    'name' => 'remote_profile_submissions',
    'type' => 'Boolean',
    'quick_form_type' => 'YesNo',
    'default' => FALSE,
    'html_type' => 'radio',
    'add' => '4.7',
    'title' => ts('Accept profile submissions from external sites'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => ts('If enabled, CiviCRM will permit submissions from external sites to profiles. This is disabled by default to limit abuse.'),
    'help_text' => NULL,
  ],
  'allow_alert_autodismissal' => [
    'group_name' => 'CiviCRM Preferences',
    'group' => 'core',
    'name' => 'allow_alert_autodismissal',
    'type' => 'Boolean',
    'quick_form_type' => 'YesNo',
    'default' => TRUE,
    'html_type' => 'radio',
    'add' => '4.7',
    'title' => ts('Allow alerts to auto-dismiss?'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => ts('If disabled, CiviCRM will not automatically dismiss any alerts after 10 seconds.'),
    'help_text' => NULL,
  ],
  'editor_id' => [
    'group_name' => 'CiviCRM Preferences',
    'group' => 'core',
    'name' => 'editor_id',
    'type' => 'String',
    'html_type' => 'select',
    'default' => 'CKEditor',
    'add' => '4.1',
    'title' => ts('Wysiwig Editor'),
    'pseudoconstant' => [
      'optionGroupName' => 'wysiwyg_editor',
      'keyColumn' => 'name',
    ],
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => NULL,
    'help_text' => NULL,
  ],
  'contact_ajax_check_similar' => [
    'group_name' => 'CiviCRM Preferences',
    'group' => 'core',
    'name' => 'contact_ajax_check_similar',
    'type' => 'String',
    'html_type' => 'radio',
    'default' => '1',
    'add' => '4.1',
    'title' => ts('Check for Similar Contacts'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => NULL,
    'help_text' => NULL,
    'options' => ['1' => ts('While Typing'), '0' => ts('When Saving'), '2' => ts('Never')],
  ],
  'ajaxPopupsEnabled' => [
    'group_name' => 'CiviCRM Preferences',
    'group' => 'core',
    'name' => 'ajaxPopupsEnabled',
    'type' => 'Boolean',
    'html_type' => 'checkbox',
    'default' => 1,
    'add' => '4.5',
    'title' => ts('Enable Popup Forms'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => NULL,
    'help_text' => NULL,
  ],
  'activity_assignee_notification' => [
    'group_name' => 'CiviCRM Preferences',
    'group' => 'core',
    'name' => 'activity_assignee_notification',
    'type' => 'Boolean',
    'html_type' => 'checkbox',
    'default' => '1',
    'add' => '4.1',
    'title' => ts('Notify Activity Assignees'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => NULL,
    'help_text' => NULL,
  ],
  'activity_assignee_notification_ics' => [
    'group_name' => 'CiviCRM Preferences',
    'group' => 'core',
    'name' => 'activity_assignee_notification_ics',
    'type' => 'Boolean',
    'html_type' => 'checkbox',
    'default' => '0',
    'add' => '4.3',
    'title' => ts('Include ICal Invite to Activity Assignees'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => NULL,
    'help_text' => NULL,
  ],
  'contact_autocomplete_options' => [
    'group_name' => 'CiviCRM Preferences',
    'group' => 'core',
    'name' => 'contact_autocomplete_options',
    'type' => 'String',
    'html_type' => 'checkboxes',
    'pseudoconstant' => [
      'callback' => 'CRM_Admin_Form_Setting_Search::getContactAutocompleteOptions',
    ],
    'default' => '12',
    'add' => '4.1',
    'title' => ts('Autocomplete Contact Search'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => ts("Selected fields will be displayed in back-office autocomplete dropdown search results (Quick Search, etc.). Contact Name is always included."),
    'help_text' => NULL,
    'serialize' => CRM_Core_DAO::SERIALIZE_SEPARATOR_BOOKEND,
    'validate_callback' => 'CRM_Admin_Form_Setting_Search::enableOptionOne',
  ],
  'contact_reference_options' => [
    'group_name' => 'CiviCRM Preferences',
    'group' => 'core',
    'name' => 'contact_reference_options',
    'type' => 'String',
    'html_type' => 'checkboxes',
    'pseudoconstant' => [
      'callback' => 'CRM_Admin_Form_Setting_Search::getContactReferenceOptions',
    ],
    'default' => '12',
    'add' => '4.1',
    'title' => ts('Contact Reference Options'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => ts("Selected fields will be displayed in autocomplete dropdown search results for 'Contact Reference' custom fields. Contact Name is always included. NOTE: You must assign 'access contact reference fields' permission to the anonymous role if you want to use custom contact reference fields in profiles on public pages. For most situations, you should use the 'Limit List to Group' setting when configuring a contact reference field which will be used in public forms to prevent exposing your entire contact list."),
    'help_text' => NULL,
    'serialize' => CRM_Core_DAO::SERIALIZE_SEPARATOR_BOOKEND,
    'validate_callback' => 'CRM_Admin_Form_Setting_Search::enableOptionOne',
  ],
  'contact_smart_group_display' => [
    'group_name' => 'CiviCRM Preferences',
    'group' => 'core',
    'name' => 'contact_smart_group_display',
    'type' => 'String',
    'html_type' => 'radio',
    'default' => '1',
    'add' => '4.7',
    'title' => ts('Viewing Smart Groups'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => ts('Controls display of the smart groups that a contact is part of in each contact\'s "Groups" tab. "Show on Demand" provides the best performance, and is recommended for most sites.'),
    'help_text' => NULL,
    'pseudoconstant' => [
      'optionGroupName' => 'contact_smart_group_display',
    ],
  ],
  'smart_group_cache_refresh_mode' => [
    'group_name' => 'CiviCRM Preferences',
    'group' => 'core',
    'name' => 'smart_group_cache_refresh_mode',
    'type' => 'String',
    'html_type' => 'radio',
    'default' => 'opportunistic',
    'add' => '4.7',
    'title' => ts('Smart Group Refresh Mode'),
    'is_domain' => 1,
    'is_contact' => 0,
    'pseudoconstant' => [
      'callback' => 'CRM_Contact_BAO_GroupContactCache::getModes',
    ],
    'description' => ts('Should the smart groups be by cron jobs or user actions'),
    'help_text' => ts('In "Opportunistic Flush" mode, caches are flushed in response to user actions; this mode is broadly compatible but may add latency during form-submissions. In "Cron Flush" mode, you should schedule a cron job to flush caches; this can improve latency on form-submissions but requires more setup.'),
  ],
  'installed' => [
    'bootstrap_comment' => 'This is a boot setting which may be loaded during bootstrap. Defaults are loaded via SettingsBag::getSystemDefaults().',
    'group_name' => 'CiviCRM Preferences',
    'group' => 'core',
    'name' => 'installed',
    'type' => 'Boolean',
    'quick_form_type' => 'YesNo',
    'default' => FALSE,
    'add' => '4.7',
    'title' => ts('System Installed'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => ts('A flag indicating whether this system has run a post-installation routine'),
    'help_text' => NULL,
  ],
  'max_attachments' => [
    'group_name' => 'CiviCRM Preferences',
    'group' => 'core',
    'name' => 'max_attachments',
    'legacy_key' => 'maxAttachments',
    'type' => 'Integer',
    'quick_form_type' => 'Element',
    'html_type' => 'text',
    'html_attributes' => [
      'size' => 2,
      'maxlength' => 8,
    ],
    'default' => 3,
    'add' => '4.3',
    'title' => ts('Maximum Attachments'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => ts('Maximum number of files (documents, images, etc.) which can be attached to emails or activities. This setting applies to UI forms and limits the number of fields available on the form.'),
    'help_text' => NULL,
  ],
  'max_attachments_backend' => [
    'group_name' => 'CiviCRM Preferences',
    'group' => 'core',
    'name' => 'max_attachments_backend',
    'legacy_key' => 'maxAttachmentsBackend',
    'type' => 'Integer',
    'quick_form_type' => 'Element',
    'html_type' => 'text',
    'html_attributes' => [
      'size' => 2,
      'maxlength' => 8,
    ],
    'default' => CRM_Core_BAO_File::DEFAULT_MAX_ATTACHMENTS_BACKEND,
    'add' => '5.20',
    'title' => ts('Maximum Attachments For Backend Processes'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => ts('Maximum number of files (documents, images, etc.) which can be processed during backend processing such as automated inbound email processing. This should be a big number higher than the other Maximum Attachments setting above. This setting here merely provides an upper limit to prevent attacks that might overload the server.'),
    'help_text' => NULL,
  ],
  'maxFileSize' => [
    'group_name' => 'CiviCRM Preferences',
    'group' => 'core',
    'name' => 'maxFileSize',
    'type' => 'Integer',
    'quick_form_type' => 'Element',
    'html_type' => 'text',
    'html_attributes' => [
      'size' => 2,
      'maxlength' => 8,
    ],
    'default' => 3,
    'add' => '4.3',
    'title' => ts('Maximum File Size (in MB)'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => ts('Maximum Size of file (documents, images, etc.) which can be attached to emails or activities.<br />Note: php.ini should support this file size.'),
    'help_text' => NULL,
  ],
  'contact_undelete' => [
    'group_name' => 'CiviCRM Preferences',
    'group' => 'core',
    'name' => 'contact_undelete',
    'type' => 'Boolean',
    'quick_form_type' => 'YesNo',
    'default' => 1,
    'add' => '4.3',
    'title' => ts('Contact Trash and Undelete'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => ts('If enabled, deleted contacts will be moved to trash (instead of being destroyed). Users with the proper permission are able to search for the deleted contacts and restore them (or delete permanently).'),
    'help_text' => NULL,
  ],
  'allowPermDeleteFinancial' => [
    'group_name' => 'CiviCRM Preferences',
    'group' => 'core',
    'name' => 'allowPermDeleteFinancial',
    'type' => 'Boolean',
    'quick_form_type' => 'YesNo',
    'default' => FALSE,
    'add' => '4.3',
    'title' => ts('Contact Permanent Delete'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => ts('Allow Permanent Delete for contacts who are linked to live financial transactions'),
    'help_text' => NULL,
  ],
  'securityAlert' => [
    'group_name' => 'CiviCRM Preferences',
    'group' => 'core',
    'name' => 'securityAlert',
    'type' => 'Boolean',
    'quick_form_type' => 'YesNo',
    'default' => 1,
    'add' => '4.4',
    'title' => ts('Status Alerts'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => ts("If enabled, CiviCRM will display pop-up notifications (no more than once per day) for security and misconfiguration issues identified in the system check."),
    'help_text' => NULL,
  ],
  'doNotAttachPDFReceipt' => [
    'group_name' => 'CiviCRM Preferences',
    'group' => 'core',
    'name' => 'doNotAttachPDFReceipt',
    'type' => 'Boolean',
    'quick_form_type' => 'YesNo',
    'default' => 0,
    'add' => '4.3',
    'title' => ts('Attach PDF copy to receipts'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => ts("If enabled, CiviCRM sends PDF receipt as an attachment during event signup or online contribution."),
    'help_text' => NULL,
  ],
  'recordGeneratedLetters' => [
    'group_name' => 'CiviCRM Preferences',
    'group' => 'core',
    'name' => 'recordGeneratedLetters',
    'type' => 'String',
    'quick_form_type' => 'Select',
    'html_type' => 'Select',
    'html_attributes' => [
      'class' => 'crm-select2',
    ],
    'default' => 'multiple',
    'add' => '4.7',
    'title' => ts('Record generated letters'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => ts('When generating a letter (PDF/Word) via mail-merge, how should the letter be recorded?'),
    'help_text' => NULL,
    'pseudoconstant' => [
      'callback' => 'CRM_Contact_Form_Task_PDFLetterCommon::getLoggingOptions',
    ],
  ],
  'wkhtmltopdfPath' => [
    'group_name' => 'CiviCRM Preferences',
    'group' => 'core',
    'name' => 'wkhtmltopdfPath',
    'type' => 'String',
    'quick_form_type' => 'Element',
    'html_attributes' => [
      'size' => 64,
      'maxlength' => 256,
    ],
    'html_type' => 'text',
    'default' => NULL,
    'add' => '4.3',
    'title' => ts('Path to wkhtmltopdf executable'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => NULL,
    'help_text' => NULL,
  ],
  'recaptchaOptions' => [
    'group_name' => 'CiviCRM Preferences',
    'group' => 'core',
    'name' => 'recaptchaOptions',
    'type' => 'String',
    'quick_form_type' => 'Element',
    'html_attributes' => [
      'size' => 64,
      'maxlength' => 64,
    ],
    'html_type' => 'text',
    'default' => NULL,
    'add' => '4.3',
    'title' => ts('Recaptcha Options'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => ts('You can specify the reCAPTCHA theme options as comma separated data.(eg: theme:\'blackglass\', lang : \'fr\' ). Check the available options at <a href="https://developers.google.com/recaptcha/docs/display#config">Customizing the Look and Feel of reCAPTCHA</a>.'),
    'help_text' => NULL,
  ],
  'recaptchaPublicKey' => [
    'group_name' => 'CiviCRM Preferences',
    'group' => 'core',
    'name' => 'recaptchaPublicKey',
    'type' => 'String',
    'quick_form_type' => 'Element',
    'html_attributes' => [
      'size' => 64,
      'maxlength' => 64,
    ],
    'html_type' => 'text',
    'default' => NULL,
    'add' => '4.3',
    'title' => ts('Recaptcha Site Key'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => NULL,
    'help_text' => NULL,
  ],
  'forceRecaptcha' => [
    'add' => '4.7',
    'help_text' => NULL,
    'is_domain' => 1,
    'is_contact' => 0,
    'group_name' => 'CiviCRM Preferences',
    'group' => 'core',
    'name' => 'forceRecaptcha',
    'type' => 'Boolean',
    'quick_form_type' => 'YesNo',
    'html_type' => '',
    'default' => '0',
    'title' => ts('Force reCAPTCHA on Contribution pages'),
    'description' => ts('If enabled, reCAPTCHA will show on all contribution pages.'),
  ],
  'recaptchaPrivateKey' => [
    'group_name' => 'CiviCRM Preferences',
    'group' => 'core',
    'name' => 'recaptchaPrivateKey',
    'type' => 'String',
    'quick_form_type' => 'Element',
    'html_attributes' => [
      'size' => 64,
      'maxlength' => 64,
    ],
    'html_type' => 'text',
    'default' => NULL,
    'add' => '4.3',
    'title' => ts('Recaptcha Secret Key'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => NULL,
    'help_text' => NULL,
  ],
  'checksum_timeout' => [
    'group_name' => 'CiviCRM Preferences',
    'group' => 'core',
    'name' => 'checksum_timeout',
    'type' => 'Integer',
    'quick_form_type' => 'Element',
    'html_attributes' => [
      'size' => 2,
      'maxlength' => 8,
    ],
    'html_type' => 'text',
    'default' => 7,
    'add' => '4.3',
    'title' => ts('Checksum Lifespan'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => NULL,
    'help_text' => NULL,
  ],
  'blogUrl' => [
    'group_name' => 'CiviCRM Preferences',
    'group' => 'core',
    'name' => 'blogUrl',
    'type' => 'String',
    'quick_form_type' => 'Element',
    'html_attributes' => [
      'size' => 64,
      'maxlength' => 128,
    ],
    'html_type' => 'text',
    'default' => '*default*',
    'add' => '4.3',
    'title' => ts('Blog Feed URL'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => ts('Blog feed URL used by the blog dashlet'),
    'help_text' => ts('Use "*default*" for the system default or override with a custom URL'),
  ],
  'communityMessagesUrl' => [
    'group_name' => 'CiviCRM Preferences',
    'group' => 'core',
    'name' => 'communityMessagesUrl',
    'type' => 'String',
    'quick_form_type' => 'Element',
    'html_attributes' => [
      'size' => 64,
      'maxlength' => 128,
    ],
    'html_type' => 'text',
    'default' => '*default*',
    'add' => '4.3',
    'title' => ts('Community Messages URL'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => ts('Service providing CiviCRM community messages'),
    'help_text' => ts('Use "*default*" for the system default or override with a custom URL'),
  ],
  'gettingStartedUrl' => [
    'group_name' => 'CiviCRM Preferences',
    'group' => 'core',
    'name' => 'gettingStartedUrl',
    'type' => 'String',
    'quick_form_type' => 'Element',
    'html_attributes' => [
      'size' => 64,
      'maxlength' => 128,
    ],
    'html_type' => 'text',
    'default' => '*default*',
    'add' => '4.3',
    'title' => ts('Getting Started URL'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => ts('Service providing the Getting Started data'),
    'help_text' => ts('Use "*default*" for the system default or override with a custom URL'),
  ],
  'resCacheCode' => [
    'group_name' => 'CiviCRM Preferences',
    'group' => 'core',
    'name' => 'resCacheCode',
    'type' => 'String',
    'quick_form_type' => 'Element',
    'html_type' => 'text',
    'default' => NULL,
    'add' => '4.3',
    'title' => ts('resCacheCode'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => ts('Code appended to resource URLs (JS/CSS) to coerce HTTP caching'),
    'help_text' => NULL,
  ],
  'verifySSL' => [
    'group_name' => 'CiviCRM Preferences',
    'group' => 'core',
    'name' => 'verifySSL',
    'type' => 'Boolean',
    'quick_form_type' => 'YesNo',
    'default' => 1,
    'add' => '4.3',
    'title' => ts('Verify SSL?'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => ts('If disabled, outbound web-service requests will allow unverified, insecure HTTPS connections'),
    'help_text' => ts('Unless you are absolutely unable to configure your server to check the SSL certificate of the remote server you should leave this set to Yes'),
  ],
  'enableSSL' => [
    'group_name' => 'CiviCRM Preferences',
    'group' => 'core',
    'name' => 'enableSSL',
    'type' => 'Boolean',
    'quick_form_type' => 'YesNo',
    'default' => 0,
    'add' => '4.5',
    'title' => ts('Force SSL?'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => ts('If enabled, inbound HTTP requests for sensitive pages will be redirected to HTTPS.'),
    'help_text' => ts('If enabled, inbound HTTP requests for sensitive pages will be redirected to HTTPS.'),
  ],
  'wpBasePage' => [
    'group_name' => 'CiviCRM Preferences',
    'group' => 'core',
    'name' => 'wpBasePage',
    'type' => 'String',
    'html_type' => 'text',
    'quick_form_type' => 'Element',
    'default' => '',
    'add' => '4.3',
    'title' => ts('WordPress Base Page'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => ts('If set, CiviCRM will use this setting as the base url.'),
    'help_text' => ts('By default, CiviCRM will generate front-facing pages using the home page at http://wp/ as its base. If you want to use a different template for CiviCRM pages, set the path here.'),
  ],
  'secondDegRelPermissions' => [
    'group_name' => 'CiviCRM Preferences',
    'group' => 'core',
    'name' => 'secondDegRelPermissions',
    'type' => 'Boolean',
    'quick_form_type' => 'YesNo',
    'default' => 0,
    'add' => '4.3',
    'title' => ts('Allow second-degree relationship permissions'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => ts("If enabled, contacts with the permission to edit a related contact will inherit that contact's permission to edit other related contacts"),
    'help_text' => NULL,
  ],
  'enable_components' => [
    'bootstrap_comment' => 'This is a boot setting which may be loaded during bootstrap. Defaults are loaded via SettingsBag::getSystemDefaults().',
    'group_name' => 'CiviCRM Preferences',
    'group' => 'core',
    'name' => 'enable_components',
    'type' => 'Array',
    'html_type' => 'checkboxes',
    'default' => NULL,
    'add' => '4.4',
    'title' => ts('Enable Components'),
    'is_domain' => '1',
    'is_contact' => 0,
    'description' => NULL,
    'help_text' => NULL,
    'on_change' => [
      'CRM_Case_Info::onToggleComponents',
      'CRM_Core_Component::flushEnabledComponents',
      'call://resources/resetCacheCode',
    ],
    'pseudoconstant' => [
      'callback' => 'CRM_Core_SelectValues::getComponentSelectValues',
    ],
  ],
  'disable_core_css' => [
    'group_name' => 'CiviCRM Preferences',
    'group' => 'core',
    'name' => 'disable_core_css',
    'type' => 'Boolean',
    'quick_form_type' => 'YesNo',
    'default' => '0',
    'add' => '4.4',
    'title' => ts('Disable CiviCRM css'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => ts('Prevent the stylesheet "civicrm.css" from being loaded.'),
    'help_text' => NULL,
  ],
  'empoweredBy' => [
    'group_name' => 'CiviCRM Preferences',
    'group' => 'core',
    'name' => 'empoweredBy',
    'type' => 'Boolean',
    'quick_form_type' => 'YesNo',
    'default' => 1,
    'add' => '4.5',
    'title' => ts('Display "empowered by CiviCRM"'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => ts('When enabled, "empowered by CiviCRM" is displayed at the bottom of public forms.'),
    'help_text' => NULL,
  ],
  'logging_no_trigger_permission' => [
    'add' => '4.7',
    'is_domain' => 1,
    'is_contact' => 0,
    'group_name' => 'CiviCRM Preferences',
    'group' => 'core',
    'help_text' => ts('(EXPERIMENTAL) If the MySQL user does not have permission to administer triggers, then you must create the triggers outside CiviCRM. No support is provided for this configuration.'),
    'name' => 'logging_no_trigger_permission',
    'type' => 'Boolean',
    'quick_form_type' => 'YesNo',
    'html_type' => '',
    'default' => 0,
    'title' => ts('(EXPERIMENTAL) MySQL user does not have trigger permissions'),
    'description' => ts('Set this when you intend to manage trigger creation outside of CiviCRM'),
  ],
  'logging' => [
    'add' => '4.7',
    'help_text' => NULL,
    'is_domain' => 1,
    'is_contact' => 0,
    'group_name' => 'CiviCRM Preferences',
    'group' => 'core',
    'name' => 'logging',
    'type' => 'Boolean',
    'quick_form_type' => 'YesNo',
    'html_type' => '',
    'default' => '0',
    'title' => ts('Logging'),
    'description' => ts('If enabled, all actions will be logged with a complete record of changes.'),
    'validate_callback' => 'CRM_Logging_Schema::checkLoggingSupport',
    'on_change' => [
      'CRM_Logging_Schema::onToggle',
    ],
  ],
  'logging_uniqueid_date' => [
    'add' => '4.7',
    'help_text' => ts('This is the date when CRM-18193 was implemented'),
    'is_domain' => 1,
    'is_contact' => 0,
    'group_name' => 'CiviCRM Preferences',
    'group' => 'core',
    'name' => 'logging_uniqueid_date',
    'type' => 'Date',
    'quick_form_type' => 'DateTime',
    'html_type' => '',
    'default' => NULL,
    'title' => ts('Logging Unique ID not recorded before'),
    'description' => ts('This is the date when CRM-18193 was implemented'),
  ],
  'logging_all_tables_uniquid' => [
    'add' => '4.7',
    'help_text' => ts('This indicates there are no tables holdng pre-uniqid log_conn_id values (CRM-18193)'),
    'is_domain' => 1,
    'is_contact' => 0,
    'group_name' => 'CiviCRM Preferences',
    'group' => 'core',
    'name' => 'logging_all_tables_uniquid',
    'type' => 'Boolean',
    'quick_form_type' => 'YesNo',
    'html_type' => '',
    'default' => 0,
    'title' => ts('All tables use Unique Connection ID'),
    'description' => ts('Do some tables pre-date CRM-18193?'),
  ],
  'userFrameworkUsersTableName' => [
    'add' => '4.7',
    'help_text' => NULL,
    'is_domain' => 1,
    'is_contact' => 0,
    'group_name' => 'CiviCRM Preferences',
    'group' => 'core',
    'name' => 'userFrameworkUsersTableName',
    'type' => 'String',
    'quick_form_type' => 'Element',
    'html_type' => 'text',
    'html_attributes' => [
      'size' => '32',
      'maxlength' => '64',
    ],
    'default' => 'users',
    'title' => ts('CMS Users Table Name'),
    'description' => '',
  ],
  'wpLoadPhp' => [
    'group_name' => 'CiviCRM Preferences',
    'group' => 'core',
    'name' => 'wpLoadPhp',
    'type' => 'String',
    'html_type' => 'text',
    'quick_form_type' => 'Element',
    'default' => '',
    'add' => '4.6',
    'title' => ts('WordPress Path to wp-load.php'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => ts('CiviCRM will use this setting as path to bootstrap WP.'),
    'help_text' => NULL,
  ],
  'secure_cache_timeout_minutes' => [
    'group_name' => 'CiviCRM Preferences',
    'group' => 'core',
    'name' => 'secure_cache_timeout_minutes',
    'type' => 'Integer',
    'quick_form_type' => 'Element',
    'html_type' => 'text',
    'html_attributes' => [
      'size' => 2,
      'maxlength' => 8,
    ],
    'default' => 20,
    'add' => '4.7',
    'title' => ts('Secure Cache Timeout'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => ts('Maximum number of minutes that secure form data should linger'),
    'help_text' => NULL,
  ],
  'site_id' => [
    'group_name' => 'CiviCRM Preferences',
    'group' => 'core',
    'name' => 'site_id',
    'type' => 'String',
    'quick_form_type' => 'Element',
    'html_type' => 'text',
    'default' => '',
    'add' => '4.6',
    'title' => ts('Unique Site ID'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => NULL,
    'help_text' => NULL,
  ],
  'recentItemsMaxCount' => [
    'group_name' => 'CiviCRM Preferences',
    'group' => 'core',
    'name' => 'recentItemsMaxCount',
    'type' => 'Integer',
    'quick_form_type' => 'Element',
    'html_type' => 'text',
    'html_attributes' => [
      'size' => 2,
      'maxlength' => 3,
    ],
    'default' => 20,
    'add' => '4.7',
    'title' => ts('Size of "Recent Items" stack'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => ts('How many items should CiviCRM store in it\'s "Recently viewed" list.'),
    'help_text' => NULL,
  ],
  'recentItemsProviders' => [
    'group_name' => 'CiviCRM Preferences',
    'group' => 'core',
    'name' => 'recentItemsProviders',
    'type' => 'Array',
    'html_type' => 'Select',
    'quick_form_type' => 'Select',
    'html_attributes' => [
      'multiple' => 1,
      'class' => 'crm-select2',
    ],
    'default' => '',
    'add' => '4.7',
    'title' => ts('Recent Items Providers'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => ts('What providers may save views in CiviCRM\'s "Recently viewed" list. If empty, all are in.'),
    'help_text' => NULL,
    'pseudoconstant' => [
      'callback' => 'CRM_Utils_Recent::getProviders',
    ],
  ],
  'dedupe_default_limit' => [
    'group_name' => 'CiviCRM Preferences',
    'group' => 'core',
    'name' => 'dedupe_default_limit',
    'type' => 'Integer',
    'default' => 0,
    'quick_form_type' => 'Element',
    'html_type' => 'text',
    'add' => '4.7',
    'title' => ts('Default limit for dedupe screen'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => ts('Default to only loading matches against this number of contacts'),
    'help_text' => ts('Deduping larger databases can crash the server. By configuring a limit other than 0 here the dedupe query will only search for matches against a limited number of contacts.'),
  ],
  'syncCMSEmail' => [
    'group_name' => 'CiviCRM Preferences',
    'group' => 'core',
    'name' => 'syncCMSEmail',
    'type' => 'Boolean',
    'html_type' => 'YesNo',
    'quick_form_type' => 'YesNo',
    'default' => 1,
    'add' => '4.7',
    'title' => ts('Sync CMS Email'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => ts('If enabled, then CMS email id will be synchronised with CiviCRM contacts\'s primary email.'),
    'help_text' => NULL,
  ],
  'preserve_activity_tab_filter' => [
    'group_name' => 'CiviCRM Preferences',
    'group' => 'core',
    'name' => 'preserve_activity_tab_filter',
    'type' => 'Boolean',
    'html_type' => 'checkbox',
    'default' => '0',
    'add' => '4.7',
    'title' => ts('Preserve activity filters as a user preference'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => ts('When enabled, any filter settings a user selects on the contact\'s Activity tab will be remembered as they visit other contacts.'),
  ],
  'do_not_notify_assignees_for' => [
    'group_name' => 'CiviCRM Preferences',
    'group' => 'core',
    'name' => 'do_not_notify_assignees_for',
    'type' => 'Array',
    'add' => '4.7',
    'is_domain' => 1,
    'is_contact' => 0,
    'default' => [],
    'title' => ts('Do not notify assignees for'),
    'description' => ts('These activity types will be excluded from automated email notifications to assignees.'),
    'html_type' => 'select',
    'html_attributes' => [
      'multiple' => 1,
      'class' => 'huge crm-select2',
    ],
    'pseudoconstant' => [
      'optionGroupName' => 'activity_type',
    ],
    'quick_form_type' => 'Select',
  ],
  'menubar_position' => [
    'group_name' => 'CiviCRM Preferences',
    'group' => 'core',
    'name' => 'menubar_position',
    'type' => 'String',
    'html_type' => 'select',
    'default' => 'over-cms-menu',
    'add' => '5.12',
    'title' => ts('Menubar position'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => ts('Location of the CiviCRM main menu.'),
    'help_text' => NULL,
    'options' => [
      'over-cms-menu' => ts('Replace website menu'),
      'below-cms-menu' => ts('Below website menu'),
      'above-crm-container' => ts('Above content area'),
      'none' => ts('None - disable menu'),
    ],
  ],
  'menubar_color' => [
    'group_name' => 'CiviCRM Preferences',
    'group' => 'core',
    'name' => 'menubar_color',
    'type' => 'String',
    'html_type' => 'color',
    'default' => '#1b1b1b',
    'add' => '5.13',
    'title' => ts('Menubar color'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => ts('Color of the CiviCRM main menu.'),
    'help_text' => NULL,
    'validate_callback' => 'CRM_Utils_Color::normalize',
  ],
  'requestableMimeTypes' => [
    'group_name' => 'CiviCRM Preferences',
    'group' => 'core',
    'name' => 'requestableMimeTypes',
    'type' => 'String',
    'html_type' => 'Text',
    'default' => 'image/jpeg,image/pjpeg,image/gif,image/x-png,image/png,image/jpg,text/html,application/pdf',
    'add' => '5.13',
    'title' => ts('Mime Types that can be passed as URL params'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => ts('Acceptable Mime Types that can be used as part of file urls'),
    'help_text' => NULL,
  ],
  'theme_frontend' => [
    'group_name' => 'CiviCRM Preferences',
    'group' => 'core',
    'name' => 'theme_frontend',
    'type' => 'String',
    'quick_form_type' => 'Select',
    'html_type' => 'Select',
    'html_attributes' => array(
      'class' => 'crm-select2',
    ),
    'pseudoconstant' => array(
      'callback' => 'call://themes/getAvailable',
    ),
    'default' => 'default',
    'add' => '5.16',
    'title' => ts('Frontend Theme'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => ts('Theme to use on frontend pages'),
    'help_text' => NULL,
  ],
  'theme_backend' => [
    'group_name' => 'CiviCRM Preferences',
    'group' => 'core',
    'name' => 'theme_backend',
    'type' => 'String',
    'quick_form_type' => 'Select',
    'html_type' => 'Select',
    'html_attributes' => array(
      'class' => 'crm-select2',
    ),
    'pseudoconstant' => array(
      'callback' => 'call://themes/getAvailable',
    ),
    'default' => 'default',
    'add' => '5.16',
    'title' => ts('Backend Theme'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => ts('Theme to use on backend pages'),
    'help_text' => NULL,
  ],
  'http_timeout' => [
    'group_name' => 'CiviCRM Preferences',
    'group' => 'core',
    'name' => 'http_timeout',
    'type' => 'Integer',
    'quick_form_type' => 'Element',
    'html_type' => 'text',
    'html_attributes' => [
      'size' => 2,
      'maxlength' => 3,
    ],
    'default' => 5,
    'add' => '5.14',
    'title' => ts('HTTP request timeout'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => ts('How long should HTTP requests through Guzzle application run for in seconds'),
    'help_text' => ts('Set the number of seconds http requests should run for before terminating'),
  ],
];
