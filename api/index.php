<?php
include('../config/common.php');
@header('Content-Type: application/json; charset=UTF-8');

function validateInput($input) {
    return trim(strip_tags(daddslashes($input)));
}

function checkUser($DB, $uid, $key) {
    $row = $DB->get_row("SELECT * FROM qingka_wangke_user WHERE uid='$uid' LIMIT 1");
    if ($row['key'] == '0') {
        return array("code" => -1, "msg" => "你还没有开通接口哦");
    } elseif ($row['key'] != $key) {
        return array("code" => -2, "msg" => "密匙错误");
    }
    return $row;
}

$act = isset($_GET['act']) ? daddslashes($_GET['act']) : null;
switch ($act) {
    case 'getmoney':
        $uid = validateInput($_POST['uid']);
        $key = validateInput($_POST['key']);
        if ($uid == '' || $key == '') {
            exit(json_encode(array("code" => 0, "msg" => "uid或者key为空")));
        }
        $row = checkUser($DB, $uid, $key);
        if (isset($row['code'])) {
            exit(json_encode($row));
        } else {
            $result = array(
                'code' => 1,
                'msg' => '查询成功',
                'user' => $row['user'],
                'name' => $row['name'],
                'money' => $row['money'],
            );
            exit(json_encode($result));
        }
        break;
    case 'class':
        $uid = validateInput($_POST['uid']);
        $key = validateInput($_POST['key']);
        if ($uid == '' || $key == '') {
            exit(json_encode(array("code" => 0, "msg" => "uid或者key为空")));
        }
        $row = checkUser($DB, $uid, $key);
        if (isset($row['code'])) {
            exit(json_encode($row));
        } else {
            $a = $DB->query("SELECT * FROM qingka_wangke_class WHERE status=1 ORDER BY sort DESC");
            $data = [];
            while ($row = $DB->fetch($a)) {
                $data[] = array(
                    'sort' => $row['sort'],
                    'cid' => $row['cid'],
                    'name' => $row['name'],
                    'content' => $row['content'],
                    'status' => $row['status'],
                    'price' => $row['price'],
                    'price5' => $row['price'] + 0.5,
                    'jiage' => round($row['price'] * $row1['addprice'], 2)
                );
            }
            array_multisort(array_column($data, 'sort'), SORT_ASC, array_column($data, 'cid'), SORT_DESC, $data);
            $data = array('code' => 1, 'data' => $data);
            exit(json_encode($data));
        }
        break;
    // Repeat similar refactor for other cases...
    // ...

    default:
        exit(json_encode(array("code" => -1, "msg" => "无效的操作")));
}

?>
