# Laravel 10 開放應用程式介面

提供開發者可以透過程式去存取應用軟體或網路服務，隨著網路及科技上的進步，有愈來愈多的公司組織透過網際網路（HTTP）對外提供應用程式介面（API），讓外部應用系統得以透過這些介面存取原本私有的資源。

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
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移，並執行資料庫填充（如果要測試的話）。
```sh
$ php artisan migrate --seed
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/api/company/public/?page={頁數}` 來進行公開發行公司取得。

----

## 畫面截圖
![](https://i.imgur.com/03wQonz.png)
> 讓開發者更容易分享資料、開發社群及創新應用，讓資料、資源可以在某個網站被創造，接著在多個不同的平台或網站上被呈現或更新