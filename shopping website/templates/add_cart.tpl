<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cart | E-Shopper</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head><!--/head-->
<body>
        {* 如果使用者為會員，允許使用並加入購物車 *}
        {if isset($permission_user) }

            {* 購買數量超出庫存或不足1 *}
            {if $out_range}
                <script> swal({ title: "加入失敗", text: "購買數量不在庫存範圍", icon: "error", button: "確定 " }).then(function() { history.go(-1); }); </script>
                {return}
            {/if}

            {* 購物車已滿 *}
            {if $full_cart}
                <script> swal({ title: "加入失敗", text: "購物車已滿 (最多存放五樣商品)", icon: "error", button: "確定 " }).then(function() { history.go(-1); }); </script>
                {return}
            {/if}

            {* 確認是否加入成功，並顯示結果 *}
            {if $success}
                <script> swal({ title: "成功加入購物車", icon: "success", button: "確定 " }).then(function() { history.go(-1); }); </script>
            {else}
                <script> swal({ title: "加入失敗", icon: "error", button: "確定 " }).then(function() { history.go(-1); }); </script>
            {/if}
        {else}  {* 不為會員，則要求訪客登入*}
            <script> swal({ title: "請先進行登入", icon: "warning", button: "確定 " }).then(function() { window.location = '{{$script.login}}'; }); </script>
        {/if}

</body>
</html>