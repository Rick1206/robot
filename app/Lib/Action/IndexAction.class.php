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

    public function question(){
        $this->display();
    }

    public function faq(){
        $this->display();
    }

    public function trends(){
        $this->display('press');
    }

    public function press(){
        $this->display('press');
    }

    public function download(){
        $this->display('press');
    }

    public function search(){
        $this->display();
    }

    public function test(){
        $data = array();
        $data['title'] = '王瑞祥在国际机器人联合会-中国机器人产业联盟CEO圆桌会议上的讲话';
        $data['time']='2011/08/23';
        $data['image']='/robot/public/images/pic_10.jpg';
        $data['article']='2012年，世界机器人年产销量达16万台，创下了历史新高，而中国机器人市场规模占全球市场的1/5。面对这一片制造业蓝海，作为中国机器人“智造”的先行者，青岛市用国际机器人产业园开园和机器人产业技术创新联盟成立的行动吹响了大胆进军的号角。';
        $this->ajaxReturn($data,'JSON');
    }
}