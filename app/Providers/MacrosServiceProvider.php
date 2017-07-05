<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Response;

class MacrosServiceProvider extends ServiceProvider {
  /**
   * Bootstrap the application services.
   *
   * @return void
   */
  public function boot() {
    Response::macro('cap', function ($str) {
      return Response::make(strtoupper($str));
    });
    Response::macro('lienhe', function ($action) {
      $contact = '
          <form action="" method="POST" >
            Họ tên <input type="text" />."</br>"
            số dt <input type="text" />."</br>"
          </form>';
      return $contact;
    });
  }

  /**
   * Register the application services.
   *
   * @return void
   */
  public function register() {
    //
  }
}
