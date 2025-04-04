<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ChartController;
use App\Http\Controllers\Admin\FormController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\TableController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\WidgetController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginpost'])->name('loginpost');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerpost'])->name('registerpost');
Route::get('/reset-password', [AuthController::class, 'resetPassword'])->name('resetPassword');
Route::get('/forgot-password', [AuthController::class, 'forgotPassword'])->name('forgotPassword');
Route::get('/check-mail', [AuthController::class, 'checkMail'])->name('checkMail');
Route::get('/code-verification', [AuthController::class, 'codeVerification'])->name('codeVerification');

Route::get('/data', [WidgetController::class, 'data'])->name('widget.data');
Route::get('/chart', [WidgetController::class, 'chart'])->name('widget.chart');
Route::get('/statistics', [WidgetController::class, 'statistics'])->name('widget.statistics');

Route::get('/table/api', [TableController::class, 'data'])->name('table.data');
Route::get('/table/basic', [TableController::class, 'basic'])->name('table.basic');
Route::get('/table/advance', [TableController::class, 'advance'])->name('table.advance');
Route::get('/table/boosrtrap', [TableController::class, 'booostrap'])->name('table.booostrap');
Route::get('/table/addRow', [TableController::class, 'addRow'])->name('table.addRow');
Route::get('/table/border', [TableController::class, 'border'])->name('table.border');
Route::get('/table/column-manipulation', [TableController::class, 'columnManipulation'])->name('table.columnManipulation');
Route::get('/table/date-time-dorting', [TableController::class, 'dateitmeSorting'])->name('table.dateitmeSorting');
Route::get('/table/dynami-import', [TableController::class, 'dynamicImport'])->name('table.dynamicImport');
Route::get('/table/export', [TableController::class, 'export'])->name('table.export');
Route::get('/table/autofill', [TableController::class, 'autofill'])->name('table.autofill');
Route::get('/table/basic-button', [TableController::class, 'basicButton'])->name('table.basicButton');
Route::get('/table/col-reorder', [TableController::class, 'colReorder'])->name('table.colReorder');
Route::get('/table/export-button', [TableController::class, 'exportButton'])->name('table.exportButton');
Route::get('/table/fixed-columns', [TableController::class, 'fixedColumns'])->name('table.fixedColumns');
Route::get('/table/fixed-header', [TableController::class, 'fixedHeader'])->name('table.fixedHeader');
Route::get('/table/key-table', [TableController::class, 'key_table'])->name('table.key_table');
Route::get('/table/responsive', [TableController::class, 'responsive'])->name('table.responsive');
Route::get('/table/reorder', [TableController::class, 'reorder'])->name('table.reorder');
Route::get('/table/sroller', [TableController::class, 'scroller'])->name('table.scroller');
Route::get('/table/select', [TableController::class, 'select'])->name('table.select');
Route::get('/table/fetchApi', [TableController::class, 'fetchApi'])->name('table.fetchApi');
Route::get('/table/fillter', [TableController::class, 'fillter'])->name('table.fillter');
Route::get('/table/methods', [TableController::class, 'methods'])->name('table.methods');
Route::get('/table/plugin', [TableController::class, 'plugin'])->name('table.plugin');
Route::get('/table/render-column-cells', [TableController::class, 'renderColumnCells'])->name('table.renderColumnCells');
Route::get('/table/simple', [TableController::class, 'simple'])->name('table.simple');
Route::get('/table/sizing', [TableController::class, 'sizing'])->name('table.sizing');
Route::get('/table/sources', [TableController::class, 'sources'])->name('table.sources');
Route::get('/table/styling', [TableController::class, 'styling'])->name('table.styling');
Route::get('/table/tblStyling', [TableController::class, 'tblStyling'])->name('table.tblStyling');


