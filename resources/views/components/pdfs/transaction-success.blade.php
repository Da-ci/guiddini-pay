<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>INVOICE</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <style>
        * {
            font-family: DejaVu Sans;
            font-size: 12px;
        }

        .clearfix:after {
            content: "";
            display: table;
            clear: both;
        }

        a {
            color: #704cf5;
            text-decoration: none;
        }

        body {
            position: relative;
            width: 19cm;
            height: 29.7cm;
            margin: 0 auto;
            color: #555555;
            background: #FFFFFF;
            font-family: Arial, sans-serif;
            font-size: 13px;
            font-family: SourceSansPro;
        }

        header {
            padding: 10px 0;
            margin-bottom: 20px;
            border-bottom: 1px solid #AAAAAA;
        }

        #logo {
            float: left;
            margin-top: 8px;
        }

        #logo img {
            height: 70px;
        }

        #company {
            float: right;
            text-align: right;
        }

        #invoice-header {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
            width: 100%
        }

        #details {
            margin-bottom: 30px;
        }

        #client {
            padding-left: 6px;
            border-left: 4px solid #704cf5;
            float: left;
        }

        #Signature {
            padding-left: 6px;
            /* // border-left: 4px solid #704cf5; */
            float: left;
        }

        #client .to {
            color: #777777;
        }

        h2.name {
            font-size: 1.4em;
            font-weight: normal;
            margin: 0;
        }

        #invoice {
            float: right;
            text-align: right;
        }

        #invoice h1 {
            color: #704cf5;
            font-size: 2.4em;
            line-height: 1em;
            font-weight: normal;
            margin: 0 0 10px 0;
        }

        #invoice .date {
            font-size: 1.1em;
            color: #918f8f;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
            margin-bottom: 20px;
        }

        table th,
        table td {
            padding: 12px;
            background: #DDDDDD;
            text-align: center;
            border-bottom: 1px solid #FFFFFF;
        }

        table th {
            white-space: nowrap;
            font-weight: normal;
        }

        table td {
            text-align: right;
        }

        table .desc {
            text-align: left;
            width: 150px;
        }

        table .unit {
            background: #f3f3f3;
        }

        table td.unit,
        table td.qty,
        table td.total {
            font-size: 1em;
        }

        table tbody tr:last-child td {
            border: none;
        }

        table tfoot tr:first-child td {
            border-top: none;
        }

        table tfoot tr td:first-child {
            border: none;
        }

        #notices {
            padding-left: 6px;
            border-left: 4px solid #704cf5;
        }

        #notices .notice {
            font-size: 1.2em;
        }

        ul li {
            display: inline;
        }

        ul {
            list-style-type: circle;
        }

        ul.a {
            list-style-type: circle;
        }
    </style>
</head>

<body>
    <header class="clearfix">
        <h2 style="text-align: center;">Reçu de paiement éléctronique</h2>

        @if (isset($guiddiniIcon))
            <div id="logo">
                <img style="width: 100%; max-width: 140px; height: 50px;" src="data:image/png;base64,{{ $guiddiniIcon }}">
            </div>
        @endif

        @if (isset($applicationLogo))
            <img style="width: 100%; max-width: 75px; height: 75px; float: right;"
                src="data:image/png;base64,{{ $applicationLogo }}">
        @endif
    </header>
    <main>
        <div id="invoice-header">
            <div id="details" class="clearfix" style="float: left;">
                <div id="Signature">
                    <h3>L'entreprise: {{ $companyName ?? "Guiddini" }}</h3>
                    <div>Téléphone: {{ $phone ?? "0770774999" }}</div>
                    <div>Email: {{ $email ?? "mourad@guiddini.com" }}</div>
                </div>
            </div>
        </div>

        <br><br>
        <h3 style="margin-top: 90px;">Détails de paiement</h3>

        <table border="0" cellspacing="0" cellpadding="0">
            <tbody>
                <tr>
                    <td class="desc">Méthode de paiement</td>
                    <td class="unit">{{ $paymentMethod }}</td>
                </tr>
                <tr>
                    <td class="desc">Numéro de commande</td>
                    <td class="unit">{{ $orderNumber }}</td>
                </tr>
                <tr>
                    <td class="desc">ID de transaction</td>
                    <td class="unit">{{ $orderId }}</td>
                </tr>
                <tr>
                    <td class="desc">Numéro d'autorisation</td>
                    <td class="unit">{{ $approvalCode }}</td>
                </tr>
                <tr>
                    <td class="desc">Date et heure</td>
                    <td class="unit">{{ $dateTime }}</td>
                </tr>
                <tr>
                    <td class="desc">Montant total</td>
                    <td class="unit">{{ $amount }} DA</td>
                </tr>
            </tbody>
        </table>
    </main>

    <footer class="clearfix" style="text-align: center;">
        <h5 style="text-align: center;">Si vous rencontrez un problème avec le paiement, Contactez la SATIM</h5>

        @if ($greenNumberLogo)
            <div style="text-align: center;">
                <img style="width: 100%; max-width: 140px; height: 50px; display: block; margin: 0 auto;"
                    src="data:image/png;base64,{{ $greenNumberLogo }}">
            </div>
        @endif
    </footer>
</body>

</html>