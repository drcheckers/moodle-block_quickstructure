<?php
require_once($CFG->libdir.'/formslib.php');
class images_form extends moodleform
{
   function definition()
   {
            $cid    = $this->_customdata['cid'];  
            $sectid = $this->_customdata['sectid'];  
            $mform =& $this->_form; 
            $mform->addElement('hidden', 'cid', $cid);
            $mform->addElement('hidden', 'sectid', $sectid);
            $mform->addElement('file', 'image_'.$sectid, 'Image', array('size'=>'60'));
            $mform->addElement('submit', 'submitbutton', 'Submit');
    }
}

?>
