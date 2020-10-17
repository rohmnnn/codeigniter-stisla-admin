<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Stisla
{
    var $stisla_data = array();

    function set($name, $value)
    {
        $this->stisla_data[$name] = $value;
    }

    function load($stisla = '', $view = '', $view_data = array(), $return = FALSE)
    {
        $this->RH = &get_instance();
        $this->set('stisla', $this->RH->load->view($view, $view_data, TRUE));
        return $this->RH->load->view($stisla, $this->stisla_data, $return);
    }
}
