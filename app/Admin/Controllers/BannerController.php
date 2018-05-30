<?php

namespace App\Admin\Controllers;

use App\Models\Banner;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class BannerController extends Controller
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

            $content->header('轮播图');
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

            $content->header('轮播图');
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

            $content->header('轮播图');
            $content->description('添加');

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
        return Admin::grid(Banner::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            $grid->column('banner_name','轮播图名');
            $grid->column('title','标题');
            $grid->column('sort','排序');
            $grid->column('image','图片');
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
        return Admin::form(Banner::class, function (Form $form) {

            $form ->display('id', 'ID');
            $form ->text('banner_name','轮播图名');
            $form ->text('title','标题');
            $form ->number('sort','排序');
            $form ->image('image','图片')
                ->move('public/upload/images/')
                ->uniqueName();
            $form ->display('created_at', 'Created At');
            $form ->display('updated_at', 'Updated At');
        });
    }
}
