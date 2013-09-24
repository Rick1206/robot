<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
  public function index(){

      $this->display();
  }
	public function about(){
		$this->display();
	}

	public function join_us(){
		$this->display('join');
	}

    public function product(){
        $this->display();
    }

    public function service(){
        $this->display();
    }
}