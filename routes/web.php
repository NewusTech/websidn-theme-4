<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\TextController;
use App\Http\Controllers\Admin\CoroselController;
use App\Http\Controllers\Admin\CardController;
use App\Http\Controllers\Admin\TestimoniController;
use App\Http\Controllers\Admin\PriceController;
use App\Http\Controllers\Admin\GaleriController;
use App\Http\Controllers\Admin\FileController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\Components\HomeController;
use App\Http\Controllers\Admin\Components\TextHomeController;
use App\Http\Controllers\Admin\Components\TestimoniHomeController;
use App\Http\Controllers\Admin\Components\Controller;
use App\Http\Controllers\Admin\Components\InsertController;
use App\Http\Controllers\Admin\Components\ContactHomeController;
use App\Http\Controllers\Admin\Components\CoroselHomeController;
use App\Http\Controllers\Admin\Components\CardHomeController;
use App\Http\Controllers\Admin\Blogger\BlogController;
use App\Http\Controllers\Admin\Blogger\BlogkategoriController;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;



route::get('/', [FrontController::class, 'LogoShow']);
route::get('/layanan', [FrontController::class, 'ServiceShow']);
route::get('/tentang-kami', [FrontController::class, 'AboutShow']);
route::get('/galleri', [FrontController::class, 'GalleryShow']);
route::get('/portofolio', [FrontController::class, 'PortfolioShow']);
route::get('/artikel', [FrontController::class, 'BlogShow']);
route::get('/kontak-kami', [FrontController::class, 'ContactShow']);
route::get('/document-brosur', [FrontController::class, 'FileBrosurShow']);
route::get('/document-price', [FrontController::class, 'FilePriceShow']);
route::get('/document-portofolio', [FrontController::class, 'FilePortofolioShow']);
Route::get('/konsultasi', function () {
    return view('welcome');
});

route::get('/dashboard', [DashboardController::class, 'indexPage']);
route::get('/about', [AboutController::class, 'indexPage']);
// route::get('/components', [ComponentsController::class, 'ComponentPage']);
// route::get('/testimoni', [TestimoniController::class, 'TestimoniPage']);
route::get('/insertLayanan', [InsertController::class, 'InsertPage']);
route::get('/contact', [ContactController::class, 'ContactPage']);

