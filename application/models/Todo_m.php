<?php
class Todo_m extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function get_list()
    {
        $sql = "SELECT * FROM items";
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }

    //todo 조회
    function get_view($id)
    {
        $sql = "SELECT * FROM items WHERE id= '" . $id . "'";
        $query = $this->db->query($sql);
        $result = $query->row();
        //내용 반환
        return $result;
    }

    //todo 작성
    function insert_todo($content, $created_on, $due_date)
    {
        //함수에 내용,시작일,종료일을 파라미터로 전달받습니다.
        $sql = "INSERT INTO items (content,created_on,due_date) VALUES ('" . $content . "','" . $created_on . "','" . $due_date . "')";

        $query = $this->db->query($sql);
    }
    //todo 삭제
    function delete_todo($id){
        $sql = "DELETE FROM items WHERE id = '".$id."'";
        $query = $this->db->query($sql);
    }

}