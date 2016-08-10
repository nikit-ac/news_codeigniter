<?php
class News_model extends CI_Model {

    const NEWS_ON_PAGE = 5;

    function category_to_int ($category)
    {
        switch ($category) {
                case 'politics':
                    return $category_base = 4;
                    break;
                case 'criminal':
                    return $category_base = 3;
                    break;
                case 'finanse':
                    return $category_base = 2;
                    break;
                case 'other':
                    return $category_base = 1;
                    break;
                case '0':
                    return $category_base = 0;
                    break;
            }
    }

    function get_last_news($category = 0, $page = 1)
    {
        $this->db->order_by('time_update', 'desc');
        if ($category){
            $category_base = $this->category_to_int($category);
            $this->db->where('category', $category_base);
        }
        $query = $this->db->get('news', self::NEWS_ON_PAGE, self::NEWS_ON_PAGE * ($page - 1));
        return $query->result();
    }

    function how_much_pages($category)
    {
        if ($category) {
            $category_base = $this->category_to_int($category);
            $this->db->where('category', $category_base);
        } else{
            $category_base = 0;
        }

        $this->db->from('news');
        $count = $this->db->count_all_results();
        return $pages = ceil($count / self::NEWS_ON_PAGE);
    }

    function get_news($slug)
    {
        $query = $this->db->get_where('news', array('slug' => $slug));
        return $query->result();
    }



    function delete_news($slug)
    {
        return $this->db->delete('news', array('slug' => $slug));
    }

    function prepare_data($news)
    {
        $data = NULL;
        foreach ($news as $news_one) {
            $raw_news = get_object_vars($news_one);
            $raw_news['content'] = character_limiter($raw_news['content'], 300);
            $raw_category = $raw_news['category'];
            switch ($raw_category ) {
                case '1':
                    $raw_news['category'] = 'Прочее';
                    break;
                case '2':
                    $raw_news['category'] = 'Финансы';
                    break;
                case '3':
                    $raw_news['category'] = 'Криминал';
                    break;
                case '4':
                    $raw_news['category'] = 'Политика';
                    break;
            }
            $data [] = $raw_news;
        }
        return $data;
    }


}