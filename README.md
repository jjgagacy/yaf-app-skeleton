# yaf-app-skeleton
a php application skeleton using [yaf](https://www.laruence.com/manual/) framework

### 配置

1. 在php.ini中配置yaf

    ```
    [yaf]
    yaf.environ=develop
    yaf.use_namespace=1
    ```
    
    `yaf.environ` 可设置三个选项：develop, test, product

2. nginx 配置rewrite

    ```
    if (!-e $request_filename) {
       rewrite ^/(.*) /index.php?$1 last;
    }
    ```


