<?php
// 关键字模型
class KeyAction extends CommonAction {	
	//添加关键字
	public function insert() {
		$model = D ('Key');
		if (false === $model->create ()) {
			$this->error ( $model->getError () );
		}
		
		$this->do_upload($model); //上传字段处理
		
		//保存当前数据对象
		if ($model->add ()!==false) {
			//如果有填写Rewrite值,在Router表插入一条记录
			if($_POST['rewrite']){
				$data['rewrite']=$_POST['rewrite'];
				$data['url']='key/view/id/'.$model->getLastInsID();
				if(!D('Router')->add($data)){
					$model->where( 'id='.(is_numeric($_POST['id']) ? $_POST['id'] : $model->getLastInsID()) )->setField('rewrite','');
				}
			}
			$this->success ('新增成功！');
		} else {
			//失败提示
			$this->error ('新增失败！');
		}
	}

	//更新关键字
	public function update() {
		$model = D ('Key');
		if (false === $model->create ()) {
			$this->error ( $model->getError () );
		}
		
		$this->do_upload($model); //上传字段处理
		
		//保存当前数据对象		
		if ($model->save()!==false) {
			//Rewrite值判断
			D('Router')->where("url='key/view/id/{$_POST['id']}'")->delete();
			if($_POST['rewrite']){
				$data['url']="key/view/id/".$_POST['id'];
				$data['rewrite']=$_POST['rewrite'];
				if(!D('Router')->add($data)){
					$model->where( 'id='.(is_numeric($_POST['id']) ? $_POST['id'] : $model->getLastInsID()) )->setField('rewrite','');
				}
			}
			$this->success ('编辑成功！');
		} else {
			//失败提示
			$this->error ($model->getError());
		}
	}
	
	//删除关键字时删除预览图片,删除路由规则
	public function _before_foreverdelete() {
		$ids = $this->_beforDelFiles(MODULE_NAME);
		if($ids){
			$list = M(MODULE_NAME)->where( array(M(MODULE_NAME)->getPk()=>array('in', $ids)) )->field('rewrite')->select();
			foreach($list as $rs) $rewrite .= ($rewrite ? "','" : '') . $rs['rewrite'];
			if($rewrite) M('Router')->where( "rewrite in ('{$rewrite}')" )->delete();
		}
	}
}