<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style type="text/css">
        .tg  {border-collapse:collapse;border-color:#9ABAD9;border-spacing:0;}
        .tg td{background-color:#EBF5FF;border-color:#9ABAD9;border-style:solid;border-width:0px;color:#444;
            font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;word-break:normal;}
        .tg th{background-color:#409cff;border-color:#9ABAD9;border-style:solid;border-width:0px;color:#fff;
            font-family:Arial, sans-serif;font-size:14px;font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
        .tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top}
    </style>
</head>
<body>


<table class="tg">
    <thead>
    <tr>
        <th class="tg-0pky">Question</th>
        <th class="tg-0pky">Answer</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td class="tg-0pky">Heeft jouw bedrijf een website?</td>
        <td class="tg-0pky">{{$data[1]['selection'] ?? ''}}</td>
    </tr>
    <tr>
        <td class="tg-0pky">Wat is je domeinnaam?</td>
        <td class="tg-0pky">{{$data[2]['domain'] ?? ''}}</td>
    </tr>
    <tr>
        <td class="tg-0pky">Hoeveel bezoekers heeft {{$data[2]['domain'] ?? ''}} per maand?</td>
        <td class="tg-0pky">{{$data[3]['customer'] ?? ''}}</td>
    </tr>
    <tr>
        <td class="tg-0pky">Waarvoor zou je de Conversiebot willen gebruiken?</td>
        <td class="tg-0pky">{{ isset($data[4]['goal']) ? implode(', ', $data[4]['goal']) : ''}}</td>
    </tr>
    <tr>
        <td class="tg-0pky">Name</td>
        <td class="tg-0pky">{{$data[5]['name'] ?? ''}}</td>
    </tr>
    <tr>
        <td class="tg-0pky">Email</td>
        <td class="tg-0pky">{{$data[5]['email'] ?? ''}}</td>
    </tr>
    </tbody>
</table>

</body>
</html>
