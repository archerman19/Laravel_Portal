<?php

namespace App\Admin\Controllers;

use App\Models\News;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class NewsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'News';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new News());
		$grid->model()->orderBy('id', 'desc');

        $grid->column('id', __('Id'));
        $grid->column('title', __('Title'))->limit(100);
        $grid->column('preview', __('Preview'))->limit(100);
		$grid->column('content', __('Content'))->limit(100);
		$grid->column('is_active', __('Is_active'))->bool();
		$grid->column('published_at', __('Published_at'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(News::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('preview', __('Preview'));
		$show->field('content', __('Content'));
        $show->field('is_active', __('Is_active'));
        $show->field('published_at', __('Published_at'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new News());

		$form->text('title', __('Title'));
        $form->text('preview', __('Preview'));
		$form->text('content', __('Content'));
        $form->text('is_active', __('Is_active'));
        $form->text('published_at', __('Published_at'));

        return $form;
    }
}