Route::controller(LoginController::class)->group(function () {
    route::get('/login','LoginForm')->middleware(AdminMiddleware::class);
    route::post('/login','login');
    route::post('/logout','logout');
});
Route::controller(ImageController::class)->group(function () {
    Route::get('/image', 'ImageIndex')->name('image.index');
    Route::get('/image/create', 'ImageCreate')->name('image.create');
    Route::post('/image', 'ImageStore')->name('image.store');
    Route::get('/image/{id}/edit', 'ImageEdit')->name('image.edit');
    Route::put('/image/{id}', 'ImageUpdate')->name('image.update');
    Route::get('/image/{id}', 'ImageView')->name('image.view');
    Route::delete('/image/{id}', 'ImageDelete')->name('image.delete');
});
Route::controller(TextController::class)->group(function () {
    Route::get('/text', 'TextIndex')->name('text.index');
    Route::get('/text/create', 'TextCreate')->name('text.create');
    Route::post('/text', 'TextStore')->name('text.store');
    Route::get('/text/{id}/edit', 'TextEdit')->name('text.edit');
    Route::put('/text/{id}', 'TextUpdate')->name('text.update');
    Route::get('/text/{id}', 'TextView')->name('text.view');
    Route::delete('/text/{id}', 'TextDelete')->name('text.delete');
});
Route::controller(CoroselController::class)->group(function () {
    Route::get('/corosel', 'CoroselIndex')->name('corosel.index');
    Route::get('/corosel/create', 'CoroselCreate')->name('corosel.create');
    Route::post('/corosel', 'CoroselStore')->name('corosel.store');
    Route::get('/corosel/{id}/edit', 'CoroselEdit')->name('corosel.edit');
    Route::put('/corosel/{id}', 'CoroselUpdate')->name('corosel.update');
    Route::get('/corosel/{id}', 'CoroselView')->name('corosel.view');
    Route::delete('/corosel/{id}', 'CoroselDelete')->name('corosel.delete');
});
Route::controller(CardController::class)->group(function () {
    Route::get('/card', 'CardIndex')->name('card.index');
    Route::get('/card/create', 'CardCreate')->name('card.create');
    Route::post('/card', 'CardStore')->name('card.store');
    Route::get('/card/{id}/edit', 'CardEdit')->name('card.edit');
    Route::put('/card/{id}', 'CardUpdate')->name('card.update');
    Route::get('/card/{id}', 'CardView')->name('card.view');
    Route::delete('/card/{id}', 'CardDelete')->name('card.delete');
});
Route::controller(TestimoniController::class)->group(function () {
    Route::get('/testimoni', 'TestimoniIndex')->name('testimoni.index');
    Route::get('/testimoni/create', 'TestimoniCreate')->name('testimoni.create');
    Route::post('/testimoni', 'TestimoniStore')->name('testimoni.store');
    Route::get('/testimoni/{id}/edit', 'TestimoniEdit')->name('testimoni.edit');
    Route::put('/testimoni/{id}', 'TestimoniUpdate')->name('testimoni.update');
    Route::get('/testimoni/{id}', 'TestimoniView')->name('testimoni.view');
    Route::delete('/testimoni/{id}', 'TestimoniDelete')->name('testimoni.delete');
});
Route::controller(PriceController::class)->group(function () {
    Route::get('/price', 'PriceIndex')->name('price.index');
    Route::get('/price/create', 'PriceCreate')->name('price.create');
    Route::post('/price', 'PriceStore')->name('price.store');
    Route::get('/price/{id}/edit', 'PriceEdit')->name('price.edit');
    Route::put('/price/{id}', 'PriceUpdate')->name('price.update');
    Route::get('/price/{id}', 'PriceView')->name('price.view');
    Route::delete('/price/{id}', 'PriceDelete')->name('price.delete');
});
// Route::controller(CoroselController::class)->group(function () {
//     route::get('/coroselview','CoroselPageView');
//     route::get('/coroseledit','CoroselPageEdit');
// });
Route::controller(BlogController::class)->group(function () {
    Route::get('/blogs', 'Blogindex')->name('blog.index');
    Route::get('/blogs/create', 'Blogcreate')->name('blog.create');
    Route::post('/blogs/store', 'Blogstore')->name('blog.store');
    Route::get('/blogs/{id}/edit', 'Blogedit')->name('blog.edit');
    Route::put('/blogs/{id}/update', 'Blogupdate')->name('blog.update');
    Route::get('/blogs/{id}/show', 'Blogshow')->name('blog.show');
    Route::delete('/blogs/{id}/destroy', 'Blogdestroy')->name('blog.destroy');
});
Route::controller(BlogkategoriController::class)->group(function () {
    Route::get('/blogkategoris', 'Blogkategoriindex')->name('blogkategori.index');
    Route::get('/blogkategoris/create', 'Blogkategoricreate')->name('blogkategori.create');
    Route::post('/blogkategoris/store', 'Blogkategoristore')->name('blogkategori.store');
    Route::get('/blogkategoris/{id}/edit', 'Blogkategoriedit')->name('blogkategori.edit');
    Route::put('/blogkategoris/{id}/update', 'Blogkategoriupdate')->name('blogkategori.update');
    Route::get('/blogkategoris/{id}/show', 'Blogkategorishow')->name('blogkategori.show');
    Route::delete('/blogkategoris/{id}/destroy', 'Blogkategoridestroy')->name('blogkategori.destroy');
});
Route::controller(BlogtagController::class)->group(function () {
    Route::get('/blogtags', 'Blogtagindex')->name('blogtag.index');
    Route::get('/blogtags/create', 'Blogtagcreate')->name('blogtag.create');
    Route::post('/blogtags/store', 'Blogtagstore')->name('blogtag.store');
    Route::get('/blogtags/{id}/edit', 'Blogtagedit')->name('blogtag.edit');
    Route::put('/blogtags/{id}/update', 'Blogtagupdate')->name('blogtag.update');
    Route::get('/blogtags/{id}/show', 'Blogtagshow')->name('blogtag.show');
    Route::delete('/blogtags/{id}/destroy', 'Blogtagdestroy')->name('blogtag.destroy');
});
Route::controller(BlogconsoleController::class)->group(function () {
    Route::get('/blogconsoles', 'Blogconsoleindex')->name('blogconsole.index');
    Route::get('/blogconsoles/create', 'Blogconsolecreate')->name('blogconsole.create');
    Route::post('/blogconsoles/store', 'Blogconsolestore')->name('blogconsole.store');
    Route::get('/blogconsoles/{id}/edit', 'Blogconsoleedit')->name('blogconsole.edit');
    Route::put('/blogconsoles/{id}/update', 'Blogconsoleupdate')->name('blogconsole.update');
    Route::get('/blogconsoles/{id}/show', 'Blogconsoleshow')->name('blogconsole.show');
    Route::delete('/blogconsoles/{id}/destroy', 'Blogconsoledestroy')->name('blogconsole.destroy');
});

