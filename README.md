## Ovreview
### Darsk Announcement Service

## Requirement

- Laravel 7.x (see [laravel Documentation](https://laravel.com/docs/7.x/#server-requirements)) .

##### meet that requirement then just complete this :

## installation 
##### intsall laravel in your folder :
       laravel new announcement
##### or via composer :
       composer create-project --prefer-dist laravel/laravel announcement
##### clone package  in temp directory :
       git clone https://github.com/ahmad-athamneh-mawdoo3/drsk-announcement.git temp.announcement
##### then the install command will be :
        cp -r temp.announcement/. announcement/
##### add this line in config/app.php to providers array :
        Mawdoo3\Drsk\Announcement\DrskAnnouncementServiceProvider::class,
##### run internal php server in announcement folder :
       php artisan serve
##### That's it !! :
       http://127.0.0.1:8000/test.announcement

## Configration

## License
This is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
