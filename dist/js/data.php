<?php
$record[0]["title"]="Test 1";
$record[1]["title"]="Test 2";
$record[2]["title"]="Test 3";

$record[0]["start_date"]="2017-11-27";
$record[1]["start_date"]="2017-11-27";
$record[2]["start_date"]="2017-11-27";

$record[0]["end_date"]="2017-11-30";
$record[1]["end_date"]="2017-11-29";
$record[2]["end_date"]="2017-11-28";

$record[0]["id"]="1";
$record[1]["id"]="2";
$record[2]["id"]="3";

for ($i=0; $i<3; $i++) {

    $event_array[] = array(
            'id' => $record[$i]['id'],
            'title' => $record[$i]['title'],
            'start' => $record[$i]['start_date'],
            'end' => $record[$i]['end_date'],
            'allDay' => false
    );

}

echo json_encode($event_array);

exit;

?>