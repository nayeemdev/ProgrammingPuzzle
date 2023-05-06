<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puzzle 1 for rendering html table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            text-align: left;
            padding: 8px;
            border: 1px solid black;
        }
        th {
            background-color: #ddd;
        }
        tr:hover {
            background-color: #f3f3f3;
        }
    </style>
</head>
<body>
    <h4>Multiple rows</h4>
    <?php
        require_once '../../vendor/autoload.php';
        use ProgrammingPuzzle\Puzzle1\ArrayObject\DisplayableArray;

        $data = [
            [
                'name' => 'Mr Rahim',
                'email' => 'mr.rahim@mail.com',
                'phone' => '01700000000',
                'address' => 'Dhaka, Bangladesh',
                'occupation' => 'Software Engineer'
            ],
            [
                'name' => 'Mr Karim',
                'email' => 'mr.karim@mail.com',
                'phone' => '01700000001',
                'address' => 'Chittagong, Bangladesh',
                'occupation' => 'Software Architect'
            ],
            [
                'name' => 'Mr Malek',
                'email' => 'mr.malek@mail.com',
                'phone' => '01700000002',
                'address' => 'Khulna, Bangladesh',
                'occupation' => 'Software Developer'
            ],
            [
                'name' => 'Mr Salam',
                'email' => 'mr.salam@mail.com',
                'phone' => '01700000003',
                'address' => 'Khulna, Bangladesh',
                'occupation' => 'Businessman'
            ]
        ];
        $displayableArray = new DisplayableArray($data);
        echo $displayableArray->displayAsTable();
    ?>

    <h4>Single row</h4>
    <?php
        $table = new DisplayableArray();
        $table['name'] = 'Mr Sattar';
        $table['email'] = 'mr.sattar@mail.com';
        $table['age'] = 32;
        $table['occupation'] = 'Web Developer';
        echo $table->displayAsTable();
    ?>

    <h4>Empty data</h4>
    <?php
        $table = new DisplayableArray();
        echo $table->displayAsTable();
    ?>
</body>
</html>