<?php

namespace App\Admin\Controllers;

use App\Models\Educ;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class EducController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Education';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Educ());
		$grid->model()->orderBy('id', 'desc');

        $grid->column('id', __('Id'))->limit(100);
        $grid->column('title', __('Title'))->limit(100);
        $grid->column('preview', __('Preview'))->limit(100);
		$grid->column('content', __('Content'))->limit(100);
		$grid->column('category_id', __('Category'))->limit(100);
		$grid->column('image', __('Image'))->limit(100);
		$grid->column('author', __('Author'))->limit(100);
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
        $show = new Show(Educ::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('preview', __('Preview'));
		$show->field('content', __('Content'));
        $show->field('image', __('Image'));
        $show->field('author', __('Author'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
		$show->field('category_id', __('Category'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Educ());

		$form->text('title', __('Title'));
        $form->text('preview', __('Preview'));
		$form->text('content', __('Content'));
        $form->text('image', __('Image'));
        $form->text('author', __('Author'));
		$form->text('category_id', __('Category'));

        return $form;
    }
}
