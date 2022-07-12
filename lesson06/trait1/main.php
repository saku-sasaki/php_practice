<?php
declare(strict_types=1);
?>
<body>
<?php
    require_once dirname(__FILE__) . '/MemberModel.php';
    $menberModel = new MemberModel();
    $menberModel->create('001');
    $menberModel->delete('001');
    //MemberModelが生成したログを画面に表示する
    echo nl2br(file_get_contents('MemberModel.log'));
?>
</body>
