<?php
if (!isset($_GET['foo'])) {
        // Client
        #$ch = curl_init('http://localhost/test/test_timeout.php?foo=bar');
        $ch = curl_init('http://10.113.196.62:50000/mxportal/images/win_expand.gif');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_NOSIGNAL, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT_MS, 300);
        $data = curl_exec($ch);
        $curl_errno = curl_errno($ch);
        $curl_error = curl_error($ch);
        curl_close($ch);

        if ($curl_errno > 0) {
                echo "cURL Error ($curl_errno): $curl_error\n";
        } else {
                echo "Data received: $data\n";
        }
} else {
        // Server
        sleep(10);
        echo "Done.";
}
?>
