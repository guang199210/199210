<?php

namespace App\Admin\Controllers;

use App\Models\Ask;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class AskController extends Controller
{
    use ModelForm;

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('问题');
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

            $content->header('问题');
            $content->description('编辑');

            $content->body($this->form()->edit($id));
        });
    }

    /**
     * Create interface.
     *
     * @return Content
     */
    public function create()
    {
        return Admin::content(function (Content $content) {

            $content->header('问题');
            $content->description('新增');

            $content->body($this->form());
        });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(Ask::class, function (Grid $grid) {

            $grid->id('ID')->sortable();

            $grid->column('username','用户名');
            $grid->column('ask_title','问题标题');
            $grid->column('focus_num','关注数量');
            $grid->column('view_num','浏览量');
            $grid->column('answer_num','回答量');
            $grid->column('is_elite','是否精华')->display(function($value){
                switch ($value){
                    case '1':
                        return "<span class = 'label label-success'>精华</span>";
                    case '0':
                        return "<span class = 'label label-default'>否</span>";
                }
            });
            $grid->column('is_forbid','是否禁言')->display(function ($value){
                switch ($value){
                    case'1':
                        return "<span class = 'label label-danger'>禁言</span>";
                    case'0':
                        return "<span class = 'label label-default'>否</span>";
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
        return Admin::form(Ask::class, function (Form $form) {
            $form->display('id', 'ID');

            $form->text('ask_title','问题标题');
            $form->text('username','用户名');
            $form->text('focus_num','关注数量');
            $form->text('view_num','浏览量');
            $form->text('answer_num','回答量');
            $states= [
                'on' => ['value'=>1, 'text' => '最佳'],
                'off'=> ['value'=>0, 'text' => '否']
            ];
            $form->switch('is_elite','是否精华')->states($states);
            $status= [
                'on' => ['value'=>1, 'text' => '禁言'],
                'off'=> ['value'=>0, 'text' => '否']
            ];
            $form->switch('is_forbid','是否禁言')->states($status);

            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');
        });
    }
}
