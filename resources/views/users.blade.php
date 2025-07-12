<style>
    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        padding: 0;
        overflow-x: hidden; /* Prevent horizontal scroll */
    }

    table {
        width: 90%;
        max-width: 800px;
        margin: 50px auto;
        border-collapse: collapse;
    }

    tr {
        border: 1px solid #ccc;
        background-color: lightblue;
    }

    td {
        padding: 10px;
        text-align: left;
        word-break: break-word; /* Prevent long word overflow */
    }

    /* Table heading row */
    tr.heading {
        background-color: lightgreen;
        font-weight: bold;
    }

    /* Mobile responsive */
    @media (max-width: 768px) {
        table, thead, tbody, tr, td {
            display: block;
            width: 100%;
        }

        tr.heading {
            display: none; /* Hide table headings */
        }

        td {
            position: relative;
            padding-left: 50%;
        }

        td::before {
            position: absolute;
            top: 10px;
            left: 10px;
            width: 45%;
            white-space: nowrap;
            font-weight: bold;
            color: #333;
        }

        td:nth-of-type(1)::before { content: "ID"; }
        td:nth-of-type(2)::before { content: "Name"; }
        td:nth-of-type(3)::before { content: "Email"; }
        td:nth-of-type(4)::before { content: "Phone"; }
    }
</style>


<table>
    <tr class="heading">
        <td>ID</td>
        <td>Name</td>
        <td>Email</td>
        <td>Phone</td>
    </tr>

    @foreach ($user as $data)
    <tr>
        <td>{{ $data->id }}</td>
        <td>{{ $data->name }}</td>
        <td>{{ $data->email }}</td>
        <td>{{ $data->phone }}</td>
    </tr>
    @endforeach
</table>
