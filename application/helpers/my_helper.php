<?php

if (!function_exists('output_json')) {
    function output_json($data, $encode = true)
    {
        if ($encode) $data = json_encode($data);
        return get_instance()->output->set_content_type('application/json')->set_output($data);
    }
}
