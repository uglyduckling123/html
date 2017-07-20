<?php
// +----------------------------------------------------------------------
// | ThinkCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2014 http://www.thinkcmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: Dean <zxxjjforever@163.com>
// +----------------------------------------------------------------------
namespace Portal\Controller;
use Common\Controller\HomeBaseController;
use Common\Model\PostsModel;
/**
 * 首页
 */
class IndexController extends HomeBaseController {
	
    //首页
	public function index() {
		$where=array();
		$where['post_author']=I('post_author','1');
		$where['post_category']=I('post_category','0');
		$posts_model=D("Common/Posts");
		/*$goverment_bugget=$posts_model->getList($field='*',array('post_author'=>'1','post_category'=>'0'),"id DESC",'0,5');
		$goverment_final_account=$posts_model->getList($field='*',array('post_author'=>'1','post_category'=>'1'),"id DESC",'0,5');*/
		$goverment_bugget=$posts_model->getGoverBugget();
		$goverment_final_account=$posts_model->getGoverFinalAccount();
		$others=$posts_model->others();
		$apartments=D("Common/Users")->where('id>1')->getList('id,user_login');
		$four_pear_apartment= array();
		for($i=0;$i<ceil(count($apartments));$i++)
		{
			$four_pear_apartment[] = array_slice($apartments, $i * 4 ,4);
		}
		$four_pear_apartment=array_filter($four_pear_apartment);
		$this->assign('goverment_bugget',$goverment_bugget);
		$this->assign('goverment_final_account',$goverment_final_account);
		$this->assign('others',$others);
		$this->assign('four_pear_apartment',$four_pear_apartment);
		$this->assign('post_author_apartment',PostsModel::POST_AUTHOR_APARTMENT);
		$this->assign('post_author_goverment',PostsModel::POST_AUTHOR_GOVERMENT);
		$this->assign('post_category_bugget',PostsModel::POST_CATEGORY_BUGGET);
		$this->assign('post_category_final_account',PostsModel::POST_CATEGORY_FINAL_ACCOUT);
		$this->assign('post_category_others',PostsModel::POST_CATEGORY_OTHERS);
    	$this->display(":index");
    }
	public function moreInfo()
	{
		$where = array();
		if (I('post_author') == PostsModel::POST_AUTHOR_GOVERMENT) {
			$where['b.post_author'] = array('EQ', PostsModel::POST_AUTHOR_GOVERMENT);
		} else {
			$where['b.post_author'] = array('NEQ', PostsModel::POST_AUTHOR_GOVERMENT);
		}
		$where['post_category'] = array('EQ', I('post_category', PostsModel::POST_CATEGORY_BUGGET));
		$where['a.status']=array('EQ', 1);
		/*$posts_model = D("Common/Posts");
		$count = $posts_model->where($where)->count();
		$page = $this->page($count, 10);
		$lists = $posts_model
			->where($where)
			->order("id DESC")
			->limit($page->firstRow . ',' . $page->listRows)
			->select();*/
		$this->term_relationships_model = D("Common/TermRelationships");
		$count=$this->term_relationships_model
			->alias("a")
			->join(C ( 'DB_PREFIX' )."posts b ON a.object_id = b.id")
			->where($where)
			->order("a.listorder ASC,b.post_modified DESC")->count();
		$page = $this->page($count, 10);
		$lists=$this->term_relationships_model
			->alias("a")
			->join(C ( 'DB_PREFIX' )."posts b ON a.object_id = b.id")
			->where($where)
			->limit($page->firstRow . ',' . $page->listRows)
			->order("a.listorder ASC,b.post_modified DESC")->select();
		$this->assign('lists', $lists);
		$this->assign("Page", $page->show('Admin'));
		$this->assign("current_page", $page->GetCurrentPage());
		$this->assign('post_author_apartment', PostsModel::POST_AUTHOR_APARTMENT);
		$this->assign('post_author_goverment', PostsModel::POST_AUTHOR_GOVERMENT);
		$this->assign('post_category_bugget', PostsModel::POST_CATEGORY_BUGGET);
		$this->assign('post_category_final_account', PostsModel::POST_CATEGORY_FINAL_ACCOUT);
		$this->display(":moreInfo");
	}
	public function detailInfo(){
		$posts_model = D("Common/Posts");
		$data = $posts_model->where(array('id'=>I('id')))->find();
		$this->assign('data',$data);
		$this->assign('post_category_bugget', PostsModel::POST_CATEGORY_BUGGET);
		$this->assign('post_category_final_account', PostsModel::POST_CATEGORY_FINAL_ACCOUT);
		if ($data['post_author'] == PostsModel::POST_AUTHOR_GOVERMENT&&$data['post_category'] != PostsModel::POST_CATEGORY_OTHERS) {
			$this->display(":article_zf");
		}elseif($data['post_category'] == PostsModel::POST_CATEGORY_OTHERS) {
			$this->display(":other_detail");
		}
		else {
			$this->display(":article_bm");
		}
	}
	public function apartmentArticles(){
		/*$where=array();
		$where['post_author']=I('post_author');
		$where['post_category']=I('post_category');
		$posts_model = D("Common/Posts");
		$count = $posts_model->where($where)->count();
		$page = $this->page($count, 10);
		$lists = $posts_model
			->where($where)
			->order("id DESC")
			->limit($page->firstRow . ',' . $page->listRows)
			->select();*/
		$where = array();
		$where['b.post_author'] = array('EQ', I('post_author'));
		$where['b.post_category'] = array('EQ', I('post_category', PostsModel::POST_CATEGORY_BUGGET));
		$where['a.status']=array('EQ', 1);
		$this->term_relationships_model = D("Common/TermRelationships");
		$count=$this->term_relationships_model
			->alias("a")
			->join(C ( 'DB_PREFIX' )."posts b ON a.object_id = b.id")
			->where($where)
			->order("a.listorder ASC,b.post_modified DESC")->count();
		$page = $this->page($count, 10);
		$lists=$this->term_relationships_model
			->alias("a")
			->join(C ( 'DB_PREFIX' )."posts b ON a.object_id = b.id")
			->where($where)
			->limit($page->firstRow . ',' . $page->listRows)
			->order("a.listorder ASC,b.post_modified DESC")->select();
		$this->assign('lists', $lists);
		$this->assign("Page", $page->show('Admin'));
		$this->assign('post_author_apartment', PostsModel::POST_AUTHOR_APARTMENT);
		$this->assign('post_author_goverment', PostsModel::POST_AUTHOR_GOVERMENT);
		$this->assign('post_category_bugget', PostsModel::POST_CATEGORY_BUGGET);
		$this->assign('post_category_final_account', PostsModel::POST_CATEGORY_FINAL_ACCOUT);
		$this->display(':list_bm');
	}
	public function othersMore(){
		$where = array();
		$where['b.post_category'] = array('EQ', I('post_category', PostsModel::POST_CATEGORY_OTHERS));
		$where['a.status']=array('EQ', 1);
		$this->term_relationships_model = D("Common/TermRelationships");
		$count=$this->term_relationships_model
			->alias("a")
			->join(C ( 'DB_PREFIX' )."posts b ON a.object_id = b.id")
			->where($where)
			->order("a.listorder ASC,b.post_modified DESC")->count();
		$page = $this->page($count, 10);
		$lists=$this->term_relationships_model
			->alias("a")
			->join(C ( 'DB_PREFIX' )."posts b ON a.object_id = b.id")
			->where($where)
			->limit($page->firstRow . ',' . $page->listRows)
			->order("a.listorder ASC,b.post_modified DESC")->select();
		$this->assign('lists', $lists);
		$this->assign("Page", $page->show('Admin'));
		$this->assign('post_author_apartment', PostsModel::POST_AUTHOR_APARTMENT);
		$this->assign('post_author_goverment', PostsModel::POST_AUTHOR_GOVERMENT);
		$this->assign('post_category_bugget', PostsModel::POST_CATEGORY_BUGGET);
		$this->assign('post_category_final_account', PostsModel::POST_CATEGORY_FINAL_ACCOUT);
		$this->display(':othersMore');
	}

}