Route::controller(HomeController::class)->group(function () {
    Route::get('/home', 'HomeIndex')->name('home.index');
    Route::get('/home/create', 'HomeCreate')->name('home.create');
    Route::post('/home', 'HomeStore')->name('home.store');
    Route::get('/home/{id}/edit', 'HomeEdit')->name('home.edit');
    Route::put('/home/{id}', 'HomeUpdate')->name('home.update');
    Route::get('/home/{id}', 'HomeView')->name('home.view');
    Route::delete('/home/{id}', 'HomeDelete')->name('home.delete');
});
Route::controller(GaleriController::class)->group(function () {
    Route::get('/galeri', 'GaleriIndex')->name('galeri.index');
    Route::get('/galeri/create', 'GaleriCreate')->name('galeri.create');
    Route::post('/galeri', 'GaleriStore')->name('galeri.store');
    Route::get('/galeri/{id}/edit', 'GaleriEdit')->name('galeri.edit');
    Route::put('/galeri/{id}', 'GaleriUpdate')->name('galeri.update');
    Route::get('/galeri/{id}', 'GaleriView')->name('galeri.view');
    Route::delete('/galeri/{id}', 'GaleriDelete')->name('galeri.delete');
});
Route::controller(FileController::class)->group(function () {
    Route::get('/file', 'FileIndex')->name('file.index');
    Route::get('/file/create', 'FileCreate')->name('file.create');
    Route::post('/file', 'FileStore')->name('file.store');
    Route::get('/file/{id}/edit', 'FileEdit')->name('file.edit');
    Route::put('/file/{id}', 'FileUpdate')->name('file.update');
    Route::get('/file/{id}', 'FileView')->name('file.view');
    Route::delete('/file/{id}', 'FileDelete')->name('file.delete');
});
Route::controller(ContactController::class)->group(function () {
    Route::get('/contact', 'ContactIndex')->name('contact.index');
    Route::get('/contact/create', 'ContactCreate')->name('contact.create');
    Route::post('/contact', 'ContactStore')->name('contact.store');
    Route::get('/contact/{id}/edit', 'ContactEdit')->name('contact.edit');
    Route::put('/contact/{id}', 'ContactUpdate')->name('contact.update');
    Route::get('/contact/{id}', 'ContactView')->name('contact.view');
    Route::delete('/contact/{id}', 'ContactDelete')->name('contact.delete');
});
Route::controller(AboutController::class)->group(function () {
    Route::get('/about', 'AboutIndex')->name('about.index');
    Route::get('/about/create', 'AboutCreate')->name('about.create');
    Route::post('/about', 'AboutStore')->name('about.store');
    Route::get('/about/{id}/edit', 'AboutEdit')->name('about.edit');
    Route::put('/about/{id}', 'AboutUpdate')->name('about.update');
    Route::get('/about/{id}', 'AboutView')->name('about.view');
    Route::delete('/about/{id}', 'AboutDelete')->name('about.delete');
});
// Route::controller(TextHomeController::class)->group(function () {
//     route::get('/text','TextPage');
//     route::get('/textlayanan','TextPageLayanan');
//     route::get('/textGaleri','TextPageGaleri');
//     route::get('/textAbout','TextPageAbout');
// });
// Route::controller(TextHomeController::class)->group(function () {
//     route::get('/textview','TextPageView');
//     route::get('/textedit','TextPageEdit');
// });