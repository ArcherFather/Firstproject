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
    {* 判斷物品是否有庫存 *}
    {if $out_range}
        <script> swal({ title: "購買失敗", text: "商品 :{{$name|truncate:13}} 的庫存不足", icon: "error", button: "確定 " }).then(function() { history.go(-1); }); </script>
		{return}
	{/if}

	{if $success}
        <script> swal({ title: "購買成功", text: "感謝您的支持", icon: "success", buttons: false}); </script>
        <meta http-equiv=REFRESH CONTENT=1;url={{$script.cart}}>
	{else}
        <script> swal({ title: "購買失敗", text: "請稍後再試", icon: "error", button: "確定 " }).then(function() { history.go(-1); }); </script>
        {return}
	{/if}

</body>
</html>