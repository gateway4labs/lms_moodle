<?php

class block_lms4labs_edit_form extends block_edit_form {
  protected function specific_definition($mform) {
    $mform->addElement('header', 'configheader', get_string('blocksettings', 'block'));

    $mform->addElement('text', 'config_labmanagerurl', 'LabManager URL', 'maxlength="255" size="50" ');

    $mform->addElement('static', 'config_description', '', 'E.g. http://localhost:5000/lms4labs (no trailing /) ');

    $mform->addElement('text',     'config_labuser', 'Lab Manager User',     'maxlength="255" size="50" ');
    $mform->addElement('password', 'config_labpass', 'Lab Manager Password', 'maxlength="255" size="50" ');

    $mform->addElement('text',     'config_lmsuser', 'LMS User',     'maxlength="255" size="50" ');
    $mform->addElement('password', 'config_lmspass', 'LMS Password', 'maxlength="255" size="50" ');
  }
}
