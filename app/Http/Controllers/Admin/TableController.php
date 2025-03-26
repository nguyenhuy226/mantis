<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TableController extends Controller
{
    /**
     * show page basic  resource in table.
     */
    public function basic()
    {
        return view('page.table.basic');
    }

    /**
     * show page api  resource in table.
     */
    public function api()
    {
        return view('page.table.api');
    }

    /**
     * show page advance  resource in table.
     */
    public function advance()
    {
        return view('page.table.advance');
    }

    /**
     * show page bootstrap  resource in table.
     */
    public function bootstrap()
    {
        return view('page.table.bootstrap');
    }

    /**
     * show page addRow  resource in table.
     */
    public function addRow()
    {
        return view('page.table.add-rows');
    }

    /**
     * show page border  resource in table.
     */
    public function border()
    {
        return view('page.table.border');
    }

    /**
     * show page columnManupulation  resource in table.
     */
    public function columnManipulation()
    {
        return view('page.table.column-manipulation');
    }

    /**
     * show page datetimeSorting  resource in table.
     */
    public function datetimeSorting()
    {
        return view('page.table.datetime-sorting');
    }

    /**
     * show page dynamicImport  resource in table.
     */
    public function dynamicImport()
    {
        return view('page.table.dynamic-import');
    }

    /**
     * show page export  resource in table.
     */
    public function export()
    {
        return view('page.table.export');
    }

    /**
     * show page autofill  resource in table.
     */
    public function autofill()
    {
        return view('page.table.ext_autofill');
    }

    /**
     * show page basicButton  resource in table.
     */
    public function basicButton()
    {
        return view('page.table.ext_basic_button');
    }

    /**
     * show page colReorder  resource in table.
     */
    public function colReorder()
    {
        return view('page.table.ext_col_reorder');
    }

    /**
     * show page exportButton resource in table.
     */
    public function exportButton()
    {
        return view('page.table.ext_export_button');
    }

    /**
     * show page fixedColumns  resource in table.
     */
    public function fixedColumns()
    {
        return view('page.table.advance');
    }

    /**
     * show page fixedHeader  resource in table.
     */
    public function fixedHeader()
    {
        return view('page.table.ext_fixed_header');
    }

    /**
     * show page key_table  resource in table.
     */
    public function key_table()
    {
        return view('page.table.ext_key_table');
    }

    /**
     * show page rensponsive  resource in table.
     */
    public function responsive()
    {
        return view('page.table.ext_responsive');
    }

    /**
     * show page reorder  resource in table.
     */
    public function reorder()
    {
        return view('page.table.ext_row_reorder');
    }

    /**
     * show page scroller  resource in table.
     */
    public function scroller()
    {
        return view('page.table.ext_scroller');
    }

    /**
     * show page select  resource in table.
     */
    public function select()
    {
        return view('page.table.ext_select');
    }

    /**
     * show page fetchApi  resource in table.
     */
    public function fetchApi()
    {
        return view('widget.footer-block');
    }

    /**
     * show page fillter  resource in table.
     */
    public function fillter()
    {
        return view('page.table.filters');
    }

    /**
     * show page methods  resource in table.
     */
    public function methods()
    {
        return view('page.table.methods');
    }

    /**
     * show page plugin  resource in table.
     */
    public function plugin()
    {
        return view('page.table.plugin');
    }

    /**
     * show page renderColumnCells  resource in table.
     */
    public function renderColumnCells()
    {
        return view('page.table.render-column-cells');
    }

    /**
     * show page simple  resource in table.
     */
    public function simple()
    {
        return view('page.table.simple');
    }

    /**
     * show page sizing  resource in table.
     */
    public function sizing()
    {
        return view('page.table.sizing');
    }

    /**
     * show page sources  resource in table.
     */
    public function sources()
    {
        return view('page.table.sources');
    }

    /**
     * show page styling resource in table.
     */
    public function styling()
    {
        return view('page.table.styling');
    }

    /**
     * show page tblStyling  resource in table.
     */
    public function tblStyling()
    {
        return view('page.table.tbl_styling');
    }
}
