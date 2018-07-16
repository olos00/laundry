<?php 
class Items_Controller extends CI_Controller
{
    function index()
    {
        $data['title'] = 'View Items';
        $this->load->view('item/view_items', $data);
    }

    function fetch_items()
    {
        $this->load->model('Item_model');

        $draw = intval($this->input->get('draw'));
        $start = intval($this->input->get('start'));
        $length = intval($this->input->get('length'));

        $itemsList = $this->Item_model->fetch_items();
        $data = array();

        foreach ($itemsList->result() as $row) {
            $data[] = array(
                $row->item_id,
                $row->item_name
            );
        }

        $itemsDT = array(
            "draw" => $draw,
            "recordsTotal" => $itemsList->num_rows(),
            "recordsFiltered" => $itemsList->num_rows(),
            "data" => $data
        );
        echo json_encode($itemsDT);
    }
}
?>