<?php

class News_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }


        public function get_news($slug = FALSE)
        {
                $query = $this->db->get_where('news',['slug' => 'daaaaaaa'] );
                return $query->row_array();
        }
}