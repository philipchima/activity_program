<?php

namespace App\Admin\Controllers;

use App\Models\Teacher;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class TeacherController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Teacher';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Teacher());

        $grid->column('firstname', __('Firstname'));
        $grid->column('lastname', __('Lastname'));
        $grid->column('address', __('Address'));
        $grid->column('phone', __('Phone'));
        $grid->column('email', __('Email'));
        $grid->column('status', __('Status'));
        $grid->column('schoolid', __('Schoolid'));
        $grid->column('updated_at', __('Updated at'));
        $grid->column('created_at', __('Created at'));
        $grid->column('created_by', __('Created by'));

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
        $show = new Show(Teacher::findOrFail($id));

        $show->field('firstname', __('Firstname'));
        $show->field('lastname', __('Lastname'));
        $show->field('address', __('Address'));
        $show->field('phone', __('Phone'));
        $show->field('email', __('Email'));
        $show->field('status', __('Status'));
        $grid->column('schoolid', __('Schoolid'));
        $show->field('updated_at', __('Updated at'));
        $show->field('created_at', __('Created at'));
        $show->field('created_by', __('Created by'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Teacher());

        $form->text('firstname', __('Firstname'));
        $form->text('lastname', __('Lastname'));
        $form->text('address', __('Address'));
        $form->mobile('phone', __('Phone'));
        $form->email('email', __('Email'));
        $form->text('status', __('Status'));
        $grid->column('schoolid', __('Schoolid'));
        $form->number('created_by', __('Created by'));

        return $form;
    }
}
