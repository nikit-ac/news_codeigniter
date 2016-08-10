<?php
class Admin_model extends CI_Model {

    function create_news($title, $content, $category, $image_name = NULL)
    {
        $this->title    = trim($title);
        $this->content  = trim($content);
        $this->category = trim($category);
        if (!$image_name) {
            $this->image_name = NULL;
        } else{
            $this->image_name = $image_name;
        }
        $this->load->helper('text');
        $this->slug     = trim(translit($title));
        $this->db->insert('news', $this);
    }

    function update_news($slug, $title, $content, $category, $img_update = FALSE, $image_name = NULL)
    {
        $this->title      = trim($title);
        $this->content    = trim($content);
        $this->category   = trim($category);
        if ($img_update) {
            $this->image_name = NULL;
        }
        if ($image_name) {
            $this->image_name = $image_name;
        }
        $this->load->helper('text');
        $this->slug = translit(trim($title));
        return $this->db->update('news', $this, array('slug' => $slug));
    }

    function delete_news($slug)
    {
        return $this->db->delete('news', array('slug' => $slug));
    }

}