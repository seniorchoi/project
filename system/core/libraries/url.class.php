<?php

class url
{
    public static function to($page_name = '', $params = array())
    {
        if($page_name)
        {
        $params['page'] = $page_name;
        }
        /*
        array(
            'page' => 'contact'
            'foo' => 'bar'

        )
        */
        $query_string= http_build_query($params);

        return config::get('base_url'). ($query_string ? '?' . $query_string : '');
    }
}




?>