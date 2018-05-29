<?php

namespace App\Admin\Controllers;

use App\Models\Tender;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class TenderController extends Controller
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

            $content->header('招标');
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

            $content->header('招标');
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

            $content->header('招标');
            $content->description('新建');

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
        return Admin::grid(Tender::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            $grid->column('contact','联系人');
            $grid->column('mobile','电话');
            $grid->column('city','城市');
            $grid->column('plotname','小区名称');
            $grid->column('unit','户型结构');
            $grid->column('sprucearea','装修面积');
            $grid->column('is_closed','是否交房');
            $grid->column('test_at','量房时间');
            $grid->column('publish_at','发布时间');
            $grid->column('revisit_at','回访时间');
            $grid->column('is_audit','审核');
            $grid->column('is_sign','是否签约');


//            $grid->created_at();
//            $grid->updated_at();
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Tender::class, function (Form $form) {

            $form->display('id', 'ID');
            $form->text('contact','联系人');
            $form->mobile('mobile','电话');
            $form->text('city','城市');
            $form->text('plotname','小区名称');
            $form->text('unit','户型结构');
            $form->number('sprucearea','装修面积');
            $form->text('is_closed','是否交房');
            $form->datetime('test_at','量房时间');
            $form->datetime('publish_at','发布时间');
            $form->datetime('revisit_at','回访时间');
            $form->radio('is_audit','审核')->options([1=>'通过',0=>'待审核',2=>'未通过']);
            $form->radio('is_sign','签约')->options([1=>'签约',0=>'未签约']);

            $form->display('created_at', '创建时间');
            $form->display('updated_at', '更新时间');
        });
    }
}