Route::get('/form/balloon', [FormController::class, 'balloon'])->name('form.balloon');
Route::get('/form/classic', [FormController::class, 'classic'])->name('form.classic');
Route::get('/form/document', [FormController::class, 'document'])->name('form.document');
Route::get('/form/inline', [FormController::class, 'inline'])->name('form.inline');
Route::get('/form/file-upload', [FormController::class, 'fileUpload'])->name('form.fileUpload');
Route::get('/form/elements', [FormController::class, 'elements'])->name('form.elements');
Route::get('/form/floating', [FormController::class, 'floating'])->name('form.floating');
Route::get('/form/validation', [FormController::class, 'validation'])->name('form.validation');
Route::get('/form/basic', [FormController::class, 'basic'])->name('form.basic');
Route::get('/form/checkbox', [FormController::class, 'checkbox'])->name('form.checkbox');
Route::get('/form/choices', [FormController::class, 'choices'])->name('form.choices');
Route::get('/form/clipboard', [FormController::class, 'clipboard'])->name('form.clipboard');
Route::get('/form/date-picker', [FormController::class, 'datePicker'])->name('form.datePicker');
Route::get('/form/date-range-picker', [FormController::class, 'dateRangePicker'])->name('form.dateRangePicker');
Route::get('/form/flu-uppy', [FormController::class, 'fluUppy'])->name('form.fluUppy');
Route::get('/form/input-group', [FormController::class, 'inputGroup'])->name('form.inputGroup');
Route::get('/form/input-mask', [FormController::class, 'inputMask'])->name('form.inputMask');
Route::get('/form/layaction-bars', [FormController::class, 'layActionBars'])->name('form.layActionBars');
Route::get('/form/lay-default', [FormController::class, 'layDefault'])->name('form.layDefault');
Route::get('/form/lay-multi-column', [FormController::class, 'layMultiColumn'])->name('form.layMultiColumn');
Route::get('/form/lay-stick-action-bars', [FormController::class, 'layStickActionBars'])->name('form.layStickActionBars');
Route::get('/form/mark-down', [FormController::class, 'markDown'])->name('form.markDown');
Route::get('/form/megaotion', [FormController::class, 'megaotion'])->name('form.megaotion');
Route::get('/form/nouislider', [FormController::class, 'nouislider'])->name('form.nouislider');
Route::get('/form/quill', [FormController::class, 'quill'])->name('form.quill');
Route::get('/form/radio', [FormController::class, 'radio'])->name('form.radio');
Route::get('/form/recaptcha', [FormController::class, 'recaptcha'])->name('form.recaptcha');
Route::get('/form/switch', [FormController::class, 'switch'])->name('form.switch');
Route::get('/form/switchjs', [FormController::class, 'switchjs'])->name('form.switchjs');
Route::get('/form/time-picker', [FormController::class, 'timePicker'])->name('form.timePicker');
Route::get('/form/tinymce', [FormController::class, 'tinymce'])->name('form.tinymce');
Route::get('/form/type-ahead', [FormController::class, 'typeAhead'])->name('form.typeAhead');
Route::get('/form/image-crop', [FormController::class, 'imageCrop'])->name('form.imageCrop');

Route::get('/chart', [ChartController::class, 'chart'])->name('chart');
Route::get('/map', [ChartController::class, 'map'])->name('map');


Route::middleware('login')->group(function () {

    Route::get('/users', [UserController::class, 'index'])->name('users.index')->middleware('can:viewAny,App\Models\User');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create')->middleware('can:create,App\Models\User');
    Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show')->middleware('can:view,App\Models\User');
    Route::post('/users', [UserController::class, 'store'])->name('users.store')->middleware('can:create,App\Models\App\Models\User');
    Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update')->middleware('can:update,App\Models\User');
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy')->middleware('can:delete,App\Models\User');

    Route::get('/products', [ProductController::class, 'index'])->name('products.index')->middleware('can:viewAny,App\Models\Product');
    Route::get('/products/create', [ProductController::class, 'create'])->name('products.create')->middleware('can:create,App\Models\Product');
    Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show')->middleware('can:view,App\Models\Product');
    Route::post('/products', [ProductController::class, 'store'])->name('products.store')->middleware('can:create,App\Models\App\Models\Product');
    Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update')->middleware('can:update,App\Models\Product');
    Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit')->middleware('can:update,App\Models\Product');
    Route::delete('/products/{roduct}', [ProductController::class, 'destroy'])->name('products.destroy')->middleware('can:delete,App\Models\Product');

    Route::get('/user-card', [UserController::class, 'showCard'])->name('user.showcard');
    Route::get('/account-profile', [AuthController::class, 'showProfileAccount'])->name('showProfileAccount');

    Route::get('/', [AuthController::class, 'index'])->name('home');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
