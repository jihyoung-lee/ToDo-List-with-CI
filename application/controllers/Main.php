<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    /**
todo 컨트롤러
     */
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('Todo_m');
        $this->load->helper('url');
    }
    /* 주소에서 메서드가 생략되었을 때 실행되는 기본 메서드..*/
    public function index()
    {
        $this->lists();
    }
    function view()
    {
        //todo 번호에 해당하는 데이터 가져오기
        $id = $this->uri->segment(3);

        $data['views'] = $this->Todo_m->get_view($id);

        //view 호출
        $this->load->view('todo/view_v',$data);
    }
    public function lists()
    {

        $data['list'] = $this->Todo_m->get_list();

        $this->load->view('todo/list_V',$data);

    }
    function write(){
        if($_POST)
        {
            $content = $this->input->post('content',TRUE);
            $created_on = $this->input->post('created_on',TRUE);
            $due_date = $this->input->post('due_date',TRUE); //post 전달받음
            //두번째 파라미터에 True를 주었을 때 XSS 공격을 막을 수 있게 자동으로 처리함!

            $this->Todo_m->insert_todo($content,$created_on,$due_date);
            //post 전송받은 데이터를 todo_m모델의 insert_todo() 함수에 전달하여 디비에 입력함

            redirect('main/lists/');//입력이 끝난 후 todo목록으로 이동합니다.

            exit;
        }
        else{
            //쓰기 폼 view 호출
            $this->load->view('todo/write_v');
        }
    }
    function delete(){
        //번호에 해당하는 게시물 삭제
        //해당 todo번호를 3번째 세그먼트로 넘김
        $id = $this->uri->segment(3);
        $this ->Todo_m->delete_todo($id);

        redirect('main/lists'); //삭제 후 저 링크로 넘김
    }

}
