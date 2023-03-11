<?php

namespace App\Admin\Controllers;

use App\Models\Activity;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ActivityController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Activity';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Activity());

        $grid->column('activity_id', __('Activity id'));
        $grid->column('title', __('Title'));
        $grid->column('description', __('Description'));
        $grid->column('logo', __('Logo'));
        $grid->column('medalid', __('Medalid'));
        $grid->column('stage', __('Stage'));
        $grid->column('status', __('Status'));
        $grid->column('nooftask', __('Nooftask'));
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
        $show = new Show(Activity::findOrFail($id));

        $show->field('activity_id', __('Activity id'));
        $show->field('title', __('Title'));
        $show->field('description', __('Description'));
        $show->field('logo', __('Logo'));
        $show->field('medalid', __('Medalid'));
        $show->field('stage', __('Stage'));
        $show->field('status', __('Status'));
        $show->field('nooftask', __('Nooftask'));
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
        $form = new Form(new Activity());

        $form->text('title', __('Title'));
        $form->text('description', __('Description'));
        $form->text('logo', __('Logo'));
        $form->number('medalid', __('Medalid'));
        $form->number('stage', __('Stage'));
        $form->number('status', __('Status'));
        $form->number('nooftask', __('Nooftask'));
        $form->number('created_by', __('Created by'));
        $form->number('creator_category', __('Creator category'));

        return $form;
    }
}
