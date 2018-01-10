<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);


        DB::insert("insert into items (name,price,url) value (?,?,?)", [
            "switch", 29800, "http://img1.kakaku.k-img.com/images/productimage/fullscale/K0000934982.jpg"
        ]);
        DB::insert("insert into items (name,price,url) value (?,?,?)", [
            "スプラトゥーン2", 5800,"https://images-na.ssl-images-amazon.com/images/I/71yVtBkLYtL._SY445_.jpg"
        ]);
        DB::insert("insert into items (name,price,url) value (?,?,?)", [
            "3DS", 15000,"https://images-na.ssl-images-amazon.com/images/I/41NGofA8vOL.jpg"
        ]);
        DB::insert("insert into items (name,price,url) value (?,?,?)", [
            "大乱闘スマッシュブラザーズ", 4800,"https://images-na.ssl-images-amazon.com/images/I/91ATcXNTbIL._SL1500_.jpg"
        ]);
        DB::insert("insert into items (name,price,url) value (?,?,?)", [
            "PS4", 35000,"http://sm.ign.com/ign_jp/cover/p/ps4-pro/ps4-pro_1nbg.jpg"
        ]);
        DB::insert("insert into items (name,price,url) value (?,?,?)", [
            "グランド・セフト・オートV ", 5800,"https://images-na.ssl-images-amazon.com/images/I/61mGCeqKS9L.jpg"
        ]);
        DB::insert("insert into items (name,price,url) value (?,?,?)", [
            "PS3",20000,"http://cslbook.com/wp-content/uploads/2015/08/81g5J1zI-1L__SL1500_.jpg"
        ]);
        DB::insert("insert into items (name,price,url) value (?,?,?)", [
            "Minecraft (PS3) ",3500,"https://images-na.ssl-images-amazon.com/images/I/514ZNwRfeEL.jpg"
        ]);
        DB::insert("insert into items (name,price,url) value (?,?,?)", [
            "Xbox360", 29800,"https://fthmb.tqn.com/sVwlvlt3Y3MB-JbnTZDSQ8dsFWo=/400x400/61WF4anKeZL._SL1190_-56bb5f0f5f9b5829f847af03.jpg"
        ]);
        DB::insert("insert into items (name,price,url) value (?,?,?)", [
            "エースコンバット6 解放への戦火",12800,"https://r.r10s.jp/ran/img/1001/0004/988/648/539/242/10010004988648539242_1.jpg?fitin=200:200&composite-to=*,*|200:200"
        ]);
        DB::insert("insert into items (name,price,url) value (?,?,?)", [
            "ゲームキューブ（中古)",4800,"https://images-fe.ssl-images-amazon.com/images/I/51FJ7462S4L.jpg"
        ]);
        DB::insert("insert into items (name,price,url) value (?,?,?)", [
            "マリオサンシャイン（中古)",3200,"https://www.suruga-ya.jp/database/pics/game/257000033.jpg"
        ]);
        DB::insert("insert into items (name,price,url) value (?,?,?)", [
            "任天堂６４（中古）",2000,"http://zatublo.tank.jp/masa1/wp-content/uploads/2015/11/l201202050000-680x366.jpg"
        ]);
        DB::insert("insert into items (name,price,url) value (?,?,?)", [
            "星のカービー６４（中古）",800,"http://www.suruga-ya.jp/database/pics/game/147000167.jpg"
        ]);


    }}

