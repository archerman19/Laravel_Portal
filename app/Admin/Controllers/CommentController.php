<?php

namespace App\Admin\Controllers;

use App\Models\Comment;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CommentController extends AdminController {
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
        $grid = new Grid(new Comment());
		$grid->model()->orderBy('id', 'desc');
        $grid->column('id', __('Id'));
		$grid->column('news_id', __('News'));
        $grid->column('user_id', __('User id'));
        $grid->column('comment_text', __('comment_text'));
		$grid->column('status', __('Status'))->bool();
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
        $show = new Show(Comment::findOrFail($id));


        $show->field('id', __('Id'));
        $show->field('news_id', __('News'));
        $show->field('user_id', __('User id'));
		$show->field('comment_text', __('comment_text'));
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
        $form = new Form(new Comment());

		$form->text('news_id', __('News'));
        $form->text('user_id', __('User id'));
		$form->text('comment_text', __('comment_text'));
		$form->text('status', __('Status'));
		

        return $form;
    }

}