<?php

namespace App\Admin\Controllers;

use App\Models\SpruceCase;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class SpruceCaseController extends Controller
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

            $content->header('装修案例');
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

            $content->header('装修案例');
            $content->description('更新');

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

            $content->header('装修案例');
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
        return Admin::grid(SpruceCase::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            $grid ->column('is_audit','审核')->display(function ($value){
                switch ($value){
                    case'0':
                        return "<span class = 'label label-default'>待审核</span>";
                    case'1':
                        return "<span class = 'label label-success'>通过</span>";
                    case'2':
                        return "<span class = 'label label-danger'>未通过</span>";
                }
            });
            $grid ->column('title','标题');
            $grid ->column('designer','设计师');
            $grid ->column('part','标签');
//            $grid ->column('type','类型');
            $grid ->column('describe','描述');
            $grid ->column('address','地址');
            $grid ->column('area','面积');
            $grid ->column('style','风格');
            $grid ->column('image','图片');

            $grid->created_at();
            $grid->updated_at();
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(SpruceCase::class, function (Form $form) {

            $form->display('id', 'ID');
            $form->text('title','标题');
            $form->text('style','风格');
            $form->text('color','颜色');
            $form->text('space','空间');
            $form->text('house_type','户型');
            $form->text('part','局部');
            $form->text('designer','设计师');
            $form->text('describe','描述');
            $form->number('area','面积');
            $form->text('address','地址');
            $form->radio('is_audit','审核')->options([0 => '待审核',1 =>'通过', 2=> '未通过'])->default('0');
            $form->multipleImage('image[]','图片');
            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');
        });
    }
}
