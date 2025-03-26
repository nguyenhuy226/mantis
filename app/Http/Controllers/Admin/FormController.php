<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function balloon()
    {
        return view('page.form.editor-balloon');
    }
    public function classic()
    {
        return view('page.form.editor-classic');
    }
    public function document()
    {
        return view('page.form.editor-document');
    }
    public function inline()
    {
        return view('page.form.editor-inline');
    }
    public function fileUpload()
    {
        return view('page.form.file-upload');
    }
    public function elements()
    {
        return view('page.form.form_elements');
    }
    public function floating()
    {
        return view('page.form.form_floating');
    }
    public function validation()
    {
        return view('page.form.form-validation');
    }

    public function basic()
    {
        return view('page.form.form2_basic');
    }
    public function checkbox()
    {
        return view('page.form.form2_checkbox');
    }
    public function choices()
    {
        return view('page.form.form2_choices');
    }
    public function clipboard()
    {
        return view('page.form.form2_clipboard');
    }
    public function datePicker()
    {
        return view('page.form.form2_datepicker');
    }
    public function dateRangePicker()
    {
        return view('page.form.form2_daterangepicker');
    }
    public function fluUppy()
    {
        return view('page.form.form2_flu-uppy');
    }
    public function inputGroup()
    {
        return view('page.form.form2_input_group');
    }
    public function inputMask()
    {
        return view('page.form.form2_inputmask');
    }
    public function layActionBars()
    {
        return view('page.form.form2_lay-actionbars');
    }
    public function layDefault()
    {
        return view('page.form.form2_lay-default');
    }
    public function layMultiColumn()
    {
        return view('page.form.form2_lay-multicolumn');
    }
    public function layStickActionBars()
    {
        return view('page.form.form2_lay-stickyactionbars');
    }
    public function markDown()
    {
        return view('page.form.form2_markdown');
    }
    public function megaotion()
    {
        return view('page.form.form2_megaoption');
    }
    public function nouislider()
    {
        return view('page.form.form2_nouislider');
    }
    public function quill()
    {
        return view('page.form.form2_quill');
    }
    public function radio()
    {
        return view('page.form.form2_radio');
    }
    public function recaptcha()
    {
        return view('page.form.form2_recaptcha');
    }
    public function switch()
    {
        return view('page.form.form2_switch');
    }
    public function switchjs()
    {
        return view('page.form.form2_switchjs');
    }
    public function timePicker()
    {
        return view('page.form.form2_timepicker');
    }
    public function tinymce()
    {
        return view('page.form.form2_tinymce');
    }
    public function typeAhead()
    {
        return view('page.form.form2_typeahead');
    }
    public function imageCrop()
    {
        return view('page.form.image_crop');
    }
}

