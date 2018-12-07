<?php

//Capsule::schema()->create('orders', function($table)
//{
//    $table->increments('id');
//    $table->string('title');
//    $table->timestamps();
//});
Order::create(['title' => 'Wii U']);
$o = Order::where('id', 2)->get();
$order = new Order();
$order->title = 'Playstation 4';
$order->save();
dd(Order::get()->toArray());