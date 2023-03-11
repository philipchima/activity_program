<?php

namespace App\Admin\Controllers;

use App\Models\School;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class SchoolController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'School';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new School());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('address', __('Address'));
        $grid->column('city_id', __('City id'));
        $grid->column('logo', __('Logo'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->column('created_by', __('Created by'));
        $grid->column('slogan', __('Slogan'));
        $grid->column('status', __('Status'));
        $grid->column('website', __('Website'));

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
        $show = new Show(School::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('address', __('Address'));
        $show->field('city_id', __('City id'));
        $show->field('logo', __('Logo'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('created_by', __('Created by'));
        $show->field('slogan', __('Slogan'));
        $show->field('status', __('Status'));
        $show->field('website', __('Website'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new School());

        $form->text('name', __('Name'));
        $form->text('address', __('Address'));
        $form->number('city_id', __('City id'));
        $form->text('logo', __('Logo'));
        $form->number('created_by', __('Created by'));
        $form->text('slogan', __('Slogan'));
        $form->switch('status', __('Status'));
        $form->text('website', __('Website'));

        return $form;
    }
}
