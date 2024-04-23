<?php

// Data from the image
$data = [
    ['No Urut' => 1, 'Poin' => 75, 'Siswa' => 'Adi', 'NIS' => '2345'],
    ['No Urut' => 2, 'Poin' => 80, 'Siswa' => 'Joni', 'NIS' => '65'],
    ['No Urut' => 3, 'Poin' => 70, 'Siswa' => 'Jihan', 'NIS' => ''],
    ['No Urut' => 4, 'Poin' => 85, 'Siswa' => 'Aya', 'NIS' => ''],
    ['No Urut' => 5, 'Poin' => 90, 'Siswa' => 'Ita', 'NIS' => '6'],
    ['No Urut' => 6, 'Poin' => 95, 'Siswa' => 'Budi', 'NIS' => '7'],
    ['No Urut' => 7, 'Poin' => 65, 'Siswa' => 'Tini', 'NIS' => '8'],
    ['No Urut' => 8, 'Poin' => 65, 'Siswa' => 'Sari', 'NIS' => ''],
];

// Display the name and score of the student with the given number
function displayStudentByNumber($number, $data) {
    foreach ($data as $student) {
        if ($student['No Urut'] == $number) {
            echo "Nama siswa dengan nomor urut $number adalah " . $student['Siswa'] . " dengan poin " . $student['Poin'] . PHP_EOL."<br>";
            break;
        }
    }
}

// Display the names of all students with the given score
function displayStudentsByScore($score, $data) {
    $students = [];
    foreach ($data as $student) {
        if ($student['Poin'] == $score) {
            $students[] = $student['Siswa'];
        }
    }
    if (count($students) > 0) {
        echo "Nama siswa yang memiliki poin $score adalah " . implode(', ', $students) . PHP_EOL."<br>";
    } else {
        echo "Tidak ada siswa yang memiliki poin $score" . PHP_EOL."<br>";
    }
}

// Display the names of all students with the given score
displayStudentByNumber(5, $data);
displayStudentsByScore(90, $data);
displayStudentsByScore(100, $data);

?>