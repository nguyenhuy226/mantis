<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function basic()
    {
        return view('page.table.basic');
    }
    public function api()
    {
        return view('page.table.api');
    }
    public function advance()
    {
        return view('page.table.advance');
    }
    public function bootstrap()
    {
        return view('page.table.bootstrap');
    }
    public function addRow()
    {
        return view('page.table.add-rows');
    }
    public function border()
    {
        return view('page.table.border');
    }
    public function columnManipulation()
    {
        return view('page.table.column-manipulation');
    }
    public function datetimeSorting()
    {
        return view('page.table.datetime-sorting');
    }

    public function dynamicImport()
    {
        return view('page.table.dynamic-import');
    }
    public function export()
    {
        return view('page.table.export');
    }
    public function autofill()
    {
        return view('page.table.ext_autofill');
    }
    public function basicButton()
    {
        return view('page.table.ext_basic_button');
    }
    public function colReorder()
    {
        return view('page.table.ext_col_reorder');
    }
    public function exportButton()
    {
        return view('page.table.ext_export_button');
    }
    public function fixedColumns()
    {
        return view('page.table.advance');
    }
    public function fixedHeader()
    {
        return view('page.table.ext_fixed_header');
    }
    public function key_table()
    {
        return view('page.table.ext_key_table');
    }
    public function responsive()
    {
        return view('page.table.ext_responsive');
    }
    public function reorder()
    {
        return view('page.table.ext_row_reorder');
    }
    public function scroller()
    {
        return view('page.table.ext_scroller');
    }
    public function select()
    {
        return view('page.table.ext_select');
    }
    public function fetchApi()
    {
        return view('widget.footer-block');
    }
    public function fillter()
    {
        return view('page.table.filters');
    }
    public function methods()
    {
        return view('page.table.methods');
    }
    public function plugin()
    {
        return view('page.table.plugin');
    }
    public function renderColumnCells()
    {
        return view('page.table.render-column-cells');
    }
    public function simple()
    {
        return view('page.table.simple');
    }
    public function sizing()
    {
        return view('page.table.sizing');
    }
    public function sources()
    {
        return view('page.table.sources');
    }
    public function styling()
    {
        return view('page.table.styling');
    }
    public function tblStyling()
    {
        return view('page.table.tbl_styling');
    }
}
