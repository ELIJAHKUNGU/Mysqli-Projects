<h1>Sales Reports </h1>
<h3>Processed</h3>
<?php 
global $userClass,$uid;

$sql = "SELECT *
        FROM `sales` 
        WHERE paid = 1
        ";
if($result = $db->db_query($sql)){
        $no_rows = $db->db_num($sql);	
        if($no_rows){
            echo '
                <div align="center">
                    <table id="pm" border="1" >
                    <thead>
                        <tr>
                            <th></th>
                            <th>Trasaction ID</th>
                            <th>User ID</th>
                            <th>Comment</th>
                            <th>Status</th>
                            <th>Amount</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                    ';
                    $i=1;
                    $totalsales = 0;
                    while($row = $result->fetch_assoc()){
                        $date = Rdate_min($row['date_bought']);
                        $paid = ($row['paid'] == 1) ? "paid" : "not paid";
                        $amount = $userClass->getTotalPrice($row['transactionID']);
                        echo '
                        <tr>
                            <td>'.$i.'</td>
                            <td>'.$row['transactionID'].'</td>
                            <td>'.$row['userID'].'</td>
                            <td>'.$row['comment'].'</td>
                            <td align="center">'.$paid.'</td>
                            <td>'.$amount.'</td>
                            <td>'.$date.'</td>
                        </tr>
                            ';
                        $i++;
                        $totalsales +=$amount;
                    }
                echo '</tbody>
                    <tr>
                        <td></td>
                        <td colspan="4" align="right" style="padding:10px;font-weight:bold;">TOTAL</td>
                        <td colspan="4" style="padding:10px;font-weight:bold;">'.$totalsales.'</td>
                    </tr>
                     </table>
                   </div>';
        }
}else{
    echo 'Oops! No customers to diplay';
}
?>

<h3>Unprocessed</h3>
<?php 
$sql = "SELECT *
        FROM `sales` 
        WHERE paid = 0
        ";
if($result = $db->db_query($sql)){
        $no_rows = $db->db_num($sql);	
        if($no_rows){
            echo '
                <div align="center">
                    <table id="pm" border="1" >
                    <thead>
                        <tr>
                            <th></th>
                            <th>Trasaction ID</th>
                            <th>User ID</th>
                            <th>Comment</th>
                            <th>Status</th>
                            <th>Amount</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                    ';
                    $i=1;
                    $totalunprocessed = 0;
                    while($row = $result->fetch_assoc()){
                        $date = Rdate_min($row['date_bought']);
                        $paid = ($row['paid'] == 1) ? "paid" : "not paid";
                        $uamount = $userClass->getTotalPrice($row['transactionID']);
                        $totalunprocessed += $uamount;
                        echo '
                        <tr>
                            <td>'.$i.'</td>
                            <td>'.$row['transactionID'].'</td>
                            <td>'.$row['userID'].'</td>
                            <td>'.$row['comment'].'</td>
                            <td align="center">'.$paid.'</td>
                            <td>'.$uamount.'</td>
                            <td>'.$date.'</td>
                        </tr>
                            ';
                        $i++;
                    }
                echo '</tbody>
                    <tr>
                        <td></td>
                        <td colspan="4" align="right" style="padding:10px;font-weight:bold;">TOTAL</td>
                        <td colspan="4" style="padding:10px;font-weight:bold;">'.$totalunprocessed.'</td>
                    </tr>
                     </table>
                   </div>';
        }
}else{
    echo 'Oops! No customers to diplay';
}
?>
<br clear="left">
<br clear="left">