<?php
$jsonTestCases = file_get_contents('testcases.json');
$testCases = json_decode($jsonTestCases);
foreach($testCases as $caseName => $caseData) {
    echo "-----------------------------------<br />";
    echo $caseName . ' wordt getest<br />';
    echo 'expected output: <br />';
    echo str_replace("\n", '<br />', str_replace(' ', '&nbsp;', $caseData->expectedOutput)) . '<br /><br />';

    $input = explode("\n", $caseData->input);

    echo "-----------------------------------<br />";
    echo "actual output:<br />";

    extractOutputFromInput($input);
}

function extractOutputFromInput($lines)
{
    //todo: input is vervelend te converteren op de conventie manier, makkelijkere manier van inputconverting inbouwen/meerdere input velden toevoegen voor deze case
//    fscanf(STDIN, "%d", $L);
//    fscanf(STDIN, "%d", $H);
//    $T = stream_get_line(STDIN, 256 + 1, "\n");
//    $input = str_split($T);
//
//    $alphabet = range('A', 'Z');
//    $alphabetSmall = range('a', 'z');
//
//    $textIndex = [];
//    foreach($input as $index => $letter) {
//        $textIndex[$index] = array_search($letter, $alphabet);
//        if ($textIndex[$index] === false) {
//            $textIndex[$index] = array_search($letter, $alphabetSmall);
//        }
//    }
//
//    for ($i = 0; $i < $H; $i++) {
//        $output[$i] = '';
//        $ROW = stream_get_line(STDIN, 1024 + 1, "\n");
//        $text = '';
//        foreach($textIndex as $index) {
//            if($index === false) {
//                if($index == 0) {
//                    $text .= substr($ROW, 26 * $L, $L);
//                }
//            } else {
//                $text .= substr($ROW, $index * $L, $L);
//            }
//        }
//        $output[$i] .= $text;
//    }
//
//    foreach($output as $outputLine) {
//        echo $outputLine . '
//';
//    }
}
