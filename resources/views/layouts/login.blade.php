<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<style>
    h2 {text-align: center; font-size: 50px;}
    .disp-img2{
      background-image:url(../image/Go-back_3672.png);             
      background-repeat:  no-repeat;                              
      width:65px;                                   
      height:70pX;
      align:left;
      object-fit: cover;
      margin: -90px 400px; 
      background-color: transparent;
      border-color: transparent;                                
    }

    .disp-img2:hover {
        backdrop-filter: blur(12px);
    }

    input {margin: 20px 400px; width: 700px; height: 50px; font size:100px;
      border-radius: 7px; padding: 0.9em; transition: 0.3s; letter-spacing: 2px;}
      input:focus{background: #F5F5F5;}
    ::placeholder {font-size: 1.5em;}
    .password {margin: 20px 400px; width:15%;}
    .password2 {margin: -70px 650px; width:15%;}
    
    h2 {margin: 30px;}

    span.re {margin: 10px -230px;}
    span.pass {margin: 10px 400px;}
    span {margin: 20px 400px;}

    .button {
      display       : inline-block;
      border-radius : 10px;          /* 角丸       */
      font-size     : 30pt;        /* 文字サイズ */
      text-align    : center;      /* 文字位置   */
      cursor        : pointer;     /* カーソル   */
      padding       : 50px 50px 50px 50px;   /* 余白       */
      background    : #33CCFF;     /* 背景色     */
      color         : #ffffff;     /* 文字色     */
      line-height   : 0.1em;         /* 1行の高さ  */
      transition    : .3s;         /* なめらか変化 */
      box-shadow    : 6px 6px 3px #666666;  /* 影の設定 */
      border        : 2px solid #33CCFF;    /* 枠の指定 */
      width         : 700px;
      margin        : 50px 400px;
    }
    .button:hover {
      box-shadow    : none;        /* カーソル時の影消去 */
      color         : #ffffff;     /* 背景色     */
      background    : #33CCFF;     /* 文字色     */
    }

    .button2 {
      font-size     : 20pt;        /* 文字サイズ */
      text-align    : center;      /* 文字位置   */
      cursor        : pointer;     /* カーソル   */
      padding       : 50px 50px 50px 50px;   /* 余白       */
      background    : #ffffff;     /* 背景色     */
      color         : #33CCFF;     /* 文字色     */
      line-height   : 0.1em;         /* 1行の高さ  */
      transition    : .3s;         /* なめらか変化 */
      box-shadow    : 6px 6px 3px #666666;  /* 影の設定 */
      border        : 2px solid #cccccc;    /* 枠の指定 */
      width         : 700px;
      margin        : -50px 400px;
    }

    .button2:hover {
      box-shadow    : none;        /* カーソル時の影消去 */
      color         : #33CCFF;     /* 背景色     */
      background    : #ffffff;     /* 文字色     */
    }

    .me {background-image:url(../image/目のフリーアイコン5.jpeg);background-repeat:  no-repeat;                              
      width:65px;                                   
      height:70pX;
      align:left;
      object-fit: cover;
      margin: 10px 400px; 
      background-color: transparent;
      border-color: transparent;
      margin: -60px 900px -25px;  }

    a {font-size: 19px;}
    .url {margin: 100px 705px;}
    p {margin: 5px -109px; font-size: 18px;}

    table {background: grey;}
</style>

</head>
<body>
<h2>@yield('sub_title')</h2>
<INPUT border="1" type="button" onclick="history.back()" class="disp-img2">
    <div class="content">
        @yield('content')
    </div>
    <div class="url">
    <p>アカウントをお持ちでない方はこちら</p>
    <a href="http://localhost:8000/auth">新規作成</a>
    </div>
</body>
</html>