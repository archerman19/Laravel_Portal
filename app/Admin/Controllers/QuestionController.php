<?php

namespace App\Admin\Controllers;

use App\Models\Question;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class QuestionController extends AdminController {
	/**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Comment';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Question());
		$grid->model()->orderBy('id', 'desc');
		
        $grid->column('id', __('Id'));
		$grid->column('name', __('Name'));
        $grid->column('email', __('Email'));
        $grid->column('phone', __('Phone'));
		$grid->column('text', __('Text'))->limit(100);
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
		$grid->column('status', __('Status'))->bool();

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
        $show = new Show(Question::findOrFail($id));


        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('email', __('Email'));
		$show->field('phone', __('Phone'));
        $show->field('text', __('Text'));
        $show->field('created_at', __('Created at'));
		$show->field('updated_at', __('Updated at'));
		$show->field('status', __('Status'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Question());

		$form->text('name', __('Name'));
        $form->text('email', __('Email'));
		$form->text('phone', __('Phone'));
		$form->text('text', __('Text'));
		

        return $form;
    }

}