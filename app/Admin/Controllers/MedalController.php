<?php

namespace App\Admin\Controllers;

use App\Models\Medal;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class MedalController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Medal';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Medal());

        $grid->column('medal_id', __('Medal id'));
        $grid->column('title', __('Title'));
        $grid->column('description', __('Description'));
        $grid->column('logo', __('Logo'));
        $grid->column('schoolid', __('Schoolid'));
        $grid->column('departmentid', __('Departmentid'));
        $grid->column('stage', __('Stage'));
        $grid->column('activity', __('Activity'));
        $grid->column('created_by', __('Created by'));
        $grid->column('creator_category', __('Creator category'));
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
        $show = new Show(Medal::findOrFail($id));

        $show->field('medal_id', __('Medal id'));
        $show->field('title', __('Title'));
        $show->field('description', __('Description'));
        $show->field('logo', __('Logo'));
        $show->field('schoolid', __('Schoolid'));
        $show->field('departmentid', __('Departmentid'));
        $show->field('stage', __('Stage'));
        $show->field('activity', __('Activity'));
        $show->field('created_by', __('Created by'));
        $show->field('creator_category', __('Creator category'));
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
        $form = new Form(new Medal());

        $form->text('title', __('Title'));
        $form->text('description', __('Description'));
        $form->text('logo', __('Logo'));
        $form->number('schoolid', __('Schoolid'));
        $form->number('departmentid', __('Departmentid'));
        $form->number('stage', __('Stage'));
        $form->number('activity', __('Activity'));
        $form->number('created_by', __('Created by'));
        $form->number('creator_category', __('Creator category'));

        return $form;
    }
}
