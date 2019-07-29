<?php
namespace App;
trait EstoqueMovimento{
    public function product(){

        return $this->belongsTo(Products::class);
    }
}
