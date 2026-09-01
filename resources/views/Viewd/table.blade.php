<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Nilai</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px 12px;
            text-align: center;
        }
        .bg-grey {
            background-color: gray;
            color: white;
        }
        .bg-yellow {
            background-color: yellow;
        }
        .text-left {
            text-align: left;
        }
    </style>
</head>
<body>

    <table>
        <thead>
            <tr>
                <th rowspan="2" class="bg-grey">Nama</th>
                <th colspan="3" class="bg-yellow">Nilai</th>
            </tr>
            <tr>
                <th>Kimia</th>
                <th>Fisika</th>
                <th>Biologi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="text-left">Robby</td>
                <td>76</td>
                <td>80</td>
                <td>81</td>
            </tr>
            <tr>
                <td class="text-left">Rendi</td>
                <td>84</td>
                <td>70</td>
                <td>75</td>
            </tr>
            <tr>
                <td class="text-left">Alfian</td>
                <td>96</td>
                <td>70</td>
                <td>71</td>
            </tr>
        </tbody>
    </table>

    <p><a href="{{ ("/form/table/welcome" ) }}">Lanjutkan</a></p>

</body>
</html>