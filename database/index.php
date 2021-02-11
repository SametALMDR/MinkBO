<?php

require_once '../vendor/autoload.php';
require_once '../config.php';

use Illuminate\Database\Capsule\Manager as DB;

try {
    if(!DB::schema()->hasTable('admins')) {
        DB::schema()->create('admins', function ($table) {
            $table->increments('aid');
            $table->string('name',255);
            $table->string('surname',255);
            $table->text('password');
            $table->string('email',255)->unique();
            $table->string('address',255);
            $table->string('phone',255);
            $table->timestamps();
        });
        DB::table('admins')->insert([
            'name'=>'Samet',
            'surname'=>'Alemdaroğlu',
            'password'=>password_hash('samet525452',PASSWORD_DEFAULT),
            'email'=>'admin@admin.com',
            'address'=>'Fatsa/ORDU',
            'phone' => '5345722515',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);
    }
    if(!DB::schema()->hasTable('moderators')) {
        DB::schema()->create('moderators', function ($table) {
            $table->increments('mid');
            $table->string('name',255);
            $table->string('surname',255);
            $table->text('password');
            $table->string('email',255)->unique();
            $table->string('address',255);
            $table->string('phone',255);
            $table->timestamps();
        });
        DB::table('moderators')->insert([
            'name'=>'Berk',
            'surname'=>'Çetin',
            'password'=>password_hash('samet525452',PASSWORD_DEFAULT),
            'email'=>'moderator@moderator.com',
            'address'=>'Denizli/Türkiye',
            'phone' => '5345722515',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);
    }
    if(!DB::schema()->hasTable('advertisements')) {
        DB::schema()->create('advertisements', function ($table) {
            $table->increments('aid');
            $table->text('img');
            $table->text('description');
            $table->enum('status', ['1', '0',])->default(1);
            $table->timestamps();
        });
        DB::table('advertisements')->insert([
            'description'=>"Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500'lerden beri endüstri standardı sahte metinler olarak kullanılmıştır.",
            'status'=>1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
    if(!DB::schema()->hasTable('contracts')) {
        DB::schema()->create('contracts', function ($table) {
            $table->increments('cid');
            $table->string('title',255);
            $table->text('description');
            $table->enum('status', ['1', '0',])->default(1);
            $table->timestamps();
        });
        DB::table('contracts')->insert([
            'title' => 'Hizmet Koşulları',
            'description' => "Yinelenen bir sayfa içeriğinin okuyucunun dikkatini dağıttığı bilinen bir gerçektir. Lorem Ipsum kullanmanın amacı, sürekli 'buraya metin gelecek, buraya metin gelecek' yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda birçok masaüstü yayıncılık paketi ve web sayfa düzenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında 'lorem ipsum' anahtar sözcükleri ile arama yapıldığında henüz tasarım aşamasında olan çok sayıda site listelenir. 
            Yıllar içinde, bazen kazara, bazen bilinçli olarak (örneğin mizah katılarak), çeşitli sürümleri geliştirilmiştir.",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('contracts')->insert([
            'title' => 'Gizlilik Sözleşmesi',
            'description' => "Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500'lerden beri endüstri standardı sahte metinler olarak kullanılmıştır. Beşyüz yıl boyunca varlığını sürdürmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sıçramıştır.
             1960'larda Lorem Ipsum pasajları da içeren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum sürümleri içeren masaüstü yayıncılık yazılımları ile popüler olmuştur.",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('contracts')->insert([
            'title' => 'Üyelik Sözleşmesi',
            'description' => "Yaygın inancın tersine, Lorem Ipsum rastgele sözcüklerden oluşmaz. 
            Kökleri M.Ö. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir geçmişi vardır. 
            Virginia'daki Hampden-Sydney College'dan Latince profesörü Richard McClintock, bir Lorem Ipsum pasajında geçen ve anlaşılması en güç 
            sözcüklerden biri olan 'consectetur' sözcüğünün klasik edebiyattaki örneklerini incelediğinde kesin bir kaynağa ulaşmıştır. 
            Lorm Ipsum, Çiçero tarafından M.Ö. 45 tarihinde kaleme alınan 'de Finibus Bonorum et Malorum' (İyi ve Kötünün Uç Sınırları) eserinin 1.10.32 ve 
            1.10.33 sayılı bölümlerinden gelmektedir. Bu kitap, ahlak kuramı üzerine bir tezdir ve Rönesans döneminde çok popüler olmuştur. ",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
    if(!DB::schema()->hasTable('users')){
        DB::schema()->create('users',function ($table){
            $table->increments('uid');
            $table->string('name',255);
            $table->string('surname',255);
            $table->string('email',255)->unique();
            $table->text('username')->unique();
            $table->text('password');
            $table->date('birthday');
            $table->enum('gender', ['Erkek', 'Kadın', 'Diğer']);
            $table->string('city',255);
            $table->string('state',255);
            $table->json('friends')->default('[]');
            $table->string('image',255);
            $table->string('banner',255);
            $table->text('description');
            $table->string('job',255);
            $table->json('saved_posts')->default('[]');
            $table->tinyInteger('secret_opt_name')->default(1);
            $table->enum('session_status', ['cevrimici', 'cevrimdisi'])->default('cevrimdisi');
            $table->tinyInteger('email_verified');
            $table->tinyInteger('status');
            $table->timestamp('lastlogin');
            $table->timestamps();
        });
        DB::table('users')->insert([
            'name'=> 'hüseyin',
            'surname'=> 'erdağlı',
            'email'=>'hsyn-99@hotmail.com',
            'username'=>'Erdagli574',
            'password'=> password_hash('123456',PASSWORD_DEFAULT),
            'birthday'=> '1995-11-11',
            'gender' => 'Erkek',
            'city'=> 'Balıkesir',
            'state'=> 'Edremit',
            'email_verified'=>'1',
            'status'=>1,
            'image'         => 'default.svg',
            'banner'        => 'def-banner.png',
            'description'   => 'Bu alanda kendinizi tanıtabilir veya yaşantınız hakkında bilgiler verebilirsiniz.',
            'job'           => 'Belirtilmedi',
            'lastlogin'     => date('Y-m-d H:i:s'),
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'name'=> 'Anıl Ege',
            'surname'=> 'Kara',
            'email'=>'user@user.com',
            'username'=>'user',
            'password'=> password_hash('user',PASSWORD_DEFAULT),
            'birthday'=> '1995-11-11',
            'gender' => 'Erkek',
            'city'=> 'Ankara',
            'state'=> 'Çankaya',
            'email_verified'=>'1',
            'status'=> 1,
            'image'         => 'default2.jpg',
            'banner'        => 'def-banner2.jpg',
            'description'   => 'Bu alanda kendinizi tanıtabilir veya yaşantınız hakkında bilgiler verebilirsiniz.',
            'job'           => 'Belirtilmedi',
            'lastlogin'     => date('Y-m-d H:i:s'),
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s')
        ]);
        for($i=0;$i<10;$i++){
            $random = chr(rand(65,90)).chr(rand(97,122)).chr(rand(65,90)).chr(rand(65,90));
            DB::table('users')->insert([
                'name'=> 'samet'.$random,
                'surname'=> 'alemdaroğlu',
                'email'=>'samet'.$random.'@hotmail.com',
                'username'=>'samet'.$random,
                'password'=> password_hash('123456',PASSWORD_DEFAULT),
                'birthday'=> '1995-11-11',
                'gender' => 'Erkek',
                'city'=> 'Ordu',
                'state'=> 'Fatsa',
                'email_verified'=>'1',
                'status'=>1,
                'image'         => 'default.svg',
                'banner'        => 'def-banner.png',
                'description'   => 'Bu alanda kendinizi tanıtabilir veya yaşantınız hakkında bilgiler verebilirsiniz.',
                'job'           => 'Belirtilmedi',
                'lastlogin'     => date('Y-m-d H:i:s'),
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s')
            ]);
        }
    }
    if(!DB::schema()->hasTable('users_ip_history')){
        DB::schema()->create('users_ip_history',function ($table){
            $table->increments('hid');
            $table->integer('uid')->unsigned();
            $table->foreign('uid')->references('uid')->on('users');
            $table->string('ip_address',255);
            $table->dateTime('logged_at');
        });
    }
    if(!DB::schema()->hasTable('messages')){
        DB::schema()->create('messages',function ($table){
            $table->increments('mid');
            $table->integer('sender_uid')->unsigned();
            $table->foreign('sender_uid')->references('uid')->on('users');
            $table->integer('receiver_uid')->unsigned();
            $table->foreign('receiver_uid')->references('uid')->on('users');
            $table->tinyInteger('receiver_unread');
            $table->text('message');
            $table->timestamps();
        });
    }
    if(!DB::schema()->hasTable('config')){
        DB::schema()->create('config',function ($table){
            $table->increments('cid');
            $table->text('c_name')->unique();
            $table->text('c_value');
        });
        DB::table('config')->insert([
            [
                'c_name'    => 'smtp_port',
                'c_value'   =>'587'
            ],
            [
                'c_name'    => 'smtp_host',
                'c_value'   =>'plesk.dnshosting.me'
            ],
            [
                'c_name'    => 'smtp_username',
                'c_value'   =>'info@datatr.xyz'
            ],
            [
                'c_name'    => 'smtp_password',
                'c_value'   =>'D@f96lh1'
            ],
            [
                'c_name'    => 'smtp_sender_email',
                'c_value'   =>'info@minkbo.com'
            ],
            [
                'c_name'    => 'smtp_sender_name',
                'c_value'   =>'MinkBO'
            ],
        ]);
    }
    if(!DB::schema()->hasTable('pw_reset')){
        DB::schema()->create('pw_reset',function ($table){
            $table->increments('rid');
            $table->integer('uid')->unsigned();
            $table->foreign('uid')->references('uid')->on('users');
            $table->text('token');
            $table->timestamps();
        });
    }
    if(!DB::schema()->hasTable('friend_requests')){
        DB::schema()->create('friend_requests',function ($table){
            $table->increments('id');
            $table->integer('uid')->unsigned();
            $table->foreign('uid')->references('uid')->on('users');
            $table->integer('friend_uid')->unsigned();
            $table->foreign('friend_uid')->references('uid')->on('users');
            $table->tinyInteger('unread');
            $table->timestamps();
        });
    }
    if(!DB::schema()->hasTable('groups')){
        DB::schema()->create('groups',function ($table){
            $table->increments('gid');
            $table->integer('owner_uid')->unsigned();;
            $table->foreign('owner_uid')->references('uid')->on('users');
            $table->text('name');
            $table->text('description');
            $table->json('users')->default('[]');
            $table->timestamps();
        });
    }
    if(!DB::schema()->hasTable('posts')){
        DB::schema()->create('posts',function ($table){
            $table->increments('pid');
            $table->integer('uid')->unsigned();
            $table->foreign('uid')->references('uid')->on('users');
            $table->foreign('gid')->references('gid')->on('groups');
            $table->integer('gid')->unsigned()->nullable();
            $table->enum('type', ['normal', 'secret'])->default('normal');
            $table->text('content');
            $table->json('likes')->default('[]');
            $table->json('attachments')->default('[]');
            $table->timestamps();
        });
    }
    if(!DB::schema()->hasTable('comments')){
        DB::schema()->create('comments',function ($table){
            $table->increments('comment_id');
            $table->integer('pid')->unsigned();;
            $table->foreign('pid')->references('pid')->on('posts');
            $table->integer('uid')->unsigned();
            $table->foreign('uid')->references('uid')->on('users');
            $table->integer('comment_parent');
            $table->text('comment');
            $table->timestamps();
        });
    }
    if(!DB::schema()->hasTable('events')){
        DB::schema()->create('events',function ($table){
            $table->increments('eid');
            $table->integer('owner_uid')->unsigned();;
            $table->foreign('owner_uid')->references('uid')->on('users');
            $table->text('name');
            $table->json('users')->default('[]');
            $table->text('description');
            $table->text('location');
            $table->dateTime('event_time');
            $table->timestamps();
        });
    }
    if(!DB::schema()->hasTable('reports')){
        DB::schema()->create('reports',function ($table){
            $table->increments('rid');
            $table->integer('sender_uid')->unsigned();
            $table->foreign('sender_uid')->references('uid')->on('users');
            $table->integer('reported_uid')->unsigned()->nullable();
            $table->foreign('reported_uid')->references('uid')->on('users');
            $table->integer('reported_pid')->unsigned()->nullable();
            $table->foreign('reported_pid')->references('pid')->on('posts');
            $table->integer('reported_gid')->unsigned()->nullable();
            $table->foreign('reported_gid')->references('gid')->on('groups');
            $table->integer('reported_eid')->unsigned()->nullable();
            $table->foreign('reported_eid')->references('eid')->on('events');
            $table->integer('reported_cid')->unsigned()->nullable();
            $table->foreign('reported_cid')->references('comment_id')->on('comments');
            $table->tinyInteger('unread');
            $table->text('message');
            $table->timestamps();
        });
    }
    if(!DB::schema()->hasTable('notifications')){
        DB::schema()->create('notifications',function ($table){
            $table->increments('nid');
            $table->integer('uid')->unsigned();
            $table->foreign('uid')->references('uid')->on('users');
            $table->text('message');
            $table->integer('req_user_id')->unsigned();
            $table->foreign('req_user_id')->references('uid')->on('users');
            $table->integer('post_id')->unsigned()->nullable();
            $table->foreign('post_id')->references('pid')->on('posts');
            $table->integer('group_id')->unsigned()->nullable();
            $table->foreign('group_id')->references('gid')->on('groups');
            $table->integer('event_id')->unsigned()->nullable();
            $table->foreign('event_id')->references('eid')->on('events');
            $table->tinyInteger('unread');
            $table->timestamps();
        });
    }
}catch (Exception $e){
    echo $e->getMessage();
}