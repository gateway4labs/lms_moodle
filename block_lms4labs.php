<?php
class block_lms4labs extends block_base {
    public function init() {
      $this->title = get_string('lms4labs', 'block_lms4labs');
    }

    public function specialization() {
      if (!empty($this->config->name)) {
        $this->title = $this->config->name;
      } else {
        $this->config->name = get_string('lms4labs', 'block_lms4labs');
      }

      if (empty($this->config->name)) {
        $this->config->name = get_string('lms4labs', 'block_lms4labs');
      }
    }

    public function get_content() {
      if ($this->content !== null) { return $this->content; }

      $this->content         =  new stdClass;
      $this->content->text   = 'The content of our SimpleHTML block!';
      $this->content->footer = 'Footer here...';

      return $this->content;
    }

    public function instance_allow_multiple() {
      return true;
    }
}
?>
