<?php
// Q1 tic-tac問題
function judge_num(){
    
    echo "1から100までのカウントを開始します " . "\n" . "\n" ;
    
    for( $i=1 ; $i<101 ; $i++ )
    {
        if( $i%4 === 0 && $i%5 === 0 )
        {
            echo "tic-tac" . "\n" ;
        } elseif( $i%4 === 0 ) {
            echo "tic" . "\n" ;
        } elseif ( $i%5 === 0 ) {
            echo "tac" . "\n" ; 
        } else {
            echo $i ."\n" ;
        }
    }
}

judge_num();

// Q2 多次元連想配列
//問題1
echo $personalInfos[1]['name'] . "の電話番号は" . $personalInfos[1]['tel'] . "です。";

//問題2
$num = 1 ;

foreach ( $personalInfos as $order ) {
    
    echo $num . "番目の" . $order["name"] . "さんのメールアドレスは" . $order["mail"] . "で、電話番号は" . $order["tel"] . "です。" . "\n";
    
    $num++;
}

//問題3
$ageList = [25, 30, 18];

$i=0;

foreach ($personalInfos as $key => $value ) {
    $personalInfos[$key]["age"] = $ageList[$i];
    $i++;
}

var_dump($personalInfos);

// Q3 オブジェクト-1
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this -> studentId = $id;
        $this -> studentName = $name;
    }

    public function attend()
    {
        echo '授業に出席しました。';
    }
    // 追記
    function introduce() {
        echo "学籍番号" . $this->studentId . "番の生徒は" . $this->studentName . "です。";
    }
}

$yamada = new Student(120,"山田");

$yamada -> introduce();

// もう一個　本来の想定としてはこちらな気がします。
$yamada = new Student(120,"山田");

echo "学籍番号" . $yamada-> studentId . "番の生徒は" . $yamada-> studentName . "です。";

// Q4 オブジェクト-2
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this -> studentId = $id;
        $this -> studentName = $name;
    }

    public function attend($class)
    {
        echo $this -> studentName . "は" . $class . "の授業に参加しました。学籍番号は" . $this -> studentId . "です。";
    }
}

$yamada = new Student(120, '山田');
$yamada -> attend('PHP');

// Q5 定義済みクラス
//問題1
$onemonth = new DateTime();

$onemonth -> modify("-1 month");

echo $onemonth->format('Y-m-d');

//問題2
$past = new DateTime("1992-4-25");
$today = new DateTime('today');

$diff = $past->diff($today);

echo "あの日から" . $diff -> days . "日経過しました。";
?>