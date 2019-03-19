<?php
$asd = "SELECT total,jumlah FROM sums";
$result = $conn->query($asd);
$total = "";
$jumlah = "";
$p= $total - $jumlah;

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $total = $row["total"];
        $jumlah = $row["jumlah"];
    }
} else {
    echo "0 results";
}

?> 