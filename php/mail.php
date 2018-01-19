    <?php

    $post = $_POST;

    $to = "macpirog@gmail.com";

    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=utf-8\r\n";

    if ($post) {
        $subject = 'Заголовок письма';
        $message = $post['phone']."<br>".
                    $post['name']."<br>".
                    $post['second_name'];
        mail($to, $subject, $message, $headers);
    };