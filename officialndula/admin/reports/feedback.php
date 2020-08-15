<h1>Customer Feedback</h1>

<?php 
$sql = "SELECT *
        FROM `feedback` 
        WHERE status = 0
        ORDER BY date_sent DESC
        ";
if($result = $duka->db_query($sql)){
        $no_rows = $db->db_num($sql);	
        if($no_rows){
            echo '
                <div align="center">
                    <table id="pm" border="1" >
                    <thead>
                        <tr>
                            <th></th>
                            <th>Name</th>
                            <th>Phonet</th>
                            <th>Emai</th>
                            <th>Message</th>
                            <th>Mark as read</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                    ';
                    $i=1;
                    while($row = $result->fetch_assoc()){
                        $date = Rdate_min($row['date_sent']);
                        $status = ($row['status'] == 0) ? "class='unread'" : "";
                        echo '
                        <tr id="feed_'.$row['id'].'" '.$status.'>
                            <td>'.$i.'</td>
                            <td>'.$row['name'].'</td>
                            <td>'.$row['phone'].'</td>
                            <td>'.$row['email'].'</td>
                            <td>'.$row['message'].'</td>
                            <td align="center"><input type="checkbox" name="read" onclick="markAsRead('.$row['id'].')" data-id="'.$row['id'].'"/></td>
                            <td>'.$date.'</td>
                            <td></td>
                        </tr>
                            ';
                        $i++;
                    }
                echo '</tbody>
                     </table>
                   </div>';
        }else{
            echo 'No unread customer feedback messages';
        }
}else{
    echo 'Oops! No customers to diplay';
}
?>
<h1>Old Messages</h1>
<?php 
$sql = "SELECT *
        FROM `feedback` 
        WHERE status = 1
        ORDER BY date_sent DESC
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
                            <th>Name</th>
                            <th>Phonet</th>
                            <th>Emai</th>
                            <th>Message</th>
                            <th>Status</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                    ';
                    $i=1;
                    while($row = $result->fetch_assoc()){
                        $date = Rdate_min($row['date_sent']);
                        $status = ($row['status'] == 0) ? "class='unread'" : "";
                        echo '
                        <tr id="feed_'.$row['id'].'" '.$status.'>
                            <td>'.$i.'</td>
                            <td>'.$row['name'].'</td>
                            <td>'.$row['phone'].'</td>
                            <td>'.$row['email'].'</td>
                            <td>'.$row['message'].'</td>
                            <td align="center">read</td>
                            <td>'.$date.'</td>
                            <td></td>
                        </tr>
                            ';
                        $i++;
                    }
                echo '</tbody>
                     </table>
                   </div>';
        }else{
            echo 'No Old customer feedback messages';
        }
}else{
    echo 'Oops! No customers to diplay';
}
?>
<br clear="left">