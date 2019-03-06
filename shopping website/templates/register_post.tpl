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
    {if ! isset($account)}
        <script> swal({ title: "註冊失敗", text: "帳號名稱不得空白，請重新輸入!", icon: "error", button: "確定 " }).then(function() { history.go(-1); }); </script>
		{return}
    {elseif ! isset($password)}
        <script> swal({ title: "註冊失敗", text: "密碼不得空白，請重新輸入！", icon: "error", button: "確定 " }).then(function() { history.go(-1); }); </script>
		{return}
    {elseif ! isset($name)}
        <script> swal({ title: "註冊失敗", text: "姓名不得空白，請重新輸入！", icon: "error", button: "確定 " }).then(function() { history.go(-1); }); </script>
		{return}
    {elseif ! isset($phone)}
        <script> swal({ title: "註冊失敗", text: "電話號碼不得空白，請重新輸入！", icon: "error", button: "確定 " }).then(function() { history.go(-1); }); </script>
		{return}
    {elseif ! isset($email)}
        <script> swal({ title: "註冊失敗", text: "Email不得空白，請重新輸入！", icon: "error", button: "確定 " }).then(function() { history.go(-1); }); </script>
		{return}
    {/if}
     
    {* (2) 判斷Account是否重複 *}
    {if ! $ac_unique}
        <script> swal({ title: "註冊失敗", text: "此帳號名稱已存在，請更換！", icon: "error", button: "確定 " }).then(function() { history.go(-1); }); </script>
		{return}
    {/if}

    {* (3) 檢查Account格式 *}
    {if ! $ac_format}
        <script> swal({ title: "註冊失敗", text: "帳號格式錯誤，只能使用英文字母或數字!", icon: "error", button: "確定 " }).then(function() { history.go(-1); }); </script>
		{return}
	{/if}

    {* (4) 檢查Password格式 *}
    {if ! $pd_format}
        <script> swal({ title: "註冊失敗", text: "密碼格式錯誤，須為同時包含數字與字母，且長度為6~20的字串!", icon: "error", button: "確定 " }).then(function() { history.go(-1); }); </script>
		{return}
	{/if}

    {* (5) 檢查Email格式 *}
    {if ! $emai_format}
        <script> swal({ title: "註冊失敗", text: "Email格式錯誤，請重新輸入!", icon: "error", button: "確定 " }).then(function() { history.go(-1); }); </script>
		{return}
	{/if}

	{* (6) 判斷驗證碼是否正確 *}
	{if ! $verification}
        <script> swal({ title: "註冊失敗", text: "驗證碼輸入錯誤!", icon: "error", button: "確定 " }).then(function() { history.go(-1); }); </script>
		{return}
	{/if}

	{* 確認帳號是否註冊成功，並顯示結果 *}
	{if $success}
        <script> swal({ title: "註冊成功", icon: "success", button: "返回登入頁面 " }).then(function() { window.location = '{$script.login}'; }); </script>
	{else}
		<script> swal({ title: "註冊失敗", icon: "error", button: "確定 " }).then(function() { history.go(-1); }); </script>
	{/if}

</body>
</html>