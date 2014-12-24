<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>php 汉字繁简体互转扩展:openccpp</title>
    </head>
    <body>
        <?php
        $openccpp = new openccpp();
        $openccpp->set_config(__DIR__ . '/opencc/config/t2s.json');
        $str = "簡體到繁體（臺灣正體標準）並轉換爲臺灣常用詞彙";
        ?>
        <div>
            <h3>繁体原文</h3>
            <p><?php echo $str; ?></p>
            <h3>转为简体</h3>
            <p><?php echo $tmp = $openccpp->convert($str); ?></p>
        </div>
        <?php
        $openccpp->set_config(__DIR__ . '/opencc/config/s2t.json');
        ?>
        <div>
            <h3>还原繁体</h3>
            <p><?php echo $openccpp->convert($tmp) ?></p>
        </div>
    </body>
</html>
