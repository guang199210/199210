<?php

namespace App\Admin\Controllers;

use App\Models\Business;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class BusinessController extends Controller
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

            $content->header('商家信息');
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

            $content->header('编辑');

            $content->body($this->form()->edit($id));
        });
    }

    /**
     * Create interface.
     *
     * @return Content
     */
  /*  public function create()
    {
        return Admin::content(function (Content $content) {

            $content->header('header');
            $content->description('description');

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
        return Admin::grid(Business::class, function (Grid $grid) {
            $grid->model()->with('busInfo')->orderBy('id','DESC');
            $grid->id('ID')->sortable();
            $grid->column('name','商家名称');
            $grid->column('phone','电话');
            $grid->column('Email','邮箱');
//            $grid->column('password','密码');

            $grid->column('logo');
            $grid->column('businfo.qualify','资质');
            $grid->column('businfo.contacts','联系人');
            $grid->column('businfo.created_at','创建时间');
            $grid->column('businfo.updated_at','更新时间');

        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Business::class, function (Form $form) {
            $form->tab('基本信息',function (Form $form){
                $form->display('id', 'ID');
                $form->text('name','商家名称');
                $form->email('Email','邮箱');
                $form->mobile('phone','手机号码');
                $form->text('address','地址');
                $form->image('logo','Logo');
            })->tab('详细信息',function (Form $form){
                $form->text('contacts','联系人');
                $form->radio('is_amount','免费量房')->options([1=>'是',0=>'否']);
                $form->radio('is_offer','报价')->options([1=>'是',0=>'否']);
                $form->display('num_comment','评论量');
                $form->text('pub_praise','口碑');
                $form->display('last_login','上次登录');
                $form->display('created_at','创建时间');
                $form->display('updated_at','更新时间');
            });
        });
    }
}
