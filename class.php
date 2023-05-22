<?php
class Telefon {
  protected $marca;
  protected $model;
  protected $pret;
  protected $stoc;

  public function __construct($marca, $model, $pret, $stoc) {
    $this->marca = $marca;
    $this->model = $model;
    $this->pret = $pret;
    $this->stoc = $stoc;
  }

  public function getMarca() {
    return $this->marca;
  }

  public function getModel() {
    return $this->model;
  }

  public function getPret() {
    return $this->pret;
  }

  public function getStoc() {
    return $this->stoc;
  }
}

class Samsung extends Telefon {
  public function __construct($model, $pret, $stoc) {
    parent::__construct('Samsung', $model, $pret, $stoc);
  }
}

class IPhone extends Telefon {
  public function __construct($model, $pret, $stoc) {
    parent::__construct('iPhone', $model, $pret, $stoc);
  }
}

class Huawei extends Telefon {
  public function __construct($model, $pret, $stoc) {
    parent::__construct('Huawei', $model, $pret, $stoc);
  }
}

class Xiaomi extends Telefon {
  public function __construct($model, $pret, $stoc) {
    parent::__construct('Xiaomi', $model, $pret, $stoc);
  }
}

//Obiectele :
// Samsung
$samsung1 = new Samsung('Galaxy S21', 4000, 10);
$samsung2 = new Samsung('Galaxy Note 20', 3500, 5);
$samsung3 = new Samsung('Galaxy A71', 2000, 20);
$samsung4 = new Samsung('Galaxy M51', 1800, 15);
$samsung5 = new Samsung('Galaxy A12', 1000, 30);

// iPhone
$iphone1 = new IPhone('iPhone 12', 5000, 10);
$iphone2 = new IPhone('iPhone 11', 4000, 5);
$iphone3 = new IPhone('iPhone SE', 2500, 20);
$iphone4 = new IPhone('iPhone XR', 3000, 15);
$iphone5 = new IPhone('iPhone 7', 1500, 30);

// Huawei
$huawei1 = new Huawei('P40 Pro', 4500, 10);
$huawei2 = new Huawei('Mate 40', 4000, 5);
$huawei3 = new Huawei('P30 Lite', 1500, 20);
$huawei4 = new Huawei('Y6p', 1000, 15);
$huawei5 = new Huawei('Y5p', 800, 30);

// Xiaomi
$xiaomi1 = new Xiaomi('Mi 11', 4000, 10);
$xiaomi2 = new Xiaomi('Redmi Note 10 Pro', 2000, 5);
$xiaomi3 = new Xiaomi('Mi 10 Lite', 2500, 20);
$xiaomi4 = new Xiaomi('Redmi 9T', 1500, 15);
$xiaomi5 = new Xiaomi('Redmi 9A', 800, 30);
?>