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
    table{
        border-spacing:0;   {* 表格欄位水平間的距離 表格欄位垂直間的距離 *}
        font-weight:bold;
        table-layout:fixed;     {* 使表格水平布局不受格內文字影響 *}
    }
</style>
<body>
    {* (1) 判斷是否為空值 *}
    {if ! isset($nname)}
        <script> swal({ title: "留言失敗", text: "暱稱不得空白，請重新輸入！", icon: "error", button: "確定 " }).then(function() { history.go(-1); }); </script>
		{return}
    {elseif ! isset($phone)}
        <script> swal({ title: "留言失敗", text: "電話號碼不得空白，請重新輸入！", icon: "error", button: "確定 " }).then(function() { history.go(-1); }); </script>
		{return}
    {elseif ! isset($email)}
        <script> swal({ title: "留言失敗", text: "Email不得空白，請重新輸入！", icon: "error", button: "確定 " }).then(function() { history.go(-1); }); </script>
		{return}
    {elseif ! isset($title)}
        <script> swal({ title: "留言失敗", text: "主題不得空白，請重新輸入！", icon: "error", button: "確定 " }).then(function() { history.go(-1); }); </script>
		{return}
    {elseif ! isset($content)}
        <script> swal({ title: "留言失敗", text: "內容不得空白，請重新輸入！", icon: "error", button: "確定 " }).then(function() { history.go(-1); }); </script>
		{return}
    {/if}

    {* (2) 檢查Email格式 *}
    {if ! $emai_format}
        <script> swal({ title: "留言失敗", text: "Email格式錯誤，請重新輸入！", icon: "error", button: "確定 " }).then(function() { history.go(-1); }); </script>
		{return}
	{/if}

	{* (3) 判斷驗證碼是否正確 *}
	{if ! $verification}
        <script> swal({ title: "留言失敗", text: "驗證碼輸入錯誤！", icon: "error", button: "確定 " }).then(function() { history.go(-1); }); </script>
		{return}
	{/if}

    {* 確認是否發文成功，並顯示結果 *}
    {if $success}
        <script> swal({ title: "留言成功", icon: "success", button: "確定 " }).then(function() { window.location = '{$script.board}'; }); </script>
    {else}
        <script> swal({ title: "留言失敗", icon: "error", button: "確定 " }).then(function() { window.location = '{$script.board}'; }); </script>
    {/if}
</body>
</html>