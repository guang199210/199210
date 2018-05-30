<?php

namespace App\Admin\Controllers;

use App\Models\User;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class UserController extends Controller
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

            $content->header('用户');
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

            $content->header('用户');
            $content->description('更新');
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

            $content->header('用户');
            $content->description('新建');

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
        return Admin::grid(User::class, function (Grid $grid) {
            $grid ->model()->with('profile')->orderBy('id', 'DESC');
            $grid ->paginate(20);
            $grid ->id('ID')->sortable();
            $grid ->column('username','姓名')->editable();
            $grid ->column('email','邮箱');
            $grid ->column('phone','电话');
            $grid ->column('created_at','创建时间');
            $grid ->column('updated_at','更新时间');

            $grid ->column('profile.sex','性别')->display(function ($value){
              switch ($value){
                  case 'f':
                      return "<span class = 'label label-default'>女</span>";
                  case 'm':
                      return "<span class = 'label label-default'>男</span>";
              }
            });
            $grid ->column('profile.age','年龄')->sortable();
            $grid ->column('profile.address','地址');
            $grid ->column('profile.last_login','上次登录');
            $grid ->column('profile.status','状态')->display(function ($value){
                switch ($value){
                    case '1':
                        return "<span clsss ='lable label-success'>正常</span>";
                    case '0':
                        return "<span class = 'label label-danger'>禁用</span>";
                }
            });
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(User::class, function (Form $form) {
            $form ->tab('基本信息',function (Form $form){
                $form ->display('id', 'ID');
                $form ->text('username','姓名');
                $form ->email('email','邮箱');
                $form ->mobile('phone','电话');
                $form ->display('created_at','创建时间');
                $form ->display('updated_at','更新时间');
            })->tab('详细信息',function (Form $form){
                $form ->radio('profile.sex','性别')->options(['m' => '男', 'f'=> '女'])->default('m');
                $form ->slider('profile.age','年龄')->options(['max'=>100,'min'=>10,'step'=>1,'postfix'=>'岁']);
                $form ->text('profile.address','地址');
                $form ->display('profile.last_login','上次登录');
                $form ->radio('profile.status','状态')->options(['1' => '正常', '0'=> '禁用'])->default('1');
            });
        });
    }
}
