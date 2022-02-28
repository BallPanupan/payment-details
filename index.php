<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Payment-Email</title>
</head>
<body>
    <?php

        $details = [];

        $details[0] = [
            'title' => 'The details of your order',
            'details' => [
                'Order Number' => 'payld-2cef733c',
                'Campaign ID' => 'Campaign Name',
                'Pricing Model' => 'Cost Per Intent(CPIn)',
                'Campaign budget' => '50 USD per day',
                'Time Period' => '27 May 2022-28 jul 2022'
            ]
        ];

        $details[1] = [
            'title' => 'Payment Method',
            'details' => [
                'Total Name' => '$3,000',
                'Cost Per Intent' => '$3',
                'Guarantee high-intent audience:' => '$1,000',
                'Budget per day' => '100',
                'Campaign duration' => '30 days',
            ]
        ];

        $details[2] = [
            'title' => 'Payment Method',
            'details' => [
                'Account Name' => 'Reverse Ads Co., Ltd',
                'Account Number' => '089-218972-6',
                'Bank Name' => 'the siam commercial Bank',
                'Bank Address' => 'Thanonchaofa...',
                'Swift Code' => '12345678',
                'Company Address' => '50 USD per day',
                'Tax ID' => '0835558014876'
            ]
        ];

        $logo_img = "";
        $bg_img = "";

        $payment_details = "
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
            font-family: sans-serif;
            background-image: url($bg_img);
        ";
        $section_h2 = 'color: #6600CC;';
        $text_details = 'font-size: 18px; font-weight: bold; color: #919191; padding: 15px 0px; width: 310px;';
        $border = 'border: 1px solid; border-color: #d7d7d7; padding: 10px 15px; border-radius: 5px;';
        $section = 'margin-bottom: 30px;';

        $logo = "width: 400px;margin-left: auto;margin-right: auto;";
        $text_header = 'text-align: center; color: #6e6e6e;';

    ?>

    <div class='payment-details' style='<?=$payment_details?>'>
        <div class='header' style=''>
            <div class='logo' style="<?=$logo ?>">
                <img src="<?=$logo_img ?>" alt="">
            </div>
            <div class='text-header' style=''><h1 style='<?=$text_header ?>'>Payment Details</h1></div>
        </div>

        <?php
            foreach ($details as $key => $data) {
        ?>
                <div class='title' style='<?=$section_h2 ?>'>
                    <h2><?= $data['title'] ?></h2>
                </div>
                <table style='width:100%'>
                <?php 
                    foreach ($data['details'] as $key => $result) {
                ?>
                        <tr>
                            <td style='<?php echo $text_details?>'><?=$key?></td>
                            <td style=''>
                                <div style='<?php echo $border ?>'><?=$result?></div>
                            </td>
                        </tr>
                <?php
                    }
                ?>
                </table>
        <?php
            }
        ?>
    </div>
</body>
</html>