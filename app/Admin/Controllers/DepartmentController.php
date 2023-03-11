<?php

namespace App\Admin\Controllers;

use App\Models\Department;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class DepartmentController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Department';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Department());

        $grid->column('name', __('Name'));
        $grid->column('schoolid', __('Schoolid'));
        $grid->column('totalnoofmedals', __('Totalnoofmedals'));
        $grid->column('status', __('Status'));
        $grid->column('created_by', __('Created by'));
        $grid->column('updated_at', __('Updated at'));
        $grid->column('created_at', __('Created at'));

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
        $show = new Show(Department::findOrFail($id));

        $show->field('name', __('Name'));
        $show->field('schoolid', __('Schoolid'));
        $show->field('totalnoofmedals', __('Totalnoofmedals'));
        $show->field('status', __('Status'));
        $show->field('created_by', __('Created by'));
        $show->field('updated_at', __('Updated at'));
        $show->field('created_at', __('Created at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Department());

        $form->text('name', __('Name'));
        $form->number('schoolid', __('Schoolid'));
        $form->number('totalnoofmedals', __('Totalnoofmedals'));
        $form->number('status', __('Status'));
        $form->number('created_by', __('Created by'));

        return $form;
    }
}
