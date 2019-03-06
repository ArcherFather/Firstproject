<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<title>{$title_window}</title>
</head>
<style>
    body{
        background: url(https://i2.bahamut.com.tw/html_bg.gif) center top #F9F9F9;
        background-image: url(https://i2.bahamut.com.tw/html_bg.gif);
        background-position-x: center;
        background-position-y: top;
        background-size: initial;
        background-repeat-x: initial;
        background-repeat-y: initial;
        background-attachment: initial;
        background-origin: initial;
        background-clip: initial;
        background-color: rgb(249, 249, 249);
        font-family: 微軟正黑體;
    }
</style>
<body>

    {* (1) 判斷驗證碼是否正確 *}
    {if ! $verification}
        <script> swal({ title: "登入失敗", text: "驗證碼輸入錯誤", icon: "error", button: "確定 " }).then(function() { history.go(-1); }); </script>
		{return}
	{/if}

    {* (2) 判斷帳號是否鎖定 *}
    {if $locked}
        <script> swal({ title: "登入失敗", text: "此帳號已被鎖定", icon: "error", button: "確定 " }).then(function() { history.go(-1); }); </script>
		{return}
	{/if}

	{* (3) 確認帳密是否正確，正確則進行登入 *}
	{if $success}
        <script> swal({ title: "登入成功", text: "畫面將自動跳回主選單", icon: "success", buttons: false}); </script>
        <meta http-equiv=REFRESH CONTENT=1;url={$script.home}>
	{else}
        <script> swal({ title: "登入失敗", text: "帳號密碼有誤", icon: "error", button: "確定 " }).then(function() { history.go(-1); }); </script>
        {return}
	{/if}

</body>
</html>