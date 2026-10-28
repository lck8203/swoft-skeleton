<!doctype html>
<html lang="zh-CN">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>lck/swoft 2.0.13 · PHP 8.4 Ready</title>
  <style type="text/css">
    *,
    *::before,
    *::after {
      box-sizing: border-box;
    }

    html {
      font-family: sans-serif;
      line-height: 1.15;
      -webkit-text-size-adjust: 100%;
      -ms-text-size-adjust: 100%;
      -ms-overflow-style: scrollbar;
      -webkit-tap-highlight-color: transparent;
    }

    @-ms-viewport {
      width: device-width;
    }

    article, aside, dialog, figcaption, figure, footer, header, hgroup, main, nav, section {
      display: block;
    }

    body {
      margin: 0;
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "PingFang SC", "Microsoft YaHei", sans-serif;
      font-size: 1rem;
      font-weight: 400;
      line-height: 1.6;
      color: #333;
      text-align: left;
      background-color: #fefefe;
    }

    [tabindex="-1"]:focus {
      outline: 0 !important;
    }

    .container {
      width: 100%;
      padding-right: 15px;
      padding-left: 15px;
      margin-right: auto;
      margin-left: auto;
    }

    @media (min-width: 576px) {
      .container {
        max-width: 540px;
      }
    }

    @media (min-width: 768px) {
      .container {
        max-width: 720px;
      }
    }

    @media (min-width: 992px) {
      .container {
        max-width: 960px;
      }
    }

    @media (min-width: 1200px) {
      .container {
        max-width: 1140px;
      }
    }

    [hidden] {
      display: none !important;
    }

    h1, h2, h3, h4, h5, h6,
    .h1, .h2, .h3, .h4, .h5, .h6 {
      margin-bottom: 0.5rem;
      font-family: inherit;
      font-weight: 500;
      line-height: 1.2;
      color: inherit;
    }

    h1, .h1 {
      font-size: 2.5rem;
    }

    h2, .h2 {
      font-size: 2rem;
    }

    h3, .h3 {
      font-size: 1.75rem;
    }

    h4, .h4 {
      font-size: 1.5rem;
    }

    h5, .h5 {
      font-size: 1.25rem;
    }

    h6, .h6 {
      font-size: 1rem;
    }

    ul, li {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    a {
      color: #18bc9c;
      text-decoration: none;
    }

    a:hover {
      color: #128770;
      text-decoration: underline;
    }

    .swoft-title {
      margin-top: 15%;
      text-align: center;
      color: #18bc9c;
      font: 6em 'Helvetica Neue';
      font-weight: 200;
    }

    .swoft-title small {
      font-size: 0.35em;
      color: #999;
      margin-left: 0.3em;
      font-weight: 400;
    }

    .top-nav {
      margin-top: 2rem;
      text-align: center;
    }

    .top-nav ul {
      display: inline-flex;
      justify-content: center;
      gap: 3rem;
      padding: 0;
    }

    .top-nav a {
      display: inline-block;
      font-size: 1.2em;
      font-weight: 300;
      padding: 0.4em 0.6em;
    }

    .desc {
      margin-top: 4rem;
      margin-left: auto;
      margin-right: auto;
      max-width: 780px;
      color: #666;
      font-size: 0.95rem;
      line-height: 1.9;
    }

    .desc p {
      margin: 0.8rem 0;
    }

    .desc strong {
      color: #333;
    }

    @media (max-width: 1199px) {
      .swoft-title {
        font-size: 5em;
        margin-top: 12%;
      }
    }

    @media (max-width: 991px) {
      .swoft-title {
        font-size: 4em;
        margin-top: 10%;
      }
    }

    @media (max-width: 767px) {
      .swoft-title {
        font-size: 3em;
        margin-top: 8%;
      }

      .top-nav ul {
        flex-direction: column;
        gap: 0.6rem;
      }

      .desc {
        font-size: 0.88rem;
      }
    }

  </style>
</head>
<body>
<div class="container">
  <nav class="top-nav">
    <ul>
      <li><a target="_blank" href="https://packagist.org/packages/lck/swoft">Packagist</a></li>
      <li><a target="_blank" href="https://gitee.com/lck8203/swoft-skeleton">Gitee 仓库</a></li>
      <li><a target="_blank" href="https://www.lck.yn.cn/swoft">官网</a></li>
    </ul>
  </nav>

  <div class="main">
    <h1 class="swoft-title">lck/swoft<small>2.0.13 · PHP 8.4 Ready</small></h1>
  </div>

  <div class="desc">
    <p>
      本项目是 <strong>swoft-cloud/swoft</strong> 的长期维护分支。官方 2.0.x 已停止维护，在 PHP 8.0+
      环境下存在多处致命兼容问题。我们在官方基线之上补齐 PHP 8.4 兼容补丁，并以
      <strong>lck/swoft-*</strong> 名义重新发布全部组件包。
    </p>
    <p>
      <strong>命名空间与用法完全不变</strong>：代码里仍然是
      <code>use Swoft\Http\Server\...</code>、<code>use Swoft\Db\...</code>，业务代码无需任何修改。
      改变的只有 Composer 包名（<code>swoft/*</code> → <code>lck/swoft-*</code>），
      原因是官方包源已无人维护、且无法容纳 PHP 8.4 修复。
    </p>
  </div>
</div>
</body>
</html>
