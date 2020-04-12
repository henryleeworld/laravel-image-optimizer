# Laravel 7 圖片最佳化

引入 spatie 的 laravel-image-optimizer 套件來擴增實作將圖片最佳化，就能節省大量位元組，並提升網站的效能：瀏覽器要下載的位元組愈少，用戶端頻寬的爭用情況就越少，瀏覽器下載速度就可提升，並在螢幕上顯示實用的內容。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產⽣ Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移。
```sh
$ php artisan migrate
```
- 安裝圖片最佳化工具化，以 Ubuntu 作業系統語法：
```sh
$ sudo apt-get install jpegoptim
$ sudo apt-get install optipng
$ sudo apt-get install pngquant
$ sudo npm install -g svgo
$ sudo apt-get install gifsicle
$ sudo apt-get install webp
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。

----

## 畫面截圖
![](https://i.imgur.com/9Bckeol.png)
> 將電腦上的檔案上傳

![](https://i.imgur.com/sWzZiTW.png)
> 將檔案迷你化，以便縮減檔案大小
