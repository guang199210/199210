<?php

namespace App\Admin\Controllers;

use App\Models\Article;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Illuminate\Support\Collection;
use Encore\Admin\Controllers\ModelForm;

class ArticleController extends Controller
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

            $content->header('文章');
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
           /* $article = Article::where('id',$id)->get();
            if($article['is_audit'] == 'N'){
                $article['is_adapt' == 'N'];
            }*/
            $content->header('文章');
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

            $content->header('文章');
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
        return Admin::grid(Article::class, function (Grid $grid) {

            $grid ->id('ID')->sortable();
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
            $grid ->column('author','作者');
            $grid ->column('label','标签');          //风水/选材/...

            $grid ->column('type','类型');           //百科/咨讯/...
            $grid ->column('content','内容');
            $grid ->column('is_adapt','加精')->display(function ($value){
                switch ($value){
                    case'1':
                        return "<span class ='label label-success'>精华</span>";
                    case'0':
                        return "<span class = 'label label-danger'></span>";
                }
            });
            $grid ->column('created_at','创建时间');
            $grid ->column('updated_at','更新时间');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Article::class, function (Form $form) {
            $form ->display('id', 'ID');
            $form ->text('title','标题');
            $form ->text('author','作者');
            $form ->text('type','类型');
            $form ->tags('label','标签');
            $form ->radio('is_audit','审核')->options([0 => '待审核',1 =>'通过', 2=> '未通过'])->default('0');
            $form ->ckeditor('content','内容')->placeholder('写点什么呢');
            $form ->radio('is_adapt','加精')->options([ 1 => '是', 0 => '否'])->default('0');
            $form ->display('created_at', '创建时间');
            $form ->display('updated_at', '更新时间');
        });
    }
}
