<?php

namespace App\Traits;

trait KaTestShop
{
    protected $testShop;

    public function setTestShop($supplier_id)
    {
        $this->testShop = config('test_shop');
        $this->testShop['supplier_id'] = $supplier_id;
    }

    public function getTestShop()
    {
        return $this->testShop;
    }

    public function shopCreate($source, $secret)
    {
        $shop = $this->getTestShop();
        $args = $this->source($source)->secret_key($secret)->buildCmd('shop.create', $shop);
        // dd($args);
        $res = $this->send($args);
        dd($res);
    }

    public function shopUpdate($source, $secret)
    {
        $shop = $this->getTestShop();
        // dd($shop);
        $args = $this->source($source)->secret_key($secret)->buildCmd('shop.update', $shop);
        // dd($args);
        $res = $this->send($args);
        dd($res);
    }

    public function shopOpen($baidu_shop_id, $source, $secret)
    {
        $args = $this->source($source)->secret_key($secret)->buildCmd('shop.open', compact('baidu_shop_id'));
        // dd($args);
        $res = $this->send($args);
        dd($res);
    }

    public function shopOffline($baidu_shop_id, $source, $secret)
    {
        $args = $this->source($source)->secret_key($secret)->buildCmd('shop.offline', compact('baidu_shop_id'));
        // dd($args);
        $res = $this->send($args);
        dd($res);
    }

    public function shopClose($baidu_shop_id, $source, $secret)
    {
        $args = $this->source($source)->secret_key($secret)->buildCmd('shop.close', compact('baidu_shop_id'));
        // dd($args);
        $res = $this->send($args);
        dd($res);
    }

    public function shopGet($shop_id, $source, $secret)
    {
        $args = $this->source($source)->secret_key($secret)->buildCmd('shop.get', compact('shop_id'));
        // dd($args);
        $res = $this->send($args);
        dd($res);
    }

    public function setAptitude($shop_id)
    {
        $this->aptitude = config('aptitude');
        $this->aptitude['shop_id'] = $shop_id;
    }

    public function getAptitude()
    {
        return $this->aptitude;
    }

    public function aptitudeUpload($source, $secret)
    {
        $args = $this->source($source)->secret_key($secret)->buildCmd('shop.aptitude.upload', $this->getAptitude());
        // dd($args, $this->getAptitude());
        $res = $this->send($args);
        dd($res);
    }

    public function aptitudeGet($shop_id, $source, $secret)
    {
        $args = $this->source($source)->secret_key($secret)->buildCmd('shop.aptitude.get', compact('shop_id'));
        // dd($args);
        $res = $this->send($args);
        dd($res);
    }
}
