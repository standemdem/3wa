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
  "adminConnexion"=>[
    "path"  =>"/adminConnexion",
    "run"   =>"PageController@admin"
  ]
];
