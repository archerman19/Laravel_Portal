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

        $grid->column('id', __('Id'));
        $grid->column('title', __('Title'));
        $grid->column('preview', __('Preview'));
		$grid->column('content', __('Content'));
		$grid->column('category', __('Category'));
		$grid->column('image', __('Image'));
		$grid->column('author', __('Author'));
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
		$show->field('category', __('Category'));

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
		$form->text('category', __('Category'));

        return $form;
    }
}
