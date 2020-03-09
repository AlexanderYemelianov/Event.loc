<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppConfig extends Model
{
    public static $initialConfigs = [
        ['config_name' => 'Contact Email', 'config_code' => 'contact_email', 'value' => 'info@eventlab.com.ua'],
        ['config_name' => 'Contact Phone', 'config_code' => 'contact_phone', 'value' => '(093) 390-3413'],
        ['config_name' => 'Contact Person Name', 'config_code' => 'contact_person_name', 'value' => 'Анна'],
        ['config_name' => 'Facebook Link', 'config_code' => 'fb_link', 'value' => 'https://www.facebook.com/laboratoriaevent/?locale2=ru_RU'],
        ['config_name' => 'Instagram Link', 'config_code' => 'ig_link', 'value' => 'https://www.instagram.com/event_lab_kiev/?igshid=jiuix8w6wn6z'],
        ['config_name' => 'Address', 'config_code' => 'address', 'value' => 'Киев, ул. Васильковская 30, оф. 407'],
        ['config_name' => 'Google Map Embedded Link', 'config_code' => 'google_map_link', 'value' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2543.539042497462!2d30.48759045096451!3d50.39379097936683!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4c8dab3f4759d%3A0x67dced8fbfa28384!2z0LLRg9C70LjRhtGPINCS0LDRgdC40LvRjNC60ZbQstGB0YzQutCwLCAzMCwg0JrQuNGX0LI!5e0!3m2!1sru!2sua!4v1480089567899']
    ];

    public $incrementing = false;

    protected $primaryKey = 'config_code';

    protected $fillable = ['config_name', 'config_code', 'value'];
}
