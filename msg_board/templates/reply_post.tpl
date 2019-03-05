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
    {* (1) 判斷是否為空值 *}
    {if ! isset($content)}
        <script> swal({ title: "回覆失敗", text: "內容不得空白，請重新輸入！", icon: "error", button: "確定 " }).then(function() { history.go(-1); }); </script>
		{return}
    {/if}

	{* (2) 判斷驗證碼是否正確 *}
	{if ! $verification}
        <script> swal({ title: "回覆失敗", text: "驗證碼輸入錯誤!", icon: "error", button: "確定 " }).then(function() { history.go(-1); }); </script>
		{return}
	{/if}

    {* 確認是否回覆成功，並顯示結果 *}
    {if $success}
        <script> swal({ title: "回覆成功", icon: "success", button: "確定 " }).then(function() { history.go(-2); }); </script>
    {else}
        <script> swal({ title: "回覆失敗", icon: "error", button: "確定 " }).then(function() { history.go(-2); }); </script>
    {/if}
</body>
</html>