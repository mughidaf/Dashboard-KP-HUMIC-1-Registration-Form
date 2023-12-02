<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/MoreOption.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <h1>{{$form->judul}}</h1>
    <table id="example" class="display table table-bordered table-hover nowrap" cellspacing="0" width="100%">
        <thead>
            <tr> 
                <th>Nama</th>
                @foreach ($form->questions as $item)
                    @if (!preg_match('/\b(?:name|nama)\b/i', $item->question))
                        <th>{{$item->question}}</th>
                    @endif
                @endforeach

            </tr>
        </thead>
            <tbody>
                @php $i = 0; @endphp
                @foreach ($form->questions[0]->answers as $count)
                <tr>
                    @php
                        if ($identitas != null) {
                            $nama = $identitas->Answers[$i]->answer;
                        }
                    @endphp
                    @if ($identitas != null)
                        <td>{{$nama}}</td>
                    @else
                        <td>-</td>
                    @endif
                    @foreach ($form->questions as $item)
                        @if (!preg_match('/\b(?:name|nama)\b/i', $item->question))
                        {{-- <td>{{ $item->answers[$i]->answer }}</td> --}}
                            @if ($item->type == "file")
                                <td>
                                    <a href="/Storage/{{$item->answers[$i]->answer}}">Click to see the document</a>
                                </td>
                            @elseif ($item->type == "ttd")
                                <td>
                                    <img src="{{$item->answers[$i]->answer}}" alt="sadsa">
                                </td>
                            @else   
                                <td>{{$item->answers[$i]->answer}}</td>
                            @endif
                        @endif
                    @endforeach
                </tr>
                    @php $i++; @endphp
                @endforeach
            </tbody>
    </table>
    
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="/MoreOption.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.7.0/js/dataTables.select.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>
    
    
</body>
</html>