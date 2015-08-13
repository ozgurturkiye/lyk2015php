<meta charset="UTF-8">
<?php
$students = array(
    /*
    "Arzu Tuyan",
    "Ayşenur Karaaslan",
    "Aziz Günal",
    "Büşra Günay",
    "Büşra Uman",
    "Uğur Arıcı"
    */
    array(
        'name' => array(
            'first_name' => array(
                'adsız' => '22222'
            ),
            'last_name' => 'Tuyan',
            'full_name' => 'Arzu Tuyan',
        ),
        'age' => 21
    ),
    array(
        'name' => array(
            'first_name' => 'Ayşenur',
            'last_name' => 'Karaaslan',
            'full_name' => 'Ayşenur Karaaslan',
        ),
        'age' => 23
    ),
    array(
        'name' => array(
            'first_name' => 'Aziz',
            'last_name' => 'Günal',
            'full_name' => 'Aziz Günal',
        ),
        'age' => 24
    ),
    array(
        'name' => array(
            'first_name' => 'Büşra',
            'last_name' => 'Günay',
            'full_name' => 'Büşra Günay',
        ),
        'age' => 25
    ),
    array(
        'name' => array(
            'first_name' => 'Büşra',
            'last_name' => 'Uman',
            'full_name' => 'Büşra Uman',
        ),
        'age' => 26
    ),
);
foreach($students as $student){
    echo
        $student['name']['first_name'] .
        " - " .
        $student['name']['last_name'] .
        " - " .
        $student['age'] .
        "<br>";
}
echo "<pre>";
print_r($students);

echo $students[0]['name']['first_name']['adsız'];  //örnek
?>