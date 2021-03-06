var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss');
});

elixir(function(mix) {
    mix.sass('master.scss', 'public/assets/css/master.css');
});


/*********** BERANDA ***********/
elixir(function(mix) {
    mix.sass('beranda.scss', 'public/assets/css/beranda.css');
});
elixir(function(mix) {
    mix.sass('detailPengumuman.scss', 'public/assets/css/detailPengumuman.css');
});
/*********** EO BERANDA ***********/

/*********** HIBAH *************/
elixir(function(mix) {
    mix.sass('hibah.scss', 'public/assets/css/hibah.css');
});

elixir(function(mix) {
    mix.sass('applyHibah.scss', 'public/assets/css/applyHibah.css');
});

elixir(function(mix) {
    mix.sass('kelolaHibah.scss', 'public/assets/css/kelolaHibah.css');
});
/*********** EO HIBAH ***********/

/*********** PROPOSAL *************/
elixir(function(mix) {
    mix.sass('proposal.scss', 'public/assets/css/proposal.css');
});
/*********** EO PROPOSAL ***********/

/*********** PROPOSAL HIBAH *************/
elixir(function(mix) {
    mix.sass('proposalhibah.scss', 'public/assets/css/proposalhibah.css');
});
elixir(function(mix) {
    mix.sass('nilaiproposal.scss', 'public/assets/css/nilaiproposal.css');
});
elixir(function(mix) {
    mix.sass('sesuaikanproposal.scss', 'public/assets/css/sesuaikanproposal.css');
});
/*********** EO PROPOSAL HIBAH ***********/


/*********** PESAN & MOU ***********/
elixir(function(mix) {
    mix.sass('pesan.scss', 'public/assets/css/pesan.css');
});
elixir(function(mix) {
    mix.sass('mou.scss', 'public/assets/css/mou.css');
});
elixir(function(mix) {
    mix.sass('detailpesan.scss', 'public/assets/css/detailpesan.css');
});
/*********** EO PESAN & MOU ***********/

/*********** PENGUMUMAN ***********/
elixir(function(mix) {
    mix.sass('pengumuman.scss', 'public/assets/css/pengumuman.css');
});
/*********** EO PENGUMUMAN ***********/

/*********** LAPORAN ***********/
elixir(function(mix) {
    mix.sass('laporan.scss', 'public/assets/css/laporan.css');
});
/*********** EO LAPORAN ***********/

/*********** BORANG ***********/
elixir(function(mix) {
    mix.sass('borang.scss', 'public/assets/css/borang.css');
});
/*********** EO BORANG ***********/

/*********** BORANG ***********/
elixir(function(mix) {
    mix.sass('publikasi.scss', 'public/assets/css/publikasi.css');
});
/*********** EO BORANG ***********/

/*********** KONTAK ***********/
elixir(function(mix) {
    mix.sass('kontak.scss', 'public/assets/css/kontak.css');
});
/*********** EO KONTAK ***********/

/*********** REPOSITORY & KELOLA REPOSITORY ***********/
elixir(function(mix) { mix.sass('repository.scss', 'public/assets/css/repository.css');});
elixir(function(mix) { mix.sass('buku.scss', 'public/assets/css/buku.css');});
elixir(function(mix) { mix.sass('artikelIlmiah.scss', 'public/assets/css/artikelIlmiah.css');});
elixir(function(mix) { mix.sass('artikelPopuler.scss', 'public/assets/css/artikelPopuler.css');});
elixir(function(mix) { mix.sass('artikelKonferensi.scss', 'public/assets/css/artikelKonferensi.css');});
elixir(function(mix) { mix.sass('penelitian.scss', 'public/assets/css/penelitian.css');});
elixir(function(mix) { mix.sass('pengmas.scss', 'public/assets/css/pengmas.css');});
elixir(function(mix) { mix.sass('kegiatanIlmiah.scss', 'public/assets/css/kegiatanIlmiah.css');});
/*********** EO REPOSITORY & KELOLA REPOSITORY ***********/