# Laravel 9 提供貨幣和加密貨幣的當前和歷史匯率

引入 amrshawky 的 laravel-currency 套件來擴增提供貨幣和加密貨幣的當前和歷史匯率，試算結果僅供參考，實際之換算金額將以交易當時匯率為計算基準。

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
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/exchange-rates/convert` 來進行貨幣轉換。

----

## 畫面截圖
![](https://i.imgur.com/AkjIXft.png)
> 新臺幣匯率原則上由外匯市場供需決定，除非有不規則因素（譬如短期資金大量進出）及季節因素，導致匯率過度波動與失序變動，而有不利於經濟與金融穩定時，央行才會出手干預，以維持匯率動態穩定，這麼做的目的，也是為了幫助進出口業者對外報價與營運，並協助國內經濟發展