<?php
namespace Database\Seeders;
use App\Models\{DestinationWishlist,Event,EventTimeline,Template,Trip,TripImage,TripMemory,TripSchedule};
use App\Models\User; use Illuminate\Database\Seeder;
class RomanticTravelSeeder extends Seeder {
public function run(): void {
$user=User::firstOrCreate(['email'=>'demo@example.com'],['name'=>'Khánh','password'=>bcrypt('password')]);
$template=Template::create(['name'=>'Romantic Travel Scrapbook','slug'=>'romantic-travel-scrapbook','type'=>'du-lich','thumbnail'=>'/images/template-scrapbook.jpg','description'=>'Template nhật ký yêu thương phong cách scrapbook.','is_active'=>1]);
$event=Event::create(['user_id'=>$user->id,'template_id'=>$template->id,'title'=>'Hành trình yêu thương','slug'=>'hanh-trinh-yeu-thuong','event_type'=>'love','status'=>'published','main_title'=>'Khánh & Em','short_description'=>'Lưu giữ kỷ niệm yêu nhau và những chuyến đi cùng nhau.','cover_image'=>'/images/couple-cover.jpg','intro_note'=>'Cảm ơn em vì đã cùng anh đi qua thanh xuân đẹp nhất.','main_quote'=>'Đi qua muôn nơi, nơi đẹp nhất vẫn là nơi có em.','footer_text'=>'With love, Khánh & Em']);
foreach(['Đà Lạt','Đà Nẵng','Phú Quốc'] as $i=>$name){$slug=strtolower(str_replace(['à','ạ','ã','á','â','ă','Đ','đ','ú','ư','ô','ố','ồ','ơ','í','ì','ê','é','è','ó','ò','ủ','ù',' ','-'],['a','a','a','a','a','a','D','d','u','u','o','o','o','o','i','i','e','e','e','o','o','u','u','-','-'],$name)); $trip=Trip::create(['event_id'=>$event->id,'title'=>'Chuyến đi '.$name,'slug'=>$slug,'location'=>$name,'cover_image'=>'/images/trip-'.($i+1).'.jpg','opening_note'=>'Một ngày thật dịu dàng ở '.$name,'diary_text'=>'Chúng mình đã cùng nhau khám phá, ăn uống và lưu lại thật nhiều nụ cười.','ending_quote'=>'Thanh xuân của anh là những chuyến đi có em.','sort_order'=>$i]); for($j=1;$j<=4;$j++){TripImage::create(['trip_id'=>$trip->id,'image_path'=>'/images/trip-'.($i+1).'-'.$j.'.jpg','caption'=>'Khoảnh khắc '.$j,'sort_order'=>$j]);} TripMemory::create(['trip_id'=>$trip->id,'content'=>'Cơn mưa chiều và ly cacao nóng.','sort_order'=>1]); TripSchedule::create(['trip_id'=>$trip->id,'time_text'=>'07:00','title'=>'Săn mây','description'=>'Ngắm bình minh.','sort_order'=>1]); }
EventTimeline::create(['event_id'=>$event->id,'title'=>'Lần đầu gặp nhau','event_date'=>'2022-02-14','description'=>'Tại quán cà phê nhỏ.','icon'=>'heart','sort_order'=>1]);
DestinationWishlist::create(['event_id'=>$event->id,'title'=>'Kyoto', 'sort_order'=>1]);
}
}
