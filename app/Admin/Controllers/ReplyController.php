<?php

namespace App\Admin\Controllers;

use App\Models\Reply;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class ReplyController extends Controller
{
    use ModelForm;

    /**
     * IndexController interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('回复');
            $content->description('列表');

            $content->body($this->grid());
        });
    }

    /**
     * Edit interface.
     *
     * @param $id
     * @return Content
     */
    public function edit($id)
    {
        return Admin::content(function (Content $content) use ($id) {

            $content->header('回复');
            $content->description('编辑');

            $content->body($this->form()->edit($id));
        });
    }

    /**
     * Create interface.
     *
     * @return Content
     */
/*    public function create()
    {
        return Admin::content(function (Content $content) {

            $content->header('回复');
            $content->description('新增');

            $content->body($this->form());
        });
    }*/

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(Reply::class, function (Grid $grid) {

            $grid->id('ID')->sortable();

            $grid->column('article_id','文章ID');
            $grid->column('comment_id','评论ID');
            $grid->column('comment_name','给谁回复');
            $grid->column('title','文章标题');
            $grid->column('content','回复内容');
            $grid->column('is_audit','审核')->display(function ($value){
                switch ($value){
                    case'0':
                        return "<span class = 'label label-default'>待审核</span>";
                    case'1':
                        return "<span class = 'label label-success'>通过</span>";
                    case'2':
                        return "<span class = 'label label-danger'>未通过</span>";
                }
            });

            $grid->column('created_at','创建时间');
            $grid->column('updated_at','更新时间');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Reply::class, function (Form $form) {

            $form->display('id', 'ID');

            $form->display('article_id','文章ID');
            $form->display('comment_id','评论ID');
            $form->display('comment_name','给谁回复');
            $form->display('title','文章标题');
            $form->display('content','回复内容');
            $form->radio('is_audit','审核')->options([1=>'通过',0=>'待审核',2=>'未通过'])->default(0);

            $form->display('created_at', '创建时间');
            $form->display('updated_at', '更新时间');
        });
    }
}
