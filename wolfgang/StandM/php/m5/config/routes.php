<?php
//indique les différentes routes vers les pages php
//partie avt @ = controler
//partie apr @ = fonction à executer dans le controler
return [

  "home"=>[
    "path"  =>"/home",
    "run"   =>"PageController@index"
  ],
  "inscription"=>[
    "path"  =>"/register",
    "run"   =>"UserController@register"
  ],
  "connexion"=>[
    "path"  =>"/connexion",
    "run"   =>"UserController@connect"
  ],
  "deconnexion"=>[
    "path"  =>"/deconnexion",
    "run"   =>"UserController@deconnexion"
  ],
  "administration"=>[
    "path"  =>"/administration",
    "run"   =>"AdminController@admin"
  ],
  "addproduct"=>[
    "path"  =>"/addproduct",
    "run"   =>"AdminController@product"
  ],
  "listproduct"=>[
    "path"  =>"/listproduct",
    "run"   =>"AdminController@productList"
  ],
  "updateproduct"=>[
    "path"  =>"/updateproduct",
    "run"   =>"AdminController@modify"
  ],
  "deleteproduct"=>[
    "path"  =>"/deleteproduct",
    "run"   =>"AdminController@deleteProduct"
  ],
  "booking" =>[
    "path"  =>"/booking",
    "run"   =>"BookingController@booking"
  ]
];
