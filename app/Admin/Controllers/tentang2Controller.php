<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\tentang2;

class tentang2Controller extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'tentang2';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new tentang2());

        $grid->column('id', __('Id'));
        $grid->column('deskripsi', __('Deskripsi'));
        $grid->column('judul_pengalaman', __('Judul pengalaman'));
        $grid->column('pengalaman', __('Pengalaman'));
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
        $show = new Show(tentang2::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('deskripsi', __('Deskripsi'));
        $show->field('judul_pengalaman', __('Judul pengalaman'));
        $show->field('pengalaman', __('Pengalaman'));
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
        $form = new Form(new tentang2());

        $form->text('deskripsi', __('Deskripsi'));
        $form->text('judul_pengalaman', __('Judul pengalaman'));
        $form->textarea('pengalaman', __('Pengalaman'));

        return $form;
    }
}
