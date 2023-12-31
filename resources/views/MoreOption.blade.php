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
    <h1>{{$question->question}}</h1>
    <table id="example" class="display table table-bordered table-hover nowrap" cellspacing="0" width="100%">
        <thead>
            <tr> 
                <th>ID</th>
                <th>Name</th>
                <th>Response</th>

            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>
                    <p id="responsesCount">Number of responses : <span>{{count($question->Answers)}}</span></p>
                </th>
                <th></th>
                <th></th>
                
            </tr>
        </tfoot>
            <tbody>
                <!--1 tr satu kolum-->
                @for ($i = 0; $i < count($question->Answers); $i++)
                    @php
                        $respon = $question->Answers[$i];
                        if ($identitas != null) {
                            $nama = $identitas->Answers[$i]->answer;
                        }
                    @endphp
                    <tr>
                        <td >{{$respon->subID}}</td>
                        
                        @if ($identitas != null)
                            <td>{{$nama}}</td>
                        @else
                            <td>-</td>
                        @endif

                        @if ($question->type == "file")
                            <td>
                                <a href="/Storage/{{$respon->answer}}">Click to see the document</a>
                            </td>
                        @elseif ($question->type == "ttd")
                            <td>
                                <img src="{{$respon->answer}}" alt="sadsa">
                            </td>
                        @else   
                            <td>{{$respon->answer}}</td>
                        @endif
                    </tr>
                @endfor
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