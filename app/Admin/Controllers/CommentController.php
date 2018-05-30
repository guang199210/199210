<?php

namespace App\Admin\Controllers;

use App\Models\Comment;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class CommentController extends Controller
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

            $content->header('评论');
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

            $content->header('评论');
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

            $content->header('新增评论');
//            $content->description('description');

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
        return Admin::grid(Comment::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            $grid->column('article_id','文章ID');
            $grid->column('type','类型');
            $grid->column('title','文章标题');
            $grid->column('username','用户名');
            $grid->column('content','评论内容');
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
        return Admin::form(Comment::class, function (Form $form) {

            $form->display('id', 'ID');
            $form->display('article_id','文章ID');
            $form->display('type','类型');
            $form->display('title','标题');
            $form->display('username','用户名');
            $form->display('content','内容');
            $form->radio('is_audit','审核')->options([1=>'通过',0=>'待审核',2=>'未通过'])->default(0);

            $form->display('created_at', '创建时间');
            $form->display('updated_at', '更新时间');
        });
    }
}
