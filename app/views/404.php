<?php http_response_code(404); ?>

<?php self::template('templates/index'); ?>

<?php self::section('content'); $title = "404";?>

<h3>Página não encontrada!</h3>

<style type="text/css">
    body{background: #F6F6F6;}

    h3{text-align: center;margin:auto;margin-top: 40vh;font-family:Tahoma;font-size: 50px;}
</style>

<?php self::end('content'); ?>